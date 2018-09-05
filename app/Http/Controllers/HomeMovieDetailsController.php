<?php

namespace App\Http\Controllers;

use App\Movie_detail;
use Illuminate\Http\Request;

class HomeMovieDetailsController extends Controller
{
    //
    public function index()
    {
    	$details = Movie_detail::all();
    	return view('home.movie.list',compact('details'));
    }

    public function show($id)
    {
    	//电影详情表
    	$movie_detail = Movie_detail::find($id);
    	//dd($movie_detail);

    	//导演表
    	$director = $movie_detail -> director_name->name;
    	
    	//演员表
    	
    	// foreach ($movie_detail->movie_actor as $movie_actor) {
     //        dd($movie_actor);
     //    }
         $actor = $movie_detail->movie_actor()->orderBy('name')->get();
       
    	//电影类型
         $cate = $movie_detail->movie_cate->name;
         //dd($cate);

    	//电影图片 
       // $image = Image_movie_detail::all();
         $images = $movie_detail -> image_movie_detail()->get();
         //dd($images);
    	return view('home.movie.details',compact('movie_detail','director','actor','cate','images'));
    }
}
