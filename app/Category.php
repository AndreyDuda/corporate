<?php

namespace Corp;

use Illuminate\Database\Eloquent\Model;
use Corp\Article;

class Category extends Model
{
    //
    protected $table = 'categories';

    public function articles()
    {
        return $this->hasMany('Article');
    }
}
