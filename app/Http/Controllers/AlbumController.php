<?php

namespace App\Http\Controllers;

use App\User;
use App\alDetails;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $albums = alDetails::orderBy('id','desc')->where('title','like','%'.request()->keywords.'%')->paginate(5);
        //dd($albums);
        return view('admin.album.index',compact('albums','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $album = alDetails::all();
        $user = User::all();
        return view('admin.album.create',compact('album','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $album = new alDetails;
        $album -> title = $request -> title;
        $album -> introduce = $request -> introduce;
        $album -> user_id = $request -> user_id;
        if($album -> save()){
            return redirect('/album')->with('success','添加成功');
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
        $album = alDetails::find($id);
        $user = User::all();

        return view('admin.album.edit',['album'=>$album, 'user'=>$user]);
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
        $album = alDetails::find($id);
        $album -> title = $request -> title;
        $album -> introduce = $request -> introduce;
        $album -> user_id = $request -> user_id;


        if($album -> save()){
            return redirect('/album')->with('success','修改成功');
        }else{
            return back('error','修改失败');
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
        $album = alDetails::find($id);
        if($album->delete())
        {
            return back()->with('success','删除成功');
        }else {
            return back()->with('error','删除失败');
        }
    }
}
