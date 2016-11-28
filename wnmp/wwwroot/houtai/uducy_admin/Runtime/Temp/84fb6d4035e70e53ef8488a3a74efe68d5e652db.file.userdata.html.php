<?php /* Smarty version Smarty-3.1.6, created on 2016-11-14 10:48:54
         compiled from "../uducy_admin/Tpl\Customer\userdata.html" */ ?>
<?php /*%%SmartyHeaderCode:3246358292616aa7d96-00193532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84fb6d4035e70e53ef8488a3a74efe68d5e652db' => 
    array (
      0 => '../uducy_admin/Tpl\\Customer\\userdata.html',
      1 => 1478503485,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3246358292616aa7d96-00193532',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'uid' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58292616c0d09',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58292616c0d09')) {function content_58292616c0d09($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Login/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<style>
h1{border-bottom: 1px solid #000;padding:10px 5px;}
.zx_table{padding:5px 10px;width:300px;margin: 10px 30px;}
.zx_table a{color:#4e9ad4; }
.zx_table p{border-left:5px solid rgb(255, 102, 153);height: 30px;line-height: 30px;font-size: 20px;padding-left: 10px;}
.zx_table p a{float: right;font-size: 16px;}
.zx_table table{width: 100%;}
.zx_table tr{border-bottom: 1px dashed #000;}
.zx_table tr:last-child{border-bottom: none;}
.zx_table td{padding:10px 5px;max-width: 200px!important;}
.zx_table td input{border: none;}
#sbt{border: none;background:rgb(255, 102, 0);color:#FFF;padding:10px 30px;}
</style>
<div class="wrap">
    <div class="container">
        <div id="main">      	
            <div class="con">
            <form action="?s=Customer&a=userdata&uid=<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
" method="post">
                <h1>用户列表-修改资料</h1>
                <div class="zx_table">
                    <p>基本信息</p>
                    <table>
                        <tr>
                            <th>真实姓名</th>
                            <td><input type="text" placeholder="未填写" name="name" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
"></td>
                        </tr>
                        <tr>
                            <th>身份证</th>
                            <td><input type="text" placeholder="未填写" name="sfz_code" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['sfz_code'];?>
"></td>
                        </tr>
                        <tr>
                            <th>手机号</th>
                            <td><input type="text" placeholder="未填写" name="phone" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['phone'];?>
"></td>
                        </tr>
                        <tr>
                            <th>生日</th>
                            <td><input type="text" class="datepicker"  placeholder="未填写" name="birth" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['birth'];?>
"></td>
                        </tr>
                        <tr>
                            <th>姓别</th>
                            <td>
							<label for="sexy1">
								<input type="radio" value="1" id="sexy1" name="sexy" <?php if ($_smarty_tpl->tpl_vars['info']->value['sexy']==1){?>checked<?php }?>>男
							</label>
							<label for="sexy2">
								<input type="radio" value="2" id="sexy2" name="sexy" <?php if ($_smarty_tpl->tpl_vars['info']->value['sexy']==2){?>checked<?php }?>>女
							</label>
							</td>
                        </tr>
                        <tr>
                            <th>国籍</th>
                            <td>
                            	<select name="country" id="">
                            		<option value="">未填写</option>
                            		<option value="中国" <?php if ($_smarty_tpl->tpl_vars['info']->value['country']=="中国"){?>selected<?php }?>>中国</option>
                            		<option value="其它" <?php if ($_smarty_tpl->tpl_vars['info']->value['country']=="其它"){?>selected<?php }?>>其它</option>
                            	</select>
                            </td>
                        </tr>
                        <tr>
                            <th>地区</th>
                            <td><input type="text" placeholder="未填写" name="area" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['area'];?>
"></td>
                        </tr>
                        <tr>
                            <th>详细地址</th>
                            <td><input type="text" placeholder="未填写" name="addr" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['addr'];?>
"></td>
                        </tr>
                        <tr>
                            <th>邮编</th>
                            <td><input type="text" placeholder="未填写" name="postcode" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['postcode'];?>
"></td>
                        </tr>
                        <tr>
                            <th>邮箱</th>
                            <td><input type="text" placeholder="未填写" name="e_mail" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['e_mail'];?>
"></td>
                        </tr>
                        <tr>
                            <th>服装尺码</th>
                            <td>
                            	<select name="cloth_size" id="">
                            		<option value="">未填写</option>
                            		<option value="XS" <?php if ($_smarty_tpl->tpl_vars['info']->value['cloth_size']=="XS"){?>selected<?php }?>>XS</option>
                            		<option value="S" <?php if ($_smarty_tpl->tpl_vars['info']->value['cloth_size']=="S"){?>selected<?php }?>>S</option>
                            		<option value="M" <?php if ($_smarty_tpl->tpl_vars['info']->value['cloth_size']=="M"){?>selected<?php }?>>M</option>
                            		<option value="L" <?php if ($_smarty_tpl->tpl_vars['info']->value['cloth_size']=="L"){?>selected<?php }?>>L</option>
                            		<option value="XL" <?php if ($_smarty_tpl->tpl_vars['info']->value['cloth_size']=="XL"){?>selected<?php }?>>XL</option>
                            		<option value="XXL" <?php if ($_smarty_tpl->tpl_vars['info']->value['cloth_size']=="XXL"){?>selected<?php }?>>XXL</option>
                            	</select>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="zx_table">
                    <p>报名必填信息</p>
                    <table>
                       	<tr>
                            <th>护照号码</th>
                            <td><input type="text" placeholder="未填写" name="pass_code" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['pass_code'];?>
"></td>
                        </tr>
                        <tr>
                            <th>中文姓拼音</th>
                            <td><input type="text" placeholder="未填写" name="surname" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['surname'];?>
"></td>
                        </tr>
                        <tr>
                            <th>中文名拼音</th>
                            <td><input type="text" placeholder="未填写" name="en_name" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['en_name'];?>
"></td>
                        </tr>
                        <tr>
                            <th>签发日期</th>
                            <td><input type="text" class="datepicker" placeholder="未填写" name="issue_date" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['issue_date'];?>
"></td>
                        </tr>
                        <tr>
                            <th>有效期至</th>
                            <td><input type="text" class="datepicker" placeholder="未填写" name="expiry_date" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['expiry_date'];?>
"></td>
                        </tr>
                        <tr>
                            <th>是否参加过马松</th>
                            <td>
	                            <label for="isattended1">
									<input type="radio" value="0" id="isattended1" name="isattended" <?php if ($_smarty_tpl->tpl_vars['info']->value['isattended']==0){?>checked<?php }?>>否
								</label>
								<label for="isattended2">
									<input type="radio" value="1" id="isattended2" name="isattended" <?php if ($_smarty_tpl->tpl_vars['info']->value['isattended']==1){?>checked<?php }?>>是
								</label>
                            </td>
                        </tr>
                        <tr>
                            <th>马拉松最好成绩</th>
                            <td><input type="text" placeholder="未填写" name="personbest" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['personbest'];?>
"></td>
                        </tr>
                        <tr>
                            <th>最好成绩赛事名称</th>
                            <td><input type="text" placeholder="未填写" name="personbestmatch" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['personbestmatch'];?>
"></td>
                        </tr>
                        <tr>
                            <th>预期完赛时间</th>
                            <td><input type="text" placeholder="未填写" name="wishfinish" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['wishfinish'];?>
"></td>
                        </tr>
                        <tr>
                            <th>联系人</th>
                            <td><input type="text" placeholder="未填写" name="contact_name" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['contact_name'];?>
"></td>
                        </tr>
                        <tr>
                            <th>手机号</th>
                            <td><input type="text" placeholder="未填写" name="contact_phone" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['contact_phone'];?>
"></td>
                        </tr>
                    </table>
                    <input type="submit" value="保存" id="sbt">
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
<script>
$('.datepicker').datetimepicker({
  //showOn: "button",
  //buttonImage: "./css/images/icon_calendar.gif",
  //buttonImageOnly: true,
  showSecond: false,
  showHour: false,
  showMinute: false,
  timeFormat: '',
  stepHour: 1,
  stepMinute: 1,
  stepSecond: 1
});
</script>
<?php echo $_smarty_tpl->getSubTemplate ('Login/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>