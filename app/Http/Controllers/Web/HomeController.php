<?php

namespace App\Http\Controllers\Web;

use App\Services\ClawsServices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Services\BreakingNews;

class HomeController extends Controller
{
    /**
     * @var ClawsServices
     */
    private $clawsServices;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ClawsServices $clawsServices)
    {
        //$this->middleware('auth');
        $this->clawsServices = $clawsServices;

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(BreakingNews $breakingNews)
    {

        $menu = config('claws.menu');
        $slugs = config('claws.slug');
        $i=0;
        foreach ($slugs as $slug) {
            $claws_slugs[] = $this->clawsServices->getClaws($slug, $menu[$i], config("claws.{$slug}.{$menu[$i]}.url"));
            $i++;
        }

        $claws = typeJson($claws_slugs);



        $news = typeJson($breakingNews->getNews());

        return view('home.home-1', compact('news', 'claws'));
    }
}
