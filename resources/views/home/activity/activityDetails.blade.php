@extends('layouts.home.default')

@section('title')
活动详情
@endsection
@section('content')
<section class="mainWp wp clearfix">
	<section class="leftWp fL">
        <div class="location">
            当前位置：<a href="http://www.51oscar.com" title="首页" target="_blank"><img src="/ueditor/picture/location_ind.png" alt="大众影评网" style="vertical-align:text-bottom;"></a>&gt;<a href="http://www.51oscar.com/activity.html" title="活动" target="_blank">活动</a>&gt;{{$activity->title}}     </div>
        <!--详情 s-->
      <div class="evenCont">

        <dl class="active_item_list clearfix"> 
       <dt> 
        <a href="/activity/378.html" target="_blank" title="{{$activity->title}}"><img class="lazyImg" src="{{$activity->image}}"  width="300" height="150" alt="{{$activity->title}}" /></a> 
       </dt> 
       <dd> 
        <h3 class="a_underline"><a href="/home/activity/{{$activity->id}}.html" title="{{$activity->title}}" target="_blank">{{$activity->title}}...</a></h3> 
        <p>开始时间：<span>{{$activity->created_at}}</span></p> 
        <p>结束时间：<span>{{$activity->updated_at}}</span></p> 
        <p>报名截止：<span>{{$activity->rtime}}</span></p> 
        <p>活动地点：<span>{{$activity->activity_site}}</span></p> 
        <p><span><em class="registration">{{$registration_num}}</em>人报名<i>|</i><em>{{$activity->attention_num}}</em>人关注</span></p> 
        <div class="bshare-custom"> 
         <div class="bsPromo bsPromo2"></div> 
         <a title="分享到新浪微博" class="bshare-sinaminiblog"></a>
         <a title="分享到微信" class="bshare-weixin"></a>
         <a title="分享到QQ空间" class="bshare-qzone"></a>
         <a title="分享到腾讯微博" class="bshare-qqmb"></a>
         <a title="分享到朋友网" class="bshare-qqxiaoyou"></a>
         <a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a>
        </div> 
        <script charset="utf-8" type="text/javascript">
                                    bShare.addEntry({
                                            url:$("#txt_header_url").val()+"/activity/378.html",
                                            title:"{{$activity->title}}",
                                            summary:"",
                                            pic:"http://image.51oscar.com/Uploads/activity/596edbed0d180.png"
                                    });
        </script> 
        <form action="/home/activityto" method="get">
        <input type="hidden" name="activity_id" value="{{$activity->id}}">
        {{csrf_field()}}
       
        @if(count($activityto)>0)
        
         <a id="btn_activity_apply">已报名<a>
        @endif
        @if(count($activityto)==0)
        <button id="btn_activity_apply"> 我要报名</button>
        @endif
        
        
        </form>
       </dd> 
      </dl>
      <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
          <script>
          $(document).ready(function(){
              $("#btn_activity_apply").click(function(){
                 var oldValue=parseInt($('.registration').html());//取出现在的值，并使用parseInt转为int类型数据
                  oldValue++;//自加1
              $('.registration').html(oldValue);//将增加后的值付给原控件
              });
          });
          </script>
          <div class="detail clearfix">
          <p style="white-space: normal;"><span style="font-family: 宋体; font-size: 14px; line-height: 23.8px; text-indent: 29.3333px; widows: 1; background-color: rgb(255, 255, 255);">

          {!!$activity->intro!!}<br><br>
			<img src="">
          </span></p><p style="white-space: normal;"><span style="font-family: 宋体; font-size: 14px; line-height: 23.8px; text-indent: 29.3333px; widows: 1; background-color: rgb(255, 255, 255);"><img src="" title="17112221801.png" alt="QQ截图20170410112130.png"></span></p><p style="margin-top: 0px; margin-bottom: 25px; white-space: normal; padding: 0px; color: rgb(51, 51, 51); font-family: arial, " microsoft="" line-height:="" background-color:=""><span style="color: inherit; font-family: 微软雅黑; font-size: 18px; font-weight: bold; line-height: 25px;">到底是程又青还是袁湘琴，大众影评网请你看《爱情冻住了》，一探究竟！</span><br></p><p style="margin-top: 0px; margin-bottom: 25px; white-space: normal; padding: 0px; color: rgb(51, 51, 51); font-family: arial, " microsoft="" line-height:="" background-color:=""><span style="color: inherit; font-family: 微软雅黑; font-size: 14px; font-weight: bold; line-height: 25px;">【参与方式】</span></p><p><br></p><section class="135editor" style="white-space: normal; margin: 0px; padding: 0px; line-height: 30px; border: 0px none; box-sizing: border-box; font-size: 14px; font-family: 微软雅黑; background-color: rgb(255, 255, 255);"><section class="135brush" style="margin: 2px 0px; padding: 0px; max-width: 100%; border-top: 2px solid rgb(197, 64, 114); border-right-color: rgb(197, 64, 114); border-bottom: 2px solid rgb(197, 64, 114); border-left-color: rgb(197, 64, 114); border-left-width: 0px; line-height: 25px; font-weight: bold; text-align: center; box-sizing: border-box;"><section style="margin: 0px; padding: 0px; border-color: rgb(197, 64, 114); box-sizing: border-box;"><section style="margin: 0.8em 0px 0.5em; padding: 0px; border: 0px rgb(197, 64, 114); text-align: left; box-sizing: border-box;"><p style="margin-top: 0px; margin-bottom: 0px; padding: 0px; box-sizing: border-box;"><span style="color: rgba(0, 0, 0, 0);">　</span>&nbsp;&nbsp;&nbsp;<strong style="color: rgb(197, 64, 114); box-sizing: border-box; padding: 0px; margin: 0px;">1.留言给大众影评网微信(ID：dzypw007)以及麻辣娱（ID：malayu008），留言内容“<span style="color: rgb(0, 176, 80); box-sizing: border-box; padding: 0px; margin: 0px;">我要看爱情冻住了</span>”</strong><strong style="color: rgb(197, 64, 114); box-sizing: border-box; padding: 0px; margin: 0px;"></strong><strong style="box-sizing: border-box; padding: 0px; margin: 0px;"><span style="color: rgba(0, 0, 0, 0);"></span></strong></p><p style="margin-top: 0px; margin-bottom: 0px; color: inherit; padding: 0px; box-sizing: border-box;"><strong style="box-sizing: border-box; padding: 0px; margin: 0px;">　　2.选出<span style="color: rgb(0, 176, 80); box-sizing: border-box; padding: 0px; margin: 0px;">10位</span>幸运影迷，赠送《爱情冻住了》中影票务通全国电子兑换码每人2张</strong></p><p style="margin-top: 0px; margin-bottom: 0px; color: inherit; padding: 0px; box-sizing: border-box;"><strong style="box-sizing: border-box; padding: 0px; margin: 0px;">　　3.<span style="color: rgb(255, 0, 0);">参与活动的童鞋，请一定要加小编微信（yingping77）</span><strong style="color: inherit; box-sizing: border-box; padding: 0px; margin: 0px;">，有问题与小编沟通，及时兑奖</strong></strong></p><p style="margin-top: 0px; margin-bottom: 0px; color: inherit; padding: 0px; box-sizing: border-box;"><strong style="color: inherit; box-sizing: border-box; padding: 0px; margin: 0px;">&nbsp; &nbsp; &nbsp; &nbsp;4.<strong style="box-sizing: border-box; padding: 0px; margin: 0px;">在网站的本活动下面留言或者告诉更多的朋友，获奖率更高</strong></strong></p></section></section></section></section><p><br></p><p style="white-space: normal;"><br></p><p style="white-space: normal;"><span style="color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px; line-height: 30px; text-indent: 30px; background-color: rgb(255, 255, 255);">【活动时间】</span><br></p><p style="margin-top: 0px; margin-bottom: 25px; white-space: normal; padding: 0px; color: rgb(51, 51, 51); font-family: arial, " microsoft="" line-height:="" background-color:=""><span style="font-size: 14px; text-indent: 30px; box-sizing: border-box; padding: 0px; margin: 0px;">1</span><span style="font-family: 宋体; font-size: 14px; text-indent: 30px; box-sizing: border-box; padding: 0px; margin: 0px;">、活动时间：</span><span style="font-size: 14px; text-indent: 30px; box-sizing: border-box; padding: 0px; margin: 0px;">04</span><span style="font-family: 宋体; font-size: 14px; text-indent: 30px; box-sizing: border-box; padding: 0px; margin: 0px;">月</span><span style="font-size: 14px; text-indent: 30px; box-sizing: border-box; padding: 0px; margin: 0px;">10</span><span style="font-family: 宋体; font-size: 14px; text-indent: 30px; box-sizing: border-box; padding: 0px; margin: 0px;">日</span><span style="font-size: 14px; text-indent: 30px; box-sizing: border-box; padding: 0px; margin: 0px;">--04</span><span style="font-family: 宋体; font-size: 14px; text-indent: 30px; box-sizing: border-box; padding: 0px; margin: 0px;">月</span><span style="font-size: 14px; text-indent: 30px; box-sizing: border-box; padding: 0px; margin: 0px;">13</span><span style="font-family: 宋体; font-size: 14px; text-indent: 30px; box-sizing: border-box; padding: 0px; margin: 0px;">日</span></p><p style="margin-top: 0px; margin-bottom: 25px; white-space: normal; padding: 0px; color: rgb(51, 51, 51); line-height: 30px; background-color: rgb(255, 255, 255);"><span style="font-family: arial, " microsoft="" font-size:="" text-indent:="" line-height:="" box-sizing:="" padding:="" margin:="">2</span><span style="font-family: 宋体; font-size: 14px; text-indent: 30px; line-height: 1.6em; box-sizing: border-box; padding: 0px; margin: 0px;">、公布名单：</span><span style="font-size: 14px; text-indent: 30px; line-height: 1.6em; box-sizing: border-box; padding: 0px; margin: 0px; font-family: arial, " microsoft="">04</span><span style="font-family: 宋体; font-size: 14px; text-indent: 30px; line-height: 1.6em; box-sizing: border-box; padding: 0px; margin: 0px;">月</span><span style="font-family: arial, " microsoft="" font-size:="" text-indent:="" line-height:="" box-sizing:="" padding:="" margin:="">13</span><span style="font-family: 宋体; font-size: 14px; text-indent: 30px; line-height: 1.6em; box-sizing: border-box; padding: 0px; margin: 0px;">日请留意小编微信朋友圈。</span></p><p style="margin-top: 0px; margin-bottom: 25px; white-space: normal; padding: 0px; color: rgb(51, 51, 51); line-height: 30px; background-color: rgb(255, 255, 255);"><span style="color: rgb(192, 0, 0);"><strong><span style="font-family: 宋体; font-size: 14px; text-indent: 30px; line-height: 1.6em; box-sizing: border-box; padding: 0px; margin: 0px;">获奖名单：BlingBling**、鲁鲁、炎炎、咖喱老白、小丸子柒柒、善、yoyo-yoyo、孤者为王、Boyce、吴川江。</span></strong></span></p><p style="margin-top: 0px; margin-bottom: 25px; white-space: normal; padding: 0px; color: rgb(51, 51, 51); line-height: 30px; background-color: rgb(255, 255, 255);"><span style="font-family: Simsun; font-size: medium;">大众影评网观影团，约吗?</span></p><p style="margin-top: 0px; margin-bottom: 25px; white-space: normal; padding: 0px; color: rgb(51, 51, 51); font-family: arial, " microsoft="" line-height:="" text-align:="" background-color:=""><img src="/ueditor/picture/15101910812.gif" title="15101910812.gif" alt="0.gif" style="border: none; max-width: 660px;"></p><p><br></p>          </div><!--detail e-->
      </div>
       <!--详情 e-->
       
       <!--网友评论 s-->
      	<section class="user_sayBox" id="user_sayBox">
          	<input type="hidden" value="5" id="shareText"><!--评论类型-->
             <div class="title clearfix">
                <i class="info icon"></i>网友评论<span>
              @if(!session('id'))
                要评论须要先<a href="/home/login" title="登录" target="_blank">登录</a>或者<a href="http://www.51oscar.com/login/regist.html" title="注册" target="_blank">注册</a>
              @endif

                </span>           

             </div>
            <!--评论编辑输入框 s-->
            @if(session('id'))
            <div class="user_say" id="user_say">
            <form name="login_form" id="login_form" action="/home/activite/comment"  method="POST">
                        <input type="hidden" name="activity_id" id="puser_id" value="{{$activity->id}}">
               <div class="am-form-group" style="height:200px;">
                         <label for="user-name" class="am-u-sm-3 am-form-label">添加评论 <span class="tpl-form-line-small-title"></span></label>
                        <div id="div1" class="toolbar"></div>
                        <div id="div2" class="text">
                            <p></p>
                        </div>
                        <textarea id="text1"  name="content" rows="5" cols="80"></textarea>
                         <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
                        <script type="text/javascript" src="\wangEditor-3.1.0\release\wangEditor.min.js"></script>
                        <script type="text/javascript">
                            var E = window.wangEditor;
                            var editor = new E('#div1', '#div2');
                            var $text1 = $('#text1');
                             editor.customConfig.onchange = function (html) {
                                // 监控变化，同步更新到 textarea
                                $text1.val(html)
                            }
                            // 或者 var editor = new E( document.getElementById('editor') )
                            editor.create()
                        </script>
                    </div>

                <div>
                    <div style="clear:both;"></div>
                    <div style="float:right;margin-top:10px;position:relative;">
                        <div id="div_comment_float">
                            {{csrf_field()}}
                           	<button id="release_btn" class="movie_comment_btn" href="javascript:">发布</button>
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
                <div style="clear:both"></div>
          </form>
          </div>
          @endif

				<!-- <textarea id="replayHtml" style="display:none">									&lt;div class="replay-content"&gt;
										&lt;i class="triangle"&gt;&lt;/i&gt;
										&lt;form method="post" name="hf_form" &gt;
											&lt;div&gt;&lt;textarea&gt;&lt;/textarea&gt;&lt;/div&gt;
											&lt;input type="hidden" id="pid" value=""/&gt;
											&lt;input type="hidden" id="act_id" value="377"/&gt;
											&lt;input type="hidden" id="type_id2" name="type" value="1"/&gt;
											&lt;div class="btn clearfix"&gt;
                                                &lt;a id="div_comment_qq" class="div_comment_qq_inner icon"&gt;表情&lt;/a&gt;
                                                &lt;button class="cancel-btn" type="button"&gt;取消&lt;/button&gt;
                                                &lt;button class="replay-btn" type="button"&gt;回复&lt;/button&gt;
                                            &lt;/div&gt;
                                        	&lt;input type="hidden" name="__hash__" value="ffe99cf95977c1bdc6793a86f88361c2_3e280345331ab8f1463411b0f3b1ed77" /&gt;
										&lt;/form&gt;
									&lt;/div&gt;
				</textarea> -->

            <!--评论编辑输入框 e-->
         
         <!--评论列表 s-->
         <div class="commsList">
         
        @foreach($comment2 as $v)
        <dl class="comms_box clearfix">
		   	<dt>
				<a href="/someone/427794.html" title="{{$v->user->username}}" target="_blank">
				<img class="lazyImg" src="{{$v->user->image}}"  width="40" height="40" alt="{{$v->user->username}}">
				</a>
			</dt>
			<dd>
        
				<span class="dis_detail clearfix">
					<span class="comms_user"><a class="user" href="/someone/427794.html" title="鲁鲁" target="_blank"></a><i>{{$v->user->username}}:</i></span>
					<span class="comms_detail">{!!$v['content']!!}</span>
				</span>
				<span class="dis_reply clearfix">
					<time>{{$v->created_at}}</time><a class="reply" href="javascript:;" title="回复" onclick="replayComment(this,'鲁鲁');return false">回复</a>
					<input type="hidden" class="comment_pid" value="1799">
					<input type="hidden" class="comment_p_user_id" value="427794">
                    <input type="hidden" class="puser_id" value="427794">
				</span>
				 <!--子回复列表 s-->
				  <div class="comms_replyBox">
				                    </div>
                  <!--子回复列表 e-->
                  
                  <input type="hidden" class="more_comms_reply_p" value="1"><!--显示当前子评论页数-->
		   </dd>
		  </dl>
      @endforeach
      </div>           
        <!--评论列表 e-->
          
      </div></section><!--网友评论 e-->
   </section><!--leftWp e-->
    
    <aside class="rightWp fR">
         @include('layouts.home.re')
                

        <section class="hotAlbum">
            <div class="title clearfix">
                <i class="paper icon"></i><a href="javascript:void(0);" title="最新活动">最新活动</a>
            </div>
            <div class="cont clearfix">
            	<ul>
            		@foreach($a as $v)
	            	<li><a href="/activity/378.html" title="{{$v->title}}" target="_blank">大众影评请你看▌{{$v->title}}▌</a></li>
	            	
	            	@endforeach  

            	</ul>
            </div>
        </section><!--热门影集 e-->
        
    </aside><!--rightWp e-->

</section>
@endsection