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
                    'slug' => 'dock-calcados',
                    'title' => '',
                    'description' => '',
                    'logo' => [
                        'url' => '',
                        'style' => '',
                        'element' => [
                            '.qodef-logo-wrapper',
                            'a',
                            'img'
                        ]
                    ],
                    'products' => null,
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
                        'images' => [
                            'https://dokcalcados.com.br/wp-content/uploads/2019/03/07-e1555258988622.jpg',
                            'https://dokcalcados.com.br/wp-content/uploads/2019/02/DOK-Calçados-01472-1.jpg',
                            'https://dokcalcados.com.br/wp-content/uploads/2019/02/DOK-Calçados-01474-e1555258001174.jpg',
                            'https://dokcalcados.com.br/wp-content/uploads/2019/03/03-e1555258110737.jpg'
                        ]
                    ],
                    'details' => [
                        'url' => 'http://plugt.com.br',
                        'segment' => [
                            'wp',
                            'produtos'
                        ]
                    ]
                ],

                'grugui' => [
                    'domain' => 'http://grugui.com.br',
                    'segment' => [
                        'produtos'
                    ],
                    'name' => 'Grugui Calçados Infantis',
                    'slug' => 'grugui-calcados-infantis',
                    'title' => 'A empresa oferece uma linha completa de calçados infantil, infanto-juvenil, juvenil e modinha.',
                    'description' => '',
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
                        'segment' => '',
                        'parent' => '.produtos-list',
                        'element' => '.thumbnail',
                        'href' => null,
                        'name' => 'alt',
                        'src' => 'img',
                        'alt' => 'alt',
                        'code' => '.thumbnail',
                        'price' => null,
                        'description' => [
                            '.thumbnail',
                            'data-original-title'
                        ]
                    ],
                    'tags' => [
                        'Bebê',
                        'Infantil',
                        'Juvenil'
                    ],
                    'banners' => null,
                    'details' => [
                        'url' => 'http://grugui.com.br',
                        'segment' => [
                            'produtos'
                        ]
                    ]
                ],

                'pecompe' => [
                    'products_url' => 'domain',
                    'domain' => 'https://pecompe.com.br',
                    'segment' => null,
                    'name' => 'Pé com Pé Calçados Infantis',
                    'slug' => 'pe-com-pe',
                    'title' => 'Pé com Pé foi marcado por investimentos contínuos em tecnologia, qualidade, valor agregado dos produtos e no fortalecimento de sua marca.',
                    'description' => '',
                    'logo' => [
                        'url' => '',
                        'style' => '',
                        'element' => [
                            '.logo',
                            'img'
                        ]
                    ],
                    'products' => null,
                    'tags' => [
                        'Meninos',
                        'Meninas'
                    ],
                    'banners' => [
                        'url' => '',
                        'segment' => null,
                        'parent' => '.cwsSlider',
                        'element' => '.cwsRwdSlider .slides li',
                        'src' => 'img',
                        'images' => null
                    ],
                    'details' => [
                        'url' => 'http://grugui.com.br',
                        'segment' => [
                            'produtos'
                        ]
                    ]
                ],

                'pequito' => [
                    'domain' => 'http://www.pequito.com.br',
                    'segment' => [
                        'produtos'
                    ],
                    'name' => 'Pequito Calçados',
                    'slug' => 'pequito-calcados',
                    'title' => 'Diferencial competitivo: Design dos produtos, agilidade nos lançamentos, tecnologia e conforto',
                    'description' => '',
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
                        'segment' => [
                            'produtos'
                        ],
                        'parent' => '.produtosLista',
                        'element' => '.colunaproduto',
                        'href' => null,
                        'name' => '.colunaproduto p',
                        'src' => 'href',
                        'alt' => null,
                        'code' => null,
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
                        'src' => 'img',
                        'images' => null
                    ],
                    'details' => [
                        'url' => 'http://www.pequito.com.br',
                        'segment' => [
                            'produtos'
                        ]
                    ]
                ],

                'pinokio' => [
                    'products_url' => 'domain',
                    'domain' => 'http://pinokio.com.br',
                    'segment' => null,
                    'name' => 'Pinokio Calçados Infantis',
                    'slug' => 'pinokio-calcados',
                    'title' => 'Pinokio Calçados Infantis, qualidade, conforto, beleza, diversão e estilo ao pé da letra.',
                    'description' => '',
                    'logo' => [
                        'url' => 'http://pinokio.com.br',
                        'style' => '',
                        'element' => [
                            '.content',
                            '.logotipo',
                            'img'
                        ]
                    ],
                    'products' => null,
                    'tags' => [
                        'Infantil',
                        'Juvenil'
                    ],
                    'banners' => [
                        'url' => 'http://www.pinokio.com.br/',
                        'segment' => null,
                        'parent' => '.banner',
                        'element' => '.bxslider li',
                        'src' => 'img',
                        'images' => null
                    ],
                    'details' => [
                        'url' => 'http://grugui.com.br',
                        'segment' => [
                            'produtos'
                        ]
                    ]
                ],

                'plugt' => [
                    'products_url' => 'domain',
                    'domain' => 'http://www.plugt.com.br',
                    'segment' => [
                        'wp'
                    ],
                    'name' => 'Plugt Calçados Infantis',
                    'slug' => 'plugt-calcados-injetados',
                    'title' => 'Sempre nos inspiramos no poder da imaginação das crianças para criar produtos divertidos e coloridos assim como a Plugt é! Ah, e sem deixar de lado o conforto, a praticidade de calce e a facilidade em lavar que as mamães amam!',
                    'description' => '',
                    'logo' => [
                        'url' => 'http://www.plugt.com.br/wp/wp-content/themes/plugtplanet/img/logo.png',
                        'style' => '',
                        'element' => ''
                    ],
                    'products' => null,
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
                        'src' => 'img',
                        'images' => null
                    ],
                    'details' => [
                        'url' => 'http://plugt.com.br',
                        'segment' => [
                            'wp',
                            'produtos'
                        ]
                    ]
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