<?php
/**
 * Created by PhpStorm.
 * User: avdesign
 * Date: 08/12/19
 * Time: 10:05
 */

namespace App\Services\Web;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Symfony\Component\DomCrawler\Crawler;

use App\Services\Web\Traits\ClawsTrait;



class ClawsServices
{

    use ClawsTrait;

    private $url;
    private $config;

    public function __construct()
    {
        $this->config = typeJson($this->getConfig());
    }

    /**
     * Retorna os posts referente ao menu.
     * Box/Dicas
     *
     * @param $menu
     * @param $url
     * @return null|$content
     */
    public function getClaws($slug, $menu, $url)
    {
        try {
            $client = new Client;
            $response = $client->get($url);
            $html = $response->getBody()->getContents();
            $evaluate = new Crawler($html);

            $crawler = $this->outerHtml($evaluate, $menu, $slug);
            if (!$crawler) {
                return null;
            }

            $content[$menu] = $this->filterClaws($crawler, $slug, $menu);

            return $content;

        } catch (ClientException $e) {
            return null;
        }
    }

    /**
     * Retorna o html desidratado.
     * Box/Dicas
     *
     * @param $crawler
     * @param $menu
     * @param $slug
     * @return null|Crawler
     */
    private  function outerHtml($crawler, $menu, $slug)
    {
        $eva = $this->config->$slug->$menu->evaluate;
        $ele = $this->config->$slug->$menu->element;

        $count =  $crawler->evaluate("count($eva)");
        if ((int)$count[0] == 0) {
            return null;
        }

        $html = $crawler->filter($ele)->outerHtml();
        $crawler = new Crawler($html);

        return $crawler;
    }


    /**
     * Filtra a url e verifica se não quebrou o html.
     * Verifica a url amigavel
     *
     * @param $crawler
     * @param $menu
     * @param $slug
     * @return mixed
     */
    private function filterClaws($crawler, $slug, $menu)
    {
        $config = typeJson($this->config->$slug->$menu);

        $claws = $crawler->filter($config->element)->each(function (Crawler $crawler) use($config, $slug) {

            return $crawler->filter($config->parent)->each(function (Crawler $crawler) use($config, $slug) {

                try {
                    $title = implode(' ', $config->title);
                    $title = $crawler->filter($title)->text();
                } catch( \InvalidArgumentException $e) {
                    $title = '';
                }

                try {
                    $url = implode(' ', $config->link);
                    $url = $crawler->filter($url)->attr('href');
                    $seg = explode('/', $url);

                    //Posição do array[...]
                    $segment = $this->config->$slug->details->segment;
                    //Altera Slug
                    $slug = $this->changeSlug($slug);

                    $link = route('details-claws', ['slug' => $slug, 'segment' => $seg[$segment]]);

                } catch( \InvalidArgumentException $e) {
                    $link = '';
                }

                try {
                    $date = implode(' ', $config->date);
                    $date = $crawler->filter($date)->text();
                } catch( \InvalidArgumentException $e) {
                    $date = '';
                }

                try {
                    $image = implode(' ', $config->image);
                    $image = $crawler->filter($image)->attr('src');
                } catch( \InvalidArgumentException $e) {
                    $image = '';
                }

                try {
                    $description = implode(' ', $config->description);
                    $description = $crawler->filter($description)->text();
                } catch( \InvalidArgumentException $e) {
                    $description = '';
                }

                return [
                    'author' => $config->author,
                    'title' => $title,
                    'link' => $link,
                    'date' => $date,
                    'image' => $image,
                    'description' => $description
                ];
            });

        });

        return $claws[0];
    }

    /**
     * Retorna o conteudo em html
     *
     * @param $slug
     * @param $url
     * @return null|$content
     */
    public function getDetails($slug, $url)
    {

        try {
            $config = $this->config->$slug->details;

            $client = new Client;
            $response = $client->get($url);
            $html = $response->getBody()->getContents();
            $crawler = new Crawler($html);

            $content['tags'] = $this->detailsTags($crawler, $slug);


            $crawler = $this->detailsHtml($crawler, $slug);
            if (!$crawler) {
                return null;
            }


            /** Header **/

            $content['author'] = $config->author;
            try {
                $title = implode(' ', $config->title);
                $content['title'] = $crawler->filter($title)->text();
            } catch( \InvalidArgumentException $e) {
                $content['title'] = '';
            }

            try {
                $image = implode(' ', $config->image);
                $content['image'] = $crawler->filter($image)->attr('src');
            } catch( \InvalidArgumentException $e) {
                $content['image'] = '';
            }

            try {
                $date = implode(' ', $config->date);
                $content['date'] = $crawler->filter($date)->text();
            } catch( \InvalidArgumentException $e) {
                $content['date'] = '';
            }



            //Remover nodes
            $html = $this->removeDetails($crawler, $slug);
            //Replace attributes
            $replace = $config->replace;
            if ($replace) {
                $i=0;
                foreach ($replace as $key => $value) {
                    $html = $this->replaceDetails($key, $value, $html);
                    $i++;
                }

                $content['html'] = $html;
            }

            return $content;


        } catch (ClientException $e) {
            return null;
        }
    }

    /**
     * Retorna as tags da págna.
     * Subistitui a url
     *
     * @param $crawler
     * @param $slug
     * @return null|Crawler
     */
    private function detailsTags($crawler, $slug)
    {
        $config = $this->config->$slug->details;
        $count = $crawler->filter($config->tags->parent)->count();
        if(!$count) {
            return null;
        }

        $tags = $crawler->filter($config->tags->parent)->each(function (Crawler $crawler) use($config) {
            return $crawler->filter('a')->each(function (Crawler $crawler) use($config) {
                //Replace attributes
                $replace = $config->tags->replace;
                if ($replace) {
                    foreach ($replace as $key => $value) {
                        return [
                            'link' => str_replace($key, $value, $crawler->link()->getUri()),
                            'text' => ucfirst($crawler->text())
                        ];
                    }
                }
            });

        });

        return collect($tags[0])->shuffle();
    }


    /**
     * Retorna o html do conteúdo principal.
     *
     * @param $crawler
     * @param $slug
     * @return null|Crawler
     */
    private function detailsHtml($crawler, $slug)
    {
        $config = $this->config->$slug->details;
        $count = $crawler->filter($config->content)->count();
        if(!$count) {
            return null;
        }

        $html = $crawler->filter($config->content)->html();
        $crawler = new Crawler($html);

        return $crawler;
    }

    /**
     * Remove html element
     *
     * @param $crawler
     * @param $slug
     * @param $ele
     * @return html
     */
    private function removeDetails($crawler, $slug)
    {

        $config = $this->config->$slug->details;

        //remove script
        $cs = $crawler->filter($config->parent. ' script')->count();
        if ($cs) {
            $crawler = $this->removeElement($crawler, $config->parent. ' script');
        }
        //remove form
        $cf = $crawler->filter($config->parent. ' form')->count();
        if ($cf) {
            $crawler = $this->removeElement($crawler, $config->parent. ' form');
        }

        $elements = $config->remove;
        if ($elements) {
            foreach ($elements as $item) {
                $ele = $crawler->filter("{$config->parent} {$item}")->count();
                if ($ele) {
                    $crawler = $this->removeElement($crawler, "{$config->parent} {$item}");
                }
            }
        }

        return $crawler->filter($config->parent)->html();
        /*
        $html = $crawler->filter($config->parent)->html();
        $crawler = new Crawler($html);

        return $crawler;
        */
    }

    /**
     * Remove elementos específicos.
     *
     * @param $crawler
     * @param $ele
     * @return mixed
     */
    private function removeElement($crawler, $element)
    {
        $crawler->filter($element)->each(function (Crawler $crawler) {
            foreach ($crawler as $node) {
                $node->parentNode->removeChild($node);
            }
        });

        return $crawler;
    }

    /**
     * Substituir tags do html
     *
     * @param $crawler
     * @param $key
     * @param $value
     * @return mixed
     */
    private function replaceDetails($key, $value, $html)
    {
        return str_replace($key, $value, $html);
    }



    private function createHtml($crawler)
    {
        //é assim que você começa get domDocument
        //$domDocument = $crawler->getNode(0)->parentNode;

        /*
        //creating div
        $form = $domDocument->createElement('form');
        $form->setAttribute('method', 'post');
        $form->setAttribute('id', 'form-claws');
        $input = $domDocument->createElement('input');
        $input->setAttribute('type', 'text');
        $input->setAttribute('id', 'email-claws');
        $input->setAttribute('name', 'email-claws');
        */

        //adicionando div após a tag h4
        $ele = $crawler->filter('.the-content')->getNode(0);
        $ele->parentNode->insertBefore( $crawler, $ele->nextSibling);
        dd($crawler);

    }


}
