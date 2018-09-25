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