@extends('layouts.admin.default')
@section('title')
用户列表
@endsection
@section('content')


<div class="content">
            <!-- 右侧内容框架，更改从这里开始 -->
            <form class="layui-form xbs" action="">
                <div class="layui-form-pane" style="text-align: center;">
                  <div class="layui-form-item" style="display: inline-block;">
                    <label class="layui-form-label xbs768">日期范围</label>
                    <div class="layui-input-inline xbs768">
                      <input class="layui-input" placeholder="开始日" id="LAY_demorange_s">
                    </div>
                    <div class="layui-input-inline xbs768">
                      <input class="layui-input" placeholder="截止日" id="LAY_demorange_e">
                    </div>
                    <div class="layui-input-inline">
                      <input type="text" name="username" placeholder="请输入用户名" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-input-inline" style="width:80px">
                        <button class="layui-btn" lay-submit="" lay-filter="sreach"><i class="layui-icon"></i></button>
                    </div>
                  </div>
                </div> 
            </form>
            <xblock><button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon"></i>批量删除</button>

            <a href="/user/create" class="layui-btn"><i class="layui-icon"></i>添加</a>

            <span class="x-right" style="line-height:40px">共有数据：88 条</span></xblock>
            <table class="layui-table">
                <thead>
                    <tr>
                        <th>
                            <input type="checkbox" name="" value="">
                        </th>
                        <th>
                            ID
                        </th>
                        <th>
                            用户名
                        </th>
                        <th>
                            邮箱
                        </th>
                        <th>
                            头像
                        </th>
                        <th>
                            手机
                        </th>
                        <th>
                            权限
                        </th>
                       <th>
                            状态
                        </th>
                        <th>
                            操作
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $v)
                    <tr>
                        <td>
                            <input type="checkbox" value="1" name="">
                        </td>
                        <td>
                            {{$v->id}}
                        </td>
                        <td>
                            <u style="cursor:pointer" onclick="member_show('张三','member-show.html','10001','360','400')">
                               {{$v->username}}
                            </u>
                        </td>
                        <td>
                           {{$v->email}}
                        </td>
                        <td>
                           <img src="{{$v->image}}" width="40px">
                        </td>
                        <td>
                            {{$v->phone}}
                        </td>
                        <td>
                            @if($v->permissions==0)
                            管理员
                            @endif
                            @if($v->permissions==1)
                            会员用户
                            @endif
                            @if($v->permissions==2)
                            普通用户
                            @endif

                        </td>
                        

                        <td class="td-status">
                            <span class="layui-btn layui-btn-normal layui-btn-mini">
                                已启用
                            </span>
                        </td>
                        <td class="td-manage">
                           <!--  <a style="text-decoration:none" onclick="member_stop(this,'10001')" href="javascript:;" title="停用">
                                <i class="layui-icon"></i>
                            </a> -->

                            <form method="get" action="/user/{{$v->id}}/edit" style="float:left">
                           
                            {{method_field('PUT')}}
                            <button title="编辑"  class="ml-5" style="text-decoration:none;color:#000">
                                <i class="layui-icon">编辑</i>
                            </button>
                            &nbsp;&nbsp;
                            </form>

                            <!-- <a style="text-decoration:none" onclick="member_password('修改密码','member-password.html','10001','600','400')" href="javascript:;" title="修改密码">
                                <i class="layui-icon"></i>
                            </a> -->
                            <form method="post" action="/user/{{$v->id}}" style="float:left">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button title="删除" href="javascript:;" onclick="member_del(this,'1')" style="text-decoration:none">
                                <i class="layui-icon" style="color:#000">删除</i>
                            </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            <!-- 右侧内容框架，更改从这里结束 -->
          </div>
		
		
@endsection