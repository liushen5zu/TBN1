@extends('layouts.admin.default')
@section('title')
用户修改
@endsection
@section('content')
        <h1 style="font-size:26px">用户修改</h1>
        <hr>
        <br>
          <div class="content">
            <!-- 右侧内容框架，更改从这里开始 -->
            <form class="layui-form" method="post" action="/user/{{$user->id}}" enctype="multipart/form-data">
                 <div class="layui-form-item">
                    <label for="L_email" class="layui-form-label">
                        <span class="x-red">*</span>用户名
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_email" name="username" required="" lay-verify="username" value="{{$user->username}}"
                        autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-form-mid layui-word-aux">
                        <span class="x-red">*</span>将会成为您唯一的登入名
                    </div>
                </div>
                <div class="layui-form-item">
                    <label for="L_email" class="layui-form-label">
                        <span class="x-red">*</span>邮箱
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_email" name="email" required="" lay-verify="email" value="{{$user->email}}"
                        autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-form-mid layui-word-aux">
                        <span class="x-red">*</span>
                    </div>
                </div>
                
               

                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                        <span class="x-red">*</span>手机号
                    </label>
                    <div class="layui-input-inline">
                        <input type="text" id="L_repass" value="{{$user->phone}}" name="phone" required="" lay-verify="repass"
                        autocomplete="off" class="layui-input">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                        <span class="x-red">*</span>头像
                    </label>
                    <div class="layui-input-inline">
                        <input type="file" id="L_repass" name="image" required="" lay-verify="repass"
                        autocomplete="off" class="layui-input"><img src="{{$user->image}}" width="50px">
                    </div>
                </div>


                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                        <span class="x-red">*</span>权限
                    </label>
                    <div class="layui-input-inline">
                        <select class="layui-input" name="permissions">
                          <option value="0" 
                            @if($user->permissions==0)
                                selected
                            @endif
                          >管理员</option>
                          <option value="1" 
                            @if($user->permissions==1)
                                selected
                            @endif
                          >会员用户</option>
                          <option value="2" 
                            @if($user->permissions==2)
                                selected
                            @endif
                          >普通用户</option>
                        </select>

                    </div>
                </div>

                <div class="layui-form-item">
                    <label for="L_repass" class="layui-form-label">
                    </label>
                    {{csrf_field()}}
                     {{method_field('PUT')}}
                    <button  class="layui-btn" lay-filter="add" lay-submit="">
                        编辑
                    </button>
                </div>
            </form>
            <!-- 右侧内容框架，更改从这里结束 -->
          </div>
        
@endsection