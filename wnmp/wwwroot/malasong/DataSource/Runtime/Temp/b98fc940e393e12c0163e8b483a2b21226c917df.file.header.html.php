<?php /* Smarty version Smarty-3.1.6, created on 2016-11-04 16:30:57
         compiled from "../DataSource/Tpl\Comon\header.html" */ ?>
<?php /*%%SmartyHeaderCode:23098561f92167a71a3-91085733%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b98fc940e393e12c0163e8b483a2b21226c917df' => 
    array (
      0 => '../DataSource/Tpl\\Comon\\header.html',
      1 => 1478247133,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23098561f92167a71a3-91085733',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_561f92167afc6',
  'variables' => 
  array (
    'tilte' => 0,
    'index' => 0,
    'npa' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561f92167afc6')) {function content_561f92167afc6($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title><?php echo $_smarty_tpl->tpl_vars['tilte']->value;?>
</title>
	<script src="/static/js/jquery.js"></script>
	<script>	
	<?php if ($_smarty_tpl->tpl_vars['index']->value=="login"){?>
    	var loginauth = true;
    <?php }else{ ?>
    	var loginauth = false;
    <?php }?>
	</script>
	<script src="/static/js/main.js"></script>
	<link rel="stylesheet" type="text/css" href="/static/css/base.css">
</head>
<body>
<?php if ($_smarty_tpl->tpl_vars['index']->value=="index"){?>
<div id="header_focus_box" class="section sectionpage">
<?php }else{ ?>
<div id="header_box" class="section">
<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['index']->value){?>
	<div id="header_focus_word" class="section_center">
		<div id="qrcode_index"><img src="/static/images/2017/qrcode_for_gh_9806b9785e2e_344.jpg"></div>
	</div>
	
	<div class="focus-item" id="focus_item"><ul id="focus_item_ul"></ul></div>
	<?php }else{ ?>
	<div id="header_center" class="section_center">
		<p id="header_center_npa">
			<span><?php echo $_smarty_tpl->tpl_vars['npa']->value['tab'];?>
</span>　>　<?php echo $_smarty_tpl->tpl_vars['npa']->value['mtab'];?>

		</p>
	</div>
	<?php }?>	
	<?php echo $_smarty_tpl->getSubTemplate ('Comon/nav.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<!-- <div id='login_cover_layer' class='coverlayer'>
	<div id="login_dialog">
		<span class="coverlayer_closed" > -->
			<!--[if lt IE 9]><span>关闭</span><![endif]-->
		<!-- </span>
		<form action="/Account/login" method="post" id="login_form">
			<h1>登录</h1>
			<p>用户名：</p>
			<p class='input_p'>
				<input type="text" name="account" id="login_account_input" autocomplete="off"/>
			</p>
			<p>密码：</p>
			<p class='input_p'>
				<input type="password" name="pwd" id="login_pwd_input"/>
			</p>
			<p>验证码：</p>
			<p class='input_c'>
				<input type="text" name="code" id="login_code_input"/>
				<img class="code_img" src="/Account/verify" id="login_code_img" onclick="this.src=this.src+'?'+Math.random()" alt="">
				<a class="changeCode" id="login_changeCode">换一张</a>
			</p>
			<p class="error_p" id="login_error"></p>
			<p class="input_s">
				<input id="login_submit" class="btn" type="button" value="登录" />
			</p>
			<p class='input_r'>
				<a href="/Account/register">注册</a> | <a href="/Account/forget">忘记密码</a>
			</p>
		</form>
	</div> -->
</div><?php }} ?>