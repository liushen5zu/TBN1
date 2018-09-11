<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Movie_comment;
use App\Rview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeCommentController extends Controller
{
    public function create(Request $request,$id)
    {
    	$comment = new Rview;
    	$comment -> content = $request -> content;
    	$comment -> movie_comment_id = $id;
    	$comment -> zan = $request -> zan;
    	// dd($id);
    	$comment -> user_id = session('id');
    	// dd(session('id'));
    	if($comment -> save()){
            return redirect("/home/review/{$id}.html")->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }
    }

    public function destroy($id)
    {
    	$comment = Rview::find($id);

    	$del=DB::table('rviews')->where('id',$id)->delete();
        if($del){
             return redirect("/home/review/{$comment->movie_comment_id}.html")->with('success', '删除成功');
         }else{
             return back()->with('error','失败');
         }
    }
}
