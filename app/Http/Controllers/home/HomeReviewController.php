<?php

namespace App\Http\Controllers\home;

use App\Activity;
use App\Http\Controllers\Controller;
use App\Movie_comment;
use App\Movie_detail;
use App\Reply;
use App\Rview;
use App\User;
use App\movieCritic;
use Illuminate\Http\Request;

class HomeReviewController extends Controller
{
    //
    public function index()
    {
    	$Movie_comments = Movie_comment::orderBy('id','desc')
        ->where('star','like','%'.request()->keywords.'%')
        ->paginate(5);
        $movie = Movie_detail::all();
        $critic = movieCritic::first();
        $id = $critic -> user_id;
        $critic_comment = Movie_comment::where('user_id',$id)->get();
        $num = count(Movie_comment::where('user_id',$id)->get());
        $activity = Activity::orderBy("id",'desc')->paginate(4);
        // dd($critic_comment);
    	return view('home.review.index',compact('Movie_comments','movie','critic','critic_comment','activity','num'));
    }

    public function table()
    {
    	$Movie_comments = Movie_comment::orderBy('id','desc')
        ->where('star','like','%'.request()->keywords.'%')
        ->paginate(5);
        $activity = Activity::orderBy("id",'desc')->paginate(4);       
        $movie = Movie_detail::all();
        // dd($data);
    	return view('home.review.table',compact('Movie_comments','activity','movie'));
    }

    public function show($id)
    {
        // dd($id);
    	$Movie_comments = Movie_comment::find($id);
        $rview = Rview::all();
        $movie = Movie_detail::all();
        $activity = Activity::orderBy("id",'desc')->paginate(4);
        $reply = Reply::where('review_id',29)->get();
    	return view('home.review.show',compact('Movie_comments','rview','movie','activity','reply'));
    }

    public function create($id,Request $request)
    {
        // dd($request);
        $reply = new Reply;
        $reply -> content = $request -> content;
        $reply -> review_id = $request -> review_id;
        // dd($id);
        $reply -> user_id = session('id');
        // dd(session('id'));
        if($reply -> save()){
            return redirect("/home/review/{$id}.html")->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }
    }
}
