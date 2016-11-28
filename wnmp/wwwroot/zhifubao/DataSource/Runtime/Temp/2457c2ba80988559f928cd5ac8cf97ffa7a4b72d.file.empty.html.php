<?php /* Smarty version Smarty-3.1.6, created on 2016-11-14 13:34:00
         compiled from "../DataSource/Tpl\User\empty.html" */ ?>
<?php /*%%SmartyHeaderCode:2718257cd1467e2ed83-54989251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2457c2ba80988559f928cd5ac8cf97ffa7a4b72d' => 
    array (
      0 => '../DataSource/Tpl\\User\\empty.html',
      1 => 1479101330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2718257cd1467e2ed83-54989251',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57cd1467e6e55',
  'variables' => 
  array (
    'empty' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57cd1467e6e55')) {function content_57cd1467e6e55($_smarty_tpl) {?><style>
.empty{width: 70%;}
.empty .emptyImg{width: 50%;margin: 0 auto 12px;}
.empty .emptyImg>img{width: 100%;}
.empty>p{text-align: center;}
/*////////////////////////////////////新加样式//////////////////////////////////*/
.empty p{font-size: 1.142857rem;color: #888888;}
.empty p a{color: #ff2244;}
</style>
<div class="center_cell empty">
	<div class="emptyImg"><img src="/static/images/order_empty.png" alt=""></div>
    <p><?php echo $_smarty_tpl->tpl_vars['empty']->value[0];?>
 <a href="/"><?php echo $_smarty_tpl->tpl_vars['empty']->value[1];?>
</a></p>
</div><?php }} ?>