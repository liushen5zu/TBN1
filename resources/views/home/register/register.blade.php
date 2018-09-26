<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>表单验证</title>
	   <link href="/zhuce/css/style_new.css" rel="stylesheet" type="text/css"/>
	    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
	    <meta name="csrf-token" content="{{ csrf_token() }}">
	    <script src="/plupload/aliyun.js"></script>
</head>
<body>
	<header>
		 <div class="w12 header">
        <a class="db logo fl"><img src="picture/logo.jpg" width="327" height="94" alt=""/></a>
        <div class="fr logofr"><a href="" class="blk">返回首页</a> |<a
                    href="" class="blk">客服中心</a><br>
            如注册遇到问题请拨打：<strong style="font-size:14px;">400-080-6699</strong></div>
    </div>
	</header>
	<div class="head_border"></div>
	<section class="w12 login">
    <a href="http://www.huishangbao.com/member/login.php" class="db logbtn fr">前往登录</a>
    <em class="fr">已经是会员，请&nbsp;&nbsp;</em>
    </section>
    <section class="main w12">
    	<div class="inputsec" id="progress"></div>
   		<iframe src="" name="send" id="send" style="display:none;"></iframe>
    	 <form id="" action="/home/user" method="get">
        	 <div id="basic_information" class="inputsec">
            <ul>
                <span>设置会员登录名</span>
                <li>
                	<label class="fl mr2">会员名：<strong>*</strong></label>
                	<input class="txt-m fl " type="text" name="username" id="username"autocomplete="off"/>
                	<span class="tan_right" id="ttruename" style="display: none;"></span>
                </li>
                 <span>设置登录密码</span>
                <li>
                	<label class="fl mr2">登录密码：<strong>*</strong></label>
                	<input class="txt-m fl " type="password" name="password" />
                	<span class="tan_right" id="ttruename" style="display: none;"></span>
                </li>
                <li>
                	<label class="fl mr2">确认密码：<strong>*</strong></label>
                	<input class="txt-m fl " type="password"  maxlength="20" name="repassword" id="repassword" placeholder="请再次输入您的密码"/>
                	<span class="tan_right" id="ttruename" style="display: none;"></span>
                </li>
                 <span>设置联系方式</span>
                <li>
                	<label class="fl mr2">联系人：<strong>*</strong></label>
                	<input class="txt-m fl " type="text" name="name" id="truename" autocomplete="off"/>
                	<span class="tan_right" id="ttruename" style="display: none;">请填写联系人</span>
                </li>
                <li>
                	<label class="fl mr2">手机：<strong>*</strong></label>
                	<input class="txt-m fl " type="text" name="phone" id="mobile"autocomplete="off"	/>
                	<span class="tan_right" id="tmobile" style="display:none;">请输入手机号码</span>
                </li>
                 <li>
                    <label class="fl mr2">验证码：<strong>*</strong></label>
                    <input name="captcha" id="captcha" type="text" size="6" class="txt-m fl "style="width:80px;float:left;"/>
                            <span id="dcaptcha" class="f_red"></span>
                            <label for="captcha"accesskey="V"class="verify"style="padding-left:10px; padding-top:1px;">
                            	<img src="{{captcha_src()}}" title="验证码,看不清楚?请点击刷新&#10;字母不区分大小写" style=" display:;cursor:pointer;" align="absmiddle"id="captchapng" onclick="this.src='{{captcha_src()}}'+Math.random()">
                            </label>
                           <label id="ccaptcha"style="width:20px; line-height:20px;"></label>
                 </li>
                 <li>
                    <label class="fl mr2">手机校验码：</label>
                    <span class="fl yzm2">
						<input type="text" class="fl txt-j" id="check_identify" name="check_identify"/>
						<span class="tan_right_1" id="ttruename" style="display: none; float-right:100 "></span>
					</span>
                    <input class="db fl chg1 send send1" id="sendVerifySmsButton" type="button" value="获取验证码">
                </li>
                 <li>
                 	<label class="fl">&nbsp;</label>
                    <p style=" line-height: 28px; "><input type="checkbox" name="checkbox1" value="1">我已阅读并同意<a
                        "javascript:void(0)" id="tc0" class="clause">《会商宝服务条款协议》</a></p>
                </li>
                <li class="clr"><label class="db fl">&nbsp;</label>
                    <button id="next_1" class="db fl next">立即注册</button>
                </li>
                  {{csrf_field()}}
            </ul>
        </div>
	    </form>
    </section>
	<script>
		/**
			1. 布局
			2. 绑定事件
				获得焦点
				丧失焦点事件
				表单提交事件
		*/
		var CUSER = false;
		var CPHONE = false;
		var CPASS = false;
		var CREPASS = false;
		var YZM = false;
		//用户名
		$('input[name=username]').focus(function(){
			//边框颜色
			$(this).addClass('active');
			//提示语显示
			$(this).next().html('输入3~9位字母数字下划线').show();
		}).blur(function(){
			//移出激活状态的class active
			$(this).removeClass('active');
			//正则判断
			var v = $(this).val();
			//声明正则
			var reg = /^\w{3,9}$/;
			//判断
			if(!reg.test(v)){
				//边框
				$(this).addClass('error');
				//文字提醒
				$(this).next().html('<span style="color:red">格式不正确</span>').show();
				CUSER = false;
			}else{
				var input = $(this);
				//发送 AJAX 请求检测用户名是否已经存在
				// $.post('./check-user-exists.php', {username: v}, function(data){
				// })
				$.ajaxSetup({
          			headers: {
        			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          			 }})
				$.ajax({
					url: '/ajax/username',
					type: 'post',
					data: {username: v},
					success: function(data){
						if(data != '1'){
							//边框
							input.addClass('error');
							//文字提醒
							input.next().html('<span style="color:red">该用户名太受欢迎, 请换一个!!</span>').show();
							CUSER = false;
						}else{
							input.removeClass('error');
							input.next().html('<span style="color:green;font-size:16px;font-weight:bold">&nbsp;&nbsp;√</span>').show();
							CUSER = true;
						}
					},
					async: false
				})


				
			}
		})

		//手机号
		$('input[name=phone]').focus(function(){
			//边框颜色
			$(this).addClass('active');
			//提示语显示
			$(this).next().show().html('输入您的手机号');
		}).blur(function(){
			$(this).removeClass('active');
			//获取用户的输入值
			var v = $('input[name=phone]').val();
			//正则
			var reg = /^1\d{10}$/;
			if(!reg.test(v)) {
				//边框
				$(this).addClass('error');
				//文字提醒
				$(this).next().html('<span style="color:red">格式不正确</span>').show();
				CPHONE = false;
			}else{
				//边框
				$(this).removeClass('error');
				//文字提醒
				$(this).next().html('<span style="color:green;font-size:16px;font-weight:bold">&nbsp;&nbsp;√</span>').show();
				CPHONE = true;

			}
		})

		//密码
		$('input[name=password]').focus(function(){
			//边框颜色
			$(this).addClass('active');
			//提示语显示
			$(this).next().show().html('6~20非空白字符');
		}).blur(function(){
			$(this).removeClass('active');
			//获取用户的输入值
			var v = $(this).val();
			//正则
			var reg = /^\S{6,20}$/;

			if(!reg.test(v)) {
				//边框
				$(this).addClass('error');
				//文字提醒
				$(this).next().html('<span style="color:red">格式不正确</span>').show();
				CPASS = false;
			}else{
				//边框
				$(this).removeClass('error');
				//文字提醒
				$(this).next().html('<span style="color:green;font-size:16px;font-weight:bold">&nbsp;&nbsp;√</span>').show();
				CPASS = true;

			}
		})

		//确认密码
		$('input[name=repassword]').focus(function(){
			//边框颜色
			$(this).addClass('active');
			//提示语显示
			$(this).next().show().html('再次输入密码');
		}).blur(function(){
			$(this).removeClass('active');
			//获取用户的输入值
			var v = $(this).val();

			if(v != $('input[name=password]').val()) {
				//边框
				$(this).addClass('error');
				//文字提醒
				$(this).next().html('<span style="color:red">两次密码不一致</span>').show();
				CREPASS = false;
			}else{
				//边框
				$(this).removeClass('error');
				//文字提醒
				$(this).next().html('<span style="color:green;font-size:16px;font-weight:bold">&nbsp;&nbsp;√</span>').show();
				CREPASS = true;

			}
		})
		 $('#sendVerifySmsButton').sms({
        //laravel csrf token
        token       : "{{csrf_token()}}",
        //请求间隔时间
        interval    : 60,
        //请求参数
        requestData : {
            //手机号
            mobile : function () {
                return $('input[name=phone]').val();
            }
        }
    });
	 $('input[name=check_identify]').focus(function(){
			//边框颜色
			$(this).addClass('active');
			//提示语显示
			$(this).next().html('输入4位数字验证码').show();
		}).blur(function(){
			//移出激活状态的class active
			$(this).removeClass('active');
			//正则判断
			var v = $(this).val();
			//声明正则
			var reg = /^\d{5}$/;
			//判断
			if(!reg.test(v)){
				//边框
				$(this).addClass('error');
				//文字提醒
				$(this).next().html('<span style="color:red">格式不正确</span>').show();
				CUSER = false;
			}else{
				var input = $(this);
				//发送 AJAX 请求检测用户名是否已经存在
				// $.post('./check-user-exists.php', {username: v}, function(data){
				// })
				$.ajaxSetup({
          			headers: {
        			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          			 }})
				$.ajax({
					url: '/ajax/code',
					type: 'post',
					data: {username: v},
					success: function(data){
						if(data != '1'){
							//边框
							input.addClass('error');
							//文字提醒
							input.next().html('<span style="color:red">验证码不正确,请重新输入!!</span>').show();
							YZM = false;
						}else{
							input.removeClass('error');
							input.next().html('<span style="color:green;font-size:16px;font-weight:bold">&nbsp;&nbsp;√</span>').show();
							YZM = true;
						}
					},
					async: false
				})


				
			}
		})

		//表单的提交事件
		$('form').submit(function(){
			//触发错误提醒
			$('input').trigger('blur');
			console.log(CUSER);
			//判断输入值是否都正确
			if(CUSER  && CPASS && CPHONE && CREPASS && YZM) {
				return true;
			}else{
				return false;
			}
		});
	</script>
</body>
</html>