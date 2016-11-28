<?php /* Smarty version Smarty-3.1.6, created on 2016-01-10 21:55:53
         compiled from "../uducy_admin/Tpl\OnlineEnroll\index.html" */ ?>
<?php /*%%SmartyHeaderCode:51355692541d258a51-39486948%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22546176512162227f8d2f0ad669bffbffb73fa5' => 
    array (
      0 => '../uducy_admin/Tpl\\OnlineEnroll\\index.html',
      1 => 1452434150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51355692541d258a51-39486948',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5692541d34b99',
  'variables' => 
  array (
    'select' => 0,
    'type' => 0,
    'list' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5692541d34b99')) {function content_5692541d34b99($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Login/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="wrap">
    <div class="container">

        <div id="main">
            
            <div class="con">
                
                  <div class="table">
                    <div class="th">
<!--                        <div class="form">
                        <div class="fl">
                            <select name="cid" id="s_cid" onchange="var v=this.value;window.location.href='/?s=Classes&a=content&ac=list&cid='+v">
                            <option value=0>全部分类</option>
                            <?php echo $_smarty_tpl->tpl_vars['select']->value;?>

                            </select>&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" onclick="window.location.href='/?s=Classes&a=content&ac=add&cid='+document.getElementById('s_cid').value" value="添加内容"/> 　　　当前共有<span id= "count_num"></span>条数据
                        </div>
                       
                        </div> -->
                    </div>
                    <table class="admin-tb" id="datatable">
                    <thead>
                        <tr>
                            <th>报名订单号</th>
                            <th style="text-align:center;">姓名</th>
                            <th style="text-align:center;">支付金额
                               <!--  <select id="usr_choose" name="usr_choose">
                                    <option value="">全</option>
                                    <option value="weixin" <?php if ($_smarty_tpl->tpl_vars['type']->value=='weixin'){?>selected<?php }?>>微信用户</option>
                                    <option value="direct" <?php if ($_smarty_tpl->tpl_vars['type']->value=='direct'){?>selected<?php }?>>注册用户</option>
                                </select> -->
                             </th>
                             <th style="text-align:center;">订单状态</th>
                             <th style="text-align:center;">成绩</th>
                             <th style="text-align:center;">创建时间</th>
                             <th style="text-align:center;">最后更新时间</th>
                             <th style="text-align:center;">操作</th>
                        </tr>
                    </thead>
                    <tbody id="class_item">
                    <?php if ($_smarty_tpl->tpl_vars['list']->value){?>
                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                        <td style="width:45px"><?php echo $_smarty_tpl->tpl_vars['i']->value['orderid'];?>
</td>
                        <td style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['i']->value['xingming'];?>
</td>   
                        <td style="text-align:center;">￥<?php echo $_smarty_tpl->tpl_vars['i']->value['orderprice'];?>
</td>
                        <td style="text-align:center;">
                        <?php if ($_smarty_tpl->tpl_vars['i']->value['paystats']==6){?>
                        成绩上传完成
                        <?php }elseif($_smarty_tpl->tpl_vars['i']->value['paystats']==1){?>
                        支付完成
                        <?php }else{ ?>
                        <?php echo $_smarty_tpl->tpl_vars['i']->value['paystats'];?>

                        <?php }?>
                        </td>
                        <td style="text-align:center;" ><?php echo $_smarty_tpl->tpl_vars['i']->value['chengji'];?>
</td>
                        <td style="text-align:center;" ><?php echo $_smarty_tpl->tpl_vars['i']->value['ctime'];?>
</td>
                        <td style="text-align:center;" ><?php echo $_smarty_tpl->tpl_vars['i']->value['utime'];?>
</td>
                        <td style="text-align:center;"><?php if ($_smarty_tpl->tpl_vars['i']->value['paystats']==6){?><a href="./?s=OnlineEnroll&a=info&orderid=<?php echo $_smarty_tpl->tpl_vars['i']->value['orderid'];?>
">查看成绩详情</a><?php }?></td>
                        </tr>
                    <?php } ?>
                    <?php }?>
                    </tbody>
                    </table>
                    <div class="th">
                    </div>
                </div>
            </div><!--/ con-->            
        </div>    
    </div><!--/ container-->
</div>
<script type="text/javascript">

</script>
<?php echo $_smarty_tpl->getSubTemplate ('Login/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>