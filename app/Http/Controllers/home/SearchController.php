<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use App\Movie_detail;
use App\movie_details;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search()
    {
    	//接收用户输入数据
    	$keyword=$_GET['keyword'];
    	//进入数据库查询所有的文章title
    	$res=DB::table('movie_details')->select('name')->get()->toArray();
    	//生成被匹配数组
    	$new=[];
    	foreach ($res as $key => $value) {
    		$new[]=$value->name;
    	}
    	//用正则匹配每个值是否与用户输入值一致
    	$preg="/\.{0,}{$keyword}\.{0,}/";
    	$arr=preg_grep($preg, $new);
    	//将匹配到的结果返回给前台
    	echo json_encode($arr);
    }
}
