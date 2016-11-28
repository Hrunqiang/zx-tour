<?php /* Smarty version Smarty-3.1.6, created on 2015-12-09 16:50:50
         compiled from "../uducy_admin/Tpl\Index\admin.html" */ ?>
<?php /*%%SmartyHeaderCode:50875640cd09d6a408-87665640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8806f2ee5391bb9a7563b1d1df2d82566e46a8ca' => 
    array (
      0 => '../uducy_admin/Tpl\\Index\\admin.html',
      1 => 1449651045,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50875640cd09d6a408-87665640',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5640cd09dd65b',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5640cd09dd65b')) {function content_5640cd09dd65b($_smarty_tpl) {?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>管理中心-网址导航建站系统</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="www.114la.com" name="Copyright" />
<style type="text/css">
html{ overflow:hidden;}
table,td,th, body,dt,dd,dl{ margin:0; padding:0; border:none;}
#nav { background: repeat-x url(./static/images/repeat.gif) 0 -209px ; font-size:12px; position:static; top:0; left:0;height:32px; line-height:26px; padding: 0 10px; }
#nav a { color:#666; text-decoration:none; }
#nav a:hover { color:#f60; text-decoration:underline;}
#nav dt, #nav dd { float:left;}
#nav dd { color:#999;}
#nav dt,#nav dd.link {padding-right:16px; background:url(./static/images/images.gif) no-repeat right -204px;}
</style>

</head>
<body scroll="no" onLoad="init()"><!-- onLoad="init();"-->
<table cellpadding="0" cellspacing="0" width="100%" height="100%">
    <tr>
        <td colspan="2" height="86"><iframe src="./?s=index&a=header" name="header" target="menu" width="100%" height="86" scrolling="no" frameborder="0"></iframe></td>
    </tr>
    <tr style="height:100%;">
        <td valign="top" rowspan="2" width="230"><iframe src="./?s=index&a=menu&showWelcome=1" name="menu" target="main" width="230" height="100%" scrolling="no" frameborder="0"></iframe></td>
        <td valign="top" width="" align="left">
        
        	<table  cellpadding="0" cellspacing="0" width="100%" height="100%">
                <tr>
                    <td valign="top" height="32">
                        <div id="nav">信息栏</div>
                    </td>
                </tr>
                <tr>
                    <td valign="top" width="100%"><iframe src="./?s=index&a=welcome" id="main" name="main" width="100%" height="100%"  frameborder="0" scrolling="yes" style="overflow:visible;"></iframe></td><!--  ?c=login&a=welcome  -->
                </tr>
            </table>
        
        </td>
    </tr>
</table>
<script type="text/javascript">
var init = function(){
	var nav = document.getElementById("nav");
	var main = document.getElementById("main");
	
		var mainDom;
		if(document.all){
			mainDom = main.contentWindow.document;
		}else {
			mainDom = main.contentDocument;
		}

		nav.innerHTML = mainDom.getElementById("nav").innerHTML;
}
</script>
</body>
</html><?php }} ?>