<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>大众影评网-[添加影集]</title>
<meta name="description" content="大众影评网定位于通过影评、影集、影讯、专题等方式为用户提供影视导航及一键观看的影视娱乐网站。" />
<link rel="shortcut icon" href="/Images/favicon.ico" />
<!--[if lt IE 9]>
    <script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
<link type="text/css" rel="stylesheet" href="/ueditor/css/common_1.css" />
<style type="text/css">
    .nav a.hotNavItem{position:relative;color: #f60;}
    .nav a.hotNavItem.on{position:relative;color: #fff;}
    .nav a.hotNavItem:hover{color: #fff;}
    .nav a.hotNavItem span{position: absolute;top: 0;right: 16px;width:24px;height:16px;background: url(images/hot.png) no-repeat;}
/*  .nav a.hotNavItem span{position: absolute;top: -3px;right: 10px;font-size: 12px;background: orange;color: #fff;line-height: 14px;height: 14px;padding: 0 2px;border-radius: 4px;}
    .nav a.hotNavItem span:before{content:"";position: absolute;bottom: -5px;left: 5px;width:0;height:0;border-bottom: 5px solid transparent;border-left: 5px solid orange;}*/
    /*.nav a.hotNavItem span:after{content:"";position: absolute;bottom: -5px;left: 1px;width:0;height:0;border-bottom: 5px solid transparent;border-left: 5px solid #fff;}*/
</style>
<script type="text/javascript" src="/ueditor/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/ueditor/js/jquery.cookie_1.js"></script>
<script type="text/javascript" src="/ueditor/js/common2.js"></script>
<script type="text/javascript" src="/ueditor/js/common.js"></script>
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
            <a href="http://www.51oscar.com" title="大众影评网" target="_self"><img src="picture/logo.png" alt="大众影评网" /></a>
        </div>
        <div class="searchBox fR">
             <form name="form_sreach" action="/Search/index" method="get" >
                <!--[if !IE]><!--> <input class="txt_kw" name="word" type="text" value="" autocomplete="off" placeholder="搜索你感兴趣的" /><!--<![endif]-->
                <!--[if gte IE 10]> <input class="txt_kw" name="txt_kw" type="text" value="" autocomplete="off" placeholder="搜索你感兴趣的" /> <![endif]-->
                <!--[if lt IE 10]> <input class="txt_kw" name="txt_kw" type="text" autocomplete="off"  value="搜索你感兴趣的" /> <![endif]-->
                <input class="sreach" name="btn_sreach" type="submit" value="" >
               <!-- <input type="hidden" id="txt_header_url" value="http://www.51oscar.com" > -->
             <input type="hidden" name="__hash__" value="486b664bb89f7b48324172759fa3f229_408325d2d95496e0180e61db1906f41e" /></form>
             <input type="hidden" id="txt_header_url" value="http://www.51oscar.com" >
             <input type="hidden" value=""  id="sessionid">
             <span class="hotLink">
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
 function ajaxGetNotify(u){
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
    // setInterval("ajaxGetNotify(sessionid)", parseInt(120) * 1000);
    ajaxGetNotify(sessionid);
   }    
});
</script>

<script src="/ueditor/js/jquery.autocomplete.js"></script>
<link rel="Stylesheet" href="/ueditor/css/jquery.autocomplete_1.css"/>
<link rel="stylesheet" href="/ueditor/css/base_1.css">
<link rel="stylesheet" href="/ueditor/css/style11_1.css">
<link rel="stylesheet" href="/ueditor/css/setting_1.css"> 
<!--content-->
    <input type="hidden" value="" id="TypeId">
    <input type="hidden" value="2" id="shareText">
<div class="edit-content clearfix">
    <div class="crumbs_nav00">
       <div class="crumbs_nav01">您的位置</div> 
       <div class="crumbs_nav03"><a href="/">影集</a></div>
       <div class="crumbs_nav02"></div>
       <div class="crumbs_nav03">创建影集</div>
       <div class="crumbs_nav04"></div>
    </div>
    <div class="tab-div_two">
        <ul class="tab-div-ul_two">
            <li><a href="javascript:;" class="active one_step">第一步:填写基本信息</a></li>
            <li><a href="javascript:;">第二步:添加封面</a></li>
            <li><a href="javascript:;" class="three_step">第三步:添加影片</a></li>
        </ul>  
    </div>
    <form action="/home/toAlbumAdd2" method="post" id="frm_add_album" >
    <table class="basic_info">
        <tr>
            <td width="20" class="Required">*</td>
            <td width="80" class="basic_fonts">影集名称:</td>
                        <td width="540"> 
                            <input type="text" id="album_name" value="" maxlength="20"  name="title" class="text_name"  node-type="placeholder"  placeholder="好的名字更能吸引片友的关注哦！20字内"/>&nbsp;
                        </td>
        </tr>
         <tr>
            <td></td>
            <td></td>
                <td class="basic_fonts"><input type="checkbox" checked="checked"  id="is_allow" name="is_allow" value=""/>&nbsp;允许片友推荐影片至该影集</td>
                </tr>
        <tr>
            <td class="Required">*</td>
            <td class="basic_fonts">影集描述:</td>
            <td><textarea class="textar_desc" name="introduce" id="album_desc" maxlength="480"  node-type="placeholder"  placeholder="请用一段文字，简单描述该影集吧"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <span class="text_limit basic_fonts ">还能输入<span class="txtCount_tip"><span class="js_txtCount"><strong>480</strong></span></span>个字</span>  
            </td>
        </tr>
    
    </table>
     <input type="hidden" name="albumName" value=""/>
    <div class="save_div">
     <button name="btn_submit_album" id="btn_submit_album"  class="finish-btn" album_id="0" value="保存并继续" style="background:blue"/>保存并提交</button>
    </div>
</form>
<script  src="js/album_edit.js"></script>
<script> 
    $(window).load(function(){ 
        $('#btn_submit_album').bind('click', function(){
            var title=$('#album_name').val();
            var description=$('#description').val();
            $.ajax({
            type:"POST",
                url: "/album/add_album_filter_word",
                data: "description="+description+"&title="+title,beforeSend: function(){
                },
                success: function(msg){
                   var data=eval(msg);
                   //alert(msg);
                    if (msg!=4){
                         AlbumEdit.clickAddAlbum($(this));
                    }else{
                        alert('标题或描述包含非法关键字');
                    }
                }
            });
        });
        $('#album_desc').artTxtCount($('.txtCount_tip'), 480);
    });
      
var setAuto = function(){
    $("#album_name").autocomplete(
        '/ajaxSearchGetAlbumName',{
            minChars: 0,
            max: 10,
            scroll: false,
            width: 490,
            extraParams: {
                q:function(){return $("#album_name").val();}
            },
            dataType: 'json', 
            scrollHeight: 500,
            //需要把data转换成json数据格式   
            
            parse: function(data) {
                return $.map(eval(data), function(row) {
                    return {
                        data: row,
                        value: row.name,
                        result: row.name 
                    }
                });
            },
            formatItem: function(row, i, max) {  
               return "<table><tr><td align='left'>" + row.name + "</td></tr></table>"; 
                
            },
            formatMatch: function(row, i, max) {
                return row.name;
            },
            formatResult: function(row) { 
                return row.name;   
            }
            }).result(function(event, row, formatted) { //回调 
                var id = $("#album_name").val();
                $("#album_name").val(id + row.movie_id + ',');
            });
};

$(document).ready(function() {
    setAuto();  
});
</script>
<!-- 隐藏信息  --> 
<input type='hidden' id='txt_header_url' value="http://www.51oscar.com" />
<input type='hidden' id='txt_public_home' value="/Public/Home/" module="Album" ie_page="/movie/ie.html"  baidu_page="/movie/baidu.html" qvod_page="/movie/qvod.html" gvod_page="/movie/gvod.html"  loading_page="/movie/loading.html" />
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