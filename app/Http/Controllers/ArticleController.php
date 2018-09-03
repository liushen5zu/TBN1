<?php

namespace App\Http\Controllers;

use App\Article;
use App\Cate;
use App\Comment;
use App\Setting;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $article = Article::orderBy('id','desc')->where('title','like','%'.request()->keywords.'%')->paginate(6);
        return view('admin.article.index',compact('article'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cate = Cate::all();
        $tag = Tag::all();

        return view('admin.article.create',compact('cate','tag'));
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
        $res = $request -> all();
        
        $article = new Article;
        $article -> title = $res['title'];
        $article -> intro = $res['intro'];
        $article -> content = $res['content'];
        $article -> cate_id = $res['cate_id'];
        if ($request->hasFile('images')) {
            $article->images = '/'.$request->images->store('upload/'.date('Ymd'));
           //dd($path);
        }
        $article ->save();
        $res = $article -> tags() -> sync($request->tag_id);
        



        echo '插入成功';
        //多对多关系
        //$pp = Article::find(1);
        //$article = Article::find(1);
        //$roles = Article::find(1)->tags()->orderBy('article_id')->get();
        // dd($roles);
        // foreach ($article->tags as $tags) {
        //     //
        //     dd($tag);
        // }




        
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
        //获取文章内容
        $article = Article::findOrFail($id);
        $article->views +=1;
        $article->save();
        //读取分类内容
        $cate = Cate::all();
        // foreach($cate as $k => $v){
        //     $cate[$k]->total = DB::table('articles')->where('cate_id',$v->id)->count();
        // }
        // dd($cate);

        //读取标签内容
        $tag = Tag::all();

        //读取推荐文章内容
        $tuijian = Article::where('recom','1')->take(8)->orderBy('id','desc')->get();
       // dd($tuijian);

        //阅读排行内容
        $paihang = Article::orderBy('views','desc')->take(4)->get();

        //获取上一篇文章

        $prev = Article::where('id','<',$article->id)->orderBy('id','desc')->first();
        //dd($prev);
        //获取下一篇文章
        $next = Article::where('id','>',$article->id)->first();


        //网站设置
        $setting = Setting::find(1);
       // dd($setting);
        //dd($next);

        //读取评论

       $comment = Article::find($id)->comment;
       //dd($comment);

        return view('home.show',compact('article','cate','tag','tuijian','paihang','prev','next','setting','comment'));
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
        $cate = Cate::all();
         $tag = Tag::all();
        $article = Article::find($id);
        return view('admin.article.edit',compact('article','cate','tag'));
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

        $article = Article::findOrFail($id);

        $article -> title = $request -> title;
        $article -> cate_id = $request -> cate_id;
        $article -> intro = $request -> intro;
        $article -> content = $request -> content;

        //文件上传
        //检测是否有文件上传
        if ($request->hasFile('images')) {
            $article->images = '/'.$request->images->store('uploads/'.date('Ymd'));
        }
        
        DB::beginTransaction();

        //插入
        if($article->save()){
            try{
                $res = $article->tags()->sync($request->tag_id);
                DB::commit();
                return redirect('/article')->with('success','更新成功');
            }catch(\Exception $e){
                DB::rollback();
                return back()->with('error','更新失败!');
            }
        }else{
            return back()->with('error','更新失败!');
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
        $res = Article::find($id);
        
        //$article = $res -> tags()->pluck('id')->toArray();
        
        //dd($article);
        // foreach($article as $v){
        //$a_t = DB::table('article_tag')->select();
        //dump($a_t);
        // }

        // DB::table('article_tag')->where('article_id',"$res->id")->delete();
        if($res -> delete()){
            return redirect('/article')->with('success','删除成功');
        }else{
            return back()->with('error','删除失败');
        }
        // dump($res);
    }


    public function list(Request $request)
    {
        //分类信息
        $cate = Cate::all();

        //读取标签内容
        $tag = Tag::all();

        //读取推荐文章内容
        $tuijian = Article::where('recom','1')->take(8)->orderBy('id','desc')->get();
       // dd($tuijian);

        //阅读排行内容
        $paihang = Article::orderBy('views','desc')->take(4)->get();


        //网站设置
        $setting = Setting::first();

        //读取文章
        if(!empty($request->cate_id)){
            $article = Article::where('cate_id',$request->cate_id)->orderBy('id','desc')->paginate(10);
        }else{

        }



        // //判断标签id是否传递
        // if(!empty($request->tag_id)){
        //     $tag = Tag::findOrFail($request->tag_id);
        //     $article = $tag->article()->paginate(10);
        // }

        // if(!empty($request->tag_id)){
        //      $tag = Tag::findOrFail($request->tag_id);
        //      $article = $tag->article()->paginate(4);
        // }

        //dd($tag);
        if(empty($article)){
            $article = Article::orderBy('id','desc')->paginate(10);
        }

        return view('home.list', compact('cate','tag','tuijian','paihang','setting','article'));
    }



    //评论
    public function comment(Request $request)
    {
        $res = $request -> all();
         //dd($res['username']);
        $comment = new Comment;
        $comment -> username = $res['username'];
        $comment -> content = $res['content'];
        $comment -> article_id = $res['article_id'];
         if($comment->save()){
            return redirect("/".$res['article_id'].".html")->with('success','评论成功');
        }else{
            return back()->with('error','添加失败');
        }

    }

   
    
   
}
