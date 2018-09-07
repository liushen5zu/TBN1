<?php

namespace App\Http\Controllers;

use App\Activity;
use Illuminate\Http\Request;

class HomeActivityController extends Controller
{
    //列表
    public function list()
    {
    	$activity = Activity::orderBy("id",'desc')->paginate(4);
    	return view('home.activity.activityList',compact('activity'));
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
             
      

        

       // dd($comment);
    	$a = Activity::orderBy('id','desc')->get();
    	return view('home.activity.activityDetails',compact('activity','a','comment2'));
    }
}
