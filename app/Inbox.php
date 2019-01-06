<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inbox extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
