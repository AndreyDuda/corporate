<?php

namespace Corp\Http\Controllers;

use Illuminate\Http\Request;
use Corp\Repositories\ArticlesRepository;
use Corp\Repositories\MenusRepository;
use Corp\Menu;
use Corp\Repositories\PortfoliosRepository;
use Config;
use Corp\Repositories\CommentsRepository;

class ArticleController extends SiteController
{
    public function __construct( PortfoliosRepository $p_rep, ArticlesRepository $a_rep, CommentsRepository $c_rep )
    {
        parent::__construct( new MenusRepository(new Menu) );


        $this->p_rep    = $p_rep;
        $this->a_rep    = $a_rep;
        $this->c_rep    = $c_rep;

        $this->bar      = 'right';
        $this->template = env('THEME') . '.articles';

    }

    public function index()
    {
        $comments              = $this->getComments(config('settings.recent_comments'));
        $portfolios            = $this->getPortfolios(config('settings.recent_portfolios'));
        $this->contentRightBar = view( env('THEME') . '.articlesBar' )->with(['camments' => $comments, 'portfolios' => $portfolios]);
        $articles              = $this->getArticles();
        $content               = view(env('THEME') . '.articles_content')->with('articles',$articles)->render();
        $this->vars            = array_add($this->vars, 'content', $content);

        return $this->renderOutput();
    }

    public function getArticles( $alias = FALSE )
    {
        $articles = $this->a_rep->get( ['title', 'alias', 'created_at', 'img', 'desc', 'user_id',  'category_id'], FALSE, TRUE );

        if($articles){

            //$articles->load( 'user', 'category', 'comments' );
        }

        return $articles;

    }

    public function getComments($take)
    {
        $comments = $this->c_rep->get(['text', 'name', 'email', 'site', 'article_id', 'user_id'], $take);
        return $comments;
    }

    public function getPortfolios($take)
    {
        $portfolios = $this->p_rep->get(['title', 'text', 'alias', 'customer', 'img', 'filter_alias'], $take);
        return $portfolios;
    }
}
