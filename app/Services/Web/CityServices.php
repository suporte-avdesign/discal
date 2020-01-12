<?php
/**
 * Created AV Design.
 * User: Anselmo Velame
 * Date: 04/01/20
 * Time: 20:29
 */

namespace App\Services\Web;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use Symfony\Component\DomCrawler\Crawler;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;

use App\Services\Web\Traits\CityTrait;
use Illuminate\Support\Facades\Cache;

class CityServices
{
    use CityTrait;

    private $config;


    public function __construct()
    {
        $this->config = typeJson($this->getConfig());
    }

    public function getCity($slug)
    {
        $config = typeJson($this->config->$slug);
        $array = $this->getStores($slug);
        foreach ($array as $value) {
            foreach ($value as $item) {
                $store = $config->$item;
                $crawler = $this->getDomains($store, 'page');
                $data[$item]['slug'] = $store->slug;
                $data[$item]['name'] = $this->getName($store, $crawler);
                $data[$item]['logo'] = $this->getLogo($store, $crawler);
                $data[$item]['title'] = $this->getTitle($store, $crawler);
                $data[$item]['description'] = $this->getDescription($store, $crawler);
                $data[$item]['tags'] = $this->getTags($store, $crawler);
                $data[$item]['banners'] = $this->getBanners($store, 'banners', $crawler);
            }
        }

        $content['stores'] = $data;

        //dd($content);
        return $content;
    }

    public function getDetails($slug, $store)
    {
        $config = typeJson($this->config->$slug);
        $store = $config->$store;


        $crawler = $this->getDomains($store, 'details');
        $content['logo'] = $this->getLogo($store, $crawler);



        $content['menu'] = $this->getMenu($store, $crawler);

        $cache = Cache::get('city');
        $content['banners'] = [];
        if ($cache) {
            foreach ($cache->stores as $value) {
                if ($value->slug == $store->slug) {
                    $content['banners'] = $value->banners;
                }
            }

        }

        $content['category'] = $this->getCategory($store, $content['menu']);


        $content['products'] = $this->getProducts($store, $crawler);


        dd($content);
    }

    private function getBanners($store, $type, $crawler)
    {
        $images = [];
        $banners = $store->banners;
        if (!$banners) {
            return $banners;

        } elseif ($banners->images) {

            foreach ($banners->images as $path) {
                if (remoteFileExist($path)) {
                    $images[] = $path;
                } else {
                   Log::Warning('banner_not_found', [
                       'url' => $path,
                       'message' => 'Image not found'
                   ]);
                }
            }

        } else {
            $parent = $banners->parent;
            $element = $banners->element;
            if ($this->setParent($parent, $crawler)) {
                if ($this->setElement($element, $crawler)) {
                    $images = $crawler->filter($element)->each(function (Crawler $node) use ($store) {
                        $src  = $this->filterSrc($store->banners->url, $store->banners->src, $node);
                        return $src;
                    });
                }
            }

        }
        return $images;

    }

    private function getProducts($store, $crawler)
    {
        if (!$store->products) {
            return null;
        }

        $parent = $store->products->parent;
        $element = $store->products->element;

        if ($this->setParent($parent, $crawler)) {
            if ($this->setElement($element, $crawler)) {

                $products = $crawler->filter($element)->each(function (Crawler $node) use ($store) {

                    $href = $this->filterHref($store->products->href, $node);
                    $src  = $this->filterSrc($store->products->url, $store->products->src, $node);
                    $alt  = $this->filterAlt($store->products->alt, $node);
                    $code  = $this->filterCode($store->products->code, $node);
                    $price  = $this->filterPrice($store->products->price, $node);
                    $description = $this->filterDescription($store->products->description, $node);
                    ($store->products->name == 'alt' ? $name = $alt : $name = $this->filterName($store, $store->products->name, $node));

                    return [
                        'name' => $name,
                        'href' => $href,
                        'src' => $src,
                        'alt' => $alt,
                        'code' => $code,
                        'price' => $price,
                        'description' => $description
                    ];

                });


                return $products;
            }
        }
    }

    private function getCategory($store, $menu)
    {
        if (!$menu) {
            return $menu;
        }
        $details = $store->details;
        (!$details->url ?  $url = $store->domain :  $url = $details->url);
        if (!$details->segment) {
            if ($store->segment) {
                $segment = implode('/', $store->segment);
            } else {
                $segment = $store->domain;
            }

        } else {
            $segment = implode('/', $details->segment);
        }
        $href = str_replace('/', '', "{$url}/{$segment}");
        $links = typeJson($menu);
        $category = null;
        foreach ($links as $value) {
            $link = str_replace('/', '', "{$value->href}");

            if ($link == $href) {
                $category = $value->name;
            }

        }


        return $category;

    }

    /**
     * Retorna o html dos domínios especifico
     *
     * @param $config
     * @return null|Crawler
     */
    private function getDomains($store, $page)
    {
        $url = $this->getUrl($store, $page);
        try {
            $client = new Client;
            $response = $client->get($url);
            $html = $response->getBody()->getContents();
            $crawler = new Crawler($html);

            return $crawler;

        } catch (ConnectException $e) {
            Log::Warning('guzzle_connect_exception', [
                'url' => $url,
                'message' => $e->getMessage()
            ]);
        } catch (RequestException $e) {
            Log::Warning('guzzle_connection_timeout', [
                'url' => $url,
                'message' => $e->getMessage()
            ]);

        } catch (ClientException $e) {
            Log::Warning('guzzle_client_exception', [
                'url' => $url,
                'message' => $e->getMessage()
            ]);
        }

        return null;
    }

    private function getUrl($store, $url)
    {

        if ($url == 'details') {
            if (!$store->details) {
                return null;
            }
            if ($store->details->url) {
                $url = $store->details->url;
            } else {
                $url = $store->domain;
            }

            if ($store->details->segment) {
                $segment = implode('/', $store->details->segment);
                $url = "{$url}/{$segment}";
            }
        } elseif ($url == 'banners') {
            if ($store->banners->segment) {
                $segment = implode('/', $store->banners->segment);
                $url = "{$store->banners->url}/{$segment}";
            }
        } else {
            $url = $store->domain;
            if ($store->segment) {
                $segment = implode('/', $store->segment);
                $url = "{$store->domain}/{$segment}";
            }
        }

         return $url;
    }


    /**
     * Retorno o menu da loja específica
     *
     * @param $store
     * @param $crawler
     * @return null|string
     */
    private function getMenu($store, $crawler)
    {
        if (!$store->details) {
            return null;
        }
        if (!$store->details->menu) {
            return null;
        }
        $element = implode(' ', $store->details->menu->element);
        $count = $crawler->filter($element)->count();
        if (!$count) {
            return null;
        }

        $menu = $crawler->filter($element)->each(function (Crawler $node) use ($store) {
            return [
                'href' => $this->filterHref($store->details->menu->href, $node),
                'name' => $this->filterName($store, $store->details->menu->text, $node)
            ];
        });

        return $menu;
    }


    /**
     * Retorno o logo da loja específica
     *
     * @param $store
     * @param $crawler
     * @return null|string
     */
    private function getLogo($store, $crawler)
    {
        if (!$store->logo->element) {
            return $store->logo->url;
        }
        $element = implode(' ', $store->logo->element);
        $count = $crawler->filter($element)->count();
        if (!$count) {
            return null;
        }

        return $store->logo->url . $crawler->filter($element)->attr('src');
    }

    private function getName($store, $crawler)
    {
        if ($store->name) {
            return $store->name;
        }
    }

    private function getTitle($store, $crawler)
    {
        if ($store->title) {
            return $store->title;
        }
    }

    private function getDescription($store, $crawler)
    {
        if ($store->description) {
            return $store->description;
        }
    }

    private function getTags($store, $crawler)
    {
        if ($store->tags) {
            return $store->tags;
        }
    }

    private function setParent($parent, $crawler)
    {

        $count = $crawler->filter($parent)->count();
        if (!$count) {
            return false;
        }
        return true;
    }

    private function setElement($element, $crawler)
    {
        $count = $crawler->filter($element)->count();
        if (!$count) {
            return false;
        }
        return true;
    }

    private function filterHref($href, $node)
    {
        if (!$href) {
            return $href;
        }
        $ele = $node->filter('a')->count();
        ($ele ? $href = $node->filter('a')->attr('href') : $href = null);

        return $href;
    }

    private function filterSrc($url, $src, $node)
    {
        if (!$src) {
            return $src;
        } elseif ($src == 'img') {
            $ele = $node->filter('img')->count();
            ($ele ? $src = $url . $node->filter('img')->attr('src') : $src = null);
        } elseif ('href') {
            $ele = $node->filter('a')->count();
            ($ele ? $src = $url . $node->filter('a')->attr('href') : $src = null);
        } else {
            $ele = $node->filter($src)->count();
            ($ele ? $src = $url . $node->filter($src)->attr('src') : $src = null);
        }

        return $src;
    }

    private function filterAlt($alt, $node)
    {
        if (!$alt) {
            return $alt;
        }
        $ele = $node->filter('img')->attr('alt');
        ($ele ? $alt = $node->filter('img')->attr('alt') : $alt = null);

        return $alt;

    }

    private function filterName($store, $name, $node)
    {
        if (!$name) {
            return $name;
        } elseif ($name == 'h4') {
            $ele = $node->filter('h4')->text();
            ($ele ? $name = $ele : $name = null);
        } elseif ($name == 'alt') {
            $ele = $node->filter('img')->attr('alt');
            ($ele ? $name = $ele : $name = null);
        } elseif ($name == 'title') {
            $ele = $node->filter('a')->attr('title');
            ($ele ? $name = $ele : $name = null);

        } elseif ($name == 'a') {
            $ele = $node->filter('a')->count();
            ($ele ? $name = $node->filter($name)->text() : $name = null);
        } else {
            if (is_array($name)) {
                $name = $node->filter($name[0])->attr($name[1]);
            } else {

                $html = $node->filter($name)->html();
                $html = str_replace('<br>', ' ', $html);

                $name = $html;
            }
        }

        return $name;
    }

    private function filterCode($code, $node)
    {
        if (!$code) {
            return $code;
        } elseif ($code == 'alt') {
            $ele = $node->filter('img')->attr('alt');
            ($ele ? $code = $node->filter('img')->attr('alt') : $code = null);
        } elseif ($code == 'title') {
            $ele = $node->filter('a')->attr('title');
            ($ele ? $code = $node->filter('a')->attr('title') : $code = null);
        } else {
            $code = $node->filter($code)->text();
        }

        return $code;
    }

    private function filterPrice($price, $node)
    {
        if (!$price) {
            return $price;
        } elseif ($price == 'alt') {
            $ele = $node->filter('img')->attr('alt');
            ($ele ? $price = $node->filter('img')->attr('alt') : $price = null);
        } elseif ($price == 'title') {
            $ele = $node->filter('a')->attr('title');
            ($ele ? $price = $node->filter('a')->attr('title') : $price = null);
        } else {
            if (is_array($price)) {
                $price = $node->filter($price[0])->attr($price[1]);
            } else {
                $price = $node->filter($price)->text();
            }
        }

        return $price;
    }

    private function filterDescription($description, $node)
    {
        if (!$description) {
            return $description;
        } elseif ($description == 'alt') {
            $ele = $node->filter('img')->attr('alt');
            ($ele ? $description = $node->filter('img')->attr('alt') : $description = null);
        } elseif ($description == 'title') {
            $ele = $node->filter('a')->attr('title');
            ($ele ? $description = $node->filter('a')->attr('title') : $description = null);
        } else {
            if (is_array($description)) {
                $description = $node->filter($description[0])->attr($description[1]);
            } else {
                $description = $node->filter($description)->text();
            }
        }

        return $description;
    }



}