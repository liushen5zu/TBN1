
  @section('header')
   <section class="wp clearfix"> 
    <div class="fL"> 
     <span class="weixin"><i class="icon_QR icon"></i>微信扫一扫，精彩电影资讯随身看<img class="show" src="/ueditor/picture/wx_1.jpg" alt="大众影评网微信公众号" /></span> 
    </div> 

    
  @if(Session::get('id'))
    <div class="fR"> 
     <ul id="welcome" class="clearfix out"> 
      
      
      <li>已登录</li> 
      <li><i class="icon_man icon"></i>用户:</li> 
      <li>{{session('username')}}&nbsp;&nbsp;&nbsp;&nbsp;|</li> 
      <li> <a href="/home/outlogin">退出</a></li> 
      <li> <a href="/home/center">个人中心</a></li> 
     </ul> 
    </div> 
  @endif
  @if(!Session::get('id'))
    <div class="fR"> 
     <ul id="welcome" class="clearfix out"> 
      <li><a href="/auth/weibo" title="微博登录"><i class="icon_weibo icon"></i>微博登录</a></li> 
      <li>|</li> 
      <li><a href="javascript:void(0);" onclick="location.href='/oauth/requestHandle/type/2'" title="QQ登录"><i class="icon_qq icon"></i>QQ登录</a></li> 
      <li>|</li> 
      <li><a href="/home/login" title="登录"><i class="icon_man icon"></i>登录</a></li> 
      <li>|</li> 
      <li><a href="/home/register" title="免费注册">免费注册 </a></li> 
     </ul> 
    </div> 
  @endif

   </section> 
   @show