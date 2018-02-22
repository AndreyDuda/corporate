<?php

namespace Corp;

use Illuminate\Database\Eloquent\Model;
use Corp\Article;
use Corp\User;

class Comment extends Model
{
    //
    protected $table = 'comments';

    public function article()
    {
        return $this->belongsTo('Article');
    }

    public function user()
    {
        return $this->belongsTo('User');
    }
}
