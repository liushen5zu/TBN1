<?php

namespace App\Http\Controllers;

use App\Movie_detail;
use App\Tcomment;
use App\Tiezi;
use App\User;
use Illuminate\Http\Request;

class tieziController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiezis = Tiezi::orderBy('id','desc')
            ->where('title','like','%'.request()->keywords.'%')
            ->get();
       
        //解析模板显示用户数据
        return view('admin.tiezi.index',compact('tiezis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (empty($request->title)) {
            return redirect('/home/tiezis')->with('success','ch');
        }else{
        $tiezis=new Tiezi;
        $tiezis-> title = $request->title;
        $tiezis-> user_id = session('id');
        $tiezis-> content =$request->content;
        if($tiezis->save())
        {
            return redirect('/home/tiezis');
        }else{
            return back();
        }
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
        $tiezis= Tiezi::find($id);
        $comments= $tiezis->tcomment()->get();
        $movie_details= Movie_detail::all();
        return view('home.tiezi.show',compact('tiezis','comments','movie_details'));
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
        $tiezis=Tiezi::find($id);
        if($tiezis->delete())
        {
            return back()->with('success','删除成功');
        }else {
            return back()->with('error','删除失败');
        }
    }
     public function list(Request $request)
    {
         $tiezis = Tiezi::orderBy('updated_at','desc')->where('status','1')->get();
         $tiezis1 = Tiezi::orderBy('updated_at','desc')->where('status','!=','1')->get();
        $movie_details= Movie_detail::all();

       

    /*    //判断标签id是否传递
        if(!empty($request->tag_id)){
            $tag = Tag::findOrFail($request->tag_id);
            $articles = $tag->articles()->paginate(10);
        }*/
/*
        if(empty($articles)){
            $articles = Article::orderBy('id','desc')->paginate(10);*/
        

        return view('home.tiezi.list', compact('tiezis','tiezis1','movie_details'));
    }


public function up($id,$status=1)
    {
        $tiezis= Tiezi::find($id);
        $status=0;//代表置顶
        $tiezis -> status=$status;
         if($tiezis->save())
        {
            return redirect('/tiezi');
        }else{
            return back();
        }        
    }
    public function down($id,$status=2)
    {
        $tiezis= Tiezi::find($id);
        $status=1;//代表精华
        $tiezis -> status=$status;
         if($tiezis->save())
        {
            return redirect('/tiezi');
        }else{
            return back();
        }        
    }
    public function pt($id,$status=0)
    {
        $tiezis= Tiezi::find($id);
        $status=2;//代表普通
        $tiezis -> status=$status;
         if($tiezis->save())
        {
            return redirect('/tiezi');
        }else{
            return back();
        }        
    }
    public function zuixin(Request $request)
    {
        $tiezis = Tiezi::orderBy('updated_at','desc')->get();
        $movie_details= Movie_detail::all();
        return view('home.tiezi.listzuixin', compact('tiezis','movie_details'));
    }
     public function jinghua(Request $request)
    {
        $tiezis = Tiezi::orderBy('updated_at','desc')->where('status','2')->get();
        $movie_details= Movie_detail::all();
        return view('home.tiezi.listjinghua', compact('tiezis','movie_details'));
    }

}
