<?php

namespace App\Http\Controllers\Web;

use App\Services\Web\CityServices;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CityDetailsController extends Controller
{
    private $view = 'cities';

    public function __construct(CityServices $cityServices)
    {
        $this->cityServices = $cityServices;

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
            ]
        ];
    }


    public function index($slug)
    {
        dd($slug);
    }


    public function store($slug, $store)
    {
        $config = typeJson($this->cityServices->getConfig());


        if (!in_array($slug, $config->slug)) {
            return redirect()->route('home');
        }

        $content = $this->getCity($slug, $store);

        $agent = new \Jenssegers\Agent\Agent;
        ($agent->isMobile() == true ? $template = 'mobile' : $template = 'web');

        (count($content->banners) == 1 ? $this->configStore['photos'] = 1 : $this->configStore['photos'] = count($content->banners));


        $this->configStore['title'] = $config->$slug->$store->title;
        $this->configStore['address'] = $config->$slug->$store->address;
        $this->configStore['description'] = $config->$slug->$store->description;
        $this->configStore['banner_height'] = $config->$slug->$store->banners->height;
        $this->configStore['bg_logo'] = $config->$slug->$store->logo->style;
        $this->configStore['map_marker'] = $config->$slug->$store->maps->marker;


        $configStore = typeJson($this->configStore);


        return view("{$this->view}.store-1", compact(
                'template', 'content', 'configStore')
        );
    }


    private function getCity($slug, $store)
    {
        $city = typeJson($this->cityServices->getDetails($slug, $store));


        return $city;
    }
}
