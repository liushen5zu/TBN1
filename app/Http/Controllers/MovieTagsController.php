<?php

namespace App\Http\Controllers;

use App\Movie_tag;
use Illuminate\Http\Request;



class MovieTagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //读取数据库 获取标签数据
        $tags = Movie_tag::orderBy('id','desc')
            ->where('name','like','%'.request()->keywords.'%')
            ->get();
        //解析模板显示用户数据
        return view('admin.tag.index',compact('tags'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.tag.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $tag = new Movie_tag;

        $tag-> name = $request->name;

        if($tag->save()){
            return redirect('/movie_details_tags')->with('success','添加成功');
        }else{
            return back('error','添加失败');
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
        $tag = Movie_tag::findOrFail($id);
        return view('admin.tag.edit',compact('tag'));
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
        $tag = Movie_tag::find($id);

        $tag-> name = $request->name;

        if($tag->save()){
            return redirect('/movie_details_tags')->with('success','更新成功');
        }else{
            return back('error','更新失败');
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
        $tag = Movie_tag::findOrFail($id);

        if($tag -> delete()){
            return redirect('/movie_details_tags')->with('success', '删除成功');
        }else{
            return back()->with('error','删除失败');
        }  
    }
}
