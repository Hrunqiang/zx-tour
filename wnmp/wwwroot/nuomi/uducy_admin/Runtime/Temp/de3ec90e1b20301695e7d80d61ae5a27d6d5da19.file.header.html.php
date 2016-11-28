<?php /* Smarty version Smarty-3.1.6, created on 2016-03-01 10:21:22
         compiled from "../uducy_admin/Tpl\Login\header.html" */ ?>
<?php /*%%SmartyHeaderCode:1933956d4fca2320f64-04763151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de3ec90e1b20301695e7d80d61ae5a27d6d5da19' => 
    array (
      0 => '../uducy_admin/Tpl\\Login\\header.html',
      1 => 1456740760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1933956d4fca2320f64-04763151',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'charset' => 0,
    'npa' => 0,
    'cp' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56d4fca235cc0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d4fca235cc0')) {function content_56d4fca235cc0($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo (($tmp = @$_smarty_tpl->tpl_vars['charset']->value)===null||$tmp==='' ? 'utf-8' : $tmp);?>
" />
<title></title>
<link href="/static/css/style.css" rel="stylesheet" type="text/css" />
<!-- <script type="text/javascript" src="static/js/jquery-1.3.2.min.js"></script> -->
<script type="text/javascript" src="static/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="static/js/common.js"></script>
</head>
<body id="main_page">
		<div id="nav" style="display:none;">
		<dl>
		<dt>当前位置：</dt>
            <?php  $_smarty_tpl->tpl_vars['cp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cp']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['npa']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cp']->key => $_smarty_tpl->tpl_vars['cp']->value){
$_smarty_tpl->tpl_vars['cp']->_loop = true;
?>
		    <dd class="link"><?php echo $_smarty_tpl->tpl_vars['cp']->value;?>
</dd><!--导航-->
            <?php }
if (!$_smarty_tpl->tpl_vars['cp']->_loop) {
?>
		    <dd class="link">管理首页</dd><!--导航-->
            <?php } ?>
		</dl>
		</div>

<script type="text/javascript">
	if ($.browser.msie) {
		document.execCommand("BackgroundImageCache", false, true);
	}
	var nav = document.getElementById("nav");
	var pnav = window.parent.document.getElementById("nav")
	pnav.innerHTML = nav.innerHTML;

</script>

<?php if ($_smarty_tpl->tpl_vars['error']->value){?><?php if ($_smarty_tpl->tpl_vars['error']->value){?><div class="con" style="padding:7px 5px 2px 5px; font-size:13px; color:#F33;"><div class="tips mb5" style=" background:url(static/images/infor-ico.gif) no-repeat 15px center #FFF8CC; padding-left:45px"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div></div><?php }?><?php }?>
<?php }} ?>