@extends('layouts.admin.default');

@section('content')
	<div class="content">
		<h1 style="font-size:26px">标签修改</h1>
		<hr>
		<br>
            <!-- 右侧内容框架，更改从这里开始 -->
            <form class="layui-form" action="/movie_details_tags/{{$tag['id']}}" method="post">
                <div class="layui-form-item">
                    <label for="L_tag" class="layui-form-label">
                        <span class="x-red"></span>标签名
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_tag" name="name" required="" lay-verify="tag" autocomplete="off" class="layui-input" value="{{$tag['name']}}">
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