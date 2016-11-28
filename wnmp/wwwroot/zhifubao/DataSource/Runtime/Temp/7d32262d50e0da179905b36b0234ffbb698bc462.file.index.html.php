<?php /* Smarty version Smarty-3.1.6, created on 2016-11-14 13:33:56
         compiled from "../DataSource/Tpl\User\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2340757a7f4fdce08e4-73830091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d32262d50e0da179905b36b0234ffbb698bc462' => 
    array (
      0 => '../DataSource/Tpl\\User\\index.html',
      1 => 1479101330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2340757a7f4fdce08e4-73830091',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57a7f4fdd7c52',
  'variables' => 
  array (
    'user' => 0,
    'needpay' => 0,
    'userstate' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57a7f4fdd7c52')) {function content_57a7f4fdd7c52($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Comon/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<title>我的赛事</title>
<style>
		/*--------改版----------*/
	.infoHead{width:100%;height: 10.35714285714286rem;background: white;padding: 0.1px;position: relative;background: url(/static/images/info_headBg.jpg);}
	.imgHeadBox{width:4.53571428571429rem;height: 4.53571428571429rem;margin-top:1.25000000000000rem;margin-left: 11.10714285714286rem;}
	.imgHeadBox>img{width:100%;height: 100%;border-radius: 50%;}
	.userName{width: 100%;height:2.14285714285714rem;text-align:center;line-height: 2.14285714285714rem;}
	.personalInfo{width: 100%;height: 1.35714285714286rem;position: relative;}
	.personalInfo>a{display: block;width:5.71428571428571rem;height: 100%;line-height: 1.35714285714286rem;color: rgb(0,0,0);text-indent: 0.92857142857143rem;margin:0 auto;border: 1px solid rgb(212,212,212);border-radius:0.67857142857143rem;font-size: 0.78571428571429rem;position: relative;}
	.personalInfo>a>i{content:"";width:0.39285714285714rem;height:0.39285714285714rem;display:inline-block;border:solid #D9D9D9;border-width:2px 2px 0 0;transform:rotate(45deg);-webkit-transform:rotate(45deg);position: absolute;right: 0.71428571428571rem;bottom: 0.39285714285714rem;}
	.personalInfo>span{display: block;width:11.07142857142857rem;height: 1.35714285714286rem;line-height: 1.35714285714286rem;font-size: 0.75rem;background: rgba(0,0,0,0.4);color:rgb(255,255,255);text-indent: 0.92857142857143rem;border-radius:0.67857142857143rem;position: absolute;right: -10.35714285714286rem;top: 0;animation: showMsg 2s ease 0.8s forwards;-webkit-animation: showMsg 2s ease 0.8s forwards;}
	@-webkit-keyframes showMsg{
		from{right: -10.35714285714286rem;}
		to{right: -1.78571428571429rem;}
	} 
	@keyframes showMsg{
		from{right: -10.35714285714286rem;}
		to{right: -1.14285714285714rem;}
	} 
	.userOrder{width: 100%;height:8.25rem;margin-top:0.71428571428571rem;font-size:0.89285714285714rem!important}
	.allOrder{height:1.71428571428571rem;border-bottom: 1px solid rgb(212,212,212);}
	.listContent{text-indent: 0.71428571428571rem;}
	
	.twoChoice{width: 100%;height: 5.07142857142857rem;}
	.twoChoice>a{display: block;height: 2.67857142857143rem;margin-top: 1.25rem;font-size:0.92857142857143rem;text-align: center;line-height: 2.67857142857143rem;color: black;float: left;position: relative;}
	.twoChoice_ico{display: inline-block;height: 100%;width: 2.85714285714286rem;float: left;background: url(/static/images/info_icon.png) no-repeat;background-size: 7.14285714285714rem 4.28571428571429rem;}
	.noPay{width: 6.64285714285714rem;margin-left:1.60714285714286rem;}
	.lackInfo{width: 8.21428571428571rem;margin-left:3.21428571428571rem;}
	.twoChoice_count{display: block;position: absolute;width: 1.07142857142857rem;height: 1.07142857142857rem;background: red;border-radius: 50%;left:2.14285714285714rem;top:-0.53571428571429rem;line-height: 1.07142857142857rem;text-align: center;color: white }
	
	.noPay_icon{background-position: -0.42857142857143rem -1.64285714285714rem}
	.lackInfo_icon{background-position: -3.39285714285714rem -1.64285714285714rem}
	.info_icon{display: inline-block;width: 1.28571428571429rem;height:1.28571428571429rem;float: left;background: url(/static/images/info_icon.png) no-repeat;background-size:7.14285714285714rem 4.28571428571429rem;}
	.userOrder_icon{background-position: -0.17857142857143rem -0.07142857142857rem}
	.expectRace_icon{background-position:-1.53571428571429rem -0.07142857142857rem;}
	.userCoupon_icon{background-position:  -4.25000000000000rem -0.17857142857143rem;}
	.userHelp_icon{background-position: -2.89285714285714rem -0.03571428571429rem;}
	.foot_nav{position: absolute;bottom: 0;width: 100%;height: 4.03571428571429rem;}
	.weui_tabbar_label{color: black;line-height: 1.42857142857143rem;font-size: 0.78571428571429rem;margin-top: 0!important}
	.weui_tabbar_icon{width: 1.60714285714286rem;height: 1.60714285714286rem;margin-left: 3.66428571428571rem}
</style>
	<!-- 改 -->
<div class="wrap" style="position: relative;overflow: hidden">
	<!-- Head --> 
	<div class="infoHead">
		<div class="imgHeadBox">
			<img src="<?php if ($_smarty_tpl->tpl_vars['user']->value['headerimg']){?><?php echo $_smarty_tpl->tpl_vars['user']->value['headerimg'];?>
<?php }else{ ?>/static/images/headbg.jpg<?php }?>" alt="headImg" >
		</div>
		<p class="userName"><?php if ($_smarty_tpl->tpl_vars['user']->value['nickname']){?><?php echo $_smarty_tpl->tpl_vars['user']->value['nickname'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['user']->value['phone'];?>
<?php }?></p>
		<div class="personalInfo">
			<a href="/User/userinfo">我的资料<i></i></a><span>完善资料后可简化报名</span>
		</div>
	</div>

	<!--  订单 -->
	<div class="weui_cells weui_cells_access userOrder">
	    <a class="weui_cell allOrder" href="/User/order">
	        <div class="weui_cell_bd weui_cell_primary">
	            <span class="info_icon userOrder_icon"></span><p class="listContent">我的赛事订单</p>
	        </div>
	        <div class="weui_cell_ft">
	        	全部订单
	        </div>
	    </a>
	    <div class="twoChoice" >
			<a href="/User/order?page=1" class="noPay"><?php if ($_smarty_tpl->tpl_vars['needpay']->value>0){?><span class="twoChoice_count noPay_count"><?php echo $_smarty_tpl->tpl_vars['needpay']->value;?>
</span><?php }?><span class="twoChoice_ico noPay_icon"></span>
			未付款
			</a>
			<a href="/User/order?page=2" class="lackInfo"><?php if ($_smarty_tpl->tpl_vars['userstate']->value<4){?><span class="twoChoice_count lackInfo_count">1</span><?php }?><span class="twoChoice_ico lackInfo_icon"></span>
			未完善资料
			</a>
	    </div>
	</div>

	<!-- 想跑的赛事 -->
	<div class="weui_cells weui_cells_access" style="margin-top:0.71428571428571rem;font-size:0.89285714285714rem!important">
	    <a class="weui_cell expectRace" href="/User/collection">
	        <div class="weui_cell_bd weui_cell_primary">
	            <span class="info_icon expectRace_icon"></span><p class="listContent" style="">想跑的赛事</p>
	        </div>
	        <div class="weui_cell_ft">
	        查看
	        </div>
	    </a>
	</div>

	<!-- 优惠券 -->
	<div class="weui_cells weui_cells_access" style="margin-top: 0;font-size:0.89285714285714rem!important">
	    <a class="weui_cell userCoupon" href="/Coupon">
	        <div class="weui_cell_bd weui_cell_primary">
	            <span class="info_icon userCoupon_icon"></span><p class="listContent">优惠券</p>
	        </div>
	        <div class="weui_cell_ft">
	        </div>
	    </a>
	</div>

	<!-- 帮助反馈 -->
	<div class="weui_cells weui_cells_access" style="margin-top: 0;font-size:0.89285714285714rem!important">
	    <a class="weui_cell userHelp" href="/User/feedback">
	        <div class="weui_cell_bd weui_cell_primary">
	            <span class="info_icon userHelp_icon"></span><p class="listContent">帮助与反馈</p>
	        </div>
	        <div class="weui_cell_ft">
	        </div>
	    </a>
	</div>
	
	<div class="weui_tabbar">
        <a href="/" class="weui_tabbar_item">
            <img src="/static/images/user_fx.png" alt="发现" class="weui_tabbar_icon">
            <p class="weui_tabbar_label">发现</p>
        </a>
        <a href="/Run" class="weui_tabbar_item">
            <img src="/static/images/user_ssjb.png" alt="赛事" class="weui_tabbar_icon">
            <p class="weui_tabbar_label">赛事</p>
        </a>
        <a href="/User" class="weui_tabbar_item">
            <img src="/static/images/user_wd.png" alt="我的" class="weui_tabbar_icon">
            <p class="weui_tabbar_label">我的</p>
        </a>
    </div>

</div>
<script src="/static/js/zepto.js"></script>
<script src="/static/weui/js/weui.js"></script>
<script type="text/javascript">
</script>
</body>
</html><?php }} ?>