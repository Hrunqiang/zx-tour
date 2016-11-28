<{include file=header.tpl}>
<div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con box-green">
                <form action="?c=list&a=edit_palyurl" method="post" enctype="multipart/form-data">
                <input type="hidden" name="cid" value="<{$cid}>"/>
                <div class="box-content">
                    <table class="table-font" style="width:780px;">
                      <tr>
                            <th class="w120">影片名称：</th>
                            <td><{$list.title}></td>
                        </tr>
                    <{foreach from=$list item = parent key= k}>
                      <{if $k != 'title'}>
                        <tr>
                            <th class="w120"><{$k}>：</th>
                            <td >
                            <{foreach from=$parent item =v}>
                            <input type="text"  name="url[<{$v.id}>]" value="<{$v.url}>" class="textinput" style="width:560px;" /><br>
                            <{/foreach}>
                            </td>
                        </tr>
                        <{/if}>
                     <{/foreach}>
                    </table>
                </div>
                <div class="box-footer">
                    <div class="box-footer-inner">
                    	<input type="submit" value="提交" />或 <a href="?c=list&cid=<{$cid}>">取消</a>
                    </div>
                </div>
                </form>
            </div>
        </div>    
    </div><!--/ container-->

</div><!--/ wrap-->
<{include file=footer.tpl}>
