<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>{{$tiezis->title}}</title>
<meta name="description" content="大众影评网影视贴吧:【需求贴】如有资源需求，请在本贴下留言,楼主资源控~ 所以不管是新片、老片、奇葩片、重口味片，包括一些日韩剧、英美剧，都有一些存货~如有资源..." />
<link rel="shortcut icon" href="/Images/favicon.ico" />
<!--[if lt IE 9]>
  <script type="text/javascript" src="js/html5_1.js"></script>
<![endif]-->
<link type="text/css" rel="stylesheet" href="/assets/tiezi/css/common_1.css" />
<style type="text/css">
  .nav a.hotNavItem{position:relative;color: #f60;}
  .nav a.hotNavItem.on{position:relative;color: #fff;}
  .nav a.hotNavItem:hover{color: #fff;}
  .nav a.hotNavItem span{position: absolute;top: 0;right: 16px;width:24px;height:16px;background: url(/assets/tiezi/images/hot_1.png) no-repeat;}
  /*  .nav a.hotNavItem span{position: absolute;top: -3px;right: 10px;font-size: 12px;background: orange;color: #fff;line-height: 14px;height: 14px;padding: 0 2px;border-radius: 4px;}
  .nav a.hotNavItem span:before{content:"";position: absolute;bottom: -5px;left: 5px;width:0;height:0;border-bottom: 5px solid transparent;border-left: 5px solid orange;}*/
  /*.nav a.hotNavItem span:after{content:"";position: absolute;bottom: -5px;left: 1px;width:0;height:0;border-bottom: 5px solid transparent;border-left: 5px solid #fff;}*/
</style>
<script type="text/javascript" src="/assets/tiezi/js/jquery-1.7.2.min_1.js"></script>
<script type="text/javascript" src="/assets/tiezi/js/jquery.cookie_1.js"></script>
<script type="text/javascript" src="/assets/tiezi/js/common2_1.js"></script>
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
          <a href="http://www.51oscar.com" title="大众影评网" target="_self"><img src="picture/logo_1.png" alt="大众影评网" /></a>
        </div>
        <div class="searchBox fR">
             <form name="form_sreach" action="/Search/index" method="get" >
              <!--[if !IE]><!--> <input class="txt_kw" name="word" type="text" value="" autocomplete="off" placeholder="搜索你感兴趣的" /><!--<![endif]-->
                <!--[if gte IE 10]> <input class="txt_kw" name="txt_kw" type="text" value="" autocomplete="off" placeholder="搜索你感兴趣的" /> <![endif]-->
                <!--[if lt IE 10]> <input class="txt_kw" name="txt_kw" type="text" autocomplete="off"  value="搜索你感兴趣的" /> <![endif]-->
              <input class="sreach" name="btn_sreach" type="submit" value="" >
               <!-- <input type="hidden" id="txt_header_url" value="http://www.51oscar.com" > -->
             <input type="hidden" name="__hash__" value="9ed2f1e58e808afbc3f77777412fd59a_39045e606b9c9a37f7e890ce65ccfba3" /></form>
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
  <section class="forumDetLeft leftWp fL">
    <section class="location">
          当前位置：<a href="/" title="首页" target="_self" ></a><a href="/home/tiezis" title="贴吧" target="_self" >贴吧</a>    
        </section>
    <section class="titleBox">
          <div class="cont">
              <h1>{{$tiezis->title}}</h1>
                <div class="titB clearfix">
                    <div class="bshare-custom fL"><div class="bsPromo bsPromo2"></div><i>分享：</i><a title="分享到新浪微博" class="bshare-sinaminiblog"></a><a title="分享到微信" class="bshare-weixin"></a><a title="分享到QQ空间" class="bshare-qzone"></a><a title="分享到腾讯微博" class="bshare-qqmb"></a><a title="分享到朋友网" class="bshare-qqxiaoyou"></a><a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a></div>
                    <a href="#lzf" class="goToReply fR" title="回复" onclick="jumpTo('.user_sayBox')">回复</a>
                </div>
            </div>   
        </section>   
        <!--贴吧互动 hd_content s-->     
        <section class="hd_content">
          <input type="hidden" value="2932" id="forum_id">
         
        <!---帖子 s------>
          <dl class="dis_box_hd clearfix">
                <input type="hidden" id="user1" class="reCount" value="334"> 
                <dt class="hd_dt">
                     <a class="c_f60" href="http://www.51oscar.com/someone/334.html" title="资源小强" target="_blank"><img class="lazyImg" src="{{$tiezis->user->image}}">{{$tiezis->user->username}}</a>
                      <p><em class="forumFloor">楼主</em></p>
                 </dt>
                <dd class="hd_dd">
                  <div class="dis_detail" id="dis_detail1">
                         {!!$tiezis->content!!}    
                   </div>
                  <!--楼主编辑更新文章 s-->
                                   
                  <ol>
                    <li class="li_right">
                        <time>{{$tiezis->created_at}}</time> <a class="c_f60" href="javascript:;" onclick="replayComment(this,'资源小强');return false">回复</a><input type="hidden" value="28992" class="p_id"></li>
                  </ol>
                </dd>  
         </dl>
 @foreach($comments as $v)
          <dl class="dis_box_hd clearfix">
                <input type="hidden" id="user7" class="reCount" value="403287">
                <dt class="hd_dt">
                  <a class="c_f60" href="#" title="{{$v->user->username}}" target="_blank">
                    <img class="lazyImg" src="{{$v->user->image}}" >{{$v->user->username}}</a>
       <!--                <p><em class="forumFloor"></em></p>    -->            
                 </dt>
                <dd class="hd_dd">
                  <div class="dis_detail" id="dis_detail7">
                      {!!$v->content!!}  
                     </div>           
                  <ol>
                    <li class="li_right">
                        <time>{{$v->created_at}}</time> 
                        <a clas class="lzf_reply" >回复</a>
                        <input type="hidden" value="30145" class="p_id"></li>
                  </ol>
                </dd>
                <div class="replay-content" class="lzf_comment" >
                <i class="triangle"></i>
                <form method="post" action="" id="replay_p_comment">
                    <div><textarea id="replayContent"></textarea></div>
                    <input type="hidden" id="comment_p_user_id" value="162392">
                    <input type="hidden" id="comment_pid_re" value="12967">
                    <div class="btn clearfix">
                        <a id="div_comment_qq" class="div_comment_qq_inner icon">表情</a>
                        <button class="cancel-btn" type="button">取消</button>
                        <button class="replay-btn" type="submit">回复</button>
                    </div>
                </form>
            </div>
         </dl>  
         @endforeach 

     <script type="text/javascript">     
     //回复下拉框
        var comment = document.getElementsByClass('lzf_comment');
          comment.style.display = 'none';
          var reply = document.getElementsByClass('lzf_reply');
            reply.onclick = function(){
              if(comment.style.display == 'block'){
                comment.style.display = 'none';
              }else{
                comment.style.display = 'block';
              }
            }
         </script>
    </section>
    <!--贴吧互动 hd_content e-->
        <!--发布新楼层 s-->
        @if(!Session::has('username'))
            请先<a href="/home/login" style="color: red">登录<a>才能评论
        @else
        <section class="user_sayBox clearfix">
            <form action="/home/tiezicomment/{{$tiezis['id']}}/reply" method="get"enctype="multipart/form-data">
                <script type="text/javascript" charset="utf-8" src="/ueditorlzf/ueditor.config.js"></script>
                 <script type="text/javascript" charset="utf-8" src="/ueditorlzf/ueditor.all.min.js"> </script>
                 <script type="text/javascript" charset="utf-8" src="/ueditorlzf/lang/zh-cn/zh-cn.js"></script>
                 <script id="editor" type="text/plain" name="content" style="width:100%;height:500px;"></script>
                 <button id="db"   class="goToReply fR" title="回复"  style="display: block; width: 100px;height: 50px;line-height: 30px;text-align: center;font-size: 26px;color: #FFF;background-color: #f60; border-radius: 5px;position: relative;bottom: 8px;">回复
                 </button>
                  {{method_field('put')}}
                  {{csrf_field()}}
        </form>
                         <script>
                        UE.getEditor('editor').hasContents()
                        var ue = UE.getEditor('editor');
                        var ue1=UE.getEditor('Content');
                        var s=ue1.getPlainTxt()
                        var db =document.getElementById('db');
                        bd.onclick=function(){
                            alert("lzf");
                          }
                </script>
        @endif
        <!--发布新楼层 e-->
       </section>
       <script type="text/javascript">
        

       </script>
</section>
  <!--forumDetLeft e-->
    <aside class="rightWp fR">        
        <section class="hotTalk">
            <div class="title clearfix">
                <i class="info2 icon"></i><a href="http://www.51oscar.com/forum.html" title="当前热议" >当前热议<em>>></em></a>
            </div>
            <div class="cont clearfix">
              <ul>
                                 </ul>
            </div>
        </section><!--热门讨论 e-->
       @foreach($movie_details as $v)     
       <section class="hotMovie">
            <div class="title clearfix">
                <i class="movie icon"></i><a href="/movie/search.html" title="热映影片" >热映影片<em>>></em></a>
            </div>
            <div class="cont clearfix">
             <dl class="clearfix">
                    <dt>
                        <a href="/movie/39278.html" title="{{$v['name']}}" target="_blank" >
                            <img class="lazyImg pic imgBorder" src="{{$v->image}}" width="98" height="138" alt="{{$v['name']}}" />
                        </a>
                    </dt>    
                    <dd>
                        <a class="t" href="/movie/39278.html" title="{{$v['name']}}" target="_blank" >{{$v['name']}} </a>
                        <p>导演：<em>{{$v->Director_name->name}}</em></p>
                        <p>类型：<em>{{$v->movie_cate->name}}</em></p>
                        <a class="trailer" href="javascript:viod(0);" title="预告片" data-trailer="">预告片<i></i></a> 
                    </dd>
                </dl>           
              </div>
        </section><!--热映影片 e-->
        @endforeach
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
                <a href="http://www.51oscar.com/login/toFindPwd">找回密码</a></td>
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

<textarea id="replayHtml" style="display:none">               
        <div class="replay-content">
            <i class="triangle"></i>
            <form method="post" action="/ajaxAddComment" method="post" onsubmit="return false;" id="replay_p_comment">
                <div>&lt;textarea&gt;&lt;/textarea&gt;</div>
                <input type="hidden" name="puser_id"  id="comment_p_user_id" value=""/>
                <input type="hidden" name="pid" id="comment_pid_re" value=""/>
                <div class="btn clearfix">
                    <a id="div_comment_qq" class="div_comment_qq_inner icon">表情</a>
                    <button class="cancel-btn" type="button">取消</button>
                    <button class="replay-btn" type="submit">回复</button>
                </div>
            <input type="hidden" name="__hash__" value="ffe99cf95977c1bdc6793a86f88361c2_3e280345331ab8f1463411b0f3b1ed77" /><input type="hidden" name="__hash__" value="9ed2f1e58e808afbc3f77777412fd59a_39045e606b9c9a37f7e890ce65ccfba3" /></form>
        </div>
</textarea>

<input type="hidden" id="shareText" value="4" />
<script type="text/javascript" src="/assets/tiezi/js/forum.js"></script>
<script type="text/javascript" charset="utf-8">
   // window.UEDITOR_HOME_URL = "/Public/forum/";  //UEDITOR_HOME_URL、config、all这三个顺序不能改变
    window.UEDITOR_HOME_URL = "/Public/ueditor/";  //UEDITOR_HOME_URL、config、all这三个顺序不能改变
</script>


<script type="text/javascript">
  $(function(){ 
    URL = $('#txt_header_url').val() +'/';
    Common.init(); 
    Forum.ajaxSaveBrowser();
  })


    //实例化编辑器
  var editor = UE.getEditor('myEditor');
    editor.addListener('click',function(){
        Common.isLogin(); 
     });

  Forum.bindQQShow();
//发帖
  $('.tieba_submit').bind("click",function(){
    Forum.replyforum();
  });
//回复
    function replayComment(obj,user){
    Forum.replayComment(obj,user);
    }
  //编辑修改
  function updateForum(key){
    var editor2 = UE.getEditor('myEditorUpdate'+key);
    $('#updateEditor'+key).css({'display':'block'});
    $('#dis_detail'+key).css({'display':'none'});
    //定位    
    $("html,body").animate(
      {scrollTop:$('#updateEditor'+key).offset().top},
      300,
      "swing");
  }
  $('.unDelete').click(function(){
      $('.updateEditor').css({'display':'none'});
      $('.dis_detail').css({'display':'block'});
  })
  //提交修改
  function updateContent(key){
      var editor2 = UE.getEditor('myEditorUpdate'+key);
    if(key==1){
        var title = $(".tieba_title").val();
      if(title.length == 0){
        alert("标题不能为空哦！");
        $('.tieba_title').focus();
        return false;
      }
      
      //var comment = $("#myEditorUpdate1").val();alert(comment);
      var comment =editor2.getContent();
      //alert(comment);
      
      var forum_id = $("#forum_id").val();
      var id=$("#tiezi_id"+key).val();
      
      Forum.updateforum(comment,forum_id,id,title);
    }else{
    //  var comment = $("#myEditorUpdate"+key).val();
      var comment =editor2.getContent();
      var forum_id = $("#forum_id").val();
      var id=$("#tiezi_id"+key).val();
      Forum.updateforum(comment,forum_id,id,'');
    }
  }
  //删除
  $('.deleteForum').click(function(){
    if(!confirm('删除之后不可恢复！确定删除？')){
      return false;
    }
        comment_id = $(this).attr('comment_id');
        if(comment_id == ""){
          comment_id = $("#forum_id").val();
          Forum.deleteforum(comment_id);
          //url = '/deleteForum/id/'+comment_id;
        }else{
          Forum.deletereplay(comment_id);
          //return false;
        }
        
  });
   //播放预告片
$(".trailer").click(function(){   
  showSwf.show($(this).attr("data-trailer")); 
});

  function jumpTo(id){
    $("html,body").animate(
      {scrollTop:$(id).offset().top},
      300,
      "swing",
      function(){ if(Common.isLogin()) $("#myEditor").focus(); }
    );
  }

  //加载更多评论
  $(".more_comms_reply").click(function(){
    $(this).html('<img src="picture/loading_1.gif" alt="loading" />加载中...');
    var comment_pid = $(this).parents(".sonCommentBox").siblings(".hd_dd").find(".p_id").val(); //当前楼层的id
    var p = $(this).siblings(".more_comms_reply_p").val();    //当前楼层的评论页码
    var _this = $(this);
    setTimeout(function(){
          Forum.more_comms_reply(_this,comment_pid,p);
        },200);
  });

  scrollFixed(".hotMovie","#footer",40);
  function go(){
    var goid  = $('#goid').val();
    if(goid==''){
      alert('请输入页码');
      return false;
    }
    var forumId = $('#forumID').val();
    location = forumId+"/"+goid+".html";
  }
</script>
<script type="text/javascript" charset="utf-8" src="/assets/tiezi/js/buttonlite.js">

</script><script type="text/javascript" charset="utf-8" src="/assets/tiezi/js/bsharec0.js"></script>


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