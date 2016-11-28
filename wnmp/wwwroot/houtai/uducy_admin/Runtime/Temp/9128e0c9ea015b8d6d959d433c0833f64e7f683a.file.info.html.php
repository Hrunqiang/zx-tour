<?php /* Smarty version Smarty-3.1.6, created on 2016-11-16 14:40:07
         compiled from "../uducy_admin/Tpl\MatchV3\info.html" */ ?>
<?php /*%%SmartyHeaderCode:29870582bff47420d64-58066955%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9128e0c9ea015b8d6d959d433c0833f64e7f683a' => 
    array (
      0 => '../uducy_admin/Tpl\\MatchV3\\info.html',
      1 => 1479091189,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29870582bff47420d64-58066955',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ac' => 0,
    'now' => 0,
    'data' => 0,
    'i' => 0,
    'key' => 0,
    'Fields' => 0,
    'table_cfg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_582bff477245e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582bff477245e')) {function content_582bff477245e($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Login/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['ac']->value=='add'||$_smarty_tpl->tpl_vars['ac']->value=='edit'){?>
<style>
.fl{float: left;}
.mr10{margin-right: 10px;}
th{vertical-align: top!important;font-weight: bold;font-size: 14px;}
td p{padding:5px 0;font-weight: bold;}
.imgbox1{width: 100px;height: 100px;position: relative;}
.imgbox1 img{width: 100px;height: 100%;}
.imgbox1 a,.imgbox1 a:hover,.imgbox1 a:active{position: absolute;display: inline-block;width: 40px;height: 40px;top:30px;left:30px;background: rgba(0,0,0,.2);color:#FFF;text-decoration: none;font-size: 40px;line-height: 40px;text-align: center;}
#banner_box{width:760px ;overflow: hidden;}
.imgbox2{width: 187.5px;height: 140px;position: relative;float: left;margin: 10px 10px 10px 0;}
.imgbox2 .del_banner{position: absolute;background: red;color:#FFF;top:-10px;right:-10px;width:20px;height: 20px;text-align: center;cursor: pointer;font-weight: bold;display: none;border-radius: 50%;}
.imgbox2:hover .del_banner{display: block;}
.imgbox2 img{width: 100%;height: 120px;}
.imgbox2 label{height: 40px;display: block;color:#4e9ad4;}
.imgbox2 label p{text-align: center;}
.imgbox2 label input:checked+p{color:#000;display: none;}
.imgbox2 label input{position: absolute;left:-99999px;}
.imgbox2 a,.imgbox2 a:hover,.imgbox2 a:active{position: absolute;display: inline-block;width: 40px;height: 40px;top:40px;left:73.75px;background: rgba(0,0,0,.2);color:#FFF;text-decoration: none;font-size: 40px;line-height: 40px;text-align: center;}
#m_Mtypes_box{overflow: hidden;}
#add_mtypes{float: left;width: 20px;height: 20px;border-radius: 50%;text-align: center;color: #fff;background: #4e9ad4;margin-top: 12px;font-size: 16px;cursor: pointer;}
#m_Mtypes_box p{float: left;width: 60px;position: relative;padding:10px 10px 10px 0;}
#m_Mtypes_box p input{width: 60px;height: 20px;}
#m_Mtypes_box p span{position: absolute;top:0;right:0;width: 20px;height: 20px;background: red;color: #fff;border-radius: 50%;text-align: center;cursor: pointer;display: none;}
#m_Mtypes_box p:hover span{display: block;}

.box-footer{text-align: center;border: none;}
.box-footer input{border: none;width: 100px;height: 30px;margin-right: 30px;}
.blue{background:#4e9ad4;color:#FFF; }
</style>
<div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con box-green">
                <form action="?s=MatchV3&a=info&ac=<?php echo $_smarty_tpl->tpl_vars['ac']->value;?>
" method='post' id="matchinfo_form" onsubmit="return checkform();">
                <input type="hidden" name="ctime" value="<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
"/>
            <!--     <input type="hidden" name="utime" value="<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
"/> -->
                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"/>
                <div class="box-header">
                    <h4>赛事列表-国内赛事发布</h4>
                </div>
                <div class="box-content">
                    <table class="table-font" style="width:80%;">
                        <tr class="m_name">
                            <th class="w120">赛事名称：</th>
                            <td>
	                            <input type="text" id="m_name"  name="m_name" class="textinput w270" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_name'], ENT_QUOTES, 'UTF-8', true);?>
" autocomplete="off" placeholder="中文名称" /><br>
                                <input type="text" name="m_enName" class="textinput w270" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_enName'], ENT_QUOTES, 'UTF-8', true);?>
" autocomplete="off" placeholder="英文名称"  />
                            </td>
                        </tr>
                        <tr>
                            <th class="w120">赛事时间：</th>
                            <td>
                                <ul>
                                    <li class="fl mr10" >
                                        <p>开始报名:</p>
                                        <p><input name="m_signuptime" type="text" id="m_signuptime" class="textinput datepicker" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_signuptime'], ENT_QUOTES, 'UTF-8', true);?>
" onkeyup=""/></p>
                                        <p>不选默认发布后可报名</p>
                                    </li>
                                    <li class="fl mr10">
                                        <p>报名截止:</p>
                                        <p><input name="m_untilTime" type="text" id="m_untilTime" class="textinput datepicker" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_untilTime'], ENT_QUOTES, 'UTF-8', true);?>
" onkeyup=""/></p>
                                    </li>
                                    <li class="fl mr10">
                                        <p>比赛时间:</p>
                                        <p><input name="m_GameTime" type="text" id="m_GameTime" class="textinput datepicker" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_GameTime'], ENT_QUOTES, 'UTF-8', true);?>
" onkeyup=""/></p>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <th class="w120">赛事地点：</th>
                            <td>
                                <select name="provinces" id="provincesSelect">
                                    <option value="北京">北京</option>
                                </select>
                                <select name="citys" id="citysSelect">
                                    <option value="北京">北京</option>
                                </select>
                                <input type="text"   name="m_area" class="textinput w270" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_area'], ENT_QUOTES, 'UTF-8', true);?>
" autocomplete="off" placeholder="输入具体地址" />
                                <input type="hidden"   name="m_country" class="textinput w270" value="中国" autocomplete="off" />
                                <input type="hidden"   name="m_continent" class="textinput w270" value="亚洲" autocomplete="off" />
                            </td>
                        </tr>
                        <tr class="m_Mtypes">
                            <th class="w120">比赛类型：</th>
                            <td>
                                <label for="m_mtypes_class1"><input type="radio"   name="m_mtypes_class" id="m_mtypes_class1" value="马拉松" autocomplete="off" checked="" />马拉松</label>　
                                <label for="m_mtypes_class2"><input type="radio"   name="m_mtypes_class" id="m_mtypes_class2" value="越野跑" autocomplete="off" <?php if ($_smarty_tpl->tpl_vars['data']->value['m_mtypes_class']=="越野跑"){?>checked<?php }?>/>越野跑</label>
                                <label for="m_mtypes_class3"><input type="radio"   name="m_mtypes_class" id="m_mtypes_class3" value="欢乐跑" autocomplete="off" <?php if ($_smarty_tpl->tpl_vars['data']->value['m_mtypes_class']=="欢乐跑"){?>checked<?php }?> />欢乐跑</label>
                                <label for="m_mtypes_class4"><input type="radio"   name="m_mtypes_class" id="m_mtypes_class4" value="铁人三项" autocomplete="off" <?php if ($_smarty_tpl->tpl_vars['data']->value['m_mtypes_class']=="铁人三项"){?>checked<?php }?> />铁人三项</label>
                                <label for="m_mtypes_class5"><input type="radio"   name="m_mtypes_class" id="m_mtypes_class5" value="接力跑" autocomplete="off" <?php if ($_smarty_tpl->tpl_vars['data']->value['m_mtypes_class']=="接力跑"){?>checked<?php }?> />接力跑</label>
                                <div id="m_Mtypes_box">
                                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['m_Mtypes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                                    <p>
                                        <input type="text" name="m_Mtypes[]" value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"/>
                                        <span class="del_banner">—</span>
                                    </p>
                                    <?php } ?>
                                    <div id="add_mtypes">+</div>
                                </div>
                            </td>
                        </tr>
                        <tr class="m_Mtypes">
                            <th class="w120">赛事认证：</th>
                            <td>
                                <label for="m_auth1"><input type="checkbox"   name="m_auth[]" id="m_auth1" value="WMM" autocomplete="off"<?php if (strstr($_smarty_tpl->tpl_vars['data']->value['m_auth'],"WMM")){?>checked <?php }?> />WMM</label>　
                                <label for="m_auth2"><input type="checkbox"   name="m_auth[]" id="m_auth2" value="AIMS" autocomplete="off" <?php if (strstr($_smarty_tpl->tpl_vars['data']->value['m_auth'],"AIMS")){?>checked <?php }?>/>AIMS</label>
                                <label for="m_auth9"><input type="checkbox"   name="m_auth[]" id="m_auth9" value="i-TRA" autocomplete="off" <?php if (strstr($_smarty_tpl->tpl_vars['data']->value['m_auth'],"i-TRA")){?>checked <?php }?>/>i-TRA</label>
                                <label for="m_auth10"><input type="checkbox"   name="m_auth[]" id="m_auth10" value="UTMB" autocomplete="off" <?php if (strstr($_smarty_tpl->tpl_vars['data']->value['m_auth'],"UTMB")){?>checked <?php }?>/>UTMB</label>
                                <label for="m_auth11"><input type="checkbox"   name="m_auth[]" id="m_auth11" value="ISF" autocomplete="off" <?php if (strstr($_smarty_tpl->tpl_vars['data']->value['m_auth'],"ISF")){?>checked <?php }?>/>ISF</label>
                                <label for="m_auth12"><input type="checkbox"   name="m_auth[]" id="m_auth12" value="CSA" autocomplete="off" <?php if (strstr($_smarty_tpl->tpl_vars['data']->value['m_auth'],"CSA")){?>checked <?php }?>/>CSA</label>
                                <br>
                                <label for="m_auth3"><input type="checkbox"   name="m_auth[]" id="m_auth3" value="IAAF_G" autocomplete="off" <?php if (strstr($_smarty_tpl->tpl_vars['data']->value['m_auth'],"IAAF_G")){?>checked <?php }?>/>IAAF-金</label>　
                                <label for="m_auth4"><input type="checkbox"   name="m_auth[]" id="m_auth4" value="IAAF_S" autocomplete="off" <?php if (strstr($_smarty_tpl->tpl_vars['data']->value['m_auth'],"IAAF_S")){?>checked <?php }?>/>IAAF-银</label>　
                                 <label for="m_auth5"><input type="checkbox"   name="m_auth[]" id="m_auth5" value="IAAF_C" autocomplete="off"<?php if (strstr($_smarty_tpl->tpl_vars['data']->value['m_auth'],"IAAF_C")){?>checked <?php }?> />IAAF-铜</label>　<br>
                                 <label for="m_auth6"><input type="checkbox"   name="m_auth[]" id="m_auth6" value="CAA_G" autocomplete="off" <?php if (strstr($_smarty_tpl->tpl_vars['data']->value['m_auth'],"CAA_G")){?>checked <?php }?> />CAA-金</label>　
                                <label for="m_auth7"><input type="checkbox"   name="m_auth[]" id="m_auth7" value="CAA_S" autocomplete="off" <?php if (strstr($_smarty_tpl->tpl_vars['data']->value['m_auth'],"CAA_S")){?>checked <?php }?> />CAA-银</label>　
                                 <label for="m_auth8"><input type="checkbox"   name="m_auth[]" id="m_auth8" value="CAA_C" autocomplete="off" <?php if (strstr($_smarty_tpl->tpl_vars['data']->value['m_auth'],"CAA_C")){?>checked <?php }?> />CAA-铜</label>
                            </td>
                        </tr>
                        <tr class="m_enterMode">
                            <th class="w120">报名方式：
                            </th>
                            <td>   
                            <input id="m_enterMode1" type="radio" name="m_enterMode" checked="" value="location" class="textinput">
                            <label for="m_enterMode1">知行官网</label>  　                          
                            <input id="m_enterMode2" type="radio" name="m_enterMode" <?php if ($_smarty_tpl->tpl_vars['data']->value['m_enterMode']==="remote"){?>checked=""<?php }?> value="remote" class="textinput">
                            <label for="m_enterMode2">赛事官网</label>
                            <input type="text" name="m_enterurl" class="textinput w270" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_enterurl'], ENT_QUOTES, 'UTF-8', true);?>
" placeholder="输入赛事官网" />
                            </td>
                        </tr>
                        <tr class="m_isshow">
                            <th class="w120">列表显示：</th>
                            <td>
                                <select name="m_isshow" id="m_isshowSelect">
                                    <option value="1" <?php if ($_smarty_tpl->tpl_vars['data']->value['m_isshow']==''){?>selected<?php }?>>显示</option>
                                    <option value="0" <?php if ($_smarty_tpl->tpl_vars['data']->value['m_isshow']=="0"){?>selected<?php }?>>隐藏</option>
                                </select>
                                <span style="color:red">*设置成隐藏后，不会出现在列表页也不可被搜索到</span>
                            </td>
                        </tr>
                        <tr class="m_placesleft">
                            <th class="w120">名额限制：</th>
                            <td><input type="text" name="m_placesleft" class="textinput w270" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_placesleft'], ENT_QUOTES, 'UTF-8', true);?>
" /></td>
                        </tr>
                        <tr class="m_des hiden">
                            <th>一句话介绍：</th>
                            <td><textarea name="m_des" style="width:90%;height:50px;"  placeholder="建议在70字以内"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_des'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                            </td>
                        </tr>
                        <tr class="m_icon">
                            <th class="w120">赛事图片：</th>
                            <td>
                                <p>赛事LOGO</p>
                                <div class="imgbox1">
                                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_icon'], ENT_QUOTES, 'UTF-8', true);?>
" alt="">
                                    <input type="hidden" name="m_icon" class="textinput w270" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_icon'], ENT_QUOTES, 'UTF-8', true);?>
" /><a class="kUpload upload_btn" value="上传图片">+</a>
                                </div>
                                <p>顶部banner图;&nbsp;&nbsp;[<a href="javascript:addbanner()">添加更多</a>]</p>
                                <div id="banner_box">
                                    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value['m_banner']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                                    <div class="imgbox2">
                                        <span class="del_banner">—</span>
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" alt="" >
                                        <input type="hidden" name="m_banner[]" class="textinput w270" value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" /><a class="kUpload upload_btn" value="上传图片">+</a>
                                        <label for="m_img<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><input type="radio" name="m_img" class="textinput w270" value="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" id="m_img<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['data']->value['m_img']){?>checked<?php }?>/><p>设置列表图</p></label>
                                    </div>
                                    <?php } ?>
                                </div>
                            </td>
                        </tr>

                        <tr class="m_special hiden">
                            <th>赛事介绍：</th>
                         <!--    <td><textarea name="m_special" style="width:90%;height:50px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_special'], ENT_QUOTES, 'UTF-8', true);?>
</textarea></td> -->
                             <td>
                                <p>赛事特色：</p>
                                <textarea  class="HTML_EDIT" name="m_special" style="width:90%; height:400px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_special'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                <p>报名须知：</p>
                                <textarea  class="HTML_EDIT" name="m_info" style="width:90%; height:400px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_info'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                <p>赛事规程：</p>
                                <textarea class="HTML_EDIT" name="m_rules" style="width:90%;height:400px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_rules'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                                <p>比赛线路：</p>
                                <textarea name="m_route" class="HTML_EDIT" style="width:90%;height:400px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_route'], ENT_QUOTES, 'UTF-8', true);?>
</textarea>
                            </td>
                        </tr>     
                    </table>
                    <input type="hidden" name="m_ptype" value="国内" />
                </div>
                <p class="box-footer">
                    <?php if ($_smarty_tpl->tpl_vars['ac']->value=='add'){?>
                    <input type="hidden" value="1" name="m_state">
                    <input type="submit" value="保存并上线" class="blue" id="release_btn">
                    <input type="submit" value="保存" class="blue" id="save_btn">
                    <?php }else{ ?>
                    <input type="submit" value="保存" class="blue">   
                    <?php }?>
                    <input type="button" value="取消" id="cancel_btn">
                </p>
                </form>
            </div><!--/ con-->
            
        </div>    
    </div><!--/ container-->
</div>
<script>
var Fields	= '<?php echo $_smarty_tpl->tpl_vars['Fields']->value;?>
';
</script>
<link type="text/css" href="/static/datapicker/timepicker/css/jquery-ui-1.8.17.custom.css" rel="stylesheet" />
 <link type="text/css" href="/static/datapicker/timepicker/css/jquery-ui-timepicker-addon.css" rel="stylesheet" />
<script type="text/javascript" src="/static/datapicker/timepicker/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="/static/datapicker/timepicker/js/jquery-ui-1.8.17.custom.min.js"></script>
<script type="text/javascript" src="/static/datapicker/timepicker/js/jquery-ui-timepicker-addon.js"></script>
<script type="text/javascript" src="/static/datapicker/timepicker/js/jquery-ui-timepicker-zh-CN.js"></script>
<script type="text/javascript" src="/static/js/classadd.js?v=1.0"></script>
<script type="text/javascript" src="/static/js/area.js?v=1.0"></script>
<script>

function area(){
    var provinces = addr_arr[0],
        initval = "<?php echo $_smarty_tpl->tpl_vars['data']->value['m_city'];?>
",
        p_id = provinces[0][0]?provinces[0][0]:1,
        $citysSelect = $("#citysSelect"),
        createoption = function(data,val){
            if(!data) return false;
            var optionHTML = "";        
            for(var key in data){    
                var selected = "";       
                if(val&&val.indexOf(data[key][1])!=-1){
                    p_id = data[key][0];
                    selected = "selected";
                }
                optionHTML += '<option value="'+data[key][1]+'" data-i="'+data[key][0]+'" '+selected+'>'+data[key][1]+'</option>';
            }
            return optionHTML;
        };
    this.html(createoption(provinces,initval)).change(function(){
        p_id = $(this).find("option:selected").attr("data-i"); 
        $citysSelect.html(createoption(addr_arr[p_id]));
    });
    $citysSelect.html(createoption(addr_arr[p_id],initval));
}
area.call($("#provincesSelect"));
var formable  = true;
function checkform(){
    if(formable){      
        formable  = false;
        return true;
    }
    return false;       
}
$(".del_banner").live("click",function(){
    $(this).parent().remove();
});
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
$("#add_mtypes").live("click",function(){
    var html = '<p><input type="text" name="m_Mtypes[]" /><span class="del_banner">—</span></p>';
    $(this).before(html);
});
$("#release_btn").click(function(){
    $("input[name=m_state]").val(0);
    return true;
});
$("#save_btn").click(function(){
    $("input[name=m_state]").val(1);
    return true;
});
</script>
<?php }?>
<script charset="utf-8" src="./static/editer/kindeditor-min.js"></script>
<script charset="utf-8" src="./static/editer/lang/zh_CN.js"></script>
<script>
var KK=null;
KindEditor.ready(function(K) {
    KK=K;
    var option  = {
            designMode : <?php echo (($tmp = @$_smarty_tpl->tpl_vars['table_cfg']->value['designMode'])===null||$tmp==='' ? true : $tmp);?>
,
            uploadJson : '/?s=editor&a=upload',
            fileManagerJson : '/?s=editor&a=manager',
            allowFileManager : false
            };

    window.editor = KK.create('.HTML_EDIT',option);
    //上传按钮
    var editor = K.editor(option);
    $('.kUpload').live("click",function() {
        var that    = this;
        editor.loadPlugin('image', function() {
            editor.plugin.imageDialog({
                imageUrl : $(that).prev("input").val(),
                clickFn : function(url, title, width, height, border, align) {
                    $(that).prev("input").val(url).prev("img").attr("src",url);
                    $(that).next("label").find("input").val(url);
                    //得到图片高宽
                    //K('#img_size').val(width+"*"+height);
                    editor.hideDialog();
                }
            });
        });
    });
});
function addbanner(){
    var html = '<div class="imgbox2">\
                <span class="del_banner">—</span>\
                <img src="" alt="">\
                <input type="hidden" name="m_banner[]" class="textinput w270" value="" /><a class="kUpload upload_btn" >+</a>\
                <label for="m_img<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><input type="radio" name="m_img[]" class="textinput w270" value="" /><p>设置列表图</p></label>\
            </div>';
    $(html).appendTo($("#banner_box"));
}
</script>
<?php echo $_smarty_tpl->getSubTemplate ('Login/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>