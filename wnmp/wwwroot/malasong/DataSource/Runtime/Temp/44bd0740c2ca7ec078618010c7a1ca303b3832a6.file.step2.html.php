<?php /* Smarty version Smarty-3.1.6, created on 2015-11-27 01:20:22
         compiled from "../DataSource/Tpl\Enroll\step2.html" */ ?>
<?php /*%%SmartyHeaderCode:2131562f591b0602e8-76089505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44bd0740c2ca7ec078618010c7a1ca303b3832a6' => 
    array (
      0 => '../DataSource/Tpl\\Enroll\\step2.html',
      1 => 1446518005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2131562f591b0602e8-76089505',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_562f591b24d28',
  'variables' => 
  array (
    'orderid' => 0,
    'error' => 0,
    'xingming' => 0,
    'i' => 0,
    'bmtype' => 0,
    'jiudian' => 0,
    'jiudian_child' => 0,
    'ii' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562f591b24d28')) {function content_562f591b24d28($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Comon/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="/static/css/Enroll.css">
<script src="/static/js/function.js"></script>
<script src="/static/js/enroll.js"></script>
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
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['n']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['n']['index']++;
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
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['n']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['n']['index']++;
?>
					<div class="fl bmtype">
						<div class="radio"><label><input type="radio" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" price="<?php echo $_smarty_tpl->tpl_vars['i']->value['goodsprice'];?>
" name="bmtype" >&nbsp;<?php echo $_smarty_tpl->tpl_vars['i']->value['goodscls'];?>
</label></div>
						<div class="radio_price OrangeColor">[ <span class="OrangeColor"><?php echo $_smarty_tpl->tpl_vars['i']->value['goodsprice'];?>
</span><em class="OrangeColor">RMB</em> ]</div>
					</div>
					<!-- <label><input type="radio" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" price="<?php echo $_smarty_tpl->tpl_vars['i']->value['goodsprice'];?>
" name="bmtype" >&nbsp;<?php echo $_smarty_tpl->tpl_vars['i']->value['goodscls'];?>
</label>&nbsp;&nbsp;&nbsp;&nbsp; -->
				<?php } ?>
				<div class="clearfix"></div>
				</li>
				
				<li class="content">
<div class="bg">
	 <b>赛事路线</b><br>
	<div class="contxt">全程马拉松：<br>
	人民广场—迎宾路—沿江路—泰山街—长江路—正阳路—迎宾路—通江乡—建黑高速路口—黑瞎子岛乌苏大桥桥头—乌苏镇—东方第一哨—太阳广场；<br>
	 <br>
	半程马拉松：<br>
	人民广场—迎宾路—沿江路—泰山街—长江路—正阳路—县道109—环岛（折返点）—县道109—人民广场；<br>
	 <br>
	迷你马拉松：<br>
	人民广场—迎宾路—沿江路—泰山街—长江路—正阳路—人民广场</div>
</div>
				</li>
				<li class="jdyd">
					<label>
						<input class="fl" type="checkbox"  value=1 name="jdyd" id="jdyd"><div class="t fl blackcolor"><b>酒店预订</b></div><div class="tp fl">（赛事方官方提供黑瞎子马拉松赛事路线最佳酒店）</div>
					</label>
					<div class="clearfix"></div>
				</li>
			</ul>
			<!-- <div class="line"></div> -->
			<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jiudian']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['n']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['n']['index']++;
?>
				<div class="jdyd_list"> 
				<ul class="item">
					<li>
						<div class="jd_num fl"><?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['n']['index']+1;?>
</div>
						<div class="jd_title fl btcolor"><?php echo $_smarty_tpl->tpl_vars['i']->value['goodscls'];?>
</div>
						<div class="jd_starts fl"></div>
						<div class="clearfix"></div>
					</li>
					<li class="jd_des">
						<div class="fl img"><img alt="" width="100" height="100" src="<?php echo $_smarty_tpl->tpl_vars['i']->value['goodspic'];?>
"></div>
						<div class="fl txt btcolor">
						地址：<?php echo $_smarty_tpl->tpl_vars['i']->value['goodsaddr'];?>
<br/>
						酒店级别：五星酒店<br/>
						<span>
						<?php echo $_smarty_tpl->tpl_vars['i']->value['goodsinfo'];?>

						</span>
						<div class="fuli">
							<div class="icon1 fl">免费Wi-Fi</div>
							<div class="icon2 fl">提供早餐</div>
							<div class="icon3 fl">停车场</div>
							<div class="clearfix"></div>
						</div>
						</div>
						<div class="fl">
								<div class="btn1 radius5 btnOrangeBgcolor"><?php echo intval($_smarty_tpl->tpl_vars['i']->value['goodsprice']);?>
/晚/起</div>
								<div class="btn2 radius5 btnBlueBgcolor">查看房型<em></em></div>
						</div>
						<div class="clearfix"></div>
					</li>
				</ul>
				<div class="item_content">
					<ul class="title btcolor">
							<li class="fl cls1">房型</li>
							<li class="fl cls2">每日单价</li>
							<li class="fl cls3">入离时间</li>
							<li class="fl cls5">数量</li>
							<li class="fl cls4">选定</li>
							<div class="clearfix"></div>
						</ul>
						<?php  $_smarty_tpl->tpl_vars['ii'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ii']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['jiudian_child']->value[$_smarty_tpl->tpl_vars['i']->value['id']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ii']->key => $_smarty_tpl->tpl_vars['ii']->value){
$_smarty_tpl->tpl_vars['ii']->_loop = true;
?>
					<ul class="jd_fangjian btcolor" id="<?php echo $_smarty_tpl->tpl_vars['ii']->value['id'];?>
">
							<li class="fl cls1"><img  alt="" src="<?php echo $_smarty_tpl->tpl_vars['ii']->value['goodspic'];?>
"><div class="btxt"><?php echo $_smarty_tpl->tpl_vars['ii']->value['goodscls'];?>
</div></li>
							<li class="fl cls2"><span class="OrangeColor perprice"><?php echo $_smarty_tpl->tpl_vars['ii']->value['goodsprice'];?>
</span><em class="OrangeColor">RMB</em></li>
							<li class="fl cls3">
							<input type="text" name="stime" class="selectDate btcolor" <?php if ($_smarty_tpl->tpl_vars['ii']->value['goodsleft']<=0){?>disabled<?php }?>/>&nbsp;至
							<input type="text" name="etime" class="selectDate btcolor" <?php if ($_smarty_tpl->tpl_vars['ii']->value['goodsleft']<=0){?>disabled<?php }?> />
							</li>
							<li class="fl cls5"><input type="text" name="count" class="num btcolor" onkeyup="value=value.replace(/[^\d]/g,'')" value="1" <?php if ($_smarty_tpl->tpl_vars['ii']->value['goodsleft']<=0){?>disabled<?php }?> /></li>
							<li class="fl cls4">
								<div>
									<span class="OrangeColor allprice">0</span><em class="OrangeColor">RMB</em>
								</div>
								<!-- 取消,预订,已订满 -->
								<?php if ($_smarty_tpl->tpl_vars['ii']->value['goodsleft']<=0){?>
								<div class="mwtbtn">已订满</div>
								<?php }else{ ?>
								<div class="mwtbtn radius5 btnOrangeBgcolor ydbtn">预订</div>
								<div class="mwtbtn BlueColor cancelbtn" style="display: none">取消</div>
								<?php }?>
							</li>
							<div class="clearfix"></div>
						</ul>
						<?php } ?>
				</div>
			</div>
			<?php } ?>
			<div class="order_price">
				<ul class="orderInfo btcolor bgcolor">
					<li class="cls1 fl">收费项目</li>
					<li class="cls2 fr">金额</li>
					<div class="clearfix"></div>
				</ul>
				<ul class="orderInfo btcolor">
					<li class="cls1 fl">报名费</li>
					<li class="cls2 fr"><span>RMB</span><em id="bmprice">0</em></li>
					<div class="clearfix"></div>
				</ul>
				<ul class="orderInfo btcolor">
					<li class="cls1 fl">酒店房费</li>
					<li class="cls2 fr"><span>RMB</span><em id="jdallprice">0</em></li>
					<div class="clearfix"></div>
				</ul>
				<ul class="orderInfo btcolor bgcolor">
					<li class="cls1 fl"></li>
					<li class="cls2 fr"><span>总价</span><em class="OrangeColor" id="allprice">0</em></li>
					<div class="clearfix"></div>
				</ul>
			</div>
			<form name="alipayment" id="pay_form" action="/PayResult/gotoPay" method="post" target="_blank">
				<input size="30" name="WIDout_trade_no" value="<?php echo $_smarty_tpl->tpl_vars['orderid']->value;?>
"  type="hidden"/>
				 <input size="30" name="WIDsubject"  type="hidden" value="黑瞎子岛马拉松报名" />
				 <input size="30" name="WIDtotal_fee"  type="hidden" value="" id="pay_all_price" />
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