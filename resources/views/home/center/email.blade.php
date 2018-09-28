@extends('layouts.home.center.default')
@section('title')
个人中心
@endsection
@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="setting-content clearfix">
   <div class="crumbs_nav00">
     <div class="crumbs_nav01">您的位置</div>
     <div class="crumbs_nav03">个人中心</div> 
     <div class="crumbs_nav02"></div>
     <div class="crumbs_nav03">帐号设置</div>
     <div class="crumbs_nav04"></div>
   </div>
   
  <!--<h1 class="edit-title-h1">帐号设置</h1>-->
    <ul class="tab_nav">
      <li id="tab_nav_li_1"><a href="/home/center">同步分享设置</a></li>
      <li><a href="/home/jiben">修改基本信息</a></li>
      <li><a href="/home/mima" class="tab_nav_li_background">修改密码</a></li>
      <li><a href="/home/touxiang" >修改头像</a></li>
      <li id="tab_nav_li_5"><a href="/home/rongyu">荣誉勋章</a></li>
    </ul>
   <div class="div_page_password">
    <form action="/send/email" id="frm_change_password" method="get">
          <table border="1">
            <tr>
              <td class="input-text">邮箱</td>
              <td><input id="txt_old_password" type="email" class="choose-film-input" name="email"><span class="remind"></span>
              </td>
            </tr>
        </table>
    <p class="btn-p">
      <button name="btn_change_password" id="btn_change_password"  class="edit-btn" style="margin: 0px 0 30px 130px;">发送邮件</button>
    </p>
    {{csrf_field()}} 
 </form>
</div>
  
</div>

@endsection