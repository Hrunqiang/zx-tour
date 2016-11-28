<{include file=header.tpl}>
<div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con box-green">
                <form action="?c=orderp&a=edit" method='post' onsubmit="return sub();">
                <div class="box-header">
                    <h4>设置排序</h4>
                </div>
                <div class="box-content">
                    <table class="table-font" style="width:680px;">
                        <tr>
                            <th class="w120">选择提供商：</th>
                            <td>
                            <select name="providername" id="providername">
				            <option value="0">-----选择提供商-----</option>
				            <{foreach from=$provider item=i}>
				            <option value="<{$i.providername}>"><{$i.providername}></option>
				            <{/foreach}>
				         	</select>
                            </td>
                        </tr>
                        <tr>
                            <th class="w120">排序号：</th>
                            <td>
	                            <input type="text" name="orderId" id="orderId"  value="" onkeyup="value=value.replace(/[^\d]/g,'') " /> &nbsp;&nbsp;<font color=red>*</font>&nbsp; 只能是数字否则失败
                            </td>
                        </tr>
                    </table>
                </div>
                
                <div class="box-footer">
                    <div class="box-footer-inner">
                    	<input type="submit" value="确定提交" />
                    </div>
                </div>
                </form>
            </div><!--/ con-->
            <script>
            function sub(){
            	var pname	= $('#providername').val();
            	var orderId	= $('#orderId').val();
            	if(pname=='0' || orderId=='' || orderId=='0'){
            		alert('请填写必要参数。');
            		return false;
            	}
            }
            </script>
        </div>    
    </div><!--/ container-->

</div>
<script>

</script>

<{include file=footer.tpl}>