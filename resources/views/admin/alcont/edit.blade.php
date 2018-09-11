@extends('layouts.admin.default');
@section('title')
修改影片
@endsection
@section('content')
	<div class="content">
		<h1 style="font-size:26px">修改影片</h1>
		<hr>
		<br>
            <!-- 右侧内容框架，更改从这里开始 -->
            <form class="layui-form" action="/alcont/{{$alcont['id']}}" method="post">
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                        <span class="x-red">*</span>影集标题
                    </label>
                    <div class="layui-input-inline">
                        <select class="form-control" name='aldetail_id'>
                        @foreach($album as $v)
                          <option value="{{$v->id}}">{{$v->title}}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                        <span class="x-red">*</span>电影名
                    </label>
                    <div class="layui-input-inline">
                        <select class="form-control" name='moviedetail_id'>
                        @foreach($moviedetail as $v)
                          <option value="{{$v->id}}">{{$v->name}}</option>
                        @endforeach
                        </select>
                    </div>
                </div>

                <div class="layui-form-item">
                    <label for="L_tag" class="layui-form-label">
                        <span class="x-red"></span>推荐理由
                    </label>
                    <div class="layui-input-inline">
                        <textarea class="form-control" name="recommend" required="" lay-verify="tag"   rows="7" cols="50" style="color:black"></textarea>
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