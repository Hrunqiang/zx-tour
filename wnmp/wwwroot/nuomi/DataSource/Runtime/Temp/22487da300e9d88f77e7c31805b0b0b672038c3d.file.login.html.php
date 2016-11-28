<?php /* Smarty version Smarty-3.1.6, created on 2016-11-23 20:57:40
         compiled from "../DataSource/Tpl\Account\login.html" */ ?>
<?php /*%%SmartyHeaderCode:291005832be1a3cda04-17687567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22487da300e9d88f77e7c31805b0b0b672038c3d' => 
    array (
      0 => '../DataSource/Tpl\\Account\\login.html',
      1 => 1479905794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '291005832be1a3cda04-17687567',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5832be1a4228a',
  'variables' => 
  array (
    'isnuomi' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5832be1a4228a')) {function content_5832be1a4228a($_smarty_tpl) {?><?php if (!session('SESSION_ZX_AUTHID')){?>
	<?php if ($_smarty_tpl->tpl_vars['isnuomi']->value){?>
	<script type="text/javascript">
	// var BNJSReady = function (readyCallback) {
	//     if(readyCallback && typeof readyCallback == 'function'){  
	//         if(window.BNJS && typeof window.BNJS == 'object' && BNJS._isAllReady){
	//                  readyCallback();               
	//         }else{
	//              document.addEventListener('BNJSReady', function() {
	//                    readyCallback();
	//              }, false)
	//         }
	//     }
	// };   
	// BNJSReady(function(){
	//     //调用login方法, 默认是短信登录
	//     BNJS.account.login({
	//         onSuccess: function(){
	//              // 登录成功，跳转token授权接口页
	//              // 以下跳转链接只需改动请求参数即可，appId赋值请开发者进入管理中心查看应用的APP
	//              // ID，tpUrl需赋值为用户登录成功后期望跳转的URL，缺省为业务方主站URL。
	//             var url = encodeURIComponent("http://nuomi.zx-tour.com/Account/test");
	//            // location.href = 'http://nmplustest.nuomi.com/platform/userinfo/tokenhandler/getusertoken?appId=10020&tpUrl='+url;
	//             location.href = 'http://u.nuomi.com/platform/userinfo/tokenhandler/getusertoken?appId=10020&tpUrl='+url;
	//          },
	//          onFail: function(res){
	//             // 登录失败，业务方自行处理
	//             alert('登陆失败！' + res.errmsg);
	//             location.href = "/";
	//          }
	//     });
	// });
	var url = encodeURIComponent("http://u.nuomi.com/redirect?appId=10020&tpUrl=http://nuomi.zx-tour.com/Account/test&needLogin=1");
	location.href = "bainuo://component?url="+url;
	</script>
	<?php }else{ ?>
	<script>
	var url = encodeURIComponent("http://192.168.1.112:8090/Account/test");
	//location.href = 'http://u.nuomi.com/platform/h5login?tp_id=134&app_id=10020&from='+url;
	location.href = "http://u.nuomi.com/redirect?appId=10020&needLogin=1&tpUrl="+url;
	</script>
	<?php }?>
<?php }?><?php }} ?>