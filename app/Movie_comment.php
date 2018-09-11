<?php

namespace App;


use App\Rview;
use App\User;
use App\movie_detail;
use Illuminate\Database\Eloquent\Model;

class Movie_comment extends Model
{
    public function movie_detail()
    {
        return $this->belongsTo('App\movie_detail');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
