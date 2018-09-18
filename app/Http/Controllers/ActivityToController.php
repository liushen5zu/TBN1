<?php

namespace App\Http\Controllers;

use App\AcrivityTo;
use Illuminate\Http\Request;

class ActivityToController extends Controller
{
    //
    public function baoming(Request $request)
    {
    	$activityto = new AcrivityTo;
    	$activityto -> activity_id = $request->activity_id;
    	$activityto -> user_id = session('id');
    	$activityto -> username = session('username');
    	
    	if($activityto ->save()){
            return redirect("/home/activity/{$request->activity_id}.html")->with('success', '编辑成功');
        }else{
            return back()->with('error','编辑失败');
        }
    }
}
