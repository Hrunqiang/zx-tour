<?php /* Smarty version Smarty-3.1.6, created on 2016-10-10 06:14:29
         compiled from "../DataSource/Tpl\Matchinfo\index.html" */ ?>
<?php /*%%SmartyHeaderCode:127157440ff6a0a169-99905471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '531e96a4ffd6b502f4ebab295e5b7fb88970efae' => 
    array (
      0 => '../DataSource/Tpl\\Matchinfo\\index.html',
      1 => 1473301881,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127157440ff6a0a169-99905471',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57440ff6d45b8',
  'variables' => 
  array (
    'info' => 0,
    'auths' => 0,
    'featureHTML' => 0,
    'scenicList' => 0,
    'i' => 0,
    'vo' => 0,
    'collection' => 0,
    'order' => 0,
    'varable' => 0,
    'now' => 0,
    'meal' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57440ff6d45b8')) {function content_57440ff6d45b8($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Comon/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<title>知行合逸</title>
<style>
.wrap{padding-bottom: 60px;    word-wrap: break-word;background: #F5F5F9;}
.banner{background: #FFF;margin-bottom: 5px;}
.match_base{background: #FFF;padding:1.21428rem;margin:0  auto 1.2142rem;}
.match_base .flexBox{border-bottom:1px solid #efeef3;padding-bottom:15px;}
.match_base .flexBox .countdown{height: auto!important;width: 5.3557rem;}
.match_base .flexBox .match_icon{width: 60px;height: 60px;margin-right: 15px;}
.match_base .flexBox .match_icon img{width: 100%;height: 100%;border: 1px solid rgba(156,156,156,0.2);border-radius: 0.535rem;}
.match_base .flexBox .weui_media_title,.match_base .flexBox .weui_media_desc{font-size: 12px;line-height: 1.2;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 2;}
.match_base .match_types{padding:1.21428rem 0;border-bottom:1px solid #efeef3;font-size: 12px;}
.match_base .match_types>ul{overflow: hidden;}
.match_base .match_types>ul>li{width: 50%;float: left;/*margin-bottom: 10px;*/color: #888888;}
.match_base .match_types>ul>li .icon{height: 1.2285rem;width: 1.214285rem;background-image: url(/static/images/icons.png);background-size:12.3928571rem /*14.428571rem*/;display: inline-block;margin-right: 0.5rem;}
.match_base .match_types>ul>li .icon_calendar{background-position:-11.1428571rem -5.59142rem;}
.match_base .match_types>ul>li .icon_position{width: 0.93857rem;background-position:-11.102857rem -6.8285rem;}
.match_base .match_types>ul>li .icon_types{background-position:-9.342857142857143rem -7.314285714rem;}
/*.match_base .match_des{padding-top:10px;}*/
.match_base .match_des>h5{margin: 1.07142rem auto;}
.match_base .match_des p{font-size: 1rem;}

.match_feature{background: #FFF;margin:0  auto 1.2142rem;padding:0.7142857142857143rem 1.071428571428571rem;font-size: 0.857142rem;}
.match_feature .flex_1>div{height: 2.93rem;border-right:1px solid #efeef3;}
.match_feature .flex_1:last-child>div{border:none; }
.match_feature .flex_1>p{text-align: center;padding:0.3571428571428571rem 0 0;}

.footer{padding:0.6428571428571429rem 1.071428571428571rem;background: rgba(255,255,255,.9);font-size: 12px;color:#888888;position: fixed;bottom:0;width: 100%;box-sizing:border-box;max-width: 680px;}
.footer .halficon{margin-right: 1.071428571428571rem;}
.footer .contact{width: 1.5rem;height: 1.5rem;background: url(/static/images/phone_icons.png) no-repeat;background-size: 1.408571428571429rem;}
.footer .collection{width:1.5rem;height: 1.5rem;background-position:-6.55rem -2.64285rem;background-image: none;}
.footer .collection #icon_star{width: 100%;height: 100%;}
.collected .collection{width:1.5rem;height: 1.5rem;/*background-position:-8.3014285rem -1.225714rem;*/}

.match_info,.match_meal,.match_scenic{background: #FFF;padding:1.214285rem;margin-bottom: 1.428571rem;}
.match_info .match_des{margin-top: 2.571248rem;}
.match_info .match_des_content{/*margin-top: 5px;*/font-size: 1rem;}
.match_info table{width:100% ;}
.match_info table th{color:#000;font-weight: normal;text-align: left;font-size: 1rem;padding-top: 1.21428rem;width: 23%;}
.match_info table td{color:#888888;padding-top: 1.21428rem;font-size: 1rem;}
.match_info .rounteImg{width: 100%;/*padding-bottom:50%;*/position: relative;}
.match_info .rounteImg img{width: 100%;/*position: absolute;*/height: 100%;}

.match_scenic .match_scenic_t,.match_price_t{color: #000;margin-top: 0.8rem;word-wrap:break-word;font-size: 1.0714rem;}
.match_scenic .match_scenic_des,.match_price_des{color: #888888;word-wrap:break-word;font-size: 1rem;}
#cityselect{color:#888888;font-size: 1rem;}
#cityselect span{/*margin-left: 0.714rem;*/color:#000;display: inline-block;padding:0 0.36rem;}
#cityselect span.curr{color:#04BE02;font-weight: normal;}
#cityselect span.curr:before{content:"";background-image: url(/static/images/icons.png);background-size: 12.392rem /*14.43rem*/;width: 0.8571rem;height: 0.9857rem;background-position: -11.60rem -1.235rem;margin-top: 0.30714rem;margin-right: 0.214285rem; float: left;
}
#scroller{padding:1.428571rem 0;font-size: 1rem;transform: translate(0,0,0);}
#scroller_slide.scroll{position: fixed;top:0;left:0;background: #FFF;width: 100%;;z-index: 10000;padding-left: 15px;}

/*支付宝
#scroller span{color:#000;border: 1px solid #888888;padding:2px 10px;border-radius: 13px;margin-right: 10px;}*/
#scroller span.curr{color:#FB6165;}

.match_meal_info{font-size: 1rem;}
.match_meal_info del{margin-left: 1.428571428571429rem;}
.price_info{border-top:1px solid #efeef4;}
.price_info .match_price_h{font-size: 1.0714rem;color: #000;font-weight: bold;padding:1.14rem 0 0 0;}
.nonstop{color:#000;border: 1px solid rgba(156,156,156,0.4);padding:0.357rem 1.071rem;border-radius: 1.214rem;margin-right:0.4rem;font-size: 1rem;}
.meal_trip{padding:2.0714285rem 0 1.1428rem;font-size: 1rem;}
.meal_trip>p{padding:0.3571428571428571rem 0 0px 2.142857142857143rem;color:#000;position: relative;}
.meal_trip>div{border-left:1px dashed #999999;padding:0px 0 1.428571rem 1.35714rem;color:#999;margin-left: 0.642857rem;}
.meal_trip>p:before{    
    content: "";
    background-image: url(/static/images/icons.png);
    background-repeat: no-repeat;
    background-size: 12.39rem /*14.43rem*/;
    display: inline-block;
    margin-right: 0.3571rem;
    background-position: -9.642rem -7.214rem;
    position: absolute;
    left:0px;
}
.meal_trip .hotel:before{
    height: 1.441rem;
    width: 1.5rem;
    background-position: -9.56rem -5.9rem;
}
.meal_trip .match:before{
    height: 1.321rem;
    width: 1.5rem;
    background-position: -9.5rem -7.31rem;
}
.meal_trip .other:before{
    height: 1.314rem;
    width: 1.314rem;
    background-position: -11.131rem -4.3rem;
}
.meal_trip .airplane:before{
    height: 1.5rem;
    width: 1.5rem;
    background-position: -9.5rem -4.301rem;
}
/*//////////////////////////////////////////新加样式////////////////////////////////////*/
.flexBox .flex_1 .weui_media_desc{font-size: 0.92857rem;}
.match_base .flexBox .weui_media_title{font-size: 1.285714rem;}
.match_base .flexBox .countdown .weui_media_desc{font-size: 1rem;}
.match_base .match_types{font-size: 1rem;}
.match_types .icon_calendar{float: left; margin-top: 0.1428571rem;}
.match_types .icon_position{float: left; margin-top: 0.1428571rem;}
.match_types .icon_types{float: left; margin-top: 0.1428571rem;}
.match_types div{font-size: 0.9285714285714286rem;padding-top: 0.14285rem;}
.match_base .match_types li:nth-child(1){margin-bottom: 1rem;}
.match_base .match_types li:nth-child(2){margin-bottom: 1rem;}
.match_base .match_des div{font-size: 1rem;color: #888888;}
.match_info_border_botom{height: 1px;position: relative;background: #efeef4;top: 3.85714rem;}
.match_info .match_des_content p{padding-top: 1.071428rem;}
.match_info .match_des_content .rounte{color: #888888;padding-bottom: 1.071428rem;}
.match_meal_info .orange .color-g9{color: #B0B0B0;font-size: 0.857142rem;}
.flexBox{padding-top: 1rem;}
.footer{padding-top: 0.6428571428571429rem;z-index: 100;}
.meal_trip div:last-child{border-left: none;padding-bottom: 0;}
/*.match_meal_info .orange{margin-top: 0.514rem;}*/
.match_meal_info .orange .price_tag{border: 1px solid #00AAEE;padding: 1px 0.36rem;border-radius: 0.285rem;margin-right: 12px;}
.weui_btn{line-height: 3.00rem;border-radius: 0.36rem;font-size: 1.285rem;}
.borderLeft{overflow: hidden;}
.borderLeft p{font-weight: normal;}
._price{font-size:1.42rem;font-weight: 500;}
.match_types ul li{overflow: hidden;}
.match_types ul li:nth-child(3) span{display: inline-block;height: 0.9285rem;width: 1px;background: rgba(166,166,166,0.5);margin: 0 0.285rem;vertical-align: -0.1428rem}
.match_des_content .match_des_content_jgex span{display: inline-block;height: 0.9285rem;width: 1px;background: rgba(166,166,166,0.5);margin: 0 0.285rem;vertical-align: -0.1428rem}
.weui_toast{width: 8.57142rem;height: 8.571428571428571rem;margin-left: -4.5rem;font-size: 1.285rem;min-height: 0;}
.weui_loading_toast .weui_toast_content{font-size: 1.285rem;}
.alert_pb1{overflow: hidden;text-align: left;}
.alert_pb2{overflow: hidden;text-align: left;}
.alert_pb3{overflow: hidden;text-align: left;}
.alert_pb4{overflow: hidden;text-align: left;}
.alert_pb1 div{float: left;}
.alert_pb1 div:nth-child(1){width: 32%;margin-left: 1.428rem;}
.alert_pb1 div:nth-child(2){width: 60%;}
.alert_pb2 div{float: left;}
.alert_pb2 div:nth-child(1){width: 27%;margin-left: 1.428rem;}
.alert_pb2 div:nth-child(2){width: 60%;}
.alert_pb3 div{float: left;}
.alert_pb3 div:nth-child(1){width: 22%;margin-left: 1.428rem;}
.alert_pb3 div:nth-child(2){width: 60%;}
.alert_pb4 div{float: left;}
.alert_pb4 div:nth-child(1){width: 32%;margin-left: 1.428rem;}
.alert_pb4 div:nth-child(2){width: 60%;}
.flex_1_center div:nth-child(2){margin: 0 0 0 0.5rem;}
.flex_1_center div:nth-child(3){margin: 0 0 0 0.5rem;}
.flex_1_center .flex_1 div:nth-child(2){margin: 0 0;}
.match_des_content table tbody tr:nth-child(4) th{vertical-align: top;}
.match_des_content table tbody tr:nth-child(4) td p{padding-top: 0;}
#match_course{overflow: hidden;}
#match_course p{width: 50%;float: left;}
/*.weui_btn_primary:not(.weui_btn_disabled):visited{color: rgba(255,255,255,0.1)!important;}*/
.weui_btn_primary:active{background: #039702;color: #68c167!important;}
.primary_border::after{content: " ";width: 198%;height: 200%;position: absolute;top: 0;left: 0;border: 1px solid #FB6165;-webkit-transform: scale(0.5);transform: scale(0.5);-webkit-transform-origin: 0 0;transform-origin: 0 0;box-sizing: border-box;border-radius: 10px;}
.primary_border:active{background: #EEEEEE!important;}
.hotel_size div:nth-child(2){margin: 0 0 0 0.4rem;}
.hotel_size div:nth-child(3){margin: 0 0 0 0.4rem;}
.hotel_size .flex_1 div:nth-child(2){margin: 0 0;}
.dhzx{position: absolute;right: 0;bottom: 0;color: #00AAEE;line-height: 3.295rem;font-size: 1.214285714285714rem;width: 50%;text-align: center;border-left: 1px solid #D5D5D6;}
.weui_dialog_ft .advice1{opacity: 0;}
.weui_dialog_ft .advice2{font-size: 1.214285714285714rem;}
.weui_dialog_confirm .weui_dialog .advice3{font-size: 1.071428571428571rem;text-align: center;}
.advice4{font-size: 1.214285714285714rem;}
/*.advice3 div{width: 12.57142857142857rem;margin: 0 auto;}*/
.advice3 div{text-align: left;}
/*///////////////////////////////////////////////////////支付宝样式修改//////////////////////////////////////////*/
#scroller span{color:#000;border: 1px solid #D1D1D1;padding:0.1428571428571429rem 0.7142857142857143rem;border-radius: 1rem;margin-right: 0.7142857142857143rem;}
.weui_btn_dialog.primary{color: #00AAEE!important;}
.weui_dialog_hd{padding: 1.5rem 0 0.5rem 0;}
.weui_dialog_bd{padding: 0 1.071428571428571rem;}
.weui_dialog_ft{margin-top: 1.428571428571429rem;}
.match_price_t{font-size: 1rem;}
.weui_dialog{width: 72%;border-radius: 0.5rem;}
.advice3 div{padding: 0px 1.071428571428571rem;}
.weui_dialog_bd{color: #000000;}
.horizontal{margin-bottom: 1.714285714285714rem!important;}
#wrapper { position:relative; z-index:1; width:100%;height: 100%; overflow:hidden;display: block;} 
#scroller { width:107.1428571428571rem; float:left;height: 100%; } 
</style>
<div class="wrap">
    <div class="banner"><?php echo $_smarty_tpl->getSubTemplate ('Comon/banner.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
    <div class="match_base">
        <div class="flexBox ">
            <div class="match_icon">
                <img class="weui_media_appmsg_thumb" src="<?php echo $_smarty_tpl->tpl_vars['info']->value['m_icon'];?>
" alt="">
            </div>
            <div class="flex_1">
                <h4 class="weui_media_title"><?php echo $_smarty_tpl->tpl_vars['info']->value['m_name'];?>
</h4>
                <p class="weui_media_desc"><?php echo $_smarty_tpl->tpl_vars['info']->value['m_enName'];?>
</p>
            </div>
            <div class="countdown">
                <p class="weui_media_desc" id="countdown">00:00:00</p>
                <p class="weui_media_desc" id="countdown_w">截止报名</p>
            </div>
        </div>
        <div class="match_types">
            <ul>
                <li><i class="icon icon_calendar"></i><?php echo substr($_smarty_tpl->tpl_vars['info']->value['m_GameTime'],0,10);?>
</li>
                <li><i class="icon icon_position"></i><?php echo $_smarty_tpl->tpl_vars['info']->value['m_country'];?>
 <?php echo $_smarty_tpl->tpl_vars['info']->value['m_city'];?>
</li>
                <li <?php if ($_smarty_tpl->tpl_vars['auths']->value==''){?>style="width:100%"<?php }?>><i class="icon icon_types"></i><?php echo str_replace("|","<span></span>",$_smarty_tpl->tpl_vars['info']->value['m_Mtypes']);?>
</li>
                <li><div><?php echo $_smarty_tpl->tpl_vars['auths']->value;?>
</div></li>
            </ul>
        </div>
        <div class="match_des">
            <h5 class="borderLeft"><span class="borderLeft—green"></span>赛事特色</h1>
            <div class="line3"><?php echo $_smarty_tpl->tpl_vars['info']->value['m_special'];?>
</div>
        </div>
    </div><!--end of match_base -->
    <?php echo $_smarty_tpl->tpl_vars['featureHTML']->value;?>
 
    	<!--//////////////////////////////////////////////////////加边框///////////////////////////////////////////////////////////-->
    	<div class="match_info_border_botom"></div>
    <div class="match_info">
        	<span class="nonstop" data="match_info">赛事介绍</span>
            <span class="nonstop" data="match_meal">行程套餐</span>
            <!--<span class="nonstop" data="match_info">赛事介绍</span>-->
            <?php if ($_smarty_tpl->tpl_vars['scenicList']->value){?>
            <span class="nonstop" data="match_scenic">周边景点</span>
            <?php }?>
        <div class="match_des">
            <h5 class="borderLeft"><span class="borderLeft—green"></span>赛事介绍</h1>
            <div class="match_des_content">
                <table>
                    <tr><th>比赛时间：</th><td><?php echo $_smarty_tpl->tpl_vars['info']->value['m_GameTime'];?>
</td></tr>
                    <tr><th>比赛地点：</th><td><?php echo $_smarty_tpl->tpl_vars['info']->value['m_area'];?>
</td></tr>
                    <tr><th>比赛类型：</th><td class="match_des_content_jgex"><?php echo str_replace("|","<span></span>",$_smarty_tpl->tpl_vars['info']->value['m_Mtypes']);?>
</td></tr>
                    <tr><th>报名须知：</th><td><?php echo $_smarty_tpl->tpl_vars['info']->value['m_info'];?>
</td></tr>
                </table>
                <p>比赛路线：</p>
                <div class="rounte"><?php echo $_smarty_tpl->tpl_vars['info']->value['m_route'];?>
</div>
                <?php if ($_smarty_tpl->tpl_vars['info']->value['m_routeImg']){?>
                <div class="rounteImg">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['info']->value['m_routeImg'];?>
" alt="">
                </div>
                <?php }?>
            </div>
        </div>
    </div>

    <div class="match_meal">
        <div class="match_des">
            <h5 class="borderLeft"><span class="borderLeft—green"></span>行程套餐<p class="fr" id="cityselect">选择出发城市</p></h1>
            <div id="scroller_slide" style="overflow: hidden;">
            	<div id="wrapper"><div class="" id="scroller"></div></div>
            </div>
            <div class="match_meal_content">           
            </div>
        </div>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['scenicList']->value){?>
    <div class="match_scenic">
        <div class="match_des">
            <h5 class="borderLeft"><span class="borderLeft—green"></span>周边景点</h1>
            <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['scenicList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
            <p class="match_scenic_t"><?php echo $_smarty_tpl->tpl_vars['i']->value['s_name'];?>
</p>
            <p class="match_scenic_des"><?php echo $_smarty_tpl->tpl_vars['i']->value['s_des'];?>
</p>
            <?php if ($_smarty_tpl->tpl_vars['i']->value['s_img']){?>
                <div class="flexBox flex_1_center">
                    <?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['i']->value['s_img']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
                    <div class="flex_1">
                    	<div style="width: 100%;position: relative;display: inline-block;">
                    		<div style="margin-top: 75%;"></div>
                    		<div style="position: absolute;left: 0;top: 0;right: 0;bottom: 0;">
                    			<img style="width: 100%;height:100%;margin: 0 auto;" src="<?php echo $_smarty_tpl->tpl_vars['vo']->value;?>
" alt="">
                    		</div>
                    	</div>
                    </div>
                    <?php } ?>
                </div>
            <?php }?>
            <?php } ?>
        </div>
    </div>
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ('Comon/hotList.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <div class="footer flexBox">
        <!--<?php if ($_smarty_tpl->tpl_vars['collection']->value){?>
        <div data="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
" class="collected" id="collect">
        <?php }else{ ?>-->
        <!--<div data="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
" class="" id="collect">
        <?php }?>
            <i class="halficon collection">
            	<img id="icon_star" src="/static/images/icon_star_1.png"/>
            </i><p>想跑</p>
        </div>-->
        <div class="_advice"><a onclick="return clear()" href="tel:4000-842-195"><i class="halficon contact"></i><p style="color:#888888">咨询</p></a></div>
        <div class="flex_1">
        <?php if ($_smarty_tpl->tpl_vars['order']->value['paystats']==5){?>
            <a href="/Enroll/userdata?orderid=<?php echo $_smarty_tpl->tpl_vars['order']->value['orderid'];?>
" class="weui_btn weui_btn_primary color-w primary_border"style="background: #FFFFFF;color: #FB6165!important;">继续报名</a>
        <?php }elseif($_smarty_tpl->tpl_vars['order']->value['paystats']==1){?>
            <button href="javascript:void(0);" class="weui_btn weui_btn_disabled weui_btn_default">已报名</button>
        <?php }else{ ?>
            <?php if ($_smarty_tpl->tpl_vars['varable']->value){?> 
                <?php if ($_smarty_tpl->tpl_vars['info']->value['m_placesleft']<=20){?>
                    <?php if ($_smarty_tpl->tpl_vars['info']->value['m_placesleft']<=0){?>
                        <button href="javascript:void(0);" class="weui_btn weui_btn_disabled weui_btn_default">名额已满</button>    
                    <?php }else{ ?>
                        <?php if ($_smarty_tpl->tpl_vars['info']->value['m_enterMode']=="remote"){?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['info']->value['m_enterurl'];?>
" class="weui_btn weui_btn_warn color-w"><span>前往官网报名</span></a>
                        <?php }else{ ?>
                        <a href="/Enroll?m_id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
" class="weui_btn weui_btn_warn color-w"><span>立即报名</span></a>
                        <?php }?>
                    <?php }?>
                <?php }else{ ?>
                    <?php if ($_smarty_tpl->tpl_vars['info']->value['m_enterMode']=="remote"){?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['info']->value['m_enterurl'];?>
" class="weui_btn weui_btn_warn color-w"><span>前往官网报名</span></a>
                    <?php }else{ ?>
                    <a href="/Enroll?m_id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
" class="weui_btn weui_btn_warn color-w"><span>立即报名</span></a>
                    <?php }?>
                <?php }?>
            <?php }else{ ?>
                <button href="javascript:void(0);" class="weui_btn weui_btn_disabled weui_btn_default">名额已满</button>
            <?php }?>
        <?php }?>
        </div>
    </div>
</div><!--end of wrap -->
<script src="/static/js/zepto.js"></script>
<script src="/static/weui/js/weui.js"></script>
<script type="text/javascript" src="/static/js/iscroll.js?v=1.2"></script>
<script type="text/javascript">
$(".banner_pic").silder();
//$(document).ready(function () {
//	var icon_star=document.getElementById('icon_star');
//	if($('#collect').attr('class')=='collected'){
//		icon_star.src='/static/images/icon_star_2.png';
//	}else{
//		icon_star.src='/static/images/icon_star_1.png';
//	}
//})
$("#collect").click(function(){
    var _this = $(this);
    var id = _this.attr("data");
    var icon_star=document.getElementById('icon_star');
    weui.Loading.show();    
    $.ajax({
        cache: false,
        url:"/Matchinfo/collection?m_id="+id,
        type: "POST",
        dataType: "json",
        timeout:3000,
        success: function(data){
            weui.Loading.hide();
            if(data.error == 0 ){            
                weui.Loading.success(2000);
                data.msg == 1 ? icon_star.src='/static/images/icon_star_1.png':icon_star.src='/static/images/icon_star_2.png';
                data.msg == 1 ?_this.removeClass("collected"):_this.addClass("collected");
//				if(data.msg==1){
//					$('#icon_star').src='/static/images/icon_star_1.png';
//					_this.addClass("collected")
//				}
//				else{
//					$('#icon_star').src='/static/images/icon_star_2.png';
//					_this.removeClass("collected")
//				}
               
//              _this.removeClass("collected") :  _this.addClass("collected");
            }else if(data.error == 304){
                window.location.href = data.msg;
            }else{
                weui.Loading.error(data.msg,2000);
            }
        },
        error:function(){
            weui.Loading.hide();
//          weui.Loading.error("系统错误！",222000);
        }
    });
});
$.fn.scrollTo = function(options){
    var defaults = {
        toT : 0,    //滚动目标位置
        durTime : 500,  //过渡动画时间
        delay : 30,     //定时器时间
        callback:null   //回调函数
    };
    var opts = $.extend(defaults,options),
        timer = null,
        _this = this,
        curTop = document.body.scrollTop||document.documentElement.scrollTop,//滚动条当前的位置
        subTop = opts.toT - curTop,    //滚动条目标位置和当前位置的差值
        index = 0,
        dur = Math.round(opts.durTime / opts.delay),
        smoothScroll = function(t){
            index++;
            var per = Math.round(subTop/dur);
            if(index >= dur){
                window.scrollTo(0,t);
                window.clearInterval(timer);
                if(opts.callback && typeof opts.callback == 'function'){
                    opts.callback();
                }
                return;
            }else{
                 window.scrollTo(0,curTop + index*per);
            }
        };
    timer = window.setInterval(function(){
        smoothScroll(opts.toT);
    }, opts.delay);
    return _this;
};
$(".nonstop").click(function(){
    var cls = $(this).attr("data");
    $(this).scrollTo({
            toT : $("."+cls).offset().top,    //滚动目标位置
            durTime : 500,  //过渡动画时间
            delay : 30,     //定时器时间
            callback:null   //回调函数
    });
});
var m_untilTime = "<?php echo $_smarty_tpl->tpl_vars['info']->value['m_untilTime'];?>
";
var m_nowTime = "<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
";
function getDate(strDate){
    var st = strDate;
    var a = st.split(" ");
    var b = a[0].split("-");
    var c = a[1].split(":");
    var date = new Date(b[0], b[1]-1, b[2], c[0], c[1], c[2])
    return date;
}
function CountDown(){
    var Now =  new Date().getTime();
    var Until =  getDate(m_untilTime).getTime();
    var countS = Math.floor((Until-Now)/1000);
    var html = "00:00:00";
    if(countS>0){
        var hour = Math.floor(countS/3600);
        if(hour>72){
            html = m_untilTime.substr(0,10);
            $("#countdown_w").html("截止报名");
            clearTimeout(CountDownTiming);
        }else{
            var min = Math.floor((countS%3600)/60);
            var sec = (countS%3600)%60;
             html = (hour<10?"0"+hour:hour)+":"+(min<10?"0"+min:min)+":"+(sec<10?"0"+sec:sec);
        }
    }
   $("#countdown").html(html);
}
var CountDownTiming = setInterval(function(){
    CountDown();
},1000);

$("div[class*=featureIcon]").tap(function(event){
    feature.alert($(this).attr("data-i"));
   $(document).bind('touchmove',function(event){event.preventDefault();},false);
});


$(function(){
    var meal = <?php echo $_smarty_tpl->tpl_vars['meal']->value;?>
,
        cityselect = $("#cityselect"),
        scroller = $("#scroller"),
        mealDiv =$(".match_meal_content"),
        offsettop = scroller.offset().top,
        currcityid = 0,
        currmealid = 0,
        cityspan = "",
        city = [],
        init = function(){
            for(var key in meal){
                if(meal[key][0]) city.push([meal[key][0],key]);
            }
            locationCity.call(cityselect,city)
            match_meal_content = $(".match_meal_content");
            $(".wrap").bind("touchmove touchend touchcancel",function(){
                var scrollTopx = document.body.scrollTop||document.documentElement.scrollTop;
                offsettop = match_meal_content.offset().top-scroller.offset().height;
                if(scrollTopx>=offsettop){
                    $("#scroller_slide").addClass("scroll");
                }else{
                    $("#scroller_slide").removeClass("scroll");
                }
            });
            $(document).on('scroll',function () {
            	var scrollTopx = document.body.scrollTop||document.documentElement.scrollTop;
                offsettop = match_meal_content.offset().top-scroller.offset().height;
                if(scrollTopx>=offsettop){
                    $("#scroller_slide").addClass("scroll");
                }else{
                    $("#scroller_slide").removeClass("scroll");
                }
            })
            // $(window).onscroll(function (argument) {
            //     var scrollTopx = document.body.scrollTop||document.documentElement.scrollTop;
                
            //     if(scrollTopx>=offsettop){
            //         console.log(offsettop+"/"+scroller.offset().top+"  fixed  "+scrollTopx);
            //         scroller.addClass("scroll");
            //     }else{
            //         console.log(offsettop+"/"+scroller.offset().top+"         "+scrollTopx);
            //         scroller.removeClass("scroll");
            //     }
            // });
        },
        locationCity = function(c){
            if(!!c&&c.length>=1){
                var html = "选择出发城市";            
                for(var i=0,l=c.length;i<l;i++){
                    html+="<span data-id='"+i+"'   data-cid='"+c[i][1]+"'>"+c[i][0]+"</span>";
                    if(c[i][0]=="不限"){
                        html = "";
                        break;
                    }
                }
                addcurr.call(this.html(html).find('span').click(function(){
                    currcityid = $(this).attr("data-id");
                    addcurr.call(cityselect.find("span"),currcityid);
                    loaddata.call(scroller,currcityid);
                }),currcityid);
                loaddata.call(scroller,currcityid);
                // this.find('span').tap(function(){
                //     currcityid = $(this).attr("data-id");
                //     addcurr.call(cityselect.find("span"),currcityid);
                //     loaddata.call(scroller,currcityid);
                // });
            }
        },
        addcurr = function(i){
            this.removeClass("curr").eq(i).addClass("curr");
        },
        loaddata = function(i){ 
            localStorage.setItem("ZX_YJBM_CITYID",city[i][1]);    
            var meallist = meal[city[i][1]][1];
            var html = "";
            var currkey = "";
            var index  = 0;
            for(var key in meallist){
                currkey = currkey?currkey:key;
                html += "<span data-id='"+key+"' data-index='"+index+"'>"+meallist[key]['g_name']+"</span>";
                index++;
            }
            addcurr.call(this.html(html).find('span').click(function(){
                currmealid = $(this).attr("data-id");
                currmealindex = $(this).attr("data-index");
                addcurr.call(scroller.find("span"),currmealindex);
                loadmeal.call(mealDiv,currmealid);
            }),0);
//          swipe();
            loadmeal.call(mealDiv,currkey);
        },
        gettrip =function(i){
            if(!i) return false;
            $.ajax({
                cache: false,
                url:"/Matchinfo/getTrip?m_id="+i,
                type: "POST",
                dataType: "json",
                timeout:3000,
                success: function(data){
                    var html = ""
                    if(data.error == 0 ){            
                        data = data.data;
                        for(var key in data){
                            var date = data[key]['trip_date'].substr(0,10);
                            html+="<p class='"+data[key]['trip_icon']+"'>"+date+'&nbsp'+data[key]['trip_title']+ "</p><div><p>"+data[key]['trip_des']+"</p>";
                            if(data[key]['trip_img']){
                                imghtml = '<div class="flexBox hotel_size">';
                                for(var i in data[key]['trip_img']){
//                                  imghtml+='<div class="flex_1" style="padding-right:5px;height:4.8928rem;width: 6.571rem;"><img style="width:100%;height: 100%;" src="'+data[key]['trip_img'][i]+'" alt="知行合逸,马位松,旅行"></div>';
                                    imghtml+='<div class="flex_1"><div style="width: 100%;position: relative;display: inline-block;"><div style="margin-top: 75%;"></div><div style="position: absolute;left: 0;top: 0;right: 0;bottom: 0;"><img style="width: 100%;height:100%;margin: 0 auto;" src="'+data[key]['trip_img'][i]+'" alt=""></div></div></div>';
                                }
                                html+=imghtml+"</div>";
                            }
                            html+="</div>";
                        } 
                    }
                    $(".meal_trip").html(html);
                },
                error:function(){
                    weui.Loading.hide();
//                  weui.Loading.error("系统错误！",222000);
                }
            });
        },
        getcourse = function(i){
            if(!i) return false;
            $.ajax({
                cache: false,
                url:"/Matchinfo/getcourse?m_id="+i,
                type: "POST",
                dataType: "json",
                timeout:3000,
                success: function(data){
                    var html = ""
                    if(data.error == 0 ){            
                        data = data.data;
                        for(var key in data){
                            math_price=Math.round(data[key].g_currprice);
                            if(math_price>0){
                                html+='<p class="orange"><span>'+data[key].g_name+'￥<span class="_price">'+math_price+'</span>';
                            }  
                        } 
                    }
                    $("#match_course").html(html);
                },
                error:function(){
                    weui.Loading.hide();
//                  weui.Loading.error("系统错误！",222000);
                }
            });
        },
        loadmeal = function(i){
            localStorage.setItem("ZX_YJBM_MEALID",i);
            var data = meal[city[currcityid][1]][1][i];
    ////////////////////////////////转换整数/////////////////////////
            var price=Math.round(data.g_price);
            var currprice=Math.round(data.g_currprice);
            var singleprice=Math.round(data.g_singleprice);
            if(data.g_name != "赛事单独报名"){
                var tips = data.g_tips ? data.g_tips :"早鸟价";
                var singlepricehtml = "";
                if(singleprice>0){
                    singlepricehtml = '<p class="orange"><span class="price_tag">'+tips+'</span><span>单房差￥<span class="_price">'+singleprice+'</span><span>起</span> <del class="color-g9">原价￥'+singleprice+'起/人</del><span></p>';
                }
                var html = '<div class="match_meal_info"><p class="match_price_t">'+data.g_name+'</p><p class="color-g9">'+data.g_des+'</p><p class="orange"><span class="price_tag">'+tips+'</span><span>双人间￥<span class="_price">'+currprice+'</span><span>起</span> <del class="color-g9">原价￥'+price+'起/人</del></span></p>'+singlepricehtml+'</div><div class="meal_trip"></div>';
                if(data.g_priceinfo || data.g_priceinfowithout){
                    html+='<div class="price_info"><p class="match_price_h">费用须知</p>';
                    if(data.g_priceinfo){
                        html+='<p class="match_price_t">费用包含</p><div class="match_price_des">'+data.g_priceinfo+'</div>';
                    }
                    if(data.g_priceinfowithout){
                        html+='<p class="match_price_t">费用不包含</p><div class="match_price_des">'+data.g_priceinfowithout+'</div>';
                    }
                    html+='</div>';
                }
                $(".match_meal_content").html(html);
                gettrip(i);
            }else{
                var html = '<div class="match_meal_info"><p class="match_price_t">'+data.g_name+'</p><p class="color-g9">'+data.g_des+'</p><p id="match_course"></p></div>'; 
                if(data.g_priceinfo){
                    html+='<div class="price_info"><p class="match_price_h">费用须知</p>';
                    if(data.g_priceinfo){
                        html+='<div class="match_price_des">'+data.g_priceinfo+'</div>';
                    }
                    html+='</div>';
                }
                $(".match_meal_content").html(html); 
                getcourse(data.g_mid);
            }    
        },
        getLocation = function(){
            if (navigator.geolocation){
                navigator.geolocation.getCurrentPosition(function (position) {  
                    alert("Latitude: " + position.coords.latitude +" Longitude: " + position.coords.longitude)
                });
            }else{
                alert("Geolocation is not supported by this browser.");
            }
        },
        reset = function(){
            $(".match_meal").hide();
            $("span[data=match_meal]").hide();
        };
//      distance=0,
//      star=0,
//      bcex=0,
//      distance_all=0,
//      MaxSwipePos = 0,
//      isMove = false;
//      touchstime = 0,
//      touchetime = 0,
//      touch = function(event){
//          switch(event.type){
//              case "touchstart":
//                  if(isMove) return  ;
//                  isMove = true;
//                  touchstime=new Date().getTime();
//                  star=event.touches[0].pageX;
//                  distance = 0;
//                  break;
//              case "touchmove":
//                  var ex=event.touches[0].pageX;
//                  distance=ex-star;
//                  if(Math.abs(distance)>10){event.preventDefault();}
//                  scroller.css({"transform":'translate3d('+(distance_all+distance)+'px,0,0)'});
//                  break;
//              case "touchend":
//                  touchetime = new Date().getTime();
//                  var timing = touchetime - touchstime;
//                  
//                  var v = Math.abs(distance)/timing;
//                  if(Math.abs(distance)>20 &&v>0.1){
//                      distance = distance*3;
//                  }
//                  distance_all = (distance+distance_all)<(-MaxSwipePos)?(-MaxSwipePos):distance+distance_all;
//                  if((distance+distance_all)>=0){
//                      distance_all=0;
//                  }
//                  during = Math.abs(distance/v)>800?800:Math.abs(distance/v);
//                  scroller.animate({"transform":'translate3d('+(distance_all)+'px,0,0)',},during,'ease-out',function(){
//                          isMove = false;
//                  });
//                  break;
//          }
//      },
//      swipe = function  () {
//          spans = scroller.find("span");
//          MaxSwipePos = 0;
//          scroller.css({
//              width:'999999px',
//              "transform":'translate3d(0,0,0)'
//          });
//          for (var i=0;i<spans.length;i++) {
//              MaxSwipePos+=spans[i].offsetWidth+10;
//          }
//          MaxSwipePos =MaxSwipePos - $("#scroller_slide").width();
//          if(MaxSwipePos>0){
//              $("#scroller_slide").unbind("touchstart touchmove touchend").bind("touchstart touchmove touchend",touch);
//          }else{
//              $("#scroller_slide").unbind("touchstart touchmove touchend");
//          }
//
//      };
    !!meal&&init();
    !meal&&reset();
});
$(document).ready(function () {
	$('._advice').on('touchstart',function () {
		weui.confirm('<div><span>微信咨询：zxhylv</span><br /><span>电话咨询：4000-842-195</span><span class="dhzx">电话咨询</span></div>','咨询客服',function (but) {
			if(but){
				window.location.href='tel:4000-842-195';
			}
			else{
				
			}
		})
	})
})
$(document).ready(function () {
        	var myscroll = new iScroll("wrapper",{snap:"span",vScroll:false,hScrollbar:false,preventDefault:false,});
        })
    $(function () {
    	var wid=null;
//  	console.log($('#scroller span'));
    	$('#scroller span').each(function () {
    		wid+=$(this).width();
    	});
    	var _wid=wid+300;
    	$('#scroller').css('width',_wid);
    })
sharetitle = "知行合逸 - <?php echo $_smarty_tpl->tpl_vars['info']->value['m_name'];?>
";
sharedes = "<?php echo $_smarty_tpl->tpl_vars['info']->value['m_des'];?>
";
timelinetitle = "知行合逸 - <?php echo $_smarty_tpl->tpl_vars['info']->value['m_name'];?>
";
shareimg="<?php echo $_smarty_tpl->tpl_vars['info']->value['m_icon'];?>
";
//wxbind();
/////////////////////////////////////热门赛事随机出现三个///////////////////////////////////////
//$(document).ready(function () {
//	var hot=document.getElementById('hot_img_center');
//	var As=hot.getElementsByTagName('a');
//	var Length=As.length;
//	// 定义存放生成随机数的数组 
//	var array=new Array(); 
//	// 循环N次生成随机数 
//	for(var i = 0 ;i<Length; i++){  
//	    if(array.length<3){ 
//	          generateRandom(Length); 
//	    }else{ 
//	      break; 
//	   } 
//	} 
//	function generateRandom(count){ 
//	     var rand = parseInt(Math.random()*count); 
//	     for(var i = 0 ; i < array.length; i++){ 
//	          if(array[i] == rand){ 
//	               return false; 
//	          }      
//	     } 
//	     array.push(rand); 
//	} ;
//	console.log(array);
//	for (var i=0;i<Length;i++) {
//		for (var j=0; j < array.length; j++) {
//			As[i].style.display='none';	
//			As[array[j]].style.display='';
//		}
//		
//	}
//
//});
var now = "<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
";
$(document).ready(function () {
	$('.hot_img_center a').remove();
	$.ajax({
		type:"get",
		url:"/ajax/hotlist",
		data:{length:'200'},
		sync:true,
		dataType:"json",
		success:function (obj) {
		var Obj=obj.data;
		var Length=Obj.length;
		// 定义存放生成随机数的数组 
		var array=new Array(); 
		// 循环N次生成随机数 
		for(var i = 0 ;i<Length; i++){  
		    if(array.length<3){ 
		          generateRandom(Length); 
		    }else{ 
		      break; 
		   } 
		} 
		function generateRandom(count){ 
		     var rand = parseInt(Math.random()*count); 
		     for(var i = 0 ; i < array.length; i++){ 
		          if(array[i] == rand){ 
		               return false; 
		          }      
		     } 
		     array.push(rand); 
		} ;
			for (var i=0;i<array.length;i++) {
				var minge='';
//				if(Obj[array[i]].m_state!=0 || Obj[array[i]].m_GameTime <=now || Obj[array[i]].m_releaseTime >now || Obj[array[i]].m_untilTime<now || Obj[array[i]].m_offineTime <now){
//					var minge='<span class="match_tips match_tips_pay1">名额已满</span>';
//				}else if(Obj[array[i]].m_placesleft<=20){
//					var minge='<span class="match_tips match_tips_warm match_tips_pay2">名额紧张</span>';
//				}
				var Time=Obj[array[i]].m_GameTime.substring(0,10);
				var reg=new RegExp('((?=[\x21-\x7e]+)[^A-Za-z0-9])','g');
								var types=Obj[array[i]].m_Mtypes.replace(reg,'<span></span>');
								var str='<a href="/Matchinfo?m_id='+Obj[array[i]].id+'" class="flex_1"><div class="hot_img"><img style="width: 7.75rem;height: 5.57rem;" src='+Obj[array[i]].m_img+' alt=""></div><p class="weui_tabbar_label"style="  text-overflow:ellipsis; white-space:nowrap; overflow:hidden;width: 7.76rem;">'+Obj[array[i]].m_name+'</p></a>';
								$('.hot_img_center').append(str);
			}
		}
	});
});
</script>
</body>
</html>


<?php }} ?>