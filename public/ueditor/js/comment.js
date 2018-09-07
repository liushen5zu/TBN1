/*
 *Website:www.51oscar.com
 *base Page.js
 *change by mouchun.xiao
*/
 var Comments={
	//绑定qq表情，需要引入jquery.qqFace.js
	bindQQShow : function(){
		$('#div_comment_qq').qqFace({ 
			id : 'facebox',	//表情盒子的ID
			assign:'commContent',	//给那个控件赋值
			path: '/Images/face/'	//表情存放的路径
		}); 
	},
	//绑定qq表情，需要引入jquery.qqFace.js,回复评论用到
	bindQQShow2 : function(){
		$('#div_comment_qq').qqFace({ 
			id : 'facebox',	//表情盒子的ID
			assign:'replayContent',	//给那个控件赋值
			path: '/Images/face/'	//表情存放的路径
		}); 
	},
  
    ajaxSaveBrowser : function() { 
		var type    = $("#shareText").val();//类型
		var type_id = $("#detail_movie_id").val(); 
	//	var url  =  $('#txt_header_url').val() + '/album/addBrowserCount';
		var url  =  URL + 'forum/addBrowserCount';
		
		var json = {
			'type': type,
			'id':   type_id,
			'PHPSESSID':$(".PHPSESSID").val(),
			'TOKEN':$('.TOKEN').val()
		};
		var successFunction = function (ajaxData) {
			//var ajaxData = $.parseJSON(data); 
			if (ajaxData.status == 1) {  				
			}		
		};
		$.ajax({
				url:        url,
				data:       json,                     
				success:    successFunction
		});
	}, 
     //统计
	addBrowser : function() {
		var type    = parseInt($("#shareText").val()); 
		var type_id = parseInt($("#TypeId").val());
		if ($.cookie( type+'_'+type_id ) !== null && type !=3 && type !=1 && type !=4 && type!=5) { //话题不做限制，想怎么加都行
			return false;
		}
		else{
			$.cookie( type+'_'+type_id ,  type_id, { path: '/', expires: Common.COOKIE_TIME });
			 this.ajaxSaveBrowser();
		} 
		/**/
	},
	
	//电影评论
	movieComment:function (){
		if( !Common.isLogin() ){
             $('.Madfms,.mark_51').show();
             return false;
        }
        
		var comment =$.trim($("#commContent").val());
		
		if(comment.length == 0 ){ 
			alert("评论不能为空哦！");
			$('#txt_comment').focus();
			return false;
		}
		if(comment.length > 480 ){
		    alert("您好，输入字数不得超过480个！");
			$('#txt_comment').focus();
			return false;
		}
		var json = {
			'comment'	: comment,  				//内容
			'pid'		: 0,   
			'puser_id'	: 0,   						//用户id
		//	'img'		: img_url,  				//用户logo
			'type' 		: 1, 	//评论类型
		//	'comment_type' : 1,
			'id' 		: movie_id, 				//评论对象id
			'PHPSESSID' : $('.PHPSESSID').val(),
			'TOKEN'		: $('.TOKEN').val()
		};
		var url = URL +'Comment/postComment';
		var successFunction = function (ajaxData) {
			//var ajaxData = $.parseJSON(data);
			if (ajaxData.status == 1) { 
				var data=ajaxData.data;

				var newElements ='<dl class="clearfix">'+
										  '<dt class="userLogo"><a href="/someone/'+data.user_id+'.html" title="'+data.user_name+'" ><img class="imgBorder" src="'+data.user_img+'" alt="'+data.user_name+'" width="58" height="58" />'+data.user_name+'</a></dt>'+
										  '<dd class="txt">';
						if(data.comment.length>100){
							  newElements +='<p class="intro_min">'+Comments.replace_em(data.comment.substring(0,100))+'……&nbsp;<a class="show_intro" href="javascript:" title="展开">展开</a></p>'+
											'<p class="intro_all" style="display:none;">'+Comments.replace_em(data.comment)+'&nbsp;&nbsp;<a class="hide_intro" href="javascript:" title="收起">收起</a></p>'; 
						}else{
							newElements +='<p class="intro_min">'+Comments.replace_em(data.comment)+'</p>';
						}
							newElements += '</dd>'+
									   '</dl>';   
									   
					$(".shortComm").prepend(newElements);	
					$("#commContent").val("");	
					$(".slideTab .hd").find("li").eq(1).click();   
									   
			}else{
				alert(ajaxData.info);
			}
		}
		$.ajax({
				url:        url,
				data:       json,                     
				success:    successFunction
		});
		
	},
	
	//评论，用于资讯、影评
	Comment:function (){
		if( !Common.isLogin() ){
             $('.Madfms,.mark_51').show();
             return false;
        }

		//editor：页面保存评论编辑框框的变量
        var comment = $.trim(editor.getContent()); 
		if(comment.length == 0 ){ 
			alert("评论不能为空哦！");
			editor.focus();
			return false;
		}
		if(comment.length >= 480 ){
		    alert("您好，输入字数不得超过480个！");
			editor.focus();
			return false;
		}
		var type=$("#shareText").val();
		if(type==1){
			var puser_id=$('#wen_puserid').val(),
			pid=artical_id;
			artical_id=pingmovie_id;
		}else{
			var puser_id=0,pid=0;
		}
		var json = {
			'comment'	: comment,
			'pid'		: pid,
			'puser_id'	: puser_id,
			'type' 		: type,
			'id' 		: artical_id,   
			'PHPSESSID' : $('.PHPSESSID').val(),
			'TOKEN'		: $('.TOKEN').val()
		};
		
		var url = URL +'Comment/postComment';
		var successFunction = function (data) { 
			//var ajaxData = $.parseJSON(data);
			if (data.status == 1) {
				var user_name	=data.data.user_name;
				var comment		=data.data.comment;
				var img_url		=data.data.user_img;
				var pid			=data.data.comment_id;
				var user_id		=data.data.user_id;
				var user_href	='/someone/'+user_id+'.html';//用户个人中心连接地址
				var create_time	=Comments.formatDate(data.data.timestamp);
				
				//显示评论
				var html='';

					html+='<dl class="comms_box clearfix">'+
							'<dt>'+ 
								'<a href="'+user_href+'" title="'+user_name+'" target="_blank" >'+
								   '<img class="lazyImg" src="'+img_url+'" width="40" height="40" alt="'+user_name+'" />'+
								'</a>'+
							'</dt>'+
							'<dd>'+
								'<span class="dis_detail clearfix">'+
								  '<span class="comms_user"><a class="user" href="'+user_href+'" title="'+user_name+'" target="_blank" >'+user_name+'</a><i>:</i></span>'+
								  '<span class="comms_detail">'+comment+'</span>'+
								'</span>'+
								'<span class="dis_reply clearfix">'+
									'<time>'+create_time+'</time><a class="reply" href="javascript:;" title="回复" onclick="replayComment(this,\''+user_name+'\');return false">回复</a>'+
									'<input type="hidden" class="comment_pid" value="'+pid+'">'+
									'<input type="hidden" class="comment_p_user_id" value="'+user_id+'">'+
								'</span>'+
								
								'<div class="comms_replyBox">'+

								'</div>'+
				
							'</dd>'+
						  '</dl>';
						  
				$('.commsList').prepend(html);
				editor.setContent('');
				
			}else{
				alert(data.info);
			}
		}
		
		
		$.ajax({
				url:        url,
				data:       json,
				success:    successFunction
		});
		
	},

	
	//	点击回复
    rc : true,
	rp :true,
    html :$("#replayHtml").text(),

    replayComment:function (obj,user){
        var replayCon = $(obj).parent('span'); //节点插入位置
      
        var comment_pid_re = $(obj).parent('span').children('.comment_pid').val();  //当条评论的id
		var comment_p_user_id = $(obj).parent('span').children('.comment_p_user_id').val();//评论的user_id
        if(Comments.rc){
            Comments.rc = false;
            replayCon.after(Comments.html);

			$('.replay-content').slideDown().attr('id','_comment').find('form').attr('id',"replay_p_comment");
			$('#replay_p_comment textarea').attr('id','replayContent');
			$('#replay_p_comment .replay-btn').bind('click',Comments.clickPost);  //提交子评论
            $('#_comment .cancel-btn').bind('click',function(){	
						
				$('#_comment').slideUp(function(){
						$(this).remove()
				})
				Comments.rc = true    

            });
			$('#replay_p_comment textarea').focus();
			$('#replay_p_comment textarea').val('@'+user+'：');

			Comments.bindQQShow2();//自评论的标签初始化
			$("#comment_pid_re").val(comment_pid_re); //当条评论的id
			$("#comment_p_user_id").val(comment_p_user_id);
        }else{
				
			  $('#_comment').slideUp(function(){
				  $(this).remove()
			  })
			  Comments.rc = true    				
           
        };
		
        return false
    },


	//提交子评论
	clickPost:function (){ 
		
		if( !Common.isLogin() ){
             return false;
        }
		var comment = $.trim( $('#replayContent').val() ),
			type    = $("#shareText").val(),
			id  	= $("#TypeId").val(),
			comment_p_user_id = $('#comment_p_user_id').val(),
			comment_pid_re    = $("#comment_pid_re").val(),
			img_url   = $('#hide_txt_img').val();

		if(comment.length == 0 ){ 
			alert("评论不能为空哦！");
			$('#replayContent').focus();
			return false;
		}
		if(comment.length >= 480 ){
		    alert("您好，输入字数不得超过480个！");
			$('#replayContent').focus();
			return false;
		}
		if( Common.filtrateHtml(comment) ) {
		    alert("不能输入特殊字符哦!"); 
			$('#replayContent').focus();
		    return false;
		}
		
		var json = {
			'comment'	: comment,
			'pid'		: comment_pid_re,
			'puser_id'	: comment_p_user_id,
			'img'		: img_url,
			'type' 		: type,
			'comment_type' :1,
			'id' 		: artical_id,
			'PHPSESSID' : $('.PHPSESSID').val(),
			'TOKEN'		: $('.TOKEN').val()
		};
		url = URL +'Comment/AddSonComment';
		
		var successFunction = function (data) {
			if (data.status == 1) {

				var user_name	=data.data.user_name;
				var img_url		=data.data.user_img;
				var user_id		=data.data.user_id; 
				var user_href	='/someone/'+user_id+'.html';//用户个人中心链接地址
				var content		=Comments.replace_em(data.data.comment);
				var create_time	=Comments.formatDate(data.data.timestamp);
				
				var html='<dl class="comms_reply comms_box clearfix">'+
							'<dt>'+ 
								'<a href="'+user_href+'" title="'+user_name+'" target="_blank" >'+
								   '<img class="lazyImg" src="'+img_url+'" width="40" height="40" alt="" />'+
								'</a>'+
							'</dt>'+
							'<dd>'+
								'<span class="dis_detail clearfix">'+
								  '<span class="comms_user"><a class="user" href="'+user_href+'" title="'+user_name+'" target="_blank" >'+user_name+'</a><i>:</i></span>'+
								  '<span class="comms_detail">'+content+'</span>'+
								'</span>'+
								
							   '<time>'+create_time+'</time>'+
								
							'</dd>'+
						  '</dl>';
				//提交成功显示自评论
				$("#_comment").next(".comms_replyBox").prepend(html);

				$('#replayContent').val('');
				$('#_comment').slideUp(function(){
					$(this).remove()
				})
		
				Comments.rc = true;
					
			}else{
				alert(data.info)
			}
			
		};
		$.ajax({
				url:        url,
				data:       json,                     
				success:    successFunction
		});
		
		return false;
		
	},
	//加载更多评论
	more_comms : function(obj,url,detail_id){ 
		var p = parseInt($("#more_comms_p").val());
		var beforeSendFunction = function(){
			$(obj).find("p").html('<img src="/Images/loading.gif" alt="loading" />加载中...');
		}
		var successFunction = function(data){
		      var data=data.data;
			  var newElements = '';
 			  for(var i=0;i<data.length;i++){ 
			  
 				 newElements +='<dl class="comms_box clearfix">'+
								  '<dt>'+
									  '<a href="/someone/'+data[i].user_id+'.html" title="'+data[i].user_name+'" target="_blank" >'+
									  '<img class="lazyImg" src="'+data[i].img_url+'" width="40" height="40" alt="'+data[i].user_name+'" />'+
									  '</a>'+
								  '</dt>'+
								  '<dd>'+
									  '<span class="dis_detail clearfix">'+
										  '<span class="comms_user"><a class="user" href="/someone/'+data[i].user_id+'.html" title="'+data[i].user_name+'" target="_blank">'+data[i].nick_name+'</a><i>:</i></span>'+
										  '<span class="comms_detail">'+data[i].content+'</span>'+
									  '</span>'+
									  '<span class="dis_reply clearfix">'+
										  '<time>'+data[i].create_time+'</time><a class="reply" href="javascript:;" title="回复"  onclick="replayComment(this,\''+data[i].nick_name+'\');return false">回复</a>'+
										  '<input type="hidden" class="comment_pid" value="'+data[i].id+'">'+
										  '<input type="hidden" class="comment_p_user_id" value="'+data[i].user_id+'">'+
										  '<input type="hidden" class="puser_id" value="'+data[i].puser_id+'"/>'+
									  '</span>'+
									  '<div class="comms_replyBox">';
 	               
 	                if(data[i].son_replied !=''){
 	 	               var data_son = eval(data[i].son_replied);
 	                	for(var j=0;j<data_son.length;j++){
						   newElements+='<dl class="comms_reply comms_box clearfix">'+
											'<dt>'+
												'<a href="/someone/'+data_son[j].user_id+'.html" title="'+data_son[j].nick_name+'" target="_blank" >'+
												   '<img class="lazyImg" src="'+data_son[j].img_url+'" width="40" height="40" alt="'+data_son[j].nick_name+'" />'+
												'</a>'+
											'</dt>'+
											'<dd>'+
												'<span class="dis_detail clearfix">'+
												  '<span class="comms_user"><a class="user" href="/someone/'+data_son[j].user_id+'.html" title="'+data_son[j].nick_name+'" target="_blank" >'+data_son[j].nick_name+'</a><i>:</i></span>'+
												  '<span class="comms_detail">'+data_son[j].content+'</span>'+
												'</span>'+
											   '<time>'+data_son[j].create_time+'</time>'+
											'</dd>'+
										  '</dl>';
 	                   }
 	                }
					  newElements+= '</div>';
					  if(data[i].son_replied !='' && parseInt(data[i].son_replied_count)>5 ){
					  newElements+= '<div class="more_comms_reply">'+
											  '点击加载更多'+
									'</div>'+
									'<input type="hidden" class="more_comms_reply_p" value="1">';   
					  }
					  newElements+= '</dd>'+
								'</dl>';
				 
             }
             $(".commsList").append(newElements);
			 $("#more_comms_p").val(parseInt($("#more_comms_p").val())+1); //给p加一  
			  if(data.length<10){
				  $(obj).find("p").html('没有更多了');
				  setTimeout(function(){
					  $(obj).slideUp(function(){ $(this).remove()});
				  },500);
			  }else{
				  $(obj).find("p").html('加载更多');
			  }
			 
			 
			 	
		}//successFunction end
		
		var errorFunction = function(data){
			obj.find("p").html('加载异常，重新点击加载更多...');
		}
		
		$.ajax({
				url:url,
				data:{p:p,id:detail_id},
				type:'post',
				dataType:'json',
				async: false,
				beforeSend:beforeSendFunction,
				success:successFunction,
				error:errorFunction
		});
		
	},
	
	
	//点击加载更多子评论
	more_comms_reply: function(obj,comment_pid,comment_type,p){ 
		var beforeSendFunction = function(){
			$(obj).html('<img src="/Images/loading.gif" alt="loading" />加载中...');
		}
		
		var successFunction = function(data){
				   var data = data.data;
				   var newElements = '';
				   for(var i=0;i<data.length;i++){ 
						var user_name	=data[i].nick_name;
						var img_url		=data[i].img_url;
						var user_href	='/someone/'+data[i].user_id+'.html';
						var content		=Comments.replace_em(data[i].content);
						var create_time	=data[i].create_time;
						var user_id=data[i].user_id;
						newElements+='<dl class="comms_reply comms_box clearfix">'+
									'<dt>'+ 
										'<a href="'+user_href+'" title="'+user_name+'" target="_blank" >'+
										   '<img class="lazyImg" src="'+img_url+'" width="40" height="40" alt="" />'+
										'</a>'+
									'</dt>'+
									'<dd>'+
										'<span class="dis_detail clearfix">'+
										  '<span class="comms_user"><a class="user" href="'+user_href+'" title="'+user_name+'" target="_blank" >'+user_name+'</a><i>:</i></span>'+
										  '<span class="comms_detail">'+content+'</span>'+
										'</span>'+
										
									   '<time>'+create_time+'</time>'+
										
									'</dd>'+
								  '</dl>';
	
					}
					obj.siblings(".comms_replyBox").append(newElements);
					obj.siblings(".more_comms_reply_p").val( parseInt(p)+1); 
					if(data.length<5){
						obj.html('没有更多了');
						setTimeout(function(){
							$(obj).slideUp(function(){ $(this).remove()});
						},500);
					}else{
						obj.html('点击加载更多');
					}
					
			
		}//successFunction end
		
		var errorFunction = function(data){
			obj.html('加载异常，重新点击加载更多...');
		}
		
		
		$.ajax({
				url:URL+'Comment/sonMore',
				type:'POST',
				dataType:'json',
				data:"com_id="+comment_pid+"&p="+p+"&com_type="+comment_type,
				beforeSend:beforeSendFunction,
				success:successFunction,
				error:errorFunction
		})
		
	},


	
	/*替换表情*/
	replace_em:function (str){
                str = str.replace(/\</g,'<');
               str = str.replace(/\>/g,'>');
                str = str.replace(/\n/g,'');
                str = str.replace(/\[\/[^0-9]+([0-9]+)\]/g,'<img src="/Public/Home/images/face/$1.gif" border="0" />');
				
                return str;
    },
    
	//在js中时间戳转换成时间
	formatDate:function(d){
                      var   now=new Date(d * 1000);  
 		              var   year=now.getFullYear();     
 		              var   month=now.getMonth()+1;     
 		              var   date=now.getDate();     
 		              var   hour=now.getHours();     
 		              var   minute=now.getMinutes();     
 		              return   year+"-"+month+"-"+date+"   "+hour+":"+minute;     
 		              }	
};