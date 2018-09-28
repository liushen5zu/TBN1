<?php

namespace App\Http\Controllers;

use App\Movie_cate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieCatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $movie_cates = Movie_cate::orderBy('id','desc')
        ->where('name','like','%'.request()->keywords.'%')
        ->paginate(10);
        return view('admin.movie_cates.index',['movie_cates'=>$movie_cates]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.movie_cates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $movie_cates = new Movie_cate;
         $movie_cates -> name = $request -> name;
         
         if($movie_cates -> save()){
            return redirect('/movie_cates')->with('success','添加成功');
       }else{
            return back()->with('error','添加失败');
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie_cates = Movie_cate::find($id);
        return view('admin.movie_cates.edit',['movie_cates'=>$movie_cates]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $movie_cates = Movie_cate::find($id);
        $movie_cates -> name = $request ->name;
       if($movie_cates -> save()){
            return redirect('/movie_cates')->with('success','添加成功');
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
        $del=DB::table('movie_cates')->where('id',$id)->delete();
        if($del){
             return redirect('/movie_cates')->with('success', '删除成功');
         }else{
             return back()->with('error','失败');
         }
    }
}
