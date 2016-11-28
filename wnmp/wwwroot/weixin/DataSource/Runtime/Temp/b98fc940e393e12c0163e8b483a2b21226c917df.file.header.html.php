<?php /* Smarty version Smarty-3.1.6, created on 2016-11-10 14:45:36
         compiled from "../DataSource/Tpl\Comon\header.html" */ ?>
<?php /*%%SmartyHeaderCode:555958131577f289e1-76377057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b98fc940e393e12c0163e8b483a2b21226c917df' => 
    array (
      0 => '../DataSource/Tpl\\Comon\\header.html',
      1 => 1478760282,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '555958131577f289e1-76377057',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58131578012d2',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58131578012d2')) {function content_58131578012d2($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta name="Author" content="zx-tour" />
<meta name="Keywords" content="zx-tour,知行合逸,马拉松" />
<meta name="Description" content="" />
<meta name="format-detection" content="telephone=no" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no,minimal-ui" />
<link rel="stylesheet" href="/static/css/comon.css"/>
<link rel="stylesheet" href="/static/weui/css/weui.css"/>
<script src="/static/js/zepto.js"></script>
<script>
function isWeiXin(){ 
    var ua = window.navigator.userAgent.toLowerCase(); 
    if(ua.match(/MicroMessenger/i) == 'micromessenger'){ 
        return false; 
    }else{ 
        return false; 
    } 
} 
isWeiXin()&&function(){
	var login = "/Account/weixinlogin";
	 $.ajax({url:login,timeout : 3000, data:{},type : 'post', dataType:'json',async: false,
        success:function(data,status){
            if(data.msg != "ok"){
                window.location.href = "/weixin/touserauth?login=1";
            }
        }
    });
}();

var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?36264503ad9626a18f7f08c10d269782";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();

</script>
<script type="text/javascript" src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script src="/static/js/weixin.js"></script><?php }} ?>