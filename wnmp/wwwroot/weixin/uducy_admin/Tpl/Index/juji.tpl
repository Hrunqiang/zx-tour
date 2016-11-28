<{include file=header.tpl}>
<div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con box-green">
                <form action="?c=orderp&a=juji_ctl" method='post' onsubmit="return sub();">
                <div class="box-header">
                    <h4>聚集管理</h4>
                </div>
                <div class="box-content">
                    <table class="table-font" style="width:680px;">
                    	<tr>
                            <th class="w120">影片id：</th>
                            <td>
	                            <input type="text" name="infoId" id="infoId"  value="" onkeyup="value=value.replace(/[^\d]/g,'') " /> &nbsp;&nbsp;<font color=red>*</font>&nbsp; 只能是数字否则失败
                            </td>
                        </tr>
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
                            <th class="w120">集数：</th>
                            <td>
	                            <input type="text" name="jishu" id="jishu"  value="" onkeyup="value=value.replace(/[^\d]/g,'') " /> &nbsp;&nbsp;<font color=red>*</font>&nbsp; 只能是数字否则失败
                            </td>
                        </tr>
                        <tr>
                            <th class="w120">播放地址：</th>
                            <td>
	                            <input type="text" name="playurl" id="playurl"  value="" style="width:580px"/>
                            </td>
                        </tr>
                    </table>
                </div>
                
                <div class="box-footer">
                    <div class="box-footer-inner">
                    	<input type="submit" name='sub' value="确定添加" />
                    	<input type="submit" name='sub' title="如果删除,播放地址可以不填" value="确定删除" />
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