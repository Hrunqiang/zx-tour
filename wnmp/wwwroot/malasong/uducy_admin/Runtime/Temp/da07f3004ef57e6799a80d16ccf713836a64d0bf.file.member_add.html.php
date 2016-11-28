<?php /* Smarty version Smarty-3.1.6, created on 2015-11-10 11:05:18
         compiled from "../uducy_admin/Tpl\Member\member_add.html" */ ?>
<?php /*%%SmartyHeaderCode:963356415eeea989a8-99768728%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da07f3004ef57e6799a80d16ccf713836a64d0bf' => 
    array (
      0 => '../uducy_admin/Tpl\\Member\\member_add.html',
      1 => 1444821716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '963356415eeea989a8-99768728',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sys' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56415eeebe13e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56415eeebe13e')) {function content_56415eeebe13e($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Login/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<body id="main_page">
<div class="wrap">
    <div class="container">
        
        <div id="main">
            
            
            <div class="con box-green">
                <form action="<?php echo $_smarty_tpl->tpl_vars['sys']->value['subform'];?>
" method="post" enctype="multipart/form-data">                
                <div class="box-header">
                    <h4>添加新用户</h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <th class="w120">用户名：</th>
                            <td><input name="user_name" type="text" class="textinput w270" id="name" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['user_name'];?>
" /></td>
                        </tr>
                        <tr>
                            <th>确定新密码：</th>
                            <td><input name="password" type="password" class="textinput w270" id="password" /></td>
                        </tr>
                        <tr>
                            <th>手机号码：</th>
                            <td><input name="phone" type="text" class="textinput w270" id="phone" /></td>
                        </tr>
                        <tr>
                            <th>手机运营商：</th>
                            <td><select name="phonetype" type="text" class="textinput w270" id="phonetype">
                                <option value='13'>移动</option>
                                <option value='11'>联通</option>
                                <option value='14'>电信</option>
                            </select></td>
                        </tr>
                    </table>
                </div>
                <div class="box-footer">
                    <div class="box-footer-inner">
                    	<input type="submit" value="添加" /> 或 <a href="<?php echo $_smarty_tpl->tpl_vars['sys']->value['goback'];?>
">取消</a>
                      <input name="step" type="hidden" id="step" value="2">
                    </div>
                </div>
                </form>
            </div><!--/ con-->            
        </div>    
    </div><!--/ container-->
</div>
<?php echo $_smarty_tpl->getSubTemplate ('Login/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>