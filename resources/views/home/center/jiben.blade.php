@extends('layouts.home.center.default')
@section('title')
个人中心
@endsection
@section('content')
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
      <li><a href="/home/jiben" class="tab_nav_li_background">修改基本信息</a></li>
      <li><a href="/home/mima">修改密码</a></li>
      <li><a href="/home/touxiang" >修改头像</a></li>
      <li id="tab_nav_li_5"><a href="/home/rongyu">荣誉勋章</a></li>
  </ul>
  <div class="edit-film-main clearfix">
    <div class="choose-film-cover">
       <ul class="ul-user-edit">
     <form action="" method="post">
    <li>
      <div class="div-lbl">昵称</div>
      <div class="div-input">
        <div class="div-relative">
                     <input style="padding-left:5px;" type="text" class="txt-user-name" id="txt_user_name" name="txt_user_name" value="XiaoRan" maxlength="10"> 
        </div>
      </div> 
      <div class="clear"></div>
    </li>
    <li style="z-index:3; position:relative">
      <div class="div-lbl">性别</div>
      <div class="div-input">
        <div class="div-relative">
          <input type="text" id="txt_sex" name="txt_sex" class="txt-user-sex" value="2" readonly="">
          <img src="/ueditor/picture/arrow-down_1.jpg" class="img-arrow">
          <dl class="dl-input-select dl-sex-select hidden" style=""> 
            <dd>男</dd>
            <dd>女</dd>
          </dl>
        </div>
      </div>
      <div class="clear"></div>
    </li>
    <li style="z-index:3; position:relative">
      <div class="div-lbl">生日</div>
      <div class="div-input">
        <div class="div-relative">
          <input type="text" id="txt_year" name="txt_year" class="txt-user-year" value="1997" readonly="">
          <img src="/ueditor/picture/arrow-down_1.jpg" class="img-arrow">
          <dl class="dl-input-select dl-year-select hidden" id="dl_year" style="height: 300px;"> 
          <dd>2018</dd><dd>2017</dd><dd>2016</dd><dd>2015</dd><dd>2014</dd><dd>2013</dd><dd>2012</dd><dd>2011</dd><dd>2010</dd><dd>2009</dd><dd>2008</dd><dd>2007</dd><dd>2006</dd><dd>2005</dd><dd>2004</dd><dd>2003</dd><dd>2002</dd><dd>2001</dd><dd>2000</dd><dd>1999</dd><dd>1998</dd><dd>1997</dd><dd>1996</dd><dd>1995</dd><dd>1994</dd><dd>1993</dd><dd>1992</dd><dd>1991</dd><dd>1990</dd><dd>1989</dd><dd>1988</dd><dd>1987</dd><dd>1986</dd><dd>1985</dd><dd>1984</dd><dd>1983</dd><dd>1982</dd><dd>1981</dd><dd>1980</dd><dd>1979</dd><dd>1978</dd><dd>1977</dd><dd>1976</dd><dd>1975</dd><dd>1974</dd><dd>1973</dd><dd>1972</dd><dd>1971</dd><dd>1970</dd></dl>
        </div>
        <div class="div-relative">
          <input type="text" id="txt_month" name="txt_month" class="txt-user-month" value="12" readonly="">
          <img src="/ueditor/picture/arrow-down_1.jpg" class="img-arrow">
          <dl class="dl-input-select dl-month-select hidden" id="dl_month" style=""> 
          <dd>1</dd><dd>2</dd><dd>3</dd><dd>4</dd><dd>5</dd><dd>6</dd><dd>7</dd><dd>8</dd><dd>9</dd><dd>10</dd><dd>11</dd><dd>12</dd></dl>
        </div>
        <div class="div-relative">
          <input type="text" id="txt_day" name="txt_day" class="txt-user-day" value="4" readonly="">
          <img src="/ueditor/picture/arrow-down_1.jpg" class="img-arrow">
          <dl class="dl-input-select dl-day-select hidden" id="dl_day" style="height: 300px;"> 
          <dd>1</dd><dd>2</dd><dd>3</dd><dd>4</dd><dd>5</dd><dd>6</dd><dd>7</dd><dd>8</dd><dd>9</dd><dd>10</dd><dd>11</dd><dd>12</dd><dd>13</dd><dd>14</dd><dd>15</dd><dd>16</dd><dd>17</dd><dd>18</dd><dd>19</dd><dd>20</dd><dd>21</dd><dd>22</dd><dd>23</dd><dd>24</dd><dd>25</dd><dd>26</dd><dd>27</dd><dd>28</dd><dd>29</dd><dd>30</dd><dd>31</dd></dl>
        </div>
      </div>
      <div class="clear"></div>
    </li>
    <li>
      <div class="div-lbl">真实姓名</div> 
      <div class="div-input">
        <div class="div-relative">
                     <input style="padding-left:5px;" type="text" class="txt-user-name" id="txt_real_name" name="txt_real_name" value="赵宇轩" maxlength="11"> 
        </div>
      </div> 
      <div class="clear"></div>
    </li>
    <li>
      <div class="div-lbl">手机</div>
      <div class="div-input">
        <div class="div-relative">
                     <input style="padding-left:5px;" type="text" class="txt-user-name" id="txt_mobile" name="txt_mobile" value="17649804127" maxlength="11"> 
        </div>
      </div> 
      <div class="clear"></div>
    </li>
    <li style="z-index:2; position:relative">
      <div class="div-lbl">所在地</div>
      <div class="div-input">
        <div class="div-relative">
          <input type="text" id="txt_prov" name="txt_prov" class="txt-user-pro" value="北京市" readonly="">
          <img src="/ueditor/picture/arrow-down_1.jpg" class="img-arrow">
          <dl class="dl-input-select dl-pro-select hidden" id="dl_prov" style="height: 300px;"> 
          <dd selected="selected" index="0">北京市</dd><dd index="1">天津市</dd><dd index="2">上海市</dd><dd index="3">重庆市</dd><dd index="4">河北省</dd><dd index="5">山西省</dd><dd index="6">台湾省</dd><dd index="7">辽宁省</dd><dd index="8">吉林省</dd><dd index="9">黑龙江省</dd><dd index="10">江苏省</dd><dd index="11">浙江省</dd><dd index="12">安徽省</dd><dd index="13">福建省</dd><dd index="14">江西省</dd><dd index="15">山东省</dd><dd index="16">河南省</dd><dd index="17">湖北省</dd><dd index="18">湖南省</dd><dd index="19">广东省</dd><dd index="20">甘肃省</dd><dd index="21">四川省</dd><dd index="22">贵州省</dd><dd index="23">海南省</dd><dd index="24">云南省</dd><dd index="25">青海省</dd><dd index="26">陕西省</dd><dd index="27">广西壮族自治区</dd><dd index="28">西藏自治区</dd><dd index="29">宁夏回族自治区</dd></dl>
        </div>

        <div class="div-relative">
          <input type="text" id="txt_city" name="txt_city" class="txt-user-city" value="北京市" readonly="">
          <img src="/ueditor/picture/arrow-down_1.jpg" class="img-arrow">
          <dl class="dl-input-select dl-city-select hidden" id="dl_city" style=""><dd>北京市</dd></dl>
        </div>
      </div>
      <div class="clear"></div>
    </li>
    <li>
      <div class="div-lbl">收货地址</div>
      <div class="div-input">
        <div class="div-relative">
                     <input style="padding-left:5px;width:300px;" type="text" class="txt-user-name" id="txt_address" name="txt_address" value="" maxlength="100"> 
        </div>
      </div> 
      <div class="clear"></div>
    </li>
    <li>
      <div class="div-lbl">邮编</div>
      <div class="div-input">
        <div class="div-relative">
                     <input style="padding-left:5px;" type="text" class="txt-user-name" id="txt_postcode" name="txt_postcode" value="" maxlength="6"> 
        </div>
      </div> 
      <div class="clear"></div>
    </li>
  </form></ul>
  <p>
      <input name="input" type="button" class="finish-btn" value="完成" id="btn_userinfo_update">
    </p>
  <input type="hidden" name="__hash__" value="6e99b55fe96616606c0f486f4fde5343_46f136198fc2f94fb9345d1bab974b24">
    </div>
  </div> 
</div>

@endsection