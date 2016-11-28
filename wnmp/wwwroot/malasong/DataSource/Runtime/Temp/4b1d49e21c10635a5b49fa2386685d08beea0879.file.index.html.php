<?php /* Smarty version Smarty-3.1.6, created on 2015-12-28 10:26:39
         compiled from "../DataSource/Tpl\EnrollInfo\index.html" */ ?>
<?php /*%%SmartyHeaderCode:3063156348265244fc6-96022676%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b1d49e21c10635a5b49fa2386685d08beea0879' => 
    array (
      0 => '../DataSource/Tpl\\EnrollInfo\\index.html',
      1 => 1450946280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3063156348265244fc6-96022676',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_563482652ec37',
  'variables' => 
  array (
    'ordersInfo' => 0,
    'i' => 0,
    'ii' => 0,
    'k' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563482652ec37')) {function content_563482652ec37($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Comon/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="/static/css/Enroll.css">
<script src="/static/js/function.js"></script>
<script src="/static/js/enroll.js"></script>
<div id="register_box" class="general_page section">
	<div class="section_center">
		<div class="general_page_left enroll_info">
			<div class="title">报名查询</div>
			<br/>
			<div class="line"></div>
            <?php if (!$_smarty_tpl->tpl_vars['ordersInfo']->value){?>
                <div style="width: 100%;text-align:center;font-size:20px;font-weight: bold;padding-top: 30px;">您还没有报名</div>
            <?php }?>
			<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ordersInfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
			<ul class="items">
				<li class="t">
					报名信息
				</li>
				<li class="c">
					<ul class="item">
					<?php  $_smarty_tpl->tpl_vars['ii'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ii']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['i']->value['NameInfo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ii']->key => $_smarty_tpl->tpl_vars['ii']->value){
$_smarty_tpl->tpl_vars['ii']->_loop = true;
?>
                        <?php if ($_smarty_tpl->tpl_vars['ii']->value['pidName']){?>
                            <li>
                            <font>姓名:</font> <?php echo $_smarty_tpl->tpl_vars['ii']->value['xingming'];?>

                            <?php if ($_smarty_tpl->tpl_vars['i']->value['isonline']==1&&$_smarty_tpl->tpl_vars['i']->value['sign']==-1){?>
                                <font style="color:red;font-weight: normal;font-size:12px;">[您已成功报名黑瞎子岛马拉松赛，因此该线上马拉松报名自动取消，请知晓。]</font>
                            <?php }?>
                            </li>
                            <li><font>报名赛事:</font> <?php echo $_smarty_tpl->tpl_vars['ii']->value['pidName'];?>
</li>
                            <li><font>报名项目:</font> <?php echo $_smarty_tpl->tpl_vars['ii']->value['goodscls'];?>
</li>
                            <?php if ($_smarty_tpl->tpl_vars['i']->value['isonline']==0){?>
                                <li><font>比赛号码:</font> <?php echo $_smarty_tpl->tpl_vars['ii']->value['number'];?>
</li>
                             <?php }elseif($_smarty_tpl->tpl_vars['i']->value['isonline']==1){?>
                             	<li><font>注:</font>官网将于1月1日当天开放上传成绩</li>
						    <?php }?>
                        <?php }?>
					<?php } ?>
					<?php if ($_smarty_tpl->tpl_vars['i']->value['isonline']==0){?>
						<li style="padding-left:0;"><div class="line"></div></li>
					<?php }?>
					<?php  $_smarty_tpl->tpl_vars['ii'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ii']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['i']->value['JdInfo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ii']->key => $_smarty_tpl->tpl_vars['ii']->value){
$_smarty_tpl->tpl_vars['ii']->_loop = true;
?>
						<li><font>预订酒店:</font> <?php echo $_smarty_tpl->tpl_vars['ii']->value['goodscls'];?>
</li>
						<li><font>入住日期:</font> <?php echo $_smarty_tpl->tpl_vars['ii']->value['stime'];?>
&nbsp;&nbsp;&nbsp;&nbsp;<font>离店日期</font>:<?php echo $_smarty_tpl->tpl_vars['ii']->value['etime'];?>
</li>
					<?php } ?>
					<?php if ($_smarty_tpl->tpl_vars['i']->value['isonline']==0){?>
						<li><font>金额:</font> <span class="OrangeColor"><?php echo $_smarty_tpl->tpl_vars['i']->value['price'];?>
</span></li>
					<?php }?>
					</ul>
				</li>
				<?php if ($_smarty_tpl->tpl_vars['i']->value['isonline']==0){?>
				<li class="btn_cls">
				<?php if ($_smarty_tpl->tpl_vars['i']->value['paystats']==1||$_smarty_tpl->tpl_vars['i']->value['paystats']==3){?>
				    <input class="btn payed" type="button" style="cursor: default;" value="已支付"/>
                <?php }elseif($_smarty_tpl->tpl_vars['i']->value['paystats']==2){?>
                    <input class="btn payed" type="button" style="cursor: default;" value="支付金额有误"/>
				<?php }else{ ?>
				<form name="alipayment" id="pay_form" action="/PayResult/gotoPay" method="post" target="_blank">
				<input size="30" name="WIDout_trade_no" value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"  type="hidden"/>
				 <input size="30" name="WIDsubject"  type="hidden" value="2016年黑瞎子岛新年日出马拉松" />
				 <input size="30" name="WIDtotal_fee"  type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['price'];?>
" id="pay_all_price" />
				 <input size="30" name="WIDbody" type="hidden" value="黑瞎子岛马拉松在抚远人民广场2016年1月1日（星期五）上午5：58,请牢记!" />
				 <input size="30" name="WIDshow_url" type="hidden" value="http://pay.zx-tour.com/enroll/"/>
				<input  class="btn" type="submit"  value="未支付" />
				</form>
				<?php }?>
			
				</li>
				<?php }?>
			</ul>
			<?php } ?>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ('Comon/right.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('Comon/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>