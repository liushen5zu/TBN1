<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//后台设置
//登录
Route::get('/login','LoginController@login');
Route::post('/dologin','LoginController@dologin');
Route::get('/logout','LoginController@logout');

Route::group(['middleware'=>'login'],function(){
	//后台首页
	Route::get('/admin','AdminController@index');


	//用户管理
	Route::resource('user','UserController');

	//标签管理
	Route::resource('tag','TagController');


	//分类管理
	Route::resource('cate','CateController');


	//文章管理
	Route::resource('article','ArticleController');


	//友情链接
	Route::resource('link','LinkController');

	//后台管理
	Route::resource('setting','SettingController');


});


//前台设置

//首页
Route::get('/','HomeController@index');

//文章列表
Route::get('/home/articles','ArticleController@list');

//关于作者
Route::get('/home/aboutme','UserController@me');

//详情页
Route::get('/{id}.html','ArticleController@show');

Route::post('/home/comment','ArticleController@comment');





