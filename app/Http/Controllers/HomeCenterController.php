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
    	return view('home.center.center',compact('details'));
    }
}
