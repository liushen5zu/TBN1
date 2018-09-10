<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="revised" content="Ningxia Seasons, 2015/8/13/" />
<!-- 定义页面的最新版本 -->
<meta name="description" content="网站简介" />
<!-- 网站简介 -->
<meta name="keywords" content="搜索关键字，以半角英文逗号隔开" />
<!-- 搜索关键字 -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>某经融公司股权众筹站点 - 个人中心</title>

<link type="text/css" rel="stylesheet" href="/ueditor/css/common.css" />
<link href="/center/css/crowdfunding.center/my_info.css" rel="stylesheet">
<link href="/center/css/crowdfunding.center/make_head.css" rel="stylesheet">
<link href="/center/css/crowdfunding.center/my_info.css" rel="stylesheet">
<link href="/center/css/bootstrap.min.css" rel="stylesheet">
<link href="/center/css/crowdfunding.center/messages.css" rel="stylesheet">


<style type="text/css">
    .nav a.hotNavItem{position:relative;color: #f60;}
    .nav a.hotNavItem.on{position:relative;color: #fff;}
    .nav a.hotNavItem:hover{color: #fff;}
    .nav a.hotNavItem span{position: absolute;top: 0;right: 16px;width:24px;height:16px;background: url(images/hot.png) no-repeat;}
/*  .nav a.hotNavItem span{position: absolute;top: -3px;right: 10px;font-size: 12px;background: orange;color: #fff;line-height: 14px;height: 14px;padding: 0 2px;border-radius: 4px;}
    .nav a.hotNavItem span:before{content:"";position: absolute;bottom: -5px;left: 5px;width:0;height:0;border-bottom: 5px solid transparent;border-left: 5px solid orange;}*/
    /*.nav a.hotNavItem span:after{content:"";position: absolute;bottom: -5px;left: 1px;width:0;height:0;border-bottom: 5px solid transparent;border-left: 5px solid #fff;}*/
</style>
<script type="text/javascript" src="/ueditor/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/ueditor/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/ueditor/js/common2.js"></script>
<script type="text/javascript" src="/ueditor/js/common.js"></script>
<!-- CSS公共部分 开始 -->
<link href="/center/css/bootstrap.min.css" rel="stylesheet">
<!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<link href="/center/css/style.css" rel="stylesheet">
<!-- CSS公共部分 结束 -->

<link href="/center/css/crowdfunding.css" rel="stylesheet">

</head>
<body>
<!-- top + banner 开始 -->

 
  <header class="site_nav">
    @include('layouts.home.header')
</header>

<div class="container-fluid cfh_banner">
  <div class="container"> <img src="/ueditor/picture/logo.png">
    <ul class="list-inline">
      <li><a href="index.html" target="_self">首页</a></li>
      <li><a href="list_page.html" target="_self">贴吧</a></li>
      <li><a href="investor_page.html" target="_self">影评</a></li>
      <li><a href="" target="_self">电影</a></li>
      <li><a href="service_page.html" target="_self">影集</a></li>
      <li><a href="" target="_self">活动</a></li>
    </ul>
    <div class="cfh_banner_search">
      <div onClick="cfh_banner_search_select(0)" class="cfh_banner_search_select">
        <font id="cfh_banner_search_select_span">请选择</font>
          <ul id="cfh_banner_search_select_ul">
            <li onClick="cfh_banner_search_select1('项目')">项目</li>
            <li onClick="cfh_banner_search_select1('投资人')">投资人</li>
            <li onClick="cfh_banner_search_select1('平台公示')">平台公示</li>
            <li onClick="cfh_banner_search_select1('指南')">指南 </li>
          </ul>
          <input id="cfh_banner_search_select_hideinput" type="hidden" value="">
      </div>
      <input type="text">
      <span><a href="search.html" target="_self">搜索</a></span> </div>
  </div>
</div>
<!-- top + banner 结束 --> 
<!-- 核心 开始 --> 
<div class="container border1 nopadding margin10">

  <div id="vertical_navigation" style="background:#ff6600" class="col-lg-3 background831312 nopadding">
    <div class="dead_pic"><img src="{{$user->image}}"><br>
      <span class="username">{{$user->username}}</span></div>
    <div class="usertype">用户类型：

      @if($user->permissions==0)
        管理员
      @endif
      @if($user->permissions==1)
        会员用户
      @endif
      @if($user->permissions==2)
        普通用户
      @endif


    <br>
      会员等级：<img style="margin-right:0px;" src="/center/img/member_center/star.png"></img> <img style="margin-right:0px;" src="/center/img/member_center/xx2.png"></img> <img style="margin-right:0px;" src="/center/img/member_center/xx2.png"></img> <img style="margin-right:0px;" src="/center/img/member_center/xx2.png"></img> <img style="margin-right:0px;" src="/center/img/member_center/xx2.png"></img> </div>
    <div class="menu">
      <div class="menu_title" style="color:#FFFFCC"> 我的信息 </div>
      <div class="menu_list">
        <ul class="list-unstyled">
          <li id="listClick1" class="menu_list_on" onClick="listClick(1)"><img src="/center/img/member_center/left_icon_1.png" > 基本信息</li>
          <li id="listClick2" class="" onClick="listClick(2)"> <img src="/center/img/member_center/left_icon_2.png"> 修改头像</li>
          <li id="listClick3" class="" onClick="listClick(3)"> <img src="/center/img/member_center/left_icon_3.png"> 修改密码</li>
        </ul>
      </div>
    </div>
    <div class="menu">
      <div class="menu_title" style="color:#FFFFCC"> 我相关的项目 </div>
      <div class="menu_list">
        <ul class="list-unstyled">
          <li id="listClick6" class="" onClick="listClick(6)"><img src="/center/img/member_center/left_icon_6.png"> 项目管理</li>
          <li id="listClick7" class="" onClick="listClick(7)"> <img src="/center/img/member_center/left_icon_6.png"> 投后管理</li>
        </ul>
      </div>
    </div>
    <div class="menu">
      <div class="menu_title" style="color:#FFFFCC"> 我的资金管理 </div>
      <div class="menu_list">
        <ul class="list-unstyled">
          <li id="listClick8" class="" onClick="listClick(8)"><img src="/center/img/member_center/left_icon_8.png"> 我的账户</li>
          <li id="listClick9" class="" onClick="listClick(9)"> <img src="/center/img/member_center/left_icon_9.png"> 投资明细查询</li>
          <li id="listClick10" class="" onClick="listClick(10)"> <img src="/center/img/member_center/left_icon_10.png"> 申请退款</li>
        </ul>
      </div>
    </div>
    <div class="menu">
      <div class="menu_title" style="color:#FFFFCC"> 我的星级和积分 </div>
      <div class="menu_list">
        <ul class="list-unstyled">
          <li id="listClick11" class="" onClick="listClick(11)"><img src="/center/img/member_center/left_icon_9.png"> 星级和积分介绍</li>
          <li id="listClick12" class="" onClick="listClick(12)"> <img src="/center/img/member_center/left_icon_12.png"> 积分纪录</li>
          <li id="listClick13" class="" onClick="listClick(13)"> <img src="/center/img/member_center/left_icon_13.png"> 积分规则</li>
        </ul>
      </div>
    </div>
    <div class="menu">
      <div class="menu_title"> 我的消息 </div>
      <div class="menu_list">
        <ul class="list-unstyled">
          <li id="listClick14" class="" onClick="listClick(14)"><img src="/center/img/member_center/left_icon_14.png"> 发送新消息</li>
          <li id="listClick15" class="" onClick="listClick(15)"> <img src="/center/img/member_center/left_icon_15.png"> 收件箱</li>
          <li id="listClick16" class="" onClick="listClick(16)"> <img src="/center/img/member_center/left_icon_16.png"> 发件箱</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-lg-9">
<!-- 基本信息 e-->
  <div id="jiben">
      <div class="my_info_title_3">
        <ul>
          <li id="listClick_1" onClick="listClick(1)" style="border-bottom: 1px solid #C40521; color: #C40521;">基本资料</li>
        </ul>
      </div>
      <div class="my_info_content">
        <form action="/home/jiben" method="post" enctype="multipart/form-data">

        <table class="my_info_content_care_table">
          <tbody>
            <tr>
              <td width="90" align="right" class="color555">用户名：</td>
              <td class="color555">{{$user->username}}<span class="colorCA1E37 margin_left10 font_size12">不能修改</span></td>
            </tr>
            <tr>
              <td align="right" class="color555">手手机号码：</td>
              <td class="color555">{{$user->phone}}<span class="color959595 margin_left10 font_size12">友好提示：网站前台不会显示您手机号，用于运营人员替您办理投融资手续</span></td>
            </tr>
            <tr>
              <td align="right" class="color555">真实姓名：</td>
              <td class="color555"><input class="my_info_content_care_table_text" value="{{$user->username}}" name="" type="text">
                <span class="color959595 margin_left10 font_size12">友好提示：网站前台不会显示您手机号，用于运营人员替您办理投融资手续</span></td>
            </tr>
            <tr>
              <td align="right" class="color555">性别：</td>
              <td class="color555">
                <label>
                  <input type="radio" name="sex" id="" value="1" 
                  @if($user->sex==1)
                    checked
                    @endif
                  >
                  男士 </label>
                <label class="radio-inline">
                  <input type="radio" name="sex" id="" value="0"
                    @if($user->sex==0)
                    checked
                    @endif
                  >
                  女士 </label></td>
            </tr>
            <tr>
              <td align="right" class="color555">邮箱：</td>
              <td class="color555"><input class="my_info_content_care_table_text" value="{{$user->email}}" name="email" type="text">
                <span class="color959595 margin_left10 font_size12">友好提示：请填写常用邮箱，您忘记密码时可用邮箱找回，有新项目动态时会发邮件给您</span></td>
            </tr>
            <tr>
              <td align="right" class="color555">毕业学校：</td>
              <td class="color555"><input class="my_info_content_care_table_text" value="清华大学" name="" type="text">
                  <span class="color959595 margin_left10 font_size12">请您如实填写</span></td>
            </tr>
            <tr>
              <td align="right" class="color555">年龄：</td>
              <td class="color555"><input class="my_info_content_care_table_text" value="16" name="" type="text">
                  <span class="color959595 margin_left10 font_size12">请您如实填写</span></td>
            </tr>
            <tr>
              <td align="right" class="color555">验证码：</td>
              <td class="color555"><input class="my_info_content_care_table_text" name="" type="text">
                  <span class="color959595 margin_left10 font_size12">请输入验证码</span></td>
            </tr>
            <tr>
    {{csrf_field()}}
              <td align="center" class="color555" colspan="2"><button class="my_info_content_care_table_submit" >保 存</button></td>
            </tr>
          </tbody>
        </table>
        
      </div>
  </div>
<!-- 基本信息 e-->

<!-- 修改头像 e -->
<div id="touxiang">
  <div class="make_head_title">修改头像</div>
  <div class="make_head_content">
    <div class="make_head_content_pic"><input type="file" name="image"></div>
    
    <div class="make_head_content_sm_pic"><img width="100px" height="100px" src="{{$user->image}}"><br>头像100 x 100</div>
  </div>
  <div style="clear:both"></div>
  <tr>
        {{csrf_field()}}
        <td align="center" class="color555" colspan="2"><button class="my_info_content_care_table_submit" >保 存</button></td>
  </tr>
  </form>
</div>
<!-- 修改头像 e -->

<!-- 修改密码 e-->
<div id="mima">
<div class="my_info_title_3">
  <ul>
    <li id="listClick_4" onClick="listClick(4)" style="border-bottom: 1px solid #C40521; color: #C40521;">修改密码</li>
  </ul>
</div>
<div class="my_info_content">
  <div class="my_info_content_care">友好提示：您的个人信息只做为投融资和有限合伙企业设立时使用，感谢您对某经融公司众筹平台的信任和支持！</div>
  <table class="my_info_content_care_table">
    <tbody>
      <tr>
        <td width="300" align="right" class="color555">旧密码：</td>
        <td class="color555"><input class="my_info_content_care_table_text" name="" type="text">
          <span class="colorCA1E37 margin_left10 font_size12">请输入旧密码</span></td>
      </tr>
      <tr>
        <td align="right" class="color555">新密码：</td>
        <td class="color555"><input class="my_info_content_care_table_text" name="" type="text">
          <span class="colorCA1E37 margin_left10 font_size12">请输入新密码</span></td>
      </tr>
      <tr>
        <td align="right" class="color555">确认新密码：</td>
        <td class="color555"><input class="my_info_content_care_table_text" name="" type="text">
          <span class="colorCA1E37 margin_left10 font_size12">请再次输入</span></td>
      </tr>
      <tr>
        <td align="right" class="color555">验证码：</td>
        <td class="color555"><input class="my_info_content_care_table_text" name="" type="text">
            <span class="color959595 margin_left10 font_size12">请输入验证码</span></td>
      </tr>
      <tr>
        <td align="center" class="color555" colspan="2"><input class="my_info_content_care_table_submit" name="" type="submit" value="申请认证"></td>
      </tr>
    </tbody>
  </table>
</div>
</div>
<!-- 修改密码 e-->


<!-- 发送信息 e -->

<!-- 开始 -->
<div id="xiaoxi">
          <form action="/home/center" method="get">
                <select name='send_id'>
                @foreach($users as $v)
                  <option value="{{$v->id}}">{{$v->username}}</option>
                @endforeach
        </select>
        <button>查看</button> 
        </form>
  <form action="/home/xiaoxi" method="get">
  <div class="my_info_title">发送新消息</div>
  <div class="messages">
  
  <div style="width:700px;height:300px;border:1px solid #000;margin:0 auto">
        <table  width="698px" height="50px">
          @foreach($message as $v)
          <tr>
            @if($v->accept_id == Session('id'))
            @foreach($users as $val)
              @if($val['id']==$v['send_id'])
            <td>{{$val->username}}:&nbsp;&nbsp;&nbsp;{{$v->created_at}}
            <tr>
              <td>{{$v->content}}</td>
            </tr>
            </td>
            @endif
            @endforeach

          <td></td>
            @endif
            @if($v->accept_id != Session('id'))
            <td></td>
            <td>{{$v->created_at}}&nbsp;&nbsp;&nbsp;{{$v->content}}:{{Session('username')}}</td>
            @endif

          </tr>
          @endforeach
         
        </table>
      
      </div>
    <table class="messages_table" >
      
      <tbody><tr>
        <td align="right" width="150">收信人：</td>
        <td width="400">
          <select name="accept_id">
          @foreach($users as $v)
            <option value="{{$v->id}}">{{$v->username}}</option>
          @endforeach
          </select>

        </td>
        <td>&nbsp;请输入收件人姓名</td>

      </tr>
      <tr>
        <td align="right" width="150" style="vertical-align:top !important;">内容：</td>
        <td width="400"><textarea class="form-control" name="content" style="resize:vertical" rows="3"></textarea></td>
        <td style="vertical-align:top !important;">&nbsp;</td>
      </tr>
      <tr>
        <td align="center" colspan="3"><button  class="messages_table_submit">立刻发送</button></td>
      </tr>
    </tbody></table>
  </div>
  </form>

</div>
<!-- 结束 -->


<!-- 发送信息 e -->

<script>
  $('#touxiang').hide();
  $('#mima').hide();
  $('#xiaoxi').hide();

  $('.list-unstyled > #listClick1').click(function(){
    $('#touxiang').stop().hide();
    $('#jiben').show();
    $('#mima').stop().hide();
  });

  $('.list-unstyled > #listClick2').click(function(){
    $('#touxiang').show();
    $('#jiben').stop().hide();
    $('#mima').stop().hide();
  });
 
  $('.list-unstyled > #listClick3').click(function(){
    $('#mima').show();
    $('#jiben').stop().hide();
    $('#touxiang').stop().hide();
  });

  $('.list-unstyled > #listClick14').click(function(){
    $('#xiaoxi').show();
    $('#mima').stop().hide();
    $('#jiben').stop().hide();
    $('#touxiang').stop().hide();
  });
</script>



  </div>
</div>
<!-- 核心 结束 --> 


<!-- 版权 开始 -->
<div class="container-fluid cfh_bottom">
  <div class="container">
    <div class="cfh_bottom_qsss">
      <dl>
        <dt>轻松上手</dt>
        <dd><a href="" target="_blank">如何投资</a></dd>
        <dd><a href="" target="_blank">如何融资</a></dd>
        <dd><a href="" target="_blank">平台协议下载</a></dd>
        <dd><a href="" target="_blank">关于我们</a></dd>
      </dl>
    </div>
    <div class="cfh_bottom_aboutours">
      <dl>
        <dt>关于我们</dt>
        <dd><a href="" target="_blank">股东背景</a></dd>
        <dd><a href="" target="_blank">某某某财富团队</a></dd>
        <dd><a href="" target="_blank">法律服务</a></dd>
        <dd><a href="" target="_blank">招贤纳士</a></dd>
      </dl>
    </div>
    <div class="cfh_bottom_callme">
      <dl>
        <dt class="cfh_bottom_call_me"><span class="glyphicon glyphicon-earphone"></span>&nbsp;***-***-****</a></dt>
        <dd>投资人服务邮箱：<a href="mailto:38839364@qq.com" target="_blank">38839364@qq.com</a></dd>
        <dd>创业者服务邮箱：<a href="mailto:38839364@qq.com" target="_blank">38839364@qq.com</a></dd>
        <dd>公司地址：宁夏银川市兴庆区某某街道9527号</dd>
      </dl>
    </div>
    <div class="cfh_bottom_QRcode"> <img src="/center/img/index/bottom_QRcode.png"> <div class="phone">
    <span class="cfh_bottom_Iphone"><img src="/center/img/index/cfh_bottom_IphoneICO.png"><font>APP Store</font></span><img class="cfh_bottom_IphoneICO_last" src="/center/img/index/cfh_bottom_AndroidICO_1.png"><br>
    <span class="cfh_bottom_Iphone"><img src="/center/img/index/cfh_bottom_AndroidICO.png"><font>Android</font></span><img class="cfh_bottom_AndroidICO_last" src="/center/img/index/cfh_bottom_IphoneICO_2.png"></div></div>
  </div>
  <div class="box50"></div>
</div>
<div class="container-fluid background_color545454">
  <div class="container text-center"> © 2015 某某某 All rights reserved | 宁夏某某某金融科技服务有限公司 | 宁ICP备14000922号-2 </div>
</div>
<img id="back_top_jt" class="back_top" onMouseMove="float_call_me(7)" onMouseOut="float_call_me(8)" src="/center/img/index/back_top_jt.png">
<span class="back_top_jt_span">返回顶部</span>
<img id="back_top_wx" class="back_top2" onMouseMove="float_call_me(5)" onMouseOut="float_call_me(6)" src="/center/img/index/back_top_wx.png">
<span class="back_top_wx_span"><img src="/center/img/index/bottom_QRcode.png"></span>
<a href="tencent://message/?uin=666666&Site=&Menu=yes"><img id="back_top_qq" class="back_top3" onMouseMove="float_call_me(3)" onMouseOut="float_call_me(4)" src="/center/img/index/back_top_qq.png"></a>
<span class="back_top_qq_span"><font class="glyphicon glyphicon-hand-right">&nbsp;QQ咨询热线</font></span>
<img id="back_top_call" class="back_top4" onMouseMove="float_call_me(1)" onMouseOut="float_call_me(2)" src="/center/img/index/back_top_call.png">
<span class="back_top_call_span"><font class="glyphicon glyphicon-phone-alt">&nbsp;***-***-****</font></span>
<!-- 版权 结束 --> 

<!-- 结束 --> 
<!-- JS公共部分 开始 --> 
<script src="/center/js/jquery-2.1.1.min.js"></script> 
<script src="/center/js/bootstrap.min.js"></script> 
<script src="/center/js/basics.js"></script> 
<!-- JS公共部分 结束 --> 
<script src="/center/js/crowdfunding.js"></script>
</body>
</html>