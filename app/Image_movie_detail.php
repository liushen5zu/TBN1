<?php

namespace App;

use App\Movie_detail;
use Illuminate\Database\Eloquent\Model;

class Image_movie_detail extends Model
{
    //
     public function movie_detail()
    {
        return $this->belongsTo('App\Movie_detail');
    }
}
