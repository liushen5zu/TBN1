<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>{{$Movie_comments->movie_detail['name']}} 影评:{{$Movie_comments->title}}</title>
<meta name="description" content="猩球崛起3：终极之战 影评:回归感情——终极圆满,大众影评网影评频道猩球崛起3：终极之战 观后感,&nbsp; &nbsp; 万众期待，《..." />
<link rel="shortcut icon" href="/ueditor/Images/favicon.ico" />
<!-- <script src="http://libs.baidu.com/jquery/2.1.4/jquery.min.js"></script> -->
<script type="text/javascript" src="/ueditor/js/jquery-1.7.2.min.js"></script>
<link rel="stylesheet" href="/ueditor/css/style.css">
<link rel="stylesheet" href="/ueditor/css/comment.css">
<script type="text/javascript" src="/ueditor/js/Common.js"></script>

<!-- <script type="text/javascript" src="/ueditor/js/jquery-1.7.2.min.js"></script> -->
<!--[if lt IE 9]>
	<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
<link type="text/css" rel="stylesheet" href="/ueditor/css/common.css" />
<style type="text/css">
	.nav a.hotNavItem{position:relative;color: #f60;}
	.nav a.hotNavItem.on{position:relative;color: #fff;}
	.nav a.hotNavItem:hover{color: #fff;}
	.nav a.hotNavItem span{position: absolute;top: 0;right: 16px;width:24px;height:16px;background: url(images/hot.png) no-repeat;}
  .user_say{ width:660px; margin-top:20px;}
.user_say .faceDiv{ width:658px; height:30px; background-color:#FFF; border:1px solid #ddd; -moz-border-radius:5px 5px 0px 0px; -ms-border-radius:5px 5px 0px 0px; -o-border-radius:5px 5px 0px 0px; -webkit-border-radius:5px 5px 0px 0px; border-radius:5px 5px 0px 0px;}
.user_say .faceDiv .div_comment_qq_inner{ display:block; width:17px; height:18px; border:1px solid #FFF; background-position:-141px -5px; margin:4px 0 0 5px; font-size:0; text-indent:-9999em;}
.user_say .faceDiv .div_comment_qq_inner:hover{ border:1px solid #ddd;}
.user_say .qqFace{ padding:8px; border:1px solid #ddd; background-color:#FFF; margin:10px 0 0 5px;}
.user_say .qqFace table td{padding:2px;}
.user_say .qqFace table td img{cursor:pointer;border:1px #fff solid;}
.user_say .qqFace table td img:hover{border:1px #0066cc solid;}
.user_say .commContent{ display:block; padding:5px; width:648px; max-width:648px; height:130px; border:1px solid #ddd; border-top:none; outline:none;}
.user_say .btnDiv{ margin-top:5px;}
.user_say .hint{ font-size:12px; color:#aaa;}
.user_say .comment_btn{ float:right; display:block; width:78px; height:26px; line-height:26px; text-align:center; color:#666; border:1px solid #ddd; -moz-border-radius:5px; -ms-border-radius:5px; -o-border-radius:5px; -webkit-border-radius:5px; border-radius:5px;}
.user_say .comment_btn:hover{ text-decoration:none; color:#f60; border:1px solid #f60;}
/*	.nav a.hotNavItem span{position: absolute;top: -3px;right: 10px;font-size: 12px;background: orange;color: #fff;line-height: 14px;height: 14px;padding: 0 2px;border-radius: 4px;}
	.nav a.hotNavItem span:before{content:"";position: absolute;bottom: -5px;left: 5px;width:0;height:0;border-bottom: 5px solid transparent;border-left: 5px solid orange;}*/
	/*.nav a.hotNavItem span:after{content:"";position: absolute;bottom: -5px;left: 1px;width:0;height:0;border-bottom: 5px solid transparent;border-left: 5px solid #fff;}*/
</style>
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
        	<a href="#" title="大众影评网" target="_self"><img src="/ueditor/picture/logo.png" alt="大众影评网" /></a>
        </div>
        <div class="searchBox fR">
             <form name="form_sreach" action="/Search/index" method="get" >
             	<!--[if !IE]><!--> <input class="txt_kw" name="word" type="text" value="" autocomplete="off" placeholder="搜索你感兴趣的" /><!--<![endif]-->
                <!--[if gte IE 10]> <input class="txt_kw" name="txt_kw" type="text" value="" autocomplete="off" placeholder="搜索你感兴趣的" /> <![endif]-->
                <!--[if lt IE 10]> <input class="txt_kw" name="txt_kw" type="text" autocomplete="off"  value="搜索你感兴趣的" /> <![endif]-->
             	<input class="sreach" name="btn_sreach" type="submit" value="" >
               <!-- <input type="hidden" id="txt_header_url" value="http://www.51oscar.com" > -->
             <input type="hidden" name="__hash__" value="f56fa1f74f6a6772432fe573c0a820fc_ef409a9871333c52b9862c6b5493d065" /></form>
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
	}else if(/.com\/home\/review/.test(curr_url)){
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

<link type="text/css" rel="stylesheet" href="/ueditor/css/review.css" />

<!--主体部分 s-->
<section class="mainWp wp clearfix">
	<section class="reviDetL leftWp fL">

		<section class="location">
        	当前位置：<a href="/" title="首页" target="_blank" >影评王国</a>><a href="/home/review" title="影评" target="_blank" >影评</a>>《{{$Movie_comments->movie_detail['name']}}》影评：{{$Movie_comments->title}}        </section>
		<section class="titleBox">
        	<div class="cont">
            	<h1>{{$Movie_comments->title}}</h1>
                <div class="titB clearfix">
                	<span><a href="http://www.51oscar.com/someone/428105.html" target="_blank">{{$Movie_comments->user->username}}</a>&nbsp;&nbsp;评论&nbsp;&nbsp;<a href="/movie/39246.html" target="_blank">《{{$Movie_comments->title}}》</a>&nbsp;&nbsp;{{$Movie_comments->created_at}}</span>
                    <div class="bshare-custom fR"><div class="bsPromo bsPromo2"></div><i>分享：</i><a title="分享到新浪微博" class="bshare-sinaminiblog"></a><a title="分享到微信" class="bshare-weixin"></a><a title="分享到QQ空间" class="bshare-qzone"></a><a title="分享到腾讯微博" class="bshare-qqmb"></a><a title="分享到朋友网" class="bshare-qqxiaoyou"></a><a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a></div>
                </div>
            </div>   
        </section>        
		<section class="newCont">
			<p><p>{{$Movie_comments->content}}</p></p>
			<!-- <p>&nbsp; &nbsp; 万众期待，《猩球崛起3》终于姗姗来迟，和前两部一样的是，本部影片继续沿用猿类与人类斗争这一主题。影片继续《猩球崛起2》的故事主线，向观众讲述了凯撒及猿类在人类病毒感染毁灭这场灾难中的遭遇。</p><p>&nbsp; &nbsp;《猩球崛起》这部些列电影，一直在传递着一个信息，那就是人类和猿类，尤其是具有高智商的猿类，不可能安稳和平相处，双方都惧怕着，唯恐被对方毁灭。矛盾斗争是存在的，但是从小和人类就结下缘分的凯撒面对人类时又有着熟悉的情感，所以影片中也时刻在强调着一个理念，那就是人类和猿类是可以和平共处的，也应该和平共处。</p><p>&nbsp; &nbsp; 从《猩球1》，凯撒宁愿率众猿人逃离实验室到达森林，也不愿意与人类为敌；到《猩球2》为了能让人类生存下去，选择信任，帮助人类修理水坝；在再到最后《猩球3》凯撒最终选择撤离，放弃报复，远离人类，电影中这一系列的内容，都在向观众传达着一个理念，那就是世间万物都应和平相处，不应让争斗成为主题。</p><p>&nbsp; &nbsp; &nbsp;我们经常强调，人类是爱好和平的，其实在本部影片中，非人类的生物又何尝不是爱好和平的呢。所以把握住这个主旨，电影中的一系列斗争也就成了陪衬，成了衬托。</p><p>&nbsp; &nbsp; 《猩球3》之所以被称为终极之战，最主要的原因还在于，本部影片是以凯撒率领的猿类要在矛盾争斗中撤离，远离人类。因为只有这样才能双方共存，但是在这个过程中却发生了很令凯撒愤怒的悲剧，最终爆发终极之战。虽然爆发战争，但是主题依然没有改变，最终凯撒带领猿类撤离，算是实现了双方的和平。</p><p>&nbsp; &nbsp; 《猩球3》中的感情戏份要远比前两部多，从一开始的凯撒家庭亲情，到一直围绕在凯撒心中对科巴的感情，还有对小女孩的感激之情，以及最后对猿类叛徒的情感，都在刻画着着凯撒的内心情感世界。所以说本部影片，说是终极之战，其实也是凯撒情感的终极爆发，面对着种种矛盾，面对着爱恨情仇，凯撒最终需要一场战争来洗净生化自身的情感，让自己在对待人类和族类时有着更高层次的认识，而不是像以前一样局限于自身的身份位置。</p><p>&nbsp; &nbsp; &nbsp;在这场战争中，猿类猴类获得了圆满的收场，人类也为自己的行为买单，总体来说，终极之战让双方都获得了各自的圆满结局。电影以感情最终结局，和平理念得以贯穿，并最终升华成终极圆满。</p><p><br/></p><p><br/></p> -->
		</section>
        <section class="nextAndPrev">
               <span class="fl">上一篇：<a href="javascript:void(0);" title="无" target="_self">无</a></span>
               <span class="fr">下一篇：<a href="/review/12998.html" title="情节和场景" target="_self">情节和场景</a></span>
        </section>  

      	<section class="user_sayBox" id="user_sayBox">
          	<input type="hidden" value="1" id="shareText"><!--评论类型-->
            <input type="hidden" value="12994" id="wenzhang"><!--文章id-->
             <input type="hidden" value="39246" id="movie_id"><!--文章id-->
            <input type="hidden" value="428105" id="wen_puserid"><!--文章id-->
             @if(!session::has('username'))
             <div class="title clearfix">
                <i class="info icon"></i>网友评论<span>要评论须要先<a href="/home/login" title="登录"  target="_blank">登录</a>或者<a href="http://www.51oscar.com/login/regist.html" title="注册"  target="_blank">注册</a></span></div>
           <!--评论编辑输入框 s-->
            <div class="commDiv">   
            @else
            <div class="title clearfix">
                <i class="info icon"></i>网友评论</div>
           <!--评论编辑输入框 s-->
            <div class="commDiv">   
            <!--评论编辑输入框 s-->
            <div class="user_say">
                <div class="faceDiv"><a id="div_comment_qq" class="div_comment_qq_inner icon">表情</a></div>
                <form method="get" action="/home/review/{{$Movie_comments->id}}/comment" id="user_say_comment">
                  
                    <textarea id="commContent" class="commContent" name="content"></textarea>
                    <input type="hidden" id="comment_id" value="1058">
                    <div class="btnDiv clearfix">
                        <span class="hint">最多能输入480个字</span>
                        <button class="comment_btn" onclick="Comments.movieComment()">发布</button>
                    </div>
                    <input type="hidden" name="__hash__" value="d1908a4b2c87790a22b17ae3aa17cf53_eed40fae41097da3785fdb426d299c8b"><input type="hidden" name="__hash__" value="560b50165f7b0364a0021af058806e8a_bbe2725a880d4155f8212e8fe6ede256"></form>
            </div>
            @endif
            <!--评论编辑输入框 e-->
        </div>
            <!--评论编辑输入框 e-->
        @foreach($rview as $v)
         <!--评论列表 s-->
<!--         <div class="commentAll"> -->
    <!--评论区域 begin-->
    <!-- <div class="reviewArea clearfix">
        <textarea class="content comment-input" placeholder="Please enter a comment&hellip;" onkeyup="keyUP(this)"></textarea>
        <a href="javascript:;" class="plBtn">评论</a>
    </div> -->
    <!--评论区域 end-->
    <!--回复区域 begin-->
    <div class="comment-show">
        <div class="comment-show-con clearfix">
            <div class="comment-show-con-img pull-left"><img src="{{$v->user->image}}" alt=""></div>
            <div class="comment-show-con-list pull-left clearfix">
                <div class="pl-text clearfix">
                    <a href="#" class="comment-size-name">{{$v->user->username}} : </a>
                    <span class="my-pl-con">&nbsp;{{$v->content}}</span>
                </div>
                @if(!session::has('username'))
                @else
                <div class="date-dz">
                    <span class="date-dz-left pull-left comment-time">{{$v->created_at}}</span>
                    <div class="date-dz-right pull-right comment-pl-block">
                        <a href="/home/review/{{$v->id}}/destroy" class="removeBlock">删除</a>
                        <a href="javascript:;" class="date-dz-pl pl-hf hf-con-block pull-left">回复</a>
                        <span class="pull-left date-dz-line">|</span>
                        <a href="javascript:;" class="date-dz-z pull-left"><i class="date-dz-z-click-red"></i>赞 (<i class="z-num">{{$v->zan}}</i>)</a>
                    </div>
                </div>
                @endif
                <div class="hf-list-con"></div>
            </div>
        </div>
        @foreach($reply as $v)
        <div class="comment-show-con clearfix" style="padding-left: 40px">
         <div class="comment-show-con-img pull-left"><img src="" alt=""></div>
            <div class="comment-show-con-list pull-left clearfix">
                <div class="pl-text clearfix">
                    <a href="#" class="comment-size-name">123 : </a>
                    <span class="my-pl-con">&nbsp;123</span>
                    <div class="date-dz-right pull-right comment-pl-block">
                        <a href="/home/review/{{$v->id}}/destroy" class="removeBlock">删除</a>
                        <a href="javascript:;" class="date-dz-pl pl-hf hf-con-block pull-left">回复</a>
                        <span class="pull-left date-dz-line">|</span>
                    </div>
                </div>
              </div>
          </div>
        @endforeach
    </div>
    <!--回复区域 end-->
<!-- </div> -->
         <!--评论列表 e-->
        @endforeach
        </section><!--网友评论 e-->
<script type="text/javascript" src="/ueditor/js/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="/ueditor/js/jquery.flexText.js"></script>
<!--textarea高度自适应-->
<script type="text/javascript">
    $(function () {
        $('.content').flexText();
    });
</script>
<!--textarea限制字数-->
<!-- <script type="text/javascript">
    function keyUP(t){
        var len = $(t).val().length;
        if(len > 139){
            $(t).val($(t).val().substring(0,140));
        }
    }
</script> -->
<!--点击评论创建评论条-->
<!-- <script type="text/javascript">
    $('.commentAll').on('click','.plBtn',function(){
        //获取输入内容
        var oSize = $(this).siblings('.flex-text-wrap').find('.comment-input').val();
        console.log(oSize);
        //动态创建评论模块
        oHtml = '<div class="comment-show-con clearfix"><div class="comment-show-con-img pull-left"><img src="images/header-img-comment_03.png" alt=""></div> <div class="comment-show-con-list pull-left clearfix"><div class="pl-text clearfix"> <a href="#" class="comment-size-name">David Beckham : </a> <span class="my-pl-con">&nbsp;'+ oSize +'</span> </div> <div class="date-dz"> <span class="date-dz-left pull-left comment-time">'+now+'</span> <div class="date-dz-right pull-right comment-pl-block"><a href="javascript:;" class="removeBlock">删除</a> <a href="javascript:;" class="date-dz-pl pl-hf hf-con-block pull-left">回复</a> <span class="pull-left date-dz-line">|</span> <a href="javascript:;" class="date-dz-z pull-left"><i class="date-dz-z-click-red"></i>赞 (<i class="z-num">666</i>)</a> </div> </div><div class="hf-list-con"></div></div> </div>';
        if(oSize.replace(/(^\s*)|(\s*$)/g, "") != ''){
            $(this).parents('.reviewArea ').siblings('.comment-show').prepend(oHtml);
            $(this).siblings('.flex-text-wrap').find('.comment-input').prop('value','').siblings('pre').find('span').text('');
        }
    });
</script> -->
<!--点击回复动态创建回复块-->
<script type="text/javascript">
    $('.comment-show').on('click','.pl-hf',function(){
        //获取回复人的名字
        var fhName = $(this).parents('.date-dz-right').parents('.date-dz').siblings('.pl-text').find('.comment-size-name').html();
        //回复@
        var fhN = '回复@'+fhName;
        //var oInput = $(this).parents('.date-dz-right').parents('.date-dz').siblings('.hf-con');
        var fhHtml = '<div class="hf-con pull-left"><form action="/home/review/{{$Movie_comments->id}}/reply" method="get">{{ csrf_field() }}<textarea class="content comment-input hf-input" placeholder="" onkeyup="keyUP(this)" name="content"></textarea><input type="hidden" name="rview_id" value="{{$v->id}}"/><button class="hf-pl">评论</button></form></div>';
        //显示回复
        if($(this).is('.hf-con-block')){
            $(this).parents('.date-dz-right').parents('.date-dz').append(fhHtml);
            $(this).removeClass('hf-con-block');
            $('.content').flexText();
            $(this).parents('.date-dz-right').siblings('.hf-con').find('.pre').css('padding','6px 15px');
            //console.log($(this).parents('.date-dz-right').siblings('.hf-con').find('.pre'))
            //input框自动聚焦
            $(this).parents('.date-dz-right').siblings('.hf-con').find('.hf-input').val('').focus().val(fhN);
        }else {
            $(this).addClass('hf-con-block');
            $(this).parents('.date-dz-right').siblings('.hf-con').remove();
        }
    });
</script>
<!--评论回复块创建-->
<script type="text/javascript">
    $('.comment-show').on('click','.hf-pl',function(){
        //获取输入内容
        var oHfVal = $(this).siblings('.flex-text-wrap').find('.hf-input').val();
        console.log(oHfVal)
        var oHfName = $(this).parents('.hf-con').parents('.date-dz').siblings('.pl-text').find('.comment-size-name').html();
        var oAllVal = '回复@'+oHfName;
        // if(oHfVal.replace(/^ +| +$/g,'') == '' || oHfVal == oAllVal){

        // }else {
        //     $.getJSON("json/pl.json",function(data){
        //         var oAt = '';
        //         var oHf = '';
        //         $.each(data,function(n,v){
        //             delete v.hfContent;
        //             delete v.atName;
        //             var arr;
        //             var ohfNameArr;
        //             if(oHfVal.indexOf("@") == -1){
        //                 data['atName'] = '';
        //                 data['hfContent'] = oHfVal;
        //             }else {
        //                 arr = oHfVal.split(':');
        //                 ohfNameArr = arr[0].split('@');
        //                 data['hfContent'] = arr[1];
        //                 data['atName'] = ohfNameArr[1];
        //             }

        //             if(data.atName == ''){
        //                 oAt = data.hfContent;
        //             }else {
        //                 oAt = '回复<a href="#" class="atName">@'+data.atName+'</a> : '+data.hfContent;
        //             }
        //             oHf = data.hfName;
        //         });

                // var oHtml = '<div class="all-pl-con"><div class="pl-text hfpl-text clearfix"><a href="#" class="comment-size-name">我的名字 : </a><span class="my-pl-con">'+oAt+'</span></div><div class="date-dz"> <span class="date-dz-left pull-left comment-time">'+now+'</span> <div class="date-dz-right pull-right comment-pl-block"> <a href="javascript:;" class="removeBlock">删除</a> <a href="javascript:;" class="date-dz-pl pl-hf hf-con-block pull-left">回复</a> <span class="pull-left date-dz-line">|</span> <a href="javascript:;" class="date-dz-z pull-left"><i class="date-dz-z-click-red"></i>赞 (<i class="z-num">666</i>)</a> </div> </div></div>';
                // oThis.parents('.hf-con').parents('.comment-show-con-list').find('.hf-list-con').css('display','block').prepend(oHtml) && oThis.parents('.hf-con').siblings('.date-dz-right').find('.pl-hf').addClass('hf-con-block') && oThis.parents('.hf-con').remove();
            // });
        // }
    });
</script>
<!-- 点赞 -->
<script type="text/javascript">
    $('.comment-show').on('click','.date-dz-z',function(){
        var zNum = $(this).find('.z-num').html();
        if($(this).is('.date-dz-z-click')){
            zNum--;
            $(this).removeClass('date-dz-z-click red');
            $(this).find('.z-num').html(zNum);
            $(this).find('.date-dz-z-click-red').removeClass('red');
        }else {
            zNum++;
            $(this).addClass('date-dz-z-click');
            $(this).find('.z-num').html(zNum);
            $(this).find('.date-dz-z-click-red').addClass('red');
        }
    })
</script>
    </section> <!--leftWp e-->
    <aside class="rightWp fR">
        
        <section class="hotTalk"> 
     <div class="title clearfix"> 
      <i class="info2 icon"></i>
      <a href="/forum.html" title="当前热议" target="_blank">当前热议<em>&gt;&gt;</em></a> 
     </div> 

     @foreach($activity as $v)
     <div class="cont clearfix"> 
      <ul> 
        <li><font style="color:red">热</font>
        <a href="/home/activity/{{$v->id}}.html">{{$v->title}}</a>
          
        </li>
      </ul> 
     </div> 
     @endforeach
      


    </section><!--当前热议 e-->
        @include('layouts.home.re')
		<!--热映影片 e-->        

    
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

<script type="text/javascript" charset="utf-8">
    window.UEDITOR_HOME_URL = "/Public/ueditor/";  //UEDITOR_HOME_URL、config、all这三个顺序不能改变
</script>

<script type="text/javascript" src="/ueditor/js/ueditor.config_son.js"></script>
<script type="text/javascript" src="/ueditor/js/ueditor.all.min.js"></script>
<script type="text/javascript" src="/ueditor/js/comment.js"></script>
<script type="text/javascript" src="/ueditor/js/jquery.qqface.js"></script>
<script  src="/ueditor/js/jquery.pagination.js"></script>
<script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=2&amp;lang=zh"></script><script type="text/javascript" charset="utf-8" src="js/bsharec0.js"></script>

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