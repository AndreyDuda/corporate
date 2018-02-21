<?php
/**
 * Created by PhpStorm.
 * User: dudav
 * Date: 21.02.2018
 * Time: 19:07
 */

namespace Corp\Repositories;

use Corp\Article;

class ArticlesRepository extends Repository
{
    public function __construct(Article $article)
    {
        $this->model = $article;
    }
}