<?php
/**
 * Created by AV Design.
 * User: Anselmo Velame
 * Date: 24/11/19
 * Time: 18:04
 */

namespace App\Services\Web;

use GuzzleHttp\Client;
use Illuminate\Support\Str;
use Symfony\Component\DomCrawler\Crawler;
use GuzzleHttp\Exception\ClientException;

use App\Services\Web\Traits\StoresTrait;

class StoresServices
{
    use StoresTrait;


    private $config;


    public function __construct()
    {
        $this->config = typeJson($this->getConfig());
    }


    public function getStore($slug)
    {
        $config = $this->config->$slug;

        $crawler = $this->getDomain($config);

        $content['logo'] = $this->getLogo($config, $crawler);

        $content['menu'] = $this->getMenu($config, $crawler);

        $content['banners'] = $this->getBanners($config, $crawler);

        $key = $this->choosePage($config, $content['menu']);

        $url = $content['menu'][$key]['link'];



        if (!$url) {
            $content['products'] = null;
        } else {
            $content['products'] = $this->getProducts($config, $url);
        }




        return typeJson($content);
    }

    /**
     * Retorna o html do domínio especifico
     *
     * @param $config
     * @return null|Crawler
     */
    private function getDomain($config)
    {
        try {
            $client = new Client;
            $response = $client->get($config->domain);
            $html = $response->getBody()->getContents();
            $crawler = new Crawler($html);

            //$crawler = $this->removeElements($config, $crawler);
            return $crawler;

        } catch (ClientException $e) {
            return null;
        }
    }


    /**
     * Retorna o logo da url específica
     *
     * @param $config
     * @param $crawler
     * @return null|string
     */
    private function getLogo($config, $crawler)
    {
        $element = implode(' ', $config->logo->element);
        $count = $crawler->filter($element)->count();
        if (!$count) {
            return null;
        }

        return $config->logo->url . $crawler->filter($element)->attr('src');
    }

    /**
     * Retorna o menu com os links específicos.
     *
     * @param $config
     * @param $crawler
     * @return array|null
     */
    private function getMenu($config, $crawler)
    {
        $parent = $crawler->filter($config->menu->parent)->count();
        if (!$parent) {
            return null;
        }
        $element = $crawler->filter($config->menu->element)->count();
        if (!$element) {
            return null;
        }

        $menu = $crawler->filter($config->menu->element)->each(function (Crawler $crawler) use ($config) {

            $href = $crawler->filter('a')->count();
            ($href ? $link = $config->menu->url.$crawler->filter('a')->attr('href') : $link = null);

            $text = $crawler->filter('a')->text();
            ($text ? $title = $crawler->filter('a')->text() : $text = null);

            return [
                'link' => $link,
                'title' => $title,
            ];

        });

        return uniqueArray($menu, 'title');
    }


    /**
     * Retorna os banners Mobile/Desktop
     *
     * @param $config
     * @param $crawler
     * @return array|null
     */
    private function getBanners($config, $crawler)
    {
        $isMobile = $this->config->isMobile;
        $mobile = $config->banners->parent->mobile;
        $desktop = $config->banners->parent->desktop;

        ($isMobile ? $parent = $mobile : $parent = $desktop);
        $template = $crawler->filter($parent)->count();
        if (!$template) {
            return null;
        }

        $body = $crawler->filter($parent)->outerHtml();
        $html = new Crawler($body);


        $element = implode(' ', $config->banners->element);
        $parent = $crawler->filter($element)->count();
        if (!$parent) {
            return null;
        }
        $banners = $html->filter($element)->each(function (Crawler $html) use ($config) {

            $href = $html->filter('a')->count();
            ($href ? $link = $html->filter('a')->attr('href') : $link = null);

            $src = $config->banners->url . $html->filter('img')->count();
            ($src ? $image = $config->banners->url . $html->filter('img')->attr('src') : $src = null);

            return [
                'link' => $link,
                'image' => $image
            ];

        });

        return $banners;
    }


    public function getProducts($config, $url)
    {
        $crawler = $this->urlProduct($url);


        $parent = $crawler->filter($config->products->parent)->count();
        if (!$parent) {
            return null;
        }

        $body = $parent = $crawler->filter($config->products->parent)->outerHtml();
        $html = new Crawler($body);



        $products = $html->filter($config->products->parent)->each(function (Crawler $node) use ($config) {

            $element = $node->filter($config->products->element)->count();
            if (!$element) {
                return null;
            }

            return $node->filter($config->products->element)->each(function (Crawler $html) use ($config) {


                return [
                    'title' => $html->filter($config->products->title)->text(),
                    'link' => $html->filter($config->products->link)->attr('href'),
                    'image' => $html->filter($config->products->image)->attr('src'),
                    'qty' => $config->products->qty_text.$html->filter($config->products->qty)->text(),
                    'price' => $html->filter($config->products->price)->text()
                ];

            });

        });

        return $products[0];
    }



    /**
     * Retorna o html do domínio especifico
     *
     * @param $config
     * @return null|Crawler
     */
    private function urlProduct($url)
    {
        try {
            $client = new Client;
            $response = $client->get($url);
            $html = $response->getBody()->getContents();
            $crawler = new Crawler($html);

            //$crawler = $this->removeElements($config, $crawler);
            return $crawler;

        } catch (ClientException $e) {
            return null;
        }
    }

    /**
     * Retorna o key aleatório do menu ou a opção da seção.
     *
     * @param $menu
     * @return mixed
     */
    public function choosePage($config, $menu)
    {
        if ($config->page == 'rand') {
            return array_rand($menu, 1);
        } else {
            foreach ($menu as $key => $choose) {
                $title =  Str::slug($choose['title']);
                if ($title == $config->page) {
                    return $key;
                }
            }
        }
    }


    /**
     * Remove html element
     *
     * @param $crawler
     * @param $slug
     * @param $ele
     * @return html
     */
    private function removeElements($config, $crawler)
    {
        $elements = $config->remove;
        if ($elements) {
            foreach ($elements as $item) {
                $ele = $crawler->filter($config->content." {$item}")->count();
                if ($ele) {
                    $crawler = $this->removeNodes($crawler, $config->content . " {$item}");
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
    private function removeNodes($crawler, $element)
    {
        $crawler->filter($element)->each(function (Crawler $crawler) {
            foreach ($crawler as $node) {
                $node->parentNode->removeChild($node);
            }
        });

        return $crawler;
    }



}