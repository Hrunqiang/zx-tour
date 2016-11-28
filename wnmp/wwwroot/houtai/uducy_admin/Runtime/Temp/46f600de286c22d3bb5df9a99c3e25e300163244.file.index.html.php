<?php /* Smarty version Smarty-3.1.6, created on 2016-11-14 10:44:51
         compiled from "../uducy_admin/Tpl\Customer\index.html" */ ?>
<?php /*%%SmartyHeaderCode:29375582925232dc6e6-11940668%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46f600de286c22d3bb5df9a99c3e25e300163244' => 
    array (
      0 => '../uducy_admin/Tpl\\Customer\\index.html',
      1 => 1478503485,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29375582925232dc6e6-11940668',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ac' => 0,
    'Reques_uri' => 0,
    'cid' => 0,
    'table_cfg' => 0,
    'i' => 0,
    'k' => 0,
    'sk' => 0,
    'get' => 0,
    'si' => 0,
    'list' => 0,
    'li' => 0,
    'fk' => 0,
    'page' => 0,
    'id' => 0,
    'info' => 0,
    'flagk' => 0,
    'flagi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_582925236616c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582925236616c')) {function content_582925236616c($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\wnmp\\wwwroot\\houtai\\lib\\ThinkPHP\\Extend\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_escape')) include 'C:\\wnmp\\wwwroot\\houtai\\lib\\ThinkPHP\\Extend\\Vendor\\Smarty\\plugins\\modifier.escape.php';
?><?php echo $_smarty_tpl->getSubTemplate ('Login/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<style>
<!--
.searchtxt {
width: 50px;
}
.searchbtn {
width: 35px;
}
-->
</style>
<?php if ($_smarty_tpl->tpl_vars['ac']->value=='list'){?>
<div class="wrap">
    <div class="container">

        <div id="main">
            
            <div class="con">
                  <div class="table">
                     <div class="th">
                        <h1><a href="<?php echo $_smarty_tpl->tpl_vars['Reques_uri']->value;?>
&ac=add" style="color:red;">添加</a></h1>
                    </div>                  
                </div>

            	<form action="<?php echo $_smarty_tpl->tpl_vars['Reques_uri']->value;?>
&ac=del" method="post">
                    <input type="hidden" name="cid" value="<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
"/>
                  <div class="table">
                    <table class="admin-tb" id="js_data_source">
                    <tr>
                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['table_cfg']->value['field']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                    	<?php if ($_smarty_tpl->tpl_vars['i']->value['islist']==true){?>
                    	<th style="text-align:center;">
                    		<?php if ($_smarty_tpl->tpl_vars['i']->value['type']=="select"){?>
                    			<?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>

                    			<select name="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" class="tselect">
                    				<option value="">请选择</option>
                    				<?php  $_smarty_tpl->tpl_vars['si'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['si']->_loop = false;
 $_smarty_tpl->tpl_vars['sk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['i']->value['selectdata']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['si']->key => $_smarty_tpl->tpl_vars['si']->value){
$_smarty_tpl->tpl_vars['si']->_loop = true;
 $_smarty_tpl->tpl_vars['sk']->value = $_smarty_tpl->tpl_vars['si']->key;
?>
                    				<option value="<?php echo $_smarty_tpl->tpl_vars['sk']->value;?>
" <?php if (($_smarty_tpl->tpl_vars['get']->value[$_smarty_tpl->tpl_vars['k']->value]==$_smarty_tpl->tpl_vars['sk']->value&&$_smarty_tpl->tpl_vars['get']->value[$_smarty_tpl->tpl_vars['k']->value]!='')){?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['si']->value;?>
</option>
                    				<?php } ?>
                    			</select>
                    		<?php }elseif($_smarty_tpl->tpl_vars['i']->value['type']=="text"){?>
                    			<?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>

                    			<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" class="searchtxt" value="<?php echo $_smarty_tpl->tpl_vars['get']->value[$_smarty_tpl->tpl_vars['k']->value];?>
"/><input type="button" class="searchbtn" value="搜索"/>
                    		<?php }else{ ?>
                    			<?php if ($_smarty_tpl->tpl_vars['i']->value['ismain']===true){?><input type="checkbox" id="select_all"/> &nbsp;<?php }?><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>

                    		<?php }?>
                    	</th>
                    	<?php }?>
                    <?php } ?>
                    <th width="120">操作</th>
                        <!-- <th width="170">名称</th>            	
                        <th width="120">key</th>
                        <th width="80">操作</th>  -->                     
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['li'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['li']->_loop = false;
 $_smarty_tpl->tpl_vars['lk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['li']->key => $_smarty_tpl->tpl_vars['li']->value){
$_smarty_tpl->tpl_vars['li']->_loop = true;
 $_smarty_tpl->tpl_vars['lk']->value = $_smarty_tpl->tpl_vars['li']->key;
?>
                    <tr>
                    	<?php  $_smarty_tpl->tpl_vars['fi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['fi']->_loop = false;
 $_smarty_tpl->tpl_vars['fk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['li']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['fi']->key => $_smarty_tpl->tpl_vars['fi']->value){
$_smarty_tpl->tpl_vars['fi']->_loop = true;
 $_smarty_tpl->tpl_vars['fk']->value = $_smarty_tpl->tpl_vars['fi']->key;
?>
                    		<td style="text-align:center;">
                    		<?php if ($_smarty_tpl->tpl_vars['table_cfg']->value['field'][$_smarty_tpl->tpl_vars['fk']->value]['ismain']===true){?>
                    			<input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['li']->value[$_smarty_tpl->tpl_vars['fk']->value];?>
"/>
                    		<?php }?>
                    		<?php if ($_smarty_tpl->tpl_vars['table_cfg']->value['field'][$_smarty_tpl->tpl_vars['fk']->value]['type']=='textarea'){?>
                    		<textarea readonly rows="30" cols="50" style="text-align:left;"><?php echo $_smarty_tpl->tpl_vars['li']->value[$_smarty_tpl->tpl_vars['fk']->value];?>
</textarea>
                    		<?php }elseif($_smarty_tpl->tpl_vars['table_cfg']->value['field'][$_smarty_tpl->tpl_vars['fk']->value]['type']=='img'){?>
                    		<img src="<?php echo $_smarty_tpl->tpl_vars['li']->value[$_smarty_tpl->tpl_vars['fk']->value];?>
" width="50"/>
                    		<?php }elseif($_smarty_tpl->tpl_vars['table_cfg']->value['field'][$_smarty_tpl->tpl_vars['fk']->value]['type']=='flag'){?>
                    			<?php echo $_smarty_tpl->tpl_vars['table_cfg']->value['field'][$_smarty_tpl->tpl_vars['fk']->value]['flagdata'][$_smarty_tpl->tpl_vars['li']->value[$_smarty_tpl->tpl_vars['fk']->value]];?>

                    		<?php }elseif($_smarty_tpl->tpl_vars['table_cfg']->value['field'][$_smarty_tpl->tpl_vars['fk']->value]['type']=='time'){?>
                    			<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['li']->value[$_smarty_tpl->tpl_vars['fk']->value],"%Y-%m-%d %H:%M:%S");?>

                    		<?php }elseif($_smarty_tpl->tpl_vars['table_cfg']->value['field'][$_smarty_tpl->tpl_vars['fk']->value]['type']=='select'){?>
                    			<?php echo $_smarty_tpl->tpl_vars['table_cfg']->value['field'][$_smarty_tpl->tpl_vars['fk']->value]['selectdata'][$_smarty_tpl->tpl_vars['li']->value[$_smarty_tpl->tpl_vars['fk']->value]];?>

                    		<?php }else{ ?>
                    		<?php echo $_smarty_tpl->tpl_vars['li']->value[$_smarty_tpl->tpl_vars['fk']->value];?>

                    		<?php }?>
                    		</td>
                       <?php } ?>
                       <td>[<a href="<?php echo $_smarty_tpl->tpl_vars['Reques_uri']->value;?>
&a=enroll&id=<?php echo $_smarty_tpl->tpl_vars['li']->value['id'];?>
">报名</a>]&nbsp;&nbsp;[<a href="<?php echo $_smarty_tpl->tpl_vars['Reques_uri']->value;?>
&ac=edit&id=<?php echo $_smarty_tpl->tpl_vars['li']->value['id'];?>
">修改</a>]&nbsp;&nbsp;[<a href="<?php echo $_smarty_tpl->tpl_vars['Reques_uri']->value;?>
&ac=del&id=<?php echo $_smarty_tpl->tpl_vars['li']->value['id'];?>
" class="del_ctl">删除</a>]</td>
                    </tr>
                   <?php } ?>
                    </table>

                    <div class="th">
                        <?php if ($_smarty_tpl->tpl_vars['page']->value){?>
                        <div class="pages">
							<?php echo $_smarty_tpl->tpl_vars['page']->value;?>

                        </div>                
                        <?php }?>
                        
                    	<div class="form">
                    	<input type="button" onclick="$(this).parents('form').submit();" value=" 删 除 "/>
                    	<?php if ($_smarty_tpl->tpl_vars['table_cfg']->value['submitBtns']){?>
                    		<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['table_cfg']->value['submitBtns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                    			&nbsp;&nbsp;<input type="button" onclick="$(this).parents('form').attr('action','<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
').submit();" value=" <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 "/>
                    		<?php } ?>
                    	<?php }?>
                        <!-- <input type="submit" value=" 删 除 "/>&nbsp; -->
                        </div>
                    </div>
                </div>
				</form>
            </div><!--/ con-->
        </div>    
    </div><!--/ container-->
    </div><!--/ wrap-->
  <?php }elseif($_smarty_tpl->tpl_vars['ac']->value=='edit'){?>
  <style>
<!--
.table-font tbody{
	border:1px solid #9c9c9c;
	padding:15px;
}
-->
</style>
<div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con box-green">
                <form action="<?php echo $_smarty_tpl->tpl_vars['Reques_uri']->value;?>
&ac=<?php echo $_smarty_tpl->tpl_vars['ac']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post" >
                <div class="box-header">
                    <h4>修改</h4>
                </div>
                <div class="box-content">
                    <table class="table-font" id="main_table">
                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                    <?php if ($_smarty_tpl->tpl_vars['table_cfg']->value['field'][$_smarty_tpl->tpl_vars['k']->value]['title']){?>
                    	 <tr>
                            <th class="w120"><?php echo $_smarty_tpl->tpl_vars['table_cfg']->value['field'][$_smarty_tpl->tpl_vars['k']->value]['title'];?>
：</th>
                            <td>
                            <?php if ($_smarty_tpl->tpl_vars['table_cfg']->value['field'][$_smarty_tpl->tpl_vars['k']->value]['type']=='textarea'){?>
	                            <?php if ($_smarty_tpl->tpl_vars['table_cfg']->value['field'][$_smarty_tpl->tpl_vars['k']->value]['isabm']){?>
	                            	<textarea class="HTML_EDIT" name="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" style="width:700px;height:300px;"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['i']->value, "stripslashes");?>
</textarea>
	                            <?php }else{ ?>
	                            	<textarea name="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"  disabled  style="width:700px;height:300px;"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['i']->value, "stripslashes");?>
</textarea>
	                            <?php }?>
	                        <?php }elseif($_smarty_tpl->tpl_vars['table_cfg']->value['field'][$_smarty_tpl->tpl_vars['k']->value]['type']=='select'){?>
                            	<select name="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if (!$_smarty_tpl->tpl_vars['table_cfg']->value['field'][$_smarty_tpl->tpl_vars['k']->value]['isabm']){?> disabled <?php }?>>
                            		<?php  $_smarty_tpl->tpl_vars['si'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['si']->_loop = false;
 $_smarty_tpl->tpl_vars['sk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['table_cfg']->value['field'][$_smarty_tpl->tpl_vars['k']->value]['selectdata']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['si']->key => $_smarty_tpl->tpl_vars['si']->value){
$_smarty_tpl->tpl_vars['si']->_loop = true;
 $_smarty_tpl->tpl_vars['sk']->value = $_smarty_tpl->tpl_vars['si']->key;
?>
                            		<option value="<?php echo $_smarty_tpl->tpl_vars['sk']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['sk']->value){?>selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['si']->value;?>
</option>
                            		<?php } ?>
                            	</select>
                            <?php }else{ ?>
	                            <input type="text"  name="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"  value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" <?php if (!$_smarty_tpl->tpl_vars['table_cfg']->value['field'][$_smarty_tpl->tpl_vars['k']->value]['isabm']){?> disabled <?php }?> class="textinput w270" />
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['table_cfg']->value['field'][$_smarty_tpl->tpl_vars['k']->value]['type']=='flag'){?>
                            	<?php  $_smarty_tpl->tpl_vars['flagi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['flagi']->_loop = false;
 $_smarty_tpl->tpl_vars['flagk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['table_cfg']->value['field'][$_smarty_tpl->tpl_vars['k']->value]['flagdata']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['flagi']->key => $_smarty_tpl->tpl_vars['flagi']->value){
$_smarty_tpl->tpl_vars['flagi']->_loop = true;
 $_smarty_tpl->tpl_vars['flagk']->value = $_smarty_tpl->tpl_vars['flagi']->key;
?>
                            		|<?php echo $_smarty_tpl->tpl_vars['flagk']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['flagi']->value;?>

                            	<?php } ?>
                            <?php }?>
                            </td>
                        </tr>
                    <?php }?>
                    <?php } ?>
                    </table>
                </div>
                <div class="box-footer">
                    <div class="box-footer-inner">
                    	<input type="submit" value="提交" />或 <a href="javascript:void(0);" onclick="window.history.go(-1);">取消</a>
                    </div>
                </div>
                </form>
            </div><!--/ con-->
        </div>    
    </div><!--/ container-->

</div><!--/ wrap-->
  <?php }elseif($_smarty_tpl->tpl_vars['ac']->value=='add'){?>
   <style>
<!--
.table-font tbody{
	border:1px solid #9c9c9c;
	padding:15px;
}
-->
</style>
<div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con box-green">
                <form action="<?php echo $_smarty_tpl->tpl_vars['Reques_uri']->value;?>
&ac=<?php echo $_smarty_tpl->tpl_vars['ac']->value;?>
" method="post" enctype="multipart/form-data">

                <div class="box-header">
                    <h4>添加</h4>
                </div>
                <div class="box-content">
                    <table class="table-font" id="main_table">
                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['table_cfg']->value['field']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                    	<?php if ($_smarty_tpl->tpl_vars['i']->value['ismain']!==true){?>
                    	 <tr>
                            <th class="w120"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
：</th>
                            <td>
                            <?php if ($_smarty_tpl->tpl_vars['i']->value['type']=='textarea'){?>
	                            	<textarea class="HTML_EDIT" name="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" style="width:700px;height:300px;"></textarea>
                            <?php }elseif($_smarty_tpl->tpl_vars['i']->value['type']=='select'){?>
                            	<select name="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
">
                            		<option value="">选择</option>
                            		<?php  $_smarty_tpl->tpl_vars['si'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['si']->_loop = false;
 $_smarty_tpl->tpl_vars['sk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['i']->value['selectdata']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['si']->key => $_smarty_tpl->tpl_vars['si']->value){
$_smarty_tpl->tpl_vars['si']->_loop = true;
 $_smarty_tpl->tpl_vars['sk']->value = $_smarty_tpl->tpl_vars['si']->key;
?>
                            		<option value="<?php echo $_smarty_tpl->tpl_vars['sk']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['si']->value;?>
</option>
                            		<?php } ?>
                            	</select>
                            <?php }else{ ?>
	                            <input type="text"  name="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"  value="" class="textinput w270" />
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['i']->value['type']=='flag'){?>
                            	<?php  $_smarty_tpl->tpl_vars['flagi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['flagi']->_loop = false;
 $_smarty_tpl->tpl_vars['flagk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['i']->value['flagdata']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['flagi']->key => $_smarty_tpl->tpl_vars['flagi']->value){
$_smarty_tpl->tpl_vars['flagi']->_loop = true;
 $_smarty_tpl->tpl_vars['flagk']->value = $_smarty_tpl->tpl_vars['flagi']->key;
?>
                            		|<?php echo $_smarty_tpl->tpl_vars['flagk']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['flagi']->value;?>

                            	<?php } ?>
                            <?php }?>
                            </td>
                        </tr>
                        <?php }?>
                    <?php } ?>
                    </table>
                </div>
                <div class="box-footer">
                    <div class="box-footer-inner">
                    	<input type="submit" value="提交" />或 <a href="javascript:void(0);" onclick="window.history.go(-1);">取消</a> 
                    </div>
                </div>
                </form>
            </div><!--/ con-->
            <script>
           
            </script>
        </div>    
    </div><!--/ container-->

</div><!--/ wrap-->
  <?php }?>
  <script>
  function change_url(obj){
	  var v	= $(obj).val();
	  var n	= $(obj).attr('name');
	  var requestUrl	= '<?php echo $_smarty_tpl->tpl_vars['Reques_uri']->value;?>
';
	  var reg	= new RegExp("(\\?|&)?"+n+"=[^&]{0,}");
	  requestUrl	= requestUrl.replace(reg,'');
	  requestUrl	= requestUrl+'&'+n+"="+v+"&ac=list";
	  window.location=requestUrl;
  }
  $('#select_all').click(function(){
	  var able	= $(this).attr('checked');
	  if(able){
		  $(this).parents('form').find('input[type=checkbox]').attr('checked',true);
	  }else{
		  $(this).parents('form').find('input[type=checkbox]').attr('checked',false);
	  }
  });
  $('.tselect').change(function(){
	  change_url(this);
  });
  $('.searchbtn').click(function(){
	  var that	= $(this).prev('input');
	  change_url(that);
  });
  $('.del_ctl').click(function(){
	  return confirm('删除无法恢复,确定删除?');
  });
  </script>
<script charset="utf-8" src="./static/editer/kindeditor-min.js"></script>
<script charset="utf-8" src="./static/editer/lang/zh_CN.js"></script>
<script>
var KK=null;
	KindEditor.ready(function(K) {
		KK=K;
        window.editor = KK.create('.HTML_EDIT');
	});
</script>
<?php echo $_smarty_tpl->getSubTemplate ('Login/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>