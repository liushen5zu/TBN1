@extends('layouts.admin.default')
@section('content')
        <h1 style="font-size:26px">修改图片</h1>
        <hr>
        <br>
            <form class="layui-form" method="post" action="/movie_images/{{$movie_images['id']}}" enctype="multipart/form-data"">
                <div class="layui-form-item">
                    <label for="L_email" class="layui-form-label">
                        <span class="x-red">*</span>图片标题
                    </label>
                    <div class="layui-input-inline">
                        <input type="text"  name="name" 
                         class="layui-input" value="{{$movie_images['name']}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_pass" class="layui-form-label">
                        <span class="x-red">*</span>电影详情ID
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_pass" name="movie_detail_id"
                         class="layui-input" value="{{$movie_images['movie_detail_id']}}">
                    </div>

                </div>
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                        <span class="x-red">*</span>图片
                    </label>
                    <div class="layui-input-inline">
                        <img src="{{$movie_images['image']}}">
                        <input id="doc-form-file" type="file" name="image">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                    </label>
                    <button  class="layui-btn" lay-filter="add" lay-submit="">
                        修改
                    </button>
                </div>
                {{method_field('PUT')}}
                {{csrf_field()}}
            </form>
@endsection
