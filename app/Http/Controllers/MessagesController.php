<?php

namespace App\Http\Controllers;

use App\Messages;
use App\User;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
    //
    public function send(Request $request, $id)
    {
    	//echo $id;
    	//dd($request->send_ids);
    	// $mm = Messages::where('send_id',$id)->where('accept_id',session('id'))->where('status',0)->get();
    	//dump($mm);
    	//dd(count($request->send_ids));
    	for($i=0;$i<count($request->send_ids);$i++){
    		$mm2 = Messages::find($request->send_ids[$i]);
    		$mm2->status=1;
    		$mm2->save();
    	}
    	
    	// foreach($mm as $v){
    	// 	if($v->status==0){
    	// 		$mm2->status=1;
    	// 		$mm2->save();
    	// 	}
    	// }
    	


    	$user = User::all();
    	$accept_id = $id;
    	$message = [];
    	$message1 = Messages::where('accept_id',$id)->where('send_id',session('id'))->get();
    	$message2 = Messages::where('accept_id',session('id'))->where('send_id',$id)->get();
    	$time = [];
    	foreach($message1 as $v){
    		$message[] = $v;
    		$time[] = $v->time;
    	}

    	foreach($message2 as $v){
    		$message[] = $v;
    		$time[] = $v->time;
    	}
    	$messages = array_combine($time,$message);
    	ksort($messages);
    	
    	//dd($message);
    	//dd(session('id'));
    	//$messages = $messages->paginate(4);
    	if(count($messages)>3){
    		$messages = array_slice($messages,count($messages)-3);
    	}
    	
    	//dump($messages);



        //dd($user);
        $message = Messages::all();
    	return view('home.center.message',compact('user','accept_id','messages','message'));
    }

    public function cunchu(Request $request)
    {
    	//$request->all();
    	$message = new Messages;
    	$message->send_id = Session('id');
    	$message->accept_id =$request->accept_id;
    	$message->content =$request->content;
    	$message->time = time();
    	
    	if($message->save()){
            return redirect("/home/send/{$request->accept_id}")->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }
    }	
}
