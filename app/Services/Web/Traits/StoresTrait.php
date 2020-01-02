<?php
/**
 * Created by PhpStorm.
 * User: avdesign
 * Date: 21/12/19
 * Time: 21:22
 */

namespace App\Services\Web\Traits;


trait StoresTrait
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
            'clovisatacado' => [
                'domain' => 'https://www.clovisatacado.com.br',
                'page' => 'feminino',
                'title' => 'Clovis Atacado',
                'address' => 'R. Cavalheiro, 368 - Brás - São Paulo',
                'description' => 'Maior Rede de Lojas de Calçados com Vendas no Atacado e no Varejo. Lojas no Brás, 25 de Março, Centro de São Paulo entrega para todo Brasil.',
                'content' => '.page-wrapper .page-content',
                'logo' => [
                    'url' => 'https://www.clovisatacado.com.br',
                    'style' => '',
                    'element' => [
                        '.page-header__middle--logo',
                        'a',
                        'img'
                    ]
                ],
                'menu' => [
                    'url' => 'https://www.clovisatacado.com.br',
                    'parent' => '.navigation__menu-content--wrapper',
                    'element' => '.navigation__menu-content--wrapper-title'
                ],
                'banners' => [
                    'url' => '',
                    'parent' => [
                        'desktop' => '.desktop',
                        'mobile' => '.mobile'
                    ],
                    'element' => [
                        '.box-banner'
                    ],
                    'height' => 250
                ],
                'products' => [
                    'url' => 'https://www.clovisatacado.com.br',
                    'parent' => '.prateleira',
                    'element' => '.prateleira__item',
                    'title' => '.prateleira__name',
                    'link' => '.prateleira__image-link',
                    'image' => '.prateleira__image img',
                    'qty_text' => 'Caixa com ',
                    'qty' => '.prateleira__numero-de-pares li',
                    'price' => '.prateleira__box-price strong'
                ],
                'maps' => [
                    'marker' => '-23.542164, -46.613021',
                    'iframe' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.721569494319!2d-46.61686!3d-23.5425147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce591fe94ea4f3%3A0x29485afc5b5c0f42!2sClovis%20Atacado!5e0!3m2!1spt-BR!2sbr!4v1575222660304!5m2!1spt-BR!2sbr'
                ],
                'remove' => [
                    'header',
                    '.modal',
                    '#modal-contato',
                    '.c-both'
                ],
            ],
            'danielatacado' => [
                'domain' => 'https://www.danielatacado.com.br',
                'page' => 'feminino',
                'title' => 'Daniel Calçados',
                'address' => 'Rua Cavalheiro, 166 - Brás - São Paulo - Brasil',
                'description' => 'Representante online da Grendene. Calçados Masculinos, femininos e infantil no Atacado. Preço baixo e pronta entrega para todo o Brasil.',
                'logo' => [
                    'url' => '',
                    'style' => 'background-color: #f16063;',
                    'element' => [
                        '.logo',
                        'a',
                        'img'
                    ]
                ],
                'menu' => [
                    'url' => '',
                    'parent' => '#nav',
                    'element' => '.parent'
                ],
                'banners' => [
                    'url' => 'https://www.danielatacado.com.br/',
                    'parent' => [
                        'desktop' => '#banner-top',
                        'mobile' => '#banner-top'
                    ],
                    'element' => [
                        '.item'
                    ],
                    'height' => 250
                ],
                'products' => [
                    'url' => '',
                    'parent' => '.products-grid',
                    'element' => '.item',
                    'title' => '.infobox .product-name',
                    'link' => '.product-image-wrapper',
                    'image' => '.product-image img',
                    'qty_text' => '',
                    'qty' => '.por-caixa',
                    'price' => '.containerTag'
                ],
                'maps' => [
                    'marker' => '-23.543212, -46.614604',
                    'iframe' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.721569494319!2d-46.61686!3d-23.5425147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce591fe94ea4f3%3A0x29485afc5b5c0f42!2sClovis%20Atacado!5e0!3m2!1spt-BR!2sbr!4v1575222660304!5m2!1spt-BR!2sbr'
                ]
            ],
            'wilsonatacado' => [
                'domain' => 'https://www.wilsonatacado.com.br',
                'page' => 'havaianas',
                'title' => 'Distribuidora Wilson',
                'address' => 'Rua Cavalheiro, nº 286, Brás, São Paulo - Brasil',
                'description' => 'Atacado de HAVAIANAS autorizado Alpargatas com distribuição para todo Brasil. A Distribuidora Wilson possui variedade a grande estoque de havaianas no atacado.',
                'logo' => [
                    'url' => '',
                    'style' => 'background-color: #f14c58;',
                    'element' => [
                        '.logo',
                        'a',
                        'img'
                    ]
                ],
                'menu' => [
                    'url' => '',
                    'parent' => '#nav',
                    'element' => '.parent'
                ],
                'banners' => [
                    'url' => '',
                    'parent' => [
                        'desktop' => '#banner-top',
                        'mobile' => '#banner-top'
                    ],
                    'element' => [
                        '.item'
                    ],
                    'height' => 250
                ],
                'products' => [
                    'url' => '',
                    'parent' => '.products-grid',
                    'element' => '.item',
                    'title' => '.infobox .product-name',
                    'link' => '.infobox .product-name a',
                    'image' => '.product-image img',
                    'qty_text' => '',
                    'qty' => '.pricecaixa',
                    'price' => '.containerTag'
                ],
                'maps' => [
                    'marker' => '-23.542493, -46.613483',
                    'iframe' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.721569494319!2d-46.61686!3d-23.5425147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce591fe94ea4f3%3A0x29485afc5b5c0f42!2sClovis%20Atacado!5e0!3m2!1spt-BR!2sbr!4v1575222660304!5m2!1spt-BR!2sbr'
                ]
            ],
            'avacy' => [
                'domain' => 'https://www.avacy.com.br',
                'page' => 'feminino',
                'title' => 'AVACY DISTRIBUIDORA',
                'address' => 'Rua Gomes Cardim, 235, Brás - São Paulo - Brasil',
                'description' => 'A Avacy Distribuidora é uma empresa de atacado de calçados. Com uma tradição de mais de 49 anos vendendo calçados no atacado em São Paulo.',
                'logo' => [
                    'url' => '',
                    'style' => '',
                    'element' => [
                        '.logo',
                        'a',
                        'img'
                    ]
                ],
                'menu' => [
                    'url' => '',
                    'parent' => '#nav',
                    'element' => '.parent'
                ],
                'banners' => [
                    'url' => '',
                    'parent' => [
                        'desktop' => '#banner-top',
                        'mobile' => '#banner-top'
                    ],
                    'element' => [
                        '.item'
                    ],
                    'height' => 250
                ],
                'products' => [
                    'url' => '',
                    'parent' => '.products-grid',
                    'element' => '.item',
                    'title' => '.infobox .product-name',
                    'link' => '.infobox .product-name a',
                    'image' => '.product-image img',
                    'qty_text' => '',
                    'qty' => '.pricecaixa',
                    'price' => '.containerTag'
                ],
                'maps' => [
                    'marker' => '-23.542493, -46.613483',
                    'iframe' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.721569494319!2d-46.61686!3d-23.5425147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce591fe94ea4f3%3A0x29485afc5b5c0f42!2sClovis%20Atacado!5e0!3m2!1spt-BR!2sbr!4v1575222660304!5m2!1spt-BR!2sbr'
                ]
            ]


        ];
    }


    private function getSlug()
    {
        return  [
            'danielatacado',
            'clovisatacado',
            'wilsonatacado',
            'avacy'
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