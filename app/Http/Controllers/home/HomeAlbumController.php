<?php

namespace App\Http\Controllers\home;


use App\AlDetail;
use App\Http\Controllers\Controller;
use App\Movie_detail;
use App\User;
use Illuminate\Http\Request;	

class HomeAlbumController extends Controller
{
    public function index()
    {
    	//影集列表
    	$album = AlDetail::all();
  
    	$movie_detail = Movie_detail::all();

    	
    	return view('home.album.album',compact('album','movie_detail'));
    }   

    public function show($id)
    {
    	$al = AlDetail::find($id);

    	//用户
    	$user = $al->user->get();

    	//影片详情
    	$mode = $al->movie_detail()->get();

    	return view('home.album.detail',compact('al','mode'));
    }
}
