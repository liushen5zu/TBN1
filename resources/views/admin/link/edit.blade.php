@extends('layouts.admin.default')
@section('title')
修改友链
@endsection 
@section('content')
	<div class="content">
		<h1 style="font-size:26px">友链修改</h1>
		<hr>
		<br>
            <!-- 右侧内容框架，更改从这里开始 -->
            <form class="layui-form" action="/link/{{$link['id']}}" method="post" enctype="multipart/form-data">
                <div class="layui-form-item">
                    <label for="L_tag" class="layui-form-label">
                        <span class="x-red"></span>友链名
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_tag" name="name" value="{{$link['name']}}" lay-verify="tag" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_tag" class="layui-form-label">
                        <span class="x-red"></span>友链地址
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_tag" name="url" value="{{$link['url']}}" lay-verify="tag" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_tag" class="layui-form-label">
                        <span class="x-red"></span>排名
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_tag" name="order" value="{{$link['order']}}" lay-verify="tag" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_tag" class="layui-form-label">
                        <span class="x-red"></span>宣传图片
                    </label>
                    <div class="layui-input-inline">
                        <input type="file" id="L_tag" name="image" value="{{$link['image']}} lay-verify="tag" autocomplete="off" class="layui-input">
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