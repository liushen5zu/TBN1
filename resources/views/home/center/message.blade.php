  
@extends('home.center.xiaoxi')
@section('content')
<section class="msgListWp wp">
 <h1>我的消息</h1>
        <div class="titleBox">
            <ul class="tab clearfix">
            	<li>与好友消息</li>
                <li><a href="/home/xiaoxi">好友列表</a></li>
                
                <li><a href="/personal/msgList/type/2">@我的</a></li>
            </ul>
            <a class="allMarkedRead" href="javascript:;" title="全部标记为已读">全部标记为已读</a>
        </div>
  <style>
        	#huifu{
        		border:0px solid #000;
        		margin-top:30px;
        	}
        </style>
        <style>
    	element.style {
    		height:200px;
		}
		.popover {
		    position: relative;
		    top: 0;
		    left: 0;
		    z-index: 1060;
		    display:block;
		    max-width: 276px;
		    padding: 1px;
		    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
		    font-size: 14px;
		    font-style: normal;
		    font-weight: 400;
		    line-height: 1.42857143;
		    text-align: left;
		    text-align: start;
		    text-decoration: none;
		    text-shadow: none;
		    text-transform: none;
		    letter-spacing: normal;
		    word-break: normal;
		    word-spacing: normal;
		    word-wrap: normal;
		    white-space: normal;
		    background-color: #fff;
		    -webkit-background-clip: padding-box;
		    background-clip: padding-box;
		    border: 1px solid #ccc;
		    border: 1px solid rgba(0,0,0,.2);
		    border-radius: 6px;
		    -webkit-box-shadow: 0 5px 10px rgba(0,0,0,.2);
		    box-shadow: 0 5px 10px rgba(0,0,0,.2);
		    line-break: auto;
		}

    </style>
        <div id="huifu"  style="margin:0 auto">
	        <table align=center width=600px>
	       	 @foreach($messages as $v)
				@if($v->send_id!=Session('id'))
	        	<tr>
	        		<!-- <td></td>
	        		<td></td> -->
	        		<td>

	        		@foreach($user as $val)
						@if($val->id==$v->send_id)
							{{$val->username}}<img width="30px" src="{{$val->image}}">
						@endif
	        		@endforeach
	        		 <div class="popover right">
		                <div class="arrow"></div>
		                <h3 class="popover-title">{{$v->created_at}}</h3>
		                <div class="popover-content">
		                    <p>{{$v->content}}</p>
		                </div>
		            </div>
	            </td>
	        		<td></td>
	        	</tr>
	        	@endif
	        	@if($v->send_id==Session('id'))
				<tr>
	        		<td></td>
	        		<td align=right><img width="30px" src="{{session('image')}}">{{session('username')}}
		        		<div class="popover left">
					      	<div class="arrow"></div>
					      	<h3 class="popover-title">{{$v->created_at}}</h3>
					      	<div class="popover-content">
					        	<p>{{$v->content}}</p>
					      	</div>
			    		</div>
	    			</td>
	    			<!-- <td></td>
	        		<td></td> -->
	        	</tr>
	        	@endif
	        	@endforeach
	        </table>
	        
            	<hr>
	        	<form action="/home/cunchu" method="get" style="width:300px;margin:0 auto;margin-top:8px">
	           		<textarea class="form-control" name="content" rows="3"></textarea>
	           		<input type="hidden" name="accept_id" value="{{$accept_id}}">
	           		{{csrf_field()}}
	           		<button  class="btn btn-info" style="margin:0 right">发送</button>
				</form>
	        
        </div>
	</section>
        @endsection