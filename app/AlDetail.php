<?php

namespace App;

use App\Movie_detail;
use Illuminate\Database\Eloquent\Model;

class AlDetail extends Model
{
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

	public function movie_detail()
	{
		
	}
	public function al_detail_comment(){
		return $this->hasMany('APP\Alcomment');
	}
}
