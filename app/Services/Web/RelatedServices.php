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


    public function getRelateds()
    {
        return $this->config;
    }


}