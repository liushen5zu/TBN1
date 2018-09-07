@extends('layouts.admin.default')
@section('title')
添加电影
@endsection
@section('content')
        <h1 style="font-size:26px">添加电影</h1>
        <hr>
        <br>
            <form class="layui-form" method="post" action="/movie_details" enctype="multipart/form-data">
                <div class="layui-form-item">
                    <label for="L_email" class="layui-form-label">
                        <span class="x-red">*</span>电影名
                    </label>
                    <div class="layui-input-inline">
                        <input type="text"  name="name" 
                        autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_pass" class="layui-form-label">
                        <span class="x-red">*</span>导演
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_pass" name="director_name_id"  lay-verify="pass"
                        autocomplete="off" class="layui-input">
                    </div>
                </div>
                
                <div class="layui-form-item">
                    <label for="L_pass" class="layui-form-label">
                        <span class="x-red">*</span>电影图片
                    </label>
                    <div class="layui-input-inline">
                        <input type="file" id="L_pass" name="image"  lay-verify="pass"
                        autocomplete="off" class="layui-input">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                        <span class="x-red">*</span>片长
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_repass" name="runningtime"  lay-verify="repass"
                        autocomplete="off" class="layui-input">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                        <span class="x-red">*</span>电影标签
                    </label>
                    <div class="layui-input-inline" >
                        @foreach($tag as $v)
                        <input  type="checkbox" id="L_repass" name="movie_tag_id[]" value="{{$v->id}}"  lay-verify="repass"
                         class="layui-input">{{$v->name}}
                        @endforeach
                    </div>
                </div>

                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                        <span class="x-red">*</span>电影分类
                    </label>
                    <div class="layui-input-inline">
                        <select class="form-control" name='movie_cate_id'>
                        @foreach($cate as $v)
                          <option value="{{$v->id}}">{{$v->name}}</option>
                        @endforeach
                        </select>
                    </div>
                </div>

                
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                        <span class="x-red">*</span>演员列表
                    </label>
                    <div class="layui-input-inline" >
                        @foreach($actor as $v)
                        <input  type="checkbox" id="L_repass" name="movie_actor_id[]" value="{{$v->id}}"  lay-verify="repass"
                         class="layui-input">{{$v->name}}
                        @endforeach
                    </div>
                </div>
                

                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                        <span class="x-red">*</span>推荐
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_repass" name="recom"  lay-verify="repass"
                        autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                        <span class="x-red">*</span>剧情简介
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_repass" name="intro"  lay-verify="repass"
                        autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                        <span class="x-red">*</span>评论数
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_repass" name="num"  lay-verify="repass"
                        autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                    </label>
                    {{csrf_field()}}
                    <button  class="layui-btn" lay-filter="add" lay-submit="">
                        增加
                    </button>
                </div>

                
            </form>
@endsection
