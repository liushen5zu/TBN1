<?php

namespace App\Http\Controllers\home;



use App\AlDetail;
use App\Focus;
use App\Http\Controllers\Controller;
use App\Movie_detail;
use App\User;
use Illuminate\Http\Request;	

class HomeAlbumController extends Controller
{

    public function upload(Request $request)
    {
        //dd($request->file);
         if($request->hasFile('file')) {
            $path = '/'.$request->file->store('uploads/'.date('Ymd'));
            
        }

        return json_encode(['path' => $path]);
        //return json_encode('path' => $path);
    //    $dir = '/uploads/';
    // //判断
    //     if(!is_dir($dir)){
    //         mkdir($dir, 0777, true);
    //     }
    //     //文件名生成  1.jpg    =>   12301248120951.jpg
    //     $name = time().rand(10000,99999);
    //     //后缀  
    //     $suffix = strrchr($_FILES['file']['name'], '.');

    //     $path = $dir.$name.$suffix;

    //     move_uploaded_file($_FILES['file']['tmp_name'], $path);

    //     //输出内容给客户端
    //     return json_encode(['path' => $path,'type'=>trim($suffix,'.')]);
    }

    public function index()
    {
    	//影集列表
    	$album = AlDetail::all();
  
    	$movie_detail = Movie_detail::all();

    	
    	return view('home.album.album',compact('album','movie_detail'));
    }   

    public function show($id)
    {
    	$al = AlDetail::find($id);
        
    	//影片详情
    	$mode = $al->movie_detail()->get();

        //关注
        $focus = Focus::where('user_id',session('id'))->where('author_id',$al->user_id)->get();
        //关注数量
        $focus_num = count(Focus::where('user_id',$al->user_id)->get());
        //粉丝数量
        $focus_fsen = count(Focus::where('author_id',$al->user_id)->get());
        //dd($focus_num);
        //影集数量
        $al_num = count(AlDetail::where('user_id',$al->user_id)->get());
       // dd($al_num);

    	return view('home.album.detail',compact('al','mode','focus','focus_num','focus_fsen','al_num'));
    }

    public function create()
    {
        return view('home.album.create');
    }

    public function add(Request $request)
    {
        $add1 = $request->all();

        return view('home.album.create2',compact('add1'));
    }

    public function add2(Request $request)
    {
        dd($request->image);
        //dd($request->all());
       //dd($request->hasFile('image'));

        //dd(AlDetail::all());

        $aldetails = new AlDetail;

        $aldetails -> title = $request->title;
        $aldetails -> introduce = $request->introduce;
       // dd($request->image);

        if($request->hasFile('image')) {
            $aldetails->image = '/'.$request->image->store('uploads/'.date('Ymd'));
        }
        $path = $aldetails->image;
        //dd($path);   

        $aldetails->user_id = session('id');

        $aldetails -> save();
        // if(){
        //     return redirect('/home/albumAdd2')->with('success','添加成功');
        // }else{
        //     return back()->with('error','添加失败');
        // }

        $movie = Movie_detail::all();
        return view('home.album.create3',compact('movie'));
    }

}
