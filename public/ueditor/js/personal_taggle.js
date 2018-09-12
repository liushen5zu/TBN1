var Taggle = {
	is_show : false,
	init:function(){
		Taggle.taggleReplay();
	},
	innerInit:function(i){
		Taggle.taggleSonReplay(i);
	},
	taggleReplay:function(){
		$('.reply_b').bind('click',function(){
			if(Taggle.is_show){
				$(this).parent().siblings('.replay_content').slideUp();
				$(this).html('回复');
				Taggle.is_show  = false;
			}else{
				Taggle.hidderAll();
				$(this).parent().siblings('.replay_content').slideDown();
				$(this).html('收起');
				Taggle.is_show  = true;
			}
		})
	},
	taggleReplayFirst:function(){
		$('.item:first .reply_b').bind('click',function(){
			if(Taggle.is_show){
				$(this).parent().siblings('.replay_content').slideUp();
				$(this).html('回复');
				Taggle.is_show  = false;
			}else{
				Taggle.hidderAll();
				$(this).parent().siblings('.replay_content').slideDown();
				$(this).html('收起');
				Taggle.is_show  = true;
			}
		})
	},
	/*因为子评论异步获取之后要单独初始化，不能init两次**/
	taggleSonReplay:function(i){
		
		$('#son'+i+' .reply_b').bind('click',function(){
			if(Taggle.is_show){
				$(this).parent().siblings('.replay_content').slideUp();
				$(this).html('回复');
				Taggle.is_show  = false;
			}else{
				Taggle.hidderAll();
				$(this).parent().siblings('.replay_content').slideDown();
				$(this).html('收起');
				Taggle.is_show  = true;
			}
		})
	},
	/*添加评论的时候给第一条绑定事件*/
	taggleSonReplayFirst:function(i){
		$('#'+i+' .son_item:first .reply_b').bind('click',function(){
			if(Taggle.is_show){
				$(this).parent().siblings('.replay_content').slideUp();
				$(this).html('回复');
				Taggle.is_show  = false;
			}else{
				Taggle.hidderAll();
				$(this).parent().siblings('.replay_content').slideDown();
				$(this).html('收起');
				Taggle.is_show  = true;
			}
		})
	},
	
	hidderAll:function(){
		$('.replay_content').each(function(){
			$(this).slideUp();
			$('.reply_b').each(function(){
				$(this).html('回复');
			});
		})
	}
};