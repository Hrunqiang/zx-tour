<?php /* Smarty version Smarty-3.1.6, created on 2016-11-18 14:48:03
         compiled from "../DataSource/Tpl\Account\login.html" */ ?>
<?php /*%%SmartyHeaderCode:3597581b1056f02661-55997826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22487da300e9d88f77e7c31805b0b0b672038c3d' => 
    array (
      0 => '../DataSource/Tpl\\Account\\login.html',
      1 => 1479368387,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3597581b1056f02661-55997826',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_581b10570bd3e',
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
<?php if ($_valid && !is_callable('content_581b10570bd3e')) {function content_581b10570bd3e($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Comon/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

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
	.weui_dialog_bd{font-size: 1rem;color: #888888;padding: 0px 37px;}
	.weui_dialog_ft{font-size: 1.07142857rem;}
	.weui_dialog{border-radius: 7px;}
	.weui_akert_pading{padding: 0px;}
	.weui_dialog_alert .weui_dialog .weui_dialog_bd:before{display: none;}
	.icon_s i,.icon_d i{margin-right: 0.9rem;}
	.icon_s {margin-top: 2.14285714285714rem;margin-bottom: 0px;}
	.icon_d {margin-bottom: 2.14285714285714rem;margin-top: 1.4285714rem;}
	.tpyz{width: 100%;height: 100%; background: rgba(0,0,0,0.6);position: absolute;top: 0;left: 0;display: none;}
	._alert_inner{margin: 0 auto;}
	/*._alert_inner img{width: 100px;height: 30px;}*/
	._alert_inner input{width: 100px;}
	._alert_out{border-radius: 4px; background: #FFFFFF;width: 265px;position: absolute;left: 50%;top: 50%;-webkit-transform: translate3d(-50%,-50%,0);-moz-transform: translate3d(-50%,-50%,0);-ms-transform: translate3d(-50%,-50%,0);-o-transform: translate3d(-50%,-50%,0);transform: translate3d(-50%,-50%,0);}
</style>
<div class="login">
	<!--更换log-->
	
	<?php if ($_smarty_tpl->tpl_vars['type']->value==1){?>
	<div class="weui_cells msg" style="padding: 0 3.857142857142857rem;font-size: 1rem!important;">
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
" id="phonecheckForm" method="post">
		<!--<p class="list_title">请输入手机号，将加密处理</p>-->
		<div class="weui_cells weui_cells_form">
		    <div class="weui_cell  <?php if ($_smarty_tpl->tpl_vars['phone_error']->value){?>weui_cell_warn<?php }?>">
		        <div class="weui_cell_hd"><label class="weui_label">手机号</label></div>
		        <div class="weui_cell_bd weui_cell_primary">
		            <input class="weui_input" name="phone" type="text" placeholder="请输入手机号,将加密处理" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
">
		        </div>
		        <i class="weui_icon_warn"></i>
		    </div>
		    <div class="weui_cell <?php if ($_smarty_tpl->tpl_vars['code_error']->value){?>weui_cell_warn<?php }?>">
		        <div class="weui_cell_hd"><label class="weui_label">验证码</label></div>
		        <div class="weui_cell_bd weui_cell_primary" style="color: #000000;">
		            <input class="weui_input" name="code" type="number" placeholder="请输入验证码">
		        </div>
		        <i class="weui_icon_warn"></i>
		        <div class="weui_cell_bd code_cell" id="phone_code_btn" data="1">
		            获取验证码
		        </div>
		    </div>
	    </div>
	    <div class="weui_cells_tips"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</div>
	    <div class="btn">
	        <input type="submit" value="下一步" class="weui_btn weui_btn_primary">
	    </div>
	    <p class="r_hunt"><a href="javascript:;" id="un_re_code">收不到验证码？</a></p>
	</form>
	<div class="tpyz">
		<div class="close" style="position: absolute;right: 0; color:#FFFFFF;width: 2.714285714285714rem;height: 2.714285714285714rem;line-height: 2.714285714285714rem;">关闭</div>
		<div class="_alert_out">
			<div class="_alert_inner">
				<img class="check_img" style="display: block;margin: 0 auto;padding: 10px 0;" src="/Account/imgverify?width=150&height=45" onclick="this.src=this.src+'?'+Math.random()" alt="" />
	    		<input style="display: block;margin: 0 auto;padding: 10px 0;" type="text" />
	    		<div style="margin: 10px auto;padding: 5px;text-align: center;width: 60px;background: #CCCCCC;border-radius: 4px;" class="tj">提交</div>
    	<!--< img  src="/Account/imgverify?width=100&height=30"  onclick="this.src=this.src+'?'+Math.random()" alt="">-->
			</div>
		</div>
		
    </div>
</div>
<script src="/static/weui/js/weui.js"></script>
<script type="text/javascript">
var time = 60;
var userAgentInfo = navigator.userAgent;
    var Agents = ["Android", "iPhone",
                "SymbianOS", "Windows Phone",
                "iPad", "iPod"];
    var flag = true;
    for (var v = 0; v < Agents.length; v++) {
        if (userAgentInfo.indexOf(Agents[v]) > 0) {
            flag = false;
            break;
        }
    }
    ///////////////////////////////////////////判断pc端
    if(flag==true){
			    	$("#phone_code_btn").click(function(){
				var _this = $(this),
					codeStats = _this.attr("data"),
					phone = $('input[name=phone]').val();
			
				if(codeStats!=1) return false;
				if(!phoneCheck(phone)){
					alert("请输入正确的手机号！");
					return false;
				}
			$('.tpyz').css('display','block');
			$('.tj').click(function () {
				_getcode(_this);
			})
				
			});
			$("#un_re_code").click(function(){
				weui.alert("<div style='text-align:left;'>1.请检查短信是否被手机安全软件拦截<br>2.若号码已停用，请联系客服<br>3.获取更多帮助，请拨打客服电话 4000-842-195</div>","收不到验证码","我知道了");
			});
    }else{
		    	$("#phone_code_btn").tap(function(){
			var _this = $(this),
				codeStats = _this.attr("data"),
				phone = $('input[name=phone]').val();
		
			if(codeStats!=1) return false;
			if(!phoneCheck(phone)&&!/^abr[\d]+$/.test(phone)){
				alert("请输入正确的手机号！");
				return false;
			}
			$('.tpyz').css('display','block');
			$('.tj').click(function () {
				_getcode(_this);
			})
//			weui.alert("<div style='text-align:left;'><img src='/Account/imgverify?width=100&height=30' onclick='this.src=this.src+'?'+Math.random()' alt='' /></div>","验证图片验证码","确定")
//			_this.attr("data",0).addClass('codesending').html(time+"S后重新获取");
			
//			$.ajax({	
//				cache: false,
//				url:"/Account/verify?phone="+phone,
//				type: "POST",
//				dataType: "json",
//				timeout:'30000',
//				data: "",
//				success:function(data){
//					if(data.error!=0) alert(data.msg);
//				},
//				error:function(){
//					alert("发送失败！");
//				}
//			});
			
		});
		$("#un_re_code").tap(function(){
			weui.alert("<div style='text-align:left;'>1.请检查短信是否被手机安全软件拦截<br>2.若号码已停用，请联系客服<br>3.获取更多帮助，请拨打客服电话 4000-842-195</div>","收不到验证码","我知道了");
		});
    }
    $('.close').click(function () {
    	$('.tpyz').css('display','none');
    })
function _getcode(a) {
	var str=$('.tpyz input').val();
	var _phone=$('input[name=phone]').val();
	if(str==''){
		return false;
	}
				$.ajax({	
					cache: false,
					url:"/Account/verify",
					type: "POST",
					dataType: "json",
					timeout:'30000',
					data: {phone:_phone,verify:str},
					success:function(data){
						if(data.error!=0){
							var check_img_src=$('.check_img').attr('src');
							$('.check_img').attr('src',check_img_src+'?'+Math.random());
							alert(data.msg);
						}else{
							$('.tpyz').hide();
							a.attr("data",0).addClass('codesending').html(time+"S后重新获取");
							clearTimeout(codeTiming);
							var codeTiming = setInterval(function(){
								time--;
								if(time <=0 ) {
									clearTimeout(codeTiming);
									a.attr("data",1).html("获取验证码").removeClass('codesending');
									time = 60;
								}else{
									a.html(time+"S后重新获取");
								}	
							},1000);
						}
										
					},
					error:function(){
						alert("发送失败！");
					}
				});
}
//$("")
</script>
</body>
</html><?php }} ?>