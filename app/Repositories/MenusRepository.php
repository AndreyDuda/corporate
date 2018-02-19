<?php
/**
 * Created by PhpStorm.
 * User: dudav
 * Date: 18.02.2018
 * Time: 19:35
 */

namespace Corp\Repositories;

use Corp\Menu;


class MenusRepository extends Repository
{

    public function __construct(Menu $menu)
    {
        $this->model = $menu;
    }

}