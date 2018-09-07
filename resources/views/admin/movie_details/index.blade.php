@extends('layouts.admin.default')
@section('title')
电影列表
@endsection
@section('content') 
<div class="content">
<h1 style="font-size:26px">电影列表</h1>
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
                {{csrf_field()}}
            </form>
            <xblock><button class="layui-btn layui-btn-danger" onclick="delAll()"><i class="layui-icon"></i>批量删除</button>

            <a  class="layui-btn" href="/movie_details/create" ><i class="layui-icon"></i>添加</a>

            <span class="x-right" style="line-height:40px">共有数据：88 条</span></xblock>
            <table class="layui-table">
                <thead>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            电影名
                        </th>
                        <th>
                            电影分类
                        </th>
                        <th>
                            导演名
                        </th>

                        <th>
                            影片图片
                        </th>

                        <th>
                            地区
                        </th>
                        <th>
                            片长
                        </th>
                        <th>
                            推荐
                        </th>
                        <th>
                            剧情简介
                        </th>
                        <th>
                            评论数
                        </th>
                        <th>
                            操作
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($movie_details as $v)
                    <tr>
                        <td>{{$v['id']}}</td>
                        <td>{{$v['name']}}</td>
                        <td>{{$v->movie_cate->name}}</td>
                        <td>

                        {{!empty($v->director_name->name) ? $v->director_name->name : '' }}
  

                        </td>

                        <td><img width="40px" src="{{$v['image']}}"></td>
                        <td>{{$v['countries']}}</td>
                        <td>{{$v['runningtime']}}</td>
                        <td>{{$v['recom']}}</td>
                        <td>{{$v['intro']}}</td>
                        <td>{{$v['num']}}</td>
                        <td class="td-manage">
                           <form method="get" action="/movie_details/{{$v->id}}/edit" style="float:left">
                           {{csrf_field()}}
                            {{method_field('put')}}
                            <button title="编辑"  class="ml-5" style="text-decoration:none;color:#000">
                                <i class="layui-icon">编辑</i>
                            </button>
                            &nbsp;&nbsp;
                            </form>
                            <form method="post" action="/movie_details/{{$v['id']}}" style="float:left">
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                                <button title="删除" style="text-decoration:none">
                                     <i class="layui-icon" style="color:#000">删除</i>
                                </button>
                            </form> 
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <style>
            .pagination{
                margin-left:700px;
            }
            .pagination li{
                width:50px;
                height:50px;
                background:#000;
                float:left;
                margin-left:5px;
                font-size:20px;
                color:#fff;
                text-align:center;
                line-height:50px;
                opacity:0.2;
            }
</style>
            <hr>
            {{$movie_details->appends(request()->all())->links()}}
          </div>
		<script>
		</script>
@endsection