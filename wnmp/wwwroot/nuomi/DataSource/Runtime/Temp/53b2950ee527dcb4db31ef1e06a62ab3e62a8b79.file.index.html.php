<?php /* Smarty version Smarty-3.1.6, created on 2016-11-21 17:27:50
         compiled from "../DataSource/Tpl\Enroll\index.html" */ ?>
<?php /*%%SmartyHeaderCode:299265832be16564f25-43760893%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53b2950ee527dcb4db31ef1e06a62ab3e62a8b79' => 
    array (
      0 => '../DataSource/Tpl\\Enroll\\index.html',
      1 => 1479272855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '299265832be16564f25-43760893',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'course' => 0,
    'meal' => 0,
    'attach' => 0,
    'remarks' => 0,
    'v' => 0,
    'num' => 0,
    'matchid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5832be1692300',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5832be1692300')) {function content_5832be1692300($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Comon/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<title>选择赛事服务</title>
<link rel="stylesheet" href="/static/css/Enroll.css">
<script src="/static/js/zepto.js"></script>
<script src="/static/weui/js/weui.js"></script>
<style type="text/css">
	.weui_cell_bd input::-webkit-input-placeholder{font-size:1.0714285rem;}
	.weui_cells_checkbox .weui_check:checked + .weui_icon_checked:before{margin-left: 8px;}
	.weui_select{direction: rtl;font-size: 1rem;}
	.weui_select option{direction: rtl;}
	#currprice_span{font-size: 1.285714rem;font-weight: normal;}
	#price_span{font-size: 1.07142rem;}
	/*///////////////////////////////////////////新加样式/////////////////////////////////////////////*/
	/*.weui_cells_radio .weui_check:checked + .weui_icon_checked:before{content: '';background: url(/static/images/select_logo.png) no-repeat;width: 1.142857142857143rem;height: 0.7857142857142857rem;background-size: 1.071428571428571rem;}*/
	.weui_cells_checkbox .weui_icon_checked:before{margin-left: 0.5714285714285714rem;font-size: 1rem;}
	/*.weui_cells_checkbox .weui_check:checked + .weui_icon_checked:before{content: '';width: 1.5rem;height: 1.5rem;background: url(/static/images/select_icon.png) no-repeat;border-radius: 50%;margin: 0.0714285714285714rem 0 0.0714285714285714rem 0.6428571428571429rem;background-size: 1.5rem;}*/
	.weui_btn_warn{background: #FF2244;/*border-radius: 0.2857142857142857rem;font-size: 1.142857142857143rem;line-height: 2.428571428571429rem;*/}
	/*.weui_cells:after{display: none;}*/
	.weui_cells:before{left: 1.071428571428571rem;display: none;}
	.enroll .enroll_lists{padding: 0;}
	#enroll div:nth-child(2):before{display: none;}
	#enroll div:last-child:after{display: none;}
	.enroll .bz{padding-bottom: 0.7142857142857143rem;}
	.enroll .bz .weui_cells:before{display: none;}
	.enroll .bz .weui_cells:after{display: none;}
	.weui_cells_access:before{display: none;}
	.weui_cells_access:after{display: none;}
	.weui_cell_select .weui_cell_bd:after{content: '';float: right; margin-top: -0.2857142857142857rem;width: 0.5rem;height: 0.5rem;border-top: 1px solid #C8C8CD;border-right: 1px solid #C8C8CD;-webkit-transform: rotate(45deg);moz-transform: rotate(45deg);-ms-transform: rotate(45deg);-o-transform: rotate(45deg);transform: rotate(45deg);}
	.list_title{padding: 0.2857142857142857rem 1.07142rem 0.1428571428571429rem;color: #7a7a7a;}
	/*.list_title:before{content: "";width: 100%;height: 1px;background: #D9D9D9;-webkit-transform: scale(1,0.5);}*/
	.weui_cells{font-size: 1rem!important;margin-top: 0px;}
	.btn{position: fixed;bottom: 0px;padding: 0.6428571428571429rem 1.142857142857143rem;display: flex;display: -webkit-flex;display: -webkit-box; display: -ms-flexbox;width: 100%;box-sizing: border-box;background: #FFFFFF;border-top: 1px solid #D9D9D9;max-width: 768px;}
	.weui_btn{font-size: 1.071428571428571rem;line-height: 1.785714285714286rem;overflow: hidden;width: 100%;box-sizing: border-box;}
	.btn span{margin-top: 0.2857142857142857rem;font-size: 0.9285714285714286rem;}
	.btn div{overflow: hidden;flex: 1;-webkit-flex: 1;-webkit-box-flex: 1;}
	.btn_ptfu{line-height: 2.5rem;background: #FF2244;}
	.zubie_mask,.single_mask{position: fixed;height: 100%;width: 100%;background: rgba(0,0,0,0.5);top: 0;left: 0;display: none;z-index: 1000;}
	/*.weui_cell_select .weui_cell_bd:after{display: none;}*/
	.price_style:after{display: none;}
	.tap_mask{position: fixed;top: 0;left: 0;height: 100%;width: 100%;z-index: 100;}
	.singel_introduce{position: absolute;top: 50%;-moz-transform: translateY(-50%); -ms-transform: translateY(-50%); -webkit-transform: translateY(-50%); transform: translateY(-50%); left: 4.857142857142857rem; width: 5.857142857142857rem;height: 1.428571428571429rem;background: url(/static/images/singelprice_intro.png) no-repeat;background-size: 100%;}
	.close_singel,.fuwu_close{position: absolute;top: 0px;padding: 1rem 1.142857142857143rem;}
	.close_singel i,.fuwu_close i{background: url(/static/images/close_singel.jpg) no-repeat;background-size: 100%;display: block;width: 0.9285714285714286rem;height: 0.9285714285714286rem;}
	.need_bz{overflow: hidden;white-space: nowrap;text-overflow: ellipsis;}
	.need_bz:before{content: '';margin-right: 0.1428571428571429rem;margin-left: 0.2857142857142857rem;  float: right;margin-top: 0.5714285714285714rem;width: 0.5rem;height: 0.5rem;border-top: 1px solid #C8C8CD;border-right: 1px solid #C8C8CD;-webkit-transform: rotate(45deg);moz-transform: rotate(45deg);-ms-transform: rotate(45deg);-o-transform: rotate(45deg);transform: rotate(45deg);}
	.need_bz p{float: right; text-overflow: ellipsis;width: 17.71428571428571rem;white-space: nowrap;overflow: hidden}
	/*.bz:before{display: none;}*/
	/*.bz{border-top: 1px solid rgba(217,217,217,0.5);border-bottom: 1px solid rgba(217,217,217,0.5);}*/
	.bz:before{position: absolute;left: 0;}
	.bz:after{display: block;content: "";width: 100%;height: 1px;background: #D9D9D9;position: absolute;bottom: 0;left: 0;transform: scaleY(0.5);-webkit-transform: scaleY(0.5);}
	.all_price{font-size: 1.214285714285714rem!important;}
	.pay_price{font-size: 1.571428571428571rem!important;color: #FF2244;}
	.active_bz{width: 100%;height: 100%;background: #F3F6F5;display: none;}
	.active_bz_box{padding: 0 0.8571428571428571rem;background: #FFFFFF;border-top: 1px solid #D9D9D9;padding-bottom: 1.285714285714286rem;margin-bottom: 1.285714285714286rem;}
	.active_bz_title{font-size: 1.071428571428571rem;padding-top: 0.5714285714285714rem;padding-bottom: 0.3571428571428571rem;}
	.active_bz_text{height: 5.785714285714286rem;border: 1px solid #DDDDDD;border-radius: 0.3571428571428571rem;box-sizing: border-box;padding: 0.6428571428571429rem;}
	.active_bz_btn,.active_bz_back{box-sizing: border-box;padding: 0 0.8571428571428571rem;height: 2.5rem;font-size: 1rem;}
	.active_bz_btn input,.active_bz_back input{height: 100%;background: #BBBBBB;}
	.active_bz_back{margin-top: 1.285714285714286rem;}
	.active_bz_back input{background: #FF2244;}
	.zubie_text{padding-right: 2.142857142857143rem;}
	.fuwu_title{text-align: center;font-size: 1.071428571428571rem;padding: 0.5714285714285714rem 0;border-bottom: 1px solid #e8e8e8;}
	.fuwu_bottom{position: absolute;bottom: 0;width: 100%;padding: 0 0.9285714285714286rem 0.5714285714285714rem;box-sizing: border-box;}
	.fuwu_mask{position: fixed;width: 100%;height: 100%;background: rgba(0,0,0,0.5);top: 0; display: none;z-index: 1000;}
	.fuwu_header{position: absolute;bottom: 0;background: #FFFFFF;width: 100%;min-height: 16.5rem;}
	.zubie_header{position: absolute;width: 100%;bottom: 0px;padding-bottom: 4rem;background: #ffffff;}
	.zubie_bottom{position: absolute;bottom: 0;width: 100%;padding: 0 0.9285714285714286rem 0.5714285714285714rem;box-sizing: border-box;}
	.single_header{position: absolute;width: 100%;bottom: 0px;padding-bottom: 1.857142857142857rem;background: #ffffff;}
	.single_header_title{text-align: center;font-size: 1.071428571428571rem;padding: 0.5714285714285714rem 0;border-bottom: 1px solid #e8e8e8;}
	.single_header_text{line-height: 1.928571428571429rem;font-size: 0.8571428571428571rem;padding: 0 0.8571428571428571rem;box-sizing: border-box;}
	.fuwu_name{padding:0.8571428571428571rem 2.142857142857143rem 0.8571428571428571rem 0;}
	.weui_cell_select .weui_select{padding-right: 2.142857142857143rem;}
	/*.type_tc_price{border-top: 1px solid #D9D9D9;}*/
	.type_tc_price:before{position: absolute;left: 0;}
	.stop_tapclick{position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: 1000;}
	.fuwu_price{color: #FF2244;font-size: 1.214285714285714rem;}
	._gprice{color: #FF2244;font-size: 1.214285714285714rem;}
	.line_scale{width: 100%;height: 1px;background: #D9D9D9;transform: scaleY(0.5);-webkit-transform: scaleY(0.5);}
	.select_tc:before{display: none;}
	.other_sev{background: #FFFFFF;font-size: 1rem!important;}
	.other_sev:after{content: "";position: absolute;bottom: 0;left: 0; width: 100%;height: 1px;background: #D9D9D9;transform: scaleY(0.5);-webkit-transform: scaleY(0.5);}
	.set_city{background: #FFFFFF;font-size: 1rem!important;margin-top: 0.6428571428571429rem;}
	/*.weui_cell:first-child:before{display: block;}*/
	.set_city:before{display: block!important;position: absolute;left: 0;}
	.before_hidden:before{display: none;}
	.before_show:before{display: block;}
	.fuwu{display: none;}
</style>
</head>
<body>
<div class="enroll wrap">
<form action="" method="post" id="enroll_form" style="overflow-x: hidden;">
    <div class="weui_cell weui_cell_select weui_select_after set_city">
        <div class="weui_cell_bd weui_cell_primary">
            <p>出发城市</p>
        </div>
        <div class="weui_cell_bd  weui_cell_ft">
            <select class="weui_select" id="mealCitys_select" data-type="price">
            </select>
        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['course']->value){?>
	<div class="enroll_lists" id="enroll">
		<div class="line_scale"></div>
		<p class="list_title">套餐选择</p>
		<div class="line_scale"></div>
		<div class="weui_cell weui_cell_select weui_select_after select_tc" style="background: #FFFFFF;font-size: 1rem!important;">
            <div class="weui_cell_bd weui_cell_primary">
                <p>选择套餐</p>
            </div>
            <div class="weui_cell_bd  weui_cell_ft">
                    <select class="weui_select" name="meal" id="meals_selet" data-price="" data-currprice="" data-type="price">
                </select>
            </div>
         </div>
         <div class="weui_cell weui_cell_select weui_select_after zubie" style="background: #FFFFFF;font-size: 1rem!important;">
            <div class="weui_cell_bd weui_cell_primary" style="box-sizing: border-box;padding: 0.7857142857142857rem 0;">
                <p>选择组别</p>
            </div>
            <div class="weui_cell_bd  weui_cell_ft">
            		<div class="zubie_text">全马</div>
                    <!--<select style="display: none;" class="weui_select" name="" id="" data-price="" data-currprice="" data-type="price">-->
                </select>
            </div>
         </div>
          <div class="weui_cell weui_cell_select weui_select_after type_tc_price" style="background: #FFFFFF;font-size: 1rem!important;">
            <div class="weui_cell_bd weui_cell_primary" style="text-align: right;padding: 0.6428571428571429rem 0;color: #848484;padding-right: 0.8571428571428571rem;">根据您选择的套餐和组别，您的套餐费用<span style="color: #FF2244;font-size: 12px;">￥</span><span class="_gprice"></span></div>
         </div>
   	</div>
    <?php if ($_smarty_tpl->tpl_vars['meal']->value!="false"){?>
   	<div class="enroll_lists" id="mealBox">
   		<div class="line_scale"></div>
		<p class="list_title">其他服务选择</p>
		<div class="line_scale"></div>
		<div></div>
		<div class="weui_cells weui_cells_access">
            <!--<div class="weui_cell weui_cell_select weui_select_after">
                <div class="weui_cell_bd weui_cell_primary">
                    <p>出发城市</p>
                </div>
                <div class="weui_cell_bd  weui_cell_ft">
                    <select class="weui_select" id="mealCitys_select" data-type="price">
                    </select>
                </div>
            </div>-->
           	<!--<div class="weui_cell weui_cell_select weui_select_after">
                <div class="weui_cell_bd weui_cell_primary">
                    <p>选择套餐</p>
                </div>
                <div class="weui_cell_bd  weui_cell_ft">
                    <select class="weui_select" name="meal" id="meals_selet" data-price="" data-currprice="" data-type="price">
                    </select>
                </div>
            </div>-->
            <div class="weui_cell weui_cell_select weui_select_after singel_hidden">
                <div class="weui_cell_hd weui_cell_primary">
                    <p style="float: left;">单房差</p>
                    <div class="singel_introduce"></div>
                </div>
                
                <div class="weui_cell_bd  weui_cell_ft">
                    <select class="weui_select" name="issingle" data-type="price" id="issingle">
                        <option value="0">无单房差</option>
                        <option value="1">有单房差</option>
                    </select>
                </div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['attach']->value){?>
            <div class="weui_cell weui_cell_select weui_select_after fuwu">
                <div class="weui_cell_hd weui_cell_primary">
                    <p>其他配套服务</p>
                </div>
                <div class="weui_cell_bd  weui_cell_ft fuwu_name">保险,Tshirt</div>
            </div>
            <?php }?>
            <div class="weui_cell weui_cell_select weui_select_after other_sev">
            	<div class="weui_cell_primary" style="text-align: right;font-size: 0.9285714285714286rem;padding: 0.7142857142857143rem 0;color: #848484;padding-right: 12px;font-size: 1rem;">您的其他服务费用为<span style="color: #FF2244;font-size: 12px;">￥</span><span class="fuwu_price"></span></div>
         	</div>
        </div>
	</div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['remarks']->value){?>
    <div class="weui_cell bz" style="background: #FFFFFF;margin-top: 0.7142857142857143rem;">
        <div class="weui_cell_hd" style="font-size: 1rem;"><label class="">备注</label></div>
        <div class="weui_cell_bd weui_cell_primary">
        	<div class="weui_cell_ft need_bz">
        		<p style="float: right;font-size: 1rem;">
        			特殊需求请留言
        		</p>
        	</div>
           <!-- <input class="weui_input weui_cell_ft" type="text"  placeholder="<?php echo $_smarty_tpl->tpl_vars['remarks']->value[0]['g_des'];?>
" name="remarks">-->
        </div>
        <input id="bz_text" class="weui_input weui_cell_ft" type="hidden"  value="" name="remarks">
    </div>
    <?php }?>
    <!--<?php if ($_smarty_tpl->tpl_vars['attach']->value||$_smarty_tpl->tpl_vars['remarks']->value){?>
	<div class="enroll_lists bz">
		<p class="list_title">附加优质服务</p>
		<div class="weui_cells weui_cells_checkbox">
            <?php if ($_smarty_tpl->tpl_vars['attach']->value){?>
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['attach']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <label style="padding-right: 9px;" class="weui_cell weui_check_label" for="attach<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">    
                <div class="weui_cell_bd weui_cell_primary">
                    <p><?php echo $_smarty_tpl->tpl_vars['v']->value['g_name'];?>
</p>
                </div>
                <div class="weui_cell_ft"><?php if ($_smarty_tpl->tpl_vars['v']->value['g_currprice']==0){?>限时免费<?php }else{ ?><?php echo intval($_smarty_tpl->tpl_vars['v']->value['g_currprice']);?>
元<?php }?></div>
                <div class="weui_cell_hd">
                    <input type="checkbox" class="weui_check" name="attach[]" id="attach<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" checked="checked" data-price="<?php echo $_smarty_tpl->tpl_vars['v']->value['g_price'];?>
" data-currprice="<?php echo $_smarty_tpl->tpl_vars['v']->value['g_currprice'];?>
" data-type="price" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
                    <i class="weui_icon_checked"></i>
                </div>
            </label>
            <?php } ?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['remarks']->value){?>
            <div class="weui_cell bz">
                <div class="weui_cell_hd"><label class="">备注说明</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input weui_cell_ft" type="text"  placeholder="<?php echo $_smarty_tpl->tpl_vars['remarks']->value[0]['g_des'];?>
" name="remarks">
                </div>
            </div>
            <?php }?>
        </div>
	</div>
    <?php }?>-->
	<!--<div class="enroll_lists bz">
		<div class="weui_cells">
			<div class="weui_cell">
	            <div class="weui_cell_bd weui_cell_primary">
	                <p>费用合计</p>
	            </div>
	            <div class="weui_cell_ft"><span class="color_b" id="currprice_span">￥0</span> <del id="price_span">原价6999</del></div>
	        </div>
		</div>
	</div>-->
	<div class="btn" style="">
		<div style="font-size: 0.9285714285714286rem;color: #282828;">总计: ￥<span class="all_price"></span></div>
		<div style="color: #282828;line-height: 1.571428571428571rem;font-size: 0.9285714285714286rem;">实付:<span style="color: #FF2244;"> ￥</span><span class="pay_price"></span></div>	
        <input style="width: auto;float: right;border-radius: 0.2857142857142857rem;" type="submit" class="weui_btn weui_btn_warn" value="提交订单" />
    </div>
    <!--//////-->
    <div class="fuwu_mask">
	<div class="fuwu_header">
		<div class="fuwu_close"><i></i></div>
		<div class="fuwu_title">配套服务选择</div>
		<?php if ($_smarty_tpl->tpl_vars['attach']->value||$_smarty_tpl->tpl_vars['remarks']->value){?>
	<div class="enroll_lists">
		<!--<p class="list_title">附加优质服务</p>-->
		<div class="weui_cells weui_cells_checkbox">
            <?php if ($_smarty_tpl->tpl_vars['attach']->value){?>
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['attach']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
            <label style="padding-right: 0.6428571428571429rem;" class="weui_cell weui_check_label" for="attach<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">    
                <div class="weui_cell_bd weui_cell_primary">
                    <p class="fuwu_g_name"><?php echo $_smarty_tpl->tpl_vars['v']->value['g_name'];?>
</p>
                </div>
                <div class="weui_cell_ft" style="color: #000000;"><?php if ($_smarty_tpl->tpl_vars['v']->value['g_currprice']==0){?>限时免费<?php }else{ ?><?php if ($_smarty_tpl->tpl_vars['v']->value['g_currprice']>1){?><?php echo intval($_smarty_tpl->tpl_vars['v']->value['g_currprice']);?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['v']->value['g_currprice'];?>
<?php }?>元<?php }?></div>
                <div class="weui_cell_hd">
                    <input type="checkbox" checked="checked" class="weui_check" name="attach[]" id="attach<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['v']->value['g_price'];?>
" data-currprice="<?php echo $_smarty_tpl->tpl_vars['v']->value['g_currprice'];?>
" data-type="price_fuwu" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
                    <i class="weui_icon_checked"></i>
                </div>
            </label>
            <?php } ?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['remarks']->value){?>
            	<!--<input id="bz_text" class="weui_input weui_cell_ft" type="hidden"  value="<?php echo $_smarty_tpl->tpl_vars['remarks']->value[0]['g_des'];?>
" name="remarks">-->
            <!--<div class="weui_cell bz">
                <div class="weui_cell_hd"><label class="">备注说明</label></div>
                <div class="weui_cell_bd weui_cell_primary">
                    <input class="weui_input weui_cell_ft" type="text"  placeholder="<?php echo $_smarty_tpl->tpl_vars['remarks']->value[0]['g_des'];?>
" name="remarks">
                </div>
            </div>-->
            <?php }?>
        </div>
	</div>
    <?php }?>
    	<div class="fuwu_bottom">
			<input class="weui_btn btn_ptfu fuwu_btn" type="button" name="" id="" value="确定" />
		</div>
		<!--<div style="position: absolute;top: 0px;">X</div>
		<div style="text-align: center;font-size: 15px;padding: 8px 0;border-bottom: 1px solid #e8e8e8;">配套服务选择</div>
		<div style="font-size: 14px;padding: 5px 10px;border-bottom: 1px solid #e8e8e8;">
			<span>畅跑天下保险</span>
			<span style="float: right;">100元<i style="width: 15px;height: 15px;float: right; background: url(/static/images/icon_13.png);background-size: 100%;margin-top: 4px;margin-left: 4px;"></i></span>
		</div>
		<div style="font-size: 14px;padding: 5px 10px;border-bottom: 1px solid #e8e8e8;">
			<span>畅跑天下保险</span>
			<span style="float: right;">100元<i style="width: 15px;height: 15px;float:right; background: url(/static/images/icon_14.png);background-size: 100%;margin-top: 4px;margin-left: 4px;"></i></span>
		</div>
		<div style="position: absolute;bottom: 0;width: 100%;padding: 0 13px 8px;box-sizing: border-box;">
			<input class="weui_btn btn_ptfu" type="button" name="" id="" value="确定" />
		</div>-->
	</div>
</div>
		<div class="zubie_mask">
         	<div class="zubie_header">
         	 <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['course']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
				<div class="weui_cells weui_cells_radio">
			        <label class="weui_cell weui_check_label" for="course<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
			            <div class="weui_cell_bd weui_cell_primary">
			                <p><?php echo $_smarty_tpl->tpl_vars['v']->value['g_name'];?>
</p>
			            </div>
			            <div class="weui_cell_ft">
			                <input type="radio" class="weui_check" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['v']->value['g_price'];?>
" data-currprice="<?php echo $_smarty_tpl->tpl_vars['v']->value['g_currprice'];?>
" data-type="price" name="course" id="course<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['num']->value==0){?>checked="checked"<?php }?>>
			                <span class="weui_icon_checked"></span>
			            </div>
			        </label>
	    		</div>
        	<?php } ?>
        	<div class="zubie_bottom">
				<input class="weui_btn btn_ptfu zubie_btn" type="button" name="" id="" value="确定" />
			</div>
        	</div>
        </div>
        <div class="single_mask">
         	<div class="single_header">
         		<div class="close_singel"><i></i></div>
				<div class="single_header_title">单房差说明</div>
				<div class="single_header_text">默认套餐价格为双人拼房时，如果您想选择一个人住，可以选择单房差并支付相应款项。（注：部分酒店房间只允许1人入住，亲属一同入住可能产生额外费用，届时将由入住人自行承担）</div>
        	</div>
        </div>
</form>
</div>
		<div class="active_bz">
	        <div class="active_bz_box" >
	        	<div class="active_bz_title">备注</div>
	        	<div class="active_bz_text">
	        		<textarea style="background: none;border: none;resize: none;width: 100%;height: 100%;" placeholder="输入您的特殊要求" name="" rows="" cols=""></textarea>
	        	</div>
	        </div>
	        <div class="active_bz_btn" style="">
	        	<input class="weui_btn" type="button" value="提交" />
	        </div>
	        <div class="active_bz_back" style="">
	        	<input class="weui_btn" type="button" value="返回" />
	        </div>
        </div>
<!--///////////////////////////////////////////////////弹窗////////////////////-->

        
<?php }else{ ?>
<script>
$(function(){
   weui.alert("赛事正在筹划中...","提示信息","返回赛事介绍",function(){
        window.location.href = "/Matchinfo?m_id=<?php echo $_smarty_tpl->tpl_vars['matchid']->value;?>
";
   }); 
})
</script>
<?php }?>
<script>
var meal= <?php echo $_smarty_tpl->tpl_vars['meal']->value;?>
;
(function MealSelect(){
    var mealCitys_select = $("#mealCitys_select"),
        meals_selet      = $("#meals_selet"),
        mealBox          = $("#mealBox"),
        citys            = [],
        cityCode         = "",
        options = function(arr,id){
            var htmlStr = "";
            for(var key in arr){
                if(typeof(arr[key]) == "string"){
                    if(key==id){
                        htmlStr += '<option data="'+id+'" value="'+key+'" selected>'+arr[key]+'</option>';
                    }else{
                        htmlStr += '<option value="'+key+'">'+arr[key]+'</option>';
                    }
                    
                }else if(typeof(arr[key]) == "object"){
                	if(arr[key]['g_name']=='不限'){
                		$('.set_city').css('display','none');
                	}
                    if(arr[key]['id']==id){
                        htmlStr += '<option data="'+id+'" value="'+arr[key]['id']+'" selected>'+arr[key]['g_name']+'</option>';
                    }else{
                        htmlStr += '<option value="'+arr[key]['id']+'">'+arr[key]['g_name']+'</option>';
                    }
                    
                }
            }
            this.html(htmlStr);
        },
        bind = function(){
            this.on("change",function(){
                cityCode = $(this).val();
                options.call(meals_selet,meal[cityCode][1]);
                meals_selet.attr("data-price",meal[cityCode][1][meals_selet.val()]['g_price']).attr("data-currprice",meal[cityCode][1][meals_selet.val()]['g_currprice']).attr("data-singleprice",meal[cityCode][1][meals_selet.val()]['g_singleprice']);
            });
        },
        changeprice = function(){
            this.on("change",function(){
                $(this).attr("data-price",meal[cityCode][1][$(this).val()]['g_price']).attr("data-currprice",meal[cityCode][1][$(this).val()]['g_currprice']).attr("data-singleprice",meal[cityCode][1][$(this).val()]['g_singleprice']);
            });
        },
        init = function(){
        	console.log(meal);
            if(typeof(meal)=="object"){
                for(var key in meal){
                    cityCode = cityCode=="" ? key : cityCode;
                    citys.push({"id":key,"g_name":meal[key][0]});
                }
                mealCitys_select && bind.call(mealCitys_select);
                meals_selet && changeprice.call(meals_selet);
                options.call(mealCitys_select,citys); 
                options.call(meals_selet,meal[cityCode][1]);
                meals_selet.attr("data-price",meal[cityCode][1][meals_selet.val()]['g_price']).attr("data-currprice",meal[cityCode][1][meals_selet.val()]['g_currprice']).attr("data-singleprice",meal[cityCode][1][meals_selet.val()]['g_singleprice']);
                mealBox.show()
            }else{
                mealBox && mealBox.hide();
            }
        };
    init();
})();
function reflashprice(){
    var currprice = price = _gprice= _singleprice= fuwu_price = 0;
    currprice += parseFloat(parseFloat($("input[name=course]").not(function(){ return !this.checked }).attr("data-currprice")).toFixed(2)) ;
    price += parseFloat(parseFloat($("input[name=course]").not(function(){ return !this.checked }).attr("data-price")).toFixed(2)) ;
    
    currprice +=parseFloat(parseFloat($("#meals_selet").attr("data-currprice")).toFixed(2)) ;
    price += parseFloat(parseFloat($("#meals_selet").attr("data-price")).toFixed(2));
    _gprice=currprice;
    if($("#issingle").val()==1){
    	_singleprice=parseFloat(parseFloat($("#meals_selet").attr("data-singleprice")).toFixed(2)) ;
        currprice += parseFloat(parseFloat($("#meals_selet").attr("data-singleprice")).toFixed(2)) ;
        price += parseFloat(parseFloat($("#meals_selet").attr("data-singleprice")).toFixed(2)) ;
    }
    $("input[name^=attach]").not(function(){ return !this.checked }).each(function(){
    	fuwu_price+=parseFloat(parseFloat($(this).attr("data-currprice")).toFixed(2)) ;
        currprice +=parseFloat(parseFloat($(this).attr("data-currprice")).toFixed(2)) ;
        price += parseFloat(parseFloat($(this).attr("data-price")).toFixed(2)) ;
    });
    currprice = currprice>=0?currprice:"0.00";
    price = price>=0?price:"0.00";
    $('._gprice').html(_gprice);
    $('.fuwu_price').html(_singleprice+fuwu_price);
    $('.all_price').html(currprice);
    $('.pay_price').html(currprice);
    $("#currprice_span").html( "￥" + currprice );
    $("#price_span").html( "原价" + price );
}
$("*[data-type='price']").change(function(){
    reflashprice();
});
reflashprice();
var issenging = false;
$("#enroll_form").submit(function(){
    if(issenging) return false;
    issenging = true;
    $.ajax({
        url:"/Enroll/step2?m_id=<?php echo $_smarty_tpl->tpl_vars['matchid']->value;?>
",
        type: "POST",
        dataType: "json",
        timeout:'3000',
        data: $("#enroll_form").serialize(),
        success:function(data){
            if(data.error==0){
                if(data.login==1){
                    window.location.href = "/Enroll/createorder";
                }else{
                    window.location.href = "/Account/login?type=1";
                }
            }else{
                weui.alert(data.msg,"提示");
            }
            issenging = false;
        },
        error:function(){
            weui.confirm("服务器繁忙！过会再试！","提示",function(){
                window.location.href = "/Matchinfo?m_id=<?php echo $_smarty_tpl->tpl_vars['matchid']->value;?>
";
            });
            issenging = false;
        }
    });
    return false;
});
///////////////////////////////////////////////////////////////////////////////
$(function () {
	$('.zubie').bind('tap',function () {
		$('body').append('<div class="tap_mask"></div>')
		$('.zubie_mask').css('display','block');
		$('.btn').css('display','none');
	})
	$('.zubie_btn').bind('tap',function () {
		$('.zubie_text').html();
		setTimeout(function () {
			$('.tap_mask').remove();
		},400)
		$('.zubie_mask').css('display','none');
		$('.btn').css('display','flex');
		$('.btn').css('display','-webkit-flex');
	})
$('.fuwu').bind('tap',function () {
	$('.fuwu_mask').css('display','block');
	$('body').append('<div class="tap_mask"></div>')
})
$('.fuwu_btn').bind('tap',function () {
	var fuwu_g_name='';
	var num=0;
	reflashprice();
	if($('*[type="checkbox"]').length==$('*[_check="1"]').length){
		fuwu_g_name='&nbsp';
	}
	$('*[type="checkbox"]').each(function () {
		if($(this).attr('_check')!=1){
			num++;
			if(num<=1){
				fuwu_g_name=$(this).parents().find('p').html();
			}else{
				fuwu_g_name=fuwu_g_name+','+$(this).parents().find('p').html()
			}
		}
	})
	$('.fuwu_name').html(fuwu_g_name);
	$('*[type="checkbox"]').removeAttr('check_out');
	$('*[_check="1"]').attr('check_out','true');
	$('.fuwu_mask').css('display','none');
	setTimeout(function () {
			$('.tap_mask').remove();
		},400)
})
$('.weui_cells_radio').bind('tap',function () {
	$('.zubie_text').html($(this).find('p').html());
})
$('.zubie_text').html($('.weui_cells_radio').eq(0).find('p').html());
$('.singel_introduce').bind('tap',function () {
	$('.single_mask').css('display','block');
})
$('.close_singel').bind('tap',function () {
	$('.single_mask').css('display','none');
})

$('.bz').bind('tap',function () {
	$('.wrap').append('<div class="stop_tapclick"></div>');
	$('.wrap').css('display','none');
	$('.active_bz').css('display','block');
})
$('.active_bz_text').bind('input',function () {
	if($('.active_bz_text textarea').val().length>0){
		$('.active_bz_btn input').css('background','#ff2244');
	}else{
		$('.active_bz_btn input').css('background','#bbbbbb');
	}
})
$('.active_bz_btn input').bind('tap',function () {
	setTimeout(function () {
		$('.stop_tapclick').remove();
	},400);
	$('.active_bz_text textarea').blur();
	if($('.active_bz_text textarea').val().length>0){
	$('#bz_text').val($('.active_bz_text textarea').val());
	$('.need_bz p').html($('.active_bz_text textarea').val());
	$('.wrap').css('display','block');
	$('.active_bz').css('display','none');
	}
})
$('.active_bz_back').bind('tap',function () {
	setTimeout(function () {
		$('.stop_tapclick').remove();
	},400)
	$('.active_bz_text textarea').blur();
	$('.wrap').css('display','block');
	$('.active_bz').css('display','none');
})
$('.weui_check_label').bind('touchend',function () {
	if($(this).find('input').attr('_check')==1){
		$(this).find('input').removeAttr('_check');
	}else{
		$(this).find('input').attr('_check','1')
	}
})
$('.fuwu_close').bind('tap',function () {
	$('*[type="checkbox"]').each(function () {
		if($(this).attr('check_out')=='true'){
			$(this).prop('checked',function () {return false;})
		}else{
			$(this).prop('checked',function () {return true;})
		}
	})
	$('*[type="checkbox"]').removeAttr('_check','1');
	$('*[check_out="true"]').attr('_check','1');
	if($('*[check_out="true"]').length==0){
		$('*[type="checkbox"]').prop('checked',function () {
	return true;
})
	}else{
	$('*[check_out="true"]').prop('checked',function () {
	return false;
})
	}
	$('.fuwu_mask').css('display','none');
	$('.tap_mask').css('display','none');
})
var fuwu_g_name='';
$('.fuwu_g_name').each(function (key) {
	if(key<=0){
		fuwu_g_name=$(this).html();
	}
	if(key>0){
	fuwu_g_name=fuwu_g_name+','+$(this).html();
	}
})
$('.fuwu_name').html(fuwu_g_name);

//////////////////////////////判断优质服务//////////////////////////
var yz_fuwu='<?php echo $_smarty_tpl->tpl_vars['attach']->value;?>
';
var boonler=true;
if(yz_fuwu!=''){
	boonler=false;
	$('.fuwu').css('display','flex');
	$('.fuwu').css('display','-webkit-flex');
}
////////////////////判断赛事单独报名//////////////////////
if($('#meals_selet').find('option[data]').html()=='赛事单独报名'&&boonler==true){
	$('#mealBox').css('display','none');
		$('.singel_hidden').css('display','none');
		$('.other_sev').addClass('before_hidden');
	}
if($('#meals_selet').find('option[data]').html()=='赛事单独报名'){
	$('.singel_hidden').css('display','none');
	$('.fuwu').addClass('before_hidden');
}

/////////////
$('#meals_selet').bind('change',function () {
	var val=$(this).val();
	if($(this).find('option[value="'+val+'"]').html()=='赛事单独报名'&&boonler==true){
		$('.singel_hidden').css('display','none');
		$('.fuwu').addClass('before_hidden');
		$('.other_sev').addClass('before_hidden');
		$('#mealBox').css('display','none');
	}else if($(this).find('option[value="'+val+'"]').html()=='赛事单独报名'&&boonler==false){
		$('.singel_hidden').css('display','none');
		$('.fuwu').addClass('before_hidden');
	}else{
		$('.singel_hidden').css('display','flex');
		$('.fuwu').removeClass('before_hidden');
		$('.other_sev').removeClass('before_hidden');
		$('#mealBox').css('display','block');
	}
})


})

</script>
</body>
</html>
<?php }} ?>