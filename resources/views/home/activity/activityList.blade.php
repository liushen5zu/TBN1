@extends('layouts.home.default')

@section('title')
活动列表
@endsection
 @section('content');
  <section class="mainWp wp clearfix"> 
   <section class="leftWp fL"> 
    <!--焦点幻灯片 s--> 
    <section class="picFocus"> 
     <div class="bd"> 
      <ul> 
      </ul> 
     </div> 
     <div class="hd"> 
      <ul> 
      </ul> 
     </div> 
    </section> 
    <!--焦点幻灯片 e--> 
    <!--活动列表 s--> 
    <section class="active_item"> 
     <div class="title clearfix"> 
      <i class="line"></i>活动列表 
     </div> 
     <div id="active_itemBox" class="active_itemBox"> 
      <script type="text/javascript" charset="utf-8" src="/ueditor/js/buttonlite.js"></script>
      <script type="text/javascript" charset="utf-8" src="/ueditor/js/bsharec0.js"></script>


    <!-- 列表 -->
    @foreach($activity as $v)
      <dl class="active_item_list clearfix"> 
       <dt> 
        <a href="/activity/378.html" target="_blank" title="大众影评网请你看《绿野仙踪之奥兹国奇幻之旅》"><img class="lazyImg" src="/ueditor/picture/b.gif" data-src="http://image.51oscar.com/Uploads/activity/596edbed0d180.png" width="300" height="150" alt="大众影评网请你看《绿野仙踪之奥兹国奇幻之旅》" /></a> 
       </dt> 
       <dd> 
        <h3 class="a_underline"><a href="/activity/378.html" title="大众影评网请你看《绿野仙踪之奥兹国奇幻之旅》" target="_blank">[观影团]大众影评网请你看《绿野仙踪之奥兹国奇...</a></h3> 
        <p>开始时间：<span>2017-07-19 12:13</span></p> 
        <p>结束时间：<span>2017-07-20 12:13</span></p> 
        <p>报名截止：<span>1970-01-01 08:00</span></p> 
        <p>活动地点：<span></span></p> 
        <p><span><em>171</em>人报名<i>|</i><em>5008</em>人关注</span></p> 
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
                                            title:"[观影团]大众影评网请你看《绿野仙踪之奥兹国奇幻之旅》",
                                            summary:"",
                                            pic:"http://image.51oscar.com/Uploads/activity/596edbed0d180.png"
                                    });
        </script> 
       </dd> 
      </dl>
	<!-- 列表 -->
	@endforeach

     </div>
     <!--active_itemBox e--> 
     <div class="pagination" style="">
       &nbsp;
      <span class="current">1</span>&nbsp;
      <a href="/activity/index/p/2.html">&nbsp;2&nbsp;</a>&nbsp;
      <a href="/activity/index/p/3.html">&nbsp;3&nbsp;</a>&nbsp;
      <a href="/activity/index/p/4.html">&nbsp;4&nbsp;</a>&nbsp;
      <a href="/activity/index/p/5.html">&nbsp;5&nbsp;</a> 
      <a href="/activity/index/p/2.html">下一页</a> 
      <span style="color:black;">第 1/34 页</span> 
     </div> 
     <!--<section class="loadNextPage">
            <img src="/ueditor/picture/loading_1.gif" alt="loading" />加载中……
        </section>--> 
    </section> 
    <!--活动列表 e--> 
   </section>
   <!--leftWp e--> 
   <aside class="rightWp fR"> 
    <section class="hotTalk"> 
     <div class="title clearfix"> 
      <i class="info2 icon"></i>
      <a href="/forum.html" title="当前热议" target="_blank">当前热议<em>&gt;&gt;</em></a> 
     </div> 
     <div class="cont clearfix"> 
      <ul> 
      </ul> 
     </div> 
    </section>
    <!--热门讨论 e--> 
    <section class="hotMovie"> 
     <div class="title clearfix"> 
      <i class="movie icon"></i>
      <a href="http://www.51oscar.com/movie/search/0_0_1_0.html" title="热映影片" target="_blank">热映影片<em>&gt;&gt;</em></a> 
     </div> 
     <div class="cont clearfix"> 
      <dl class="clearfix"> 
       <dt> 
        <a href="/movie/39278.html" title="芳华 " target="_blank"> <img class="lazyImg pic imgBorder" src="/ueditor/picture/59c33acd86ed5.jpg" data-src="/Uploads/Movie/Poster/59c33acd86ed5.jpg" width="98" height="138" alt="芳华 " /> </a> 
       </dt> 
       <dd> 
        <a class="t" href="/movie/39278.html" title="芳华 " target="_blank">芳华 </a> 
        <p>导演：<em>冯小刚</em></p> 
        <p>类型：<em>剧情/战争</em></p> 
        <a class="trailer" href="javascript:viod(0);" title="预告片" data-trailer="">预告片<i></i></a> 
       </dd> 
      </dl>
      <dl class="clearfix"> 
       <dt> 
        <a href="/movie/39277.html" title="空天猎 " target="_blank"> <img class="lazyImg pic imgBorder" src="/ueditor/picture/59c3397b4c6e5.jpg" data-src="/Uploads/Movie/Poster/59c3397b4c6e5.jpg" width="98" height="138" alt="空天猎 " /> </a> 
       </dt> 
       <dd> 
        <a class="t" href="/movie/39277.html" title="空天猎 " target="_blank">空天猎 </a> 
        <p>导演：<em>李晨</em></p> 
        <p>类型：<em>动作/剧情/战...</em></p> 
        <a class="trailer" href="javascript:viod(0);" title="预告片" data-trailer="">预告片<i></i></a> 
       </dd> 
      </dl>
      <dl class="clearfix"> 
       <dt> 
        <a href="/movie/39276.html" title="缝纫机乐队 " target="_blank"> <img class="lazyImg pic imgBorder" src="/ueditor/picture/59c318412247e.jpg" data-src="/Uploads/Movie/Poster/59c318412247e.jpg" width="98" height="138" alt="缝纫机乐队 " /> </a> 
       </dt> 
       <dd> 
        <a class="t" href="/movie/39276.html" title="缝纫机乐队 " target="_blank">缝纫机乐队 </a> 
        <p>导演：<em>大鹏</em></p> 
        <p>类型：<em>喜剧/音乐</em></p> 
        <a class="trailer" href="javascript:viod(0);" title="预告片" data-trailer="">预告片<i></i></a> 
       </dd> 
      </dl>
      <dl class="clearfix"> 
       <dt> 
        <a href="/movie/39275.html" title="遗忘空间 " target="_blank"> <img class="lazyImg pic imgBorder" src="/ueditor/picture/59c0a983d72c3.jpeg" data-src="/Uploads/Movie/Poster/59c0a983d72c3.jpeg" width="98" height="138" alt="遗忘空间 " /> </a> 
       </dt> 
       <dd> 
        <a class="t" href="/movie/39275.html" title="遗忘空间 " target="_blank">遗忘空间 </a> 
        <p>导演：<em>韩汶青</em></p> 
        <p>类型：<em>恐怖/悬疑</em></p> 
        <a class="trailer" href="javascript:viod(0);" title="预告片" data-trailer="">预告片<i></i></a> 
       </dd> 
      </dl>
      <dl class="clearfix"> 
       <dt> 
        <a href="/movie/39274.html" title="疯狂旅程 " target="_blank"> <img class="lazyImg pic imgBorder" src="/ueditor/picture/59c0a6cb6ed46.jpg" data-src="/Uploads/Movie/Poster/59c0a6cb6ed46.jpg" width="98" height="138" alt="疯狂旅程 " /> </a> 
       </dt> 
       <dd> 
        <a class="t" href="/movie/39274.html" title="疯狂旅程 " target="_blank">疯狂旅程 </a> 
        <p>导演：<em>龙野</em></p> 
        <p>类型：<em>喜剧/剧情</em></p> 
        <a class="trailer" href="javascript:viod(0);" title="预告片" data-trailer="">预告片<i></i></a> 
       </dd> 
      </dl> 
     </div> 
    </section>
    <!--热映影片 e--> 
    <section class="hotAlbum"> 
     <div class="title clearfix"> 
      <i class="paper icon"></i>
      <a href="http://www.51oscar.com/album/type/2.html" title="热门影集" target="_blank">热门影集</a> 
     </div> 
     <div class="cont clearfix"> 
      <ul> 
       <li><a href="/album/1861.html" title="永不过时的20部励志影片" target="_blank">永不过时的20部励志影片</a></li>
       <li><a href="/album/1809.html" title="第35届伦敦影评人协会奖获奖电影" target="_blank">第35届伦敦影评人协会奖获奖电影</a></li>
       <li><a href="/album/377.html" title="新西兰天才导演: 彼得&middot;杰克逊" target="_blank">新西兰天才导演: 彼得&middot;杰克逊</a></li>
       <li><a href="/album/1810.html" title="2015年2月新片观影指南" target="_blank">2015年2月新片观影指南</a></li>
       <li><a href="/album/1792.html" title="2014动画界奥斯卡提名电影" target="_blank">2014动画界奥斯卡提名电影</a></li>
       <li><a href="/album/1785.html" title="2015必看的12部电影" target="_blank">2015必看的12部电影</a></li>
       <li><a href="/album/1753.html" title="2015年贺岁档大片盘点" target="_blank">2015年贺岁档大片盘点</a></li>
       <li><a href="/album/1807.html" title="2014年被下载最多的影片TOP20" target="_blank">2014年被下载最多的影片TOP20</a></li>
       <li><a href="/album/1813.html" title="2015年全球动画大电影前瞻" target="_blank">2015年全球动画大电影前瞻</a></li>
       <li><a href="/album/1824.html" title="2015年2月电影口碑榜Top20" target="_blank">2015年2月电影口碑榜Top20</a></li> 
      </ul> 
     </div> 
    </section>
    <!--热门影集 e--> 
   </aside>
   <!--rightWp e--> 
  </section> 
  <!--主体部分 e--> 
  @endsection