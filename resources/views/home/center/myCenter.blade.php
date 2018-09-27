<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我的主页</title>
<meta name="description" content="我的主页">
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
        <a href="/" class="logo"><img src="/ueditor/picture/person_logo_6.png"></a>
        <div class="menu_c">
			<a href="/">首页</a>
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
			<input type="hidden" name="__hash__" value="3b13cd1cedb89efbf563d8cd7ff42d1f_c8d3aebe11b613f18cd2fc91a0c20cd8" /></form>
			
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
<link rel="stylesheet" href="/ueditor/css/base_6.css">
<style>
#ajaxGetMovieName {
width: 245px;
}
</style>
<!--<script type="text/javascript" charset="utf-8">
    window.UEDITOR_HOME_URL = "/Public/Home/ueditor/";  //UEDITOR_HOME_URL、config、all这三个顺序不能改变
</script>
<script type="text/javascript" src="/ueditor/js/ueditor.config_2.js"></script>
<script type="text/javascript" src="/ueditor/js/ueditor.all.min_1.js"></script>-->
<script type="text/javascript" charset="utf-8">
    window.UEDITOR_HOME_URL = "/Public/ueditor/";  //UEDITOR_HOME_URL、config、all这三个顺序不能改变
</script>
<script type="text/javascript" src="/ueditor/js/ueditor.config_2.js"></script>
<script type="text/javascript" src="/ueditor/js/ueditor.all.min_1.js"></script>
<script type="text/javascript" src="/ueditor/js/dy_scroll_1.js"></script>
<script type="text/javascript" src="/ueditor/js/jquery.ocupload-1.1.2.packed_3.js"></script>
<script type="text/javascript" src="/ueditor/js/jquery.qqface_1.js"></script>
<script type="text/javascript" src="/ueditor/js/jquery.pagination_1.js"></script>
<!--<script type="text/javascript" src="/ueditor/js/json_1.js"></script>-->
<script type="text/javascript" src="/ueditor/js/personal_user_3.js"></script>
<script type="text/javascript" src="/ueditor/js/personal_taggle.js"></script>
<script type="text/javascript" src="/ueditor/js/person_comment_1.js"></script>
<script type="text/javascript">
    var editor = UE.getEditor('myEditor');
</script>
<script type="text/javascript">
/*显示即将上映和最近热播电影函数**/
function getMovieList(data){
	if(!data){
		return '';
	}
	var dataObj  = $.parseJSON(data);
	var dlength = dataObj.length;
	var str = '<ul>';
	for(i=0;i<dlength;i++){
		var img_poster = dataObj[i].img_poster;
		var movie_id = dataObj[i].movie_id;
		var movie_name = dataObj[i].name;
		var url = "http://www.51oscar.com/movie/"+movie_id+".html";
		str += '<li>';
        str += '<a target="_blank" href="'+url+'" title="'+movie_name+'"><img src="'+img_poster+'"  width="128" height="171"  alt="'+movie_name+'"/></a>' ;
		str += '<a target="_blank" href="'+url+'" title="'+movie_name+'">'+movie_name+'</a>';
		str += '</li>'; 
	}
	str +='</ul>';
	$('.hot_box').html(str);
	DY_scroll('.hot_movie','.prev','.next','.hot_box',3,false);// true为自动播放，不加此参数或false就默认不自动
}
	

$(function(){
	/*最近热播和即将上映切换**/
	var list_hot = '[{"movie_id":"39278","name":"\u82b3\u534e ","img_poster":"\/Uploads\/Movie\/Poster\/59c33acd86ed5.jpg","china_release_time":"2017-09-30"},{"movie_id":"39277","name":"\u7a7a\u5929\u730e ","img_poster":"\/Uploads\/Movie\/Poster\/59c3397b4c6e5.jpg","china_release_time":"2017-09-29"},{"movie_id":"39276","name":"\u7f1d\u7eab\u673a\u4e50\u961f ","img_poster":"\/Uploads\/Movie\/Poster\/59c318412247e.jpg","china_release_time":"2017-09-29"},{"movie_id":"39275","name":"\u9057\u5fd8\u7a7a\u95f4 ","img_poster":"\/Uploads\/Movie\/Poster\/59c0a983d72c3.jpeg","china_release_time":"2017-09-22"},{"movie_id":"39274","name":"\u75af\u72c2\u65c5\u7a0b ","img_poster":"\/Uploads\/Movie\/Poster\/59c0a6cb6ed46.jpg","china_release_time":"2017-09-22"},{"movie_id":"39273","name":"\u8bf7\u52ff\u9760\u8fd1 ","img_poster":"\/Uploads\/Movie\/Poster\/59c0a568cb37e.jpg","china_release_time":"2017-09-22"},{"movie_id":"39272","name":"\u5a18\u5b50\u519b\u4f20\u5947 ","img_poster":"\/Uploads\/Movie\/Poster\/59c47acd7492b.jpg","china_release_time":"2017-09-22"},{"movie_id":"39271","name":"\u641e\u602a\u5947\u5999\u591c ","img_poster":"\/Uploads\/Movie\/Poster\/59c0a36d1f2c7.jpg","china_release_time":"2017-09-22"},{"movie_id":"39270","name":"\u8c1c\u8bc1 ","img_poster":"\/Uploads\/Movie\/Poster\/59c0a297697fe.jpg","china_release_time":"2017-09-22"},{"movie_id":"39269","name":"\u753b\u5ba4\u60ca\u9b42 ","img_poster":"\/Uploads\/Movie\/Poster\/59b9ec1e923c7.jpg","china_release_time":"2017-09-22"}]';
	var list_coming = 'null';
	/*初始化*/
	getMovieList(list_hot);
	$('.movie_title a').click(function(){
		type = $(this).attr('type');
		$(this).addClass('a_cur').siblings().removeClass('a_cur');
		if(type == 'hot'){
			getMovieList(list_hot);
		}else if(type == 'coming'){
			getMovieList(list_coming);
		}
		
	});
	
	
	itemIndex = PersonComment.pageSize;
	PersonComment.init();
	qqFace.init();
	/*切换随便看看等*/
	$('.nav_title_left a').click(function(){
		type = $(this).attr('type');
		$(this).addClass('a_cur').siblings().removeClass('a_cur');
		eval('PersonComment.'+type+'()');
	});
	/*长短影评的切换*/
	$('.longComment').click(function(){
		$("#yp_input").css("display",'block');
	});
	$('.shortComment').click(function(){
		$("#yp_input").css("display",'none');
	});
	/*placeHold**/
	$('.placeHold').blur(function(){
		val = $(this).val();
		defaultVal = $(this).attr('defaultVal');
		if(!val){
			$(this).val(defaultVal);
		}
	}).focus(function(){
		val = $(this).val();
		defaultVal = $(this).attr('defaultVal');
		if(val == defaultVal){
			$(this).val('');
		}
	});
	

function iscurnum(content){
	var write = $("input[name='write']:checked").val();
	if(write==1){
		$('#font_num').show();
		if(content.length > 200){
			//alert('短评字数不能超过200!');
			$('#myEditor').val(content.substring(0,200))
			return false;
		}
		var num=200-content.length;
		$('#font_num').html('你还可以输入'+num+'个字');
	}else{
		$('#font_num').hide();
	}
}

function onmore_content(_this){
	$(_this).toggleClass("add_con")
		$(_this).parents(".dis_line1").addClass("nexad")
		$(".nexad").next(".dis_line2").toggleClass("adddis_line2")
		$(_this).parents(".dis_line1").removeClass("nexad")
}
</script>


<input type="hidden" id="justSeeCount" value='3086'/>
<input type="hidden" id="countFriend" value=''/>
<input type="hidden" id="countOwn" value=''/>
<input type="hidden" id="countAboutSelf" value=''/>
<input type="hidden" id="movieDomain" value="http://www.51oscar.com/movie.html"/>
<input type="hidden" id="Domain" value="http://www.51oscar.com" >
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
<script src="https://cdn.bootcss.com/vue/2.5.16/vue.js"></script>
<script>

	$('jingyan').attr('')
</script>
<div class="page_bg">
    <div class="u_content">
    @section('content')
        <div class="u_left">
            <div class="hot_movie">
                <div class="box_title">
                    <div class="title_left movie_title">
                        <a href="javascript:;" class="a_cur" type="hot">正在热映</a>
                        <a href="javascript:;" type="coming">即将上映》</a>
                    </div>
                    <div class="title_right">
                        <span class="prev">上一个</span>
                        <span href="#" class="next">上一个</span>
                    </div>
                </div>
                <script type="text/javascript">
					$('.movie_title a').click(function(){
						var index = $(this).index();
						console.log(index);
						$(this).addClass('a_cur');
						$(this).siblings().removeClass('a_cur');
						if(index == 0){
						$('.hot').attr('style','display:block');
						$('.coming').attr('style','display:none');
						}else if(index == 1){
							$('.hot').attr('style','display:none');
							$('.coming').attr('style','display:block');
						}						
					});
				</script>
                <div class="hot_box">
                	<div class="hot">        
                		<section class="hotMovie wp">
						    <div class="picScroll">
						        <div class="hd">
						            <a class="next"></a>
						            <a class="prev"></a>
						        </div>
						        <div class="bd">
						            <ul class="picList clearfix">
						                @foreach($movie_time as $v)
						                <li>
						                    <a href="/home/{{$v['id']}}.html" title="{{$v['name']}}" target="_blank" >
						                        <img class="lazyImg imgBorder" src="{{$v['image']}}" width="148" height="208" alt="{{$v['name']}} " />
						                        <p>{{$v['name']}}<p>
						                    </a>
						                </li>
						                @endforeach
						            </ul>
						        </div>
						    </div>
						</section>  		
                	</div>
                	<div class="coming" style="display: none">
                		<section class="comingMovie hotMovie wp">
						    <div class="picScroll">
						        <div class="hd">
						            <a class="next"></a>
						            <a class="prev"></a>
						        </div>
						        <div class="bd">
						            <ul class="picList clearfix" >
						                @foreach($movie_recom as $v)
						                <li style="margin-left:12px">
						                    <a href="/home/{{$v['id']}}.html" title="{{$v['name']}}" target="_blank" >
						                        <img class="lazyImg imgBorder" src="{{$v['image']}}" width="148" height="208" alt="{{$v['name']}} " />
						                        <p>{{$v['name']}}<p>
						                    </a>
						                </li>
						                @endforeach
						            </ul>
						        </div>
						    </div>
						</section>

                	</div>
                </div>
            </div>
            <style type="text/css">
				#keyword{
					list-style: outside none none;z-index: 1000;background-color: #DDD;width: 245px;margin-left: 13px;opacity:0.5;border:1px solid #0C6AD4;display: none;
				}
				#keyword li{
					margin: 0px auto;
					height: 30px;
					width: 250px;
					line-height: 30px;
					padding:0px 20px;
				}
				#keyword li:hover{
					cursor: pointer;
					background-color:#fff;
				}
			</style>
            <div class="write_m">
                <div><img src="/ueditor/picture/write_07_1.jpg"></div>
                <dl>
                    <dt>
                        <p><img src="{{Session('image')}}" width="60" height="60"></p>
                    </dt>
                    <form action="/home/centercomment" method="get">
                    <dd class="w_line1">
                        <div class="search-index">
							<input name="movie_detail_id" value="{{ $params['name'] or '' }}" type="text" id='inp' placeholder="请输入电影名字关键字" autocomplete="off"/>	
							<span>热门影片：</span>
						<a href="javascript:;" class="click_hot_movie" movie_id="39278"  title="芳华 ">芳华 </a><a class="shugang">|</a><a href="javascript:;" class="click_hot_movie" movie_id="39277"  title="空天猎 ">空天猎 </a><a class="shugang">|</a><a href="javascript:;" class="click_hot_movie" movie_id="39276"  title="缝纫机乐队 ">缝纫机乐队 </a><a class="shugang">|</a>						<div id="ajaxGetMovieName"></div>		
						</div>
                    <ul id='keyword'>

					</ul>   				
                    </dd>
                    <dd class="w_line1" id="yp_input" style="display: block;"><input type="text"  class="placeHold commentTitle" placeholder="请输入标题"  name="title">
                    </dd>
                    <script type="text/javascript">
						$(function(){
							$('#inp').val('');  //首次加载先清除输入框内容
							//判断如果是点击的指定区域以外的区域则隐藏输入框
								$('body').bind('click', function(event) {
								    // IE支持 event.srcElement ， FF支持 event.target    
								    var evt = event.srcElement ? event.srcElement : event.target;    
								    if(evt.id == 'inp' ){
								    	return; // 如果是元素本身，则返回
								    } else{
								    	$('#keyword').css('display','none');
								    }
								});
							$('#inp').keyup(function(){
							var inpval=$(this).val();
							//如果文本框内没有值则不执行任何代码
							if(inpval==''){
								//当输入框中没有值时清除所有li并隐藏ul
								$("#keyword li").remove();
								$('#keyword').hide();
								return;
							}
							//如果有值默认get 方式提交
							$.ajax({
								url:'/home/search',
								data:{'keyword':inpval},
								success:function(data){
									//先清除之前所有的li记录
									$('#keyword li').remove();
									//遍历返回数据
									$.each(data,function(index,value){
										//console.log(value);
										//循环添加li节点
										$('#keyword').append("<li>"+value+"</li>");
									});
									//将遍历后的结果显示出来
									$('#keyword').css('display','block');
									//将鼠标此时放上的li中的值关联显示到输入框
									$('#keyword li').mousedown(function(){
										//console.log($(this).text());
										$('#inp').val($(this).text());
									});
								},
								dataType:'json',
								error:function(msg){
									console.log('400--返回有误');
								}
							});
						});
						});
					</script>




                    <dd class="w_line2">
                       <!-- <div class="texta_left"></div>-->						
                       <textarea name="content" style="min-height:120px;" onkeyup="iscurnum(this.value)" onfocus="iscurnum(this.value)" onkeydown="iscurnum(this.value)"  id="myEditor"></textarea>
                    </dd>
					<!---<div id="upload">
						<a href="javascript:;" class="expression" id='div_comment_qq'>表情</a>
                        <div id="div_comment_img2">
									<a href="javascript:;" class="show_img_tag hide">显示刚才的图片</a>
									<input type='button' id='btn_upload2' ajax_url="/personal/uploadImage" value='pic'/>
									<input type='hidden' id='hide_txt_img'/>
						</div>
						<div class="div-upload-show hide" >
							<img id="img_upload_show" src='picture/grey_1.gif'/><br/>	
						</div>
					</div>-->
                    <dd class="w_line3" style="text-align:right;width:400px;">
                        <button   class="submitComment" style="float:right;margin-left:20px;"></button>
                     <!--   <div id="div_comment_img2" style="float:right;margin-top:7px;margin-left:20px;">
									<a href="javascript:;" class="show_img_tag hide"></a>
									<input type='button' id='btn_upload2' ajax_url="/personal/uploadImage" value='图片'/>
									<input type='hidden' id='hide_txt_img'/>
						</div> -->
					<!--	<div style="float:right;line-height:30px;margin-left:20px;"><a href="javascript:;" class="expression" id='div_comment_qq'>表情</a></div> -->        
                       <div style="float:right;line-height:30px;margin-left:20px;"><font id="font_num" color="Red"></font></div>
                    </dd>
                    </form>
					<div class="div-upload-show hide" style="float:left;margin-left:50px;" >
							<br/>	
					</div>
                </dl>
            </div>
           <style type="text/css">
           	.nav_title_left .a_cur:last-child{
			border-right:none;
			}
           </style>
			<div style="clear:both;"></div>
            <div class="discuss_box">
                <div class="box_title">
                    <div class="title_left nav_title_left">
                        <a href="javascript:;" class="a_cur" type="justSee">随便看看</a>
                        <a href="javascript:;" type="ownComment">我的影评》</a>
                    </div>                    
                </div>
                
				<div class="comment">
					@foreach($movie_comment as $v)
					<dl class="item">
						<dt>
							<a href="#"><img src="{{$v->user->image}}" width="65" height="65"></a>
						</dt>		
						<dd class="dis_line1"><a href="/someone/id/428121">{{$v->user->username}}</a>评<a href="http://www.51oscar.com/movie/24694.html">#{{$v->movie_detail->name}}#</a><span>{{$v->created_at}}</span><em><a href="/home/review/{{$v->id}}.html" target="_blank" class="more_content">更多</a></em>	
						</dd>		
						<dd class="dis_line2">
						{{$v->content}}		
						</dd>		
						<dd class="dis_line3">
							<a href="javascript:;" class="useful" onclick="PostComment.clickGood(this)" user_id="428121" movie_id="24694" pid="12996" comment_id="12996" son_id="0">赞</a><span class="goodCount">0</span><a id="reply" class="date-dz-pl pl-hf hf-con-block pull-left">回复</a>
						</dd>		
						<div class="replay_c replay_content"><p>你的回应...</p><p class="content"><textarea></textarea></p><p style="text-align:right"><input type="button" value="加上去" user_id="428121" movie_id="24694" pid="12996" comment_id="12996" son_id="0" onclick="PostComment.clickPost(this);"></p></div><!--子评论--><div class="son_comment" id="son0"><div id="innerPage0" class="page_turn" data-pid="12996"></div></div>	
					</dl>	
					@endforeach
					@foreach($user as $val)
					<dl class="item ownComment" style="display: none">
						<dt>
							<a href="#"><img src="{{session('image')}}" width="65" height="65"></a>
						</dt>		
						<dd class="dis_line1"><a href="/someone/id/428121">{{session('username')}}</a>评<a href="http://www.51oscar.com/movie/24694.html">#
							@foreach($detail as $value)
							@if($value['id']==$val->movie_detail_id)
								{{$value->name}}
							@endif
							@endforeach
						#</a><span>{{$val->created_at}}</span><em><a href="/home/review/.html" target="_blank" class="more_content">更多</a></em>	
						</dd>		
						<dd class="dis_line2">
						{{$val->content}}
						</dd>		
						<dd class="dis_line3">
							<a href="javascript:;" class="useful" onclick="PostComment.clickGood(this)" user_id="428121" movie_id="24694" pid="12996" comment_id="12996" son_id="0">赞</a><span class="goodCount">0</span><a id="reply" class="date-dz-pl pl-hf hf-con-block pull-left">回复</a>
						</dd>		
						<div class="replay_c replay_content"><p>你的回应...</p><p class="content"><textarea></textarea></p><p style="text-align:right"><input type="button" value="加上去" user_id="428121" movie_id="24694" pid="12996" comment_id="12996" son_id="0" onclick="PostComment.clickPost(this);"></p></div><!--子评论--><div class="son_comment" id="son0"><div id="innerPage0" class="page_turn" data-pid="12996"></div></div>	
					</dl>
					@endforeach
				</div>
				<script type="text/javascript">
					//切换随便看看
					$('.nav_title_left a').click(function(){
						var index = $(this).index();
						console.log(index);
						$(this).addClass('a_cur');
						$(this).siblings().removeClass('a_cur');
						if(index == 0){
							$('.item').attr('style','display:block');
							$('.ownComment').attr('style','display:none');
						}else if(index == 1){
							$('.item').attr('style','display:none');
							$('.ownComment').attr('style','display:block');
						}
					});
				</script>               
	            <div class="page_turn" id="outerPage">	               
	            </div>
            </div>
        </div>
	@show
        <div class="u_right">
            <dl class="info_detail">
                <dt>
                    <div class="heard_img"><img src="{{Session('image')}}" width="87" height="87"></div>
                    <a href="/home/jiben">编辑资料</a>
                </dt>
                <dd class="info_d_1"><a href="#"></a><span class="degree" style="float:left">
					<!-- 显示等级 -->
					Lv{{floor($levels['experience']/50)}}
					
                </span><div class="jingyan" style="width:80px;height:10px;border:1px solid #000;float:left;margin-left:8px"><div style="width:30px;height:10px;background:#2bf666"></div></div></dd>
					
                <dd class="info_d_2">
                    <div>
						
                        <p><a href="/home/tomycreation">{{$al_num}}</a></p>
                        <p> <span>影集</span> </p>
                    </div>
                    <div>
                        <p><a href="/home/friendlist">{{$focus_num}}</a></p>
                        <p><span>关注</span></p>
                    </div>
                    <div style="border-right:none">
                        <p><a href="/personal/friendList/type/2">{{$focus_fsen}}</a></p>
                        <p> <span>粉丝</span></p>
                    </div>
                </dd>
				<dd>
					<p class="info_d_3">积分：<em>
					@if($levels==null)
					0
					@endif
					@if($levels!=null)
					{{$levels['integral']}}
					@endif
					</em> 经验：<em>
					@if($levels==null)
					0
					@endif
					@if($levels!=null)
					{{$levels['experience']}}
					@endif
					

					</em></p>
				</dd>
               <dd class="info_d_3">
                    <span>我的勋章</span>
                    <ul class="med_ul">
                    			@if($levels['experience']<=50 && $levels['experience']>=0)
								<li class="medal_list"><img src="/ueditor/picture/1.png" width="24" height="22"></li>
								@endif
								@if($levels['experience']>=100 && $levels['experience']<200)
								<li class="medal_list"><img src="/ueditor/picture/1.png" width="24" height="22"></li>
								<li class="medal_list"><img src="/ueditor/picture/2.png" width="24" height="22"></li>
								@endif
								@if($levels['experience']>=200 && $levels['experience']<400)
								<li class="medal_list"><img src="/ueditor/picture/1.png" width="24" height="22"></li>
								<li class="medal_list"><img src="/ueditor/picture/2.png" width="24" height="22"></li>
								<li class="medal_list"><img src="/ueditor/picture/3.png" width="24" height="22"></li>
								@endif
								@if($levels['experience']>=400 && $levels['experience']<800)
								<li class="medal_list"><img src="/ueditor/picture/1.png" width="24" height="22"></li>
								<li class="medal_list"><img src="/ueditor/picture/2.png" width="24" height="22"></li>
								
								<li class="medal_list"><img src="/ueditor/picture/3.png" width="24" height="22"></li>
								
								<li class="medal_list"><img src="/ueditor/picture/4.png" width="24" height="22"></li>
								@endif
								@if($levels['experience']>=800 && $levels['experience']<1600)
								<li class="medal_list"><img src="/ueditor/picture/1.png" width="24" height="22"></li>
								<li class="medal_list"><img src="/ueditor/picture/2.png" width="24" height="22"></li>
								
								<li class="medal_list"><img src="/ueditor/picture/3.png" width="24" height="22"></li>
								
								<li class="medal_list"><img src="/ueditor/picture/4.png" width="24" height="22"></li>
								<li class="medal_list"><img src="/ueditor/picture/5.png" width="24" height="22"></li>
								@endif
								@if($levels['experience']>=1600)
								<li class="medal_list"><img src="/ueditor/picture/1.png" width="24" height="22"></li>
								<li class="medal_list"><img src="/ueditor/picture/2.png" width="24" height="22"></li>
								
								<li class="medal_list"><img src="/ueditor/picture/3.png" width="24" height="22"></li>
								
								<li class="medal_list"><img src="/ueditor/picture/4.png" width="24" height="22"></li>
								<li class="medal_list"><img src="/ueditor/picture/5.png" width="24" height="22"></li>
								<li class="medal_list"><img src="/ueditor/picture/6.png" width="24" height="22"></li>
								@endif

								
								
									
                       
                    </ul>
                    
                    <a href="#" class="medal_more "><span>更多</span><b class="a_trig2"></b></a>
                </dd>
            </dl>
            <div style="clear:both"></div>
			           
            <div class="right_hot">
                <div class="right_title"><span>本周热门影评</span></div>
                <ul class="movie_list">
					
					<!-- <li><a href="http://www.51oscar.com/review.html/detail/12994" title="回归感情——终极圆满">·回归感情——终极圆满</a></li>-->
						<li><a href="http://www.51oscar.com/review/12994.html" title="《猩球崛起3：终极之战 》影评：回归感情——终极圆满">·《猩球崛起3：终极...》影评：回归感情——终极...</a></li><!-- <li><a href="http://www.51oscar.com/review.html/detail/12992" title="《鲛珠传》------华丽的空洞">·《鲛珠传》------华丽的空洞</a></li>-->
						<li><a href="http://www.51oscar.com/review/12992.html" title="《鲛珠传 》影评：《鲛珠传》------华丽的空洞">·《鲛珠传 》影评：《鲛珠传》---...</a></li><!-- <li><a href="http://www.51oscar.com/review.html/detail/12991" title="那他妈是从前">·那他妈是从前</a></li>-->
						<li><a href="http://www.51oscar.com/review/12991.html" title="《战狼2 》影评：那他妈是从前">·《战狼2 》影评：那他妈是从前</a></li><!-- <li><a href="http://www.51oscar.com/review.html/detail/12990" title="《长城》-----中国元素插上好莱坞特效的翅膀">·《长城》-----中国元素插上好莱坞特效的翅膀</a></li>-->
						<li><a href="http://www.51oscar.com/review/12990.html" title="《长城 》影评：《长城》-----中国元素插上好莱坞特效的翅膀">·《长城 》影评：《长城》----...</a></li><!-- <li><a href="http://www.51oscar.com/review.html/detail/12983" title="没有突破的“美”行不通">·没有突破的“美”行不通</a></li>-->
						<li><a href="http://www.51oscar.com/review/12983.html" title="《三生三世十里桃花 》影评：没有突破的“美”行不通">·《三生三世十里桃花...》影评：没有突破的“美”...</a></li><!-- <li><a href="http://www.51oscar.com/review.html/detail/12973" title="了解了观众就是成功">·了解了观众就是成功</a></li>-->
						<li><a href="http://www.51oscar.com/review/12973.html" title="《战狼2 》影评：了解了观众就是成功">·《战狼2 》影评：了解了观众就是成...</a></li><!-- <li><a href="http://www.51oscar.com/review.html/detail/12965" title="战狼，我有一个从军的梦">·战狼，我有一个从军的梦</a></li>-->
						<li><a href="http://www.51oscar.com/review/12965.html" title="《战狼2 》影评：战狼，我有一个从军的梦">·《战狼2 》影评：战狼，我有一个从...</a></li><!-- <li><a href="http://www.51oscar.com/review.html/detail/12961" title="心理罪影评">·心理罪影评</a></li>-->
						<li><a href="http://www.51oscar.com/review/12961.html" title="《心理罪 》影评：心理罪影评">·《心理罪 》影评：心理罪影评</a></li><!-- <li><a href="http://www.51oscar.com/review.html/detail/12957" title="《战狼2》中国电影新力量 向“小鲜肉”告别">·《战狼2》中国电影新力量 向“小鲜肉”告别</a></li>-->
						<li><a href="http://www.51oscar.com/review/12957.html" title="《战狼2 》影评：《战狼2》中国电影新力量 向“小鲜肉”告别">·《战狼2 》影评：《战狼2》中国电...</a></li><!-- <li><a href="http://www.51oscar.com/review.html/detail/12956" title="早在1981年就有一个叫《南昌起义》的一个电影，《建军大业》不过是狗尾续貂罢了">·早在1981年就有一个叫《南昌起义》的一个电影，《建军大业》不过是狗尾续貂罢了</a></li>-->
						<li><a href="http://www.51oscar.com/review/12956.html" title="《建军大业 》影评：早在1981年就有一个叫《南昌起义》的一个电影，《建军大业》不过是狗尾续貂罢了">·《建军大业 》影评：早在1981年就...</a></li>                   
                </ul>
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