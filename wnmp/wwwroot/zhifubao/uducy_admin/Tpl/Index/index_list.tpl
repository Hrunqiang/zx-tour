<{include file="header.tpl"}>
<div class="wrap">
    <div class="container">

        <div id="main">
                <div class="th">
                    	<div class="form fl">
                        <label for="alltopic">按分类查看</label>&nbsp;
                        <select id="alltopic" onchange=window.location='?c=list&a=show_index&showIndex=<{$cid}>&classid='+this.value>
                           <option  value='0' >所有分类</option>
                           <option <{if $classid==1}>selected<{/if}> value='1'>电影</option>
                           <option <{if $classid==2}>selected<{/if}> value='2'>电视剧</option>
                           <option <{if $classid==3}>selected<{/if}> value='3'>动漫</option>
                           <option <{if $classid==4}>selected<{/if}> value='4'>综艺</option>
                        </select>&nbsp;
                        </div>
                        &nbsp;&nbsp;&nbsp;
                    </div>
            <div class="con">
            	<form action="?c=list&a=seave_order" method="post">
                    <input type="hidden" name="cid" value="<{$cid}>"/>
                     <input type="hidden" name="showIndex" value="<{$showIndex}>"/>
                  <div class="table">
                    <table class="admin-tb" id="js_data_source">
                    <tr>
                        <th>排序</th>
                        <th width="170">名称</th>            	
                        <th width="120">语言</th>
                        <th width="180">最后编辑时间</th>
                        <th width="80">类型</th>
                        <th >导演</th>   
                        <th width="80">属性修改</th>                      
                    </tr>
                    <{foreach from=$list item=parent}>
                    <tr>
                    
                        <td><input type="text" name="order[<{$parent.id}>]" class="textinput" tabindex="11" value="<{$parent.indexOrderId}>" /></td>
                        <td><a href="?c=list&a=edit&id=<{$parent.id}>&cid=<{$parent.class}>"><{$parent.title}></a></td>                 
                        <td><{$parent.area}></td>
                        <td><{if $parent.editTime}><{$parent.editTime|date_format:"%Y-%m-%e %H:%M:%S"}><{else}>无记录<{/if}></td>
                        <td><{$parent.type}></td>
                        <td><{$parent.director}></td>          
                        <td><a href="?c=list&a=edit&id=<{$parent.id}>&cid=<{$parent.class}>" >修改</a></td>
                    </tr>
                   <{/foreach}>
                    </table>

                    <div class="th">
                        
                    	<div class="form">
                        <input type ="submit" value="保存">
                        </div>
                    </div>
                </div>
				</form>
            </div><!--/ con-->
        </div>    
    </div><!--/ container-->
    </div><!--/ wrap-->
<{include file="footer.tpl"}>
