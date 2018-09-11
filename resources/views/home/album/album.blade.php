<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>影集|系列电影集|明星影集_大众影评网</title>
    <meta name="description" content="大众影评网影集频道,收藏各类系列电影集,经典电影影集,您也可以创建喜爱的明星影集和各类专题电影影集与大家分享." />
    <link rel="shortcut icon" href="/Images/favicon.ico" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/html5_1.js"></script>
<![endif]-->
    <link type="text/css" rel="stylesheet" href="/ueditor/css/common_1.css" />
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
        background: url(images/hot_1.png) no-repeat;
    }
    /*  .nav a.hotNavItem span{position: absolute;top: -3px;right: 10px;font-size: 12px;background: orange;color: #fff;line-height: 14px;height: 14px;padding: 0 2px;border-radius: 4px;}
    .nav a.hotNavItem span:before{content:"";position: absolute;bottom: -5px;left: 5px;width:0;height:0;border-bottom: 5px solid transparent;border-left: 5px solid orange;}*/
    /*.nav a.hotNavItem span:after{content:"";position: absolute;bottom: -5px;left: 1px;width:0;height:0;border-bottom: 5px solid transparent;border-left: 5px solid #fff;}*/
    </style>
    <script type="text/javascript" src="/ueditor/js/jquery-1.7.2.min_1.js"></script>
    <script type="text/javascript" src="/ueditor/js/jquery.cookie_1.js"></script>
    <script type="text/javascript" src="/ueditor/js/common2_1.js"></script>
    <script type="text/javascript" src="/ueditor/js/common_1.js"></script>
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
                <form name="form_sreach" action="/Search/index" method="get">
                    <!--[if !IE]><!-->
                    <input class="txt_kw" name="word" type="text" value="" autocomplete="off" placeholder="搜索你感兴趣的" />
                    <!--<![endif]-->
                    <!--[if gte IE 10]> <input class="txt_kw" name="txt_kw" type="text" value="" autocomplete="off" placeholder="搜索你感兴趣的" /> <![endif]-->
                    <!--[if lt IE 10]> <input class="txt_kw" name="txt_kw" type="text" autocomplete="off"  value="搜索你感兴趣的" /> <![endif]-->
                    <input class="sreach" name="btn_sreach" type="submit" value="">
                    <!-- <input type="hidden" id="txt_header_url" value="http://www.51oscar.com" > -->
                    <input type="hidden" name="__hash__" value="cae8736a2a78c03ac4c521d3ff86a5c2_d53790936a56fb3f6db9ffa9ddf37565" />
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
    function  ajaxGetNotify(u) {          
        $.get('/forum/getMsgCount',              { usg: u },             function(data) {
            $('#auto_msg').html(data);            
        },             'json'        );    
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
    } else if (/.com\/home\/album/.test(curr_url)) {
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
            // setInterval("ajaxGetNotify(sessionid)", parseInt(120) * 1000);
            ajaxGetNotify(sessionid);
        }
    });
    </script>
    <link type="text/css" rel="stylesheet" href="/ueditor/css/album.css" />
    <!--主体部分 s-->
    <section class="mainWp wp clearfix">
        <!--推荐影集 s-->
        <section class="recomAlbum clearfix">
            <div class="left fL">
                <div class="item">
                    <a class="pic" href="http://www.51oscar.com/album/detail/id/1861/p/2.html" title="永不过时的20部励志影片" target="_blank"><img src="picture/586dd95633479.jpg" alt="永不过时的20部励志影片" /></a>
                    <i class="tag">经典励志</i>
                    <p class="opacity6"></p>
                    <p class="t"><a href="http://www.51oscar.com/album/detail/id/1861/p/2.html" title="永不过时的20部励志影片" target="_blank">永不过时的20部励志影片</a></p>
                </div>
                <div class="item">
                    <a class="pic" href="http://www.51oscar.com/album/727.html" title="最适合毕业生看的电影" target="_blank"><img src="picture/586dcfa1092d2.jpg" alt="最适合毕业生看的电影" /></a>
                    <i class="tag">毕业指南</i>
                    <p class="opacity6"></p>
                    <p class="t"><a href="http://www.51oscar.com/album/727.html" title="最适合毕业生看的电影" target="_blank">最适合毕业生看的电影</a></p>
                </div>
            </div>
            <div class="middle fL">
                <div class="item">
                    <a class="pic" href="http://www.51oscar.com/album/1908.html" title="女生在成长路上必看的10部电影" target="_blank"><img src="picture/586dcf916529d.jpg" alt="女生在成长路上必看的10部电影" /></a>
                    <i class="tag">女生必看</i>
                    <p class="opacity6"></p>
                    <p class="t"><a href="http://www.51oscar.com/album/1908.html" title="女生在成长路上必看的10部电影" target="_blank">女生在成长路上必看的10部电影</a></p>
                </div>
            </div>
            <div class="right fR">
                <div class="item">
                    <a class="pic" href="http://www.51oscar.com/album/1888.html" title="让你嗨翻的9部韩国无厘头式喜剧" target="_blank"><img src="picture/586dcf837314a.jpg" alt="让你嗨翻的9部韩国无厘头式喜剧" /></a>
                    <i class="tag">韩国喜剧</i>
                    <p class="opacity6"></p>
                    <p class="t"><a href="http://www.51oscar.com/album/1888.html" title="让你嗨翻的9部韩国无厘头式喜剧" target="_blank">让你嗨翻的9部韩国无厘头式喜剧</a></p>
                </div>
                <div class="item">
                    <a class="pic" href="http://www.51oscar.com/album/310.html" title="好看+逆袭类的欧美校园电影" target="_blank"><img src="picture/586eebb361209.jpg" alt="好看+逆袭类的欧美校园电影" /></a>
                    <i class="tag">校园逆袭</i>
                    <p class="opacity6"></p>
                    <p class="t"><a href="http://www.51oscar.com/album/310.html" title="好看+逆袭类的欧美校园电影" target="_blank">好看+逆袭类的欧美校园电影</a></p>
                </div>
            </div>
        </section>
        <section class="leftWp fL">
            <section class="findGoogMov">
                <div class="titList title clearfix">
                    <a id="lineOn" href="/album.html">新鲜出炉</a>
                    <a href="/album/type/2.html">最受欢迎</a>
                    <i id="moveLine"></i>
                </div>
                <div id="googMovCont" class="cont clearfix">
                    <!--新鲜出炉，热门影集开始-->
                @foreach ($album as $v)
                    <dl class="clearfix">
                        <dt class="fL">
                            <p class="t"><a href="/home/album/{{$v['id']}}.html" title="{{$v->title}}" target="_blank">{{$v->title}}</a></p>
                            <p class="m"><span class="name"><a href="/someone/428141.html" title="{{$v->user->username}}" target="_blank">{{$v->user->username}}</a></span><span>更新时间：{{substr($v->updated_at,0,10)}}</span>[<em class="c_f60">收录4部电影</em>]</p>
                            <p class="b">{{$v->introduce}}</p>
                        </dt>
=
                    
                    <dd class="fR">
                            <a href="/album/{{$v['id']}}" title="" target="_blank"><img class="lazyImg" src="{{$v->image}}"></a>
                    </dd> 
                    </dl>
                @endforeach
                </div>
                <div class="pagination">
                    &nbsp;<span class='current'>1</span>&nbsp;<a href='/album/index/p/2.html'>&nbsp;2&nbsp;</a>&nbsp;<a href='/album/index/p/3.html'>&nbsp;3&nbsp;</a>&nbsp;<a href='/album/index/p/4.html'>&nbsp;4&nbsp;</a>&nbsp;<a href='/album/index/p/5.html'>&nbsp;5&nbsp;</a> <a href='/album/index/p/2.html'>下一页</a> <span style="color:black;">第 1/142 页</span>
                    <input type="hidden" value="http://www.51oscar.com/album/index/p" id="forumID">
                    <input id="goid" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')" type="text" style="width:30px;height:26px;border: 1px solid #e9e9e9;">
                    <a onclick="go()"> GO </a>
                </div>
            </section>
            <!--新鲜出炉，热门影集结束-->
        </section>
        <!--leftWp e-->
        <aside class="rightWp fR">
            <section class="creatAlbum">
                <a class="crear_my_album" url="/toAlbumAdd" href="/album/toAlbumAdd" title="创建我的影集"><img src="/ueditor/picture/crear_my_album.jpg" alt="创建我的影集"></a>
            </section>
            <section class="hotTalk">
                <div class="title clearfix">
                    <i class="info icon"></i><a href="http://www.51oscar.com/forum.html" title="当前热议" target="_blank">当前热议<em>>></em></a>
                </div>
                <div class="cont clearfix">
                    <ul>
                    </ul>
                </div>
            </section>
            <!--当前热议 e-->
            <section class="hotAlbum">
                <div class="title clearfix">
                    <i class="paper icon"></i><a href="http://www.51oscar.com/album/type/2.html" target="_blank">热门影集</a>
                </div>
                <div class="cont clearfix">
                    <ul>
                        <li><a href="/album/1861.html" title="永不过时的20部励志影片" target="_blank">永不过时的20部励志影片</a></li>
                        <li><a href="/album/1809.html" title="第35届伦敦影评人协会奖获奖电影" target="_blank">第35届伦敦影评人协会奖获奖电影</a></li>
                        <li><a href="/album/377.html" title="新西兰天才导演: 彼得·杰克逊" target="_blank">新西兰天才导演: 彼得·杰克逊</a></li>
                        <li><a href="/album/1810.html" title="2015年2月新片观影指南" target="_blank">2015年2月新片观影指南</a></li>
                        <li><a href="/album/1792.html" title="2014动画界奥斯卡提名电影" target="_blank">2014动画界奥斯卡提名电影</a></li>
                        <li><a href="/album/1785.html" title="2015必看的12部电影" target="_blank">2015必看的12部电影</a></li>
                        <li><a href="/album/1753.html" title="2015年贺岁档大片盘点" target="_blank">2015年贺岁档大片盘点</a></li>
                        <li><a href="/album/1807.html" title="2014年被下载最多的影片TOP20" target="_blank">2014年被下载最多的影片TOP20</a></li>
                        <li><a href="/album/1813.html" title="2015年全球动画大电影前瞻" target="_blank">2015年全球动画大电影前瞻</a></li>
                        <li><a href="/album/1824.html" title="2015年2月电影口碑榜Top20" target="_blank">2015年2月电影口碑榜Top20</a></li>
                    </ul>
                </div>
            </section>
            <!--热门影集 e-->
            <section class="hotMovie">
                <div class="title clearfix">
                    <i class="movie icon"></i><a href="http://www.51oscar.com/movie/search/0_0_1_0.html" title="热映影片" target="_blank">热映影片<em>>></em></a>
                </div>
                <div class="cont clearfix">
                    <dl class="clearfix">
                        <dt>
                            <a href="/movie/39278.html" title="芳华 " target="_blank">
                            <img class="lazyImg pic imgBorder" src="picture/59c33acd86ed5.jpg" data-src="/Uploads/Movie/Poster/59c33acd86ed5.jpg" width="98" height="138" alt="芳华 " />
                        </a>
                        </dt>
                        <dd>
                            <a class="t" href="/movie/39278.html" title="芳华 " target="_blank">芳华 </a>
                            <p>导演：<em>冯小刚</em></p>
                            <p>类型：<em>剧情/战争</em></p>
                            <a class="trailer" href="javascript:viod(0);" title="预告片" data-trailer="">预告片<i></i></a>
                        </dd>
                    </dl>
                    <dl class="clearfix">
                        <dt>
                            <a href="/movie/39277.html" title="空天猎 " target="_blank">
                            <img class="lazyImg pic imgBorder" src="picture/59c3397b4c6e5.jpg" data-src="/Uploads/Movie/Poster/59c3397b4c6e5.jpg" width="98" height="138" alt="空天猎 " />
                        </a>
                        </dt>
                        <dd>
                            <a class="t" href="/movie/39277.html" title="空天猎 " target="_blank">空天猎 </a>
                            <p>导演：<em>李晨</em></p>
                            <p>类型：<em>动作/剧情/战...</em></p>
                            <a class="trailer" href="javascript:viod(0);" title="预告片" data-trailer="">预告片<i></i></a>
                        </dd>
                    </dl>
                    <dl class="clearfix">
                        <dt>
                            <a href="/movie/39276.html" title="缝纫机乐队 " target="_blank">
                            <img class="lazyImg pic imgBorder" src="picture/59c318412247e.jpg" data-src="/Uploads/Movie/Poster/59c318412247e.jpg" width="98" height="138" alt="缝纫机乐队 " />
                        </a>
                        </dt>
                        <dd>
                            <a class="t" href="/movie/39276.html" title="缝纫机乐队 " target="_blank">缝纫机乐队 </a>
                            <p>导演：<em>大鹏</em></p>
                            <p>类型：<em>喜剧/音乐</em></p>
                            <a class="trailer" href="javascript:viod(0);" title="预告片" data-trailer="">预告片<i></i></a>
                        </dd>
                    </dl>
                    <dl class="clearfix">
                        <dt>
                            <a href="/movie/39275.html" title="遗忘空间 " target="_blank">
                            <img class="lazyImg pic imgBorder" src="picture/59c0a983d72c3.jpeg" data-src="/Uploads/Movie/Poster/59c0a983d72c3.jpeg" width="98" height="138" alt="遗忘空间 " />
                        </a>
                        </dt>
                        <dd>
                            <a class="t" href="/movie/39275.html" title="遗忘空间 " target="_blank">遗忘空间 </a>
                            <p>导演：<em>韩汶青</em></p>
                            <p>类型：<em>恐怖/悬疑</em></p>
                            <a class="trailer" href="javascript:viod(0);" title="预告片" data-trailer="">预告片<i></i></a>
                        </dd>
                    </dl>
                    <dl class="clearfix">
                        <dt>
                            <a href="/movie/39274.html" title="疯狂旅程 " target="_blank">
                            <img class="lazyImg pic imgBorder" src="picture/59c0a6cb6ed46.jpg" data-src="/Uploads/Movie/Poster/59c0a6cb6ed46.jpg" width="98" height="138" alt="疯狂旅程 " />
                        </a>
                        </dt>
                        <dd>
                            <a class="t" href="/movie/39274.html" title="疯狂旅程 " target="_blank">疯狂旅程 </a>
                            <p>导演：<em>龙野</em></p>
                            <p>类型：<em>喜剧/剧情</em></p>
                            <a class="trailer" href="javascript:viod(0);" title="预告片" data-trailer="">预告片<i></i></a>
                        </dd>
                    </dl>
                </div>
            </section>
            <!--热映影片 e-->
        </aside>
        <!--rightWp e-->
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
    <script type="text/javascript">
    $('.crear_my_album').click(function() {
        if (!Common.isLogin()) {
            return false;
        }
    });

    var p = 1; //第一次滚动，显示第二页的数据
    var mark_croll = 1; //除了第一页之外，其他页都不滚动
    if (mark_croll != 0) {
        $(window).bind("scroll", function() {
            if ($(document).scrollTop() + $(window).height() > $("#googMovCont").offset().top + $("#googMovCont").height() && p < 3) {
                setTimeout(loadNews, 100);
            }
        });
    }

    function loadNews() {
        //$(".loadNextPage").css("display","block");
        var lock = false;
        if (lock) return;
        if (p >= 3) return; //只滚动两次
        $.ajax({
            url: '/Album/ajaxListNew/p/' + p,
            type: 'get',
            dataType: 'json',
            async: false,
            success: function(data) {
                lock = true;
                var data = data.data;
                if (data == null) {
                    $(".loadNextPage").css("display", "none");
                    return false;
                }
                var newElements = '';
                for (var i = 0; i < data.length; i++) {
                    var d = new Date(data[i].last_update_time * 1000);
                    var date_f = formatDate(d);
                    newElements += '<dl class="clearfix">' +
                        '<dt class="fL">' +
                        '<p class="t"><a href="/album/' + data[i].album_id + '.html" title="' + data[i].name + '" target="_blank">' + data[i].name + '</a></p>' +
                        '<p class="m"><span class="name"><a href="/someone/' + data[i].user_id + '.html" title="' + data[i].nick_name + '" target="_blank">' + data[i].nick_name + '</a></span><span>更新时间：' + date_f + '</span>[<em class="c_f60">收录' + data[i].creator_movie_count + '部电影</em>]</p>' +
                        '<p class="b">' + data[i].description + '</p>' +
                        '</dt>' +
                        '<dd class="fR">' +
                        '<a href="movie/' + data[i].movie_id_0 + '.html" title="" target="_blank"><img class="lazyImg" src="' + data[i].poster_0 + '" alt="' + data[i].movie_name_0 + '" /></a>' +
                        '<a href="movie/' + data[i].movie_id_1 + '.html" title="" target="_blank"><img class="lazyImg" src="' + data[i].poster_1 + '" alt="' + data[i].movie_name_1 + '" /></a>' +
                        '</dd>' +
                        '</dl>';
                }
                $("#googMovCont").append(newElements);
                p += 1;
                if (p >= 3) {
                    $(".loadNextPage").css("display", "none");
                    //$("#page").css("display","block");
                    $(".pagination span:first").remove();
                    $('.pagination a:first').before("<a href='/album/index/p/1.html'>&nbsp;1&nbsp;</a>");
                    $("[href='/album/index/p/3.html']").addClass('current');
                }

            },

            complete: function() {
                lock = false;
            }

        });
    }

    //在js中时间戳转换成时间
    function formatDate(now) {
        var year = now.getFullYear();
        var month = now.getMonth() + 1;
        var date = now.getDate();
        //var   hour=now.getHours();     
        //var   minute=now.getMinutes();    
        return year + "-" + month + "-" + date;
    }

    //播放预告片
    $(".trailer").click(function() {
        showSwf.show($(this).attr("data-trailer"));
    });

    scrollFixed(".hotMovie", "#footer", 40);

    function go() {
        var goid = $('#goid').val();
        if (goid == '') {
            alert('请输入页码');
            return false;
        }
        var forumId = $('#forumID').val();
        location = forumId + "/" + goid + ".html";
    }
    </script>
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