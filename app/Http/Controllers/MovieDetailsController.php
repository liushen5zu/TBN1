<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\dd;
use App\Movie_detail;

class MovieDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movie_details = Movie_detail::orderBy('id','desc')
            ->where('name','like', '%'.request()->keywords.'%')
            ->paginate(10);
        return view ('admin.movie_details.index',['movie_details'=>$movie_details]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.movie_details.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $movie_details=new Movie_detail;
        $movie_details -> name = $request->name;
        $movie_details -> director_id = $request->director_id;
        $movie_details -> countries = $request->countries;
        $movie_details -> runningtime = $request->runningtime;
        $movie_details -> recom = $request->recom;
        $movie_details -> intro = $request->intro;
        $movie_details -> num = $request->num;
        $movie_details -> move_cate_id = $request->move_cate_id;
        if($movie_details -> save()){
            return redirect('/movie_details');
        }else{
            return back();
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
         $movie_details= Movie_detail::find($id);
        return view('admin.movie_details.edit',['movie_details'=>$movie_details]);
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

        $movie_details= Movie_detail::find($id);
        $movie_details -> name = $request->name;
        $movie_details -> director_id = $request->director_id;
        $movie_details -> countries = $request->countries;
        $movie_details -> runningtime = $request->runningtime;
        $movie_details -> recom = $request->recom;
        $movie_details -> intro = $request->intro;
        $movie_details -> num = $request->num;
        $movie_details -> move_cate_id = $request->move_cate_id;
        if($movie_details -> save()){
            return redirect('/movie_details')->with('success','修改成功');
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
        $movie_details = Movie_detail::find($id);
        if($movie_details->delete())
        {
            return back()->with('success','删除成功');
        }else {
            return back()->with('error','删除失败');
        }
    }
}
