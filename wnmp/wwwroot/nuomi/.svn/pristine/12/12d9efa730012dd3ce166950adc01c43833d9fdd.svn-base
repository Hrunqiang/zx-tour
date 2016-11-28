<?php /* Smarty version Smarty-3.1.6, created on 2016-03-01 10:21:21
         compiled from "../uducy_admin/Tpl\Login\top.html" */ ?>
<?php /*%%SmartyHeaderCode:258956d4fca1c42620-76225726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57597bbb6d8622d55764968f9c0d5da9649404ed' => 
    array (
      0 => '../uducy_admin/Tpl\\Login\\top.html',
      1 => 1456740760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '258956d4fca1c42620-76225726',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56d4fca1de522',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d4fca1de522')) {function content_56d4fca1de522($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="./static/css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="wrap">
    <div class="container">
        <div id="header">

            <div class="con">

            <div id="logo">
                <a href="./?s=login&a=welcome" title="悠德奇管理系统" target="main">悠德奇管理系统</a>
            </div>
            
            <div id="menu">
                    <div class="item">
                        <ul>
                        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['n']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['n']['index']++;
?>
                            <li class="index active" id="tab<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['n']['index'];?>
"><a href="./?s=index&a=menu&id=<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['n']['index'];?>
" id="item<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['n']['index'];?>
" target="menu" onclick="Tabmenu(document.getElementById('tab<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['n']['index'];?>
'),<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['n']['index'];?>
);"><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</a></li>                            
                        <?php } ?>
                        </ul>
                    </div>
                </div><!--/ menu-->
            </div><!--/ con-->
        </div><!--/ header-->
</div>
</div>
<script type="text/javascript">
function Tabmenu(obj,n){
	var Items = document.getElementById("menu").getElementsByTagName("li");
	for(var i= 0,len = Items.length;i<len;++i){
		if(Items[i].className !=="index"){
			Items[i].className = "index";
		}
		obj.className = "index active";
		obj.blur();
		location.hash = n;
	}
};
(function(){
var n = location.hash.replace("#","");
if(!n){ n = 0;}
var curitem = document.getElementById("tab"+n);
	Tabmenu(curitem,n);
})();
</script>
</body>
</html>
<?php }} ?>