// 手机验证码验证
function identify()
{
	var mobile = $.trim( $("#mobile").val() ) ;
	var identify = $.trim( $("#check_identify").val() );
	$.ajax({
		url: 'ajax.php?action=check_identify',
		type: 'post',
		dataType: 'json',
		data: { mobile: mobile, identify: identify },
		success:function(res) {
			if ( res['status'] != 1 ){
				//$("#next_1").attr('onclick',"");
				var prompt = '<span class="tan_fla">'+ res['msg'] +'</span>';
				$("#msgcode").html( prompt ) ;
				//alert("手机动态码输入错误或超时");		
			}else{
			    $('#next_1').bind('click', function () {
			        //next(1);
			    });
				$("#msgcode").html('');
			}
		},
		error: function() {
			ajax_error();
			return false;
		}
	});
}


function next(num)
{
	switch ( num )
	{
		/* 第二步 手机验证 隐藏第一步填写账号信息,显示验证手机号码 */
		case 2:
			$("#basic_information").hide();
			$("#progress").removeClass('step').addClass('step2');
			$("#check_mobile").show();
			
			
		break;
		/* 第三步提交注册信息了 */
		case 3:
			//验证 验证码是否正确
			//alert($("#msgcode").html());
			var identify = $.trim( $("#check_identify").val() );
			if(!identify){
				alert("请填写手机验证码");
				return false;
			}
			if($("#msgcode").html()){
				var mymsg = $("#msgcode .tan_fla").html();
				alert(mymsg);
				return false;
			}
		
			$("#form_register").keypress(function(e) {
			  if (e.which == 13) {
			  	   e.preventDefault();
			    	return false;
			  }
			});

			$("#submit").click();
			$("#progress").removeClass('step2').addClass('step3');
		break;
	}
}



// ajax错误
function ajax_error()
{
	alert( '网络连接失败' );
}

// 短息验证码发送
/*
function send_msg()
{
	var mobile = $("#mobile").val() ;
	var mobile_reg = /^1\d{10}$/;
	
	$.ajax({
		url: 'ajax.php?action=reg_sendmsg',
		type: 'post',
		dataType: 'json',
		data: {mobile: mobile},
		success: function(res) {
			alert( res['msg'] );
		},
		error: function() {
			ajax_error();
		}
	});	
}*/






// 手机号发生变化同步到用户名
function syn_username()
{
	var mobile = $("#mobile").val();
	$("#show_mobile").html( mobile );
}

 