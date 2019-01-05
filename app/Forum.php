<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function threads()
    {
        return $this->hasMany('App\Thread');
    }
}
