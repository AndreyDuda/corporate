<?php

namespace Corp;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Corp\Article;
use Corp\Comment;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function articles()
    {
        return $this->hasMany('Article');
    }

    public function comments()
    {
        return $this->belongsTo('Comment');
    }

    public function roles()
    {
        return $this->belongsToMany('Corp\Role', 'role_user');
    }

    public function perms()
    {
        return $this->belongsToMany('Corp\Permission', 'permission_role');
    }
}
