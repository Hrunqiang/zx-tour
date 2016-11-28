<?php /* Smarty version Smarty-3.1.6, created on 2016-11-14 11:11:44
         compiled from "../uducy_admin/Tpl\Recommend\banner.html" */ ?>
<?php /*%%SmartyHeaderCode:1684658292b70d07924-88679920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '789e9697a541c3e656c2bb0ec21bef002b694d05' => 
    array (
      0 => '../uducy_admin/Tpl\\Recommend\\banner.html',
      1 => 1478503486,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1684658292b70d07924-88679920',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sname' => 0,
    'list' => 0,
    'i' => 0,
    'table_cfg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58292b70e0f98',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58292b70e0f98')) {function content_58292b70e0f98($_smarty_tpl) {?><style>
#bannercontent{padding-bottom: 10px;}
#bannerheader{border-bottom: 2px solid #000;height: 30px;line-height: 30px;}
.bannerlist{overflow: hidden;padding-top:10px;height:108.5px ;}
.bannerlist li{float: left;height:108.5px ;}
.bannerlist li a{color: #4e9ad4;}
.bannerlist .banner_img{width: 200px;position: relative;}
.bannerlist .banner_img .upload_btn{position: absolute;top:40px;background: rgba(0,0,0,.6);width: 187.5px;color:#fff;text-align: center;font-size: 20px;cursor: pointer;}
.bannerlist .banner_img div{width: 187.5px;margin: 0 auto;}
.bannerlist .banner_img div img{width: 187.5px;height: 108.5px;}
.bannerlist .banner_title{width:500px;padding-top: 30px;}
.bannerlist .banner_order{width: 100px;padding-top: 40px;}
.bannerlist .banner_order input{width: 50px;}
.bannerlist .banner_action{padding-top: 40px;}
.bannerlist .show{display: block;}
.bannerlist .edit{display: none;}
.bannerlist.editing .show{display: none;}
.bannerlist.editing .edit{display: block;}
</style>
<div id="bannerBox">
	<p id="bannerheader">
		<select name="" id="banner_sname">
			<option value="zx_banner">焦点图-官网</option>
			<option value="zx_banner_nuomi" <?php if ($_smarty_tpl->tpl_vars['sname']->value=="zx_banner_nuomi"){?>selected<?php }?>>焦点图-糯米</option>
		</select>
		<span id="host"><?php if ($_smarty_tpl->tpl_vars['sname']->value=="zx_banner_nuomi"){?>nuomi.zx-tour.com<?php }else{ ?>weixin.zx-tour.com<?php }?></span>建议不要超过5张
	</p>
	<div id="bannercontent">
		<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
		<form action="?s=Recommend&a=banner&ac=edit&sname=<?php echo $_smarty_tpl->tpl_vars['sname']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['aid'];?>
" method="post" id="banner_edit_form<?php echo $_smarty_tpl->tpl_vars['i']->value['aid'];?>
" >
		<div class="bannerlist" id="banner<?php echo $_smarty_tpl->tpl_vars['i']->value['aid'];?>
">
			<ul>
				<li class="banner_img">
					<div>
						<img src="<?php echo $_smarty_tpl->tpl_vars['i']->value['n_img'];?>
" alt="">
						<input type="hidden" name="n_img" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['n_img'];?>
">
						<p class="kUpload upload_btn edit">上传</p>
					</div>
				</li>
				<li class="banner_title">
					<div class="show">
						<?php echo $_smarty_tpl->tpl_vars['i']->value['n_title'];?>
<br>
						<?php echo $_smarty_tpl->tpl_vars['i']->value['n_url'];?>

					</div>
					<div class="edit">
						<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['n_title'];?>
" placeholder="输入名称" id="n_title<?php echo $_smarty_tpl->tpl_vars['i']->value['aid'];?>
" name="n_title"><br>
						<input type="text" placeholder="直接输入我们的赛事id" id="n_url_id<?php echo $_smarty_tpl->tpl_vars['i']->value['aid'];?>
" name="match_id">　或　<input width="100" type="text" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['n_url'];?>
" placeholder="输入跳转链接" id="n_url<?php echo $_smarty_tpl->tpl_vars['i']->value['aid'];?>
" name="n_url">
					</div>
				</li>
				<li class="banner_order">
					<p class="show"><?php echo $_smarty_tpl->tpl_vars['i']->value['orderid'];?>
</p>
					<p class="edit"><input type="text" id="order<?php echo $_smarty_tpl->tpl_vars['i']->value['aid'];?>
" name="orderid" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['orderid'];?>
"></p>					
				</li>
				<li class="banner_action">
					<div class="show">
						<a href="javascript:edit_banner(<?php echo $_smarty_tpl->tpl_vars['i']->value['aid'];?>
)">编辑</a>　<a href="javascript:del_banner(<?php echo $_smarty_tpl->tpl_vars['i']->value['aid'];?>
)">删除</a>
					</div>
					<div class="edit">
						<a href="javascript:save_banner(<?php echo $_smarty_tpl->tpl_vars['i']->value['aid'];?>
)">保存</a>　<a href="javascript:edit_cancel_banner(<?php echo $_smarty_tpl->tpl_vars['i']->value['aid'];?>
)">取消</a>
					</div>
				</li>
			</ul>
		</div>
		</form>
		<?php } ?>
		<form action="?s=Recommend&a=banner&ac=add&sname=<?php echo $_smarty_tpl->tpl_vars['sname']->value;?>
" method="post" id="banner_add_form" >
		<div class="bannerlist editing" id="banner_add">
			<ul>
				<li class="banner_img">
					<div>
						<img src="" alt="">
						<input type="hidden" name="n_img" value="">
						<p class="kUpload upload_btn edit">添加</p>
					</div>
				</li>
				<li class="banner_title">
					<div class="edit">
						<input type="text" value="" placeholder="输入名称" id="n_title_add" name="n_title"><br>
						<input type="text" placeholder="直接输入我们的赛事id" id="n_url_id_add" name="match_id">　或　<input width="100" type="text" value="" placeholder="输入跳转链接" id="n_url_add" name="n_url">
					</div>
				</li>
				<li class="banner_order">
					<p class="edit"><input type="text" name="orderid" id="order_add" value="" placeholder="排序id"></p>					
				</li>
				<li class="banner_action">
					<div class="edit">
						<a href="javascript:add_banner()">添加</a>
					</div>
				</li>
			</ul>
		</div>
		</form>
	</div>
</div>
<script>
function edit_banner(id){
	$("#banner"+id).addClass("editing");
}
function edit_cancel_banner(id){
	$("#banner"+id).removeClass("editing");
}
function save_banner(id){
	$("#banner_edit_form"+id).submit();
	$("#banner"+id).removeClass("editing");
}
function del_banner(id){
	if(confirm("确认删除？")){
		window.location.href = "?s=Recommend&a=banner&ac=del&sname=<?php echo $_smarty_tpl->tpl_vars['sname']->value;?>
&id="+id;
	}
	
}
function add_banner(){
	$("#banner_add_form").submit();
}
$("#banner_sname").change(function(){
	var sname = $(this).val();
	window.location.href = "?s=Recommend&ac=banner&sname="+sname;
});
</script>
<script charset="utf-8" src="./static/editer/kindeditor-min.js"></script>
<script charset="utf-8" src="./static/editer/lang/zh_CN.js"></script>
<script>
var KK=null;
KindEditor.ready(function(K) {
    KK=K;
    var option  = {
            designMode : <?php echo (($tmp = @$_smarty_tpl->tpl_vars['table_cfg']->value['designMode'])===null||$tmp==='' ? true : $tmp);?>
,
            uploadJson : '/?s=editor&a=upload',
            fileManagerJson : '/?s=editor&a=manager',
            allowFileManager : false
            };

    window.editor = KK.create('.HTML_EDIT',option);
    //上传按钮
    var editor = K.editor(option);
    $('.kUpload').live("click",function() {
        var that    = this;
        editor.loadPlugin('image', function() {
            editor.plugin.imageDialog({
                imageUrl : $(that).prev("input").val(),
                clickFn : function(url, title, width, height, border, align) {
                    $(that).prev("input").val(url).prev("img").attr("src",url);
                    //得到图片高宽
                    //K('#img_size').val(width+"*"+height);
                    editor.hideDialog();
                }
            });
        });
    });
});
function addbanner(){
    html = '<div class="imgbox2">\
                <span class="del_banner">—</span>\
                <img src="" alt="">\
                <input type="hidden" name="m_banner[]" class="textinput w270" value="" /><a class="kUpload upload_btn" >+</a>\
            </div>';
    $(html).appendTo($("#banner_box"));
}
</script><?php }} ?>