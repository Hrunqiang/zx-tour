<?php /* Smarty version Smarty-3.1.6, created on 2016-05-30 15:06:28
         compiled from "../DataSource/Tpl\PayResult\other.html" */ ?>
<?php /*%%SmartyHeaderCode:21753574be674191a05-76976907%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73ffbf62910e0949523efe604667701bd4e5171a' => 
    array (
      0 => '../DataSource/Tpl\\PayResult\\other.html',
      1 => 1464073664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21753574be674191a05-76976907',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'price' => 0,
    'meal' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_574be674231cc',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574be674231cc')) {function content_574be674231cc($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Comon/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<style type="text/css">
.orderinfo{padding-bottom:10px;color:#888888;}
.orderinfo table{width: 70%;margin: 0 auto;border: 1px solid rgba(136,136,136,0.2);padding:15px;display: block;border-radius: 5px;}
.orderinfo table td{min-width: 5rem;font-size: 1rem;}
.weui_media_hd{width:5.178rem!important;height:4.5357rem!important;}
/*/////////////////////////////////////新加样式////////////////////////////////////////////////////*/
.weui_cell_primary .phone_color{font-size: 1.07142rem;color: #888888;}
.weui_cell_ft .tel{float: left; margin: 2px 5px 0px 0px;}
.weui_cell_ft a{color: #556F94;font-size: 1.07142rem;}
.weui_cell_kefu{font-size: 1.07142rem;color: #888888;}
.weui_media_box .weui_media_title{font-size: 1.071428rem!important;}
.color_b{font-weight: normal;}
</style>
<title>一键报名</title>
</head>
<body>
<div class="wrap">
   	<div class="weui_cells weui_cells_radio">
        <div class="weui_cell">
            <div class="weui_cell_bd weui_cell_primary">
                <p class="color_b">1.致电知行合逸电话客服</p>
            </div>
        </div>
        <div class="weui_cell">
            <div class="weui_cell_bd weui_cell_primary">
                <p class="phone_color">400-084-2195</p>
            </div>
            <div class="weui_cell_ft"><a href="tel:400-084-2195"><i class="halficon tel"></i>拨打电话</a></div>
        </div>
        <div class="weui_cell">
            <div style="width: 100%;">
            	<p class="weui_cell_kefu" style="text-align:center;">告知客服订单编号、服务项目等信息</p>
            </div>
        </div>
        <div class="orderinfo">
            <table >
            	<tr>
            		<td valign="top">订单编号：</td>
            		<td><?php echo $_smarty_tpl->tpl_vars['price']->value['orderid'];?>
</td>
            	</tr>
            	<tr>
            		<td valign="top">支付金额：</td>
            		<td>￥<?php echo $_smarty_tpl->tpl_vars['price']->value['payprice'];?>
</td>
            	</tr>
            	<tr>
            		<td valign="top">服务项目：</td>
            		<td><?php echo $_smarty_tpl->tpl_vars['meal']->value;?>
</td>
            	</tr>
            	<tr>
            		<td valign="top">报名赛事：</td>
            		<td><?php echo $_smarty_tpl->tpl_vars['price']->value['m_name'];?>
</td>
            	</tr>
            </table>
        </div>
    </div>

    <div class="weui_cells weui_cells_radio">
        <div class="weui_cell">
            <div class="weui_cell_bd weui_cell_primary">
                <p class="color_b">2.双方达成一致后，需要您付款</p>
            </div>
        </div>
        <div class="weui_media_box weui_media_appmsg" for="course1">
            <div class="weui_media_hd appicon bank"></div>
            <div class="weui_media_bd">
                <h4 class="weui_media_title color_b">转帐到银行帐户</h4>
                <p class="weui_media_desc">户名：北京知行合逸文化传播有限公司</p>
                <p class="weui_media_desc">开户行：招商银行北京大运村支行</p>
                <p class="weui_media_desc">帐号：1109 1011 5810 803</p>
                <p class="weui_media_desc">金额：￥<?php echo $_smarty_tpl->tpl_vars['price']->value['payprice'];?>
</p>
            </div>
        </div>
    </div>

    <div class="weui_cells weui_cells_radio">
        <div class="weui_cell">
            <div class="weui_cell_bd weui_cell_primary">
                <p class="color_b">3.付款成功后，再次致电客服</p>
            </div>
        </div>
        <div class="weui_cell">
            <div class="weui_cell_bd weui_cell_primary">
                <p class="phone_color">400-084-2195</p>
            </div>
            <div class="weui_cell_ft"><a href="tel:400-084-2195"><i class="halficon tel"></i>拨打电话</a></div>
        </div>
        <div class="weui_cell">
            <div style="width: 100%;">
            	<p style="text-align:center;font-size: 1rem;color: #888888;">客服会将您的订单修改为支付成功状态</p>
            </div>
        </div>
    </div>
    <div style="width: 100%;">
        <p style="text-align:center;font-size: 1rem;padding-top: 1.5714rem;color: #888888;">感谢您的参与，祝您生活愉快</p>
     </div>
</div>
</body>
</html>
<?php }} ?>