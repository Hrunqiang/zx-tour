<?php /* Smarty version Smarty-3.1.6, created on 2016-01-01 14:15:37
         compiled from "../DataSource/Tpl\OnlineEnroll\phoneweb.html" */ ?>
<?php /*%%SmartyHeaderCode:24518568619893fa446-72423827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2cbd4915d3a3cf9e8df9521f9204eb5f4484c93' => 
    array (
      0 => '../DataSource/Tpl\\OnlineEnroll\\phoneweb.html',
      1 => 1450075658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24518568619893fa446-72423827',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tk' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5686198945081',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5686198945081')) {function content_5686198945081($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,height=device-height,user-scalable=yes,target-densitydpi=device-dpi,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
<title>线上半程马拉松成绩上传</title>
<style>
.free-upload{width:100%;text-align: center;}
.title{width:100%;text-align: center;font-size:2em;font-weight: bold;color:#01BFF1;margin-bottom:.2em;}
.line{width:95%;margin:0 auto;border-bottom:1px solid gray;}
.img{width:100%;text-align:center;margin-top:.5em;}
.img img{width:95%;margin:0 auto;}
.file {
    position: relative;
    display: inline-block;
    background: #FF9E01;
    border: 0px solid #99D3F5;
    border-radius: 4px;
    padding: 4px 12px;
    overflow: hidden;
    color: #fff;
    text-decoration: none;
    text-indent: 0;
    line-height: 2em;
	width:50%;
	height:2em;
}
.gray_bg{background-color: gray;}
.file input {
    position: absolute;
    font-size: 100px;
    right: 0;
    top: 0;
    opacity: 0;
}

.free-upload-photo{
	text-align: center;
	padding-top:1em;
}
#photo_loading{text-align: center;display:none;}
</style>
<script>
var tk = "<?php echo $_smarty_tpl->tpl_vars['tk']->value;?>
";
</script>
<script  src="/static/js/jquery.js"></script>
</head>
<body>
<div class="free-upload">
    <div class="title"><span>Marathon</span></div>
    <div class="line"></div>
    <div class="img" id="photo_img"><img src="/static/images/mobile_pic.jpg"/></div>
    <div class="free-upload-photo">
        	<a class="file" >
            	<input type="file" id="photo" /><span>上传成绩截图</span>
            </a>
     </div>
    <p id="photo_loading" >正在上传...</p>
</div>
<script  src="/static/js/mobile_upload.js"></script>
</body>
</html><?php }} ?>