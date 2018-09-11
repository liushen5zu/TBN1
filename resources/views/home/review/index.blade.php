<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>影评|最新电影评论网站_大众影评网</title>
<meta name="description" content="大众影评网影评频道,聚集了专业的电影评论人士,资深影评人,发表热门电影影评,特约影评人分享最新电影评论,交流电影观后感." />
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
        	<a href="http://www.51oscar.com" title="大众影评网" target="_self"><img src="picture/logo.png" alt="大众影评网" /></a>
        </div>
        <div class="searchBox fR">
             <form name="form_sreach" action="/Search/index" method="get" >
             	<!--[if !IE]><!--> <input class="txt_kw" name="word" type="text" value="" autocomplete="off" placeholder="搜索你感兴趣的" /><!--<![endif]-->
                <!--[if gte IE 10]> <input class="txt_kw" name="txt_kw" type="text" value="" autocomplete="off" placeholder="搜索你感兴趣的" /> <![endif]-->
                <!--[if lt IE 10]> <input class="txt_kw" name="txt_kw" type="text" autocomplete="off"  value="搜索你感兴趣的" /> <![endif]-->
             	<input class="sreach" name="btn_sreach" type="submit" value="" >
               <!-- <input type="hidden" id="txt_header_url" value="http://www.51oscar.com" > -->
             <input type="hidden" name="__hash__" value="e8b4ade489e82db8a136f8fbd40b158d_5cc8b68d27ef903842b8b2d06a368eb9" /></form>
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

<link type="text/css" rel="stylesheet" href="/comment/css/review.css" />
<!--主体部分 s-->
<section class="mainWp wp clearfix">
	<section class="leftWp fL">
    	<!--焦点幻灯片 s-->
        <section class="picFocus">
            <div class="bd">
                <ul>
                                 </ul>
            </div>
            <div class="hd">
                <ul>
                                 </ul>
            </div>
        </section>
    	
        <!--焦点幻灯片 e-->
        @foreach($Movie_comments as $v)
        <!--特约影评人 s-->
        <section class="inviReview">
            <div class="title">
                特约影评人
            </div>
			<div class="cont clearfix">
            	<div class="reviewer fL">
            		<p class="t"><a href="/someone/2630.html" target="_blank" title="" ><img class="imgBorder" src="picture/143067855084783.jpg" alt="游礁"></a><a class="c_f60" href="/someone/2630.html" target="_blank" title="" >游礁</a></p>
                    <p class="b">贡献&nbsp;&nbsp;发表了<a class="c_f60" href="javascript:viod(0);" target="_blank" title="" >42</a>条精华影评&nbsp;&nbsp;<a class="c_f60" href="/someone/2630.html" target="_blank" title="" >去看看>></a></p>
                </div>
            	<div class="latestRevi fR">
            		<dl>
                    	<dt>TA最近影评</dt>
                    	<dd class="clearfix"><span class="fL">评论电影: <a class="c_f60" href="/movie/38930.html" target="_blank" title="罗曼蒂克消亡史 " >《罗曼蒂克消亡...》</php></a></span><span class="fR"><a href="/review/12661.html" target="_blank" title="" >《罗曼蒂克消亡史》：40分...</a></span></dd><dd class="clearfix"><span class="fL">评论电影: <a class="c_f60" href="/movie/38931.html" target="_blank" title="长城 " >《长城 》</php></a></span><span class="fR"><a href="/review/12660.html" target="_blank" title="" >《长城》：73分，视觉特效...</a></span></dd><dd class="clearfix"><span class="fL">评论电影: <a class="c_f60" href="/movie/38917.html" target="_blank" title="血战钢锯岭 " >《血战钢锯岭 》</php></a></span><span class="fR"><a href="/review/12642.html" target="_blank" title="" >《血战钢锯岭》：94分。我...</a></span></dd>                   
                    </dl>
                </div>
                
            </div>
        </section>
        <!--特约影评人 e-->

        <!--新片影评 s-->
        <section class="newMovRevi">
             <div class="title clearfix">
                <a href="/home/review/table" title="新片影评" target="_self" >新片影评<em>>></em></a><a class="c_f60"  href="/home/login">我要写影评</a>
            </div>
            <div id="reviBox" class="cont clearfix">
            <dl class="reviItem clearfix">
                    <dt class="L fL">
                        <a href="/home/review/{{$v['id']}}.html" title="" target="_blank"><img class="lazyImg imgBorder" src="{{$v->user->image}}" data-src="{{$v->user->image}}" alt="没有杀伤力的板砖"></a>
                        <a class="c_f60" href="/someone/428105.html" title="" target="_blank">{{$v->user->username}}</a>
                    </dt>
                    <dd class="C fL">
                        <p class="t"><a href="/home/review/{{$v['id']}}.html" title="《{{$v->movie_detail['name']}}》影评：{{$v['title']}}">《{{$v->movie_detail['name']}}》影评：{{$v['title']}}</a></p>
                        <p>{{$v['content']}}</p>
                        <!-- <p>&nbsp; &nbsp; 万众期待，《猩球崛起3》终于姗姗来迟，和前两部一样的是，本部影片继续沿用猿类与人类斗争这一主题。影片继续《猩球崛起2》的故事主线，向观众讲述了凯撒及猿类在人类病毒感染毁灭这场灾难中的遭遇。</p><p>&n -->
                    </dd>
                    <dd class="R fR">
                        <a href="/home/review/{{$v['id']}}.html" title="" target="_blank"><img class="lazyImg" src="{{$v->movie_detail['image']}}" alt="猩球崛起3：终极之战 "></a>
                    </dd>                
                </dl>                
                <a href="/review/table.html" style="text-decoration:none">
                <div  id="moreRevi"  class="loadMore">
                                更多...
                </div>
                </a>  
            </div>
        <div class="pagination">
                </div>
        </section>
        @endforeach
        <!--新片影评 e-->

        <!--特约影评人 s-->
        
        <!--特约影评人 e-->

    </section><!--leftWp e-->
    <aside class="rightWp fR">
         <section class="boxOffice">
            <div class="title clearfix">
                <i class="bar icon"></i>电影票房
            </div>
            <div class="slideTxtBox">
                <div class="hd">
                    <ul class="clearfix"><li>内地</li><li>北美</li><li>香港</li></ul>
                </div>
                <div class="bd">
                    <ul class="clearfix">
                    <li><i class="t">1</i><a href="/movie/39203.html" title="赛尔号大电影6：圣者..." target="_blank" >赛尔号大电影6：...</a><span>¥9,370</span></li><li><i class="t">2</i><a href="/movie/39210.html" title="赛车总动员3：极速挑..." target="_blank" >赛车总动员3：极...</a><span>¥7,182</span></li><li><i class="t">3</i><a href="/movie/39208.html" title=" 极盗车神" target="_blank" > 极盗车神</a><span>¥6,463</span></li><li><i >4</i><a href="/movie/39177.html" title="战狼2" target="_blank" >战狼2</a><span>¥539,470</span></li><li><i >5</i><a href="/movie/39199.html" title="杀破狼·贪狼" target="_blank" >杀破狼·贪狼</a><span>¥44,046</span></li><li><i >6</i><a href="/movie/39201.html" title="地球：神奇的一天" target="_blank" >地球：神奇的一天</a><span>¥4,130</span></li><li><i >7</i><a href="/movie/39193.html" title="心理罪" target="_blank" >心理罪</a><span>¥28,205</span></li><li><i >8</i><a href="/movie/39209.html" title="星际特工：千星之城" target="_blank" >星际特工：千星之...</a><span>¥19,299</span></li><li><i >9</i><a href="/movie/39198.html" title="二十二" target="_blank" >二十二</a><span>¥16,325</span></li><li><i >10</i><a href="/movie/39200.html" title="十万个冷笑话2" target="_blank" >十万个冷笑话2</a><span>¥11,055</span></li>                    </ul>                
                    <ul class="clearfix" style="display:none;">
                    <li><i class="t">1</i><a href="/movie/39229.html" title="蜘蛛侠：英雄归来" target="_blank" >蜘蛛侠：英雄归来</a><span>$31,893</span></li><li><i class="t">2</i><a href="/movie/39223.html" title="敦刻尔克" target="_blank" >敦刻尔克</a><span>$17,247</span></li><li><i class="t">3</i><a href="/movie/39243.html" title=" 嗨翻姐妹行" target="_blank" > 嗨翻姐妹行</a><span>$10,816</span></li><li><i >4</i><a href="/movie/39237.html" title=".安娜贝尔2：诞生" target="_blank" >.安娜贝尔2：诞...</a><span>$7,821</span></li><li><i >5</i><a href="/movie/39239.html" title="表情奇幻冒险" target="_blank" >表情奇幻冒险</a><span>$7,659</span></li><li><i >6</i><a href="/movie/39238.html" title="王牌保镖" target="_blank" >王牌保镖</a><span>$3,982</span></li><li><i >7</i><a href="/movie/39241.html" title=".神偷联盟" target="_blank" >.神偷联盟</a><span>$1,490</span></li><li><i >8</i><a href="/movie/39240.html" title="猎凶风河谷" target="_blank" >猎凶风河谷</a><span>$1,003</span></li><li><i >9</i><a href="/movie/38991.html" title="了不起的菲丽西" target="_blank" >了不起的菲丽西</a><span>$473</span></li><li><i >10</i><a href="/movie/39242.html" title="龙之诞生" target="_blank" >龙之诞生</a><span>$270</span></li>                    </ul>                
                    <ul class="clearfix" style="display:none;">
                     <li><i class="t">1</i><a href="/movie/39227.html" title="敦刻尔克 " target="_blank" >敦刻尔克 </a><span>HK$2,435</span></li><li><i class="t">2</i><a href="/movie/39237.html" title="安娜贝尔2：诞生" target="_blank" >安娜贝尔2：诞生</a><span>HK$1,019</span></li><li><i class="t">3</i><a href="/movie/39236.html" title="军舰岛" target="_blank" >军舰岛</a><span>HK$1,009</span></li><li><i >4</i><a href="/movie/39116.html" title="哆啦A梦：大雄的南极..." target="_blank" >哆啦A梦：大雄的...</a><span>HK$815</span></li><li><i >5</i><a href="/movie/39239.html" title="表情奇幻冒险" target="_blank" >表情奇幻冒险</a><span>HK$800</span></li><li><i >6</i><a href="/movie/39235.html" title="天才枪手" target="_blank" >天才枪手</a><span>HK$577</span></li><li><i >7</i><a href="/movie/39238.html" title="王牌保镖" target="_blank" >王牌保镖</a><span>HK$457</span></li><li><i >8</i><a href="/movie/39161.html" title="悟空传" target="_blank" >悟空传</a><span>HK$305</span></li><li><i >9</i><a href="/movie/38991.html" title="了不起的菲丽西" target="_blank" >了不起的菲丽西</a><span>HK$167</span></li><li><i >10</i><a href="/movie/39228.html" title="银魂 " target="_blank" >银魂 </a><span>HK$122</span></li>                    </ul>                
                </div>
            </div>
        </section><!--电影票房 e-->
        
        <!--热映影片 s-->  
		<section class="hotMovie">
            <div class="title clearfix">
                <i class="movie icon"></i><a href="http://www.51oscar.com/movie/search/0_0_1_0.html" title="热映影片" target="_blank" >热映影片<em>>></em></a>
            </div>
            <div class="cont clearfix">
                <dl class="clearfix">
                    <dt>
                        <a href="/movie/39278.html" title="北美票房连冠" target="_blank" >
                            <img class="lazyImg pic imgBorder" src="picture/59c33acd86ed5.jpg" data-src="picture/59c33acd86ed5.jpg" width="98" height="138" alt="芳华 " />
                        </a>
                    </dt>    
                    <dd>
                        <a class="t" href="/movie/39278.html" title="北美票房连冠" target="_blank" >芳华 </a>
                        <p>导演：<em>冯小刚</em></p>
                        <p>类型：<em>剧情/战争</em></p>
                        <a class="trailer" href="javascript:viod(0);" title="预告片" data-trailer="">预告片<i></i></a>                        
                    </dd>
                </dl><dl class="clearfix">
                    <dt>
                        <a href="/movie/39277.html" title="北美票房连冠" target="_blank" >
                            <img class="lazyImg pic imgBorder" src="picture/59c3397b4c6e5.jpg" data-src="picture/59c3397b4c6e5.jpg" width="98" height="138" alt="空天猎 " />
                        </a>
                    </dt>    
                    <dd>
                        <a class="t" href="/movie/39277.html" title="北美票房连冠" target="_blank" >空天猎 </a>
                        <p>导演：<em>李晨</em></p>
                        <p>类型：<em>动作/剧情/战...</em></p>
                        <a class="trailer" href="javascript:viod(0);" title="预告片" data-trailer="">预告片<i></i></a>                        
                    </dd>
                </dl><dl class="clearfix">
                    <dt>
                        <a href="/movie/39276.html" title="北美票房连冠" target="_blank" >
                            <img class="lazyImg pic imgBorder" src="picture/59c318412247e.jpg" data-src="picture/59c318412247e.jpg" width="98" height="138" alt="缝纫机乐队 " />
                        </a>
                    </dt>    
                    <dd>
                        <a class="t" href="/movie/39276.html" title="北美票房连冠" target="_blank" >缝纫机乐队 </a>
                        <p>导演：<em>大鹏</em></p>
                        <p>类型：<em>喜剧/音乐</em></p>
                        <a class="trailer" href="javascript:viod(0);" title="预告片" data-trailer="">预告片<i></i></a>                        
                    </dd>
                </dl><dl class="clearfix">
                    <dt>
                        <a href="/movie/39275.html" title="北美票房连冠" target="_blank" >
                            <img class="lazyImg pic imgBorder" src="picture/59c0a983d72c3.jpeg" data-src="picture/59c0a983d72c3.jpeg" width="98" height="138" alt="遗忘空间 " />
                        </a>
                    </dt>    
                    <dd>
                        <a class="t" href="/movie/39275.html" title="北美票房连冠" target="_blank" >遗忘空间 </a>
                        <p>导演：<em>韩汶青</em></p>
                        <p>类型：<em>恐怖/悬疑</em></p>
                        <a class="trailer" href="javascript:viod(0);" title="预告片" data-trailer="">预告片<i></i></a>                        
                    </dd>
                </dl><dl class="clearfix">
                    <dt>
                        <a href="/movie/39274.html" title="北美票房连冠" target="_blank" >
                            <img class="lazyImg pic imgBorder" src="picture/59c0a6cb6ed46.jpg" data-src="picture/59c0a6cb6ed46.jpg" width="98" height="138" alt="疯狂旅程 " />
                        </a>
                    </dt>    
                    <dd>
                        <a class="t" href="/movie/39274.html" title="北美票房连冠" target="_blank" >疯狂旅程 </a>
                        <p>导演：<em>龙野</em></p>
                        <p>类型：<em>喜剧/剧情</em></p>
                        <a class="trailer" href="javascript:viod(0);" title="预告片" data-trailer="">预告片<i></i></a>                        
                    </dd>
                </dl>            </div>
        </section>
        <!--热映影片 e--> 
        
        <!-- 右侧广告s -->
        <section class="right_ad">
        	<div>
        	<a href="" title="" target="_blank"><img src="" alt="" width="260" high="430" /></a>
            </div>
        </section>
        <!-- 右侧广告e -->

    
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
              <td valign="top"><input type="text" class="txt_input" id="txt_header_email" name="" onblur="Common_new.isEmail();">
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



<script type="text/javascript" src="/comment/js/jquery.superslide.2.1.1.js"></script>
<script type="text/javascript">
	//幻灯片
	jQuery(".picFocus").slide({titCell:".hd ul li", mainCell:".bd ul",effect:"leftLoop",autoPlay:true,delayTime:500,interTime:4000,vis:1});
	//电影票房
	jQuery(".slideTxtBox").slide({effect:"fold"});
	
	
	//加载影评
	$("#moreRevi").click(function(){
		$("#moreRevi").html('<img src="picture/loading.gif" alt="loading" />加载中...');
		setTimeout(moreReview,200);
		
	});
	var p=0;
	function moreReview(){ 
		$.ajax({
				url:'js/json/review.js',
				type:'get',
				dataType:'json',
				async: false,
				success:function(data){
					//if(p>=1) return;
					
					if(!data){
						$("#moreRevi").html('没有更多了');
						setTimeout(function(){
							$("#moreRevi").slideUp("slow");
						},1000);
						return;
					}
				   var newElements = '';
				   for(var i=0;i<data.length;i++){

						 newElements +='<dl class="reviItem clearfix">'+
											'<dt class="L fL">'+
												'<a href="'+data[i].userHref+'" title="'+data[i].userName+'" target="_blank"><img class="lazyImg imgBorder" src="'+data[i].userLogo+'" data-src="'+data[i].userLogo+'" alt="'+data[i].userName+'"></a>'+
												'<a class="c_f60" href="'+data[i].userHref+'" title="'+data[i].userName+'" target="_blank">'+data[i].userName+'</a>'+
											'</dt>'+                
											'<dd class="C fL">'+
												'<p class="t"><a href="'+data[i].href+'" title="'+data[i].title+'">'+data[i].title+'</a></p>'+
												'<p>'+data[i].intro+'</p>'+
											'</dd>'+
											'<dd class="R fR">'+
												'<a href="'+data[i].movieHref+'" title="'+data[i].movieName+'" target="_blank"><img class="lazyImg" src="'+data[i].posters+'" data-src="'+data[i].posters+'" alt="'+data[i].movieName+'"></a>'+
											'</dd>'+
										'</dl>';       	
	 
	
					}

					$("#reviBox").before(newElements);
					p+=1;
					$("#moreRevi").html('更多...');
					//$("#moreRevi").css("display","none");
					
				}, //success end	
				error:function(){
					$("#moreRevi").html('加载异常，重新点击加载更多...');
				}
			
		})
	}

	//播放预告片
	$(".trailer").click(function(){
			showSwf.show($(this).attr("data-trailer"));	
	});

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
    <script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fb333171377f6fc60e48165d7fa43110b' type='text/javascript'%3E%3C/script%3E"));
</script>
</div>
</body>
</html>