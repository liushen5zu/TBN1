
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>同步分享设置</title>
<meta name="description" content="同步分享设置">
<link rel="stylesheet" href="/ueditor/css/personal_common_3.css" />
<link rel="stylesheet" href="/ueditor/css/blue_3.css">
<script type="text/javascript" src="/ueditor/js/jquery-1.7.2.min_7.js"></script>
<script type="text/javascript" src="/ueditor/js/jquery.cookie_6.js"></script>
<script src="/ueditor/js/artdialog_3.js"></script>
<script src="/ueditor/js/artdialog.plugins_3.js"></script>
<script type="text/javascript" src="/ueditor/js/common2_7.js"></script>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?4a4681a3b1efbd3cf94cde90ed8a8a95";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
<script type="text/javascript">
var URL = "http://www.51oscar.com/";

function dropMenu(obj){
    $(obj).each(function(){
        var theSpan = $(this);
        var theMenu = theSpan.find(".hover_show, .user_more");
        var tarHeight = theMenu.height();
        theMenu.css({height:0,opacity:0});
        theSpan.hover(
            function(){
                $(this).addClass("selected");
                theMenu.stop().show().animate({height:tarHeight,opacity:1},400);
            },
            function(){
                $(this).removeClass("selected");
                theMenu.stop().animate({height:0,opacity:0},400,function(){
                    $(this).css({display:"none"});
                });
            }
        );
    });
}
$(document).ready(function(){    
    dropMenu(".m_more");
    dropMenu("#u_info");
});

</script>
<title>首页</title>
</head>

<body>
<div class="top">
    <div class="menu">
        <a href="/" class="logo"><img src="/ueditor/picture/person_logo_3.png"></a>
        <div class="menu_c">
      <a href="/">首页</a>
            <a href="/home/tiezis">贴吧</a>
            <a href="/home/review">影评</a>
            <a href="/home/movieDetails">电影</a>
            <a href="/home/album">影集</a>
            <a href="/home/activity/list">活动</a>
        </div>
        <div class="m_more">
            <a  class="menu_a"><span>更多</span><b class="a_trig"></b></a>
            <div class="hover_show">
                <a href="http://www.51oscar.com/zhongchou.html">众筹</a>
                <a href="http://www.51oscar.com/topic.html">专题</a>
                <a href="http://www.51oscar.com/news.html">资讯</a>
                <!--<a href="">游戏</a>    --> 
            </div>
        </div>
        <div class="search">
      <form action="http://www.51oscar.com/Search/index" method="GET">
        <input type="text" class="sear_input" placeholder="搜电影、影集" name="word" id="sea_input"/>
        <input name="" type="button" class="sear_butt" onclick="this.form.submit()" />
      <input type="hidden" name="__hash__" value="f77d1ff2908fe924cfe6efb9657944ad_ed78f046472ba612968914a2f747e6ce" /></form>
            <input type="text" class="sear_input" onFocus="focusInputEle(this)" onBlur="blurInputEle(this)" defaultVal="搜影评/找人" value="搜影评/找人">
            <input type="button" class="sear_butt">
        </div>
    <style>
      .login_before{line-height:50px;width:80px;float:right;}
      .login_before a{color:white;}
    </style>
      
    <div class="user_info nav_title">
      <div class="after_landing" >
        <span>欢迎您，</span>
        <div id="u_info"> 
          <a href="/home/myCenter" class="u_name" title="{{Session('username')}}">{{Session('username')}}</a>
          <img src="{{Session('image')}}" width="27" height="27" alt="{{Session('username')}}" />
          <div class="user_more">
            <div class="m_line1"></div>
            <ul class="u_detail">
              <li><span title="XiaoRan"><a href="/home/myCenter" title="XiaoRan">{{session('username')}}</a></span></li>
              <li><a href="/home/xiaoxi" class="quick_news">消息</a></li>
              <li><a href="/home/center">帐号设置</a></li>
              <li><a href="/home/xiangmugl">项目管理</a></li>
              <li><a href='/home/outlogin' id="home_logout">退出</a></li>
            </ul>                    
          </div>
        </div>
      </div>
        </div>    </div>
</div> 
<script type="text/javascript">
  $(function(){
    //ajax logout personal center
    Common.init();
    
  })
</script>
<link rel="stylesheet" href="/ueditor/css/base_4.css">
<link rel="stylesheet" href="/ueditor/css/setting_2.css"> 
<style>
body{background:none;}
</style>
<script>
$(window).load(function(){
  var hasBind="";
  if(hasBind=="1"){
    var otype="3";
    if($('#type_'+otype).attr('class')=='bind'){
      var webName='帐号';
      switch(otype) {
        case '1':
           webName='腾讯微博帐号';
           break;
         case '2':
           webName='QQ帐号';
           break;
         case '3':
           webName='新浪微博帐号';
           break;
         case '4':
           webName='人人网帐号';
           break;        
         case '5':
           webName='豆瓣帐号';
           break;
      }     
      if(confirm('您输入的'+webName+'已与其它大众影评网帐号绑定过，确定要替换之前的绑定关系吗？')){
        ajaxBind("15312","3","6525904859");
      }
    }
  } 
});

//替换已经绑定的第三方绑定
function ajaxBind(oauthID,oauthType,OauthName) {  
  var url  = URL + 'Personal/ajaxBind'; 
  $.ajax({
    type: "POST",
    url: url,
    data:"oid="+oauthID+"&otype="+oauthType+"&oname="+OauthName,
    dataType:"json",    
    success: function(data){      
      if (data.status == 1) {       
        $('#type_'+data.data).addClass('unbind');
      }
      else{
        alert(data.info);
      }
    },
    error: function(){alert("向服务器发送AJAX请求失败!");}
  });     
}
//AJAX提交同步分享选项
function ajaxShare(obj){  
  var isShare=1;
  if(obj.checked){
    if(confirm("您确定要设置同步分享吗？")){
      isShare=1;
    }
    else{
      obj.checked=false;
      return false;
    }
  }
  else{
    if(confirm("您确定要取消同步分享吗？")){
      isShare=0;      
    }
    else{
      obj.checked=true;
      return false;
    }
  }
  
  $.ajax({
    type: "POST",
    url: URL + 'Personal/ajaxShare',
    data:"oid="+obj.value+"&isShare="+isShare,
    dataType:"json",    
    success: function(data){      
      if(data.status!= 1) {       
        alert(data.info);
      }
    },
    error: function(){alert("向服务器发送AJAX请求失败!");}
  }); 
}

</script>
@section('content')

@show

<input type='hidden' id='txt_header_url' value="http://www.51oscar.com" />
<input type='hidden' id='txt_public_home' value="/Public/Home/" module="Personal" ie_page="/movie/ie.html"  baidu_page="/movie/baidu.html" qvod_page="/movie/qvod.html" gvod_page="/movie/gvod.html"  loading_page="/movie/loading.html" />
<input type='hidden' id='txt_edit_user' value="/personal/toUserEditShare.html"/>
<div class='hide' id='hide_album_msg' index="/album/toAlbumDatail.html/album_id/" edit="/album/toAlbumEditImg.html/album_id/" movie="/album/toAlbumEditMovie.html/album_id/"></div>
<div class='hide' id="hide_comment_type" movie="/movie/toMovieInfo.html/id/" album="/album/toAlbumDatail.html/album_id/" topic="/topic/topicView.html/id/"></div>
<div class='hide' id='hide_user_info' some="http://www.51oscar.com/someone/index/id/" session_id="428228" index="/personal/index.html" msg_url="http://www.51oscar.com/Personal/msgList" edit_url="http://www.51oscar.com/Personal/toUserEditShare"></div>
<div class="hide" id="footer_info" footerUrl="/index/ajaxColumnList.html" columnUrl="/login/toColumn.html"></div>

<div class="footer wp" id="footer">
  <div class="dlList clearfix">
      <dl>
          <dt><a href="javascript:viod(0);" title="栏目">栏目</a></dt>
          <dd><a href="http://www.51oscar.com/news.html" title="影视资讯" target="_blank" >影视资讯</a></dd>
          <dd><a href="http://www.51oscar.com/review.html" title="新片影评" target="_blank" >新片影评</a></dd>
          <dd><a href="http://www.51oscar.com/forum.html" title="影视贴吧" target="_blank" >影视贴吧</a></dd>
        </dl>
      <dl>      
          <dt><a href="javascript:viod(0);" title="产品服务">产品服务</a></dt>
          <dd><a href="http://www.leg3s.com/about/index.html" title="公司简介" target="_blank" >公司简介</a></dd>
          <dd><a href="http://www.leg3s.com/product/index.html" title="影视服务" target="_blank" >影视服务</a></dd>
          <dd><a href="http://www.leg3s.com/example/index.html" title="案例展示" target="_blank" >案例展示</a></dd>
        </dl>
      <dl> 
          <dt><a href="javascript:viod(0);" title="关于我们">关于我们</a></dt>
          <dd><a href="http://www.51oscar.com/about.html" title="关于我们" target="_blank" >关于我们</a></dd>
          <dd><a href="http://www.51oscar.com/login/toColumn/id/32" title="家长监护">家长监护</a></dd>
          <dd><a href="http://www.51oscar.com/login/toColumn/id/2" title="联系我们" target="_blank" >联系我们</a></dd>
        </dl>
      <dl> 
            <dt><a href="javascript:viod(0);" title="网站条款">网站条款</a></dt>
          <dd><a href="http://www.51oscar.com/login/toColumn/id/3" title="免责声明" target="_blank" >免责声明</a></dd>
          <dd><a href="http://www.51oscar.com/login/toColumn/id/33" title="会员条款" target="_blank" >会员条款</a></dd>
          <dd><a href="http://www.51oscar.com/sitemap.html" title="网站地图" target="_blank" >网站地图</a></dd>
        </dl>
      <dl class="last">
          <dt><a href="javascript:viod(0);" title="关注我们">关注我们</a></dt>
          <dd><a class="weibo icon" href="http://weibo.com/51oscar" title="新浪微博" target="_blank" >&nbsp;</a></dd>
          <dd><a class="weibo_qq icon" href="http://t.qq.com/leg_51oscar" title="腾讯微博" target="_blank" >&nbsp;</a></dd>
        </dl>
    </div>
    <div class="Copyright"><p>Copyright © 2012 <a href="http://www.51oscar.com" target="_blank" rel="nofollow">大众影评网</a>（51oscar.com）All rights reserved. 粤ICP备07500583号-2 </p></div>
</div>
</body>
</html>