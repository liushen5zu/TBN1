@extends('layouts.admin.default')
@section('title')
导演列表
@endsection
@section('content')

<div class="content">
    <h1 style="font-size:26px">导演列表</h1>
        <hr>
        <br>
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

           <a class="layui-btn" href="/movie_directors/create"><i class="layui-icon">&#xe608;</i>添加</a>

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
                            导演名
                        </th>
                        <th>
                            性别
                        </th>
                        <th>
                            出生日期
                        </th>    
                        <th>
                            出生地
                        </th>
                        <th>
                            职业
                        </th>
                        <th>
                            中文名
                        </th>
                        <th>
                            影人简介
                        </th>
                        <th>
                            操作
                        </th>
                    </tr>
                </thead>                
                <tbody>
                    @foreach ($dirs as $v)
                     <tr>
                        <th>
                            <input type="checkbox" name="" value="">
                        </th>
                        <th>
                            {{$v['id']}}
                        </th>
                        <th>
                            {{$v['name']}}
                        </th>
                        <th>
                            {{$v['sex']}}
                        </th>
                        <th>
                            {{$v['date']}}
                        </th>
                        <th>
                            {{$v['place']}}
                        </th>
                        <th>
                            {{$v['work']}}
                        </th>
                        <th>
                            {{$v['ChinaName']}}
                        </th>
                        <th>
                            {{str_limit($v['director_intro'],5,'...')}}
                        </th>
                        <td class="td-manage">                    
                            <form method="get" action="/movie_directors/{{$v['id']}}/edit" style="float:left">  
                                {{csrf_field()}}   
                            <button title="编辑"  class="ml-5" style="text-decoration:none;color:#000">
                                <i class="layui-icon">编辑</i>
                            </button>
                            &nbsp;&nbsp;
                            </form>

                            <form method="post" action="/movie_directors/{{$v['id']}}" style="float:left">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button title="删除" href="javascript:;" onclick="member_del(this,'1')" style="text-decoration:none">
                                <i class="layui-icon" style="color:#000">删除</i>
                            </button>
                            </form>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- 右侧内容框架，更改从这里结束 -->
          </div>
		
@endsection