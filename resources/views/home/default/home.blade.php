<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>首页_杨青个人博客 - 一个站在web前端设计之路的女技术员个人博客网站</title>
<meta name="keywords" content="{{$setting->keywords}}}" />
<meta name="description" content="{{$setting->miaoshu}}" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/css/base.css" rel="stylesheet">
<link href="/css/index.css" rel="stylesheet">
<link href="/css/info.css" rel="stylesheet">
<link href="/css/m.css" rel="stylesheet">
<script src="/js/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/js/comm.js"></script>
<!--[if lt IE 9]>
<script src="js/modernizr.js"></script>
<![endif]-->
</head>
<body>


<!--  -->

@include('home.default._top')
<article>
  @include('home.default._left')

  @section('content')
 
  @show
</article>
<footer>
  <p>Design by <a href="http://www.yangqq.com" target="_blank">杨青个人博客</a> <a href="/">{{$setting->title}}</a></p>
</footer>
<a href="#" class="cd-top">Top</a>
</body>
</html>
