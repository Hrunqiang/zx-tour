<?php /* Smarty version Smarty-3.1.6, created on 2016-11-14 10:40:54
         compiled from "../uducy_admin/Tpl\MatchV3\index.html" */ ?>
<?php /*%%SmartyHeaderCode:98058203db3e4dbd3-97391484%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84fa087dcbb50f633b0f30dadf3f67fcbb40e9fb' => 
    array (
      0 => '../uducy_admin/Tpl\\MatchV3\\index.html',
      1 => 1479091189,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98058203db3e4dbd3-97391484',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58203db41cdee',
  'variables' => 
  array (
    'state' => 0,
    'gtime_start' => 0,
    'gtime_end' => 0,
    'utime_start' => 0,
    'utime_end' => 0,
    'm_ptype' => 0,
    'match_state' => 0,
    'wd' => 0,
    'Reques_uri' => 0,
    'table_cfg' => 0,
    'i' => 0,
    'k' => 0,
    'count' => 0,
    'cid' => 0,
    'list' => 0,
    'li' => 0,
    'cfgi' => 0,
    'cfgk' => 0,
    'now' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58203db41cdee')) {function content_58203db41cdee($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\wnmp\\wwwroot\\houtai\\lib\\ThinkPHP\\Extend\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><?php echo $_smarty_tpl->getSubTemplate ('Login/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<style>
td a{color:#4e9ad4;}
.searchtxt{width:40px;}
.searchbtn{width:30px;}
.fl{float: left;}
.rl{float: right;}
#conHeader{overflow: hidden;height: 30px;padding:10px 0;border-bottom: 1px solid #000;}
#conHeader .fl{width: 500px;}
#conHeader .btn a,#conHeader .btn a:hover,#conHeader .btn a:active{background: #4e9ad4;color: #fff;padding:10px;text-decoration:none;margin-right: 20px;}
#searchBar{overflow: hidden;padding:10px;height:60px;}
#searchBar li{float: left;}
#screen_box{border-right: 1px solid #000;overflow: hidden;width:60%;}
#screen_btn{background: #4e9ad4;color: #fff;padding:20px;border: none;cursor: pointer;margin-left: 20px;}

#wd_box{width: 39%;}
#wd_box p{line-height:60px;height:60px;text-align: center;}

#attentions_edit{background:#FFF;position:fixed;width:400px; height:200px;margin:-100px 0 0 -200px;top:50%;left:50%;border: 1px solid #D4DCE7;}
#attentions_header{background:#D4DCE7;height:30px;line-height: 30px;text-align: center;}
#attentions_header span{float: right;margin-right: 10px;}
#attentions_textarea{padding:10px;}
#attentions_textarea textarea{width: 380px;max-width: 380px;height: 120px;max-height: 120px;}
#attentions_bottom{text-align: center;}
#attentions_bottom input{width: 50px;}
</style>
<div class="wrap">
    <div class="container">
        <div id="conHeader">
          <h1 class="fl">赛事列表&nbsp;&nbsp;<select name="" id="stateselect">
            <option value="0">货架</option>
            <option value="1" <?php if ($_smarty_tpl->tpl_vars['state']->value){?>selected<?php }?>>仓库</option>
          </select></h1>
          <div class="rl btn"><a href="./?s=MatchV3&a=info&ac=add">发布国内赛事</a><a href="./?s=MatchV3&a=info_abroad&ac=add">发布海外赛事</a></div>
        </div>
        <div id="searchBar">
          <ul>
            <li id="screen_box">
              <ul>
                <li >
                  <p>比赛时间：<input name="gtime_start" type="text" class="textinput datepicker" onkeyup="" value="<?php echo $_smarty_tpl->tpl_vars['gtime_start']->value;?>
"/>-<input name="gtime_end" type="text"  class="textinput datepicker" onkeyup="" value="<?php echo $_smarty_tpl->tpl_vars['gtime_end']->value;?>
"/></p>
                  <p>截止时间：<input name="utime_start" type="text" class="textinput datepicker" onkeyup="" value="<?php echo $_smarty_tpl->tpl_vars['utime_start']->value;?>
"/>-<input name="utime_end" type="text" class="textinput datepicker" onkeyup="" value="<?php echo $_smarty_tpl->tpl_vars['utime_end']->value;?>
"/></p>
                  <p>赛事分类：
                    <select name="m_ptype" id="">
                        <option value="">请选择</option>
                        <option value="国内" <?php if ($_smarty_tpl->tpl_vars['m_ptype']->value=="国内"){?>selected<?php }?>>国内</option>
                        <option value="海外" <?php if ($_smarty_tpl->tpl_vars['m_ptype']->value=="海外"){?>selected<?php }?>>海外</option>
                        <option value="运动诊疗" <?php if ($_smarty_tpl->tpl_vars['m_ptype']->value=="运动诊疗"){?>selected<?php }?>>运动诊疗</option> 
                    </select>&nbsp;&nbsp;&nbsp;&nbsp;
                    赛事状态：
                    <select name="match_state" id="">
                      <?php if ($_smarty_tpl->tpl_vars['state']->value){?>
                        <option value="">下线中</option>
                      <?php }else{ ?>
                        <option value="">请选择</option>
                        <option value="signup" <?php if ($_smarty_tpl->tpl_vars['match_state']->value=="signup"){?>selected<?php }?>>报名中</option>
                        <option value="full" <?php if ($_smarty_tpl->tpl_vars['match_state']->value=="full"){?>selected<?php }?>>名额已满</option>
                        <option value="gameend" <?php if ($_smarty_tpl->tpl_vars['match_state']->value=="gameend"){?>selected<?php }?>>赛事结束</option>
                        <option value="overtime" <?php if ($_smarty_tpl->tpl_vars['match_state']->value=="overtime"){?>selected<?php }?>>报名截止</option> 
                      <?php }?>    
                    </select>
                  </p>
                </li>
                <li>
                   <input type="submit" name="" id="screen_btn" value="筛选">
                </li>
              </ul>
            </li>
            <li id="wd_box">
                <p><input id="key_word" type="text" value="<?php echo $_smarty_tpl->tpl_vars['wd']->value;?>
" name="m_name" placeholder="请输入赛事关键字"><input type="button" value="搜索" id="search_btn">&nbsp;</p>
            </li>
          </ul>
          
        </div>
        <div id="main">     
            <div class="con">
            <form action="<?php echo $_smarty_tpl->tpl_vars['Reques_uri']->value;?>
&ac=del&delfield=m_state" method="post">
                  <div class="table">
                    <div class="th">
                        <div class="form">
                        <input type="button" onclick="$(this).parents('form').submit();" value=" 下 线 "/>&nbsp;&nbsp;
<!--                         <input type="button" onclick="$(this).parents('form').submit();" value=" 上 线 "/> -->
                        <?php if ($_smarty_tpl->tpl_vars['table_cfg']->value['submitBtns']){?>
                            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['table_cfg']->value['submitBtns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                                <input type="button" onclick="$(this).parents('form').attr('action','<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
').submit();" value=" <?php echo $_smarty_tpl->tpl_vars['k']->value;?>
 "/>
                            <?php } ?>
                        <?php }?>
                        <!-- <input type="submit" value=" 删 除 "/>&nbsp; -->
                       <span>一共<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
个赛事</span>
                        </div>
                    </div>               
                    <input type="hidden" name="cid" value="<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
"/>
                    <table class="admin-tb" id="js_data_source">
                    <tr>
                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['table_cfg']->value['field']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                        <?php if ($_smarty_tpl->tpl_vars['i']->value['isshow']==true){?>
                        <th style="text-align:center;<?php if ($_smarty_tpl->tpl_vars['k']->value=='dicttok'){?>display:none;<?php }?>">
                            <?php if ($_smarty_tpl->tpl_vars['i']->value['ismain']===true){?><input type="checkbox" id="select_all"/> &nbsp;<?php }?>
                            <?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>

                            <?php if ($_smarty_tpl->tpl_vars['k']->value=="m_untilTime"||$_smarty_tpl->tpl_vars['k']->value=="m_GameTime"){?>
                            <a href="javascript:change_href('<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
')">↑</a>
                            <?php }?>
                        </th>
                        <?php }?>
                    <?php } ?>
                    <th style="text-align:center;">操作</th>
                        <!-- <th width="170">名称</th>                
                        <th width="120">key</th>
                        <th width="80">操作</th>  -->                     
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['li'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['li']->_loop = false;
 $_smarty_tpl->tpl_vars['lk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['li']->key => $_smarty_tpl->tpl_vars['li']->value){
$_smarty_tpl->tpl_vars['li']->_loop = true;
 $_smarty_tpl->tpl_vars['lk']->value = $_smarty_tpl->tpl_vars['li']->key;
?>
                    <?php if ($_smarty_tpl->tpl_vars['li']->value['m_sign']==1){?>
                    <tr style= "background:#DBEAF9;">
                    <?php }else{ ?>
                    <tr>
                    <?php }?>
                            <?php  $_smarty_tpl->tpl_vars['cfgi'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cfgi']->_loop = false;
 $_smarty_tpl->tpl_vars['cfgk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['table_cfg']->value['field']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cfgi']->key => $_smarty_tpl->tpl_vars['cfgi']->value){
$_smarty_tpl->tpl_vars['cfgi']->_loop = true;
 $_smarty_tpl->tpl_vars['cfgk']->value = $_smarty_tpl->tpl_vars['cfgi']->key;
?>
                                <?php if ($_smarty_tpl->tpl_vars['cfgi']->value['isshow']){?>
                                <td style="text-align:center;max-width:200px;" id="<?php echo $_smarty_tpl->tpl_vars['cfgk']->value;?>
<?php echo $_smarty_tpl->tpl_vars['li']->value['id'];?>
">
                                <?php if ($_smarty_tpl->tpl_vars['cfgi']->value['ismain']){?>
                                    <input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['li']->value['id'];?>
"/>
                                <?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['cfgi']->value['type']=='textarea'){?>
                                        <textarea readonly rows="20" cols="30" style="text-align:left;"><?php echo $_smarty_tpl->tpl_vars['li']->value[$_smarty_tpl->tpl_vars['cfgk']->value];?>
</textarea>
                                    <?php }elseif($_smarty_tpl->tpl_vars['cfgi']->value['type']=='img'){?>
                                        <img src="<?php echo add_host($_smarty_tpl->tpl_vars['li']->value[$_smarty_tpl->tpl_vars['cfgk']->value]);?>
" width="50"/>
                                    <?php }elseif($_smarty_tpl->tpl_vars['cfgi']->value['type']=='flag'){?>
                                        <?php echo $_smarty_tpl->tpl_vars['cfgi']->value['flagdata'][$_smarty_tpl->tpl_vars['li']->value[$_smarty_tpl->tpl_vars['cfgk']->value]];?>

                                    <?php }elseif($_smarty_tpl->tpl_vars['cfgi']->value['type']=='time'){?>
                                        <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['li']->value[$_smarty_tpl->tpl_vars['cfgk']->value],"%Y-%m-%d %H:%M:%S");?>

                                    <?php }elseif($_smarty_tpl->tpl_vars['cfgi']->value['type']=='select'){?>
                                        <?php if ($_smarty_tpl->tpl_vars['cfgi']->value['title']=="状态"){?>
                                            <?php if ($_smarty_tpl->tpl_vars['li']->value[$_smarty_tpl->tpl_vars['cfgk']->value]==0){?>
                                                  <?php if ($_smarty_tpl->tpl_vars['li']->value['m_GameTime']<$_smarty_tpl->tpl_vars['now']->value){?>
                                                    赛事结束
                                                  <?php }else{ ?>
                                                    <?php if ($_smarty_tpl->tpl_vars['li']->value['m_untilTime']<$_smarty_tpl->tpl_vars['now']->value){?>
                                                    报名截止
                                                    <?php }else{ ?>
                                                      <?php if ($_smarty_tpl->tpl_vars['li']->value['m_signuptime']>$_smarty_tpl->tpl_vars['now']->value){?>
                                                        即将开始
                                                      <?php }else{ ?>
                                                        <?php if ($_smarty_tpl->tpl_vars['li']->value['m_placesleft']>0){?>
                                                        报名中
                                                        <?php }else{ ?>
                                                          名额已满
                                                        <?php }?>
                                                      <?php }?>
                                                    <?php }?>
                                                  <?php }?>
                                            <?php }else{ ?>
                                                <?php echo $_smarty_tpl->tpl_vars['cfgi']->value['selectdata'][$_smarty_tpl->tpl_vars['li']->value[$_smarty_tpl->tpl_vars['cfgk']->value]];?>

                                            <?php }?>
                                        <?php }else{ ?>
                                        <?php echo $_smarty_tpl->tpl_vars['cfgi']->value['selectdata'][$_smarty_tpl->tpl_vars['li']->value[$_smarty_tpl->tpl_vars['cfgk']->value]];?>

                                        <?php }?>
                                    <?php }else{ ?>
                                        <?php if ($_smarty_tpl->tpl_vars['cfgi']->value['title']=="比赛时间"||$_smarty_tpl->tpl_vars['cfgi']->value['title']=="截止时间"){?>
                                            <?php echo substr($_smarty_tpl->tpl_vars['li']->value[$_smarty_tpl->tpl_vars['cfgk']->value],0,10);?>

                                        <?php }else{ ?>
                                            <?php echo $_smarty_tpl->tpl_vars['li']->value[$_smarty_tpl->tpl_vars['cfgk']->value];?>

                                        <?php }?>
                                    <?php }?>
                                </td>
                                 <?php }?>
                            <?php } ?>
                       <td style="text-align:center;">[<a href="<?php if ($_smarty_tpl->tpl_vars['li']->value['m_ptype']=='国内'){?>?s=MatchV3&a=info&id=<?php echo $_smarty_tpl->tpl_vars['li']->value['id'];?>
&ac=edit<?php }else{ ?>?s=MatchV3&a=info_abroad&id=<?php echo $_smarty_tpl->tpl_vars['li']->value['id'];?>
&ac=edit<?php }?>">修改</a>]&nbsp;&nbsp;
                       [<a href="?s=MatchV3&a=goodsinfo&id=<?php echo $_smarty_tpl->tpl_vars['li']->value['id'];?>
" class="">套餐</a>]&nbsp;&nbsp;[<a href="?s=MatchV3&a=scenicarea&ac=list&mid=<?php echo $_smarty_tpl->tpl_vars['li']->value['id'];?>
">景点</a>]&nbsp;&nbsp;
                       [<a href="?s=MatchV3&a=enroll&mid=<?php echo $_smarty_tpl->tpl_vars['li']->value['id'];?>
">报名情况</a>]<br>[<a href="<?php echo $_smarty_tpl->tpl_vars['Reques_uri']->value;?>
&ac=status&id=<?php echo $_smarty_tpl->tpl_vars['li']->value['id'];?>
&status=<?php echo $_smarty_tpl->tpl_vars['li']->value['m_state'];?>
&delfield=m_state" class="del_ctl"><?php if ($_smarty_tpl->tpl_vars['li']->value['m_state']==1){?>上线<?php }else{ ?>下线<?php }?></a>]&nbsp;&nbsp;[<a href="" data="<?php echo $_smarty_tpl->tpl_vars['li']->value['m_attentions'];?>
" onclick="attentions(this,'<?php echo $_smarty_tpl->tpl_vars['li']->value['id'];?>
','<?php echo $_smarty_tpl->tpl_vars['li']->value['m_name'];?>
');return false;">修改注意事项</a>]&nbsp;&nbsp;[<a href="?s=MatchV3&a=clone_match&id=<?php echo $_smarty_tpl->tpl_vars['li']->value['id'];?>
&state=<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
">克隆</a>]</td>
                    </tr>
                   <?php } ?>
                    </table>

                    <div class="th">
                        <?php if ($_smarty_tpl->tpl_vars['page']->value){?>
                        <div class="pages">
                            <?php echo $_smarty_tpl->tpl_vars['page']->value;?>

                        </div>                
                        <?php }?>
                    </div>
                </div>
                </form>
                </div>
            </div><!--/ con-->
        </div>    
    </div><!--/ container-->
    </div><!--/ wrap-->
  <script>
  function change_url(obj){
      var v = $(obj).val();
      var n = $(obj).attr('name');
      var requestUrl    = '?s=MatchV3&ac=list&state=<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
&'+n+"="+v;
      window.location=requestUrl;
  }
  function change_href(v){
      var n = "order";
      var requestUrl    = '<?php echo $_smarty_tpl->tpl_vars['Reques_uri']->value;?>
';
      var reg   = new RegExp("(\\?|&)?"+n+"=[^&]{0,}");
      requestUrl    = requestUrl.replace(reg,'');
      requestUrl    = requestUrl+'&'+n+"="+v+"&ac=list";
      window.location=requestUrl;
  }
  $('#select_all').click(function(){
      var able  = $(this).attr('checked');
      if(able){
          $(this).parents('form').find('input[type=checkbox]').attr('checked',true);
      }else{
          $(this).parents('form').find('input[type=checkbox]').attr('checked',false);
      }
  });
  $('#search_btn').click(function(){
      var that  = $(this).prev('input');
      change_url(that);
  });
  $("#key_word").bind("keydown",function(event){
    var e = event || window.event || arguments.callee.caller.arguments[0];         
      if(e && e.keyCode==13){ // enter 键
         if($(this).val()){
            change_url($(this));
         }
      }
  });
  $("#screen_btn").click(function(){
      var getParam = "";
      
      var m_ptype = $("select[name=m_ptype]").val();
      if(m_ptype){
        getParam += "&m_ptype=" + m_ptype;
      }
      var match_state = $("select[name=match_state]").val();
      if(match_state){
        getParam += "&match_state=" + match_state;
      }

      var utime_start = $("input[name=utime_start]").val();
      var utime_end = $("input[name=utime_end]").val();
      if(utime_end && utime_start){
        getParam += "&utime_end=" + utime_end + "&utime_start=" + utime_start;
      }

      var gtime_start = $("input[name=gtime_start]").val();
      var gtime_end = $("input[name=gtime_end]").val();
      if(gtime_end && gtime_start){
        getParam += "&gtime_end=" + gtime_end + "&gtime_start=" + gtime_start;
      }

      //if(getParam){
        requestUrl    = '?s=MatchV3&ac=list&state=<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
&'+getParam;
        window.location=requestUrl;
     // }else{
      //  alert("请选择你要筛选的条件！");
      //}
      
  });
  $('.del_ctl').click(function(){
      return confirm('确定修改?');
  });
  $("#stateselect").change(function(){
      var state = $(this).val();
      window.location='?s=MatchV3&ac=list&state='+state;
  });
var removeattentions = function(){
    $("#attentions_edit").remove();
}
function attentions(me,id,name){
  var content = $(me).attr('data');
  $("<div id='attentions_edit'><p id='attentions_header'>编辑赛事注意事项--"+name+"<span>[<a href='javascript:removeattentions();'>关闭</a>]</span></p><div id='attentions_textarea'><textarea id='textarea_val'>"+content+"</textarea></div><p id='attentions_bottom'><input type='button' value='修改' /></p></div>").appendTo($('body')).find("input[type=button]").click(function(){
      var textarea_val = $("#textarea_val").val();
      if(textarea_val && id){
        $.ajax({
            url:"?s=MatchV3&a=attentions_edit",
            data:{id:id,attentions:textarea_val},
            type: "POST",
            dataType: "json",
            success:function(res){
              if(res.error == 0){
                $(me).attr('data',textarea_val);
                $("#m_attentions"+id).html(textarea_val);
                alert("保存成功");
                removeattentions();
              }else{
                alert(res.msg);
              }
            },
            error:function(){
              alert("保存失败！");
            }
        });
      }else{
        alert("请输入赛事注意事项！");
      }
  });
}
</script>
<link type="text/css" href="/static/datapicker/timepicker/css/jquery-ui-1.8.17.custom.css" rel="stylesheet" />
<link type="text/css" href="/static/datapicker/timepicker/css/jquery-ui-timepicker-addon.css" rel="stylesheet" />
<script type="text/javascript" src="/static/datapicker/timepicker/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="/static/datapicker/timepicker/js/jquery-ui-1.8.17.custom.min.js"></script>
<script type="text/javascript" src="/static/datapicker/timepicker/js/jquery-ui-timepicker-addon.js"></script>
<script type="text/javascript" src="/static/datapicker/timepicker/js/jquery-ui-timepicker-zh-CN.js"></script>
<script>
$('.datepicker').datetimepicker({
  //showOn: "button",
  //buttonImage: "./css/images/icon_calendar.gif",
  //buttonImageOnly: true,
  showSecond: true,
  timeFormat: 'hh:mm:ss',
  stepHour: 1,
  stepMinute: 1,
  stepSecond: 1
});
</script>
<?php echo $_smarty_tpl->getSubTemplate ('Login/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>