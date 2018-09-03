<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function login()
    {
    	return view('admin.login.login');
    }

    public function dologin(Request $request)
    {
    	
    	$user = User::where('username',"$request->username")->get()->first();
    	//dd($user->password);
    	if(!$user){
    		return back()->with('error','登录失败');
    	}

    	if($user->password == $request->password){
    		session(['username'=>$user->username,'id'=>$user->id]);

    		//dump(session('username'));
    		//dd(Session('username'));
    		return redirect('/admin')->with('success','登陆成功');
    	}else{
    		return back()->with('error','登录失败');
    	}
    	
    }

    public function logout(Request $request)
    {
    	$value = $request->session()->flush();
    	return redirect('/login')->with('success','退出成功');
    }
}
