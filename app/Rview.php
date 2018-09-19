<?php

namespace App;

use App\Movie_comment;
use App\Reply;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Rview extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function reply()
    {
    	return $this->hasMany('App\Reply');
    }
}
