<?php

namespace App\Http\Controllers;

use App\Director_name;
use Illuminate\Http\Request;

class MovieDirectorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //读取数据库 获取用户数据
        $dirs = Director_name::orderBy('id','desc')
            ->where('name','like', '%'.request()->keywords.'%')
            ->paginate(10);
        //解析模板显示用户数据
        return view('admin.director.index', ['dirs'=>$dirs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       	return view('admin.director.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dir = new Director_name;
        //dd($request -> director_intro);
        $dir -> name = $request -> name;
        $dir -> sex = $request -> sex;
        $dir -> date = $request -> date;
        $dir -> place = $request -> place;
        $dir -> work = $request -> work;
        $dir -> ChinaName = $request -> ChinaName;
        $dir -> director_intro = $request -> director_intro;

        
        if($dir -> save()){
            return redirect('/movie_directors')->with('success', '添加成功');
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
        $dir = Director_name::findOrFail($id);

        return view('admin.director.edit', ['dir' => $dir]);
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
        $dir = Director_name::findOrFail($id);
        $dir -> name = $request -> name;
        $dir -> sex = $request -> sex;
        $dir -> date = $request -> date;
        $dir -> place = $request -> place;
        $dir -> work = $request -> work;
        $dir -> ChinaName = $request -> ChinaName;
        $dir -> director_intro = $request -> director_intro;

        if($dir -> save()) {
            return redirect('/movie_directors')->with('success', '更新成功');
        }else{
            return back('error', '更新失败');
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
        $dir = Director_name::findOrFail($id);

        if($dir -> delete()){
            return back() -> with('success', '删除成功');
        }else{
            return back() -> with('error', '删除失败');
        }
    }
}
