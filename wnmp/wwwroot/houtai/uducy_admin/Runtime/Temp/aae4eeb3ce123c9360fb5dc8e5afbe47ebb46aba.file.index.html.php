<?php /* Smarty version Smarty-3.1.6, created on 2016-11-14 11:01:13
         compiled from "../uducy_admin/Tpl\Platform\index.html" */ ?>
<?php /*%%SmartyHeaderCode:4057582928f96b5d46-49701951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aae4eeb3ce123c9360fb5dc8e5afbe47ebb46aba' => 
    array (
      0 => '../uducy_admin/Tpl\\Platform\\index.html',
      1 => 1478503485,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4057582928f96b5d46-49701951',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Reques_uri' => 0,
    'cid' => 0,
    'table_cfg' => 0,
    'i' => 0,
    'k' => 0,
    'sk' => 0,
    'get' => 0,
    'si' => 0,
    'list' => 0,
    'cfgi' => 0,
    'li' => 0,
    'cfgk' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_582928f98e136',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582928f98e136')) {function content_582928f98e136($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\wnmp\\wwwroot\\houtai\\lib\\ThinkPHP\\Extend\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ('Login/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<style>
.searchtxt{width:50px;}
.searchbtn{width:35px;}
</style>
<div class="wrap">
    <div class="container">
        <div id="main">    
            <div class="con">
                  <div class="table">
                    <div class="th">
                        <h1><a href="?s=Platform&a=add">添加平台</a></h1>
                    </div>               
                    <form action="<?php echo $_smarty_tpl->tpl_vars['Reques_uri']->value;?>
&ac=del" method="post">
                    <input type="hidden" name="cid" value="<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
"/>
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
                        <th style="<?php if ($_smarty_tpl->tpl_vars['k']->value=='dicttok'){?>display:none;<?php }?>">
                            <?php if ($_smarty_tpl->tpl_vars['i']->value['ismain']===true){?><input type="checkbox" id="select_all"/> &nbsp;<?php }?>
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
                            <?php }elseif($_smarty_tpl->tpl_vars['i']->value['type']=="textarea"){?>
                                <?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>

                                <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" class="searchtxt" value="<?php echo $_smarty_tpl->tpl_vars['get']->value[$_smarty_tpl->tpl_vars['k']->value];?>
"/><input type="button" class="searchbtn" value="搜索"/>
                            <?php }else{ ?>
                                <?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>

                            <?php }?>
                        </th>
                        <?php }?>
                    <?php } ?>
                    <th>操作</th>
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
                            <?php  $_smarty_tpl->tpl_vars['cfgi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cfgi']->_loop = false;
 $_smarty_tpl->tpl_vars['cfgk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['table_cfg']->value['field']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cfgi']->key => $_smarty_tpl->tpl_vars['cfgi']->value){
$_smarty_tpl->tpl_vars['cfgi']->_loop = true;
 $_smarty_tpl->tpl_vars['cfgk']->value = $_smarty_tpl->tpl_vars['cfgi']->key;
?>
                                <td style="text-align:left;">
                                <?php if ($_smarty_tpl->tpl_vars['cfgi']->value['ismain']){?>
                                    <input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['li']->value['id'];?>
"/>
                                <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['cfgi']->value['type']=='textarea'){?>
                                        <textarea readonly rows="30" cols="50" style="text-align:left;"><?php echo $_smarty_tpl->tpl_vars['li']->value[$_smarty_tpl->tpl_vars['cfgk']->value];?>
</textarea>
                                    <?php }elseif($_smarty_tpl->tpl_vars['cfgi']->value['type']=='img'){?>
                                        <img src="<?php echo add_host($_smarty_tpl->tpl_vars['li']->value[$_smarty_tpl->tpl_vars['cfgk']->value]);?>
" width="50"/>
                                    <?php }elseif($_smarty_tpl->tpl_vars['cfgi']->value['type']=='flag'){?>
                                        <?php echo $_smarty_tpl->tpl_vars['cfgi']->value['flagdata'][$_smarty_tpl->tpl_vars['li']->value[$_smarty_tpl->tpl_vars['cfgk']->value]];?>

                                    <?php }elseif($_smarty_tpl->tpl_vars['cfgi']->value['type']=='time'){?>
                                        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['li']->value[$_smarty_tpl->tpl_vars['cfgk']->value],"%Y-%m-%d %H:%M:%S");?>

                                    <?php }elseif($_smarty_tpl->tpl_vars['cfgi']->value['type']=='select'){?>
                                        <?php echo $_smarty_tpl->tpl_vars['cfgi']->value['selectdata'][$_smarty_tpl->tpl_vars['li']->value[$_smarty_tpl->tpl_vars['cfgk']->value]];?>

                                    <?php }else{ ?>
                                        <?php if ($_smarty_tpl->tpl_vars['cfgi']->value['title']=="地址"){?>
                                            <a href="http://weixin.zx-tour.com/?match=<?php echo $_smarty_tpl->tpl_vars['li']->value[$_smarty_tpl->tpl_vars['cfgk']->value];?>
" target="_bank">http://weixin.zx-tour.com/?match=<?php echo $_smarty_tpl->tpl_vars['li']->value[$_smarty_tpl->tpl_vars['cfgk']->value];?>
</a>
                                        <?php }elseif($_smarty_tpl->tpl_vars['cfgi']->value['title']=="状态"){?>
                                            <?php if ($_smarty_tpl->tpl_vars['li']->value[$_smarty_tpl->tpl_vars['cfgk']->value]==1){?>已删除<?php }else{ ?>使用中<?php }?>
                                        <?php }else{ ?>
                                            <?php echo $_smarty_tpl->tpl_vars['li']->value[$_smarty_tpl->tpl_vars['cfgk']->value];?>

                                        <?php }?>
                                    <?php }?>
                                </td>
                            <?php } ?>
                       <td>[<a href="?s=Platform&a=reset_pwd&id=<?php echo $_smarty_tpl->tpl_vars['li']->value['id'];?>
">修改密码</a>]</td>
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
                </div>
            </div><!--/ con-->
        </div>    
    </div><!--/ container-->
    </div><!--/ wrap-->
  <script>
  function change_url(obj){
      var v = $(obj).val();
      var n = $(obj).attr('name');
      var requestUrl    = '<?php echo $_smarty_tpl->tpl_vars['Reques_uri']->value;?>
';
      var reg   = new RegExp("(\\?|&)?"+n+"=[^&]{0,}");
      requestUrl    = requestUrl.replace(reg,'');
      requestUrl    = requestUrl+'&'+n+"="+v+"&ac=list";
      window.location=requestUrl;
  }
  $('#select_all').click(function(){
      var able  = $(this).attr('checked');
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
      var that  = $(this).prev('input');
      change_url(that);
  });
  $('.del_ctl').click(function(){
      return confirm('确定修改?');
  });
  </script>
<?php echo $_smarty_tpl->getSubTemplate ('Login/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>