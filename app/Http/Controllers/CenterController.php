<?php

namespace App\Http\Controllers;

use App\AlDetail;
use App\Focus;
use App\Level;
use App\Messages;
use App\Messages_user;
use App\Movie_comment;
use App\Movie_detail;
use App\Rview;
use App\User;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;  
use Illuminate\Support\Facades\Mail; 


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
        return view('home.center.email');
        
    }
      public function email(Request $request)
    {
        return view('home.center.mima');
        
    }
    public function sendemail(Request $request)
    {
           
            Mail::send('emails', ['url' =>'tbn1.com/home/email', 'name' =>'llll'], function ($message) 
            {
                 $message->from('admin@lslzf.com', 'llll');
                 $message->to('852415433@qq.com');
                $message->subject('Hello World');
                });
            return view('home.center.emailm');
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

    public function txgx(Request $request)
    {
        
    }

    public function rongyu(Request $request)
    {
         $levels = Level::where('user_id',session('id'))->first();
       return view('home.center.rongyu',compact('levels')); 
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
        $movie_comment = Movie_comment::all();
        $detail = Movie_detail::all();
        $user = DB::table('movie_comments')->where('user_id','=',session('id'))->get();
        // dd($user);
        $al_num = count(AlDetail::where('user_id',Session('id'))->get());
        //关注数
        $focus_num = count(Focus::where('user_id',session('id'))->get());
        //粉丝数
        $focus_fsen = count(Focus::where('author_id',session('id'))->get());

        //积分和经验
        $levels = Level::where('user_id',session('id'))->first();
        // dd($levels);

       $movie_time = Movie_detail::orderBy('created_at','desc')->paginate(10);
        $movie_recom = Movie_detail::orderBy('recom','desc')->paginate(8);
       return view('home.center.myCenter',compact('al_num','focus_num','focus_fsen','movie_comment','detail','user','movie_time','movie_recom','levels'));  
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

        $movie_recom = Movie_detail::orderBy('recom','desc')->paginate(8);
        $movie_comment = Movie_comment::all();
        $movie_time = Movie_detail::orderBy('created_at','desc')->paginate(10);
        $user = DB::table('movie_comments')->where('user_id','=',session('id'))->get();
        $detail = Movie_detail::all();
         $levels = Level::where('user_id',session('id'))->first();
       return view('home.center.xiangmugl',compact('al_num','focus_num','focus_fsen','movie_time','movie_recom','movie_comment','user','detail','levels')); 
    }


    //我的影集
    public function mycreation(Request $request)
    {
        //影集数量
        $al_num = count(AlDetail::where('user_id',Session('id'))->get());
        //关注数
        $focus_num = count(Focus::where('user_id',session('id'))->get());
        //粉丝数
        $focus_fsen = count(Focus::where('author_id',session('id'))->get());
        //我的影集
        $album = AlDetail::where('user_id',Session('id'))->get();

        return view('home.center.myCreation',compact('al_num','focus_num','focus_fsen','album'));
    }

    //他的影集
    public function hiscreation(Request $request)
    {   
        //影集数量
        $al_num = count(AlDetail::where('user_id',$request->id)->get());
        
        //关注数
        $focus_num = count(Focus::where('user_id',$request->id)->get());
        //粉丝数
        $focus_fsen = count(Focus::where('author_id',$request->id)->get());
        //他的影集
        $album = AlDetail::where('user_id',$request->id)->get();
        //用户信息
        $user = User::where('id',$request->id)->first();

        return view('home.center.hisCreation',compact('al_num','focus_num','focus_fsen','album','user'));
    }

    //我的关注
    public function friendlist(Request $request)
    {
        //影集数量
        $al_num = count(AlDetail::where('user_id',Session('id'))->get());
        //关注数
        $focus_num = count(Focus::where('user_id',session('id'))->get());
        //粉丝数
        $focus_fsen = count(Focus::where('author_id',session('id'))->get());
        //我的关注
        $focus = Focus::where('user_id',session('id'))->get();
        //用户信息
        $user = User::all();
        

        return view('home.center.friendlist',compact('al_num','focus_num','focus_fsen','focus','user'));
    }


    //我的粉丝
    public function fanslist(Request $request)
    {
        //影集数量
        $al_num = count(AlDetail::where('user_id',Session('id'))->get());
        //关注数
        $focus_num = count(Focus::where('user_id',session('id'))->get());
        //粉丝数
        $focus_fsen = count(Focus::where('author_id',session('id'))->get());
        //我的粉丝
        $fans = Focus::where('author_id',session('id'))->get();
        //用户信息
        $user = User::all();

        return view('home.center.fanslist',compact('al_num','focus_num','focus_fsen','fans','user'));
    }
   

    //个人空间影评添加
    public function createcomment(Request $request)
    {   
        $b = $request->movie_detail_id;
        $a = Movie_detail::where('name',$b)->first();
        // dd($a);
         $movie_comments = new Movie_comment;
         $movie_comments -> star = 5;
         $movie_comments -> title = $request -> title;
         $movie_comments -> content = $request -> content;
         $movie_comments -> movie_detail_id = $a -> id;
         $movie_comments -> user_id = session('id');
         if($movie_comments -> save()){
            return redirect('/home/myCenter')->with('success','添加成功');
       }else{
            return back()->with('error','添加失败');
       }
    }
}
