@extends('home.album.create')

@section('content')
<div class="tab-div_two">
    <ul class="tab-div-ul_two">
        <li><a href="javascript:;" class="one_step">第一步:填写基本信息</a></li>
		<li><a href="javascript:;">第二步:添加封面</a></li>
		<li><a href="javascript:;" class="three_step active">第三步:添加影片</a></li>
    </ul>  
</div>
<div class="con_add">
	<div class="addMovie_left">
	    <p class="choose_movies">请选择影片</p>
		<div class="con_addmovie_left">
			<div class="movie_title">
				<a class="" href="/album/toAjaxAlbumAddMovie/album_id/1997" id="tab_collect">从收藏夹中取文件</a>
				<a href="/album/toAjaxAlbumAddMovieSearch/album_id/1997" id="tab_search" class="cur">搜索影片</a>
			</div>
			<div id="div_collect" class="search_info" style="display: none;"> 
				<!--  -->
				 <div class="movie_specific">
				    <img class="file-img img_default" src="/Uploads/Movie/Poster/thumb_53578c3888188.jpg" origin="/Uploads/Movie/Poster/thumb_53578c3888188.jpg">
					<div class="img_introduce">
					    <p class="editMovie_name"><a href="/movie/22897.html" title="触不可及 Intouchables">触不可及 Intouchables</a></p>
						<p class="editMovie_name">类型：<span>喜剧/剧情</span></p>
						<p>地区：<span><a href="http://www.51oscar.com/movie.html/index/area_id/10">法国</a></span></p>
						<p>年份：<span>2011</span></p>
					</div>
					<img class="add_btn add_album" src="/Public/Home/images/add_album.jpg" movie_id="22897" album_id="1997">
				</div> 
				<!--  -->
				<p class="page_turning">
				    </p><div id="Pagination" class="pagination paging">    <a href="/album/toajaxalbumaddmoviesearch/album_id/1997/p/2.html">下一页</a>  </div>
				<p></p>  
			</div>
			<div id="div_search" class="hide compatible_seven" style="display: block;">
				<div class="search-div search-info">
					<input name="txt_word" id="txt_word" type="text" value="" class="search-input" onkeydown="Keysubmit()">
					<input url="/album/toAjaxAlbumAddMovieSearch/album_id/1997" id="btn_search" type="button" class="search-button">
                </div>
			    <!--  --> 
			    <div id="div_step3_search_list">
			  
			    <div class="search_count">共找到<span>10395</span>部影片</div>
				@foreach($movie as $v)	
						
				 <div class="movie_specific">
				    <img class="file-img img_default" src="{{$v->image}}" origin="/Uploads/Movie/Poster/thumb_53578c3888188.jpg">
					<div class="img_introduce">
					    <p class="editMovie_name"><a href="/movie/22897.html" title="触不可及 Intouchables" target="_blank">{{$v->name}}</a></p>
					    	
						<p class="editMovie_name">类型：<span>

							<?php foreach($v->movie_tags()->get() as $val) { ?>

								{{$val->name}}

							<?php } ?>
						
						</span></p>
							
						<p>地区：<span><a href="http://www.51oscar.com/movie.html/index/area_id/10">{{$v->movie_cate->name}}</a></span></p>
						<p>年份：<span>{{substr($v->created_at,0,4)}}</span></p>
					</div>
					<button class="add_btn add_album"  movie_id="22897" album_id="1997">添加</button>
				</div>

				@endforeach
				
				<p class="page_turning">
				    </p><div id="Pagination" class="pagination paging otherpag seven_com"><a href="/album/toajaxalbumaddmoviesearch/album_id/1997/p/2.html">下一页</a>  </div>
				<p></p>
          
                </div> 
			</div>
		</div>
	</div>
	
	<div class="addMovie_right_two">
	    <p class="over_movie">已选影片列表</p>
		<ul class="film-list addmovie_l">
                                 <div class="clear"></div>
	    </ul>
	</div>
</div>
</div>
<div class="clear"></div>
<div class="save_div">
  <input album_id="1997" id="btn_edit_movie_info" name="input" type="button" class="save_con" value="完成">
  <a href="/album/toAjaxAlbumAddImg/album_id/1997" class="save_black">返回上一步</a>
</div>
<script src="/Js/album_edit.js"></script>
<script>
	$(window).load(function(){
		AlbumEdit.showTab();
	}); 

	function Keysubmit(){ 
	 var event=arguments.callee.caller.arguments[0]||window.event;//消除浏览器差异  
	     if (event.keyCode == 13){  
	        $('#btn_search').click(); 
	     }  

	} 
</script>
@endsection