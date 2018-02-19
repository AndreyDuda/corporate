<?php
/**
 * Created by PhpStorm.
 * User: dudav
 * Date: 19.02.2018
 * Time: 19:52
 */

namespace Corp\Repositories;

use Corp\Slider;


class SlidersRepository extends Repository
{

    public function __construct(Slider $slider)
    {
        $this->model = $slider;
    }

}