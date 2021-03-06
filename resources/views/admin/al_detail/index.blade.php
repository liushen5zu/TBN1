@extends('layouts.admin.default');
@section('title')
影集列表
@endsection
@section('content')
	
<div class="content">
        <h1 style="font-size:26px">影集列表</h1>
        <hr>
        <br>
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
                      <input type="text" name="title" placeholder="请输入影集名" autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-input-inline" style="width:80px">
                        <button class="layui-btn" lay-submit="" lay-filter="sreach"><i class="layui-icon"></i></button>
                    </div>
                  </div>
                </div> 
            </form>
            <xblock><button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon"></i>批量删除</button>
            
            <a  class="layui-btn" href="/al_detail/create" ><i class="layui-icon"></i>添加</a>

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
                            标题
                        </th>
                        <th>
                            简介
                        </th>
                        <th>
                            影集封面
                        </th>    
                        <th>
                            创建人
                        </th>
                        <th>
                            操作
                        </th>
                    </tr>
                </thead>

            <form method="post" action=""></form>
                <tbody>
                    @foreach($albums as $v)
                    <tr>
                        <td>
                            <input type="checkbox" value="" name="">
                        </td>
                        <td>
                            {{$v['id']}}
                        </td>
                        <td>
                            {{$v['title']}}
                        </td>
                        <td>
                            {{$v['introduce']}}
                        </td>
                        <td>
                            <img src="{{$v['image']}}" alt="" width="50" height="50">
                        </td>
                        <td>
                            {{$v->user->username}}
                        </td>
                        
                        <td class="td-manage">
                            <form method="get" action="/al_detail/{{$v['id']}}/edit" style="float:left">
                            {{csrf_field()}}
                            <button title="编辑"  class="ml-5" style="text-decoration:none;color:#000">
                                <i class="layui-icon">编辑</i>
                            </button>
                            &nbsp;&nbsp;
                            </form>

                            <form method="post" action="/al_detail/{{$v['id']}}" style="float:left">
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
        </div>
@endsection