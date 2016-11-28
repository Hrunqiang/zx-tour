<{include file=header.tpl}>
<{* 添加分类 *}>
<{if $action == 'add'}>
<div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con box-green">
                <form action="?c=class&a=add" method='post'>
                <div class="box-header">
                    <h4>添加分类</h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <th class="w120">分类名称：</th>
                            <td>
	                            <input type="text"  name="classnewname" class="textinput w270" />
                            </td>
                        </tr>
                        <tr>
                            <th class="w120">分类简称：</th>
                            <td><input type="text" name="indexname" class="textinput w270" /></td>
                        </tr>
                      
                       
                        <tr>
                            <th>分类排序：</th>
                            <td><input name="orderid" type="text" id="orderid" class="textinput" onkeyup="value=value.replace(/[^\d]/g,'') "/></td>
                        </tr>
                        
                        <tr>
                            <th>是否是网址大全：</th>
                            <td><label for="inindex1">是</label><input id="inindex1" type="radio" name='inindex' value="1" class="textinput w60" checked /><label for="inindex2">否</label><input id="inindex2" type="radio" name='inindex' value="0" class="textinput w60" /></td>
                        </tr>
                       
                   
                    </table>
                </div>
                
                <div class="box-footer">
                    <div class="box-footer-inner">
                    	<input type="submit" value="添加" /> 或 <a href="?c=class&a=index">取消</a>
                    </div>
                </div>
                </form>
            </div><!--/ con-->
            
        </div>    
    </div><!--/ container-->

</div><!--/ wrap-->
<!--   添加小分类-->
<{elseif $action == 'add1'}>
<div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con box-green">
                <form action="?c=class&a=add" method='post' enctype="multipart/form-data">

                <div class="box-header">
                    <h4>添加链接</h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <th class="w120">链接名称：</th>
                            <td>
	                            <input type="text" id="js_test_link" name="classnewname" class="textinput w270" />
	                            <span style="margin-left:10px;">链接颜色：</span><span id="js_link_color" style="margin-right:10px;"></span>
	                            <input id="js_test_input" name="color" type="hidden" value="" />
                            </td>
                        </tr>
                        <tr>
                            <th class="w120">链接简称：</th>
                            <td><input type="text" name="indexname" class="textinput w270" />如果添加已有块中的连接位置 ，则不需要填写</td>
                        </tr>
                        <tr>
                            <th class="w120"></th>
                            <td><font color=red>如果添加大分类 ，以下内容则不需要填写</font></td>
                        </tr>
                        <tr>
                            <th>url：</th>
                            <td><input type="text" name="url" class="textinput w270" />如果添加块则不需要填写</td>
                        </tr>
                        <tr>
                            <th>图片上传：</th>
                            <td><input type="file" name="file" id='file'/>可选(暂时用在友情链接)</td>
                        </tr>
                        <tr>
                            <th>排序：</th>
                            <td><input name="orderid" type="text" id="orderid" class="textinput" onkeyup="value=value.replace(/[^\d]/g,'') "/></td>
                        </tr>
                        
                        <tr>
                            <th>是否显示：</th>
                            <td><label for="inindex1">是</label><input id="inindex1" type="radio" name='inindex' value="1" class="textinput w60" checked /><label for="inindex2">否</label><input id="inindex2" type="radio" name='inindex' value="0" class="textinput w60" /></td>
                        </tr>
                       
                        <tr>
                            <th  style="vertical-align:top;">所属的分类是：</th>
                            <td>
                        	<input id="js_submit_classid" type="hidden" name="classid"  />
                        	<div id="cate" style="height:30px; line-height:30px;">您选择的分类：<span id="js_link_text_span"></span></div>
                            <div style="color:red">提示：若不选择分类，则默认选择添加块。</div>
                            <div id="cate_list">
                            <table>
								<tr id="js_cate_list">
                                	<td index="0">
                                    	<ol>
                                        <{foreach from=$class_list item=class}>
                                            <li classid="<{$class.id}>"><{$class.classname}></li>
                                        <{/foreach}>
                                        </ol>
                                    </td>
                                </tr>
                            </table>
                            </div>                          
                            <script>
                            $(document).ready(function(){
                            	$("#js_cate_list ol li").each(function(i){  
                            		                                    
                            		$(this).bind("click",function(){
                            			//alert($(this).html());  
                                		var classId = $(this).attr('classid');
                            			$("#js_submit_classid").val(classId);
                            			$("#js_link_text_span").html($(this).html());
                            		});
                        		});
                             })
                            </script>
                            
                            </td>
                        </tr>
                    </table>
                </div>
                
                <div class="box-footer">
                    <div class="box-footer-inner">
                    	<input type="submit" value="添加" /> 或 <a href="?c=class&a=index">取消</a>
                    </div>
                </div>
                </form>
            </div><!--/ con-->
            
        </div>    
    </div><!--/ container-->

</div><!--/ wrap-->
<{* 修改分类 *}>
<{elseif $action == 'edit'}>
<div class="wrap">
    <div class="container">
        
        <div id="main">
  
            
            <div class="con box-green">
                <form action="?c=class&a=edit" method='post'>
                  <input name="id" type="hidden"  value="<{$info.id}>" />
                  <input name="action" type="hidden"  value="<{$action}>" />
 
                <div class="box-header">
                    <h4>编辑分类</h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <th class="w120">分类名称：</th>
                            <td>
                            	<input type="text" name="classnewname"  value="<{$info.classname}>" class="textinput w270" />
                            </td>
                        </tr>
                       
                        <tr>
                            <th class="w120">分类简称：</th>
                            <td><input type="text" name="indexname" value="<{$info.short_name}>" class="textinput w270" />如果添加已有块中的连接位置 ，则不需要填写</td>
                        </tr>
                        
                         <tr>
                            <th>分类排序：</th>
                            <td><input name="orderid" type="text" id="orderid" value="<{$info.orderid}>" class="textinput" onkeyup="value=value.replace(/[^\d]/g,'') "/></td>
                        </tr>
                        
                        <tr>
                            <th>是否是网址大全：</th>
                            <td><label for="inindex1">是</label><input id="inindex1" type="radio" name='inindex' <{if $info.istab==1}>checked<{/if}> value="1" class="textinput w60" /><label for="inindex2">否</label><input id="inindex2" <{if $info.istab==0}>checked<{/if}> type="radio" name='inindex' value="0" class="textinput w60" /></td>
                        </tr>
                    </table>
                </div>
                <div class="box-footer">
                    <div class="box-footer-inner">
                    	<input type="submit" value="修改" /> 或 <a href="?c=class&a=index">取消</a>
                    </div>
                </div>
                </form>
            </div><!--/ con-->
            
        </div>    
    </div><!--/ container-->

</div><!--/ wrap-->
<{elseif $action == 'edit1'}>
<div class="wrap">
    <div class="container">
        
        <div id="main">
  
            
            <div class="con box-green">
                <form action="?c=class&a=edit" method='post' enctype="multipart/form-data">
                  <input name="id" type="hidden"  value="<{$info.id}>" />
                  <input name="action" type="hidden"  value="<{$action}>" />
                                                   <input name="cid" type="hidden"  value="<{$info.cid}>" />
                <div class="box-header">
                    <h4>编辑链接</h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <th class="w120">链接名称：</th>
                            <td>
                            	<input type="text" name="classnewname" id="js_test_link" style="color:<{$info.color|default:'#000'}>;" value="<{$info.classname}>" class="textinput w270" />
                           		<span style="margin-left:10px;">链接颜色：</span><span id="js_link_color" style="margin-right:10px;"></span>
	                            <input id="js_test_input" name="color" type="hidden" value="<{$info.color}>" />
                            </td>
                        </tr>
                       
                        
                        <tr>
                            <th>content：</th>
                            <td><input type="text" name="indexname" value="<{$info.content}>" class="textinput w270" /></td>
                        </tr>
                        <tr>
                            <th>url：</th>
                            <td><input type="text" name="url" value="<{$info.url}>" class="textinput w270" />如果添加块则不需要填写</td>
                        </tr>
						<tr>
                            <th>图片上传：</th>
                            <td><input type="file" name="file"   id='file'/>已存在图片地址(<{$info.imgurl}>)</td>
                        </tr>

                        <tr>
                            <th>是否显示：</th>
                            <td><label for="inindex1">是</label><input id="inindex1" type="radio" name='inindex' <{if $info.isdisplay==1}>checked<{/if}> value="1" class="textinput w60" /><label for="inindex2">否</label><input id="inindex2" <{if $info.isdisplay==0}>checked<{/if}> type="radio" name='inindex' value="0" class="textinput w60" /></td>
                        </tr>
                        
                       
                        <tr>
                            <th  style="vertical-align:top;">所属分类：</th>
                            <td>
                        	<input id="js_submit_classid" type="hidden" name="classid" value="<{$info.cid}>" />
                        	

							<div style="clear:both; overflow:hidden; height:0"></div>

                                <div id="cate" style="height:30px; line-height:30px;" class="clearfix">您选择的分类：<span id="js_link_text_span"><{$info.cname}></span></div>
                                <div id="cate_list">
                                <table>
                                    <tr id="js_cate_list">
                                        <td index="0">
                                            <ol>
                                            <{foreach from=$class_list item=class}>
                                                <li classid="<{$class.id}>"><{$class.classname}></li>
                                            <{/foreach}>
                                            </ol>
                                        </td>
                                    </tr>
                                </table>
                                </div>
                                <script>
                            $(document).ready(function(){
                            	$("#js_cate_list ol li").each(function(i){  
                            		                                    
                            		$(this).bind("click",function(){
                            			//alert($(this).html());  
                                		var classId = $(this).attr('classid');
                            			$("#js_submit_classid").val(classId);
                            			$("#js_link_text_span").html($(this).html());
                            		});
                        		});
                             })
                            </script>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="box-footer">
                    <div class="box-footer-inner">
                    	<input type="submit" value="修改" /> 或 <a href="?c=class&a=index">取消</a>
                    </div>
                </div>
                </form>
            </div><!--/ con-->
            
        </div>    
    </div><!--/ container-->

</div><!--/ wrap-->
<{* 分类列表 *}>
<{else}>
<div class="wrap">
    <div class="container">

        <div id="main">
            
            <div class="con">
            	
                  <div class="table">
                  	<div class="th">
                    	<div class="form">
                        <div class="fl">
                           <input type="button" onclick="window.location='?c=class&a=add&action=add'" value="添加分类" />
                              &nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                       
                        </div>
                    </div>
                    <form action='?c=class&a=delete' method='post'>
                    <table class="admin-tb" id="datatable">
                    <thead>
                        <tr>
                            <th width="41" class="text-center">选择</th>
                            <th>排序</th>
                            <th>是否是网址大全</th>
                            <th >分类简称</th>
                            <th >分类名称</th>
                            <th width="161">操作</th>
                        </tr>
					</thead>
                    <{foreach from=$class_list item=class}>
                    <tr classid="<{$class.id}>" childindex="1">
                    <td class="text-center"><input name="remv[<{$class.id}>]" type="checkbox" rel="del"  /></td>
                    <td><input type="text" name="order[<{$class.id}>]" class="textinput" tabindex="11" value="<{$class.orderid}>" /></td>   
                    <td><{if $class.istab==1}>是<{else}>否<{/if}></td>
                    <td rel="classname"><a href="?c=class&a=show_list&id=<{$class.id}>"><{$class.short_name}></a></td>
                    <td><{$class.classname}></td>
                    <td>
                        [<a href="?c=class&a=edit&id=<{$class.id}>&action=edit">修改</a>] &nbsp;
                    </td>
                    </tr>
                    <{/foreach}>
                    
                    </table>
                    <div class="th">
                    	<div class="form">
                        <input type='hidden' name='commit' value='1' />
                        <input type='radio' name='action' value='del' checked />删除
                        <input type="submit" value="保存" />&nbsp;
                        &nbsp;
                        </div>
                    </div>
                    </form>
                </div>
            </div><!--/ con-->            
        </div>    
    </div><!--/ container-->

</div><!--/ wrap-->
<{/if}>
<div id="js_search_msg" class="js_search_msg" style="display:none;"></div>
<style type="text/css">
	.js_search_msg{ position:absolute; background:#fff; border:1px solid #CEDEAE;}
	.js_search_msg li{ padding:3px 5px; cursor:pointer;}
	.js_search_msg li.active{ background:#EBF4D8}
</style>
<{if $action == 'add1' || $action=='edit1'}>
<link href="static/datapicker/css/jquery-ui-1.7.1.custom.css" rel="stylesheet" type="text/css"  />
<script type="text/javascript" src="static/qrx/qrxpcom.js"></script>
<script type="text/javascript" src="static/qrx/qrcpicker.js"></script>
<script type="text/javascript">
$(document).ready(function(){

	var colorstr = "";
	colorstr = document.getElementById("js_test_input").value;

	var cp = new QrColorPicker(colorstr);
	cp.onChange = function(color){
		document.getElementById("js_test_link").style.color = color;
		document.getElementById("js_test_input").value = color;
	}
	cp.onSelect = function(color){
		document.getElementById("js_test_link").style.color = color;
		document.getElementById("js_test_input").value = color;
	}
	document.getElementById("js_link_color").innerHTML = cp.getHTML();
});
</script>
<{/if}>
<{include file=footer.tpl}>
