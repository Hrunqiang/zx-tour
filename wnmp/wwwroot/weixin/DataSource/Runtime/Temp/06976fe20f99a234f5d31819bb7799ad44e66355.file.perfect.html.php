<?php /* Smarty version Smarty-3.1.6, created on 2016-11-22 12:03:38
         compiled from "../DataSource/Tpl\User\perfect.html" */ ?>
<?php /*%%SmartyHeaderCode:9780581ab145222951-14054882%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06976fe20f99a234f5d31819bb7799ad44e66355' => 
    array (
      0 => '../DataSource/Tpl\\User\\perfect.html',
      1 => 1479720555,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9780581ab145222951-14054882',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_581ab14586565',
  'variables' => 
  array (
    'uid' => 0,
    'user' => 0,
    'phone' => 0,
    'updateres' => 0,
    'm_ptype' => 0,
    'orderid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581ab14586565')) {function content_581ab14586565($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Comon/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="/static/css/time.css">
<title>完善资料</title>
<style>
	.weui_cells{margin-top: 0;}
	.weui_cell{padding:0 1.07142rem}
	.weui_cell>div{padding:0.7142857rem 0;/*font-size: 1.07142rem;*/}
	.weui_input{/*padding:0 1.071428rem;*/box-sizing:border-box;}
	.weui_label{width: 5em;}
	.weui_select{height: auto;font-size: 1.1rem;padding-left: 0px;}
	.weui_cell_select .weui_cell_bd:after{display: none;}
	/*//////////////////新加样式/////////////////*/
	.msg_desc{font-size: 1rem;margin: 1.285714285714286rem 0;}
	/*.weui_cell_bd_color{color: #888888;}*/
	.weui_cell_bd_color_1{color: #C9C9C9;}
	.userinfo_head{padding-bottom: 0;margin-bottom: 0;background: #F3F6F5;padding: 0;}
	input::-webkit-input-placeholder{font-size: 1.1rem;color: #C9C9C9;} 
	.weui_label{width: 6rem;}
	.weui_label_china{width: 7rem;}
	.weui_cell_bd_1  {width: 17.37385714285714rem;}
	.btn{padding-bottom: 1.214285714285714rem;}
	.weui_btn_primary{background: #04BE02;}
	.list_title{padding: 0.5714285714285714rem 1.07142rem;font-size: 1.21428571428571rem;background: #FFFFFF;color: #000000;font-weight: bold;}
	.list_title span{height: 1.285714285714286rem;width: 0.2142857142857143rem;background: #04BE02;margin-right: 0.4285714285714286rem;float: left;margin-top: 0.2857142857142857rem;}
	.write_end{color: #04BE02;text-align: center;font-size: 1rem;padding-bottom: 1.5rem;}
	/*///////////////////////国外报名样式///////////////////////////////////////////*/
	.weui_label_gameinfo{width: 9.785714285714286rem;}
	.huzhao_info{width: 7.285714285714286rem;}
	.conten_info{width: 9.785714285714286rem;}
	.broad_page2_jianju{margin-top: 0.6428571428571429rem;}
	
	/*///////////////////////////预览样式///////////////////////*/
	/*#user_page3{background: #FFFFFF;}*/
	#user_page3 table {margin-left: 1.071428571428571rem;}
	#user_page3 table th{color: #888888;font-weight: normal;border: none;font-size: 1rem;line-height: 2.214285714285714rem;text-align: left;}
	#user_page3 table td{border: none;font-size: 1rem;line-height: 2.214285714285714rem;text-align: left;}
	.info_preview_title{font-size: 1.214285714285714rem;font-weight: bold;background: #F3F6F5;padding:1rem 0 0.5rem 0 ;text-align: center;position: relative;}
	.info_preview_title:before{content: "";width: 100%;height: 1px;background: #D9D9D9;position: absolute;left: 0;top: 0px;transform: scaleY(0.5);-webkit-transform: scaleY(0.5);-ms-transform: scaleY(0.5);-moz-transform: scaleY(0.5);}
	.info_preview_title:after{content: "";width: 100%;height: 1px;background: #D9D9D9;position: absolute;left: 0;bottom: 0px;transform: scaleY(0.5);-webkit-transform: scaleY(0.5);-ms-transform: scaleY(0.5);-moz-transform: scaleY(0.5);}
	.info_base{font-size: 1.142857142857143rem;background: #FFFFFF;padding: 0 0 0 1.071428571428571rem;line-height: 3.071428571428571rem;position: relative;}
	.info_base:after{content: "";width: 100%;height: 1px;background: #D9D9D9;position: absolute;left: 1.071428571428571rem;bottom: 0px;transform: scaleY(0.5);-webkit-transform: scaleY(0.5);-ms-transform: scaleY(0.5);-moz-transform: scaleY(0.5);}
	.preview_foot{padding: 1.214285714285714rem 1.071428571428571rem 2.285714285714286rem;display: flex;display: -webkit-flex;display: -ms-flexbox;display: -moz-box;position: relative;}
	.preview_foot:before{content: "";width: 100%;height: 1px;background: #D9D9D9;position: absolute;left: 0;top: 0px;transform: scaleY(0.5);-webkit-transform: scaleY(0.5);-ms-transform: scaleY(0.5);-moz-transform: scaleY(0.5);}
	.preview_foot div{flex: 1;-webkit-flex: 1;-ms-flex: 1;-moz-box-flex: 1; text-align: center;line-height: 2.5rem;border-radius: 5px;color: #FFFFFF;font-size: 1.285714285714286rem;}
	.preview_foot div:nth-child(1){margin-right: 0.8571428571428571rem;background: #BBBBBB;}
	.preview_foot div:nth-child(2){background: #04BE02;}
	#user_page3 ul li div{display: inline-block;line-height: 2.214285714285714rem;}
	#user_page3 ul li div:nth-child(1){font-size: 1rem;color: #888888;padding-left: 1.071428571428571rem;}
	#user_page3 ul li div:nth-child(2){font-size: 1rem;color: #000000;}
	.special_icon{display: inline-block;height: 1.285714285714286rem;width: 0.6428571428571429rem;position: relative;}
	.special_icon div{top: 50%;left: 0px;height: 1px;width: 0.6428571428571429rem;background: #ff2244;position: absolute;}
	.special_icon div:nth-child(1){transform: rotateZ(90deg);-webkit-transform: rotateZ(90deg);-ms-transform: rotateZ(90deg);-moz-transform: rotateZ(90deg);}
	.special_icon div:nth-child(2){transform: rotateZ(30deg);-webkit-transform: rotateZ(30deg);-ms-transform: rotateZ(30deg);-moz-transform: rotateZ(30deg);}
	.special_icon div:nth-child(3){transform: rotateZ(-30deg);-webkit-transform: rotateZ(-30deg);-ms-transform: rotateZ(-30deg);-moz-transform: rotateZ(-30deg);}
	.msg_desc>i{width: 21rem;height: 5.5rem;}
	/*///////////////////////////////////////预览样式end//*/
	.broad_input{display: inline-block;box-sizing: border-box;border: 1px solid #FF2244;border-radius: 5px;position: relative;padding: 0px;height: 2.142857142857143rem;width: 14.28571428571429rem;display: none;padding: 0px!important;}
	.broad_input i{background: url(/static/images/broad_input.png) no-repeat;background-size: 100%; width: 1.071428571428571rem;height: 1rem;position: absolute;top: 50%;transform: translateY(-50%);-webkit-transform: translateY(-50%);margin-left: 0.4285714285714286rem;}
	.broad_input input{border: none;line-height: 1.571428571428571rem;margin-left: 1.785714285714286rem;height: 1.642857142857143rem;display: block;margin-top: 0.2857142857142857rem; background: none;}
/*	.broad_input input::-webkit-input-placeholder{line-height: 29px;}*/
</style>
<div class="wrap user">
	<div id="perfect_header" class="weui_cells msg userinfo_head" style="text-align: center;">
		<p class="msg_desc icon_s"><i style="background: url(/static/images/perfect_info.png) no-repeat;background-size: 100%;"></i></p>
	</div>
<!--//////////////////////////////////////////////////国外资料填写/////////////////////////////////////////-->
<div id="user_page1" style="display: block;">
	<form action="/User/userinfo" method="post" id="userFormbase">
	<input type="hidden" name="uid" value="<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
">
	<div style="display: block;" id="broad_page1">
		<!--//////////////////////////////////////////////////国外资料填写/////////////////////////////////////////-->
			<p class="list_title"><span></span>基本信息</p>
			<div class="weui_cells weui_cells_form weui_cells_access">
			    <div class="weui_cell">
		            <div class="weui_cell_hd"><label class="weui_label">
		            	<div class="special_icon">
							<div></div>
							<div></div>
							<div></div>
						</div>真实姓名</label>
		            </div>
			        <div class="weui_cell_bd weui_cell_primary">
			            <input class="weui_input" type="text" name="name" placeholder="确认后无法修改，将加密处理" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
">
			        </div>
	        	</div>
	        	<div class="weui_cell">
		            <div class="weui_cell_hd"><label class="weui_label">
		            	<div class="special_icon">
							<div></div>
							<div></div>
							<div></div>
						</div>手机号</label></div>
			        <div class="weui_cell_bd weui_cell_primary">
			            <input class="weui_input" type="text" name="phone" placeholder="确认后无法修改，将加密处理" value="<?php if ($_smarty_tpl->tpl_vars['user']->value['phone']){?><?php echo $_smarty_tpl->tpl_vars['user']->value['phone'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
<?php }?>">
			        </div>
	        	</div>
	        	<div class="weui_cell">
		            <div class="weui_cell_hd"><label class="weui_label">
		            	<div class="special_icon">
							<div></div>
							<div></div>
							<div></div>
						</div>国籍</label></div>
			        <div class="weui_cell_bd  weui_cell_primary">
	                    <select type='select' class="weui_select" name="country" style="width: auto;color: #C9C9C9;" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['country'];?>
" color='color'>
	                        <option value="" selected="">请选择国籍</option>
                        	<option value="中国" <?php if ($_smarty_tpl->tpl_vars['user']->value['country']=="中国"){?>selected<?php }?> >中国-大陆</option>
                        	<option value="港澳台" <?php if ($_smarty_tpl->tpl_vars['user']->value['country']=="港澳台"){?>selected<?php }?> >中国-港澳台</option>
                        	<option value="国外" <?php if ($_smarty_tpl->tpl_vars['user']->value['country']=="国外"){?>selected<?php }?> >外国籍</option>
	                    </select>
	                </div>
	                <div class="broad_input">
	                	<i></i>
	                	<input type="text" placeholder="外国国籍请手动输入" name="broad_country" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['broad_country'];?>
" />
	                </div>
	        	</div>
				<div class="weui_cell">
		            <div class="weui_cell_hd"><label class="weui_label">
		            	<div class="special_icon">
							<div></div>
							<div></div>
							<div></div>
						</div>身份证</label></div>
			        <div class="weui_cell_bd weui_cell_primary">
			            <input class="weui_input" type="text" name="sfz_code" placeholder="确认后无法修改，将加密处理" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['sfz_code'];?>
">
			        </div>
	        	</div>
	        	<div class="weui_cell">
		            <div class="weui_cell_hd"><label class="weui_label">生日</label></div>
			        <div class="weui_cell_bd weui_cell_primary">
			            <input class="weui_input datepick" type="text" name="birth"  placeholder="请选择生日日期" class="datepick" date-s="1900-1-1" placeholder="2015-08-08" readonly value="<?php echo $_smarty_tpl->tpl_vars['user']->value['birth'];?>
">
			        </div>
	        	</div>
				<div class="weui_cell">
		            <div class="weui_cell_bd" style="padding-right: 0.3rem;">
	                    <label class="weui_label">性别</label>
	                </div>
	                <div class="weui_cell_bd  weui_cell_primary">
	                    <select type='select' id="sexy" class="weui_select" name="sexy"style="color: #C9C9C9;" color='color'>
	                    	<option value=""selected="">请选择性别</option>
	                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['user']->value['sexy']==1){?>selected<?php }?>>男</option>
	                        <option value="2" <?php if ($_smarty_tpl->tpl_vars['user']->value['sexy']==2){?>selected<?php }?>>女</option>
	                    </select>
	                </div>
	        	</div>
	        	<div class="weui_cell">
		            <div class="weui_cell_bd" style="padding-right: 0.3rem;">
	                    <label class="weui_label">
	                    	<div class="special_icon">
								<div></div>
								<div></div>
								<div></div>
							</div>血型</label>
	                </div>
	                <div class="weui_cell_bd  weui_cell_primary">
	                    <select type='select' id="blood_type" class="weui_select" name="blood_type"style="color: #C9C9C9;" color='color'>
	                    	<option value=""selected="">请选择血型(如不确定,请任选)</option>
	                        <option value="A" <?php if ($_smarty_tpl->tpl_vars['user']->value['blood_type']=="A"){?>selected<?php }?> >A</option>
                        	<option value="B"<?php if ($_smarty_tpl->tpl_vars['user']->value['blood_type']=="B"){?>selected<?php }?> >B</option>
                        	<option value="O"<?php if ($_smarty_tpl->tpl_vars['user']->value['blood_type']=="O"){?>selected<?php }?> >O</option>
                        	<option value="AB"<?php if ($_smarty_tpl->tpl_vars['user']->value['blood_type']=="AB"){?>selected<?php }?> >AB</option>
	                    </select>
	                </div>
	        	</div>
	        	<div class="weui_cell">
		            <div class="weui_cell_hd"><label class="weui_label">地区</label></div>
			        <div class="weui_cell_bd  weui_cell_primary">
			            <input class="weui_input areaSelectipt" name="area" type="text"  placeholder="请选择地区"  readonly value="<?php echo $_smarty_tpl->tpl_vars['user']->value['area'];?>
">
	                </div>
	        	</div>
				
				<div class="weui_cell">
		            <div class="weui_cell_hd"><label class="weui_label">详细地址</label></div>
			        <div class="weui_cell_bd weui_cell_primary">
			            <input class="weui_input" type="text" name="addr" placeholder="请输入街道门牌信息" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['addr'];?>
">
			        </div>
	        	</div>
	
	        	<div class="weui_cell">
		            <div class="weui_cell_hd"><label class="weui_label">邮编</label></div>
			        <div class="weui_cell_bd weui_cell_primary">
			            <input class="weui_input" type="text" name="postcode" placeholder="请输入邮政编码" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['postcode'];?>
">
			        </div>
	        	</div>
	
	        	<div class="weui_cell">
		            <div class="weui_cell_hd"><label class="weui_label">
		            	<div class="special_icon">
							<div></div>
							<div></div>
							<div></div>
						</div>邮箱</label></div>
			        <div class="weui_cell_bd weui_cell_primary">
			            <input class="weui_input" type="text" name="e_mail" placeholder="请输入E-mail地址" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['e_mail'];?>
">
			        </div>
	        	</div>
	
	        	<div class="weui_cell">
		            <div class="weui_cell_hd"><label class="weui_label">
		            	<div class="special_icon">
							<div></div>
							<div></div>
							<div></div>
						</div>服装尺码</label></div>
			        <div class="weui_cell_bd  weui_cell_primary">
	                    <select type='select' id="cloth_size" class="weui_select" name="cloth_size" style="color: #C9C9C9;" color='color'>
	                    	<option value="">请选择服装尺码</option>
	                        <option value="XS" <?php if ($_smarty_tpl->tpl_vars['user']->value['cloth_size']=="XS"){?>selected<?php }?> >XS</option>
	                        <option value="S" <?php if ($_smarty_tpl->tpl_vars['user']->value['cloth_size']=="S"){?>selected<?php }?> >S</option>
	                        <option value="M" <?php if ($_smarty_tpl->tpl_vars['user']->value['cloth_size']=="M"){?>selected<?php }?>  >M</option>
	                        <option value="L" <?php if ($_smarty_tpl->tpl_vars['user']->value['cloth_size']=="L"){?>selected<?php }?> >L</option>
	                        <option value="XL"<?php if ($_smarty_tpl->tpl_vars['user']->value['cloth_size']=="XL"){?>selected<?php }?> >XL</option>
	                        <option value="XXL" <?php if ($_smarty_tpl->tpl_vars['user']->value['cloth_size']=="XXL"){?>selected<?php }?> >XXL</option>
	                    </select>
	                </div>
	        	</div>
		    </div>
		<!-- <div class="btn">
		    <input id="broad_next" type="button" value="下一步" class="weui_btn weui_btn_primary next_page">
		</div>
		<div class="write_end">就快填完了:)</div> -->
		<!--/////////////////////////////////////国外资料填写end//////////////////////////////////////-->
	</div>
	<div style="display: block!important;margin-top: 0.71428571428571rem" id="broad_page2">
		<!--/////////////////////////////////////国外资料继续填写//////////////////////////////////////-->
		<p class="list_title"><span></span>报名必填信息</p>
		<div class="weui_cells weui_cells_form weui_cells_access">
			    <div class="weui_cell">
			        <div class="weui_cell_hd"><label class="weui_label huzhao_info">护照号码</label></div>
			        <div class="weui_cell_bd weui_cell_primary weui_cell_bd_color">
			            <input class="weui_input" type="text"  placeholder="很重要，如果护照不在手边请之后补填" name="pass_code" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['pass_code'];?>
">
			        </div>
			    </div>
			    <div class="weui_cell">
			        <div class="weui_cell_hd"><label class="weui_label huzhao_info">
			        	<div class="special_icon">
							<div></div>
							<div></div>
							<div></div>
						</div>中文姓拼音</label></div>
			        <div class="weui_cell_bd weui_cell_primary weui_cell_bd_color">
			            <input class="weui_input" type="text" placeholder="请以护照姓拼音为准" name="surname" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['surname'];?>
">
			        </div>
			    </div>
			    <div class="weui_cell">
			        <div class="weui_cell_hd"><label class="weui_label huzhao_info">
			        	<div class="special_icon">
							<div></div>
							<div></div>
							<div></div>
						</div>中文名拼音</label></div>
			        <div class="weui_cell_bd weui_cell_primary weui_cell_bd_color">
			            <input class="weui_input" type="text"  placeholder="请以护照名拼音为准" name="en_name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['en_name'];?>
">
			        </div>
			    </div>
			    <div class="weui_cell">
			        <div class="weui_cell_hd"><label class="weui_label huzhao_info">签发日期</label></div>
			        <div class="weui_cell_bd weui_cell_primary weui_cell_bd_color">
			            <input class="weui_input datepick" type="text"  placeholder="请选择签发日期Date of issues" date-s="1949-10-1" name="issue_date" <?php if (substr($_smarty_tpl->tpl_vars['user']->value['issue_date'],0,10)!='0000-00-00'){?>value="<?php echo substr($_smarty_tpl->tpl_vars['user']->value['issue_date'],0,10);?>
"<?php }?> readonly>
			        </div>
			    </div>
			    <div class="weui_cell">
			        <div class="weui_cell_hd"><label class="weui_label huzhao_info">有效期至</label></div>
			        <div class="weui_cell_bd weui_cell_primary weui_cell_bd_color">
			            <input class="weui_input datepick" type="text"  placeholder="请选择有效期Date of expiry" name="expiry_date" date-e="2116-1-1" <?php if (substr($_smarty_tpl->tpl_vars['user']->value['expiry_date'],0,10)!='0000-00-00'){?>value="<?php echo substr($_smarty_tpl->tpl_vars['user']->value['expiry_date'],0,10);?>
"<?php }?> readonly>
			        </div>
			    </div>
		    </div>
	
		    <!--<p class="list_title">赛事信息</p>-->
		    
			<div class="weui_cells weui_cells_form weui_cells_access broad_page2_jianju">
			    <div class="weui_cell">
			        <div class="weui_cell_hd"><label class="weui_label weui_label_gameinfo">
			        	<div class="special_icon">
							<div></div>
							<div></div>
							<div></div>
						</div>是否参加过马拉松</label></div>
			        <div class="weui_cell_bd weui_cell_primary weui_cell_bd_color">
			            <select type='select' class="weui_select" name="isattended" style="color: #C9C9C9;" color='color'>
	                    	<option value="">请选择</option>
	                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['user']->value['isattended']==="1"){?>selected<?php }?> >是</option>
	                        <option value="0" <?php if ($_smarty_tpl->tpl_vars['user']->value['isattended']==="0"){?>selected<?php }?> >否</option>
	                    </select>
			        </div>
			    </div>
			    <div class="weui_cell" type='game_attend' style="display: none;">
			        <div class="weui_cell_hd"><label class="weui_label weui_label_gameinfo">马拉松最好成绩</label></div>
			        <div class="weui_cell_bd weui_cell_primary weui_cell_bd_color">
			            <input class="weui_input" type="text" placeholder="请输入个人最好成绩" name="personbest" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['personbest'];?>
">
			        </div>
			    </div>
			    <div class="weui_cell" type='game_attend' style="display: none;">
			        <div class="weui_cell_hd"><label class="weui_label weui_label_gameinfo">最好成绩赛事名称</label></div>
			        <div class="weui_cell_bd weui_cell_primary weui_cell_bd_color">
			            <input class="weui_input" type="text"  placeholder="请输入最好成绩赛事" name="personbestmatch" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['personbestmatch'];?>
">
			        </div>
			    </div>
			    <div class="weui_cell">
			        <div class="weui_cell_hd"><label class="weui_label weui_label_gameinfo">
			        	<div class="special_icon">
							<div></div>
							<div></div>
							<div></div>
						</div>预期完赛时间</label></div>
			        <div class="weui_cell_bd weui_cell_primary weui_cell_bd_color">
			            <input class="weui_input finish_data" type="text"  placeholder="影响起跑分区，请输入" date-s="1949-10-1" name="wishfinish" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['wishfinish'];?>
">
			        </div>
			    </div>
		    </div>
	
		    <!--<p class="list_title">紧急联系人信息</p>-->
			<div class="weui_cells weui_cells_form weui_cells_access broad_page2_jianju">
				<div class="weui_cell">
			        <div class="weui_cell_hd"><label class="weui_label conten_info">
			        	<div class="special_icon">
							<div></div>
							<div></div>
							<div></div>
						</div>紧急联系人</label></div>
			        <div class="weui_cell_bd weui_cell_primary weui_cell_bd_color">
			            <input class="weui_input" type="text"  placeholder="请输入紧急联系人姓名" name="contact_name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['contact_name'];?>
">
			        </div>
			    </div>
			    <div class="weui_cell">
			        <div class="weui_cell_hd"><label class="weui_label conten_info">
			        	<div class="special_icon">
							<div></div>
							<div></div>
							<div></div>
						</div>联系人电话</label></div>
			        <div class="weui_cell_bd weui_cell_primary weui_cell_bd_color">
			            <input class="weui_input" type="text"  placeholder="请请输入紧急联系人电话" name="contact_phone" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['contact_phone'];?>
">
			        </div>
			    </div>
			</div>
		
		<!--/////////////////////////////////////国外资料继续填写end//////////////////////////////////////-->
		<div class="btn">
	        <input id="broad_end"  type="button" value="提交" class="weui_btn weui_btn_primary">
	    </div>
	</div>
	</form>	
</div>

<div style="display: none;" id="user_page2">

<!--/////////////////////////////////////国内资料填写//////////////////////////////////////-->
	<form action="" method="post" id="userFormbase_china">
		<p class="list_title"><span></span>基本信息</p>
		<div class="weui_cells weui_cells_form weui_cells_access">
		    <div class="weui_cell">
	            <div class="weui_cell_hd"><label class="weui_label weui_label_china">
	            	<div class="special_icon">
							<div></div>
							<div></div>
							<div></div>
						</div>真实姓名</label></div>
		        <div class="weui_cell_bd weui_cell_primary">
		            <input class="weui_input" type="text" name="name" placeholder="确认后无法修改，将加密处理" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
">
		        </div>
        	</div>
        	<div class="weui_cell">
	            <div class="weui_cell_hd"><label class="weui_label weui_label_china">
	            	<div class="special_icon">
							<div></div>
							<div></div>
							<div></div>
						</div>手机号</label></div>
		        <div class="weui_cell_bd weui_cell_primary">
		            <input class="weui_input" type="text" name="phone" placeholder="确认后无法修改，将加密处理" value="<?php if ($_smarty_tpl->tpl_vars['user']->value['phone']){?><?php echo $_smarty_tpl->tpl_vars['user']->value['phone'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['phone']->value;?>
<?php }?>">
		        </div>
        	</div>
        	<div class="weui_cell">
	            <div class="weui_cell_hd"><label class="weui_label weui_label_china">
	            	<div class="special_icon">
							<div></div>
							<div></div>
							<div></div>
						</div>国籍</label></div>
		        <div class="weui_cell_bd  weui_cell_primary">
                    <select type='select' class="weui_select" name="country" style="width: auto;color: #C9C9C9;" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['country'];?>
" color='color'>
                        <option value="" selected="">请选择国籍</option>
                        <option value="中国" <?php if ($_smarty_tpl->tpl_vars['user']->value['country']=="中国"){?>selected<?php }?> >中国-大陆</option>
                        <option value="港澳台" <?php if ($_smarty_tpl->tpl_vars['user']->value['country']=="港澳台"){?>selected<?php }?> >中国-港澳台</option>
                        <option value="国外" <?php if ($_smarty_tpl->tpl_vars['user']->value['country']=="国外"){?>selected<?php }?> >外国籍</option>
                    </select>
                </div>
                <div class="broad_input">
                	<i></i>
                	<input type="text" placeholder="外国国籍请手动输入" name="broad_country" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['broad_country'];?>
"/>
                </div>
        	</div>
			<div class="weui_cell">
	            <div class="weui_cell_hd"><label class="weui_label weui_label_china">
	            	<div class="special_icon">
							<div></div>
							<div></div>
							<div></div>
						</div>身份证</label></div>
		        <div class="weui_cell_bd weui_cell_primary">
		            <input class="weui_input" type="text" name="sfz_code" placeholder="确认后无法修改，将加密处理" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['sfz_code'];?>
">
		        </div>
        	</div>
        	<div class="weui_cell">
	            <div class="weui_cell_hd"><label class="weui_label weui_label_china">生日</label></div>
		        <div class="weui_cell_bd weui_cell_primary">
		            <input class="weui_input datepick" type="text" name="birth"  placeholder="请选择生日日期" class="datepick" date-s="1900-1-1" placeholder="2015-08-08" readonly value="<?php echo $_smarty_tpl->tpl_vars['user']->value['birth'];?>
">
		        </div>
        	</div>
			<div class="weui_cell">
	            <div class="weui_cell_bd" style="padding-right: 0.3rem;">
                    <label class="weui_label weui_label_china">性别</label>
                </div>
                <div class="weui_cell_bd  weui_cell_primary">
                    <select id="sexy" class="weui_select" name="sexy"style="color: #C9C9C9;" color='color'>
                    	<option value=""selected="">请选择性别</option>
                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['user']->value['sexy']=="1"){?>selected<?php }?> >男</option>
                        <option value="2" <?php if ($_smarty_tpl->tpl_vars['user']->value['sexy']=="2"){?>selected<?php }?> >女</option>
                    </select>
                </div>
        	</div>
        	<div class="weui_cell">
	            <div class="weui_cell_bd" style="padding-right: 0.3rem;">
                    <label class="weui_label weui_label_china">
                    	<div class="special_icon">
							<div></div>
							<div></div>
							<div></div>
						</div>血型</label>
                </div>
                <div class="weui_cell_bd  weui_cell_primary">
                    <select id="blood_type" class="weui_select" name="blood_type"style="color: #C9C9C9;" color='color'>
                    	<option value=""selected="">请选择血型(如不确定,请任选)</option>
                        <option value="A" <?php if ($_smarty_tpl->tpl_vars['user']->value['blood_type']=="A"){?>selected<?php }?> >A</option>
                        <option value="B"<?php if ($_smarty_tpl->tpl_vars['user']->value['blood_type']=="B"){?>selected<?php }?> >B</option>
                        <option value="O"<?php if ($_smarty_tpl->tpl_vars['user']->value['blood_type']=="O"){?>selected<?php }?> >O</option>
                        <option value="AB"<?php if ($_smarty_tpl->tpl_vars['user']->value['blood_type']=="AB"){?>selected<?php }?> >AB</option>
                    </select>
                </div>
        	</div>
        	<div class="weui_cell">
	            <div class="weui_cell_hd"><label class="weui_label weui_label_china">地区</label></div>
		        <div class="weui_cell_bd  weui_cell_primary">
		            <input class="weui_input areaSelectipt" name="area" type="text"  placeholder="请选择地区"  readonly value="<?php echo $_smarty_tpl->tpl_vars['user']->value['area'];?>
">
                </div>
        	</div>
			
			<div class="weui_cell">
	            <div class="weui_cell_hd"><label class="weui_label weui_label_china">详细地址</label></div>
		        <div class="weui_cell_bd weui_cell_primary">
		            <input class="weui_input" type="text" name="addr" placeholder="请输入街道门牌信息" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['addr'];?>
">
		        </div>
        	</div>

        	<div class="weui_cell">
	            <div class="weui_cell_hd"><label class="weui_label weui_label_china">邮编</label></div>
		        <div class="weui_cell_bd weui_cell_primary">
		            <input class="weui_input" type="text" name="postcode" placeholder="请输入邮政编码" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['postcode'];?>
">
		        </div>
        	</div>

        	<div class="weui_cell">
	            <div class="weui_cell_hd"><label class="weui_label weui_label_china">
	            	<div class="special_icon">
							<div></div>
							<div></div>
							<div></div>
						</div>邮箱</label></div>
		        <div class="weui_cell_bd weui_cell_primary">
		            <input class="weui_input" type="text" name="e_mail" placeholder="请输入E-mail地址" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['e_mail'];?>
">
		        </div>
        	</div>

        	<div class="weui_cell">
	            <div class="weui_cell_hd"><label class="weui_label weui_label_china">
	            	<div class="special_icon">
							<div></div>
							<div></div>
							<div></div>
						</div>服装尺码</label></div>
		        <div class="weui_cell_bd  weui_cell_primary">
                    <select type='select' id="cloth_size" class="weui_select" name="cloth_size" style="color: #C9C9C9;" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['cloth_size'];?>
" color='color'>
                    	<option value="">请选择服装尺码</option>
                        <option value="XS" <?php if ($_smarty_tpl->tpl_vars['user']->value['cloth_size']=="XS"){?>selected<?php }?> >XS</option>
                        <option value="S" <?php if ($_smarty_tpl->tpl_vars['user']->value['cloth_size']=="S"){?>selected<?php }?> >S</option>
                        <option value="M" <?php if ($_smarty_tpl->tpl_vars['user']->value['cloth_size']=="M"){?>selected<?php }?>  >M</option>
                        <option value="L" <?php if ($_smarty_tpl->tpl_vars['user']->value['cloth_size']=="L"){?>selected<?php }?> >L</option>
                        <option value="XL"<?php if ($_smarty_tpl->tpl_vars['user']->value['cloth_size']=="XL"){?>selected<?php }?> >XL</option>
                        <option value="XXL" <?php if ($_smarty_tpl->tpl_vars['user']->value['cloth_size']=="XXL"){?>selected<?php }?> >XXL</option>
                    </select>
                </div>
        	</div>
        	<div class="weui_cells weui_cells_form weui_cells_access">
				<div class="weui_cell">
			        <div class="weui_cell_hd"><label class="weui_label weui_label_china">
			        	<div class="special_icon">
							<div></div>
							<div></div>
							<div></div>
						</div>紧急联系人</label></div>
			        <div class="weui_cell_bd weui_cell_primary weui_cell_bd_color">
			            <input class="weui_input" type="text"  placeholder="请输入紧急联系人姓名" name="contact_name" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['contact_name'];?>
">
			        </div>
			    </div>
			    <div class="weui_cell">
			        <div class="weui_cell_hd"><label class="weui_label weui_label_china">
			        	<div class="special_icon">
							<div></div>
							<div></div>
							<div></div>
						</div>联系人电话</label></div>
			        <div class="weui_cell_bd weui_cell_primary weui_cell_bd_color">
			            <input class="weui_input" type="text"  placeholder="请请输入紧急联系人电话" name="contact_phone" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['contact_phone'];?>
">
			        </div>
			    </div>
			</div>
	    </div>
	    <div class="btn">
	        <input id="china" type="button" value="提交" class="weui_btn weui_btn_primary">
	    </div>
	</form> 
</div>


<div id="user_page3" style="overflow: hidden;display: none;">
	<!--//////////////////////////////////////////////报名信息预览////////////////////////////////////////////////////////-->
	<div class="preview" style="margin-bottom: 10px;background: #FFFFFF;">
		<div class="info_preview_title">报名信息预览</div>
		<div class="info_base">基本信息</div>
		<table style="border: none;" border="" cellspacing="" cellpadding="">
			<tr>
				<th>真实姓名:</th>
				<td type='preview'></td>
			</tr>
			<tr>
				<th>身份证:</th>
				<td type='preview'></td>
			</tr>
			<tr>
				<th>手机号:</th>
				<td type='preview'></td>
			</tr>
			<tr>
				<th>生日:</th>
				<td type='preview'></td>
			</tr>
			<tr>
				<th>性别:</th>
				<td type='preview'></td>
			</tr>
			<tr>
				<th>血型:</th>
				<td type='preview'></td>
			</tr>
			<tr>
				<th>国籍:</th>
				<td type='preview'></td>
			</tr>
			<tr>
				<th>地区:</th>
				<td type='preview'></td>
			</tr>
			<tr>
				<th>详细地址:</th>
				<td type='preview'></td>
			</tr>
			<tr>
				<th>邮编:</th>
				<td type='preview'></td>
			</tr>
			<tr>
				<th>邮箱:</th>
				<td type='preview'></td>
			</tr>
			<tr>
				<th>服装尺码:</th>
				<td type='preview'></td>
			</tr>
		</table>
		<ul>
			<li>
				<div>紧急联系人:</div>
				<div type='preview'></div>
			</li>
			<li>
				<div>紧急联系人电话:</div>
				<div type='preview'></div>
			</li>
		</ul>
	</div>

	<div class="preview_must" style="background: #FFFFFF;">
		<div class="info_base">报名必填信息</div>
		<table style="border: none;" border="" cellspacing="" cellpadding="">
			<tr>
				<th>护照号码:</th>
				<td type='preview'></td>
			</tr>
			<tr>
				<th>中文姓拼音:</th>
				<td type='preview'></td>
			</tr>
			<tr>
				<th>中文名拼音:</th>
				<td type='preview'></td>
			</tr>
			<tr>
				<th>签发日期:</th>
				<td type='preview'></td>
			</tr>
			<tr>
				<th>有效期至:</th>
				<td type='preview'></td>
			</tr>
		</table>	
		<table style="border: none;" border="" cellspacing="" cellpadding="">
			<tr>
				<th>是否参加过马拉松:</th>
				<td type='preview'></td>
			</tr>
			<tr>
				<th>马拉松最好成绩:</th>
				<td type='preview'></td>
			</tr>
			<tr>
				<th>最好成绩赛事名称:</th>
				<td type='preview'></td>
			</tr>
			<tr>
				<th>预期完赛时间:</th>
				<td type='preview'></td>
			</tr>
			<tr>
				<th>紧急联系人:</th>
				<td type='preview'></td>
			</tr>
			<tr>
				<th>紧急联系人电话:</th>
				<td type='preview'></td>
			</tr>
		</table>
	</div>
	<div class="preview_foot">
		<div id="preview_goback" style="display: inline-block;">返回修改</div>
		<div id="preview_content" style="display: inline-block;">确认提交</div>
	</div>
	
</div>
</div>
<div id="datePlugin"></div>
<script src="/static/weui/js/weui.js"></script>
<script type="text/javascript" src="/static/js/iscroll.js?v=1.2"></script>
<script type="text/javascript" src="/static/js/date.js?v=1.2"></script>
<script type="text/javascript" src="/static/js/function.js?v=1.2"></script>
<script type="text/javascript">
//<?php echo $_smarty_tpl->tpl_vars['updateres']->value;?>

////////////////////////////判断海外和国内////////////////////
var info_type='<?php echo $_smarty_tpl->tpl_vars['m_ptype']->value;?>
';
if(info_type=='海外'){
	$('#user_page1').show();
	$('#broad_page1').show();
	$('#broad_page2').show();
	$('#user_page3').hide();
	$('#user_page3 .preview ul').hide();
	//////////////////////////////添加本地存储////////////////////////////////
	set_history('user_page1');
	
}
if(info_type=='国内'){
	$('#user_page1').hide();
	$('#user_page2').show();
	$('#user_page3').hide();
	$('#user_page3 .preview').show();
	$('#user_page3 .preview_must').hide();
	set_history('user_page2');
}

///////////////////////////返回修改//////////////////////////////
$('#preview_goback').bind('click',function () {
	if(info_type=='海外'){
		$('#user_page3').hide();
		$('#user_page1').show();
		$('#broad_page1').show();
		$('#broad_page2').show();
		$('#perfect_header').show();
	}else if(info_type=='国内'){
		$('#user_page3').hide();
		$('#user_page2').show();
		$('#user_page1').hide();
		$('#perfect_header').show();
	}
	
})
////////////////////////是否参加过马拉松//////////////
$('select[name=isattended]').bind('change',function () {
	if($(this).val()==1){
		$('*[type=game_attend]').show();
	}else{
		$('*[type=game_attend]').hide();
	}
})
//////////////////////////
$('select').bind('change',function () {
	if($(this).val()==""){
		$(this).css('color','#c9c9c9');
	}else{
		$(this).css('color','#000000');
	}
})
$('select[color=color]').each(function () {
	if($(this).val()!=''){
		$(this).css('color','#000000');
	}else{
		$(this).css('color','#c9c9c9');
	}
})
////////////////预计完赛时间加滚动控件start////////////////////////
$('.finish_data').finished_data();
////////////////预计完赛时间加滚动控件end////////////////////////


var YJBM = function(){this.init()},
	info_arr = new Array(),
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
		///////国外赛事资料验证/////
		// $('#broad_next').bind('click',function () {
		// 	if(me.broad_checkpage1()){
		// 		$('#broad_page2').show();
		// 		$('#broad_page1').hide();
		// 	}
		// })
		$('#broad_end').bind('click',function () {
			if(me.broad_checkpage2() && me.broad_checkpage1()){
//				$('#broad_page2').show();
//				$('#broad_page1').hide();
				for (var i=0;i<info_arr.length;i++) {
					$($('*[type=preview]')[i]).html(info_arr[i])
				}
				$('#user_page1').hide();
				$('#user_page3').show();
				$('#perfect_header').hide();
			}
		})
		///////////////////////国内赛事资料验证/////////////////////////////////////
		$('#china').bind('click',function () {
			if(me.china_check()){
				for (var i=0;i<info_arr.length;i++) {
					$($('*[type=preview]')[i]).html(info_arr[i])
				}
				$('#user_page2').hide();
				$('#user_page3').show();
				$('#perfect_header').hide();
			}
		})
		/////////////////////////////提交表单///////////////
		$('#preview_content').bind('click',function () {
			if(info_type=='海外'){
				$.ajax({
	                cache: false,
	                url:"/User/saveperfect",
	                type: "POST",
	                dataType: "json",
	                timeout:'3000',
	                data: $("#userFormbase").serialize(),
	                success: function(data){
	                    if(data.msg == "ok"){
		                    //setTimeout(function(){
		                    window.location.href = "/User/success?orderid=<?php echo $_smarty_tpl->tpl_vars['orderid']->value;?>
";
		                    ///},2000);
	                    }else{
	                        weui.alert(data.msg);
	                    }
	                },
            	});
			}
			if(info_type=='国内'){
				$.ajax({
	                cache: false,
	                url:"/User/saveperfect",
	                type: "POST",
	                dataType: "json",
	                timeout:'3000',
	                data: $("#userFormbase_china").serialize(),
	                success: function(data){
	                    if(data.msg == "ok"){
		                    setTimeout(function(){
		                        window.location.href = "/User/success";
		                    },2000);
	                    }else{
	                        weui.alert(data.msg);
	                    }
	                },
            	});
			}
			
		})
		/////////////////////////
//		$("#userFormbase").submit(function(){
//			if(me.broad_checkpage2()){
//				console.log($("#userFormbase").serialize());
//				console.log(555);
//				$.ajax({
//	                cache: false,
//	                url:"/User/saveuserinfo",
//	                type: "POST",
//	                dataType: "json",
//	                timeout:'3000',
//	                data: $("#userFormbase").serialize(),
//	                success: function(data){
//	                    if(data.msg == "ok"){
//	                       	weui.Loading.success(2000,"保存成功");
//		                    setTimeout(function(){
//		                        window.location.href = "/User/userinfo";
//		                    },2000);
//	                    }else{
//	                        weui.alert(data.msg);
//	                    }
//	                },
//          	});
//			}
//			return false;
//		});
	},
	getyearstr:function(){
		var nowDate = new Date(),
			year = parseInt(nowDate.getFullYear()),
			month = parseInt(nowDate.getMonth()+1),
			day = parseInt(nowDate.getDate());
		return year+"-"+month+"-"+day;
	},
	broad_checkpage1:function () {
		var xingming = $("input[name=name]").val();
		if(xingming == ""){
			weui.alert("请输入您的姓名");
			$("input[name=name]").focus();	
			return false;
		}

		var phone = $("input[name=phone]").val();
		if(phone == ""){
			weui.alert("请输入手机号码");
			$("input[name=phone]").focus();
			return false;
		}

		var machrs = shouji_reg.test(phone);
		if(!machrs){
			weui.alert("手机号格式不正确！");
			$("input[name=phone]").focus();
			return false;
		}
		
		var country = $("select[name=country]").val();
		if(country == ""){
			weui.alert("请选择国家");
			$("select[name=country]").focus();
			return false;
		}
		if(country=="国外"){
			country=$("input[name=broad_country]").val();
			if(country==''){
				weui.alert("请填写国籍");
				$("select[name=country]").focus();
				return false;
			}
			var sfz_code = $("input[name=sfz_code]").val();
			if(sfz_code == ""){
				weui.alert("证件号码号不能为空！");
				$("input[name=zjcode]").focus();
				return false;
			}
		}else if(country=="港澳台"){
			var sfz_code = $("input[name=sfz_code]").val();
			if(sfz_code == ""){
				weui.alert("证件号码号不能为空！");
				$("input[name=zjcode]").focus();
				return false;
			}
		}else{
			var sfz_code = $("input[name=sfz_code]").val();
			if(sfz_code == ""){
				weui.alert("证件号码号不能为空！");
				$("input[name=zjcode]").focus();
				return false;
			}
			
			var checkrs = sfz_code&&checkIdcard(sfz_code);
			if(checkrs != "验证通过!"){
				console.log(1111);
				weui.alert(checkrs);
				$("input[name=zjcode]").focus();
				return false;
			}
		}
		
	
		var blood_type = $("select[name=blood_type]").val();
		if(blood_type == ""){
			weui.alert("请选择血型");
			$("select[name=blood_type]").focus();
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
//		var birth = $('#user_page2 input[name=birth]').val();
//		var sexy = $('#user_page2 select[name=sexy]').val();
//		var _area = $('#user_page2 input[name=area]').val();
//		var addr = $('#user_page2 input[name=addr]').val();
//		var postcode = $('#user_page2 input[name=postcode]').val();
//		if(country=='国外'){
//			country=$('#user_page2 input[name=broad_country]');
//		}
//		info_arr = [xingming,sfz_code,phone,birth,sexy,blood_type,country,_area,addr,postcode,youxiang,cloth_size];
		return true;
	},
	broad_checkpage2:function () {
		var zhongwen_x = $("input[name=surname]").val();
		if(zhongwen_x == ""){
			weui.alert("请输入您的护照拼音姓");
			$("input[name=surname]").focus();	
			return false;
		}
		
		var zhongwen_m = $("input[name=en_name]").val();
		if(zhongwen_m == ""){
			weui.alert("请输入您的护照拼音名");
			$("input[name=en_name]").focus();	
			return false;
		}
		
		var isattended = $("select[name=isattended]").val();
		if(isattended==''){
			weui.alert("请选择是否参加过马拉松");
			$("select[name=isattended]").focus();	
			return false;
		}
		
		var wishfinish = $("input[name=wishfinish]").val();
		if(wishfinish == ""){
			weui.alert("请输入您预计完赛时间");
			$("input[name=wishfinish]").focus();	
			return false;
		}
		
		var contact_name = $("input[name=contact_name]").val();
		if(contact_name == ""){
			weui.alert("请输入紧急联系人姓名");
			$("input[name=contact_name]").focus();	
			return false;
		}
		
		var contact_phone = $("input[name=contact_phone]").val();
		if(contact_phone == ""){
			weui.alert("请输入紧急联系人号码");
			$("input[name=contact_phone]").focus();	
			return false;
		}

		var machrs = shouji_reg.test(contact_phone);
		if(!machrs){
			weui.alert("手机号格式不正确！");
			$("input[name=contact_phone]").focus();
			return false;
		}
		//////////////////////////////////////////////////
		var xingming = $("input[name=name]").val();
		var sfz_code = $("input[name=sfz_code]").val();
		var phone = $("input[name=phone]").val();
		var blood_type = $("select[name=blood_type]").val();
		var country = $("select[name=country]").val();
		var youxiang = $("input[name=e_mail]").val();
		var cloth_size = $("select[name=cloth_size]").val();
		
		var birth = $('input[name=birth]').val();
		var sexy = $('select[name=sexy]').val();
		var _area = $('input[name=area]').val();
		var addr = $('input[name=addr]').val();
		var postcode = $('input[name=postcode]').val();
		if(country=='国外'){
			country=$('input[name=broad_country]').val();
		}
		if(isattended==0){
			isattended='否';
		}
		if(isattended==1){
			isattended='是';
		}
		if(sexy==1){
			sexy='男';
		}else if(sexy==2){
			sexy='女';
		}else{
			sexy='';
		}
		var pass_code=$('input[name=pass_code]').val();
		var issue_date=$('input[name=issue_date]').val();
		var expiry_date=$('input[name=expiry_date]').val();
		var personbest=$('input[name=personbest]').val();
		var personbestmatch=$('input[name=personbestmatch]').val();
		var wishfinish=$('input[name=wishfinish]').val();
		info_arr = [xingming,sfz_code,phone,birth,sexy,blood_type,country,_area,addr,postcode,youxiang,cloth_size,contact_name,contact_phone,pass_code,zhongwen_x,zhongwen_m,issue_date,expiry_date,isattended,personbest,personbestmatch,wishfinish,contact_name,contact_phone];
		return true;
	},
	china_check:function () {
		var xingming = $("#user_page2 input[name=name]").val();
		if(xingming == ""){
			weui.alert("请输入您的姓名");
			$("#user_page2 input[name=name]").focus();	
			return false;
		}

		var phone = $("#user_page2 input[name=phone]").val();
		if(phone == ""){
			weui.alert("请输入手机号码");
			$("#user_page2 input[name=phone]").focus();
			return false;
		}

		var machrs = shouji_reg.test(phone);
		if(!machrs){
			weui.alert("手机号格式不正确！");
			$("#user_page2 input[name=phone]").focus();
			return false;
		}

		var country = $("#user_page2 select[name=country]").val();
		if(country == ""){
			weui.alert("请选择国家");
			$("#user_page2 select[name=country]").focus();
			return false;
		}
		if(country=="国外"){
			country=$("#user_page2 input[name=broad_country]").val();
			if(country==''){
				weui.alert("请填写国籍");
				$("#user_page2 select[name=country]").focus();
				return false;
			}
			var sfz_code = $("#user_page2 input[name=sfz_code]").val();
			if(sfz_code == ""){
				weui.alert("证件号码号不能为空！");
				$("#user_page2 input[name=zjcode]").focus();
				return false;
			}
		}else if(country=='港澳台'){
			var sfz_code = $("#user_page2 input[name=sfz_code]").val();
			if(sfz_code == ""){
				weui.alert("证件号码号不能为空！");
				$("#user_page2 input[name=zjcode]").focus();
				return false;
			}
		}else{
			var sfz_code = $("#user_page2 input[name=sfz_code]").val();
			if(sfz_code == ""){
				weui.alert("证件号码号不能为空！");
				$("#user_page2 input[name=zjcode]").focus();
				return false;
			}
			var checkrs = sfz_code&&checkIdcard(sfz_code);
			if(checkrs != "验证通过!"){
				weui.alert(checkrs);
				$("#user_page2 input[name=zjcode]").focus();
				return false;
			}
		}
		
		
		var blood_type = $("#user_page2 select[name=blood_type]").val();
		if(blood_type == ""){
			weui.alert("请选择血型");
			$("#user_page2 select[name=blood_type]").focus();
			return false;
		}

		var youxiang = $("#user_page2 input[name=e_mail]").val();
		if(youxiang == ""){
			weui.alert("请输入电子邮箱");
			$("#user_page2 input[name=e_mail]").focus();
			return false;
		}

		var machrs = email_reg.test(youxiang);
		if(!machrs){
			weui.alert("您的邮箱格式不正确！");
			$("#user_page2 input[name=e_mail]").focus();
			return false;
		}

		var cloth_size = $("#user_page2 select[name=cloth_size]").val();
		if(cloth_size == ""){
			weui.alert("请选择服装尺码");
			$("#user_page2 select[name=cloth_size]").focus();
			return false;
		}
		
		var contact_name = $("#user_page2 input[name=contact_name]").val();
		if(contact_name == ""){
			weui.alert("请输入紧急联系人姓名");
			$("#user_page2 input[name=contact_name]").focus();	
			return false;
		}
		
		var contact_phone = $("#user_page2 input[name=contact_phone]").val();
		if(contact_phone == ""){
			weui.alert("请输入紧急联系人号码");
			$("#user_page2 input[name=contact_phone]").focus();	
			return false;
		}

		var machrs = shouji_reg.test(contact_phone);
		if(!machrs){
			weui.alert("手机号格式不正确！");
			$("#user_page2 input[name=contact_phone]").focus();
			return false;
		}
		var birth = $('#user_page2 input[name=birth]').val();
		var sexy = $('#user_page2 select[name=sexy]').val();
		var _area = $('#user_page2 input[name=area]').val();
		var addr = $('#user_page2 input[name=addr]').val();
		var postcode = $('#user_page2 input[name=postcode]').val();
		if(country=='国外'){
			country=$('#user_page2 input[name=broad_country]').val();
		}
		if(sexy==1){
			sexy='男';
		}else if(sexy==2){
			sexy='女';
		}else{
			sexy='';
		}
		info_arr = [xingming,sfz_code,phone,birth,sexy,blood_type,country,_area,addr,postcode,youxiang,cloth_size,contact_name,contact_phone];
		return true;		
	}
};
Zepto(function($){new YJBM()});


//$('*[type=preview]').length;
//console.log($($('*[type=preview]')[1]).html());



////////////////////////////////////////////////////////////////////////

$('select[name=country]').bind('change',function () {
	if($(this).val()=='国外'){
		$('.broad_input').show();
	}else{
		$('.broad_input').hide();
	}
})
$('input[name=sfz_code]').bind('input',function () {
	if(checkIdcard($(this).val())=="验证通过!"){
		var birth=$(this).val().substring(6,14);
		var sexy=$(this).val().substring(16,17);
		var birth_year=birth.substring(0,4);
		var birth_month=birth.substring(4,6);
		var birth_day=birth.substring(6,8);
		var birth_view=birth_year+'-'+birth_month+'-'+birth_day;
		$('input[name=birth]').val(birth_view);
		$('select[name=sexy]').css('color','#000000');
		if(sexy%2==0){
			$('select[name=sexy]').val('2');
		}else{
			$('select[name=sexy]').val('1');
		}
		
	}
})

/////////////////////////////转换大写///////////////////////

$('input[name=surname]').blur(function () {
	var val =$(this).val().toLocaleUpperCase();
	$(this).val(val);
	
})
$('input[name=en_name]').blur(function () {
	var val =$(this).val().toLocaleUpperCase();
	$(this).val(val);
})

function yz_sfz_code(sfz_val) {
	if(checkIdcard(sfz_val)=="验证通过!"){
		var birth=sfz_val.substring(6,14);
		var sexy=sfz_val.substring(16,17);
		var birth_year=birth.substring(0,4);
		var birth_month=birth.substring(4,6);
		var birth_day=birth.substring(6,8);
		var birth_view=birth_year+'-'+birth_month+'-'+birth_day;
		$('input[name=birth]').val(birth_view);
		$('select[name=sexy]').css('color','#000000');
		if(sexy%2==0){
			$('select[name=sexy]').val('2');
		}else{
			$('select[name=sexy]').val('1');
		}
		
	}
}

////////////////表单本地存储////////////////
//$('#user_page1 *[type=text]').each(function (index) {
//	$(this).blur(function () {
//		localMsg=true;
//		console.log(index);
//		var _val=$(this).val();
//		console.log(_val);
//		window.sessionStorage.setItem(index,_val);
//		window.sessionStorage.setItem('localMsg','true');
//		
//	})
//})
//$('#user_page1 *[type=select]').each(function (index) {
//	$(this).change(function () {
//		window.sessionStorage.setItem('select'+index,_val);
//		window.sessionStorage.setItem('localSelect','true');
//	})
//})
window.onload=function () {
	if(info_type=='海外'){
		get_history("user_page1");
	}
	if(info_type=='国内'){
		get_history("user_page2");
	}
}
/////////本地存数据////////////////////////////////////
function set_history(userpage) {
	$('#'+userpage+' *[type=text]').each(function (index) {
		$(this).blur(function () {
			localMsg=true;
			var _val=$(this).val();
			window.sessionStorage.setItem(index,_val);
			window.sessionStorage.setItem('localMsg','true');
			
		})
	})
	$('#'+userpage+' *[type=select]').each(function (index) {
		$(this).change(function () {
			var _val = $(this).val();
			window.sessionStorage.setItem('select'+index,_val);
			window.sessionStorage.setItem('localSelect','true');
		})
	})
	
}

///////刷新放数据///////
function get_history(userpage) {
	var localSelect = window.sessionStorage.getItem('localSelect');
	var localMsg = window.sessionStorage.getItem('localMsg');
	if(localMsg){
		$('#'+userpage+' *[type=text]').each(function (index) {
			if($(this).val()==''){
				var get=window.sessionStorage.getItem(index);
				if(get){
					$(this).val(get);
					if($(this).attr('name')=='sfz_code'){
						yz_sfz_code(get);
					}
				}
				
			}
		})	
	}
	if(localSelect){
		$('#'+userpage+' *[type=select]').each(function (index) {
			if($(this).val()==''){
				var get=window.sessionStorage.getItem('select'+index);
				if(get){
					if(get=='国外'){
						$('.broad_input').show();
					}
					$(this).val(get);
					$(this).css('color','#000000');
				}
				
			}
		
		})
	}
}

//$('#sexy').change(function () {
//	console.log(this.value)
//	if (this.value!='') {
//		$('#sexy').css({'color':'#000000',})
//	} else{
//		$('#sexy').css({'color':'#c9c9c9',})
//	}
//})
//$('#cloth_size').change(function () {
//	console.log(this.value)
//	if (this.value!='') {
//		$('#cloth_size').css({'color':'#000000',})
//	} else{
//		$('#cloth_size').css({'color':'#c9c9c9',})
//	}
//})
//$("#un_re_code").click(function(){
//	Passport.alert();
//});
//$('.next_page').bind('tap',function () {
//	$('#broad_page1').hide();
//	$('#broad_page2').show();
//	var broad_page2=document.getElementById('broad_page2');
//	var broad_page1=document.getElementsByTagName('body')[0];
//	broad_page1.scrollTop=0;
//	console.log(broad_page1.scrollTop);
//	console.log()
//})

</script>
</body>

</html><?php }} ?>