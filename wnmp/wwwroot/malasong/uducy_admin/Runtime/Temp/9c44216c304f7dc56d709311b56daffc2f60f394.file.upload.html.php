<?php /* Smarty version Smarty-3.1.6, created on 2015-12-07 23:50:52
         compiled from "../uducy_admin/Tpl\Upload\upload.html" */ ?>
<?php /*%%SmartyHeaderCode:26365665a3972788b3-88525975%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c44216c304f7dc56d709311b56daffc2f60f394' => 
    array (
      0 => '../uducy_admin/Tpl\\Upload\\upload.html',
      1 => 1449503447,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26365665a3972788b3-88525975',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5665a39737101',
  'variables' => 
  array (
    'path' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5665a39737101')) {function content_5665a39737101($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Login/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con box-green">
                <div class="box-header">
                    <h4>公共上传文件页面</h4>
                </div>
               <form action="" method="post" enctype="multipart/form-data" onsubmit = "return uploadfile()">
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <td>
                                <div style="">
                                    <span>文件路径：<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
</span><br /><br />
                                    <input type="file" name="file" id="fileinput"> <input type = "submit" value="上传" ><br /><br />
                                </div>
                               
                            </td>
                        </tr>
                    </table>
                </div>
                </form>
            </div><!--/ con-->
            
            
            
        </div>    
    </div><!--/ container-->
    </div><!--/ wrap-->
<script type="text/javascript">
    function uploadfile(){
        var filename = $("#fileinput").val();
        alert($('form').lenth);
        var formData = new FormData($('form')[0]);
        $.ajax({
            type: "POST",
            url: "?s=Upload&a=uploadfile",
            enctype: 'multipart/form-data',
            xhr: function() {  // custom xhr
            myXhr = $.ajaxSettings.xhr();
                if(myXhr.upload){ // check if upload property exists
                    myXhr.upload.addEventListener('progress',progressHandlingFunction, false); // for handling the progress of the upload
                }
                return myXhr;
            },
            data:formData,
            // data: {
            //     file: filename
            // },
            success: function () {
                alert("Data Uploaded: ");
            }
        });
        return false;
    }
</script>
<?php echo $_smarty_tpl->getSubTemplate ('Login/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>