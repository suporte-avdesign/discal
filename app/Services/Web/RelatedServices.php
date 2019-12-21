<?php
/**
 * Created by AV Design.
 * User: Anselmo Velame
 * Date: 16/12/19
 * Time: 10:19
 */

namespace App\Services\Web;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use Symfony\Component\DomCrawler\Crawler;

use App\Services\Web\Traits\RelatedTrait;


class RelatedServices
{
    use RelatedTrait;

    private $config;


    public function __construct()
    {
        $this->config = typeJson($this->getConfig());
    }


    public function getRelateds($slug)
    {
        $config = $this->config->$slug;
        $domain = $config->domain;

        $segment = implode('/', $config->segment);
        $i = 0;
        foreach ($config->banners as $banner) {
            //Sobrecreve o config
            $config->banners[$i]->details = $this->outerHtml($config, $banner->link, $slug);
            $i++;
        }


        //Substituir o config
        unset($config->details);
        $response['slug'] = $this->config->slug;
        $response[$slug] = $config;

        return $response;
    }


    /**
     * Retorna os htmls desidratado.
     *
     * @param $crawler
     * @param $menu
     * @param $slug
     * @return null|Crawler
     */
    private function outerHtml($config, $segment, $slug)
    {
        try {
            $sub = implode('/', $config->segment);
            $url = "{$config->domain}/{$sub}/$segment";
            $config = $config->details;
            $client = new Client;
            $response = $client->get($url);
            $html = $response->getBody()->getContents();
            $crawler = new Crawler($html);

            $count = $crawler->filter($config->evaluate)->count();
            if (!$count) {
                return null;
            }
            $html = $crawler->filter($config->evaluate)->outerHtml();
            $crawler = new Crawler($html);

            $crawler = $this->removeDetails($config, $crawler);

            return $this->filterRelateds($config, $crawler, $segment, $slug);


        } catch (ClientException $e) {
            return null;
        }
    }


    /**
     * Filtra e retorna o contéudo
     * @param $config
     * @param $crawler
     * @param $segment
     * @param $slug
     * @return mixed
     */
    private function filterRelateds($config, $crawler, $segment, $slug)
    {
        try {
            $banner = implode(' ', $config->banner);
            $content['banner'] = $crawler->filter($banner)->attr('src');
        } catch (\InvalidArgumentException $e) {
            $content['banner'] = '';
        }
        try {
            $title = implode(' ', $config->title);
            $content['title'] = $crawler->filter($title)->text();
        } catch (\InvalidArgumentException $e) {
            $content['title'] = '';
        }
        try {
            $description = implode(' ', $config->description);
            $content['description'] = $crawler->filter($description)->text();
        } catch (\InvalidArgumentException $e) {
            $content['description'] = '';
        }

        try {
            $photo = implode(' ', $config->photo);
            $content['photo'] = $crawler->filter($photo)->attr('src');
        } catch (\InvalidArgumentException $e) {
            $content['photo'] = '';
        }

        $content['url'] = config('app.url')."/{$this->config->segment}/{$slug}/{$segment}";

        $content['products'] = $this->getProducts($config, $crawler, $content['url']);


        return $content;
    }


    /**
     * Retorna os produtos
     *
     * @param $config
     * @param $crawler
     * @return array
     */
    private function getProducts($config, $crawler, $url)
    {
        $count = $crawler->filter($config->parent)->count();
        if (!$count) {
            return '';
        }

        try {
            $title = implode(' ', $config->title);
            $title = \Str::slug($crawler->filter($title)->text().'-'.rand(2000, 2999));
        } catch (\InvalidArgumentException $e) {
            $title = '';
        }


        $html = $crawler->filter($config->parent)->outerHtml();
        //Replace attributes  src / href
        $replace = $config->replace;
        if ($replace) {
            $i = 0;
            foreach ($replace as $key => $value) {
                $html = $this->replaceDetails($key, $value, $html);
                $i++;
            }
        }

        $crawler = new Crawler($html);
        $count = $crawler->filter($config->photos)->count();
        if ($count) {
            $photos = $crawler->filter("{$config->parent} {$config->photos}")
                ->each(function (Crawler $crawler) use($url, $title) {
                $src = $crawler->attr('src');
                $href = $crawler->attr('href');
                return '<li><a href="'.$url.'" data-galery="'.$href.'"><img src="'.$src.'" alt="'.$title.'"></a></li>';
            });
        }

        return $photos;

    }


    public function getDetail($slug, $segment)
    {
        $config = $this->config->$slug;
        $domain = $config->domain;
        $page = implode('/', $config->segment);
        $url = "{$domain}/{$page}/{$segment}";

        try {
            $client = new Client;
            $response = $client->get($url);
            $html = $response->getBody()->getContents();
            $crawler = new Crawler($html);

            $count = $crawler->filter($config->details->evaluate)->count();
            if (!$count) {
                return null;
            }


            $details = $this->filterDetail($config, $crawler);
            if (!$details) {
                return null;
            }

            return $details;


        } catch (ClientException $e) {
            return null;
        }

        return $response;
    }


    /**
     * Foiltra os atributos da página detalhes do produto
     * @param $config
     * @param $crawler
     * @return string
     */
    private function filterDetail($config, $crawler)
    {
        try {
            $banner = implode(' ', $config->details->banner);
            $content['banner'] = $crawler->filter($banner)->attr('src');
        } catch (\InvalidArgumentException $e) {
            $content['banner'] = '';
        }
        try {
            $title = implode(' ', $config->details->title);
            $content['title'] = $crawler->filter($title)->text();
        } catch (\InvalidArgumentException $e) {
            $content['title'] = '';
        }
        try {
            $description = implode(' ', $config->details->description);
            $content['description'] = $crawler->filter($description)->text();
        } catch (\InvalidArgumentException $e) {
            $content['description'] = '';
        }

        try {
            $photo = implode(' ', $config->details->photo);
            $content['photo'] = $crawler->filter($photo)->attr('src');
        } catch (\InvalidArgumentException $e) {
            $content['photo'] = '';
        }

        $count = $crawler->filter($config->details->parent)->count();
        if (!$count) {
            return '';
        }


        $html = $crawler->filter($config->details->parent)->outerHtml();
        $replace = $config->details->replace;
        if ($replace) {
            $i = 0;
            foreach ($replace as $key => $value) {
                $html = $this->replaceDetails($key, $value, $html);
                $i++;
            }
        }

        $crawler = new Crawler($html);

        $content['products'] = $this->getProductsDetails($config, $crawler, $content['title']);

        return $content;
    }

    /**
     * Retorna os produtos
     *
     * @param $config
     * @param $crawler
     * @return array
     */
    private function getProductsDetails($config, $crawler, $title)
    {

        $count = $crawler->filter($config->details->photos)->count();
        if (!$count) {
            return null;
        }

        $photos = $crawler->filter("{$config->details->parent} {$config->details->photos}")
            ->each(function (Crawler $crawler) use($config, $title) {
                $alt = $crawler->filter($config->details->images->src.' alt')->count();
                if ($alt) {
                    $title = $crawler->attr($config->details->images->src)->attr('alt');
                }
                $src = $crawler->attr($config->details->images->src);
                $href = $crawler->attr($config->details->images->href);
                return [
                    'src' => $src,
                    'href' => $href,
                    'alt' => $title.' '.rand(2000,2999)
                ];
            });

        return $photos;
    }


    /**
     * Remove html element
     *
     * @param $crawler
     * @param $slug
     * @param $ele
     * @return html
     */
    private function removeDetails($config, $crawler)
    {
        $elements = $config->remove;
        if ($elements) {
            foreach ($elements as $item) {
                $ele = $crawler->filter($config->evaluate . " {$item}")->count();
                if ($ele) {
                    $crawler = $this->removeElement($crawler, $config->evaluate . " {$item}");
                }
            }
        }

        return $crawler;
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



}