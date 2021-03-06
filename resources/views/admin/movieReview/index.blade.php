@extends('layouts.admin.default')
@section('title')
影评评论列表
@endsection
@section('content')
<div class="content">
<h1 style="font-size:26px">影评评论列表</h1>
        <hr>
        <br>
<form class="layui-form xbs" action="" >
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
                      <input type="text" name="username"  placeholder="请输入用户名" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-input-inline" style="width:80px">
                        <button class="layui-btn"  lay-submit="" lay-filter="sreach"><i class="layui-icon">&#xe615;</i></button>
                    </div>
                  </div>
                </div> 
            </form>
            <xblock><button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon">&#xe640;</i>批量删除</button><span class="x-right" style="line-height:40px">共有数据：88 条</span>
                <a  class="layui-btn" href="/movieReview/create" ><i class="layui-icon"></i>添加</a></xblock>

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
                            评论赞数
                        </th>
                        <th>
                            评论详情
                        </th>
                        <th>
                            影评标题
                        </th>
                        <th>
                            操作
                        </th>
                    </tr>
                </thead>

                @foreach($review as $v)
                
                <tbody>
                    <tr>
                        <td>
                            <input type="checkbox" value="1" name="">
                        </td>
                        <td >
                            {{$v['id']}}
                        </td>
                        <td>
                            {{$v->user->username}}
                        </td>
                        <td>
                            {{$v->zan}}
                        </td>
                        <td >
                            {{$v['content']}}
                        </td>
                        <td >
                            {{$v->movie_comment['title']}}
                        </td>
                        <td class="td-manage">
                            <form method="post" action="/movieReview/{{$v['id']}}" style="float:left">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button title="删除" href="javascript:;" onclick="member_del(this,'1')" style="text-decoration:none">
                                <i class="layui-icon" style="color:#000">删除</i>
                            </button>
                            </form>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
@endsection