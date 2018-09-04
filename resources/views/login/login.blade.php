
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>后台登录</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="/assets/css/font.css">
	<link rel="stylesheet" href="/assets/css/xadmin.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/Swiper/3.4.2/css/swiper.min.css">
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.bootcss.com/Swiper/3.4.2/js/swiper.jquery.min.js"></script>
    <script src="/assets/lib/layui/layui.js" charset="utf-8"></script>
    <script type="text/javascript" src="/assets/js/xadmin.js"></script>

</head>
<body>
            @if(Session::has('success'))
            <div class="layui-elem-quote" style="padding:0px;margin:0px;">
                <div class="layui-elem-quote">
                        <div class="desc" style="font-size:20px;text-align: center;line-height:95px;color:white">
            {{Session::get('success')}}
                         </div>
                </div>
            </div>
        @endif
    <div class="login-logo"><h1>后台登录</h1></div>
    <div class="login-box">
        <form class="layui-form layui-form-pane" action="/dologin">
              
            <h3>登录你的帐号</h3>
            <label class="login-title" for="username">帐号</label>
            <div class="layui-form-item">
                <label class="layui-form-label login-form"><i class="iconfont">&#xe6b8;</i></label>
                <div class="layui-input-inline login-inline">
                  <input type="text" name="username" lay-verify="required" placeholder="请输入你的帐号" autocomplete="off" class="layui-input">
                </div>
            </div>
            <label class="login-title" for="password">密码</label>
            <div class="layui-form-item">
                <label class="layui-form-label login-form"><i class="iconfont">&#xe82b;</i></label>
                <div class="layui-input-inline login-inline">
                  <input type="password" name="password" lay-verify="required" placeholder="请输入你的密码" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="form-actions">
                <button class="btn btn-warning pull-right" lay-submit lay-filter="login" >登录</button> 
                <div class="forgot"><a href="#" class="forgot">忘记帐号或者密码</a></div>     
            </div>
        </form>
    </div>
	<div class="bg-changer">
        <div class="swiper-container changer-list">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img class="item" src="/assets/images/a.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/assets/images/b.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/assets/images/c.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/assets/images/d.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/assets/images/e.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/assets/images/f.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/assets/images/g.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/assets/images/h.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/assets/images/i.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/assets/images/j.jpg" alt=""></div>
                <div class="swiper-slide"><img class="item" src="/assets/images/k.jpg" alt=""></div>
                <div class="swiper-slide"><span class="reset">初始化</span></div>
            </div>
        </div>
        <div class="bg-out"></div>
        <div id="changer-set"><i class="iconfont">&#xe696;</i></div>   
    </div>
    
  
</body>
</html>