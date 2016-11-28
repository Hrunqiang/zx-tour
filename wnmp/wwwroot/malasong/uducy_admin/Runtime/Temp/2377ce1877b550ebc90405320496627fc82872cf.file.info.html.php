<?php /* Smarty version Smarty-3.1.6, created on 2016-01-11 10:32:17
         compiled from "../uducy_admin/Tpl\OnlineEnroll\info.html" */ ?>
<?php /*%%SmartyHeaderCode:2950356926072690198-58138165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2377ce1877b550ebc90405320496627fc82872cf' => 
    array (
      0 => '../uducy_admin/Tpl\\OnlineEnroll\\info.html',
      1 => 1452479529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2950356926072690198-58138165',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56926072690ce',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56926072690ce')) {function content_56926072690ce($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Login/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<style type="text/css">
.order{width: 90%!important;margin:0 auto;} 
.order td,.order th{padding:5px 10px;}
.order th{background:#D4DCE7;}
.order td table{width: 100%;}
.order td textarea{width: 100%;}
img{width:320px;height:640px;}
button{margin-left:5%;}
</style>
<div class="wrap">
    <div class="container">

        <div id="main">
            
            <div class="con">
                <a href="./?s=OnlineEnroll"><button>返回订单列表</button></a>
                <table class="order" border="1" >
                    <tr>
                        <th>订单号：</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['info']->value['orderid'];?>
</td>
                        <td rowspan="8"><img src="<?php echo $_smarty_tpl->tpl_vars['info']->value['picData'];?>
"></td>
                    </tr>
                    <tr>
                        <th>参赛者姓名：</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['info']->value['xingming'];?>
</td>
                    </tr>
                    <tr>
                        <th>使用APP：</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['info']->value['appName'];?>
</td>
                    </tr>
                    <tr>
                        <th>成绩：</th>
                        <td><?php if ($_smarty_tpl->tpl_vars['info']->value['chengji']){?><?php echo $_smarty_tpl->tpl_vars['info']->value['chengji'];?>
<?php }else{ ?>无<?php }?></td>
                    </tr>
                    <tr>
                        <th>支付价钱：</th>
                        <td><?php echo $_smarty_tpl->tpl_vars['info']->value['orderprice'];?>
</td>
                    </tr>
                    <tr>
                        <th>地址：</th>
                        <td><?php if ($_smarty_tpl->tpl_vars['info']->value['addr']){?><?php echo $_smarty_tpl->tpl_vars['info']->value['addr'];?>
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
                </table>                
            </div><!--/ con-->            
        </div>    
    </div><!--/ container-->
</div>
<script type="text/javascript">

</script>
<?php echo $_smarty_tpl->getSubTemplate ('Login/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>