<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeLoginController extends Controller
{
    //
    public function login()
    {
    	return view('login.homelogin.login');
    }

    public function dologin(Request $request)
    {
    	$user = User::where('username',$request->username)->first();
    	//dd($user);
    	if(!$user){
    		return redirect('/home/login')->with('success','登录失败');
    	}
    	if($user->password != $request->password){
    		return redirect('/home/login')->with('success','登录失败');
    	}else{
    		session(['username'=>$request->username,'id'=>$user->id]);
    		dump(session('username'));
    		// return redirect('/home/activity/list')->with('success','登陆成功');
    		return "<script>alert('登录成功');window.location.href='/home/activity/list'</script>";
    	}


    }

    public function outlogin(Request $request)
    {
    	$request->session()->flush();

    	return "<script>alert('退出成功');window.location.href='/home/activity/list'</script>";
    }
   
}
