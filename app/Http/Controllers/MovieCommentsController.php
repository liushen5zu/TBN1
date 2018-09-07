<?php

namespace App\Http\Controllers;

use App\Movie_comment;
use App\User;
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
        $data = Movie_comment::all();
        return view('admin.movie_comments.index',compact('movie_comments','data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.movie_comments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $movie_comments = new movie_comment;
         $movie_comments -> star = $request -> star;
         $movie_comments -> title = $request -> title;
         $movie_comments -> content = $request -> content;
         $movie_comments -> movie_detail_id = $request-> movie_detail_id;
         $movie_comments -> user_id = $request -> user_id;
         if($movie_comments -> save()){
            return redirect('/movie_comments')->with('success','添加成功');
       }else{
            return back()->with('error','添加失败');
       }
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
