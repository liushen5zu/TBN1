@extends('layouts.admin.default')
@section('title')
添加影评评论
@endsection
@section('content')
<div class="content">
	<h1 style="font-size:26px">添加影评评论</h1>
		<hr>
		<br>
            <!-- 右侧内容框架，更改从这里开始 -->
            <form class="layui-form" action="/movieReview" method="post">
                <div class="layui-form-item">
                    <label for="L_username" class="layui-form-label">
                        <span class="x-red">*</span>点赞数
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_username" name="zan" required="" lay-verify="nikename"
                        autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_username" class="layui-form-label">
                        <span class="x-red">*</span>内容
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_username" name="content" required="" lay-verify="nikename"
                        autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_username" class="layui-form-label">
                        <span class="x-red">*</span>影片ID
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_username" name="movie_comment_id" required="" lay-verify="nikename"
                        autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_username" class="layui-form-label">
                        <span class="x-red">*</span>用户ID
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_username" name="user_id" required="" lay-verify="nikename"
                        autocomplete="off" class="layui-input">
                    </div>
                </div>
                {{csrf_field()}}
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                    </label>
                    <button  class="layui-btn" lay-filter="add" lay-submit="">
                        增加
                    </button>
                </div>
            </form>
            <!-- 右侧内容框架，更改从这里结束 -->
          </div>
          
@endsection