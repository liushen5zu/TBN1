<?php

namespace App\Http\Controllers;

use App\AlDetail;
use App\Focus;
use App\Messages;
use App\Messages_user;
use App\User;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; 

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
    //密码修改
    public function mimagx(Request $request)
    {   
        $user = User::find(session('id'));
        // dd($request->old_password);
        // dd($pwdgx);
        if($user->password != $request->old_password){
            return "<script>alert('与原密码不符');window.location.href='/home/mima'</script>";
        }

        if($request->txt_password != $request->txt_password2){
            return "<script>alert('两次密码不符');window.location.href='/home/mima'</script>";
        }

        // $pwd = Hash::make($request->txt_password);
        $user -> password = $request->txt_password;
        if($user -> save()){
            return redirect('/home/login')->with('success','修改成功,请重新登陆!!!');
        }else{
            return back()->with('error','修改失败');
        } 
    }

    public function touxiang(Request $request)
    {
       return view('home.center.touxiang'); 
    }

    public function txgx(Request $request)
    {
        
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
        $al_num = count(AlDetail::where('user_id',Session('id'))->get());
        //关注数
        $focus_num = count(Focus::where('user_id',session('id'))->get());
        //粉丝数
        $focus_fsen = count(Focus::where('author_id',session('id'))->get());
       return view('home.center.myCenter',compact('al_num','focus_num','focus_fsen')); 
    }

    //项目管理
    public function xiangmugl(Request $request)
    {   
        //影集数量
        $al_num = count(AlDetail::where('user_id',Session('id'))->get());
        //关注数
        $focus_num = count(Focus::where('user_id',session('id'))->get());
        //粉丝数
        $focus_fsen = count(Focus::where('author_id',session('id'))->get());

       return view('home.center.xiangmugl',compact('al_num','focus_num','focus_fsen')); 
    }
}
