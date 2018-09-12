 
var AlbumEdit = {
	
	init : function(){ 
		var _this = this;
		$('.add_album').live('click', function(){
			_this.ajaxAddMovie($(this));
		});
		
		$('.delete_movie').live('click', function(){
			if( confirm('确认要删除吗') ){
				_this.ajaxDeleteMovie($(this));
			} 
		});
		
		/*
		$('#tab_search').click(function(){
			$(this).addClass('cur');
			$('#tab_collect').removeClass('cur');
			$('#div_collect').hide();
			$('#div_search').show(); 
		});
		*/
		$('#btn_edit_movie_info').click(function(){
			_this.ajaxEditMovie( $(this) );
		});

		$('#btn_search').click(function(){
			_this.gotoSearch( $(this) );
		});
	}, 
	
	showTab : function(){
		var url = location.href; 
        var index = url.indexOf('Search'); 
		 var index2 = url.indexOf('search'); 
		if(index > 0 || index2 > 0){
			$('#tab_search').addClass('cur');
			$('#tab_collect').removeClass('cur');
			$('#div_collect').hide();
			$('#div_search').show(); 
		}
		else{
			$('#tab_collect').addClass('cur');
			$('#tab_search').removeClass('cur');
			$('#div_collect').show();
			$('#div_search').hide();
		}
	},

	gotoSearch : function($this){
		var word = $('#txt_word').val();
		location.href = $this.attr('url') + '/word/' + word;
	},

	ajaxAddMovie : function($this){
                var url  = '/album/AjaxSaveMovieDescribe' ; 
                var arr  = [];
		var album_id = $this.attr('album_id');
                var json = {};
                var successFunction = '';
                var errorFunction = '';
		$('.txt_movie_desc').each(function(){
			arr.push({'id': $(this).attr('mid'), 'movie_desc': $(this).val() } );
		});
		
         if(arr.length == 0){
                             url  = '/album/ajaxMovieToAlbum' ; 
                             json = {  
			'movie_id': $this.attr('movie_id'),
			'movie_desc':'',
			'album_id':$this.attr('album_id'),
			'PHPSESSID':$(".PHPSESSID").val(),
			'TOKEN':$('.TOKEN').val()
                        };
                             successFunction = function (d) {
                            	 //var d = $.parseJSON(data);
                            	 
			if (d.status == 1 ) {
				location.reload();
			}
			else{
				alert(d.info);
			}
                            };
                             errorFunction = function(){
                             };
                             $.ajax({
										   type :      'POST',
                                           url:        url,
                                           data:       json,              
                                           error:      errorFunction,           
                                           success:    successFunction
                             });
                }else{
                          json = {'movie_infos': arr, 'album_id':album_id,'PHPSESSID':$(".PHPSESSID").val(),'TOKEN':$('.TOKEN').val()};  
                           successFunction = function (d, status) {
                                //var d = $.parseJSON(data); 
                                if (d.status == 1 ) {  
                                           url  = '/album/ajaxMovieToAlbum' ; 
                                           json = {  
                                                'movie_id': $this.attr('movie_id'),
                                                'movie_desc':'',
                                                'album_id':$this.attr('album_id')
                                        };
                                        successFunction = function (d, status) {
                                                //var d = $.parseJSON(data); 
                                                if (d.status == 1 ) {   
                                                        location.reload();
                                                }
                                                else{
                                                        alert(d.info);
                                                }
                                        };
                                        errorFunction = function(){  
                                        };
                                       $.ajax({
														type :      'POST',
                                                        url:        url,
                                                        data:       json,              
                                                        error:      errorFunction,           
                                                        success:    successFunction
                                        });
                                }
                                else{
                                        alert(d.info);
                                }
                        };

                         errorFunction = function(){  
		};

		$.ajax({
				type :      'POST',
				url:        url,
				data:       json,              
				error:      errorFunction,           
				success:    successFunction
		});
                }
	},

	ajaxDeleteMovie : function($this){
		var user_id  = 1; 
		var url  = '/album/AjaxDeleteAlbumInMovie' ; 
		var json = {  
			'movie_id': $this.attr('movie_id'),
			'movie_desc':'',
			'album_id':$this.attr('album_id')
		};
			
		var successFunction = function (d, status) {
			//var d = $.parseJSON(data); 
			if (d.status == 1 ) {  
				alert('删除成功');
				location.reload();
			}
			else{
				alert(d.info);
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
	
	// step3
	ajaxEditMovie : function($this){ 
		var url  = '/album/AjaxSaveMovieDescribe' ; 
		var arr  = [];
		var album_id = $this.attr('album_id');
		$('.txt_movie_desc').each(function(){
			arr.push({'id': $(this).attr('mid'), 'movie_desc': $(this).val() } );
		});
		var json = {'movie_infos': arr, 'album_id':album_id};  
			
		var successFunction = function (d, status) {
			//var d = $.parseJSON(data); 
			if (d.status == 1 ) {  
				alert('加入影片成功,返回影集页面');
				location.href = '/album/' + album_id ; 
			}
			else{
				alert(d.info);
			}
		};

		var errorFunction = function(){  
		};
				  
		$.ajax({
				type:      'POST',
				url:        url,
				data:       json,              
				error:      errorFunction,           
				success:    successFunction
		});
		
	},

	isSubmitAlbum : function($name, $desc){
		if( !Common.isLogin() ){
			alert('请先登录');
			return false;
		}
		if($name.val() == '' || $name.val() == $name.attr('placeholder')){
			alert('请输入影集名字');
			$name.focus();
			return false;
		}
		
		if($desc.val() == '' || $desc.val() == $desc.attr('placeholder')){
			alert('请输入影集介绍');
			$desc.focus();
			return false;
		}
		
		return true;
	},

	// 提交添加影集
	clickAddAlbum : function( $this ){
		var $name = $('#album_name');
		var $desc = $('#album_desc');
		if( Common.filtrateHtml($name.val()) ){
			alert('请不要输入特殊字符');
			$name.focus();
			return false;
		}

		if( Common.filtrateHtml($desc.val()) ){
			alert('请不要输入特殊字符');
			$desc.focus();
			return false;
		}

		var album_id = $this.attr('album_id');
		var is_allow = $('#is_allow').attr('checked') ?  0 : 1;
		if( this.isSubmitAlbum($name, $desc) ){
			if( album_id == '0'){
				this.ajaxAddAlbum(is_allow, $name.val(), $desc.val());
			}
			else{
				this.ajaxEditAlbum(album_id, is_allow, $name.val(), $desc.val());
			} 
		} 
	},

	pushThridSite : function(comment,type_id ,third_id){
		var url = URL + 'Oauth/ajaxPushComment';
		var json = {  
			'type'		: 'album',
			'comment'	: comment,
			'id'		: type_id, 
			'third_id'	: third_id
		}; 
		$.ajax({
			type: "POST",
			url: url,
			data: json, 
			async:true,
			error : function(){
				 '/album/toAjaxAlbumAddImg/album_id/' + type_id;
			},
			success:function(redata){	
				 '/album/toAjaxAlbumAddImg/album_id/' + type_id;
			}
		});
	},
	
	// 创建影集，成功后跳转到第二步
	ajaxAddAlbum : function(is_allow, album_name, album_desc){ 
		var _this = this;
		var type    = $("#shareText").val();//类型
		var type_id = $("#TypeId").val(); 
		var url      =  '/album/ajaxAlbumAdd' ; 
		
		var json = {
			'type': type,
			'id':   type_id,
			'PHPSESSID':$(".PHPSESSID").val(),
			'is_allow':is_allow,
			'album_name':album_name,
			'album_desc':album_desc,
			'TOKEN':$('.TOKEN').val()
		};
		
	
		
		
			
			
		var successFunction = function (d, status) {
			//var d = $.parseJSON(data); 
			if ( d.status == 1) { 
				 var album_id = d.data.album_id;
				 var comment = '我创建了一部影集：' + album_name + '...';
				 var third_id = '';
				 $('.ckb_third').each(function(){
					if( $(this).attr('checked')  ){
						third_id += $(this).val() + ',';
					}
				});
				
				var goStep2 = function(){ 
					location.href = '/album/toAjaxAlbumAddImg/album_id/' + album_id;
				};
				setTimeout(goStep2, 1000);
				third_id=third_id.substr(0,third_id.length-1); 
				if(third_id.length > 0){ 
					 _this.pushThridSite(comment, album_id,  third_id);
				} 
				
			}
			else{
				alert(d.info);
			}
		};
  
		$.ajax({
				url:        url,
				data:       json,   
                type:		'POST', 				
				success:    successFunction
		}); 
	},

	// step1 ,修改
	ajaxEditAlbum : function(album_id, is_allow, album_name, album_desc){
		var url      = '/album/ajaxAlbumadd' ; 
		var json = { 
			'album_id':album_id,
			'is_allow':is_allow,
			'album_name':album_name,
			'album_desc':album_desc
		};
			
		var successFunction = function (d, status) {
			//var d = $.parseJSON(data); 
			if ( d.status == 1) {
				 var album_id = d.data.album_id;
				 location.href = '/album/toAjaxAlbumAddImg/album_id/' + album_id;
			}
			else{
				alert(d.info);
			}
		};
  
		$.ajax({
				url:        url,
				data:       json, 
				type:		'POST', 
				success:    successFunction
		}); 
	},

	//修改影集描述初始化
	editAlbumInit : function(){
		var _this = this;
		var chk = $('#is_allow').val();
		if(chk == 0){
			 $('#is_allow').attr('checked', true);
		}
		$('#txt_description').artTxtCount($('.txtCount_tip'), 480);
		$('#txt_description').trigger('keyup');
		Common.placeHold();
		$('#btn_edit_album').click(function(){
			_this.clickEditAlbum( $(this) );
		});
	},

	// 提交修改影集
	clickEditAlbum : function($this){
		var $desc = $('#txt_description');
		if( Common.filtrateHtml($desc.val()) ){
			alert('请不要输入特殊字符');
			$desc.focus();
			return false;
		}
		if( !Common.isLogin() ){
			alert('请先登录');
			return false;
		}
		if($desc.val() == '' || $desc.val() == $desc.attr('placeholder')){
			alert('请输入影集介绍');
			$desc.focus();
			return false;
		}
                var name     = $('#album_name').val();
                if(name == ''){
                        alert('请输入影集名称');
			$('#album_name').focus();
			return false;
                }
		var url      = '/album/ajaxAlbumEditInfo' ; 
		var is_allow = $('#is_allow').attr('checked') ?  0 : 1; 
		var json = { 
			'album_id':$this.attr('album_id'),
			'is_allow':is_allow, 
			'album_desc':$desc.val(),
                        'album_name':name
		};
			
		var successFunction = function (data, status) {
			if ( data.status == 1) { 
				alert('修改成功');
				 var album_id = data.data;
				 location.href = durl  + album_id;
			}
			else{
				alert(data.info);
			}
		};
  
		$.ajax({
				url:        url,
				data:       json, 
				type:		'POST', 
				success:    successFunction
		}); 
 
	},
	
	// 点击tab
	clickTabAlbum : function($this){ 
		var _this = this;
		$('.tab_album').removeClass('active');
		$('.tab_album_div').hide();
		$this.addClass('active');
		$('#'+ $this.attr('tab_div') ).show();

		 //仅第一次去ajax取
		if( $('#'+ $this.attr('tab_div') ).find('ul').length > 0 ){
			return false;
		} 

		if( $this.attr('tab_div') == 'tab_my_create' ){
			this.ajaxGetCreateAblum();
		}
		if( $this.attr('tab_div') == 'tab_my_collect' ){
			this.ajaxGetCollectAblum();
		} 
	},
	
	
	//获取我创建的影集
	ajaxGetCreateAblum : function() {   
		var	url  = '/ajaxGetCreateAlbum' ;
		var json = {};
		var successFunction = function (data, status) {
			var ajaxData = $.parseJSON(data); 
			if ( ajaxData.status == 1 ) {   
				var d  = ajaxData.data;
				if(d == null){  
					$('#tab_my_create .div_ul_list').html('暂无影集...');
					return false;
				}
				var str = '<ul>';
				for (var i=0; i< d.length; i++ ) {
					var album_id   = d[i].album_id,
						album_name = d[i].album_name;
					str += '<li><input id="chk_'+album_id+'" type="checkbox" class="ckb_album" value="'+album_id+'"/>'
						+ '<label for="chk_'+album_id+'">'+album_name+'</label></li>';
				}
				str += '</ul>';
				$('#tab_my_create .div_ul_list').html(str);
			} 
		};	  
		$.ajax({
				url:        url,
				data:       json,                   
				success:    successFunction
		});
	},
	
	// 获取我收藏的影集
	ajaxGetCollectAblum : function(){   
		var	url  = '/ajaxGetCollectAlbum' ;
		var json = {};
			
		var successFunction = function (data, status) {
			
			var ajaxData = $.parseJSON(data); 
			if (ajaxData.status == 1 ) {   
				 var d  = ajaxData.data;
				 if(d == null){  
					$('#tab_my_collect .div_ul_list').html('暂无影集...');
					return false;
				}
				 var str = '<ul>';
				 for (var i=0; i< d.length ; i++ ){
					var album_id   = d[i].album_id,
						album_name = d[i].album_name;
					str += '<li><input id="chk_'+album_id+'" type="checkbox" class="ckb_album" value="'+album_id+'"/>'
						+ '<label for="chk_'+album_id+'">'+album_name+'</label></li>';
				 }
				 str += '</ul>';
				 $('#tab_my_collect .div_ul_list').html(str);
			} 
		};
  
		$.ajax({
				url:        url,
				data:       json,                   
				success:    successFunction
		});
	},
	
	//创建一个影集
	ajaxAddAlbumAtTab : function(is_allow, album_name, album_desc){ 
		var url      = '/ajaxAlbumadd' ; 
		var json = {  
			'is_allow':is_allow,
			'album_name':album_name,
			'album_desc':album_desc
		};
			
		var successFunction = function (data, status) {
			var d = $.parseJSON(data); 
			if ( d.status == 1) {  
				var album_id   = d.data.album_id,
					album_name = d.data.album_name;
				var str = '<li><input id="chk_'+album_id+'" type="checkbox" class="ckb_album" checked="checked" value="'+album_id+'"/>'
						+ '<label for="chk_'+album_id+'">'+album_name+'</label></li>';
				$('#tab_my_create ul').prepend(str);
				$('.tab_album').first().trigger('click');
				$('#album_name, #album_desc').val(''); 
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
	
	// 批量影片加入批量影集初始化
	batchAddMovieInit : function(){
		var _this = this;
		$('.tab_album').click(function(){
			_this.clickTabAlbum( $(this) );
		});
		
		$('.add_album_remove').click(function() {
			if( confirm('确认要删除吗') ){
				$(this).parents(".wait_movies").remove();
				var item = parseInt( $('.item_num').text() );
				$('.item_num').text( item - 1);
				$('.movies_num').each(function(){
					$(this).text( $(this).parents('.wait_movies').index() + 1);
				});
			}
		});

		$('.tab_album').first().trigger('click'); 

		$('#btn_add_movie_album').click(function(){
			_this.ajaxAddMoviesToAlbums();
		});

		$('#saveAlbum').click(function(){
				var $name = $('#album_name');
				var $desc = $('#album_desc'); 
				if( Common.filtrateHtml($desc.val()) ){
					alert('请不要输入特殊字符');
					$desc.focus();
					return false;
				}
				if( _this.isSubmitAlbum($name, $desc) ){
					var is_allow = $('#is_allow').attr('checked') ?  0 : 1;
					_this.ajaxAddAlbumAtTab(is_allow, $name.val(), $desc.val());
				}  
		});

		$('.item_num').text( $('.movieList').length );
	}, 

	// 批量影片加入多个影集
	ajaxAddMoviesToAlbums : function(){
		var url  = '/BatchAddMovieToAlbum' ; 
		var select_id = '';
		var arr  = []; 
		$('.div_ul_list').find('.ckb_album:checked').each(function(){
			select_id += $(this).val() +',';
		});

		if(select_id == ''){
			alert('请选择要加入的影集');
			return false;
		}
		select_id  = select_id.substr(0, select_id.length -1);
		 
		$('.txt_movie_desc').each(function(){
			if( Common.filtrateHtml( $(this).val()) ){
				alert('请不要输入特殊字符');
				$(this).focus();
				return false;
			}
			arr.push({'movie_id': $(this).attr('movie_id'), 'movie_desc': $(this).val() } );
		});
		var json = {'movie_infos': arr, 'album_ids':select_id};  
		var successFunction = function (data, status) {
			var d = $.parseJSON(data); 
			if (d.status == 1 ) {  
				alert('加入影片成功，返回.');
				location.href = '/index' ; 
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
	
	

	

	
	
 




};
 

$(window).load(function(){ 
	AlbumEdit.init();

});


/*
*禁止文本域多余240字输入
*
*/
function checkLength(obj,maxlength){
    if(obj.value.length > maxlength){
        obj.value = obj.value.substring(0,maxlength);
    }
}