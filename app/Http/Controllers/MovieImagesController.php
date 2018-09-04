<?php

namespace App\Http\Controllers;

use App\Image_movie_detail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\dd;

class MovieImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $movie_images = Image_movie_detail::orderBy('id','desc')
            ->where('name','like', '%'.request()->keywords.'%')
            ->paginate(10);
        return view('admin.movie_images.index',['movie_images'=>$movie_images]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.movie_images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $movie_images=new Image_movie_detail;
        $movie_images -> name = $request->name;
        $movie_images -> movie_detail_id = $request->movie_detail_id;
        if ($request->hasFile('image')) {
            $movie_images->image = '/'.$request->image->store('uploads/'.date('Ymd'));
        }

        if($movie_images->save())
        {
            return redirect('/movie_images')->with('success','添加成功');
        }else {
            return back()->with('error')->with('error','添加失败');
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
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie_images= Image_movie_detail::find($id);
        return view('admin.movie_images.edit',['movie_images'=>$movie_images]);
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
        $movie_images= Image_movie_detail::find($id);
       //ss dd($movie_images);
        $movie_images -> name = $request->name;
        $movie_images -> movie_detail_id = $request->movie_detail_id;
        if ($request->hasFile('image')) {
            $movie_images->image = '/'.$request->image->store('uploads/'.date('Ymd'));
        }

        if($movie_images->save())
        {
            return redirect('/movie_images')->with('success','修改成功');
        }else {
            return back()->with('error')->with('error','修改失败');
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
        $movie_images=Image_movie_detail::find($id);
        if($movie_images->delete())
        {
            return back()->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
    }
}
