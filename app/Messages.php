<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    //
    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
