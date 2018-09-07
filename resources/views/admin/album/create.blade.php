@extends('layouts.admin.default') 
@section('title')
添加影集
@endsection
@section('content')
	<div class="content">
		<h1 style="font-size:26px">影集添加</h1>
		<hr>
		<br>
            <!-- 右侧内容框架，更改从这里开始 -->
            <form class="layui-form" action="/album" method="post" enctype="multipart/form-data">
                <div class="layui-form-item">
                    <label for="L_tag" class="layui-form-label">
                        <span class="x-red"></span>影集标题
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_tag" name="title" required="" lay-verify="tag" autocomplete="off" class="layui-input">
                    </div>
                </div>
               
                <div class="layui-form-item">
                    <label for="L_tag" class="layui-form-label">
                        <span class="x-red"></span>影集简介
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_tag" name="introduce" required="" lay-verify="tag" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_pass" class="layui-form-label">
                        <span class="x-red">*</span>创建人
                    </label>
                    <div class="layui-input-inline">

                        <select type="text" id="L_pass" name="user_id"  lay-verify="pass"
                        class="layui-input">
                            @foreach($user as $v)
                            <option value="{{$v->id}}">{{$v->username}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                {{csrf_field()}}
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                    </label>
                    <button class="layui-btn" lay-filter="add" lay-submit="">
                        添加
                    </button>
                </div>                
            </form>
            <!-- 右侧内容框架，更改从这里结束 -->
          </div>
@endsection