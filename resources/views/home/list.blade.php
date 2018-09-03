@extends('home.default.home')

@section('content')
<main class="r_box">
    @foreach($article as $v)
    <li><i><a href=""><img src="/images/1.jpg"></a></i>
      <h3><a href="/{{$v->id}}.html">{{$v->title}}</a></h3>
      <p>{{$v->intro}}</p>
    </li>
    @endforeach
    <div class="pagelist"><a class="allpage"><b>99</b></a>&nbsp;&nbsp;<a href="#" class="curPage">1</a>&nbsp;&nbsp;<a href="#" onclick="page(2)">2</a>&nbsp;&nbsp;<a href="#" onclick="page(3)">3</a>&nbsp;&nbsp;<a href="#" onclick="page(4)">4</a>&nbsp;&nbsp;<a href="#" onclick="page(5)">5</a>&nbsp;&nbsp;<a href="#" onclick="page(6)">6</a>&nbsp;&nbsp;<a href="#" onclick="page(7)">7</a>&nbsp;&nbsp;<a href="#" onclick="page(8)">8</a>&nbsp;&nbsp;<a href="#" onclick="page(9)">9</a>&nbsp;&nbsp;<a href="#" onclick="page(2)">下一页</a></div>
  </main>

@endsection