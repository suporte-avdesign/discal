<?php

namespace App\Http\Controllers\Web;


use Illuminate\Http\Request;
use Illuminate\Cache\Repository as Cache;

use App\Http\Controllers\Controller;
use App\Services\Web\ShoppingStoreServices;



class ShoppingDetailsController extends Controller
{
    private $cache;
    private $view = 'shopping';
    private $configStore;

    /**
     * @var ShoppingStoreServices
     */
    private $shoppingStoreServices;

    public function __construct(Cache $cache, ShoppingStoreServices $shoppingStoreServices)
    {
        $this->cache = $cache;
        $this->shoppingStoreServices = $shoppingStoreServices;
        $this->configStore = [
            'video' => 0,             #video viemo (1,0)
            'sound' => 0,             #sound cloud (1,0)
            'posts' => 0,             #post (1,0)
            'photos' => 1,            #qtd de fotos da loja (1 >= 2,
            'youtube' => 0,           #video youtube (1,0)
            'profile' => 1,           #profile (1,0)
            'relateds' => 1,          #relateds (1,0)
            'categories' => 0,        #categories (1,0)
            'advertisement' => 0,     #advertisement (1,0)
            'maps' => [
                'map' => 1,           #map (1,0)
                'iframe' => 0,        #iframe (1,0)
            ],
            'socialLinks' => [
                'facebook' => 1,      #facebook (1,0)
                'instagram' => 1,     #instagram (1,0)
                'twitter' => 1,       #twitter (1,0)
                'whatsapp' => 1       #whatsapp (1,0)
            ],
            'shopping' => [
                'slug' => 'territoriodocalcado',
                'cache' => 60 * 24 * 7
            ]
        ];

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug, $store, $segment)
    {
        $config = typeJson($this->shoppingStoreServices->getConfig());
        if (!in_array($slug, $config->slug)) {
            abort(404);
        }

        $store = typeJson($this->shoppingStoreServices->showStore($slug, $store));
        if (!$store) {
            abort(404);
        }

        $config = $config->$slug;
        $this->configStore['name'] = $store->details->loja;
        $this->configStore['title'] = "{$store->details->loja} {$slug}";
        $this->configStore['description'] = $segment;

        $configStore = typeJson($this->configStore);

        //getShopping
        $shopping = $this->getShopping($configStore->shopping);

        return view("$this->view.store-1", compact('configStore', 'shopping', 'store'));


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


}
