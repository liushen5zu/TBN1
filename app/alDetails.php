<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class alDetails extends Model
{
    //
   	public function user()
    {
        return $this->belongsTo('App\User');
    }
}
