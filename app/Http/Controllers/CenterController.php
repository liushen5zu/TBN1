<?php

namespace App\Http\Controllers;

use App\Messages;
use App\Messages_user;
use App\Movie_comment;
use App\Movie_detail;
use App\Rview;
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
        $user=User::all();
        //dd($user);
       return view('home.center.xiaoxi',compact('user')); 
    }


    //我的空间
    public function myCenter(Request $request)
    {
        $movie_comment = Movie_comment::all();
        $detail = Movie_detail::all();
        $user = DB::table('movie_comments')->where('user_id','=',session('id'))->get();
        // dd($user);
       return view('home.center.myCenter',compact('movie_comment','detail','user')); 
    }

    //项目管理
    public function xiangmugl(Request $request)
    {
       return view('home.center.xiangmugl'); 
    }

    //个人空间影评添加
    public function createcomment(Request $request)
    {   
         $movie_comments = new Movie_comment;
         $movie_comments -> star = 5;
         $movie_comments -> title = $request -> title;
         $movie_comments -> content = $request -> content;
         $movie_comments -> movie_detail_id = $request-> movie_detail_id;
         $movie_comments -> user_id = session('id');
         if($movie_comments -> save()){
            return redirect('/home/myCenter')->with('success','添加成功');
       }else{
            return back()->with('error','添加失败');
       }
    }
}
