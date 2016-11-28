<{include file="header.tpl"}>
<div class="wrap">
    <div class="container">

        <div id="main">
            
            <div class="con">
            	<form action="?c=list" method="post">
            	<input type="hidden" name="cid" value="<{$cid}>">
                  <div class="table">
                     <div class="th">
                        影片搜索: <input type="text" value="<{$keyword}>" id="keyword" name="keyword"/>
                         
                          <input type="submit" value="搜索" />
                     <a href="?c=list&a=add" style="margin-left:50px;color:red"target = "_self" > 添加影片</a>
               &nbsp;&nbsp;&nbsp;  按分类查找   <select name="type" onchange="window.location='?c=list&cid=<{$cid}>&type='+this.value+'&keyword=<{$keyword}>'">
                            <option   value="0">全部</option>
                             <option <{if $type==1}> selected<{/if}>  value="1">正片</option>
                              <option <{if $type==2}> selected<{/if}>  value="2">预告</option>
                               <option <{if $type==3}> selected<{/if}>  value="3">花絮</option>
                          </select>  
                    </div>
                                   
                  </div>
                </form>

            	<form action="?c=list&a=delete" method="post">
                    <input type="hidden" name="cid" value="<{$cid}>"/>
                  <div class="table">
                    <table class="admin-tb" id="js_data_source">
                    <tr>
                    	<th width="41" class="text-center">删除</th>      
                        <th width="170">名称</th>            	
                        <th width="120">语言</th>
                        <th width="180">最后编辑时间</th>
                        <th width="80">类型</th>
                        <th >导演</th>
                        <th>播放地址修改</th> 
                        <th>快速排序</th>     
                        <th width="80">属性修改</th>                      
                    </tr>
                    <{foreach from=$list item=parent}>
                    <tr>
                    
                        <td class="text-center"><input rel="del" type="checkbox" name="delete[]" value="<{$parent.id}>"/></td>
                        <td><a href="?c=list&a=edit&id=<{$parent.id}>&cid=<{$cid}>"><{$parent.title}></a></td>                 
                        <td><{$parent.area}></td>
                        <td><{if $parent.editTime}><{$parent.editTime|date_format:"%Y-%m-%e %H:%M:%S"}><{else}>无记录<{/if}></td>
                        <td><{$parent.type}></td>
                        <td><{$parent.director}></td>
                        <td><a href="?c=list&a=edit_palyurl&id=<{$parent.id}>&cid=<{$cid}>" >修改</a></td>  
                        <td><a href="?c=list&a=edit_order&id=<{$parent.id}>&cid=<{$cid}>&type=top" >置顶</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="?c=list&a=edit_order&id=<{$parent.id}>&cid=<{$cid}>&type=buttom" >置低</a><span class="update_order"  info="<{$parent.id}>|kn_info|orderId|id"><{$parent.orderId}></span></td>              
                        <td><a href="?c=list&a=edit&id=<{$parent.id}>&cid=<{$cid}>" >修改</a></td>
                    </tr>
                   <{/foreach}>
                    </table>

                    <div class="th">
                        <{if $page}>
                        <div class="pages">
							<{$page}>
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
  
<{include file="footer.tpl"}>
