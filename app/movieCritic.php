<?php

namespace App;

use App\Movie_comment;
use App\User;
use Illuminate\Database\Eloquent\Model;

class movieCritic extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function Movie_comment()
    {
    	return $this->belongsTo('App\Movie_comment');
    }
}
