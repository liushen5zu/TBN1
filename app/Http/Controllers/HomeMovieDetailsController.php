<?php

namespace App\Http\Controllers;


use App\Activity;
use App\HomeMovieDetailComment;
use App\Movie_cate;
use App\Movie_detail;
use App\Movie_tag;
use App\User;
use Illuminate\Http\Request;

class HomeMovieDetailsController extends Controller
{
    //
    public function index(Request $request)
    {    	
       
        $tags = Movie_tag::all();
        $cate = Movie_cate::all();


        if(!empty($request->movie_cate_id)){
           $details = Movie_detail::where('movie_cate_id', $request->movie_cate_id);
        }
        
        if(!empty($request->movie_tag_id)){
            $tag = Movie_tag::findOrFail($request->movie_tag_id);
            $details = $tag->movie_details()->paginate(12);
        }


        if(empty($details)){
            $details = Movie_detail::orderBy('id','desc')->paginate(12);
        }

        //电影评论分数

        $comment_num = HomeMovieDetailComment::where('star','!=',0.0)->get();
        //dd($comment_num);
        // //dd($num);
        // $comment_num = 0;
        // foreach($num as $val){
        //     $comment_num += $val['star'];
        // }
        // if(count($num)!=0){
        //     $comment_num2 = number_format($comment_num/count($num),1);
        // }else{
        //     $comment_num2 = 0;
        // }
        

    	return view('home.movie.list',compact('details','tags','cate','comment_num'));
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

         //电影评论

        $comments = $movie_detail -> home_movie_detail_comment()->get();

        //电影评论分数

        $num = HomeMovieDetailComment::where('movie_detail_id',$id)->where('star','!=',0.0)->get();
        //dd($num);
        $comment_num = 0;
        foreach($num as $val){
            $comment_num += $val['star'];
        }
        if(count($num)!=0){
            $comment_num2 = number_format($comment_num/count($num),1);
        }else{
            $comment_num2 = 0;
        }
       
         //用户信息
         $user = User::all();

         //热门电影
        $movie = Movie_detail::orderBy('num','desc')->paginate(5);

        //热议
        $activity = Activity::orderBy("id",'desc')->paginate(4);

        //评论限制
        $HomeMovieDetailComment = HomeMovieDetailComment::where('user_id',session('id'))->where('movie_detail_id',$id)->first();
    	return view('home.movie.details',compact('movie_detail','director','actor','cate','images','tag','comments','user','comment_num2','HomeMovieDetailComment','movie','activity'));

    }
}
