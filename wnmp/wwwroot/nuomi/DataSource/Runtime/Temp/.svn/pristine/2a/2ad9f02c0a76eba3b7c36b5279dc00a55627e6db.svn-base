<{include file=header.tpl}>
<{if $ac=='add' || $ac=='edit'}>
<div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con box-green">
                <form action="?c=c_class&a=content&ac=<{$ac}>" method='post'>
                <input type="hidden" name="add_time" value="<{$now}>"/>
                <input type="hidden" name="id" value="<{$id}>"/>
                <div class="box-header">
                    <h4>添加内容</h4>
                </div>
                <div class="box-content">
                    <table class="table-font" style="width:680px;">
                        <tr>
                            <th class="w120">选择分类：</th>
                            <td>
                            <select name="cid" id="cid">
				            <option value="0">-----选择分类-----</option>
				            <{$select}>
				         	</select>
                            </td>
                        </tr>
                        <tr>
                            <th class="w120">名称：</th>
                            <td>
	                            <input type="text" style="color:<{$data.color|escape:html}>" id="js_test_link"  name="name" class="textinput w270" value="<{$data.name|escape:html}>" />
	                            <span id="js_link_color" style="margin-right:10px;"></span>
                        		<input id="js_test_input" name="color" type="hidden" value="<{$data.color|escape:html}>" />
                            </td>
                        </tr>
                        <tr>
                            <th class="w120">是否显示：</th>
                            <td>
                            <label for="inindex1">是</label>
                            <input id="inindex1" type="radio" name="isdisplay" <{if $data.isdisplay==="1" || $data.isdisplay==''}>checked=""<{/if}> value="1" class="textinput w60">
                            <label for="inindex2">否</label>
                            <input id="inindex2" type="radio" name="isdisplay" <{if $data.isdisplay==="0"}>checked=""<{/if}> value="0" class="textinput w60">
                            </td>
                        </tr>
                        <tr>
                            <th class="w120">影片ID：</th>
                            <td>
	                            <input type="text"  name="infoId"  class="textinput w270" value="<{$data.infoId|escape:html}>" />&nbsp;<input type="button" value="选择影片" id="s_infoid">
                            </td>
                        </tr>
                        <tr>
                            <th class="w120">自定义图片地址：</th>
                            <td><input type="text" name="img_url" id="imgurl" class="textinput w270" value="<{$data.img_url|escape:html}>" />&nbsp;<input type="button" class="upload_imgurl" value="上传图片"></td>
                        </tr>
                        <tr>
                            <th class="w120">链接地址：</th>
                            <td><input type="text" name="url" class="textinput w270" value="<{$data.url|escape:html}>" /></td>
                        </tr>
                        <tr>
                            <th>排序：</th>
                            <td><input name="orderid" type="text" id="orderid" class="textinput" value="<{$data.orderid|escape:html}>"  onkeyup="value=value.replace(/[^\d]/g,'') "/></td>
                        </tr>
                        <tr>
                        	<th>分类属性</th>
                        	<td><textarea name="attr" style="width:370px; height:200px;float:left;"><{$data.attr|escape:html}></textarea>
                        	<div style="float:right;overflow:hidden;">
                        	from_title:来自哪<br/>
                        	from_url:来自的链接<br/>
                        	director:导演<br/>
                        	score:评分<br/>
                        	actor:演员名(自己添加,无连接)<br/>
                        	pubDate:年代<br>
                        	cate:类型<br>
                        	<br><font color=red>*注意</font>:<br/>请不用使用英文半角引号(双/单)
                        	</div>
                        	</td>
                        </tr>
                        <tr>
                        	<th>描述</th>
                        	<td><textarea name="describe" style="width:370px; height:200px;"><{$data.describe|escape:html}></textarea></td>
                        </tr>
                    </table>
                </div>
                
                <div class="box-footer">
                    <div class="box-footer-inner">
                    	<input type="submit" value="确定提交" /> 或 <a href="/?c=c_class&a=content&ac=list">取消</a>
                    </div>
                </div>
                </form>
            </div><!--/ con-->
            
        </div>    
    </div><!--/ container-->

</div>
<script>
function fillcontent(str,name){
	$('input[name=infoId]').val(str);
	$('input[name=name]').val(name);
	childWindow.close();
}
$('#s_infoid').click(function(){
	var infoid	= $(this).prev('input[name=infoId]').val();
	var iHeight = 220;
	var iWidth = 450;
	 //获得窗口的垂直位置
    var iTop = (window.screen.availHeight-30-iHeight)/2;        
    //获得窗口的水平位置
    var iLeft = (window.screen.availWidth-10-iWidth)/2;   
	childWindow = window.open("./?c=c_class&a=content&ac=s_infoid&infoId="+infoid,"Plug_upload","top="+iTop+",left="+iLeft+",width="+iWidth+",height="+iHeight+",menubar=0,scrollbars=1, resizable=1,status=1,titlebar=0,toolbar=0,location=1");
	return false;
});
</script>
<{elseif $ac =='s_infoid'}>
<div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con box-green">
                <form action="?c=c_class&a=content&ac=<{$ac}>" method='post'>
                <div class="box-header">
                    <h4>影片搜索: <input type="text" name="search" value="<{$list[0].title}>"/>&nbsp;<input type="submit" value=" 搜 索 "/></h4>
                </div>
                </form>
                <div class="box-content">
                    <table class="table-font" id="select_infoid">
                        <tr>
                            <td style="text-align:center;">id</td>
                            <td class="w120">影片名</td>
                            <td class="w120">分类</td>
                            <td class="w120">类型</td>
                        </tr>
                      	<{foreach from=$list item=i name=n}>
                      	<tr id="s_<{$i.id}>">
                            <td><{$i.id}></td>
                            <td class="title"><{$i.title}></td>
                            <td><{if $i.class==1}>电影<{elseif $i.class==2}>电视剧<{elseif $i.class==3}>动漫<{elseif $i.class==4}>综艺<{/if}></td>
                            <td><{$i.type}></td>
                        </tr>
                      	<{/foreach}>
                    </table>
                    <script>
                    	$('#select_infoid tr').css('cursor','pointer').hover(function(){
                    		$(this).css('background','#cccccc');
						},function(){
							$(this).css('background','');
						});
                    	$('#select_infoid tr[id]').click(function(){
                    		var id	= $(this).attr('id').split('_')[1];
                    		var name= $(this).find('.title').html();
							window.opener.fillcontent(id,name);                    		
                    	});
                    </script>
                </div>
                
                <div class="box-footer">
                    <div class="box-footer-inner">&nbsp;
                    	<!-- <input type="submit" value="确定提交" /> 或 <a href="?c=c_class&a=content">取消</a> -->
                    </div>
                </div>
                
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
                        	<select name="cid" id="s_cid" onchange="var v=this.value;window.location.href='/?c=c_class&a=content&ac=list&cid='+v">
                        	<option value=0>全部分类</option>
                        	<{$select}>
                        	</select>&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" onclick="window.location.href='/?c=c_class&a=content&ac=add&cid='+document.getElementById('s_cid').value" value="添加内容"/>
                        </div>
                       
                        </div>
                    </div>
                    <form action='/?c=c_class&a=content' method='post'>
                    <table class="admin-tb" id="datatable">
                    <thead>
                        <tr>
                        	<th><input type="checkbox" id="sall"><label for="sall">全选</label></th>
                            <th>名称</th>
                            <th>分类名</th>
                            <th >排序</th>
                            <th width="161">操作</th>
                        </tr>
					</thead>
					<tbody id="class_item">
					<{if $list}>
					<{foreach from=$list name=n item=i}>
					<tr  childindex="1">
						<td><input type="checkbox" name="id[]" value="<{$i.aid}>" title="<{$i.aid}>"></td>
	                    <td><a href="/?c=c_class&a=content&ac=edit&id=<{$i.aid}>" ><{$i.name}></a></td>   
	                    <td><a href="/?c=c_class&a=content&ac=list&cid=<{$i.cid}>"><{$i.classname}></a></td>
	                    <td rel="classname" class="update_order" info="<{$i.aid}>|v_common_class_info|orderid|id"><{$i.orderid}></td>
	                    <td>
	                        [<a href="/?c=c_class&a=content&ac=edit&id=<{$i.aid}>&sname=<{$sname}>">修改</a>] &nbsp; [<a href="/?c=c_class&a=content&ac=del&id=<{$i.aid}>&sname=<{$sname}>" onclick="return confirm('删除后不能恢复,确定删除?');">删除</a>]
	                    </td>
	                    </tr>
					<{/foreach}>
					<{/if}>
					</tbody>
                    
                    
                    </table>
                    <div class="th">
                    	<div class="form">
                        <input type='hidden' name='commit' value='1' />
                        <input type='radio' name='ac' value='del' checked />删除
                        <input type="submit" value="  确  定  " onclick="return confirm('请注意删除操作不能恢复,确定操作?');" />&nbsp;&nbsp; 
                        </div>
                    </div>
                    </form>
                </div>
            </div><!--/ con-->            
        </div>    
    </div><!--/ container-->
</div>
<script>
$('#sall').click(function(){
	var state	= $(this).attr('checked');
	var form	= $(this).parents('form');
	if(state){
		form.find('input[type=checkbox][name^=id]').attr('checked',true);
	}else{
		form.find('input[type=checkbox][name^=id]').attr('checked',false);
	}
});
</script>
<{/if}>
<style type="text/css">
	.js_search_msg{ position:absolute; background:#fff; border:1px solid #CEDEAE;}
	.js_search_msg li{ padding:3px 5px; cursor:pointer;}
	.js_search_msg li.active{ background:#EBF4D8}
</style>
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
<{include file=footer.tpl}>