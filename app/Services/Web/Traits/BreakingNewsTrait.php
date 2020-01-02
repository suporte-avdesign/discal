<?php
/**
 * Created AV Design.
 * User: Anselmo Velame
 * Date: 29/12/19
 * Time: 01:18
 */

namespace App\Services\Web\Traits;


trait BreakingNewsTrait
{
    public function getConfig()
    {
        return [
            'slug' => $this->getSlug(),
            'abicalcados' => [
                'domain' => 'http://www.abicalcados.com.br/noticias',
                'logo' => [
                    'url' => 'http://www.abicalcados.com.br',
                    'style' => 'background-color: #0063A3;',
                    'element' => [
                        '.c-main-header__logo',
                        'a',
                        'img'
                    ]
                ],
                'news' => [
                    'url' => 'http://www.abicalcados.com.br',
                    'parent' => '.c-news-section__list',
                    'element' => '.c-news-section__item',
                    'title' => '.c-news-box__title',
                    'image' => '.c-news-box__img img',
                    'link' => '.c-news-box a'
                ]
            ]
        ];
    }


    private function getSlug()
    {
        return  [
            'abicalcados'
        ];
    }

}