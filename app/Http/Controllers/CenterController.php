<?php

namespace App\Http\Controllers;

use App\Messages;
use App\Messages_user;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CenterController extends Controller
{
    //
    public function index(Request $request)
    {
        echo $request->send_id;
    	//dd(Session('id'));
    	$user = User::where('id',Session('id'))->first();
    	//echo 'aaa';
    	//dd($user);
        $users= user::all();
        $mm = [];
        $message1 = Messages::where('accept_id',Session('id'))->Where('send_id',$request->send_id)->get();
        $message2 = Messages::where('accept_id',$request->send_id)->Where('send_id',Session('id'))->get();

        foreach($message1 as $k => $v){
            foreach($message2 as $key => $val){
               $mm[]=$val;
            }
            $mm[]=$v;
        }
        
        $time = [];
        foreach($mm as $k => $v){
            $time[]=$v->time;
        }
        $message = [];
        $message = array_combine($time,$mm);

        //dd(ksort($message));
        //排序
        ksort($message);

       dump($message);
        //dd($mm);
       // dd($messages);

    	return view('home.center.index',compact('user','users','message'));
    }

    public function jiben(Request $request)
    {
    	//dd($request->all());
    	$user = User::find(Session('id'));
    	//dd($user);
    	$user->sex = $request->sex;
    	$user->email = $request->email;

    	if($request->hasFile('image')) {
            $user->image = '/'.$request->image->store('uploads/'.date('Ymd'));

        }
    	//dd($user->image);

    	if($user -> save()){
            return redirect("/home/center")->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }

    }

    public function xiaoxi(Request $request)
    {
        //dd(Session('id'));
    	//dd($request->all());
        $messages_users = new Messages_user;
        //dd($messages);
        $messages_users->send_id = Session('id');
        $messages_users->accept_id = $request->accept_id;
        //dd($messages_users); 
    	$messages = new Messages;
        $messages ->send_id = Session('id');
        $messages ->accept_id = $request->accept_id;
        $messages ->content = $request->content;
        $messages ->time = time();

        if($messages -> save() && $messages_users->save()){
            return redirect("/home/center")->with('success','发送成功');
        }else{
            return back()->with('error','发送失败');
        }
    }
}
