<?php
/**
 * Created by AV Design.
 * User: Anselmo Velame
 * Date: 16/12/19
 * Time: 10:20
 */

namespace App\Services\Web\Traits;


trait RelatedTrait
{
    public function getConfig()
    {
        return [
            'slug' => $this->getSlug(),
            'grendenekids' => [
                'name' => 'Grendene Kids',
                'domain' => 'http://www.grendenekids.com.br',
                'page' => 'produto',
                'banners' => $this->getBanners()->grendenekids
            ]

        ];
    }


    /**
     * Identificadores das tabs
     *
     * @return array
     */
    public function getBanners()
    {
        $banners = [
           'grendenekids' => [
                0 => [
                    'title' => 'Novas Sandálias Disney',
                    'description' => 'Uma super novidade das Princesas',
                    'overlay' => 'right',
                    'link' => 'disney-fantasy-sandalia',
                    'image' => asset('images/fabricas/grendene/kids/disneyfantasy.png')
                ],
                1 => [
                    'title' => 'Hora do Duelo!',
                    'description' => 'Homem-Aranha com Duelo de Pião',
                    'overlay' => 'left',
                    'link' => 'homem-aranha-start-fight-gaspea',
                    'image' => asset('images/fabricas/grendene/kids/homemaranha.png')
                ],
                2 => [
                    'title' => 'Novidade na Área',
                    'overlay' => 'right',
                    'description' => 'Novas sandálias Lol!',
                    'link' => 'lol-hit-collection',
                    'image' => asset('images/fabricas/grendene/kids/lol.png')
                ],
                3 => [
                    'title' => 'Patrulha Canina',
                    'description' => 'Fofa como nossos heróis de quatro patas',
                    'overlay' => 'bottom-left',
                    'link' => 'patrulha-canina-book-assandalhado',
                    'image' => asset('images/fabricas/grendene/kids/partrulhacanina.png')
                ],
                4 => [
                    'title' => 'Mickey e Minnie',
                    'description' => 'O presente perfeito para quem acabou de chegar',
                    'overlay' => 'left',
                    'link' => 'disney-sweet-dreams-sandalia',
                    'image' => asset('images/fabricas/grendene/kids/mickeyeminnie.png')
                ],
                5 => [
                    'title' => 'Barbie volta ao mundo',
                    'description' => 'Com a maleta, Abriu Guardou!',
                    'overlay' => 'bottom-right',
                    'link' => 'barbie-volta-ao-mundo-sandalia',
                    'image' => asset('images/fabricas/grendene/kids/barbie.png')
                ],
                6 => [
                    'title' => 'Aventura a Vista!',
                    'description' => 'Novas sandálias com Batman com BatBoat',
                    'overlay' => 'right',
                    'link' => 'batman-lancha-sandalia',
                    'image' => asset('images/fabricas/grendene/kids/batboat.png')
                ],
                7 => [
                    'title' => 'LOL DIVA BAG',
                    'description' => 'Bora fazer um Remix Fashion?',
                    'overlay' => 'left',
                    'link' => 'lol-diva-bag-sandalia',
                    'image' => asset('images/fabricas/grendene/kids/loldiva.png')
                ]
           ]
        ];

        return typeJson($banners);
    }

    /**
     * @return array
     */
    public function getSlug()
    {
        return [
            'grendenekids'
        ];
    }
}