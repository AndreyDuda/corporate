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

    public function one( $alias, $attr = array() )
    {
        $article = parent::one($alias, $attr);

        if($article && !empty($attr)){
            $article->load('comments');
            $article->comments->load('user');
        }
        return $article;
    }
}