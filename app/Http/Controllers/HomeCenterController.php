<?php

namespace App\Http\Controllers;

use App\Image_movie_detail;
use App\Movie_detail;
use Illuminate\Http\Request;

class HomeCenterController extends Controller
{
    public function index()
    {
    	$details = Movie_detail::all();
    	$movie_time = Movie_detail::orderBy('created_at','desc')->paginate(10);
    	$movie_recom = Movie_detail::orderBy('recom','desc')->paginate(8);
    	return view('home.center.center',compact('details','movie_time','movie_recom'));
    }
}
