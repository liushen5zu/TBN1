<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeActivityController extends Controller
{
    //
    public function list()
    {
    	$activity = Activity::all();
    	return view('home.activity.activityList',compact('activity'));
    }
}
