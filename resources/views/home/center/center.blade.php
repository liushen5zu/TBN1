<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>大众影评网，最具活力的影迷粉丝互动平台</title>
<meta name="keywords" content="大众影评网,影评网,影评"><meta name="description" content="一影一世界，一评一天地。奇葩热帖、明星八卦；犀利影评、吐槽电影；交友互动、免费看电影见明星；电影幕后、电影台词、电影周边，等你来" />
<link rel="shortcut icon" href="/Images/favicon.ico" />
<!--[if lt IE 9]>
    <script type="text/javascript" src="/ueditor/js/html5.js"></script>
<![endif]-->
<link type="text/css" rel="stylesheet" href="/ueditor/css/common.css" />
<style type="text/css">
        *{
            margin:0px;
            padding:0px;
            list-style:none;
        }
        #slide{
            width:1349px;
            height:440px;
            border:solid 1px #ddd;
            position:relative;
        }
        #images li{
            width:1349px;
            height:440px;
            position:absolute;
            left:0px;
            top:0px;
        }

        #dots{
            width:200px;
            height:20px;
            position:absolute;
            left:670px;
            bottom:5px;
        }

        #dots li{
            width: 15px;
            height: 15px;
            background:#aef;
            float:left;
            margin-right:5px;
            border-radius:50%;
        }

        #dots .active{
            background:black;
        }
    .nav a.hotNavItem{position:relative;color: #f60;}
    .nav a.hotNavItem.on{position:relative;color: #fff;}
    .nav a.hotNavItem:hover{color: #fff;}
    .nav a.hotNavItem span{position: absolute;top: 0;right: 16px;width:24px;height:16px;background: url(images/hot.png) no-repeat;}
/*  .nav a.hotNavItem span{position: absolute;top: -3px;right: 10px;font-size: 12px;background: orange;color: #fff;line-height: 14px;height: 14px;padding: 0 2px;border-radius: 4px;}
    .nav a.hotNavItem span:before{content:"";position: absolute;bottom: -5px;left: 5px;width:0;height:0;border-bottom: 5px solid transparent;border-left: 5px solid orange;}*/
    /*.nav a.hotNavItem span:after{content:"";position: absolute;bottom: -5px;left: 1px;width:0;height:0;border-bottom: 5px solid transparent;border-left: 5px solid #fff;}*/
</style>
<script type="text/javascript" src="/ueditor/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/ueditor/js/jquery.cookie.js"></script>
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
</head>
<body>
<header class="site_nav">
    @include('layouts.home.header')
    </section>
</header>
<section class="logoAndSreach">
    <div class="wp clearfix">
        <div class="logo fL">
            <a href="http://www.51oscar.com" title="大众影评网" target="_self"><img src="/ueditor/picture/logo.png" alt="大众影评网" /></a>
        </div>
        <div class="searchBox fR">
             <form name="form_sreach" action="/Search/index" method="get" >
                <!--[if !IE]><!--> <input class="txt_kw" name="word" type="text" value="" autocomplete="off" placeholder="搜索你感兴趣的" /><!--<![endif]-->
                <!--[if gte IE 10]> <input class="txt_kw" name="txt_kw" type="text" value="" autocomplete="off" placeholder="搜索你感兴趣的" /> <![endif]-->
                <!--[if lt IE 10]> <input class="txt_kw" name="txt_kw" type="text" autocomplete="off"  value="搜索你感兴趣的" /> <![endif]-->
                <input class="sreach" name="btn_sreach" type="submit" value="" >
               <!-- <input type="hidden" id="txt_header_url" value="http://www.51oscar.com" > -->
             <input type="hidden" name="__hash__" value="6666cd76f96956469e7be39d750cc7d9_919e2ef4751901b9c8b7495ff1de0b19" /></form>
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

<!-- 内容start -->
<link rel="stylesheet" href="/ueditor/css/index.css" />
<!--焦点幻灯片 s-->
<section class="picFocus">
    <div id="slide">
        <ul id="images">
             <li><a href="/home/3.html"><img src="/ueditor/picture/20.jpg" width="100%" alt=""></a></li>
             <li><a href="/home/1.html"><img src="/ueditor/picture/2.jpg" width="100%" alt=""></a></li>
             <li><img src="/ueditor/picture/21.jpg" width="100%" alt=""></li>
         </ul>

         <ul id="dots">
            <li></li>
            <li></li>
            <li></li>
         </ul>
    </div>
</section>
<!-- 轮播图 -->s
<script>
        /**
            1. 页面布局
            2. 定时器
        */
        var index = -1;
        var timer = null;

        $('#dots li').mouseover(function(){
            //清除定时器
            clearInterval(timer);
            //修改图片的显示的内容
            index  = $(this).index();
            //显示当前索引的图片和点
            show(index);
        }).mouseout(function(){
            // 启动定时器
            autoRun();
        });

        //自动变化
        function autoRun() {
            timer = setInterval(function(){
                index++;
                //显示当前索引对应 图片和点
                show(index);
                //判断
                if(index >= $('#images li').length-1) {
                    index = -1;
                }
            }, 4000);
        }
        //显示当前索引对应图片和点
        function show(index) {
            //点样式发生改变
            $('#dots li').removeClass('active');
            $('#dots li').eq(index).addClass('active');
            //切换图片
            //使其他索引的元素隐藏
            $('#images>li').fadeOut();      //siblings  
            //使当前索引的元素显示
            $('#images>li').eq(index).fadeIn();
        }
        autoRun();

    </script>

<!--焦点幻灯片 e-->

<!--最新资讯与特别策划 s-->
<section class="newAndPlan wp clearfix">
    <section class="new fL">
        <div class="title clearfix">
            <i class="line"></i><a href="/news/movie.html"  title="最新资讯" target="_self">精彩内容<em>>></em></a>
        </div>
        <div class="hotNew">
            <dl class="clearfix">
                <dt><a href="/news/6621.html" title="俄罗斯第一神片《维京》确定引进 俄版“权力的游戏”年内将映" target="_blank" ><img class="imgBorder" src="/ueditor/picture/5993f732a61a5.png" width="228" height="128" alt="俄罗斯第一神片《维京》确定引进 俄版“权力的游戏”年内将映" /></a></dt>
                <dd>
                    <a class="h2" href="/news/6621.html" title="俄罗斯第一神片《维京》确定引进 俄版“权力的游戏”年内将映" target="_blank" >俄罗斯第一神片《维京》确定引进 俄版“权力的游戏”年内将映</a>
                    <p>看过好莱坞的科幻，印度的摔跤，这次终于轮到战斗民族上场了。2017年1月于俄罗斯上映的影片《维京》， 历时7年拍摄，耗资12亿卢布，并在上映后9天拿下10亿卢布成为票房冠军（相当于人民币约1亿1千万），创俄罗斯影史最快过亿纪录。俄罗斯总统普京看完“直接给跪了”，大呼过瘾的同时亲自接见了该片的主创团队。最终《维京》成为俄罗斯历史上票房排行第二的影片，仅次于《斯大林格勒》。</p>
                </dd>
            </dl>
        </div>
        <div class="list clearfix">
        <ul>
            <li><a href="/news/6620.html" title="首届“晨星杯”亚太科幻电影工业大赛等你来参加！搭建科幻影视产业链就靠你啦！" target="_blank" >首届“晨星杯”亚太科幻电影工业大赛等你来参加！...</a></li><li><a href="/news/6611.html" title="《绿野仙踪》曝终极预告 多萝西与小伙伴踏上新征程" target="_blank" >《绿野仙踪》曝终极预告 多萝西与小伙伴踏上新征...</a></li><li><a href="/news/6610.html" title="中国大IP不输好莱坞 《京城81号2》居全球票房第四" target="_blank" >中国大IP不输好莱坞 《京城81号2》居全球票...</a></li><li><a href="/news/6608.html" title="电影《大象林旺之一炮成名》发布主题曲《一路吉祥》MV" target="_blank" >电影《大象林旺之一炮成名》发布主题曲《一路吉祥...</a></li>        </ul>
        <ul>
            <li><a href="/news/6607.html" title="票房福将连拍五片 张智霖《京城2》48小时破亿" target="_blank" >票房福将连拍五片 张智霖《京城2》48小时破亿</a></li><li><a href="/news/6606.html" title="《大象林旺》跳起舞 一颗爱秀的心挡不住" target="_blank" >《大象林旺》跳起舞 一颗爱秀的心挡不住</a></li><li><a href="/news/6605.html" title="拒浪费食物保肉肉身材 郑欣宜卖曲奇推动环保" target="_blank" >拒浪费食物保肉肉身材 郑欣宜卖曲奇推动环保</a></li><li><a href="/news/6602.html" title="2017香港十大电影票房排名 蔡瀚亿周秀娜影坛大丰收" target="_blank" >2017香港十大电影票房排名 蔡瀚亿周秀娜影坛...</a></li>        </ul>
        </div>
    </section><!--最新资讯 e-->
    <aside class="plan fR">
        <div class="title clearfix">
            <i class="pen icon"></i>特别策划
        </div>
        <div class="sideMenu">
        <a class="t" href="http://www.51oscar.com/forum/5158.html" title="这些台词讲出了太多人生的真相" target="_blank" >这些台词讲出了太多人生的真相</a>
            <span class="info">
                <a href="http://www.51oscar.com/forum/5158.html" title="这些台词讲出了太多人生的真相" target="_blank" ><img class="imgBorder" src="/ueditor/picture/56652f4fa06b2.jpg" width="238" height="134" alt="这些台词讲出了太多人生的真相" /></a>
                <p>这些台词讲出了太多人生的真相</p>
            </span><a class="t" href="http://www.51oscar.com/forum/5163.html" title="美国《帝国》杂志年度20部最佳影片名单" target="_blank" >美国《帝国》杂志年度20部最佳影片名单</a>
            <span class="info">
                <a href="http://www.51oscar.com/forum/5163.html" title="美国《帝国》杂志年度20部最佳影片名单" target="_blank" ><img class="imgBorder" src="/ueditor/picture/56652e012c86b.jpg" width="238" height="134" alt="美国《帝国》杂志年度20部最佳影片名单" /></a>
                <p>美国《帝国》杂志年度20部最佳影片名单</p>
            </span><a class="t" href="http://www.51oscar.com/forum/5159.html" title="这些电影的服饰美得不像话！" target="_blank" >这些电影的服饰美得不像话！</a>
            <span class="info">
                <a href="http://www.51oscar.com/forum/5159.html" title="这些电影的服饰美得不像话！" target="_blank" ><img class="imgBorder" src="/ueditor/picture/56652e71b07a4.jpg" width="238" height="134" alt="这些电影的服饰美得不像话！" /></a>
                <p>这些电影的服饰美得不像话！</p>
            </span><a class="t" href="http://www.51oscar.com/forum/5164.html" title="2015年度网友票选年度十佳电影" target="_blank" >2015年度网友票选年度十佳电影</a>
            <span class="info">
                <a href="http://www.51oscar.com/forum/5164.html" title="2015年度网友票选年度十佳电影" target="_blank" ><img class="imgBorder" src="/ueditor/picture/56652d716b7c2.jpg" width="238" height="134" alt="2015年度网友票选年度十佳电影" /></a>
                <p>2015年度网友票选年度十佳电影</p>
            </span>     </div>
    </aside><!--特别策划 e-->
</section>

<!--最新资讯与特别策划 e-->
<!--当前热映与即将上映 s-->
<section class="hotMovie wp">
    <div class="title clearfix">
        <i class="line"></i><a href="http://www.51oscar.com/movie/search/0_0_1_0.html" title="当前热映" target="_self">当前热映<em>>></em></a><!-- 跳到电影日历 -->
    </div>
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

<section class="comingMovie hotMovie wp">
    <div class="title clearfix">
        <i class="line"></i><a href="http://www.51oscar.com/movie/search/0_0_2_0.html" title="即将上映" target="_self" >即将上映<em>>></em></a><!-- 跳到电影日历 -->
    </div>
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

<!--当前热映与即将上映 e-->

<!--新片影评与电影票房 s-->
<section class="commAndBO wp clearfix">
    <section class="comments fL">
        <div class="title clearfix">
            <i class="line"></i><a href="http://www.51oscar.com/review.html" title="新片影评" target="_blank">新片影评<em>>></em></a>
        </div>
        <div class="commBox clearfix">
        <dl class="hotComm">
                  <dt>
                      <a href="/movie/39246.html" title="猩球崛起3：终极之战 " target="_blank" >
                          <img class="lazyImg  imgBorder" src="/ueditor/picture/b.gif" data-src="/Uploads/Movie/Poster/59acd0bc393cc.jpg" width="98" height="138" alt="猩球崛起3：终极之战 " />
                      </a>
                  </dt>    
                  <dd>
                      <p class="t"><a href="/review/12994.html" title="《猩球崛起3：终极之战 》影评：回归感情——终极圆满" target="_blank" >回归感情——终极圆满</a></p>
                      <p class="m">&nbsp; &nbsp; 万众期待，《猩球崛起3》终于姗姗来迟，和前两部一样的是，本部影片继续...</p>
                      <p class="b"><a class="user" href="/someone/428105.html" title="没有杀伤力的板砖" target="_blank" >没有杀伤</a>&nbsp;&nbsp;评论电影<a class="movie" href="/movie/39246.html" title="猩球崛起3：终极之战 " target="_blank" >《猩球崛起3...》</a></p>
                  </dd>
                </dl><dl class="hotComm">
                  <dt>
                      <a href="/movie/39195.html" title="鲛珠传 " target="_blank" >
                          <img class="lazyImg  imgBorder" src="/ueditor/picture/b.gif" data-src="/Uploads/Movie/Poster/597ec5e024abf.png" width="98" height="138" alt="鲛珠传 " />
                      </a>
                  </dt>    
                  <dd>
                      <p class="t"><a href="/review/12992.html" title="《鲛珠传 》影评：《鲛珠传》------华丽的空洞" target="_blank" >《鲛珠传》------华丽的空洞</a></p>
                      <p class="m">导演杨磊应该是对“九州”这个概念有所迷恋和执念的，拍完了电视剧《九州·天空城》，又趁着热度未减，...</p>
                      <p class="b"><a class="user" href="/someone/428136.html" title="听风过林" target="_blank" >听风过林</a>&nbsp;&nbsp;评论电影<a class="movie" href="/movie/39195.html" title="鲛珠传 " target="_blank" >《鲛珠传 》</a></p>
                  </dd>
                </dl>       
        
        <dl class="comm">
                  <dt>
                      <a href="/someone/428141.html" title="泣之雷" target="_blank" >
                          <img class="lazyImg pic" src="/ueditor/picture/b.gif" data-src="/Uploads/user_logo/150539811440762.jpg" width="40" height="40" alt="泣之雷" />
                      </a>
                  </dt>    
                  <dd>
                      <p class="t"><a href="/review/12991.html" title="《战狼2 》影评：那他妈是从前" target="_blank" >那他妈是从前</a></p>
                      <p class="b"><a class="user" href="/someone/428141.html" title="泣之雷" target="_blank" >泣之雷</a>&nbsp;&nbsp;评论电影<a class="movie" href="/movie/39177.html" title="战狼2 " target="_blank" >《战狼2 》</a></p>
                  </dd>
                </dl><dl class="comm">
                  <dt>
                      <a href="/someone/428136.html" title="听风过林" target="_blank" >
                          <img class="lazyImg pic" src="/ueditor/picture/b.gif" data-src="/Uploads/user_logo/150527693166067.jpg" width="40" height="40" alt="听风过林" />
                      </a>
                  </dt>    
                  <dd>
                      <p class="t"><a href="/review/12990.html" title="《长城 》影评：《长城》-----中国元素插上好莱坞特效的翅膀" target="_blank" >《长城》-----中国元素插上好莱坞特效的翅膀</a></p>
                      <p class="b"><a class="user" href="/someone/428136.html" title="听风过林" target="_blank" >听风过林</a>&nbsp;&nbsp;评论电影<a class="movie" href="/movie/38931.html" title="长城 " target="_blank" >《长城 》</a></p>
                  </dd>
                </dl><dl class="comm">
                  <dt>
                      <a href="/someone/428105.html" title="没有杀伤力的板砖" target="_blank" >
                          <img class="lazyImg pic" src="/ueditor/picture/b.gif" data-src="/Uploads/user_logo/150347529935731.jpg" width="40" height="40" alt="没有杀伤力的板砖" />
                      </a>
                  </dt>    
                  <dd>
                      <p class="t"><a href="/review/12988.html" title="《鲛珠传 》影评：" target="_blank" ></a></p>
                      <p class="b"><a class="user" href="/someone/428105.html" title="没有杀伤力的板砖" target="_blank" >没有杀伤力</a>&nbsp;&nbsp;评论电影<a class="movie" href="/movie/39195.html" title="鲛珠传 " target="_blank" >《鲛珠传 》</a></p>
                  </dd>
                </dl><dl class="comm">
                  <dt>
                      <a href="/someone/428105.html" title="没有杀伤力的板砖" target="_blank" >
                          <img class="lazyImg pic" src="/ueditor/picture/b.gif" data-src="/Uploads/user_logo/150347529935731.jpg" width="40" height="40" alt="没有杀伤力的板砖" />
                      </a>
                  </dt>    
                  <dd>
                      <p class="t"><a href="/review/12983.html" title="《三生三世十里桃花 》影评：没有突破的“美”行不通" target="_blank" >没有突破的“美”行不通</a></p>
                      <p class="b"><a class="user" href="/someone/428105.html" title="没有杀伤力的板砖" target="_blank" >没有杀伤力</a>&nbsp;&nbsp;评论电影<a class="movie" href="/movie/39183.html" title="三生三世十里桃花 " target="_blank" >《三生三世十里桃花...》</a></p>
                  </dd>
                </dl><dl class="comm">
                  <dt>
                      <a href="/someone/428105.html" title="没有杀伤力的板砖" target="_blank" >
                          <img class="lazyImg pic" src="/ueditor/picture/b.gif" data-src="/Uploads/user_logo/150347529935731.jpg" width="40" height="40" alt="没有杀伤力的板砖" />
                      </a>
                  </dt>    
                  <dd>
                      <p class="t"><a href="/review/12973.html" title="《战狼2 》影评：了解了观众就是成功" target="_blank" >了解了观众就是成功</a></p>
                      <p class="b"><a class="user" href="/someone/428105.html" title="没有杀伤力的板砖" target="_blank" >没有杀伤力</a>&nbsp;&nbsp;评论电影<a class="movie" href="/movie/39177.html" title="战狼2 " target="_blank" >《战狼2 》</a></p>
                  </dd>
                </dl><dl class="comm">
                  <dt>
                      <a href="/someone/428095.html" title="蜉蝣梦" target="_blank" >
                          <img class="lazyImg pic" src="/ueditor/picture/b.gif" data-src="/Public/Home/images/touxiang_18.jpg" width="40" height="40" alt="蜉蝣梦" />
                      </a>
                  </dt>    
                  <dd>
                      <p class="t"><a href="/review/12965.html" title="《战狼2 》影评：战狼，我有一个从军的梦" target="_blank" >战狼，我有一个从军的梦</a></p>
                      <p class="b"><a class="user" href="/someone/428095.html" title="蜉蝣梦" target="_blank" >蜉蝣梦</a>&nbsp;&nbsp;评论电影<a class="movie" href="/movie/39177.html" title="战狼2 " target="_blank" >《战狼2 》</a></p>
                  </dd>
                </dl>    
        </div>
    </section><!--新片影评 e-->
    
    <aside class="boxOffice fL">
        <div class="title clearfix">
            <i class="bar icon"></i>电影票房
        </div>
        <div class="slideTxtBox">
            <div class="hd">
                <ul class="clearfix"><li>内地</li><li>北美</li><li>香港</li></ul>
            </div>
            <div class="bd">
                <ul class="clearfix">
                    <li><i class="t">1</i><a href="/movie/39203.html" title="赛尔号大电影6：圣者..." target="_blank" >赛尔号大电影6：圣...</a><span>¥9,370</span></li><li><i class="t">2</i><a href="/movie/39210.html" title="赛车总动员3：极速挑..." target="_blank" >赛车总动员3：极速...</a><span>¥7,182</span></li><li><i class="t">3</i><a href="/movie/39208.html" title=" 极盗车神" target="_blank" > 极盗车神</a><span>¥6,463</span></li><li><i >4</i><a href="/movie/39177.html" title="战狼2" target="_blank" >战狼2</a><span>¥539,470</span></li><li><i >5</i><a href="/movie/39199.html" title="杀破狼·贪狼" target="_blank" >杀破狼·贪狼</a><span>¥44,046</span></li><li><i >6</i><a href="/movie/39201.html" title="地球：神奇的一天" target="_blank" >地球：神奇的一天</a><span>¥4,130</span></li><li><i >7</i><a href="/movie/39193.html" title="心理罪" target="_blank" >心理罪</a><span>¥28,205</span></li><li><i >8</i><a href="/movie/39209.html" title="星际特工：千星之城" target="_blank" >星际特工：千星之城</a><span>¥19,299</span></li><li><i >9</i><a href="/movie/39198.html" title="二十二" target="_blank" >二十二</a><span>¥16,325</span></li><li><i >10</i><a href="/movie/39200.html" title="十万个冷笑话2" target="_blank" >十万个冷笑话2</a><span>¥11,055</span></li>                </ul>                
              <ul class="clearfix" style="display:none;">
                    <li><i class="t">1</i><a href="/movie/39229.html" title="蜘蛛侠：英雄归来" target="_blank" >蜘蛛侠：英雄归来</a><span>$31,893</span></li><li><i class="t">2</i><a href="/movie/39223.html" title="敦刻尔克" target="_blank" >敦刻尔克</a><span>$17,247</span></li><li><i class="t">3</i><a href="/movie/39243.html" title=" 嗨翻姐妹行" target="_blank" > 嗨翻姐妹行</a><span>$10,816</span></li><li><i >4</i><a href="/movie/39237.html" title=".安娜贝尔2：诞生" target="_blank" >.安娜贝尔2：诞生</a><span>$7,821</span></li><li><i >5</i><a href="/movie/39239.html" title="表情奇幻冒险" target="_blank" >表情奇幻冒险</a><span>$7,659</span></li><li><i >6</i><a href="/movie/39238.html" title="王牌保镖" target="_blank" >王牌保镖</a><span>$3,982</span></li><li><i >7</i><a href="/movie/39241.html" title=".神偷联盟" target="_blank" >.神偷联盟</a><span>$1,490</span></li><li><i >8</i><a href="/movie/39240.html" title="猎凶风河谷" target="_blank" >猎凶风河谷</a><span>$1,003</span></li><li><i >9</i><a href="/movie/38991.html" title="了不起的菲丽西" target="_blank" >了不起的菲丽西</a><span>$473</span></li><li><i >10</i><a href="/movie/39242.html" title="龙之诞生" target="_blank" >龙之诞生</a><span>$270</span></li>                </ul>                
                <ul class="clearfix" style="display:none;">
                    <li><i class="t">1</i>
                        <a href="/movie/39227.html" title="敦刻尔克 " target="_blank" >敦刻尔克 </a>
                        <span>HK$2,435</span>
                        </li><li><i class="t">2</i>
                        <a href="/movie/39237.html" title="安娜贝尔2：诞生" target="_blank" >安娜贝尔2：诞生</a>
                        <span>HK$1,019</span>
                        </li><li><i class="t">3</i>
                        <a href="/movie/39236.html" title="军舰岛" target="_blank" >军舰岛</a>
                        <span>HK$1,009</span>
                        </li><li><i >4</i>
                        <a href="/movie/39116.html" title="哆啦A梦：大雄的南极..." target="_blank" >哆啦A梦：大雄的南...</a>
                        <span>HK$815</span>
                        </li><li><i >5</i>
                        <a href="/movie/39239.html" title="表情奇幻冒险" target="_blank" >表情奇幻冒险</a>
                        <span>HK$800</span>
                        </li><li><i >6</i>
                        <a href="/movie/39235.html" title="天才枪手" target="_blank" >天才枪手</a>
                        <span>HK$577</span>
                        </li><li><i >7</i>
                        <a href="/movie/39238.html" title="王牌保镖" target="_blank" >王牌保镖</a>
                        <span>HK$457</span>
                        </li><li><i >8</i>
                        <a href="/movie/39161.html" title="悟空传" target="_blank" >悟空传</a>
                        <span>HK$305</span>
                        </li><li><i >9</i>
                        <a href="/movie/38991.html" title="了不起的菲丽西" target="_blank" >了不起的菲丽西</a>
                        <span>HK$167</span>
                        </li><li><i >10</i>
                        <a href="/movie/39228.html" title="银魂 " target="_blank" >银魂 </a>
                        <span>HK$122</span>
                        </li>                </ul>                
            </div>
        </div>
    </aside><!--电影票房 e-->
</section>
<!--新片影评与电影票房 e-->

<!--发现好电影、热门活动  s-->
<section class="albumAndEvent wp clearfix">
    <section class="album fL">
        <div class="title clearfix">
            <i class="line"></i><a href="http://www.51oscar.com/album.html" title="发现.好电影" target="_blank" >发现.好电影<em>>></em></a>
        </div>
        <div class="cont clearfix">
            @foreach($aldetails as $v)
            <a class="link2" href="/home/album/{{$v['id']}}.html" title="{{$v['title']}}="_blank">
                 <img class="lazyImg imgBorder" src="{{$v['image']}}" alt="{{$v['title']}}" width="212" height="183" />
                {{$v['title']}}
            </a>
            @endforeach
        </div>
   </section><!--发现.好电影 e-->
    
    <aside class="event fL">
        <div class="title clearfix">
            <i class="gift icon"></i><a href="http://www.51oscar.com/activity.html" title="热门活动" target="_blank">热门活动<em>>></em></a>
        </div>
        <div class="cont">
            @foreach($activity as $v)
             <dl>
                <dt>
                    <a href="/home/activity/{{$v['id']}}.html" title="" target="_blank">{{$v['title']}}</a>
                </dt>
                <dd>
                    <p>时间：{{$v['created_at']}}至{{$v['rtime']}}</p>
                    <p>地点：{{$v['activity_site']}}</p>
                </dd>
             </dl>
             @endforeach
        </div> 
    </aside><!--热门活动 e-->
</section>
<!--发现好电影、热门活动 e-->


<!-- 内容end -->
<script type="text/javascript" src="/ueditor/js/jquery.superslide.2.1.1.js"></script>
<script>
//幻灯片
jQuery(".picFocus").slide({ mainCell:".bd ul",effect:"fold",autoPlay:true,delayTime:1000,interTime:4000,vis:1});

//特别策划
jQuery(".sideMenu").slide({
    titCell:".t", //鼠标触发对象
    targetCell:".info", //与titCell一一对应，第n个titCell控制第n个targetCell的显示隐藏
    effect:"slideDown", //targetCell下拉效果
    delayTime:300 , //效果时间
    triggerTime:150, //鼠标延迟触发时间（默认150）
    defaultPlay:true,//默认是否执行效果（默认true）
    returnDefault:false //鼠标从.sideMen移走后返回默认状态（默认false）
    });
//当前热映与即将上映 
jQuery(".picScroll").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",scroll:5,vis:5,pnLoop:false,autoPlay:false});    
jQuery(".comingMovie").slide({titCell:".hd ul",mainCell:".bd ul",autoPage:true,effect:"left",scroll:5,vis:5,pnLoop:false,autoPlay:false});

//电影票房
jQuery(".slideTxtBox").slide({effect:"fold"});

//播放预告片
$(".trailer").click(function(){
        showSwf.show($(this).attr("data-trailer")); 
});
</script>
<!-- 隐藏信息  --> 
<input type='hidden' id='txt_header_url' value="http://www.51oscar.com" />
<input type='hidden' id='txt_public_home' value="/Public/Home/" module="Index" ie_page="/movie/ie.html"  baidu_page="/movie/baidu.html" qvod_page="/movie/qvod.html" gvod_page="/movie/gvod.html"  loading_page="/movie/loading.html" />
<input type='hidden' id='txt_edit_user' value="/personal/toUserEditShare.html"/>
<div class='hide' id='hide_album_msg' index="/album/toAlbumDatail.html/album_id/" edit="/album/toAlbumEditImg.html/album_id/" movie="/album/toAlbumEditMovie.html/album_id/"></div>
<div class='hide' id="hide_comment_type" movie="/movie/toMovieInfo.html/id/" album="/album/toAlbumDatail.html/album_id/" topic="/topic/topicView.html/id/"></div>
<div class='hide' id='hide_user_info' some="http://www.51oscar.com/someone/index/id/" session_id="" index="/personal/index.html" msg_url="http://www.51oscar.com/Personal/msgList" edit_url="http://www.51oscar.com/Personal/toUserEditShare"></div>
<div class="hide" id="footer_info" footerUrl="/index/ajaxColumnList.html" columnUrl="/login/toColumn.html"></div>

<footer class="footer wp" id="footer">
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
    <div class="friendLink">
        <dl class="clearfix">
            <dt>友情链接：</dt>
            <dd>
                <ul>
                   <li><a rel="friend" href="http://www.vstars.cn" title="微明星网" target="_blank" >微明星网</a></li>
                     <li>|</li><li><a rel="friend" href="http://bbs.haiwainet.cn/portal.php" title="唐人街社区" target="_blank" >唐人街社区</a></li>
                     <li>|</li><li><a rel="friend" href="http://www.yugaopian.com" title="预告片世界" target="_blank" >预告片世界</a></li>
                     <li>|</li><li><a rel="friend" href="http://www.joyowo.com/" title="金柚网" target="_blank" >金柚网</a></li>
                     <li>|</li><li><a rel="friend" href="http://www.movieroad.cn/" title="如影旅行网" target="_blank" >如影旅行网</a></li>
                     <li>|</li> 
                </ul>
           </dd>        
        </dl>
    </div>
    <div class="Copyright"><p>Copyright © 2012 <a href="http://www.51oscar.com" target="_blank" rel="nofollow">大众影评网</a>（51oscar.com）All rights reserved. 粤ICP备07500583号-2 </p></div>
    <script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Fb333171377f6fc60e48165d7fa43110b' type='text/javascript'%3E%3C/script%3E"));
</script>
</footer>
</body>
</html>