<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Services\Web\ClawsServices;
use Illuminate\Http\Request;

class ClawsDetailsController extends Controller
{

    private $view = 'blog.details';
    private $content;

    /**
     * @var ClawsServices
     */
    private $clawsServices;

    public function __construct(ClawsServices $clawsServices)
    {

        $this->clawsServices = $clawsServices;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($slug, $segment)
    {
        //Change slug
        $slug = $this->clawsServices->changeSlug($slug);
        $config = typeJson($this->clawsServices->getConfig());
        $url = $config->$slug->domain.'/'.$segment;

        $crawler = $this->clawsServices->getDetails($slug, $url);
        if (!$crawler) {
            abort(404, 'OOPS !! PÁGINA NÃO ENCONTRADA');
        }

        $details = typeJson($crawler);

        $this->content = [
            'title' => "Dica para logistas:  {$details->title}",
            'description' => $segment
        ];
        $content = typeJson($this->content);

        return view("{$this->view}.detail-1", compact(
            'content','details')
        );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function form(Request $request)
    {
        dd($request->all());
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
