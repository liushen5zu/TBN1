<?php

namespace App;

use App\Tcomment;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Tcomment extends Model
{
       public function user()
    {
        return $this->belongsTo('App\User');
    }
}
