<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function login()
    {
    	return view('login.login');
    }

    
    public function dologin(Request $request)
    {
    	$user = User::where('username',$request->username)->first();
    	if(!$user){
    		return redirect('/login')->with('success','登录失败');
    	}

    	if($user->password != $request->password){
    		return redirect('/login')->with('success','登录失败');
    	}else{
    		session(['username'=>$request->username,'id'=>$user->id,'image'=>$user->image]);
    		return redirect('/admin')->with('success','登陆成功');
    	}

    }

    //退出
    public function outlogin(Request $request)
    {
    	$request->session()->flush();
    	return redirect('/login')->with('success','退出成功');
    }
    //切换账户
     public function relogin(Request $request)
    {
    	$request->session()->flush();
    	return redirect('/login')->with('success','更换账户');
    }
}
