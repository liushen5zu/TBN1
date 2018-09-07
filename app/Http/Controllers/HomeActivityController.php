<?php

namespace App\Http\Controllers;

use App\Activity;
use App\Movie_detail;
use Illuminate\Http\Request;

class HomeActivityController extends Controller
{
    //列表
    public function list()
    {
    	$activity = Activity::orderBy("id",'desc')->paginate(4);
    	//热门电影
    	$movie = Movie_detail::all();
    	//热议
    	$activity2 = Activity::all();
    	//dd($movie);
    	return view('home.activity.activityList',compact('activity','movie','activity2'));
    }

    //详情
    public function show($id)
    {

    	$activity = Activity::find($id);
        $comment = $activity->activityComment;
        //dd()
        
        $comment2 = [];
        for($i=count($comment)-1;$i>=0;$i--){
             $comment2[] = $comment[$i];
        }
       // dd($comment2);
             
      

        $movie = Movie_detail::all();

       // dd($comment);
    	$a = Activity::orderBy('id','desc')->get();
    	return view('home.activity.activityDetails',compact('activity','a','comment2','movie'));
    }
}
