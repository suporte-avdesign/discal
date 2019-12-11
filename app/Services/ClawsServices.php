<?php
/**
 * Created by PhpStorm.
 * User: avdesign
 * Date: 08/12/19
 * Time: 10:05
 */

namespace App\Services;

use GuzzleHttp\Client;

use GuzzleHttp\Exception\ClientException;
use Symfony\Component\DomCrawler\Crawler;


class ClawsServices
{


    public static function getClaws($slug, $menu, $url)
    {
        try {
            $client = new Client;
            $response = $client->get($url);
            $html = $response->getBody()->getContents();
            $evaluate = new Crawler($html);

            $crawler = self::outerHtml($evaluate, $menu, $slug);
            if (!$crawler) {
                return null;
            }

            $content[$menu] = self::filterClaws($crawler, $menu, $slug);


            return $content;

        } catch (ClientException $e) {
            return null;
        }
    }

    private static function outerHtml($crawler, $menu, $slug)
    {
        $ev = config("claws.{$slug}.{$menu}.evaluate");
        $ele = config("claws.{$slug}.{$menu}.element");
        $count =  $crawler->evaluate("count($ev)");
        if ((int)$count[0] == 0) {
            return null;
        }

        $html = $crawler->filter($ele)->outerHtml();
        $crawler = new Crawler($html);

        return $crawler;
    }

    private static function filterClaws($crawler, $menu, $slug)
    {
        $config = typeJson(config("claws.{$slug}.{$menu}"));

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
                    $segment = config("claws.{$slug}.details.segment");
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

    public static function getDetails($slug, $url)
    {
        try {
            $client = new Client;
            $response = $client->get($url);
            $html = $response->getBody()->getContents();
            $evaluate = new Crawler($html);

            $crawler = self::detailsHtml($evaluate, $slug);
            if (!$crawler) {
                return null;
            }

            $config = typeJson(config("claws.{$slug}.details"));
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

            $remove = config("claws.{$slug}.details.remove");
            if ($remove) {
                foreach ($remove as $item) {
                    $crawler = self::removeDetails($crawler, $slug, $item);
                }
            }

            $replace = config("claws.{$slug}.details.replace");
            if ($replace) {
                foreach ($replace as $key => $value) {
                    $content['html'] = $crawler = self::replaceDetails($crawler, $key, $value);
                }
            }

            return $content;


        } catch (ClientException $e) {
            return null;
        }
    }


    private static function detailsHtml($crawler, $slug)
    {
        $ev = config("claws.{$slug}.details.evaluate");
        $ele = config("claws.{$slug}.details.element");
        $count =  $crawler->evaluate("count($ev)");
        if ((int)$count[0] == 0) {
            return null;
        }

        $html = $crawler->filter($ele)->outerHtml();
        $crawler = new Crawler($html);

        return $crawler;
    }


    private static function removeDetails($crawler, $slug, $ele)
    {
        $parent = config("claws.{$slug}.details.parent");

        $html = $crawler->filter($parent)->outerHtml();
        $crawler = new Crawler($html);



        $crawler->filter($ele)->each(function (Crawler $crawler) {
            foreach ($crawler as $node) {
                $node->parentNode->removeChild($node);
            }
        });

        return $crawler->outerHtml();
    }


    private static function replaceDetails($crawler, $key, $value)
    {
        return str_replace($key, $value, $crawler);
    }


}
