<?php

namespace App\Http\Controllers\Web;

use App\Services\Web\BreakingNews;
use App\Services\Web\ClawsServices;
use App\Services\Web\RelatedServices;
use App\Services\Web\ShoppingStoreServices;

use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    private $configHome;
    /**
     * @var BreakingNews
     */
    private $breakingNews;
    /**
     * @var ClawsServices
     */
    private $clawsServices;
    /**
     * @var RelatedServices
     */
    private $relatedServices;
    /**
     * @var ShoppingStoreServices
     */
    private $shoppingStoreServices;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(
        RelatedServices $relatedServices,
        ClawsServices $clawsServices,
        BreakingNews $breakingNews,
        ShoppingStoreServices $shoppingStoreServices)
    {
        //$this->middleware('auth');
        $this->breakingNews = $breakingNews;
        $this->clawsServices = $clawsServices;
        $this->relatedServices = $relatedServices;
        $this->shoppingStoreServices = $shoppingStoreServices;
        $this->configHome = array(
            'url_news' => 'abicalcados',
            'shopping' => 'territoriodocalcado'
        );


    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $configHome = typeJson($this->configHome);

        //Slider RelatedStore
        $relateds = typeJson($this->getRelated());
        //Últimas notícias
        $news  = typeJson($this->breakingNews->getNews($configHome->url_news));
        //Dicas para Loistas
        $claws = typeJson($this->getClaws());

        $shopping = typeJson($this->shoppingStoreServices->getShopping($configHome->shopping));

        return view('home.home-1', compact('news', 'claws', 'relateds', 'shopping'));
    }

    /**
     * Retorna modulo dicas.
     * @return mixed
     */
    public function getClaws()
    {
        $config = typeJson($this->clawsServices->getConfig());
        $menu = $this->clawsServices->getMenu();
        $slugs = $this->clawsServices->getSlug();
        $i=0;
        foreach ($slugs as $slug) {
            $item = $menu[$i];
            $claws_slugs[] = $this->clawsServices->getClaws($slug, $menu[$i], $config->$slug->$item->url);
            $i++;
        }

        return $claws_slugs;
    }


    public function getRelated()
    {
        $slugs  = $this->relatedServices->getSlug();
        $i=0;
        foreach ($slugs as $slug) {
            $relateds[] = $this->relatedServices->getRelateds($slug);
            $i++;
        }

        return $relateds[0];


    }
}
