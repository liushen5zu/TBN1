<?php

namespace App\Http\Controllers;

use App\Activity;
use App\AlDetail;
use App\Image_movie_detail;
use App\Movie_comment;
use App\Movie_detail;
use Illuminate\Http\Request;

class HomeCenterController extends Controller
{
    public function index()
    {
    	$details = Movie_detail::all();
    	$activity = Activity::orderBy('attention_num','desc')->paginate(3);
    	$movie_time = Movie_detail::orderBy('created_at','desc')->paginate(10);
    	$movie_recom = Movie_detail::orderBy('recom','desc')->paginate(8);
    	$aldetails = AlDetail::orderBy('created_at','desc')->paginate(6);
    	return view('home.center.center',compact('details','movie_time','movie_recom','activity','aldetails'));
    }
}
