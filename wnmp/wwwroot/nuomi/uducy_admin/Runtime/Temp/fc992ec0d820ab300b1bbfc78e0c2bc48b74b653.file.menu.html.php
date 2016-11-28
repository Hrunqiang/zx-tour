<?php /* Smarty version Smarty-3.1.6, created on 2016-03-01 10:21:21
         compiled from "../uducy_admin/Tpl\Login\menu.html" */ ?>
<?php /*%%SmartyHeaderCode:2789156d4fca1eb1091-52822444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc992ec0d820ab300b1bbfc78e0c2bc48b74b653' => 
    array (
      0 => '../uducy_admin/Tpl\\Login\\menu.html',
      1 => 1456740760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2789156d4fca1eb1091-52822444',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'charset' => 0,
    'data' => 0,
    'showWelcome' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56d4fca1f2616',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d4fca1f2616')) {function content_56d4fca1f2616($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo (($tmp = @$_smarty_tpl->tpl_vars['charset']->value)===null||$tmp==='' ? 'utf-8' : $tmp);?>
" />
<title></title>
<link href="static/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="static/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="static/js/sidebar.js"></script>
</head>
<body id="sidebar_page">
<div class="wrap">
    <div class="cotainer">
        <div id="sidebar">
        <div class="con">
        <!--公用-->
        <h2>管理首页</h2>
        <p class="userpanel">       
        用户名：<?php echo @USERNAME;?>
<br />
        级　别：<?php if (1==@If_manager){?>超级管理员<?php }else{ ?>管理员<?php }?><br />
        <a href="./?s=member&a=member_password&name=<?php echo @USERNAME;?>
" target='main'>密 码</a> |
        <a href="./?s=index&a=welcome" target='main'>主 页</a>|
        <a href="./?s=login&a=logout" target="_parent">退 出</a>
        </p>
        <?php echo $_smarty_tpl->tpl_vars['data']->value;?>

        </div><!--/ .con-->
        </div><!--/ sidebar-->
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
    <?php if ($_smarty_tpl->tpl_vars['showWelcome']->value==0){?>
    var aArr = $(".con").find("li:first a");
    if (aArr)
    {
        aArr.addClass("active");
        $('#main', window.parent.document).attr('src', aArr.attr('href'));
    }
    <?php }?>
})
</script>
</body>
</html>
<?php }} ?>