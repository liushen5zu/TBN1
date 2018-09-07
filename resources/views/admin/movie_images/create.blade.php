@extends('layouts.admin.default')
@section('title')
添加电影图片
@endsection
@section('content')
        <h1 style="font-size:26px">添加图片</h1>
        <hr>
        <br>
            <form class="layui-form" method="post" action="/movie_images" enctype="multipart/form-data">
                <div class="layui-form-item">
                    <label for="L_email" class="layui-form-label">
                        <span class="x-red">*</span>图片标题
                    </label>
                    <div class="layui-input-inline">
                        <input type="text"  name="name" 
                        autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_pass" class="layui-form-label">
                        <span class="x-red">*</span>电影详情ID
                    </label>
                    <div class="layui-input-inline">

                        <select  id="L_pass" name="movie_detail_id" required="" lay-verify="pass"
                        autocomplete="off" class="layui-input">
                            @foreach($details as $v)
                            <option value="{{$v->id}}">{{$v->name}}</option>
                            @endforeach
                        </select>
                    </div>

                </div>
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                        <span class="x-red">*</span>图片
                    </label>
                    <div class="layui-input-inline">
                        <input type="file" id="L_repass" name="image">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                    </label>
                    <button  class="layui-btn" lay-filter="add" lay-submit="">
                        增加
                    </button>
                </div>

                {{csrf_field()}}
            </form>
@endsection
