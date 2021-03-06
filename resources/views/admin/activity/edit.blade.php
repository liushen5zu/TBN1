@extends('layouts.admin.default');
@section('title')
编辑活动
@endsection
@section('content')
	<div class="content">
		<h1 style="font-size:26px">编辑活动</h1>
		<hr>
		<br>
            <!-- 右侧内容框架，更改从这里开始 -->
            <form class="layui-form" action="/activity/{{$activity->id}}" method="post" enctype="multipart/form-data">
                <div class="layui-form-item">
                    <label for="L_tag" class="layui-form-label">
                        <span class="x-red"></span>活动标题
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_tag" name="title" required="" lay-verify="tag" autocomplete="off" value="{{$activity->title}}" class="layui-input">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label for="L_tag" class="layui-form-label">
                        <span class="x-red"></span>活动地点
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_tag" name="activity_site" required="" lay-verify="tag" autocomplete="off" value="{{$activity->activity_site}}" class="layui-input">
                    </div>
                </div>
                
                <div class="layui-form-item">
                    <label for="L_tag" class="layui-form-label">
                        <span class="x-red"></span>截止时间
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_tag" name="rtime" required="" lay-verify="tag" autocomplete="off" value="{{$activity->activity_site}}" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_tag" class="layui-form-label">
                        <span class="x-red"></span>活动图
                    </label>
                    <div class="layui-input-inline">
                     <img src="{{$activity->image}}" width="100px"> 
                        <input type="file" id="L_tag" name="image" required="" lay-verify="tag" autocomplete="off" value="{{$activity->image}}" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_tag" class="layui-form-label">
                        <span class="x-red"></span>报名数
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_tag" name="registration_num" required="" lay-verify="tag" value="{{$activity->registration_num}}" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_tag" class="layui-form-label">
                        <span class="x-red"></span>关注数
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_tag" name="attention_num" required="" lay-verify="tag" autocomplete="off" value="{{$activity->registration_num}}" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_tag" class="layui-form-label">
                        <span class="x-red"></span>活动简介
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_tag" name="intro" required="" lay-verify="tag" autocomplete="off" value="{{$activity->intro}}" class="layui-input">
                    </div>
                </div>
                
                
                {{method_field('PUT')}}
                {{csrf_field()}}
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                    </label>
                    <button class="layui-btn" lay-filter="add" lay-submit="">
                        编辑
                    </button>
                </div>
            </form>
            <!-- 右侧内容框架，更改从这里结束 -->
          </div>
@endsection