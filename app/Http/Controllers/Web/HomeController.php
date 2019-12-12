<?php

namespace App\Http\Controllers\Web;

use App\Services\Web\ClawsServices;
use App\Http\Controllers\Controller;

use App\Services\Web\BreakingNews;

class HomeController extends Controller
{
    /**
     * @var BreakingNews
     */
    private $breakingNews;
    /**
     * @var ClawsServices
     */
    private $clawsServices;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ClawsServices $clawsServices, BreakingNews $breakingNews)
    {
        //$this->middleware('auth');
        $this->breakingNews = $breakingNews;
        $this->clawsServices = $clawsServices;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        //Últimas notícias
        $news  = typeJson($this->breakingNews->getNews());
        //Dicas para Loistas
        $claws = typeJson($this->getClaws());


        return view('home.home-1', compact('news', 'claws'));
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
}
