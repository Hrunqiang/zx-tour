<{include file=header.tpl}>
<div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con box-green">
                <form action="?c=list&a=add" method="post" enctype="multipart/form-data" onsubmit="return check();">
                <div class="box-header">
                    <h4>修改</h4>
                </div>
                <div class="box-content">
                    <table class="table-font" id="mytable">
                        <tr>
                            <th class="w120">影片名称：</th>
                            <td><input type="text"  name="title" value="" class="textinput w270" /></td>
                        </tr>
                        <tr>
                            <th class="w120">影片分类：</th>
                            <td>
                            <input type="radio" name="class" value="1" checked="true"/>电影
                           <!--  <input type="radio" name="class" value="2"/>电视剧
                            <input type="radio" name="class" value="3"/>动漫 -->
                            </td>
                        </tr>
                        <tr>
                            <th class="w120">播放质量：</th>
                            <td>
                            <input type="radio" name="quality" value="极速"/>极速
                            <input type="radio" name="quality" value="流畅"/>流畅
                            <input type="radio" name="quality" value="标清"/>标清
                            <input type="radio" name="quality" value="高清"/>高清
                            <input type="radio" name="quality" value="超清"/>超清
                            </td>
                        </tr>
                         <tr>
                            <th class="w120">地区：</th>
                            <td>
                            <input type="radio" name="area" value="大陆"/>大陆
                            <input type="radio" name="area" value="台湾"/>台湾
                            <input type="radio" name="area" value="香港"/>香港
                            <input type="radio" name="area" value="韩国"/>韩国
                            <input type="radio" name="area" value="日本"/>日本
                            <input type="radio" name="area" value="美国"/>美国
                            <input type="radio" name="area" value="其他"/>其他
                            </td>
                        </tr>
                        <tr>
                            <th class="w120">上映时间：</th>
                            <td><input type="text"  name="pubDate" value="" class="textinput w70" /></td>
                        </tr>
                        <tr>
                            <th class="w120">播放时长：</th>
                            <td><input type="text"  name="duration" value="" class="textinput w70" />(<font color="red">格式为//hh:mm:ss </font>)</td>
                        </tr> 
                        <tr>
                            <th class="w120">影片类型：</th>
                            <td>
                            <input type="radio" name="type" value="花絮" />花絮
                            <input type="radio" name="type" value="预告" />预告
                            <input type="radio" name="type" value="正片" checked="true"/>正片
                            </td>
                        </tr> 
                        <tr>
                            <th class="w120">影片作者：</th>
                            <td><input type="text"  name="director" value="" class="textinput w70" /></td>
                        </tr>
                        <tr>
                            <th class="w120">影片演员：</th>
                            <td><input type="text"  name="actor" value="" class="textinput w70" /><font color=red>(以|分割多个演员)</font></td>
                        </tr> 
                         <tr>
                            <th>影片tag：</th>
                            <td>
                            <input type="checkbox" name="cate[]"  value="偶像" class="textinput" />偶像
                             <input type="checkbox" name="cate[]"  value="爱情" class="textinput" />爱情
                            <input type="checkbox" name="cate[]"  value="军事" class="textinput" />军事
                            <input type="checkbox" name="cate[]"  value="武侠" class="textinput" />武侠
                            <input type="checkbox" name="cate[]"  value="历史" class="textinput" />历史
                          <input type="checkbox" name="cate[]"  value="神话" class="textinput" />神话
                            <input type="checkbox" name="cate[]"  value="古装" class="textinput" /> 古装
                            <input type="checkbox" name="cate[]"  value="战争" class="textinput" />战争
                           <input type="checkbox" name="cate[]"  value="警匪" class="textinput" />警匪
                           <input type="checkbox" name="cate[]"  value="悬疑" class="textinput" />悬疑
                            <input type="checkbox" name="cate[]"  value="伦理" class="textinput" />伦理   
                             <input type="checkbox" name="cate[]"  value="科幻 " class="textinput" />科幻  
                              <input type="checkbox" name="cate[]"  value="喜剧 " class="textinput" />喜剧 
                               <input type="checkbox" name="cate[]"  value="情景 " class="textinput" />情景  
                                <input type="checkbox" name="cate[]"  value="剧情" class="textinput" />剧情  
                                 <input type="checkbox" name="cate[]"  value="时装" class="textinput" />时装  
                                  <input type="checkbox" name="cate[]"  value="动作" class="textinput" />动作   
                                  <input type="checkbox" name="cate[]"  value="悲剧" class="textinput" />悲剧
                                  <input type="checkbox" name="cate[]"  value="灾难" class="textinput" />灾难  
                                  <input type="checkbox" name="cate[]"  value="惊悚 " class="textinput" />惊悚 
                                   <input type="checkbox" name="cate[]"  value="青春" class="textinput" />青春  
                                    <input type="checkbox" name="cate[]"  value="恐怖" class="textinput" />恐怖 
                                     <input type="checkbox" name="cate[]"  value="魔幻" class="textinput" />魔幻 
                                      <input type="checkbox" name="cate[]"  value="其他" class="textinput" />其他   
                            </td>
                        </tr>
                       <tr>
                            <th class="w120">影片集数：</th>
                            <td><input type="text"  name="total" value="" class="textinput w70" /></td>
                        </tr>
 
                        <tr>
                            <th class="w120">更新至集数：</th>
                            <td><input type="text"  name="upInfo" value="" class="textinput w70" /></td>
                        </tr>
                         <tr>
                            <th class="w120">播放次数：</th>
                            <td><input type="text"  name="view" value="" class="textinput w70" /></td>
                        </tr>
                        <tr>
                            <th class="w120">影片分数：</th>
                            <td><input type="text"  name="score" value="" class="textinput w70" /><font color="red">请填入0-100之间的分数！</font></td>
                        </tr>
                        <tr>
                            <th class="w120">最后更新时间：</th>
                            <td><input type="text"  id="updateTime" name="updateTime" value="" class="textinput w70" /></td>
                        </tr>
                         <tr>
                            <th class="w120">详细介绍：</th>
                            <td> <textarea class="w270" name="comment"></textarea></td>
                        </tr>  
                        <tr>
                            <th class="w120">影片简介：</th>
                            <td><input type="text"  name="word" value="" class="textinput w270" /></td>
                        </tr>                                               
                        <tr>
                            <th class="w120">前台显示：</th>
                            <td>
                            <input type="radio" name="showIndex" value="1"  onclick='change(this)'/>显示在banner
                            <input type="radio" name="showIndex" value="2"  onclick='change(this)'/>显示在推荐
                            <input type="radio" name="showIndex" value="3"  onclick='change(this)'/>显示在预告
                            <input type="radio" name="showIndex" value="4"  onclick='change(this)'/>显示在情感
                            <input type="radio" name="showIndex" value="0"  onclick='change(this)' checked="true"/>不显示在首页
                            <br>
                            <input type='file' style="display:none" name='file' id='file'>
                            </td>
                        </tr>
                        <tr id="position_tr">
                            <th>首页位置：</th>
                            <td><input type="text" name="position" value="<{$list.position}>" class="textinput" />(<font color="red">用于V5平台统计，如1-1，非首页影片请不要填写！</font>)</td>
                        </tr>                        
                        <tr>
                            <th>前台排序：</th>
                            <td><input type="text" name="indexOrderId" value="<{$list.indexOrderId|default:100}>" class="textinput" /></td>
                        </tr>
                        <tr>
                            <th>是否完结：</th>
                            <td>
                            <input type="radio" name="state" value="1" class="textinput" checked="true"/>完结
                            <input type="radio" name="state" value="0" class="textinput" />未完结
                            </td>
                        </tr>
                        <tr>
                            <th>播放厂家：</th>
                            <td>
                            <input type="checkbox" name="provider[]"  value="ls|乐视" class="textinput" />乐视
                            <input type="checkbox" name="provider[]" value="qy|奇艺" class="textinput" />奇艺
                            <input type="checkbox" name="provider[]" value="sh|搜狐" class="textinput" />搜狐
                            <input type="checkbox" name="provider[]" value="dy|1905" class="textinput" />1905  
                            <input type="checkbox" name="provider[]" value="pptv|pptv" class="textinput" />PPTV
                            <input type="checkbox" name="provider[]" value="td|土豆" class="textinput" />土豆 
                            <input type="checkbox" name="provider[]" value="yk|优酷" class="textinput" />优酷 
                            <input type="checkbox" name="provider[]" value="xl|迅雷" class="textinput" />迅雷 
                            <input type="checkbox" name="provider[]" value="qt|其他" class="textinput" />其他                        
                            </td>
                        </tr>
                                
                    </table>
                </div>
                <div class="box-footer">
                    <div class="box-footer-inner">
                    	<input type="submit"  value="提交" />或 <a href="?c=list&cid=1">取消</a>
                    </div>
                </div>
                </form>
            </div><!--/ con-->

            
<link href="static/datapicker/css/jquery-ui-1.7.1.custom.css" rel="stylesheet" type="text/css"  />
<script type="text/javascript" src="static/datapicker/ui.core.js"></script>
<script type="text/javascript" src="static/datapicker/jquery-ui-1.7.1.custom.min.js"></script>
<script>
$(document).ready(function(){
		$("#updateTime").datepicker();
		$("input[name='provider[]']").bind('click',function(){
			
			   var val = $(this).val().split("|");
			   var ftb = $("#mytable");
               if($(this).attr('checked')==true){
            	   var tr=document.createElement("tr");
            	   tr.className=val[0];
            	   var th = document.createElement("th");
            	   th.appendChild(document.createTextNode(val[1]+"图片地址"));
            	   tr.appendChild(th);
            	   var td=document.createElement("td");
            	   td.innerHTML='<input type="file"  name="'+val[0]+'imageUrl" value="" class="textinput w270" />';
            	   tr.appendChild(td);
            	   document.getElementById("mytable").appendChild (tr); 

            	   var tr=document.createElement("tr");
            	   tr.className = val[0];
            	   var th = document.createElement("th");
            	   th.appendChild(document.createTextNode(val[1]+"播放地址"));
            	   tr.appendChild(th);
            	   var td=document.createElement("td");
            	   td.innerHTML='<input type="text"  name="'+val[0]+'playUrl" value="" class="textinput w270" /><span>格式：http://xxxxx</span>';
            	   tr.appendChild(td);
            	   document.getElementById("mytable").appendChild (tr); 
                    
               }else{
            	   $('#mytable tr:.'+val[0]).remove(); 
                 
                   

               }
               
		})
})
</script>
            <script>
            function change(obj){
                   if( obj.value=='2' || obj.value=='0' ){
                      document.getElementById('file').style.display='none';
                   }else{
                	   document.getElementById('file').style.display='block';
                   }
             }
            function check(){

            	if($("input[name='title']").val()==''){
            		alert('名称不能为空！');
                    return false;
               }
            	if(typeof($("input[name='class']:checked").val()) == 'undefined'){
            		alert('请选择影片分类！');
                    return false;
               }
            	if(typeof($("input[name='quality']:checked").val()) == 'undefined'){
            		alert('选择播放质量！');
                    return false;
               }
            	if(typeof($("input[name='area']:checked").val()) == 'undefined'){
            		alert('选择地区！');
                    return false;
               }
            	if($("input[name='pubDate']").val()==''){
            		alert('请填写上映时间！');
                    return false;
               }
            	if($("input[name='duration']").val()==''){
            		alert('请填写播放时长！');
                    return false;
               }
            	if(typeof($("input[name='type']:checked").val()) == 'undefined'){
            		alert('请选择影片类型！');
                    return false;
                }
            	if(typeof($("input[name='cate[]']:checked").val()) == 'undefined'){
            		alert('请选择影片tag！');
                    return false;
                }

            	if($("input[name='updateTime']").val()==''){
            		alert('最后更新时间！');
                    return false;
               }
            	if($("input[name='imgUrl']").val()==''){
            		alert('请填写图片地址！');
                    return false;
               }
            	if($("input[name='playurl']").val()==''){
            		alert('请填写播放地址！');
                    return false;
               }
                
            }
            </script>
        </div>    
    </div><!--/ container-->

</div><!--/ wrap-->
<{include file=footer.tpl}>
