<{include file='header.tpl'}>

<body id="main_page">

<div class="wrap">
    <div class="container">
        
        <div id="main">
            
            
            <div class="con box-green">
                <form action="<{$sys.subform}>" method="post" enctype="multipart/form-data">
<div class="box-header">
                    <h4>修改用户权限: <{$data.name}></h4>
                </div>
                <style type="text/css" >
                	.table-font td { width:100px;}
                </style>
                <div class="box-header">
                    <h4>
                        <table class="table-font" style="width:1000px; margin-left:5px;">
                            <tr>
                           	  <td><input type="checkbox" id="checkbox_0" rel="0" onClick="checkSameRel(this);" /> <label for="checkbox_0">管理首页</label></td>
                                <td><input type="checkbox" id="checkbox_1" rel="1" onClick="checkSameRel(this);" /> <label for="checkbox_1">网址管理</label></td>
                                <td><input type="checkbox" id="checkbox_2" rel="2" onClick="checkSameRel(this);" /> <label for="checkbox_2">影片管理</label></td>
                                <td><input type="checkbox" id="checkbox_3" rel="3" onClick="checkSameRel(this);" /> <label for="checkbox_3">电视台管理</label></td>
                                <td><input type="checkbox" id="checkbox_5" rel="5" onClick="checkSameRel(this);" /> <label for="checkbox_5">静态生成</label></td>
                                <td><input type="checkbox" id="checkbox_6" rel="6" onClick="checkSameRel(this);" /> <label for="checkbox_6">系统管理</label></td>
                            </tr>
                        </table>
                    </h4>
                </div>
                <script type="text/javascript">
                	var checkSameRel = function(ele){
						$("#js_item_table").find("input[rel='"+$(ele).attr("rel")+"']").each(function(i){
							this.checked = ele.checked;
						});
					}
                </script>
                <div class="box-content">
                    <table class="table-font" style="width:1000px;" id="js_item_table">
                        <tr>
	                        <td><label><input rel="0" name="auth[]" type="checkbox" id="checkbox_5" value="make_html" <{if $auth.make_html}> checked <{/if}> />一键生成</label></td>
	                        <td><label><input rel="1" name="auth[]" type="checkbox" id="checkbox_5" value="class" <{if $auth.class}> checked <{/if}> />分类管理</label></td>
                            <td><input rel="2" name="auth[]" type="checkbox" id="checkbox_5" value="list" <{if $auth.list}> checked <{/if}> />首页管理</td>
                            <td></td>
                            <td><input rel="5" name="auth[]" type="checkbox" id="checkbox_5" value="make_html" <{if $auth.make_html}> checked <{/if}> />静态生成</td>
                            <td><input rel="6" name="auth[]" type="checkbox" id="checkbox_5" value="member" <{if $auth.member}> checked <{/if}> />系统管理</td>
                        </tr>
                        <tr>
                        	<td><label><input rel="0" name="auth[]" type="checkbox" id="checkbox_5" value="upload" <{if $auth.upload}> checked <{/if}> />公共上传</label></td>
                        	<td><label><input rel="0" name="auth[]" type="checkbox" id="checkbox_5" value="c_class" <{if $auth.c_class}> checked <{/if}> />内容分类管理</label></td>
                        	<td><label><input rel="0" name="auth[]" type="checkbox" id="checkbox_5" value="orderp" <{if $auth.orderp}> checked <{/if}> />提供商排序</label></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                        	<td><label><input rel="0" name="auth[]" type="checkbox" id="checkbox_5" value="data" <{if $auth.data}> checked <{/if}> />数据管理</label></td>
                        	<td></td>
                            <td></td>
                            <td>&nbsp;</td>
                            <td>&nbsp;</td>
                            <td></td>
                        </tr>
                        <tr>
                        <td><label><input rel="0" name="auth[]" type="checkbox" id="checkbox_5" value="update" <{if $auth.update}> checked <{/if}> />快速更新</label></td>
                        <td><label></td>
                            <td></td>
                            <td>&nbsp;</td>
                            <td> </td>
                            <td></td>
                        </tr>
                        <tr>
	                        <td> </td>
	                        <td></td>
                            <td></td>
                            <td>&nbsp;</td>
                            <td> </td>
                            <td></td>
                        </tr>
                    </table>
                </div>
                <div class="box-footer">
                    <div class="box-footer-inner">
                    	<input type="submit" value="确定" /> 或 <a href="<{$sys.goback}>">取消</a>
                      <input name="step" type="hidden" id="step" value="2">
                      <input name="name" type="hidden" id="name" value="<{$data.name}>">
                    </div>
                </div>
                </form>
            </div><!--/ con-->
            
            
            
        </div>    
    </div><!--/ container-->

</div>
<{include file='footer.tpl'}>
