<{include file='header.tpl'}>
<div class="wrap">
            <div class="con box-green">
                <div class="box-header">
                    <h4>公共上传文件页面</h4>
                </div>
               <form action="?c=upload&a=plug_upload&toobj=<{$toobj}>&dir=<{$dir}>&new_name=<{$new_name}>" method="post" enctype="multipart/form-data">
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <td>
                                <div style=" padding-left:50px">
                                    <span>文件路径：<{$path}><{if $path}><script>window.opener.document.getElementById('<{$toobj}>').value="<{$path}>";window.close();</script><{/if}></span><br /><br />
                                    <input type="file" name="myfile"> <input type = "submit" value="上传"><br /><br />
                                </div>
                               
                            </td>
                        </tr>
                    </table>
                </div>
                </form>
            </div><!--/ con-->
    </div><!--/ wrap-->
<{include file='footer.tpl'}>