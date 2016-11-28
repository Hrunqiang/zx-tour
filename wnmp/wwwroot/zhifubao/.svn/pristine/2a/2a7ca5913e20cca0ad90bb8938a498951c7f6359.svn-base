<?php /* Smarty version Smarty-3.1.6, created on 2016-08-24 15:12:36
         compiled from "../DataSource/Tpl\Enroll\index.html" */ ?>
<?php /*%%SmartyHeaderCode:21578574697b5e6a037-94376989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53b2950ee527dcb4db31ef1e06a62ab3e62a8b79' => 
    array (
      0 => '../DataSource/Tpl\\Enroll\\index.html',
      1 => 1472006818,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21578574697b5e6a037-94376989',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_574697b608ef6',
  'variables' => 
  array (
    'course' => 0,
    'v' => 0,
    'num' => 0,
    'meal' => 0,
    'attach' => 0,
    'remarks' => 0,
    'matchid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_574697b608ef6')) {function content_574697b608ef6($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Comon/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<title>选择赛事服务</title>
<link rel="stylesheet" href="/static/css/Enroll.css">
<script src="/static/js/zepto.js"></script>
<script src="/static/weui/js/weui.js"></script>
<style type="text/css">
	.weui_cell_bd input::-webkit-input-placeholder{font-size:1.0714285rem;}
	.weui_cells_checkbox .weui_check:checked + .weui_icon_checked:before{margin-left: 0.6428571428571429rem;}
	.weui_select{direction: rtl;}
	.weui_select option{direction: rtl;}
	#currprice_span{font-size: 1.285714rem;font-weight: normal;}
	#price_span{font-size: 1.07142rem;}   
	/*/////////////////////////////////////////////////支付宝样式修改//////////////////////////////////////////////////*/
	.weui_cells_radio .weui_check:checked + .weui_icon_checked:before{content: '';background: url(/static/images/select_logo.png) no-repeat;width: 1.142857142857143rem;height: 0.7857142857142857rem;background-size: 1.071428571428571rem;}
	.weui_cells_checkbox .weui_icon_checked:before{margin-left: 0.5714285714285714rem;font-size: 1.571428571428571rem;}
	.weui_cells_checkbox .weui_check:checked + .weui_icon_checked:before{content: '';width: 1.5rem;height: 1.5rem;background: url(/static/images/select_icon.jpg) no-repeat;border-radius: 50%;/*margin: 0.0714285714285714rem 0 0.0714285714285714rem 0.6428571428571429rem;*/background-size: 1.5rem;}
	.weui_cells:before,.weui_cells:after{left: 1.071428571428571rem;}
	.weui_cell_primary input::-webkit-input-placeholder{color: #CCCCCC;}
	.weui_cells_access:before{display: none;}
	.weui_cells_access:after{display: none;}
	#enroll div:nth-child(2):before{display: none;}
	#enroll div:last-child:after{display: none;}
	.enroll .enroll_lists{padding: 0;}
	.enroll .bz{padding-bottom: 0.7142857142857143rem;}
	.enroll .bz .weui_cells:before{display: none;}
	.enroll .bz .weui_cells:after{display: none;}
	/*.weui_cells{line-height: 1.714285714285714rem;}*/
	.weui_cells .weui_cell{line-height: 1.714285714285714rem;}
	.weui_cells .weui_select_after{line-height: 3.142857142857143rem;}
	.weui_btn{line-height: 3rem;}
	.weui_cells:after{display: none;}
</style>
</head>
<body>
<div class="enroll wrap">
<form action="" method="post" id="enroll_form"> 
    <?php if ($_smarty_tpl->tpl_vars['course']->value){?>
	<div class="enroll_lists" id="enroll">
		<p class="list_title">选择赛程</p>
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
   	</div>
    <?php if ($_smarty_tpl->tpl_vars['meal']->value!="false"){?>
   	<div class="enroll_lists" id="mealBox">
		<p class="list_title">选择套餐</p>
		<div class="weui_cells weui_cells_access">
            <div class="weui_cell weui_cell_select weui_select_after">
                <div class="weui_cell_bd weui_cell_primary">
                    <p>出发城市</p>
                </div>
                <div class="weui_cell_bd  weui_cell_ft">
                    <select class="weui_select" id="mealCitys_select" data-type="price">
                    </select>
                </div>
            </div>
           	<div class="weui_cell weui_cell_select weui_select_after">
                <div class="weui_cell_bd weui_cell_primary">
                    <p>选择套餐</p>
                </div>
                <div class="weui_cell_bd  weui_cell_ft">
                    <select class="weui_select" name="meal" id="meals_selet" data-price="" data-currprice="" data-type="price">
                    </select>
                </div>
            </div>
            <div class="weui_cell weui_cell_select weui_select_after">
                <div class="weui_cell_hd weui_cell_primary">
                    <p>单房差</p>
                </div>
                <div class="weui_cell_bd  weui_cell_ft">
                    <select class="weui_select" name="issingle" data-type="price" id="issingle">
                        <option value="0">无单房差</option>
                        <option value="1">有单房差</option>
                    </select>
                </div>
            </div>
        </div>
	</div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['attach']->value||$_smarty_tpl->tpl_vars['remarks']->value){?>
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
    <?php }?>
	<div class="enroll_lists bz">
		<div class="weui_cells">
			<div class="weui_cell">
	            <div class="weui_cell_bd weui_cell_primary">
	                <p>费用合计</p>
	            </div>
	            <div class="weui_cell_ft"><span class="color_b" id="currprice_span">￥0</span> <del id="price_span">原价6999</del></div>
	        </div>
		</div>
	</div>
	<div class="btn" style="margin-bottom: 8.214285714285714rem;">
        <input type="submit" class="weui_btn weui_btn_warn" value="提交订单" />
    </div>
</form>
<div class="bottom">服务由知行和逸提供</div>
</div>
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
            if(typeof(meal)=="object"){
                for(var key in meal){
                    cityCode = cityCode=="" ? key : cityCode;
                    citys.push({"id":key,"g_name":meal[key][0]});
                }
                mealCitys_select && bind.call(mealCitys_select);
                meals_selet && changeprice.call(meals_selet);
                options.call(mealCitys_select,citys,localStorage.getItem("ZX_YJBM_CITYID")); 

                if(meal[localStorage.getItem("ZX_YJBM_CITYID")][1]){
                    cityCode = localStorage.getItem("ZX_YJBM_CITYID");
                }
                options.call(meals_selet,meal[cityCode][1],localStorage.getItem("ZX_YJBM_MEALID"));

                meals_selet.attr("data-price",meal[cityCode][1][meals_selet.val()]['g_price']).attr("data-currprice",meal[cityCode][1][meals_selet.val()]['g_currprice']).attr("data-singleprice",meal[cityCode][1][meals_selet.val()]['g_singleprice']);
                mealBox.show()
            }else{
                mealBox && mealBox.hide();
            }
        };
    init();
})();
function reflashprice(){
    var currprice = price = 0;
    currprice += parseFloat($("input[name=course]").not(function(){ return !this.checked }).attr("data-currprice"));
    price += parseFloat($("input[name=course]").not(function(){ return !this.checked }).attr("data-price"));
    
    currprice += parseFloat($("#meals_selet").attr("data-currprice"));
    price += parseFloat($("#meals_selet").attr("data-price"));

    if($("#issingle").val()==1){
        currprice += parseFloat($("#meals_selet").attr("data-singleprice"));
        price += parseFloat($("#meals_selet").attr("data-singleprice"));
    }

    $("input[name^=attach]").not(function(){ return !this.checked }).each(function(){
        currprice += parseFloat($(this).attr("data-currprice"));
        price += parseFloat($(this).attr("data-price"));
    });

    currprice = currprice>=0?currprice:"0.00";
    price = price>=0?price:"0.00";
    $("#currprice_span").html( "￥" + currprice+'元');
    $("#price_span").html( "原价" + price+'元' );
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
        url:"/Enroll/step2",
        type: "POST",
        dataType: "json",
        timeout:'6000',
        data: $("#enroll_form").serialize(),
        success:function(data){
            if(data.error==0){
                if(data.login==1){
                    window.location.href = "/Enroll/createorder";
                }else{
                    window.location.href = "/Account/login?type=1";
                }
            }else{
                weui.alert(data.msg);
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
</script>
</body>
</html>
<?php }} ?>