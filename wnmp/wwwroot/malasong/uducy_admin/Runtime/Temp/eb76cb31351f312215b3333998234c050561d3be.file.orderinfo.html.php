<?php /* Smarty version Smarty-3.1.6, created on 2016-01-20 19:44:17
         compiled from "../uducy_admin/Tpl\Enroll\orderinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:2982568e7f14a017b0-43072739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb76cb31351f312215b3333998234c050561d3be' => 
    array (
      0 => '../uducy_admin/Tpl\\Enroll\\orderinfo.html',
      1 => 1453290248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2982568e7f14a017b0-43072739',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_568e7f14ac95c',
  'variables' => 
  array (
    'info' => 0,
    'list' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568e7f14ac95c')) {function content_568e7f14ac95c($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Login/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<style type="text/css">
.order{width: 80%!important;margin:0 auto;}	
.order td,.order th{padding:5px 10px;}
.order th{background:#D4DCE7;}
.order td table{width: 100%;}
.order td textarea{width: 100%;}
button{margin-left:10%;}
</style>
<div class="wrap">
    <div class="container">

        <div id="main">
            
            <div class="con">
            	<a href="./?s=Enroll"><button>返回订单列表</button></a>
            	<table class="order" border="1" >
            		<tr>
            			<th>订单号：</th>
            			<td><?php echo $_smarty_tpl->tpl_vars['info']->value['orderid'];?>
</td>
            		</tr>
            		<tr>
            			<th>参赛者姓名：</th>
            			<td><?php echo $_smarty_tpl->tpl_vars['info']->value['xingming'];?>
</td>
            		</tr>
                        <tr>
                              <th>参赛者手机：</th>
                              <td><?php echo $_smarty_tpl->tpl_vars['info']->value['shouji'];?>
</td>
                        </tr>
                        <tr>
                              <th>参赛者邮箱：</th>
                              <td><?php echo $_smarty_tpl->tpl_vars['info']->value['youxiang'];?>
</td>
                        </tr>
            		<tr>
            			<th>参加赛事：</th>
            			<td><?php echo $_smarty_tpl->tpl_vars['info']->value['match'];?>
</td>
            		</tr>
            		<tr>
            			<th>订单状态：</th>
            			<td> <?php if ($_smarty_tpl->tpl_vars['info']->value['paystats']==5){?>
                        等待支付
                        <?php }elseif($_smarty_tpl->tpl_vars['info']->value['paystats']==1){?>
                        支付完成
                        <?php }elseif($_smarty_tpl->tpl_vars['info']->value['paystats']==2){?>
                        支付金额不对
                        <?php }else{ ?>
                        <?php echo $_smarty_tpl->tpl_vars['info']->value['paystats'];?>

                        <?php }?></td>
            		</tr>
            		<tr>
            			<th>订单支付号：</th>
            			<td><?php if ($_smarty_tpl->tpl_vars['info']->value['payorderid']){?><?php echo $_smarty_tpl->tpl_vars['info']->value['payorderid'];?>
<?php }else{ ?>无<?php }?></td>
            		</tr>
            		<tr>
            			<th>支付信息：</th>
            			<td><?php if ($_smarty_tpl->tpl_vars['info']->value['payinfo']){?><textarea><?php echo $_smarty_tpl->tpl_vars['info']->value['payinfo'];?>
</textarea><?php }else{ ?>无<?php }?></td>
            		</tr>
            		<tr>
            			<th>备注：</th>
            			<td><?php if ($_smarty_tpl->tpl_vars['info']->value['beizhu']){?><?php echo $_smarty_tpl->tpl_vars['info']->value['beizhu'];?>
<?php }else{ ?>无<?php }?></td>
            		</tr>
            		<tr>
            			<th>创建时间：</th>
            			<td><?php echo $_smarty_tpl->tpl_vars['info']->value['ctime'];?>
</td>
            		</tr>
            		<tr>
            			<th>最后修改时间：</th>
            			<td><?php echo $_smarty_tpl->tpl_vars['info']->value['utime'];?>
</td>
            		</tr>
            		<tr>
            			<th>订单总价：</th>
            			<td>￥<?php echo $_smarty_tpl->tpl_vars['info']->value['orderprice'];?>
</td>
            		</tr>
            		<tr>
            			<th>包含项目：</th>
            			<td>
	            			<table>
	            				<tr>
	            					<th align="left">已选项目</th>
	            					<th align="left">单价</th>
	            					<th align="left">数量</th>
	            					<th align="left">总价</th>
	            				</tr>
	            				<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
		            			<tr>
		            				<td><?php echo $_smarty_tpl->tpl_vars['i']->value['goodscls'];?>
</td>
		            				<td>￥<?php echo $_smarty_tpl->tpl_vars['i']->value['goodsprice'];?>
</td>
		            				<td><?php echo $_smarty_tpl->tpl_vars['i']->value['count'];?>
</td>
		            				<td>￥<?php echo $_smarty_tpl->tpl_vars['i']->value['price'];?>
</td>
		            			</tr>
	            				<?php } ?>
	            			</table>
            			</td>
            		</tr>
            	</table>                
            </div><!--/ con-->            
        </div>    
    </div><!--/ container-->
</div>
<script type="text/javascript">

</script>
<?php echo $_smarty_tpl->getSubTemplate ('Login/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>