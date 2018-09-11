<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>贴吧</title>
<link rel="shortcut icon" href="/Images/favicon.ico" />
<!--[if lt IE 9]>
    <script type="text/javascript" src="js/html5_1.js"></script>
<![endif]-->
<link type="text/css" rel="stylesheet" href="/assets/tiezi/css/common_1.css" />
<style type="text/css">
    .nav a.hotNavItem{position:relative;color: #f60;}
    .nav a.hotNavItem.on{position:relative;color: #fff;}
    .nav a.hotNavItem:hover{color: #fff;}
    .nav a.hotNavItem span{position: absolute;top: 0;right: 16px;width:24px;height:16px;background: url(images/hot_1.png) no-repeat;}
/*  .nav a.hotNavItem span{position: absolute;top: -3px;right: 10px;font-size: 12px;background: orange;color: #fff;line-height: 14px;height: 14px;padding: 0 2px;border-radius: 4px;}
    .nav a.hotNavItem span:before{content:"";position: absolute;bottom: -5px;left: 5px;width:0;height:0;border-bottom: 5px solid transparent;border-left: 5px solid orange;}*/
    /*.nav a.hotNavItem span:after{content:"";position: absolute;bottom: -5px;left: 1px;width:0;height:0;border-bottom: 5px solid transparent;border-left: 5px solid #fff;}*/
</style>
<script type="text/javascript" src="/assets/tiezi/js/jquery-1.7.2.min_1.js"></script>
<script type="text/javascript" src="/assets/tiezi//assets/tiezi//assets/tiezi/js/jquery.cookie_1.js"></script>
<script type="text/javascript" src="/assets/tiezi//assets/tiezi/js/common2_1.js"></script>
<script type="text/javascript" src="/assets/tiezi/js/common_1.js"></script>
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
    @include('layouts.home.header')
</header>
<section class="logoAndSreach">
    <div class="wp clearfix">
        <div class="logo fL">
            <a href="/">峰峰影评网</a>
        </div>
        <div class="searchBox fR">
             <form name="form_sreach" action="/Search/index" method="get" >
                <!--[if !IE]><!--> <input class="txt_kw" name="word" type="text" value="" autocomplete="off" placeholder="搜索你感兴趣的" /><!--<![endif]-->
                <!--[if gte IE 10]> <input class="txt_kw" name="txt_kw" type="text" value="" autocomplete="off" placeholder="搜索你感兴趣的" /> <![endif]-->
                <!--[if lt IE 10]> <input class="txt_kw" name="txt_kw" type="text" autocomplete="off"  value="搜索你感兴趣的" /> <![endif]-->
                <input class="sreach" name="btn_sreach" type="submit" value="" >
               <!-- <input type="hidden" id="txt_header_url" value="http://www.51oscar.com" > -->
             <input type="hidden" name="__hash__" value="bfd5120043eee562b76996e6b8fe52d5_994ab7d4080778cd7593ae3b491f8e7a" /></form>
             <input type="hidden" id="txt_header_url" value="http://www.51oscar.com" >
             <input type="hidden" value=""  id="sessionid">
             <span class="hotLink">
              <a href="http://www.51oscar.com/movie/38040.html">横冲直撞好莱坞 </a>
                 <a href="http://www.51oscar.com/album/1877.html">九部超级温馨又治愈的家庭类电影</a>
                 <a href="http://www.51oscar.com/album/1895.html">十部高分冷门电影推荐</a>
                 <a href="http://www.51oscar.com/album/1908.html">女生在成长路上必看的10部电影</a>
                 <a href="http://www.51oscar.com/album/1921.html">九部电影帮你摆脱失落</a>
             </span>
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

<link type="text/css" rel="stylesheet" href="/assets/tiezi/css/forum.css" />

<!--主体部分 s-->

<section class="mainWp wp clearfix">
    <section class="leftWp fL">
        <section class="forumList">
            <div class="titList title clearfix">
                <a class="tit_latest" href="/home/tiezi/zuixin" title="最新" target="_self" >最新</a>
                <a class="tit_good" href="/home/tiezi/jinghua" title="精华" target="_self">精华</a>
                <i id="moveLine"></i>
                <a id="wantPost" class="wantPost icon" href="#lzfwantPost"   value="我要发帖" style="background-position: 025px -254px">我要发帖</a>
            </div>
            <div id="listBox" class="listBox">
            @foreach($tiezis as $v)
                <dl class="forumItem_good forumItem clearfix">
                        <dt class="L fL">
                        <em class="red">置顶</em>
                         </dt>
                        <dd class="M fL">
                          <dd class="R fR">{{$v->created_at}}</dd>
                        <div class="T clearfix">
                             <div class="fL">
                                <a href="/home/tiezi/{{$v['id']}}.html" title="篮球" target="_blank" style="font-size: 16px;color: #333;"><b>{{$v->title}}</b></a>
                                <p>{!!mb_substr($v['content'],205,30)!!} ...</p>   
                            </div>
                                  <div class="fR">
                                    <p><i class="man icon"></i><span>{{!empty($v->user->username) ? $v->user->username : '' }}</span></p>
                                </div>
                            </div>
                        </dd>
                </dl><!---->   
                @endforeach
             @foreach($tiezis1 as $v)
                <dl class="forumItem_good forumItem clearfix">
                        <dt class="L fL">
                        @if($v['status']==2)
                            <em class="green">精华</em>
                        @else
                        @endif
                         </dt>
                        <dd class="M fL">
                          <dd class="R fR">{{$v->created_at}}</dd>
                        <div class="T clearfix">
                             <div class="fL">
                                <a href="/home/tiezi/{{$v['id']}}.html" title="篮球" target="_blank" style="font-size: 16px;color: #333;"><b >{{$v->title}}</b></a> 
                                 <p>{!!mb_substr($v['content'],200,10)!!} ...</p>  
                            </div>
                                  <div class="fR">
                                    <p><i class="man icon"></i><span style="float: right;">{{!empty($v->user->username) ? $v->user->username : '' }}</span></p>
                                </div>
                            </div>
                        </dd>
                </dl> 
                @endforeach
            </div>    
        </section>
        <!--发表新帖 s-->
                 
            <section class="user_sayBox clearfix">
              @if(!Session::has('username'))     
                请先登录才能发帖
              @else 
                  <form action="/tiezi" method="post"enctype="multipart/form-data">
               <div class="titleBox clearfix"><em>标题</em><input type="text" name="title" class="tieba_title" id="lzfwantPost"></div>
                <script type="text/javascript" charset="utf-8" src="/ueditorlzf/ueditor.config.js"></script>
                 <script type="text/javascript" charset="utf-8" src="/ueditorlzf/ueditor.all.min.js"> </script>
                 <script type="text/javascript" charset="utf-8" src="/ueditorlzf/lang/zh-cn/zh-cn.js"></script>
                 <script id="editor" type="text/plain" name="content" style="width:100%;height:500px;"></script>
                 <button style=" display: block; width: 110px; height:32px;margin-right: 5px;font-size: 0;text-indent: -9999em;border: none;cursor: pointer;background-position: 0px -254px;"id="wantPost1" class="wantPost icon"  value="我要发帖"></button>
                 {{method_field('')}}
                  {{csrf_field()}}
                 <script>
                        var ue = UE.getEditor('editor');    
                    </script>
               </form>
                @endif
             </section>

        <!--发表新帖 e-->
        
    </section><!--leftWp e-->
    <aside class="rightWp fR">
        <section class="hotTalk">
            <div class="title clearfix">
                <i class="info2 icon"></i><a href="http://www.51oscar.com/forum/good.html" title="热门讨论" >热门讨论<em>>></em></a>
            </div>
            <div class="cont clearfix">
                <ul>
                   <li><a href="/forum/2564.html" title="成人版《阿凡达》、AV版《复联》、毁童年版《蓝精灵》" target="_blank" >成人版《阿凡达》、AV版《复联》...</a></li><li><a href="/forum/2318.html" title="真实的龙母，《权力的游戏》中最美的裸体" target="_blank" >真实的龙母，《权力的游戏》中最美...</a></li><li><a href="/forum/1329.html" title="美国队长才排32位？超级英雄们的战斗指数排行榜" target="_blank" >美国队长才排32位？超级英雄们的...</a></li><li><a href="/forum/782.html" title="影史上多部B级片海报鉴赏 色情暴力香艳杀人魔" target="_blank" >影史上多部B级片海报鉴赏 色情暴...</a></li><li><a href="/forum/1441.html" title="欧美大尺度伦理片 只有想不到没有“露”不出" target="_blank" >欧美大尺度伦理片 只有想不到没有...</a></li><li><a href="/forum/2932.html" title="【需求贴】如有资源需求，请在本贴下留言" target="_blank" >【需求贴】如有资源需求，请在本贴...</a></li><li><a href="/forum/3946.html" title="漫威双棍三人组：黑寡妇、夜魔侠和仿声鸟" target="_blank" >漫威双棍三人组：黑寡妇、夜魔侠和...</a></li><li><a href="/forum/3288.html" title="《破风》金句，献给所有为梦想不断打拼的你" target="_blank" >《破风》金句，献给所有为梦想不断...</a></li><li><a href="/forum/4111.html" title="汤姆克鲁斯年轻时候美如冠玉温文尔雅" target="_blank" >汤姆克鲁斯年轻时候美如冠玉温文尔...</a></li><li><a href="/forum/621.html" title="电影《烂滚夫斗烂滚妻》重口味剧照 SM制服控爆乳性器官派对" target="_blank" >电影《烂滚夫斗烂滚妻》重口味剧照...</a></li>                </ul>
            </div>
        </section><!--热门讨论 e-->
                
        <section class="hotMovie">
            <div class="title clearfix">
                <i class="movie icon"></i><a href="/movie/search.html" title="热映影片" >热映影片<em>>></em></a>
            </div>
            @foreach($movie_details as $v)
            <div class="cont clearfix">
             <dl class="clearfix">
                    <dt>
                        <a href="/movie/39278.html" title="{{$v->name}}" target="_blank" >
                            <img class="lazyImg pic imgBorder" src="{{$v->image}}"width="98" height="138" alt="{{$v->name}}" />
                        </a>
                    </dt>    
                    <dd>
                        <a class="t" href="/movie/39278.html" title="{{$v->name}}" target="_blank" >{{$v->name}}</a>
                        <p>导演：<em>{{$v->director_name->name}}</em></p>
                        <p>类型：<em>{{$v->movie_cate->name}}</em></p>
                        <a class="trailer" href="javascript:viod(0);" title="预告片" data-trailer="">预告片<i></i></a>                        
                    </dd>
                </dl>       
            </div>
            @endforeach
        </section><!--热映影片 e-->
    </aside><!--rightWp e-->
</section>
<!--主体部分 e-->

<!--登陆对话框 s-->
<div class="mark_51" ></div>
<div class="Madfms" >
  <div class="Malogin_box">
    <div class="Macon_warp">
      <div class="login_title clearfix">登录
       <a href="javascript:void()" onclick="$('.Madfms,.mark_51').hide();"><span class="login_close"></span></a>
      </div>
      <div class="warp_b">
        <table border="0" cellspacing="5" cellpadding="0">
          <tbody>
            <tr>
              <td align="right" valign="top" class="td1"><label>邮箱:</label></td>
              <td valign="top"><input type="text" class="txt_input" id="txt_header_email" name="">
                <h5 class="regist_mail" id="email-error"></h5></td>
            </tr>
            <tr>
              <td height="20">&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td  align="right" valign="top"  class="td1"><label>密码:</label></td>
              <td valign="top"><input type="password" maxlength="16" id="txt_header_pwd" class="txt_input" value="" name="" />
                <div class="regist_mail" id="pwd-error"></div></td>
            </tr>
            <tr>
              <td class="td1">&nbsp;</td>
              <td class="line_3"><label><input type="checkbox" id="txt_third_reg_type" name="txt_email" />记住我</label>
                <a href="http://www.51oscar.com/Login/toFindPwd">找回密码</a></td>
            </tr>
            <tr>
              <td class="td1">&nbsp;</td>
              <td>
                <a class="toLoginBton" href="javascript:;" id="btn_header_login"><input type="button"  name="regist" value="登录" class="loginBton"></a>
                <a class="toReg" href="http://www.51oscar.com/login/regist.html">马上注册</a></td>
            </tr>
          </tbody>
        </table>
        <p class="hr">&nbsp;</p>
        <p class="login_3">使用第三方帐号登录</p>
        <ul style="margin-left:30px;">
          <li onclick="location.href=&quot;http://www.51oscar.com/Oauth/requestHandle?type=1&quot;" class="login_sina"></li>
          <li onclick="location.href='http://www.51oscar.com/Oauth/requestHandle?type=2'" class="login_qq"></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!--登陆对话框 e-->




<!-- 隐藏信息  --> 
<input type='hidden' id='txt_header_url' value="http://www.51oscar.com" />
<input type='hidden' id='txt_public_home' value="/Public/Home/" module="Forum" ie_page="/movie/ie.html"  baidu_page="/movie/baidu.html" qvod_page="/movie/qvod.html" gvod_page="/movie/gvod.html"  loading_page="/movie/loading.html" />
<input type='hidden' id='txt_edit_user' value="/personal/toUserEditShare.html"/>
<div class='hide' id='hide_album_msg' index="/album/toAlbumDatail.html/album_id/" edit="/album/toAlbumEditImg.html/album_id/" movie="/album/toAlbumEditMovie.html/album_id/"></div>
<div class='hide' id="hide_comment_type" movie="/movie/toMovieInfo.html/id/" album="/album/toAlbumDatail.html/album_id/" topic="/topic/topicView.html/id/"></div>
<div class='hide' id='hide_user_info' some="http://www.51oscar.com/someone/index/id/" session_id="" index="/personal/index.html" msg_url="http://www.51oscar.com/Personal/msgList" edit_url="http://www.51oscar.com/Personal/toUserEditShare"></div>
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
    <script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fb333171377f6fc60e48165d7fa43110b' type='text/javascript'%3E%3C/script%3E"));
</script>
</div>
</body>
</html>