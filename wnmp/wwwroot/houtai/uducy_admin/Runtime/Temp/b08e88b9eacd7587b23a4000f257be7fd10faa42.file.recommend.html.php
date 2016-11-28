<?php /* Smarty version Smarty-3.1.6, created on 2016-11-16 19:02:15
         compiled from "../uducy_admin/Tpl\Recommend\recommend.html" */ ?>
<?php /*%%SmartyHeaderCode:730582c3cb78b3325-22446629%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b08e88b9eacd7587b23a4000f257be7fd10faa42' => 
    array (
      0 => '../uducy_admin/Tpl\\Recommend\\recommend.html',
      1 => 1479091189,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '730582c3cb78b3325-22446629',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sname' => 0,
    'sname1' => 0,
    'list' => 0,
    'i' => 0,
    'now' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_582c3cb79faba',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582c3cb79faba')) {function content_582c3cb79faba($_smarty_tpl) {?><style>
#recommendheader{border-bottom: 2px solid #000;height: 30px;line-height: 30px;}
#recommendcontent{overflow: hidden;padding-bottom: 10px;}
#recommendcontent table {width: 100%}
#recommendcontent table td{padding:5px;}
#recommendcontent table td a{color:#4e9ad4;}

#match_edit{background:#FFF;position:fixed;width:400px; margin:-100px 0 0 -200px;top:50%;left:50%;border: 1px solid #D4DCE7;}
#match_header{text-align: center;height: 40px;line-height: 40px;font-size: 16px;font-weight: bold;position: relative;}
#match_header span{font-size: 12px;right: 20px;cursor: pointer;font-weight: normal;position: absolute;}
#match_bottom{text-align: center;padding:20px 0;}
#match_bottom input{background:rgb(255, 102, 0) ;border: none;color: #FFF;padding:5px 50px;}
#match_content{padding:10px;}
#match_content p{text-align: center;height: 30px;line-height: 30px;}
#match_content p input{height: 100%;width: 200px;}
</style>
<div id="recommendheader">
	<p id="hotwdheader">
		<select name="" id="banner_sname">
			<option value="m_sign-1">推荐赛事列表-微信（国内）</option>
			<option value="m_sign-2" <?php if ($_smarty_tpl->tpl_vars['sname']->value=="m_sign-2"){?>selected<?php }?>>推荐赛事列表-微信（海外）</option>
			<option value="m_sign_nuomi-1" <?php if ($_smarty_tpl->tpl_vars['sname']->value=="m_sign_nuomi-1"){?>selected<?php }?>>推荐赛事列表-糯米（国内）</option>
			<option value="m_sign_nuomi-2" <?php if ($_smarty_tpl->tpl_vars['sname']->value=="m_sign_nuomi-2"){?>selected<?php }?>>推荐赛事列表-糯米（海外）</option>
		</select>
		<span id="host"><?php if ($_smarty_tpl->tpl_vars['sname1']->value=="m_sign_nuomi"){?>nuomi.zx-tour.com<?php }else{ ?>weixin.zx-tour.com<?php }?></span>建议设置完后到用户端看看效果
	</p>
</div>
<div id="recommendcontent">
<table border="1">
	<tr>
		<td>id</td>
		<td>赛事名称</td>
		<td>比赛时间</td>
		<td>赛事分类</td>
		<td>报名截止时间</td>
		<td>名额库存</td>
		<td>赛事状态</td>
		<td>排序值</td>
		<td>操作&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:add_sign()">添加</a></td>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
	<tr id="matchlist<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
">
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['m_name'];?>
</td>
		<td><?php echo substr($_smarty_tpl->tpl_vars['i']->value['m_GameTime'],0,10);?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['m_ptype'];?>
</td>
		<td><?php echo substr($_smarty_tpl->tpl_vars['i']->value['m_untilTime'],0,10);?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['m_placesleft'];?>
</td>
		<td>
			<?php if ($_smarty_tpl->tpl_vars['i']->value['m_GameTime']<$_smarty_tpl->tpl_vars['now']->value){?>
				比赛结束
			<?php }else{ ?>
				<?php if ($_smarty_tpl->tpl_vars['i']->value['m_untilTime']<$_smarty_tpl->tpl_vars['now']->value){?>
				报名截止
				<?php }else{ ?>
					<?php if ($_smarty_tpl->tpl_vars['i']->value['m_signupTime']>$_smarty_tpl->tpl_vars['now']->value){?>
					即将开始
					<?php }else{ ?>
						<?php if ($_smarty_tpl->tpl_vars['i']->value['m_placesleft']>0){?>
						正在报名
						<?php }else{ ?>
						名额已满	
						<?php }?>
					<?php }?>
				<?php }?>
			<?php }?>
		</td>
		<td><?php echo $_smarty_tpl->tpl_vars['i']->value['m_order'];?>
</td>
		<td><a href="javascript:del_sign(<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
)">删除</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:order_sign(<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
)">排序</a></td>
	</tr>
	<?php } ?>
</table>
</div>
<script>
function del_sign(id){
	if(!id){
		alert("无效id");
	}
	$.ajax({
		url:"?s=Recommend&a=recommend&ac=del&sname=<?php echo $_smarty_tpl->tpl_vars['sname']->value;?>
",
		dataType:"json",
        data:{id:id},
        type: "POST",
        success:function(data){
        	if(data.error==0){
        		$("#matchlist"+id).remove();
        	}else{
        		alert(data.msg);
        	}
        },
        error:function(){
        	alert("修改失败！");
        }
	});
}
function remove_edit(){
	$("#match_edit").remove();
}
function alertBox(title,content,btn,fun){
	
	var match_edit = $("#match_edit");
	var contentHTML = "<p id='match_header'>"+title+"<span onclick='remove_edit()'>关闭</span></p><div id='match_content'>"+content+"</div><p id='match_bottom'><input type='button' value='"+btn+"' id='match_btn' /></p>";
	if(match_edit.length>0){
		console.log("in")
		match_edit.html(contentHTML);
	}else{
		console.log("add")
		$("<div id='match_edit'>"+contentHTML+"</div>").appendTo($('body'));
	}
	$("#match_btn").unbind().click(function(){
		fun();
	});
}
function add_sign(){
	var content = '<p><input type="text"  placeholder="输入赛事ID" id="id_input"/></p>';
	alertBox("添加推荐赛事",content,"添加",function(){
		var id = $("#id_input").val();
		if(!id){
			alert("输入id！！");
		}
		$.ajax({
			url:"?s=Recommend&a=recommend&ac=add&sname=<?php echo $_smarty_tpl->tpl_vars['sname']->value;?>
",
			dataType:"json",
	        data:{id:id},
	        type: "POST",
	        success:function(data){
	        	if(data.error==0){
	        		alert("添加成功，刷新列表顺序！");
	        		window.location.reload();
	        	}else{
	        		alert(data.msg);
	        	}
	        },
	        error:function(){
	        	alert("修改失败！");
	        }
		});
	});
}
function order_sign(id){
	var content = '<p><input type="text"  placeholder="输入排序值！纯数字" id="order_input"/></p>';
	alertBox("修改赛事排序值",content,"保存",function(){
		var m_order = $("#order_input").val();
		if(!m_order){
			alert("输入排序值！！");
		}
		$.ajax({
			url:"?s=Recommend&a=recommend&ac=order",
			dataType:"json",
	        data:{id:id,m_order:m_order},
	        type: "POST",
	        success:function(data){
	        	if(data.error==0){
	        		alert("修改成功，刷新列表顺序！");
	        		window.location.reload();
	        	}else{
	        		alert(data.msg);
	        	}
	        },
	        error:function(){
	        	alert("修改失败！");
	        }
		});
	});
}

$("#banner_sname").change(function(){
	var sname = $(this).val();
	window.location.href = "?s=Recommend&ac=recommend&sname="+sname;
});
</script><?php }} ?>