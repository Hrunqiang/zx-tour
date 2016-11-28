<?php /* Smarty version Smarty-3.1.6, created on 2015-10-28 01:27:30
         compiled from "../DataSource/Tpl\Account\reset.html" */ ?>
<?php /*%%SmartyHeaderCode:978562bd2a7abdb96-87524429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6d21c6357724ab055180888b77fd6076dbb10af' => 
    array (
      0 => '../DataSource/Tpl\\Account\\reset.html',
      1 => 1445966848,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '978562bd2a7abdb96-87524429',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_562bd2a7af760',
  'variables' => 
  array (
    'error' => 0,
    'token' => 0,
    'ac' => 0,
    'account' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562bd2a7af760')) {function content_562bd2a7af760($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Comon/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="reset_box" class="general_page section">
	<div class="section_center" >
		<div id="register_center">
			<?php if ($_smarty_tpl->tpl_vars['error']->value==1){?>
			<div class="message">
				<p>抱歉,亲！您访问的页面已过期!</p>
			</div>
			<?php }else{ ?>
			<div id="register_form_box">
				<form action="/Account/reset?token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
&ac=<?php echo $_smarty_tpl->tpl_vars['ac']->value;?>
&account=<?php echo $_smarty_tpl->tpl_vars['account']->value;?>
" method="post" id="reset_form" class='account_form'>
				    <input type="hidden" id="pattern_hidden_ipt" name="pattern" value="phone">
				    <p id="pattern_p_ipt">密码</p>
			        <p class='input_p' >
			        	<input name="pwd" type="password" id="pwd_input" />
			        </p>
			        <p id="pattern_p_ipt">确认密码</p>
			        <p class='input_p' >
			        	<input name="repwd" type="password" id="repwd_input" />
			        </p>
			        <p class="error_p" id="reset_error"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</p>
					<p class="input_sl"><input id="reset_submit" class="btn" type="submit" value="提交" /></p>
			    </form>
		    </div>
		    <?php }?>
	    </div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('Comon/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>