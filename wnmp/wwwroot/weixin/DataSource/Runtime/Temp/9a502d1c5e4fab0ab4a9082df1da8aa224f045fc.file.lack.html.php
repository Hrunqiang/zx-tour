<?php /* Smarty version Smarty-3.1.6, created on 2016-11-22 12:26:22
         compiled from "../DataSource/Tpl\User\lack.html" */ ?>
<?php /*%%SmartyHeaderCode:269095833bf702db887-35703150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a502d1c5e4fab0ab4a9082df1da8aa224f045fc' => 
    array (
      0 => '../DataSource/Tpl\\User\\lack.html',
      1 => 1479788778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '269095833bf702db887-35703150',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5833bf7032aa4',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5833bf7032aa4')) {function content_5833bf7032aa4($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Comon/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="/static/css/time.css">
<title>缺少信息</title>
<style type="text/css">
.weui_cells{margin-top: 0;}
.userinfo_head{padding-bottom: 0;margin-bottom: 0;background: none;padding: 0;}
	input::-webkit-input-placeholder{font-size: 1.1rem;color: #C9C9C9;} 
.msg_desc{font-size: 1rem;margin: 1.285714285714286rem 0;}
.msg_desc>i{width: 21rem;height: 8.57142857142857rem;background: blue}
.weui_btn{color: white!important;width: 11.89285714285714rem;height: 2.50000000000000rem;display: inline-block;line-height:2.50000000000000rem;background-color: #179B16!important;margin-top: 2.85714285714286rem;font-size: 1.21428571428571rem!important;}
</style>
<div class="wrap">
	<div class="weui_cells msg userinfo_head" style="text-align: center;">
		<p class="msg_desc icon_s"><i style="background: url(/static/images/lack_passId.png) no-repeat left center;background-size: 100%;"></i></p>
		<p style="font-size: 1rem;padding: 0 1.07142857142857rem;text-align: left;line-height: 1.42857142857143rem;color: black">请尽快提供护照号信息，您可以在我的赛事中点击“我的资料”完善</p>
	</div>
	<div class="btn_wrap" style="padding: 0 1.07142857142857rem">
		<a href="/index" class="weui_btn weui_btn_warn">稍晚填写</a><a href="/User/perfect" class="weui_btn weui_btn_warn" style="margin-left: 0.71428571428571rem">马上填写</a>
	</div>
	
</div>

<script src="/static/weui/js/weui.js"></script>
<script type="text/javascript" src="/static/js/iscroll.js?v=1.2"></script>
<script type="text/javascript" src="/static/js/date.js?v=1.2"></script>
<script type="text/javascript" src="/static/js/function.js?v=1.2"></script>
</body>
</html><?php }} ?>