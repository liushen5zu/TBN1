<?php

namespace App\Http\Controllers;

use App\Movie_comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieCommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movie_comments = Movie_comment::orderBy('id','desc')
        ->where('user_id','like','%'.request()->keywords.'%')
        ->paginate(10);
        // dd($movieComments);
        return view('admin.movie_comments.index',['movie_comments'=>$movie_comments]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $del=DB::table('movie_comments')->where('id',$id)->delete();
        if($del){
             return redirect('/movie_comments')->with('success', '删除成功');
         }else{
             return back()->with('error','失败');
         }
    }
}
