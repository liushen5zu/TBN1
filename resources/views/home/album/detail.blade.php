<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title> _影集_大众影评网</title>
    <meta name="description" content="大众影评网影集:雷之影,雷之影名单,战狼2 ,英雄,阿凡达,2012世界末日" />
    <link rel="shortcut icon" href="/Images/favicon.ico" />
    <!--[if lt IE 9]>
  <script type="text/javascript" src="/Js/html5.js"></script>
<![endif]-->
    <link type="text/css" rel="stylesheet" href="/ueditor/Css/common.css" />
    <style type="text/css">
    .nav a.hotNavItem {
        position: relative;
        color: #f60;
    }

    .nav a.hotNavItem.on {
        position: relative;
        color: #fff;
    }

    .nav a.hotNavItem:hover {
        color: #fff;
    }

    .nav a.hotNavItem span {
        position: absolute;
        top: 0;
        right: 16px;
        width: 24px;
        height: 16px;
        background: url(/Images/HOT.png) no-repeat;
    }
    /*  .nav a.hotNavItem span{position: absolute;top: -3px;right: 10px;font-size: 12px;background: orange;color: #fff;line-height: 14px;height: 14px;padding: 0 2px;border-radius: 4px;}
  .nav a.hotNavItem span:before{content:"";position: absolute;bottom: -5px;left: 5px;width:0;height:0;border-bottom: 5px solid transparent;border-left: 5px solid orange;}*/
    /*.nav a.hotNavItem span:after{content:"";position: absolute;bottom: -5px;left: 1px;width:0;height:0;border-bottom: 5px solid transparent;border-left: 5px solid #fff;}*/
    </style>
    <script type="text/javascript" src="/ueditor/Js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="/ueditor/Js/jquery.cookie.js"></script>
    <script type="text/javascript" src="/ueditor/Js/common2.js"></script>
    <script type="text/javascript" src="/ueditor/Js/common.js"></script>
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
                <a href="http://www.51oscar.com" title="大众影评网" target="_self"><img src="/Images/logo.png" alt="大众影评网" /></a>
            </div>
            <div class="searchBox fR">
                <form name="form_sreach" action="/Search/index" method="get">
                    <!--[if !IE]><!-->
                    <input class="txt_kw" name="word" type="text" value="" autocomplete="off" placeholder="搜索你感兴趣的" />
                    <!--<![endif]-->
                    <!--[if gte IE 10]> <input class="txt_kw" name="txt_kw" type="text" value="" autocomplete="off" placeholder="搜索你感兴趣的" /> <![endif]-->
                    <!--[if lt IE 10]> <input class="txt_kw" name="txt_kw" type="text" autocomplete="off"  value="搜索你感兴趣的" /> <![endif]-->
                    <input class="sreach" name="btn_sreach" type="submit" value="">
                    <!-- <input type="hidden" id="txt_header_url" value="http://www.51oscar.com" > -->
                    <input type="hidden" name="__hash__" value="14d4bdbde77a3b298af8a729102a7064_ca6a788adee63e1c54b748d083213fd5" />
                </form>
                <input type="hidden" id="txt_header_url" value="http://www.51oscar.com">
                <input type="hidden" value="" id="sessionid">
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
    function dropMenu(obj) {
        $(obj).each(function() {
            var theSpan = $(this);
            var theMenu = theSpan.find(".user_more");
            var tarHeight = theMenu.height();
            theMenu.css({ height: 0, opacity: 0 });
            theSpan.hover(
                function() {

                    theMenu.stop().show().animate({ height: 175, opacity: 1 }, 600);
                },
                function() {
                    theMenu.stop().animate({ height: 0, opacity: 0 }, 600, function() {
                        $(this).css({ display: "none" });
                    });
                }
            );
        });
    }

    //自动登用的下拉菜单
    function dropMenu2(obj) {
        $(obj).each(function() {
            var theSpan = $(obj);
            var theMenu = theSpan.find(".user_more");
            var tarHeight = theMenu.height();
            //theMenu.css({height:0,opacity:0});
            theMenu.stop().show().animate({ height: 175, opacity: 1 }, 600);
            theSpan.live("mouseout", function() {
                theMenu.stop().animate({ height: 0, opacity: 0 }, 600, function() {
                    $(this).css({ display: "none" });
                });
            })
        })
    }

    function ajaxGetNotify(u) {
        $.get('/forum/getMsgCount', { usg: u },
            function(data) {
                $('#auto_msg').html(data);
            },
            'json'
        );
    }
    //导航条切换
    var curr_url = window.location.href;
    if (/.com\/news/.test(curr_url)) {
        $('#news').addClass('on');
    } else if (/.com\/movie/.test(curr_url)) {
        $('#movie').addClass('on');
    } else if (/.com\/review/.test(curr_url)) {
        $('#review').addClass('on');
    } else if (/.com\/forum/.test(curr_url)) {
        $('#forum').addClass('on');
    } else if (/.com\/album/.test(curr_url)) {
        $('#album').addClass('on');
    } else if (/.com\/activity/.test(curr_url)) {
        $('#activity').addClass('on');
    } else if (/.com\/topic/.test(curr_url)) {
        $('#topic').addClass('on');
    } else if (/.com\/zhongchou/.test(curr_url)) {
        $('#zhongchou').addClass('on');
    } else {
        $('#home').addClass('on');
    }
    $(document).ready(function() {
        //dropMenu(".after_landing"); 
        dropMenu(".user");
        URL = $('#txt_header_url').val() + '/';
        Common.init();

        //forum
        var sessionid = $('#sessionid').val();
        if (sessionid) {
            // setInterval("ajaxGetNotify(sessionid)", parseInt(120) * 1000);
            ajaxGetNotify(sessionid);
        }
    });
    </script>
    <link type="text/css" rel="stylesheet" href="/ueditor/Css/album.css" />
    <style>
    .albumDet .b .bshare-custom {
        float: left;
        width: 180px;
        margin-right: 330px;
    }

    .albumDet .b .add {
        margin-right: 20px;
    }
    </style>
    <!--主体部分 s-->
    <section class="mainWp wp clearfix">
        <section class="location">
            当前位置：<a href="http://www.51oscar.com" title="首页" target="_blank"><img src="/Images/location_ind.png" alt="大众影评网" style="vertical-align:text-bottom;" /></a>><a href="http://www.51oscar.com/album.html" title="影集" target="_blank">影集</a>>{{$al->title}} </section>
        <!--影集详情 s-->
        <section class="albumDet clearfix">
            <div class="title">
                {{$al->title}} </div>
            <div class="fL">
                <p class="des">{{$al->introduce}}</p>
                <p class="time">更新时间：{{substr($al->updated_at,0,10)}}</p>
                <span class="b clearfix">
              <div class="bshare-custom"><div class="bsPromo bsPromo2"></div><i>分享：</i><a title="分享到新浪微博" class="bshare-sinaminiblog"></a><a title="分享到微信" class="bshare-weixin"></a><a title="分享到QQ空间" class="bshare-qzone"></a><a title="分享到腾讯微博" class="bshare-qqmb"></a><a title="分享到朋友网" class="bshare-qqxiaoyou"></a><a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a></div>
                            <a class="add" href="/album/re_movie/album_id/1988"  title="给影集推荐影片" onclick="return Common.isLogin();">给影集推荐影片</a>
              <!--  onclick="return Common.isLogin()"-->
            </span>
            </div>
            <div class="fR">
                <dl>
                    <dt class="clearfix">
                        <div class="userLogoBox">
                            <a class="userLogo" href="/someone/428141.html" title="{{$al->user->username}}" target="_blank"><img class="lazyImg" src="{{$al->user->image}}" alt="{{$al->user->username}}" /></a>
                        </div>
                        <!--<div class="right-button">
                              <img src="/Public/Home/images/attention.gif" friend_id="" id='btn_img_add_focus'/>        </div>
          -->
                        <div class="userLogoBoxR">
                            <p>
                                <a href="/someone/428141.html" title="{{$al->user->username}}" target="_blank">{{$al->user->username}}</a>
                            </p>
                            <p><img src="/Public/Home/images/attention.gif" friend_id="428141" id='btn_img_add_focus' /></p>
                        </div>
                        <dt>
                            <dd class="userInfo">
                                <dl>
                                    <dd>
                                        <p><a class="c_f60" href="/someone/428141.html" target="_blank">1</a></p>
                                        <p> 影集 </p>
                                    </dd>
                                    <dd>
                                        <p><a class="c_f60" href="/someone/428141.html" target="_blank">0</a></p>
                                        <p>关注</p>
                                    </dd>
                                    <dd>
                                        <p><a class="c_f60" href="/someone/428141.html" target="_blank">0</a></p>
                                        <p>粉丝</p>
                                    </dd>
                                </dl>
                            </dd>
                </dl>
            </div>
        </section>
        <!--影集详情 e-->
        <section class="albumBox">
            <ul class="tab clearfix">
                <li class="crater-album on"><a href="/home/album/{id}.html">创建者添加的影片（<em class="c_f60">4部</em>)</a></li>
                <li class="recommend-album"><a href="/album/1988/type/f.html">片友推荐的影片（<em class="c_f60">0部</em>)</a></li>
            </ul>
            <div class="cont">
                <ul>
                    @foreach ($mode as $v)
                    <li class="albumItem clearfix">
                        <dl class="clearfix">
                            <dt>
                                <a title="{{$v->name}}" href="###" title="###" target="_blank"><img class="lazyImg" src="{{$v->image}}" data-src="{{$v->image}}" alt="{{$v->name}}"></a>
                            </dt>
                            <dd>
                                <p class="t clearfix">
                                    <span class="movName ellipsis fL"><a href="/home/{id}.html" title="{{$v->name}}" target="_blank">{{$v->name}}</a></span>
                                    <span class="score c_f60 fR">6.0分</span>
                                </p>
                                <p class="m">主演：<em>{{$v->director_name->name}}</em></p>
                                <p class="b">
                                    推荐理由：<em>{{$v->recom}}</em>
                                </p>
                            </dd>
                        </dl>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="pagination">
            </div>
        </section>
        <section class="user_sayBox" id="user_sayBox">
            <input type="hidden" value="6" id="shareText">
            <!--评论类型-->
            <div class="title clearfix">
                <i class="info icon"></i>网友评论<span>要评论须要先<a href="http://www.51oscar.com/login.html" title="登录"  target="_blank">登录</a>或者<a href="http://www.51oscar.com/login/regist.html" title="注册"  target="_blank">注册</a></span> </div>
            <!--评论编辑输入框 s-->
            <div class="user_say" id="user_say">
                <textarea id="movie_comment_text" name="" style="height:200px;" cols="" rows=""></textarea>
                <div>
                    <div style="clear:both;"></div>
                    <div style="float:right;margin-top:10px;position:relative;">
                        <div id="div_comment_float">
                            <!--<div id='div_comment_qq'></div>
                            <div id="div_comment_img2">
                                <a href="javascript:;" class="show_img_tag hide">显示刚才的图片</a>
                                <input type='button' id='btn_upload2' ajax_url="/uploadImage"/>
                                <input type='hidden' id='hide_txt_img'/>
                            </div>-->
                            <a href="javascript:" class="movie_comment_btn" onclick="movieComment()">发布</a>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div style="clear:both"></div>
                <textarea id="replayHtml" style="display:none">
                    <div class="replay-content">
                        <i class="triangle"></i>
                        <form method="post" action="">
                            <div>&lt;textarea&gt;&lt;/textarea&gt;</div>
                            <input type="hidden" id="comment_p_user_id" value="" />
                            <input type="hidden" id="comment_pid_re" value="0" />
                            <div class="btn clearfix">
                                <a id="div_comment_qq" class="div_comment_qq_inner icon">表情</a>
                                <button class="cancel-btn" type="button">取消</button>
                                <button class="replay-btn" type="submit">回复</button>
                            </div>
                            <input type="hidden" name="__hash__" value="ffe99cf95977c1bdc6793a86f88361c2_3e280345331ab8f1463411b0f3b1ed77" />
                            <input type="hidden" name="__hash__" value="14d4bdbde77a3b298af8a729102a7064_ca6a788adee63e1c54b748d083213fd5" />
                        </form>
                    </div>
                </textarea>
            </div>
            <!--评论编辑输入框 e-->
            <!--评论列表 s-->
            <div class="commsList">
            </div>
        </section>
        <!--网友评论 e-->
    </section>
    <!--主体部分 e-->
    <!--登陆对话框 s-->
    <div class="mark_51"></div>
    <div class="Madfms">
        <div class="Malogin_box">
            <div class="Macon_warp">
                <div class="login_title clearfix">登录
                    <a href="javascript:void()" onclick="$('.Madfms,.mark_51').hide();"><span class="login_close"></span></a>
                </div>
                <div class="warp_b">
                    <table border="0" cellspacing="5" cellpadding="0">
                        <tbody>
                            <tr>
                                <td align="right" valign="top" class="td1">
                                    <label>邮箱:</label>
                                </td>
                                <td valign="top">
                                    <input type="text" class="txt_input" id="txt_header_email" name="" onblur="Common_new.isEmail();">
                                    <h5 class="regist_mail" id="email-error"></h5></td>
                            </tr>
                            <tr>
                                <td height="20">&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td align="right" valign="top" class="td1">
                                    <label>密码:</label>
                                </td>
                                <td valign="top">
                                    <input type="password" maxlength="16" id="txt_header_pwd" class="txt_input" value="" name="" />
                                    <div class="regist_mail" id="pwd-error"></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="td1">&nbsp;</td>
                                <td class="line_3">
                                    <label>
                                        <input type="checkbox" id="txt_third_reg_type" name="txt_email" />记住我</label>
                                    <a href="http://www.51oscar.com/Login/toFindPwd">找回密码</a></td>
                            </tr>
                            <tr>
                                <td class="td1">&nbsp;</td>
                                <td>
                                    <a class="toLoginBton" href="javascript:;" id="btn_header_login">
                                        <input type="button" name="regist" value="登录" class="loginBton">
                                    </a>
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
    window.UEDITOR_HOME_URL = "/Public/ueditor/"; //UEDITOR_HOME_URL、config、all这三个顺序不能改变
    </script>
    <script type="text/javascript" src="/Public/ueditor/ueditor.config_son.js"></script>
    <script type="text/javascript" src="/Public/ueditor/ueditor.all.min.js"></script>
    <script type="text/javascript" src="/Js/comment.js"></script>
    <script type="text/javascript" src="/Js/common.js"></script>
    <script type="text/javascript" src="/Js/jquery.qqFace.js"></script>
    <script src="/Js/public.js"></script>
    <script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=2&amp;lang=zh"></script>
    <script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>
    <script type="text/javascript">
    var artical_id = 1988; //当前影集的id

    //实例化编辑框
    var editor = UE.getEditor('movie_comment_text');

    UE.getEditor('movie_comment_text').addListener('click', function() {
        Common.isLogin();
    });


    //网友评论发布
    function movieComment() {
        Comments.Comment();
    }

    //点击回复
    function replayComment(obj, user) {
        Comments.replayComment(obj, user);
    }

    //加载更多子评论
    $(".more_comms_reply").click(function() {
        $(this).html('<img src="/Images/loading.gif" alt="loading" />加载中...');
        var comment_pid = $(this).siblings(".dis_reply").find(".comment_pid").val(); //当条评论的id
        var p = $(this).siblings(".more_comms_reply_p").val(); //当前评论子评论页码
        var _this = $(this);
        var comment_type = parseInt($("#shareText").val()); //评论的类型          
        setTimeout(function() {
            Comments.more_comms_reply(_this, comment_pid, comment_type, p);
        }, 200);
    });

    //添加关注
    $("#btn_img_add_focus").click(function() {
        Common_new.ajaxAddAttens($(this));
    })

    //片友推荐影片
    $(function() {
        var _url = window.location.href;
        if (/\/f.html$/.test(_url) > 0) {
            $('.recommend-album').addClass('on');
            $('.crater-album').removeClass('on');
        } else {
            $('.crater-album').addClass('on');
            $('.recommend-album').removeClass('on');
        }

        //编辑影集
        $('.albumDet .b .edit').length > 0 ? $('.albumDet .b .bshare-custom').css('margin-right', '180px') : false;

    });
    </script>
    <input type="hidden" id="txt_public_home" value="/Public/Home/">
    <!-- 隐藏信息  -->
    <input type='hidden' id='txt_header_url' value="http://www.51oscar.com" />
    <input type='hidden' id='txt_public_home' value="/Public/Home/" module="Album" ie_page="/movie/ie.html" baidu_page="/movie/baidu.html" qvod_page="/movie/qvod.html" gvod_page="/movie/gvod.html" loading_page="/movie/loading.html" />
    <input type='hidden' id='txt_edit_user' value="/personal/toUserEditShare.html" />
    <div class='hide' id='hide_album_msg' index="/album/toAlbumDatail.html/album_id/" edit="/album/toAlbumEditImg.html/album_id/" movie="/album/toAlbumEditMovie.html/album_id/"></div>
    <div class='hide' id="hide_comment_type" movie="/movie/toMovieInfo.html/id/" album="/album/toAlbumDatail.html/album_id/" topic="/topic/topicView.html/id/"></div>
    <div class='hide' id='hide_user_info' some="http://www.51oscar.com/someone/index/id/" session_id="" index="/personal/index.html" msg_url="http://www.51oscar.com/Personal/msgList" edit_url="http://www.51oscar.com/Personal/toUserEditShare"></div>
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