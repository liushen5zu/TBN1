<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>最新影评|电影评论网站_大众影评网</title>
<meta name="description" content="大众影评网最新影评,众多电影评论人士,资深影评人发表热门电影影评,分享最新电影评论,您也可以上电影评论网交流电影观后感." />
<link rel="shortcut icon" href="/Images/favicon.ico" />
<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
<link type="text/css" rel="stylesheet" href="/comment/css/common.css" />
<style type="text/css">
	.nav a.hotNavItem{position:relative;color: #f60;}
	.nav a.hotNavItem.on{position:relative;color: #fff;}
	.nav a.hotNavItem:hover{color: #fff;}
	.nav a.hotNavItem span{position: absolute;top: 0;right: 16px;width:24px;height:16px;background: url(images/hot.png) no-repeat;}
/*	.nav a.hotNavItem span{position: absolute;top: -3px;right: 10px;font-size: 12px;background: orange;color: #fff;line-height: 14px;height: 14px;padding: 0 2px;border-radius: 4px;}
	.nav a.hotNavItem span:before{content:"";position: absolute;bottom: -5px;left: 5px;width:0;height:0;border-bottom: 5px solid transparent;border-left: 5px solid orange;}*/
	/*.nav a.hotNavItem span:after{content:"";position: absolute;bottom: -5px;left: 1px;width:0;height:0;border-bottom: 5px solid transparent;border-left: 5px solid #fff;}*/
</style>
<script type="text/javascript" src="/comment/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/comment/js/jquery.cookie.js"></script>
<script type="text/javascript" src="/comment/js/common2.js"></script>
<script type="text/javascript" src="/comment/js/common.js"></script>
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
        	<a href="http://www.51oscar.com" title="大众影评网" target="_self"><img src="/comment/picture/logo.png" alt="大众影评网" /></a>
        </div>
        <div class="searchBox fR">
             <form name="form_sreach" action="/Search/index" method="get" >
             	<!--[if !IE]><!--> <input class="txt_kw" name="word" type="text" value="" autocomplete="off" placeholder="搜索你感兴趣的" /><!--<![endif]-->
                <!--[if gte IE 10]> <input class="txt_kw" name="txt_kw" type="text" value="" autocomplete="off" placeholder="搜索你感兴趣的" /> <![endif]-->
                <!--[if lt IE 10]> <input class="txt_kw" name="txt_kw" type="text" autocomplete="off"  value="搜索你感兴趣的" /> <![endif]-->
             	<input class="sreach" name="btn_sreach" type="submit" value="" >
               <!-- <input type="hidden" id="txt_header_url" value="http://www.51oscar.com" > -->
             <input type="hidden" name="__hash__" value="1a7b8d124a13e916d796d421491a3008_5ef87df6681205baa8aa5226221ea573" /></form>
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

<link type="text/css" rel="stylesheet" href="/comment/css/review.css" />
<!--主体部分 s-->
<section class="mainWp wp clearfix">
	<section class="reviListL leftWp fL">
		
        <section class="location">
        	当前位置：<a href="http://www.51oscar.com" title="首页" target="_blank" ><img src="picture/location_ind.png" alt="大众影评网" style="vertical-align:text-bottom;" /></a>><a href="http://www.51oscar.com/review.html" title="影评" target="_blank" >影评</a>>&nbsp;影评列表
        </section>
        @foreach($Movie_comments as $v)

        <!--影评列表 s-->
        <section id="newsListBox" class="reviListBox">
        <dl class="reviItem clearfix">
				<dt><a href="/home/review/{{$v->id}}.html" title="" target="_blank"><img class="lazyImg imgBorder" src="{{$v->movie_detail->image}}" data-src="{{$v->movie_detail->image}}" width="110px" height="150px" alt="猩球崛起3：终极之战 " /></a></dt>                
                <dd>
                	<p class="t"><a href="/home/review/{{$v->id}}.html" title="《{{$v->movie_detail->name}}》 影评：{{$v->title}}">《{{$v->movie_detail->name}}》 影评：{{$v['title']}}</a></p>
                    <p><a href="/someone/428105.html" target="_blank">{{$v->user->username}}</a>&nbsp;&nbsp;发表于：<time>{{$v->created_at}}</time></p>
                    <p class="txt">{{$v->content}}</p>
                    <!-- <p>&nbsp; &nbsp; 万众期待，《猩球崛起3》终于姗姗来迟，和前两部一样的是，本部影片继续沿用猿类与人类斗争这一主题。影片继续《猩球崛起2》的故事主线，向观众讲述了凯撒及猿类在人类病毒感染毁灭这场灾难中的遭遇。</p><p>&n  -->
                </dd>
            </dl>	
        </section>        
        <!--影评列表 e-->
        @endforeach
       <section class="loadNextPage">
            <img src="picture/loading.gif" alt="loading" />加载中……
        </section>
               <div class="pagination">
        	   &nbsp;<span class='current'>1</span>&nbsp;<a href='/review/table/p/2.html'>&nbsp;2&nbsp;</a>&nbsp;<a href='/review/table/p/3.html'>&nbsp;3&nbsp;</a>&nbsp;<a href='/review/table/p/4.html'>&nbsp;4&nbsp;</a>&nbsp;<a href='/review/table/p/5.html'>&nbsp;5&nbsp;</a>   <a href='/review/table/p/2.html'>下一页</a>   <span style="color:black;">第 1/1131 页</span>        </div>	
    </section><!--leftWp e-->
    <aside class="rightWp fR">
        
        <section class="hotTalk">
            <div class="title clearfix">
                <i class="info icon"></i><a href="http://www.51oscar.com/forum.html" title="当前热议" target="_blank" >当前热议<em>>></em></a>
            </div>
            <div class="cont clearfix">
            	<ul>
                                </ul>
            </div>
        </section><!--当前热议 e-->
        
		<section class="hotMovie">
            <div class="title clearfix">
                <i class="movie icon"></i><a href="http://www.51oscar.com/movie/search/0_0_1_0.html" title="热映影片" target="_blank" >热映影片<em>>></em></a>
            </div>
            <div class="cont clearfix">
               <dl class="clearfix">
                    <dt>
                        <a href="/movie/39278.html" title="芳华 " target="_blank" >
                            <img class="lazyImg pic imgBorder" src="picture/59c33acd86ed5.jpg" data-src="picture/59c33acd86ed5.jpg" width="98" height="138" alt="芳华 " />
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
                            <img class="lazyImg pic imgBorder" src="picture/59c3397b4c6e5.jpg" data-src="picture/59c3397b4c6e5.jpg" width="98" height="138" alt="空天猎 " />
                        </a>
                    </dt>    
                    <dd>
                        <a class="t" href="/movie/39277.html" title="空天猎 " target="_blank" >空天猎 </a>
                        <p>导演：<em>李晨</em></p>
                        <p>类型：<em>动作/剧情/战...</em></p>
                        <a class="trailer" href="javascript:viod(0);" title="预告片" data-trailer="">预告片<i></i></a>                        
                    </dd>
                </dl><dl class="clearfix">
                    <dt>
                        <a href="/movie/39276.html" title="缝纫机乐队 " target="_blank" >
                            <img class="lazyImg pic imgBorder" src="picture/59c318412247e.jpg" data-src="picture/59c318412247e.jpg" width="98" height="138" alt="缝纫机乐队 " />
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
                            <img class="lazyImg pic imgBorder" src="picture/59c0a983d72c3.jpeg" data-src="picture/59c0a983d72c3.jpeg" width="98" height="138" alt="遗忘空间 " />
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
                            <img class="lazyImg pic imgBorder" src="picture/59c0a6cb6ed46.jpg" data-src="picture/59c0a6cb6ed46.jpg" width="98" height="138" alt="疯狂旅程 " />
                        </a>
                    </dt>    
                    <dd>
                        <a class="t" href="/movie/39274.html" title="疯狂旅程 " target="_blank" >疯狂旅程 </a>
                        <p>导演：<em>龙野</em></p>
                        <p>类型：<em>喜剧/剧情</em></p>
                        <a class="trailer" href="javascript:viod(0);" title="预告片" data-trailer="">预告片<i></i></a>                        
                    </dd>
                </dl>            
            </div>
        </section><!--热映影片 e-->        

    
    </aside><!--rightWp e-->

</section>
<!--主体部分 e-->
<script type="text/javascript">
	
var p=1;//第一次滚动，显示第二页的数据
var mark_croll=1;//除了第一页之外，其他页都不滚动
if(mark_croll != 0){
	$(window).bind("scroll",function(){
		if($(document).scrollTop() + $(window).height() > $("#newsListBox").offset().top+$("#newsListBox").height()&& p<3){
			setTimeout(loadNews,100);
		}
	});
}

function loadNews(){
	$(".loadNextPage").css("display","display");
	var lock = false;
	if(lock) return; 
	if(p>=3) return;//只滚动两次
	$.ajax({
		url:'/Review/ajaxList/p/'+p,
		type:'get',
		dataType:'json',
		async: false,
		success:function(data){
			lock=true;
			var data=data.data;
	      	if(data==null){
	    		$(".loadNextPage").css("display","none");
             	return false;
	      	}
		  	var newElements = '';
		    for(var i=0;i<data.length;i++){
			     var d=new Date(data[i].m_time * 1000);  
				 var date_f=formatDate(d);
				 newElements +='<dl class="reviItem clearfix">'+
							   '<dt><a href="/movie/'+data[i].movie_id+'.html" target="_blank"><img class="lazyImg imgBorder" src="'+data[i].img_poster+'"data-src="'+data[i].img_poster+'" width="110px" height="150px" alt="'+data[i].movie_name+'"/></a></dt>'+                
							   '<dd>'+
							   '<p class="t"><a href="/review/'+data[i].id+'.html" title="《'+data[i].movie_name+'》 影评：'+data[i].title+'">《'+data[i].movie_name+'》 影评：'+data[i].title+'</a></p>'+
							   '<p><a href="/someone/'+data[i].user_id+'.html" target="_blank">'+data[i].nick_name+'</a>&nbsp;&nbsp;发表于：<time>'+date_f+'</time></p>'+
							   '<p class="txt">'+data[i].content+'</p>'+
							   '</dd>'+
							   '</dl>';
							  
            }
            $("#newsListBox").append(newElements);
			p+=1;
				if(p>=3){
					$(".loadNextPage").css("display","none");
					$(".pagination span:first").remove();
				    $('.pagination a:first').before("<a href='/review/table/p/1.html'>&nbsp;1&nbsp;</a>");
					$("[href='/review/table/p/3.html']").addClass('current');
				}
		},
	   
	   complete:function(){
		   lock = false;
	   } 	
	});
}

//在js中时间戳转换成时间
	function formatDate(now){     
 		              var   year=now.getFullYear();     
 		              var   month=now.getMonth()+1;     
 		              var   date=now.getDate();     
 		              var   hour=now.getHours();     
 		              var   minute=now.getMinutes();    
 		              return   year+"-"+month+"-"+date+"   "+hour+":"+minute;     
 		              }

//播放热映影片预告片
$(".trailer").click(function(){		
	showSwf.show($(this).attr("data-trailer"));	
});

	scrollFixed(".hotMovie","#footer",40);

</script>

<!-- 隐藏信息  --> 
<input type='hidden' id='txt_header_url' value="http://www.51oscar.com" />
<input type='hidden' id='txt_public_home' value="/Public/Home/" module="Review" ie_page="/movie/ie.html"  baidu_page="/movie/baidu.html" qvod_page="/movie/qvod.html" gvod_page="/movie/gvod.html"  loading_page="/movie/loading.html" />
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
    
</div>
</body>
</html>