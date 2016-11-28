<?php /* Smarty version Smarty-3.1.6, created on 2016-11-14 10:17:22
         compiled from "../uducy_admin/Tpl\EnrollV2\index.html" */ ?>
<?php /*%%SmartyHeaderCode:691558291eb2b03776-25305411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '433f69b3102aedc1ad06b0a3f2cd379cb3689dd0' => 
    array (
      0 => '../uducy_admin/Tpl\\EnrollV2\\index.html',
      1 => 1478503485,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '691558291eb2b03776-25305411',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ac' => 0,
    'count' => 0,
    'Reques_uri' => 0,
    'table' => 0,
    'j' => 0,
    'i' => 0,
    'k' => 0,
    'sk' => 0,
    'get' => 0,
    'si' => 0,
    'list' => 0,
    'li' => 0,
    'lk' => 0,
    'cfgi' => 0,
    'cfgk' => 0,
    'page' => 0,
    'table_cfg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58291eb2dcf47',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58291eb2dcf47')) {function content_58291eb2dcf47($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\wnmp\\wwwroot\\houtai\\lib\\ThinkPHP\\Extend\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
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
                        <a href="" exportall="all" class="export">导出所有订单</a><span style="float:right;">当前页面一共　<strong><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</strong>　个订单</span>
                    </div>            
            	   <form action="<?php echo $_smarty_tpl->tpl_vars['Reques_uri']->value;?>
&ac=export" method="post" id="orderlist_form">
                    <table class="admin-tb" id="js_data_source">
                    <tr>
                        <th><input type="checkbox" id="select_all"/></th>
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
 <br>
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
                    			<!-- <?php if ($_smarty_tpl->tpl_vars['i']->value['ismain']===true){?><input type="checkbox" id="select_all"/> &nbsp;<?php }?> --><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
 <br>
                    			<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" class="searchtxt" value="<?php echo $_smarty_tpl->tpl_vars['get']->value[$_smarty_tpl->tpl_vars['k']->value];?>
"/><input type="button" class="searchbtn" value="搜索"/> <br>
                    		<?php }elseif($_smarty_tpl->tpl_vars['i']->value['type']=="textarea"){?>
                    			<?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
<br>
                    			<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" class="searchtxt" value="<?php echo $_smarty_tpl->tpl_vars['get']->value[$_smarty_tpl->tpl_vars['k']->value];?>
"/><input type="button" class="searchbtn" value="搜索"/> <br>
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
                    <th style="text-align:center;">操作</th>
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
                        <td><input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['li']->value['orderid'];?>
"/><?php echo $_smarty_tpl->tpl_vars['lk']->value+1;?>
</td>
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
                    			<td style="text-align:center;max-width:150px;">
                    			<?php if ($_smarty_tpl->tpl_vars['cfgi']->value['type']=='textarea'||$_smarty_tpl->tpl_vars['cfgi']->value['type']=='textarea1'){?>
                    				<textarea rows="2" cols="10" style="text-align:left;" id="zhushi_<?php echo $_smarty_tpl->tpl_vars['li']->value['orderid'];?>
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
                                    <?php if ($_smarty_tpl->tpl_vars['cfgk']->value=="payprice"){?>
                                        <?php echo round($_smarty_tpl->tpl_vars['li']->value['payprice']-$_smarty_tpl->tpl_vars['li']->value['discount'],2);?>
 <br>
                                        <del><?php echo $_smarty_tpl->tpl_vars['li']->value['payprice'];?>
</del>
                                    <?php }else{ ?>
                    				<?php echo $_smarty_tpl->tpl_vars['li']->value[$_smarty_tpl->tpl_vars['cfgk']->value];?>

                                    <?php }?>
                    			<?php }?>
                    			</td>
                                <?php }?>
                                <?php } ?>
                    		<?php } ?>
                       <td>
                       <a href="./?s=EnrollV2&a=orderinfo&orderid=<?php echo $_smarty_tpl->tpl_vars['li']->value['orderid'];?>
">详情</a><br><a class="zhushi_a" data = "<?php echo $_smarty_tpl->tpl_vars['li']->value['orderid'];?>
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
                    	<input type="button" exportall="id" class="export" value=" 导出 "/><span style="color:red"> &nbsp;&nbsp;*导出当前页面勾选的订单</span>
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
        $.getJSON("./?s=EnrollV2&a=update_zhushi&orderid="+id+"&zhushi="+val,function(data){
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
var checkTb1 = function(selectType){
    console.log(selectType)
    CheckInit("check_field_Box",selectType);
    console.log(selectType)
}
var  list = undefined;
var CheckInit = function(tabelId,selectType){
    if(list == undefined){
        list = $("#" + tabelId).find("input[type='checkbox']");
    }
    CheckControl(list,selectType)
}

var CheckControl = function(childs,selectType,checkHandler){
    console.log(selectType)
    for(var i = 0,len = childs.length; i < len; i++){
        switch(selectType){
            case 1: //全选
                childs[i].checked = true;
                break;
            case 2: //不选
                childs[i].checked = false;
                break;
            case 3: //反选
                childs[i].checked = !childs[i].checked;
                break;
        }
    }
}
$(".export").click(function(){
    var exporttype = $(this).attr("exportall"); 
    var ids = "";
    if(exporttype=="id"){
        var idarr   = [];
        $("input[name^=id]").each(function(){
            if($(this).attr('checked')){
                idarr.push("'"+$(this).val()+"'");
            }
        });
        ids = idarr.join(",");
        if(!ids) return false;
    }
    if($("#check_field_Box").length<1){
        html = '\
        <div style="position:fixed;top:0;left:0;background:#F2F4F6;margin:100px;max-width:500px;" id="check_field_Box">\
            <p style="background:#D4DCE7;padding:10px;">请选择你要导出的字段</p>\
            <div style="padding:10px;">\
            <form action="/?s=EnrollV2&a=export" id="field_form" method="POST">\
            <input type="hidden" value="'+exporttype+'" name="exporttype"/>\
            <input type="hidden" value="'+ids+'" name="ids"/>\
            <p>订单相关</p>\
            <label for="field1"><input type="checkbox" name="field[]" id="field1" value="orderid" checked/>订单号</label>\
            <label for="field2"><input type="checkbox" name="field[]" id="field2" value="paystats" checked/>订单状态</label>\
            <label for="field3"><input type="checkbox" name="field[]" id="field3" value="payorderid" checked/>支付订单号</label>\
            <label for="field23"><input type="checkbox" name="field[]" id="field23" value="payinfo" />支付信息</label>\
            <label for="field4"><input type="checkbox" name="field[]" id="field4" value="orderprice" checked/>订单价钱</label>\
            <label for="field_discount"><input type="checkbox" name="field[]" id="field_discount" value="discount" checked/>优惠价钱</label>\
            <label for="field24"><input type="checkbox" name="field[]" id="field24" value="official_notes" checked/>客服注释</label>\
            <label for="field26"><input type="checkbox" name="field[]" id="field26" value="user_remarks" checked/>用户注释</label>\
            <label for="field5"><input type="checkbox" name="field[]" id="field5" value="m_name" checked/>报名赛事</label>\
            <label for="field25"><input type="checkbox" name="field[]" id="field25" value="platform" checked/>下单平台</label>\
            <label for="field27"><input type="checkbox" name="field[]" id="field27" value="orderinfo" checked/>订单详情</label>\
            <br>\
             <br>\
            <p>客户相关</p>\
            <label for="field6"><input type="checkbox" name="field[]" id="field6" value="name" checked/>用户姓名</label>\
            <label for="field7"><input type="checkbox" name="field[]" id="field7" value="sfz_code" checked/>身份证号</label>\
            <label for="field8"><input type="checkbox" name="field[]" id="field8" value="phone" checked/>手机号</label>\
            <label for="field9"><input type="checkbox" name="field[]" id="field9" value="birth" checked/>生日</label>\
            <label for="field10"><input type="checkbox" name="field[]" id="field10" value="sexy" checked/>性别</label>\
            <label for="field11"><input type="checkbox" name="field[]" id="field11" value="country" checked/>国籍</label>\
            <label for="field12"><input type="checkbox" name="field[]" id="field12" value="area" checked/>地区</label>\
            <label for="field13"><input type="checkbox" name="field[]" id="field13" value="addr" checked/>详细地址</label>\
            <label for="field14"><input type="checkbox" name="field[]" id="field14" value="e_mail" checked/>邮箱</label>\
            <label for="field15"><input type="checkbox" name="field[]" id="field15" value="cloth_size" checked/>服装尺码</label>\
            <label for="field16"><input type="checkbox" name="field[]" id="field16" value="pass_code" checked/>护照号码</label>\
            <label for="field17"><input type="checkbox" name="field[]" id="field17" value="surname" checked/>中文姓拼音</label>\
            <label for="field18"><input type="checkbox" name="field[]" id="field18" value="en_name" checked/>中文名拼音</label>\
            <label for="field19"><input type="checkbox" name="field[]" id="field19" value="issue_date" checked/>签发日期</label>\
            <label for="field20"><input type="checkbox" name="field[]" id="field20" value="expiry_date" checked/>有效日期</label>\
            <label for="field40"><input type="checkbox" name="field[]" id="field40" value="postcode" checked/>邮编</label>\
            <label for="field41"><input type="checkbox" name="field[]" id="field41" value="isattended" checked/>是否参加过全马</label>\
            <label for="field42"><input type="checkbox" name="field[]" id="field42" value="personbest" checked/>最好成绩</label>\
            <label for="field43"><input type="checkbox" name="field[]" id="field43" value="personbestmatch" checked/>最好成绩赛事</label>\
            <label for="field44"><input type="checkbox" name="field[]" id="field44" value="wishfinish" checked/>预期成绩</label>\
            <label for="field21"><input type="checkbox" name="field[]" id="field21" value="contact_name" checked/>联系人姓名</label>\
            <label for="field22"><input type="checkbox" name="field[]" id="field22" value="contact_phone" checked/>联系人手机</label>\
            <p align="center" style="padding:10px 0;"><input type="button" value="全选" onClick="javascript:checkTb1(1);"/>　　<input type="button" value="反选" onClick="javascript:checkTb1(3);" />　　<input type="button" value="全不选" onClick="javascript:checkTb1(2);" />　　<input type="submit" value="导出"/>　　<input type="button" value="取消" id="cancel"/></p>\
            </form>\
            </div>\
        </div>';
        $(html).appendTo($('body'));

        $("#cancel").click(function () {
            $("#check_field_Box").remove();
        });
    }

    return false;
}); 
</script>
<?php echo $_smarty_tpl->getSubTemplate ('Login/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>