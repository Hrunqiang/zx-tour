<?php /* Smarty version Smarty-3.1.6, created on 2016-06-28 13:43:10
         compiled from "../DataSource/Tpl\PayResult\index.html" */ ?>
<?php /*%%SmartyHeaderCode:25961576ce6808b29d2-51163571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc508b321ce992226b3ce6322228242f9112cc18' => 
    array (
      0 => '../DataSource/Tpl\\PayResult\\index.html',
      1 => 1467092584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25961576ce6808b29d2-51163571',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_576ce68090d8f',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_576ce68090d8f')) {function content_576ce68090d8f($_smarty_tpl) {?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no,minimal-ui" />
</head>
<body>
<input type="button" value="支付测试" onclick="pay()">
<script type="text/javascript" src="/static/js/jquery.js"></script>
<script> 
	function pay(){
		try{
		AlipayJSBridge.call("tradePay",{ tradeNO: "2016062821001004150297895214"
		}, function(result){

			for(var key in result){
				document.write(key+":"+result[key]+"<br>");
			}
			

		 });
		}catch(e){
			alert("请在支付宝里打开页面并完成支付！");
		}
	} 
</script> 
</body>
</html><?php }} ?>