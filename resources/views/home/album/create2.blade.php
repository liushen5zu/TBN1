@extends('home.album.create')

@section('content')
<div class="tab-div_two">
        <ul class="tab-div-ul_two">
            <li><a href="javascript:;" class="one_step">第一步:填写基本信息</a></li>
			<li><a href="javascript:;" class="active">第二步:添加封面</a></li>
			<li><a href="javascript:;" class="three_step">第三步:添加影片</a></li>
        </ul>  
    </div>
	<script type="text/javascript" src="/plupload/plupload.full.min.js"></script>

    <form action='/home/albumAdd2' method="post" enctype="multipart/form-data">
	<div class="add_cover">
	    
		<div id="up">
	        <a id="uploadfiles" href="javascript:;">点击上传</a>
	        <button id="pickfiles">浏览图片</button>
	        <div id="imgs"></div>
	    </div>	

	    <input type="hidden" name="title" value="{{$add1['title']}}">
		<input type="hidden" name="introduce" value="{{$add1['introduce']}}">
		<input type="hidden" name="image">
	    	<!-- <img src="/ueditor/picture/btn_upload_3.jpg"/> -->
	    
		<p class="img_explain">仅支持JPG、GIF、PNG图片文件，且文件小于5M</p>
		<div class="con_left">
			<img width="300px" src="/ueditor/picture/bd-s_1.jpg" class="img_big"  id='img_big'/>
		</div>
		
		<div class="con_right">
		    <p>封面图片预览</p>
			<p>请注意图片是否清晰</p> 
			<span id="preview_box" class="album_crop_preview"><img id='crop_preview' class="img_cover" src="/ueditor/picture/default_album_logo_3.jpg"/></span>
			<p class="img_info">大尺寸头像，176*235像素</p>
		</div>
    </div>
	<div class="save_div">
	{{csrf_field()}} 
       <button   class="finish-btn" style="background:blue"/>保存并提交</button>
	  <a href="/album/toalbumAdd/album_id/1995" class="save_black">返回上一步</a>
    </div>
</div>

</form>
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
<script type="text/javascript">
    //创建上传对象
    var uploader = new plupload.Uploader({
    	headers: {'X-CSRF-TOKEN': '{{csrf_token()}}'},
        runtimes: 'html5,flash,silverlight,html4', //默认
        browse_button: 'pickfiles', // 设置浏览文件的框体
        url: '/upload', //设置上传的脚本路径
        //初始化
        init: {
            PostInit: function() {
                //清空列表
                // document.getElementById('filelist').innerHTML = '';
                //绑定单击事件开始上传
                document.getElementById('uploadfiles').onclick = function() {
                    uploader.start();
                    return false;
                };
            },
            //添加元素之后的代码执行   创建显示的文件列表
            FilesAdded: function(up, files) {

                // plupload.each(files, function(file) {
                //     document.getElementById('filelist').innerHTML += '<div id="' + file.id + '">' + file.name + ' (' + plupload.formatSize(file.size) + ') <b></b></div>';
                // });
                //自动上传
                uploader.start();
            },
            //添加上传过程中的代码执行  显示文件上传的百分比
            UploadProgress: function(up, file) {
                // document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = '<span>' + file.percent + "%</span>";
            },
            //错误执行程序  在console.log位置显示错误信息和代号
            Error: function(up, err) {
                document.getElementById('console').innerHTML += "\nError #" + err.code + ": " + err.message;
            },
            //文件上传成功之后的代码执行
            FileUploaded: function(up, file, res) {
                //获取服务器返回的数据
                var result = res.response;
                //console.log(result);
                //创建数据
                eval("var res = " + res.response);
              // console.log(res.path);
                $('#img_big').attr('src', res.path);
                $('input[name=image]').attr('value',res.path);
            }
        }
    });
    uploader.init();
 </script>

<!-- <form action="crop.php" method="post">
			<input type="hidden" id="img" name="img" />
			<input type="hidden" id="x" name="x" />
			<input type="hidden" id="y" name="y" />
			<input type="hidden" id="w" name="w" />
			<input type="hidden" id="h" name="h" />  
		<input type="hidden" name="__hash__" value="82c350955d104deebd4c6ee6f2831ec2_48da6f867633e6cf01d179a5ab3be09c" /></form>   -->
<script> 
var updateCoords = function (c){
	$('#x').val(c.x);
	$('#y').val(c.y);
	$('#w').val(c.w);
	$('#h').val(c.h);
	if(parseInt(c.w) > 0){
		//计算预览区域图片缩放的比例，通过计算显示区域的宽度(与高度)与剪裁的宽度(与高度)之比得到
		var rx = $("#preview_box").width() / c.w; 
		var ry = $("#preview_box").height() / c.h;
		//通过比例值控制图片的样式与显示
		$("#crop_preview").css({
			width:Math.round(rx * $("#img_big").width()) + "px",	//预览图片宽度为计算比例值与原图片宽度的乘积
			height:Math.round(rx * $("#img_big").height()) + "px",	//预览图片高度为计算比例值与原图片高度的乘积
			marginLeft:"-" + Math.round(rx * c.x) + "px",
			marginTop:"-" + Math.round(ry * c.y) + "px"
		});
	}
};

var ajaxSaveCrop = function(){
	var width = parseInt($('#w').val() );
	if( !width){
		alert('请选择区域');
		return false;
	}
	 
	var json = {
		"x":$('#x').val(),
		"y":$('#y').val(),
		"w":$('#w').val(),
		"h":$('#h').val(), 
		'img':$('#img_big').attr('src'),
		'album_id':$('#btn_save_crop').attr('album_id')
	};
	var  callFunction  = function (data, textStatus){ 
	   data  = eval('(' + data + ')');  
	   $('#my_img_logo').attr('src', data.data); 
	   destroyCrop();
	   $('#img_big').removeData();
	   $('#adjust_left, #prev_right').hide(); 
	   location.href = $('#btn_save_crop').attr('url');
	}//end of callFunction
	$.post('/cropImage',json, callFunction);
	
};//ajaxSaveCrop

var jcrop_api;  
var bindCrop = function(src){
	$('#img_big, #crop_preview').attr('src', src);  
	$('#adjust_left, #prev_right').show();
	$('#img').val(src );

	if( $('#img_big').data('bind') == 'true' ){
		jcrop_api.setImage(src);
		$('#crop_preview').attr('src', src);
	}
	else{
		$('#img_big').Jcrop({
			allowSelect: true,  
			onSelect: updateCoords,
			onChange: updateCoords,
			aspectRatio: 0.84
		},function(){
			jcrop_api = this;   
		}); 	
		$('#img_big').data('bind', 'true');
			
	}
}

var destroyCrop = function(){
	jcrop_api.destroy();
}
 

	$(window).load(function(){
		 //上传图片
		 
		 $('#btn_save_crop').bind('click', function(){
			 if($('#img_big').attr('src').indexOf('Uploads') >= 0){
			 //alert($(this).attr('url'));
				 location.href = $(this).attr('url');
			 }else{
				 ajaxSaveCrop();
			 }
		 }); 
		 
		 $('#btn_upload').upload({
			name: 'upload_img',         
			action: '/album/uploadImage',  
			enctype: 'multipart/form-data',         
			params: {'rand': Math.random()},         
			autoSubmit: true,
			onSubmit: function() {},         
			onComplete: function(data) {
				data = $.parseJSON(data);
			    if(data.status==1){  
					bindCrop(data.data);
				}
				else{
					alert(data.info);
				}
			}
		});
		 
		
		
		

	}); 
</script>
<script  src="js/jquery.ocupload-1.1.2.packed_5.js"></script>
<script  src="js/jquery.jcrop_3.js"></script>
@endsection