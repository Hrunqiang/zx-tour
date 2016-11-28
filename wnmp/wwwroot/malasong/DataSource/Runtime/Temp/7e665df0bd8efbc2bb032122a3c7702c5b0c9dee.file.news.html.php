<?php /* Smarty version Smarty-3.1.6, created on 2015-10-31 00:56:28
         compiled from "../DataSource/Tpl\Index\news.html" */ ?>
<?php /*%%SmartyHeaderCode:214125633998adeb123-91843341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e665df0bd8efbc2bb032122a3c7702c5b0c9dee' => 
    array (
      0 => '../DataSource/Tpl\\Index\\news.html',
      1 => 1446224186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214125633998adeb123-91843341',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5633998ae3cfb',
  'variables' => 
  array (
    'news' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5633998ae3cfb')) {function content_5633998ae3cfb($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Comon/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="register_box" class="general_page section">
	<div class="section_center">
		<div class="general_page_left">
			<div class="left_body newsbox">
				<div class="general_page_left_title">
					<p><?php echo $_smarty_tpl->tpl_vars['news']->value['news_title'];?>
</p>
					<p class="newsfrom">来源：<?php echo $_smarty_tpl->tpl_vars['news']->value['from'];?>
</p>
				</div>
				<div class="general_page_left_center">
					<div class="news_min_info">
						<?php echo $_smarty_tpl->tpl_vars['news']->value['content'];?>

					</div>
				</div> 
			</div>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ('Comon/right.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('Comon/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>