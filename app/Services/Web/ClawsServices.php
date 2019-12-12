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
            $evaluate = new Crawler($html);

            $crawler = $this->detailsHtml($evaluate, $slug);
            if (!$crawler) {
                return null;
            }

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

            $remove = $config->remove;
            if ($remove) {
                foreach ($remove as $item) {
                    $crawler = $this->removeDetails($crawler, $slug, $item);
                }
            }

            $replace = $config->replace;
            if ($replace) {
                foreach ($replace as $key => $value) {
                    $content['html'] = $crawler = $this->replaceDetails($crawler, $key, $value);
                }
            }

            return $content;


        } catch (ClientException $e) {
            return null;
        }
    }


    private function detailsHtml($crawler, $slug)
    {
        $config = $this->config->$slug->details;
        $eva = $config->evaluate;
        $ele = $config->element;
        $count =  $crawler->evaluate("count($eva)");
        if ((int)$count[0] == 0) {
            return null;
        }

        $html = $crawler->filter($ele)->outerHtml();
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
    private function removeDetails($crawler, $slug, $ele)
    {
        $parent = $this->config->$slug->details->parent;
        $html = $crawler->filter($parent)->outerHtml();
        $crawler = new Crawler($html);

        $crawler->filter($ele)->each(function (Crawler $crawler) {
            foreach ($crawler as $node) {
                $node->parentNode->removeChild($node);
            }
        });

        //$crawler = $this->createHtml($crawler);


        return $crawler->outerHtml();
    }

    /**
     * Substituir tags do html
     *
     * @param $crawler
     * @param $key
     * @param $value
     * @return mixed
     */
    private function replaceDetails($crawler, $key, $value)
    {
        return str_replace($key, $value, $crawler);
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
