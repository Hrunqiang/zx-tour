<?php /* Smarty version Smarty-3.1.6, created on 2015-11-10 11:05:27
         compiled from "../uducy_admin/Tpl\Login\message.html" */ ?>
<?php /*%%SmartyHeaderCode:2255556415ef7bb5109-57280007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ced35ecd177c923fb8bac8e2d7bf2d8cc3821df' => 
    array (
      0 => '../uducy_admin/Tpl\\Login\\message.html',
      1 => 1444821716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2255556415ef7bb5109-57280007',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'url_page' => 0,
    'stop_loop' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56415ef7bfcf3',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56415ef7bfcf3')) {function content_56415ef7bfcf3($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>网址跳转中……</title>
<link href="./static/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>







<div class="success" style="color:red">
                    
                    <p>&nbsp;</p>
                    <p><strong><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
 <span id="seconds" style="color:#f60;">2</span>秒后自动返回</strong>
                  </p>
                    <p><a href="<?php echo $_smarty_tpl->tpl_vars['url_page']->value;?>
" id="url">如果您的浏览器没有自动跳转，请点击这里！ </a>
                    </p>
                    <p>&nbsp;</p>
                
              </div>
              
              
<?php if ($_smarty_tpl->tpl_vars['stop_loop']->value!=1){?>
<script type="text/javascript">

var i = 2;
var reTime = setInterval(function(){
	i = i-1;
	if(i<0){
		
		window.location.href= '<?php echo $_smarty_tpl->tpl_vars['url_page']->value;?>
'
		window.clearInterval(reTime);
		return;
		
	}
	document.getElementById("seconds").innerHTML = i;
},1000);

</script>
<?php }?>
</body>

</html>
<?php }} ?>