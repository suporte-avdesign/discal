<?php
/**
 * Created by AV Design.
 * User: Anselmo Velame
 * Date: 24/11/19
 * Time: 18:04
 */

namespace App\Services;

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

class StoresServices
{



    public static function getStore($slug)
    {
        $url = self::getDomain($slug);
        $client = new Client;
        $response = $client->get($url);
        $html = $response->getBody()->getContents();
        $crawler = new Crawler($html);

        $content['logo'] = self::getLogo($crawler, $slug);

        if (self::evaluateBanners($crawler, $slug) == 0) {
            $content['banners'] = null;
        } else {
            $content['banners'] = self::filterBanners($crawler, $slug);
        }

        if (self::evaluateProducts($crawler, $slug) == 0) {
            $content['products'] = null;
        } else {
            $content['products'] = self::filterProducts($crawler, $slug);
        }

        return typeJson($content);
    }



    private static function getDomain($slug)
    {
        return "https://www.{$slug}.com.br";
    }


    private static function getLogo($crawler, $slug)
    {
        $url = config("stores.{$slug}.logo.url");
        $element = config("stores.{$slug}.logo.element");

        return $url.$crawler->filter($element)->attr('src');
    }


    private static function evaluateBanners($crawler, $slug)
    {
        $cb = config("stores.{$slug}.banners.evaluate");
        $count =  $crawler->evaluate("count($cb)");

        return (int)$count[0];
    }


    private static function filterBanners($crawler, $slug)
    {
        $url = config("stores.{$slug}.banners.url");
        $parent  = config("stores.{$slug}.banners.parent");
        $total   = config("stores.{$slug}.banners.total");
        $element = config("stores.{$slug}.banners.element");

        $banners = $crawler->filter($parent)->each(function (Crawler $crawler) use($url, $total, $element) {

            $count = $crawler->evaluate("count($total)");
            if((int)$count[0] < 1) {
                return null;
            }

            return $crawler->filter($element)->each(function (Crawler $crawler) use($url){
                return [
                    'link' => $crawler->filter('a')->attr('href'),
                    'image' => $url.$crawler->filter('img')->attr('src')
                ];

            });
        });

        return $banners[0];
    }

    private static function evaluateProducts($crawler, $slug)
    {

        $cp = config("stores.{$slug}.products.evaluate");
        $count =  $crawler->evaluate("count($cp)");

        return (int)$count[0];
    }


    private static function filterProducts($crawler, $slug)
    {
        $total   = config("stores.{$slug}.products.total");
        $parent  = config("stores.{$slug}.products.parent");
        $element = config("stores.{$slug}.products.element");

        $title = config("stores.{$slug}.products.title");
        $link  = config("stores.{$slug}.products.link");
        $image = config("stores.{$slug}.products.image");


        $products = $crawler->filter($parent)->each(function (Crawler $crawler) use($total, $element, $title, $link, $image) {

            $count = $crawler->evaluate("count($total)");
            if((int)$count[0] < 1) {
                return null;
            }

            return $crawler->filter($element)->each(function (Crawler $crawler) use($title, $link, $image) {
                return [
                    'title' => $crawler->filter($title)->attr('title'),
                    'link' => $crawler->filter($link)->attr('href'),
                    'image' => $crawler->filter($image)->attr('src')
                ];

            });
        });

        return self::mergeProducts($products);
    }


    private static function mergeProducts($products)
    {
        $result = [];
        foreach ($products as $product) {
            foreach ($product as $item) {
                $result[] = $item;
            }
        }

        return $result;
    }





}