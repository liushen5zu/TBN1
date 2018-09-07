<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Tiezi extends Model
{
     public function user()
    {
        return $this->belongsTo('App\User');
    }
      public function tcomment()
    {
        return $this->hasMany('App\Tcomment');
    }
}
