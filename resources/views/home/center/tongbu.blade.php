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
   
  <h1 class="edit-title-h1">帐号设置</h1>
    <ul class="tab_nav">
      <li id="tab_nav_li_1"><a href="/home/center" class="tab_nav_li_background">同步分享设置</a></li>
      <li><a href="/home/jiben">修改基本信息</a></li>
      <li><a href="/home/mima">修改密码</a></li>
      <li><a href="/home/touxiang" >修改头像</a></li>
      <li id="tab_nav_li_5"><a href="/home/rongyu">荣誉勋章</a></li>
  </ul>
  <div class="share-main">
    <div class="share-content">
      <div>绑定后就可以使用以下网站帐号直接登录，并可以在发推时一键同步到各大社交网站，让好友们都可以看到</div>
      <input type="hidden" id="txt_third_reg_replace" name="replace" value="0"/>
    <ul class='ul-share'>
    <li>
      <img src='/ueditor/picture/qqweibo24_1.png'/>
      <h5>同步到腾讯微博</h5>
      <div class="bind_main">
            <a id="type_1" href="/Oauth/requestHandle/type/1" class='bind'>立即绑定</a>     </div>
    </li>
    <li>
      <img src='/ueditor/picture/qq24_1.png'/>
      <h5>同步到QQ空间</h5>
      <div class="bind_main">
            <a id="type_2" href="/Oauth/requestHandle/type/2" class='bind'>立即绑定</a>     </div>  
    </li> 
    <li>
      <img src='/ueditor/picture/sina24_1.png'/>
      <h5>同步到新浪微博</h5>
      <div class="bind_main">
      <span class="share">
      <input id="share_3" type="checkbox" checked="checked" value="15312" onclick="ajaxShare(this);"/>
            同步分享</span>
      <a id="type_3" href="/Personal/cancelBind/id/15312" class='unbind'>解除绑定</a>     
            </div>
    </li>
    <li>
      <img src='/ueditor/picture/renren24_1.png'/>
      <h5>同步到人人网</h5>
      <div class="bind_main">
            <a id="type_4" href="/Oauth/requestHandle/type/4" class='bind'>立即绑定</a>     </div>
    </li>   
    <li>
      <img src='/ueditor/picture/douban24_1.png'/>
      <h5>同步到豆辨网</h5>
      <div class="bind_main">
            <a id="type_5" href="/Oauth/requestHandle/type/5" class='bind'>立即绑定</a>     </div>
    </li>
   </ul>
    </div>
  </div> 
</div>


@endsection