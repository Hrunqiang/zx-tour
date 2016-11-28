<?php /* Smarty version Smarty-3.1.6, created on 2016-02-16 00:49:55
         compiled from "../uducy_admin/Tpl\common\sdkNumData.html" */ ?>
<?php /*%%SmartyHeaderCode:14329569dbdfadb6f87-65903864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20bc4b8ea0122ff0a1e1d7d20fd5b95b054337d5' => 
    array (
      0 => '../uducy_admin/Tpl\\common\\sdkNumData.html',
      1 => 1455554992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14329569dbdfadb6f87-65903864',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_569dbdfb3a46d',
  'variables' => 
  array (
    'ac' => 0,
    'Reques_uri' => 0,
    'table' => 0,
    'j' => 0,
    'i' => 0,
    'k' => 0,
    'sk' => 0,
    'get' => 0,
    'si' => 0,
    'list' => 0,
    'cfgi' => 0,
    'cfgk' => 0,
    'li' => 0,
    'page' => 0,
    'table_cfg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_569dbdfb3a46d')) {function content_569dbdfb3a46d($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\wnmp\\www\\malasong\\lib\\ThinkPHP\\Extend\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ('Login/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<style>
.searchtxt{width:50px;}
.searchbtn{width:35px;}
</style>
<?php if ($_smarty_tpl->tpl_vars['ac']->value=='list'){?>
<div class="wrap">
    <div class="container">

        <div id="main">
            
            <div class="con">
                  <div class="table">
                     <div class="th">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['Reques_uri']->value;?>
&a=exportall">导出所有订单</a>
                    </div>            
            	   <form action="<?php echo $_smarty_tpl->tpl_vars['Reques_uri']->value;?>
&ac=export" method="post">
                    <table class="admin-tb" id="js_data_source">
                    <tr>
                    <?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->_loop = false;
 $_smarty_tpl->tpl_vars['k2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['table']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value){
$_smarty_tpl->tpl_vars['j']->_loop = true;
 $_smarty_tpl->tpl_vars['k2']->value = $_smarty_tpl->tpl_vars['j']->key;
?>
                        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['j']->value['field']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                    	<?php if ($_smarty_tpl->tpl_vars['i']->value['islist']==true){?>
                    	<th style="text-align:center;<?php if ($_smarty_tpl->tpl_vars['k']->value=='dicttok'){?>display:none;<?php }?>">
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
                    		<?php }elseif($_smarty_tpl->tpl_vars['i']->value['type']=="img"){?>
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
                        <?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->_loop = false;
 $_smarty_tpl->tpl_vars['k2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['table']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value){
$_smarty_tpl->tpl_vars['j']->_loop = true;
 $_smarty_tpl->tpl_vars['k2']->value = $_smarty_tpl->tpl_vars['j']->key;
?>
                    		<?php  $_smarty_tpl->tpl_vars['cfgi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cfgi']->_loop = false;
 $_smarty_tpl->tpl_vars['cfgk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['j']->value['field']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cfgi']->key => $_smarty_tpl->tpl_vars['cfgi']->value){
$_smarty_tpl->tpl_vars['cfgi']->_loop = true;
 $_smarty_tpl->tpl_vars['cfgk']->value = $_smarty_tpl->tpl_vars['cfgi']->key;
?>
                             <?php if ($_smarty_tpl->tpl_vars['cfgi']->value['islist']){?>
                    			<td style="text-align:center;">
                    			<?php if ($_smarty_tpl->tpl_vars['cfgi']->value['ismain']){?>
                    				<input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['li']->value[$_smarty_tpl->tpl_vars['cfgk']->value];?>
"/>
                    			<?php }?>
                    			<?php if ($_smarty_tpl->tpl_vars['cfgi']->value['type']=='textarea'){?>
                    				<textarea rows="5" cols="20" style="text-align:left;" id="zhushi_<?php echo $_smarty_tpl->tpl_vars['li']->value['orderid'];?>
"><?php echo $_smarty_tpl->tpl_vars['li']->value[$_smarty_tpl->tpl_vars['cfgk']->value];?>
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
                                    <?php if ($_smarty_tpl->tpl_vars['cfgk']->value=="paystats"){?>
                                        <?php if ($_smarty_tpl->tpl_vars['li']->value[$_smarty_tpl->tpl_vars['cfgk']->value]==5){?>等待支付<?php }elseif($_smarty_tpl->tpl_vars['li']->value[$_smarty_tpl->tpl_vars['cfgk']->value]==1){?>支付完成<?php }?>
                                    <?php }else{ ?>
                    				<?php echo $_smarty_tpl->tpl_vars['li']->value[$_smarty_tpl->tpl_vars['cfgk']->value];?>

                                    <?php }?>
                    			<?php }?>
                    			</td>
                                <?php }?>
                                <?php } ?>
                    		<?php } ?>
                       <td>
                       <a href="./?s=Enroll&a=orderinfo&orderid=<?php echo $_smarty_tpl->tpl_vars['li']->value['orderid'];?>
">详情</a>　|　<a class="zhushi_a" data = "<?php echo $_smarty_tpl->tpl_vars['li']->value['orderid'];?>
">保存注释</a>
                       </td>
                    </tr>
                   <?php } ?>
                    </table>

                    <div class="th">
                        <div class="pages">
                        <?php if ($_smarty_tpl->tpl_vars['page']->value){?>
							<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
             
                        <?php }?>
                        </div> 
                    	<div class="form">
                    	<input type="button" onclick="$(this).parents('form').submit();" value=" 导出 "/><span style="color:red"> &nbsp;&nbsp;*导出当前页面勾选的订单</span>
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
  $(".zhushi_a").click(function(){
    var id = $(this).attr("data");
    if(id){
        var val = $("#zhushi_"+id).val();
        $.getJSON("./?s=Enroll&a=update_zhushi&orderid="+id+"&zhushi="+val,function(data){
           // if(data.error == 0){
                alert(data.msg);
            //}
        });
    }
  });
  </script>
<script charset="utf-8" src="./static/editer/kindeditor-min.js"></script>
<script charset="utf-8" src="./static/editer/lang/zh_CN.js"></script>
<script>
var KK=null;
	KindEditor.ready(function(K) {
		KK=K;
		var option	= {
				designMode : <?php echo (($tmp = @$_smarty_tpl->tpl_vars['table_cfg']->value['designMode'])===null||$tmp==='' ? true : $tmp);?>
,
				uploadJson : '/?s=editor&a=upload&prj=sdknum',
	            fileManagerJson : '/?s=editor&a=manager',
	            allowFileManager : false
				};
        window.editor = KK.create('.HTML_EDIT',option);
        //上传按钮
        var editor = K.editor(option);
    	K('.kUpload').click(function() {
    		var that	= this;
    		editor.loadPlugin('image', function() {
    			editor.plugin.imageDialog({
    				imageUrl : K('#imgicon').val(),
    				clickFn : function(url, title, width, height, border, align) {
    					$(that).prev("input").val(url);
    					//K('#imgicon').val(url);
    					//得到图片高宽
    					//K('#img_size').val(width+"*"+height);
    					editor.hideDialog();
    				}
    			});
    		});
    	});
	});
</script>
<?php echo $_smarty_tpl->getSubTemplate ('Login/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>