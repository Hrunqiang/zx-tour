<{include file=header.tpl}>
<div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con box-green">
                <form action="?c=list&a=save" method="post" enctype="multipart/form-data">

                <input type="hidden" name="cid" value="<{$cid}>"/>
                <input type="hidden" name="id" value="<{$list.id}>"/>
                <div class="box-header">
                    <h4>修改</h4>
                </div>
                <div class="box-content">
                    <table class="table-font">
                        <tr>
                            <th class="w120">名称：</th>
                            <td><input type="text"  name="title" style="color:<{$list.namecolor}>;" value="<{$list.title}>" id="js_test_link" class="textinput w270" /><span style="margin-left:10px;">链接颜色：</span><span id="js_link_color" style="margin-right:10px;"></span><input id="pick_color1" name="namecolor" type="hidden" value="<{$list.namecolor}>" /></td>
                        </tr>

                        <tr>
                            <th class="w120">播放质量：</th>
                            <td>
                            <input type="radio" name="quality" <{if $list.quality=='极速'}>checked<{/if}> value="极速"/>极速
                            <input type="radio" name="quality" <{if $list.quality=='流畅'}>checked<{/if}> value="流畅"/>流畅
                            <input type="radio" name="quality" <{if $list.quality=='标清'}>checked<{/if}> value="标清"/>标清
                            <input type="radio" name="quality" <{if $list.quality=='高清'}>checked<{/if}> value="高清"/>高清
                            <input type="radio" name="quality" <{if $list.quality=='超清'}>checked<{/if}> value="超清"/>超清
                            </td>
                        </tr>
                         <tr>
                            <th class="w120">国家：</th>
                            <td><input type="text"  name="area" value="<{$list.area}>" class="textinput w70" /></td>
                        </tr>
                        <tr>
                            <th class="w120">上映时间：</th>
                            <td><input type="text"  name="pubDate" value="<{$list.pubDate}>" class="textinput w70" /></td>
                        </tr>
                          <tr>
                            <th class="w120">导演：</th>
                            <td><input type="text"  name="director" value="<{$list.director}>" class="textinput w70" /></td>
                        </tr>
                          <tr>
                            <th class="w120">主演：</th>
                            <td><input type="text"  name="actor" value="<{$actor}>" class="textinput w70" /><font color='red'>请用“|”分开</font></td>
                        </tr>
                        <tr>
                            <th class="w120">播放时长：</th>
                            <td><input type="text"  name="duration" value="<{$list.duration}>" class="textinput w70" />(<font color="red">格式为//hh:mm:ss </font>)</td>
                        </tr> 

                         <tr>
                            <th class="w120">详细介绍：</th>
                            <td> <textarea class="w270" name="comment" ><{$list.comment}></textarea></td>
                        </tr>  
                        <tr>
                            <th class="w120">影片简介：</th>
                            <td><input type="text"  name="word" value="<{$list.word}>" class="textinput w270" /></td>
                        </tr>           
                        <{if $list.class==2 || $list.class==3}>                          
                         <tr>
                            <th>影片总集数：</th>
                            <td><input type="text" name="total" value="<{$list.total}>" class="textinput" /></td>
                        </tr>
                         <tr>
                            <th>是否更新完成：</th>
                            <td>
                            <select name="state">
                            	<option <{if $list.state==1}>selected<{/if}>>是</option>
                            	<option <{if $list.state!=1}>selected<{/if}>>否</option>
                            </select>
                            </td>
                        </tr>
                        <{/if}>
                         <tr>
                            <th>影片分数：</th>
                            <td><input type="text" name="score" value="<{$list.score}>" class="textinput" />(<font color='red'>请填入0-100之间的分数！</font>)</td>
                        </tr>
                        <tr>
                            <th>播放次数：</th>
                            <td><input type="text" name="view" value="<{$list.view}>" class="textinput" /></td>
                        </tr>
                        <tr>
                            <th>前台排序：</th>
                            <td><input type="text" name="indexOrderId" value="<{$list.indexOrderId}>" class="textinput" /></td>
                        </tr>
                        <tr>
                        	<th>是否屏蔽</th>
                        	<td><input type="radio" name="indexHot" id="indexHot1" <{if $list.indexHot==1}>checked<{/if}> value="1"/><label for="indexHot1">是</label><input type="radio" name="indexHot" id="indexHot0" <{if $list.indexHot==0}>checked<{/if}> value="0"/><label for="indexHot0">否</label></td>
                        </tr>
                        <{if $list.class==2}>
                        	<tr>
                        	<th>自定义桌面图片名称</th>
                        	<td><input type="text" name="desc_title" value="<{$list.desc_title}>" id="desc_title" /></td>
                        </tr>
                        <{/if}>
                        <{if $list.class==2}>
                        	<tr>
                        	<th>是显示桌面快捷</th>
                        	<td><input type="radio" name="classHot" id="classHot1" <{if $list.classHot==1}>checked<{/if}> value="1"/><label for="classHot1">是</label><input type="radio" name="classHot" id="classHot0" <{if $list.classHot==0}>checked<{/if}> value="0"/><label for="classHot0">否</label></td>
                        </tr>
                        <{/if}>
                        <{if $list.class==2}>
                        <tr>
                            <th>桌面icon：</th>
                            <td><input type="text" name="icon" value="<{$list.icon}>" id="icon" style="width:380px;"/> <input type="button" value="上传" class="upload_icon"></td>
                        </tr>
                        <{/if}>
                        <tr>
                            <th>影片大图：</th>
                            <td><input type="text" name="imageBigUrl" value="<{$list.imageBigUrl}>" id="bigimage" style="width:380px;"/> <input type="button" value="上传" class="upload_bigimage"></td>
                        </tr>
                        
                        <tr>
                            <th>播放列表：</th>
                            <td>
                            <{foreach from=$list.provider item=v}>
                          	  (<input type="radio" name="isshow[<{$v.providerName}>]"<{if $v.isshow=='0'}> checked<{/if}> value='0' id="isshow<{$v.providerName}>_no"/><label for="isshow_no">否</label><input type="radio" name="isshow[<{$v.providerName}>]" <{if $v.isshow==1}> checked<{/if}> value='1'  id="isshow<{$v.providerName}>_yes"/><label for="isshow_yes">是</label>)<{$v.providerName}>&nbsp;|&nbsp;排序：<input type="text" value="<{$v.orderId}>" name="provider[<{$v.providerName}>]" style="width:50px;">&nbsp;图片连接：<input type="text" value="<{$v.imageUrl}>" name="<{$v.providerName}>" style="width:380px;"><br>
                            <{/foreach}>
                            </td>
                        </tr>          
                    </table>
                </div>
                <div class="box-footer">
                    <div class="box-footer-inner">
                    	<input type="submit" value="提交" />或 <a href="?c=list&cid=<{$cid}>">取消</a>
                    </div>
                </div>
                </form>
            </div><!--/ con-->
            <script>
            function change(obj){
                   if( obj.value=='2' || obj.value=='0' ){
                      document.getElementById('file').style.display='none';
                   }else{
                	   document.getElementById('file').style.display='block';
                   }
             }
            </script>
        </div>    
    </div><!--/ container-->

</div><!--/ wrap-->



<link href="static/datapicker/css/jquery-ui-1.7.1.custom.css" rel="stylesheet" type="text/css"  />
<script type="text/javascript" src="static/datapicker/ui.core.js"></script>
<script type="text/javascript" src="static/datapicker/jquery-ui-1.7.1.custom.min.js"></script>
<script type="text/javascript" src="static/qrx/qrxpcom.js"></script>
<script type="text/javascript" src="static/qrx/qrcpicker.js"></script>
<script type="text/javascript">
$(document).ready(function(){
//	$("#start_time").datepicker();
//	$("#end_time").datepicker();

	var colorstr = "";
	colorstr = document.getElementById("pick_color1").value;
	var cp = new QrColorPicker(colorstr);
	cp.onChange = function(color){
		document.getElementById("js_test_link").style.color = color;
		document.getElementById("pick_color1").value = color;
	}
	cp.onSelect = function(color){
		document.getElementById("js_test_link").style.color = color;
		document.getElementById("js_test_input").value = color;
	}
	document.getElementById("js_link_color").innerHTML = cp.getHTML();
});
</script>
<{include file=footer.tpl}>
