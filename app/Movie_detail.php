<?php

namespace App;

use App\Director_name;
use App\Image_movie_detail;
use App\Movie_actor;
use App\movie_cate;
use Illuminate\Database\Eloquent\Model;

class Movie_detail extends Model
{
    //
    public function director_name()
    {
        return $this->belongsTo('App\Director_name');
    }

    //
    public function movie_cate()
    {
        return $this->belongsTo('App\Movie_cate');
    }

    public function movie_actor()
    {
        return $this->belongsToMany('App\Movie_actor','movie_acrtor_movie_details','movie_detail_id','movie_actor_id');
    }

    public function movie_tags()
    {
        return $this->belongsToMany('App\Movie_tag','movie_details_movie_tags','movie_detail_id','movie_tag_id');
    }

     public function image_movie_detail()
    {
        return $this->hasMany('App\Image_movie_detail');
    }

     
    public function alcont()
    {
        return $this->hasMany('App\alCont');
    }
}
