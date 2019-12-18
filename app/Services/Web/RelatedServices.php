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
        $i=0;
        foreach ($config->banners as $banner) {
            $details[] = $this->outerHtml($config, "{$domain}/{$segment}/{$banner->link}");
            $i++;
        }

        //Substituir o details no config
        $config = $this->config;
        $config->$slug->details = $details;

        return $config;
    }


    /**
     * Retorna os htmls desidratado.
     *
     * @param $crawler
     * @param $menu
     * @param $slug
     * @return null|Crawler
     */
    private function outerHtml($config, $url)
    {
        try {
            $config = $config->details;
            $client = new Client;
            $response = $client->get($url);
            $html = $response->getBody()->getContents();
            $crawler = new Crawler($html);

            $count = $crawler->filter($config->evaluate)->count();
            if(!$count) {
                return null;
            }
            $html = $crawler->filter($config->evaluate)->outerHtml();
            $crawler = new Crawler($html);

            $crawler = $this->removeDetails($config, $crawler);

            return $this->filterRelateds($config, $crawler);


        } catch (ClientException $e) {
            return null;
        }
    }




    private function filterRelateds($config, $crawler)
    {
        try {
            $banner = implode(' ', $config->banner);
            $content['banner'] = $crawler->filter($banner)->attr('src');
        } catch( \InvalidArgumentException $e) {
            $content['banner'] = '';
        }
        try {
            $title = implode(' ', $config->title);
            $content['title'] = $crawler->filter($title)->text();
        } catch( \InvalidArgumentException $e) {
            $content['title'] = '';
        }
        try {
            $description = implode(' ', $config->description);
            $content['description'] = $crawler->filter($description)->text();
        } catch( \InvalidArgumentException $e) {
            $content['description'] = '';
        }

        $content['products'] = $this->getProducts($config, $crawler);


        return $content;
    }


    /**
     * Retorna os produtos
     *
     * @param $config
     * @param $crawler
     * @return array
     */
    private function getProducts($config, $crawler)
    {
        //$products = implode(' ', $config->info);
        $count = $crawler->filter($config->element)->count();
        if(!$count) {
            return [
                'image' => '',
                'link' => ''
            ];
        } else {

            $products = $crawler->filter($config->parent)->each(function (Crawler $crawler) use($config) {


                return [
                    'image' =>  $crawler->filter($config->images->ele)->attr($config->images->attr),
                    'link' => $crawler->filter($config->images->ele)->attr($config->images->link)
                ];
            });
            return $products[0];
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
    private function removeDetails($config, $crawler)
    {
        $elements = $config->remove;
        if ($elements) {
            foreach ($elements as $item) {
                $ele = $crawler->filter($config->evaluate." {$item}")->count();
                if ($ele) {
                    $crawler = $this->removeElement($crawler, $config->evaluate. " {$item}");
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



}