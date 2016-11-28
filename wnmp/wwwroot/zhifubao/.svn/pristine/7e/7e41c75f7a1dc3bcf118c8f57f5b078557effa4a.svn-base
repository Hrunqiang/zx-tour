<{include file="header.tpl"}>
<div class="wrap">
    <div class="container">

        <div id="main">
            
            <div class="con">
            	<form action="?c=class&a=show_list" method="post">
                  <div class="table">
                    <div class="th">
                        站点搜索: <input type="text" value="<{$keyword}>" id="keyword" name="keyword"/>
                          <select name="search_type">
                            <option value="name">名称</option>
                          </select>
                          <input type="submit" value="搜索" />
                    </div>
                  </div>
                </form>
            	<form action="?c=class&a=class_seave" method="post">
                 
                  <div class="table">
                  	<div class="th">
                    	<div class="form fl">
                        <input type="button" value="添加" onclick="window.location='?c=class&a=add&action=add1'"/>&nbsp;
                        <label for="alltopic">按分类查看</label>&nbsp;
                        <select id="alltopic" onchange=window.location='?c=class&a=show_list&id='+this.value>
                            <option value='0' >所有分类</option>
                            <{foreach from = $class_list item = i}>
                                <option <{if $class_id == $i.id}> selected="selected"<{/if}> value='<{$i.id}>'><{$i.classname}></option>
                            <{/foreach}>
                        </select>&nbsp;
                        </div>
                        &nbsp;&nbsp;<a href="?c=class&a=show_list" style="color:white"><b>查看所有分类</b></a>&nbsp;
                    </div>
                    <table class="admin-tb" id="js_data_source">
                    <tr>
                    	<th width="41" class="text-center">删除</th>     
                        <th width="70">排序</th>            	
                        <th width="280">网站</th>
                        <th width="100">content</th>
                        <th width="180">网址</th>
                        <th width="120">分类</th>
                        <th width="80">属性修改</th>                      
                    </tr>
                    <{foreach from=$list item=i name=n}>
                    <tr>
                        <td class="text-center"><input rel="del" type="checkbox" name="remv[<{$i.id}>]"  /></td>
                        <td><input type="text" name="order[<{$i.id}>]" class="textinput" tabindex="11" value="<{$i.orderid}>" /></td>                 
                        <td><a href="?c=class&a=edit&id=<{$i.id}>&cid=<{$i.cid}>&action=edit1"><{$i.name}></a></td>
                        <td><a href="?c=class&a=edit&id=<{$i.id}>&cid=<{$i.cid}>&action=edit1"><{$i.content}></a></td>
                        <td><div style="width:180px;" class="hideText" title="<{$i.url}>"><{$i.url}></div></td>
                        <td><a href="?c=class&a=show_list&id=<{$i.cid}>"><{$i.classname}></a></td>
                         <td><a href="?c=class&a=edit&id=<{$i.id}>&cid=<{$i.cid}>&action=edit1" >修改</a></td>
                    </tr>
                    <{/foreach}>
                    </table>

                    <div class="th">
                        <{if $pages}>
                        <div class="pages">
                            <{if $pages.prev gt -1}>                            
                            <a href="<{$page_url}>&start=<{$pages.prev}>">&laquo; 上一页</a>
                            <{else}>
                            <span class="nextprev">&laquo; 上一页</span>
                            <{/if}>
                            <{foreach from=$pages key=k item=i}>
                                <{if $k ne 'prev' && $k ne 'next'}>
                                    <{if $k eq 'omitf' || $k eq 'omita'}>
                                    <span>…</span>
                                    <{else}>
                                        <{if $i gt -1}>
                                        <a href="<{$page_url}>&start=<{$i}>"><{$k}></a>
                                        <{else}>
                                        <span class="current"><{$k}></span>                                        
                                        <{/if}>
                                    <{/if}>   
                                <{/if}>                             
                            <{/foreach}>
                            <{if $pages.next gt -1}>                            
                            <a href="<{$page_url}>&start=<{$pages.next}>">下一页 &raquo;</a>
                            <{else}>
                            <span class="nextprev">下一页 &raquo;</span>
                            <{/if}>
                        </div>                
                        <{/if}>
                        
                    	<div class="form">
                        <input value="提交修改" type="submit"/>&nbsp;
                        </div>
                    </div>
                </div>
				</form>
            </div><!--/ con-->
        </div>    
    </div><!--/ container-->
    </div><!--/ wrap-->
    <script type="text/javascript">
    	$(document).ready(function(){

			$("#js_data_source").find("input[rel='del']").each(function(i){
				$(this).bind("click",function(){
					var tr = $(this).parent().parent();
					var input = tr.find("input[rel='dis']");
					if(this.checked){
						$(input).attr("checked","");
						$(input).attr("disabled","disabled");
					}
					else{
						$(input).attr("disabled","");
					}
				});								
			});
			$("#js_data_source").find("input[rel='dis']").change(function(){
                if ($(this).next('input[type="hidden"]').val() == 1) $(this).next('input[type="hidden"]').val(0);
                else $(this).next('input[type="hidden"]').val(1);
			});

								   
		});
    </script>
<{include file="footer.tpl"}>