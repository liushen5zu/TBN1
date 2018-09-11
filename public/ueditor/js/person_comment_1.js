
var PostComment={
	
	init:function(){
		
	},
	//outer 提交
	clickPost:function(obj){
		textareaObj = $(obj).parent().siblings('.content').children('textarea')
		comment = textareaObj.val();
		son_id = $(obj).attr('son_id');
		
		if(comment.length == 0 ){ 
			alert("评论不能为空哦！");
			textareaObj.focus();
			return false;
		}
		if(comment.length >= 480 ){
		    alert("您好，输入字数不得超过480个！");
			textareaObj.focus();
			return false;
		}
		if( Common.filtrateHtml(comment) ) {
		    alert("不能输入特殊字符哦!"); 
			textareaObj.focus();
		    return false;
		}
		puser_id = $(obj).attr('user_id');
		pid = $(obj).attr('pid');
		movie_id  = $(obj).attr('movie_id');
		type = 1;
		
		var json = {
			//'verify'	: vary_code,
			'comment'	: comment,
			'pid'		: pid,
			'puser_id'	: puser_id,
			//'mark'		: mark,
			//'img'		: img_url,
			//'third_id'	: third_id,
			'type' 		: type,
			'id' 		: movie_id
			//'PHPSESSID' : $('.PHPSESSID').val(),
			//'TOKEN'		: $('.TOKEN').val()
		};
		
		url = URL+'/' +'Comment/ajaxAddComment';
		var successFunction = function(ajaxData){
		  // ajaxData = $.parseJSON(data);
		   if(ajaxData.status != 1){
				alert(ajaxData.info);
				return false;
		   }
		   //追加内容
		   str = PersonComment.getInnerComment(ajaxData.data,son_id);
		   $("#son"+son_id).prepend(str);
		   //绑定事件
		   Taggle.taggleSonReplayFirst("son"+son_id);
		   //收起回复
		   $("#son"+son_id).siblings('.replay_content').slideUp();
		   $("#son"+son_id).siblings('.dis_line3').children('.reply_b').html('回复');
		   Taggle.is_show  = false;
		   //清空textarea
		   textareaObj.val('');
		   
		};
		$.ajax({
				url:        url,
				data:       json,                     
				success:    successFunction
		});
	},
	//inner 提交
	clickInnerPost:function(obj){
		textareaObj = $(obj).parent().siblings('.content').children('textarea')
		comment = textareaObj.val();
		son_id = $(obj).attr('son_id');
		alert(son_id);
		if(comment.length == 0 ){ 
			alert("评论不能为空哦！");
			textareaObj.focus();
			return false;
		}
		if(comment.length >= 480 ){
		    alert("您好，输入字数不得超过480个！");
			textareaObj.focus();
			return false;
		}
		if( Common.filtrateHtml(comment) ) {
		    alert("不能输入特殊字符哦!"); 
			textareaObj.focus();
		    return false;
		}
		puser_id = $(obj).attr('user_id');
		pid = $(obj).attr('pid');
		movie_id  = $(obj).attr('movie_id');
		type = 1;
		
		var json = {
			//'verify'	: vary_code,
			'comment'	: comment,
			'pid'		: pid,
			'puser_id'	: puser_id,
			//'mark'		: mark,
			//'img'		: img_url,
			//'third_id'	: third_id,
			'type' 		: type,
			'id' 		: movie_id
			//'PHPSESSID' : $('.PHPSESSID').val(),
			//'TOKEN'		: $('.TOKEN').val()
		};
		
		url = URL+'/' +'Comment/ajaxAddComment';
		var successFunction = function(ajaxData){
		   // ajaxData = $.parseJSON(data);
		   if(ajaxData.status != 1){
				alert(ajaxData.info);
				return false;
		   }
		   //追加内容
		   str = PersonComment.getInnerComment(ajaxData.data,son_id);
		   $("#son"+son_id).prepend(str);
		   //绑定事件
		   Taggle.taggleSonReplayFirst('son'+son_id);
		   //收起回复
		   $(obj).parent().parent('.son_replay_c').slideUp();
		   $(obj).parent().parent('.son_replay_c').siblings('.dis_line3').children('.reply_b').html('回复');
		   //$("#"+son_id).siblings('.replay_content').slideUp();
		   //$("#"+son_id).siblings('.dis_line3').children('.reply_b').html('回复');
		   Taggle.is_show  = false;
		   //清空textarea
		   textareaObj.val('');
		   
		};
		$.ajax({
				url:        url,
				data:       json,                     
				success:    successFunction
		});
	},
	//增加好评次数
	clickGood:function(obj){
		comment_id = $(obj).attr('comment_id');
		user_id = $(obj).attr('user_id');
		url = URL + '/comment/ajaxMovieCommentGood'; 
		var json = {
			'comment_id': comment_id,
			'user_id':user_id,
			
		};
			
		var successFunction = function (ajaxData, status) {
			//var ajaxData = $.parseJSON(data); 
			if (ajaxData.status == 1) {   
				count =  parseInt( $(obj).siblings('.goodCount').text() ) +1;
				$(obj).siblings('.goodCount').text(count)
			}		
		};
			  
		$.ajax({
				url:        url,
				data:       json,                     
				success:    successFunction
		});
	}
	
};
var qqFace={
	init:function(){
		qqFace.bindQQShow();
		qqFace.bindUpload();
		
	},
	bindQQShow : function(){
		$('#div_comment_qq').qqFace({
			id : 'facebox1',	//表情盒子的ID
			assign:'top_comment',	//给那个控件赋值
			path: '/Public/Home/images/face/'	//表情存放的路径
		}); 
		
	},
	bindQQShowForReply:function(){
		
		$('.expression').qqFace({
			id : 'facebox1',	//表情盒子的ID
			assign:'contentReply',	//给那个控件赋值
			path: '/Public/Home/images/face/'	//表情存放的路径
			
		}); 
	},
	// 绑定上传图片
	bindUpload : function(){
			var ajax_url = $('#btn_upload2').attr('ajax_url');
			var uploadSuccess = function(src){
				$('#img_upload_show').attr('origin', src).lazyload({'max_width':100});
				$('#hide_txt_img').val(src); 
				$('.div-upload-show').show(); 
				
				$('.div-upload-show .close').click(function(){ 
					$('#div_comment_img').width(160);
					$('.div-upload-show').hide();
					$('.show_img_tag').show();  
				})
				
				$('.show_img_tag').click(function(){
					$('.div-upload-show').show();
					$(this).hide();
					$('#div_comment_img').width(40);
				});
				
				$('#upload_delete').click(function(){
					$('#img_upload_show').attr('src', '');
					$('#hide_txt_img').val('');
					$('.div-upload-show').hide(); 
					$('.show_img_tag').hide();
				});
			 } ;//uploadSuccess			
			/*跨域，拿不到data的值*/
			
			$('.button').upload({         
				name: 'upload_img',         
				action: '/index',  
				enctype: 'multipart/form-data',         
				params: {'rand': Math.random()},         
				autoSubmit: true,
				onSubmit: function(){},         
				onComplete: function(data) {
					//data = $.parseJSON(data);
					if(data.status==1){
						uploadSuccess(data.data);
					}else{
						alert(data.info);
					}
				}
			});
	}
};
var PersonComment={
	pageSize:20,
	sonPageSize:10,
	ajaxData:'',
	count:0,
	type:'justSee',
	init:function(){
		PersonComment.justSee();
	},
	justSee:function(){
		url = URL+'/comment/ajaxGetPersonComment';
		PersonComment.type = 'justSee';
		json = {
			'type':'justSee',
			'page':1,
			'page_size':PersonComment.pageSize
		};
		PersonComment.count = parseInt($("#justSeeCount").val());
		
		PersonComment.getPage();
	},
	friendComment:function(){
		url = URL+'/comment/ajaxGetPersonComment';
		PersonComment.type = 'friendComment';
		json = {
			'type':'friendComment',
			'page':1,
			'page_size':PersonComment.pageSize
		};
		PersonComment.count = parseInt($("#countFriend").val());
		PersonComment.getPage();
	},
	ownComment:function(){
		url = URL+'/comment/ajaxGetPersonComment';
		PersonComment.type = 'ownComment';
		json = {
			'type':'ownComment',
			'page':1,
			'page_size':PersonComment.pageSize
		};
		PersonComment.count = parseInt($("#countOwn").val());
		PersonComment.getPage();
	},
	aboutSelfComment:function(){
		url = URL+'/comment/ajaxGetPersonComment';
		PersonComment.type = 'aboutSelfComment';
		json = {
			'type':'aboutSelfComment',
			'page':1,
			'page_size':PersonComment.pageSize
		};
		PersonComment.count = parseInt($("#countAboutSelf").val());
		PersonComment.getPage();
	},
	/*获取分页**/
	getPage:function(){
		var getPageList = function(page_index, jq){
					/**?????这里同_this始终通过不了，艹*/
				    PersonComment.ajaxGetPageList(page_index+1);
					return false;
					
		};
		$("#outerPage").pagination(PersonComment.count , {
                    'items_per_page'      : PersonComment.pageSize,  
                    'num_display_entries' : 4,
                    'num_edge_entries'    : 2,  
                    'prev_text'           : "上一页",  
                    'next_text'           : "下一页",  
					'link_to'			  : "javascript:;",
                    'callback'            :  getPageList
		});  
	},
	
	/*获取内容*/
	ajaxGetPageList:function(page_index){
		url = URL+'/comment/ajaxGetPersonComment';
		json = {
			'type':PersonComment.type,
			'page':page_index,
			'page_size':PersonComment.pageSize,
			'page_inner':1,
			'page_size_inner':PersonComment.sonPageSize
		};
		PersonComment.ajaxRequest(url,json);
	},
	/*发请求*/
	ajaxRequest:function(url,json){
		var successFunction = function(data){
		   PersonComment.showComment(data);
		   
		};
		$.ajax({
				url:        url,
				data:       json,                     
				success:    successFunction
		});
	},
	
	/*展示*/
	showComment:function(ajaxData){
			
			//ajaxData = $.parseJSON(data);
			outLength = ajaxData.data.commentList.length;
			comment = ajaxData.data.commentList;
			$('.comment').html('');
			for(i=0;i<outLength;i++){
				str = PersonComment.getOuterComment(comment[i],i);
				$(".comment").append(str);
				/*子评论也要显示*/
				for(j=0;j<PersonComment.sonPageSize && j<comment[i]['replyArr'].length;j++){
					$("#son"+i).append(PersonComment.getInnerComment(comment[i]['replyArr'][j],i));
				}
				/*大于innerPageSize时，就显示分页*/
				if(comment[i].replyCount > PersonComment.sonPageSize){
					
					PersonComment.getInnerPage(i,comment[i].replyCount);
				}
			}
			Taggle.init();
			//qqFace.bindQQShowForReply();
	},
	/*获取子评论分页*/
	getInnerPage:function(i,count){
		var getPageList = function(page_index, jq){ 
				    PersonComment.ajaxGetInnerPageList(i,page_index+1);
					return false;
		};
		
		$("#innerPage"+i).pagination(count , {
                    'items_per_page'      : PersonComment.sonPageSize,  
                    'num_display_entries' : 4,
                    'num_edge_entries'    : 2,  
                    'prev_text'           : "上一页",  
                    'next_text'           : "下一页", 
					'link_to'			  : "javascript:;",
                    'callback'            :  getPageList
		});  
	},
	/*获取子评论分页内容,单独写一个*/
	ajaxGetInnerPageList:function(i,page_index){
		url = URL+'/comment/ajaxGetInnerPersonComment';
		json = {
			'pid':$("#innerPage"+i).attr('data-pid'),
			'type':PersonComment.type,
			'page_inner':page_index,
			'page_size_inner':PersonComment.sonPageSize
		};
		
		var successFunction = function(ajaxData){
		 //   ajaxData = $.parseJSON(data);
		    str = '';
			
			for(j=0;j<PersonComment.sonPageSize && j<ajaxData.data.length;j++){
				str += PersonComment.getInnerComment(ajaxData.data[j],i);
				
			}
			
		    $("#innerPage"+i).siblings('.son_item').remove();
			$("#innerPage"+i).parent().prepend(str);
			/*专门对子评论的内容进行回复绑定事件**/
			Taggle.innerInit(i);
		};
		$.ajax({
				url:        url,
				data:       json,                     
				success:    successFunction
		});
		
	},
	/*拼凑子评论内容*/
	getInnerComment:function(replyArr,i){
		//for(j=0;j<PersonComment.sonPageSize;j++){
					var user_id   = replyArr.user_id,
					user_name = replyArr.user_name,
					user_img  = replyArr.user_img ? replyArr.user_img :"/Public/Home/images/default_user_logo.jpg", 
					puser_name = replyArr.puser_name,
					puser_img  = replyArr.puser_img ? replyArr.puser_img :"/Public/Home/images/default_user_logo.jpg", 
					content   = replyArr.comment,	
					//mark      = data[i].mark,
					timestamp = timetodate(replyArr.timestamp,'yyyy-MM-dd hh:mm:ss'),
					s_comment_id= replyArr.comment_id,
					good      = replyArr.good,
					bad       = replyArr.bad,
					img       = replyArr.img,
					movie_id  = replyArr.movie_id,
					pid 	  = replyArr.pid,
					data_val = "user_id="+user_id+" movie_id="+movie_id+" pid="+pid+' comment_id='+s_comment_id+' son_id='+i,
					movie_name       = replyArr.movie_name;
						
				str = '';
				str += '			<dl class="son_item">';
				str += '				<dt><a href="/someone/id/'+user_id+'"><img src="'+user_img+'" width="40" height="40"></a></dt>';
				str += '				<dd class="dis_line1">';
				str += '					<a href="/someone/id/'+user_id+'">'+user_name+'</a>回复<a href="/personal/index/'+user_id+'">'+puser_name+'</a><span>'+timestamp+'</span>';
				var strconlen=PersonComment.replace_em(content);
				review_domain = $("#Domain").val()+'/review/'+s_comment_id+'.html';
				if(strconlen.length>200){
					str += '<em><a  href="'+review_domain+'" target="_blank" class="more_content">更多</a></em>';
				}
				str += '				</dd>';
				str += '				<dd class="dis_line2">';
				str += 						PersonComment.replace_em(content) ;
				str += '				</dd>';
				str += '				<dd class="dis_line3">';
				str += '					<a href="javascript:;" class="useful" onclick="PostComment.clickGood(this)" '+data_val+'>有用</a><span class="goodCount">'+good+'</span><a id="reply" class="reply_b">回复</a>';
				str += '				</dd>';
				str += '				<div class="son_replay_c replay_content">';
				str += '					<p><textarea id="contentReply"></textarea></p>';
				str += '					<p style="text-align:right"><a href="javascript:;" class="expression">表情</a><input type="button" value="加上去"  '+data_val+' onclick="PostComment.clickInnerPost(this);"></p>';
				str += '				</div>';
				str += '				<div style="clear:both"></div>';
				str += '			</dl>';
				 
		//}
		return str;
	},
	getOuterComment:function(commentObj,i){
		var user_id   = commentObj.user_id,
				user_name = commentObj.user_name,
				user_img  = commentObj.user_img ? commentObj.user_img :"/Public/Home/images/default_user_logo.jpg", 
				content   = commentObj.comment,	
				pid      = commentObj.pid,
				timestamp = timetodate(commentObj.timestamp,'yyyy-MM-dd hh:mm:ss'),
				comment_id= commentObj.comment_id,
				good      = commentObj.good,
				bad       = commentObj.bad,
				img       = commentObj.img,
				movie_name       = commentObj.movie_name,
				movie_id  = commentObj.movie_id,
				data_val = "user_id="+user_id+" movie_id="+movie_id+" pid="+comment_id+' comment_id='+comment_id+' son_id='+i,
				replyCount = commentObj.replyCount;
				movie_domain = $("#Domain").val()+'/movie/'+movie_id+'.html';
				id = "innerPage"+i;
				img_tag = '';
				
				if(img != 'null' && img !='' && img){img_tag ='<img src="'+img+'" /><br>';}
				str  = '<!--评论-->';
				str += '	<dl class="item">';
				str += '		<dt><a href="/someone/id/'+user_id+'"><img src="'+user_img+'" width="65" height="65"></a></dt>';
				str += '		<dd class="dis_line1">';
				str += '			<a href="/someone/id/'+user_id+'">'+user_name+'</a>评<a href="'+movie_domain+'">#'+movie_name+'#</a><span>'+timestamp+'</span>';
				var strconlen=img_tag+PersonComment.replace_em(content);
				review_domain = $("#Domain").val()+'/review/'+comment_id+'.html';
				if(strconlen.length>200){
					str += '<em><a href="'+review_domain+'" target="_blank" class="more_content">更多</a></em>';
				}
				str += '		</dd>';
				str += '		<dd class="dis_line2">';
				str += 				img_tag+PersonComment.replace_em(content)			 ;
				str += '		</dd>';
				str += '		<dd class="dis_line3">';
				str += '			<a href="javascript:;" class="useful" onclick="PostComment.clickGood(this)" '+data_val+'>有用</a><span class="goodCount">'+good+'</span><a id="reply" class="reply_b">回复</a>';
				str += '		</dd>';
				str += '		<div class="replay_c replay_content">';
				str += '			<p>你的回应...</p>';
				str += '			<p class="content"><textarea ></textarea></p>';
				str += '			<p style="text-align:right"><input type="button" value="加上去" '+data_val+'  onclick="PostComment.clickPost(this);"></p>';
				str += '		</div>';
				str += '		<!--子评论-->';
				str += '		<div class="son_comment" id="son'+i+'">';
				str += '			<div id="'+id+'" class="page_turn" data-pid="'+comment_id+'"></div>';
				str += '		</div>';
				str += '	</dl>';
				
				return str;
	},
	/*替换表情*/
	replace_em:function (str){
                str = str.replace(/\</g,'<');
                str = str.replace(/\>/g,'>');
                str = str.replace(/\n/g,'');
                str = str.replace(/\[\/[^0-9]+([0-9]+)\]/g,'<img src="/Public/Home/images/face/$1.gif" border="0" />');
				
                return str;
    }
	
	
};
