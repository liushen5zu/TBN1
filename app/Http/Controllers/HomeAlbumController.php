<?php

namespace App\Http\Controllers;

use App\alDetails;
use Illuminate\Http\Request;

class HomeAlbumController extends Controller
{
    public function index()
    {	
    	//读取数据
    	$albums = alDetails::all();

    	// dd($album);
    	return view('home.album.album',compact('albums'));
    }

    public function show()
    {
    	//读取数据
    	$album = alDetails::first()->get();

    	// dd($album);
    	return view('home.album.album',compact('album'));
    }
}
