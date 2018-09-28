<?php

namespace App\Http\Controllers\home;



use App\AlDetail;
use App\AlMovie;
use App\Focus;
use App\Http\Controllers\Controller;
use App\Level;
use App\Movie_detail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;	

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
  
    	$movie_detail = Movie_detail::orderBy('id','desc')->get();

    	$al_movie = AlMovie::all();
    	return view('home.album.album',compact('album','movie_detail','al_movie'));
    }   

    public function show($id)
    {
    	$al = AlDetail::find($id);
        
        //影集添加的影片
        $al_movie = AlMovie::where('al_detail_id',$id)->get();
    	//影片详情
    	//$mode = $al->movie_detail()->get();

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

    	return view('home.album.detail',compact('al','focus','focus_num','focus_fsen','al_num','al_movie'));
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
         //dump($request->all());
         //dd($request->all());
       // dd($request->hasFile('image'));

        //dd(AlDetail::all());

        $level = Level::where('user_id',session('id'))->get();
       // dd($level);
        if(count($level)==0){
            $levels = new Level;
            $levels -> integral = 10;
            $levels -> experience = 50;
            $levels -> user_id = session('id');
            $levels -> save();
        }else{
            $levels = Level::where('user_id',session('id'))->first();
            //用户积分
            $levels -> integral = $levels -> integral + 10;
            //用户经验
            $levels -> experience = $levels -> experience + 50;
           $levels -> save();
            //dd($levels);
        }


        $aldetails = new AlDetail;

        $aldetails -> title = $request->title;
        $aldetails -> introduce = $request->introduce;
       // dd($request->image);

        // if($request->hasFile('image')) {
        //     $aldetails->image = '/'.$request->image->store('uploads/'.date('Ymd'));
        // }
        //$path = $aldetails->image;
        
        $aldetails ->image = $request->image;
        $aldetails->user_id = session('id');

        $aldetails -> save();
        


        $movie = Movie_detail::all();
        return view('home.album.create3',compact('movie'));
    }

    public function add3(Request $request)
    {
       // dd($request->all());
        //dd(AlDetail::orderBy('id',"desc")->first());
        //dd($request->image2);
        $al_id = AlDetail::orderBy('id',"desc")->first()->id;
        //dd($al_id);
        
        foreach($request->all() as $key=>$val){
            $a = new AlMovie;
            $a->al_detail_id = $al_id;
            $a->movie_detail_id = $key;
            $a->image = "$val";
            $a->save();
            // DB::insert('insert into al_detail_movie_detail(al_detail_id, image, movie_detail_id,) values (?, ?, ?)',
            // [$al_id,'+$val+',$key]);
        }
        return "<script>alert('注册成功');window.location.href='/home/album'</script>";
        
              
        
        
    }

}
