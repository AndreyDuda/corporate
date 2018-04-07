<?php

namespace Corp\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Corp\Http\Controllers\Controller;

class IndexController extends AdminController
{
    //
    public function __construct()
    {
        parent::__construct();
        $this->template = env('THEME').'.admin.index';
    }

    public function index()
    {
        $this->title = 'Панель Администратора';

        return $this->renderOutput();
    }
}
