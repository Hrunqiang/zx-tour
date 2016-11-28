<?php /* Smarty version Smarty-3.1.6, created on 2015-12-16 10:59:51
         compiled from "../DataSource/Tpl\OnlineEnroll\xinxi.html" */ ?>
<?php /*%%SmartyHeaderCode:17075670d3a7ad0e22-88300993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '787266242e0c24fcc1137e583d08d7020edb4b57' => 
    array (
      0 => '../DataSource/Tpl\\OnlineEnroll\\xinxi.html',
      1 => 1450075582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17075670d3a7ad0e22-88300993',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error' => 0,
    'countries' => 0,
    'i' => 0,
    'bmtype' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5670d3a7de60e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5670d3a7de60e')) {function content_5670d3a7de60e($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Comon/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="/static/css/Enroll.css">
<script src="/static/js/function.js"></script>
<script src="/static/js/OnlineEnroll.js"></script>
<div id="register_box" class="general_page section">
	<div class="section_center">
		<div class="general_page_left enroll">
			<div class="title">填写个人资料</div>
			<div class="title_des">
				*注：以下信息为报名必须条件,信息提交后不能修改,请确保信息务必真实。
				<?php if ($_smarty_tpl->tpl_vars['error']->value){?><br/><br/><font style="color:red;font-size:16px;font-weight: bold;">****<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
****</font><?php }?>
			</div>
			<form id="ziliao_table" action="/OnlineEnroll/ziliao" method="post" >
			<ul>
				<li class="txt">姓名</li>
				<li class="line"><input class="normal_input" type="text" name="xingming" value="请输入真实姓名"></li>
				<li class="txt">国家 / 地区</li>
				<li class="line">
					<select class="normal_select" name="guojia">
						<option value="">国家/地区</option>
						<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['n']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['n']['index']++;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</option>
						<?php } ?>
					</select>
				</li>
				<li class="txt">证件</li>
				<li class="line slipe">
					<select class="left_select fl" name="zjtype">
						<option value="身份证">身份证</option>
						<option value="护照">护照</option>
						<option value="军官证">军官证</option>
					</select>
					<input class="normal_input fl space" name="zjcode" type="text" value="请输入证件号码">
					<div class="clearfix"></div>
				</li>
				<li class="txt">性别</li>
				<li class="line">
					<label><input type="radio" value="1" name="xingbie" checked="checked">&nbsp;男</label>&nbsp;&nbsp;&nbsp;&nbsp;
					<label><input type="radio" value="2" name="xingbie">&nbsp;女</label>
				</li>
				<li class="txt">生日</li>
				<li class="line"><input class="normal_input" name="shengri" type="text" value="请输入生日"><span>格式:1990-06-19</span></li>
				<li class="txt">手机号</li>
				<li class="line"><input class="normal_input" name="shouji" type="text" value="请输手机号"></li>
				<li class="txt">电子邮箱</li>
				<li class="line"><input class="normal_input" name="youxiang"  type="text" value="请输电子邮箱"></li>
				<li class="txt">现居地址</li>
				<li class="line">
					<!-- <select class="left_select fl" name="shengfen">
						<option value="">省份</option>
						<option value="河北省">河北省</option>
					</select>
					<select class="left_select fl space" name="diqu">
						<option>城市</option>
						<option>石家庄市</option>
					</select> -->
					<input class="normal_input" name="dizhi" type="text" value="请输入详细地址">
				</li>
				<li class="line">
					<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['bmtype']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['n']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['n']['index']++;
?>
					<?php if ($_smarty_tpl->tpl_vars['i']->value['goodscls']=="半程马拉松[21.0975公里]"){?>
					<label><input type="radio" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" price="<?php echo $_smarty_tpl->tpl_vars['i']->value['goodsprice'];?>
" checked  name="bmtype" >&nbsp;<?php echo $_smarty_tpl->tpl_vars['i']->value['goodscls'];?>
</label>&nbsp;&nbsp;&nbsp;&nbsp;
					<!-- <label><input type="radio" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" price="<?php echo $_smarty_tpl->tpl_vars['i']->value['goodsprice'];?>
" <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['n']['index']==0){?> checked <?php }?> name="bmtype" >&nbsp;<?php echo $_smarty_tpl->tpl_vars['i']->value['goodscls'];?>
</label>&nbsp;&nbsp;&nbsp;&nbsp; -->
					<?php }?>
					<?php } ?>
				</li>
			</ul>
			<div class="line"></div>
			<div class="title_des">*注：以下信息为选填,请根据自身情况填写。</div>
			<ul>
				<li class="txt">学历</li>
				<li class="line">
					<select class="normal_select" name="xueli">
						<option value="">选择学历</option>
						<option value="研究生及以上">研究生及以上</option>
						<option value="本科及大专">本科及大专</option>
						<option value="高中及中专">高中及中专</option>
						<option value="初中及以下">初中及以下</option>
					</select>
				</li>
				
				<li class="txt">血型</li>
				<li class="line">
					<label><input type="radio" value="A型" name="xuexing" checked="checked">&nbsp;A型</label>&nbsp;&nbsp;&nbsp;&nbsp;
					<label><input type="radio" value="B型" name="xuexing">&nbsp;B型</label>&nbsp;&nbsp;&nbsp;&nbsp;
					<label><input type="radio" value="AB型" name="xuexing">&nbsp;AB型</label>&nbsp;&nbsp;&nbsp;&nbsp;
					<label><input type="radio" value="O型" name="xuexing">&nbsp;O型</label>&nbsp;&nbsp;&nbsp;&nbsp;
					<label><input type="radio" value="其他" name="xuexing">&nbsp;其他</label>&nbsp;&nbsp;&nbsp;&nbsp;
				</li>
				
				<li class="txt">行业</li>
				<li class="line">
					<select class="normal_select" name="hangye" id="hangye">
									<option value="">请选择</option>
									<option value="机构组织">机构组织</option>
									<option value="农林牧渔">农林牧渔</option>
									<option value="医药卫生">医药卫生</option>
									<option value="建筑建材">建筑建材</option>
									<option value="冶金矿产">冶金矿产</option>
									<option value="石油化工">石油化工</option>
									<option value="水利水电">水利水电</option>
									<option value="交通运输">交通运输</option>
									<option value="信息产业">信息产业</option>
									<option value="机械机电">机械机电</option>
									<option value="轻工食品">轻工食品</option>
									<option value="服装纺织">服装纺织</option>
									<option value="专业服务">专业服务</option>
									<option value="安全防护">安全防护</option>
									<option value="环保绿化">环保绿化</option>
									<option value="旅游休闲">旅游休闲</option>
									<option value="办公文教">办公文教</option>
									<option value="电子电工">电子电工</option>
									<option value="玩具礼品">玩具礼品</option>
									<option value="家居用品">家居用品</option>
									<option value="物资">物资</option>
									<option value="包装">包装</option>
									<option value="体育">体育</option>
									<option value="办公">办公</option>
									<option value="其他">其他</option>
						</select>
				</li>
				
				<li class="txt">年收入</li>
				<li class="line">
					<label><input type="radio" value="1-5万" name="shouru" checked="checked">&nbsp;1-5万</label>&nbsp;&nbsp;&nbsp;&nbsp;
					<label><input type="radio" value="6-10万" name="shouru">&nbsp;6-10万</label>&nbsp;&nbsp;&nbsp;&nbsp;
					<label><input type="radio" value="11-20万" name="shouru">&nbsp;11-20万</label>&nbsp;&nbsp;&nbsp;&nbsp;
					<label><input type="radio" value="20-50万" name="shouru">&nbsp;20-50万</label>&nbsp;&nbsp;&nbsp;&nbsp;
					<label><input type="radio" value="50-100万" name="shouru">&nbsp;50-100万</label>&nbsp;&nbsp;&nbsp;&nbsp;
					<label><input type="radio" value="100万以上" name="shouru">&nbsp;100万以上</label>&nbsp;&nbsp;&nbsp;&nbsp;
				</li>
				
				<li class="txt">职业</li>
				<li class="line">
					<select class="normal_select" name="zhiye">
								<option value="">请选择</option>
								<option value="机关及事业单位工作者">机关及事业单位工作者</option>
								<option value="企业高级职员">企业高级职员</option>
								<option value="职工">职工</option>
								<option value="专业人员">专业人员</option>
								<option value="学生">学生</option>
								<option value="私营业主">私营业主</option>
								<option value="自由职业者">自由职业者</option>
								<option value="无业">无业</option>
								<option value="退休">退休</option>
								<option value="其他">其他</option>
					</select>
				</li>
				
				<li class="txt">身体状况</li>
				<li class="line">
					<label><input type="radio" value="健康" name="shenti" checked="checked">&nbsp;健康</label>&nbsp;&nbsp;&nbsp;&nbsp;
					<label><input type="radio" value="良好" name="shenti">&nbsp;良好</label>&nbsp;&nbsp;&nbsp;&nbsp;
					<label><input type="radio" value="一般" name="shenti">&nbsp;一般</label>&nbsp;&nbsp;&nbsp;&nbsp;
				</li>
				
				<li class="txt">参与跑步年限</li>
				<li class="line">
					<label><input type="radio" value="1年及以内" name="nianxian" checked="checked">&nbsp;1年及以内</label>&nbsp;&nbsp;&nbsp;&nbsp;
					<label><input type="radio" value="2-3年" name="nianxian">&nbsp;2-3年</label>&nbsp;&nbsp;&nbsp;&nbsp;
					<label><input type="radio" value="4-6年" name="nianxian">&nbsp;4-6年</label>&nbsp;&nbsp;&nbsp;&nbsp;
					<label><input type="radio" value="7-10年" name="nianxian">&nbsp;7-10年</label>&nbsp;&nbsp;&nbsp;&nbsp;
					<label><input type="radio" value="10年以上" name="nianxian">&nbsp;10年以上</label>&nbsp;&nbsp;&nbsp;&nbsp;
				</li>
				
				<li class="txt">首次完成全马日期</li>
				<li class="line"><input class="normal_input" name="qmfirstdate" type="text" value="请输入日期"><span>格式:1990-06-19</span></li>
				
				<li class="txt">完成全马最好成绩</li>
				<li class="line">
				<input class="left_input fl" name="qmbest_h" type="text" onkeyup="value=value.replace(/[^\d]/g,'')" value="请输入小时"><div class="des fl">小时</div>
				<input class="left_input fl" name="qmbest_i" type="text" onkeyup="value=value.replace(/[^\d]/g,'')" value="请输入分钟"><div class="des fl">分</div>
				<input class="left_input fl" name="qmbest_s" type="text" onkeyup="value=value.replace(/[^\d]/g,'')" value="请输入秒"><div class="des fl">秒</div>
				<div class="clearfix"></div>
				</li>
				
				<li class="txt">首次完成半马日期</li>
				<li class="line"><input class="normal_input" name="bmfirstdate" type="text" value="请输入日期"><span>格式:1990-06-19</span></li>
				
				<li class="txt">完成半马最好成绩</li>
				<li class="line">
				<input class="left_input fl" type="text" name="bmbest_h" onkeyup="value=value.replace(/[^\d]/g,'')"  value="请输入小时"><div class="des fl">小时</div>
				<input class="left_input fl" type="text" name="bmbest_i" onkeyup="value=value.replace(/[^\d]/g,'')" value="请输入分钟"><div class="des fl">分</div>
				<input class="left_input fl" type="text" name="bmbest_s" onkeyup="value=value.replace(/[^\d]/g,'')" value="请输入秒"><div class="des fl">秒</div>
				<div class="clearfix"></div>
				</li>
				
				<li class="txt">使用的装备品牌</li>
				<li class="line">
					<div class="label fl"><label><input type="checkbox" value="NIKE" name="zbpinpai[]" >&nbsp;NIKE</label></div>
					<div class="label fl"><label><input type="checkbox" value="Adidas" name="zbpinpai[]" >&nbsp;Adidas</label></div>
					<div class="label fl"><label><input type="checkbox" value="New Banlance" name="zbpinpai[]" >&nbsp;New Banlance</label></div>
					<div class="label fl"><label><input type="checkbox" value="PUMA" name="zbpinpai[]" >&nbsp;PUMA</label></div>
					<div class="label fl"><label><input type="checkbox" value="LI-NING" name="zbpinpai[]" >&nbsp;LI-NING</label></div>
					<div class="label fl"><label><input type="checkbox" value="Saucony" name="zbpinpai[]" >&nbsp;Saucony</label></div>
					<div class="label fl"><label><input type="checkbox" value="Brooks" name="zbpinpai[]" >&nbsp;Brooks</label></div>
					<div class="label fl"><label><input type="checkbox" value="其他" name="zbpinpai[]" >&nbsp;其他</label></div>
					<div class="clearfix"></div>
				</li>
				
				<li class="txt">最爱运动饮料品牌</li>
				<li class="line">
					<div class="label fl"><label><input type="checkbox" value="佳得乐" name="ylpinpai[]" >&nbsp;佳得乐/Gatorade</label></div>
					<div class="label fl"><label><input type="checkbox" value="健力宝" name="ylpinpai[]" >&nbsp;健力宝/Jianlibao</label></div>
					<div class="label fl"><label><input type="checkbox" value="脉动" name="ylpinpai[]" >&nbsp;脉动/Pulsation</label></div>
					<div class="label fl"><label><input type="checkbox" value="红牛" name="ylpinpai[]" >&nbsp;红牛/Red Bull</label></div>
					<div class="label fl"><label><input type="checkbox" value="日加满" name="ylpinpai[]" >&nbsp;日加满/Ichi More</label></div>
					<div class="label fl"><label><input type="checkbox" value="其他" name="ylpinpai[]" >&nbsp;其他</label></div>
					<div class="clearfix"></div>
				</li>
			</ul>
			<div class="submit"><input  type="submit" value="提交资料" /></div>
			</form>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ('Comon/right.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('Comon/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>