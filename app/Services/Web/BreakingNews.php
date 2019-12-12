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

class BreakingNews
{
    /**
     * @return array
     */
    public function getNews()
    {
        $client = new Client;
        $response = $client->get("http://www.abicalcados.com.br/noticias");
        $html = $response->getBody()->getContents();
        $crawler = new Crawler($html);

        $news = $crawler->filter('.c-news-section__list > li')->each(function (Crawler $crawler) {
            return [
                'link' => $crawler->filter('a')->attr('href'),
                'text' => $crawler->filter('h2[class="c-news-box__title"]')->text()
            ];
        });

        return $news;
    }
}