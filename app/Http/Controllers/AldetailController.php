<?php

namespace App\Http\Controllers;

use App\AlDetail;
use App\Movie_detail;
use App\User;
use Illuminate\Http\Request;

class AldetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $albums = AlDetail::orderBy('id','desc')->where('title','like','%'.request()->keywords.'%')->paginate(5);
        //dd($albums);
        return view('admin.al_detail.index',compact('albums','users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function create()
    {
        $user = User::all();
        $moviedetail = Movie_detail::all();
        return view('admin.al_detail.create',compact('album','user','moviedetail'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $album = new AlDetail;
        $album -> title = $request -> title;
        $album -> introduce = $request -> introduce;
        $album -> user_id = $request -> user_id;

        // $album ->movie_detail_id = $request->movie_detail_id;
        // dd($request->moviedetail_id);
        
        if($request->hasFile('image')) {
            $album->image = '/'.$request->image->store('uploads/'.date('Ymd'));
            
        }
        // dd($album);
        if($album->save()){
        try{
                $album = $album->movie_detail()->sync($request->movie_detail_id);
                return redirect('/al_detail')->with('success','添加成功');
            }catch(\Exception $e){
                return back()->with('error','添加失败!');
            }       
        }else{
            return back()->with('error','添加失败');
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
        $album = AlDetail::find($id);
        $user = User::all();
        $moviedetail_id = Movie_detail::all();
        return view('admin.al_detail.edit',['album'=>$album, 'user'=>$user,'moviedetail_id'=>$moviedetail_id]);
    } 

    /**
     * 
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $album = AlDetail::find($id);
        $album -> title = $request -> title;
        $album -> introduce = $request -> introduce;
       
        if($request->hasFile('image')) {
            $album->image = '/'.$request->image->store('uploads/'.date('Ymd'));
        }

        if($album->save()){
        try{
                $album = $album->movie_detail()->sync($request->movie_detail_id);
                return redirect('/al_detail')->with('success','修改成功');
            }catch(\Exception $e){
                return back()->with('error','修改失败!');
            }       
        }else{
            return back()->with('error','修改失败');
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
        $album = AlDetail::find($id);
        if($album->delete())
        {
            return back()->with('success','删除成功');
        }else {
            return back()->with('error','删除失败');
        }
    }
}

