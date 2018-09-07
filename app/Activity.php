<?php

namespace App;

use App\ActivityComment;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    //
     public function activityComment()
    {
    	
        return $this->hasMany('App\ActivityComment');
    }
}
