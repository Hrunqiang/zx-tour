<?php /* Smarty version Smarty-3.1.6, created on 2016-11-14 15:59:48
         compiled from "../DataSource/Tpl\Search\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2701858252abfed0725-14986005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '139e5a03f767c9373af3d23625cae0b5de65c7a6' => 
    array (
      0 => '../DataSource/Tpl\\Search\\index.html',
      1 => 1479101330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2701858252abfed0725-14986005',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58252ac02c803',
  'variables' => 
  array (
    'hotcitys' => 0,
    'list' => 0,
    'i' => 0,
    'now' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58252ac02c803')) {function content_58252ac02c803($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Comon/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<title>搜索结果</title>
<style>
.filter_section{border-bottom:1px solid #efeef3;padding:0.78428rem 0;color:#888888;background: #FFF;position: relative;font-size: 1rem;}
.filter_section>.flex_1{/*border-right:1px solid #efeef3;*/overflow: hidden;}
.filter_section>.flex_1:last-child{border:none;}
.filter_section>.flex_1>div{position: relative;}
.filter_section>.flex_1>div>p{text-overflow: ellipsis;
    white-space: nowrap;
    word-wrap: normal;
    word-wrap: break-word;
    word-break: break-all;overflow: hidden;text-align: right;}
.filter_section>.flex_1>div>span>i{position: relative;display: inline-block;width: 1.0714rem;height: 0.8271rem;/*margin-right: 1.72857rem;*/margin-top: 0.3571428571428571rem;}
.filter_section>.flex_1>div>span>i:after{content: " ";display: inline-block;-webkit-transform: rotate(135deg);-moz-transform: rotate(135deg);-ms-transform: rotate(135deg);-o-transform: rotate(135deg);transform: rotate(135deg);height: 6px;width: 6px;border-width: 2px 2px 0 0;border-color: #C8C8CD;border-style: solid;position: absolute;top: 50%;left: 6px;margin-top: -6px;}
.filter_section> .curr_filter{color:#ff2244;}
.filter_section> .curr_filter>div>span>i:after{-webkit-transform: rotate(-45deg);-moz-transform: rotate(-45deg);-ms-transform: rotate(-45deg);-o-transform: rotate(-45deg);transform: rotate(-45deg);border-color: #ff2244;margin-top: 0px;}

.filter_section>.flex_1 .drop-down{display:none;width: 100%;position: absolute;top:3.2142rem;background: red;z-index: 2;left:0;background: rgba(0,0,0,.5);color:#888888;}
.filter_section> .curr_filter .drop-down{display: block;}
.filter_section .filter_cell .drop-down .drop_content{background: #FFF;background: #f3f6f5;}
.filter_section .filter_cell .drop-down .option_cell{height: 2.714rem;line-height: 2.71428rem;box-sizing: border-box;padding-left: 1.78571rem;}
/*.filter_section .filter_cell .drop-down .option_cell:last-child{border:none;}*/
.filter_section .filter_cell .drop-down .option_curr{color:#ff2244;border-color:rgba(4,190,2,0.3);background: #FFFFFF;}

.filter_section .filter_cell .drop-down .drop_content_2{background: #FFF;height: 240px;-webkit-box-align: flex-start;-webkit-align-items: flex-start;-ms-flex-align: flex-start;align-items: flex-start;}
.filter_section .filter_cell .drop-down .drop_content_2 .sub_1{width: 80px;background: #efeef3;text-align: center;height: 100%;}
.filter_section .filter_cell .drop-down .drop_content_2 .sub_1 p{height: 2.71428rem;line-height: 2.71428rem;}
.search_result{background: #FFF;margin-bottom: 8px;}
.filter_section .filter_cell .drop-down .drop_content_2 .sub_1 p.curr{color:#ff2244;background: #FFF;}
.filter_section .filter_cell .drop-down .drop_content_2 .sub_2{padding-left:15px;height: 100%;overflow-y:scroll; }
.filter_section .filter_cell .drop-down .drop_content_2 .sub_2>.sub_list{display: none;}
.filter_section .filter_cell .drop-down .drop_content_2 .sub_2>.sub_list.curr{display: block;}
.search_result .none_result{height: 120px;}
.search_result .none_result ul{width: 70%;}
.search_result .none_result ul li{float: left;width: 10%;}
.search_result .none_result ul .none_result_hunt{width: 90%;}
.none_result .center_cell .icon{width: 18px;height: 18px;background-image: url(/static/images/icons.png);background-size:173.5px 202px;display: inline-block;background-position:-80px 0;margin-top: 5px;}

.empty{width: 60%;margin: 0 auto;padding: 2.1428rem 0 0 0;background: #FFFFFF;}
.empty .emptyImg{width: 67%;margin: 0 auto 0.714285rem;}
.empty .emptyImg>img{width: 100%;}
.empty>p{text-align: center;font-size: 1rem;color: #888888;}
/*////////////////////////////////新加样式///////////////////////////////*/
.empty a{color: #ff2244;}
.weui_search_text span{display: inline-block; margin-top: 2px;}
/*.drop-down:before{content: ''; width: 100%;height: 1px;background: #000000;};*/
/*.drop-down:before{content: ''; width: 100%;height: 1px;background: #EFEEF3;float:left; position: relative;top: 15px;}*/
.empty p{overflow: hidden;}
.empty p span{margin-left: 16%;}
.weui_media_bd .weui_media_desc_1{padding-bottom: 0.3rem;padding-top: 0.3rem;}
.weui_media_desc_padding{ overflow: hidden;}
.weui_media_desc_padding span{display: inline-block;height: 0.9285rem;width: 1px;background: rgba(166,166,166,0.5);float:inherit; margin: 0 0.285rem;vertical-align: -0.1428rem;}
.weui_media_box{padding-left: 0.7142857142857143rem;padding-right: 0.7142857142857143rem;}
/*//////////////////////////////////////////////////////////////////////////////////////////////*/
.weui_search_text{border-radius: 2.857142857142857rem;}
.weui_search_bar{background: #FFFFFF;}
.weui_search_outer{background: none;}
.weui_search_outer:after{border-radius: 2.857142857142857rem;border: 1px solid #cacaca;}
#search_cancel{color: #ff2244;font-size: 1.142857142857143rem;}
.filter_section>.flex_1>div>span{display: inline-flex;margin: 0 auto;}
.filter_section>.flex_1>div>span>p{overflow: hidden;max-width: 5.357142857142857rem;text-overflow: ellipsis;white-space: nowrap;}
.weui_search_bar:after{top: 3rem;}
.area_city{margin: 0.5714285714285714rem 0;border-top: 1px solid #efeef4;border-bottom: 1px solid #efeef4;display: none;overflow: hidden;overflow: hidden;position: relative;}
.area_out{width: 2000px;overflow: hidden;transform: translateX(0px);padding-bottom: 0.9285714285714286rem;background: #FFFFFF;}
.area_inner{background: #FFFFFF;float: left;width: 26.78571428571429rem;color: #888888;}
.area_inner span{display: inline-block;width:4.285714285714286rem;text-align: center; border: 1px solid #D9D9D9;font-size: 1rem;border-radius: 1rem;margin:0.7142857142857143rem 0.4285714285714286rem;}
._mark{position: absolute;bottom: 0.5rem;left: 50%;overflow: hidden;transform: translateX(-50%);-moz-transform: translateX(-50%);-webkit-transform: translateX(-50%);}
._mark li{width: 0.5rem;height: 0.5rem;background: #efeef4;float: left;margin: 0 0.2142857142857143rem;border-radius: 50%;}
._mark li:nth-child(1){background: #FF2244;}
.area_inner .hot_area{color: #f75d00;}
/*///////////////////////////////////////////////////////////////分页*/
.loading .jz{line-height: 3.928571428571429rem;font-size: 1rem;padding-left: 2.642857142857143rem;}
.weui_loading_leaf:before{height: 0.1485714285714286rem;width: 0.4385714285714286rem;}
.weui_loading_leaf_0:before{-webkit-transform: rotate(0deg) translate(0.28rem, 0px);transform: rotate(0deg) translate(0.28rem, 0px);}
.weui_loading_leaf_1:before{-webkit-transform: rotate(40deg) translate(0.28rem, 0px);transform: rotate(40deg) translate(0.28rem, 0px);}
.weui_loading_leaf_2:before{-webkit-transform: rotate(80deg) translate(0.28rem, 0px);transform: rotate(80deg) translate(0.28rem, 0px);}
.weui_loading_leaf_3:before{-webkit-transform: rotate(120deg) translate(0.28rem, 0px);transform: rotate(120deg) translate(0.28rem, 0px);}
.weui_loading_leaf_4:before{-webkit-transform: rotate(160deg) translate(0.28rem, 0px);transform: rotate(160deg) translate(0.28rem, 0px);}
.weui_loading_leaf_5:before{-webkit-transform: rotate(200deg) translate(0.28rem, 0px);transform: rotate(200deg) translate(0.28rem, 0px);}
.weui_loading_leaf_6:before{-webkit-transform: rotate(240deg) translate(0.28rem, 0px);transform: rotate(240deg) translate(0.28rem, 0px);}
.weui_loading_leaf_7:before{-webkit-transform: rotate(280deg) translate(0.28rem, 0px);transform: rotate(280deg) translate(0.28rem, 0px);}
.weui_loading_leaf_8:before{-webkit-transform: rotate(320deg) translate(0.28rem, 0px);transform: rotate(320deg) translate(0.28rem, 0px);}
.weui_search_cancel{margin-left: 0px;padding-left: 10px;}
.search_result{margin-bottom: 0px;;}
.jz_more{text-align: center;background: #F5F5F9;color: #888888;font-size: 1rem;height: 3.71rem;line-height: 3.71rem;}
.back_top{position: fixed;bottom: 5rem;right: 1.21428rem;width: 2.857142857142857rem;height: 2.857142857142857rem;background: url(/static/images/back_top.png);background-size: 100% 100%;display: none;z-index: 10000;}
/*.weui_media_box .flex{width: 17.85714285714286rem;white-space: nowrap;overflow: hidden;display: -webkit-box;height: 2.142857142857143rem;}*/
/*.flex span:nth-child(1){-webkit-box-flex:1;display: block;}
.flex span:nth-child(2){display: block;line-height: 1.5rem;float: none;margin-left: 20px;}*/
.flex span:nth-child(1){-webkit-box-flex:1;/*max-width: 8.642857142857143rem;*/padding-top: 0.2142857142857143rem;display: block;}
.flex span:nth-child(2){line-height: 1.5rem;margin-left: 1.428571428571429rem;}
.loading{background: #f5f5f9;text-align: center;color: #888888;font-size: 1rem;line-height: 2.71rem;height: 3.71rem; position: relative;width: 100%;}
.loading .weui_loading{top: 14%;margin-top: 1.428571428571429rem;left: 44%;}
/*.flex .over_hidden{max-width: 12.07142857142857rem!important;}*/
.weui_search_focusing{background: #FFFFFF;}
.weui_search_inner{background: #e7e7e7;border-radius: 1.5rem 1.5rem 1.5rem 1.5rem}
.weui_search_text{background: #E7E7E7;}
.weui_search_inner .weui_search_input{padding: 0.2857142857142857rem 0;}
.search_goback{width: 0.8571428571428571rem;height: 0.8571428571428571rem; margin: auto; background: url(/static/images/close_singel.jpg) no-repeat;background-size:100%;position: absolute;top: 50%;transform: translateY(-50%);-webkit-transform: translateY(-50%);}
.wrap{background: #FFFFFF;}
.emputy_text{text-align: center;font-size: 1.142857142857143rem;color: #888888;}
.emputy_text span{color: #FF2244;}
/*/////////////////////////////////列表*/
.nuomi_7{margin-right: 0px;width: 3.357142857142857rem;height: 1.071428571428571rem;background: none;}
.mejz{background: url(/static/images/tag_mingejz.jpg) no-repeat;background-size: 100%;}
.jz{background: url(/static/images/tag_jiezhi.jpg) no-repeat;background-size: 100%;}
.yh{background: url(/static/images/tag_youhui.jpg) no-repeat;background-size: 100%;}
.nm_view{height: 4.285714285714286rem;margin-top: 0;}
.nm_view div{text-align: center;margin-bottom: 0.5rem;display: block;}
.weui_media_box .flex{height: auto!important;line-height: normal;margin-bottom: 0.4285714285714286rem;}
.weui_media_box .weui_media_desc{font-size: 0.9285714285714286rem!important;line-height: normal!important;overflow: hidden;-webkit-line-clamp: 1;}
.weui_media_box.weui_media_appmsg .weui_media_hd{width: 5.714285714285714rem!important;height: 4.285714285714286rem!important;}
.weui_media_box .weui_media_title{font-size: 1.214285714285714rem!important;font-weight: bold;white-space: normal;}
.weui_media_box.weui_media_appmsg .weui_media_appmsg_thumb{vertical-align: inherit;}
.flex span:nth-child(1){padding-top: 0px!important;}
.weui_media_box{padding: 0.6428571428571429rem 0;margin: 0 0.6428571428571429rem;}
.bm_attend{padding: 0.2142857142857143rem 0.6428571428571429rem 0.5rem;}
.orange{color: #ff2244;font-size: 0.8571428571428571rem;}
.orange_price{color: #ff2244;font-size: 1.142857142857143rem;}
.orange_yj{color: #888888;margin-left: 0.7142857142857143rem;font-size: 0.9285714285714286rem;}
.orange_text{margin-left: 1.071428571428571rem;font-size: 1rem;color: #888888;}
.orange_type{margin-left: 0.8571428571428571rem;font-size: 0.8571428571428571rem;color: #888888;}
.attend_num{float: right;font-size: 0.8571428571428571rem;color: #888888;}
.list_a{display: block;margin-top: 0.7142857142857143rem;background: #FFFFFF;}
.meym{background: url(/static/images/mingeym.png) no-repeat;background-size: 100%;}
.qidai{background: url(/static/images/list_qd.jpg) no-repeat;background-size: 100%;float: left;width: 2.928571428571429rem;height: 1.142857142857143rem;margin: 0.9285714285714286rem 0 0.5rem;}
.star_time{color: #FF2244;font-size: 0.8571428571428571rem;margin-left: 0.5rem;float: left;margin-top: 0.7857142857142857rem;}
.bsjs{background: url(/static/images/bsjs.jpg) no-repeat;background-size: 100%;}
.qidaiz{overflow: hidden;overflow: hidden;}
.qidaiz:before{content: '';display: block;width: 100%;height: 1px;background: #E7E7E7;transform: scale(1,0.5);-webkit-transform: scale(1,0.5);-moz-transform: scale(1,0.5);-ms-transform: scale(1,0.5);}
.S_overhiden{-webkit-line-clamp: 1;overflow: hidden;display: -webkit-box;-webkit-box-orient: vertical}
.bm_attend{padding: 0.2142857142857143rem 0.6428571428571429rem 0.5rem;}
.bm_attend div:nth-child(3){border-top: 1px dashed #E7E7E7;}
.bm_attend div:nth-child(1):before{content: '';display: block;width: 100%;height: 1px;background: #E7E7E7;transform: scale(1,0.5);-webkit-transform: scale(1,0.5);-moz-transform: scale(1,0.5);-ms-transform: scale(1,0.5);}
.list_a{display: block;margin-top: 0.7142857142857143rem;background: #FFFFFF;}
.list_a:before{content: '';display: block;width: 100%;height: 1px;background: #E7E7E7;transform: scale(1,0.5);-webkit-transform: scale(1,0.5);-moz-transform: scale(1,0.5);-ms-transform: scale(1,0.5);}
.list_a:after{content: '';display: block;width: 100%;height: 1px;background: #E7E7E7;transform: scale(1,0.5);-webkit-transform: scale(1,0.5);-moz-transform: scale(1,0.5);-ms-transform: scale(1,0.5);}
.search_result{background: #F3f6f5;margin-bottom: 0.5714285714285714rem;}
.loading_end{color: #888888;color: #888888;font-size: 1rem;line-height: 2.71rem;height: 3.71rem;width: 100%;text-align: center;}
/*#search_bar{height: 3.142857142857143rem;}*/
</style>
<div class="wrap">
    <div class="weui_search_bar" id="search_bar">
    	<div id="search_goback" style="width: 1.571428571428571rem;position: relative;"><div class="search_goback" style=""></div></div>
        <form class="weui_search_outer">
            <div class="weui_search_inner">
                <i class="weui_icon_search"></i>
                <input type="search" class="weui_search_input" id="search_input" placeholder="搜索" required="">
                <a href="javascript:" class="weui_icon_clear" id="search_clear"></a>
            </div>
            <label for="search_input" class="weui_search_text" id="search_text">
                <i class="weui_icon_search"></i>
                <span>搜索全球跑步赛事</span>
            </label>
        </form>
        <a href="javascript:" class="weui_search_cancel" id="search_cancel">搜索</a>
    </div>
    <?php echo $_smarty_tpl->tpl_vars['hotcitys']->value;?>

    <div class="search_result matchBox">
        <!--<?php if ($_smarty_tpl->tpl_vars['list']->value){?>
        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['i']->key;
?> 
        <?php if ($_smarty_tpl->tpl_vars['i']->value['m_entermode']=="remote"){?>
         <a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['m_enterurl'];?>
" class="weui_media_box weui_media_appmsg">
        <?php }else{ ?>
        <a href="/Matchinfo?m_id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
&platform=zx-tour" class="weui_media_box weui_media_appmsg" >
        <?php }?>
            <div class="weui_media_hd">
                <img class="weui_media_appmsg_thumb" src-img="<?php echo $_smarty_tpl->tpl_vars['i']->value['m_img'];?>
" alt="">
            </div>
            <div class="weui_media_bd">
                <h4 class="weui_media_title flex"><span class="S_overhiden"><?php echo $_smarty_tpl->tpl_vars['i']->value['m_name'];?>
</span>
                 <?php if ($_smarty_tpl->tpl_vars['i']->value['m_GameTime']<=$_smarty_tpl->tpl_vars['now']->value||$_smarty_tpl->tpl_vars['i']->value['m_untilTime']<$_smarty_tpl->tpl_vars['now']->value){?>
                <span class="match_tips">名额已满</span>
                <?php }elseif($_smarty_tpl->tpl_vars['i']->value['m_placesleft']<=20){?>
                <span class="match_tips match_tips_warm">名额紧张</span>
                <?php }?></h4>
                <p class="weui_media_desc weui_media_desc_1 line2 weui_media_title_position"><?php echo $_smarty_tpl->tpl_vars['i']->value['m_des'];?>
</p>
                <p class="weui_media_desc weui_media_desc_padding"><?php echo substr($_smarty_tpl->tpl_vars['i']->value['m_GameTime'],0,10);?>
 <?php echo str_replace("|","<span></span>",$_smarty_tpl->tpl_vars['i']->value['m_Mtypes']);?>
</p>
            </div>
        </a>-->
        <!--<?php } ?>-->
        <!--<?php }else{ ?>-->
<!--         <div class="none_result centerBox">
            <ul class="center_cell flexBox2">
                <li><i class="icon"></i></li>
                <li class="none_result_hunt flex_1">抱歉，没有找到该赛事！您可以<a href="">提交想跑的赛事></a></li>
            </ul>
        </div> -->
        <!--<div class="center_cell empty">
            <div class="emptyImg"><img src="/static/images/empty.png" src-img="/static/images/empty.png" alt=""></div>
            <p><span>抱歉，没有找到该赛事！</span><span>您可以<a href="/User/feedback">提交想跑的赛事></a></span></p>
        </div>-->
        <!--<?php }?>-->
        <!-- 
        <a href="javascript:void(0);" class="weui_media_box weui_media_appmsg">
            <div class="weui_media_hd">
                <img class="weui_media_appmsg_thumb" src="http://www.kalenji.com.cn/sites/kalenjicn/files/category/image/athtletism_shoes_men_new_picto_1.jpg" alt="">
            </div>
            <div class="weui_media_bd">
                <h4 class="weui_media_title">标题一</h4>
                <p class="weui_media_desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</p>
                 <p class="weui_media_desc">2016-9-17 全程|半程</p>
            </div>
        </a> -->
    <!--</div>-->
    <!--<div class="jz_more" style="text-align: center;background: #FFFFFF;border-top: 1px solid #F5F5F9;">加载更多</div>-->
    <!--<?php echo $_smarty_tpl->getSubTemplate ('Comon/hotList.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('type'=>'vertical'), 0);?>
-->
</div>
<div class="back_top" onclick="goTop(0.2,16);return false;"></div>
<script src="/static/js/zepto.js"></script>
<script src="/static/weui/js/weui.js"></script>
<script type="text/javascript">
weui.search_bar.init();
$(document).ready(function () {
	var URL=decodeURI(window.location.href) ;
	var d=URL.split('?');
	if (d[1]=='ws=海外&type=1') {
		$('.sub_1 p:nth-child(1)').removeClass('curr');
		$('.sub_1 p:nth-child(2)').addClass('curr');
		$('.sub_2_2').removeClass('curr');
		$('.sub_2_1').addClass('curr');
	}
})

$(function () {
	var star='';
	var num=0;
	var length=$('.area_out div').length;
	var area_city=document.getElementById('area_city');
	var move='';
	var _w=document.documentElement.clientWidth;
	if(_w>=768) _w=768;
	$(window).resize(function () {
		_w=document.documentElement.clientWidth;
		$('.area_inner').css('width',_w+'px');
	});
	$(document).resize(function () {
		_w=document.documentElement.clientWidth;
		$('.area_inner').css('width',_w+'px');
	})
	$('.area_inner').css('width',_w+'px');
	var creat_li='';
	for (i=0;i<length;i++) {
		if(length<=1) return;
		creat_li+='<li></li>';
	}
	$('.area_city').append('<ul class="_mark">'+creat_li+'</ul>');
	$('.area_city').bind('touchmove',function (event) {
		event.preventDefault();
		move=star-event.targetTouches[0].clientX;
	})
	$('.area_city').bind('touchstart',function (event) {
		star=event.targetTouches[0].clientX;
	})
	$('.area_city').bind('touchend',function (event) {
		if(move>20){
			num++;
			if(num>=length){
				num=length-1;
			}
			$('.area_out').animate({transform: 'translateX('+(-_w*num)+'px)'},300,'ease-out',function(){
                move=null;
                $('._mark li').css('background','#EFEEF4');
                 $('._mark li:nth-child('+(num+1)+')').css('background','#FF2244');
            });
		}
		if(move<-20){
			num--;
			if(num<=0){
				num=0;
			}
			$('.area_out').animate({transform: 'translateX('+(-_w*num)+'px)'},300,'ease-out',function(){
                    move=null;
                    $('._mark li').css('background','#EFEEF4');
                    $('._mark li:nth-child('+(num+1)+')').css('background','#FF2244');
            });
		}
		
	})
})
function _area(e) {
	var _area=e.innerHTML;
	$(".search_area_bar").html(_area);
	search();
}
////////////////////////////////////////////////////////////////////分页
$(function () {
	jz_more()
})
var arr3='',arr4='',scroll_lenth='',_scroll_page=0;;
$(function () {
	
	
	/////////////////////////////
	
	var winH=$(window).height();
		///////防止多次触发ajax请求
		var stop=true;
		/////////////滚动获取页面高度
		$(window).scroll(function(){
			var pageH=$('.search_result').height();
			var scrollT=window.scrollY;
			var aa=(pageH-winH-scrollT)/winH;
		if(aa<0.2&&scroll_lenth>=10*(_scroll_page+1)){
			if(stop==true){
				stop=false;
				_scroll_page++;
				for (i=10*_scroll_page;i<10*(_scroll_page+1);i++) {
					if(i>arr3.length-1) {
						$('.search_result').append('<div class="loading_end">没有更多赛事</div>')
						break;
					}
					arr4[i].src=arr3[i];
				}
				$('.search_result a').map(function (key) {
					if(key<=(10*(_scroll_page+1)-1)){
						$(this).css('display','block');
					}
				})
				stop=true;
			}
		}
	})
})
function jz_more() {
	var arr1=new Array(),arr2=new Array(),page='';
	var _length=$('.search_result a').length;
	$('.search_result img').each(function (key) {
		arr1.push($(this).attr('src-img'));
		arr2.push($(this)[0]);
	})
	///////////////////保存到全局变量获取数组//////////////
	arr3=arr1;
	arr4=arr2;
	scroll_lenth=_length;
	if(_length<=10){
		$('.jz_more').attr('data-show','hide');
		for (i=0;i<_length;i++) {
			arr2[i].src=arr1[i];
		}
	}else{
		$('.jz_more').attr('data-show','show');
		for (i=0;i<10;i++) {
			arr2[i].src=arr1[i];
		}
		$('.search_result a').each(function (key) {
			if(key>9){
				$(this).css('display','none');
			}
		})
	}
}
$('#search_goback').bind('touchend',function () {
		window.history.back()
	})

$(function () {
	search_resalt();
})
var now = "<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
";
function search_resalt() {
		var  ws = get("ws");
		$.ajax({
        cache: false,
        url:"/Search/screenv2?ws="+ws,
        type: "POST",
        dataType: "json",
        timeout:3000,
        success: function(data){
        	var htmlStr = '<div style="background:#ffffff;"><div class="center_cell empty"><div class="emptyImg"><img src-img="/static/images/empty.png" alt=""></div><a></a></div><p class="emputy_text">没有跑步赛事与您的搜索条件<span>关键词</span>匹配</p></div>';
            if(data.error == 0 ){           
                var list = data.data;
                htmlStr = "";
                for(var key in list){
                	m_gametime = list[key].m_GameTime.substr(0,10);
                	var creathtm='';
                	var m_untilTime = list[key].m_untilTime.substr(0,10);
                	var s1 = m_untilTime;
					s1 = new Date(s1.replace(/-/g, "/"));
					s2 = new Date();
					
					var days = s1.getTime() - s2.getTime();
					var time = parseInt(days / (1000 * 60 * 60 * 24));
					var jz='';
					if(time<=7&&list[key].m_untilTime>now&&list[key].m_placesleft>0){
						jz='<div class="nuomi_7 jz"></div>'
					}
					if(time>7){
						jz=''
					}
					if(list[key].m_untilTime<=now){
						jz=''
					}
					if(list[key].m_placesleft<=0){
						jz=''
					}
					var m_city= list[key].m_city.split('-');
					var city='';
					if(m_city.length>1){
						city=m_city[1];
					}
					if(m_city.length<=1){
						city=m_city[0]
					}
                	var minge='';
					var  m_mtypes =  list[key].m_Mtypes.replace(/\|/g, "<span></span>");
					var new_time= new Date(list[key].m_GameTime.replace(/-/g, "/"));
					var end_time= new_time.getTime()+(1000 * 60 * 60 * 24);
					var now_time=s2.getTime();
					////////////////////////比赛结束时间//////////////////////
//					var end_game = new Date(list[key].m_GameTime.replace(/-/g, "/"));
                	///////////////////未到报名时间////////////////////////////////////
                	if(list[key].m_releaseTime >now ||list[key].m_signuptime>now){
						var start_time=list[key].m_signuptime;
						var start_time=start_time.substring(0,10);
						var innerhtr='<div class="qidaiz"><span class="qidai"></span><span class="star_time">开始报名时间: '+start_time+'</span></div>';
	                	if(list[key].m_entermode == "remote"){
	                		htmlStr+='<a href="'+list[key].m_enterurl+'&platform=zx-tour"><div class="weui_media_box weui_media_appmsg">';
	                	}else{
	                		htmlStr+='<a href="/Matchinfo?m_id='+list[key].id+'&platform=zx-tour" class="list_a"><div class="weui_media_box weui_media_appmsg">';
	                	}
						htmlStr+='<div class="weui_media_hd"><img class="weui_media_appmsg_thumb" src-img="'+list[key].m_img+'" alt=""></div><div class="weui_media_bd"><h4 class="weui_media_title flex"><p class="S_overhiden cuur">'+list[key].m_name+'</p></h4><p class="weui_media_desc">'+list[key].m_des+'</p><p class="weui_media_desc weui_media_desc_padding">'+m_gametime+' '+city+' '+list[key].m_mtypes_class+' '+m_mtypes+'</p></div><div class="nm_view"></div></div><div class="bm_attend">'+innerhtr+'</div></a>';
                	}
                	////////////////////比赛结束////////////////////////////
                	else if(end_time<now_time){
                		var minge='<div class="nuomi_7 bsjs"></div>';
	                	if(list[key].m_entermode == "remote"){
	                		htmlStr+='<a href="'+list[key].m_enterurl+'&platform=zx-tour"><div class="weui_media_box weui_media_appmsg">';
	                	}else{
	                		htmlStr+='<a href="/Matchinfo?m_id='+list[key].id+'&platform=zx-tour" class="list_a"><div class="weui_media_box weui_media_appmsg">';
	                	}
                		htmlStr+='<div class="weui_media_hd"><img class="weui_media_appmsg_thumb" src-img="'+list[key].m_img+'" alt=""></div><div class="weui_media_bd"><h4 class="weui_media_title flex"><p class="S_overhiden cuur">'+list[key].m_name+'</p></h4><p class="weui_media_desc">'+list[key].m_des+'</p><p class="weui_media_desc weui_media_desc_padding">'+m_gametime+' '+city+' '+list[key].m_mtypes_class+' '+m_mtypes+'</p></div><div class="nm_view">'+minge+jz+'</div></div></a>';	
                	}
                	///////////////////////////////// 名额已满/////////////////////////////////
                	else if(list[key].m_placesleft<=0 || list[key].m_untilTime<now){
                		var minge='<div class="nuomi_7 meym"></div>';
	                	if(list[key].m_entermode == "remote"){
	                		htmlStr+='<a href="'+list[key].m_enterurl+'&platform=zx-tour"><div class="weui_media_box weui_media_appmsg">';
	                	}else{
	                		htmlStr+='<a href="/Matchinfo?m_id='+list[key].id+'&platform=zx-tour" class="list_a"><div class="weui_media_box weui_media_appmsg">';
	                	}
						htmlStr+='<div class="weui_media_hd"><img class="weui_media_appmsg_thumb" src-img="'+list[key].m_img+'" alt=""></div><div class="weui_media_bd"><h4 class="weui_media_title flex"><p class="S_overhiden cuur">'+list[key].m_name+'</p></h4><p class="weui_media_desc">'+list[key].m_des+'</p><p class="weui_media_desc weui_media_desc_padding">'+m_gametime+' '+city+' '+list[key].m_mtypes_class+' '+m_mtypes+'</p></div><div class="nm_view">'+minge+jz+'</div></div></a>';
                	}else{
                		////////////////////////三个状态标签//////////////////////////////////////////////////
	                	if(list[key].m_placesleft<=20){
								var minge='<div class="nuomi_7 mejz"></div>';
						}
	                	if(list[key].m_entermode == "remote"){
	                		htmlStr+='<a href="'+list[key].m_enterurl+'&platform=zx-tour"><div class="weui_media_box weui_media_appmsg">';
	                	}else{
	                		htmlStr+='<a href="/Matchinfo?m_id='+list[key].id+'&platform=zx-tour" class="list_a"><div class="weui_media_box weui_media_appmsg">';
	                	}
	                	var infolist =  list[key]['info'];
						var mealHTML = sourceHTML = "";
						for(var m_i=0,len=infolist.length;m_i<len;m_i++){
							var stock=parseInt(infolist[m_i]['g_stock']-infolist[m_i]['g_stockleft']);
							var g_id_last=infolist[m_i]['id'].substring(infolist[m_i]['id'].length-1);
							if(g_id_last==0){
								stock=parseInt(infolist[m_i]['g_stock']-infolist[m_i]['g_stockleft'])+6;
							}else{
								stock=parseInt(infolist[m_i]['g_stock']-infolist[m_i]['g_stockleft'])+parseInt(g_id_last);
							}
							if(infolist[m_i].g_currprice>=1){
								infolist[m_i]['g_currprice']=Math.round(infolist[m_i]['g_currprice']);
							}
							if(sourceHTML=="" && infolist[m_i]['g_type']==1 && parseInt(infolist[m_i]['g_currprice'])!=0){
								sourceHTML = '<div><span class="orange">￥</span><span class="orange_price">'+infolist[m_i]['g_currprice']+'</span><span class="orange">起/人</span><del class="orange_yj">'+infolist[m_i]['g_currprice']+'</del> <span class="orange_text">赛事报名</span></div><div style="overflow: hidden;"><span class="attend_num">已报'+stock+'</span></div>';
								
//								sourceHTML = '<div><span class="orange">￥</span><span class="orange_price">'+infolist[m_i]['g_currprice']+'</span><span class="orange">起/人</span><del class="orange_yj">'+infolist[m_i]['g_currprice']+'</del> <span class="orange_text">'+infolist[m_i]['g_name']+'</span></div><div style="overflow: hidden;"><span class="attend_num">已报'+stock+'</span></div>';
							}
	
							if(mealHTML=="" && infolist[m_i]['g_type']==2 && infolist[m_i]['g_name']!="赛事单独报名"){
								mealHTML = '<div><span class="orange">￥</span><span class="orange_price">'+infolist[m_i]['g_currprice']+'</span><span class="orange">起/人</span><del class="orange_yj">'+infolist[m_i]['g_currprice']+'</del> <span class="orange_text">赛事报名</span></div><div style="overflow: hidden;"><span class="attend_num">已报'+stock+'</span></div>';
//								mealHTML = '<div><span class="orange">￥</span><span class="orange_price">'+infolist[m_i]['g_currprice']+'</span><span class="orange">起/人</span><del class="orange_yj">'+infolist[m_i]['g_currprice']+'</del> <span class="orange_text">'+infolist[m_i]['g_name']+'</span></div><div style="overflow: hidden;"><span class="attend_num">已报'+stock+'</span></div>';
							}
						}
						if(sourceHTML=="" && mealHTML==""){
						htmlStr+='<div class="weui_media_hd"><img class="weui_media_appmsg_thumb" src-img="'+list[key].m_img+'" alt=""></div><div class="weui_media_bd"><h4 class="weui_media_title flex"><p class="S_overhiden cuur">'+list[key].m_name+'</p></h4><p class="weui_media_desc">'+list[key].m_des+'</p><p class="weui_media_desc weui_media_desc_padding">'+m_gametime+' '+city+' '+list[key].m_mtypes_class+' '+m_mtypes+'</p></div><div class="nm_view">'+minge+jz+'</div></div></a>';
						}else{
						htmlStr+='<div class="weui_media_hd"><img class="weui_media_appmsg_thumb" src-img="'+list[key].m_img+'" alt=""></div><div class="weui_media_bd"><h4 class="weui_media_title flex"><p class="S_overhiden cuur">'+list[key].m_name+'</p></h4><p class="weui_media_desc">'+list[key].m_des+'</p><p class="weui_media_desc weui_media_desc_padding">'+m_gametime+' '+city+' '+list[key].m_mtypes_class+' '+m_mtypes+'</p></div><div class="nm_view">'+minge+jz+'</div></div><div class="bm_attend">'+sourceHTML+mealHTML+'</div></a>';
						}	
                	}
               }
                $(".search_result").html(htmlStr);
            }else{
            	//weui.Loading.error(data.msg,2000);
            	$(".search_result").html(htmlStr);
            	$('.emputy_text span').html(ws);
//          	$('.wrap').css('background','#ffffff');
            }
//          var _length=$('.search_result a').length;
            jz_more();
             weui.Loading.hide(); 
        },
        error:function(){
           // weui.Loading.hide();
            weui.Loading.error("搜索错误！",2000);
        }
    });
}
</script>
</body>
</html><?php }} ?>