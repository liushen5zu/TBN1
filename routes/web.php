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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login','LoginController@login');
Route::get('/dologin','LoginController@dologin');
Route::get('/outlogin','LoginController@outlogin');
Route::get('/relogin','LoginController@relogin');

Route::group([],function(){
	
	Route::get('/admin','AdminController@index');

	//用户管理
	Route::resource('user','UserController');

	//电影详情管理
	Route::resource('movie_details','MovieDetailsController');

	//电影评论管理
	Route::resource('movie_comments','MovieCommentsController');

	//导演管理
	Route::resource('movie_directors','MovieDirectorsController');

	//演员管理
	Route::resource('movie_actors','MovieActorsController');

	//电影标签管理
	Route::resource('movie_details_tags','MovieTagsController');

	//电影分类管理
	Route::resource('movie_cates','MovieCatesController');

	//电影图片管理
	Route::resource('movie_images','MovieImagesController');

	//电影片段管理
	Route::resource('movie_frags','MovieFragsController');

	//友情链接管理
	Route::resource('link','LinkController');
	//活动管理
	Route::resource('activity','ActivityController');
	//帖子管理
	Route::resource('tiezi','tieziController');
	//评论管理	
	Route::resource('/comment','CommentController');
});




//前台登录
Route::get('/home/login','HomeLoginController@login');
Route::post('/home/dologin','HomeLoginController@dologin');
Route::get('/home/outlogin','HomeLoginController@outlogin');

//前台活动
Route::get('/home/activity/list','HomeActivityController@list');
Route::get('/home/activity/{id}.html','HomeActivityController@show');

//活动评论

Route::post('/home/activite/comment','ActivityCommentController@list');
//影评(主页)
Route::get('/home/review','home\HomeReviewController@index');
//影评(影评列表)
Route::get('/home/review/table','home\HomeReviewController@table');
//影评详情
Route::get('/home/review/{id}.html','home\HomeReviewController@show');

//电影
Route::get('/home/{id}.html','HomeMovieDetailsController@show');
Route::get('/home/movieDetails','HomeMovieDetailsController@index');

//帖子列表
Route::get('/home/tiezis', 'tieziController@list');
//帖子详情页
Route::get('/home/tiezi/{id}.html', 'TieziController@show');