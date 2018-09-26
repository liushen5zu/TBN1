@extends('home.center.myCenter')
@section('content')

<div class="u_left">
            <div class="write_m">
                <dl>
                    <dt>
                         <p><img src="{{Session('image')}}" width="87" height="87"></p>
                    </dt>
                    <dd class="w_line11" style="line-height:24px;">
                       <p style="margin-left:40px">欢迎您，</p> 
                       <p style="margin-left:40px">您的账户余额：0 元    您可以 <a href="#" style="color:#0a8cd2;">申请提现</a> 或者 <a href="http://www.51oscar.com/zhongchou.html" style="color:#0a8cd2;">支持项目</a></p>                  
                    </dd>
                </dl>
          </div>
           <div style="clear:both; overflow:hidden;"></div> 
            <div class="box_title" style="margin-top:20px;">
                    <div class="title_left">
                        <a href="#" class="a_cur">发起的项目</a>
                        <a href="/personal/mySupport">支持的项目》</a>
                    </div>
             </div>
          
            <div class="discuss_box">
             <table border="0" style="width:100%; border:none; color:#423009;" class="addtable">
                  <tr>
                    <th width="39%">项目名称</th>
                    <th width="19%">已支持资金</th>
                    <th width="14%">剩余天数</th>
                    <th width="13%">状态</th>
                    <th width="15%">操作</th>
                  </tr>
                              </table>     
             <div class="pagination">
                       
             </div>    
            </div>
            
            
        </div>
        @endsection