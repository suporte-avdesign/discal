<?php
/**
 * Created AV Design
 * User: Anselmo Velame
 * Date: 29/12/19
 * Time: 11:43
 */

namespace App\Services\Web;

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use GuzzleHttp\Exception\ClientException;

use App\Services\Web\Traits\ShoppingStoreTrait;


class ShoppingStoreServices
{
    use ShoppingStoreTrait;


    private $config;


    public function __construct()
    {
        $this->config = typeJson($this->getConfig());
    }


    public function getShopping($slug)
    {
        $config = $this->config->$slug;

        $crawler = $this->getDomain($config);


        $content['logo'] = $this->getLogo($config, $crawler);


        $content['stores'] = $this->getStores($config);


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
            $segment = implode('/', $config->segment);
            $url = $config->domain.'/'.$segment;

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



    private function getStores($config)
    {
        $config->api->raw->page = 0;
        $json = http_build_query($config->api->raw);
        $params = http_build_query($config->api->params);

        $requests[] = array(
            "indexName" => "Lojas",
            "params" => $json
        );

        $form_params = array(
            "requests" => $requests
        );

        $guzzle = new Client();
        $response = $guzzle->request($config->api->method, $config->api->url.$params, [
            'headers' => [ # Não obrigatório
                'Accept' => 'application/json',
                'Content-Type' => 'application/x-www-form-urlencoded'
            ],
            'json' => $form_params
        ]);

        $body = $response->getBody();
        $contents = json_decode($body->getContents());
        $results = $contents->results[0];

        $items[0] = $results->hits;
        $pages = $results->nbPages-1;

        for ($i = 1; $i <= $pages; $i++) {
            $items[$i] = $this->getPagination($config, $i);
        }

        foreach ($items as $item) {
            foreach ($item as $value) {
                $stores[] = $value;
            }
        }

        return $stores;
    }


    private function getPagination($config, $page)
    {
        $config->api->raw->page = $page;
        $json = http_build_query($config->api->raw);
        $params = http_build_query($config->api->params);

        $requests[] = array(
            "indexName" => "Lojas",
            "params" => $json
        );

        $form_params = array(
            "requests" => $requests
        );

        $guzzle = new Client();
        $response = $guzzle->request($config->api->method, $config->api->url.$params, [
            'headers' => [ # Não obrigatório
                'Accept' => 'application/json',
                'Content-Type' => 'application/x-www-form-urlencoded'
            ],
            'json' => $form_params
        ]);

        $body = $response->getBody();
        $contents = json_decode($body->getContents());
        $results = $contents->results[0];

        return $results->hits;

    }
}