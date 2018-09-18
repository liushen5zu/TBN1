<?php

namespace App\Http\Controllers;

use App\Focus;
use Illuminate\Http\Request;

class FocusController extends Controller
{
    //
    public function focus(Request $request)
    {
    	$focus = new Focus;
    	$focus -> user_id = session('id');
    	$focus -> user_username = session('username');
    	$focus -> author_username = $request->author_username;
    	$focus -> author_id = $request->author_id;
    	
    	if($focus -> save()){
            return back()->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }
    }
}
