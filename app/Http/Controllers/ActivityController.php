<?php

namespace App\Http\Controllers;

use App\Activity;
use App\ActivityComment;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $activity = Activity::all();
        return view('admin.activity.index',compact('activity'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.activity.create');
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
        //dd($request->all());
        $activity = new Activity;
        $activity -> title = $request->title;
        $activity -> activity_site = $request->activity_site;
        $activity -> rtime = $request->rtime;
        $activity -> registration_num = $request->registration_num;
        $activity -> attention_num = $request->attention_num;
        $activity -> intro = $request->intro;

        if ($request->hasFile('image')) {
            $activity -> image = '/'.$request->image->store('uploads/'.date('Ymd'));
        }
        
         if($activity -> save()){
            return redirect('/activity')->with('success', '添加成功');
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
        //
        $activity = Activity::find($id);
        return view('admin.activity.edit',compact('activity'));
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
        $activity = Activity::find($id);
        $activity -> title = $request->title;
        $activity -> activity_site = $request->activity_site;
        
        $activity -> rtime = $request->rtime;
        $activity -> registration_num = $request->registration_num;
        $activity -> attention_num = $request->attention_num;
        $activity -> intro = $request->intro;

        if ($request->hasFile('image')) {
            $activity -> image = '/'.$request->image->store('uploads/'.date('Ymd'));
        }
        if($activity -> save()){
            return redirect('/activity')->with('success', '编辑成功');
        }else{
            return back()->with('error','编辑失败');
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
        //
        $activity = Activity::find($id);
        $comment = ActivityComment::where('activity_id',$id)->get();
       	// dd($comment);
       	foreach($comment as $v){
       		$v->delete();
       	}
        if($activity -> delete()){
            return redirect('/activity')->with('success', '删除成功');
        }else{
            return back()->with('error','删除失败');
        }

    }

    
}
