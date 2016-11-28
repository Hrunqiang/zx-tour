<?php /* Smarty version Smarty-3.1.6, created on 2016-11-14 11:11:44
         compiled from "../uducy_admin/Tpl\Recommend\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1893358292b70c5ae52-49467977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48528e2f6d200d2c10b2cb53f9321a377bd7881a' => 
    array (
      0 => '../uducy_admin/Tpl\\Recommend\\index.html',
      1 => 1478503486,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1893358292b70c5ae52-49467977',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ac' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58292b70cecc4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58292b70cecc4')) {function content_58292b70cecc4($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Login/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<style>
.fl{float: left;}
#headerbox{overflow: hidden;width: 600px;margin: 0 auto;}
#headerbox li{height: 30px;font-size: 20px;width: 200px;text-align: center;}
#headerbox li a:hover{color:#000;text-decoration: none;}
#headerbox li.curr{border-bottom:5px solid #4e9ad4; }
#contentbox{width: 900px;border: 1px solid #000;margin: 0 auto;}
</style>
<div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con box-green">
				<div id="headerbox">
					<ul>
						<li class="fl <?php if ($_smarty_tpl->tpl_vars['ac']->value=='banner'){?>curr<?php }?>"><a href="?s=Recommend&ac=banner">焦点图</a></li>
					</ul>
					<ul>
						<li class="fl <?php if ($_smarty_tpl->tpl_vars['ac']->value=='recommend'){?>curr<?php }?>"><a href="?s=Recommend&ac=recommend">推荐池</a></li>
					</ul>
					<ul>
						<li class="fl <?php if ($_smarty_tpl->tpl_vars['ac']->value=='hotwd'){?>curr<?php }?>"><a href="?s=Recommend&ac=hotwd">搜索关键词</a></li>
					</ul>
				</div>
				<div id="contentbox">
				<?php if ($_smarty_tpl->tpl_vars['ac']->value=="banner"){?>
				<?php echo $_smarty_tpl->getSubTemplate ('Recommend/banner.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<?php }elseif($_smarty_tpl->tpl_vars['ac']->value=="recommend"){?>
				<?php echo $_smarty_tpl->getSubTemplate ('Recommend/recommend.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<?php }elseif($_smarty_tpl->tpl_vars['ac']->value=="hotwd"){?>
				<?php echo $_smarty_tpl->getSubTemplate ('Recommend/hotwd.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<?php }?>
				</div>
            </div><!--/ con-->   
        </div>    
    </div><!--/ container-->
</div>
<script>
$(".del_banner").live("click",function(){
    $(this).parent().remove();
});
$("#add_mtypes").live("click",function(){
    var html = '<p><input type="text" name="m_Mtypes[]" /><span class="del_banner">—</span></p>';
    $(this).before(html);
});
$("#release_btn").click(function(){
    $("input[name=m_state]").val(0);
    $("#matchinfo_form").submit();
});
$("#save_btn").click(function(){
    $("input[name=m_state]").val(1);
    $("#matchinfo_form").submit();
});
</script>
<?php echo $_smarty_tpl->getSubTemplate ('Login/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>