<?php

namespace Corp\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    protected $p_rep;
    protected $s_rep;
    protected $a_rep;
    protected $m_rep;

    protected $template;
    protected $vars;

    protected $bar             = false;
    protected $contentRightBar = false;
    protected $contentLeftBar  = false;

    public function __construct()
    {

    }

    protected function renderOutput()
    {
        return view($this->template)->with($this->vars);
    }
}
