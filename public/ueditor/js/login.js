/*
	密码强度判断
*/

var PasswordStrength = {
	Level : [2,1,0],
	LevelValue : [30,20,0],//强度值
	Factor : [1,2,5],//字符加数,分别为字母，数字，其它
	KindFactor : [0,0,10,20],//密码含几种组成的加数 
	Regex : [/[a-zA-Z]/g,/\d/g,/[^a-zA-Z0-9]/g] //字符正则数字正则其它正则
}
PasswordStrength.StrengthValue = function(pwd) {
	var strengthValue = 0;
	var ComposedKind = 0;
	for(var i = 0 ; i < this.Regex.length;i++) {
		var chars = pwd.match(this.Regex[i]);
		if(chars != null){
			strengthValue += chars.length * this.Factor[i];
			ComposedKind ++;
		}
	}
	strengthValue += this.KindFactor[ComposedKind];
	return strengthValue;
} 

PasswordStrength.StrengthLevel = function(pwd) {
	var value = this.StrengthValue(pwd);
	for (var i = 0 ; i < this.LevelValue.length ; i ++) {
		if(value >= this.LevelValue[i] )
			return this.Level[i];
	}
}
 


var Login = {
	
	//注册成功后，到激活页面，打开邮箱
	openEamil : function() { 
		var email_address = $('#email_adress').text();
		var index         = email_address.indexOf('@');
		var last_str      = email_address.substring(index+1) 
		var link          = 'http://mail.' + last_str;
		$('#img_login_email').attr('href', link);
	},
	
	isEmail : function() {
		var $email = $('#txt_email');
		var str    = $email.val();
		var myReg  = /^[.-_A-Za-z0-9]+@([_A-Za-z0-9]+\.)+[A-Za-z0-9]{2,3}$/;
        if(str.length == 0){
            $('#error_email').show();
            $('#error_email').text('请输入邮箱').addClass('red-error');
            $email.focus();
            $('.img_span').remove();
            return false;
        }
		if(str.length < 6 ||  str.length > 36){
			$('#error_email').show();
			$('#error_email').text('邮箱为6-36个字符').addClass('red-error');
			$email.focus();
            $('.img_span').remove();
            return false;
		}
		if( !myReg.test(str) ) {  
			$('#error_email').show();
			$('#error_email').text('请输入正确的邮箱地址').addClass('red-error');
			$email.focus();
            $('.img_span').remove();
            return false;
		}

		$('#error_email').text('');
		return true;
	},
	
	isRead : function() {
		var is_read = $('.readagrren').attr('checked') ?  0 : 1; 
	    if(is_read === 1) {
			$('#error_read').text('请先阅读').addClass('red-error');
				return false;
		} else {
			$('#error_read').text('');
				return true;
		}
	},

	// 注册的时候用到
	ajaxCheckEmail : function() {
		var $email = $('#txt_email');
		if( this.isEmail() ){
			var url  = URL + 'login/ajaxIsExistEmail';
			var json = {
				'email': $email.val() 
			};
				
			var successFunction = function (d) {
				//var d = $.parseJSON(data),
                        txt_third_reg_type = $("#txt_third_reg_type").val();
				if (d.status == 1) {   
					$('#error_email').show();
					if( txt_third_reg_type == 1) {
						$('#error_email').text('恭喜您,您可以绑定此邮箱.')
										 .addClass('green-right')
										 .removeClass('red-error')
										 .removeData();
						$('#btn_third_bind').removeAttr("disabled");
					} else {
						$('#error_email').text('对不起,此邮箱地址已使用.')
										 .removeClass('green-right')
										 .addClass('red-error')
									     .data('error','error');
						}
				}
				
				else { 
					if( txt_third_reg_type == 1 ) {
						$('#btn_third_bind').attr("disabled",'disabled');
						$('#error_email').show();
						$('#error_email').text('对不起,此邮箱地址不存在.')
										 .addClass('red-error')
										 .removeClass('green-right')
										 .data('error','error');
						 return false;
					} else {
						$('#btn_submit_reg').removeAttr("disabled");
						//$('#error_email').show();
                        $('#txt_email').after("<span class='img_span'></span>").removeData();
                        $('.img_span').not($('.img_span').eq(0)).remove();
                        //$('.img_span').eq(0).show();

						//$('#error_email').text('恭喜你,此邮箱地址可以使用.').removeClass('red-error').addClass('green-right').removeData();
					}
				} 
			};

			var errorFunction = function() {  
			};
		
			$.ajax({
					url:        url,
					data:       json,              
					error:      errorFunction,   
					success:    successFunction
			});
		}
	}, 
	
	
	// 注册
	ajaxRegist : function() {
		var email    = $('#txt_email').val(),
			password = $("#txt_password").val(),
			verify   = $("#verify1").val();
			
		var url  = URL + 'login/ajaxRegist';
		var json = { 
			'txt_email':	email,
			'txt_password': password,
			'verify':		verify
		};
		var beforeFunction = function (){
			$('#btn_submit_reg').attr('disabled',"disabled").addClass("afterload-registBtn");
			$(".Reg").append('<div class="registload-img"></div>');
		};
		var successFunction = function (d) {
			//var d = $.parseJSON(data);
			//alert(d.data);
			if (d.status == '3'){
				$('#error_email').show();
			    $('#error_email').text('用户名已存在').addClass('red-error');
                $('.img_span').remove();
                return false;
			}  
			if (d.status == '1'){  
				var registsuc = $("#registsuc").val();
				window.location.href = registsuc + email;
			}
			if (d.status == '4'){
				$('#error_VerifyCode').text('验证码不正确').addClass('red-error').data('error','error');
				$('#btn_submit_reg').removeAttr("disabled").removeClass("afterload-registBtn");
				$(".registload-img").remove(); 
			}  
		};
		var errorFunction = function() {  
		};
		$.ajax({
			url:        url,
			data:       json,  
			type:		'POST',
			error:      errorFunction,   
			beforeSend: beforeFunction,		
			success:    successFunction
		});
	},
	
	
	 
	
	
	//重设密码的时候用到
	ajaxCheckExitEmail : function() {
		var $email = $('#txt_email');
		if( this.isEmail() ){
			var url  = URL + 'login/ajaxIsExistEmail';
			var json = {
				'email': $email.val()
			};
				
			var successFunction = function (d) {
				//var d = $.parseJSON(data); 
				if (d.status == '1') {   
					$('#error_email').removeData();
				}
				else{
					$('#error_email').text('不存在此邮箱地址.').addClass('red-error').data('error', 'error');
					$email.focus();
				} 
			};

			var errorFunction = function() {  
			};
				  
			$.ajax({
					url:        url,
					data:       json,              
					error:      errorFunction,           
					success:    successFunction
			});
		}
	}, 		

       regPidCard : function(){
           var          card =  $.trim($('#txt_card').val()),
                        truename =  $.trim($('#txt_truename').val());
                        if( truename  == "") {
                                alert('真实姓名不能为空');
                                $('#txt_truename').focus()
                        	return false;
                        }   
                        if(!this.checkCardId(card)){
                               $('#txt_card').focus()
                                return false;
                        }   
                        return true; 
       },
   
	regPassword : function() {
		var     $pwd  = $('#txt_password'),
			$pwd2 = $('#txt_password2'),
			pwd   = $.trim( $pwd.val() ),
			pwd2  = $.trim( $pwd2.val() ),
                        card =  $.trim($('#txt_card').val()),
                        truename =  $.trim($('#txt_truename').val());
		if (pwd.length == 0){
			$('.dl-password').hide();
			$('#error_password').text('请输入密码').addClass('red-error').show();
			$pwd.focus();
			return false;
		}
		if(pwd.length < 6 ||  pwd.length > 16) {
			$('.dl-password').hide();
			$('#error_password').text('密码6-16个字符').addClass('red-error').show();
			$pwd.focus();
			return false;
		}
		if( pwd != pwd2 ) {
			$('#error_password2').text('两次输入密码不相同').addClass('red-error');
			$pwd2.focus()
			return false;
		}
              
                $('#error_password,#error_password2').text('');
		return true; 
	},
	
	//检查验证码
	regVerify : function() {
		if( $.trim($('#verify1').val()) == '' ){
			$('#error_VerifyCode').text('验证码不能为空').addClass('red-error');
			return false;
	    }
		else {
			$('#error_VerifyCode').text('');
			return true;  
		} 
	},
	
	
	

	resetPassword : function() {
		return this.regPassword();
	},

	changePassword : function() {
		return this.regPassword();
	},

	loginPassword : function() {
		var $pwd = $('#txt_password'),
			pwd  = $pwd.val();
        if (pwd.length == 0){
            $('.dl-password').hide();
            $('#error_password').text('请输入密码').addClass('red-error').show();
           // $pwd.focus();
            return false;
        }
		/*if(pwd.length < 6 ||  pwd.length > 16){
			$('.dl-password').hide();
			$('#error_password').text('密码6-16个字符').show().addClass('red-error');;
			//$pwd.focus();
			return false;
		}*/

		$('#error_password').text('');
		return true;
	},

	// 修改密码的时候
	ajaxChangePassword : function() { 
			var user_id = 1;
			var old_pwd = $('#txt_old_password').val();
			var new_pwd = $('#txt_password').val();
			var url  = URL + 'login/ajaxChangePassword';
			var json = {
				'user_id':user_id,
				'old_pwd':old_pwd,
				'new_pwd':new_pwd
			};
				
			var successFunction = function (d) {
				//var d = $.parseJSON(data); 
				if (d.status == '1') {    
					 Common.ajaxLogout();
					 alert('修改密码成功, 返回重新登录'); 
					 location.href = URL + 'login/index';
					 //$('#txt_old_password, #txt_password, #txt_password2').val('');
					 //$('#error_old_password, #error_password, #error_password2').hide();
				}
				else if(d.status == '3') {
					$('#error_old_password').text('旧密码不正确.').addClass('red-error');
					$('#txt_old_password').focus();
				}
				else{
					alert(d.info);
				} 
			};

			var errorFunction = function() {  
			};
				  
			$.ajax({
					url:        url,
					data:       json,  
					type:		'POST',
					error:      errorFunction,           
					success:    successFunction
			});
	},

	ajaxLogin : function() {
			var is_auto_status = 0;
			var email    = $('#txt_email').val();
			var password = $('#txt_password').val();
		//	var txt_third_reg_type = $("#txt_third_reg_type").val();
			var come_url = $('#come_url').val();
			
			//两周内自动登录 
			if ( $('#loginByself').attr('checked') ) {
				is_auto_status = 1;
				//$.cookie( 'auto_login_email',  email, { path: '/', expires: Common.COOKIE_TIME_AUTO_LOGIN,domain:Common.COOKIE_DOMAIN});  
			}
			var url  = URL + 'login/ajaxLogin';
			
			var json = {
				'email':	email,
				'password':	password,
				'status':	is_auto_status,
				'come_url': come_url
			};
			var successFunction = function (d) {
				
				//var d = $.parseJSON(data); 
				if (d.status == 1) {  
					//var user_id = d.data.user_id,
				    //    nick_name = d.data.nick_name; 
					/*	
					$.cookie( 'session_id',  'yes', { path: '/', expires: Common.COOKIE_TIME_LOGIN_SESSION,domain:Common.COOKIE_DOMAIN});  
					$.cookie( 'user_id',    user_id, { path: '/', expires: Common.COOKIE_TIME_LOGIN_SESSION,domain:Common.COOKIE_DOMAIN});
					$.cookie( 'nick_name',  nick_name, { path: '/', expires: Common.COOKIE_TIME_LOGIN_SESSION,domain:Common.COOKIE_DOMAIN});
					*/
					
						if(come_url != ''){
							location.href = come_url;
						}
						else{
						location.href = URL ;
						}	
					
				} 
				else{
					
						$('#error_password').text( d.info ).addClass('red-error');
						$('#txt_password').focus();
						$(".loginBtn").removeAttr("disabled"); 
						$('.loginBtn').removeClass("afterload-loginBtn");
						$(".loginload-img").remove();
					
				}
				
			};

			var errorFunction = function() {  
			};
				  
			$.ajax({
					url:        url,
					type:		'POST',
					data:       json,  
					dataType:   "json",
					error:      errorFunction,           
					success:    successFunction
			});
	},
	
	oldPasswordCheck : function() { 
		var $old     = $('#txt_old_password'),
			old_pwd  = $old.val();
		if(old_pwd.length < 6 ||  old_pwd.length > 16){ 
			$('#error_old_password').text('密码6-16个字符').show().addClass('red-error');
			$old.focus();
			return false;
		}
		else{
			$('#error_old_password').text('');
			return true;
		}
		
	},

	passwordComplex  : function() {
		var pwd     = $('#txt_password').val();
		var complex = PasswordStrength.StrengthLevel( pwd );
		$('#error_password').hide();
		var $dl = $('.dl-password').show();
		$dl.find('div').removeClass('deep0');
        $dl.find('div').removeClass('deep1');
        $dl.find('div').removeClass('deep2');
		switch (complex) {
		case  0 :
			$dl.children('dd').eq(0).find('div').addClass('deep0');
			break;
		case 1  : 
			$dl.children('dd').eq(1).find('div').addClass('deep1');
			break;
		case  2:
		default:

			$dl.children('dd').eq(2).find('div').addClass('deep2');
			break;
		}
	}, 


	//点击提交注册按钮时发生
	submitReg : function() {
		if ( $('#error_email').data('error') == 'error') {
				return false;
			}
		if ( this.isEmail() && this.regPassword()  ) {  //&& this.regPidCard()  开启判断身份证 && this.regVerify() 验证码
			Login.ajaxRegist();
		}
	
	},

	//点击登录按钮或按Enter键时发生
	submitLogin : function() {
		if ( this.isEmail() && this.loginPassword() ) {
			$('.loginBtn').attr('disabled',"disabled");
			$('.loginBtn').addClass("afterload-loginBtn");
			$(".login-left-ico").append('<div class="loginload-img"></div>');
			this.ajaxLogin();
		}
	},

	submitThirdReg : function() {		
		if ( $('#error_email').data('error') == 'error') {
			return false;
		}
		//if ( this.isEmail() && this.loginPassword()) {
		if ( this.isEmail() && this.loginPassword() && this.isRead()) {
			$('#txt_third_reg_type').val('0');
			$('#frm_third_reg').submit();
		}
	},
	
	submitThirdBind : function() {	
	    if ( this.isEmail() && this.loginPassword() ) {
			//$('#btn_third_bind').attr('disabled',"disabled");
			this.ajaxLogin();
		}
		//if ( this.isEmail() && this.loginPassword() ) { 
		  // $('#txt_third_reg_type').val('1');
		 //  $('#frm_third_reg').submit();
		// } 
	},

	submitFindPassword : function() {
		if ( $('#error_email').data('error') == 'error') {
			return false;
		}
		if ( this.isEmail() ) {
			$('#frm_find_password').submit();
		}
	},
	
	submitResetPassword : function(){
		if( this.resetPassword() ){
			$('#frm_reset_password').submit();
		}
	} ,

	submitChangePassword : function(){ 
		if( this.oldPasswordCheck() && this.changePassword() ){ 
			this.ajaxChangePassword();
		}
	},
	 //判断身份证
       checkCardId : function(socialNo){  
       if(socialNo == "")  
      {  
        alert("输入身份证号码不能为空!");  
        return (false);  
      }  
  
      if (socialNo.length != 15 && socialNo.length != 18)  
      {  
        alert("输入身份证号码格式不正确!");  
        return (false);  
      }  
          
     var area={11:"北京",12:"天津",13:"河北",14:"山西",15:"内蒙古",21:"辽宁",22:"吉林",23:"黑龙江",31:"上海",32:"江苏",33:"浙江",34:"安徽",35:"福建",36:"江西",37:"山东",41:"河南",42:"湖北",43:"湖南",44:"广东",45:"广西",46:"海南",50:"重庆",51:"四川",52:"贵州",53:"云南",54:"西藏",61:"陕西",62:"甘肃",63:"青海",64:"宁夏",65:"新疆",71:"台湾",81:"香港",82:"澳门",91:"国外"};   
         
       if(area[parseInt(socialNo.substr(0,2))]==null) {  
            alert("身份证号码不正确(地区非法)!");  
            return (false);  
       }   
              
      if (socialNo.length == 15)  
      {  
         pattern= /^\d{15}$/;  
         if (pattern.exec(socialNo)==null){  
            alert("15位身份证号码必须为数字！");  
            return (false);  
        }  
        var birth = parseInt("19" + socialNo.substr(6,2));  
        var month = socialNo.substr(8,2);  
        var day = parseInt(socialNo.substr(10,2));  
        switch(month) {  
            case '01':  
            case '03':  
            case '05':  
            case '07':  
            case '08':  
            case '10':  
            case '12':  
                if(day>31) {  
                    alert('输入身份证号码不格式正确!');  
                    return false;  
                }  
                break;  
            case '04':  
            case '06':  
            case '09':  
            case '11':  
                if(day>30) {  
                    alert('输入身份证号码不格式正确!');  
                    return false;  
                }  
                break;  
            case '02':  
                if((birth % 4 == 0 && birth % 100 != 0) || birth % 400 == 0) {  
                    if(day>29) {  
                        alert('输入身份证号码不格式正确!');  
                        return false;  
                    }  
                } else {  
                    if(day>28) {  
                        alert('输入身份证号码不格式正确!');  
                        return false;  
                    }  
                }  
                break;  
            default:  
                alert('输入身份证号码不格式正确!');  
                return false;  
        }  
        var nowYear = new Date().getYear();  
        if(nowYear - parseInt(birth)<15 || nowYear - parseInt(birth)>100) {  
            alert('输入身份证号码不格式正确!');  
            return false;  
        }  
        return (true);  
      }  
        
      var Wi = new Array(  
                7,9,10,5,8,4,2,1,6,  
                3,7,9,10,5,8,4,2,1  
                );  
      var   lSum        = 0;  
      var   nNum        = 0;  
      var   nCheckSum   = 0;  
        
        for (i = 0; i < 17; ++i)  
        {  
              
  
            if ( socialNo.charAt(i) < '0' || socialNo.charAt(i) > '9' )  
            {  
                alert("输入身份证号码格式不正确!");  
                return (false);  
            }  
            else  
            {  
                nNum = socialNo.charAt(i) - '0';  
            }  
             lSum += nNum * Wi[i];  
        }  
  
        
        if( socialNo.charAt(17) == 'X' || socialNo.charAt(17) == 'x')  
        {  
            lSum += 10*Wi[17];  
        }  
        else if ( socialNo.charAt(17) < '0' || socialNo.charAt(17) > '9' )  
        {  
            alert("输入身份证号码格式不正确!");  
            return (false);  
        }  
        else  
        {  
            lSum += ( socialNo.charAt(17) - '0' ) * Wi[17];  
        }  
  
          
          
        if ( (lSum % 11) == 1 )  
        {  
            return true;  
        }  
        else  
        {  
            alert("输入身份证号码格式不正确!");  
            return (false);  
        }  
          
        }  
};





// 登陆部分，执行，根据不同页面，加载不同的绑定方法
$(window).load(function() {
	 
	//注册页面
	if( $('#frm_reg').length > 0 ) {
		$('.refresh_code').click(function(){
			Common.resetVerifyCode();
		})
		//$('#verify1').bind('keydown', Login.passwordComplex);
		$('#txt_password').bind('keydown', Login.passwordComplex);
		
		
		
		$('#btn_submit_reg').click(function() {
			Login.submitReg();
		});

		$('#txt_email').blur(function() {
			Login.ajaxCheckEmail();
		});

		$('#verify1').keypress(function(e) {
			if(e.which == 13){
				Login.submitReg();
			}
		});
	}
	
	// 登录页面
	if ( $('#frm_login').length > 0 ) {
		$('#txt_password').keydown(function(e) {
			if(e.which == 13) {
				Login.submitLogin();
			}
		});
		
		$('#btn_submit_login').click(function() {
			Login.submitLogin();
		});

		$('#txt_email').blur(function() {
			Login.isEmail();
		});

        $('#txt_password').blur(function(){
            Login.loginPassword();
        })
	}	
	
	//第三方注册页面
	if( $('#frm_third_reg').length > 0 ) {
		$('#txt_password').bind('keydown', Login.passwordComplex);
		$('#txt_password').keydown(function(e) {
			if(e.which == 13){
				Login.submitThirdReg();
			}
		});
		$('#txt_email').blur(function() {
			Login.ajaxCheckEmail();
		});
		$('#btn_third_reg').click(function() {
			Login.submitThirdReg();
		});
		//第三方登录绑定
		$('#btn_third_bind').click(function() {
			Login.submitThirdBind();
		});
		$('#txt_password').keydown(function(e) {
			if(e.which == 13){
				Login.submitThirdBind();
			}
		});
	}	


	//发送激活邮件，发送重置密码
	if( $('#img_login_email').length > 0 ) {
		Login.openEamil();
	}

	// 发送重置密码页面
	if( $('#frm_find_password').length > 0 ) { 
		$('#txt_email').blur(function(){
			Login.ajaxCheckExitEmail();
		});

		$('#btn_find_password').click(function() {
			Login.submitFindPassword();
		});
		
	}

	// 重设密码
	if( $('#frm_reset_password').length > 0 ) { 

		$('#btn_reset_password').click(function() {
			Login.submitResetPassword();
		}); 

		$('#txt_password2').keydown(function(e) {
			if(e.which == 13) {
				Login.submitResetPassword();
			}
		});
	}
	
	

	
	//修改密码
	if( $('#frm_change_password').length > 0 ) {  
		$('#txt_password2').keydown(function(e) {
			if(e.which == 13) {
				Login.submitChangePassword();
			}
		});

		$('#btn_change_password').click(function() {
			Login.submitChangePassword();
		});
	}
        
      


});



window.onload = function () {
FullScreenBackground('#bgimg');
}
$(window).resize(function() {
FullScreenBackground('#bgimg');
});
function FullScreenBackground(theItem){
var winWidth=$(window).width();
var winHeight=$(window).height();
var imageWidth=$(theItem).width();
var imageHeight=$(theItem).height();
var picHeight = imageHeight / imageWidth;
var picWidth = imageWidth / imageHeight;
if ((winHeight / winWidth) < picHeight) {
$(theItem).css("width",winWidth);
$(theItem).css("height",picHeight*winWidth);
} else {
$(theItem).css("height",winHeight);
$(theItem).css("width",picWidth*winHeight);
};
$(theItem).css("margin-left",winWidth / 2 - $(theItem).width() / 2);
$(theItem).css("margin-top",winHeight / 2- $(theItem).height() / 2);
}
