@extends('layouts.admin.default')
@section('title')
修改分类
@endsection
@section('content')
<div class="content">
    <h1 style="font-size:26px">修改地区</h1>
        <hr>
        <br>
            <!-- 右侧内容框架，更改从这里开始 -->
            <form class="layui-form" action="/movie_cates/{{$movie_cates['id']}}" method="post">
                <div class="layui-form-item">
                    <label for="L_username" class="layui-form-label">
                        <span class="x-red">*</span>地区
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_username" name="name" value="{{$movie_cates['name']}}" lay-verify="nikename"
                        autocomplete="off" class="layui-input">
                    </div>
                </div>
                {{csrf_field()}}
                {{method_field('PUT')}}
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                    </label>
                    <button  class="layui-btn" lay-filter="add" lay-submit="">
                        修改
                    </button>
                </div>
            </form>
            <!-- 右侧内容框架，更改从这里结束 -->
          </div>
@endsection