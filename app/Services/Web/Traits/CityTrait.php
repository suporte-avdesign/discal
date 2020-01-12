<?php
/**
 * Created AV Design.
 * User: Anselmo Velame
 * Date: 04/01/20
 * Time: 20:30
 */

namespace App\Services\Web\Traits;


trait CityTrait
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
            'birigui' => [

                'dokcalcados' => [
                    'domain' => 'https://dokcalcados.com.br',
                    'segment' => [
                        'nossa-historia'
                    ],
                    'name' => 'Dok Calçados',
                    'slug' => 'dokcalcados',
                    'title' => 'Dok Calçados - Berigui',
                    'description' => 'Seja um revendedor Dok! Tenha em sua loja, calçados lindos e confortáveis.',
                    'address' => 'Av. Nelson Calixto, 310 - Birigui - SP',
                    'logo' => [
                        'url' => '',
                        'style' => '',
                        'element' => [
                            '.qodef-logo-wrapper',
                            'a',
                            'img'
                        ]
                    ],
                    'products' => [
                        'url' => '',
                        'segment' => [
                            'produtos'
                        ],
                        'parent' => '.qodef-page-content-holder',
                        'element' => '.qodef-eh-item-content',
                        'href' => null,
                        'name' => null,
                        'src' => 'img',
                        'alt' => null,
                        'code' => null,
                        'price' => null,
                        'description' => '.wpb_text_column .wpb_wrapper'
                    ],
                    'tags' => [
                        'Abotinados',
                        'Sandálias',
                        'Sapatilhas',
                        'Tênis',
                        'Coturnos',
                        'Papetes',
                        'Injetados'
                    ],
                    'banners' => [
                        'url' => null,
                        'segment' => null,
                        'parent' => '',
                        'element' => '',
                        'height' => '350',
                        'images' => [
                            'https://dokcalcados.com.br/wp-content/uploads/2019/03/07-e1555258988622.jpg',
                            'https://dokcalcados.com.br/wp-content/uploads/2019/02/DOK-Calçados-01472-1.jpg',
                            'https://dokcalcados.com.br/wp-content/uploads/2019/02/DOK-Calçados-01474-e1555258001174.jpg',
                            'https://dokcalcados.com.br/wp-content/uploads/2019/03/03-e1555258110737.jpg'
                        ]
                    ],
                    'details' => [
                        'url' => '',
                        'segment' => [
                            'feminino'
                        ],
                        'menu' => [
                            'element' => [
                                '.sub_menu',
                                '.menu-item-object-page',
                                'a',
                            ],
                            'href' => 'href',
                            'text' => 'a'
                        ]
                    ],
                    'maps' => [
                        'marker' => '-21.3047345, -50.3425379',
                        'iframe' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.721569494319!2d-46.61686!3d-23.5425147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce591fe94ea4f3%3A0x29485afc5b5c0f42!2sClovis%20Atacado!5e0!3m2!1spt-BR!2sbr!4v1575222660304!5m2!1spt-BR!2sbr'
                    ],

                ],

                'grugui' => [
                    'domain' => 'http://grugui.com.br',
                    'segment' => [
                        'produtos'
                    ],
                    'name' => 'Grugui Calçados Infantis',
                    'slug' => 'grugui',
                    'title' => 'Grugui Calçados Infantis: Birigui - São Paulo - Brasil',
                    'description' => 'A empresa oferece uma linha completa de calçados infantil, infanto-juvenil, juvenil e modinha.',
                    'address' => 'Rua José Terence, 535 - Jardim Marister - Birigui - SP',
                    'logo' => [
                        'url' => '',
                        'style' => '',
                        'element' => [
                            '.navbar-header',
                            '.navbar-brand',
                            'img'
                        ]
                    ],
                    'products' => [
                        'url' => '',
                        'segment' => [
                            'produtos',
                            'categoria',
                            '48'
                        ],
                        'parent' => '.produtos-list',
                        'element' => '.thumbnail',
                        'href' => null,
                        'name' => 'alt',
                        'src' => 'img',
                        'alt' => 'alt',
                        'code' => '.thumbnail',
                        'price' => null,
                        'description' => null
                    ],
                    'tags' => [
                        'Bebê',
                        'Infantil',
                        'Juvenil'
                    ],
                    'banners' => [
                        'url' => null,
                        'segment' => null,
                        'parent' => '',
                        'element' => '',
                        'height' => '350',
                        'images' => [
                            'http://grugui.com.br/assets/images/template/bg-header-b.jpg'
                        ]
                    ],
                    'details' => [
                        'url' => '',
                        'segment' => [
                            'produtos',
                            'categoria',
                            '48'
                        ],
                        'menu' => [
                            'element' => [
                                '.categorias',
                                '.nav',
                                'li',
                            ],
                            'href' => 'href',
                            'text' => 'title'
                        ]
                    ],
                    'maps' => [
                        'marker' => '-21.3080924, -50.3450616',
                        'iframe' => null
                    ]

                ],

                'pecompe' => [
                    'products_url' => 'domain',
                    'domain' => 'https://pecompe.com.br',
                    'segment' => null,
                    'name' => 'Pé com Pé Calçados Infantis',
                    'slug' => 'pecompe',
                    'title' => 'Pé com Pé Calçados Infantis: Berigui - São Paulo',
                    'description' => 'Pé com Pé foi marcado por investimentos contínuos em tecnologia, qualidade, valor agregado dos produtos e no fortalecimento de sua marca.',
                    'address' => ' Rua Manoel Cottas Azevedo, 71 - Jardim Klayton, Birigui - SP',
                    'logo' => [
                        'url' => '',
                        'style' => '',
                        'element' => [
                            '.logo',
                            'img'
                        ]
                    ],
                    'products' => [
                        'url' => '',
                        'segment' => null,
                        'parent' => '.col-main',
                        'element' => '.category-products .products-list .item',
                        'href' => 'href',
                        'name' => 'alt',
                        'src' => 'img',
                        'alt' => 'alt',
                        'code' => null,
                        'price' => null,
                        'description' => '.desc'
                    ],
                    'tags' => [
                        'Meninos',
                        'Meninas'
                    ],
                    'banners' => [
                        'url' => '',
                        'segment' => null,
                        'parent' => '.cwsSlider',
                        'element' => '.cwsRwdSlider .slides li',
                        'height' => '350',
                        'src' => 'img',
                        'images' => null
                    ],
                    'details' => [
                        'url' => 'https://pecompe.com.br',
                        'segment' => null,
                        'menu' => [
                            'element' => [
                                'li.parent',
                            ],
                            'href' => 'href',
                            'text' => '.has-children'
                        ]
                    ],
                    'maps' => [
                        'marker' => '-21.297456, -50.3296879',
                        'iframe' => null
                    ],

                ],

                'pequito' => [
                    'domain' => 'http://www.pequito.com.br',
                    'segment' => [
                        'produtos'
                    ],
                    'name' => 'Pequito Calçados',
                    'slug' => 'pequito',
                    'title' => 'Pequito Calçados - Berigui - SP ',
                    'description' => 'Diferencial competitivo: Design dos produtos, agilidade nos lançamentos, tecnologia e conforto',
                    'address' => 'Rua Marco Botteon,131, Jardim São Cristovão - Birigui – SP.',
                    'logo' => [
                        'url' => 'http://www.pequito.com.br',
                        'style' => '',
                        'element' => [
                            '.logo',
                            'img'
                        ]
                    ],
                    'products' => [
                        'url' => 'http://www.pequito.com.br',
                        'segment' => null,
                        'parent' => '.produtosLista',
                        'element' => '.colunaproduto',
                        'href' => null,
                        'name' => '.colunaproduto',
                        'src' => 'href',
                        'alt' => null,
                        'code' => 'title',
                        'price' => null,
                        'description' => null
                    ],
                    'tags' => [
                        'Bebê',
                        'Infantil'
                    ],
                    'banners' => [
                        'url' => 'http://www.pequito.com.br',
                        'segment' => null,
                        'parent' => '.banner',
                        'element' => '.rslides li',
                        'height' => '350',
                        'src' => 'img',
                        'images' => null
                    ],
                    'details' => [
                        'url' => 'http://www.pequito.com.br',
                        'segment' => [
                            'produtos',
                            'tenis-sola-caixa'
                        ],
                        'menu' => [
                            'element' => [
                                '.listaNav',
                                'li'
                            ],
                            'href' => 'a',
                            'text' => 'li a'
                        ]
                    ],
                    'maps' => [
                        'marker' => '-21.305443, -50.3352121',
                        'iframe' => null
                    ],

                ],

                'pinokio' => [
                    'products_url' => 'domain',
                    'domain' => 'http://pinokio.com.br',
                    'segment' => null,
                    'name' => 'Pinokio Calçados Infantis',
                    'slug' => 'pinokio',
                    'title' => 'Pinokio Calçados Infantis',
                    'description' => 'Pinokio Calçados Infantis, qualidade, conforto, beleza, diversão e estilo ao pé da letra.',
                    'address' => 'Rua Ângelo Borin, 560 - Jardim Marister - Birigui - SP',
                    'logo' => [
                        'url' => 'http://pinokio.com.br',
                        'style' => '',
                        'element' => [
                            '.content',
                            '.logotipo',
                            'img'
                        ]
                    ],
                    'products' => [
                        'url' => 'http://www.pinokio.com.br',
                        'segment' => null,
                        'parent' => '.produtoslista',
                        'element' => '.produtoColuna2',
                        'href' => null,
                        'name' => 'title',
                        'src' => 'href',
                        'alt' => null,
                        'code' => 'title',
                        'price' => null,
                        'description' => null
                    ],
                    'tags' => [
                        'Infantil',
                        'Juvenil'
                    ],
                    'banners' => [
                        'url' => 'http://www.pinokio.com.br/',
                        'segment' => null,
                        'parent' => '.banner',
                        'element' => '.bxslider li',
                        'height' => '400',
                        'src' => 'img',
                        'images' => null
                    ],
                    'details' => [
                        'url' => 'http://www.pinokio.com.br',
                        'segment' => [
                            'produtos',
                            'estrela'
                        ],
                        'menu' => [
                            'element' => [
                                '.produtoscategorias a'
                            ],
                            'href' => 'href',
                            'text' => 'p'
                        ]
                    ],
                    'maps' => [
                        'marker' => '-21.3083692, -50.346382',
                        'iframe' => null
                    ],

                ],

                'plugt' => [
                    'domain' => 'http://www.plugt.com.br',
                    'segment' => [
                        'wp'
                    ],
                    'name' => 'Plugt Calçados Infantis',
                    'slug' => 'plugt',
                    'title' => 'Plugt Calçados Infantis',
                    'description' => 'Sempre nos inspiramos no poder da imaginação das crianças para criar produtos divertidos e coloridos assim como a Plugt é!',
                    'address' => 'Rua Sílvio Vieira Coelho, 804 - Jardim Pérola - Birigui - SP',
                    'logo' => [
                        'url' => 'http://www.plugt.com.br/wp/wp-content/themes/plugtplanet/img/logo.png',
                        'style' => '',
                        'element' => ''
                    ],
                    'products' => [
                        'url' => '',
                        'segment' => null,
                        'parent' => '.container',
                        'element' => '.grid-lg-3',
                        'href' => null,
                        'name' => null,
                        'src' => 'img',
                        'alt' => null,
                        'code' => '.align-center',
                        'price' => null,
                        'description' => null
                    ],
                    'tags' => [
                        'Acessórios',
                        'Calçados Injetados',
                        'Kits',
                        'Lançamento',
                        'Meninos',
                        'Meninas',
                    ],
                    'banners' => [
                        'url' => '',
                        'segment' => null,
                        'parent' => '.slide-home',
                        'element' => '.slide-home img',
                        'height' => '400',
                        'src' => 'img',
                        'images' => null
                    ],
                    'details' => [
                        'url' => 'http://www.plugt.com.br',
                        'segment' => [
                            'wp',
                            'produtos'
                        ],
                        'menu' => null
                    ],
                    'maps' => [
                        'marker' => '-21.2990668, -50.3456334',
                        'iframe' => null
                    ],

                ],

            ],

        ];
    }

    private function getSlug()
    {
        return  [
            'birigui'
        ];
    }

    private function getStores()
    {
        return  [
            'birigui' => [
                'dokcalcados',
                'grugui',
                'pecompe',
                'pequito',
                'pinokio',
                'plugt'
            ]
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