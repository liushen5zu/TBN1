<?php

namespace App\Http\Controllers;

use App\AcrivityTo;
use App\Activity;
use App\Image_movie_detail;
use App\Movie_detail;
use Illuminate\Http\Request;

class HomeActivityController extends Controller
{
    //列表
    public function list()
    {

    	//电影图片
    	$image = Image_movie_detail::all();
    	//dd($image);
    	$activity = Activity::orderBy("id",'desc')->paginate(4);
    	//热门电影
    	$movie = Movie_detail::all();
    	//热议
    	$activity2 = Activity::all();
    	//dd($movie);
    	return view('home.activity.activityList',compact('activity','movie','activity2','image'));
    }

    //详情
    public function show($id)
    {
        //获取活动详情数据
    	$activity = Activity::find($id);
        
        //dd($acrivityto);
        $comment = $activity->activityComment;
        //dd()
        //前台遍历评论
        $comment2 = [];
        for($i=count($comment)-1;$i>=0;$i--){
             $comment2[] = $comment[$i];
        }
       // dd($comment2);
    //活动报名
       $activityto = AcrivityTo::where('activity_id',$id)->where('user_id',session('id'))->get();
       $activityto2 = AcrivityTo::where('activity_id',$id)->get();
       //dd($activityto);
       $registration_num = count($activityto2);
        $movie = Movie_detail::all();
        
       // dd($comment);
    	$a = Activity::orderBy('id','desc')->get();
    	return view('home.activity.activityDetails',compact('activity','a','comment2','movie','activityto','registration_num'));
    }

    public function tuijian(Request $request,$id)
    {
        //echo $id;
        //dd($request->all());
        $res = explode('&',$id);
        $activity = Activity::find($res[0]);
        $st = "";
        
        if($res[1]==0){
            $st = 1;
        }elseif($res[1]==1){
            $st = 0;
        }
        
        $activity -> status = $st;
        $activity ->save();
        return redirect('/activity');
        //dd($activity);
    }
}
