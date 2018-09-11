<?php

namespace App\Http\Controllers;

use App\Rview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $review = Rview::orderBy('id','desc')
        ->where('id','like','%'.request()->keywords.'%')
        ->paginate(10);        
        return view('admin.movieReview.index',compact('review'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.movieReview.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $review = new Rview;
         $review -> zan = $request -> zan;
         $review -> content = $request -> content;
         $review -> user_id = $request -> user_id;
         $review -> movie_comment_id = $request -> movie_comment_id;        
         if($review -> save()){
            return redirect('/movieReview')->with('success','添加成功');
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
        $del=DB::table('Rviews')->where('id',$id)->delete();
        if($del){
             return redirect('/movieReview')->with('success', '删除成功');
         }else{
             return back()->with('error','失败');
         }
    }
}
