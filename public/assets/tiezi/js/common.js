/*
 *Website:www.51oscar.com
 *creat by mouchun.xiao at 2014-11
*/
 
$(document).ready(function(){
	
	//清除搜索框提示文字
	if(navigator.appName == "Microsoft Internet Explorer" && navigator.appVersion .split(";")[1].replace(/[MSIE]/g,"")<10){
		$.focusblur("[name='txt_kw']","#333","#dedede");
		$.focusblur(".txt_kw","#333","#dedede"); /*20150210*/
	}
	//资讯列表页标题下划线滑动
	(function(){
		if($(".titList").length<=0) return;
		var titA=$(".titList").find("a");
		var moveLine = $(".titList #moveLine");
		var titA_on=$(".titList #lineOn");
		var lineL=0;
		var lineW=titA_on.outerWidth();
		for(var i=0; i<titA_on.index(); i++){
			lineL +=titA[i].offsetWidth;
		}
		moveLine.css({"width":lineW,"left":lineL});
		
		titA.bind('mouseover',function(){
			var W=$(this).outerWidth();
			var L=0;
			for(var i=0; i<$(this).index(); i++){
				L+=titA[i].offsetWidth;	
			}
			moveLine.stop().animate({"left":L+"px","width":W+"px"},200);
		});
		titA.bind('mouseout',function(){
			moveLine.stop().animate({"left":lineL+"px","width":lineW+"px"},200);
		});
	})();
	
	//页眉微信扫扫
	$(".weixin").mouseover(function(){
		$(this).find(".show").stop().css("display","block").animate({top:"40px",left:0},200);
	}).mouseleave(function(){
		$(this).find(".show").stop().animate({top:"-"+$(this).find(".show").outerHeight(),left:0},100);
	});
	

	//返回顶部
	var str_goTop= '<div class="goTopWp">'+
						'<div class="goTopBox">'+
							'<div class="goTop">'+
								'<h3>微信扫一扫</h3>'+
								'<div class="img"><img src="/Images/wx.jpg" />获取更多精彩</div>'+
							   ' <div id="link_goTop" class="link_goTop"><img src="/Images/goTop.jpg" /></div>'+
						   '</div>'+
						'</div>'+
					'</div>';
	$(document).find("body").append(str_goTop);
	backTop('link_goTop');
	
		
});
/*
 *弹出视频播放
 */
var showSwf ={
  
  show : function(src){
	  if(src==''||src=='#'){
		alert('暂时没有预告片');
		return ;  
	  }
	  if($("#swfWp").length<1&&src!=''){
		  var _swfWp='<div id="swfWp">'+
				  '<div class="bg"></div>'+
				  '<div class="swfBox" style="background:url(../Images/loading.gif) no-repeat center center #F2F2F2;">'+
					  '<img src="/Images/close.jpg" id="close" onclick="showSwf.closeShow();" />'+
					  '<div id="swfBox">'+
						  '<embed id="swfEmbed" src="'+src+'" type="application/x-shockwave-flash"  allowscriptaccess="always" allowfullscreen="true" wmode="Transparent" autostart="true" width="800" height="534"></embed>'+    
					  '</div>'+  		
				  '</div>';
		  $(document).find("body").append(_swfWp);
	  }else if($("#swfWp").length=1&&src!=''){
		  var _swfWp='<div class="bg"></div>'+
				  '<div class="swfBox" style="background:url(../Images/loading.gif) no-repeat center center #F2F2F2;">'+
					  '<img src="/Images/close.jpg" id="close" onclick="showSwf.closeShow();" />'+
					  '<div id="swfBox">'+
						  '<embed id="swfEmbed" src="'+src+'" type="application/x-shockwave-flash"  allowscriptaccess="always" allowfullscreen="true" wmode="Transparent" autostart="true" width="800" height="534"></embed>'+    
					  '</div>';
		  $("#swfWp").html(_swfWp);
		  $("#swfWp").css("display","block");
	  }
	  
  },
   
  closeShow : function(){
	  $("#swfWp").html("");
	  $("#swfWp").css("display","none");	
  }
}


/*	
 *清除输入框默然提示文字
 */ 
jQuery.focusblur = function(focusid,focusColor,blurColor) {
	var focusblurid = $(focusid);
	var defval = focusblurid.val();
	focusblurid.focus(function(){
		var thisval = $(this).val();
		if(thisval==defval){
			$(this).val("");
			$(this).css("color",focusColor);
		}
	});
	focusblurid.blur(function(){
		var thisval = $(this).val();
		if(thisval==""){
			$(this).val(defval);
			$(this).css("color",blurColor);
		}else{
			$(this).css("color",focusColor);
		}
	});
	
}



/*	
 *图片懒加载
 */ 
function loadImg(imgClass,imgSrc){
    var arrImg=$(imgClass); 
	for(var i=0; i<arrImg.length; i++){
		if(!arrImg.eq(i).attr(imgSrc)) continue;    
		if($(document).scrollTop() + $(window).height() > arrImg.eq(i).offset().top){
			arrImg.eq(i).attr("src",arrImg.eq(i).attr(imgSrc));
			arrImg.eq(i).removeAttr(imgSrc);
		}
	}
}

$(window).bind("load",function(){
	if($(".lazyImg").length>0) loadImg(".lazyImg","data-src")
});
$(window).bind("scroll",function(){
	if($(".lazyImg").length>0) loadImg(".lazyImg","data-src")
});

/*
 *返回头部
 */
var backTop=function (btnId){
	var btn=document.getElementById(btnId);
	var d=document.documentElement;
	var b=document.body;
	window.onscroll=set;
	btn.onclick=function (){
		//btn.style.display="none";
		window.onscroll=null;
		this.timer=setInterval(function(){
			d.scrollTop-=Math.ceil((d.scrollTop+b.scrollTop)*0.5);
			b.scrollTop-=Math.ceil((d.scrollTop+b.scrollTop)*0.5);
			if((d.scrollTop+b.scrollTop)==0) clearInterval(btn.timer,window.onscroll=set);
		},5);
	};
	function set(){btn.style.display=(d.scrollTop+b.scrollTop>=0)?'block':"none"} 
};
  

/*
 *滚动悬浮
 */
function scrollFixed(fixedId,footerId,marginBottom){
	//悬浮框id
	var _fixedId = $(fixedId); 	
	//距离footerId多少位置停止悬浮	
	var marginBottom = parseInt(marginBottom)+$(footerId).outerHeight(true) - $(footerId).outerHeight() || $(footerId).outerHeight(true) - $(footerId).outerHeight();		
	//_fixedId的marginTop值
	var marginTop = _fixedId.outerHeight(true) - _fixedId.outerHeight(); 							
	//_fixedId的OffsetTop值
	var _fixedIdOffsetTop = _fixedId.offset().top;

	function onFixed(){
		if($(document).scrollTop() >= _fixedIdOffsetTop && $(document).scrollTop() + _fixedId.innerHeight() < $(footerId).offset().top && _fixedId.innerHeight()<=$(window).height()){
			_fixedId.addClass("fixed");
			_fixedId.css("top","-"+marginTop+"px");
			
		}else if($(document).scrollTop() >= _fixedIdOffsetTop && $(document).scrollTop() + _fixedId.innerHeight() >= $(footerId).offset().top && _fixedId.innerHeight()<=$(window).height() ){
			//_fixedId.addClass("fixed");
			_fixedId.css("top",  $(footerId).offset().top - ($(document).scrollTop() + _fixedId.innerHeight()) - marginBottom  +"px");
			
		}else{
			_fixedId.removeClass("fixed");
			_fixedId.css("top","");
		}
	}
	$(window).bind("scroll",onFixed);
}

	
/*
*星星评分 by cxai 2013.5.4
* change by mouchun.xiao 2014 12
*/
;;(function ($, rating) {
    $.fn[rating] = function(options){
        var opt = $.extend({
            aLi: '',
            oUl: '',
            aMsg: ["1星","2星","3星","4星","5星"],
            hintText: '',
            val: ["1","2","3","4","5"],
            valContent: '',
            berforHintTxt:'', //页码一开始加载进来的分数，也就是为评分时的分数
            berforStar:'', //页码加载进来的星星级别
            callback: function(){}
        }, options || {});


        if($(opt.valContent).val()==""){ //如果valContent的值为空，也就是用户没有点评分，传入init（），显示原来的星星级别
            var _index = opt.berforStar-1; //初始化星星级别值，在click后记录的索引值
        }else{
            var _index = $(opt.valContent).val()-1; //在click后记录的索引值,传入init（），显示click后的星星级别，
        }
        return this.each(function(){
            //初始化
            init(_index);

            $(opt.aLi)
                .mouseover(function(){
                    var index = $(this).index();
                    //初始化背景色
                    $(opt.aLi).removeClass('onVal');
                    //鼠标移上去时的效果
                    for(i=0; i<=index; i++){
                        $(opt.aLi).eq(i).addClass('on');
                        $(opt.hintText).html(opt.aMsg[index]);
                    }
                })
                .mouseout(function(){
                    var index = $(this).index();
                    //鼠标离开的效果
                    for(i=0; i<=index; i++){
                        $(opt.aLi).eq(i).removeClass('on');
                        $(opt.hintText).html('');
                    }

                    //恢复上次的选择结果
                    init(_index)
                })
                .click(function(){
                    _index = $(this).index();
                    $(opt.valContent).val(opt.val[_index]); //设置分数，隐藏input里的值
                    $(opt.aLi).removeClass('onVal');
                    init(_index)
                    opt.callback();
                })
            //初始化并在click后保存选择的结果
            function init(_index){
              if($(opt.valContent).val()==""){ //如果valContent的值（隐藏input里的值）为空，也就是用户没有点评分，显示原来的分数
                    $(opt.hintText).html(opt.berforHintTxt); 
                }else{
                   $(opt.hintText).html(opt.aMsg[_index]); //如果valContent的值（隐藏input里的值）不为空，显示提示文字
                   $(opt.valContent).val(opt.val[_index]); //设置分数，隐藏input里的值
                }
                for(i=0; i<=_index; i++){
                    $(opt.aLi).eq(i).addClass('onVal')
                }
            }
        })
    };
})(jQuery, 'rating');



/*cyh 2012-8-27*/
/*change by mouchun.xiao 2014-12*/
var Common_new = {
	
	init : function(){          
	
	},
		
	//原本的单位是秒, 60* 60 即一个小时
	COOKIE_TIME			: 60 * 60 * 24,
	COOKIE_TIME_AUTO_LOGIN		: 60 * 60 * 24 , 
	COOKIE_TIME_LOGIN_SESSION	: 60 * 60 * 24 , 
	COOKIE_TIME_LOGOUT		: 60 * 5, 
	COOKIE_DOMAIN	    : '.51oscar.com',
	

	//判断是否是邮箱，弹出登陆框用到
	isEmail : function() {
		var $email = $('#txt_header_email');
		var str    = $email.val();
		var myReg  = /^[.-_A-Za-z0-9]+@([_A-Za-z0-9]+\.)+[A-Za-z0-9]{2,3}$/;
        if(str.length == 0){
            $('#email-error').show();
            $('#email-error').text('请输入邮箱').addClass('red-error');
            $email.focus();
            $('.img_span').remove();
            return false;
        }
		if(str.length < 6 ||  str.length > 36){
			$('#email-error').show();
			$('#email-error').text('邮箱为6-36个字符').addClass('red-error');
			$email.focus();
            $('.img_span').remove();
            return false;
		}
		if( !myReg.test(str) ) {  
			$('#email-error').show();
			$('#email-error').text('请输入正确的邮箱地址').addClass('red-error');
			$email.focus();
            $('.img_span').remove();
            return false;
		}

		$('#email-error').text('');
		return true;
	},
	

//	/*
//	 *登录 2.0版本 弹出登录框用
//	 *mouchun.xiao 20150203
//	*/
//	
//	submitLogin:function(){
//			var is_auto_status = 0;
//			var email    = $('#txt_header_email').val();
//			var password = $('#txt_header_pwd').val();
//
//			//两周内自动登录 
//			if ( $('#txt_third_reg_type').attr('checked') ) {
//				is_auto_status = 1;
//			}
//			var url  = URL + 'login/ajaxLogin';
//			
//			var json = {
//				'email':	email,
//				'password':	password,
//				'status':	is_auto_status
//			};
//			var successFunction = function (d) {
//				
//				if (d.status == 1) {  
//					//隐藏评论输入框旁边的登录，注册
//					$('.Madfms,.mark_51').hide();
//				} 
//				else{
//						$('#email-error').text( d.info ).addClass('red-error');
//						$('#txt_header_pwd').focus();
//					
//				}
//				
//			};
//
//			var errorFunction = function() {  
//			};
//				  
//			$.ajax({
//					url:        url,
//					type:		'POST',
//					data:       json,  
//					dataType:   "json",
//					error:      errorFunction,           
//					success:    successFunction
//			});
//		
//	},

	//退出	2.0版本，头部与首页一样的的头部，用这个退出
	ajaxHomeLogout1 : function(){
		var _this= this;
		var url  = URL + 'login/ajaxLogout';
		var json = {'PHPSESSID':$(".PHPSESSID").val(),'TOKEN':$('.TOKEN').val() };
				
		var successFunction = function (d) {
				//var d = $.parseJSON(data); 
				if (d.status == '1') {     
			
					$.cookie( 'auto_login_email',  null, { path: '/', expires: -1 ,domain:Common.COOKIE_DOMAIN});
					$.cookie( 'session_id',  null, { path: '/', expires: -1 ,domain:Common.COOKIE_DOMAIN});  
					$.cookie( 'user_id',  null, { path: '/', expires: -1 ,domain:Common.COOKIE_DOMAIN});  
					$.cookie( 'nick_name',  null, { path: '/', expires: -1 ,domain:Common.COOKIE_DOMAIN}); 
					
					var url = location.href;
						
					//清空页面保存的登陆信息
					$('#hide_user_info').attr('session_id','');
					
					if( url.indexOf('personal') > 0 ){
						location.href = URL + 'index/index'
					}
					else{
						
						var login_url  = URL + 'login/index';
						var regist_url = URL + 'login/toRegist';
						var str = '<li><a href="javascript:void(0);" onclick="location.href=\'/oauth/requestHandle/type/3\'" title="微博登录"><i class="icon_weibo icon"></i>微博登录</a></li>'+
								  '<li>|</li>'+
								  '<li><a href="javascript:void(0);" onclick="location.href=\'/oauth/requestHandle/type/2\'" title="QQ登录"><i class="icon_qq icon"></i>QQ登录</a></li>'+
								  '<li>|</li>'+
								  '<li><a href="'+login_url+'"  title="登录"><i class="icon_man icon"></i>登录</a></li>'+
								  '<li>|</li>'+
								  '<li><a href="'+regist_url+'" title="免费注册">免费注册 </a></li>';
						$('#welcome').html(str);
					}
				} 
				else{
					alert(d.info);
				} 
		}; 
				  
		$.ajax({
				url:        url,
				data:       json,         
				success:    successFunction
		});
	},
	//退出	2.0版本，头部与电影详情页一样的的头部，用这个退出
	ajaxHomeLogout2 : function(){
		var _this= this;
		var url  = URL + 'login/ajaxLogout';
		var json = {'PHPSESSID':$(".PHPSESSID").val(),'TOKEN':$('.TOKEN').val() };
				
		var successFunction = function (d) {
				//var d = $.parseJSON(data); 
				if (d.status == '1') {     
			
					$.cookie( 'auto_login_email',  null, { path: '/', expires: -1 ,domain:Common.COOKIE_DOMAIN});
					$.cookie( 'session_id',  null, { path: '/', expires: -1 ,domain:Common.COOKIE_DOMAIN});  
					$.cookie( 'user_id',  null, { path: '/', expires: -1 ,domain:Common.COOKIE_DOMAIN});  
					$.cookie( 'nick_name',  null, { path: '/', expires: -1 ,domain:Common.COOKIE_DOMAIN}); 
					
					var url = location.href;
						
					//清空页面保存的登陆信息
					$('#hide_user_info').attr('session_id','');
					
					if( url.indexOf('personal') > 0 ){
						location.href = URL + 'index/index'
					}
					else{
						
						var login_url  = URL + 'login/index';
						var regist_url = URL + 'login/toRegist';
						var str = '<div class="login_before">'+
									  '<a href="'+login_url+'">登录</a> &nbsp;<em class="c_f60">|</em>&nbsp; <a href="'+regist_url+'">注册</a>'+
								  '</div>';
						$(".after_landing").remove();
						$('.user_info').append(str);
                        location.reload();
					}
				} 
				else{
					alert(d.info);
				} 
		}; 
				  
		$.ajax({
				url:        url,
				data:       json,         
				success:    successFunction
		});
	},
	
	// 添加关注
	ajaxAddAttens : function($this) { 
		//var url  = URL + 'ajaxAddAttens';
        var url  = URL + 'Personal/ajaxAddFriends';
		var path = $('#txt_public_home').val() + 'images/attentioned.gif';		
		/*var json = {
			'movie_id': $this.attr('movie_id')
		};*/
        var json = {
            'friend_id': $this.attr('friend_id')
        };
		var successFunction = function (data) {
			//var d = $.parseJSON(data);
			var d = data;
			if (d.status == '1') { 
				alert('关注成功'); 
				$('#btn_img_add_focus').attr('src',path).removeAttr('id');
				// 添加关注列表页面
				if( $this.hasClass('focus-he') ){
					$this.removeClass('focus-he').addClass('cancelfocus-he').val('取消关注'); 
				}
			} 
			else if (d.status == '3') {
				alert('您已经关注该好友');
			} else {
				alert(d.info);
			} 
		}; 
		$.ajax({
				url:        url,
				data:       json,            
				success:    successFunction
		});
	},
	//取消关注
	ajaxDeleteFriends : function($this) { 
		var url  = URL + 'Personal/ajaxDeleteFriends';
		var json = { 
			'friend_id': $this.attr('friend_id')
		};
		var successFunction = function (d) {
			//var d = $.parseJSON(data);
			if (d.status == '1') {
				alert('取消关注成功'); 
				$this.removeClass('cancelfocus-he').addClass('focus-he').val('关注Ta');  
			}
			else if (d.status == '3') { 
			} else {
				alert(d.info);
			} 
		}; 
		$.ajax({
				url:        url,
				data:       json,            
				success:    successFunction
		});
	}
	

};
