<?php /* Smarty version Smarty-3.1.6, created on 2015-10-28 01:04:02
         compiled from "../DataSource/Tpl\Account\forget.html" */ ?>
<?php /*%%SmartyHeaderCode:30524562ba9fbb98434-15969500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25e8e48c270abab0339eaa70cb6919c27a135a1d' => 
    array (
      0 => '../DataSource/Tpl\\Account\\forget.html',
      1 => 1445965441,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30524562ba9fbb98434-15969500',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_562ba9fbbe6e5',
  'variables' => 
  array (
    'reset' => 0,
    'email' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562ba9fbbe6e5')) {function content_562ba9fbbe6e5($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Comon/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="register_box" class="general_page section">
	<div class="section_center" >
		<div id="register_center">
			<?php if ($_smarty_tpl->tpl_vars['reset']->value=="ok"){?>
				<div id="register_tab_box">
					密码重置成功！
				</div>
				<div class="message">
					<p><span class="tagging">恭喜您！</span>您的新密码已修改成功！请点<a href="/Account/login">这里</a>登录</p>
				</div>
			<?php }elseif($_smarty_tpl->tpl_vars['reset']->value=="emailsend"){?>
				<div id="register_tab_box">
					邮箱验证成功
				</div>
				<div class="message">
					<p>您的帐号邮箱验证成功！</p>
					<p>我们已将重置密码的邮件发送到您的邮箱<span><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</span>，请您注意查收</p>
					<p>如果你已修改密码，请点<a href="/Account/login">这里</a>登录</p>
				</div>
			<?php }else{ ?>
			<div id="register_tab_box">
				<a id="phone_reg_tab" class='reg_pattern_step curr_reg_tab'>手机找回</a> | <a id="mail_reg_tab" class='reg_pattern_step'>邮箱找回</a>
			</div>
			<div id="register_form_box">
				<form action="/Account/forget" method="post" id="forget_form" class='account_form'>
				    <input type="hidden" id="pattern_hidden_ipt" name="pattern" value="phone">
				    <p id="pattern_p_ipt">手机号码</p>
			        <p class='input_p' >
			        	<input name="account" type="text" id="account_input" />
			        	<button class="send_phone_btn" id="send_phone_code_forget">发送手机验证码</button>
			        	<label id="send_phone_error" class="error_p"></label>
			        </p>
			        <p>验证码</p>
			        <p class='input_c'>
			        	<input type="text" name="code" id="code_input"/>
			        	<span class='code_img_span'>
				        	<img class="code_img" src="/Account/verify" id="register_code_img" onclick="this.src=this.src+'?'+Math.random()" alt="">
				        	<label class="changeCode" >换一张</label>
			        	</span>
			        </p>
			        <p class="error_p" id="forget_error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
					<p class="input_sl"><input id="forget_submit" class="btn" type="button" value="立即找回" /></p>
			    </form>
		    </div>
		    <?php }?>
	    </div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('Comon/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>