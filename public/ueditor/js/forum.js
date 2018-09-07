/*
 *Website:www.51oscar.com
 *	贴吧操作功能
 */
 
var Forum={
	
	init: function(){
		
	},
	
	ajaxSaveBrowser : function() { 
		var type    = $("#shareText").val();//类型
		var type_id = $("#forum_id").val(); 
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
	
	/*
	 *	发新帖
	*/
	fostNewForum: function(){
	  //js登录弹窗
	       if( !Common.isLogin() ){
                $('.Madfms,.mark_51').show();
                return false;
            }
			
			var title = $(".tieba_title").val();
			var comment =editor.getContent();
			if(title.length == 0 ){ 
				alert("标题不能为空哦！");
				$('.tieba_title').focus();
				return false;
			}
			if(comment.length == 0 ){ 
				alert("评论不能为空哦！");
				editor.focus();
				return false;
			}
			
			var json = {title:title,comment:comment};
			 $.ajax({
				type:'post',
				url:URL+'forum/forumAdd',
				data:json,
				dataType:'json',
				success:function(data){

					if(data.status == 1){
						 Forum.showAlert({msg:"发帖成功！",showTime:800});
						 setTimeout(function(){
							 window.location.reload();
						 },1100);
					}else if(data.status == 2){
					   alert('你还没有登录');
					}else if(data.status == 3){
					  alert('内容有敏感词！');
					}else{
						alert(data.info);
					}
				}
			})
		
		
	},		//fostNewForum end
	
	/*
	 *	发回复
	*/
	replyforum: function(){
		 //js登录弹窗
	       if( !Common.isLogin() ){
                $('.Madfms,.mark_51').show();
                return false;
            }
			
			var pid = $("#forum_id").val();
			//var comment = $("#myEditor").val();
			var comment =editor.getContent();
			var user_id = $("#user1").val();
			//alert(title);
			//console.log(comment);
			if(pid == '' ){ 
				alert("评论对象不能为空！");
				$('.tieba_title').focus();
				return false;
			}
			if(user_id == '' ){ 
				alert("用户不能为空！");
				$('.tieba_title').focus();
				return false;
			}
			if(comment.length == 0 ){ 
				alert("帖子不能为空哦！");
				editor.focus();
				return false;
			}
			
			var json = {
			    id:pid,
				user_id:user_id,
				comment:comment
			};
			
			
			 $.ajax({
				type:'post',
				url:URL+'forum/formAddComment',
				data:json,
				dataType:'json',
				success:function(data){

					if(data.status == 1){
						 Forum.showAlert({msg:"发帖成功！",showTime:800});
						 setTimeout(function(){
							 window.location.reload();
						 },1100);
					}else if(data.status == 2){
					   alert('你还没有登录');
					   $('.Madfms,.mark_51').show();
					}else if(data.status == 3){
					  alert('内容有敏感词！');
					  editor.focus();
					}else{
						alert(data.info);
					}
				}
			})
	},
	
	/*
	 *	编辑贴
	*/
	updateforum: function(comment,forum_id,id,title){
		 //js登录弹窗
	       if( !Common.isLogin() ){
                $('.Madfms,.mark_51').show();
                return false;
            }
			if(comment.length == 0 ){ 
				alert("帖子不能为空哦！");
				return false;
			}
			if(forum_id == '' ){ 
				alert("评论对象不能为空！");
				return false;
			}
			if(id == '' ){ 
				alert("系统发生错误！");
				return false;
			}
			var json = {
			    id:id,
				forum_id:forum_id,
				comment:comment,
				title:title
			};
			 $.ajax({
				type:'post',
				url:URL+'forum/updateForum',
				data:json,
				dataType:'json',
				success:function(data){

					if(data.status == 1){
						 Forum.showAlert({msg:"编辑帖子成功",showTime:800});
						 setTimeout(function(){
							 window.location.reload();
						 },1100);
						 
					}else if(data.status == 2){
					   alert('你还没有登录');
					}else if(data.status == 3){
					  alert('内容有敏感词！');
					}else if(data.status == 4){
					  alert('编辑失败！');
					}
				}
			})
	},
	
	/*
	 *	删除贴子
	*/
	deleteforum: function(comment_id){
		 //js登录弹窗
	       if( !Common.isLogin() ){
                $('.Madfms,.mark_51').show();
                return false;
            }
			var json = {comment_id:comment_id};
			 $.ajax({
				type:'post',
				url:URL+'forum/deleteForum',
				data:json,
				dataType:'json',
				success:function(data){
					if(data.status == 1){
						 //alert('删除帖子成功！');
						location.href = URL+'forum.html';
					}else if(data.status == 2){
					   alert('你还没有登录');
					}else if(data.status == 3){
					  alert('删除帖子失败！');
					}
				}
			})
	},
	/*
	 *	删除回复评论
	*/
	deletereplay: function(comment_id){
			var json = {id:comment_id};
			
			 $.ajax({
				type:'post',
				url:URL+'forum/deleteForumComment',
				data:json,
				dataType:'json',
				success:function(data){
					if(data.status == 1){
						 alert('删除帖子成功！');
						//alert(data.info);
						 window.location.reload();
						//location.href = URL+'forum.html';
					}else{
					  alert(data.info);
					}
				}
			})
	},
	/*
	*	点击回复
	*/	
    replyFlag : true,
	page_size : 10,
    html :$("#replayHtml").text(),

    replayComment:function (obj,user){
        var replayCon = $(obj).parents('ol'); //节点插入位置
      
        if(this.replyFlag){
            this.replyFlag = false;
            replayCon.after(this.html);

			$('.replay-content').slideDown().attr('id','_comment').find('form').attr('id',"replay_p_comment");
			$('#replay_p_comment textarea').attr('id','replayContent');
			$('#replay_p_comment .replay-btn').bind('click',this.clickPost);  //提交子评论
            $('#_comment .cancel-btn').bind('click',function(){	
						
				$('#_comment').slideUp(function(){
						$(this).remove()
				})
				Forum.replyFlag = true    
            });
			$('#replay_p_comment textarea').focus();
			$('#replay_p_comment textarea').val('@'+user+'：');
			if($(obj).parents(".son_dis_box_hd").length > 0){  //回复的是楼层里的评论，给#comment_p_user_id赋当前评论的用户id
				$("#comment_p_user_id").val($(obj).parents(".son_dis_box_hd").find('.p_user_id').val());  
			}else{ //回复的是楼层
				$("#comment_p_user_id").val($(obj).parents(".dis_box_hd").find('.reCount').val());
			}
			
			$("#comment_pid_re").val($(obj).parent().find('.p_id').val());
			
			this.bindQQShow();//评论qq表情初始化

        }else{
				
			  $('#_comment').slideUp(function(){
				  $(this).remove()
			  })
			  this.replyFlag = true    				
           
        };
		
        return false
    },
	
	//提交子评论
	clickPost:function (){
		if( !Common.isLogin() ){
             return false;
        }
		var comment = $.trim( $('#replayContent').val() ),
			id   = $("#forum_id").val(),
			pid  	=  $("#comment_pid_re").val(),
			puser_id   = $("#comment_p_user_id").val(); 
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
			id : id, //文章id
			pid : pid, //回复当条评论的id
			puser_id: puser_id,
			comment: comment
		};
		url = URL +'forum/ajaxAddComment';

		var successFunction = function (data) {
			if (data.status == 1) { 

				var user_name	=data.data.user_name;   //待返回值
				var img_url		=data.data.user_img; //待返回值
				var pid		    =data.data.pid; 
				var puser_id	=data.data.puser_id; 
				var user_href	='/someone/'+data.data.user_id+'.html';
				var content		=Forum.replace_em(data.data.content);
				var create_time	=Forum.formatDate(data.data.create_time);

				
				var html='<dl class="son_dis_box_hd clearfix">'+
							'<input type="hidden" value="'+puser_id+'" class="p_user_id">'+
							'<dt>'+
								'<a href="'+user_href+'" title="'+user_name+'"><img class="lazyImg" src="'+img_url+'" width="40" height="40"></a>'+
							'</dt>'+
							'<dd>'+
							  '<div class="dis_detail">'+
								'<a class="c_f60" href="'+user_href+'" title="'+user_name+'">'+user_name+'</a><i class="c_f60">：</i>'+
							  		''+content+''+                         
							   '</div>'+
							  '<ol>'+
								'<li class="li_right"><time>'+create_time+'</time><a class="c_f60" href="javascript:;" onclick="replayComment(this,\''+user_name+'\');return false">回复</a><input type="hidden" value="'+pid+'" class="p_id"></li>'+
							  '</ol>'+
						
							  '<div class="sonComment" style="clear:both">'+
							  '</div>'+

							'</dd>'+
						  '</dl>';
						  
				//提交成功显示自评论
				
				if($("#_comment").parent(".hd_dd").length>0){ //回复的是楼层
					$("#_comment").parent(".hd_dd").siblings(".sonCommentBox").find(".reCommentBox").prepend(html);
				}else{//回复的是楼层里的子评论
					$("#_comment").parents(".reCommentBox").prepend(html);
				}
				$('#replayContent').val('');
				$('#_comment').slideUp(function(){
					$(this).remove()
				})
		
				this.replyFlag = true   
					
			}else{
				alert(data.info)
			}
			
		};
		$.ajax({
				url:        url,
				data:       json, 
				dataType:  'json',				                    
				success:    successFunction
		});
		
		
	},
	
	//加载更多评论
	more_comms_reply: function(obj,comment_pid,p){ 
		var json = {
			id : $("#forum_id").val(), 
			pid : comment_pid, 
			p: p
		};	
		var successFunction = function(data){ 
					var data = data.data;
					if(!data){
						obj.html('没有更多了');
						setTimeout(function(){
							$(obj).slideUp(function(){ $(this).remove()});
						},200);
						return;
					}
				   var newElements = '';
				   for(var i=0;i<data.length;i++){ 
						
						var user_name	=data[i].nick_name;   //待返回值
						var img_url		=data[i].img_url; //待返回值
						var pid		    =data[i].pid; 
						var puser_id	=data[i].puser_id; 
						var user_href	='/someone/'+data[i].user_id+'.html';
						var content		=Forum.replace_em(data[i].content);
						var create_time	=Forum.formatDate(data[i].create_time);
						
						newElements +='<dl class="son_dis_box_hd clearfix">'+
									'<input type="hidden" value="'+puser_id+'" class="p_user_id">'+
									'<dt>'+
										'<a href="'+user_href+'" target="_blank" title="'+user_name+'"><img class="lazyImg" src="'+img_url+'" width="40" height="40"></a>'+
									'</dt>'+
									'<dd>'+
									  '<div class="dis_detail">'+
										'<a class="c_f60" href="'+user_href+'" title="'+user_name+'">'+user_name+'</a><i class="c_f60">：</i>'+
											''+content+''+                         
									   '</div>'+
									  '<ol>'+
										'<li class="li_right"><time>'+create_time+'</time><a class="c_f60" href="javascript:;" onclick="replayComment(this,\''+user_name+'\');return false">回复</a><input type="hidden" value="'+pid+'" class="p_id"></li>'+
									  '</ol>'+
								
									  '<div class="sonComment" style="clear:both">'+
									  '</div>'+
		
									'</dd>'+
								  '</dl>';
	
	
					}
					obj.before(newElements);
					obj.siblings(".more_comms_reply_p").val( parseInt(p)+1); 
					obj.html('更多回复...');
			
		}//successFunction end
		
		var errorFunction = function(data){
			obj.html('加载异常，重新点击加载更多...');
		}

		
		$.ajax({
				url:URL+'forum/ajaxShowComment',
				type:'POST',
				dataType:'json',
				data:json,
				success:successFunction,
				error:errorFunction
		})
		
	},


	/*
	*	绑定qq表情，需要引入jquery.qqFace.js
	*/
	bindQQShow : function(){
		$('#div_comment_qq').qqFace({ 
			id : 'facebox',	//表情盒子的ID
			assign:'replayContent',	//给那个控件赋值
			path: '/Images/face/'	//表情存放的路径
		}); 
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
 	},
	
	//自定义alert提示框
	//showAlert({msg:"test"});
	showAlert: function(obj){ 
		var msg = obj.msg;
		var showTime = obj.showTime || 1000;
		var _html = '<div id="showAlert" style="border:1px solid #ccc; padding:5px 10px; background-color:#FFF; color:#333; position:fixed; z-index:9999999999;">'+msg+'</div>'
		$(document).find("body").append(_html);
		$("#showAlert").css({"left":($(window).width()-$("#showAlert").outerWidth())/2+"px",
							"top":	($(window).height()-$("#showAlert").outerHeight())/2+"px"});
						
		setTimeout(function(){
			$("#showAlert").animate({opacity:"0"},800,function(){$(this).remove()})
			},showTime);	
													
		
	}
	

	
};