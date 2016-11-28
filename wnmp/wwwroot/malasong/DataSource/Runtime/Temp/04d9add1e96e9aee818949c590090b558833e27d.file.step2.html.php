<?php /* Smarty version Smarty-3.1.6, created on 2016-01-01 13:32:07
         compiled from "../DataSource/Tpl\OnlineEnroll\step2.html" */ ?>
<?php /*%%SmartyHeaderCode:274395673c126a288c1-15660596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04d9add1e96e9aee818949c590090b558833e27d' => 
    array (
      0 => '../DataSource/Tpl\\OnlineEnroll\\step2.html',
      1 => 1450477639,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '274395673c126a288c1-15660596',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5673c126c4fd9',
  'variables' => 
  array (
    'orderid' => 0,
    'error' => 0,
    'xingming' => 0,
    'i' => 0,
    'bmtype' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5673c126c4fd9')) {function content_5673c126c4fd9($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Comon/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="/static/css/Enroll.css">
<script src="/static/js/function.js"></script>
<!-- <script src="/static/js/OnlineEnroll.js"></script> -->
<div id="register_box" class="general_page section">
	<div class="section_center">
		<div class="general_page_left enroll step2" orderid="<?php echo $_smarty_tpl->tpl_vars['orderid']->value;?>
">
			<div class="title">报名赛事</div>
			<div class="title_des">
				*注：请准确填写以下报名信息,提交成功后不可修改。
				<?php if ($_smarty_tpl->tpl_vars['error']->value){?><br/><br/><font style="color:red;font-size:16px;font-weight: bold;">****<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
****</font><?php }?>
			</div>
			<ul>
				<li class="txt">参赛选手</li>
				<li class="line">
				<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['xingming']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
					<div class="pepo fl" id="<?php echo $_smarty_tpl->tpl_vars['i']->value['baomingdanid'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['xingming'];?>
</div>
				<?php } ?>
					<div class="addPepo fl" style="display:none;">+ 添加参赛选手</div>
					<div class="clearfix"></div>
				</li>
				
				<li class="txt">报名项目</li>
				<li class="line">
				<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bmtype']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['i']->value['goodscls']=="半程马拉松[21.0975公里]"){?>
					<div class="fl bmtype">
						<div class="radio"><label><input type="radio" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" price="<?php echo $_smarty_tpl->tpl_vars['i']->value['goodsprice'];?>
" name="bmtype" checked>&nbsp;<?php echo $_smarty_tpl->tpl_vars['i']->value['goodscls'];?>
</label></div>
						<div class="radio_price OrangeColor">[ <span class="OrangeColor"><?php echo $_smarty_tpl->tpl_vars['i']->value['goodsprice'];?>
</span><em class="OrangeColor">RMB</em> ]</div>
					</div>
				<?php }?>
					<!-- <label><input type="radio" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" price="<?php echo $_smarty_tpl->tpl_vars['i']->value['goodsprice'];?>
" name="bmtype" >&nbsp;<?php echo $_smarty_tpl->tpl_vars['i']->value['goodscls'];?>
</label>&nbsp;&nbsp;&nbsp;&nbsp; -->
				<?php } ?>
				<div class="clearfix"></div>
				</li>
			</ul>

			<div class="order_price">
				<ul class="orderInfo btcolor">
					<li class="cls1 fl">报名费</li>
					<li class="cls2 fr"><span>RMB</span><em id="bmprice">19.90</em></li>
					<div class="clearfix"></div>
				</ul>
				<ul class="orderInfo btcolor bgcolor">
					<li class="cls1 fl"></li>
					<li class="cls2 fr"><span>总价</span><em class="OrangeColor" id="allprice">19.90</em></li>
					<div class="clearfix"></div>
				</ul>
			</div>
			<form name="alipayment" id="pay_form" action="/PayResult/gotoPay" method="post" target="_blank">
				<input size="30" name="WIDout_trade_no" value="<?php echo $_smarty_tpl->tpl_vars['orderid']->value;?>
"  type="hidden"/>
				 <input size="30" name="WIDsubject"  type="hidden" value="黑瞎子岛马拉松报名" />
				 <input size="30" name="WIDtotal_fee"  type="hidden" value="19.90" id="pay_all_price" />
				 <input size="30" name="WIDbody" type="hidden" value="黑瞎子岛马拉松在抚远人民广场2016年1月1日（星期五）上午5：58,请牢记!" />
				 <input size="30" name="WIDshow_url" type="hidden" value="http://pay.zx-tour.com/enroll/"/>
				<div class="submit"><input  type="submit" id="pay_price" value="立即支付" /></div>
			</form>
		</div>
		<link rel="stylesheet" type="text/css" href="/static/datapicker/css/jquery-ui-1.7.1.custom.css">
		<script type="text/javascript" src="/static/datapicker/jquery-ui-1.7.1.custom.min.js"></script>
		<?php echo $_smarty_tpl->getSubTemplate ('Comon/right.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('Comon/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>