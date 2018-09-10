<?php

namespace App\Http\Controllers;

use App\Movie_cate;
use App\Movie_detail;
use App\Movie_tag;
use Illuminate\Http\Request;

class HomeMovieDetailsController extends Controller
{
    //
    public function index(Request $request)
    {
    	//$details = Movie_detail::all();
       if(!empty($request->movie_tag_id)){
            $tag = Movie_tag::findOrFail($request->movie_tag_id);
            $details = $tag->movie_details()->paginate(10);
               }
        $tag = Movie_tag::all();
        $cate = Movie_cate::all();
        if(!empty($request->movie_cate_id)){
           $details = Movie_detail::where('movie_cate_id', $request->movie_cate_id)->orderBy('id','desc')->paginate(10);
       }

       //if(!empty($request->movie_tag_id))
        
        if(empty($details)){
            $details = Movie_detail::all();
        }

    	return view('home.movie.list',compact('details','tag','cate'));
    }

    public function show($id)
    {
    	//电影详情表
    	$movie_detail = Movie_detail::find($id);
    	//dd($movie_detail);

    	//导演表
    	$director = $movie_detail ->director_name->name;
    	
    	//演员表
    	
         $actor = $movie_detail->movie_actor()->get();

        //标签表

         $tag = $movie_detail->movie_tags()->get();
       
    	//电影地区
         $cate = $movie_detail->movie_cate->name;
         
    	//电影图片 
         $images = $movie_detail -> image_movie_detail()->get();
        
    	return view('home.movie.details',compact('movie_detail','director','actor','cate','images','tag'));
    }
}
