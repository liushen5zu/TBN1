<?php

namespace App\Http\Controllers;

use App\Messages;
use App\Messages_user;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CenterController extends Controller
{
    //写影评
    public function index(Request $request)
    {
        // dd(Session('image'));
        // dd(Session('username'));
    	return view('home.center.tongbu');
    }

    //个人中心
    public function jiben(Request $request)
    {
    	
        return view('home.center.jiben'); 
    }

    public function mima(Request $request)
    {
       return view('home.center.mima'); 
    }

    public function touxiang(Request $request)
    {
       return view('home.center.touxiang'); 
    }

    public function rongyu(Request $request)
    {
       return view('home.center.rongyu'); 
    }

    public function xiaoxi(Request $request)
    {
        //dump($request->all());
        $user=User::all();
        //dd($user);
        $message = Messages::all();
        //dd($message);
       return view('home.center.xiaoxi',compact('user','message')); 
    }


    //我的空间
    public function myCenter(Request $request)
    {
       return view('home.center.myCenter'); 
    }

    //项目管理
    public function xiangmugl(Request $request)
    {
       return view('home.center.xiangmugl'); 
    }
}
