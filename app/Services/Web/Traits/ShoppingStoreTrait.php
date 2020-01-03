<?php
/**
 * Created AV Design
 * User: Anselmo Velame
 * Date: 29/12/19
 * Time: 11:43
 */

namespace App\Services\Web\Traits;


trait ShoppingStoreTrait
{
    public function getConfig()
    {
        return [
            'slug' => $this->getSlug(),
            'isMobile' => $this->isMobile(),
            'map' => [
                'width' => 100,
                'height' => 450,
            ],
            'territoriodocalcado' => [
                'domain' => 'https://territoriodocalcado.com.br',
                'segment' => [
                    'lojas'
                ],
                'logo' => [
                    'url' => 'https://territoriodocalcado.com.br',
                    'style' => 'background-color: #0063A3;',
                    'element' => [
                        '.mobile-nav',
                        'img'
                    ]
                ],
                'details' => [
                    'url' => 'https://territoriodocalcado.com.br/lojas/'
                ],
                'api' => [
                    'method' => 'POST',
                    'url' => 'https://dp4f945ns9-dsn.algolia.net/1/indexes/*/queries?',
                    'headers' => [
                        'Accept' => 'application/json',
                        'Content-Type' => 'application/x-www-form-urlencoded'
                    ],
                    'params' => [
                        'x-algolia-agent' => 'Algolia for JavaScript (3.35.1); Browser (lite); react (16.12.0); react-instantsearch (5.7.0); JS Helper (2.28.0)',
                        'x-algolia-application-id' => 'DP4F945NS9',
                        'x-algolia-api-key' => '9021460c4a2e5a00628ed247eb192996'
                    ],
                    'raw' => [
                        "query" => "",
                        "maxValuesPerFacet" => 10,
                        "page" => 0,
                        "highlightPreTag" => "<ais-highlight-0000000000>",
                        "highlightPostTag" => "</ais-highlight-0000000000>",
                        "facets" => '["tags"]',
                        "tagFilters" => '',
                        "facetFilters" => '["tags:Sandálias"]'
                    ],
                    'images' => [
                        'url' => 'https://app.territoriodocalcado.com.br'
                    ]
                ]
            ]

        ];
    }


    private function getSlug()
    {
        return  [
            'territoriodocalcado'
        ];
    }


    private function isMobile()
    {
        $agent = new \Jenssegers\Agent\Agent;
        if ($agent->isMobile()) {
            return true;
        }

        return false;
    }


}