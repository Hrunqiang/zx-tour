<?php /* Smarty version Smarty-3.1.6, created on 2015-12-10 19:14:20
         compiled from "../uducy_admin/Tpl\EnrollNotice\mailsend.html" */ ?>
<?php /*%%SmartyHeaderCode:139795663ebdf732492-65199680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5199f8d040295650294b525311d2bcd312868f3d' => 
    array (
      0 => '../uducy_admin/Tpl\\EnrollNotice\\mailsend.html',
      1 => 1449741472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139795663ebdf732492-65199680',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5663ebdf837ab',
  'variables' => 
  array (
    'ac' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5663ebdf837ab')) {function content_5663ebdf837ab($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Login/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con box-green">
                <form action="?s=EnrollNotice&a=mailsend&ac=<?php echo $_smarty_tpl->tpl_vars['ac']->value;?>
" method='post' onsubmit="return checkform();" enctype="multipart/form-data">
                <div class="box-header">
                    <h4>邮件通知</h4>
                </div>
                <div class="box-content">
                    <table class="table-font" style="width:80%;">
                        <tr class="mail_title hiden">
                            <th class="w120">邮件标题：</th>
                            <td>
	                            <input type="text" id="mail_title"  name="mail_title" class="textinput w270" autocomplete="off" />
                            </td>
                        </tr>
                      <!--   <tr class="mail_file hiden">
                            <th class="w120">附件：</th>
                            <td><input type="text" name="mail_file"  class="textinput w270 pic"/>&nbsp;<input type="button" class="kUpload" value="上传附件"></td>
                        </tr> -->
<!--                         <tr>
                            <th>下线时间：</th>
                            <td><input name="offtime" type="text" id="offtime" class="textinput datepicker" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['offtime'], ENT_QUOTES, 'UTF-8', true);?>
" onkeyup=""/></td>
                        </tr> -->
                        <tr class="addressee">
                        	<th>收件人：</th>
                        	<td><textarea name="addressee" id="test1" style="width:50%; height:60px;float:left;"></textarea>
                        	<!-- &nbsp;<input type="button"  class="KUploadfile1" value="导入收件人"> -->
                        	<div style="overflow:hidden;">
                        	
                        	<font color=red>*注意:请不要使用英文半角引号(双/单)，点击下方按钮可以导入邮件列表，目前只支持txt格式</font>
                        	</div>
                        	<form id="file_form" enctype="multipart/form-data">
                        		<input type="file" name="attachment" id="test" />
                        	</form>
                        	</td>
                        </tr>
                        <tr class="mail_content hiden">
                        	<th>内容：</th>
                        	<td><textarea class="HTML_EDIT" name="mail_content" style="width:90%; height:300px;"></textarea></td>
                        </tr>   
                    </table>
                </div>               
                <div class="box-footer">
                    <div class="box-footer-inner">
                    	<input type="submit" value="确定并发送" /> 或 <a href="/?s=Classes&a=content&ac=list">取消</a>
                    </div>
                </div>
                </form>
            </div><!--/ con-->
            
        </div>    
    </div><!--/ container-->

</div>
<link type="text/css" href="/static/datapicker/timepicker/css/jquery-ui-1.8.17.custom.css" rel="stylesheet" />
     <link type="text/css" href="/static/datapicker/timepicker/css/jquery-ui-timepicker-addon.css" rel="stylesheet" />
    <script type="text/javascript" src="/static/datapicker/timepicker/js/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="/static/datapicker/timepicker/js/jquery-ui-1.8.17.custom.min.js"></script>
	<script type="text/javascript" src="/static/datapicker/timepicker/js/jquery-ui-timepicker-addon.js"></script>
    <script type="text/javascript" src="/static/datapicker/timepicker/js/jquery-ui-timepicker-zh-CN.js"></script>
    <script>
function checkform(){
        
}
$('.datepicker').datetimepicker({
	//showOn: "button",
	//buttonImage: "./css/images/icon_calendar.gif",
	//buttonImageOnly: true,
	showSecond: true,
	timeFormat: 'hh:mm:ss',
	stepHour: 1,
	stepMinute: 1,
	stepSecond: 1
});
</script>
<script charset="utf-8" src="./static/editer/kindeditor-min.js"></script>
<script charset="utf-8" src="./static/editer/lang/zh_CN.js"></script>
<script>
var KK=null;

KindEditor.ready(function(K) {
	KK=K;
	var option	= {
			designMode : 2,
			uploadJson : '/?s=editor&a=upload',
            fileManagerJson : '/?s=editor&a=manager',
            allowFileManager : false
			};

     window.editor = KK.create('.HTML_EDIT',option);
 //    //上传按钮
 //    var editor = K.editor(option);
	// K('.kUpload').click(function() {
	// 	editor.loadPlugin('image', function() {
	// 		editor.plugin.imageDialog({
	// 			imageUrl : K('#imgicon').val(),
	// 			clickFn : function(url, title, width, height, border, align) {
	// 				K('#imgicon').val(url);
	// 				//得到图片高宽
	// 				//K('#img_size').val(width+"*"+height);
	// 				editor.hideDialog();
	// 			}
	// 		});
	// 	});
	// });
	// KindEditor.ready(function(K) {
 //    var editor = K.editor({
 //    	uploadJson : '/?s=editor&a=upload',
 //        fileManagerJson : '/?s=editor&a=manager',
 //     	allowFileManager : false
 //    });
 //    K('.KUploadfile').click(function() {
 //     editor.loadPlugin('insertfile', function() {
 //      editor.plugin.fileDialog({
 //       fileUrl : K('#url').val(),
 //       clickFn : function(url, title) {
 //        K('#url').val(url);
 //        editor.hideDialog();
 //       }
 //      });
 //     });
 //    });
 //   });


	var attachment=document.getElementById("test");
	var trueattachment=document.getElementById("test1");
	attachment.onchange=function(){
		var formData = new FormData($('form')[0]);
		$.ajax({
	        url: '?s=Upload&a=getfile',
	        type: 'POST',
	        // xhr: function() { 
	        //     myXhr = $.ajaxSettings.xhr();
	        //     if(myXhr.upload){
	        //         myXhr.upload.addEventListener('progress',progressHandlingFunction, false); 
	        //     }
	        //     return myXhr;
	        // },
	        //Ajax事件
	       // beforeSend:function(){$('#status').html("准备上传。。。")} ,
	        success: function(data){
	        	showaddressee(data);			
	        },
	        error: function(){alert("数据读取失败！")},
	        // Form数据
	        data: formData,
	        //Options to tell JQuery not to process data or worry about content-type
	        cache: false,
	        contentType: false,
	        processData: false
    	});
	}

	// function upload1(input){
	// 	var file = input.files[0];
	// 	filename = file.name.split(".")[0];
	// 	alert(filename);
	// 	var fso = new ActiveXObject("Scripting.FileSystemObject");

	// 	var f1 = fso.GetFile(filename);
	// 	var fso = new ActiveXObject("Scripting.FileSystemObject");

	// 	var f1 = fso.GetFile("filename");

	// 	alert("File last modified: " + f1.DateLastModified);
	// }
	function upload(input) {
		var val = "";
	  	//支持chrome IE10
	  	if (window.FileReader) {
		    var file = input.files[0];
		    filename = file.name.split(".")[0];
		    var reader = new FileReader();
		    reader.readAsText(file);

		    reader.onload = function() {
		    	var result = this.result.replace(/\r|\n/g, ";");
		    	showaddressee(result);
		      	//return this.result.replace("\n", ";");
		    }
	    	
	  	} else if (typeof window.ActiveXObject != 'undefined'){
	  		
	  		//支持IE 7 8 9 10
		    var xmlDoc; 
		    xmlDoc = new ActiveXObject("Microsoft.XMLDOM"); 
		    xmlDoc.async = false; 
		    xmlDoc.load(input.value);
		    var result = xmlDoc.xml.replace(/\r|\n/g, ";");
		    
		    showaddressee(result);
  		} else if (document.implementation && document.implementation.createDocument) { 
  			//支持FF
		    var xmlDoc; 
		    xmlDoc = document.implementation.createDocument("", "", null); 
		    xmlDoc.async = false; 
		    xmlDoc.load(input.value); 
		    var result = xmlDoc.xml.replace(/\r|\n/g, ";");
		    showaddressee(result);
		} else { 
		    alert('导入失败！失败原因：你的浏览器不支持此功能，推荐使用chrome,firefox等高版本浏览器！'); 
		}
	}
 	function showaddressee(str){
		if(str==""||str ==null) return false;
	    str= str+";"+trueattachment.value;
	    var val_arr = str.split(";");
	    var val_arr_new =  []; 
	    for(var i in val_arr){
	        if(val_arr_new.indexOf(val_arr[i])===-1 && val_arr[i]!="" && /^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/.test(val_arr[i])) val_arr_new.push(val_arr[i]);
	    }
	    trueattachment.value = val_arr_new.join(";");
	}
	// var colorpicker;
	// K('#colorpicker').bind('click', function(e) {
	// 	e.stopPropagation();
	// 	if (colorpicker) {
	// 		colorpicker.remove();
	// 		colorpicker = null;
	// 		return;
	// 	}
	// 	var colorpickerPos = K('#colorpicker').pos();
	// 	colorpicker = K.colorpicker({
	// 		x : colorpickerPos.x,
	// 		y : colorpickerPos.y + K('#colorpicker').height(),
	// 		z : 19811214,
	// 		selectedColor : 'default',
	// 		noColor : '无颜色',
	// 		click : function(color) {
	// 			K('#n_color').val(color);
	// 			K('#n_title').css({"color":color});
	// 			colorpicker.remove();
	// 			colorpicker = null;
	// 		}
	// 	});
	// });
	// K(document).click(function() {
	// 	if (colorpicker) {
	// 		colorpicker.remove();
	// 		colorpicker = null;
	// 	}
	// });

});
</script>
<?php echo $_smarty_tpl->getSubTemplate ('Login/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>