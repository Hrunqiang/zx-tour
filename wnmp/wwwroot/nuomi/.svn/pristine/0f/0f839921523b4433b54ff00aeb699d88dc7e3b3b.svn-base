<{include file=header.tpl}>
<div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con box-green">
                <form name="makehtmlform" action="?c=make_html&action=make" method="post">
                	<input type="hidden" name="" value="" id="makehtml" />
                </form>
                <div class="box-header">
                    <h4>选择要生成的页面</h4>
                </div>
                
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <td>
                                <div style=" padding-left:480px">
                                    <button type="button" name='make[index]' onclick="Make(this)" class="button-02" >生成首页</button><br /><br />
                                    <button type="button" name='make[allsite]' onclick="Make(this)"  class="button-02" >生成网址大全</button><br /><br />
                                    <button type="button" name='make[euro2012]' onclick="Make(this)"  class="button-02" >生成奥运会专题</button><br /><br />
                                    <button type="button" name='make[tab]' onclick="Make(this)"  class="button-02" >生成四个tab首页</button><br /><br />
                                    <button type="button" name='make[getimages]' onclick="Make(this)"  class="button-02" >抓取首页图片</button><br /><br />
                                    <button type="button" name='make[synchro]' onclick="Make(this)"  class="button-02" >同步前端程序</button><br /><br />
                                    <button type="button" name='make[dict]' onclick="Make(this)"  class="button-02" >同步词典,停词</button><br /><br />
                                    <button type="button" name='make[flush]' onclick="Make(this)"  class="button-02" >清空memcache</button><br /><br />
                                </div>
                                <script type="text/javascript">
									function Make(e){
										var name = e.name;
                                		var makehtml = document.getElementById('makehtml');
										var form = document.makehtmlform;
										makehtml.name = name;
										makehtml.value = 1;
										e.disabled = true;
										form.submit();
									}
                                </script>
                            </td>
                        </tr>
                    </table>
                </div>
                
            </div><!--/ con-->
            
            
            
        </div>    
    </div><!--/ container-->
    </div><!--/ wrap-->
<{include file=footer.tpl}>
