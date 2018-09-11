<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlDetail extends Model
{
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

	public function movie_detail()
	{
		return $this->belongsToMany('App\Movie_detail','al_detail_movie_detail','al_detail_id','movie_detail_id');
	}
}
