<?php
/**
 * Created by PhpStorm.
 * User: dudav
 * Date: 18.02.2018
 * Time: 19:37
 */

namespace Corp\Repositories;

use Config;
use function foo\func;


abstract class Repository
{
    protected $model = FALSE;

    public function get( $select = '*', $take = FALSE, $pagination = FALSE, $where = FALSE )
    {
        $builder = $this->model->select('*');

        if($take){
            $builder->take($take);
        }

        if($where){
            $builder->where($where[0], $where[1]);
            /*dd($builder);*/
        }

        if($pagination){
            return $this->check( $builder->paginate( Config::get( 'settings.paginate' )) );
        }

        return $this->check($builder->get());
    }

    protected function check($result)
    {
        if( $result->isEmpty() ){
            return FALSE;
        }

        $result->transform(function ($item, $key){
            if( is_string($item->img ) && is_object( json_decode($item->img)) && (json_last_error() == JSON_ERROR_NONE) ){
                $item->img = json_decode($item->img);
            }
            return $item;
        });

        return $result;
    }

    public function one($alias, $attr = array())
    {
       $result = $this->model->where('alias', $alias)->first();

       return $result;

    }
}