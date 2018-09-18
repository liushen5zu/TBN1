<?php

namespace App\Http\Controllers;

use App\HomeMovieDetailComment;
use Illuminate\Http\Request;

class HomeMovieDetailCommentController extends Controller
{
    public function index()
    {
    	$comment = HomeMovieDetailComment::orderBy('created_at','desc')->paginate(2);

    	return view('home.movie.details',compact('comment'));

    }

    //
    public function create(Request $request)
    {
    	$comment = new HomeMovieDetailComment;
    	$comment -> content = $request->content;
    	$comment -> movie_detail_id = $request->movie_detail_id;
    	$comment -> user_id = session('id');
    	if($comment -> save()){
            return redirect("/home/{$request->movie_detail_id}.html")->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }
    }
}
