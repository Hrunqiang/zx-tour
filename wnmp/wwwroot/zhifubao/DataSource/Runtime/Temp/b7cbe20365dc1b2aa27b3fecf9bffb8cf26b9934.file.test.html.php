<?php /* Smarty version Smarty-3.1.6, created on 2016-08-11 15:53:04
         compiled from "../DataSource/Tpl\Account\test.html" */ ?>
<?php /*%%SmartyHeaderCode:2351257ac2eaf3342d8-75040015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7cbe20365dc1b2aa27b3fecf9bffb8cf26b9934' => 
    array (
      0 => '../DataSource/Tpl\\Account\\test.html',
      1 => 1470901983,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2351257ac2eaf3342d8-75040015',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57ac2eaf389b0',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ac2eaf389b0')) {function content_57ac2eaf389b0($_smarty_tpl) {?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <title>无标题</title>
</head>
<body>
ee
<script type="text/javascript">
 var BNJSReady = function (readyCallback) {
    if(readyCallback && typeof readyCallback == 'function'){  
        if(window.BNJS && typeof window.BNJS == 'object' && BNJS._isAllReady){
                 readyCallback();               
        }else{
             document.addEventListener('BNJSReady', function() {
                   readyCallback();
             }, false)
        }
    }
};   
BNJSReady(function(){
    //调用login方法, 默认是短信登录
    BNJS.account.login({
        onSuccess: function(){
             // 登录成功，跳转token授权接口页
             // 以下跳转链接只需改动请求参数即可，appId赋值请开发者进入管理中心查看应用的APP
             // ID，tpUrl需赋值为用户登录成功后期望跳转的URL，缺省为业务方主站URL。
            location.href = 'http://u.nuomi.com/platform/userinfo/tokenhandler/getusertoken?appId=10019&tpUrl=';
         },
         onFail: function(res){
             // 登录失败，业务方自行处理
             alert('登陆失败！' + res.errmsg);
         }
    });
});
</script>
</body>
</html><?php }} ?>