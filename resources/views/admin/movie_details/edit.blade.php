@extends('layouts.admin.default')
@section('title')
修改电影
@endsection
@section('content')
        <h1 style="font-size:26px">添加电影</h1>
        <hr>
        <br>
            <form class="layui-form" method="post" action="/movie_details/{{$movie_details['id']}}" enctype="multipart/form-data">
                <div class="layui-form-item">
                    <label for="L_email" class="layui-form-label">
                        <span class="x-red">*</span>电影名
                    </label>
                    <div class="layui-input-inline">
                        <input type="text"  name="name" 
                        autocomplete="off" class="layui-input" value="{{$movie_details['name']}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_pass" class="layui-form-label">
                        <span class="x-red">*</span>导演
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_pass" name="director_name_id" required="" lay-verify="pass"
                        autocomplete="off" class="layui-input" value="{{$movie_details['director_name_id']}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_pass" class="layui-form-label">
                        <span class="x-red">*</span>电影图片
                    </label>
                    <div class="layui-input-inline">
                        <input type="file" id="L_pass" name="image" required="" lay-verify="pass"
                        autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                        <span class="x-red">*</span>地区
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_repass" name="countries" value="countries" lay-verify="repass"
                        autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                        <span class="x-red">*</span>片长
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_repass" name="runningtime" value="{{$movie_details['runningtime']}}" lay-verify="repass"
                        autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                        <span class="x-red">*</span>电影分类
                    </label>
                    <div class="layui-input-inline">
                        <select class="form-control" name="movie_cate_id">
                        @foreach($cate as $v)
                          <option value="{{$v->id}}" {{$movie_details['movie_cate_id']==$v->id ? 'selected' : ""}}>{{$v->name}}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
                <?php
                    var_dump($movie_details->movie_actor()->pluck('id')->toArray());
                ?>
                 <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                        <span class="x-red">*</span>演员列表
                    </label>
                    <div class="layui-input-inline" >
                        @foreach($actor as $v)
                        <input  type="checkbox" id="L_repass" name="movie_actor_id[]" value="{{$v->id}}"  lay-verify="repass"
                         class="layui-input"

                            @if(in_array($v->id,$movie_details->movie_actor()->pluck('id')->toArray()))
                            checked
                            @endif
                         >{{$v->name}}
                        @endforeach
                    </div>
                </div>

                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                        <span class="x-red">*</span>推荐
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_repass" name="recom"  lay-verify="repass"
                        autocomplete="off" class="layui-input" value="{{$movie_details['recom']}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                        <span class="x-red">*</span>剧情简介
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_repass" name="intro" required="" lay-verify="repass"
                        autocomplete="off" class="layui-input" value="{{$movie_details['intro']}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                        <span class="x-red">*</span>评论数
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_repass" name="num" required="" lay-verify="repass"
                        autocomplete="off" class="layui-input" value="{{$movie_details['num']}}">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                    </label>
                    <button  class="layui-btn" lay-filter="add" lay-submit="">
                        修改
                    </button>
                </div>
                 {{method_field('put')}}
                {{csrf_field()}}
            </form>
@endsection
