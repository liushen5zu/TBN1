<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeRegisterController extends Controller
{
    public function register()
    {
    	return view('home.register.register');
    } 
}
