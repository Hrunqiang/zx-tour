<{include file=header.tpl}>
<div class="wrap">
    <div class="container">
        <div id="main">
        <{if $ac==0}>
            <div class="con box-green">
                <form action="?c=data&a=add" method="post" enctype="multipart/form-data" onsubmit="return check();">
                <div class="box-header">
                    <h4>添加</h4>
                </div>
                <div class="box-content">
                    <table class="table-font" id="mytable">
                        <tr>
                            <th class="w120">需合并影片名称：</th>
                            <td><input type="text"  name="d[uniq_name]" value="<{$data.uniq_name}>" class="textinput w270" /></td>
                        </tr>
                        <tr>
                            <th class="w120">合并后影片名称：</th>
                            <td><input type="text"  name="d[real_name]" value="<{$data.real_name}>" class="textinput w270" /></td>
                            <input type="hidden" name="t" value="v_uniq_data"/>
                            <input type="hidden" name="d[add_time]" value="<{$time}>"/>
                            <input type="hidden" name="id" value="<{$id}>"/>
                        </tr>
                        <tr>
                            <th class="w120">分类：</th>
                            <td>
                            <select name="d[classid]">
                            	<option value='1' <{if $data.classid==1 || empty($data.classid)}>selected<{/if}>>电影</option>
                            	<option value='2' <{if $data.classid==2}>selected<{/if}>>电视剧</option>
                            	<option value='3' <{if $data.classid==3}>selected<{/if}>>动漫</option>
                            	<option value='4' <{if $data.classid==4}>selected<{/if}>>综艺</option>
                            </select>
                        </tr>
                        <tr>
                        	<td colspan="2" style="text-align:center;"><input type="submit" value="确定"/></td>
                        	
                        </tr>
                        </table>
                        </div>
                      </form>
                  </div>
                  
                  <{elseif $ac==1}>
                 	<div class="box-content">
                    <table class="table-font" id="mytable" border="1" >
                        <tr>
                           <td colspan="4"  style="text-align:center; background:#cccccc">列表</td>
                        </tr>
                        <tr style="background:#eeeeee">
                            <td style="text-align:center;" width="200">需合并名称</td>
                            <td style="text-align:center;" width="150">合并后的名称</td>
                            <td style="text-align:center;"width="180">分类 <select name="s" onchange="window.location.href='./?c=data&a=uniq_list&f='+$(this).val()"><option value="">筛选分类</option><option value=1  <{if $cid==1}>selected<{/if}>>电影</option><option value=2 <{if $cid==2}>selected<{/if}>>电视剧</option><option value=3 <{if $cid==3}>selected<{/if}>>动漫</option><option value=4 <{if $cid==4}>selected<{/if}>>综艺</option></select></td>
                            <td style="text-align:center;" width="150">操作</td>
                        </tr>
                        <{if $data}>
                        <{foreach from=$data item=i key=k}>
                        <tr>
                            <td style="text-align:center;"><{$i.uniq_name}></td>
                            <td style="text-align:center;"><{$i.real_name}></td>
                            <td style="text-align:center;"><{if $i.classid==1}>电影<{elseif $i.classid==2}>电视剧<{elseif $i.classid==3}>动漫<{elseif $i.classid==4}>综艺<{/if}></td>
                            <td style="text-align:center;">[<a href="?c=data&a=del&id=<{$i.id}>" onclick="return confirm('删除不可恢复,确定要删除?');">删除</a>] [<a href="?c=data&a=uniq&t=v_uniq_data&id=<{$i.id}>">修改</a>]</td>
                        </tr>
                        <{/foreach}>
                        <{else}>
                        <tr><td colspan="4"  style="text-align:center; ">暂无数据</td></tr>
                        <{/if}>
                        </table>
                        </div>
                  <{/if}>
           </div>
     </div>
</div>
<{include file=footer.tpl}>