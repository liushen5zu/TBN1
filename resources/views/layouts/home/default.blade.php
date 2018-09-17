<!DOCTYPE html>
<html>
 <head> 
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
  <title>@yield('title')</title> 
  <meta name="description" content="大众影评网定期发布各类观影活动,明星见面会,电影首映礼通告,邀您免费参与电影展映和新闻发布会,与喜爱的明星面对面交流." /> 
  <link rel="shortcut icon" href="/ueditor/Images/favicon.ico" /> 
  <!--[if lt IE 9]>
  <script type="text/javascript" src="/ueditor/js/html5_1.js"></script>
<![endif]--> 
  <link type="text/css" rel="stylesheet" href="/ueditor/css/common_1.css" /> 
  <link type="text/css" rel="stylesheet" href="/assets/tiezi/css/common_1.css" />
<link type="text/css" rel="stylesheet" href="/assets/tiezi/css/forum.css" />
  <style type="text/css">
  .nav a.hotNavItem{position:relative;color: #f60;}
  .nav a.hotNavItem.on{position:relative;color: #fff;}
  .nav a.hotNavItem:hover{color: #fff;}
  .nav a.hotNavItem span{position: absolute;top: 0;right: 16px;width:24px;height:16px;background: url(/ueditor/images/hot_1.png) no-repeat;}
/*  .nav a.hotNavItem span{position: absolute;top: -3px;right: 10px;font-size: 12px;background: orange;color: #fff;line-height: 14px;height: 14px;padding: 0 2px;border-radius: 4px;}
  .nav a.hotNavItem span:before{content:"";position: absolute;bottom: -5px;left: 5px;width:0;height:0;border-bottom: 5px solid transparent;border-left: 5px solid orange;}*/
  /*.nav a.hotNavItem span:after{content:"";position: absolute;bottom: -5px;left: 1px;width:0;height:0;border-bottom: 5px solid transparent;border-left: 5px solid #fff;}*/
</style> 
  <script type="text/javascript" src="/ueditor/js/jquery-1.7.2.min_1.js"></script> 
  <script type="text/javascript" src="/ueditor/js/jquery.cookie_1.js"></script> 
  <script type="text/javascript" src="/ueditor/js/common2_1.js"></script> 
  <script type="text/javascript" src="/ueditor/js/common_1.js"></script> 

  <script>
  </style>
<script type="text/javascript" src="/assets/tiezi/js/jquery-1.7.2.min_1.js"></script>
<script type="text/javascript" src="/assets/tiezi//assets/tiezi//assets/tiezi/js/jquery.cookie_1.js"></script>
<script type="text/javascript" src="/assets/tiezi//assets/tiezi/js/common2_1.js"></script>
<script type="text/javascript" src="/assets/tiezi/js/common_1.js"></script>
<script>
<link type="text/css" rel="stylesheet" href="/ueditor/css/common_2.css" />
<script type="text/javascript" src="/ueditor/js/jquery-1.7.2.min_1.js"></script>
<script type="text/javascript" src="/ueditor/js/jquery.cookie_1.js"></script>
<script type="text/javascript" src="/ueditor/js/common2_1.js"></script>
<script type="text/javascript" src="/ueditor/js/common_2.js"></script>
<script type="text/javascript" src="/ueditor/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/ueditor/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/ueditor/js/common2.js"></script>
<script type="text/javascript" src="/ueditor/js/common.js"></script>
<style type="text/css">
    .nav a.hotNavItem{position:relative;color: #f60;}
    .nav a.hotNavItem.on{position:relative;color: #fff;}
    .nav a.hotNavItem:hover{color: #fff;}
    .nav a.hotNavItem span{position: absolute;top: 0;right: 16px;width:24px;height:16px;background: url(images/hot.png) no-repeat;}
/*  .nav a.hotNavItem span{position: absolute;top: -3px;right: 10px;font-size: 12px;background: orange;color: #fff;line-height: 14px;height: 14px;padding: 0 2px;border-radius: 4px;}
    .nav a.hotNavItem span:before{content:"";position: absolute;bottom: -5px;left: 5px;width:0;height:0;border-bottom: 5px solid transparent;border-left: 5px solid orange;}*/
    /*.nav a.hotNavItem span:after{content:"";position: absolute;bottom: -5px;left: 1px;width:0;height:0;border-bottom: 5px solid transparent;border-left: 5px solid #fff;}*/
</style>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?4a4681a3b1efbd3cf94cde90ed8a8a95";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script> 
 </head> 
 <body> 
  <header class="site_nav"> 
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
      <li>{{session('name')}}&nbsp;&nbsp;&nbsp;&nbsp;|</li> 
      <li> <a href="/home/outlogin">退出</a></li> 
      <li> <a href="/home/center">个人中心</a></li>
     </ul> 
    </div> 
  @endif
  @if(!Session::get('id'))
    <div class="fR"> 
     <ul id="welcome" class="clearfix out"> 
      <li><a href="auth/weibo" title="微博登录"><i class="icon_weibo icon"></i>微博登录</a></li> 
      <li>|</li> 
      <li><a href="javascript:void(0);" onclick="location.href='/oauth/requestHandle/type/2'" title="QQ登录"><i class="icon_qq icon"></i>QQ登录</a></li> 
      <li>|</li> 
      <li><a href="/home/login" title="登录"><i class="icon_man icon"></i>登录</a></li> 
      <li>|</li> 
      <li><a href="http://www.51oscar.com/login/regist.html" title="免费注册">免费注册</a></li> 
     </ul> 
    </div> 
  @endif

   </section> 
   @show
  </header> 
  <section class="logoAndSreach"> 
   <div class="wp clearfix"> 
    <div class="logo fL"> 
     <a href="http://www.51oscar.com" title="大众影评网" target="_self"><img src="/ueditor/picture/logo.png" alt="大众影评网" /></a> 
    </div> 
    <div class="searchBox fR"> 
     <form name="form_sreach" action="/Search/index" method="get"> 
      <!--[if !IE]><!--> 
      <input class="txt_kw" name="word" type="text" value="" autocomplete="off" placeholder="搜索你感兴趣的" />
      <!--<![endif]--> 
      <!--[if gte IE 10]> <input class="txt_kw" name="txt_kw" type="text" value="" autocomplete="off" placeholder="搜索你感兴趣的" /> <![endif]--> 
      <!--[if lt IE 10]> <input class="txt_kw" name="txt_kw" type="text" autocomplete="off"  value="搜索你感兴趣的" /> <![endif]--> 
      <input class="sreach" name="btn_sreach" type="submit" value="" /> 
      <!-- <input type="hidden" id="txt_header_url" value="http://www.51oscar.com" > --> 
      <input type="hidden" name="__hash__" value="0ab92942e9ac1b95f2e3d4a870666ce7_f4ab931681945eeb6b5c63e8497861d6" />
     </form> 
     <input type="hidden" id="txt_header_url" value="http://www.51oscar.com" /> 
     <input type="hidden" value="" id="sessionid" /> 
     <span class="hotLink"> <a href="http://www.51oscar.com/movie/38040.html">横冲直撞好莱坞 </a> <a href="http://www.51oscar.com/album/1877.html">九部超级温馨又治愈的家庭类电影</a> <a href="http://www.51oscar.com/album/1895.html">十部高分冷门电影推荐</a> <a href="http://www.51oscar.com/album/1908.html">女生在成长路上必看的10部电影</a> <a href="http://www.51oscar.com/album/1921.html">九部电影帮你摆脱失落</a> </span> 
    </div> 
   </div> 
  </section> 
  <section class="nav"> 
   <nav class="wp clearfix"> 
    @include('layouts.home.list')
   </nav> 
  </section> 
  <script>
var URL = "http://www.51oscar.com/";

  //下拉菜单
  function dropMenu(obj){
    $(obj).each(function(){
      var theSpan = $(this);
      var theMenu = theSpan.find(".user_more");
      var tarHeight = theMenu.height();
      theMenu.css({height:0,opacity:0});
      theSpan.hover(
        function(){
          
          theMenu.stop().show().animate({height:175,opacity:1},600);
        },
        function(){       
          theMenu.stop().animate({height:0,opacity:0},600,function(){
            $(this).css({display:"none"});
          });
        }
      );
    });
  }
  
 //自动登用的下拉菜单
   function dropMenu2(obj){
    $(obj).each(function(){
        var theSpan = $(obj);
        var theMenu = theSpan.find(".user_more");
        var tarHeight = theMenu.height();
        //theMenu.css({height:0,opacity:0});
        theMenu.stop().show().animate({height:175,opacity:1},600);
        theSpan.live("mouseout",function(){
            theMenu.stop().animate({height:0,opacity:0},600,function(){
            $(this).css({display:"none"});
          });
        })
    })
  }
 function ajaxGetNotify(u){
          $.get('/forum/getMsgCount',
            {usg:u},
            function(data){
              $('#auto_msg').html(data);
            },
            'json'
        );
    }
  //导航条切换
  var curr_url=window.location.href;
  if(/.com\/news/.test(curr_url)){
    $('#news').addClass('on');
  }else if(/.com\/movie/.test(curr_url)){
    $('#movie').addClass('on');
  }else if(/.com\/review/.test(curr_url)){
    $('#review').addClass('on');
  }else if(/.com\/forum/.test(curr_url)){
    $('#forum').addClass('on');
  }else if(/.com\/album/.test(curr_url)){
    $('#album').addClass('on');
  }else if(/.com\/activity/.test(curr_url)){
    $('#activity').addClass('on');
  }else if(/.com\/topic/.test(curr_url)){
    $('#topic').addClass('on');
  }else if(/.com\/zhongchou/.test(curr_url)){
    $('#zhongchou').addClass('on');
  }else{
    $('#home').addClass('on');
  }
$(document).ready(function(){ 
  //dropMenu(".after_landing"); 
  dropMenu(".user"); 
  URL = $('#txt_header_url').val() +'/';
  Common.init(); 

  //forum
   var sessionid =$('#sessionid').val();
   if(sessionid){
  // setInterval("ajaxGetNotify(sessionid)", parseInt(120) * 1000);
  ajaxGetNotify(sessionid);
   }  
});
</script> 
  <link type="text/css" rel="stylesheet" href="/ueditor/css/event.css" /> 
  <!--主体部分 s--> 
  @section('content')
  
  @show
  <script type="text/javascript" src="/ueditor/js/jquery.superslide.2.1.1.js"></script> 
  <script type="text/javascript">


  $(function(){ 
    URL = $('#txt_header_url').val() +'/';
    Common.init(); 
  })

  //播放预告片
  $(".trailer").click(function(){
      showSwf.show($(this).attr("data-trailer")); 
  });

  //幻灯片
  jQuery(".picFocus").slide({titCell:".hd ul li", mainCell:".bd ul",effect:"leftLoop",autoPlay:true,delayTime:500,interTime:4000,vis:1});
  
  scrollFixed(".hotAlbum","#footer",40);
  
  bShare.init();

</script> 
  <!-- 隐藏信息  --> 
  <input type="hidden" id="txt_header_url" value="http://www.51oscar.com" /> 
  <input type="hidden" id="txt_public_home" value="/Public/Home/" module="Activity" ie_page="/movie/ie.html" baidu_page="/movie/baidu.html" qvod_page="/movie/qvod.html" gvod_page="/movie/gvod.html" loading_page="/movie/loading.html" /> 
  <input type="hidden" id="txt_edit_user" value="/personal/toUserEditShare.html" /> 
  <div class="hide" id="hide_album_msg" index="/album/toAlbumDatail.html/album_id/" edit="/album/toAlbumEditImg.html/album_id/" movie="/album/toAlbumEditMovie.html/album_id/"></div> 
  <div class="hide" id="hide_comment_type" movie="/movie/toMovieInfo.html/id/" album="/album/toAlbumDatail.html/album_id/" topic="/topic/topicView.html/id/"></div> 
  <div class="hide" id="hide_user_info" some="http://www.51oscar.com/someone/index/id/" session_id="" index="/personal/index.html" msg_url="http://www.51oscar.com/Personal/msgList" edit_url="http://www.51oscar.com/Personal/toUserEditShare"></div> 
  <div class="hide" id="footer_info" footerurl="/index/ajaxColumnList.html" columnurl="/login/toColumn.html"></div> 
  <div class="footer wp" id="footer"> 
   <div class="dlList clearfix"> 
    <dl> 
     <dt>
      <a href="javascript:viod(0);" title="栏目">栏目</a>
     </dt> 
     <dd>
      <a href="http://www.51oscar.com/news.html" title="影视资讯" target="_blank">影视资讯</a>
     </dd> 
     <dd>
      <a href="http://www.51oscar.com/review.html" title="新片影评" target="_blank">新片影评</a>
     </dd> 
     <dd>
      <a href="http://www.51oscar.com/forum.html" title="影视贴吧" target="_blank">影视贴吧</a>
     </dd> 
    </dl> 
    <dl> 
     <dt>
      <a href="javascript:viod(0);" title="产品服务">产品服务</a>
     </dt> 
     <dd>
      <a href="http://www.leg3s.com/about/index.html" title="公司简介" target="_blank">公司简介</a>
     </dd> 
     <dd>
      <a href="http://www.leg3s.com/product/index.html" title="影视服务" target="_blank">影视服务</a>
     </dd> 
     <dd>
      <a href="http://www.leg3s.com/example/index.html" title="案例展示" target="_blank">案例展示</a>
     </dd> 
    </dl> 
    <dl> 
     <dt>
      <a href="javascript:viod(0);" title="关于我们">关于我们</a>
     </dt> 
     <dd>
      <a href="http://www.51oscar.com/about.html" title="关于我们" target="_blank">关于我们</a>
     </dd> 
     <dd>
      <a href="http://www.51oscar.com/login/toColumn/id/32" title="家长监护">家长监护</a>
     </dd> 
     <dd>
      <a href="http://www.51oscar.com/login/toColumn/id/2" title="联系我们" target="_blank">联系我们</a>
     </dd> 
    </dl> 
    <dl> 
     <dt>
      <a href="javascript:viod(0);" title="网站条款">网站条款</a>
     </dt> 
     <dd>
      <a href="http://www.51oscar.com/login/toColumn/id/3" title="免责声明" target="_blank">免责声明</a>
     </dd> 
     <dd>
      <a href="http://www.51oscar.com/login/toColumn/id/33" title="会员条款" target="_blank">会员条款</a>
     </dd> 
     <dd>
      <a href="http://www.51oscar.com/sitemap.html" title="网站地图" target="_blank">网站地图</a>
     </dd> 
    </dl> 
    <dl class="last"> 
     <dt>
      <a href="javascript:viod(0);" title="关注我们">关注我们</a>
     </dt> 
     <dd>
      <a class="weibo icon" href="http://weibo.com/51oscar" title="新浪微博" target="_blank">&nbsp;</a>
     </dd> 
     <dd>
      <a class="weibo_qq icon" href="http://t.qq.com/leg_51oscar" title="腾讯微博" target="_blank">&nbsp;</a>
     </dd> 
    </dl> 
   </div> 
   <div class="Copyright">
    <p>Copyright &copy; 2012 <a href="http://www.51oscar.com" target="_blank" rel="nofollow">大众影评网</a>（51oscar.com）All rights reserved. 粤ICP备07500583号-2 </p>
   </div> 
   <script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fb333171377f6fc60e48165d7fa43110b' type='text/javascript'%3E%3C/script%3E"));
</script> 
  </div>  
 </body>
</html>