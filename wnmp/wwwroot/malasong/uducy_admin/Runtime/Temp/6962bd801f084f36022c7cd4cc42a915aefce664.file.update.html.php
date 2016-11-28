<?php /* Smarty version Smarty-3.1.6, created on 2016-02-26 10:42:25
         compiled from "../uducy_admin/Tpl\Match\update.html" */ ?>
<?php /*%%SmartyHeaderCode:2237356aae9c5756755-51234272%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6962bd801f084f36022c7cd4cc42a915aefce664' => 
    array (
      0 => '../uducy_admin/Tpl\\Match\\update.html',
      1 => 1456454503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2237356aae9c5756755-51234272',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56aae9c57ab79',
  'variables' => 
  array (
    'ac' => 0,
    'match' => 0,
    'id' => 0,
    'now' => 0,
    'select' => 0,
    'pid' => 0,
    'data' => 0,
    'html' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56aae9c57ab79')) {function content_56aae9c57ab79($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Login/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['ac']->value=='add'||$_smarty_tpl->tpl_vars['ac']->value=='edit'){?>
<div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con box-green">
                <form action="./?s=Match&a=<?php echo $_smarty_tpl->tpl_vars['ac']->value;?>
&match=<?php echo $_smarty_tpl->tpl_vars['match']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
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
                            <select name="goodspid" id="goodspid">
				            <option value="0">-----顶级分类-----</option>
				            <?php echo $_smarty_tpl->tpl_vars['select']->value;?>

				         	</select>
	                            <!-- <input type="text" name="pid" value="<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
"/> -->
                            </td>
                        </tr>
                        <tr>
                            <th class="w120">名称：</th>
                            <td>
	                            <input type="text"  name="goodscls" class="textinput w270" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['goodscls'], ENT_QUOTES, 'UTF-8', true);?>
" />
                            </td>
                        </tr>
                        <tr>
                            <th>单价：</th>
                            <td style="width:370px;">
                            	<input name="goodsprice" type="text" id="goodsprice" class="textinput" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['goodsprice'], ENT_QUOTES, 'UTF-8', true);?>
 " onkeyup="value=value.replace(/[^\d|.]/g,'') "/>
                            </td>
                        </tr>
                        <tr>
                        	<th>数量:</th>
                        	<td>
                            <input name="goodsnum" type="text" id="goodsnum" class="textinput" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['goodsnum'], ENT_QUOTES, 'UTF-8', true);?>
 " onkeyup="value=value.replace(/[^\d]/g,'') "/>
							</td>
                        </tr>
                        <tr>
                        	<th>剩余数量:</th>
                        	<td>
                             <input name="goodsleft" type="text" id="goodsleft" class="textinput" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['goodsleft'], ENT_QUOTES, 'UTF-8', true);?>
" onkeyup="value=value.replace(/[^\d]/g,'') "/>
                            </td>
                        </tr>
                        <tr>
                            <th>排序：</th>
                            <td><input name="order" type="text" id="order" class="textinput" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['order'], ENT_QUOTES, 'UTF-8', true);?>
"  onkeyup="value=value.replace(/[^\d]/g,'') "/></td>
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
                        	 <input type="button" onclick="window.location='./?s=Match'" value="&nbsp;&nbsp;返回列表&nbsp;&nbsp;" />
                           <input type="button"  onclick="window.location='./?s=Match&a=add&match=<?php echo $_smarty_tpl->tpl_vars['match']->value['id'];?>
&pid=<?php echo $_smarty_tpl->tpl_vars['match']->value['id'];?>
'" value="&nbsp;&nbsp;添加项目&nbsp;&nbsp;" />
                        </div>        
                        </div>
                    </div>
                    <form action='#' method='post'>
                    <table class="admin-tb" id="datatable">
                    <thead>
                        <tr>
                            <th>赛事（<?php echo $_smarty_tpl->tpl_vars['match']->value['goodscls'];?>
）</th>
                            <th>排序</th>
                            <th>单价</th>
                            <th>剩余数量 / 总量</th>
                            <th>创建时间</th>
                            <th>最后修改时间</th>

                            <th width="161">操作</th>
                        </tr>
					</thead>
					<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

                    <tr id="class_53" pid="class_50" style=";">
      <td>|-- <a href="">备注</a></td><td colspan="5"><input id="beizhu" style="width:100%;" value="<?php echo $_smarty_tpl->tpl_vars['match']->value['beizhu'];?>
" placeholder="编辑备注……"/></td>
      <td><div align="center">[<a onclick="edit_beizhu()">保存修改</a>]</div></td></tr>
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
                    	
                    </div>
                    </form>
                </div>
            </div><!--/ con-->            
        </div>    
    </div><!--/ container-->
</div>
<script>
function edit_beizhu(){
    var beizhu = $("#beizhu").val();
    $.getJSON("./?s=Match&a=edit_beizhu&match_id=<?php echo $_smarty_tpl->tpl_vars['match']->value['id'];?>
&info="+beizhu,function(data){
            if(data.error===0){
                alert("修改成功！");
            }else{
                alert(data.msg);
            }
        });
}  
</script>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ('Login/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>