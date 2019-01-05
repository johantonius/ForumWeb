<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

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
    public function comments()
    {
        return $this->hasMany('App\Comment', 'foreign_key', 'local_key');
    }
    public function forums()
    {
        return $this->hasMany('App\Forum');
    }
    public function threads()
    {
        return $this->hasMany('App\Thread');
    }
    public function inboxes()
    {
        return $this->hasMany('App\Inbox');
    }
}
