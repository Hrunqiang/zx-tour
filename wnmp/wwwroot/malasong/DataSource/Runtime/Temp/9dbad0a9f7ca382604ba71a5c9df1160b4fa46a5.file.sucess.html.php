<?php /* Smarty version Smarty-3.1.6, created on 2015-12-13 19:35:53
         compiled from "../DataSource/Tpl\OnlineEnroll\sucess.html" */ ?>
<?php /*%%SmartyHeaderCode:28022566d58199b7461-13079168%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9dbad0a9f7ca382604ba71a5c9df1160b4fa46a5' => 
    array (
      0 => '../DataSource/Tpl\\OnlineEnroll\\sucess.html',
      1 => 1446054419,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28022566d58199b7461-13079168',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_566d5819a47d9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566d5819a47d9')) {function content_566d5819a47d9($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Comon/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<style>
.general_page_left_center span{line-height: 25px;font-size:16px;font-weight: bold;}
</style>
<script src="/static/js/function.js"></script>
<script src="/static/js/OnlineEnroll.js"></script>
<div id="register_box" class="general_page section">
	<div class="section_center">
		<div class="general_page_left">
			<div class="left_body">
				<p class="general_page_left_title">报名成功</p>
				<div class="general_page_left_center">
					<span><font style="color:red">恭喜您！</font>您已成功报名并参加2016年黑瞎子岛线上马拉松比赛！<br>
 
待比赛结束后，我们会将比赛结果发送您的邮箱<font style="color:red"><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</font>，请您注意查收<br>
 
如果您的报名成绩通过官方审核，我们将2016年黑瞎子岛官方马拉松赛事奖牌邮寄给您！</span>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				</div>
			</div>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ('Comon/right.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('Comon/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>