<?php
/**
 * Created by AV Design.
 * User: Anselmo Velame
 * Date: 24/11/19
 * Time: 18:04
 */

namespace App\Services\Web;

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use GuzzleHttp\Exception\ClientException;

use App\Services\Web\Traits\BreakingNewsTrait;


class BreakingNews
{
    use BreakingNewsTrait;

    /**
     * @return array
     */
    public function getNews($slug)
    {
        $json = typeJson($this->getConfig());
        $config = $json->$slug;

        $crawler =  $this->getDomain($config);

        $content['logo'] = $this->getLogo($config, $crawler);

        $content['breaking'] = $this->filterNews($config, $crawler);

        return $content;

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
     * Retorna o html desidratado.
     *
     * @param $crawler
     * @param $menu
     * @param $slug
     * @return null|Crawler
     */
    private function filterNews($config, $crawler)
    {


        $parent = $config->news->parent;

        $count =  $crawler->filter($parent)->count();
        if (!$count) {
            return null;
        }

        $element = $config->news->element;
        $count =  $crawler->filter($element)->count();
        if (!$count) {
            return null;
        }

        $news = $crawler->filter($element)->each(function (Crawler $crawler) use($config) {

            try {
                $title = $crawler->filter($config->news->title)->text();
            } catch( \InvalidArgumentException $e) {
                $title = '';
            }

            try {
                $image = $crawler->filter($config->news->image)->attr('src');
            } catch( \InvalidArgumentException $e) {
                $image = '';
            }

            try {
                $link = $crawler->filter($config->news->link)->attr('href');
            } catch( \InvalidArgumentException $e) {
                $link = '#';
            }

            return [
                'title' => $title,
                'image' => $config->news->url.$image,
                'link' => $link
            ];
        });


        return $news;
    }



}