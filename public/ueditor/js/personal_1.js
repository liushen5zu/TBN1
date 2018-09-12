 
var Personal = {
	
	init : function(){
		var _this = this; 
		
		$('#btn_img_add_focus').click(function() {  
			_this.ajaxAddFriends( $(this) );
		});

		$('.focus-he').live('click', function() { 
			_this.ajaxAddFriends( $(this) );
		});
		
		$('.cancelfocus-he').live('click',function() { 
			_this.ajaxDeleteFriends( $(this) );
		}); 

		$('.delete_msg').click(function () { 
			$(this).parent('li').addClass('li_cur');
			if (confirm('确认要删除这条消息吗?')){
				_this.ajaxDeleteMsg( $(this) );
			} 
			else{
				$(this).parent('li').removeClass('li_cur');
			}
		});

		$('.home_collect').click(function(){
			Common.addCollect( $(this) );
		});

		$('.album-collect').click(function(){
			Common.ajaxAddCollectAlbum( $(this) );
		});

		$('.crear_my_album').click(function(){
			if( !Common.isLogin() ){
				alert('请先登录，再创建影集!');
			}
			else{
				location.href = $(this).attr('url');
			}
		});
		$('.btn_delete_album').click(function(){
			_this.ajaxDeleteAlbum($(this));
		});

		$('.cancel_colloct_movie').click(function(){
			_this.ajaxCancelMovieCollect($(this));
		});
	},
	
	ajaxCancelMovieCollect : function($this){ 
		var movie_id = $this.attr('movie_id'); 
		var url  = URL +'Movie/ajaxCancelCollectMovie';
		var json = {
			'movie_id': movie_id
		};
			
		var successFunction = function (ajaxData, status) {
		//	var ajaxData = $.parseJSON(data); 
			if ( ajaxData.status == 1) {   
				$this.parents('.left-list-2').remove();
				var movie_count = parseInt( $('#movie_count').text() );
				$('#movie_count').text( movie_count - 1 );
			}
			else{
				alert(ajaxData.info);
			}
		};

		var errorFunction = function(){  
		};
			  
		$.ajax({
				url:        url,
				data:       json,              
				error:      errorFunction,           
				success:    successFunction
		});
	},
	
	ajaxDeleteAlbum : function( $this ){
		if(confirm('确认要删除影集吗')){ 
			var url = URL + 'album/AjaxDeleteAlbum';  
			var json = { 
				'album_id': $this.attr('album_id')
			};
				
			var successFunction = function (d) {
				//var d = $.parseJSON(data); 
					if (d.status == 1) {   
						$this.parents('.out-album-list').fadeOut();
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
		}
	},

	// 添加关注
	ajaxAddFriends : function($this) { 
		var url  = URL + 'Personal/ajaxAddFriends';
		var path = $('#txt_public_home').val() + 'images/attentioned.gif';
		var json = { 
			'friend_id': $this.attr('friend_id')
		};
		var successFunction = function (d) {
			//var d = $.parseJSON(data);
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
	},

	//删除消息
	ajaxDeleteMsg : function( $this){
		var msg_id = $this.attr('msg_id');
		var url = URL + 'Personal/ajaxDelectMsg';
		var json = {
			'id' : msg_id
		};
		var successFunction = function(data) {
			var d = $.parseJSON(data);
			if (d.status == '1') { 
				$this.parent().fadeOut();
				if( $('.ul-my-msg li').length <= 0){
					window.location.reload();
				} 
			}
		}; 
		
		$.ajax({
			url:        url,
			data:       json,                     
			success:    successFunction
		});
	},
	
	// 访问用户
	ajaxVisitedFriends : function(friend_id){
		var url  = URL + 'Personal/ajaxVisitedFriends';
		var json = { 
			'friend_id': friend_id
		};
		var successFunction = function (data) {
			var d = $.parseJSON(data);
			if (d.status == '1') { 
			} 
		}; 
		$.ajax({
				url:        url,
				data:       json,              
				success:    successFunction
		});
	}

};
 

$(document).ready(function(){
	
	Common.showStarLength();
});

$(window).load(function(){
	Personal.init();
});