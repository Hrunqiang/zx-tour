<?php /* Smarty version Smarty-3.1.6, created on 2016-06-08 18:33:29
         compiled from "../DataSource/Tpl\User\userinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:192475746c050853e02-01066398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52183c10c030deba17cd13c5c511db0c5d28fbcd' => 
    array (
      0 => '../DataSource/Tpl\\User\\userinfo.html',
      1 => 1465382005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192475746c050853e02-01066398',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5746c050a5b91',
  'variables' => 
  array (
    'userstate' => 0,
    'phone' => 0,
    'info' => 0,
    'updateres' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5746c050a5b91')) {function content_5746c050a5b91($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Comon/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="/static/css/time.css">
<title>我的资料</title>
<style>
	.weui_cells{margin-top: 0;}
	.weui_cell{padding:0 1.07142rem}
	.weui_cell>div{padding:0.7142857rem 0;/*font-size: 1.07142rem;*/}
	.weui_input{padding:0 1.071428rem;box-sizing:border-box;}
	.weui_label{width: 5em;}
	.weui_select{height: auto;font-size: 1.1rem;}
	.weui_cell_select .weui_cell_bd:after{display: none;}
	/*//////////////////新加样式/////////////////*/
	.msg_desc{font-size: 1rem;}
	.weui_cell_bd_color{color: #888888;}
	.weui_cell_bd_color_1{color: #C9C9C9;}
	.userinfo_head{height: 5.1428rem;padding-bottom: 0;margin-bottom: 0;}
	input::-webkit-input-placeholder{font-size: 1.1rem;color: #C9C9C9;} 
	.weui_label{width: 6rem;}
	.weui_cell_bd_1  {width: 17.37385714285714rem;}
	.btn{padding-bottom: 1.214285714285714rem;}
</style>
<div class="wrap user" >
	<div class="weui_cells msg userinfo_head" style="text-align: center;">
		<p class="msg_desc icon_s"><i style="margin-right: 0.3571428571428571rem;"></i>智能加密处理，保障您的信息安全</p>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['userstate']->value<3){?>
	<form action="/User/userinfo" method="post" id="userFormbase">
		<p class="list_title">基本信息</p>
		<div class="weui_cells weui_cells_form weui_cells_access">
		    <div class="weui_cell">
	            <div class="weui_cell_hd"><label class="weui_label">真实姓名</label></div>
		        <div class="weui_cell_bd weui_cell_primary">
		            <input class="weui_input" type="text" name="name" placeholder="确认后无法修改，将加密处理" >
		        </div>
        	</div>
			<div class="weui_cell">
	            <div class="weui_cell_hd"><label class="weui_label">身份证</label></div>
		        <div class="weui_cell_bd weui_cell_primary">
		            <input class="weui_input" type="text" name="sfz_code" placeholder="确认后无法修改，将加密处理" >
		        </div>
        	</div>
        	<div class="weui_cell">
	            <div class="weui_cell_hd"><label class="weui_label">手机号</label></div>
		        <div class="weui_cell_bd weui_cell_primary">
		            <input class="weui_input" type="text" name="phone" placeholder="确认后无法修改，将加密处理" value="<?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
">
		        </div>
        	</div>
        	<div class="weui_cell">
	            <div class="weui_cell_hd"><label class="weui_label">生日</label></div>
		        <div class="weui_cell_bd weui_cell_primary">
		            <input class="weui_input datepick" type="text" name="birth"  placeholder="请选择生日日期" class="datepick" date-s="1900-1-1" placeholder="2015-08-08" readonly >
		        </div>
        	</div>
			<div class="weui_cell">
	            <div class="weui_cell_bd" style="padding-right: 0.3rem;">
                    <label class="weui_label">性别</label>
                </div>
                <div class="weui_cell_bd  weui_cell_primary">
                    <select id="sexy" class="weui_select" name="sexy"style="color: #C9C9C9;">
                    	<option value=""selected="">请选择性别</option>
                        <option value="1">男</option>
                        <option value="2">女</option>
                    </select>
                </div>
        	</div>
			<div class="weui_cell">
	            <div class="weui_cell_hd"><label class="weui_label">国籍</label></div>
		        <div class="weui_cell_bd  weui_cell_primary">
                    <select class="weui_select" name="country">
                        <option value="中国" selected="">中国</option>
                        <option value="其它">其它</option>
                    </select>
                </div>
        	</div>
        	<div class="weui_cell">
	            <div class="weui_cell_hd"><label class="weui_label">地区</label></div>
		        <div class="weui_cell_bd  weui_cell_primary">
		            <input class="weui_input areaSelectipt" name="area" type="text"  placeholder="请选择地区"  readonly >
                </div>
        	</div>
			
			<div class="weui_cell">
	            <div class="weui_cell_hd"><label class="weui_label">详细地址</label></div>
		        <div class="weui_cell_bd weui_cell_primary">
		            <input class="weui_input" type="text" name="addr" placeholder="请输入街道门牌信息" >
		        </div>
        	</div>

        	<div class="weui_cell">
	            <div class="weui_cell_hd"><label class="weui_label">邮编</label></div>
		        <div class="weui_cell_bd weui_cell_primary">
		            <input class="weui_input" type="text" name="postcode" placeholder="请输入邮政编码">
		        </div>
        	</div>

        	<div class="weui_cell">
	            <div class="weui_cell_hd"><label class="weui_label">邮箱</label></div>
		        <div class="weui_cell_bd weui_cell_primary">
		            <input class="weui_input" type="text" name="e_mail" placeholder="请输入E-mail地址">
		        </div>
        	</div>

        	<div class="weui_cell">
	            <div class="weui_cell_hd"><label class="weui_label">服装尺码</label></div>
		        <div class="weui_cell_bd  weui_cell_primary">
                    <select id="cloth_size" class="weui_select" name="cloth_size" style="color: #C9C9C9;">
                        <option value="XS">XS</option>
                        <option value="S" >S</option>
                        <option value="M">M</option>
                        <option value="L" >L</option>
                        <option value="XL">XL</option>
                        <option value="XXL" >XXL</option>
                    </select>
                </div>
        	</div>
	    </div>
	<?php }else{ ?>
	<form action="/User/userinfo" method="post" id="userForm">
		<p class="list_title">基本信息</p>
		<div class="weui_cells weui_cells_form weui_cells_access">
		    <div class="weui_cell">
	            <div class="weui_cell_bd weui_cell_primary">
	                <p>真实姓名</p>
	            </div>
	            <div class="weui_cell_bd weui_cell_bd_1"><?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
</div>
        	</div>
			<div class="weui_cell">
	            <div class="weui_cell_bd weui_cell_primary">
	                <p>身份证</p>
	            </div>
	            <div class="weui_cell_bd weui_cell_bd_1"><?php echo $_smarty_tpl->tpl_vars['info']->value['sfz_code'];?>
</div>
        	</div>
        	<div class="weui_cell">
	            <div class="weui_cell_bd weui_cell_primary">
	                <p>手机号</p>
	            </div>
	            <div class="weui_cell_bd weui_cell_bd_1"><?php if ($_smarty_tpl->tpl_vars['info']->value['phone']){?><?php echo $_smarty_tpl->tpl_vars['info']->value['phone'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
<?php }?></div>
        	</div>
        	<div class="weui_cell">
	            <div class="weui_cell_bd weui_cell_primary">
	                <p>生日</p>
	            </div>
	            <div class="weui_cell_bd weui_cell_bd_1"><?php echo $_smarty_tpl->tpl_vars['info']->value['birth'];?>
</div>
        	</div>
			<div class="weui_cell">
	            <div class="weui_cell_bd weui_cell_primary">
	                <p>性别</p>
	            </div>
	            <div class="weui_cell_bd weui_cell_bd_1"><?php if ($_smarty_tpl->tpl_vars['info']->value['sexy']==1){?>男<?php }else{ ?>女<?php }?></div>
        	</div>
			<div class="weui_cell">
	            <div class="weui_cell_bd weui_cell_primary">
	                <p>国籍</p>
	            </div>
	            <div class="weui_cell_bd weui_cell_bd_1"><?php echo $_smarty_tpl->tpl_vars['info']->value['country'];?>
</div>
        	</div>
<!--         	<div class="weui_cell">
	            <div class="weui_cell_bd weui_cell_primary">
	                <p>地区</p>
	            </div>
	            <div class="weui_cell_bd weui_cell_bd_1 weui_cell_bd_color"><?php echo $_smarty_tpl->tpl_vars['info']->value['area'];?>
</div>
        	</div>
			
			<div class="weui_cell">
	            <div class="weui_cell_bd weui_cell_primary">
	                <p>详细地址</p>
	            </div>
	            <div class="weui_cell_bd weui_cell_bd_1 weui_cell_bd_color"><?php echo $_smarty_tpl->tpl_vars['info']->value['addr'];?>
</div>
        	</div>

        	<div class="weui_cell">
	            <div class="weui_cell_bd weui_cell_primary">
	                <p>邮箱</p>
	            </div>
	            <div class="weui_cell_bd weui_cell_bd_1 weui_cell_bd_color"><?php echo $_smarty_tpl->tpl_vars['info']->value['e_mail'];?>
</div>
        	</div>

        	<div class="weui_cell">
	            <div class="weui_cell_bd weui_cell_primary">
	                <p>服装尺码</p>
	            </div>
	            <div class="weui_cell_bd weui_cell_bd_1 weui_cell_bd_color"><?php echo $_smarty_tpl->tpl_vars['info']->value['cloth_size'];?>
</div>
        	</div> -->
        	<div class="weui_cell">
	            <div class="weui_cell_hd"><label class="weui_label">地区</label></div>
		        <div class="weui_cell_bd weui_cell_bd_1 weui_cell_bd_color">
		            <input class="weui_input areaSelectipt" name="area" type="text"  placeholder="请选择地区"  readonly value="<?php echo $_smarty_tpl->tpl_vars['info']->value['area'];?>
">
                </div>
        	</div>
			
			<div class="weui_cell">
	            <div class="weui_cell_hd"><label class="weui_label">详细地址</label></div>
		        <div class="weui_cell_bd weui_cell_bd_1 weui_cell_bd_color">
		            <input class="weui_input" type="text" name="addr" placeholder="请输入街道门牌信息" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['addr'];?>
">
		        </div>
        	</div>

        	<div class="weui_cell">
	            <div class="weui_cell_hd"><label class="weui_label">邮编</label></div>
		        <div class="weui_cell_bd weui_cell_bd_1 weui_cell_bd_color">
		            <input class="weui_input" type="text" name="postcode" placeholder="请输入邮政编码" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['postcode'];?>
">
		        </div>
        	</div>

        	<div class="weui_cell">
	            <div class="weui_cell_hd"><label class="weui_label">邮箱</label></div>
		        <div class="weui_cell_bd weui_cell_bd_1 weui_cell_bd_color">
		            <input class="weui_input" type="text" name="e_mail" placeholder="请输入E-mail地址" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['e_mail'];?>
">
		        </div>
        	</div>

        	<div class="weui_cell">
	            <div class="weui_cell_hd"><label class="weui_label">服装尺码</label></div>
		        <div class="weui_cell_bd weui_cell_bd_1 weui_cell_bd_color">
                    <select id="cloth_size" class="weui_select " name="cloth_size" style="color: #888888;">
                        <option value="XS" <?php if ($_smarty_tpl->tpl_vars['info']->value['cloth_size']=="XS"){?>selected<?php }?>>XS</option>
                        <option value="S" <?php if ($_smarty_tpl->tpl_vars['info']->value['cloth_size']=="S"){?>selected<?php }?>>S</option>
                        <option value="M" <?php if ($_smarty_tpl->tpl_vars['info']->value['cloth_size']=="M"){?>selected<?php }?>>M</option>
                        <option value="L" <?php if ($_smarty_tpl->tpl_vars['info']->value['cloth_size']=="L"){?>selected<?php }?>>L</option>
                        <option value="XL" <?php if ($_smarty_tpl->tpl_vars['info']->value['cloth_size']=="XL"){?>selected<?php }?>>XL</option>
                        <option value="XXL" <?php if ($_smarty_tpl->tpl_vars['info']->value['cloth_size']=="XXL"){?>selected<?php }?> >XXL</option>
                    </select>
                </div>
        	</div>
	    </div>
		<?php }?>
		<p class="list_title">护照信息</p>
		<div class="weui_cells weui_cells_form weui_cells_access">
		    <div class="weui_cell">
		        <div class="weui_cell_hd"><label class="weui_label">护照号码</label></div>
		        <div class="weui_cell_bd weui_cell_primary weui_cell_bd_color">
		            <input class="weui_input" type="text"  placeholder="请输入护照号码PassPort No." name="pass_code" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['pass_code'];?>
">
		        </div>
		    </div>
		    <div class="weui_cell">
		        <div class="weui_cell_hd"><label class="weui_label">中文姓拼音</label></div>
		        <div class="weui_cell_bd weui_cell_primary weui_cell_bd_color">
		            <input class="weui_input" type="text" placeholder="请以护照姓拼音为准" name="surname" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['surname'];?>
">
		        </div>
		    </div>
		    <div class="weui_cell">
		        <div class="weui_cell_hd"><label class="weui_label">中文名拼音</label></div>
		        <div class="weui_cell_bd weui_cell_primary weui_cell_bd_color">
		            <input class="weui_input" type="text"  placeholder="请以护照名拼音为准" name="en_name" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['en_name'];?>
">
		        </div>
		    </div>
		    <div class="weui_cell">
		        <div class="weui_cell_hd"><label class="weui_label">签发日期</label></div>
		        <div class="weui_cell_bd weui_cell_primary weui_cell_bd_color">
		            <input class="weui_input datepick" type="text"  placeholder="请选择签发日期Date of issues" date-s="1949-10-1" name="issue_date" <?php if (substr($_smarty_tpl->tpl_vars['info']->value['issue_date'],0,10)!='0000-00-00'){?>value="<?php echo substr($_smarty_tpl->tpl_vars['info']->value['issue_date'],0,10);?>
"<?php }?> readonly>
		        </div>
		    </div>
		    <div class="weui_cell">
		        <div class="weui_cell_hd"><label class="weui_label">有效期至</label></div>
		        <div class="weui_cell_bd weui_cell_primary weui_cell_bd_color">
		            <input class="weui_input datepick" type="text"  placeholder="请选择有效期Date of expiry" name="expiry_date" date-e="2116-1-1" <?php if (substr($_smarty_tpl->tpl_vars['info']->value['expiry_date'],0,10)!='0000-00-00'){?>value="<?php echo substr($_smarty_tpl->tpl_vars['info']->value['expiry_date'],0,10);?>
"<?php }?> readonly>
		        </div>
		    </div>
	    </div>

	    <p class="list_title">赛事信息</p>
		<div class="weui_cells weui_cells_form weui_cells_access">
		    <div class="weui_cell">
		        <div class="weui_cell_hd"><label class="weui_label">是否参加过全马</label></div>
		        <div class="weui_cell_bd weui_cell_primary weui_cell_bd_color">
		            <select id="sexy" class="weui_select" name="isattended" style="color: #888888;">
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

	    <p class="list_title">紧急联系人信息</p>
		<div class="weui_cells weui_cells_form weui_cells_access">
			<div class="weui_cell">
		        <div class="weui_cell_hd"><label class="weui_label">联系人姓名</label></div>
		        <div class="weui_cell_bd weui_cell_primary weui_cell_bd_color">
		            <input class="weui_input" type="text"  placeholder="请输入紧急联系人姓名" name="contact_name" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['contact_name'];?>
">
		        </div>
		    </div>
		    <div class="weui_cell">
		        <div class="weui_cell_hd"><label class="weui_label">手机号</label></div>
		        <div class="weui_cell_bd weui_cell_primary weui_cell_bd_color">
		            <input class="weui_input" type="text"  placeholder="请请输入紧急联系人电话" name="contact_phone" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['contact_phone'];?>
">
		        </div>
		    </div>
		</div>
	    <div class="btn" style="">
	        <input type="submit" value="保存" class="weui_btn weui_btn_primary">
	    </div>
	</form>
</div>
<div id="datePlugin"></div>
<script src="/static/weui/js/weui.js"></script>
<script type="text/javascript" src="/static/js/iscroll.js?v=1.2"></script>
<script type="text/javascript" src="/static/js/date.js?v=1.2"></script>
<script type="text/javascript" src="/static/js/function.js?v=1.2"></script>
<script type="text/javascript">
<?php echo $_smarty_tpl->tpl_vars['updateres']->value;?>

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
		$("#userFormbase").submit(function(){
			if(me.check()){
				$.ajax({
	                cache: false,
	                url:"/User/saveuserinfo",
	                type: "POST",
	                dataType: "json",
	                timeout:'3000',
	                data: $("#userFormbase").serialize(),
	                success: function(data){
	                    if(data.msg == "ok"){
	                       	weui.Loading.success(2000,"保存成功");
		                    setTimeout(function(){
		                        window.location.href = "/User/userinfo";
		                    },2000);
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
	check:function(){

		var xingming = $("input[name=name]").val();

		if(xingming == ""){
			weui.alert("请输入您的姓名");
			$("input[name=name]").focus();	
			return false;
		}

		var sfz_code = $("input[name=sfz_code]").val();
		if(sfz_code == ""){
			weui.alert("证件号码号不能为空！");
			$("input[name=zjcode]").focus();
			return false;
		}

		var checkrs = sfz_code&&checkIdcard(sfz_code);
		if(checkrs != "验证通过!"){
			weui.alert(checkrs);
			$("input[name=zjcode]").focus();
			return false;
		}

		var birth = $("input[name=birth]").val();
		if(birth == ""){
			weui.alert("请选择生日");
			$("input[name=birth]").focus();
			return false;
		}

		var sexy = $("select[name=sexy]").val();
		if(sexy == ""){
			weui.alert("请选择性别");
			$("select[name=sexy]").focus();
			return false;
		}

		var country = $("select[name=country]").val();
		if(country == ""){
			weui.alert("请选择国家");
			$("select[name=country]").focus();
			return false;
		}

		var area = $("input[name=area]").val();
		if(area == ""){
			weui.alert("请选择地区");
			$("input[name=cloth_size]").focus();
			return false;
		}
		var addr = $("input[name=addr]").val();
		if(addr == ""){
			weui.alert("请输入详细地址");
			$("input[name=addr]").focus();
			return false;
		}

		var postcode = $("input[name=postcode]").val();
		if(postcode == ""){
			weui.alert("请输入邮政编码");
			$("input[name=postcode]").focus();
			return false;
		}

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

		var cloth_size = $("select[name=cloth_size]").val();
		if(cloth_size == ""){
			weui.alert("请选择服装尺码");
			$("select[name=cloth_size]").focus();
			return false;
		}

		return true;
	}
};
Zepto(function($){new YJBM()});
//////////////////////////////////////////////////////////////////////
$('#sexy').change(function () {
	console.log(this.value)
	if (this.value!='') {
		$('#sexy').css({'color':'#000000',})
	} else{
		$('#sexy').css({'color':'#c9c9c9',})
	}
})
$('#cloth_size').change(function () {
	console.log(this.value)
	if (this.value!='') {
		$('#cloth_size').css({'color':'#000000',})
	} else{
		$('#cloth_size').css({'color':'#c9c9c9',})
	}
})
$("#un_re_code").click(function(){
	Passport.alert();
});
</script>
</body>
</html><?php }} ?>