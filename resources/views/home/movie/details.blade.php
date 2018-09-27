 <!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>{{$movie_detail['name']}} 
    
        @foreach($tag as $v)
            {{!empty($v['name']) ? $v['name'] : ''}}
        @endforeach
      |{{$movie_detail['name']}} 影评_电影_大众影评网</title>
<meta name="description" content="{{$movie_detail['intro']}}" />
<link rel="shortcut icon" href="/Images/favicon.ico" />
<!--[if lt IE 9]>
    <script type="text/javascript" src="/ueditor/js/html5_1.js"></script>
<![endif]-->
<link type="text/css" rel="stylesheet" href="/ueditor/css/common_2.css" />
<script type="text/javascript" src="/ueditor/js/jquery-1.7.2.min_1.js"></script>
<script type="text/javascript" src="/ueditor/js/jquery.cookie_1.js"></script>
<script type="text/javascript" src="/ueditor/js/common2_1.js"></script>
<script type="text/javascript" src="/ueditor/js/common_2.js"></script>
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
<script>
var URL = "http://www.51oscar.com/";
 var sessionid =$('#sessionid').val();
   if(sessionid){
    ajaxGetNotify(sessionid);
   }
 function ajaxGetNotify(u){
          $.get('/forum/getMsgCount',
            {usg:u},
            function(data){
               $('#auto_msg').html("（"+data+"）");
            },
            'json'
        );
    } 

//下拉菜单
    $(document).ready(function(){   
        dropMenu(".m_more"); 
        dropMenu(".u_name");

    });
    //下拉菜单
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
</script>

</head>

<body>
<!--header与个人中心的一样,略作修改，css放在common里-->
<header class="top">
    <div class="menu">
        <a href="#" class="logo"><img src="/ueditor/picture/logo.png"></a>
        <div class="menu_c">
            <a href="http://www.51oscar.com">首页</a>
            <a href="http://www.51oscar.com/forum.html">贴吧</a>
            <a href="http://www.51oscar.com/review.html">影评</a>
            <a id="nav_movie" href="http://www.51oscar.com/movie.html">电影</a>
            <a href="http://www.51oscar.com/album.html">影集</a>
            <a href="http://www.51oscar.com/activity.html">活动</a>
        </div>
        <div class="m_more">
            <a class="menu_a"><span>更多</span><b class="a_trig"></b></a>
            <div class="hover_show">
                <a href="http://www.51oscar.com/zhongchou.html">众筹</a>
                <a href="http://www.51oscar.com/topic.html">专题</a>
                <a href="http://www.51oscar.com/news.html">资讯</a>
            </div>
        </div>
        <div class="search">
            <form action="http://www.51oscar.com/Search/index" method="GET">
                <input type="text" class="sear_input" placeholder="搜电影、影集" name="word" id="sea_input">
                <input name="" type="button" class="sear_butt" onclick="this.form.submit()">
            <input type="hidden" name="__hash__" value="e952fc048a290375281e1b7bcbbc0bb3_b297d737ff5496294e1486275fb6cd07"><input type="hidden" name="__hash__" value="560b50165f7b0364a0021af058806e8a_bbe2725a880d4155f8212e8fe6ede256" /></form>
            <input type="hidden" value=""  id="sessionid">
            <!---
            <input type="text" class="sear_input" onFocus="focusInputEle(this)" onBlur="blurInputEle(this)" defaultVal="搜影评/找人" value="搜影评/找人">
            <input type="button" class="sear_butt">--->
        </div>
        @if(Session::get('id'))
        <div class="user_info nav_title" >
            <div class="login_before" style="width:350px;float:left;color:white"> 
            
                已登录:
                用户: 
                <a>{{session('username')}}|</a> 
                <a href="/home/outlogin">退出</a>
                <a href="/home/center">个人中心</a>
            
            </div>
        </div> 
        @endif
        @if(!Session::get('id'))
        <div class="user_info nav_title">
            <div class="login_before" >
                <a href="/home/login">登录</a> &nbsp;<em class="c_f60">|</em>&nbsp; <a href="http://www.51oscar.com/login/regist.html">注册</a>
            </div><!--login_before e-->   
            
        </div>
        @endif    
    </div>
</header>
<link type="text/css" rel="stylesheet" href="/ueditor/css/movie_2.css" />
<!--主体 s--> 
<section class="main wp clearfix">
    <!--电影详情 s-->
    <section class="detail clearfix">
        <div class="posters fL">
            <img class="imgBorder" src="{{$movie_detail['image']}}" width="175" height="236" alt="芳华 " />
            <div class="bshare-custom"><div class="bsPromo bsPromo2"></div><i>分享：</i><a title="分享到新浪微博" class="bshare-sinaminiblog"></a><a title="分享到微信" class="bshare-weixin"></a><a title="分享到QQ空间" class="bshare-qzone"></a><a title="分享到腾讯微博" class="bshare-qqmb"></a><a title="分享到朋友网" class="bshare-qqxiaoyou"></a><a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a></div>
        </div><!--posters e-->
        <div class="deta fL">
            <h1>{{$movie_detail['name']}}</h1>
            <div class="cont">
              <p><em>片名 : </em>{{$movie_detail['name']}}</p>
                <p><em>导演 : </em>{{$movie_detail -> director_name->name}}</p>
                <p><em>演员 : </em>
                    @foreach($actor as $v)
                        {{!empty($v['name']) ? $v['name'] : ''}}&nbsp;/
                    @endforeach

                </p>
                <p><em>类型 : </em>

                    @foreach($tag as $v)
                        {{!empty($v['name']) ? $v['name'] : ''}}&nbsp;/
                     @endforeach

                </p>
                <p><em>上映时间 : </em>
                {{substr($movie_detail['created_at'],0,10)}}（{{$movie_detail -> movie_cate->name}}）              /               2017-09-30              
                </p>
                <p><em>片长 : </em>
                 
                {{$movie_detail['runningtime']}}分钟（{{$movie_detail -> movie_cate->name}}）               </p>
                <p class="intro_min"><em>剧情介绍 : </em>　　{{$movie_detail['intro']}}</a></p>
            </div>
            <div class="trailerBox">
                  <a class="trailer on" href="javascript:void(0);" data-trailer="" title="预告片">预告片</a> 
                                        </div>
            <div id="star">
                    <span>评分：</span>
                    <div class="num-rate clearfix">
                        <ul class="clearfix">
                            <li ><a href="javascript:;" title="非常差">1</a></li>
                            <li ><a href="javascript:;" title="差">2</a></li>
                            <li ><a href="javascript:;" title="一般">3</a></li>
                            <li><a href="javascript:;" title="好">4</a></li>
                            <li><a href="javascript:;" title="非常好">5</a></li>
                        </ul>
                        <span class="hint">6.0</span>
                        <!--input可设置默认等级，若为空则还未评-->
                        <input type="hidden" name="likegrade" value="">
                        <input type="hidden" id="detail_pingfen" value="3"/>
                        <input type="hidden" id="detail_getScore" value="6.0"/>
                    </div>
                    
            </div><!--评分 e-->
        </div><!--deta e-->
    </section>     
    <!--电影详情 e-->
    <section class="left fL">
        <!--精彩剧照 s-->
        <div class="stills">
            <div class="title">
                精彩剧照
            </div>  
            <div class="picScroll">
                <div class="hd">
                    <a class="next"></a>
                    <a class="prev"></a>
                </div>
                <div class="bd">
                    <ul id="bigPic" class="clearfix">
                    @foreach($images as $v)
                      <li>
                           <a href="/Uploads/Movie/RelatePhoto/59c33b21763e4.jpg"><img  src="{{$v['image']}}" /> </a>
                        
                      </li>
                    @endforeach
                    </ul>
                </div>
            </div> 
        </div>
        <!--精彩剧照 e--> 
        
        <!--入选影集 s-->
        
        <!--入选影集 e-->  
        
        <!--小编推荐 s-->
              <!--小编推荐 e-->     

        <!--精彩影评 s-->  
        <div class="commDiv">   
            <div class="title">
                精彩影评 
            </div><br>
               <span style="font-size: 15px"> 
                @if(!session('id'))
                    要评论须要先<a href="/home/login" title="登录" target="_blank" style="color:red">登录</a>或者<a href="http://www.51oscar.com/login/regist.html" title="注册" target="_blank" style="color:red">注册</a>
                @endif
                </span>

            <!--评论编辑输入框 s-->
            @if(session('id'))
            <div class="user_say">
                <div class="faceDiv"><a id="div_comment_qq" class="div_comment_qq_inner icon">表情</a></div>
                <form method="post" action="/home/movieDetailsComment">
                    <textarea  class="commContent" name="content"></textarea>
                    <input type="hidden" name="movie_detail_id" value="{{$movie_detail['id']}}"><!--评论对象的id-->
                    <div class="btnDiv clearfix">
                        {{csrf_field()}}
                        <span class="hint">最多能输入480个字</span>
                        <button href="javascript:" class="comment_btn" >发布</button>
                    </div>
                </form>
            </div>
            @endif
        
        <br>
            <!--评论编辑输入框 e-->
        <dl class="comms_box clearfix" style="border:1px solid #eee;padding:10px">
            @foreach($comments as $v)
                @foreach($user as $val)
                @if($val['id']==$v['user_id'])
            <dt>
                <a href="/someone/427794.html" title="长军" target="_blank">
                <img class="lazyImg" src="{{$val['image']}}" width="40" height="40" alt="长军">
                </a><span class="comms_user"><a class="user" href="/someone/427794.html" title="鲁鲁" target="_blank"></a>&nbsp;<i style="color:red"><a>
                    {{$val['username']}}
                   
            </a>:</i></span>
                    <span class="comms_detail">{{$v['content']}}</span>
            </dt>
            <dd>
                <span class="dis_detail clearfix" style="padding-left: 20px">
                    
                </span>
                <span class="dis_reply clearfix" style="padding-left: 450px">
                    <time>{{$v['created_at']}}</time>&nbsp;<a class="reply" href="javascript:;" title="回复" onclick="replayComment(this,'鲁鲁');return false">回复</a>
                    <input type="hidden" class="comment_pid" value="1799">
                    <input type="hidden" class="comment_p_user_id" value="427794">
                    <input type="hidden" class="puser_id" value="427794">
                </span>
                 <!--子回复列表 s-->
                  <div class="comms_replyBox">
                                    </div>
                  <!--子回复列表 e-->
                  <input type="hidden" class="more_comms_reply_p" value="1"><!--显示当前子评论页数-->
           </dd>
                @endif
             @endforeach

           @endforeach
          </dl>
        </div>

        <!--精彩影评 e-->   
    </section><!--left e-->
    
    <aside class="right fR">
        <!--当前热议 s-->
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
      


    </section>
    <!--热门讨论 e--> 
    
    
    
        
    </aside><!-- right e-->
</section>
<!--主体 e-->
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
<input type="hidden" id="shareText" value="1" />
<input type="hidden" id="detail_movie_id" value="39278"/>

<script type="text/javascript" src="/ueditor/js/jquery.superslide.2.1.1.js"></script>
<script type="text/javascript" src="/ueditor/js/jquery.qqface.js"></script>
<link type="text/css" rel="stylesheet" href="/ueditor/css/lightbox-jcarousel_1.css" />
<script type="text/javascript" src="/ueditor/js/jquery.lightbox-0.5.min.js"></script>
<script type="text/javascript" src="/ueditor/js/comment.js"></script>
<script type="text/javascript">
    $(function(){   
        URL = $('#txt_header_url').val() +'/';
        Common.init(); 
        Comments.ajaxSaveBrowser(); 
    });
    
    //长、短评
    jQuery(".slideTab").slide({delayTime:700,trigger:"click"});
    
    var movie_id = $('#detail_movie_id').val();
    //星星评分
    var berforStar=  $('#detail_pingfen').val();  
    var detail_getScore=new Number($('#detail_getScore').val());
    var berforHintTxt = detail_getScore.toFixed(1) ;   

    $(function(){
       $('.num-rate').rating({
          aLi: '.num-rate li',
          oUl:'.num-rate ul',
          hintText: '.num-rate span',
          valContent: '.num-rate input',
          berforHintTxt:berforHintTxt, //页码一开始加载进来的分数，也就是为评分时的分数，待设置
          berforStar:berforStar, //页码加载进来的星星级别，待设置
          callback:function(){  //回调函数
            var rate =  $('.num-rate input').val(); //获取分数
            var json ={
                type : 1,
                id   : movie_id,    //电影id，待设置
                score: rate*2
            };
            //ajax提交
            $.ajax({
                    type : 'post',
                    url  : URL + 'comment/ajaxAddCommenScore',
                    data : json,
                    success: function(data){
                        var json = data;
                        if(json.status == 1){
                            alert(json.info);
                        }else{
                            alert(json.info);
                        }
                    }
            })
          }
        });

    })
        
    
    

    //表情
    Comments.bindQQShow();
    //登陆
    $("#commContent").bind("click",function(){ 
        Common.isLogin();
    })
    $("#xchangping").bind("click",function(){ 
        Common.isLogin();
    })
    

    //展开，收起
    $(".show_intro").live("click",function(){
        $(this).parent(".intro_min").css("display","none"); 
        $(this).parent(".intro_min").siblings(".intro_all").css("display","block");
    });
    $(".hide_intro").live("click",function(){
        $(this).parent(".intro_all").css("display","none"); 
        $(this).parent(".intro_all").siblings(".intro_min").css("display","block");
    });
    
    //图片滚动
    jQuery(".picScroll").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",scroll:1,vis:4,pnLoop:false,autoPlay:false});    
    

    //浏览大图
    $('#bigPic a').lightBox({
        overlayOpacity:         0.5,
        imageLoading:            '/Images/lightbox-ico-loading.gif',        // (string) Path and the name of the loading icon
        imageBtnPrev:            '/Images/lightbox-btn-prev.gif',           // (string) Path and the name of the prev button image
        imageBtnNext:            '/Images/lightbox-btn-next.gif',           // (string) Path and the name of the next button image
        imageBtnClose:           '/Images/lightbox-btn-close.gif',      // (string) Path and the name of the close btn
        imageBlank:              '/Images/lightbox-blank.gif'
    });

    
    //播放预告片
    $(".trailer").click(function(){
            showSwf.show($(this).attr("data-trailer")); 
    });

    //入选影集显示更多
    $(function(){
        var btn = $('.userAlbum .contBox .show_more'),
            wrap = $(".userAlbum .contBox"),
            wrap_li = wrap.find('dl'),
            liHeight = wrap_li.height() + 20, //margin值为10
            fullHeight = liHeight*wrap_li.length; //总高度
    
        if(wrap_li.length>5){
            //初始化高度
            wrap.css({
                height: (liHeight)*5,
                overflow: 'hidden'
            });
            //切换操作
            btn.toggle(
                function(){
                    wrap.animate({
                        height: fullHeight,
                        overflow: 'auto'
                    },300)
                    $(this).text('收起').addClass('show_more2')
                },function(){
                    wrap.animate({
                        height: (liHeight)*5,
                        overflow: 'hidden'
                    },300)
                    $(this).text('更多').removeClass('show_more2');
                }
            )
        }else{
            btn.hide()
        }
    })
    

    //加载短评  
    $("#moreShortComm").click(function(){
        $("#moreShortComm").html('<img src="picture/loading.gif" alt="loading" />正在加载更多评论...');
        setTimeout(moreShortComm,200);
        
    });
    var p=1;
    function moreShortComm(){ 
        $.ajax({
                url:'/Movie/ajaxShortping',
                type:'post',
                dataType:'json',
                data:{id:movie_id,p:p},
                async: false,
                success:function(data){
                //  if(p>=1) return;
                var data=data.data; 
                    if(!data){
                        $("#moreShortComm").html('没有更多了');
                        setTimeout(function(){
                            $("#moreShortComm").slideUp("slow");
                        },1000);
                        return;
                    }
                   var newElements = '';
                   for(var i=0;i<data.length;i++){
                        newElements +='<dl class="clearfix">'+
                                          '<dt class="userLogo"><a href="/someone/'+data[i].user_id+'.html" title="'+data[i].nick_name+'" target="_blank"><img class="imgBorder" src="'+data[i].img_url+'" alt="'+data[i].nick_name+'" width="58" height="58" />'+data[i].nick_name+'</a></dt>'+
                                          '<dd class="txt">';
                        if(data[i].content.length>100){
                              newElements +='<p class="intro_min">'+data[i].content.substring(0,100)+'……&nbsp;<a class="show_intro" href="javascript:" title="展开">展开</a></p>'+
                                            '<p class="intro_all" style="display:none;">'+data[i].content+'&nbsp;&nbsp;<a class="hide_intro" href="javascript:" title="收起">收起</a></p>'; 
                        }else{
                            newElements +='<p class="intro_min">'+data[i].content+'</p>';
                        }
                            newElements += '</dd>'+
                                       '</dl>';   
     
    
                    }

                    $("#moreShortComm").before(newElements);
                    p+=1;
                    $("#moreShortComm").html('<img src="picture/b_1.gif" alt="loading" />点击加载更多评论...');
                    //$("#moreShortComm").css("display","none");
                    
                }, //success end    
                error:function(){
                    $("#moreShortComm").html('加载异常，重新点击加载更多评论...');
                }
            
        })
    }
    
    //加载长评  
    $("#moreLongComm").click(function(){
        $("#moreLongComm").html('<img src="picture/loading.gif" alt="loading" />正在加载更多评论...');
        setTimeout(moreLongComm,200);
        
    });
    var p2=1;
    function moreLongComm(){ 
        $.ajax({
                url:'/Movie/ajaxLongping',
                type:'post',
                dataType:'json',
                data:{id:movie_id,p:p2},
                async: false,
                success:function(data){
                //  if(p2>=1) return;
                var data=data.data;
                    //alert(data);
                    if(!data){
                        $("#moreLongComm").html('没有更多了');
                        setTimeout(function(){
                            $("#moreLongComm").slideUp("slow");
                        },1000);
                        return;
                    }
                   var newElements = '';
                   for(var i=0;i<data.length;i++){
                        newElements +='<dl class="clearfix">'+
                                          '<dt class="userLogo"><a href="/someone/'+data[i].user_id+'.html" title="'+data[i].nick_name+'" target="_blank" ><img class="imgBorder" src="'+data[i].img_url+'" alt="'+data[i].nick_name+'" width="58" height="58" />'+data[i].nick_name+'</a></dt>'+
                                          '<dd class="txt">'+
                                              '<a class="t" href="/review/'+data[i].id+'.html" title="'+data[i].title+'" target="_blank" >'+data[i].title+'</a>'+
                                              '<p class="intro_min">'+data[i].content+'<a class="more" href="/review/'+data[i].id+'.html" title="点击查看" target="_blank">点击查看</a></p>'+
                                              
                
                                          '</dd>'+
                                       '</dl>';
    
                    }
                   
                    $("#moreLongComm").before(newElements);
                    p2+=1;
                    $("#moreLongComm").html('<img src="picture/b_1.gif" alt="loading" />点击加载更多评论...');
                    //$("#moreLongComm").css("display","none");
                    
                }, //success end    
                error:function(){
                    $("#moreLongComm").html('加载异常，重新点击加载更多评论...');
                }
                
        })
    }
    
    scrollFixed("#relatedNews","#footer",40);
    
    
</script>

<script type="text/javascript" charset="utf-8" src="/ueditor/js/buttonlite_1.js"></script><script type="text/javascript" charset="utf-8" src="/ueditor/js/bsharec0_1.js"></script>
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