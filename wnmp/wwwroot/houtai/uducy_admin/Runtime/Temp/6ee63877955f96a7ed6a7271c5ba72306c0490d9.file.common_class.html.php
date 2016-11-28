<?php /* Smarty version Smarty-3.1.6, created on 2016-11-14 10:48:03
         compiled from "../uducy_admin/Tpl\Classes\common_class.html" */ ?>
<?php /*%%SmartyHeaderCode:870582925e321fdb4-17791949%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ee63877955f96a7ed6a7271c5ba72306c0490d9' => 
    array (
      0 => '../uducy_admin/Tpl\\Classes\\common_class.html',
      1 => 1478503485,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '870582925e321fdb4-17791949',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ac' => 0,
    'sname' => 0,
    'now' => 0,
    'id' => 0,
    'select' => 0,
    'pid' => 0,
    'data' => 0,
    'fields' => 0,
    'i' => 0,
    'html' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_582925e333476',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582925e333476')) {function content_582925e333476($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Login/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['ac']->value=='add'||$_smarty_tpl->tpl_vars['ac']->value=='edit'){?>
<div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con box-green">
                <form action="./?s=Classes&a=<?php echo $_smarty_tpl->tpl_vars['ac']->value;?>
&sname=<?php echo $_smarty_tpl->tpl_vars['sname']->value;?>
" method='post'>
                <input type="hidden" name="ctime" value="<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
"/>
                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>
                <div class="box-header">
                    <h4>添加分类</h4>
                </div>
                <div class="box-content">
                    <table class="table-font" >
                        <tr>
                            <th class="w120">父类：</th>
                            <td>
                            <select name="pid" id="pid">
				            <option value="0">-----顶级分类-----</option>
				            <?php echo $_smarty_tpl->tpl_vars['select']->value;?>

				         	</select>
	                            <!-- <input type="text" name="pid" value="<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
"/> -->
                            </td>
                        </tr>
                        <tr>
                            <th class="w120">分类名称：</th>
                            <td>
	                            <input type="text"  name="classname" class="textinput w270" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['classname'], ENT_QUOTES, 'UTF-8', true);?>
" />
                            </td>
                        </tr>
                        <tr>
                            <th class="w120">分类简称：</th>
                            <td><input type="text" name="short_name" class="textinput w270" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['short_name'], ENT_QUOTES, 'UTF-8', true);?>
" /></td>
                        </tr>
                        <tr>
                            <th>分类排序：</th>
                            <td><input name="orderid" type="text" id="orderid" class="textinput" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['orderid'], ENT_QUOTES, 'UTF-8', true);?>
"  onkeyup="value=value.replace(/[^\d]/g,'') "/></td>
                        </tr>
                        <tr>
                            <th>分类字段：</th>
                            <td style="width:370px;">
                            	<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['fields']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['n']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['n']['index']++;
?>
	                            	<label for="f<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['n']['index'];?>
" style='float:left;width:85px;'>
	                            		<input id="f<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['n']['index'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['i']->value,$_smarty_tpl->tpl_vars['data']->value['fields'])||$_smarty_tpl->tpl_vars['ac']->value=='add'){?>checked<?php }?> name="fields[]" type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" /><?php echo $_smarty_tpl->tpl_vars['i']->value;?>

	                            	</label>&nbsp;
                            	<?php } ?>
                            </td>
                        </tr>
                        <tr>
                        	<th>分类属性</th>
                        	<td><textarea name="attr" style="width:370px; float:left; height:200px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['attr'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
							</td>
                        </tr>
                        <tr>
                        	<th>分类描述</th>
                        	<td><textarea name="describe" style="width:370px; height:200px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['describe'], ENT_QUOTES, 'UTF-8', true);?>
</textarea></td>
                        </tr>
                    </table>
                </div>
                
                <div class="box-footer">
                    <div class="box-footer-inner">
                    	<input type="submit" value="确定" /> 或 <a href="?s=classes">取消</a>
                    </div>
                </div>
                </form>
            </div><!--/ con-->
            
        </div>    
    </div><!--/ container-->

</div>
<?php }elseif($_smarty_tpl->tpl_vars['ac']->value=='list'){?>
<div class="wrap">
    <div class="container">

        <div id="main">
            
            <div class="con">	
                  <div class="table">
                  	<div class="th">
                    	<div class="form">
                        <div class="fl">
                           <input type="button" onclick="window.location='./?s=Classes&a=add'" value="添加一级分类" />
                              &nbsp;&nbsp;&nbsp;&nbsp;
                           <!--  <input type="button" onclick="window.location='./?s=Classes&a=version'" value="版本控制" /> -->
                             &nbsp;&nbsp;&nbsp;&nbsp;
                       <!--   <input type="button" onclick="window.location='./?s=Classes&a=feedback'" value="用户反馈" /> -->
<!--                             &nbsp;&nbsp;&nbsp;&nbsp;
                         <input type="button" onclick="window.location='./?s=Classes&a=push'" value="用户push" />
                            &nbsp;&nbsp;&nbsp;&nbsp; -->
                        </div>
                       
                        </div>
                    </div>
                    <form action='#' method='post'>
                    <table class="admin-tb" id="datatable">
                    <thead>
                        <tr>
                            <th>分类名称</th>
                            <th>分类简称</th>
                            <th >分类排序</th>
                            <th width="161">操作</th>
                        </tr>
					</thead>
					<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

					<!-- <tbody id="class_item">
						<tr  childindex="1">
	                    <td>分类名称</td>   
	                    <td>分类简称</td>
	                    <td rel="classname">分类排序</td>
	                    <td>
	                        [<a href="">修改</a>] &nbsp; [<a href="">添加下级分类</a>] &nbsp; [<a href="">删除</a>]
	                    </td>
	                    </tr>
					</tbody> -->
                    
                    
                    </table>
                    <div class="th">
                    	<div class="form">
                        <input type='hidden' name='commit' value='1' />
                       <!--  <input type='radio' name='action' value='del' checked />删除
                        <input type="submit" value="保存" />&nbsp;
                        &nbsp; -->
                        </div>
                    </div>
                    </form>
                </div>
            </div><!--/ con-->            
        </div>    
    </div><!--/ container-->
</div>
<script>//get_common_class_list();</script>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('Login/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>