<?php

namespace App\Http\Controllers\Web;

use App\Services\Web\RelatedServices;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RelatedDetailsController extends Controller
{
    private $view = 'relateds';
    private $configStore;
    /**
     * @var RelatedDetailsServices
     */
    private $relatedDetail;

    /**
     * RelatedDetailsController constructor.
     */
    public function __construct(
        RelatedServices $relatedDetail)
    {
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


        $this->relatedDetail = $relatedDetail;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug, $segment)
    {
        $config = typeJson($this->relatedDetail->getConfig());
        if (!in_array($slug, $config->slug)) {
            abort(404);
        }

        $config = $config->$slug;
        $this->configStore['name'] = $config->name;
        $this->configStore['title'] = $this->getTitle($config, $segment);
        $this->configStore['description'] = $this->getDescription($config, $segment);
        $this->configStore['images'] = $this->relatedDetail->getDetail($slug, $segment);

        $configStore = typeJson($this->configStore);

        return view("$this->view.details-1", compact('configStore'));
    }

    /**
     * Retorna o title da página.
     *
     * @return \Illuminate\Http\Response
     */
    private function getTitle($config, $segment)
    {
        foreach ($config->banners as $banner) {
            if ($banner->link == $segment) {
                return $banner->title;
            }
        }

        abort(404);
    }

    /**
     * Retorna a descrição da página.
     *
     * @return \Illuminate\Http\Response
     */
    private function getDescription($config, $segment)
    {
        foreach ($config->banners as $banner) {
            if ($banner->link == $segment) {
                return $banner->description;
            }
        }

        abort(404);
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
