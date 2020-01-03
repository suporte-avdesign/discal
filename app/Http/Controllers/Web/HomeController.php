<?php

namespace App\Http\Controllers\Web;

use App\Services\Web\BreakingNews;
use App\Services\Web\ClawsServices;
use App\Services\Web\RelatedServices;
use App\Services\Web\ShoppingStoreServices;


use App\Http\Controllers\Controller;

use Illuminate\Cache\Repository as Cache;


class HomeController extends Controller
{
    private $cache;
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
        Cache $cache,
        RelatedServices $relatedServices,
        ClawsServices $clawsServices,
        BreakingNews $breakingNews,
        ShoppingStoreServices $shoppingStoreServices)
    {
        //$this->middleware('auth');
        $this->cache = $cache;
        $this->breakingNews = $breakingNews;
        $this->clawsServices = $clawsServices;
        $this->relatedServices = $relatedServices;
        $this->shoppingStoreServices = $shoppingStoreServices;
        $this->configHome = array(
            'news' => [
               'slug' => 'abicalcados',
                'cache' => 60 * 24 * 7
            ],
            'shopping' => [
                'slug' => 'territoriodocalcado',
                'cache' => 60 * 24 * 7
            ],
            'relateds' => [
                'slug' => 'grendenekids',
                'cache' => 60 * 24 * 7
            ],
            'claws' => [
                'slug' => 'doutorvarejo',
                'cache' => 60 * 24 * 7
            ]
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

        //Últimas notícias
        $news  = $this->getBreakingNews($configHome->news);

        //getShopping
        $shopping = $this->getShopping($configHome->shopping);

        //Slider RelatedStore
        $relateds = $this->getRelated($configHome->relateds);

        //Dicas para Loistas
        $claws = $this->getClaws($configHome->claws);


        return view('home.home-1', compact(
            'news', 'claws', 'relateds', 'shopping')
        );
    }

    /**
     * Últimas notícias
     *
     * @param $config
     * @return mixed
     */
    public function getBreakingNews($config)
    {
        if (!$this->cache->has('breakingNews')) {
            $this->cache->put('breakingNews',
                typeJson($this->breakingNews->getNews($config->slug)),
                $config->cache);
        }

        return $this->cache->get('breakingNews');
    }

    /**
     * Reorna Lojas Shopping
     *
     * @param $config
     * @return mixed
     */
    public function getShopping($config)
    {
        if (!$this->cache->has('shopping')) {
            $this->cache->put('shopping',
                typeJson($this->shoppingStoreServices->getShopping($config->slug)),
                $config->cache);
        }

        return $this->cache->get('shopping');
    }


    /**
     * Retorna Grendene/kids
     * @param $config
     * @return mixed
     */
    public function getRelated($config)
    {
        if (!$this->cache->has('relateds')) {

            $slugs  = $this->relatedServices->getSlug();
            $i=0;
            foreach ($slugs as $slug) {
                $relateds[] = $this->relatedServices->getRelateds($slug);
                $i++;
            }
            $this->cache->put('relateds', typeJson($relateds[0]),$config->cache);
        }

        return $this->cache->get('relateds');

    }

    /**
     * Retorna modulo dicas.
     *
     * @param $config
     * @return mixed
     */
    public function getClaws($config)
    {
        if (!$this->cache->has('claws')) {

            $server = typeJson($this->clawsServices->getConfig());
            $menu = $this->clawsServices->getMenu();
            $slugs = $this->clawsServices->getSlug();
            $i = 0;
            foreach ($slugs as $slug) {
                $item = $menu[$i];
                $claws[] = $this->clawsServices->getClaws($slug, $menu[$i], $server->$slug->$item->url);
                $i++;
            }

            $this->cache->put('claws', typeJson($claws),$config->cache);
        }

        return $this->cache->get('claws');
    }




}
