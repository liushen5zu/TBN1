@extends('layouts.admin.default')
@section('title')
帖子列表
@endsection
@section('content')

<div class="content">
        <h1 style="font-size:26px">友链列表</h1>
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
                            用户id
                        </th>
                        <th>
                            标题
                        </th>    
                        <th>
                            内容
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
                    @foreach ($tiezis as $v)
                     <tr>
                        <th>
                            <input type="checkbox" name="" value="">
                        </th>
                        <th>
                            {{$v['id']}}
                        </th>
                        <th>
                            {{!empty($v->user->username) ? $v->user->username : '' }}
                        </th>
                        <th style="width: 500px;">
                            {{trim($v['title'])}}
                        </th>
                        <th>
                         {!!mb_substr($v['content'],205,20)!!} ...
                        </th>                        
                         <th>              
                            @if ($v['status']==0) 
                             普通
                              @elseif ($v['status']==1)
                                置顶
                              @elseif ($v['status']==2)
                               精选
                                @endif
                            </th>
                             <td class="td-manage">  
                            <form method="post" action="/tiezi/{{$v->id}}" style="float:left">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button title="删除" href="javascript:;" onclick="member_del(this,'1')" style="text-decoration:none">
                                <i class="layui-icon" style="color:#000">删除</i>
                            </button>
                            </form>

                                 @if ($v['status']==1)
                                <form action="/tiezi/{{$v['id']}}/up"> 
                                     <button class="link-del"   style="text-decoration:none"><i class="layui-icon" style="color:#000">精华</i></button>
                                </form>
                                 @elseif ($v['status']==2)
                                <form action="/tiezi/{{$v['id']}}/down"> 
                                     <button class="link-del"   style="text-decoration:none"><i class="layui-icon" style="color:#000">置顶</i></button>
                                    {{csrf_field()}}
                                    {{method_field('GET')}}
                                </form>
                                 @else
                                 <form action="/tiezi/{{$v['id']}}/pt"> 
                                     <button class="link-del"   style="text-decoration:none"><i class="layui-icon" style="color:#000">普通</i></button>   
                                </form>
                            @endif  
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- 右侧内容框架，更改从这里结束 -->
          </div>
        
@endsection