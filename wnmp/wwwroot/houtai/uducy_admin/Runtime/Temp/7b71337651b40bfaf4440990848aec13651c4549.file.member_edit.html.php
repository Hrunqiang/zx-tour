<?php /* Smarty version Smarty-3.1.6, created on 2016-11-22 10:20:41
         compiled from "../uducy_admin/Tpl\Member\member_edit.html" */ ?>
<?php /*%%SmartyHeaderCode:242515833ab79773c26-90795832%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b71337651b40bfaf4440990848aec13651c4549' => 
    array (
      0 => '../uducy_admin/Tpl\\Member\\member_edit.html',
      1 => 1478503486,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '242515833ab79773c26-90795832',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sys' => 0,
    'data' => 0,
    'menu' => 0,
    'k' => 0,
    'i' => 0,
    'kk' => 0,
    'ii' => 0,
    'iii' => 0,
    'auth' => 0,
    'kkk' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5833ab7989545',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5833ab7989545')) {function content_5833ab7989545($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Login/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<style>
	.table-font ul{float:left;width:150px;padding-right:50px;}
	.table-font ul h4{font-size:20px;}
	.table-font ul div{padding-left:15px;height:25px;} 
	.table-font .title{font-weight: bold;}
</style>
<body id="main_page">

<div class="wrap">
    <div class="container">
        
        <div id="main">
            
            
            <div class="con box-green">
                <form action="<?php echo $_smarty_tpl->tpl_vars['sys']->value['subform'];?>
" method="post" enctype="multipart/form-data">
<div class="box-header">
                    <h4>修改用户权限: <?php echo $_smarty_tpl->tpl_vars['data']->value['user_name'];?>
</h4>
                </div>
                <style type="text/css" >
                	.table-font td { width:100px;}
                </style>
                <div class="box-header">
                   
                        <table class="table-font" style="width:1000px; margin-left:5px;">
                            <tr>
                            <td>
                            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['n']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['n']['index']++;
?>
                              <ul>
                              	<li>
                           	  		 <h4><input type="checkbox" id="checkbox_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['n']['index'];?>
" rel="<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['n']['index'];?>
" onClick="checkSameRel(this);" /> <label for="checkbox_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['n']['index'];?>
"><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</label></h4>
                           	  	</li>
                           	  	<li>
                           	  		<?php  $_smarty_tpl->tpl_vars['ii'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ii']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['i']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ii']->key => $_smarty_tpl->tpl_vars['ii']->value){
$_smarty_tpl->tpl_vars['ii']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['ii']->key;
?>
                           	  		<div class="title"><?php echo $_smarty_tpl->tpl_vars['kk']->value;?>
</div>
                           	  			<?php  $_smarty_tpl->tpl_vars['iii'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['iii']->_loop = false;
 $_smarty_tpl->tpl_vars['kkk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ii']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['nnn']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['iii']->key => $_smarty_tpl->tpl_vars['iii']->value){
$_smarty_tpl->tpl_vars['iii']->_loop = true;
 $_smarty_tpl->tpl_vars['kkk']->value = $_smarty_tpl->tpl_vars['iii']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['nnn']['index']++;
?>
                           	  				<div class="items"><label><input rel="<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['n']['index'];?>
" name="auth[]" type="checkbox" id="checkbox_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['nnn']['index'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['iii']->value['right'];?>
" <?php if ($_smarty_tpl->tpl_vars['auth']->value[$_smarty_tpl->tpl_vars['iii']->value['right']]){?> checked <?php }?> /><?php echo $_smarty_tpl->tpl_vars['kkk']->value;?>
</label></div>
                           	  			<?php } ?>
                           	  		<?php } ?>
                           	  	</li>
                           	  </ul>
                            <?php } ?>
                            <div style="clear: both;"></div>
                            </td>
                           	  <!-- <td><input type="checkbox" id="checkbox_0" rel="0" onClick="checkSameRel(this);" /> <label for="checkbox_0">管理首页</label></td>
                                <td><input type="checkbox" id="checkbox_1" rel="1" onClick="checkSameRel(this);" /> <label for="checkbox_1">新闻/评测/攻略</label></td>
                                <td><input type="checkbox" id="checkbox_2" rel="2" onClick="checkSameRel(this);" /> <label for="checkbox_2">乐疯管理</label></td>
                                <td><input type="checkbox" id="checkbox_3" rel="3" onClick="checkSameRel(this);" /> <label for="checkbox_3">动漫管理</label></td>
                                <td><input type="checkbox" id="checkbox_4" rel="4" onClick="checkSameRel(this);" /> <label for="checkbox_4">系统管理</label></td> -->
                            </tr>
                        </table>
                </div>
                <script type="text/javascript">
                	var checkSameRel = function(ele){
						$(".table-font").find("input[rel='"+$(ele).attr("rel")+"']").each(function(i){
							this.checked = ele.checked;
						});
					}
                </script>
                <!-- <div class="box-content" style="display: none;">
                    <table class="table-font" style="width:1000px;" id="js_item_table">
                        <tr>
	                        <td><label><input rel="0" name="auth[]" type="checkbox" id="checkbox_0" value="Upload_index" <?php if ($_smarty_tpl->tpl_vars['auth']->value['Upload_index']){?> checked <?php }?> />公共上传</label></td>
	                        <td><label><input rel="1" name="auth[]" type="checkbox" id="checkbox_1" value="GameNews_index" <?php if ($_smarty_tpl->tpl_vars['auth']->value['GameNews_index']){?> checked <?php }?> />内容管理</label></td>
	                        <td><label><input rel="2" name="auth[]" type="checkbox" id="checkbox_2" value="SinaContent_index" <?php if ($_smarty_tpl->tpl_vars['auth']->value['SinaContent_index']){?> checked <?php }?> />图文管理</label></td>
	                        <td><label><input rel="3" name="auth[]" type="checkbox" id="checkbox_3" value="MeinvContent_index" <?php if ($_smarty_tpl->tpl_vars['auth']->value['MeinvContent_index']){?> checked <?php }?> />视频管理</label></td>
                            <td><input rel="4" name="auth[]" type="checkbox" id="checkbox_4" value="Member_index" <?php if ($_smarty_tpl->tpl_vars['auth']->value['Member_index']){?> checked <?php }?> />系统管理</td>
                        </tr>
                        <tr>
                        		<td>
                        		<input name="auth[]" type="hidden" value="message_index" />
                        		<input name="auth[]" type="hidden" value="index_menu" />
                        		<input name="auth[]" type="hidden" value="index_header" />
                        		<input name="auth[]" type="hidden" value="index_welcome" />
                        		<input name="auth[]" type="hidden" value="index_index" />
                        		</td>
                        	<td></td>
                        	<td><label><input rel="2" name="auth[]" type="checkbox" id="checkbox_2" value="CartoonContent_index" <?php if ($_smarty_tpl->tpl_vars['auth']->value['CartoonContent_index']){?> checked <?php }?> />视频管理</label></td>
                        	<td></td>
                        	<td></td>
                        </tr>
                    </table>
                </div> -->
                <div class="box-footer">
                    <div class="box-footer-inner">
                    	<input type="submit" value="确定" /> 或 <a href="<?php echo $_smarty_tpl->tpl_vars['sys']->value['goback'];?>
">取消</a>
                      <input name="step" type="hidden" id="step" value="2">
                      <input name="name" type="hidden" id="name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_name'];?>
">
                    </div>
                </div>
                </form>
            </div><!--/ con-->
            
            
            
        </div>    
    </div><!--/ container-->

</div>
<?php echo $_smarty_tpl->getSubTemplate ('Login/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>