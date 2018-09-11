

 <!--热门讨论 e--> 
    <section class="hotMovie"> 
     <div class="title clearfix"> 
      <i class="movie icon"></i>
      <a href="/home/movieDetails" title="热映影片" target="_blank">热映影片<em>&gt;&gt;</em></a> 
     </div> 
     <div class="cont clearfix"> 

     @foreach($movie as $v)
     
      <dl class="clearfix"> 
       <dt> 
        <a href="/movie/39278.html" title="{{$v->name}}" target="_blank"> <img class="lazyImg pic imgBorder" src="{{$v->image}}" width="98" height="138" alt="{{$v->name}} " /> </a> 
       </dt> 
       <dd> 
        <a class="t" href="/movie/39278.html" title="{{$v->name}} " target="_blank">{{$v->name}} </a> 
        <p>导演：<em>{{$v->director_name->name}}</em></p> 
        <p>类型：<em>
        	
        	<?php
        		if(empty($v->movie_tags)){
        			echo '当前没有热门电影';
        		}
		     	foreach ($v->movie_tags as $e) {
		    		echo $e->name.'|';
				}	
    		?>
        </em></p> 
        <a class="trailer" href="javascript:viod(0);" title="预告片" data-trailer="">预告片<i></i></a> 
       </dd> 
      </dl>
     @endforeach
     
      
      
     </div> 
    </section>
    <!--热映影片 e--> 