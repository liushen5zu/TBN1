<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>我的消息</title>
    <meta name="description" content="我的消息" />
    <input type="hidden" value="428230" id="sessionid">
    <link rel="shortcut icon" href="/Images/favicon.ico" />
    <!--[if lt IE 9]>
	<script type="text/javascript" src="/ueditor/js/html5_5.js"></script>
<![endif]-->
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="/ueditor/css/common_6.css" />
    <script type="text/javascript" src="/ueditor/js/jquery-1.7.2.min_10.js"></script>
    <script type="text/javascript" src="/ueditor/js/jquery.cookie_9.js"></script>
    <script type="text/javascript" src="/ueditor/js/common2_10.js"></script>
    <script type="text/javascript" src="/ueditor/js/common_6.js"></script>
    <script>
    var sessionid = $('#sessionid').val();
    if (sessionid) {
        ajaxGetNotify(sessionid);
    } 
    function  ajaxGetNotify(u) {           $.get('/forum/getMsgCount',              { usg: u },             function(data) {              $('#auto_msg').html("（" + data + "）");             },             'json'        );     }
    </script>
</head>

<body>
    <!--header与个人中心的一样,略作修改，css放在common里-->
    <header class="top">
        <div class="menu">
            <a href="/" class="logo"><img src="/ueditor/picture/person_logo_6.png"></a>
            <div class="menu_c">
                <a href="/">首页</a>
                <a href="http://www.51oscar.com/news.html">资讯</a>
                <a id="nav_movie" href="http://www.51oscar.com/movie.html">电影</a>
                <a href="http://www.51oscar.com/review.html">影评</a>
                <a href="http://www.51oscar.com/album.html">影集</a>
                <a href="http://www.51oscar.com/forum.html">贴吧</a>
            </div>
            <div class="m_more">
                <a class="menu_a"><span>更多</span><b class="a_trig"></b></a>
                <div class="hover_show">
                    <a href="http://www.51oscar.com">活动</a>
                    <a href="http://www.51oscar.com">专题</a>
                    <a href="http://www.51oscar.com/zhongchou.html">众筹</a>
                </div>
            </div>
            <div class="search">
                <form action="http://www.51oscar.com/Search/index" method="GET">
                    <input type="text" class="sear_input" placeholder="搜电影、影集" name="word" id="sea_input">
                    <input name="" type="button" class="sear_butt" onclick="this.form.submit()">
                    <input type="hidden" name="__hash__" value="e952fc048a290375281e1b7bcbbc0bb3_b297d737ff5496294e1486275fb6cd07">
                    <input type="hidden" name="__hash__" value="d178c9b53d5eda77ceba91937427b1b2_7ff56faf019331aff9e018e2b1627da6" />
                </form>
                <input type="text" class="sear_input" onFocus="focusInputEle(this)" onBlur="blurInputEle(this)" defaultVal="搜影评/找人" value="搜影评/找人">
                <input type="button" class="sear_butt">
            </div>
            <div class="user_info nav_title">
                <div class="after_landing">
                    <div id="u_info" class="clearfix">
                        <div class="u_name">
                            <a href="/personal/index" class="c_f60" title="">
                            <img src="{{Session("image")}}" alt="">
                            <span>{{Session('username')}}</span>
                        </a>
                            <div class="user_more">
                                <ul class="u_detail">
                                    <li><a href="/home/myCenter" title="hello">{{Session('username')}}</a></li>
                                    <li><a href="/home/center">帐号设置</a></li>
                                    <li><a href="/home/xiangmugl">项目管理</a></li>
                                    <li><a href="/home/outlogin" onclick="Common_new.ajaxHomeLogout2();">退出</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <a href="/personal/msgList" class="quick_news">

                        
                        (<?php 
                            $mm = [];
                            foreach($message as $v){
                                if($v->accept_id==session('id') && $v->status==0){
                                    $mm[] = $v->toArray();
                                }
                                    
                            }
                                //echo '<pre>';
                            if(count($mm)>0){
                                echo '新消息'.count($mm);
                            }else{
                                echo '消息'.count($mm);
                            }
                        ?>)

                        </a>
                    </div>
                </div>
                <!--after_landing e-->
            </div>
        </div>
    </header>
    <!--[if lt IE 9]>
	<script type="text/javascript" src="/ueditor/js/html5_5.js"></script>
<![endif]-->
    <link type="text/css" rel="stylesheet" href="/ueditor/css/mypage_1.css" />
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <!--主体 s-->
   
    <style>
    	element.style {
    		height:200px;
		}
		.popover {
		    position: relative;
		    top: 0;
		    left: 0;
		    z-index: 1060;
		    display:block;
		    max-width: 276px;
		    padding: 1px;
		    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
		    font-size: 14px;
		    font-style: normal;
		    font-weight: 400;
		    line-height: 1.42857143;
		    text-align: left;
		    text-align: start;
		    text-decoration: none;
		    text-shadow: none;
		    text-transform: none;
		    letter-spacing: normal;
		    word-break: normal;
		    word-spacing: normal;
		    word-wrap: normal;
		    white-space: normal;
		    background-color: #fff;
		    -webkit-background-clip: padding-box;
		    background-clip: padding-box;
		    border: 1px solid #ccc;
		    border: 1px solid rgba(0,0,0,.2);
		    border-radius: 6px;
		    -webkit-box-shadow: 0 5px 10px rgba(0,0,0,.2);
		    box-shadow: 0 5px 10px rgba(0,0,0,.2);
		    line-break: auto;
		}

    </style>
     @section('content')
    <section class="msgListWp wp">
        <h1>我的消息</h1>
        <div class="titleBox">
            <ul class="tab clearfix">
                <li><a href="/home/send">好友列表</li>
                <li><a href="/home/send">与好友消息</a></li>
                <li><a href="/personal/msgList/type/2">@我的</a></li>
            </ul>
            <a class="allMarkedRead" href="javascript:;" title="全部标记为已读">全部标记为已读</a>
        </div>
        <!-- <table cellspacing="0" cellpadding="0"  border='1' width=  > -->
        <div id="xiaoxi">
            <table class="table table-striped">
                <tr style="font-size:20px">
                    <td>ID</td>
                    <td>好友</td>
                    <td>操作</td>
                    <td>未读消息</td>
                </tr>
                
                @foreach($user as $v)
                <form action="/home/send/{{$v->id}}" method="get">
               
                <tr id="accept" style="font-size:20px">
                    <td class="id">{{$v->id}}</td>
                    <td >{{$v->username}}</td>
                    {{csrf_field()}}
                    <td><button class="chakan">查看消息</button></td>
                    <td>
                        (<?php
                            $send = [];
                            $send_ids = [];
                            foreach($message as $val){
                                if($v->id==$val->send_id && $val->accept_id==session('id') && $val->status==0){
                                    $send[] = $val->content;
                                    $send_ids[] = $val->id;
                                }
                               //echo '<pre>';
                                //var_dump($send);
                            }
                            echo count($send);
                        ?>)
                        
                    </td>
                </tr>
                    <?php 
                        if(count($send_ids)>0){
                            foreach($send_ids as $v){
                                echo '<input type="hidden" name="send_ids[]" value="'.$v.'">';
                            }
                        } 

                    ?>
                        
                      
                    
                </form>
                @endforeach
               
            </table>
        </div>
        	
      

    </section>
    <!--主体 e-->
	@show
		

    
    <script type="text/javascript">
    $(function() {
        URL = $('#txt_header_url').val() + '/';
        Common.init();
    })

    //下拉菜单
    function dropMenu(obj) {
        $(obj).each(function() {
            var theSpan = $(this);
            var theMenu = theSpan.find(".hover_show, .user_more");
            var tarHeight = theMenu.height();
            theMenu.css({ height: 0, opacity: 0 });
            theSpan.hover(
                function() {
                    $(this).addClass("selected");
                    theMenu.stop().show().animate({ height: tarHeight, opacity: 1 }, 400);
                },
                function() {
                    $(this).removeClass("selected");
                    theMenu.stop().animate({ height: 0, opacity: 0 }, 400, function() {
                        $(this).css({ display: "none" });
                    });
                }
            );
        });
    }

    $(document).ready(function() {
        dropMenu(".m_more");
        dropMenu(".u_name");

    });

    $(".unread").click(function() {
        var id = $(this).attr('data-id');


        var json = {
            'id': id,
        };

        var url = URL + 'personal/ajaxReadMsg';

        var successFunction = function(data) {
            if (data.status == 2) {
                // alert('系统错误！');
            }
        }

        $.ajax({
            url: url,
            data: json,
            success: successFunction
        });


        $(this).removeClass("unread");
    });

    //全部标记为已读
    $(".allMarkedRead").click(function() {
        var idArr = [];
        var UnreadLength = $(".unread").length;
        for (var i = 0; i < UnreadLength; i++) {
            idArr.push(parseInt($(".unread").eq(i).attr("data-id")));
        }

        var json = {
            'unreadIdArr': idArr,
        };
        var url = URL + 'personal/ajaxAllRead';
        var successFunction = function(data) {
            if (data.status == 1) {
                //				for(var i =0; i<UnreadLength; i++){
                //				  $(".msgListWp").find(".unread").eq(i).removeClass("unread"); 
                //				}

                location.reload();
            }
        }

        $.ajax({
            url: url,
            data: json,
            success: successFunction
        });

    });

    var _url = window.location.href;
    if (/\/personal\/msgList\/type\/1$/.test(_url)) { //回复我的
        $(".titleBox .tab").find("li").eq(1).addClass("title_cur");
    } else if (/\/personal\/msgList\/type\/2$/.test(_url)) { //@我的
        $(".titleBox .tab").find("li").eq(2).addClass("title_cur");
    } else { //全部
        $(".titleBox .tab").find("li").eq(0).addClass("title_cur");
    }
    </script>
    <!-- 隐藏信息  -->
    <input type='hidden' id='txt_header_url' value="http://www.51oscar.com" />
    <input type='hidden' id='txt_public_home' value="/Public/Home/" module="Personal" ie_page="/movie/ie.html" baidu_page="/movie/baidu.html" qvod_page="/movie/qvod.html" gvod_page="/movie/gvod.html" loading_page="/movie/loading.html" />
    <input type='hidden' id='txt_edit_user' value="/personal/toUserEditShare.html" />
    <div class='hide' id='hide_album_msg' index="/album/toAlbumDatail.html/album_id/" edit="/album/toAlbumEditImg.html/album_id/" movie="/album/toAlbumEditMovie.html/album_id/"></div>
    <div class='hide' id="hide_comment_type" movie="/movie/toMovieInfo.html/id/" album="/album/toAlbumDatail.html/album_id/" topic="/topic/topicView.html/id/"></div>
    <div class='hide' id='hide_user_info' some="http://www.51oscar.com/someone/index/id/" session_id="428230" index="/personal/index.html" msg_url="http://www.51oscar.com/Personal/msgList" edit_url="http://www.51oscar.com/Personal/toUserEditShare"></div>
    <div class="hide" id="footer_info" footerUrl="/index/ajaxColumnList.html" columnUrl="/login/toColumn.html"></div>
    <div class="footer wp" id="footer">
        <div class="dlList clearfix">
            <dl>
                <dt><a href="javascript:viod(0);" title="栏目">栏目</a></dt>
                <dd><a href="http://www.51oscar.com/news.html" title="影视资讯" target="_blank">影视资讯</a></dd>
                <dd><a href="http://www.51oscar.com/review.html" title="新片影评" target="_blank">新片影评</a></dd>
                <dd><a href="http://www.51oscar.com/forum.html" title="影视贴吧" target="_blank">影视贴吧</a></dd>
            </dl>
            <dl>
                <dt><a href="javascript:viod(0);" title="产品服务">产品服务</a></dt>
                <dd><a href="http://www.leg3s.com/about/index.html" title="公司简介" target="_blank">公司简介</a></dd>
                <dd><a href="http://www.leg3s.com/product/index.html" title="影视服务" target="_blank">影视服务</a></dd>
                <dd><a href="http://www.leg3s.com/example/index.html" title="案例展示" target="_blank">案例展示</a></dd>
            </dl>
            <dl>
                <dt><a href="javascript:viod(0);" title="关于我们">关于我们</a></dt>
                <dd><a href="http://www.51oscar.com/about.html" title="关于我们" target="_blank">关于我们</a></dd>
                <dd><a href="http://www.51oscar.com/login/toColumn/id/32" title="家长监护">家长监护</a></dd>
                <dd><a href="http://www.51oscar.com/login/toColumn/id/2" title="联系我们" target="_blank">联系我们</a></dd>
            </dl>
            <dl>
                <dt><a href="javascript:viod(0);" title="网站条款">网站条款</a></dt>
                <dd><a href="http://www.51oscar.com/login/toColumn/id/3" title="免责声明" target="_blank">免责声明</a></dd>
                <dd><a href="http://www.51oscar.com/login/toColumn/id/33" title="会员条款" target="_blank">会员条款</a></dd>
                <dd><a href="http://www.51oscar.com/sitemap.html" title="网站地图" target="_blank">网站地图</a></dd>
            </dl>
            <dl class="last">
                <dt><a href="javascript:viod(0);" title="关注我们">关注我们</a></dt>
                <dd><a class="weibo icon" href="http://weibo.com/51oscar" title="新浪微博" target="_blank">&nbsp;</a></dd>
                <dd><a class="weibo_qq icon" href="http://t.qq.com/leg_51oscar" title="腾讯微博" target="_blank">&nbsp;</a></dd>
            </dl>
        </div>
        <div class="Copyright">
            <p>Copyright © 2012 <a href="http://www.51oscar.com" target="_blank" rel="nofollow">大众影评网</a>（51oscar.com）All rights reserved. 粤ICP备07500583号-2 </p>
        </div>
        <script type="text/javascript">
        var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
        document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fb333171377f6fc60e48165d7fa43110b' type='text/javascript'%3E%3C/script%3E"));
        </script>
    </div>
</body>

</html>