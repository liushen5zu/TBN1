<?php

namespace App\Http\Controllers;

use App\Movie_detail;
use App\alCont;
use App\alDetails;
use Illuminate\Http\Request;

class AlcontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $moviedetail = Movie_detail::all();
        $album = alDetails::all();
        $alconts = alCont::orderBy('id','desc')
            ->where('moviedetail_id','like', '%'.request()->keywords.'%')
            ->paginate(5);
        return view('admin.alcont.index',compact('alconts','moviedetail','album'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $moviedetail = Movie_detail::all();
        $album = alDetails::all();
        return view('admin.alcont.create',compact('moviedetail','album'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alcont = new alCont;
        $alcont -> recommend = $request -> recommend;
        $alcont -> aldetail_id = $request -> aldetail_id;
        $alcont -> moviedetail_id = $request -> moviedetail_id;

        if($alcont -> save()){        
        return redirect('/alcont')->with('success','添加成功');
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
        $moviedetail = Movie_detail::all();
        $album = alDetails::all();
        $alcont = alCont::find($id);
        return view('admin.alcont.edit',compact('moviedetail','album','alcont'));
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
        $alcont = alCont::find($id);
        $alcont -> recommend = $request -> recommend;
        $alcont -> aldetail_id = $request -> aldetail_id;
        $alcont -> moviedetail_id = $request -> moviedetail_id;

        if($alcont -> save()){        
        return redirect('/alcont')->with('success','添加成功');
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
        $alcont = alCont::findOrFail($id);
        if($alcont->delete())
        {
            return back()->with('success','删除成功');
        }else {
            return back()->with('error','删除失败');
        }
    }
}
