<?php

namespace App\Http\Controllers\Web;

use App\Services\Web\BreakingNews;
use App\Services\Web\CityServices;
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
     * @var CityServices
     */
    private $cityServices;

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
        BreakingNews $breakingNews,
        CityServices $cityServices,
        ClawsServices $clawsServices,
        RelatedServices $relatedServices,
        ShoppingStoreServices $shoppingStoreServices)
    {
        //$this->middleware('auth');
        $this->cache = $cache;
        $this->breakingNews = $breakingNews;
        $this->cityServices = $cityServices;
        $this->clawsServices = $clawsServices;
        $this->relatedServices = $relatedServices;
        $this->shoppingStoreServices = $shoppingStoreServices;
        $this->configHome = array(
            'news' => [
               'slug' => 'abicalcados',
                'cache' => 60 * 24 * 7
            ],
            'city' => [
                'slug' => 'birigui',
                'cache' => 60 * 24 * 7
            ],
            'claws' => [
                'slug' => 'doutorvarejo',
                'cache' => 60 * 24 * 7
            ],
            'relateds' => [
                'slug' => 'grendenekids',
                'cache' => 60 * 24 * 7
            ],
            'shopping' => [
                'slug' => 'territoriodocalcado',
                'cache' => 60 * 24 * 7
            ],
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

        //Lojas Cidade
        $banners= [];
        $city = $this->getCity($configHome->city);

        //Últimas notícias
        $news  = $this->getBreakingNews($configHome->news);


        //getShopping
        $shopping = $this->getShopping($configHome->shopping);


        //Slider RelatedStore
        $relateds = $this->getRelated($configHome->relateds);

        //Dicas para Loistas
        $claws = $this->getClaws($configHome->claws);


        return view('home.home-1', compact(
            'news', 'city', 'claws', 'relateds', 'shopping')
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
            $content = typeJson($this->breakingNews->getNews($config->slug));
            if (!$content) {
                return null;
            }
            $this->cache->put('breakingNews', $content, $config->cache);
        }

        return $this->cache->get('breakingNews');
    }


    /**
     * Retorna as lojas da cidade especifica.
     *
     * @param $config
     * @return mixed
     */
    public function getCity($config)
    {

        $content = typeJson($this->cityServices->getCity($config->slug));
        if (!$content) {
            return null;
        }

        $i = 0;
        $content->banners = null;
        foreach ($content->stores as $store) {
            if ($store->banners) {
                $banners[$i]['alt'] = $store->name;
                $banners[$i]['logo'] = $store->logo;
                $rand  = rand(1, count($store->banners));
                foreach ($store->banners as $key => $src) {
                    if ($key == $rand-1)
                     $banners[$i]['src'] = $src;
                }
                $i++;
            }
        }

        $content->banners = typeJson($banners);

        return $content;

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
            $content = typeJson($this->shoppingStoreServices->getShopping($config->slug));
            if (!$content) {
                return null;
            }

            $this->cache->put('shopping', $content, $config->cache);
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
            $content = typeJson($relateds[0]);
            if (!$content) {
                return null;
            }

            $this->cache->put('relateds', $content, $config->cache);
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

            $content = typeJson($claws);
            if (!$content) {
                return null;
            }


            $this->cache->put('claws', $content, $config->cache);
        }

        return $this->cache->get('claws');
    }




}
