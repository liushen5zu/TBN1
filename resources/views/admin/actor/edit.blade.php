@extends('layouts.admin.default');

@section('content')
	<div class="content">
		<h1 style="font-size:26px">添加标签</h1>
		<hr>
		<br>
            <!-- 右侧内容框架，更改从这里开始 -->
            <form class="layui-form" action="/movie_actors/{{$actors['id']}}" method="post">
                <div class="layui-form-item">
                    <label for="L_tag" class="layui-form-label">
                        <span class="x-red"></span>姓名
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_tag" name="name" value="{{$actors['name']}}" required="" lay-verify="tag" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_tag" class="layui-form-label" style="padding:5px;padding-right:30px;padding-left:13px">
                        <span class="x-red"></span>性别
                    </label>
                    <div class="layui-input-inline" >
                        男&nbsp;&nbsp;<input type="radio" class="layui-input" autocomplete="off" name="sex" value="1" 
                        @if($actors['sex']==1)
                            checked 
                        @endif
                        >
                        女&nbsp;&nbsp;<input type="radio" class="layui-input" autocomplete="off" name="sex" value="2"
                        @if($actors['sex']==2)
                            checked 
                        @endif
                        >
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_tag" class="layui-form-label">
                        <span class="x-red"></span>出生日期
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_tag" name="date" value="{{$actors['date']}}"required="" lay-verify="tag" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_tag" class="layui-form-label">
                        <span class="x-red"></span>职业
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_tag" name="work" value="{{$actors['work']}}"required="" lay-verify="tag" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_tag" class="layui-form-label">
                        <span class="x-red"></span>英文名
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_tag" name="EnglishName" value="{{$actors['EnglishName']}}" required="" lay-verify="tag" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_tag" class="layui-form-label">
                        <span class="x-red"></span>中文名
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_tag" name="ChinaName" value="{{$actors['ChinaName']}}" required="" lay-verify="tag" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_tag" class="layui-form-label">
                        <span class="x-red"></span>家庭成员
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_tag" name="familyMember" value="{{$actors['familyMember']}}" required="" lay-verify="tag" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_tag" class="layui-form-label">
                        <span class="x-red"></span>获奖经历
                    </label>
                    <div class="layui-input-inline">
                        <textarea class="form-control" name="winning"  required="" lay-verify="tag"   rows="5" cols="50" style="color:black">{{$actors['winning']}}</textarea>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_tag" class="layui-form-label">
                        <span class="x-red"></span>影人简介
                    </label>
                    <div class="layui-input-inline">
                        <textarea class="form-control" name="actor_into" required="" lay-verify="tag"   rows="7" cols="50" style="color:black">{{$actors['actor_into']}}</textarea>
                    </div>
                </div>
                {{csrf_field()}}
                {{method_field('PUT')}}
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