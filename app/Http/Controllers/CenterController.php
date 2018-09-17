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
        $jibens=User::find(session('id'));
        return view('home.center.jiben',compact('jibens')); 
    }
    //修改个人信息保存到数据库
    public function jiben1(Request $request)
    {
        $jiben1=User::find(session('id'));
         $jiben1 -> username = $request->username;
         $jiben1 -> sex = $request->sex;
         $jiben1 -> birthday = $request->birthday;
         $jiben1 -> phone = $request->phone;
         $jiben1 -> location = $request->location;
         $jiben1 -> locations = $request->locations;
         $jiben1 -> location = $request->s_province.'-'.$request->s_city.'-'.$request->s_county.'-'.$request->location;
         $jiben1 -> location = $request->s_province.'-'.$request->s_city.'-'.$request->s_county.'-'.$request->location;
         $jiben1 ->pc = $request->pc;
        if($jiben1 -> save()){
            return redirect('/home/jiben');
        }else{
            return back();
        }
    }
    public function mima(Request $request)
    {
       return view('home.center.mima'); 
    }
    //修改密码
    public function newpassword(Request $request)
    {
        $password1=User::find(session('id'));
        $password1-> password=$request->password;
        if($password1->save()){
            return redirect('/home/login');
        }else{
            return back();
        }

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
        $user=User::all();
        //dd($user);
       return view('home.center.xiaoxi',compact('user')); 
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
