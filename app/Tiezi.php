<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Tiezi extends Model
{
     public function user()
    {
        return $this->belongsTo('App\User');
    }
      public function tcomment()
    {
        return $this->hasMany('App\Tcomment');
    }
    
    public function prev()
    {
        return Tiezi::where('id','<',$this->id)->orderBy('id','desc')->first();
    }

    public function next()
    {
        return Tiezi::where('id','>',$this->id)->orderBy('id','asc')->first();
    }
}
