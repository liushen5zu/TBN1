<?php

namespace App\Http\Controllers;

use App\Tcomment;
use App\Tiezi;
use Illuminate\Http\Request;

class TiezeCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Tcomment::orderBy('id','desc')
            ->where('content','like','%'.request()->keywords.'%')
            ->get();
        //解析模板显示用户数据
        return view('admin.tiezi_comment.index', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function reply(Request $request, $id)
    {
        $comments=new Tcomment;
        $comments-> user_id = session('id');
        $comments-> content =$request->content;
        $comments-> tiezi_id =$id;
       
        if($comments->save())
        {
            return redirect("/home/tiezi/{$request->id}.html");
        }else {
            return back();
        }
      
    }
}
