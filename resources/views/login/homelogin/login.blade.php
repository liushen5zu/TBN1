<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>电影王国登录</title>
    <meta name="keywords" content="电影王国登录">
    <meta name="description" content="电影王国登录">
    <link rel="shortcut icon" href="http://www.51oscar.com/favicon.ico" />
    <link rel="stylesheet" href="/ueditor/css/base.css">
    <link rel="stylesheet" href="/ueditor/css/userlogin.css">
 </script>
<!-- var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?4a4681a3b1efbd3cf94cde90ed8a8a95";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})(); -->
</script>
</head>

<body>
    
<div class="head">
    <div style=" width:980px; margin:0 auto;">
        <ul>
            <li style="float:left"><a href="http://www.51oscar.com"><img src="/ueditor/picture/logo.png" alt="电影王国" /></a></li>
            <li style="float:right; margin-top:20px; color:#666666; font-size:14px;">还没有帐号？ <a href="http://www.51oscar.com/login/regist.html" class="regt">立即注册</a></li>
        </ul>
    </div>
</div>

<div class="hotMv" style="background:url() no-repeat top center;">
    <div class="lgodiv">

    </div>
    <div class="lgodiv2 clearfix">
            @if(Session::has('error'))
            <div style="padding:5px;margin:0px;">
                <div>
                    <div style="text-align: center;line-height:30px;color:red;font-size:25px;margin-top:15px">{{Session::get('error')}} </div>
                </div>
            </div>
            @endif
        <div class="fom_left" style="margin-top:3px">
            <h2>发现、记录、分享属于你的个性化观影社区</h2>
            <p>帮您发现、记录、分享电影；第一时间了解最新动态；获取电影内外的精彩</p>
            <h2>轻松实现导演梦</h2>
            <p>专业影视众筹平台帮助您实现电影梦想</p>
            <h2>丰富多彩的线下活动</h2>
            <p>免费观影、剧组探班、特邀出演、明星见面会等你加入</p>
            <div class="QQidv">
                <p><span class="linkspan">官方QQ群：</span><a class="linkAlgin" target="_blank" href="http://shang.qq.com/wpa/qunwpa?idkey=14fa60bb5492d6d4900931a430e0a1b9e3a323d8bdd76f7ff3a9cfe005f56102"><img border="0" src="/ueditor/picture/group.png" alt="电影王国官方影迷群" title="电影王国官方影迷群"></a>
                </p>
                <p>关注电影王国公众号，获取更多</p>
                <span class="weixQQ"><img src="/ueditor/picture/navb.jpg" width="80" height="80" /></span>
            </div>
        </div>
        <form  action='/home/dologin' method='post' id='frm_login'>
           
            <div class="mbt"><label style="padding:0px 15px">账号：</label><input type="text" class="maiInpt"  name="username" value=""/></div>
            <div class="mbt"><label style="padding:0px 15px">密码：</label><input type="password" class="maiInpt" id="txt_password" name="password" value=""/>
            <div id="error_password" class="regist_mail"></div></div>
            <div class="mbt admbt" style="padding-left:80px;"><input type="checkbox"  name="txt_email" id="loginByself" /> 记住我<a href="/login/toFindPwd.html" class="foget"> 忘记登录密码?</a><input type="hidden" class="status"/></div>
            <div class="mbt">
            {{csrf_field()}}
            <button class="denTl"  style="margin-left:80px;">登 陆</button></div>
            <div class="mbt abte" style="padding-left:20px;"><span>一键登录：</span><a href="/auth/weibo" title="微博登录"><img src="/ueditor/picture/ret1.jpg" width="105" height="33" /></a><a href="javascript:void(0);" onclick="location.href='/oauth/requestHandle/type/2.html'"><img src="/ueditor/picture/ret2.jpg" width="105" height="33" /></a></div> 
        <input type="hidden" name="__hash__" value="45015900a44ff0764f1cbf5a4cf3dc5f_7863c63962dd96045b63540d32c0d2d5" /></form>
    </div>
</div>
<div class="bott">
    <div class="conDiv"><span class="spanAbt"><a href="http://www.51oscar.com/about.html">关于我们</a>  |  <a href="http://www.51oscar.com/contact.html">联系我们</a>  |  <a href="http://www.51oscar.com/disclaimer.html">免责申明</a>  |  <a href="http://www.51oscar.com/sitemap.html">网站地图</a> </span> <span class="copspan">Copyright © 2012   All rights reserved.  苏ICP备10221045号-3</span></div>
</div>
<script type="text/javascript" src="/ueditor/js/jquery-1.7.2.min_1.js"></script>
<script src="/ueditor/js/jquery.cookie_1.js"></script>
<script src="/ueditor/js/login.js"></script>
<script src="/ueditor/js/common2_1.js"></script>
<input type="hidden" id="txt_header_url" value="http://www.51oscar.com">
<script type="text/javascript">
    var URL = "http://www.51oscar.com/";
    $(window).load(function(){
        var ht=$(window).height();
        $(".hotMv").css("height",ht-120);
    });
    $(window).resize(function() {
        var ht=$(window).height();
        $(".hotMv").css("height",ht-120);
    });
</script>
</body>
</html>