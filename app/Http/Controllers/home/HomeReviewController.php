<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Movie_comment;
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
        $data = Movie_comment::all();
    	return view('home.review.index',compact('data','Movie_comments'));
    }

    public function table()
    {
    	$Movie_comments = Movie_comment::orderBy('id','desc')
        ->where('star','like','%'.request()->keywords.'%')
        ->paginate(5);
        $data = Movie_comment::all();
        // dd($data);
    	return view('home.review.table',compact('data','Movie_comments'));
    }

    public function show($id)
    {
    	$Movie_comments = Movie_comment::find($id);
        $data = Movie_comment::find($id)->movie_detail()->get();
        // dd($data);
        $user = Movie_comment::find($id)->user()->get();
        // dd($data);
    	return view('home.review.show',compact('data','user','Movie_comments'));
    }
}
