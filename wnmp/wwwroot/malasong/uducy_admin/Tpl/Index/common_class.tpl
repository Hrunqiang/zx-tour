<{include file=header.tpl}>
<{if $ac=='add' || $ac=='edit'}>
<div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con box-green">
                <form action="?c=c_class&a=<{$ac}>&sname=<{$sname}>" method='post'>
                <input type="hidden" name="add_time" value="<{$now}>"/>
                <input type="hidden" name="id" value="<{$id}>"/>
                <div class="box-header">
                    <h4>添加分类</h4>
                </div>
                <div class="box-content">
                    <table class="table-font" >
                        <tr>
                            <th class="w120">父类：</th>
                            <td>
                            <select name="pid" id="pid">
				            <option value="0">-----顶级分类-----</option>
				            <{$select}>
				         	</select>
	                            <!-- <input type="text" name="pid" value="<{$pid}>"/> -->
                            </td>
                        </tr>
                        <tr>
                            <th class="w120">分类名称：</th>
                            <td>
	                            <input type="text"  name="classname" class="textinput w270" value="<{$data.classname|escape:html}>" />
                            </td>
                        </tr>
                        <tr>
                            <th class="w120">分类简称：</th>
                            <td><input type="text" name="short_name" class="textinput w270" value="<{$data.short_name|escape:html}>" /></td>
                        </tr>
                        <tr>
                            <th>分类排序：</th>
                            <td><input name="orderid" type="text" id="orderid" class="textinput" value="<{$data.orderid|escape:html}>"  onkeyup="value=value.replace(/[^\d]/g,'') "/></td>
                        </tr>
                        <tr>
                            <th>分类模板：</th>
                            <td>
                            <select name="tpl_name">
                            <option value="01.tpl" <{if $data.tpl_name=='01.tpl'}>selected<{/if}>>横版</option>
                            <option value="02.tpl" <{if $data.tpl_name=='02.tpl'}>selected<{/if}>>竖版</option>
                            <option value="03.tpl" <{if $data.tpl_name=='03.tpl'}>selected<{/if}>>套版(订)</option>
                            <option value="04.tpl" <{if $data.tpl_name=='04.tpl'}>selected<{/if}>>新浪套版(通)</option>
                            <option value="05.tpl" <{if $data.tpl_name=='05.tpl'}>selected<{/if}>>腾讯微博版</option>
                            </select>
                            </td>
                        </tr>
                        <tr>
                        	<th>分类属性</th>
                        	<td><textarea name="attr" style="width:370px; float:left; height:200px;"><{$data.attr|escape:html}></textarea>
<div style="float:right;overflow:hidden;">
title:标题<br/>
title_url:标题链接(只在二级分类里有效)<br/>
update:更新日期<br/>
fxurl:分享url<br/>
fxsummary:分享内容<br/>
fxtitle:分享标题<br/>
fxpic:logo url<br/>
<font color=red>*注意</font>:请不用使用英文半角引号(双/单)
</div></td>
                        </tr>
                        <tr>
                        	<th>分类描述</th>
                        	<td><textarea name="describe" style="width:370px; height:200px;"><{$data.describe|escape:html}></textarea></td>
                        </tr>
                    </table>
                </div>
                
                <div class="box-footer">
                    <div class="box-footer-inner">
                    	<input type="submit" value="确定" /> 或 <a href="?c=c_class">取消</a>
                    </div>
                </div>
                </form>
            </div><!--/ con-->
            
        </div>    
    </div><!--/ container-->

</div>
<{elseif $ac =='list'}>
<div class="wrap">
    <div class="container">

        <div id="main">
            
            <div class="con">
            	
                  <div class="table">
                  	<div class="th">
                    	<div class="form">
                        <div class="fl">
                           <input type="button" onclick="window.location='?c=c_class&a=add'" value="添加一级分类" />
                              &nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                       
                        </div>
                    </div>
                    <form action='#' method='post'>
                    <table class="admin-tb" id="datatable">
                    <thead>
                        <tr>
                            <th>分类名称</th>
                            <th>分类简称</th>
                            <th >分类排序</th>
                            <th width="161">操作</th>
                        </tr>
					</thead>
					<{$html}>
					<!-- <tbody id="class_item">
						<tr  childindex="1">
	                    <td>分类名称</td>   
	                    <td>分类简称</td>
	                    <td rel="classname">分类排序</td>
	                    <td>
	                        [<a href="">修改</a>] &nbsp; [<a href="">添加下级分类</a>] &nbsp; [<a href="">删除</a>]
	                    </td>
	                    </tr>
					</tbody> -->
                    
                    
                    </table>
                    <div class="th">
                    	<div class="form">
                        <input type='hidden' name='commit' value='1' />
                       <!--  <input type='radio' name='action' value='del' checked />删除
                        <input type="submit" value="保存" />&nbsp;
                        &nbsp; -->
                        </div>
                    </div>
                    </form>
                </div>
            </div><!--/ con-->            
        </div>    
    </div><!--/ container-->
</div>
<script>//get_common_class_list();</script>
<{/if}>
<{include file=footer.tpl}>