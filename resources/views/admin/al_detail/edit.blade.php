@extends('layouts.admin.default') 
@section('title')
修改影集
@endsection
@section('content')
	<div class="content">
		<h1 style="font-size:26px">影集修改</h1>
		<hr>
		<br>
            <!-- 右侧内容框架，更改从这里开始 -->
            <form class="layui-form" action="/al_detail/{{$album['id']}}" method="post" enctype="multipart/form-data">
                <div class="layui-form-item">
                    <label for="L_tag" class="layui-form-label">
                        <span class="x-red"></span>影集标题
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_tag" name="title" required="" lay-verify="tag" autocomplete="off" class="layui-input" value="{{$album['title']}}">
                    </div>
                </div>
               
                <div class="layui-form-item">
                    <label for="L_tag" class="layui-form-label">
                        <span class="x-red"></span>影集简介
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_tag" name="introduce" required="" lay-verify="tag" autocomplete="off" class="layui-input" value="{{$album['introduce']}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_tag" class="layui-form-label">
                        <span class="x-red"></span>影集封面
                    </label>
                    <div class="layui-input-inline">
                        <input type="file" id="L_tag" name="image" required="" lay-verify="tag" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                        <span class="x-red">*</span>电影列表
                    </label>
                    <div class="layui-input-inline" >
                        @foreach($moviedetail_id as $v)
                        <input  type="checkbox" id="L_repass" name="movie_detail_id[]" value="{{$v->id}}"  lay-verify="repass"
                         class="layui-input"
                        @if(in_array($v->id,$album->movie_detail()->pluck('id')->toArray()))
                            checked
                            @endif
                         >{{$v->name}}
                        @endforeach
                    </div>
                </div>
                {{csrf_field()}}
                {{method_field('PUT')}}
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                    </label>
                    <button class="layui-btn" lay-filter="add" lay-submit="">
                        修改
                    </button>
                </div>                
            </form>
            <!-- 右侧内容框架，更改从这里结束 -->
          </div>
@endsection