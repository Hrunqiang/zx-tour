<?php /* Smarty version Smarty-3.1.6, created on 2016-11-18 17:24:21
         compiled from "../DataSource/Tpl\Account\login.html" */ ?>
<?php /*%%SmartyHeaderCode:24199581fff3988b696-59081931%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22487da300e9d88f77e7c31805b0b0b672038c3d' => 
    array (
      0 => '../DataSource/Tpl\\Account\\login.html',
      1 => 1479456490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24199581fff3988b696-59081931',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_581fff39a3d8d',
  'variables' => 
  array (
    'type' => 0,
    'phone_error' => 0,
    'phone' => 0,
    'code_error' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581fff39a3d8d')) {function content_581fff39a3d8d($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Comon/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<title>手机验证</title>
<style>  
.login .weui_cells{margin-top: 0;}
.login .weui_cells_log{background: #efeef4;}
.login .weui_cells_log img{width: 9.964285rem;padding: 1.75rem 8.410714rem 1.75rem;}
.login .weui_cells_log p{color: #888888;padding: 0px 0px 0.3571428rem 1.071428rem;font-size: 1rem;}
.login .weui_cell{padding:0 0 0 1.071428rem;}
.login .weui_cell>div{padding:0.7142857rem 0;}
.login .weui_input{padding:0 1.071428rem;box-sizing:border-box;font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;}
.login .weui_icon_warn{margin-right:1.071428rem; }
.weui_label{font-size: 1.142857rem;width: 3.6rem;}
input::-webkit-input-placeholder,
textarea::-webkit-input-placeholder { font-size: 1.071428rem;}
.code_cell{font-size: 1.07142857rem}
.weui_btn_primary{font-size: 1.2857242rem;padding-left: 1rem;padding-right: 1rem;}
.weui_dialog_title{font-size: 1.2142857rem;color: #000000;}
.weui_dialog_bd{font-size: 1rem;color: #888888;padding: 0px 1.071428571428571rem;}
.weui_dialog_ft{font-size: 1.07142857rem;}
.weui_dialog{border-radius: 7px;}
.weui_akert_pading{padding: 0px;}
.weui_dialog_alert .weui_dialog .weui_dialog_bd:before{display: none;}
.icon_s i,.icon_d i{margin-right: 0.9rem;}
/*///////////////////////支付宝////////////////////
.icon_s {margin-top: 2.14285714285714rem;margin-bottom: 0px;}
.icon_d {margin-bottom: 2.14285714285714rem;margin-top: 1.4285714rem;}*/
/*/////////////////////////////////////////支付宝版本///////////////////////////////////*/
#phone_code_btn{color: #26b0ef;}
.r_hunt a{color: #26B0EF!important;}
.login .weui_cells_log{overflow: hidden;}
.login .weui_cells_log img{width: 9.964285rem;padding: 1.75rem 8.410714rem 1.428571428571429rem;float: left;}
.login .weui_input{padding-left: 2.428571428571429rem;}
input::-webkit-input-placeholder{color: #cccccc;}
.space{height: 1.5rem;width: 2px;background: #dddddd;}
.weui_btn_disabled{color: rgba(255,255,255,0.5);}
.weui_btn_dialog.primary{color: #00AAEE;}
.weui_dialog{width: 72%;}
.bottom{bottom: -17.57142857142857rem;}
/*.weui_dialog_alert .weui_dialog .weui_dialog_hd .weui_dialog_title{font-size: ;}*/
.codesending{color: #888888!important;background: #FFFFFF;}
.icon_s{margin-bottom: 0.5714285714285714rem;}
.msg p{line-height: 1rem;}
input.weui_btn{line-height: 3rem;}
.bottom1{padding-top: 0.8571428571428571rem;}
</style>
<div class="login" style="position: relative;">
	<!--更换log-->
	
	<?php if ($_smarty_tpl->tpl_vars['type']->value==1){?>
	<div class="weui_cells msg">
		<p class="msg_desc icon_s"><i></i>输入手机号后，将会为您锁定该名额</p>
		<p class="msg_desc icon_d"><i></i>信息将加密处理，请放心填写</p>
	</div>
	<p class="list_title">请输入手机号，便于客服与您联系</p>
	<?php }else{ ?>
	<div class="weui_cells weui_cells_log">
		<img src="/static/images/zclog.png"/>
		<p>使用手机号码进行注册/登录</p>
	</div>
	<?php }?>
	<form action="/Account/login?type=<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" id="phonecheckForm" method="post" style="padding-bottom: 22.64285714285714rem;">
		<!--<p class="list_title">请输入手机号，将加密处理</p>-->
		<div class="weui_cells weui_cells_form">
		    <div class="weui_cell  <?php if ($_smarty_tpl->tpl_vars['phone_error']->value){?>weui_cell_warn<?php }?>">
		        <div class="weui_cell_hd"><label class="weui_label">手机号</label></div>
		        <div class="weui_cell_bd weui_cell_primary">
		            <input class="weui_input" name="phone" type="number" pattern="[0-9]*" placeholder="请输入手机号,将加密处理" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
">
		        </div>
		        <i class="weui_icon_warn"></i>
		    </div>
		    <div class="weui_cell <?php if ($_smarty_tpl->tpl_vars['code_error']->value){?>weui_cell_warn<?php }?>">
		        <div class="weui_cell_hd"><label class="weui_label">校验码</label></div>
		        <div class="weui_cell_bd weui_cell_primary" style="color: #000000;">
		            <input id="phone_code" class="weui_input" name="code" type="number" placeholder="请输入校验码">
		        </div>
		        <i class="weui_icon_warn"></i>
		        <span class="space"></span>
		        <div class="weui_cell_bd code_cell" id="phone_code_btn" data="1">
		            发送校验码
		        </div>
		    </div>
	    </div>
	    <div class="weui_cells_tips"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
	    <div class="btn">
	        <input id="btn_test" type="submit" value="确认" class="weui_btn weui_btn_disabled weui_btn_warn" disabled="true">
	    </div>
	    <p class="r_hunt"><a href="javascript:;" id="un_re_code">收不到校验码？</a></p>
	</form>
	<?php if ($_smarty_tpl->tpl_vars['type']->value==1){?>
		<div class="bottom bottom1">服务由知行和逸提供</div>
	<?php }else{ ?>
		<div class="bottom">服务由知行和逸提供</div>
	<?php }?>
	
</div>
<script src="/static/weui/js/weui.js"></script>
<script type="text/javascript">
var time = 60;
$("#phone_code_btn").tap(function(){
	var _this = $(this),
		codeStats = _this.attr("data"),
		phone = $('input[name=phone]').val();

	if(codeStats!=1) return false;
	if(phone==''){
		weui.alert('未填写手机号，请检查并重新输入','收不到校验码');
		$('.weui_dialog_title').css({'display':'none'});
//		alert("请输入正确的手机号！");
		return false;
	}
	if(!phoneCheck(phone)){
		weui.alert('手机号码有误，请检查并重新输入','收不到校验码');
		$('.weui_dialog_title').css({'display':'none'});
//		alert("请输入正确的手机号！");
		return false;
	}

	_this.attr("data",0).addClass('codesending').html(time+"S后重发");
	$.ajax({	
		cache: false,
		url:"/Account/verify?phone="+phone,
		type: "POST",
		dataType: "json",
		timeout:'30000',
		data: "",
		success:function(data){
			if(data.error!=0) alert(data.msg);
		},
		error:function(){
			alert("发送失败！");
		}
	});
	clearTimeout(codeTiming);
	var codeTiming = setInterval(function(){
		time--;
		if(time <=0 ) {
			clearTimeout(codeTiming);
			_this.attr("data",1).html("获取验证码").removeClass('codesending');
			time = 60;
		}else{
			_this.html(time+"S后重发");
		}	
	},1000);
});
$("#un_re_code").tap(function(){
	$('.weui_dialog_title').css({'display':'block'});
	weui.alert("<div style='text-align:left;font-size:0.9285714285714286rem'>1.请检查短信是否被手机安全软件拦截<br>2.若号码已停用，请联系客服<br>3.获取更多帮助，请拨打客服电话 4000-842-195</div>","收不到校验码","我知道了");
});
//$("")
//////////////////////////////////////////////////////////////////////////支付宝版本//////////////////////////////////////////////
$('.weui_input').on('input',_check);
function _check(){
	var phone=$("input[name=phone]").val();
	var Val=$('#phone_code').val();
//	alert(222);
	
	if(Val.length==6&&phoneCheck(phone)){
		$('#btn_test').removeAttr('disabled');
		$('#btn_test').removeClass('weui_btn_disabled');
	}else{
		$('#btn_test').addClass('weui_btn_disabled');
		$('#btn_test').attr('disabled','true');
	}
}
</script>
</body>
</html><?php }} ?>