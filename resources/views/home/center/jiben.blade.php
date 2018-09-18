@extends('layouts.home.center.default')
@section('title')
个人中心
@endsection
@section('content')
<!-- 城市三级联动 stant -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://www.jq22.com/jquery/bootstrap-3.3.4.css" rel="stylesheet">
    <script src="http://www.jq22.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://www.jq22.com/jquery/bootstrap-3.3.4.js"></script>
    <script src="/ueditor/dizhi/js/distpicker.data.js"></script>
    <script src="ueditor/dizhi/js/distpicker.js"></script>
    <script src="/ueditor/dizhi/js/main.js"></script>
    <!-- 城市三级联动 end -->
<div class="setting-content clearfix">
   <div class="crumbs_nav00">
     <div class="crumbs_nav01">您的位置</div>
     <div class="crumbs_nav03">个人中心</div> 
     <div class="crumbs_nav02"></div>
     <div class="crumbs_nav03">帐号设置</div>
     <div class="crumbs_nav04"></div>
   </div>
</div>
  <!--<h1 class="edit-title-h1">帐号设置</h1>-->
    <ul class="tab_nav" style="margin-left:260px">
      <li id="tab_nav_li_1"><a href="/home/center">同步分享设置</a></li>
      <li><a href="/home/jiben" class="tab_nav_li_background">修改基本信息</a></li>
      <li><a href="/home/mima">修改密码</a></li>
      <li><a href="/home/touxiang" >修改头像</a></li>
      <li id="tab_nav_li_5"><a href="/home/rongyu">荣誉勋章</a></li>
  </ul>
  <div class="edit-film-main clearfix">
    <div class="choose-film-cover">
       <ul class="ul-user-edit">
     <form action="/home/jiben1" method="get">
    <li>
      <div class="div-lbl">昵称</div>
      <div class="div-input">
        <div class="div-relative">
          <input style="padding-left:5px; width:200px" type="text" class="txt-user-name" id="txt_user_name" name="username"              value="{{$jibens['username']}}">
        </div>
      </div> 
      <div class="clear"></div>
    </li>
    <li style="z-index:3; position:relative">
      <div class="div-lbl">性别</div>
      <div class="div-input">
        <div class="div-relative">
          @if($jibens['sex']==0)
            <input type="radio" name="sex" value="0" checked>男
            <input type="radio" name="sex" value="1">女
          @else({{$jibens['sex']==1}})
            <input type="radio" name="sex" value="0" >男
            <input type="radio" name="sex" value="1"checked>女
          @endif
        </div>
      </div>
      <div class="clear"></div>
    </li>
    <li>
      <div class="div-lbl">生日</div>
      <div class="div-input">
         <div class="div-relative">
             <input style="padding-left:5px;width:200px;" type="text" class="txt-user-name" id="txt_address" name="birthday" value="{{$jibens['birthday']}}" maxlength="100"> 
        </div>
      </div>
          <div>
        </div>
      <div class="clear"></div>
    </li>
    <li>
      <div class="div-lbl">手机</div>
      <div class="div-input">
        <div class="div-relative">
                     <input style="padding-left:5px;width:200px" type="text" class="txt-user-name" id="txt_mobile" name="phone" value="{{$jibens['phone']}}" maxlength="11"> 
        </div>
      </div> 
      <div class="clear"></div>
    </li>
        <li>
      <div class="div-lbl">旧地址</div>
      <div class="div-input">
         <div class="div-relative">
             <input style="padding-left:5px;width:240px;" type="text" class="txt-user-name" id="txt_address"  value="{{$jibens['location']}}" maxlength="100"> 
        </div>
      </div>
          <div>
        </div>
      <div class="clear"></div>
    </li>
    <li style="z-index:2; position:relative">
      <div class="div-lbl">新地址</div>
       <div class="div-input">
              <select id="s_province" name="s_province"  style=" border: 1px solid #dfdfdf;height: 30px;line-height: 30px;background: #F6f6f6;text-align: center;font-weight: bold;color: #868686"></select>
              <select id="s_city" name="s_city"  style=" border: 1px solid #dfdfdf;height: 30px;line-height: 30px;background: #F6f6f6;text-align: center;font-weight: bold;color: #868686" ></select>
              <select id="s_county" name="s_county" style=" border: 1px solid #dfdfdf;height: 30px;line-height: 30px;background: #F6f6f6;text-align: center;font-weight: bold;color: #868686"></select>
              <script class="resources library" src="http://sandbox.runjs.cn/uploads/rs/267/g3ugugjp/area.js" type="text/javascript"></script>
              <script type="text/javascript">_init_area();</script>
              <div id="show"></div>
      </div>
      <div class="clear"></div>
    </li>
    <li>
      <div class="div-lbl">收货地址</div>
      <div class="div-input">
         <div class="div-relative">
             <input style="padding-left:5px;width:200px;" type="text" class="txt-user-name" id="txt_address" name="locations" value="{{$jibens['locations']}}" maxlength="100"> 
        </div>
      </div>
          <div>
        </div>
      <div class="clear"></div>
    </li>
    <li>
      <div class="div-lbl">邮编</div>
      <div class="div-input">
        <div class="div-relative">
                     <input style="padding-left:5px;width:200px" type="text" class="txt-user-name" id="txt_postcode" name="pc" value="{{$jibens['pc']}}" maxlength="6"> 
        </div>
      </div> 
      <div class="clear"></div>
    </li>
     <p>
      <button name="input"  class="finish-btn" value="完成" id="btn_userinfo_update">完成</button>
    </p>
      {{csrf_field()}}

  </form></ul>
 
  <input type="hidden" name="__hash__" value="6e99b55fe96616606c0f486f4fde5343_46f136198fc2f94fb9345d1bab974b24">
    </div>
  </div> 
</div>

@endsection 