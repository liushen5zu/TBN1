<?php

namespace App;

use App\Movie_detail;	
use Illuminate\Database\Eloquent\Model;

class alCont extends Model
{
    public function album()
    {
    	return $this->belongsTo('App\alDetails');
    }
}