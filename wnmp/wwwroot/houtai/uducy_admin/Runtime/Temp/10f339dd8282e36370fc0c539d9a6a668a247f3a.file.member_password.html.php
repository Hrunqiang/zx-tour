<?php /* Smarty version Smarty-3.1.6, created on 2016-11-22 10:20:24
         compiled from "../uducy_admin/Tpl\Member\member_password.html" */ ?>
<?php /*%%SmartyHeaderCode:250585833ab68df1c56-05786965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10f339dd8282e36370fc0c539d9a6a668a247f3a' => 
    array (
      0 => '../uducy_admin/Tpl\\Member\\member_password.html',
      1 => 1478503486,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '250585833ab68df1c56-05786965',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sys' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5833ab68e850d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5833ab68e850d')) {function content_5833ab68e850d($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Login/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>




<div class="wrap">
    <div class="container">
        
        <div id="main"><!--/ con--><!--/ con-->
            
            <div class="con box-green">
                <form action="<?php echo $_smarty_tpl->tpl_vars['sys']->value['subform'];?>
" method="post" enctype="multipart/form-data">         
                <div class="box-header">
                    <h4>修改密码</h4>
                </div>
                <div class="box-content">
                    <table class="table-font">

<?php if (@USERNAME==$_REQUEST['name']){?>
<tr>
    <th class="w120">原始密码：</th>
    <td><input name="oldpassword" type="password" class="textinput w270" id="oldpassword" /></td>
</tr>
<?php }?>

                        <tr>
                            <th class="w120">新密码：</th>
                            <td><input name="password" type="password" class="textinput w270" id="password" /></td>
                        </tr>
                        <tr>
                            <th>确定新密码：</th>
                            <td><input name="repassword" type="password" class="textinput w270" id="repassword" /></td>
                        </tr>
                    </table>
                </div>
                <div class="box-footer">
                  <div class="box-footer-inner">
                   	  <input type="submit" value="保存更改" /> 或 <a href="<?php echo $_smarty_tpl->tpl_vars['sys']->value['goback'];?>
">取消</a>
                      <input name="step" type="hidden" id="step" value="2">
                    <input name="name" type="hidden" id="name" value="<?php echo $_REQUEST['name'];?>
">
                    </div>
                </div>
                </form>
          </div><!--/ con-->
            
      </div>    
    </div><!--/ container-->

<?php echo $_smarty_tpl->getSubTemplate ('Login/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>