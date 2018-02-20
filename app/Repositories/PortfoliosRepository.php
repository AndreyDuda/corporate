<?php
/**
 * Created by PhpStorm.
 * User: dudav
 * Date: 20.02.2018
 * Time: 20:52
 */

namespace Corp\Repositories;
use Corp\Portfolio;


class PortfoliosRepository extends Repository
{
    public function __construct(Portfolio $portfolio)
    {
        $this->model = $portfolio;
    }
}