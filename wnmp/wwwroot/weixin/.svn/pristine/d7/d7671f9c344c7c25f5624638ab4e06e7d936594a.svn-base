<{include file="header.tpl"}>
<div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con box-green">
                <form action='?c=class&a=import' method='post'>
                  <div class="table">
                                     <div class="th">
                    	<div class="form fl">
                        <label for="alltopic">分类:</label>&nbsp;
                        <select id="cid" name='classid'>
                            <option value='0' >所有分类</option>
                            <{foreach from = $class_list item = i}>
                                <option <{if $class_id == $i.id}> selected="selected"<{/if}> value='<{$i.id}>'><{$i.classname}></option>
                            <{/foreach}>
                        </select>&nbsp;
                        </div>
                    </div>
                  	<div class="th">
                    	<div class="form">
                        </div>
                    </div>
                  <style type="text/css">
                  	table.admin-tb tr:hover { background-color:#FFFFCC;}
                  </style>
                    <div class="box-header">
                    <h4>批量导入网址</h4>
                </div>
                    <div class="box-content" style="padding-left:50px">
                           <p style="padding:5px;width:450px; margin:10px 0; border:1px solid #FFB340; background:#FFDAA0">
                        	直接粘贴html代码，程序会自动匹配网址
                        </p>
                        
<textarea name='sites' style="width:450px; height:300px; font-family:Arial, Helvetica, sans-serif"></textarea>
                    </div>

                    <div class="th">
                    	<div class="form">
                        <div class="fl">
                           <input type="submit" value="确定" />
                        </div>
                        </div>
                    </div>
                </div>
				</form>
            </div><!--/ con-->
        </div>    
    </div><!--/ container-->
</div><!--/ wrap-->

<{include file="footer.tpl"}>
