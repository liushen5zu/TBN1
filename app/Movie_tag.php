<?php

namespace App;

use App\Movie_detail;
use Illuminate\Database\Eloquent\Model;

class Movie_tag extends Model
{
    //
    public function movie_details()
    {
        return $this->belongsToMany('App\Movie_detail','movie_details_movie_tags','movie_detail_id','movie_tag_id');
    }
}
