<aside class="l_box">
    <div class="search">
      <form action="/e/search/index.php" method="post" name="searchform" id="searchform">
        <input name="keyboard" id="keyboard" class="input_text" value="请输入关键字词" style="color: rgb(153, 153, 153);" onfocus="if(value=='请输入关键字词'){this.style.color='#000';value=''}" onblur="if(value==''){this.style.color='#999';value='请输入关键字词'}" type="text">
        <input name="show" value="title" type="hidden">
        <input name="tempid" value="1" type="hidden">
        <input name="tbname" value="news" type="hidden">
        <input name="Submit" class="input_submit" value="搜索" type="submit">
      </form>
    </div>
    <div class="fenlei">
      <h2>文章分类</h2>
      <ul>

        @foreach($cate as $v)
        <li><a href="/home/articles?cate_id={{$v->id}}">{{$v->name}}({{$v->articles()->count()}})</a></li>
        @endforeach
      </ul>
    </div>
    <div class="tuijian">
      <h2>站长推荐</h2>
      <ul>
        @foreach($tuijian as $k => $v)
        <li><a href="/{{$v->id}}.html">{{$v->title}}</a></li>
        @endforeach
      </ul>
    </div>
    <div class="tuijian">
      <h2>点击排行</h2>
      <ul>
        @foreach($paihang as $v)
        <li><a href="/{{$v->id}}.html">{{$v->title}}</a></li>
        @endforeach
      </ul>
    </div>
    <div class="cloud">
      <h2>标签云</h2>
      <ul>
      @foreach($tag as $k=>$v)
        <a href="/home/articles?tag_id={{$v->id}}">{{$v->name}}</a> 
      @endforeach
      </ul>
    </div>
    <div class="guanzhu">
      <h2>关注我 么么哒</h2>
      <ul>
        <img src="/images/1.jpg">
      </ul>
    </div>
  </aside>