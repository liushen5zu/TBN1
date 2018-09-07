 /*
 * html5 placeholder pollfill
 * - 使用绝对定位内嵌层
 * - 也适用于密码域
 * 目标浏览器: IE 6~9, FF 3.5
 ```
// 默认
$('input[placeholder]').placeholder()

// autofocus 与 placeholder 搭配时，非 webkit 清空了提示文本，推荐
$('input[placeholder]').placeholder({
// 将删除原有 placehodler 属性，强制用 JS 实现替代
useNative: false, 
// focus 时不清除提示文本， keypress 有效字符时才清空
hideOnFocus: false, 
// 附加样式
style: {
textShadow: 'none'
}
})
```
*/
$(function(){
if(!placeholderSupport()){   // 判断浏览器是否支持 placeholder
    $('[placeholder]').focus(function() {
        var input = $(this);
        if (input.val() == input.attr('placeholder')) {
            input.val('');
            input.removeClass('placeholder');
        }
    }).blur(function() {
        var input = $(this);
        if (input.val() == '' || input.val() == input.attr('placeholder')) {
            input.addClass('placeholder');
            input.val(input.attr('placeholder'));
        }
    }).blur();
};
})
function placeholderSupport() {
    return 'placeholder' in document.createElement('input');
}


String.prototype.replaceAll = function(s1,s2) { 
    return this.replace(new RegExp(s1,"gm"),s2); 
}

Date.prototype.pattern=function(fmt) {       
     var o = {        
     "M+" : this.getMonth()+1, //月份       
     "d+" : this.getDate(), //日      
     "h+" : this.getHours() == 0 ? 12 : this.getHours(), //小时       
     "H+" : this.getHours(), //小时       
     "m+" : this.getMinutes(), //分       
     "s+" : this.getSeconds(), //秒       
     "q+" : Math.floor((this.getMonth()+3)/3), //季度       
     "S" : this.getMilliseconds() //毫秒       
     };       
     var week = {       
     "0" : "\u65e5",       
     "1" : "\u4e00",       
     "2" : "\u4e8c",       
     "3" : "\u4e09",       
     "4" : "\u56db",       
     "5" : "\u4e94",       
     "6" : "\u516d"      
     };      
 
     if(/(y+)/.test(fmt)){       
         fmt=fmt.replace(RegExp.$1, (this.getFullYear()+"").substr(4 - RegExp.$1.length));       
     }      
   
     if(/(E+)/.test(fmt)){       
         fmt=fmt.replace(RegExp.$1, ((RegExp.$1.length>1) ? (RegExp.$1.length>2 ? "\u661f\u671f" : "\u5468") : "")+week[this.getDay()+""]);       
     }       

     for(var k in o){       
         if(new RegExp("("+ k +")").test(fmt)){       
             fmt = fmt.replace(RegExp.$1, (RegExp.$1.length==1) ? (o[k]) : (("00"+ o[k]).substr((""+ o[k]).length)));       
         }       
     }       
     return fmt;       
  }  

 function  timetodate(tim,dat){
     return  new Date(parseInt(tim)*1000).pattern(dat);   //"yyyy/MM/dd,hh,mm,ss"    
  }



/**输入字符提示**
	// 批量调用
	$('.autoTxtCount').each(function(){
	$(this).find('.text').artTxtCount($(this).find('.tips'), 140);
	});
	// 单个调用
	$('#test').artTxtCount($('#test_tips'), 10);
	})
**/
(function ($) {
	// tipWrap:  提示消息的容器
	// maxNumber:  最大输入字符
	$.fn.artTxtCount = function (tipWrap, maxNumber) {
		var countClass = 'js_txtCount',
				// 定义内部容器的CSS类名
			fullClass = 'js_txtFull',
				// 定义超出字符的CSS类名
			disabledClass = 'disabled'; // 定义不可用提交按钮CSS类名
		// 统计字数
		var count = function () {
			var btn = $(this).closest('form').find(':submit'),
				val = $(this).val().replace('/[\u4e00-\u9fa5]/g','**').length ,
				val = Math.ceil(val);
				// 是否禁用提交按钮
				disabled = {
					on: function () {
							btn.removeAttr('disabled').removeClass(disabledClass);
					},
					off: function () {
							btn.attr('disabled', 'disabled').addClass(disabledClass);
					}
				};
				if (val == 0) disabled.off();
				if (val <= maxNumber) {
					if (val > 0) disabled.on();
					tipWrap.html('<span class="' + countClass + '"><strong>' + (maxNumber - val) + '</strong></span>');
				} else {
					disabled.off();
					tipWrap.html('<span class="' + countClass + ' ' + fullClass + '"><strong>' + (maxNumber - val) + '</strong></span>');
				};
		};
		$(this).bind('keyup change', count);
		return this;
	};
})(jQuery);

 


/*
 * 相册左右滚动插件
 * 影片左右滚动效果
 * 默认用法 $('#id').movieScroll()
 */
 //修改人 magic.zhou
(function ($) {
	$.fn.movieScroll = function (config) {
		var next_len    = 2, 
			PAGE_SIZE   = 5,
		    isDone	    = false,
			scrollBox   = $(this),
			prevBtn     = scrollBox.find('.prev_btn'),
			nextBtn     = scrollBox.find('.next_btn'),
			imgBox      = scrollBox.find('.movie-wrap'),
			$ul         = imgBox.find("ul"),
			$page		= scrollBox.find('.album_scroll_msg'),
			slide_width = $(".slider-wrap").width();  
	
	var bg_pre_gray = $('#txt_public_home').val() + 'images/gray_trundle_left.png',
		bg_pre      = $('#txt_public_home').val() + 'images/trundle_left.png',
		bg_next_gray= $('#txt_public_home').val() + 'images/gray_trundle_right.png',
		bg_next     = $('#txt_public_home').val() + 'images/trundle_right.png';
	$("#album1").find(".prev_btn").css('background', 'url('+bg_pre_gray+') no-repeat');
	
		return this.each(function(){
			function setOpacity() {
				imgBox.animate({opacity: 1}, 500,function(){
					isDone = false;
				})
			}		
			function scrollNext() {  
				if (imgBox.is(':animated')) {
					return false;
				}
				if ($ul.width() * $ul.length + $ul.width() + imgBox.position().left > slide_width) {
					isDone = true;
					imgBox.animate({left: "+=" + "-" + slide_width}, 500, setOpacity);
					var _this = $(this);
                    var  max_page = _this.parent().find(".hidden_size_page").attr('value');
				    countInfo(1, _this);	
					
					//判断是否为 '大家正在看' 这个模块  并给按钮切换背景
					if (_this.parent().attr('id') === 'album1') {
					    _this.parent().find(".prev_btn").css('background', 'url('+bg_pre+') no-repeat');
					}
					if (_this.parent().attr('id') !== 'album1') {
					    _this.parent().find(".prev_btn").css('visibility', 'visible');
					}
					
					
				}   
			}
			function scrollPrev() {
	
				if (imgBox.is(':animated')){
					return false;
				}

				//加1是为了兼容IE
				if ( imgBox.position().left + slide_width  <= 1) {
					imgBox.animate({left: "+=" + slide_width }, 500, setOpacity);
					var _this = $(this);
					var hidden_curr = 1;
					countInfo(-1, _this);
					hidden_curr =  parseInt(_this.parent().find(".hidden_current_page").text());
					//判断是否为'大家正在看' 的模块  并给按钮切换背景
				    if (_this.parent().attr('id') === 'album1') {
					    _this.parent().find(".next_btn").css('background', 'url('+bg_next+') no-repeat');
						if(hidden_curr === 1){
						    _this.css('background', 'url('+bg_pre_gray+') no-repeat');
						}
					} 
					
					
					if (_this.parent().attr('id') !== 'album1') {
					    _this.next().css('visibility','visible');
						if(hidden_curr === 1){
						    _this.css('visibility','hidden');
						}
					} 
				}
			}
			
			function countInfo(add, _this){
				var len   =  _this.parent().find("ul").length ;
				var total = Math.ceil(len / PAGE_SIZE); //总页数	
				
				//初始化数据
				var  max_number = _this.find(".slider-wrap ul").length
				_this.find(".hidden_current_page").text(1);
				_this.find(".hidden_size_page").text(Math.ceil(max_number/PAGE_SIZE));
				_this.find('.hidden_max_page').text(max_number);	
				
						
				if ( $page.length >= 0){
					var curr  = parseInt( $page.find('.scroll_curr').text() );
					var page_len = $ul.length;				 
					var page_total = Math.ceil(page_len / PAGE_SIZE);
					$page.find('.scroll_curr').text(curr + add);
					$page.find('.scroll_pages').text(page_total);
					$page.find('.scroll_len').text(page_len);
				}
				
				if(_this.attr('node-type') !== 'album'){    //判断是进入页面加载还是按钮调用
					var hidden_curr  =  parseInt(_this.parent().find(".hidden_current_page").text()); 
					var current_page = 1;  // 当前页数
					_this.parent().find(".hidden_current_page").text( hidden_curr + add);
					_this.parent().find(".hidden_size_page").text( total);
					_this.parent().find('.hidden_max_page').text(len);	
					current_page = parseInt(_this.parent().find(".hidden_current_page").text());
					
					if(current_page  >=  total & _this.parent().attr('id') === 'album1'){
						_this.css('background', 'url('+bg_next_gray+') no-repeat');
					}
					 
					if(current_page  >=  total & _this.parent().attr('id') !== 'album1'){
						_this.css('visibility','hidden');
					}	 
				}	
				
			}
			

			countInfo(0, $(this));
			if ($(this).attr('id') !== 'album1') {
				$(this).find(".prev_btn").css('visibility','hidden');
				$(this).find(".next_btn").css('visibility','hidden');
				$(this).hover( function () {
				var  page_number_value = parseInt($(this).find(".hidden_current_page").text()); //当前页数
				var  max_page = parseInt($(this).find(".hidden_size_page").text()); //总页数
				var  number_val = parseInt($(this).find(".hidden_max_page").text()); //记录总条数
					if (page_number_value < max_page ) {
					   $(this).find(".next_btn").css('visibility','visible');
					}
					
					if (page_number_value < max_page && page_number_value > 1) {
					   $(this).find(".next_btn").css('visibility','visible');
					   $(this).find(".prev_btn").css('visibility','visible');
					}
					
					if (page_number_value === max_page && max_page > 1) {
					   $(this).find(".prev_btn").css('visibility','visible');
					}
					
					if (PAGE_SIZE >= number_val && max_page === 1) {
					  $(this).find(".next_btn").css('visibility','hidden');
					}
					
					if (number_val === 0){
					  $(this).find(".next_btn").css('visibility','hidden');
					  $(this).find(".prev_btn").css('visibility','hidden');
					}
			

				},
				function () {
				$(this).find(".prev_btn").css('visibility','hidden');
				$(this).find(".next_btn").css('visibility','hidden');
				});
			}
			prevBtn.bind('click', scrollPrev); 
			nextBtn.bind('click', scrollNext);  
		})
	}
})(jQuery);

/*
 *  超长字符，隐藏，显示点点点
 */
(function($){
    $.fn.maxLetter = function(options){
        var defaults = {
            maxLetter:400         
        }
        var options = $.extend(defaults, options);
        this.each(function(){  
			if($(this).text().length > maxLetter ){
				$(this).text($(this).text().substring(0, maxLetter));
				$(this).html($(this).html()+'...');
			}
        });
    };
})(jQuery);


/*
	图片懒加载
*/
(function($){
    $.fn.lazyload = function(options){
        var defaults = {
            max_width : 500,
			max_height :500
        }
        var options = $.extend(defaults, options);
        this.each(function(){  
			var src   = URL+$(this).attr('origin');
			var img   = new Image();
			var _this = this;
			img.src   = src;
			var resize = function(img){  
				var	src      = img.src,
					width    = img.width,
					height   = img.height;

				if(width < options.max_width){
					return {'width':width, 'height':height};
				}
			
				if(width >= height && width >= options.max_width){
					height = height * options.max_width / width;
					width  = options.max_width;
				}
				else{
					width  = width * options.max_height / height ;
					height = options.max_height; 
				}   

				return {'width':width, 'height':height};
			}// resize


			if (img.complete) { 
				var size = resize(img);//兼容IE
				$(_this).attr('src', src).attr('style', 'width:' + size.width + 'px; ' + 'height' + size.height + 'px;' );
			}
			else{
				img.onload = function(){ 
					var size = resize(img);
					$(_this).attr('src', src).attr('style', 'width:' + size.width + 'px; ' + 'height' + size.height + 'px;' );
				}; 
			}//else
			
        });
    };
})(jQuery); 

// 影集、影片、话题默认图片
(function($){
    $.fn.defaultImages = function(options){
        var defaults = { 
        }
        var options = $.extend(defaults, options);
        this.each(function(){  
			var src          = $(this).attr('origin');
			var default_src  = $(this).attr('src');
			if( src == ''){
				src = default_src;
			}
			var img   = new Image();
			var _this = this;
			img.src   = src;  
			if (img.complete) {  
				$(_this).attr('src', src);
			}
			else{
				img.onload = function(){  
					$(_this).attr('src', src);
				}; 
			}//else
			
        });
    };
})(jQuery); 

// 影集、影片、话题默认图片
(function($){
    $.fn.defaultImages = function(options){
        var defaults = { 
        }
        var options = $.extend(defaults, options);
        this.each(function(){  
			var src          = $(this).attr('origin');
			var default_src  = $(this).attr('src');
			if( src == ''){
				src = default_src;
			}
			var img   = new Image();
			var _this = this;
			img.src   = src;  
			if (img.complete) {  
				$(_this).attr('src', src);
			}
			else{
				img.onload = function(){  
					$(_this).attr('src', src);
				}; 
			}//else
			
        });
    };
})(jQuery); 


//星星评分
function rate(obj,oEvent){
	var imgSrc   = $('#txt_public_home').val() + 'images/star-1.gif';
	var imgSrc_2 = $('#txt_public_home').val() +'images/star-2.gif';
	if(obj.rateFlag) return;
	var e = oEvent || window.event;
	var target = e.target || e.srcElement;
	var imgArray = obj.getElementsByTagName("img");
	for(var i=0;i<imgArray.length;i++){
		 imgArray[i]._num = i;
		 imgArray[i].onclick=function(){
			if(obj.rateFlag) return;
			$("#countSpan").html(this._num+1 + '分');
			$("#countInput").val(this._num+1);
		 }
	}
	if(target.tagName=="IMG"){
		 for(var j=0;j<imgArray.length;j++){
			if(j<=target._num){
			 imgArray[j].src=imgSrc_2;
			} else {
			 imgArray[j].src=imgSrc;
			}
	 target.parentNode.onmouseout=function(){
	 var imgnum=parseInt(Number($("#countInput").val()));
		for(n=0;n<imgArray.length;n++){
		 imgArray[n].src=imgSrc;
		}
		for(n=0;n<imgnum;n++){
		 imgArray[n].src=imgSrc_2;
		}
	 }
		 }
	} else {
		return false;
	}
};

/*
	影片操作功能
*/
var Movie = {
	
	//初始化，绑定方法
	init : function(){
		var _this = this;
		$('.m-img, .movieImg, .img_movie_collect').live('mouseover', function() {
			$(this).find('.m-operate').show();
		}).live('mouseout', function() {
			$(this).find('.m-operate').hide();
		});
 

		$('.m-operate').find('a').live('click', function(e) { 
			if( $('#hide_user_info').attr('session_id') == '' ){
				alert('请先登录，再进行操作。');
				return false;
			}

			var $a = $(this);
			if($a.hasClass('m-add')) {
				$('body').data('movie_id', $(this).attr('movie_id') );
				$('body').data('movie_name', $(this).attr('movie_name') );
				_this.showDialog();
				return false;
			}
			if($a.hasClass('m-collect')) { 
				_this.addCollect($a);
			} 
			else if($a.hasClass('cancel_colloct_movie')){
				// 个人主页的取消收藏
				return false;	
			}
			else {
				_this.cancelCollect($a);
			}
		}); 
		
		$(".movie-wrap  .movie-item").hover(
			function () {
			$(this).css('background','#F5F5F5');
			},
			function () {
			$(this).css('background','#ffffff');
		});	
	},
	
	// 添加收藏影片
	addCollect : function($this){
		var movie_id = $this.attr('movie_id');
		var user_id  = 0;
		var url  = URL +'Movie/ajaxAddCollectMovie/';
		var json = {
			'movie_id': movie_id,
			'user_id':user_id
		};
		
		var successFunction = function (data, status) {
			//var ajaxData = $.parseJSON(data); 
			var ajaxData = data; 
			if (ajaxData.status == 1) {   
				$this.removeClass('m-collect').text('取消');
			}
			else if(ajaxData.status == 2){
				alert('你已经收藏了这部影片');
				$this.removeClass('m-collect').text('取消');
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
	
	// 取消收藏
	cancelCollect : function($this){
		var movie_id = $this.attr('movie_id');
		var user_id  = 1;
		var url  = URL +'Movie/ajaxCancelCollectMovie';
		var json = {
			'movie_id': movie_id,
			'user_id':user_id
		};
			
		var successFunction = function (data, status) {
			//var ajaxData = $.parseJSON(data); 
			var ajaxData = data; 
			if ( ajaxData.status == 1) {   
				$this.addClass('m-collect').text('收藏'); 
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
	
	ajaxGetCreateAblum : function() {   
		var	url  = URL + 'album/ajaxGetCreateAlbum' ;
		var json = {
			'PHPSESSID':$(".PHPSESSID").val(),
			'TOKEN':$('.TOKEN').val()
		};
		var successFunction = function (data, status) {
			//var ajaxData = $.parseJSON(data); 
			var ajaxData = data; 
			if (ajaxData.status == 1 ) {   
				var d  = ajaxData.data;
				if(d == null){ 
					$('#create_list .div_ul_list').html('暂无影集...');
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
				$('#create_list .div_ul_list').html(str);
			} 
		};
   
		$.ajax({
				url:        url,
				data:       json,                     
				success:    successFunction
		});
	},

	ajaxGetCollectAblum : function(){     
		var	url  = URL + 'album/ajaxGetCollectAlbum' ;
		var json = {'PHPSESSID':$(".PHPSESSID").val(),'TOKEN':$('.TOKEN').val()};
			
		var successFunction = function (data, status) {
			//var ajaxData = $.parseJSON(data); 
			var ajaxData = data; 
			if (ajaxData.status == 1 ) {   
				 var d  = ajaxData.data;
				 if(d == null){  
					$('#collect_list .div_ul_list').html('暂无影集...');
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
				 $('#collect_list .div_ul_list').html(str);
			} 
		}; 
		$.ajax({
				url:        url,
				data:       json,                     
				success:    successFunction
		});
	},

	// 显示对话框
	showDialog : function(){ 
				var movie_name = $('body').data('movie_name');
				movie_name = movie_name == null ? '' : movie_name;
				var title  = '添加 ' + movie_name + ' 到影集';
				
				var _this = this;
				var html = [
					'<div>',
					'<ul class="nav" style=" background:none; height:20px;">',
					'<li content="create_list" style=" float:left; cursor:pointer; margin-left:15px;color: #3366cc;padding: 3px 5px;">加入我创建的影集</li>',
					'<li content="collect_list" style=" float:left; margin:0 10px; cursor:pointer;color: #3366cc;padding: 3px 5px;">加入我收藏的影集</li>',
					'<li content="create_album" style=" float:left; cursor:pointer;color: #3366cc;padding: 3px 5px;">创建一个新影集</li>',
					'</ul>',
					'<div class="clear"></div>',
					'</div>',
					'<div class="tabContent">',
					'<div class="list activeContent" id="create_list">',
						'<div class="div_ul_list">',
							'loading...',
						'</div>',
						'<textarea id="movie_text_create" maxlength="240" class="txt_album" node-type="placeholder" placeholder="简单描述下该影片吧，240字内"/></textarea>',
						'<p class="btn"><span class="dialog_error_msg red"></span><button id="saveRadio" class="saveRadio">保存</button><button class="cancel">取消</button></p>',
					'</div>', 
					'<div class="list" id="collect_list">',
						'<div class="div_ul_list">',
							'loading...',
						'</div>',
						'<textarea id="movie_text_collect" maxlength="240" class="txt_album" node-type="placeholder" placeholder="简单描述下该影片吧，240字内"/></textarea>',
						'<p class="btn"><span class="dialog_error_msg red"></span><button id="saveRadio" class="saveRadio">保存</button><button class="cancel">取消</button></p>',
					'</div>',	
					'<div class="newAblum" id="create_album">',
						'<table id="tb_create_album">',
						'<tr><td class="first-td">影集名称:</td><td><input node-type="placeholder" maxlength="20"  type="text" id="albumName" value="" placeholder="好的名字更能吸引片友的关注哦！20字内"/></td>',
						'<tr><td  class="first-td"></td><td><input type="checkbox" id="isAllow" checked/>允许片友推荐影片至该影集:</td>',
						'<tr><td  class="first-td">影集介绍:</td><td><textarea id="albumText" maxlength="480"  node-type="placeholder" placeholder="请用一段文字，简单描述该影集吧, 480字内。"/></textarea></td>',
						'<tr><td colspan="2" class="btn"><span class="dialog_error_msg red"></span><button id="saveAlbum2">保存</button></td></tr>',
						'</table>', 
					'</div>',
					'</div>'
				].join('');
				var dialog = art.dialog({
					id:1,
					title: title,
					fixed: true,
					lock: true,
					content:html
				});
				_this.bindDialogEvent(dialog);
				
	},
	
	//绑定对话框事件
	bindDialogEvent : function( dialog ){
				var _this = this;

				$('.nav>li').click(function() {
					$('.dialog_error_msg').text('');
					var $this = $(this);
					var content = $this.attr('content');
					$this.siblings().removeClass('active');
					$this.addClass('active');
					var $content = $('#' + content );
					$content.siblings().removeClass('activeContent').hide();
					$content.addClass('activeContent').show();
					
					 //仅第一次去ajax取
					if( $content.find('ul').length > 0 ){
							return false;
					} 
					if( content == 'create_list'){  
						_this.ajaxGetCreateAblum();
					}

					if( content == 'collect_list'){  
						_this.ajaxGetCollectAblum();
					}
					 
					Common.placeHold();
				});

				$('.nav>li').first().trigger('click');

				$('.cancel').click(function() {
					dialog.close();
				});
				 
				$('.saveRadio').click(function() {
					var select_id = '';
					$(this).parents('.list').find('.ckb_album:checked').each(function(){
						select_id += $(this).val() +',';
					});
					select_id  += '0';

					var movie_id   = $('body').data('movie_id');//点击添加的时候存入body
					var $txt_album =  $(this).parents('.list').find('.txt_album');
					var movie_desc = $txt_album.val();

					if( movie_desc == $txt_album.attr('placeholder') ){
						movie_desc = '';
					}
					_this.saveMovieToAlbum(select_id, movie_id, movie_desc, dialog);
				});
				$('#saveAlbum2').click(function() {
					var album_name  = $('#albumName').val(),
						album_desc  = $('#albumText').val(),
						is_allow    = 0 ;
					is_allow = $('#isAllow').attr('checked') ? 1 : 0 ;

					
					if( album_name == '' || album_name == $('#albumName').attr('placeholder') ){
						$('.dialog_error_msg').text('请输入影集名称');
						$('#albumName').focus();
						return false;
					}
					if( album_desc == $('#albumText').attr('placeholder') ){
						album_desc = '';
					}
					if( Common.filtrateHtml(album_name) ){
						alert('请不要输入特殊字符');
						$('#albumName').focus();
						return false;
					}
					if( Common.filtrateHtml(album_desc) ){
						alert('请不要输入特殊字符');
						$('#albumText').focus();
						return false;
					}
					_this.ajaxSaveAlbum(album_name, is_allow, album_desc, dialog);
				}); 
	},
	 
	//创建影集
	ajaxSaveAlbum : function(album_name, is_allow, album_desc, dialog){ 
		var user_id  = 1; 
		var url      = URL + 'album/ajaxAlbumadd' ; 
		var json = { 
			'user_id':user_id, 
			'is_allow':is_allow,
			'album_name':album_name,
			'album_desc':album_desc,
			'PHPSESSID' :$(".PHPSESSID").val(),
			'TOKEN':$('.TOKEN').val()
		};
			
		var successFunction = function (d, status) {
			//var d = $.parseJSON(data); 
			//var ajaxData = data; 
			if ( d.status == 1) {   
				var album_id   = d.data.album_id,
					album_name = d.data.album_name;
				var str = '<li><input id="chk_'+album_id+'" type="checkbox" class="ckb_album" checked="checked" value="'+album_id+'"/>'
						+ '<label for="chk_'+album_id+'">'+album_name+'</label></li>';
				$('#create_list ul').prepend(str);
				$('.nav>li').first().trigger('click');
			}
			else{
				$('.dialog_error_msg').text(d.info);
			}
		};

		var errorFunction = function(){  
			$('.dialog_error_msg').text('error');
		};
			  
		$.ajax({
				url:        url,
				data:       json,              
				error:      errorFunction,           
				success:    successFunction
		}); 
	},

	//把影片保存到现有的影集中
	saveMovieToAlbum : function(select_id, movie_id, movie_desc, dialog){ 
		var user_id  = 1; 
		var url  = URL + 'album/ajaxMovieToAlbum' ; 
		var json = { 
			'user_id':user_id,
			'movie_id':movie_id,
			'movie_desc':movie_desc,
			'album_id':select_id,
			'PHPSESSID':$(".PHPSESSID").val(),
			'TOKEN':$('.TOKEN').val()
		};
			
		var successFunction = function (data, status) {
			//var d = $.parseJSON(data); 
			var d= data;
			if (d.status == 1 ) {    
				alert(d.info);
				dialog.close();
			}
			else{
				$('.dialog_error_msg').text(d.info);
			}
		};
			  
		$.ajax({
				url:        url,
				data:       json,                    
				success:    successFunction
		});
	}
};

/*模块化*/
var Common = {
	init : function(){         	
		var _this = this;
		//this.getModule(); 
		_this.autoLogin();
		//this.showLoginInfo();
		
		$('#btn_header_login').click(function(){
			_this.ajaxLogin();
		});

		$('#txt_header_pwd').keypress(function(e){
			if(e.which == 13){
				_this.ajaxLogin();
			}
		});

		$('#head_logout').live('click', function(){
			_this.ajaxLogout();
		});
		
	    $('#home_logout').click(function(){
			_this.ajaxHomeLogout();
		}); 
		if( $('.img_default').length > 0){
			$('.img_default').defaultImages();
		}
		$('.login-right-1 a, .login-account a').click(function(){
			$.cookie( 'session_out',  null, { path: '/', expires: -1,domain:Common.COOKIE_DOMAIN }); 
		});
	},
	
	//原本的单位是秒, 60* 60 即一个小时
	COOKIE_TIME			: 60 * 60 * 24,
	COOKIE_TIME_AUTO_LOGIN		: 60 * 60 * 24 , 
	COOKIE_TIME_LOGIN_SESSION	: 60 * 60 * 24 , 
	COOKIE_TIME_LOGOUT		: 60 * 5, 
	COOKIE_DOMAIN	    : '.51oscar.com',
	
	// JS判断是否登录
	isLogin : function(){ 
		var session_id = $.cookie('session_id'); 
		//var sessionid =$('#sessionid').val();
		if( session_id ){
			return true;
		}
		else{
			//获取登录cookie 
              if(!$.cookie('login_email')){
				var email=$.cookie('login_email'); 
                $('#txt_header_email').val(email); 
				$('#txt_third_reg_type').attr("checked",true);
				$('#txt_header_pwd').focus();
              }
			
			$('.Madfms,.mark_51').show();
			return false;
		}
	},
	
	//显示用户信息
	showLoginInfo : function(){
		var user_id   = $.cookie('user_id');
		var nick_name = $.cookie('nick_name');
		
		if( user_id && nick_name ){  
		
			$('#loginForm').hide();
			$('#user_login_info').show(); 
			var	user_url = $('#hide_user_info').attr('index'),
				msg_url  = $('#hide_user_info').attr('msg_url'),
				edit_url = $('#hide_user_info').attr('edit_url'); 
				
			/* var str = "欢迎您，<a href='"+ user_url +"'>"+ nick_name +"</a>！&nbsp; "
					+ "<a href='"+msg_url+"'>消息</a> &nbsp;  "
					+ "<a href='"+edit_url+"'>帐号设置</a> &nbsp;  "
					+ "<a href='javascript:;' id='head_logout'>退出</a>"; 
			$('#txt_user_id').val(user_id).before(str);	 */
			$('#hide_user_info').attr('session_id', user_id);
			$('.login-way .login-account').hide();
		
			
			if( $('#comment_user_status').length > 0 ){ 
		       
				var str = ' 你好，' +  nick_name ;
				$('#comment_user_status').html( str );	
			} 
			 
		}
		else{
			if( !$.cookie('session_out') ){
				$('.login-way .login-account').show();
				this.ajaxIsLogin();
			}
			else{ 
				$('.login-way .login-account').show();
				$('#loginForm').show();
				this.placeHold();
				$('#user_login_info').html("<input type='hidden' value='0' id='txt_user_id'/> ").hide(); 
			}
		}
	},
	/**
         * 判断(2014)
         */
	autoLogin : function() {
		var email = $.cookie('auto_login_email'); 
		var sessionid=$('#sessionid').val();
		if(email && $.cookie('password')) {
			if( sessionid == "" ){
				this.ajaxAutoLogin(email);
			}
		}
		else{
			return false;
		}
	},
	/**
         * ajax自动登陆，接受参数Email
         */
	ajaxAutoLogin: function(email) { 
	    var user_id = $.cookie('user_token'); 
		var pwtoken = $.cookie('password'); 
		var url  = URL + 'login/ajaxAutoLogin';
		
		var json = { 
		    'user_id': user_id,
			'pwtoken':pwtoken,
			'email': email
		};
		var successFunction = function (d) {
			//var d = $.parseJSON(data);
			if (d.status == 1) { 
				var url2 = location.href;
				if(url2.indexOf('login') > 0 ){
					location.href = URL ;
				}
				else{ 
				  if(d.data.msg_count==0){
				    var msg='';
				  }else{
					var msg='（<em class="c_f60">'+d.data.msg_count+'</em>）';  
				  }
			//		$('#loginForm').hide();
			//		$('#user_login_info').show();
			//		var user_id = d.data.user_id,
			//			nick_name = d.data.nick_name; 
				//	var user_url = $('#hide_user_info').attr('index'); 
				//	var msg_url  = $('#hide_user_info').attr('msg_url');
				//	var edit_url = $('#hide_user_info').attr('edit_url');
				//	var user_info = {'user_id':user_id, 'nick_name':nick_name};

					/* var str = "欢迎您，<a href='"+ user_url +"'>"+ nick_name +"</a>！&nbsp; "
						    + "<a href='"+msg_url+"'>消息</a> &nbsp;  "
							+ "<a href='"+edit_url+"'>账号设置</a> &nbsp;  "
							+ "<a href='javascript:;' id='head_logout'>退出</a>"; 
					$('#txt_user_id').val(user_id).before(str);	 */

			var str='<li>欢迎您，'+
                    ' <span class="user" onmouseover="dropMenu2($(this));">'+
              ' <a class="n" href="javascript:void(0);" title="'+d.data.nick_name+'">'+d.data.nick_name+'<i class="trailer"></i></a>'+
              ' <ul class="user_more">'+
              '     <li><a href="'+URL+'personal/index">我的空间</a></li>'+
              '    <li><a href="'+URL+'personal/msgList">站内消息</a></li>'+
              '     <li><a href="'+URL+'personal/toUserEditShare">账号设置</a></li>'+
              '     <li><a href="'+URL+'personal/myFinance">项目管理</a></li>'+
              '     <li><a href="javascript:;" onclick="Common_new.ajaxHomeLogout1();">退出登录</a></li>'+
              ' </ul>'+
            '</span>'+
       ' </li>'+
       ' <li>'+
           ' <span class="quick_news">'+
                '<a href="/personal/msgList"><i class="icon_letter icon"></i>消息'+msg+
           ' </span>'+
      '  </li>';
	     $('#welcome').html(str);
				
			
				
					//$('#hide_user_info').attr('session_id', user_id);

				//	$.cookie( 'session_id',  'yes', { path: '/', expires: Common.COOKIE_TIME_LOGIN_SESSION,domain:Common.COOKIE_DOMAIN});  
				//	$.cookie( 'user_id',    user_id, { path: '/', expires: Common.COOKIE_TIME_LOGIN_SESSION,domain:Common.COOKIE_DOMAIN});
				//	$.cookie( 'nick_name',  nick_name, { path: '/', expires: Common.COOKIE_TIME_LOGIN_SESSION,domain:Common.COOKIE_DOMAIN});
				}
			} 
		}; 
		$.ajax({
				url:        url,
				data:       json,  
				type:		'POST',           
				success:    successFunction
		});
		
	 },
	 
	
	
	// 页面静态化后，去后台判断是否登录
	ajaxIsLogin : function(){ 
		var _this = this;
		var url  = URL + 'login/ajaxIsLogin';
		var json = { };
		var errorFunction = function(){
			$('#loginForm').show();
			_this.placeHold();
			$('#user_login_info').html("<input type='hidden' value='0' id='txt_user_id'/> ").hide(); 
		};
		var successFunction = function (data) {
			//var d = $.parseJSON(data); 
			var d = data;
			if (d.status == '1') { 
					$('#loginForm').hide();
					$('#user_login_info').show();
					var user_id = d.data.user_id,
						nick_name = d.data.nick_name; 
					var user_url = $('#hide_user_info').attr('index'); 
					var msg_url  = $('#hide_user_info').attr('msg_url');
					var edit_url = $('#hide_user_info').attr('edit_url');  
				 
					/* var str = "欢迎您，<a href='"+ user_url +"'>"+ nick_name +"</a>！&nbsp; "
						    + "<a href='"+msg_url+"'>消息</a> &nbsp;  "
							+ "<a href='"+edit_url+"'>账号设置</a> &nbsp;  "
							+ "<a href='javascript:;' id='head_logout'>退出</a>"; 
					$('#txt_user_id').val(user_id).before(str);	 */
					$('#hide_user_info').attr('session_id', user_id);
					
					if( $('#comment_user_status').length > 0 ){ 
						var str = ' 你好，' +  nick_name ;
						$('#comment_user_status').html( str );
					} 

					$.cookie( 'session_id',  'yes', { path: '/', expires: Common.COOKIE_TIME_LOGIN_SESSION,domain:Common.COOKIE_DOMAIN});  
					$.cookie( 'user_id',    user_id, { path: '/', expires: Common.COOKIE_TIME_LOGIN_SESSION,domain:Common.COOKIE_DOMAIN});
					$.cookie( 'nick_name',  nick_name, { path: '/', expires: Common.COOKIE_TIME_LOGIN_SESSION,domain:Common.COOKIE_DOMAIN});
			}
			else{
				$('#loginForm').show();
				_this.placeHold();
				$('#user_login_info').html("<input type='hidden' value='0' id='txt_user_id'/> ").hide(); 
				//var setSessionOut = function(){
					$.cookie( 'session_out',  'yes', { path: '/', expires: Common.COOKIE_TIME_LOGIN_SESSION,domain:Common.COOKIE_DOMAIN});  
				//};
				// 120秒后，还没登陆自动生效
				//setTimeout( setSessionOut, 120000);
			}
		}; 
				  
		$.ajax({
				url:        url,
				data:       json,  
				error:		errorFunction,
				success:    successFunction
		});
	},

	ajaxLogin : function(){
		var _this  = this;
		var $pwd   = $('#txt_header_pwd'),
			$email = $('#txt_header_email'),
			pwd    = $pwd.val(),
			email  = $email.val();
		if (email === "") {
		   // alert('请输入用户名');
			
			$('#email-error').text('请输入邮箱').addClass('red-error');
			$email.focus();
		    return false;
		}
	
		var myReg  = /^[.-_A-Za-z0-9]+@([_A-Za-z0-9]+\.)+[A-Za-z0-9]{2,3}$/; 
		if(!myReg.test(email) ){  
			$('#email-error').text('请输入正确的邮箱地址').addClass('red-error');
			$email.focus();
			return false;
		} 
		if(pwd.length==0){
			$('#pwd-error').text('请输入密码').addClass('red-error');
			$pwd.focus();
			return false;
		}
		if(pwd.length < 6 ||  pwd.length > 16){  
			//alert('密码位数不对');
			$('#pwd-error').text('密码位数不对').addClass('red-error');
			$pwd.focus();
			return false;
		}
			//自动登录 
			if ( $('#txt_third_reg_type').attr('checked') ) {
				var is_auto_status = 1;
			}else{
				var is_auto_status = 0;
			}

			var url  = URL + 'login/ajaxLogin';
			var json = {
				'email':email,
				'password':pwd,
				'status':	is_auto_status
			};
				
			var successFunction = function (d) {
				//var d = $.parseJSON(data); 
				if (d.status == 1) {  
				  //alert(11);
					var url2 = location.href;
					
					/*	$('#loginForm').hide();
						$('#user_login_info').show();
						var user_id = d.data.user_id,
							nick_name = d.data.nick_name; 
						var user_url = $('#hide_user_info').attr('index'); 
						var msg_url  = $('#hide_user_info').attr('msg_url');
						var edit_url = $('#hide_user_info').attr('edit_url'); */

						/* var str = "欢迎您，<a href='"+ user_url +"'>"+ nick_name +"</a>！&nbsp; "
								+ "<a href='"+msg_url+"'>消息</a> &nbsp;  "
								+ "<a href='"+edit_url+"'>账号设置</a> &nbsp;  "
								+ "<a href='javascript:;' id='head_logout'>退出</a>"; 
						$('#txt_user_id').val(user_id).before(str);	 */
						//$('#hide_user_info').attr('session_id', user_id);
						//$('.login-way .login-account').hide();

						// 评论那里的登陆信息
					//	if( $('#comment_user_status').length > 0 ){ 
					//		var str = ' 你好，' +  nick_name ;
					//		$('#comment_user_status').html( str );
					//	} 
						//$.cookie( 'session_id',  'yes', { path: '/', expires: Common.COOKIE_TIME_LOGIN_SESSION,domain:Common.COOKIE_DOMAIN});  
						//$.cookie( 'user_id',    user_id, { path: '/', expires: Common.COOKIE_TIME_LOGIN_SESSION,domain:Common.COOKIE_DOMAIN});
						//$.cookie( 'nick_name',  nick_name, { path: '/', expires: Common.COOKIE_TIME_LOGIN_SESSION,domain:Common.COOKIE_DOMAIN}); 
						//$.cookie( 'session_out',  null, { path: '/', expires: -1 ,domain:Common.COOKIE_DOMAIN}); 

					if(url2.indexOf('login') > 0 ){
						location.href = URL;
					}
                     window.location.reload();

					//if( $('#comment_user_status').length > 0 ){   //判断是否有评论列表				
					//	var url = URL + 'comment/ajaxOauth';  					
					//	Common._ajaxGetPageSynchronization(url);  //显示同步
			       // }				
				}
				else{
					$('#pwd-error').text(d.info).addClass('red-error');
					$pwd.focus();
				} 
			};

			var errorFunction = function(){  
			};
				  
			$.ajax({
					url:        url,
					data:       json,  
					type:		'POST',
					error:      errorFunction,           
					success:    successFunction
			});

	},
	
	// 首页头部点击退出
	ajaxLogout : function(){
		var _this= this;
		var url  = URL + 'login/ajaxLogout';
		var json = { };
				
		var successFunction = function (data) {
		            var login_status = Common.isLogin();  //(调用公共Common.js 的isLogin()方法判断是否登录)
					//var d = $.parseJSON(data);  					
					var d = data;
					$.cookie( 'auto_login_email',  null, { path: '/', expires: -1,domain:Common.COOKIE_DOMAIN });  
					$.cookie( 'session_id',  null, { path: '/', expires: -1,domain:Common.COOKIE_DOMAIN });  
					$.cookie( 'user_id',  null, { path: '/', expires: -1 ,domain:Common.COOKIE_DOMAIN});  
					$.cookie( 'nick_name',  null, { path: '/', expires: -1 ,domain:Common.COOKIE_DOMAIN}); 
				
					$('#loginForm').show();
					$('#user_login_info').html("<input type='hidden' value='0' id='txt_user_id'/> ").hide();  
					$('.login-way .login-account').show();
				
					//清空页面保存的登陆信息
					$('#hide_user_info').attr('session_id','');
					$('.place_pwd').remove();
					_this.placeHold();
					// 评论那里的登陆信息
					if( $('#comment_user_status').length > 0 ){ 
						var login_url  = URL + 'login/index';
						var regist_url = URL + 'login/toRegist';
						var str = ' 你好，游客。<a href="'+ login_url +'" >登陆</a> | <a href="'+ regist_url +'">注册</a>';
						$('#comment_user_status').html( str );
	                    //清除同步信息
						$(".post-way").css('display','none');
						$(".post-way").find('input').css('display','none');
						$(".post-way").find('label').css('display','none');
						$(".post-way").find('a').css('display','none');	
					}
                    					
		}; 
				  
		$.ajax({
				url:        url,
				data:       json,         
				success:    successFunction
		});
	},

	// 个人主页、TA的主页
	ajaxHomeLogout : function(){
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
						
						var login_url  = URL + 'login.html';
						var regist_url = URL + 'login/regist.html';
				
				        var str= '<li><a href="javascript:void(0);" onclick="" title="微博登录"><i class="icon_weibo icon"></i>微博登录</a></li>'
						        +'<li>|</li>'
						        +'<li><a href="javascript:void(0);" onclick="" title="QQ登录"><i class="icon_qq icon"></i>QQ登录</a></li>'
					         	+'<li>|</li>'
						        +'<li><a href="'+login_url+'"  title="登录"><i class="icon_man icon"></i>登录</a></li>'
						        +'<li>|</li>'
						        +'<li><a href="'+regist_url+'" title="免费注册">免费注册 </a></li>';
				
						$(".after_landing").remove();
						$(".after_landing2").remove();
						$('.out').html(str);
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


	// 占位符, 支持HTML5的浏览器，用浏览器属性
	placeHold : function(){
		var html5support = "placeholder" in document.createElement("input");
		if ( !html5support ) {
				$('[node-type="placeholder"]').each(function(){ 
					if( $(this).attr('type') == 'password' ){
						//类型为password
						var place_pwd = '<div class="place_pwd">'+ $(this).attr('placeholder') +'</div>';
						$(this).before(place_pwd);
						var pwd_top = $(this).offset().top  + 3;
						var pwd_left = $(this).offset().left + 3;
						
						if( $(this).height() == 30 ){
							pwd_top = pwd_top - 3;
						}
						$(this).prev().css({ 'top':pwd_top, 'left':pwd_left });

						$(this).focus(function(){ 
							if( $(this).val() != $(this).attr('placeholder') ){
								$(this).prev().hide();
							}
						}).blur(function(){
							if( $(this).val() == '' ){
								$(this).prev().show();
							}
						});
						
						$('.place_pwd').click(function(){
							$(this).next().focus();
						});

					}
					else{
						//文本、文本区域
						if( $(this).val() == ''){
							$(this).val( $(this).attr('placeholder') ).attr('style', 'color:#A9A9A9');
						}

						$(this).focus(function(){ 
							if( $(this).val() == $(this).attr('placeholder') ){
								$(this).val('').attr('style', 'color:#000');;
							}
						}).blur(function(){
							if( $(this).val() == '' ){
								$(this).val( $(this).attr('placeholder') ).attr('style', 'color:#A9A9A9');
							}
						})
					}
				}); //each
		}//if
	},
	
	//影集的滚动 
	bindAlbumScroll : function(){
		$('div[node-type="album"]').each(function(){
			if( $(this).find('.movie-wrap').find('li').length <= 0 ){
				$(this).find('.movie-wrap').html('当前影集暂无影片...').css('color', '#8A8A8A'); 
			}
			else{
				$(this).movieScroll();
			}
		});
	}, 
	
	//获取地址栏问号后的参数
	getRequest : function () {
			var url = location.search;
			var theRequest = new Object();
			if (url.indexOf("?") != -1) {
				var str = url.substr(1);
				strs = str.split("&");
				for (var i = 0; i < strs.length; i++) {
					theRequest[strs[i].split("=")[0]] = unescape(strs[i].split("=")[1]);
				}
			}
			return theRequest;
	},

	// 显示星星
	showStarLength : function(){
		var ONE_START_LENGTH = 16.8;
		$('.grade_value').each(function(){
			var grade =  parseFloat( $(this).text() );
			var width = ONE_START_LENGTH * grade;
			$(this).parent().find('.star_length').attr('style', 'width:' + width + 'px');
		});
	},

	
	
	// 刷新验证码
	resetVerifyCode : function(){	 
         $('#verifyImage').attr("src", $('#txt_hidden_code_url').val()+'#'+Math.random() );
		 $('#verify').val('');
    },
	
	//返回URL数组.
	parse_url : function(url){  
		 var pattern = /(\w+)\/(\w+)/ig;
		 var parames = {}; 
		 url.replace(pattern, function(a, b, c){
		  parames[b] = c;
		 });
		 return parames;
	},
 

	//收藏话题
	ajaxCollectTopic : function( $this ){ 
			var url  = URL  + 'topic/ajaxCollectTopic';
			var json = {
				'topic_id' : $this.attr('topic_id') 
			};
				
			var successFunction = function (data, status) {
				//var ajaxData = $.parseJSON(data); 
				var ajaxData = data; 
				if (ajaxData.status == 1) {  
					var $num = $this.find('.collect_num');
					var num  = parseInt( $num.text() )  + 1 ;
					alert('收藏话题成功');
					$num.text( num );
				}
				else{
					alert(ajaxData.info);
				}
			};
				  
			$.ajax({
					url:        url,
					data:       json,                     
					success:    successFunction
			});
	},

	//收藏影集
	ajaxAddCollectAlbum : function($this) {
		if( !Common.isLogin() ){
			return false;
		} 
		var album_id = $this.attr('album_id');
		var url  = URL + 'album/ajaxAddCollectAlbum' ;
		var json = {
			'album_id': album_id,
			'PHPSESSID':$(".PHPSESSID").val(),
			'TOKEN':$('.TOKEN').val()
		};			
		var successFunction = function (data, status) {
			//var ajaxData = $.parseJSON(data); 
			var ajaxData = data; 
			if (ajaxData.status == '1') {
          		alert("该影集收藏成功");
				var $collectM = $this.find('.collect_num');
				var albumcollect = parseInt( $collectM.text() );
				$collectM.text(albumcollect + 1); 
			}
			else if (ajaxData.status == '3') {
				alert("该影集已经被您收藏");
			} else {
				alert(ajaxData.info);
			}
		}; 	  
		
		//alert(url);
		/*$.getJSON(url,json,successFunction);
		*/
		$.ajax({
				url:        url,//'http://domain1.52oscar.com/index.php',
				data:       json,      
							
				success:    successFunction
		});
	},
	//喜欢影集
	ajaxLoveCollectAlbum : function($this) {
		var album_id = $this.attr('album_id');
		var url  = URL + 'album/ajaxAlbumUpCountAdd' ;
		var json = {
			'album_id': album_id,
			'PHPSESSID':$(".PHPSESSID").val(),
			'TOKEN':$('.TOKEN').val()
		};			
		/* var successFunction = function (data, status) {
			var ajaxData = $.parseJSON(data); 
			if (ajaxData.status == '1') {
          		alert("该影集支持成功");
				var $collectM = $this.find('.collect_num');
				var albumcollect = parseInt( $collectM.text() );
				$collectM.text(albumcollect + 1); 
			}
			else if (ajaxData.status == '3') {
				alert("该影集已经被您支持");
			} else {
				alert(ajaxData.info);
			}
		}; 	  */ 
		var successFunction = function (data, status) {
			//var ajaxData = $.parseJSON(data); 
			var ajaxData = data; 
			if (ajaxData.status == '1') {
          		//alert("该影集支持成功");
				var $collectM = $('.love_count');
				var supportNum   = $('#support_num');
				var albumcollect = parseInt( $collectM.text() );
				var currentSupport = parseInt( supportNum.text() );
				$collectM.text(albumcollect + 1); 
				supportNum.text(currentSupport + 1);
			}else {
				alert(ajaxData.info);
			}
		};
		//alert(url);
		/*$.getJSON(url,json,successFunction);
		*/
		$.ajax({
				url:        url,//'http://domain1.52oscar.com/index.php',
				data:       json,      
							
				success:    successFunction
		});
	},
	//收藏影片
	ajaxAddCollectMovie : function($this){
		var url =  URL + 'movie/ajaxAddCollectMovie';
		var json = {
			'movie_id': $this.attr('movie_id'),
			'PHPSESSID':$(".PHPSESSID").val(),
			'TOKEN':$('.TOKEN').val()
		};
		
		var successFunction = function(d) {
			
			//var d = $.parseJSON(data);

			if (d.status == '1') {
				var $collectM = $this.find('.collect_num');
				var want_collect = parseInt($collectM.text() );
				$collectM.text( want_collect + 1);
				alert("收藏成功!");
			}
			else if (d.status == '2') {
				alert("该影片已经被您收藏");
			} 
			else if (d.status == '4') {
				alert("请登录");
			} 
			else {
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
		var successFunction = function (data) {
			//var d = $.parseJSON(data);
			var d = data; 
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
	
	// 添加影集、影片、话题，主要是在个人主页、TA的主页调用。
	addCollect : function($this){
		var type = $this.attr('type');
		if(type == 'movie'){
			this.ajaxAddCollectMovie( $this);
		}
		else if(type == 'album'){
			
			this.ajaxAddCollectAlbum( $this);
		}
		else if(type == 'topic'){
			this.ajaxCollectTopic( $this);
		} 
	},

	/*
	number_change : function () {
		var text_value = $("#Pagination .prev").next().text() - 0;
	    if (text_value > 0) {
			$("#page_nav_commnet").removeClass("hide");
            $(".current").show();
			$(".next").show();
		} else { 
		    $("#page_nav_commnet").addClass("hide");
            $(".current").hide();
			$(".next").hide();
		}  
	},
	*/
	
	// 是否显示分页导航
	showPageNumber : function(){ 
		
		if( $('.page-nav').length <= 0 && $('.page-nav2').length <= 0 ){
			return false;
		} 
		$('.pagination').each(function(){
			var $link = $(this).find('a');
			if( $link.length <= 1 ){
				$(this).next().andSelf().hide();
			}
			else{
				
				$(this).next().andSelf().show();
			}
		});
	},
	
	//翻页
	Changepage : function() {
		//分页 点击确定
		$("#btn_page_submit").click(function () {
			var p = document.getElementById('txt_page').value,
				url = window.location.href,
				atturl = url.split("?")[0];
				location.href = atturl + '?&p=' + p;
		});


		//分页 Enter键	
		$('#txt_page').keypress(function(e) {
			var p = document.getElementById('txt_page').value,
				url = window.location.href,
				atturl = url.split("?")[0];
				if(e.which == 13){
					location.href = atturl + '?&p=' + p;
				}
		});
	},


	
	//ajax一个翻页
	TopChangepage : function() {
		//分页 点击确定
		$("#btn_page_submit2").click(function () {
			var p = document.getElementById('txt_page2').value;
			var	url = window.location.href;
			var	atturl = url.split("?")[0];
			location.href = atturl + '?&p=' + p;
		});
		//分页 Enter键	
		$('.txt_page2').keypress(function(e) {
			var p = document.getElementById('txt_page2').value,
				url = window.location.href,
				atturl = url.split("?")[0];
				if(e.which == 13){alert("22");
					location.href = atturl + '?&p=' + p;
				}
		});
	},
	
	//是否含有HTML标签
	filtrateHtml : function (nodeText) {
	    var regu=/^<(.*).*|<(.*)$/;
	     if (regu.exec(nodeText))
             return true;
		 else
             return false;		 
	},
	
	show_synchronization : function () {
	    var login_status = Common.isLogin();  //(调用公共Common.js 的isLogin()方法判断是否登录)
        var url = URL + 'comment/ajaxOauth';  		
		if (login_status) {  	      
			Common._ajaxGetPageSynchronization (url);
		}
	},
	
	_ajaxGetPageSynchronization : function (url){
	    var _this = this;
		var json = {

			};
				
			var successFunction = function (data, status) {
				//var ajaxData = $.parseJSON(data);
				var ajaxData = data; 
				var list = ajaxData.data;
                                
				var status_list = list.split(","); 
                                   
				if (ajaxData.status == 1) {
				    for (var i=0; i < status_list.length; i++){			
                                             if (status_list[i] === '5'){
                                                        $("#doubanwang").attr("checked",'true');
                                                        $(".post-way").css('display','inline-block');
                                                        $("#doubanwang").css('display','inline-block');
							$(".a-doubanwang").css('display','inline-block');
							$(".post-way  a").css('display','inline-block');	
                                              }
                                        
					    if (status_list[i] === '1'){
						    $("#tqq").attr("checked",'true');
						    $(".post-way").css('display','inline-block');
						    $("#tqq").css('display','inline-block');
							$(".t-qq").css('display','inline-block');
							$(".post-way  a").css('display','inline-block');						
						}
						if (status_list[i] === '2'){
                                                        $("#tqzone").attr("checked",'true');
						    $(".post-way").css('display','inline-block');
                                                        $("#tqzone").css('display','inline-block');
							$(".t-qzone").css('display','inline-block');
							$(".post-way  a").css('display','inline-block');							 
						}
						if (status_list[i] === '3'){
						    $("#tsina").attr("checked",'true'); 
						    $(".post-way").css('display','inline-block');
						    $("#tsina").css('display','inline-block');
							$(".t-sina").css('display','inline-block');
							$(".post-way  a").css('display','inline-block');						
						}
						if (status_list[i] === '4'){
						    $("#renren2").attr("checked",'true'); 
						    $(".post-way").css('display','inline-block');
						    $("#renren2").css('display','inline-block');
							$(".a-ren").css('display','inline-block');
							$(".post-way  a").css('display','inline-block');				
						}
						if (status_list[i] === '5'){
						    $("#douban2").attr("checked",'true'); 
						    $(".post-way2").css('display','inline-block');
						    $("#douban2").css('display','inline-block');
							$(".a-douban").css('display','inline-block');
							$(".post-way  a").css('display','inline-block');			
						}
					}
	
				}		
			};
				  
			$.ajax({
					url:        url,
					data:       json,                     
					success:    successFunction
			});
	},


	getFooterColumn : function(){
		//查询显示页脚一些相关栏目的链接
		var footerUrl = $('#footer_info').attr('footerUrl');	
		var columnUrl = $('#footer_info').attr('columnUrl');
		if ($.cookie('columnid_list')){
		  	var id_list = $.cookie('columnid_list');    //设置参数（放置入cookie）
			var name_list = $.cookie('columnname_list');  //设置参数（放置入cookie）
	        id_list =  id_list.split(",");
			name_list = name_list.split(",");
	   
	        for(i=0; i<id_list.length; i++){
				var columnid = id_list[i];
				var columnname = name_list[i];
				
				var linkStr="<a href='" + columnUrl +"/id/"+columnid+"'>"+columnname+"</a>";
				$('#link_column').append(linkStr);
			}
		} else {
			$.ajax({
				type: "GET",
				url: footerUrl,	
				dataType:"json",		
				success: function(data){	
					
					
					if(data.status== 1) {
						var columnList      = data.data;
						var columnid_list   = [];    //设置参数（放置入cookie）
						var columnname_list = [];  //设置参数（放置入cookie） 
						for(i=0;i<columnList.length;i++){
							var columnid = columnList[i]['column_id'];
							var columnname = columnList[i]['name'];
							var linkStr="<a href='"+  columnUrl +"/id/"+columnid+"'>"+columnname+"</a>";
							$('#link_column').append(linkStr);
							 columnid_list.push(columnid);      //存放值
							 columnname_list.push(columnname);  //存放值
						}	
						$.cookie('columnid_list', columnid_list, { path: '/', expires: Common.COOKIE_TIME_AUTO_LOGIN,domain:Common.COOKIE_DOMAIN });
						$.cookie('columnname_list', columnname_list, { path: '/', expires: Common.COOKIE_TIME_AUTO_LOGIN,domain:Common.COOKIE_DOMAIN });
					}
				}	
			});
		}//else
	}//getfooter
	
};

 
  