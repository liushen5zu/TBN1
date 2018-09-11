<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Movie_comment;
use App\Reply;
use App\Rview;
use App\User;
use Illuminate\Http\Request;

class HomeReviewController extends Controller
{
    //
    public function index()
    {
    	$Movie_comments = Movie_comment::orderBy('id','desc')
        ->where('star','like','%'.request()->keywords.'%')
        ->paginate(5);
    	return view('home.review.index',compact('Movie_comments'));
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
        //获取回复评论单条ID
        // $comment = Rview::find();
        // dd($rview);
    	return view('home.review.show',compact('Movie_comments','rview'));
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
