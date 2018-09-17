@extends('layouts.home.center.default')
@section('title')
个人中心
@endsection
@section('content')

<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="setting-content clearfix">
   <div class="crumbs_nav00">
     <div class="crumbs_nav01">您的位置</div>
     <div class="crumbs_nav03">个人中心</div> 
     <div class="crumbs_nav02"></div>
     <div class="crumbs_nav03">帐号设置</div>
     <div class="crumbs_nav04"></div>
   </div>
   
  <!--<h1 class="edit-title-h1">帐号设置</h1>-->
    <ul class="tab_nav">
      <li id="tab_nav_li_1"><a href="/home/center">同步分享设置</a></li>
      <li><a href="/home/jiben">修改基本信息</a></li>
      <li><a href="/home/mima" class="tab_nav_li_background">修改密码</a></li>
      <li><a href="/home/touxiang" >修改头像</a></li>
      <li id="tab_nav_li_5"><a href="/home/rongyu">荣誉勋章</a></li>
    </ul>
   <div class="div_page_password">
    <form action="/home/password" id="frm_change_password" method="get">
          <table border="1">
            <tr>
              <td class="input-text">旧密码</td>
              <td width=""><input type="text"  name="old_password" id="txt_old_password" type="password" class="choose-film-input">
                  <span class="remind"></span>
              </td>
            </tr>
            <tr>
              <td class="input-text">新密码</td>
              <td><input type="text" name="password" id="txt_old_password" type="password" class="choose-film-input">
                  <span class="remind"></span>
              </td>
            </tr>
            <tr>
              <td class="input-text">确认密码</td>
              <td><input type="text"   id="txt_old_password" type="password" class="choose-film-input">   <span class="remind"></span>
              </td>
            </tr>
        </table>
    <p class="btn-p">
      <button name="btn_change_password" id="btn_change_password"  class="edit-btn" style="margin: 0px 0 30px 130px;">修改密码</button>
    </p>
    {{csrf_field()}} 
 </form>
</div>
  <script type="text/javascript">
    $('input[name=old_password]').focus(function(){
      //边框颜色
      //提示语显示
      $(this).next().html('输入原密码').show();
    }).blur(function(){
      //移出激活状态的class active

      $(this).removeClass('active');
      //正则判断
      var v = $(this).val();
      //声明正则
      var reg = /^\w{4,12}$/;
      //判断
      if(!reg.test(v)){
        //边框
        $(this).addClass('error');
        //文字提醒
        $(this).next().html('<span style="color:red">请输入正确的密码</span>').show();
        CUSER = false;
      }else{
        var input = $(this);

        $.ajaxSetup({
          headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }})

         $.ajax({  
          url: '/ajax/password',
          type: 'post',
          data: {old_password: v},
          success: function(data){
            if(data != '1'){
              //边框
              input.addClass('error');
              //文字提醒
              input.next().html('<span style="color:red">与原密码不符</span>').show();
            }else{
              input.removeClass('error');
              input.next().html('<span style="color:green;font-size:16px;font-weight:bold">&nbsp;&nbsp;√</span>').show();
            }
          },
          async: false
        })
      }
    })

  </script>

    
</div>


@endsection