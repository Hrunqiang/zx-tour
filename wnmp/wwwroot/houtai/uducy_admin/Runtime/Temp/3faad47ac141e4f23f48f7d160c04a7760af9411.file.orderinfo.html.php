<?php /* Smarty version Smarty-3.1.6, created on 2016-11-14 11:02:33
         compiled from "../uducy_admin/Tpl\EnrollV2\orderinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:26387582929491e8915-24710812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3faad47ac141e4f23f48f7d160c04a7760af9411' => 
    array (
      0 => '../uducy_admin/Tpl\\EnrollV2\\orderinfo.html',
      1 => 1478503485,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26387582929491e8915-24710812',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'changelist' => 0,
    'i' => 0,
    'list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_582929493cdd5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582929493cdd5')) {function content_582929493cdd5($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Login/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
            	<a href="./?s=EnrollV2"><button>返回订单列表</button></a>
            	<table class="order" border="1" >
            		<tr>
            			<th>订单号：</th>
            			<td><?php echo $_smarty_tpl->tpl_vars['info']->value['orderid'];?>
</td>
            		</tr>
            		<tr>
            			<th>参赛者姓名：</th>
            			<td><?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
</td>
            		</tr>
                        <tr>
                              <th>参赛者手机：</th>
                              <td><?php if ($_smarty_tpl->tpl_vars['info']->value['phone']){?><?php echo $_smarty_tpl->tpl_vars['info']->value['phone'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['info']->value['authphone'];?>
<?php }?></td>
                        </tr>
                        <tr>
                              <th>参赛者邮箱：</th>
                              <td><?php echo $_smarty_tpl->tpl_vars['info']->value['e_mail'];?>
</td>
                        </tr>
            		<tr>
            			<th>参加赛事：</th>
            			<td><?php echo $_smarty_tpl->tpl_vars['info']->value['m_name'];?>
</td>
            		</tr>
            		<tr>
            			<th>订单状态：</th>
            			<td> <?php if ($_smarty_tpl->tpl_vars['info']->value['paystats']==5){?>
                        等待支付 　　　<input type="button"　data="<?php echo $_smarty_tpl->tpl_vars['info']->value['orderid'];?>
" value="更改为已支付" id="change_paystats">
                        <?php }elseif($_smarty_tpl->tpl_vars['info']->value['paystats']==1){?>
                        支付完成
                        <?php }elseif($_smarty_tpl->tpl_vars['info']->value['paystats']==2){?>
                        支付金额不对
                        <?php }elseif($_smarty_tpl->tpl_vars['info']->value['paystats']==-1){?>
                        订单已删除
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
            			<td><textarea id="payinfo"><?php echo $_smarty_tpl->tpl_vars['info']->value['payinfo'];?>
</textarea></td>
            		</tr>
                        <tr>
                              <th>用户备注：</th>
                              <td><?php if ($_smarty_tpl->tpl_vars['info']->value['user_remarks']){?><?php echo $_smarty_tpl->tpl_vars['info']->value['user_remarks'];?>
<?php }else{ ?>无<?php }?></td>
                        </tr>
            		<tr>
            			<th>客服注释：</th>
            			<td><?php if ($_smarty_tpl->tpl_vars['info']->value['official_notes']){?><?php echo $_smarty_tpl->tpl_vars['info']->value['official_notes'];?>
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
                              <td>需支付：￥<?php echo $_smarty_tpl->tpl_vars['info']->value['payprice'];?>
 　　优惠券  -￥<?php echo $_smarty_tpl->tpl_vars['info']->value['discount'];?>
 
                              　　<del>原价:￥<?php echo $_smarty_tpl->tpl_vars['info']->value['orderprice'];?>
</del> <?php if ($_smarty_tpl->tpl_vars['info']->value['paystats']==5){?><input type="button"　data="<?php echo $_smarty_tpl->tpl_vars['info']->value['orderid'];?>
" value="修改价格" id="change_payprice"><?php }?></td>
                        </tr>
                        <tr>
                              <th>优惠券价格：</th>
                              <td><?php echo $_smarty_tpl->tpl_vars['info']->value['discount'];?>
</td>
                        </tr>
                        <tr>
                              <th>优惠券名称：</th>
                              <td><?php echo $_smarty_tpl->tpl_vars['info']->value['coupon_name'];?>
</td>
                        </tr>
            		
                        <?php if ($_smarty_tpl->tpl_vars['changelist']->value){?>
                        <tr>
                              <th>价格修改记录：</th>
                              <td>
                                    <table>
                                          <tr>
                                                <th align="left">修改前价格</th>
                                                <th align="left">修改后价格</th>
                                                <th align="left">备注</th>
                                                <th align="left">操作者</th>
                                                <th align="left">时间</th>
                                          </tr>
                                          <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['changelist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                                          <tr>
                                                <td>￥<?php echo $_smarty_tpl->tpl_vars['i']->value['original_price'];?>
</td>
                                                <td>￥<?php echo $_smarty_tpl->tpl_vars['i']->value['update_price'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['info'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['username'];?>
</td>
                                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['ctime'];?>
</td>
                                          </tr>
                                          <?php } ?>
                                    </table>
                              </td>
                        </tr>
                        <?php }?>
            		<tr>
            			<th>包含项目：</th>
            			<td>
	            			<table>
	            				<tr>
	            					<th align="left">已选项目</th>
	            					<th align="left">支付单价　/　当前单价 /　原价</th>
	            					<th align="left">数量</th>
	            					<th align="left">总价</th>
	            				</tr>
	            				<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
		            			<tr>
		            				<td><?php echo $_smarty_tpl->tpl_vars['i']->value['g_name'];?>
</td>
		            				<td>￥<?php echo $_smarty_tpl->tpl_vars['i']->value['price'];?>
　/　￥<?php echo $_smarty_tpl->tpl_vars['i']->value['g_currprice'];?>
  /　￥<?php echo $_smarty_tpl->tpl_vars['i']->value['g_price'];?>
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
$('#change_paystats').click(function(){
      var orderid = "<?php echo $_smarty_tpl->tpl_vars['info']->value['orderid'];?>
";
      if(!orderid){
            alert("订单号错误");
            return false;
      }
      var info = $("#payinfo").val();
      if(!info){
            alert("请在支付信息中注明！");
            return false;
      }

      $.ajax({
            url:'./?s=EnrollV2&a=changepaystats',
            cache: false,
            type: "POST",
            dataType: "json",
            timeout:3000,
            data:{orderid:orderid,payinfo:info},
            success:function(data){
                  alert(data.msg);
                  if(data.error==0){
                        window.location.href = window.location.href;
                  }
            },
            error:function(){
                  alert("系统错误！");
            }
      });

});

$("#change_payprice").click(function(){
            var orderid = "<?php echo $_smarty_tpl->tpl_vars['info']->value['orderid'];?>
";
      if(!orderid){
            alert("订单号错误");
            return false;
      }

      var payprice = prompt("请输入修改后的价格");
      if(!payprice){
            if(payprice==""){
                  alert("价格不能为空！");
            }
            return false;
      }
      payprice = parseFloat(payprice)?parseFloat(payprice):0;


      var  info = prompt("你要将价格修改为"+payprice+",并填写你的备注，请方便后台核实！");
      if(!info){
            if(info==""){
                  alert("备注不能为空！");
            }
            return false;
      }
      $.ajax({
            url:'./?s=EnrollV2&a=changepayprice',
            cache: false,
            type: "POST",
            dataType: "json",
            timeout:3000,
            data:{orderid:orderid,info:info,payprice:payprice},
            success:function(data){
                  alert(data.msg);
                  if(data.error==0){
                        window.location.href = window.location.href;
                  }
            },
            error:function(){
                  alert("系统错误！");
            }
      });
});
</script>
<?php echo $_smarty_tpl->getSubTemplate ('Login/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>