var destoon_userid = 0;
var destoon_username = '';
var destoon_message = '0';
var destoon_chat = '0';
var destoon_stip = '';
var destoon_member = '';
var destoon_search_history = '您关注过：';
destoon_member += '<ul><li class="li_f">您好，欢迎来到会商宝</li><li><a href="http://www.huishangbao.com/member/register.php" rel="nofollow">免费注册</a></li><li><a href="http://www.huishangbao.com/member/login.php" rel="nofollow">会员登录</a></li><li class="li_l"><a href="http://www.huishangbao.com/member/send.php" rel="nofollow">忘记密码?</a></li></ul>';
try{Dd('destoon_member').innerHTML=destoon_member;}catch(e){}
var destoon_cart = substr_count(get_cookie('cart'), ',');
if(destoon_cart > 0) Dd('destoon_cart').innerHTML='<strong class="f_red">'+destoon_cart+'</strong>';
if(destoon_stip) Dd('tb_c').innerHTML = destoon_stip;
window.setInterval('PushNew()',600*1000);