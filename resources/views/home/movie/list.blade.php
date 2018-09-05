@extends('layouts.home.default')

@section('content')




    <script src="/ueditor/js/bundle.js" defer="defer"></script>





    
    <div id="wrapper">
        

        
    <div id="content">
        

        <div class="grid-16-8 clearfix">
            
    <div id="dale_movie_homepage_top_large"></div>

            
            <div class="article">
                
    <div id="dale_movie_home_main_top"></div>

    

    

    
    
    
    <div id="screening" class="s" data-dstat-areaid="70" data-dstat-mode="click,expose">
        <div class="screening-hd">
                <div class="ui-slide-control">
                    <span class="prev-btn"><a class="btn-prev" href="javascript:void(0)"></a></span>
                    <span class="next-btn"><a class="btn-next" href="javascript:void(0)"></a></span>
                </div>
                <div class="slide-tip"><span class="ui-slide-index">1</span> / <span class="ui-slide-max">8</span></div>
            <h2>正在热映<span><a onclick="moreurl(this, {from:'mv_l_a'})" href="/cinema/nowplaying/">全部正在热映&raquo;</a></span><span><a onclick="moreurl(this, {from:'mv_l_w'})" href="./later/">即将上映&raquo;</a></span></h2>
        </div>
        <div class="screening-bd">
            <ul class="ui-slide-content" data-slide-index="1" data-index-max="8">
                  @foreach($details as $v)    
                        
                    <li class="ui-slide-item s" data-dstat-areaid=70_1 data-dstat-mode=click,expose data-dstat-watch=.ui-slide-content data-dstat-viewport=.screening-bd data-title="碟中谍6：全面瓦解 Mission: Impossible - Fallout" data-release="2018" data-rate="8.3" data-star="45" data-trailer="https://movie.douban.com/subject/26336252/trailer" data-ticket="https://movie.douban.com/ticket/redirect/?url=https%3A%2F%2Fm.maoyan.com%2Fcinema%2Fmovie%2F341737%3F_v_%3Dyes%26merCode%3D1000011" data-duration="148分钟(中国大陆)" data-region="美国" data-director="克里斯托弗·麦奎里" data-actors="汤姆·克鲁斯 / 亨利·卡维尔 / 文·瑞姆斯" data-intro="" data-enough="true" data-rater="111916">
                        <ul class="">
                            <li class="poster">
                                <a onclick="moreurl(this, {from:'mv_a_pst'})" href="https://movie.douban.com/subject/26336252/?from=showing">
                                    <img src="{{$v->image}}" alt="碟中谍6：全面瓦解" rel="nofollow" class="" />
                                </a>
                            </li>
                            <li class="title">
                                <a onclick="moreurl(this, {from:'mv_a_tl'})" href="https://movie.douban.com/subject/26336252/?from=showing" class="">{{$v->name}}</a>
                            </li>
                            <li class="rating">
                                        <span class="rating-star allstar45"></span><span class="subject-rate">{{$v->num}}</span>
                            </li>
                                <li class="ticket_btn"><span><a onclick="moreurl(this, {from:'mv_b_tc'})" href="https://movie.douban.com/ticket/redirect/?url=https%3A%2F%2Fm.maoyan.com%2Fcinema%2Fmovie%2F341737%3F_v_%3Dyes%26merCode%3D1000011" target="_blank">选座购票</a></span></li>
                        </ul>
                        
                        
                    @endforeach
                    <li class="ui-slide-item">
                    <li class="ui-slide-item">
                    <li class="ui-slide-item">
                    <li class="ui-slide-item">
            </ul>
        </div>
    </div>
    
    


    <!-- douban ad begin -->
    <div id="movie_home_left_bottom" class="mb20 s" data-dstat-areaid="72" data-dstat-mode="click,expose"></div>
    <!-- douban ad end -->

        

        

<div class="gaia gaia-lite gaia-movie screening-bd" >
    <div class="detail-pop"></div>
    <input type="hidden" name="islogin" value="false">
    <div class="fliter-wp">
      <h2>
          <div data-type="movie">最近热门电影</div>
          <div class="filter">
              <form action="get" class="gaia_frm" autocomplete="off">
                  <input type="hidden" name="type" value="movie">
                  <div class="tags">
                      <div class="tag-list"></div>
                  </div>
                  <input type="hidden" name="page_limit" value="20">
                  <input type="hidden" name="page_start" value="0">
              </form>
          </div>
          <div class="fliter-placeholder"></div>
          <a href="/explore" class="more-link">更多»</a>
      </h2>
    </div>
     @foreach($details as $v)    
                        
                    <li class="ui-slide-item s" data-dstat-areaid=70_1 data-dstat-mode=click,expose data-dstat-watch=.ui-slide-content data-dstat-viewport=.screening-bd data-title="{{$v->name}}" data-release="2018" data-rate="8.3" data-star="45" data-trailer="https://movie.douban.com/subject/26336252/trailer" data-ticket="https://movie.douban.com/ticket/redirect/?url=https%3A%2F%2Fm.maoyan.com%2Fcinema%2Fmovie%2F341737%3F_v_%3Dyes%26merCode%3D1000011" data-duration="148分钟(中国大陆)" data-region="美国" data-director="克里斯托弗·麦奎里" data-actors="汤姆·克鲁斯 / 亨利·卡维尔 / 文·瑞姆斯" data-intro="" data-enough="true" data-rater="111916">
                        <ul class="" style="margin-left:13px">
                            <li class="poster" >
                                <a onclick="moreurl(this, {from:'mv_a_pst'})" href="/home/{{$v->id}}.html">
                                    <img src="{{$v->image}}" width="150px" height="200px" alt="{{$v->name}}" rel="nofollow" class="" />
                                </a>
                            </li>
                            <li class="title">
                                <a onclick="moreurl(this, {from:'mv_a_tl'})" href="https://movie.douban.com/subject/26336252/?from=showing" class="">{{$v->name}}</a>
                            </li>
                            <li class="rating">
                                        <span class="rating-star allstar45"></span><span class="subject-rate">{{$v->num}}</span>
                            </li>
                                <li class="ticket_btn"><span><a onclick="moreurl(this, {from:'mv_b_tc'})" href="https://movie.douban.com/ticket/redirect/?url=https%3A%2F%2Fm.maoyan.com%2Fcinema%2Fmovie%2F341737%3F_v_%3Dyes%26merCode%3D1000011" target="_blank"></a></span></li>
                        </ul>
                        
                    @endforeach
    

</div>
<div class="list-wp">
    <div class="list"></div>
    <a class="more" href="javascript:;">载入中...</a>
</div>
<div class="screening-bd">
        

<div class="gaia gaia-lite gaia-tv">
    <div class="detail-pop"></div>
    <input type="hidden" name="islogin" value="false">
    <div class="fliter-wp">
      <h2>
          <div data-type="tv">最近热门电视剧</div>
          <div class="filter">
              <form action="get" class="gaia_frm" autocomplete="off">
                  <input type="hidden" name="type" value="movie">
                  <div class="tags">
                      <div class="tag-list"></div>
                  </div>
                  <input type="hidden" name="page_limit" value="20">
                  <input type="hidden" name="page_start" value="0">
              </form>
          </div>
          <div class="fliter-placeholder"></div>
          <a href="/tv" class="more-link">更多»</a>
      </h2>
    </div>
     @foreach($details as $v)    
                        
                    <li class="ui-slide-item s" data-dstat-areaid=70_1 data-dstat-mode=click,expose data-dstat-watch=.ui-slide-content data-dstat-viewport=.screening-bd data-title="碟中谍6：全面瓦解 Mission: Impossible - Fallout" data-release="2018" data-rate="8.3" data-star="45" data-trailer="https://movie.douban.com/subject/26336252/trailer" data-ticket="https://movie.douban.com/ticket/redirect/?url=https%3A%2F%2Fm.maoyan.com%2Fcinema%2Fmovie%2F341737%3F_v_%3Dyes%26merCode%3D1000011" data-duration="148分钟(中国大陆)" data-region="美国" data-director="克里斯托弗·麦奎里" data-actors="汤姆·克鲁斯 / 亨利·卡维尔 / 文·瑞姆斯" data-intro="" data-enough="true" data-rater="111916">
                        <ul class="" style="margin-left:13px">
                            <li class="poster" >
                                <a onclick="moreurl(this, {from:'mv_a_pst'})" href="https://movie.douban.com/subject/26336252/?from=showing">
                                    <img src="{{$v->image}}" width="150px" height="200px" alt="碟中谍6：全面瓦解" rel="nofollow" class="" />
                                </a>
                            </li>
                            <li class="title">
                                <a onclick="moreurl(this, {from:'mv_a_tl'})" href="https://movie.douban.com/subject/26336252/?from=showing" class="">{{$v->name}}</a>
                            </li>
                            <li class="rating">
                                        <span class="rating-star allstar45"></span><span class="subject-rate">{{$v->num}}</span>
                            </li>
                                <li class="ticket_btn"><span><a onclick="moreurl(this, {from:'mv_b_tc'})" href="https://movie.douban.com/ticket/redirect/?url=https%3A%2F%2Fm.maoyan.com%2Fcinema%2Fmovie%2F341737%3F_v_%3Dyes%26merCode%3D1000011" target="_blank"></a></span></li>
                        </ul>
                        
                    @endforeach
    </div>
<div class="list-wp">
    <div class="list"></div>
    <a class="more" href="javascript:;">载入中...</a>
</div>


    

</div>


        
        
<link rel="stylesheet" href="/ueditor/css/gallery.css" />
<div id="gallery-frames">
    <div class="gallery-hd">
            <div class="gallery-ui-slide-control">
                <span class="prev-btn"><a class="gallery-btn-prev" href="javascript:void(0)"></a></span>
                <span class="next-btn"><a class="gallery-btn-next" href="javascript:void(0)"></a></span>
            </div>
            <div class="slide-tip"><span class="gallery-ui-slide-index">1</span> / <span class="gallery-ui-slide-max">8</span></div>
            <h2>热门推荐</h2>
    </div>
     
<div id="hot-gallery">
        <ul class='ui-slide-content'>
                <li class='ui-slide-item'>
                   

               
  @foreach($details as $v)              
<li class='ui-slide-item'>
                    
<div class="gallery-frame">
        <a href="https://www.douban.com/note/688870383/?from=gallery" target="_blank" data-fid="3086">
            <img src="{{$v->image}}" alt="对答666丨佛系男神挑战高智商终极对决" width="350" height="240"/>
        </a>
    <div class="gallery-detail">
        <div class="gallery-hd">
                <a href="https://www.douban.com/note/688870383/?from=gallery" target="_blank" data-fid="3086">
                    <h3>{{$v->intro}}</h3>
                </a>
        </div>
        <div class="gallery-bd">
            <p>
               {{$v->name}}
            </p>
        </div>
    </div>
</div>
  </li>
  @endforeach

                
</ul>
</div>
</div>

    
    
    <div id="reviews" class="s" data-dstat-areaid="77" data-dstat-mode="click,expose">
        <div class="reviews-hd">
            <h2>最受欢迎的影评<span><a href="/review/best/">更多热门影评&raquo;</a></span><span><a href="/review/latest/">新片影评&raquo;</a></span></h2>
        </div>
        <div class="reviews-bd">
                
    <div class="review ">
        <div class="review-hd">
            <a href="https://movie.douban.com/subject/1295409/?from=reviews">
                    <img class="lazy"
                        data-original="https://img3.doubanio.com/view/photo/s_ratio_poster/public/p2272146906.jpg"
                        src="/ueditor/picture/grey.gif"
                        alt="纵横四海" />
            </a>
        </div>
        <div class="review-bd">
            <h3><a href="https://movie.douban.com/review/9581655/" class="">这是最好的结局</a></h3>
            <div class="review-meta">
                <a href="https://www.douban.com/people/182719256/">逆袭的泥巴</a> 评论
                <a href="https://movie.douban.com/subject/1295409/?from=reviews">《纵横四海》</a>

                    <span class="allstar40"></span>
            </div>
            <div class="review-content">
                其实我相信亚Joe一直都爱着红豆的，红豆最后是否还喜欢亚占我不确定，但是我觉得电影的结局是最好的结局。 亚占和亚Joe对爱的表达方式不同，亚占给人的感觉是体贴的，对红豆的照顾是全身心全方位的。亚Joe的对爱...
                    <a href="https://movie.douban.com/review/9581655/">(全文)</a>
            </div>
        </div>
    </div>

                
    <div class="review ">
        <div class="review-hd">
            <a href="https://movie.douban.com/subject/27622447/?from=reviews">
                    <img class="lazy"
                        data-original="https://img3.doubanio.com/view/photo/s_ratio_poster/public/p2530599636.jpg"
                        src="/ueditor/picture/grey.gif"
                        alt="小偷家族" />
            </a>
        </div>
        <div class="review-bd">
            <h3><a href="https://movie.douban.com/review/9568166/" class="">《小偷家族》各成员过往经历&amp;行为动机分析</a></h3>
            <div class="review-meta">
                <a href="https://www.douban.com/people/58041789/">彩骚戏话</a> 评论
                <a href="https://movie.douban.com/subject/27622447/?from=reviews">《小偷家族》</a>

                    <span class="allstar50"></span>
            </div>
            <div class="review-content">
                以成员为单位对本片的剧情做了梳理，对每个角色过去留白的地方进行了一些猜测。 柴田初枝：在没有组成现在的家庭之前，初枝的晚年生活是相当寂寥的。《小偷家族》的小说里提到，初枝确实有一个儿子，和儿子儿媳住...
                    <a href="https://movie.douban.com/review/9568166/">(全文)</a>
            </div>
        </div>
    </div>

                
    <div class="review ">
        <div class="review-hd">
            <a href="https://movie.douban.com/subject/1865703/?from=reviews">
                    <img class="lazy"
                        data-original="https://img3.doubanio.com/view/photo/s_ratio_poster/public/p672363704.jpg"
                        src="/ueditor/picture/grey.gif"
                        alt="红辣椒" />
            </a>
        </div>
        <div class="review-bd">
            <h3><a href="https://movie.douban.com/review/9589239/" class="">梦境折射出的不堪现实</a></h3>
            <div class="review-meta">
                <a href="https://www.douban.com/people/178896109/">还不下班</a> 评论
                <a href="https://movie.douban.com/subject/1865703/?from=reviews">《红辣椒》</a>

                    <span class="allstar50"></span>
            </div>
            <div class="review-content">
                逃避现实有许多方法，躲避，掩盖，假装不知…但梦境是赤裸裸的，它反映内心深处最直接的恐惧和欲望。“潜意识的坏蛋，通过装扮，骗过意识区域的守门人，最终得以在我们梦境当中出现” 墩墩子喜欢时田却碍于他肥胖...
                    <a href="https://movie.douban.com/review/9589239/">(全文)</a>
            </div>
        </div>
    </div>

                
    <div class="review last">
        <div class="review-hd">
            <a href="https://movie.douban.com/subject/1309043/?from=reviews">
                    <img class="lazy"
                        data-original="https://img1.doubanio.com/view/photo/s_ratio_poster/public/p858079649.jpg"
                        src="/ueditor/picture/grey.gif"
                        alt="金刚" />
            </a>
        </div>
        <div class="review-bd">
            <h3><a href="https://movie.douban.com/review/9585575/" class="">童话永远只在故事中</a></h3>
            <div class="review-meta">
                <a href="https://www.douban.com/people/178896109/">还不下班</a> 评论
                <a href="https://movie.douban.com/subject/1309043/?from=reviews">《金刚》</a>

                    <span class="allstar50"></span>
            </div>
            <div class="review-content">
                金刚和安，野兽与美女，角色相似，情节相仿，但是金刚没有野兽幸运，野兽是王子，野兽有爱情，金刚只是金刚，一只被飞机打死的猩猩，得不到安，也失去生的机会。美女与野兽是童话故事，金刚与安是现实。 影片中，...
                    <a href="https://movie.douban.com/review/9585575/">(全文)</a>
            </div>
        </div>
    </div>

        </div>
    </div>

    



            </div>
            <div class="aside">
                
    
    

    
    

    <div class="rating_answer">
        <ul>
            <li>
                <a href="https://blog.douban.com/douban/2015/12/18/3060/" target="_blank">豆瓣电影评分八问</a>
            </li>
        </ul>
    </div>


    <!-- douban ad begin -->
    <div id="dale_movie_home_side_top"></div>
    <div id="dale_movie_home_top_right" class="s" data-dstat-areaid="71" data-dstat-mode="click,expose"></div>
    <!-- douban ad end -->

    
  
  
  
  <div class="hot_link">
    <h2> 电影活动 &nbsp;·&nbsp;·&nbsp;·&nbsp;·&nbsp;·&nbsp;· </h2>
    <ul>
          <li>
              <a href="https://movie.douban.com/video/100209/" data-bid="2633" target="_blank">
                  《爆裂鼓手》近乎变态的励志，算励志吗？
              </a>
          </li>
          <li>
              <a href="https://movie.douban.com/trailer/235621/" data-bid="2634" target="_blank">
                  姚晨忘带偶像包袱，展示十级搞笑功力
              </a>
          </li>
          <li>
              <a href="https://movie.douban.com/trailer/235523/" data-bid="2632" target="_blank">
                  对答666丨释小龙为何“动口又动手”？
              </a>
          </li>
    </ul>
  </div>


    <!-- douban ad begin -->
    <div id="dale_movie_home_top_right_ford" class="s" data-dstat-areaid="71" data-dstat-mode="click,expose"></div>
    <div id="dale_movie_home_top_right2" class="s" data-dstat-areaid="71" data-dstat-mode="click,expose"></div>
    <!-- douban ad end -->

    
    <div id="billboard" class="s" data-dstat-areaid="75" data-dstat-mode="click,expose">
        <div class="billboard-hd">
            <h2>一周口碑榜<span><a href="/chart">更多榜单&raquo;</a></span></h2>
        </div>
        <div class="billboard-bd">
            <table>
                    <tr>
                        <td class="order">1</td>
                        <td class="title"><a onclick="moreurl(this, {from:'mv_rk'})" href="https://movie.douban.com/subject/26336252/">碟中谍6：全面瓦解</a></td>
                    </tr>
                    <tr>
                        <td class="order">2</td>
                        <td class="title"><a onclick="moreurl(this, {from:'mv_rk'})" href="https://movie.douban.com/subject/27093707/">升级</a></td>
                    </tr>
                    <tr>
                        <td class="order">3</td>
                        <td class="title"><a onclick="moreurl(this, {from:'mv_rk'})" href="https://movie.douban.com/subject/26872545/">24帧</a></td>
                    </tr>
                    <tr>
                        <td class="order">4</td>
                        <td class="title"><a onclick="moreurl(this, {from:'mv_rk'})" href="https://movie.douban.com/subject/30206287/">快照</a></td>
                    </tr>
                    <tr>
                        <td class="order">5</td>
                        <td class="title"><a onclick="moreurl(this, {from:'mv_rk'})" href="https://movie.douban.com/subject/26728641/">苏丹</a></td>
                    </tr>
                    <tr>
                        <td class="order">6</td>
                        <td class="title"><a onclick="moreurl(this, {from:'mv_rk'})" href="https://movie.douban.com/subject/30212185/">统治</a></td>
                    </tr>
                    <tr>
                        <td class="order">7</td>
                        <td class="title"><a onclick="moreurl(this, {from:'mv_rk'})" href="https://movie.douban.com/subject/27018320/">美女与猎犬</a></td>
                    </tr>
                    <tr>
                        <td class="order">8</td>
                        <td class="title"><a onclick="moreurl(this, {from:'mv_rk'})" href="https://movie.douban.com/subject/26928562/">帕蒂蛋糕$</a></td>
                    </tr>
                    <tr>
                        <td class="order">9</td>
                        <td class="title"><a onclick="moreurl(this, {from:'mv_rk'})" href="https://movie.douban.com/subject/27064658/">致所有我曾爱过的男孩</a></td>
                    </tr>
                    <tr>
                        <td class="order">10</td>
                        <td class="title"><a onclick="moreurl(this, {from:'mv_rk'})" href="https://movie.douban.com/subject/30287738/">女主角</a></td>
                    </tr>
            </table>
        </div>
    </div>

    


    <!-- douban ad begin -->
    <div id="dale_movie_home_bottom_right"></div>
    <!-- douban ad end -->

    
    

    <div id="doulist">
        <h2>热门豆列</h2>
        <ul>
            <li>
            <span>29推荐</span>
            <div class="title"><a target="_blank" href="https://www.douban.com/doulist/260244/">日本“蓝丝带”电影奖历代最佳影片。</a></div>
            </li>
            <li>
            <span>1777推荐</span>
            <div class="title"><a target="_blank" href="https://www.douban.com/doulist/36980/">《看电影》盘点40部最经典恐怖片</a></div>
            </li>
        </ul>
    </div>


    
    <div id="contact-and-cooperation">
        <div class="contact-and-cooperation-hd">
            <h2>合作联系</h2>
        </div>
        <div class="contact-and-cooperation-bd">
            <ul>
                    <li>电影合作邮箱：<img src="/ueditor/picture/email_movie.png"/></li>
                    <li>电视剧合作邮箱：
                        <img src="/ueditor/picture/email_tv.png"/>
                        <img src="/ueditor/picture/ic_new.png" class="new" />
                    </li>
            </ul>
        </div>
    </div>
    

    <br/>
    
    
    <div class="contact mod">
        <h2>关注我们</h2>
        <ul class="embassy-list clearfix">
            <li>
                <a href="http://weibo.com/doubanfilm" target="_blank" class="icon-embassy-weibo"></a>
                <a href="http://weibo.com/doubanfilm" target="_blank" class="primary-link">微博</a>
            </li>
            <li>
                <a class="icon-embassy-weixin">
                    <div class="hover"><img src="/ueditor/picture/home_wechat_qrcode@2x.jpg" width="130px" height="130px"></div>
                </a>
                <a class="primary-link" href="javascript:;">微信</a>
            </li>
            <li>
                <a href="http://weibo.com/doubanzui" target="_blank" class="icon-embassy-bite-me"></a>
                <a href="http://weibo.com/doubanzui" target="_blank" class="primary-link">瓣嘴</a>
            </li>
            <li>
                <a href="https://site.douban.com/doubanfilmawards/" target="_blank" class="icon-embassy-award-site"></a>
                <a href="https://site.douban.com/doubanfilmawards/" target="_blank" class="primary-link">鑫像奖小站</a>
            </li>
            <li>
                <a href="https://www.douban.com/people/nobodyfilm/" target="_blank" class="icon-embassy-club-site"></a>
                <a href="https://www.douban.com/people/nobodyfilm/" target="_blank" class="primary-link">观影club</a>
            </li>
        </ul>
    </div>

    <!-- douban ad begin -->
    <div id="dale_movie_home_inner_bottom"></div>
    <div id="dale_movie_home_download_bottom"></div>
    <!-- douban ad end -->

    <!-- douban ad begin -->
    <div id="dale_movie_home_bottom_right_down"></div>
    <!-- douban ad end -->

            </div>
            <div class="extra">
                
    <!-- douban ad begin -->
    <div id="dale_movie_homepage_bottom"></div>
    <!-- douban ad end -->

            </div>
        </div>
    </div>

        
    <div id="footer">
            <div class="footer-extra"></div>
        
<span id="icp" class="fleft gray-link">
    &copy; 2005－2018 douban.com, all rights reserved 北京豆网科技有限公司
</span>

<a href="https://www.douban.com/hnypt/variformcyst.py" style="display: none;"></a>

<span class="fright">
    <a href="https://www.douban.com/about">关于豆瓣</a>
    · <a href="https://www.douban.com/jobs">在豆瓣工作</a>
    · <a href="https://www.douban.com/about?topic=contactus">联系我们</a>
    · <a href="https://www.douban.com/about?policy=disclaimer">免责声明</a>
    
    · <a href="https://help.douban.com/?app=movie" target="_blank">帮助中心</a>
    · <a href="https://www.douban.com/doubanapp/">移动应用</a>
    · <a href="https://www.douban.com/partner/">豆瓣广告</a>
</span>

    </div>

    </div>
    <script type="text/javascript" src="/ueditor/js/1dd9ea66a9b8c99b.js"></script>
        
        
    <link rel="stylesheet" type="text/css" href="/ueditor/css/dialog.css" />
    <link rel="stylesheet" type="text/css" href="/ueditor/css/reg_login_pop.css" />
    <script type="text/javascript" src="/ueditor/js/do.js" data-cfg-autoload="false"></script>
    <script type="text/javascript" src="/ueditor/js/dialog.js"></script>
    <script type="text/javascript">
        var HTTPS_DB='https://www.douban.com';
var account_pop={open:function(o,e){e?referrer="?referrer="+encodeURIComponent(e):referrer="?referrer="+window.location.href;var n="",i="",t=382;"reg"===o?(n="用户注册",i="https://accounts.douban.com/popup/login?source=movie#popup_register",t=480):"login"===o&&(n="用户登录",i="https://accounts.douban.com/popup/login?source=movie");var r=document.location.protocol+"//"+document.location.hostname,a=dui.Dialog({width:478,title:n,height:t,cls:"account_pop",isHideTitle:!0,modal:!0,content:"<iframe scrolling='no' frameborder='0' width='478' height='"+t+"' src='"+i+"' name='"+r+"'></iframe>"},!0),c=a.node;if(c.undelegate(),c.delegate(".dui-dialog-close","click",function(){var o=$("body");o.find("#login_msk").hide(),o.find(".account_pop").remove()}),$(window).width()<478){var u="";"reg"===o?u=HTTPS_DB+"/accounts/register"+referrer:"login"===o&&(u=HTTPS_DB+"/accounts/login"+referrer),window.location.href=u}else a.open();$(window).bind("message",function(o){"https://accounts.douban.com"===o.originalEvent.origin&&(c.find("iframe").css("height",o.originalEvent.data),c.height(o.originalEvent.data),a.update())})}};Douban&&Douban.init_show_login&&(Douban.init_show_login=function(o){var e=$(o);e.click(function(){var o=e.data("ref")||"";return account_pop.open("login",o),!1})}),Do(function(){$("body").delegate(".pop_register","click",function(o){o.preventDefault();var e=$(this).data("ref")||"";return account_pop.open("reg",e),!1}),$("body").delegate(".pop_login","click",function(o){o.preventDefault();var e=$(this).data("ref")||"";return account_pop.open("login",e),!1})});
    </script>

    
    <!-- douban ad begin -->
    
    




    
<script type="text/javascript">
    (function (global) {
        var newNode = global.document.createElement('script'),
            existingNode = global.document.getElementsByTagName('script')[0],
            adSource = '//erebor.douban.com/',
            userId = '',
            browserId = 'K40KJl1DlXQ',
            criteria = '3:/',
            preview = '',
            debug = false,
            adSlots = ['dale_movie_homepage_top_large', 'dale_movie_home_top_right', 'dale_movie_home_top_right_ford', 'dale_movie_home_top_right2', 'dale_movie_home_side_top', 'dale_movie_home_main_top', 'dale_movie_home_bottom_right', 'dale_movie_homepage_bottom', 'movie_home_left_bottom', 'dale_movie_home_bottom_right_down', 'dale_movie_home_inner_bottom', 'dale_movie_home_download_bottom'];

        global.DoubanAdRequest = {src: adSource, uid: userId, bid: browserId, crtr: criteria, prv: preview, debug: debug};
        global.DoubanAdSlots = (global.DoubanAdSlots || []).concat(adSlots);

        newNode.setAttribute('type', 'text/javascript');
        newNode.setAttribute('src', 'https://img3.doubanio.com/f/adjs/cdc904d1376a43e44bbf399a0aff51973016cd77/ad.release.js');
        newNode.setAttribute('async', true);
        existingNode.parentNode.insertBefore(newNode, existingNode);
    })(this);
</script>










    <!-- douban ad end -->
    

    
    









<script type="text/javascript">
var _paq = _paq || [];
_paq.push(['trackPageView']);
_paq.push(['enableLinkTracking']);
(function() {
    var p=(('https:' == document.location.protocol) ? 'https' : 'http'), u=p+'://fundin.douban.com/';
    _paq.push(['setTrackerUrl', u+'piwik']);
    _paq.push(['setSiteId', '100001']);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript';
    g.defer=true;
    g.async=true;
    g.src=p+'://img3.doubanio.com/dae/fundin/piwik.js';
    s.parentNode.insertBefore(g,s);
})();
</script>

<script type="text/javascript">
var setMethodWithNs = function(namespace) {
  var ns = namespace ? namespace + '.' : ''
    , fn = function(string) {
        if(!ns) {return string}
        return ns + string
      }
  return fn
}

var gaWithNamespace = function(fn, namespace) {
  var method = setMethodWithNs(namespace)
  fn.call(this, method)
}

var _gaq = _gaq || []
  , accounts = [
      { id: 'UA-7019765-1', namespace: 'douban' }
    , { id: 'UA-7019765-19', namespace: '' }
    ]
  , gaInit = function(account) {
      gaWithNamespace(function(method) {
        gaInitFn.call(this, method, account)
      }, account.namespace)
    }
  , gaInitFn = function(method, account) {
      _gaq.push([method('_setAccount'), account.id]);
      _gaq.push([method('_setSampleRate'), '5']);

      
  _gaq.push([method('_addOrganic'), 'google', 'q'])
  _gaq.push([method('_addOrganic'), 'baidu', 'wd'])
  _gaq.push([method('_addOrganic'), 'soso', 'w'])
  _gaq.push([method('_addOrganic'), 'youdao', 'q'])
  _gaq.push([method('_addOrganic'), 'so.360.cn', 'q'])
  _gaq.push([method('_addOrganic'), 'sogou', 'query'])
  if (account.namespace) {
    _gaq.push([method('_addIgnoredOrganic'), '豆瓣'])
    _gaq.push([method('_addIgnoredOrganic'), 'douban'])
    _gaq.push([method('_addIgnoredOrganic'), '豆瓣网'])
    _gaq.push([method('_addIgnoredOrganic'), 'www.douban.com'])
  }

      if (account.namespace === 'douban') {
        _gaq.push([method('_setDomainName'), '.douban.com'])
      }

        _gaq.push([method('_setCustomVar'), 1, 'responsive_view_mode', 'desktop', 3])

        _gaq.push([method('_setCustomVar'), 2, 'login_status', '0', 2]);

      _gaq.push([method('_trackPageview')])
    }

for(var i = 0, l = accounts.length; i < l; i++) {
  var account = accounts[i]
  gaInit(account)
}


;(function() {
    var ga = document.createElement('script');
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    ga.setAttribute('async', 'true');
    document.documentElement.firstChild.appendChild(ga);
})()
</script>  

    <!-- brand25-docker-->

  <script>_SPLITTEST=''</script>
  @endsection
</body>

</html>


