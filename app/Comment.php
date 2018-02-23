<?php

namespace Corp;

use Illuminate\Database\Eloquent\Model;



class Comment extends Model
{
    //
    protected $table = 'comments';

    public function articles()
    {
        return $this->belongsTo('Corp\Article');
    }

    public function user()
    {
        return $this->belongsTo('Corp\User');
    }
}
