<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>电影列表</title>
<meta name="description" content="电影列表" />
<link rel="shortcut icon" href="/Images/favicon.ico" />
<!--[if lt IE 9]>
    <script type="text/javascript" src="/ueditor/js/html5.js"></script>
<![endif]-->
<link type="text/css" rel="stylesheet" href="/ueditor/css/common.css" />
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
<script type="text/javascript" src="/ueditor/js/jquery.cookie.js"></script>
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
             <input type="hidden" name="__hash__" value="8d3dd6491e4150f73b602b3b0e920229_8a8aae4d28acf5b2cac5fc353015497d" /></form>
             <input type="hidden" id="txt_header_url" value="http://www.51oscar.com" >
             <input type="hidden" value=""  id="sessionid">
             
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


<link type="text/css" rel="stylesheet" href="/ueditor/css/movie.css" />


<!--搜索过滤器 s-->
<section class="filterWp wp">
    <div class="cont">
        <dl class="clearfix">
            <dt>按类型：</dt>
            <dd>
                <ul class="clearfix" >
                     <li ><a href="/home/movieDetails" title="全部" target="_self">全部</a></li>
                    @foreach($tags as $v)
                     <li class="@if($v->id == request()->movie_tag_id) on @endif"><a href="/home/movieDetails?movie_tag_id={{$v['id']}}&{{http_build_query(request()->except('movie_tag_id'))}}" title="动作" target="_self">{{$v['name']}}</a></li>

                    @endforeach

                    <!-- $('#up div').mouseover(function(){
                        //获取当前元素的索引
                        var index = $(this).index();
                        //标签导航样式切换
                        $(this).addClass('active');
                        $(this).siblings().removeClass('active');
                        //内容切换
                        $('#down .item').eq(index).addClass('active');
                        $('#down .item').eq(index).siblings().removeClass('active');
                    }); -->

                    

                     <li ><a href="/movie/search/37_4_0_0.html" title="其他" target="_self">其他</a></li>                </ul>
            </dd>
            <dd class="more_dd"><a class="moreBnt1 more" href="javascript:">更多</a></dd>
        </dl>
        
        <dl class="clearfix">
            <dt>按地区：</dt>                                                        
            <dd class="noMoreDd">
                <ul class="clearfix">
                    <li class="on"><a href="/home/movieDetails" title="全部" target="_self">全部</a></li>
                    @foreach($cate as $v)
                    <li class="@if($v->id == request()->movie_cate_id) on @endif" ><a href="/home/movieDetails?movie_cate_id={{$v['id']}}&{{http_build_query(request()->except('movie_cate_id'))}}" title="大陆" target="_self">{{$v['name']}}</a></li>
                    @endforeach
                    <li  ><a href="/movie/search/4_17_0_0.html" title="其他" target="_self">其他</a></li>                </ul>
            </dd>
        </dl>
        <dl class="clearfix">
            <dt>按时间：</dt>
            <dd>
                <ul class="clearfix">
                   <li class="on" ><a href="/movie/search/4_4_0_0.html" title="全部" target="_self">全部</a></li><li  ><a href="/movie/search/4_4_1_0.html" title="当前热映" target="_self">当前热映</a></li><li  ><a href="/movie/search/4_4_2_0.html" title="即将上映" target="_self">即将上映</a></li><li  ><a href="/movie/search/4_4_3_0.html" title="2015" target="_self">2015</a></li><li  ><a href="/movie/search/4_4_4_0.html" title="2014" target="_self">2014</a></li><li  ><a href="/movie/search/4_4_5_0.html" title="2013" target="_self">2013</a></li><li  ><a href="/movie/search/4_4_6_0.html" title="2012" target="_self">2012</a></li><li  ><a href="/movie/search/4_4_7_0.html" title="2011" target="_self">2011</a></li><li  ><a href="/movie/search/4_4_8_0.html" title="2010" target="_self">2010</a></li><li  ><a href="/movie/search/4_4_9_0.html" title="2009" target="_self">2009</a></li><li  ><a href="/movie/search/4_4_10_0.html" title="2008" target="_self">2008</a></li><li  ><a href="/movie/search/4_4_11_0.html" title="2007" target="_self">2007</a></li><li  ><a href="/movie/search/4_4_12_0.html" title="2006" target="_self">2006</a></li><li  ><a href="/movie/search/4_4_13_0.html" title="2005" target="_self">2005</a></li><li  ><a href="/movie/search/4_4_14_0.html" title="2004" target="_self">2004</a></li><li  ><a href="/movie/search/4_4_15_0.html" title="2003" target="_self">2003</a></li><li  ><a href="/movie/search/4_4_16_0.html" title="2002" target="_self">2002</a></li><li  ><a href="/movie/search/4_4_17_0.html" title="2001" target="_self">2001</a></li><li  ><a href="/movie/search/4_4_18_0.html" title="2000" target="_self">2000</a></li><li  ><a href="/movie/search/4_4_19_0.html" title="1999" target="_self">1999</a></li><li  ><a href="/movie/search/4_4_20_0.html" title="1998" target="_self">1998</a></li><li  ><a href="/movie/search/4_4_21_0.html" title="90年代" target="_self">90年代</a></li><li  ><a href="/movie/search/4_4_22_0.html" title="80年代" target="_self">80年代</a></li><li  ><a href="/movie/search/4_4_23_0.html" title="更早" target="_self">更早</a></li>                </ul>
            </dd>
            <dd class="more_dd"><a class="moreBnt2 more" href="javascript:" >更多</a></dd>
        </dl>
    </div>
</section>
<!--搜索过滤器 e-->
<!--搜索结果section  s-->
<section class="resultWp wp">
    <div class="titList title clearfix">
        <a href="/movie/search/4_4_0_0.html" title="最新更新" target="_self" >最新更新</a>
        <a href="/movie/search/4_4_0_1.html" title="最近热播" target="_self">最近热播</a>
        <a href="/movie/search/4_4_0_2.html" title="评分最高" target="_self" >评分最高</a>
        <i id="moveLine"></i>
    </div>
    <div class="cont">
        <div class="listBox clearfix">
        @foreach($details as $v)
          <dl>
            <dt class="userLoge"><a href="/home/{{$v['id']}}.html" target="_blank"><img class="lazyImg" src="{{$v['image']}}" title="{{$v['name']}}" alt="{{$v['name']}}" /></a></dt>
            <dd><a class="movName" href="/movie/38489.html">{{$v['name']}}</a></dd>
            <dd class="des">{{$v['intro']}}</dd>
            <dd>评分：<em>6.0</em></dd>
          </dl>     
        @endforeach
        </div>
        <div class="pagination">
            &nbsp;<span class='current'>1</span>&nbsp;<a href='/movie/search/4_4_0_0_2.html'>&nbsp;2&nbsp;</a>&nbsp;<a href='/movie/search/4_4_0_0_3.html'>&nbsp;3&nbsp;</a>&nbsp;<a href='/movie/search/4_4_0_0_4.html'>&nbsp;4&nbsp;</a>   <a href='/movie/search/4_4_0_0_2.html'>下一页</a>     <span style="color:black;">第  1/4 页</span>          
        </div>
        
    </div>
</section>
<!--搜索结果section  e-->

<script>

    $('.moreBnt1').toggle(function(){
            //var height = $(this).siblings().find("ul").innerHeight();
            $(this).parents('dl').animate({
                    height: '78px'
                },300);
            $(this).text('收起');
        },function(){
            $(this).parents('dl').animate({
                    height: '28px'
                },300);
            $(this).text('更多');
        }); 
        
    $('.filterWp dl ul li.on').each(function(){ 
         if( $(this).index() >=19 ){
             $(this).parents('dd').siblings().find('.moreBnt1').trigger('click');
         }
    });

  $('.moreBnt2').toggle(function(){
            //var height = $(this).prev('ul').innerHeight();
            $(this).parents('dl').animate({
                    height: '56px'
                },300);
            $(this).text('收起');
        },function(){
            $(this).parents('dl').animate({
                    height: '28px'
                },300);
            $(this).text('更多');
        }); 
        
    $('.filterWp dl ul li.on').each(function(){
         if( $(this).index() >=16 ){
             $(this).parents('dd').siblings().find('.moreBnt2').trigger('click');
         }
    });



    //最新更新 最近热播 评分最高 切换
    var _url=window.location.href;
    if(/_0.html$/.test(_url)){
        $(".titList").find("a").eq(0).attr("id","lineOn");
    }else if(/_1.html$/.test(_url)){
        $(".titList").find("a").eq(1).attr("id","lineOn");
    }else if(/_2.html$/.test(_url)){
        $(".titList").find("a").eq(2).attr("id","lineOn");
    }

</script>



<!-- 隐藏信息  --> 
<input type='hidden' id='txt_header_url' value="http://www.51oscar.com" />
<input type='hidden' id='txt_public_home' value="/Public/Home/" module="Movie" ie_page="/movie/ie.html"  baidu_page="/movie/baidu.html" qvod_page="/movie/qvod.html" gvod_page="/movie/gvod.html"  loading_page="/movie/loading.html" />
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