<?php

namespace App\Http\Controllers;

use App\Alcomment;
use Illuminate\Http\Request;

class Alcomment extends Controller
{
	public function index(){
	    $comment = Alcomment::orderBy('created_at','desc')->paginate(2);

	    return view('home.album.detail',compact('comment'));
	}

	public function create(Request $request){
		$comment = new Alcomment;
    	$comment -> content = $request->content;
    	$comment -> al_detail_id = $request->al_detail_id;
    	$comment -> user_id = session('id');
    	if($comment -> save()){
            return redirect("/home/{$request->al_detail_id}.html")->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }
	}
}
