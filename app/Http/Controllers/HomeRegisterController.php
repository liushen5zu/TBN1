<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Foundation\Testing\Concerns\session;
use Illuminate\Http\Request;


class HomeRegisterController extends Controller
{
    public function register()
    {
    	
    	return view('home.register.register');
    }
    public function user(Request $request)
    {
    	/*dd(session('code'));*/
    	$users=new User;
    	$users->username = $request->username;
    	$users->password = $request->password;
    	$users->phone = $request->phone;
    	if($users->save()){

            return "<script>alert('注册成功');window.location.href='/home/login'</script>";
        }else{
        	  return "<script>alert('注册失败');window.location.href='/home/register'</script>";
        }	
    } 
}
