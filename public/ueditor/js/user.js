$(function(){
    accordion_new.accordion_move_info ("#hot-list");
    accordion_new.accordion_move_info ("#hot-list2");
    accordion_new.accordion_move_info ("#hot-list3");
});


var accordion_new = {
    accordion_move_info : function (class_name) {
		var timer = null,
		accordion_this = null,
		event_info = null,
		accordion_head = $(class_name + ' > li > div'),
		accordion_body = $(class_name + ' li > .moves_b');	
		var accordion = {
			callback : function () {
				event_info.preventDefault();
				if (accordion_this.attr('class') != 'active'){
					accordion_head.first().show();
					accordion_body.hide();
					accordion_this.next().show();		
					accordion_head.removeClass('active');
					accordion_this.addClass('active');
					accordion_head.show();
					accordion_this.hide();		
				}
			},	
			
			show_head_first : function () {
				//accordion_body.hide();   //用css控制
				accordion_body.hide();
				accordion_head.first().addClass('active').next().show();
				accordion_head.first().hide();
			}

		};     
		accordion.show_head_first();
		accordion_head.bind('mouseover', function (event) {
			accordion_this = $(this);
			event_info = event;
			accordion.callback();
			//防止误操作
			/*clearTimeout(timer);        
			timer = setTimeout(accordion.callback, 0);*/
		});
		
		//定义鼠标失去焦点事件防止误操作
		/*accordion_head.on('mouseout', function () {
			clearTimeout(timer);
		});*/
    }
	
};

$(function(){
	var btn = $('.medal_more span'),
		box = $('.medal_more'),
		wrap = $(".med_ul"),
		wrap_li = wrap.find('li'),
		liHeight = wrap_li.height(), 
		fullHeight = liHeight*wrap_li.length/2; //总高度

	if(wrap_li.length>4){
		//初始化高度
		wrap.css({
			height: (liHeight)*1,
			overflow: 'hidden'
		});
		//切换操作
		btn.show()
			.toggle(function(){
			wrap.animate({
				height: fullHeight,
				overflow: 'auto'
			},300)
			$(this).text('收起').addClass('hide2');
		},function(){
			wrap.animate({
				height: (liHeight)*1,
				overflow: 'hidden'
			},300)
			$(this).text('更多').removeClass('hide2');
		})
	}else{
		box.hide()
	}
})



function getAttributeValue(o, key) {
if (!o.attributes) return null;
var attr = o.attributes;
for (var i = 0; i < attr.length; i++){
if (key.toLowerCase() == attr[i].name.toLowerCase())
return attr[i].value;
}
return null;
}
function focusInputEle(o) {
if (o.value == getAttributeValue(o, 'defaultVal')){
o.value = '';
o.style.color = "#B5B5B5";
}
}
function blurInputEle(o) {
if (o.value == '') {
o.value = getAttributeValue(o, 'defaultVal');
o.style.color = "#B5B5B5";
}
}

$(document).ready(function(){
    $('#reply').toggle(function(){
        $('.replay_c').show();
        $(this).text('收起').addClass('re_cur');
    },function(){
        $('.replay_c').hide();
        $(this).text('回复').removeClass('re_cur');
        })
})
