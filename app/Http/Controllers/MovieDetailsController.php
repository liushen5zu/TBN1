<?php

namespace App\Http\Controllers;
use App\Director_name;
use App\Movie_actor;
use App\Movie_cate;
use App\Movie_detail;
use App\Movie_tag;
use Illuminate\Http\Request;
use Illuminate\Support\dd;

class MovieDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $director = Director_name::all();
        
        $movie_details = Movie_detail::orderBy('id','desc')
            ->where('name','like', '%'.request()->keywords.'%')
            ->paginate(3);
        //通过属于关系获取导
        //$data = Movie_detail::find(1)->Movie_cate()->get();
        return view ('admin.movie_details.index',compact('movie_details','director'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $director = Director_name::all();
        $actor = Movie_actor::all();
        $cate = Movie_cate::all();
        $tag = Movie_tag::all();

        return view('admin.movie_details.create',compact('cate','actor','tag','director'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $movie_details=new Movie_detail;
        $movie_details -> name = $request->name;
        $movie_details -> director_name_id = $request->director_name_id;
        $movie_details -> runningtime = $request->runningtime;
        $movie_details -> recom = $request->recom;
        $movie_details -> intro = $request->intro;
        $movie_details -> num = $request->num;
        $movie_details -> movie_cate_id = $request->movie_cate_id;

            
        if($request->hasFile('image')) {
            $movie_details->image = '/'.$request->image->store('uploads/'.date('Ymd'));
        }

       if($movie_details -> save()){
            try{
                $movie_details->movie_actor()->sync($request->movie_actor_id);
                $movie_details->movie_tags()->sync($request->movie_tag_id);
        return redirect('/movie_details')->with('success','添加成功');
            }catch(\Exception $e){
                return back()->with('error','添加失败!'); 
            }
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
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cate = Movie_cate::all();
        $actor = Movie_actor::all();
        $tag = Movie_tag::all();
        $director = Director_name::all();
        $movie_details= Movie_detail::find($id);


        return view('admin.movie_details.edit',['movie_details'=>$movie_details,'cate'=>$cate,'actor'=>$actor,'tag'=>$tag,'director'=>$director]);
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
        $movie_details -> director_name_id = $request->director_name_id; 
        $movie_details -> runningtime = $request->runningtime;
        $movie_details -> recom = $request->recom;
        $movie_details -> intro = $request->intro;
        $movie_details -> num = $request->num;
        $movie_details -> movie_cate_id = $request->movie_cate_id;

        if($request->hasFile('image')) {
            $movie_details->image = '/'.$request->image->store('uploads/'.date('Ymd'));
        }

        if($movie_details -> save()){
            try{
                $movie_details->movie_actor()->sync($request->movie_actor_id);
                $movie_details->movie_tags()->sync($request->movie_tag_id);
        return redirect('/movie_details')->with('success','修改成功');
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
        $movie_details = Movie_detail::find($id);
        if($movie_details->delete())
        {
            return back()->with('success','删除成功');
        }else {
            return back()->with('error','删除失败');
        }
    }
}
