<?php

namespace Corp\Http\Controllers;

use Illuminate\Http\Request;
use Corp\Repositories\MenusRepository;
use Corp\Menu;
use Corp\Repositories\SlidersRepository;
use Corp\Repositories\PortfoliosRepository;
use Config;


class IndexController extends SiteController
{

    public function __construct(SlidersRepository $s_rep, PortfoliosRepository $p_rep)
    {
        parent::__construct(new MenusRepository(new Menu));

        $this->s_rep    = $s_rep;
        $this->p_rep    = $p_rep;

        $this->bar      = 'right';
        $this->template = env('THEME') . '.index';

    }

    public function index()
    {
        $portfolioItem = $this->getPortfolio();
        $sliderItem    = $this->getSliders();

        $content       = view(env('THEME') . '.content')->with('content', $portfolioItem)->render();
        $sliders       = view(env('THEME') . '.slider')->with('sliders',$sliderItem)->render();

        $this->vars    = array_add($this->vars, 'sliders', $sliders);
        $this->vars    = array_add($this->vars, 'content', $content);


        return $this->renderOutput();
    }

    protected function getPortfolio()
    {
        $portfolio = $this->p_rep->get('*', Config::get('settings.home_port_count') );
        return $portfolio;
    }

    public function getSliders()
    {
        $sliders = $this->s_rep->get();

        return $sliders;
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
