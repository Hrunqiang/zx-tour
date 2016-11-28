<?php /* Smarty version Smarty-3.1.6, created on 2016-11-07 15:35:50
         compiled from "../uducy_admin/Tpl\Coupon\add.html" */ ?>
<?php /*%%SmartyHeaderCode:2270158202ed6cc9ba7-44082969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83390a4c8d8bb1a93942b9fd468b1f2189caa159' => 
    array (
      0 => '../uducy_admin/Tpl\\Coupon\\add.html',
      1 => 1478503485,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2270158202ed6cc9ba7-44082969',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58202ed6d5e96',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58202ed6d5e96')) {function content_58202ed6d5e96($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Login/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con box-green">
                <form action="?s=Coupon&a=add" method='post' onsubmit="return checkform();">
                <div class="box-header">
                    <h4>优惠券生成</h4>
                </div>
                <div class="box-content">
                    <table class="table-font" style="width:80%;">
                        <tr class="coupon_name">
                            <th class="w120">优惠券名称：</th>
                            <td>
	                            <input type="text" id="coupon_name"  name="coupon_name" class="textinput" value="" autocomplete="off" />
                            </td>
                        </tr>
                        <tr class="m_order">
                            <th>优惠券类型：</th>
                            <td>
                            <label for="coupon_type2"><input name="coupon_type" type="radio" id="coupon_type2" class="textinput" value="1" checked/>通用</label>
                            <label for="coupon_type1"><input name="coupon_type" type="radio" id="coupon_type1" class="textinput" value="2" />针对跑团</label> 
                            <label for="coupon_type3"><input name="coupon_type" type="radio" id="coupon_type3" class="textinput" value="3" />套餐</label>
                            </td>
                        </tr>
                        <tr class="m_order">
                            <th>优惠价格：</th>
                            <td><input name="discount" type="text" id="discount" class="textinput" value=""/></td>
                        </tr>
						<tr class="m_order">
                            <th>适用赛事类型：</th>
                            <td>
                            <label for="able_ptype3"><input name="able_ptype" type="radio" id="able_ptype3" class="textinput" value="" checked/>不限</label>
                            <label for="able_ptype1"><input name="able_ptype" type="radio" id="able_ptype1" class="textinput" value="国内"/>国内比赛</label>
                            <label for="able_ptype2"><input name="able_ptype" type="radio" id="able_ptype2" class="textinput" value="海外"/>海外比赛</label>
                            </td>
                        </tr>
                        <tr class="m_order">
                            <th>适用赛事套餐：</th>
                            <td>
                            <label for="able_meal3"><input name="able_meal" type="radio" id="able_meal3" class="textinput" value="" checked/>不限</label>
                            <label for="able_meal1"><input name="able_meal" type="radio" id="able_meal1" class="textinput" value="source" />只限报名</label>
                            <label for="able_meal2"><input name="able_meal" type="radio" id="able_meal2" class="textinput" value="meal" />只限套餐</label>
                            </td>
                        </tr>
                        <tr class="m_order">
                            <th>适用赛事：</th>
                            <td><input name="able_match" type="text" id="able_match" class="textinput w270" value="" readonly="" />
                            </td>
                        </tr>

                        <tr class="m_order">
                            <th>优惠的订单价格标准：</th>
                            <td><input name="min_able_price" type="text" id="min_able_price" class="textinput" value=""/></td>
                        </tr>
                        <tr class="">
                            <th>优惠券生效时间：</th>
                            <td><input name="effective_date" type="text" id="effective_date" class="textinput datepicker" value="" onkeyup=""/></td>
                        </tr>
                        <tr class="m_offineTime">
                            <th>优惠券过期时间：</th>
                            <td><input name="expiry_date" type="text" id="expiry_date" class="textinput datepicker" value="" onkeyup=""/></td>
                        </tr>
                        <tr class="m_places">
                            <th class="w120">生成数量：</th>
                            <td><input type="number" name="num" class="textinput" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_places'], ENT_QUOTES, 'UTF-8', true);?>
" /></td>
                        </tr>                 
                    </table>
                </div>                
                <div class="box-footer">
                    <div class="box-footer-inner">
                    	<input type="submit" value="确定提交" /> 或 <a href="/?s=Classes&a=content&ac=list">取消</a>
                    </div>
                </div>
                </form>
            </div><!--/ con-->           
        </div>    
    </div><!--/ container-->
</div>
<link type="text/css" href="/static/datapicker/timepicker/css/jquery-ui-1.8.17.custom.css" rel="stylesheet" />
     <link type="text/css" href="/static/datapicker/timepicker/css/jquery-ui-timepicker-addon.css" rel="stylesheet" />
    <script type="text/javascript" src="/static/datapicker/timepicker/js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="/static/datapicker/timepicker/js/jquery-ui-1.8.17.custom.min.js"></script>
	<script type="text/javascript" src="/static/datapicker/timepicker/js/jquery-ui-timepicker-addon.js"></script>
    <script type="text/javascript" src="/static/datapicker/timepicker/js/jquery-ui-timepicker-zh-CN.js"></script>
    <script type="text/javascript" src="/static/js/classadd.js?v=1.0"></script>
    <script>
 $('#able_match').addclass({
 	append:$('#main'),
    url:"/?s=MatchV2&a=getlist&id="
 });
function checkform(){
    return true;       
}
$('.datepicker').datetimepicker({
	//showOn: "button",
	//buttonImage: "./css/images/icon_calendar.gif",
	//buttonImageOnly: true,
	showSecond: true,
	timeFormat: 'hh:mm:ss',
	stepHour: 1,
	stepMinute: 1,
	stepSecond: 1
});
</script>
<?php echo $_smarty_tpl->getSubTemplate ('Login/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>