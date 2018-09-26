<?php

namespace App\Http\Controllers;

use App\movieCritic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieCriticController extends Controller
{
   	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $critic = movieCritic::all();        
        return view('admin.movieCritic.index',compact('critic'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.movieCritic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $critic = new movieCritic;
         $critic -> user_id = $request -> user_id;        
         if($critic -> save()){
            return redirect('/movieCritic')->with('success','添加成功');
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
    	
        $del=DB::table('movie_critics')->where('id',$id)->delete();
        if($del){
             return redirect('/movieCritic')->with('success', '删除成功');
         }else{
             return back()->with('error','失败');
         }
    }
}
