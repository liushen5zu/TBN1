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
      <li><a href="/home/mima">修改密码</a></li>
      <li><a href="/home/touxiang" class="tab_nav_li_background">修改头像</a></li>
      <li id="tab_nav_li_5"><a href="/home/rongyu">荣誉勋章</a></li>
  </ul>
  
  
   <div class="add_cover">
	    <div style="position: relative; height: 31px; width: 105px; overflow: hidden; cursor: pointer; margin: 0px; padding: 0px;"><a href="#" class="aa_up" name="btn_upload" type="button" id="btn_upload">
		<img src="/ueditor/picture/btn_upload_1.jpg">
		</a><iframe id="iframe18591" name="iframe18591" style="display: none;"></iframe><form method="post" enctype="multipart/form-data" action="/personal/uploadImage.html" target="iframe18591" style="margin: 0px; padding: 0px;"><input name="upload_img" type="file" style="position: relative; display: block; margin-left: -175px; opacity: 0; margin-top: -41px;"></form></div>
		<p class="img_explain">仅支持JPG、GIF、PNG图片文件，且文件小于5M</p>
		<div class="con_left">
			<img src="" class="img_big" id="img_big">
		</div>
		<div class="con_right">
		    <p>个人头像预览</p>
			<p>请注意图片是否清晰</p> 
			<span id="preview_box" class="user_crop_preview"><img id="crop_preview" class="img_cover" src="{{Session('image')}}"></span>
			<p class="img_info">大尺寸头像，160 * 160像素</p>
		</div>
    </div>
    <p>&nbsp;</p><p>&nbsp;</p>
	<p class="btn-p">
      <input name="input" type="button" id="btn_save_crop" class="finish-btn" value="保存头像">
    </p>
</div>
@endsection