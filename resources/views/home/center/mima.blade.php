@extends('layouts.home.center.default')
@section('title')
个人中心
@endsection
@section('content')
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
    <form action="/login/ajaxChangePassword.html" id="frm_change_password" method="post">
      <p class="editpwd">
        <span class="input-text">旧密码</span>
        <span class="choose-film-input-span regist-left-3-5">
      <input name="txt_old_password" id="txt_old_password" type="password" class="choose-film-input" maxlength="16" node-type="placeholder" placeholder="请输入旧密码">
      <span class="lbl_error" id="error_old_password"></span>
    </span>
    
      </p>
      <p class="note-text"></p>
      <p class="editpwd">
        <span class="input-text">新密码</span>
        <span class="choose-film-input-span regist-left-3-5">
      <input name="txt_password" id="txt_password" type="password" class="choose-film-input" maxlength="16" node-type="placeholder" placeholder="请输入新密码">
      <span class="lbl_error" id="error_password"></span>
    </span>
    
      </p>
      <p class="note-text"></p>
    <p class="editpwd">
        <span class="input-text">重复新密码</span>
        <span class="choose-film-input-span regist-left-3-5">
      <input name="txt_password2" id="txt_password2" type="password" class="choose-film-input" maxlength="16" node-type="placeholder" placeholder="请再次输入新密码">
      <span class="lbl_error" id="error_password2"></span>
    </span>
   </p>
     <input type="hidden" name="__hash__" value="6fe7ede176aa650fb80cc7c231c8268d_b4d30bfa225c9953e6374bc3bc64fd49"></form>
    </div>

    <p class="btn-p">
      <input name="btn_change_password" id="btn_change_password" type="button" class="edit-btn" value="修改密码">
    </p>
</div>


@endsection