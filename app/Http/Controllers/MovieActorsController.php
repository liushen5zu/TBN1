<?php

namespace App\Http\Controllers;


use App\Movie_actor;

use Illuminate\Http\Request;

class MovieActorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //读取数据库 获取用户数据
        $actors = Movie_actor::orderBy('id','desc')
            ->where('name','like', '%'.request()->keywords.'%')
            ->paginate(10);
        //解析模板显示用户数据
        return view('admin.actor.index', compact('actors'));

        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.actor.create');

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

         $actor = new Movie_actor;

         $actor-> name = $request->name;
         $actor-> sex = $request->sex;
         $actor-> date = $request->date;
         $actor-> work = $request->work;
         $actor-> EnglishName = $request->EnglishName;
         $actor-> ChinaName = $request->ChinaName;
         $actor-> familyMember = $request->familyMember;
         $actor-> winning = $request->winning;
         $actor-> actor_into = $request->actor_into;

        if($actor->save()){
            return redirect('/movie_actors')->with('success','添加成功');
        }else{
            return back('error','添加失败');
        }

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
}
