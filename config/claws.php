<?php
/**
 * Slug: 1 para cada modulo.
 */
$slug = [
    'doutorvarejo',
    'doutorvarejo',
    'doutorvarejo',
    'doutorvarejo'
];

$menu = [
    'sales',
    'marketing',
    'manager',
    'product'
];



return [
    'slug' => $slug,
    'menu' => $menu,
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
            'evaluate' => '//div[@class="block-content"]',
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
            'remove' => [
                'figure'
            ],
            'replace' => [
                '<html><body><div class="the-content">' => '',
                '</div></body></html>' => '',
                'href' => 'href="javascript:void(0)" data-link',
                ' target="_blank"' => '',
                '<br></p>' => '</p>',
                '<p></p>' => '',
                'src' => 'src="'.asset('images/bg/clear.png').'" img-data',
                'width' => 'width="1px" img-width',
                'height' => 'height="1px" img-height',
                'sizes' => 'img-sizes',
            ]
        ]
    ]
];
