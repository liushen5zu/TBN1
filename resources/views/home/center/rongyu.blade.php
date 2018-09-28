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

     
      @if($levels!=null)
       <li class="medal_info_li_1" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">
      <span class="medal_info_span_1" style="color: rgb(0, 0, 0); border-color: rgb(204, 204, 204);">
            <img class="medal_info_img" src="
            
              @if($levels->experience>=50)
              /ueditor/picture/1.png
              @endif
              @if($levels->experience<50)
              /ueditor/picture/1-1.png
              @endif
            
            ">
      </span>
      <div class="clear" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);"></div>
      <span class="medal_info_span_2" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">影集达人</span>
      <span class="if_state" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">状态:
           
            @if($levels->experience>=50)
            已点亮
            @endif
            @if($levels->experience<50)
            未点亮
            @endif
                                           </span>
     </li>

      <li class="medal_info_li_2" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">
      <span class="medal_info_span_1" style="color: rgb(0, 0, 0); border-color: rgb(204, 204, 204);">
            <img class="medal_info_img" src="
            @if($levels->experience>=100)
            /ueditor/picture/2.png
            @endif
            @if($levels->experience<100)
            /ueditor/picture/2-1.png
            @endif
            

            ">
      </span>
      <div class="clear" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);"></div>
      <span class="medal_info_span_2" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">影坛劳模</span>
      <span class="if_state" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">状态:
            @if($levels->experience>=100)
            已点亮
            @endif
            @if($levels->experience<100)
            未点亮
            @endif
                                                </span>
     </li>

     <li class="medal_info_li_3" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">
      <span class="medal_info_span_1" style="color: rgb(0, 0, 0); border-color: rgb(204, 204, 204);">
            <img class="medal_info_img" src="
            @if($levels->experience>=200)
            /ueditor/picture/3.png
            @endif
            @if($levels->experience<200)
            /ueditor/picture/3-1.png
            @endif
            

            ">
      </span>
      <div class="clear" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);"></div>
      <span class="medal_info_span_2" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">影评达人</span>
      <span class="if_state" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">状态:
            @if($levels->experience>=200)
            已点亮
            @endif
            @if($levels->experience<200)
            未点亮
            @endif
                                                </span>
     </li>

     <li class="medal_info_li_4" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">
      <span class="medal_info_span_1" style="color: rgb(0, 0, 0); border-color: rgb(204, 204, 204);">
            <img class="medal_info_img" src="
            @if($levels->experience>=400)
            /ueditor/picture/4.png
            @endif
            @if($levels->experience<400)
            /ueditor/picture/4-1.png
            @endif
            

            ">
      </span>
      <div class="clear" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);"></div>
      <span class="medal_info_span_2" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">人气达人</span>
      <span class="if_state" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">状态:
            @if($levels->experience>=400)
            已点亮
            @endif
            @if($levels->experience<400)
            未点亮
            @endif
                                                </span>
     </li>
     
     <li class="medal_info_li_5" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">
      <span class="medal_info_span_1" style="color: rgb(0, 0, 0); border-color: rgb(204, 204, 204);">
            <img class="medal_info_img" src="
            @if($levels->experience>=800)
            /ueditor/picture/5.png
            @endif
            @if($levels->experience<800)
            /ueditor/picture/5-1.png
            @endif
            
            ">
      </span>
      <div class="clear" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);"></div>
      <span class="medal_info_span_2" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">分享达人</span>
      <span class="if_state" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">状态:
            @if($levels->experience>=800)
            已点亮
            @endif
            @if($levels->experience<800)
            未点亮
            @endif
                                                </span>
     </li>
                     
     <li class="medal_info_li_6" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">
      <span class="medal_info_span_1" style="color: rgb(0, 0, 0); border-color: rgb(204, 204, 204);">
            <img class="medal_info_img" src="
            @if($levels->experience>=1600)
            /ueditor/picture/6.png
            @endif
            @if($levels->experience<1600)
            /ueditor/picture/6-1.png
            @endif
           

            ">
      </span>
      <div class="clear" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);"></div>
      <span class="medal_info_span_2" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">资深影评人</span>
      <span class="if_state" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">状态:
            @if($levels->experience>=1600)
            已点亮
            @endif
            @if($levels->experience<1600)
            未点亮
            @endif
                                                </span>
     </li>
     @endif
    @if($levels==null)
      
     
       <li class="medal_info_li_1" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">
      <span class="medal_info_span_1" style="color: rgb(0, 0, 0); border-color: rgb(204, 204, 204);">
            <img class="medal_info_img" src="
            
              /ueditor/picture/1.png
              
            ">
      </span>
      <div class="clear" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);"></div>
      <span class="medal_info_span_2" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">影集达人</span>
      <span class="if_state" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">状态:
           
            
            已点亮
           
            
                                           </span>
     </li>

      <li class="medal_info_li_2" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">
      <span class="medal_info_span_1" style="color: rgb(0, 0, 0); border-color: rgb(204, 204, 204);">
            <img class="medal_info_img" src="
            
            /ueditor/picture/2-1.png
           
            

            ">
      </span>
      <div class="clear" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);"></div>
      <span class="medal_info_span_2" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">影坛劳模</span>
      <span class="if_state" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">状态:
            
            未点亮
            
                                                </span>
     </li>

     <li class="medal_info_li_3" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">
      <span class="medal_info_span_1" style="color: rgb(0, 0, 0); border-color: rgb(204, 204, 204);">
            <img class="medal_info_img" src="
            
            /ueditor/picture/3-1.png
          
            

            ">
      </span>
      <div class="clear" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);"></div>
      <span class="medal_info_span_2" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">影评达人</span>
      <span class="if_state" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">状态:
            
            未点亮
            
                                                </span>
     </li>

     <li class="medal_info_li_4" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">
      <span class="medal_info_span_1" style="color: rgb(0, 0, 0); border-color: rgb(204, 204, 204);">
            <img class="medal_info_img" src="
            
            /ueditor/picture/4-1.png
            
            

            ">
      </span>
      <div class="clear" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);"></div>
      <span class="medal_info_span_2" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">人气达人</span>
      <span class="if_state" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">状态:
           
            未点亮
            
                                                </span>
     </li>
     
     <li class="medal_info_li_5" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">
      <span class="medal_info_span_1" style="color: rgb(0, 0, 0); border-color: rgb(204, 204, 204);">
            <img class="medal_info_img" src="
            
            /ueditor/picture/5-1.png
            
            
            ">
      </span>
      <div class="clear" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);"></div>
      <span class="medal_info_span_2" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">分享达人</span>
      <span class="if_state" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">状态:
            
            未点亮
            
                                                </span>
     </li>
                     
     <li class="medal_info_li_6" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">
      <span class="medal_info_span_1" style="color: rgb(0, 0, 0); border-color: rgb(204, 204, 204);">
            <img class="medal_info_img" src="
           
           
            
            /ueditor/picture/6-1.png
           
           

            ">
      </span>
      <div class="clear" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);"></div>
      <span class="medal_info_span_2" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">资深影评人</span>
      <span class="if_state" style="color: rgb(0, 0, 0); border-color: rgb(0, 0, 0);">状态:
            
            未点亮
            
                                                </span>
     </li>
    @endif
  </ul>
</div>

@endsection