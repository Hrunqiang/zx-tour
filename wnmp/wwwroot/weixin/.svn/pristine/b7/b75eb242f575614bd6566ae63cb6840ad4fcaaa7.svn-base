<{include file=header.tpl}>
<script>
function txtn_change(obj){
	var href	= window.location.href;
	if(obj.value==''){
		return false;
	}else{
		var value	= obj.value;
	}
	if(href.indexOf('txtn')>-1){
		var href	= href.replace(/txtn=[a-z0-9]+/,'txtn='+value);
		window.location.href	= href;
	}else{
		window.location.href=href+'&txtn='+obj.value;
	}
}
</script>
<div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con box-green">
                <form action="?c=data&a=search" method="post" onsubmit="return check();">
                <div class="box-header">
                    <h4>搜索优化</h4>
                </div>
                <div class="box-content">
                    <table class="table-font" id="mytable">
                        <tr>
                            <th class="w120">选择优化项：</th>
                            <td>
                            	<select name='txtn' onchange="return txtn_change(this);">
                            		<option value=''>选择优化项</option>
                            		<option value='stop' <{if $txtn=='stop'}>selected<{/if}>>停词</option>
                            		<option value='similar'<{if $txtn=='similar'}>selected<{/if}>>近义词</option>
                            	</select>
                            </td>
                        </tr>
                        <tr>
                            <th class="w120">内容：</th>
                            <td><textarea name="data" style="width:450px;height:300px;"><{$data}></textarea></td>
                        </tr>
                        <tr>
                        	<th class="w120">&nbsp;</th>
                        	<td colspan="1" style="text-align:left;"><input type="submit" value="确定"/></td>
                        </tr>
                        </table>
                        </div>
                      </form>
                  </div>
           </div>
     </div>
</div>
<{include file=footer.tpl}>