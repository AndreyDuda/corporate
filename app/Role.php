<?php

namespace Corp;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    public function users()
    {
        return $this->belongsToMany('Corp\User', 'role_user');
    }
}
