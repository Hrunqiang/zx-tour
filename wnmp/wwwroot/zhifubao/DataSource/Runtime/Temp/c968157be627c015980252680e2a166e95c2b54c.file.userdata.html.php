<?php /* Smarty version Smarty-3.1.6, created on 2016-09-05 10:27:20
         compiled from "../DataSource/Tpl\Enroll\userdata.html" */ ?>
<?php /*%%SmartyHeaderCode:892857ccd808989313-64088390%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c968157be627c015980252680e2a166e95c2b54c' => 
    array (
      0 => '../DataSource/Tpl\\Enroll\\userdata.html',
      1 => 1472813170,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '892857ccd808989313-64088390',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dateline' => 0,
    'step' => 0,
    'match_ptype' => 0,
    'info' => 0,
    'orderid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57ccd808b950d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ccd808b950d')) {function content_57ccd808b950d($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Comon/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="/static/css/time.css">
<style>
	.weui_cells{margin-top: 0;}
	.weui_cell{padding:0 0 0 15px;}
	.weui_cell>div{padding:12px 0 8px 0;}
	.weui_input{padding:0 15px;box-sizing:border-box;}
	.weui_label{width: 5em;}
	.weui_select{height: auto;}
	.weui_cell_select .weui_cell_bd:after{display: none;}
	/*////////////////////////////新加样式/////////////////////////*/
	.icon_s,.icon_d{overflow: hidden;line-height: 1.42857142857rem;}
	.icon_s span,.icon_d span{width: 92%;float: right;font-size: 1rem;}
	.icon_s{margin-bottom: 0px;}
	.icon_d{margin-top: 0.5rem;margin-bottom: 0.785rem;}
	.Passport_dialog .weui_dialog_hd{font-size: 1.2142rem}
	input::-webkit-input-placeholder{font-size: 1.071428571rem;color: #C9C9C9;}
	.Passport_dialog .tw{padding-top: 1.5rem;}
	.weui_dialog_ft{margin-top: 1.5714285rem;}
	.weui_cell_bd{overflow: hidden;}
	.weui_input{float: left;margin-top: 5px;}
	.weui_cell_select .weui_select{color: #C9C9C9;font-size: 1.071428571rem;}
	._cloth_size{color: #C9C9C9;font-size: 1.071428571rem;}
	.weui_dialog_alert .weui_dialog .weui_dialog_bd:before{height: 0;display: none;}
	.weui_label_width{width: 6rem;}
	.weui_dialog_bd{color: #000000;}
	.weui_dialog_bd p:last-child{color: #888888;font-size: 1rem;}
	#countdown{color:#f75d00;}
	.weui_btn_warn{background: #FF2244;}
	.weui_dialog_ft .primary{color: #FF2244;}
</style>
<div class="login wrap">
	<div class="weui_cells msg">
		<p class="msg_desc icon_s"><i></i><span>已为您锁定该名额，<i id="countdown"><?php echo $_smarty_tpl->tpl_vars['dateline']->value;?>
</i>之内未支付，名额自动释放 </span></p>
		<p class="msg_desc icon_d"><i></i><span>需填写必要信息才能支付订单，信息将加密处理，请放心填写</span></p>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['step']->value==1){?>
	<form action="" method="post" id="baseinfoForm">
		<p class="list_title">请填写基本信息（必填）</p>
		<div class="weui_cells weui_cells_form weui_cells_access">
		    <div class="weui_cell">
		        <div class="weui_cell_hd"><label class="weui_label">真实姓名</label></div>
		        <div class="weui_cell_bd weui_cell_primary">
		            <input class="weui_input" type="text" name="name" placeholder="请如实填写，一经确认无法修改">
		        </div>
		    </div>
		    <div class="weui_cell">
		        <div class="weui_cell_hd"><label class="weui_label">身份证</label></div>
		        <div class="weui_cell_bd weui_cell_primary">
		            <input class="weui_input" type="text" name="sfz_code" placeholder="确认后无法修改，将加密处理" >
		        </div>
		    </div>
		    <!--<div class="weui_cell">
		        <div class="weui_cell_hd"><label class="weui_label">出生日期</label></div>
		        <div class="weui_cell_bd weui_cell_primary">
		            <input class="weui_input datepick" type="text" name="birth"  placeholder="请选择生日日期" date-s="1900-1-1" placeholder="2015-08-08" readonly >
		        </div>
		    </div>-->
		    <!--<div class="weui_cell weui_cell_select weui_select_after">
                <div class="weui_cell_bd" style="padding-right: 0.3rem;">
                    <label class="weui_label">性别</label>
                </div>
                <div class="weui_cell_bd  weui_cell_primary">
                    <select class="weui_select" name="sexy" id="sexy">
                    	<option value=""selected="">请选择性别</option>
                        <option value="1" >男</option>
                        <option value="2">女</option>
                    </select>
                </div>
            </div>-->
		    <div class="weui_cell">
		        <div class="weui_cell_hd"><label class="weui_label">国籍</label></div>
		        <div class="weui_cell_bd  weui_cell_primary">
                    <select class="weui_select" name="country"style="font-size: 1.071428571rem;">
                    	<option value="其它">其它</option>
                        <option value="中国" selected="">中国</option>
                    </select>
                </div>
		    </div>
		    <!--<div class="weui_cell">
		        <div class="weui_cell_hd"><label class="weui_label">地区</label></div>
		        <div class="weui_cell_bd  weui_cell_primary">
		            <input class="weui_input areaSelectipt" name="area" type="text"  placeholder="请选择地区"  readonly >
                </div>
		    </div>-->
		    <!--<div class="weui_cell">
		        <div class="weui_cell_hd"><label class="weui_label">详细地址</label></div>
		        <div class="weui_cell_bd weui_cell_primary">
		            <input class="weui_input" type="text" name="addr" placeholder="个别比赛会发纸质材料至该地址" >
		        </div>
		    </div>
		    <div class="weui_cell">
		        <div class="weui_cell_hd"><label class="weui_label">邮编</label></div>
		        <div class="weui_cell_bd weui_cell_primary">
		            <input class="weui_input" type="text" name="postcode" placeholder="请输入邮政编码" >
		        </div>
		    </div>-->
		    <div class="weui_cell">
		        <div class="weui_cell_hd"><label class="weui_label">邮箱</label></div>
		        <div class="weui_cell_bd weui_cell_primary">
		            <input class="weui_input" type="text" name="e_mail" placeholder="收取参赛确认函，请使用本人邮箱" >
		        </div>
		    </div>
		    <!--<div class="weui_cell">
		        <div class="weui_cell_hd"><label class="weui_label">服装尺码</label></div>
		        <div class="weui_cell_bd  weui_cell_primary">
                    <select class="weui_select _cloth_size" name="cloth_size" id="cloth_size">
                    	<option value="" >请选择服装尺码</option>
                        <option value="XS">XS</option>
                        <option value="S" >S</option>
                        <option value="M">M</option>
                        <option value="L" >L</option>
                        <option value="XL">XL</option>
                        <option value="XXL" >XXL</option>
                    </select>
                </div>
		    </div>-->
	    </div>
	    <div class="btn">
	        <input type="submit" value="保存并下一步" class="weui_btn weui_btn_warn">
	    </div>
	</form>
	<?php }elseif($_smarty_tpl->tpl_vars['step']->value==2){?>
	<form action="" method="post" id="otherinfoForm">
		<?php if ($_smarty_tpl->tpl_vars['match_ptype']->value=="海外"){?>
		<!--<p class="list_title">请填写护照信息（可暂时不填）</p>-->
		<!--<div class="weui_cells weui_cells_form weui_cells_access">
		    <div class="weui_cell">
		        <div class="weui_cell_hd"><label class="weui_label">护照号码</label></div>
		        <div class="weui_cell_bd weui_cell_primary">
		            <input class="weui_input" type="text"  placeholder="请输入护照号码PassPort No." name="pass_code">
		        </div>
		    </div>
		    <div class="weui_cell">
		        <div class="weui_cell_hd"><label class="weui_label">中文姓拼音</label></div>
		        <div class="weui_cell_bd weui_cell_primary">
		            <input class="weui_input" type="text" placeholder="请输入中文姓拼音Surname" name="surname">
		        </div>
		    </div>
		    <div class="weui_cell">
		        <div class="weui_cell_hd"><label class="weui_label">中文名拼音</label></div>
		        <div class="weui_cell_bd weui_cell_primary">
		            <input class="weui_input" type="text"  placeholder="请输入中文名拼音Given names" name="en_name">
		        </div>
		    </div>
		    <div class="weui_cell">
		        <div class="weui_cell_hd"><label class="weui_label">签发日期</label></div>
		        <div class="weui_cell_bd weui_cell_primary">
		            <input class="weui_input datepick" type="text"  placeholder="请选择签发日期Date of issues" name="issue_date" date-s="1990-1-1">
		        </div>
		    </div>
		    <div class="weui_cell">
		        <div class="weui_cell_hd"><label class="weui_label">有效期至</label></div>
		        <div class="weui_cell_bd weui_cell_primary">
		            <input class="weui_input datepick" type="text"  placeholder="请选择有效期Date of expiry" name="expiry_date" date-e="2116-1-1">
		        </div>
		    </div>
	    </div>-->
	    <!--<p class="r_hunt"><a href="javascript:;" id="un_re_code">护照不在身边？</a></p>-->
	    <?php }?>
	    <!--<p class="list_title">请填写赛事信息（必填）</p>-->
		<div class="weui_cells weui_cells_form weui_cells_access">
		    <!--<div class="weui_cell">
		        <div class="weui_cell_hd"><label class="weui_label">是否参加过全马</label></div>
		        <div class="weui_cell_bd weui_cell_primary weui_cell_bd_color">
		            <select id="sexy" class="weui_select" name="isattended" style="color: #C9C9C9;">
                    	<option value="">是否参加过马拉松</option>
                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['info']->value['isattended']==="1"){?>selected<?php }?> >是</option>
                        <option value="0" <?php if ($_smarty_tpl->tpl_vars['info']->value['isattended']==="0"){?>selected<?php }?> >否</option>
                    </select>
		        </div>
		    </div>
		    <div class="weui_cell">
		        <div class="weui_cell_hd"><label class="weui_label">马拉松最好成绩</label></div>
		        <div class="weui_cell_bd weui_cell_primary weui_cell_bd_color">
		            <input class="weui_input" type="text" placeholder="请输入个人最好成绩" name="personbest" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['personbest'];?>
">
		        </div>
		    </div>
		    <div class="weui_cell">
		        <div class="weui_cell_hd"><label class="weui_label">最好成绩赛事名称</label></div>
		        <div class="weui_cell_bd weui_cell_primary weui_cell_bd_color">
		            <input class="weui_input" type="text"  placeholder="请输入最好成绩赛事" name="personbestmatch" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['personbestmatch'];?>
">
		        </div>
		    </div>
		    <div class="weui_cell">
		        <div class="weui_cell_hd"><label class="weui_label">预期完赛时间</label></div>
		        <div class="weui_cell_bd weui_cell_primary weui_cell_bd_color">
		            <input class="weui_input" type="text"  placeholder="请注明此次赛事预期完赛成绩" date-s="1949-10-1" name="wishfinish" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['wishfinish'];?>
">
		        </div>
		    </div>
	    </div>
	    <p class="list_title">请填写紧急联系人信息（必填）</p>
		<div class="weui_cells weui_cells_form weui_cells_access">
			<div class="weui_cell">
		        <div class="weui_cell_hd"><label class="weui_label weui_label_width">联系人姓名</label></div>
		        <div class="weui_cell_bd weui_cell_primary">
		            <input class="weui_input" type="text"  placeholder="请输入紧急联系人姓名" name="contact_name">
		        </div>
		    </div>
		    <div class="weui_cell">
		        <div class="weui_cell_hd"><label class="weui_label weui_label_width">手机号</label></div>
		        <div class="weui_cell_bd weui_cell_primary">
		            <input class="weui_input" type="text"  placeholder="请请输入紧急联系人电话" name="contact_phone">
		        </div>
		    </div>
		</div>-->
	    <div class="btn">
	        <input type="submit" value="保存并下一步" class="weui_btn weui_btn_warn">
	    </div>	    
	</form>
	<?php }?>
</div>
<div id="datePlugin"></div>
<script src="/static/weui/js/weui.js"></script>
<script type="text/javascript" src="/static/js/iscroll.js?v=1.2"></script>
<script type="text/javascript" src="/static/js/date.js?v=1.2"></script>
<script type="text/javascript" src="/static/js/function.js?v=1.2"></script>
<!-- <script type="text/javascript" src="/static/js/area.js?v=1.2"></script> -->
<script type="text/javascript">
var YJBM = function(){this.init()},
	shouji_reg = /^1[\d]{10}$/,
	email_reg =/^([a-zA-Z0-9_-|.])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/;
YJBM.prototype ={
	init:function(){
		var me = this
		$('.datepick').each(function(){
			var begin = $(this).attr("date-s")?$(this).attr("date-s"):me.getyearstr();
			var end = $(this).attr("date-e")?$(this).attr("date-e"):me.getyearstr();
			begin = begin.split("-");
			end = end.split("-");
			$(this).date({beginyear:begin[0],endyear:end[0]});
		});
		$(".areaSelectipt").areaSelect({});
		$("#baseinfoForm").submit(function(){
			if(me.check()){
				$.ajax({
	                cache: false,
	                url:"/Enroll/ziliao?step=1",
	                type: "POST",
	                dataType: "json",
	                timeout:'3000',
	                data: $("#baseinfoForm").serialize(),
	                success: function(data){
	                    if(data.msg == "ok"){
	                       	window.location.href = "/Enroll/userdata?orderid=<?php echo $_smarty_tpl->tpl_vars['orderid']->value;?>
";
	                    }else{
	                        weui.alert(data.msg);
	                    }
	                },
            	});
			}
			return false;
		});

		$("#otherinfoForm").submit(function(){
			if(me.othercheck()){
				$.ajax({
	                cache: false,
	                url:"/Enroll/ziliao?step=2",
	                type: "POST",
	                dataType: "json",
	                timeout:'3000',
	                async:false,
	                data: $("#otherinfoForm").serialize(),
	                success: function(data){
	                    if(data.msg == "ok"){
	                       	window.location.href = "/Enroll/userdata?orderid=<?php echo $_smarty_tpl->tpl_vars['orderid']->value;?>
";
	                    }else{
	                        weui.alert(data.msg);
	                    }
	                },
            	});
			}
			return false;
		});
	},
	getyearstr:function(){
		var nowDate = new Date(),
			year = parseInt(nowDate.getFullYear()),
			month = parseInt(nowDate.getMonth()+1),
			day = parseInt(nowDate.getDate());
		return year+"-"+month+"-"+day;
	},
	othercheck:function(){
//		var contact_name = $("input[name=contact_name]").val();
//		if(contact_name == ""){
//			weui.alert("请输入紧急联系人姓名");
//			$("input[name=contact_name]").focus();	
//			return false;
//		}
//
//		var contact_phone = $("input[name=contact_phone]").val();
//		if(contact_phone == ""){
//			weui.alert("请输入紧急联系人电话");
//			$("input[name=contact_phone]").focus();
//			return false;
//		}
//
//		var machrs = shouji_reg.test(contact_phone);
//		if(!machrs){
//			weui.alert("手机号格式不正确！");
//			$("input[name=contact_phone]").focus();
//			return false;
//		}
//		return true;
	},
	check:function(){

		var xingming = $("input[name=name]").val();
		if(xingming == ""){
			weui.alert("请输入您的姓名");
			$("input[name=name]").focus();	
			return false;
		}

		var country = $("select[name=country]").val();
		if(country == ""){
			weui.alert("请选择国家");
			$("select[name=country]").focus();
			return false;
		}
		var sfz_code = $("input[name=sfz_code]").val();
		if(sfz_code == ""){
			weui.alert("身份证号码号不能为空！");
			$("input[name=sfz_code]").focus();
			return false;
		}
		
		if(country=="中国"){
			var checkrs = checkIdcard(sfz_code);
			if(checkrs != "验证通过!" && sfz_code!=""){
				weui.alert("身份证号码格式错误:"+checkrs);
				$("input[name=sfz_code]").focus();
				return false;
			}
		}

//		var birth = $("input[name=birth]").val();
//		if(birth == ""){
//			weui.alert("请选择生日");
//			$("input[name=birth]").focus();
//			return false;
//		}

//		var sexy = $("select[name=sexy]").val();
//		if(sexy == ""){
//			weui.alert("请选择性别");
//			$("select[name=sexy]").focus();
//			return false;
//		}

//		var area = $("input[name=area]").val();
//		if(area == ""){
//			weui.alert("请选择地区");
//			$("input[name=cloth_size]").focus();
//			return false;
//		}
//		var addr = $("input[name=addr]").val();
//		if(addr == ""){
//			weui.alert("请输入详细地址");
//			$("input[name=addr]").focus();
//			return false;
//		}

//		var postcode = $("input[name=postcode]").val();
//		if(postcode == ""){
//			weui.alert("请输入邮政编码");
//			$("input[name=postcode]").focus();
//			return false;
//		}

		var youxiang = $("input[name=e_mail]").val();
		if(youxiang == ""){
			weui.alert("请输入电子邮箱");
			$("input[name=e_mail]").focus();
			return false;
		}

		var machrs = email_reg.test(youxiang);
		if(!machrs){
			weui.alert("您的邮箱格式不正确！");
			$("input[name=e_mail]").focus();
			return false;
		}

//		var cloth_size = $("select[name=cloth_size]").val();
//		if(cloth_size == ""){
//			weui.alert("请选择服装尺码");
//			$("select[name=cloth_size]").focus();
//			return false;
//		}

		return true;
	}
};
Zepto(function($){new YJBM()});
var Passport = {
	create:function(){
		return '<div class="weui_mask"></div><div class="weui_dialog"><div class="weui_dialog_hd"></div><div class="weui_dialog_bd"><p class="tl">1、进入我的赛事</p><p class="pic pic1"><img src="/static/images/passport.png" alt="" /></p><p class="tl">2、进入我的资料</p><p class="pic pic2"><img src="/static/images/passport.png" alt="" /></p><p class="tw">护照不在身边可暂时不填，但请在支付成功24小时内前往“我的赛事”中填写护照信息。</p></div><div class="weui_dialog_ft"><a href="javascript:;" class="weui_btn_dialog primary">知道了</a></div></div>';
	},
	alert : function() {
		var createHTML = Passport.create();
		var alertHtml = '<div class="weui_dialog_alert Passport_dialog" style="display: none;">'+createHTML+'</div>';
		if ($(".weui_dialog_alert").length > 0) {
			$('.weui_dialog_alert').remove();
			$(".featureAlert").empty().html(createHTML);
			$("body").append($(alertHtml));
		} else {
			$("body").append($(alertHtml));
		}
		var weui_alert = $(".weui_dialog_alert");
		weui_alert.show();
		weui_alert.find('.weui_btn_dialog').off("tap").on('tap',
			function() {
			weui_alert.hide();		
		});
	},
}
$("#un_re_code").click(function(){
	Passport.alert();
//	console.log(createHTML);
});
$('#sexy').change(function () {
	if (this.value!='请选择性别') {
		$('#sexy').css({'color':'#000000',})
	} else{
		$('#sexy').css({'color':'#c9c9c9',})
	}
})
$('#cloth_size').change(function () {
	if (this.value!='请选择服装尺码') {
		$('#cloth_size').css({'color':'#000000',})
	} else{
		$('#cloth_size').css({'color':'#c9c9c9',})
	}
})

var m_untilTime = "<?php echo $_smarty_tpl->tpl_vars['dateline']->value;?>
";
function getDate(strDate){
    var st = strDate;
    var a = st.split(" ");
    var b = a[0].split("-");
    var c = a[1].split(":");
    var date = new Date(b[0], b[1]-1, b[2], c[0], c[1], c[2])
    return date;
}
function CountDown(){
    var Now =  new Date().getTime();
    var Until =  getDate(m_untilTime).getTime();
    var countS = Math.floor((Until-Now)/1000);
    var html = "00:00:00";
    if(countS>0){
        var hour = Math.floor(countS/3600);
        if(hour>72){
            html = m_untilTime.substr(0,10);
            $("#countdown_w").html("截止报名");
            clearTimeout(CountDownTiming);
        }else{
            var min = Math.floor((countS%3600)/60);
            var sec = (countS%3600)%60;
             html = (hour<10?"0"+hour:hour)+":"+(min<10?"0"+min:min)+":"+(sec<10?"0"+sec:sec);
        }
    }
   $("#countdown").html(html);
}
var CountDownTiming = setInterval(function(){
    CountDown();
},1000);
</script>
</body>
</html><?php }} ?>