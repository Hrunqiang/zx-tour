<?php /* Smarty version Smarty-3.1.6, created on 2015-10-31 16:15:57
         compiled from "../DataSource/Tpl\MatchPicture\playerpic.html" */ ?>
<?php /*%%SmartyHeaderCode:7690563478bd92a7d3-99919328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '740d573ce8dab178d14e0928d575f3ad7f535bd4' => 
    array (
      0 => '../DataSource/Tpl\\MatchPicture\\playerpic.html',
      1 => 1446279345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7690563478bd92a7d3-99919328',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_563478bd9bbfa',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563478bd9bbfa')) {function content_563478bd9bbfa($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Comon/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="register_box" class="general_page section">
	<div class="section_center">
		<div class="general_page_left">
			<div class="left_body">
				<p class="general_page_left_title">选手照片领取</p>
				<div class="general_page_left_center">
					<div class="score_select">
						<form action="" method="post" id="login_form">
							<p class='input_p'>
								<label>姓　名</label>
								<input type="text" name="user_name"  autocomplete="off"/>
							</p>
							<p class='input_p'><label>参赛号</label>
								<input type="text" name="match_num" />
							</p>
							<p class='input_p'>
								<label>验证码</label>
								<input type="text" name="code" />
								<img class="code_img" src="/Account/verify" id="login_code_img" onclick="this.src=this.src+'?'+Math.random()" alt="">
								<label class="changeCode" id="login_changeCode">换一张</label>
							</p>
							<p class="input_s">
								<input id="login_submit" class="btn" type="button" value="查询" onclick="alert('2016年1月1日才比赛，不要太心急哦！')" />
							</p>
						</form>
					</div>
					<div class="score_res">
						<div class="score_res_tab">
							<table>
								<tr>
									<th>比赛排名</th>
									<th>姓名</th>
									<th>参赛号</th>
									<th>参赛项目</th>
									<th>比赛成绩</th>
								</tr>
								<tr>
									<td>526</td>
									<td>李小花</td>
									<td>9527</td>
									<td>女子全程马拉松赛</td>
									<td>04:45:36</td>
								</tr>
							</table>
						</div>
						<div class="score_res_prol">
							<p class="score_res_prol_t">马拉松完赛证书</p>
							<p>恭喜李小花（参赛号: 9527）获得2016年黑瞎子岛新年日出女子全程马拉松赛第516名，特此颁发证书！</p>
							<p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
							<p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
							<p>xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
						</div>
						<div class="score_res_print">
							<input class="btn" type="button" value="打印证书">
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ('Comon/right.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('Comon/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>