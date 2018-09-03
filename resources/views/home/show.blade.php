@extends('home.default.home')


@section('content')
 <main>
    <div class="infosbox">
      <div class="newsview">
        <h3 class="news_title">{{$article->title}}</h3>
        <div class="bloginfo">
          <ul>
            <li class="author">作者：<a href="/">{{$article->user->username}}</a></li>
            <li class="lmname"><a href="/">{{$article->cate->name}}</a></li>
            <li class="timer">时间：{{substr($article->created_at,0,10)}}</li>
            <li class="view">{{$article->views}}人已阅读</li>
          </ul>
        </div>
        <div class="tags">
		@foreach($article->tags as $v)
        <a href="/article?{{$v->name}}" target="_blank">{{$v->name}}</a> &nbsp;
		@endforeach
        </div>
        <div class="news_about"><strong>简介</strong>{{$article->intro}}</div>
        <div class="news_con">{{$article->content}}</div>
      </div>
      <div class="share">
        <p class="diggit"><a href="JavaScript:makeRequest('/e/public/digg/?classid=3&amp;id=19&amp;dotop=1&amp;doajax=1&amp;ajaxarea=diggnum','EchoReturnedText','GET','');"> 很赞哦！ </a>(<b id="diggnum"><script type="text/javascript" src="/e/public/ViewClick/?classid=2&id=20&down=5"></script>13</b>)</p>
      </div>
      <div class="nextinfo">
      	@if($prev)
        <p>上一篇：<a href="{{$prev->id}}.html">{{$prev->title}}</a></p>
        @endif
        @if($next)
        <p>下一篇：<a href="{{$next->id}}.html">{{$next->title}}</a></p>
        @endif
      </div>
       @if(Session::has('success'))
            <!-- 提示 -->
      <div style="width:700px;height:40px;background:green">
          <h4 style="color:#fff">{{Session::get('success')}}</h4>
          
      </div>
      <!-- 提示end -->
      @endif
      <div class="news_pl">
        <h2>文章评论</h2>
        <div class="gbko"> 
          <script src="/e/pl/more/?classid=77&amp;id=106&amp;num=20"></script>
          @foreach($comment as $v)
          <div class="fb">
            <ul>
              <p class="fbtime"><span>2018-07-24 08:52:48</span>{{$v->username}}</p>
              <p class="fbinfo"></p>
              <div class="ecomment"><span class="ecommentauthor">网友 家蚂蚁 的原文：</span>
                <p class="ecommenttext">{{$v->content}}</p>
              </div>
            </ul>
          </div>
          @endforeach
          <script>
		  function CheckPl(obj)
		  {
		  if(obj.saytext.value=="")
		  {
		  alert("您没什么话要说吗？");
		  obj.saytext.focus();
		  return false;
		  }
		  return true;
		  }
		  </script>
          <form action="/home/comment" method="post" name="saypl" id="saypl">
            <div id="plpost">
              <p class="saying"><span><a href="/e/pl/?classid=77&amp;id=106">共有<script type="text/javascript" src="/e/public/ViewClick/?classid=77&amp;id=106&amp;down=2"></script>2条评论</a></span>来说两句吧...</p>
              <p class="yname"><span>用户名:</span>
                <input name="username" type="text" class="inputText" id="username" value="" size="16">
              </p>
              <input name="article_id" type="hidden" value="{{$article->id}}">
              <textarea name="content" rows="6" id="saytext"></textarea>
              {{csrf_field()}}
              <button>提交</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
@endsection