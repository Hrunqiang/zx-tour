<?php /* Smarty version Smarty-3.1.6, created on 2016-05-30 10:26:21
         compiled from "../DataSource/Tpl\User\index.html" */ ?>
<?php /*%%SmartyHeaderCode:865057469b671dd920-34538269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d32262d50e0da179905b36b0234ffbb698bc462' => 
    array (
      0 => '../DataSource/Tpl\\User\\index.html',
      1 => 1464322436,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '865057469b671dd920-34538269',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57469b672765a',
  'variables' => 
  array (
    'needpay' => 0,
    'userstate' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57469b672765a')) {function content_57469b672765a($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Comon/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<title>我的赛事</title>
<style>
.user .user_macthinfo{padding:10px 0;}
.user .user_macthinfo>div{text-align: center;}
.user .user_macthinfo span{font-size: 20px;}
.user .user_top{}
.user .user_top .weui_cells{margin-top: 0;}
.weui_msg .weui_msg_desc{font-size: 0.85714rem;}
.weui_msg .weui_msg_desc a{padding: 0 0.28571rem 0 0.3057rem;}
/*//////////////////////////////////////新加样式*/
.weui_msg{position: absolute;bottom: 0;left: 0;right: 0;}
.weui_msg .weui_text_area{margin-bottom: 0.7142857rem ;}
.weui_cells{margin-top: 0px;}
#j_z_f {display: inline-block;height: 0.68rem;width: 1px;background: rgba(166,166,166,0.5);position: absolute;top: 23.5%;}
.wait_pay{position: absolute;right: 0;top: 0px; /*width: 5.642857rem;*/padding:0 0.25rem 0 0.25rem;height: 1.428571rem;line-height: 1.428571rem;font-size: 1rem;border: 1px solid #F75D00;text-align: center;border-radius: 6px;color: #F75D00;}
</style>
<div class="wrap user" >
	<div class="user_top">
		<?php echo $_smarty_tpl->getSubTemplate ('User/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<!-- <div class="user_macthinfo flexBox">
			<div class="flex_2">
				<p><span>0</span>场</p>
				<p>海外赛事</p>
			</div>
			<div class="flex_2">
				<p><span>0</span>场</p>
				<p>国内赛事</p>
			</div>
			<div class="flex_3">
				<p><span>03:00:00</span></p>
				<p>全马FB</p>
			</div>
		</div>
		<div class="weui_cells weui_cells_access">
		    <a class="weui_cell" href="javascript:;">
		        <div class="weui_cell_bd weui_cell_primary">
		            <p>累计542.1955公里，覆盖2个大洲，5个国家</p>
		        </div>
		        <div class="weui_cell_ft">
		        </div>
		    </a>
		</div> -->
	</div>
	<div class="weui_cells weui_cells_access">
	    <a class="weui_cell" href="/User/order">
	        <div class="weui_cell_bd weui_cell_primary" style="position: relative;">
	            <p>赛事订单</p>
	            <?php if ($_smarty_tpl->tpl_vars['needpay']->value>0){?>
	        	<p class="wait_pay">未支付订单</p>
	        <?php }?>
	        </div>
	        <div class="weui_cell_ft">
	        </div>
	    </a>
	    <a class="weui_cell" href="/User/userinfo">
	        <div class="weui_cell_bd weui_cell_primary" style="position: relative;">
	            <p>我的资料</p>
	            <?php if ($_smarty_tpl->tpl_vars['userstate']->value<4){?>
	      			<p class="wait_pay">完善资料</p>
	        	<?php }?>
	        </div>
	        <div class="weui_cell_ft">
	        </div>
	    </a>
	    <a class="weui_cell" href="/User/collection">
	        <div class="weui_cell_bd weui_cell_primary">
	            <p>想跑的赛事</p>
	        </div>
	        <div class="weui_cell_ft">
	        </div>
	    </a>
	    <a class="weui_cell" href="http://www.zx-tour.com/">
	        <div class="weui_cell_bd weui_cell_primary">
	            <p>关于</p>
	        </div>
	        <div class="weui_cell_ft">
	        </div>
	    </a>
	</div>

	<div class="footer  weui_msg">
        <div class="weui_text_area">
            <p class="weui_msg_desc"><a href="tel:4000-842-195">服务资询</a><span id="j_z_f"></span><a href="/User/feedback">意见反馈</a></p>
            <p class="weui_msg_desc">本服务由知行合逸提供</p>
        </div>
    </div>
</div>
<script src="/static/js/zepto.js"></script>
<script src="/static/weui/js/weui.js"></script>
<script type="text/javascript">

</script>
</body>
</html><?php }} ?>