<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="description" content="">
<link rel="stylesheet" href="/ueditor/css/personal_common_5.css" />
<link rel="stylesheet" href="/ueditor/css/blue_5.css">
<script type="text/javascript" src="/ueditor/js/jquery-1.7.2.min_10.js"></script>
<script type="text/javascript" src="/ueditor/js/jquery.cookie_9.js"></script>
<script src="/ueditor/js/artdialog_5.js"></script>
<script src="/ueditor/js/artdialog.plugins_5.js"></script>
<script type="text/javascript" src="/ueditor/js/common2_10.js"></script>
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
        <a href="http://www.51oscar.com" class="logo"><img src="/ueditor/picture/person_logo_6.png"></a>
        <div class="menu_c">
			<a href="http://www.51oscar.com">首页</a>
            <a href="http://www.51oscar.com/forum.html">贴吧</a>
            <a href="http://www.51oscar.com/review.html">影评</a>
            <a href="http://www.51oscar.com/movie.html">电影</a>
            <a href="http://www.51oscar.com/album.html">影集</a>
            <a href="http://www.51oscar.com/activity.html">活动</a>

            <!---<a href="#" class="current">首页</a><a href="#">资讯</a>
            <a href="#">电影</a><a href="#">影集</a>
            <a href="#">话题</a><a href="#">排行榜</a>-->
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
			<input type="hidden" name="__hash__" value="119a11edab267bad51ebf2a0acb26b2e_a06450a8bbd8b7677c4f226c904e58e7" /></form>
			
            <input type="text" class="sear_input" onFocus="focusInputEle(this)" onBlur="blurInputEle(this)" defaultVal="搜影评/找人" value="搜影评/找人">
            <input type="button" class="sear_butt">--->
        </div>
		<style>
			.login_before{line-height:50px;width:80px;float:right;}
			.login_before a{color:white;}
		</style>
		  
		<div class="user_info nav_title">
			<div class="after_landing" >
				<span>欢迎您，</span>
				<div id="u_info"> 
					<a href="/personal/index.html" class="u_name" title="">{{Session('username')}}</a>
					<img src="{{Session('image')}}" width="27" height="27" alt="" />
					<div class="user_more">
						<div class="m_line1"></div>
						<ul class="u_detail">
							<li><span title=""><a href="/home/myCenter" title="">{{Session('username')}}</a></span></li>
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
<link rel="stylesheet" href="/ueditor/css/common_7.css" />
<link rel="stylesheet" href="/ueditor/css/base_6.css">
<link rel="stylesheet" href="/ueditor/css/setting_3.css"> 
<style type="text/css">
.addtable td{ padding:8px 0px;}
.addtable th{border-bottom:1px dotted #dddddd; text-align:left; font-weight:normal; padding-bottom:8px;}
.box_title{height: 28px;}
.box_title a{border-bottom: 0px;}
.write_m dl{margin-top: 0px;}
.write_m dd{ width:548px;}
</style>

<script type="text/javascript" src="/ueditor/js/jquery.js"></script>
<script type="text/javascript" src="/ueditor/js/jquery.form_1.js"></script>
<script type="text/javascript" src="/ueditor/js/user.js"></script>


<div class="top_solid">    
</div>
<div class="page_bg">
    <div class="u_content">
        <div class="u_left">
            <div class="write_m">
                <dl>
                    <dt>
                         <p><img src="{{Session('image')}}" width="87" height="87"></p>
                    </dt>
                    <dd class="w_line11" style="line-height:24px;">
                       <p>欢迎您，</p> 
                       <p>您的账户余额：0 元    您可以 <a href="#" style="color:#0a8cd2;">申请提现</a> 或者 <a href="http://www.51oscar.com/zhongchou.html" style="color:#0a8cd2;">支持项目</a></p>                  
                    </dd>
                </dl>
          </div>
           <div style="clear:both; overflow:hidden;"></div> 
            <div class="box_title" style="margin-top:20px;">
                    <div class="title_left">
                        <a href="#" class="a_cur">发起的项目</a>
                        <a href="/personal/mySupport">支持的项目》</a>
                    </div>
             </div>
		  
            <div class="discuss_box">
             <table border="0" style="width:100%; border:none; color:#423009;" class="addtable">
                  <tr>
                    <th width="39%">项目名称</th>
                    <th width="19%">已支持资金</th>
                    <th width="14%">剩余天数</th>
                    <th width="13%">状态</th>
                    <th width="15%">操作</th>
                  </tr>
				              </table>     
			 <div class="pagination">
                       
             </div>    
            </div>
			
			
        </div>
        <div class="u_right">
            <dl class="info_detail">
                <dt>
                    <div class="heard_img"><img src="{{Session('image')}}" width="87" height="87"></div>
                    <a href="/home/jiben">编辑资料</a>
                </dt>
                <dd class="info_d_1"><a href="#"></a></dd>
                <dd class="info_d_2">
                    <div>
                        <p><a href="/personal/toMyCreation">{{$al_num}}</a></p>
                        <p> <span>影集</span> </p>
                    </div>
                    <div>
                        <p><a href="/personal/friendlist">{{$focus_num}}</a></p>
                        <p><span>关注</span></p>
                    </div>
                    <div style="border-right:none">
                        <p><a href="/personal/friendList/type/2">{{$focus_fsen}}</a></p>
                        <p> <span>粉丝</span></p>
                    </div>
                </dd>
                <dd class="info_d_3">
                    <span>我的勋章</span>
                    <ul class="med_ul">
                       							<li class="medal_list"><img src="/ueditor/picture/50d51a3af05a7_1.jpg" width="24" height="22"></li>
								
								<li class="medal_list"><img src="/ueditor/picture/50d51a0b1f9c3_1.jpg" width="24" height="22"></li>
								
								<li class="medal_list"><img src="/ueditor/picture/50d51a2bb642e_1.jpg" width="24" height="22"></li>
								
								<li class="medal_list"><img src="/ueditor/picture/50d51a16e6157_1.jpg" width="24" height="22"></li>
								
								<li class="medal_list"><img src="/ueditor/picture/50d51a479a2ff_1.jpg" width="24" height="22"></li>
								
									
                    </ul>
                    
                    <a href="#" class="medal_more "><span>更多</span><b class="a_trig2"></b></a>
                </dd>
            </dl>
            <div style="clear:both"></div>
            <div class="right_ad">
                <a href="#"><img src="/ueditor/picture/pk_06.jpg"></a>
            </div>
            <div class="right_hot">
                <div class="right_title"><span>热门影评</span></div>
                <ul class="movie_list">
                   	<li><a href="http://www.51oscar.com/review/12994.html" title="回归感情——终极圆满">·回归感情——终极圆满</a></li><li><a href="http://www.51oscar.com/review/12992.html" title="《鲛珠传》------华丽的空洞">·《鲛珠传》------华丽的空洞</a></li><li><a href="http://www.51oscar.com/review/12991.html" title="那他妈是从前">·那他妈是从前</a></li><li><a href="http://www.51oscar.com/review/12990.html" title="《长城》-----中国元素插上好莱坞特效的翅膀">·《长城》-----中国元素插上好莱坞特效的翅膀</a></li><li><a href="http://www.51oscar.com/review/12983.html" title="没有突破的“美”行不通">·没有突破的“美”行不通</a></li><li><a href="http://www.51oscar.com/review/12973.html" title="了解了观众就是成功">·了解了观众就是成功</a></li><li><a href="http://www.51oscar.com/review/12965.html" title="战狼，我有一个从军的梦">·战狼，我有一个从军的梦</a></li><li><a href="http://www.51oscar.com/review/12961.html" title="心理罪影评">·心理罪影评</a></li><li><a href="http://www.51oscar.com/review/12957.html" title="《战狼2》中国电影新力量 向“小鲜肉”告别">·《战狼2》中国电影新力量 向“小鲜肉”告别</a></li><li><a href="http://www.51oscar.com/review/12956.html" title="早在1981年就有一个叫《南昌起义》的一个电影，《建军大业》不过是狗尾续貂罢了">·早在1981年就有一个叫《南昌起义》的一个电影，《建军大业》不过是狗尾续貂罢了</a></li>                </ul>
            </div>
            <div class="right_hot">
                <div class="right_title"><span>本周热门影集</span></div>
                <div class="hot_warp">
                    <ul id="hot-list">     
                      						<li>
                            <div class="moves_b2">
                                <span>1</span>
                                <a href="http://www.51oscar.com/album/1861.html">永不过时的20部励志影片</a>
                                <em class="down">上升</em>
                            </div>
                            <dl class="moves_b">
                                <dt><em>1</em><a href="http://www.51oscar.com/album/1861.html"><img src="/ueditor/picture/1483595144_3.jpg" width="47" height="63" /></a></dt>
                                <dd>
                                    <p><a href="http://www.51oscar.com/album/1861.html">这20部经典影片中，几乎有一半是根据真实...</a></p>
                                    <em class="up">上升</em>
                                </dd>
                            </dl>                        
                        </li>
						<li>
                            <div class="moves_b2">
                                <span>2</span>
                                <a href="http://www.51oscar.com/album/1904.html">9部萌出一脸血的真人动画电影</a>
                                <em class="down">上升</em>
                            </div>
                            <dl class="moves_b">
                                <dt><em>2</em><a href="http://www.51oscar.com/album/1904.html"><img src="/ueditor/picture/1438324680_3.jpg" width="47" height="63" /></a></dt>
                                <dd>
                                    <p><a href="http://www.51oscar.com/album/1904.html">各种萌物萌宠出没，从头到尾，萌你一脸血！...</a></p>
                                    <em class="up">上升</em>
                                </dd>
                            </dl>                        
                        </li>
						<li>
                            <div class="moves_b2">
                                <span>3</span>
                                <a href="http://www.51oscar.com/album/252.html">大怪物电影，给你心惊肉跳的感觉</a>
                                <em class="down">上升</em>
                            </div>
                            <dl class="moves_b">
                                <dt><em>3</em><a href="http://www.51oscar.com/album/252.html"><img src="/ueditor/picture/1434357170_3.jpg" width="47" height="63" /></a></dt>
                                <dd>
                                    <p><a href="http://www.51oscar.com/album/252.html">大只怪物来啦，要的就是心惊肉跳的感觉，给...</a></p>
                                    <em class="up">上升</em>
                                </dd>
                            </dl>                        
                        </li>
						<li>
                            <div class="moves_b2">
                                <span>4</span>
                                <a href="http://www.51oscar.com/album/1777.html">爱上他们，爱上传奇！</a>
                                <em class="down">上升</em>
                            </div>
                            <dl class="moves_b">
                                <dt><em>4</em><a href="http://www.51oscar.com/album/1777.html"><img src="/ueditor/picture/1431421154_3.jpg" width="47" height="63" /></a></dt>
                                <dd>
                                    <p><a href="http://www.51oscar.com/album/1777.html">那些漫威与DC超级英雄们，那些平行宇宙之...</a></p>
                                    <em class="up">上升</em>
                                </dd>
                            </dl>                        
                        </li>
						<li>
                            <div class="moves_b2">
                                <span>5</span>
                                <a href="http://www.51oscar.com/album/1858.html">《速7》来袭 那些年我们爽过的飙车电影</a>
                                <em class="down">上升</em>
                            </div>
                            <dl class="moves_b">
                                <dt><em>5</em><a href="http://www.51oscar.com/album/1858.html"><img src="/ueditor/picture/1428912091_3.jpg" width="47" height="63" /></a></dt>
                                <dd>
                                    <p><a href="http://www.51oscar.com/album/1858.html">飚车系列电影《速度与激情7》上映首日票房...</a></p>
                                    <em class="up">上升</em>
                                </dd>
                            </dl>                        
                        </li>
						<li>
                            <div class="moves_b2">
                                <span>6</span>
                                <a href="http://www.51oscar.com/album/1709.html">针尖对麦芒--银幕上10场难忘的对手戏</a>
                                <em class="down">上升</em>
                            </div>
                            <dl class="moves_b">
                                <dt><em>6</em><a href="http://www.51oscar.com/album/1709.html"><img src="/ueditor/picture/1427168827_3.jpg" width="47" height="63" /></a></dt>
                                <dd>
                                    <p><a href="http://www.51oscar.com/album/1709.html">优秀的独角戏的表演事例太多，列举时必将难...</a></p>
                                    <em class="up">上升</em>
                                </dd>
                            </dl>                        
                        </li>
						<li>
                            <div class="moves_b2">
                                <span>7</span>
                                <a href="http://www.51oscar.com/album/1820.html">2015年3月新片观影指南</a>
                                <em class="down">上升</em>
                            </div>
                            <dl class="moves_b">
                                <dt><em>7</em><a href="http://www.51oscar.com/album/1820.html"><img src="/ueditor/picture/1425376872_3.jpg" width="47" height="63" /></a></dt>
                                <dd>
                                    <p><a href="http://www.51oscar.com/album/1820.html">一年之中最重要的假期结束后，3月也开始了...</a></p>
                                    <em class="up">上升</em>
                                </dd>
                            </dl>                        
                        </li>
						<li>
                            <div class="moves_b2">
                                <span>8</span>
                                <a href="http://www.51oscar.com/album/1809.html">第35届伦敦影评人协会奖获奖电影</a>
                                <em class="down">上升</em>
                            </div>
                            <dl class="moves_b">
                                <dt><em>8</em><a href="http://www.51oscar.com/album/1809.html"><img src="/ueditor/picture/1423032443_2.jpg" width="47" height="63" /></a></dt>
                                <dd>
                                    <p><a href="http://www.51oscar.com/album/1809.html">英国当地时间1月18日，由理查德·林克莱...</a></p>
                                    <em class="up">上升</em>
                                </dd>
                            </dl>                        
                        </li>
						<li>
                            <div class="moves_b2">
                                <span>9</span>
                                <a href="http://www.51oscar.com/album/1791.html">2015年1月新片观影指南</a>
                                <em class="down">上升</em>
                            </div>
                            <dl class="moves_b">
                                <dt><em>9</em><a href="http://www.51oscar.com/album/1791.html"><img src="/ueditor/picture/1420335894_3.jpg" width="47" height="63" /></a></dt>
                                <dd>
                                    <p><a href="http://www.51oscar.com/album/1791.html">本月影片颇有看点，《重返20岁》有国民萌...</a></p>
                                    <em class="up">上升</em>
                                </dd>
                            </dl>                        
                        </li>
						<li>
                            <div class="moves_b2">
                                <span>10</span>
                                <a href="http://www.51oscar.com/album/1787.html">国民女神Angelababy杨颖电影集</a>
                                <em class="down">上升</em>
                            </div>
                            <dl class="moves_b">
                                <dt><em>10</em><a href="http://www.51oscar.com/album/1787.html"><img src="/ueditor/picture/de5872dd4609416999931a65d763d9af.gif" width="47" height="63" /></a></dt>
                                <dd>
                                    <p><a href="http://www.51oscar.com/album/1787.html">Angelababy最近参加了大热综艺节...</a></p>
                                    <em class="up">上升</em>
                                </dd>
                            </dl>                        
                        </li>
						      
                    </ul>
                </div>
            </div>
            <div class="right_hot">
                <div class="right_title"><span>活跃会员</span></div> 
               					
            </div>
        </div>
        <div style="clear:both"></div>
    </div>
</div>
<script type="text/javascript">
    function DY_scroll(wraper,prev,next,img,speed,or)
    {   
        var wraper = $(wraper);
        var prev = $(prev);
        var next = $(next);
        var img = $(img).find('ul');
        var w = img.find('li').outerWidth(true);
        var s = speed;
        next.click(function()
                            {
                                img.animate({'margin-left':-w},function()
                                                                        {
                                                                            img.find('li').eq(0).appendTo(img);
                                                                            img.css({'margin-left':0});
                                                                            });
                                });
        prev.click(function()
                            {
                                img.find('li:last').prependTo(img);
                                img.css({'margin-left':-w});
                                img.animate({'margin-left':0});
                                });
        if (or == true)
        {
            ad = setInterval(function() { next.click();},s*1000);
            wraper.hover(function(){clearInterval(ad);},function(){ad = setInterval(function() { next.click();},s*1000);});
        }
    }
    DY_scroll('.hot_movie','.prev','.next','.hot_box',3,true);// true为自动播放，不加此参数或false就默认不自动
</script>
<script type="text/javascript">
     function show(){
        $('#yp_input').css({ display:"block"});
        }
    function hide(){
        $('#yp_input').css({ display:"none"});
        }
</script>
<!-- 隐藏信息  --> 
<input type='hidden' id='txt_header_url' value="http://www.51oscar.com" />
<input type='hidden' id='txt_public_home' value="/Public/Home/" module="Personal" ie_page="/movie/ie.html"  baidu_page="/movie/baidu.html" qvod_page="/movie/qvod.html" gvod_page="/movie/gvod.html"  loading_page="/movie/loading.html" />
<input type='hidden' id='txt_edit_user' value="/personal/toUserEditShare.html"/>
<div class='hide' id='hide_album_msg' index="/album/toAlbumDatail.html/album_id/" edit="/album/toAlbumEditImg.html/album_id/" movie="/album/toAlbumEditMovie.html/album_id/"></div>
<div class='hide' id="hide_comment_type" movie="/movie/toMovieInfo.html/id/" album="/album/toAlbumDatail.html/album_id/" topic="/topic/topicView.html/id/"></div>
<div class='hide' id='hide_user_info' some="http://www.51oscar.com/someone/index/id/" session_id="428230" index="/personal/index.html" msg_url="http://www.51oscar.com/Personal/msgList" edit_url="http://www.51oscar.com/Personal/toUserEditShare"></div>
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