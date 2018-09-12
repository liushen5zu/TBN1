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
      <li><a href="/home/touxiang">修改头像</a></li>
      <li id="tab_nav_li_5"><a href="/home/rongyu" class="tab_nav_li_background">荣誉勋章</a></li>
  </ul>
  <ul class="medal_info_ul">
       <li class="medal_info_li_1" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">
      <span class="medal_info_span_1" style="color: rgb(0, 0, 0); border-color: rgb(204, 204, 204);">
            <img class="medal_info_img" src="/ueditor/picture/50d51a3af098b_1.png">
      </span>
      <div class="clear" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);"></div>
      <span class="medal_info_span_2" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">影集达人</span>
      <span class="if_state" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">状态:
                        未点亮
                                                </span>
     </li>
                 <li class="medal_info_li_2" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">
      <span class="medal_info_span_1" style="color: rgb(0, 0, 0); border-color: rgb(204, 204, 204);">
            <img class="medal_info_img" src="/ueditor/picture/50d51a0b1fed5_1.png">
      </span>
      <div class="clear" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);"></div>
      <span class="medal_info_span_2" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">影坛劳模</span>
      <span class="if_state" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">状态:
                        未点亮
                                                </span>
     </li>
     <li class="medal_info_li_3" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">
      <span class="medal_info_span_1" style="color: rgb(0, 0, 0); border-color: rgb(204, 204, 204);">
            <img class="medal_info_img" src="/ueditor/picture/50d51a2bb6827_1.png">
      </span>
      <div class="clear" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);"></div>
      <span class="medal_info_span_2" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">影评达人</span>
      <span class="if_state" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">状态:
                        未点亮
                                                </span>
     </li>
     <li class="medal_info_li_4" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">
      <span class="medal_info_span_1" style="color: rgb(0, 0, 0); border-color: rgb(204, 204, 204);">
            <img class="medal_info_img" src="/ueditor/picture/50d51a16e653e_1.png">
      </span>
      <div class="clear" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);"></div>
      <span class="medal_info_span_2" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">人气达人</span>
      <span class="if_state" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">状态:
                        未点亮
                                                </span>
     </li>
     
     <li class="medal_info_li_5" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">
      <span class="medal_info_span_1" style="color: rgb(0, 0, 0); border-color: rgb(204, 204, 204);">
            <img class="medal_info_img" src="/ueditor/picture/50d51a479a72d_1.png">
      </span>
      <div class="clear" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);"></div>
      <span class="medal_info_span_2" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">分享达人</span>
      <span class="if_state" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">状态:
                        未点亮
                                                </span>
     </li>
                     
                 <li class="medal_info_li_6" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">
      <span class="medal_info_span_1" style="color: rgb(0, 0, 0); border-color: rgb(204, 204, 204);">
            <img class="medal_info_img" src="/ueditor/picture/50d51607bfced_1.png">
      </span>
      <div class="clear" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);"></div>
      <span class="medal_info_span_2" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">资深影评人</span>
      <span class="if_state" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">状态:
                        未点亮
                                                </span>
     </li>
                 <li class="medal_info_li_7" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">
      <span class="medal_info_span_1" style="color: rgb(0, 0, 0); border-color: rgb(204, 204, 204);">
            <img class="medal_info_img" src="/ueditor/picture/50d516a2acef7_1.png">
      </span>
      <div class="clear" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);"></div>
      <span class="medal_info_span_2" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">影坛新星</span>
      <span class="if_state" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">状态:
                        未点亮
                                                </span>
     </li>
                  </ul>
  



</div>

@endsection