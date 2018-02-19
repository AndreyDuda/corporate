<?php
/**
 * Created by PhpStorm.
 * User: dudav
 * Date: 18.02.2018
 * Time: 19:37
 */

namespace Corp\Repositories;

use Config;


abstract class Repository
{
    protected $model = FALSE;

    public function get()
    {
        $builder = $this->model->select('*');

        return $builder->get();
    }
}