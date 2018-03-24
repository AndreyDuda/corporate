<?php

namespace Corp\Http\Controllers;

use Illuminate\Http\Request;
use Corp\Repositories\MenusRepository;
use Corp\Menu;

class ContactsController extends SiteController
{
    //
    public function __construct( )
    {
        parent::__construct( new MenusRepository(new Menu) );

        $this->bar      = 'left';
        $this->template = env('THEME') . '.contacts';

    }
    public function index(Request $request )
    {
        $content = view(env('THEME') . '.contact_content')->render();
        $this->vars            = array_add($this->vars, 'content', $content);

        $this->contentLeftBar = view(env('THEME') . '.contact_bar')->render();

        return $this->renderOutput();

    }
}
