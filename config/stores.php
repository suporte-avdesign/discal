<?php

$slug = [
    'danielatacado',
    'clovisatacado'
];

return [
    'slug' => $slug,
    'map' => [
        'width' => 100,
        'height' => 450,
    ],
    'clovisatacado' => [
        'title' => 'Clovis Atacado',
        'address' => 'R. Cavalheiro, 368 - Brás - São Paulo',
        'description' => 'Maior Rede de Lojas de Calçados com Vendas no Atacado e no Varejo. Lojas no Brás, 25 de Março, Centro de São Paulo entrega para todo Brasil.',
        'logo' => [
            'url' => 'https://www.clovisatacado.com.br',
            'element' => '.page-header__middle--logo a img',
            'style' => ''
        ],
        'banners' => [
            'url' => '',
            'evaluate' => '//div[@class="desktop"]',
            'parent' => '.desktop',
            'total' => '//div[@class="box-banner"]',
            'element' => '.box-banner',
            'height' => 250
        ],
        'products' => [
            'url' => 'https://www.clovisatacado.com.br',
            'evaluate' => '//div[@class="prateleira__item"]',
            'parent' => '.prateleira__item',
            'total' => '//div[@class="prateleira__item"]',
            'element' => '.prateleira__item',
            'title' => '.prateleira__item',
            'link' => '.prateleira__image-link',
            'image' => '.prateleira__image img',

        ],
        'maps' => [
            'marker' => '-23.542164, -46.613021',
            'iframe' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.721569494319!2d-46.61686!3d-23.5425147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce591fe94ea4f3%3A0x29485afc5b5c0f42!2sClovis%20Atacado!5e0!3m2!1spt-BR!2sbr!4v1575222660304!5m2!1spt-BR!2sbr'
        ]
    ],
    'danielatacado' => [
        'title' => 'Daniel Calçados',
        'address' => 'Rua Cavalheiro, 166 - Brás - São Paulo - Brasil',
        'description' => 'Representante online da Grendene. Calçados Masculinos, femininos e infantil no Atacado. Preço baixo e pronta entrega para todo o Brasil.',
        'logo' => [
            'url' => '',
            'element' => '.logo a img',
            'style' => 'background-color: #f16063;'
        ],
        'banners' => [
            'url' => 'https://www.danielatacado.com.br/',
            'evaluate' => '//div[@class="owl-carousel"]',
            'parent' => '#banner-top',
            'total' => '//div[@class="item"]',
            'element' => '.item',
            'height' => 160
        ],
        'products' => [
            'url' => 'https://www.danielatacado.com.br/',
            'evaluate' => '//span[@class="product-grid-separate"]',
            'parent' => '.products-grid',
            'total' => 'span[@class="product-grid-separate"]',
            'element' => '.product-grid-separate .item',
            'title' => 'a',
            'link' => 'a',
            'image' => 'img',
        ],
        'maps' => [
            'marker' => '-23.543212, -46.614604',
            'iframe' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.721569494319!2d-46.61686!3d-23.5425147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce591fe94ea4f3%3A0x29485afc5b5c0f42!2sClovis%20Atacado!5e0!3m2!1spt-BR!2sbr!4v1575222660304!5m2!1spt-BR!2sbr'
        ]
    ],
    'fabiolapezzi' => [
        'title' => 'Fabiola Pezzi',
        'address' => '',
        'description' => 'Representante online da Grendene. Calçados Masculinos, femininos e infantil no Atacado. Preço baixo e pronta entrega para todo o Brasil.',
        'logo' => [
            'url' => '',
            'element' => '.logo a img',
            'style' => 'background-color: #f16063;'
        ],
        'banners' => [
            'url' => 'https://www.danielatacado.com.br/',
            'evaluate' => '//div[@class="owl-carousel"]',
            'parent' => '#banner-top',
            'total' => '//div[@class="item"]',
            'element' => '.item',
            'height' => 160
        ],
        'products' => [
            'url' => 'https://www.danielatacado.com.br/',
            'evaluate' => '//span[@class="product-grid-separate"]',
            'parent' => '.products-grid',
            'total' => 'span[@class="product-grid-separate"]',
            'element' => '.product-grid-separate .item',
            'title' => 'a',
            'link' => 'a',
            'image' => 'img',
        ],
        'maps' => [
            'marker' => '-23.539206, -46.619183',
            'iframe' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.721569494319!2d-46.61686!3d-23.5425147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce591fe94ea4f3%3A0x29485afc5b5c0f42!2sClovis%20Atacado!5e0!3m2!1spt-BR!2sbr!4v1575222660304!5m2!1spt-BR!2sbr'
        ]
    ]

];


