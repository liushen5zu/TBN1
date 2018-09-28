<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    //
    public function weibo()
    {
    	return Socialite::with('weibo')->redirect();
    }

    public function callback()
    {
    	$authuser = \Socialite::with('weibo')->user();
    	$user = new User;
    	$res = $user -> where('username','=',$authuser->id)->get()->first();
    	// dd($res);
    	if ($res) {
 			session(['username'=>$res->username, 'id'=>$res->id,'password'=>$res->password,'image'=>$res->image,'name'=>$res->name]);
 			return redirect('/')->with('success','登录成功');
 		}else{
 			$user -> username = $authuser->id;
	 		$user -> name = $authuser -> nickname;
	 		$user -> image = $authuser -> avatar;
 			$user -> password = $authuser -> expiresIn;
            // dd($user);
 			if($user->save()){
 				session(['username'=>$user->username, 'id'=>$user->id,'password'=>$user->password,'image'=>$user->image,'name'=>$user->name]);
 				return redirect('/')->with('success','登录成功');
 			}
 		}
    }
}

