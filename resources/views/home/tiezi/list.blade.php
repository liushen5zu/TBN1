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
    <section class="wp clearfix">
        <div class="fL">
            <span class="weixin"><i class="icon_QR icon"></i>微信扫一扫，精彩电影资讯随身看<img class="show" src="picture/wx_1.jpg" alt="大众影评网微信公众号" /></span>
        </div>
        <div class="fR">
          <ul id="welcome" class="clearfix out">            
    <li><a href="javascript:void(0);" onclick="location.href='/oauth/requestHandle/type/3'" title="微博登录"><i class="icon_weibo icon"></i>微博登录</a></li>
        <li>|</li>
        <li><a href="javascript:void(0);" onclick="location.href='/oauth/requestHandle/type/2'" title="QQ登录"><i class="icon_qq icon"></i>QQ登录</a></li>
        <li>|</li>
        <li><a href="http://www.51oscar.com/login.html"  title="登录"><i class="icon_man icon"></i>登录</a></li>
        <li>|</li>
                <li><a href="http://www.51oscar.com/login/regist.html" title="免费注册">免费注册 </a></li>
            
    </ul>
        </div>
    </section>
</header>
<section class="logoAndSreach">
    <div class="wp clearfix">
        <div class="logo fL">
            <a href="http://www.51oscar.com" title="大众影评网" target="_self"><img src="picture/logo_1.png" alt="大众影评网" /></a>
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
        <a href="http://www.51oscar.com" title="首页" target="_self" id="home">首页</a>
        <a class="hotNavItem icon_hot" href="http://www.51oscar.com/forum.html" target="_self" id="forum">贴吧<span></span></a>
        <a class="hotNavItem" href="http://www.51oscar.com/review.html" target="_self" id="review">影评</a>
        <a href="http://www.51oscar.com/movie.html" target="_self" id="movie">电影</a>
        <a href="http://www.51oscar.com/album.html" target="_self" id="album">影集</a>
        <a href="http://www.51oscar.com/activity.html" target="_self" id="activity">活动</a>

        <a class="sNavItem" href="http://www.51oscar.com/news.html" target="_self" id="news">资讯</a>
        <a class="sNavItem" href="http://www.51oscar.com/topic.html" target="_self" id="topic">专题</a>
        <a class="sNavItem" href="http://www.51oscar.com/zhongchou.html" target="_self" id="zhongchou">众筹</a>

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
                <a class="tit_latest" href="http://www.51oscar.com/forum.html" title="最新" target="_self" >最新</a><a class="tit_good" href="/forum/good.html" title="精华" target="_self">精华</a>
                <i id="moveLine"></i>
                <button id="wantPost" class="wantPost icon" href="javascript:;" onClick="jumpTo('.user_sayBox')"  value="我要发帖">我要发帖</button>
            </div>
            <div id="listBox" class="listBox">
            <!-- 置顶-->
            <dl class="forumItem_top forumItem clearfix">
                    <dt class="L fL">
                        <em class="red">置顶</em>
                    </dt>
                    <dd class="M fL">
                        <div class="T clearfix">
                            <div class="fL">
                                <a href="/forum/2932.html" title="【需求贴】如有资源需求，请在本贴下留言" target="_blank">【需求贴】如有资源需求，请在本贴下留言</a>
                                <p>楼主资源控~ 所以不管是新片、老片、奇葩片、重口味片，包括一些日...</p>
                            </div>
                            <div class="fR">
                                <p><i class="man icon"></i><span>资源小强</span></p>
                                <p><i class="info icon"></i><span>子帝</span></p>
                            </div>
                        </div>
                        <div class="B">
                            <ul id="bigPic_top0" class="clearfix">
                                                         <li><a href="/Uploads/image/20150710/water_15092640100.jpg"><img class="lazyImg" src="picture/b.gif" data-src="/Uploads/image/20150710/s_15092640100.jpg" /></a></li>  
                           </ul> 
                        </div>
                    </dd>
                    <dd class="R fR"></dd>
                </dl><!----><dl class="forumItem_top forumItem clearfix">
                    <dt class="L fL">
                        <em class="red">置顶</em>
                    </dt>
                    <dd class="M fL">
                        <div class="T clearfix">
                            <div class="fL">
                                <a href="/forum/8.html" title="电影贴吧必读！！！" target="_blank">电影贴吧必读！！！</a>
                                <p></p>
                            </div>
                            <div class="fR">
                                <p><i class="man icon"></i><span>撒旦的女王</span></p>
                                <p><i class="info icon"></i><span>咖喱菠萝派</span></p>
                            </div>
                        </div>
                        <div class="B">
                            <ul id="bigPic_top1" class="clearfix">
                             
                           </ul> 
                        </div>
                    </dd>
                    <dd class="R fR">07-14</dd>
                </dl><!---->    
           <!-- 置顶end-->  
           
            <!--未审核--> 
            @foreach($tiezis as $v)
                <dl class="forumItem_good forumItem clearfix">
                        <dt class="L fL">
                        <em class="dot icon"></em> 
                         </dt>
                        <dd class="M fL">
                        <div class="T clearfix">
                             <div class="fL">
                                <a href="/{{$v['id']}}.html" title="篮球" target="_blank">{{$v->title}}</a>
                               
                            </div>
                                  <div class="fR">
                                    <p><i class="man icon"></i><span>{{!empty($v->user->username) ? $v->user->username : '' }}</span></p>
                                </div>
                            </div>
                        </dd>
                </dl><!---->   
                @endforeach
            </div>
            <!--listBox e-->
<!--             <div class="pagination">
                   &nbsp;<span class='current'>1</span>&nbsp;<a href='/forum/index/p/2.html'>&nbsp;2&nbsp;</a>&nbsp;<a href='/forum/index/p/3.html'>&nbsp;3&nbsp;</a>&nbsp;<a href='/forum/index/p/4.html'>&nbsp;4&nbsp;</a>&nbsp;<a href='/forum/index/p/5.html'>&nbsp;5&nbsp;</a>   <a href='/forum/index/p/2.html'>下一页</a>   <span style="color:black;">第  1/730 页</span>            
            </div> -->
                
        </section><!--forumList e-->
        <!--发表新帖 s-->
                 
            <section class="user_sayBox clearfix">
                    
            <form action="/tiezi" method="post"enctype="multipart/form-data">
                <div class="titleBox clearfix"><em>标题</em><input type="text" name="title" class="tieba_title"></div>
                <script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
                 <script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
                 <script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>
                 <script id="editor" type="text/plain" name="content" style="width:100%;height:500px;"></script>
                 <button style=" display: block; width: 110px; height:32px;margin-right: 5px;font-size: 0;text-indent: -9999em;border: none;cursor: pointer;background-position: 0px -254px;"id="wantPost" class="wantPost icon" href="javascript:;" onclick="jumpTo('.user_sayBox')" value="我要发帖"></button>
                 {{method_field('')}}
                  {{csrf_field()}}
                 <script>
                        var ue = UE.getEditor('editor');    
                    </script>
            </form>
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
            <div class="cont clearfix">
             <dl class="clearfix">
                    <dt>
                        <a href="/movie/39278.html" title="芳华 " target="_blank" >
                            <img class="lazyImg pic imgBorder" src="picture/b.gif" data-src="/Uploads/Movie/Poster/59c33acd86ed5.jpg" width="98" height="138" alt="芳华 " />
                        </a>
                    </dt>    
                    <dd>
                        <a class="t" href="/movie/39278.html" title="芳华 " target="_blank" >芳华 </a>
                        <p>导演：<em>冯小刚</em></p>
                        <p>类型：<em>剧情/战争</em></p>
                        <a class="trailer" href="javascript:viod(0);" title="预告片" data-trailer="">预告片<i></i></a>                        
                    </dd>
                </dl><dl class="clearfix">
                    <dt>
                        <a href="/movie/39277.html" title="空天猎 " target="_blank" >
                            <img class="lazyImg pic imgBorder" src="picture/b.gif" data-src="/Uploads/Movie/Poster/59c3397b4c6e5.jpg" width="98" height="138" alt="空天猎 " />
                        </a>
                    </dt>    
                    <dd>
                        <a class="t" href="/movie/39277.html" title="空天猎 " target="_blank" >空天猎 </a>
                        <p>导演：<em>李晨</em></p>
                        <p>类型：<em>动作/剧情...</em></p>
                        <a class="trailer" href="javascript:viod(0);" title="预告片" data-trailer="">预告片<i></i></a>                        
                    </dd>
                </dl><dl class="clearfix">
                    <dt>
                        <a href="/movie/39276.html" title="缝纫机乐队 " target="_blank" >
                            <img class="lazyImg pic imgBorder" src="picture/b.gif" data-src="/Uploads/Movie/Poster/59c318412247e.jpg" width="98" height="138" alt="缝纫机乐队 " />
                        </a>
                    </dt>    
                    <dd>
                        <a class="t" href="/movie/39276.html" title="缝纫机乐队 " target="_blank" >缝纫机乐队 </a>
                        <p>导演：<em>大鹏</em></p>
                        <p>类型：<em>喜剧/音乐</em></p>
                        <a class="trailer" href="javascript:viod(0);" title="预告片" data-trailer="">预告片<i></i></a>                        
                    </dd>
                </dl><dl class="clearfix">
                    <dt>
                        <a href="/movie/39275.html" title="遗忘空间 " target="_blank" >
                            <img class="lazyImg pic imgBorder" src="picture/b.gif" data-src="/Uploads/Movie/Poster/59c0a983d72c3.jpeg" width="98" height="138" alt="遗忘空间 " />
                        </a>
                    </dt>    
                    <dd>
                        <a class="t" href="/movie/39275.html" title="遗忘空间 " target="_blank" >遗忘空间 </a>
                        <p>导演：<em>韩汶青</em></p>
                        <p>类型：<em>恐怖/悬疑</em></p>
                        <a class="trailer" href="javascript:viod(0);" title="预告片" data-trailer="">预告片<i></i></a>                        
                    </dd>
                </dl><dl class="clearfix">
                    <dt>
                        <a href="/movie/39274.html" title="疯狂旅程 " target="_blank" >
                            <img class="lazyImg pic imgBorder" src="picture/b.gif" data-src="/Uploads/Movie/Poster/59c0a6cb6ed46.jpg" width="98" height="138" alt="疯狂旅程 " />
                        </a>
                    </dt>    
                    <dd>
                        <a class="t" href="/movie/39274.html" title="疯狂旅程 " target="_blank" >疯狂旅程 </a>
                        <p>导演：<em>龙野</em></p>
                        <p>类型：<em>喜剧/剧情</em></p>
                        <a class="trailer" href="javascript:viod(0);" title="预告片" data-trailer="">预告片<i></i></a>                        
                    </dd>
                </dl>            </div>
        </section><!--热映影片 e-->
        
        <section class="ad_forumAside">
            <a href="http://www.21yaya.com" title="牙牙关注" target="_blank"><img class="lazyImg" src="picture/b.gif" data-src="/Uploads/user_thumb/56600ec6649e9.jpg" alt="牙牙关注"/></a>
        </section>
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