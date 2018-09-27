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
        $critic = movieCritic::all();
        $critic_comment = Movie_comment::where('user_id',2)->get();
        $activity = Activity::orderBy("id",'desc')->paginate(4);
        // dd($critic_comment);
    	return view('home.review.index',compact('Movie_comments','movie','critic','critic_comment','activity'));
    }

    public function table()
    {
    	$Movie_comments = Movie_comment::orderBy('id','desc')
        ->where('star','like','%'.request()->keywords.'%')
        ->paginate(5);
        // dd($data);
    	return view('home.review.table',compact('Movie_comments'));
    }

    public function show($id)
    {
        // dd($id);
    	$Movie_comments = Movie_comment::find($id);
        $rview = Rview::all();
        $movie = Movie_detail::all();
        $activity = Activity::orderBy("id",'desc')->paginate(4);
        $reply = Reply::where('rview_id',29)->get();
    	return view('home.review.show',compact('Movie_comments','rview','movie','activity','reply'));
    }

    public function create($id,Request $request)
    {
        // dd($request);
        $reply = new Reply;
        $reply -> content = $request -> content;
        $reply -> rview_id = $request -> rview_id;
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
