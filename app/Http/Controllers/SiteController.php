<?php

namespace Corp\Http\Controllers;

use Corp\Repositories\MenusRepository;
use Illuminate\Http\Request;
use Menu;

class SiteController extends Controller
{
    //
    protected $p_rep;
    protected $s_rep;
    protected $a_rep;
    protected $m_rep;

    protected $title;
    protected $keywords;
    protected $meta_desc;

    protected $vars = [];
    protected $template;

    protected $bar             = 'no';
    protected $contentLeftBar  = false;
    protected $contentRightBar = false;

    public function __construct(MenusRepository $m_rep)
    {
        $this->m_rep = $m_rep;
    }

    protected function renderOutput()
    {
        $this->title     = 'Home Page';
        $this->keywords  = 'Home Page';
        $this->meta_desc = 'Home Page';

        $menu       = $this->getMenu();
        $footer     = view(env('THEME') . '.footer')->render();
        $navigation = view(env('THEME') . '.navigation')->with('menu', $menu)->render();

        $this->vars = array_add($this->vars, 'navigation', $navigation);
        $this->vars = array_add($this->vars, 'bar', $this->bar);
        $this->vars = array_add($this->vars, 'footer', $footer);
        $this->vars = array_add($this->vars, 'keywords', $this->keywords);
        $this->vars = array_add($this->vars, 'meta_desc', $this->meta_desc);
        $this->vars = array_add($this->vars, 'title', $this->title);

        if($this->contentRightBar){
            $rightBar   = view(env('THEME') . '.rightBar')->with('content_rightBar', $this->contentRightBar)->render();
            $this->vars = array_add($this->vars, 'rightBar', $rightBar);
        }
        if($this->contentLeftBar){
            $leftBar   = view(env('THEME') . '.leftBar')->with('content_leftBar', $this->contentLeftBar)->render();
            $this->vars = array_add($this->vars, 'leftBar', $leftBar);
        }
        return view($this->template)->with($this->vars);
    }

    public function getMenu()
    {
        $menu = $this->m_rep->get();

        $menuBuilder = Menu::make('MyNav', function($m) use ($menu){

            foreach ($menu as $item){

                if( $item->parent === 0 ){
                    $m->add($item->title, $item->path)->id($item->id);
                }else{
                    if( $m->find($item->parent) ){

                        $m->find($item->parent)->add($item->title, $item->path)->id($item->id);
                    }
                }
            }
        });

        return $menuBuilder;
    }
}
