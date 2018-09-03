<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    //
    use SoftDeletes;
    
    public function tags()
    {
    	return $this->belongsToMany('App\Tag');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function cate()
    {
    	return $this->belongsTo('App\Cate');
    }

    public function comment()
    {
        return $this->hasMany('App\Comment');
    }
}
