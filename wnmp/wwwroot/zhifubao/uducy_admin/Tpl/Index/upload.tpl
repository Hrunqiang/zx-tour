<{include file='header.tpl'}>
<div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con box-green">
                <div class="box-header">
                    <h4>公共上传文件页面</h4>
                </div>
               <form action="?c=upload" method="post" enctype="multipart/form-data">
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <td>
                                <div style=" padding-left:480px">
                                    <span>文件路径：<{$path}></span><br /><br />
                                    <input type="file" name="myfile"> <input type = "submit" value="上传"><br /><br />
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
<{include file='footer.tpl'}>