@extends('layouts.admin.default') 
@section('title')
修改导演
@endsection
@section('content')
	<div class="content">
		<h1 style="font-size:26px">导演修改</h1>
		<hr>
		<br>
            <!-- 右侧内容框架，更改从这里开始 -->
            <form class="layui-form" action="/movie_directors/{{$dir['id']}}" method="post" enctype="multipart/form-data">
                <div class="layui-form-item">
                    <label for="L_tag" class="layui-form-label">
                        <span class="x-red"></span>导演名
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_tag" name="name" value="{{$dir['name']}}" lay-verify="tag" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_tag" class="layui-form-label">
                        <span class="x-red"></span>性别
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_tag" name="sex" value="{{$dir['sex']}}" lay-verify="tag" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_tag" class="layui-form-label">
                        <span class="x-red"></span>出生日期
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_tag" name="date" value="{{$dir['date']}}" lay-verify="tag" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_tag" class="layui-form-label">
                        <span class="x-red"></span>出生地
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_tag" name="place" required="" lay-verify="tag" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_tag" class="layui-form-label">
                        <span class="x-red"></span>职业
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_tag" name="work" value="{{$dir['work']}}" lay-verify="tag" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_tag" class="layui-form-label">
                        <span class="x-red"></span>中文名
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_tag" name="ChinaName" value="{{$dir['ChinaName']}}" lay-verify="tag" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_tag" class="layui-form-label">
                        <span class="x-red"></span>影人简介
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_tag" name="director_intro" value="{{$dir['director_intro']}}" lay-verify="tag" autocomplete="off" class="layui-input">
                    </div>
                </div>
                {{csrf_field()}}
                {{method_field('PUT')}}
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                    </label>
                    <button class="layui-btn" lay-filter="add" lay-submit="">
                        提交
                    </button>
                </div>                
            </form>
            <!-- 右侧内容框架，更改从这里结束 -->
          </div>
@endsection