<?php
/**
 * Created by AV Design.
 * User: Anselmo Velame
 * Date: 11/12/19
 * Time: 11:01
 */

namespace App\Services\Web\Traits;


trait ClawsTrait
{

    /**
     * Configurando dicas para lojistas.
     *
     *
     * @return array
     */
    public function getConfig()
    {
        return [
            'slug' => $this->getSlug(),
            'menu' => $this->getMenu(),
            'doutorvarejo' => [
                'domain' => 'http://www.doutorvarejo.com',
                'sales' => [
                    'author' => '#doutorvarejo',
                    'url' => 'http://www.doutorvarejo.com/category/vendas',
                    'evaluate' => '//div[@class="grid-box"]',
                    'element' => '.grid-box',
                    'parent' => '.news-post',
                    'evalMenu' => '//div[@class="title-section"]',
                    'title' => [
                        '.post-title',
                        'h2',
                    ],
                    'link' => [
                        '.post-title',
                        'h2',
                        'a'
                    ],
                    'date' => [
                        '.post-title',
                        '> ul',
                        '> li'
                    ],
                    'image' => [
                        '.post-gallery',
                        '.thumb-wrap',
                        'img'
                    ],
                    'description' => [
                        '.post-content',
                        'p'
                    ]
                ],
                'marketing' => [
                    'author' => '#doutorvarejo',
                    'url' => 'http://www.doutorvarejo.com/category/marketing',
                    'evaluate' => '//div[@class="grid-box"]',
                    'element' => '.grid-box',
                    'parent' => '.news-post',
                    'evalMenu' => '//div[@class="title-section"]',
                    'title' => [
                        '.post-title',
                        'h2',
                    ],
                    'link' => [
                        '.post-title',
                        'h2',
                        'a'
                    ],
                    'date' => [
                        '.post-title',
                        '> ul',
                        '> li'
                    ],
                    'image' => [
                        '.post-gallery',
                        '.thumb-wrap',
                        'img'
                    ],
                    'description' => [
                        '.post-content',
                        'p'
                    ]
                ],
                'manager' => [
                    'author' => '#doutorvarejo',
                    'url' => 'http://www.doutorvarejo.com/category/gestao',
                    'evaluate' => '//div[@class="grid-box"]',
                    'element' => '.grid-box',
                    'parent' => '.news-post',
                    'evalMenu' => '//div[@class="title-section"]',
                    'title' => [
                        '.post-title',
                        'h2',
                    ],
                    'link' => [
                        '.post-title',
                        'h2',
                        'a'
                    ],
                    'date' => [
                        '.post-title',
                        '> ul',
                        '> li'
                    ],
                    'image' => [
                        '.post-gallery',
                        '.thumb-wrap',
                        'img'
                    ],
                    'description' => [
                        '.post-content',
                        'p'
                    ]
                ],
                'product' => [
                    'author' => '#doutorvarejo',
                    'url' => 'http://www.doutorvarejo.com/category/produto',
                    'evaluate' => '//div[@class="grid-box"]',
                    'element' => '.grid-box',
                    'parent' => '.news-post',
                    'evalMenu' => '//div[@class="title-section"]',
                    'title' => [
                        '.post-title',
                        'h2',
                    ],
                    'link' => [
                        '.post-title',
                        'h2',
                        'a'
                    ],
                    'date' => [
                        '.post-title',
                        '> ul',
                        '> li'
                    ],
                    'image' => [
                        '.post-gallery',
                        '.thumb-wrap',
                        'img'
                    ],
                    'description' => [
                        '.post-content',
                        'p'
                    ]
                ],
                'details' => [
                    'segment' => 3,
                    'content' => '.block-content',
                    'element' => '.single-post-box',
                    'parent' => '.the-content',
                    'author' => 'doutorvarejo',
                    'title' => [
                        '.title-post',
                        'h1'
                    ],
                    'date' => [
                        '.title-post',
                        '> ul',
                        '> li'
                    ],
                    'image' => [
                        '.post-gallery',
                        '.thumb-wrap',
                        'img'
                    ],
                    'tags' => [
                        'h2'
                    ],
                    'remove' => [
                        'figure'
                    ],
                    'replace' => [
                        'http://www.doutorvarejo.com' => config('app.url').'/dicas/lojista',
                        'http://www.doutorvarejo.com/gestao' => config('app.url').'/dicas/lojista',
                        'href="https://www.wilsonatacado.com.br' => 'href= "javascript:void(0)" rel="https://www.wilsonatacado.com.br',
                        ' target="_blank"' => '',
                        'src' => 'src="'.asset('images/bg/clear.png').'" img-data',
                        'width' => 'width="1px" img-width',
                        'height' => 'height="1px" img-height',
                        'sizes' => 'img-sizes'
                    ]
                ]
            ]
        ];


    }

    /**
     * Identificadores das tabs
     *
     * @return array
     */
    public function getMenu()
    {
        return [
            'sales',
            'marketing',
            'manager',
            'product'
        ];
    }

    /**
     * @return array
     */
    public function getSlug()
    {
        return [
            'doutorvarejo',
            'doutorvarejo',
            'doutorvarejo',
            'doutorvarejo'
        ];
    }

    /**
     * @return array
     */
    public function changeSlug($slug)
    {
        $response = [
            'doutorvarejo' => 'lojista',
            'lojista' => 'doutorvarejo'
        ];



        return typeJson($response[$slug]);
    }



}