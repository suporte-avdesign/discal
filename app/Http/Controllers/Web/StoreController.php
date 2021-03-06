<?php

namespace App\Http\Controllers\Web;

use App\Services\Web\StoresServices;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    private $view = 'stores';
    private $configStore;
    private $storesServices;

    /**
     * StoreController constructor.
     */
    public function __construct(StoresServices $storesServices)
    {
        $this->storesServices = $storesServices;

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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug)
    {
        $config = typeJson($this->storesServices->getConfig());

        if (!in_array($slug, $config->slug)) {
            return redirect()->route('home');
        }

        $content = $this->storesServices->getStore($slug);

        $agent = new \Jenssegers\Agent\Agent;
        ($agent->isMobile() == true ? $sub = 'api' : $sub = 'web');

        (count($content->banners) == 1 ? $this->configStore['photos'] = 1 : $this->configStore['photos'] = count($content->banners));


        $this->configStore['title'] = $config->$slug->title;
        $this->configStore['address'] = $config->$slug->address;
        $this->configStore['description'] = $config->$slug->description;
        $this->configStore['banner_height'] = $config->$slug->banners->height;
        $this->configStore['bg_logo'] = $config->$slug->logo->style;
        $this->configStore['map_marker'] = $config->$slug->maps->marker;


        $configStore = typeJson($this->configStore);


        return view("{$this->view}.store-1", compact(
                'sub', 'content', 'configStore')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}