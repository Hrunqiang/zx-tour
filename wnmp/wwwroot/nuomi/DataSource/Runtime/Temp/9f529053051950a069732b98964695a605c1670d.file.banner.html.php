<?php /* Smarty version Smarty-3.1.6, created on 2016-11-21 17:27:35
         compiled from "../DataSource/Tpl\Comon\banner.html" */ ?>
<?php /*%%SmartyHeaderCode:295605832be076ea231-31735179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f529053051950a069732b98964695a605c1670d' => 
    array (
      0 => '../DataSource/Tpl\\Comon\\banner.html',
      1 => 1477277229,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '295605832be076ea231-31735179',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'banner' => 0,
    'i' => 0,
    'm_banner' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5832be0774192',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5832be0774192')) {function content_5832be0774192($_smarty_tpl) {?><style>
.banner_pic{width: 100%;overflow: hidden;position: relative;background: #EFEEF4;display: none;}
.banner_pic .slider>.cell{float: left;}
.banner_pic .slider>.cell img{width: 100%;height: 100%;}
/*.banner_pic ul{position: absolute;bottom:10px;right:20px;}*/
.banner_pic ul{position: absolute;bottom:0.7142857142857143rem;left: 50%;-webkit-transform: translateX(-50%);-ms-transform: translateX(-50%);-moz-transform: translateX(-50%);}
.banner_pic ul li{float: left;width: 0.3571rem;height:0.3571rem;background: #efeef4;margin-left: 0.3571rem;border-radius: 50%;opacity: 0.45;}
.banner_pic ul li.curr{background: #efeef4;opacity: 1;}
.slider{-webkit-transform: translate3d(0px,0px,0);-moz-transform: translate3d(0,0,0);transform: translate3d(0,0,0);-ms-transform: translate3d(0,0,0);-webkit-backface-visibility: hidden;-moz-backface-visibility: hidden;-ms-backface-visibility: hidden;backface-visibility: hidden;-webkit-perspective: 1000;-moz-perspective: 1000;-ms-perspective: 1000;perspective: 1000;}
</style>
<?php if ($_smarty_tpl->tpl_vars['banner']->value){?>
<div class="banner_pic">
    <div class="slider">
    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
    	<div class='cell'><a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['n_url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['i']->value['n_img'];?>
" alt=""></a></div>
    <?php } ?>
    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['banner']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
    	<div class='cell'><a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['n_url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['i']->value['n_img'];?>
" alt=""></a></div>
    <?php } ?>
    </div>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['m_banner']->value){?>
<div class="banner_pic">
    <div class="slider">
    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['m_banner']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
    	<div class='cell'><a href="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" alt=""></a></div>
    <?php } ?>
    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['m_banner']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
    	<div class='cell'><a href="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" alt=""></a></div>
    <?php } ?>
    </div>
</div>
<?php }?><?php }} ?>