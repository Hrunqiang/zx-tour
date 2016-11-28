<?php /* Smarty version Smarty-3.1.6, created on 2016-11-07 16:43:48
         compiled from "../uducy_admin/Tpl\Member\member_list.html" */ ?>
<?php /*%%SmartyHeaderCode:265658203ec49c7fb0-29556380%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6f9e7efafc414568be66b22a411867b683efff8' => 
    array (
      0 => '../uducy_admin/Tpl\\Member\\member_list.html',
      1 => 1478503486,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '265658203ec49c7fb0-29556380',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sys' => 0,
    'data' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58203ec4ac288',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58203ec4ac288')) {function content_58203ec4ac288($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\wnmp\\wwwroot\\houtai\\lib\\ThinkPHP\\Extend\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ('Login/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<script type="text/javascript">
	var list;
	$(document).ready(function(){
		list = $("#tb1").find("input[type='checkbox']").not("[rel]");
		list.each(function(i){
			$(this).bind("click",function(){
				CheckHanler();
			});
		});
	});
	
	var CheckHanler = function(){
		list.each(function(i){
			var input = $(this);
			if(this.checked){
				input.parent().parent().addClass("checked");
			}
			else{
				input.parent().parent().removeClass("checked");
			}
		});
	}
	
	var checkTb1 = function(selectType){
		CheckInit("tb1",selectType);
	}
	
	var CheckInit = function(tabelId,selectType){
		if(list == undefined){
			list = $("#" + tabelId).find("input[type='checkbox']").not("[rel]");
		}
		CheckControl(list,selectType,CheckHanler)
	}
	
	var CheckControl = function(childs,selectType,checkHandler){
		for(var i = 0,len = childs.length; i < len; i++){
			switch(selectType){
				case 1:	//全选
					childs[i].checked = true;
					break;
				case 2:	//不选
					childs[i].checked = false;
					break;
				case 3:	//反选
					childs[i].checked = !childs[i].checked;
					break;
			}
		}
		if(checkHandler){
			checkHandler();
		}
	}
</script>


    <div class="container">

        <div id="main">
            
            <div class="con ">
            	<form action="<?php echo $_smarty_tpl->tpl_vars['sys']->value['formurl'];?>
" method="post">
                  <div class="table">
                  	<div class="th">
                    	<div class="form">
                    	  <input type="button" value="添加新管理员" onClick="location.href='./?s=member&a=member_add'" />&nbsp;</div>
                    </div>
                    <table class="admin-tb" id="tb1">
                    <tr>
                    	<th width="41" class="text-center"><input type="checkbox" rel="control" onClick="this.checked?checkTb1(1):checkTb1(2);" /></th>
                    	<th width="97">用户名</th>
                        <th width="448">等级</th>
                        <th width="324">最后登录时间</th>
                        <th width="261">最后登录IP</th>
                        <th width="225">操作</th>
                        
                    </tr>
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <tr>  <!-- <tr class="checked">默认选中 -->
                    <td class="text-center">
                    <?php if ('1'!=$_smarty_tpl->tpl_vars['v']->value['is_admin']){?>
                    <input name="id[]" type="checkbox" id="id[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['user_name'];?>
"  />
                    <?php }?>
                    </td>
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_name'];?>
&nbsp;</td>
                    <td><?php if ($_smarty_tpl->tpl_vars['v']->value['is_admin']==1){?>超级管理员<?php }else{ ?>管理员<?php }?></td>
                    <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['last_login'],"%Y-%m-%d %H:%M:%S");?>
&nbsp;</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['v']->value['lastip'];?>
&nbsp;</td>
                    <td>
                    <?php if ('1'!=$_smarty_tpl->tpl_vars['v']->value['is_admin']){?>
                    <a href="./?s=Member&a=member_edit&name=<?php echo $_smarty_tpl->tpl_vars['v']->value['user_name'];?>
">权限</a>
                    <?php }?>
                                        <?php if ('1'!=$_smarty_tpl->tpl_vars['v']->value['is_admin']){?>
                    <a href="./?s=Member&a=member_password&name=<?php echo $_smarty_tpl->tpl_vars['v']->value['user_name'];?>
">密码</a>
                    <?php }?>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php if ('1'!=$_smarty_tpl->tpl_vars['v']->value['is_admin']){?>
                    <a href="./?s=Member&a=member_delete&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['user_name'];?>
">删除</a>
                    <?php }?>
                    </td>
                    </tr>
<?php } ?>
                    
                    <tr class="foot-ctrl">
                    <td colspan="6" class="gray">选择: <a href="#" onClick="checkTb1(1);">全选</a> - <a href="#" onClick="checkTb1(3);">反选</a> - <a href="#" onClick="checkTb1(2);">无</a></td>
                    </tr>

                    
                    </table>

                    <div class="th"><!--/ pages-->
                            
                            
                    	<div class="form">
                        <input name="提交" type="submit" value="删 除" />
                    	</div>
                    </div>
                </div>

				</form>
            </div><!--/ con-->
            
            
            
            
            
        </div>    
    </div><!--/ container-->


<?php echo $_smarty_tpl->getSubTemplate ('Login/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>