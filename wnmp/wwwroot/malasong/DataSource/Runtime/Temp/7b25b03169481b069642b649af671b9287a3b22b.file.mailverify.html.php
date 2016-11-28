<?php /* Smarty version Smarty-3.1.6, created on 2015-10-28 01:08:28
         compiled from "../DataSource/Tpl\Account\mailverify.html" */ ?>
<?php /*%%SmartyHeaderCode:2285562b24316c3968-85792927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b25b03169481b069642b649af671b9287a3b22b' => 
    array (
      0 => '../DataSource/Tpl\\Account\\mailverify.html',
      1 => 1445965706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2285562b24316c3968-85792927',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_562b2431704be',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562b2431704be')) {function content_562b2431704be($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Comon/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="register_box" class="general_page section">
	<div class="section_center" >
		<div id="register_center">
			<?php if ($_smarty_tpl->tpl_vars['error']->value==0){?>
				<div id="register_tab_box">
					激活成功
				</div>
				<div class="message">
					<p><span class="tagging">恭喜您！</span>您的帐号已激活成功！</p>
					<p>快去登录你的帐号吧！</p>
					<p>请点<a href="/Account/login">这里</a>登录</p>
				</div>
		    <?php }else{ ?>
			    <div id="register_tab_box">
					激活失败！
				</div>
				<div class="message">
					<p><span class="tagging">很抱歉！</span>您的帐号激活失败！</p>
					<p>可能存在下面几方面原因</p>
					<p>1、链接已过期失效</p>
					<p>2、系统错误</p>
					<p>如果您有疑问，可以<span>联系我们的客服!</span></p>
				</div>
		    <?php }?>
	    </div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('Comon/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>