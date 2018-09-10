<?php

namespace App\Http\Controllers;

use App\ActivityComment;
use Illuminate\Http\Request;

class ActivityCommentController extends Controller
{
    //
    public function list(Request $request)
    {
    	//dd($request->all());
    	$comment = new ActivityComment;
    	$comment -> content = $request->content;
    	$comment -> activity_id = $request->activity_id;
    	$comment -> user_id = session('id');
    	if($comment -> save()){
            return redirect("/home/activity/{$request->activity_id}.html")->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }
    }
}
