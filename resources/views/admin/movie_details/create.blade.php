@extends('layouts.admin.default')

@section('content')
        <h1 style="font-size:26px">添加电影</h1>
        <hr>
        <br>
            <form class="layui-form" method="post" action="/movie_details">
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
                        <input type="password" id="L_pass" name="director_id" required="" lay-verify="pass"
                        autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                        <span class="x-red">*</span>地区
                    </label>
                    <div class="layui-input-inline">
                        <input type="password" id="L_repass" name="countries" required="" lay-verify="repass"
                        autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                        <span class="x-red">*</span>片长
                    </label>
                    <div class="layui-input-inline">
                        <input type="password" id="L_repass" name="runningtime" required="" lay-verify="repass"
                        autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                        <span class="x-red">*</span>电影分类
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" name="move_cate_id" lay-verify="repass"
                        autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                        <span class="x-red">*</span>推荐
                    </label>
                    <div class="layui-input-inline">
                        <input type="password" id="L_repass" name="recom" required="" lay-verify="repass"
                        autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                        <span class="x-red">*</span>剧情简介
                    </label>
                    <div class="layui-input-inline">
                        <input type="password" id="L_repass" name="intro" required="" lay-verify="repass"
                        autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                        <span class="x-red">*</span>评论数
                    </label>
                    <div class="layui-input-inline">
                        <input type="password" id="L_repass" name="num" required="" lay-verify="repass"
                        autocomplete="off" class="layui-input">
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
