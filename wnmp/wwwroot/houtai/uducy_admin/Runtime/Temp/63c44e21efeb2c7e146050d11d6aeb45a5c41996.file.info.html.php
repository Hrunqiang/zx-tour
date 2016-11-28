<?php /* Smarty version Smarty-3.1.6, created on 2016-11-14 10:18:46
         compiled from "../uducy_admin/Tpl\MatchV2\info.html" */ ?>
<?php /*%%SmartyHeaderCode:1926758291f06626811-38057845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '63c44e21efeb2c7e146050d11d6aeb45a5c41996' => 
    array (
      0 => '../uducy_admin/Tpl\\MatchV2\\info.html',
      1 => 1478503485,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1926758291f06626811-38057845',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ac' => 0,
    'now' => 0,
    'data' => 0,
    'matchtype' => 0,
    'key' => 0,
    'i' => 0,
    'm_plat_num' => 0,
    'Fields' => 0,
    'table_cfg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58291f06af026',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58291f06af026')) {function content_58291f06af026($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Login/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['ac']->value=='add'||$_smarty_tpl->tpl_vars['ac']->value=='edit'){?>
<style>
#plat_num_list{padding:10px 0;}
#plat_num_list span{background: #eee;margin-right: 10px;padding:5px 10px;}
</style>
<div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con box-green">
                <form action="?s=MatchV2&a=info&ac=<?php echo $_smarty_tpl->tpl_vars['ac']->value;?>
" method='post' onsubmit="return checkform();">
                <input type="hidden" name="ctime" value="<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
"/>
            <!--     <input type="hidden" name="utime" value="<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
"/> -->
                <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['id'];?>
"/>
                <div class="box-header">
                    <h4>添加内容</h4>
                </div>
                <div class="box-content">
                    <table class="table-font" style="width:80%;">
                        <tr class="m_name">
                            <th class="w120">赛事名称：</th>
                            <td>
	                            <input type="text" id="m_name"  name="m_name" class="textinput w270" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_name'], ENT_QUOTES, 'UTF-8', true);?>
" autocomplete="off" />
                            </td>
                        </tr>
                        <tr class="m_enName">
                            <th class="w120">赛事英文名称：</th>
                            <td>
                                <input type="text"   name="m_enName" class="textinput w270" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_enName'], ENT_QUOTES, 'UTF-8', true);?>
" autocomplete="off" />
                            </td>
                        </tr>
                        <tr class="m_icon">
                            <th class="w120">赛事图标：</th>
                            <td><input type="text" name="m_icon" class="textinput w270 vpic" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_icon'], ENT_QUOTES, 'UTF-8', true);?>
" />&nbsp;<input type="button" class="kUpload" value="上传图片"></td>
                        </tr>
                        <tr class="m_img">
                            <th class="w120">赛事海报：</th>
                            <td><input type="text" name="m_img" id="m_img" class="textinput w270 vpic" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_img'], ENT_QUOTES, 'UTF-8', true);?>
" />&nbsp;<input type="button" class="kUpload" value="上传图片"></td>
                        </tr>
                        <tr class="m_banner">
                            <th class="w120" style="vertical-align:top">赛事顶部banner：</th>
                            <td>
                            <input type="text" name="m_banner[]"  class="textinput w270 vpic" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_banner'][0], ENT_QUOTES, 'UTF-8', true);?>
" />&nbsp;<input type="button" class="kUpload" value="上传图片"><br>
                            <input type="text" name="m_banner[]"  class="textinput w270 vpic" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_banner'][1], ENT_QUOTES, 'UTF-8', true);?>
" />&nbsp;<input type="button" class="kUpload" value="上传图片"><br>
                            <input type="text" name="m_banner[]"  class="textinput w270 vpic" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_banner'][2], ENT_QUOTES, 'UTF-8', true);?>
" />&nbsp;<input type="button" class="kUpload" value="上传图片"><br>
                            <input type="text" name="m_banner[]"  class="textinput w270 vpic" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_banner'][3], ENT_QUOTES, 'UTF-8', true);?>
" />&nbsp;<input type="button" class="kUpload" value="上传图片"><br>
                            <input type="text" name="m_banner[]"  class="textinput w270 vpic" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_banner'][4], ENT_QUOTES, 'UTF-8', true);?>
" />&nbsp;<input type="button" class="kUpload" value="上传图片"><br>
                            </td>
                        </tr>
                        <tr class="utime">
                            <th>比赛时间：</th>
                            <td><input name="m_GameTime" type="text" id="m_GameTime" class="textinput datepicker" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_GameTime'], ENT_QUOTES, 'UTF-8', true);?>
" onkeyup=""/></td>
                        </tr>
                        <tr class="m_untilTime">
                            <th>报名截止时间：</th>
                            <td><input name="m_untilTime" type="text" id="m_untilTime" class="textinput datepicker" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_untilTime'], ENT_QUOTES, 'UTF-8', true);?>
" onkeyup=""/></td>
                        </tr>
                        <tr class="m_city">
                            <th class="w120">比赛城市：</th>
                            <td>
                                <input type="text"   name="m_city" class="textinput w270" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_city'], ENT_QUOTES, 'UTF-8', true);?>
" autocomplete="off" />
                            </td>
                        </tr>
                        <tr class="m_area">
                            <th class="w120">比赛地点：</th>
                            <td>
                                <input type="text"   name="m_area" class="textinput w270" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_area'], ENT_QUOTES, 'UTF-8', true);?>
" autocomplete="off" />
                            </td>
                        </tr>
                        <tr class="m_country">
                            <th class="w120">比赛国家：</th>
                            <td>
                                <input type="text"   name="m_country" class="textinput w270" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_country'], ENT_QUOTES, 'UTF-8', true);?>
" autocomplete="off" />
                            </td>
                        </tr>
                        <tr class="m_Mtypes">
                            <th class="w120">比赛类型：</th>
                            <td>
                               
                                <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['matchtype']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                                    
                                 <label for="m_Mtypes<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><input type="checkbox"   name="m_Mtypes[]" id="m_Mtypes<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['n_title'];?>
" autocomplete="off" <?php if (strstr($_smarty_tpl->tpl_vars['data']->value['m_Mtypes'],($_smarty_tpl->tpl_vars['i']->value['n_title']))){?>checked <?php }?>/><?php echo $_smarty_tpl->tpl_vars['i']->value['n_title'];?>
</label>　
                                <?php } ?>
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
                        <tr class="m_des hiden">
                            <th>一句话介绍：</th>
                            <td><textarea name="m_des" style="width:90%;height:50px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_des'], ENT_QUOTES, 'UTF-8', true);?>
</textarea></td>
                        </tr>
                        <tr class="m_special hiden">
                            <th>赛事特色：</th>
                         <!--    <td><textarea name="m_special" style="width:90%;height:50px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_special'], ENT_QUOTES, 'UTF-8', true);?>
</textarea></td> -->
                             <td><textarea  name="m_special" style="width:90%; height:50px;" class="maxlength22"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_special'], ENT_QUOTES, 'UTF-8', true);?>
</textarea></td>
                        </tr>
                        <tr class="m_special hiden">
                            <th>报名须知：</th>
                         <!--    <td><textarea name="m_special" style="width:90%;height:50px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_special'], ENT_QUOTES, 'UTF-8', true);?>
</textarea></td> -->
                             <td><textarea  name="m_info" style="width:90%; height:50px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_info'], ENT_QUOTES, 'UTF-8', true);?>
</textarea></td>
                        </tr>
                        <tr class="m_rules hiden">
                            <th>赛事规程：</th>
                             <td><textarea class="HTML_EDIT" name="m_rules" style="width:90%;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_rules'], ENT_QUOTES, 'UTF-8', true);?>
</textarea></td>
                        </tr>
                        <tr class="m_Pfeature">
                            <th class="w120">产品特点：</th>
                            <td>
                                <label for="m_Pfeature1"><input type="checkbox"   name="m_Pfeature[]" id="m_Pfeature1" value="1" autocomplete="off" <?php if (in_array("1",$_smarty_tpl->tpl_vars['data']->value['m_Pfeature'])){?>checked <?php }?>/>独家授权</label>　　
                                <label for="m_Pfeature3"><input type="checkbox"   name="m_Pfeature[]" id="m_Pfeature3" value="3" autocomplete="off"  <?php if (in_array("3",$_smarty_tpl->tpl_vars['data']->value['m_Pfeature'])){?>checked <?php }?>/>官方合作</label>　
                                <label for="m_Pfeature4"><input type="checkbox"   name="m_Pfeature[]" id="m_Pfeature4" value="4" autocomplete="off"  <?php if (in_array("4",$_smarty_tpl->tpl_vars['data']->value['m_Pfeature'])){?>checked <?php }?>/>特色比赛</label>　
                                 <label for="m_Pfeature5"><input type="checkbox"   name="m_Pfeature[]" id="m_Pfeature5" value="5" autocomplete="off"  <?php if (in_array("5",$_smarty_tpl->tpl_vars['data']->value['m_Pfeature'])){?>checked <?php }?>/>专业领队</label>　<br>
                                 <label for="m_Pfeature6"><input type="checkbox"   name="m_Pfeature[]" id="m_Pfeature6" value="6" autocomplete="off"  <?php if (in_array("6",$_smarty_tpl->tpl_vars['data']->value['m_Pfeature'])){?>checked <?php }?>/>跑者保险</label>　
                                <label for="m_Pfeature7"><input type="checkbox"   name="m_Pfeature[]" id="m_Pfeature7" value="7" autocomplete="off"  <?php if (in_array("7",$_smarty_tpl->tpl_vars['data']->value['m_Pfeature'])){?>checked <?php }?>/>跑步礼包</label>　
                                <label for="m_Pfeature2"><input type="checkbox"   name="m_Pfeature[]" id="m_Pfeature2" value="2" autocomplete="off"  <?php if (in_array("2",$_smarty_tpl->tpl_vars['data']->value['m_Pfeature'])){?>checked <?php }?>/>优质赛事</label>
                                <label for="m_Pfeature8"><input type="checkbox"   name="m_Pfeature[]" id="m_Pfeature8" value="8" autocomplete="off"  <?php if (in_array("8",$_smarty_tpl->tpl_vars['data']->value['m_Pfeature'])){?>checked <?php }?>/>高性价比</label>
                                <label for="m_Pfeature9"><input type="checkbox"   name="m_Pfeature[]" id="m_Pfeature9" value="9" autocomplete="off"  <?php if (in_array("9",$_smarty_tpl->tpl_vars['data']->value['m_Pfeature'])){?>checked <?php }?>/>名额稀缺</label>
                                <label for="m_Pfeature10"><input type="checkbox"   name="m_Pfeature[]" id="m_Pfeature10" value="10" autocomplete="off"  <?php if (in_array("10",$_smarty_tpl->tpl_vars['data']->value['m_Pfeature'])){?>checked <?php }?>/>机酒全包</label>
                                <label for="m_Pfeature11"><input type="checkbox"   name="m_Pfeature[]" id="m_Pfeature11" value="11" autocomplete="off"  <?php if (in_array("11",$_smarty_tpl->tpl_vars['data']->value['m_Pfeature'])){?>checked <?php }?>/>假期优选</label>
                                <label for="m_Pfeature12"><input type="checkbox"   name="m_Pfeature[]" id="m_Pfeature12" value="12" autocomplete="off"  <?php if (in_array("12",$_smarty_tpl->tpl_vars['data']->value['m_Pfeature'])){?>checked <?php }?>/>签证便捷</label>
                            </td>
                        </tr>
                        <tr class="m_route">
                            <th>比赛线路：</th>
                            <td><textarea name="m_route" class="HTML_EDIT" style="width:90%;height:70px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_route'], ENT_QUOTES, 'UTF-8', true);?>
</textarea></td>
                        </tr>
                        <tr class="m_routeImg">
                            <th class="w120">比赛线路图：</th>
                            <td><input type="text" name="m_routeImg" id="m_routeImg" class="textinput w270 vpic" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_routeImg'], ENT_QUOTES, 'UTF-8', true);?>
" />&nbsp;<input type="button" class="kUpload" value="上传图片"></td>
                        </tr>
                        <tr class="m_ptype">
                            <th class="w120">赛事类型：
                            </th>
                            <td>   
                            <input id="sign1" type="radio" name="m_ptype" <?php if ($_smarty_tpl->tpl_vars['data']->value['m_ptype']==="国内"){?>checked=""<?php }?> value="国内" class="textinput">
                            <label for="sign1">国内</label>  　                          
                            <input id="sign2" type="radio" name="m_ptype" <?php if ($_smarty_tpl->tpl_vars['data']->value['m_ptype']==="海外"){?>checked=""<?php }?> value="海外" class="textinput">
                            <label for="sign2">海外</label>
                            <input id="sign3" type="radio" name="m_ptype" <?php if ($_smarty_tpl->tpl_vars['data']->value['m_ptype']==="运动诊疗"){?>checked=""<?php }?> value="运动诊疗" class="textinput">
                            <label for="sign3">运动诊疗</label>
                            </td>
                        </tr>
                        <tr class="m_enterMode">
                            <th class="w120">赛事方式：
                            </th>
                            <td>   
                            <input id="m_enterMode1" type="radio" name="m_enterMode" <?php if ($_smarty_tpl->tpl_vars['data']->value['m_enterMode']==="location"){?>checked=""<?php }?> value="location" class="textinput">
                            <label for="m_enterMode1">知行官网</label>  　                          
                            <input id="m_enterMode2" type="radio" name="m_enterMode" <?php if ($_smarty_tpl->tpl_vars['data']->value['m_enterMode']==="remote"){?>checked=""<?php }?> value="remote" class="textinput">
                            <label for="m_enterMode2">赛事官网</label>
                            </td>
                        </tr>
                        <tr class="m_enterurl">
                            <th class="w120">赛事官网报名地址：</th>
                            <td><input type="text" name="m_enterurl" class="textinput w270" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_enterurl'], ENT_QUOTES, 'UTF-8', true);?>
" /></td>
                        </tr>
                        <tr class="m_isshow">
                            <th class="w120">列表显示：</th>
                            <td>
                                <select name="m_isshow" id="m_isshowSelect">
                                    <option value="1">显示</option>
                                    <option value="0" <?php if ($_smarty_tpl->tpl_vars['data']->value['m_isshow']==0){?>selected<?php }?>>隐藏</option>
                                </select>
                                <span style="color:red">*设置成隐藏后，不会出现在列表页也不可被搜索到</span>
                            </td>
                        </tr>
                        <tr class="m_sign">
                            <th class="w120">是否热门推荐<?php echo $_smarty_tpl->tpl_vars['data']->value['m_sign'];?>
：
                            </th>
                            <td>
                            <input id="m_sign1" type="radio" name="m_sign" <?php if ($_smarty_tpl->tpl_vars['data']->value['m_sign']==1){?>checked=""<?php }?> value="1" class="textinput">
                            <label for="m_sign1">热门</label>　
                            <input id="m_sign2" type="radio" name="m_sign" <?php if ($_smarty_tpl->tpl_vars['data']->value['m_sign']==="0"||$_smarty_tpl->tpl_vars['data']->value['m_sign']==''){?>checked=""<?php }?> value="0" class="textinput">
                            <label for="m_sign2">正常</label>
                            </td>
                        </tr>
                        <tr class="m_places">
                            <th class="w120">最大名额：</th>
                            <td>
                                <input type="text" name="m_places" class="textinput w270" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_places'], ENT_QUOTES, 'UTF-8', true);?>
" />
                                <input type="hidden" name="m_plat_num" value='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m_plat_num']->value, ENT_QUOTES, 'UTF-8', true);?>
'>
                                <div><input type="button" value="分配渠道名额" id="plat_num_add"><p id="plat_num_list"></p></div>
                            </td>
                        </tr>
                        <tr class="m_placesleft">
                            <th class="w120">名额库存：</th>
                            <td><input type="text" name="m_placesleft" class="textinput w270" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_placesleft'], ENT_QUOTES, 'UTF-8', true);?>
" /></td>
                        </tr>
                        <tr class="m_order">
                            <th>排序：</th>
                            <td><input name="m_order" type="text" id="m_order" class="textinput" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_order'], ENT_QUOTES, 'UTF-8', true);?>
"  onkeyup="value=value.replace(/[^\d]/g,'') "/></td>
                        </tr>
                        <tr class="m_utime">
                            <th>最后更新时间：</th>
                            <td><input name="m_utime" type="text" id="m_utime" class="textinput datepicker" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_utime'], ENT_QUOTES, 'UTF-8', true);?>
" onkeyup=""/></td>
                        </tr>  
                        <tr class="m_state">
                            <th class="w120">赛事状态：
                            </th>
                            <td>
                            <input id="m_state1" type="radio" name="m_state" <?php if ($_smarty_tpl->tpl_vars['data']->value['m_state']==="1"||$_smarty_tpl->tpl_vars['data']->value['m_state']==''){?>checked=""<?php }?> value="1" class="textinput">
                            <label for="m_state1">下线</label>　
                            <input id="m_state2" type="radio" name="m_state" <?php if ($_smarty_tpl->tpl_vars['data']->value['m_state']==="0"){?>checked=""<?php }?> value="0" class="textinput">
                            <label for="m_state2">正常</label>
                            </td>
                        </tr>
                        <tr class="m_repeat_reg_able">
                            <th class="w120">允许重复报名：
                            </th>
                            <td>
                            <input id="m_repeat_reg_able1" type="radio" name="m_repeat_reg_able" <?php if ($_smarty_tpl->tpl_vars['data']->value['m_repeat_reg_able']==="1"||$_smarty_tpl->tpl_vars['data']->value['m_repeat_reg_able']==''){?>checked=""<?php }?> value="1" class="textinput">
                            <label for="m_repeat_reg_able1">允许</label>　
                            <input id="m_repeat_reg_able2" type="radio" name="m_repeat_reg_able" <?php if ($_smarty_tpl->tpl_vars['data']->value['m_repeat_reg_able']==="0"){?>checked=""<?php }?> value="0" class="textinput">
                            <label for="m_repeat_reg_able2">不允许</label>
                            </td>
                        </tr>
                        <tr class="m_releaseTime">
                            <th>上线时间：</th>
                            <td><input name="m_releaseTime" type="text" id="m_releaseTime" class="textinput datepicker" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_releaseTime'], ENT_QUOTES, 'UTF-8', true);?>
" onkeyup=""/></td>
                        </tr>
                        <tr class="m_offineTime">
                            <th>下线时间：</th>
                            <td><input name="m_offineTime" type="text" id="m_offineTime" class="textinput datepicker" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_offineTime'], ENT_QUOTES, 'UTF-8', true);?>
" onkeyup=""/></td>
                        </tr> 
                        <tr class="m_attentions hiden">
                            <th>赛事注意事项：</th>
                         <!--    <td><textarea name="m_special" style="width:90%;height:50px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_special'], ENT_QUOTES, 'UTF-8', true);?>
</textarea></td> -->
                             <td><textarea  name="m_attentions" style="width:90%; height:50px;" class="maxlength22"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['m_attentions'], ENT_QUOTES, 'UTF-8', true);?>
</textarea></td>
                        </tr>                    
                    </table>
                </div>
                
                <div class="box-footer">
                    <div class="box-footer-inner">
                    	<input type="submit" value="确定提交" /> 或 <a href="/?s=Classes&a=content&ac=list">取消</a>
                    </div>
                </div>
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
    <script>
function checkform(){
    return true;       
}
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
var $cid = $('#cid');
$('#n_title').keyup(function(){
	var html = "";
	if($(this).val()!==""){
		$.getJSON("/?s=Classes&a=checkname&cid="+$cid.val()+"&info="+$(this).val(),function(data){
			if(data.error==0){
				for(i=0;i<data.data.length;i++){
					html+="<p>"+data.data[i].n_title+"</p>";
				}
			}
			$("#hint").html(html);
		});
	}else{
		$("#hint").html(html);
	}
});
var m_plat_str = '<?php echo $_smarty_tpl->tpl_vars['m_plat_num']->value;?>
';
if(m_plat_str){
    var m_plat_num = JSON.parse('<?php echo $_smarty_tpl->tpl_vars['m_plat_num']->value;?>
');
}else{
    var m_plat_num = {};
}

$("#plat_num_add").click(function(){
    var name = prompt("请输入渠道名");
    if(!name) return false;
    var num = prompt("请输入渠道分配的数量");
    if(!num) return false;
    $("<span>"+name+":"+num+"</span>").appendTo($("#plat_num_list"));
    m_plat_num[name] = num ;
    $("input[name=m_plat_num]").val(JSON.stringify(m_plat_num));
});
$("#plat_num_list").find("span").live("click",function(){
    if(!confirm("确认删除？"))  return false;
    var html = $(this).html();
    var name = html.split(":");
    if(m_plat_num[name[0]]){
        delete m_plat_num[name[0]]
        $(this).remove();
        $("input[name=m_plat_num]").val(JSON.stringify(m_plat_num));
    }else{
        alert("删除失败");
    }
    
});
if(m_plat_num){
    var listhtml = "";
    for(var key in m_plat_num){
        listhtml += "<span>"+key+":"+m_plat_num[key]+"</span>";
    }
    $("#plat_num_list").html(listhtml);
}
</script>
<?php }?>
<script charset="utf-8" src="./static/editer/kindeditor-min.js"></script>
<script charset="utf-8" src="./static/editer/lang/zh_CN.js"></script>
<script>
var KK=null;

KindEditor.ready(function(K) {
	KK=K;
	var option	= {
			designMode : <?php echo (($tmp = @$_smarty_tpl->tpl_vars['table_cfg']->value['designMode'])===null||$tmp==='' ? true : $tmp);?>
,
			uploadJson : '/?s=editor&a=upload',
            fileManagerJson : '/?s=editor&a=manager',
            allowFileManager : false
			};

    window.editor = KK.create('.HTML_EDIT',option);
    //上传按钮
    var editor = K.editor(option);
	K('.kUpload').click(function() {
         var that    = this;
		editor.loadPlugin('image', function() {
			editor.plugin.imageDialog({
				imageUrl : $(that).prev("input").val(),
				clickFn : function(url, title, width, height, border, align) {
                    $(that).prev("input").val(url);
					//得到图片高宽
					//K('#img_size').val(width+"*"+height);
					editor.hideDialog();
				}
			});
		});
	});
	var colorpicker;
	K('#colorpicker').bind('click', function(e) {
		e.stopPropagation();
		if (colorpicker) {
			colorpicker.remove();
			colorpicker = null;
			return;
		}
		var colorpickerPos = K('#colorpicker').pos();
		colorpicker = K.colorpicker({
			x : colorpickerPos.x,
			y : colorpickerPos.y + K('#colorpicker').height(),
			z : 19811214,
			selectedColor : 'default',
			noColor : '无颜色',
			click : function(color) {
				K('#n_color').val(color);
				K('#n_title').css({"color":color});
				colorpicker.remove();
				colorpicker = null;
			}
		});
	});
	K(document).click(function() {
		if (colorpicker) {
			colorpicker.remove();
			colorpicker = null;
		}
	});

});
</script>
<?php echo $_smarty_tpl->getSubTemplate ('Login/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>