<?php /* Smarty version Smarty-3.1.6, created on 2016-09-27 16:44:32
         compiled from "../DataSource/Tpl\Index\index1.html" */ ?>
<?php /*%%SmartyHeaderCode:1066157e26618d45565-03400679%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8b3ca6ba5851c029f67e319af9078941db35ccf' => 
    array (
      0 => '../DataSource/Tpl\\Index\\index1.html',
      1 => 1474964897,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1066157e26618d45565-03400679',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57e266191403d',
  'variables' => 
  array (
    'domestic' => 0,
    'abroad' => 0,
    'hotcitys' => 0,
    'list' => 0,
    'i' => 0,
    'now' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e266191403d')) {function content_57e266191403d($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Comon/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<title>跑步赛事搜索</title>
<style>
.filter_section{padding:9px 0;color:#3f3f3f;background: #FFF;/*position: relative;*/font-size: 0.9285714285714286rem;}
.filter_section>.flex_1{/*border-right:1px solid #efeef3;*/overflow: hidden;}
.filter_section>.flex_1:last-child{border:none;}
.filter_section>.flex_1>div{position: relative;}
.filter_section>.flex_1>div>p{text-overflow: ellipsis;
    white-space: nowrap;
    word-wrap: normal;
    word-wrap: break-word;
    word-break: break-all;overflow: hidden;text-align: right;}
.filter_section>.flex_1>div>span>i{position: relative;display: inline-block;width: 1.0714rem;height: 0.6428571428571429rem;/*margin-right: 1.72857rem;*/margin-top: 0.5rem;margin-left: 0.2142857142857143rem;}
/*.filter_section>.flex_1>div>span>i:after{content: " ";display: inline-block;-webkit-transform: rotate(135deg);-moz-transform: rotate(135deg);-ms-transform: rotate(135deg);-o-transform: rotate(135deg);transform: rotate(135deg);height: 6px;width: 6px;border-width: 2px 2px 0 0;border-color: #C8C8CD;border-style: solid;position: absolute;top: 50%;left: 6px;margin-top: -6px;}*/
.filter_section> .curr_filter{color:#ff3175;}
.filter_section> .curr_filter>div>span>i:after{-webkit-transform: rotate(-45deg);-moz-transform: rotate(-45deg);-ms-transform: rotate(-45deg);-o-transform: rotate(-45deg);transform: rotate(-45deg);border-color: #ff2244;margin-top: 0px;}

.filter_section>.flex_1 .drop-down{display:none;width: 100%;position: absolute;top:38px;background: red;z-index: 2;left:0;background: rgba(0,0,0,.5);color:#181823;}
.filter_section> .curr_filter .drop-down{display: block;}
.filter_section .filter_cell .drop-down .drop_content{background: #f8fafa;}
.filter_section .filter_cell .drop-down .option_cell{height: 2.714rem;line-height: 2.71428rem;box-sizing: border-box;padding-left: 9px;}
/*.filter_section .filter_cell .drop-down .option_cell:last-child{border:none;}*/
.filter_section .filter_cell .drop-down .option_curr{color:#ff3175;border-color:rgba(4,190,2,0.3);background: #FFFFFF;}

.filter_section .filter_cell .drop-down .drop_content_2{background: #FFF;height: 17.14285714285714rem;-webkit-box-align: flex-start;-webkit-align-items: flex-start;-ms-flex-align: flex-start;align-items: flex-start;}
.filter_section .filter_cell .drop-down .drop_content_2 .sub_1{width: 9.285714285714286rem;height: 100%;}
.filter_section .filter_cell .drop-down .drop_content_2 .sub_1 p{height: 2.71428rem;line-height: 2.71428rem;padding-left:9px;}
.search_result{background: #FFF;margin-bottom: 0.5714285714285714rem;}
.filter_section .filter_cell .drop-down .drop_content_2 .sub_1 p.curr{color:#ff3175;background: #FFF;}
.filter_section .filter_cell .drop-down .drop_content_2 .sub_2{padding-left:1.071428571428571rem;height: 100%;overflow-y:scroll; }
.filter_section .filter_cell .drop-down .drop_content_2 .sub_2>.sub_list{display: none;}
.filter_section .filter_cell .drop-down .drop_content_2 .sub_2>.sub_list.curr{display: block;}
.search_result .none_result{height: 8.571428571428571rem;}
.search_result .none_result ul{width: 70%;}
.search_result .none_result ul li{float: left;width: 10%;}
.search_result .none_result ul .none_result_hunt{width: 90%;}
.none_result .center_cell .icon{width: 1.285714285714286rem;height: 1.285714285714286rem;background-image: url(/static/images/icons.png);background-size:12.39285714285714rem 14.42857142857143rem;display: inline-block;background-position:-5.714285714285714rem 0;margin-top: 0.3571428571428571rem;}

.empty{width: 60%;position: absolute;top: 50%;position: absolute;transform: translate(-50%,-50%);left: 50%;-webkit-transform: translate(-50%,-50%);-moz-transform: translate(-50%,-50%);}
.empty .emptyImg{width: 67%;margin: 0 auto 0.714285rem;}
.empty .emptyImg>img{width: 100%;}
.empty>p{text-align: center;font-size: 1rem;color: #888888;}
/*////////////////////////////////新加样式///////////////////////////////*/
.empty a{color: #ff2244;}
.weui_search_text span{display: inline-block; margin-top:0.1428571428571429rem;font-size: 1rem;}
/*.drop-down:before{content: ''; width: 100%;height: 1px;background: #000000;};*/
/*.drop-down:before{content: ''; width: 100%;height: 1px;background: #EFEEF3;float:left; position: relative;top: 15px;}*/
.empty p{overflow: hidden;}
.empty p span{float: left;margin-left: 16%;}
.weui_media_bd .weui_media_desc_1{}
.weui_media_desc_padding{ overflow: hidden;margin-top: 0.3571428571428571rem;}
.weui_media_desc_padding span{display: inline-block;height: 0.9285rem;width: 1px;background: rgba(166,166,166,0.5);float:inherit; margin: 0 0.285rem;vertical-align: -0.1428rem;}
.weui_media_box{padding-left: 0.7142857142857143rem;padding-right: 0.7142857142857143rem;}
/*//////////////////////////////////////////////////////////////////////////////////////////////*/
.weui_search_text{border-radius: 2.857142857142857rem;background: #E7E7E7;}
.weui_search_bar{background: #FFFFFF;display: none;padding: 0.5714285714285714rem 0.7142857142857143rem;}
.weui_search_outer{background: none;}
.weui_search_outer:after{border-radius: 2.857142857142857rem;border:none;}
#search_cancel{color: #ff2244;}
.filter_section>.flex_1>div>span{display: inline-flex;display: -webkit-inline-flex; margin: 0 auto;display: -moz-inline-box;display: -ms-flexbox;}
.filter_section>.flex_1>div>span>p{overflow: hidden;max-width: 5.357142857142857rem;text-overflow: ellipsis;white-space: nowrap;}
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
.weui_search_cancel{margin-left: 0px;padding-left: 0.7142857142857143rem;font-size: 1.071428571428571rem;}
.search_result{margin-bottom: 0px;background: #f3f6f5;z-index: 100;padding-top: 2.714285714285714rem;}
.jz_more{text-align: center;background: #F5F5F9;color: #888888;font-size: 1rem;height: 3.71rem;line-height: 3.71rem;}
.back_top{position: fixed;bottom: 5rem;right: 1.21428rem;width: 2.857142857142857rem;height: 2.857142857142857rem;background: url(/static/images/back_top.png);background-size: 100% 100%;display: none;z-index: 10000;}
.bmzt_icon{display: inline-block;width: 1.142857142857143rem;height: 1.142857142857143rem;border: 1px solid #c5c5c5;border-radius: 0.3571428571428571rem 0.3571428571428571rem 0.3571428571428571rem 0.3571428571428571rem;float: left;background: #FFFFFF;box-sizing: border-box;}
/*.bmzt_icon_curr{border-color: #ff3175;}*/
.bmzt_icon_curr div{width:100%;height: 100%; background: url(/static/images/new_index_5.png) no-repeat;background-size: 100%;}
.bmzt_icon_curr .bmzt_icon{border-color: #ff3175;}
.area_all{display: inline-block;width: 6.142857142857143rem;line-height: 1.642857142857143rem;text-align: center;}
.area_all_curr{background: #FFFFFF;color: #ff3175;border-radius: 5px 5px 5px 5px;border: 1px solid #FF3175;}
.nuomi_7{margin-right: 0px;width: 3.357142857142857rem;height: 1.071428571428571rem;background: none;}
.mejz{background: url(/static/images/tag_mingejz.jpg) no-repeat;background-size: 100%;}
.jz{background: url(/static/images/tag_jiezhi.jpg) no-repeat;background-size: 100%;}
.yh{background: url(/static/images/tag_youhui.jpg) no-repeat;background-size: 100%;}
.nm_view{width: 4rem;height: 4.285714285714286rem;margin-top: 0;}
.nm_view div{text-align: center;margin-bottom: 0.5rem;display: block;}
.weui_media_box .flex{width: 14.78571428571429rem!important;height: auto!important;line-height: normal;margin-bottom: 0.4285714285714286rem;}
.weui_media_box .weui_media_desc{width: 14.78571428571429rem!important;font-size: 0.9285714285714286rem!important;line-height: normal!important;overflow: hidden;-webkit-line-clamp: 1;}
.weui_media_box.weui_media_appmsg .weui_media_hd{width: 5.714285714285714rem!important;height: 4.285714285714286rem!important;}
.weui_media_box .weui_media_title{font-size: 1.214285714285714rem!important;font-weight: bold;}
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
.Area span,.Type span,.Distance span{box-sizing: border-box;}
.Area{box-sizing: border-box;padding: 1.071428571428571rem 0.6428571428571429rem 0.5714285714285714rem;color: #7a7a7a;border-bottom: 1px solid #D9D9D9;}
.Type{box-sizing: border-box;padding: 1.071428571428571rem 0.6428571428571429rem 0.5714285714285714rem;color: #7a7a7a;border-bottom: 1px solid #D9D9D9;}
.Distance{box-sizing: border-box;padding: 1.071428571428571rem 0.6428571428571429rem 0.5714285714285714rem;color: #7a7a7a;}
.filter_cell i{background: url(/static/images/new_index_3.png) no-repeat;background-size: 100%;}
.curr_filter i{background: url(/static/images/new_index_6.png) no-repeat;background-size: 100%;}
.hot_matchs{background: #f3f6f5!important;}
..curr_filter .bmzt_icon{background: none;}
.filter_cell .bmzt_icon{background: none;}
.bm_attend div:nth-child(3){border-top: 1px dashed #E7E7E7;}
.bm_attend div:nth-child(1):before{content: '';display: block;width: 100%;height: 1px;background: #E7E7E7;transform: scale(1,0.5);-webkit-transform: scale(1,0.5);-moz-transform: scale(1,0.5);-ms-transform: scale(1,0.5);}
.list_title{display: none;}
.list_a:before{content: '';display: block;width: 100%;height: 1px;background: #E7E7E7;transform: scale(1,0.5);-webkit-transform: scale(1,0.5);-moz-transform: scale(1,0.5);-ms-transform: scale(1,0.5);}
.list_a:after{content: '';display: block;width: 100%;height: 1px;background: #E7E7E7;transform: scale(1,0.5);-webkit-transform: scale(1,0.5);-moz-transform: scale(1,0.5);-ms-transform: scale(1,0.5);}
.weui_search_focusing{background: #FFFFFF;}
.weui_search_inner{background: #e7e7e7;border-radius: 1.5rem 1.5rem 1.5rem 1.5rem}
.weui_search_text{background: #E7E7E7;}
.weui_search_inner .weui_search_input{padding: 0.2857142857142857rem 0;}
#search_bar{position: relative;}
#page1{position: fixed;z-index: 1000;width: 100%;}
.sf_scroll{background: #f8fafa;height: 100%;overflow-y: scroll;}
</style>
<!--<div class="bm_attend">
	<div><span class="orange">￥</span><span class="orange_price">399</span><span class="orange">起/人</span><del class="orange_yj">499</del> <span class="orange_text">单纯赛事报名</span><span class="orange_type">半马</span></div>
	<div style="overflow: hidden;"><span class="attend_num">已报150</span></div>
</div>-->
<div class="wrap">
    <div class="weui_search_bar" id="search_bar">
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
        <a style="display: inline-block;" href="###" class="weui_search_cancel" id="search_cancel">取消</a>
    </div>
    <div id="page1" style="display: flex;display: -webkit-flex;display: -ms-flexbox;background: #FFFFFF;border-bottom: 1px solid #EFEEF3;">
    <div style="flex: 1;-webkit-flex: 1;-moz-box-flex: 1;" class="filter_section flexBox" id="filter_section">
	    	<div class="flex_1 filter_cell" onclick="return false">
	            <div class="flexBox ">
	            	<span><p class="flex_1" style="color: #888888;">跑步</p><i style="line-height: 0.7142857142857143rem;width: 0.6428571428571429rem;display: inline-block;"></i></span>
	            </div>
	       </div>
	        <div class="flex_1 filter_cell">
	            <div class="flexBox selected_bar">
	            	<span><p class="flex_1 search_area_bar">地区</p><i style="line-height: 0.7142857142857143rem;width: 0.6428571428571429rem;"></i></span>
	            </div>
	            <div class="drop-down">
	                <div class="drop_content_2 flexBox">
	                	<div class="sf_scroll">
	                		<div class="sub_1">
	                    		<!--<p class=" sub_type " lableFor="sub_2_1">国际</p>-->    
	                        	<!--<p class="sub_type curr" lableFor="sub_2_2">国内</p>-->                 
	                    	</div>
	                	</div>
	                    
	                    <div class="sub_2 flex_1">
	                        <div class="sub_2_2 sub_list curr">
	                            <!--<?php echo $_smarty_tpl->tpl_vars['domestic']->value;?>
-->
	                        </div>
	                        <div class="sub_2_1 sub_list">
	                            <!--<?php echo $_smarty_tpl->tpl_vars['abroad']->value;?>
-->
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="flex_1 filter_cell">
	            <div class="flexBox selected_bar">
	            	<span><p class="flex_1 search_class_bar">类型</p><i style="line-height: 0.7142857142857143rem;width: 0.6428571428571429rem;"></i></span>
	            </div>
	            <div class="drop-down">
	                <div class="drop_content">
	                    <p class="option_cell option_curr" search-type="mtype">全部类型</p>
	                    <p class="option_cell" search-type="mtype">马拉松</p>
	                    <p class="option_cell" search-type="mtype">越野跑</p>
	                    <p class="option_cell" search-type="mtype">接力赛</p>
	                    <p class="option_cell" search-type="mtype">欢乐跑</p>
	                    <p class="option_cell" search-type="mtype">铁人三项</p>
	                </div> 
	            </div>
	        </div>
	        <div class="flex_1 filter_cell btn_hid">
	            <div class="flexBox selected_bar">
	            	<span><p class="flex_1 search_state_bar">更多</p><i style="line-height: 0.7142857142857143rem;width: 0.6428571428571429rem;"></i></span>
	            </div>
	            <div class="drop-down">
	                <div class="drop_content" style="font-size: 12px;background: #F8F8F8;">
	                	<div class="bmzt" style="overflow: hidden;box-sizing: border-box;padding: 0.7142857142857143rem 0.6428571428571429rem;border-bottom: 1px solid #d9d9d9;">
	                		<span><i class="bmzt_icon"><div></div></i><span style="float: left;margin-left: 0.7142857142857143rem;margin-right: 1.785714285714286rem;">正在报名</span></span>
	                		<span class=""><i class="bmzt_icon"><div></div></i><span style="float: left;margin-left: 0.7142857142857143rem;">即将截止</span></span>
	                		
	                	</div>
	                	<div class="Area">
	                		<div style="font-size: 1rem;">地区</div>
	                		<div style="margin-top: 0.5714285714285714rem;line-height: 2.714285714285714rem;">
	                			<span class="area_all">全部</span>
	                			<span class="area_all">国际</span>
	                			<span class="area_all area_all_curr">国内</span>
	                		</div>
	                	</div>
	                	<div class="Type">
	                		<div style="font-size: 1rem;">类型</div>
	                		<div style="margin-top: 0.5714285714285714rem;line-height: 2.714285714285714rem;">
	                			<span class="area_all area_all_curr">全部</span>
	                			<span class="area_all">马拉松</span>
	                			<span class="area_all">越野跑</span>
	                			<span class="area_all">接力赛</span>
	                			<span class="area_all">越野跑</span>
	                			<span class="area_all">接力赛</span>
	                		</div>
	                	</div>
	                	<div class="Distance">
	                		<div style="font-size: 1rem;">跑步距离</div>
	                		<div style="margin-top: 0.5714285714285714rem;line-height: 2.714285714285714rem;">
	                			<span class="area_all area_all_curr">全部</span>
	                			<span class="area_all">全马</span>
	                			<span class="area_all">半马</span>
	                			<!--<span class="area_all">10公里以内</span>
	                			<span class="area_all">10-20公里</span>
	                			<span class="area_all">20-40公里</span>
	                			<span class="area_all">全马以上</span>-->
	                		</div>
	                	</div>
	                	<div style="box-sizing: border-box;padding: 0px 0.6428571428571429rem 0.5714285714285714rem;color: #7a7a7a;font-weight: bold;border-bottom: 1px solid #D9D9D9;" >
	                		<input class="weui_btn" style="color: #FF3175;background: #FFFFFF;border-color: #e0e0e0;" type="button" name="" id="" value="完成" />
	                	</div>
	                	
	                    <!--<!--<p class="option_cell option_curr" search-type="time">正在报名</p>
	                    <!-- <p class="option_cell" search-type="time">即将开始</p> -->
	                    <!--<p class="option_cell" search-type="time">报名结束</p>-->
	                </div>
	            </div>
	        </div>
    	</div>
    	<div style="padding-top: 0.7142857142857143rem;background: #FFFFFF;width: 4.285714285714286rem;margin-right: 1.5rem;">
    		<span class="search_bar" style="display: inline-block;width: 1.178571428571429rem;height: 1.178571428571429rem;padding-right: 0.5714285714285714rem;"><img style="width: 100%;height: 100%;" src="/static/images/new_index_1.png"/></span>
    		<span style="display: inline-block;width: 1px;height: 1.142857142857143rem;background: #e6e5e6;"></span>
    		<a href="/user/userinfo"><span style="display: inline-block;width: 1.178571428571429rem;height: 1.178571428571429rem;padding: 0 0 0 0.5714285714285714rem;"><img style="width: 100%;height: 100%;" src="/static/images/new_index_2.png"/></span></a>
    	</div>
     </div>
     <!--<div id="page2" style="height: 4.285714285714286rem;width: 100%;background: #FFFFFF;"></div>-->
    <?php echo $_smarty_tpl->tpl_vars['hotcitys']->value;?>
	
    <div class="search_result matchBox">
        <?php if ($_smarty_tpl->tpl_vars['list']->value){?>
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
        </a>
        <?php } ?>
        <?php }else{ ?>
         <!--<div class="none_result centerBox">
            <ul class="center_cell flexBox2">
                <li><i class="icon"></i></li>
                <li class="none_result_hunt flex_1">抱歉，没有找到该赛事！您可以<a href="">提交想跑的赛事></a></li>
            </ul>
        </div> -->
        <!--<div class="center_cell empty">
            <div class="emptyImg"><img src="/static/images/empty.png" alt=""></div>
            <p><span>抱歉，没有找到该赛事！</span><span>您可以<a href="/User/feedback">提交想跑的赛事></a></span></p>
        </div>-->
        <?php }?>
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
    </div>
    <div class="jz_more" style="text-align: center;background: #FFFFFF;border-top: 1px solid #F5F5F9;">加载更多</div>
    <!--<?php echo $_smarty_tpl->getSubTemplate ('Comon/nuomihotlist.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('type'=>'vertical'), 0);?>
-->
</div>
<div class="back_top" onclick="goTop(0.2,16);return false;"></div>
<script src="/static/js/zepto.js"></script>
<script src="/static/weui/js/weui.js"></script>
<script type="text/javascript">
weui.search_bar.init();
var filter = function(){
	//////////////////////////////////////////////////
//  $(".drop-down").css({
//      "height":($('.wrap').height()-77)+"px",
//  }).on("touchstart",function(e){
//  	console.log(11);
//      if(!/option_cell/g.test(e.target.className))
//      return false;
//  }).find(".option_cell").on("click",function(){
//      var $this = $(this);
//      $this.siblings().removeClass("option_curr");
//      $this.parents(".filter_cell").removeClass("curr_filter").find(".selected_bar p").html($(this).html());
//      $this.addClass("option_curr");
//      search();
//      console.log(55555)
//  });
//  $(".selected_bar").tap(function(){
////		$('.option_cell').off('click');
//      var _this = $(this).parent();
//      if(_this.hasClass("curr_filter")){
//          _this.removeClass("curr_filter");
//      }else{
//          $(".filter_cell").removeClass("curr_filter");
//          _this.addClass("curr_filter");
//      }
//  });
    /////////////////////////////
    /////////////////////////////////////修改后////////////////////////////////
    $(".drop-down").css({
        "height":($('.wrap').height())+"px",
    }).on("touchstart",function(e){
//      if(!/option_cell/g.test(e.target.className))
//      return false;
        $('.option_cell').unbind('click');
        $('.option_cell').bind('click',function () {
        var $this = $(this);
        $this.siblings().removeClass("option_curr");
        $this.parents(".filter_cell").removeClass("curr_filter").find(".selected_bar p").html($(this).html());
        $this.addClass("option_curr");
        $('body').css('overflow','visible');
        $('.wrap').css('height','100%');
    	$('.wrap').css('overflow','visible');
    	bolean=true;
        search_1();
        $('.area_city span').unbind('click');
        $('.area_city span').bind('click',function () {
        	var _area=$(this).html();
			$(".search_area_bar").html(_area);
			search_1();
        });
        })
    })
    var bolean=true;
    var this_htm='';
    $(".selected_bar").click(function(){
    	var tex= $(this).text();
    	if(tex!=this_htm){
    		bolean=true;
    	}
    	 this_htm=$(this).text();
    	if($(this).parent().attr('class')=='flex_1 filter_cell btn_hid curr_filter'||$(this).parent().attr('class')=='flex_1 filter_cell curr_filter'){
    		$('body').css('overflow','visible');
        	$('.wrap').css('height','100%');
    		$('.wrap').css('overflow','visible');
    		
//	    	bolean=false;
    	}else{
    		var a=$('body').height();
	    	$('body').css('overflow','hidden');
	    	$('.wrap').css('height',a+'px');
	    	$('.wrap').css('overflow','hidden');
//  		bolean=true;
    	}
        var _this = $(this).parent();
//      if($(this).find('.search_order_bar').html()=='跑步'){
//      	return false;
//      }
        if(_this.hasClass("curr_filter")){
            _this.removeClass("curr_filter");
        }else{
            $(".filter_cell").removeClass("curr_filter");
            _this.addClass("curr_filter");
        }
    });

    $(".sub_type").tap(function(){
        $(".sub_type").removeClass("curr");
        $(".sub_list").removeClass("curr");
        $("."+$(this).addClass("curr").attr("lableFor")).addClass("curr");
    });
}();
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
////////////////////////////////////////////改标题///////////////////////////////////
$(document).ready(function () {
	var URL=decodeURI(window.location.href) ;
	var d=URL.split('?');
	if (d[1]=='ws=海外&type=1') {
		$('title').html('海外赛事');
		$('.area_city').css('display','none');
	}else{
		$('title').html('国内赛事');
		$('.area_city').css('display','block');
	}
})
/////////////////////推荐随机出现///////////////////////////////////
//var now = "<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
";
//$(document).ready(function () {
//	$('.hot_matchs a').remove();
//	$.ajax({
//		type:"get",
//		url:"/ajax/hotlistv2",
//		data:{length:'200'},
//		sync:true,
//		dataType:"json",
//		success:function (obj) {
//			var Obj=obj.data;
//			var Length=Obj.length;
//			// 定义存放生成随机数的数组 
//			var _array=new Array(); 
//			var all_array=new Array();
//			var index=0;
//			for (var i=0;i<Length;i++) {
//				all_array.push(i);
//			}
//			if(Length<=5){
//				_array=all_array;
//			}else{
//				generateRandom(all_array.length);
//			}
//			function generateRandom(count){ 
//			     var rand = parseInt(Math.random()*count);
//			     _array.push(all_array[rand]);
//			     all_array.splice(rand,1);
//			     index++;
//			     if(index>4){
//			     	return false;
//			     }
//				generateRandom(all_array.length);
//			};
//			for (var i=0;i<_array.length;i++) {
//
//				var minge='';
//				var creathtm='';
////				creathtm=shaixuan(Obj[_array[i]],creathtm);
//				if(Obj[_array[i]].m_state!=0 || Obj[_array[i]].m_GameTime <=now || Obj[_array[i]].m_releaseTime >now || Obj[_array[i]].m_untilTime<now || Obj[_array[i]].m_offineTime <now){
////					var minge='<span class="S_overhiden">'+Obj[_array[i]].m_name+'</span><span class="match_tips match_tips_pay1">名额已满</span>';
//					var minge='<div class="nm_view"><div class="nuomi_7 mejz"></div></div>';
//				}else if(Obj[_array[i]].m_placesleft<=20){
////					var minge='<span class="S_overhiden">'+Obj[_array[i]].m_name+'</span><span class="match_tips match_tips_warm match_tips_pay2">名额紧张</span>';
//					var minge='<div class="nm_view"><div class="nuomi_7 jz"></div>'+creathtm+'<div class="nuomi_5"></div></div>';
//				}else{
////					var minge='<span class="S_overhiden over_hidden">'+Obj[_array[i]].m_name+'</span>';
//					var minge='<div class="nm_view"><div class="nuomi_7 yh"></div>'+creathtm+'</div>';
//				}
//				var Time=Obj[_array[i]].m_GameTime.substring(0,10);
//				var types=Obj[_array[i]].m_Mtypes.replace(/\|/g,'<span></span>');
//
//				var infolist =  Obj[_array[i]]['info'];
//				var mealHTML = sourceHTML = "";
//				for(var m_i=0,len=infolist.length;m_i<len;m_i++){
//					if(infolist[m_i].g_currprice>=1){
//						infolist[m_i]['g_currprice']=Math.round(infolist[m_i]['g_currprice']);
//					}
//					if(sourceHTML=="" && infolist[m_i]['g_type']==1){
//						
//						sourceHTML = '<div><span class="orange">￥</span><span class="orange_price">'+infolist[m_i]['g_currprice']+'</span><span class="orange">起/人</span><del class="orange_yj">'+infolist[m_i]['g_currprice']+'</del> <span class="orange_text">'+infolist[m_i]['g_name']+'</span></div><div style="overflow: hidden;"><span class="attend_num">已报'+parseInt(infolist[m_i]['g_stock']-infolist[m_i]['g_stockleft'])+'</span></div>';
//					}
//
//					if(mealHTML=="" && infolist[m_i]['g_type']==2 && infolist[m_i]['g_name']!="赛事单独报名"){
//						mealHTML = '<div><span class="orange">￥</span><span class="orange_price">'+infolist[m_i]['g_currprice']+'</span><span class="orange">起/人</span><del class="orange_yj">'+infolist[m_i]['g_currprice']+'</del> <span class="orange_text">'+infolist[m_i]['g_name']+'</span></div><div style="overflow: hidden;"><span class="attend_num">已报'+parseInt(infolist[m_i]['g_stock']-infolist[m_i]['g_stockleft'])+'</span></div>';
//					}
//				}
//
//				var str='<a href="/Matchinfo?m_id='+Obj[_array[i]].id+'&platform=zx-tour" class="list_a"><div class="weui_media_box weui_media_appmsg"><div class="weui_media_hd"><img class="weui_media_appmsg_thumb" src='+Obj[_array[i]].m_img+' alt=""></div><div class="weui_media_bd"><h4 class="weui_media_title flex"><span class="S_overhiden curr">'+Obj[_array[i]].m_name+'</span></h4><p class="weui_media_desc weui_media_desc_1 line2 weui_media_title_position">'+Obj[_array[i]].m_des+'</p><p class="weui_media_desc weui_media_desc_padding">'+Time+' '+Obj[_array[i]].m_city+' '+Obj[_array[i]].m_mtypes_class+'  '+types+'</p></div>'+minge+'</div><div class="bm_attend">'+sourceHTML+mealHTML+'</div></a>';
//				$('.hot_matchs').append(str);
//			}
//		}
//	});
//});
//$(function () {
//	var _length=$('.search_result a').length;
//	for (var i=1;i<=_length;i++) {
//		_change(i,'search_result',11,'');
//	}
//})
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
	search_1();
}
////////////////////////////////////////////////////////////////////分页
$(function () {
	jz_more()
})
function jz_more() {
	var arr1=new Array(),arr2=new Array(),page='';
	var _length=$('.search_result a').length;
	$('.search_result img').each(function (key) {
		arr1.push($(this).attr('src-img'));
		arr2.push($(this)[0]);
	})
	if(_length<=5){
		$('.jz_more').css('display','none');
		for (i=0;i<_length;i++) {
			arr2[i].src=arr1[i];
		}
	}else{
		$('.jz_more').css('display','block')
		for (i=0;i<5;i++) {
			arr2[i].src=arr1[i];
		}
		$('.search_result a').each(function (key) {
			if(key>4){
				$(this).css('display','none');
			}
		})
	}
	$('.jz_more').unbind('click');
	$('.jz_more').bind('click',function () {
		var htm_str='<div class="loading"><div class="jz">加载中</div><div class="weui_loading"><div class="weui_loading_leaf weui_loading_leaf_0"></div><div class="weui_loading_leaf weui_loading_leaf_1"></div><div class="weui_loading_leaf weui_loading_leaf_2"></div><div class="weui_loading_leaf weui_loading_leaf_3"></div><div class="weui_loading_leaf weui_loading_leaf_4"></div><div class="weui_loading_leaf weui_loading_leaf_5"></div><div class="weui_loading_leaf weui_loading_leaf_6"></div><div class="weui_loading_leaf weui_loading_leaf_7"></div><div class="weui_loading_leaf weui_loading_leaf_8"></div></div></div>';
		$('.jz_more').html(htm_str);
		page++;
		for (i=5*page;i<5*(page+1);i++) {
			if(i>arr1.length-1) {
				$('.jz_more').css('display','none');
				break;
			}
			arr2[i].src=arr1[i];
		}
		$('.search_result a').map(function (key) {
		if(key<=(5*(page+1)-1)){
			$(this).css('display','block');
		}
	})
		$('.jz_more').html('加载更多');
	})
}
var now = "<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
";
var search_1 = function (){
	var data = {};
//	data.search_order_bar = $(".search_order_bar").html();
	data.search_type_bar = $(".search_class_bar").html();
	data.search_area_bar = $(".search_area_bar").html();
	if(data.search_type_bar=='类型'){
		data.search_type_bar='全部类型';
	}
//	data.search_state_bar = $(".search_state_bar").html();
	weui.Loading.show("搜索中");
	$.ajax({
        cache: false,
        url:"/Search/screenv2?ws="+$("#search_input").val(),
        type: "POST",
        dataType: "json",
        data:data,
        timeout:3000,
        success: function(data){
        	var htmlStr = '<div class="center_cell empty"><div class="emptyImg"><img src-img="/static/images/empty.png" alt=""></div><p>抱歉，没有找到该赛事！<br>您可以<a href="/User/feedback">提交想跑的赛事></a></p></div>';
            if(data.error == 0 ){           
                var list = data.data;
                htmlStr = "";
                for(var key in list){
                	m_gametime = list[key].m_GameTime.substr(0,10);
                	var m_untilTime = list[key].m_untilTime.substr(0,10);
                	var s1 = '2012-05-12';
					s1 = new Date(s1.replace(/-/g, "/"));
					s2 = new Date();
					
					var days = s1.getTime() - s2.getTime();
					var time = parseInt(days / (1000 * 60 * 60 * 24));
					var jz='';
					if(0<time<=7){
						jz='<div class="nuomi_7 jz"></div>'
					}else{
						jz='<div class="nuomi_7"></div>'
					}
                	var creathtm='';
                	var minge='';
                	if(list[key].m_state!=0 || list[key].m_GameTime <=now || list[key].m_releaseTime >now || list[key].m_untilTime<now || list[key].m_offineTime <now){
						var minge='<div class="nuomi_7"></div>';
					}else if(list[key].m_placesleft<=20){
						var minge='<div class="nuomi_7 mejz"></div>';
					}else{
						var minge='<div class="nuomi_7"></div>'
					}
                	if(list[key].m_entermode == "remote"){
                		htmlStr+='<a href="'+list[key].m_enterurl+'&platform=zx-tour"><div class="weui_media_box weui_media_appmsg">';
                	}else{
                		htmlStr+='<a href="/Matchinfo?m_id='+list[key].id+'&platform=zx-tour" class="list_a"><div class="weui_media_box weui_media_appmsg">';
                	}
                	var infolist =  list[key]['info'];
					var mealHTML = sourceHTML = "";
					for(var m_i=0,len=infolist.length;m_i<len;m_i++){
						if(infolist[m_i].g_currprice>=1){
							infolist[m_i]['g_currprice']=Math.round(infolist[m_i]['g_currprice']);
						}
						if(sourceHTML=="" && infolist[m_i]['g_type']==1){
							sourceHTML = '<div><span class="orange">￥</span><span class="orange_price">'+infolist[m_i]['g_currprice']+'</span><span class="orange">起/人</span><del class="orange_yj">'+infolist[m_i]['g_currprice']+'</del> <span class="orange_text">'+infolist[m_i]['g_name']+'</span></div><div style="overflow: hidden;"><span class="attend_num">已报'+parseInt(infolist[m_i]['g_stock']-infolist[m_i]['g_stockleft'])+'</span></div>';
						}

						if(mealHTML=="" && infolist[m_i]['g_type']==2  && infolist[m_i]['g_name']!="赛事单独报名"){
							mealHTML = '<div><span class="orange">￥</span><span class="orange_price">'+infolist[m_i]['g_currprice']+'</span><span class="orange">起/人</span><del class="orange_yj">'+infolist[m_i]['g_currprice']+'</del> <span class="orange_text">'+infolist[m_i]['g_name']+'</span></div><div style="overflow: hidden;"><span class="attend_num">已报'+parseInt(infolist[m_i]['g_stock']-infolist[m_i]['g_stockleft'])+'</span></div>';
						}
					}

                	var  m_mtypes =  list[key].m_Mtypes.replace(/\|/g, "<span></span>");
                	htmlStr+='<div class="weui_media_hd"><img class="weui_media_appmsg_thumb" src-img="'+list[key].m_img+'" alt=""></div><div class="weui_media_bd"><h4 class="weui_media_title flex"><span class="S_overhiden cuur">'+list[key].m_name+'</span></h4><p class="weui_media_desc">'+list[key].m_des+'</p><p class="weui_media_desc weui_media_desc_padding">'+m_gametime+' '+list[key].m_city+' '+list[key].m_mtypes_class+' '+m_mtypes+'</p></div><div class="nm_view">'+minge+jz+'</div></div><div class="bm_attend">'+sourceHTML+mealHTML+'</div></a>';           	
                }
                $(".search_result").html(htmlStr);
            }else{
            	//weui.Loading.error(data.msg,2000);
            	$(".search_result").html(htmlStr);
            	$('.wrap').css('background','#ffffff');
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
$(function () {
	$('.search_bar').click(function () {
		$('.weui_search_bar').css({'display':'flex','display':'-webkit-flex'})
		$('#page1').css('display','none');
		$('.hot_matchs ').css('display','none');
		$('#page2').css('display','none');
		$('.search_result').css('display','none');
		$('.jz_more').css('display','none')
	})
	$('#search_cancel').click(function () {
		$('.weui_search_bar').css('display','none')
		$('#page1').css('display','flex');
		$('.hot_matchs ').css('display','block');
		$('#page2').css('display','block');
		$('.search_result').css('display','block');
		$('.jz_more').css('display','block');
	})
})
$(function () {
	var bmzt_icon='';
    	/////////////////////////////////////更多筛选////////////////////////////////////
    	$('.bmzt_icon').unbind('click');
		$('.bmzt_icon').bind('click',function () {
			if($(this).parent().attr('class')=='bmzt_icon_curr'){
				$(this).parent().removeClass("bmzt_icon_curr");
				bmzt_icon='';
				return false;
			}
			$(this).parent().siblings().removeClass("bmzt_icon_curr");
			$(this).parent().addClass("bmzt_icon_curr");
			bmzt_icon=$(this).parent().find('span').html();
		})
    	var Area='国内';
    	/////////////////////////////////////更多筛选////////////////////////////////////
    	$('.Area span').unbind('click');
		$('.Area span').bind('click',function () {
			$(this).siblings().removeClass("area_all_curr");
			$(this).addClass("area_all_curr");
			if($(this).html()=='国际'){
				Area='全部国家';
			}
			if($(this).html()=='国内'){
				Area='全部城市';
			}
			if($(this).html()=='全部'){
				Area='地区';
			}
		})
    	
    	var Type='全部类型';
    	/////////////////////////////////////更多筛选////////////////////////////////////
    	$('.Type span').unbind('click');
		$('.Type span').bind('click',function () {
			$(this).siblings().removeClass("area_all_curr");
			$(this).addClass("area_all_curr");
			if($(this).html()=='全部'){
				Type='全部类型';
				return false;
			}
			Type=$(this).html();
		})
    	
    	var Distance='全部';
    	/////////////////////////////////////更多筛选////////////////////////////////////
    	$('.Distance span').unbind('click');
		$('.Distance span').bind('click',function () {
			$(this).siblings().removeClass("area_all_curr");
			$(this).addClass("area_all_curr");
			Distance=$(this).html();
		})
		$('.weui_btn').unbind('click');
		$('.weui_btn').click(function () {
			$('.search_area_bar').html('地区');
			$('.search_class_bar').html(Type);
			var shengfen_='';
			var city='';
			$('.btn_hid').removeClass('curr_filter');
			$('body').css('overflow','visible');
        	$('.wrap').css('height','100%');
    		$('.wrap').css('overflow','visible');
    		console.log(555);
    		console.log(addr_arr[45055])
			search_2(Distance,Area,bmzt_icon,Type);
			if(Area=='全部国家'){
				shengfen_+='<p class="sub_type_1">海外</p>'
				for (var i=0;i<addr_arr[45055].length;i++) {
					city+='<p class="option_cell">'+addr_arr[45055][i][1]+'</p>'
				}
				$('.sub_1').html(shengfen_);
				$('.sub_1 p:nth-child(1)').addClass('option_curr');
				$('.sub_2_2').html(city);
				$('.sub_2_2 p:nth-child(1)').addClass('option_curr');
			}
			else{
				for (var i=0;i<addr_arr[0].length-1;i++) {
					shengfen_+='<p class="sub_type_1" pid="'+addr_arr[0][i][0]+'">'+addr_arr[0][i][1]+'</p>'
				}for (var i=0;i<addr_arr[1].length;i++) {
					city+='<p class="option_cell">'+addr_arr[1][i][1]+'</p>'
				}
				$('.sub_1').html(shengfen_);
				$('.sub_1 p:nth-child(1)').addClass('option_curr');
				$('.sub_2_2').html(city);
				$('.sub_2_2 p:nth-child(1)').addClass('option_curr');
			}
		})
})
//function shaixuan_1(a,b) {
//	var type=a.m_Mtypes.split('|');
//	var c=0;
////	console.log(type);
//	for (var i=0;i<type.length;i++) {
//		var htm='';
//		switch (type[i]){
//		case '全马':
//		var htm='<div class="nuomi_1"></div>'
//			break;
//		case '半马':
//		var htm='<div class="nuomi_2"></div>'
//			break;
//		case '10公里':
//		var htm='<div class="nuomi_3"></div>'
//			break;
//		case '5公里':
//		var htm='<div class="nuomi_4"></div>'
//			break;
//		case '名额紧张':
//		var htm='<div class="nuomi_5"></div>'
//			break;
//		case '优惠':
//		var htm='<div class="nuomi_6"></div>'
//			break;
//		case '热门赛事':
//		var htm='<div class="nuomi_7"></div>'
//			break;
//		case '女子马拉松':
//		var htm='<div class="nuomi_8"></div>'
//			break;
//		case '乐趣跑':
//		var htm='<div class="nuomi_9"></div>'
//			break;
//		case '报名截止':
//		var htm='<div class="nuomi_10"></div>'
//			break;
//		case '优惠券':
//		var htm='<div class="nuomi_11"></div>'
//			break;
//		case '免费':
//		var htm='<div class="nuomi_12"></div>'
//			break;
//		default:
//			break;
//	}
//		c++;
//		b+=htm;
//	}
//	if(c>=type.length){
//		return b;
//	}
//}
var search_2 = function (_class,_area,_time,_type){
	var data = {};
//	data.search_order_bar = $(".search_order_bar").html();
	data.search_class_bar = _class;
	data.search_area_bar = _area;
	data.search_time_bar = _time;
	data.search_type_bar =_type;
//	data.search_state_bar = $(".search_state_bar").html();
	weui.Loading.show("搜索中");
	$.ajax({
        cache: false,
        url:"/Search/screenv2?ws="+$("#search_input").val(),
        type: "POST",
        dataType: "json",
        data:data,
        timeout:3000,
        success: function(data){
        	var htmlStr = '<div class="center_cell empty"><div class="emptyImg"><img src-img="/static/images/empty.png" alt=""></div><p>抱歉，没有找到该赛事！<br>您可以<a href="/User/feedback">提交想跑的赛事></a></p></div>';
            if(data.error == 0 ){           
                var list = data.data;
                htmlStr = "";
                for(var key in list){
                	m_gametime = list[key].m_GameTime.substr(0,10);
                	var creathtm='';
                	var m_untilTime = list[key].m_untilTime.substr(0,10);
                	var s1 = '2012-05-12';
					s1 = new Date(s1.replace(/-/g, "/"));
					s2 = new Date();
					
					var days = s1.getTime() - s2.getTime();
					var time = parseInt(days / (1000 * 60 * 60 * 24));
					var jz='';
					if(0<time<=7){
						jz='<div class="nuomi_7 jz"></div>'
					}else{
						jz='<div class="nuomi_7"></div>'
					}
                	var minge='';
                	if(list[key].m_state!=0 || list[key].m_GameTime <=now || list[key].m_releaseTime >now || list[key].m_untilTime<now || list[key].m_offineTime <now){
						var minge='<div class="nuomi_7"></div>';
					}else if(list[key].m_placesleft<=20){
						var minge='<div class="nuomi_7 mejz"></div>';
					}else{
						var minge='<div class="nuomi_7"></div>'
					}
                	if(list[key].m_entermode == "remote"){
                		htmlStr+='<a href="'+list[key].m_enterurl+'&platform=zx-tour"><div class="weui_media_box weui_media_appmsg">';
                	}else{
                		htmlStr+='<a href="/Matchinfo?m_id='+list[key].id+'&platform=zx-tour" class="list_a"><div class="weui_media_box weui_media_appmsg">';
                	}
                	var infolist =  list[key]['info'];
					var mealHTML = sourceHTML = "";
					for(var m_i=0,len=infolist.length;m_i<len;m_i++){
						if(infolist[m_i].g_currprice>=1){
							infolist[m_i]['g_currprice']=Math.round(infolist[m_i]['g_currprice']);
						}
						if(sourceHTML=="" && infolist[m_i]['g_type']==1){
							sourceHTML = '<div><span class="orange">￥</span><span class="orange_price">'+infolist[m_i]['g_currprice']+'</span><span class="orange">起/人</span><del class="orange_yj">'+infolist[m_i]['g_currprice']+'</del> <span class="orange_text">'+infolist[m_i]['g_name']+'</span></div><div style="overflow: hidden;"><span class="attend_num">已报'+parseInt(infolist[m_i]['g_stock']-infolist[m_i]['g_stockleft'])+'</span></div>';
						}

						if(mealHTML=="" && infolist[m_i]['g_type']==2 && infolist[m_i]['g_name']!="赛事单独报名"){
							mealHTML = '<div><span class="orange">￥</span><span class="orange_price">'+infolist[m_i]['g_currprice']+'</span><span class="orange">起/人</span><del class="orange_yj">'+infolist[m_i]['g_currprice']+'</del> <span class="orange_text">'+infolist[m_i]['g_name']+'</span></div><div style="overflow: hidden;"><span class="attend_num">已报'+parseInt(infolist[m_i]['g_stock']-infolist[m_i]['g_stockleft'])+'</span></div>';
						}
					}
                	var  m_mtypes =  list[key].m_Mtypes.replace(/\|/g, "<span></span>");
                	htmlStr+='<div class="weui_media_hd"><img class="weui_media_appmsg_thumb" src-img="'+list[key].m_img+'" alt=""></div><div class="weui_media_bd"><h4 class="weui_media_title flex"><span class="S_overhiden cuur">'+list[key].m_name+'</span></h4><p class="weui_media_desc">'+list[key].m_des+'</p><p class="weui_media_desc weui_media_desc_padding">'+m_gametime+' '+list[key].m_city+' '+list[key].m_mtypes_class+' '+m_mtypes+'</p></div><div class="nm_view">'+minge+jz+'</div></div><div class="bm_attend">'+sourceHTML+mealHTML+'</div></a>';           	
                }
                $(".search_result").html(htmlStr);
            }else{
            	//weui.Loading.error(data.msg,2000);
            	$(".search_result").html(htmlStr);
            	$('.wrap').css('background','#ffffff');
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
$(function () {
	search_2('','全部城市','','');
	//////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////筛选二级列表/////////////////////////////////////////////
})
var addr_arr = new Array(); addr_arr[0] = [["1", "北京"], ["2", "天津"], ["3", "河北"], ["4", "山西"], ["5", "内蒙古自治区"], ["6", "辽宁"], ["7", "吉林"], ["8", "黑龙江"], ["9", "上海"], ["10", "江苏"], ["11", "浙江"], ["12", "安徽"], ["13", "福建"], ["14", "江西"], ["15", "山东"], ["16", "河南"], ["17", "湖北"], ["18", "湖南"], ["19", "广东"], ["20", "广西壮族自治区"], ["21", "海南"], ["22", "重庆"], ["23", "四川"], ["24", "贵州"], ["25", "云南"], ["26", "西藏自治区"], ["27", "陕西"], ["28", "甘肃"], ["29", "青海"], ["30", "宁夏回族自治区"], ["31", "新疆维吾尔自治区"], ["999","港澳台地区"], ["35", "海外"]]; addr_arr[1] = [["36", "北京"]]; addr_arr[2] = [["40", "天津"]]; addr_arr[3] = [["73", "石家庄"], ["74", "唐山"], ["75", "秦皇岛"], ["76", "邯郸"], ["77", "邢台"], ["78", "保定"], ["79", "张家口"], ["80", "承德"], ["81", "衡水"], ["82", "廊坊"], ["83", "沧州"]]; addr_arr[4] = [["84", "太原"], ["85", "大同"], ["86", "阳泉"], ["87", "长治"], ["88", "晋城"], ["89", "朔州"], ["90", "晋中"], ["91", "运城"], ["92", "忻州"], ["93", "临汾"], ["94", "吕梁"]]; addr_arr[5] = [["95", "呼和浩特"], ["96", "包头"], ["97", "乌海"], ["98", "赤峰"], ["99", "通辽"], ["100", "鄂尔多斯"], ["101", "呼伦贝尔"], ["102", "巴彦淖尔"], ["103", "乌兰察布"], ["104", "兴安盟"], ["105", "锡林郭勒盟"], ["106", "阿拉善盟"]]; addr_arr[6] = [["107", "沈阳"], ["108", "大连"], ["109", "鞍山"], ["110", "抚顺"], ["111", "本溪"], ["112", "丹东"], ["113", "锦州"], ["114", "营口"], ["115", "阜新"], ["116", "辽阳"], ["117", "盘锦"], ["118", "铁岭"], ["119", "朝阳"], ["120", "葫芦岛"]]; addr_arr[7] = [["121", "长春"], ["122", "吉林"], ["123", "四平"], ["124", "辽源"], ["125", "通化"], ["126", "白山"], ["127", "松原"], ["128", "白城"], ["129", "延边朝鲜族自治州"]]; addr_arr[8] = [["130", "哈尔滨"], ["131", "齐齐哈尔"], ["132", "鸡西"], ["133", "鹤岗"], ["134", "双鸭山"], ["135", "大庆"], ["136", "伊春"], ["137", "佳木斯"], ["138", "七台河"], ["139", "牡丹江"], ["140", "黑河"], ["141", "绥化"], ["142", "大兴安岭地区"]]; addr_arr[9] = [["39", "上海"]]; addr_arr[10] = [["162", "南京"], ["163", "无锡"], ["164", "徐州"], ["165", "常州"], ["166", "苏州"], ["167", "南通"], ["168", "连云港"], ["169", "淮安"], ["170", "盐城"], ["171", "扬州"], ["172", "镇江"], ["173", "泰州"], ["174", "宿迁"]]; addr_arr[11] = [["175", "杭州"], ["176", "宁波"], ["177", "温州"], ["178", "嘉兴"], ["179", "湖州"], ["180", "绍兴"], ["181", "舟山"], ["182", "衢州"], ["183", "金华"], ["184", "台州"], ["185", "丽水"]]; addr_arr[12] = [["186", "合肥"], ["187", "芜湖"], ["188", "蚌埠"], ["189", "淮南"], ["190", "马鞍山"], ["191", "淮北"], ["192", "铜陵"], ["193", "安庆"], ["194", "黄山"], ["195", "滁州"], ["196", "阜阳"], ["197", "宿州"], ["198", "巢湖"], ["199", "六安"], ["200", "亳州"], ["201", "池州"], ["202", "宣城"]]; addr_arr[13] = [["203", "福州"], ["204", "厦门"], ["205", "莆田"], ["206", "三明"], ["207", "泉州"], ["208", "漳州"], ["209", "南平"], ["210", "龙岩"], ["211", "宁德"]]; addr_arr[14] = [["212", "南昌"], ["213", "景德镇"], ["214", "萍乡"], ["215", "九江"], ["216", "新余"], ["217", "鹰潭"], ["218", "赣州"], ["219", "吉安"], ["220", "宜春"], ["221", "抚州"], ["222", "上饶"]]; addr_arr[15] = [["223", "济南"], ["224", "青岛"], ["225", "淄博"], ["226", "枣庄"], ["227", "东营"], ["228", "烟台"], ["229", "潍坊"], ["230", "济宁"], ["231", "泰安"], ["232", "威海"], ["233", "日照"], ["234", "莱芜"], ["235", "临沂"], ["236", "德州"], ["237", "聊城"], ["238", "滨州"], ["239", "菏泽"]]; addr_arr[16] = [["240", "郑州"], ["241", "开封"], ["242", "洛阳"], ["243", "平顶山"], ["244", "安阳"], ["245", "鹤壁"], ["246", "新乡"], ["247", "焦作"], ["248", "濮阳"], ["249", "许昌"], ["250", "漯河"], ["251", "三门峡"], ["252", "南阳"], ["253", "商丘"], ["254", "信阳"], ["255", "周口"], ["256", "驻马店"], ["257", "济源"]]; addr_arr[17] = [["258", "武汉"], ["259", "黄石"], ["260", "十堰"], ["261", "宜昌"], ["262", "襄樊"], ["263", "鄂州"], ["264", "荆门"], ["265", "孝感"], ["266", "荆州"], ["267", "黄冈"], ["268", "咸宁"], ["269", "随州"], ["270", "恩施土家族苗族自治州"], ["271", "仙桃"], ["272", "潜江"], ["273", "天门"], ["274", "神农架林区"]]; addr_arr[18] = [["275", "长沙"], ["276", "株洲"], ["277", "湘潭"], ["278", "衡阳"], ["279", "邵阳"], ["280", "岳阳"], ["281", "常德"], ["282", "张家界"], ["283", "益阳"], ["284", "郴州"], ["285", "永州"], ["286", "怀化"], ["287", "娄底"], ["288", "湘西土家族苗族自治州"]]; addr_arr[19] = [["289", "广州"], ["290", "韶关"], ["291", "深圳"], ["292", "珠海"], ["293", "汕头"], ["294", "佛山"], ["295", "江门"], ["296", "湛江"], ["297", "茂名"], ["298", "肇庆"], ["299", "惠州"], ["300", "梅州"], ["301", "汕尾"], ["302", "河源"], ["303", "阳江"], ["304", "清远"], ["305", "东莞"], ["306", "中山"], ["307", "潮州"], ["308", "揭阳"], ["309", "云浮"]]; addr_arr[20] = [["310", "南宁"], ["311", "柳州"], ["312", "桂林"], ["313", "梧州"], ["314", "北海"], ["315", "防城港"], ["316", "钦州"], ["317", "贵港"], ["318", "玉林"], ["319", "百色"], ["320", "贺州"], ["321", "河池"], ["322", "来宾"], ["323", "崇左"]]; addr_arr[21] = [["324", "海口"], ["325", "三亚"], ["326", "五指山"], ["327", "琼海"], ["328", "儋州"], ["329", "文昌"], ["330", "万宁"], ["331", "东方"], ["332", "定安县"], ["333", "屯昌县"], ["334", "澄迈县"], ["335", "临高县"], ["336", "白沙黎族自治县"], ["337", "昌江黎族自治县"], ["338", "乐东黎族自治县"], ["339", "陵水黎族自治县"], ["340", "保亭黎族苗族自治县"], ["341", "琼中黎族苗族自治县"], ["342", "西沙群岛"], ["343", "南沙群岛"], ["344", "中沙群岛的岛礁及其海域"]]; addr_arr[22] = [["62", "重庆"]]; addr_arr[23] = [["385", "成都"], ["386", "自贡"], ["387", "攀枝花"], ["388", "泸州"], ["389", "德阳"], ["390", "绵阳"], ["391", "广元"], ["392", "遂宁"], ["393", "内江"], ["394", "乐山"], ["395", "南充"], ["396", "眉山"], ["397", "宜宾"], ["398", "广安"], ["399", "达州"], ["400", "雅安"], ["401", "巴中"], ["402", "资阳"], ["403", "阿坝藏族羌族自治州"], ["404", "甘孜藏族自治州"], ["405", "凉山彝族自治州"]]; addr_arr[24] = [["406", "贵阳"], ["407", "六盘水"], ["408", "遵义"], ["409", "安顺"], ["410", "铜仁地区"], ["411", "黔西南布依族苗族自治州"], ["412", "毕节地区"], ["413", "黔东南苗族侗族自治州"], ["414", "黔南布依族苗族自治州"]]; addr_arr[25] = [["415", "昆明"], ["416", "曲靖"], ["417", "玉溪"], ["418", "保山"], ["419", "昭通"], ["420", "丽江"], ["421", "思茅"], ["422", "临沧"], ["423", "楚雄彝族自治州"], ["424", "红河哈尼族彝族自治州"], ["425", "文山壮族苗族自治州"], ["426", "西双版纳傣族自治州"], ["427", "大理白族自治州"], ["428", "德宏傣族景颇族自治州"], ["429", "怒江傈僳族自治州"], ["430", "迪庆藏族自治州"]];
addr_arr[26] = [["431", "拉萨"], ["432", "昌都地区"], ["433", "山南地区"], ["434", "日喀则地区"], ["435", "那曲地区"], ["436", "阿里地区"], ["437", "林芝地区"]]; addr_arr[27] = [["438", "西安"], ["439", "铜川"], ["440", "宝鸡"], ["441", "咸阳"], ["442", "渭南"], ["443", "延安"], ["444", "汉中"], ["445", "榆林"], ["446", "安康"], ["447", "商洛"]]; addr_arr[28] = [["448", "兰州"], ["449", "嘉峪关"], ["450", "金昌"], ["451", "白银"], ["452", "天水"], ["453", "武威"], ["454", "张掖"], ["455", "平凉"], ["456", "酒泉"], ["457", "庆阳"], ["458", "定西"], ["459", "陇南"], ["460", "临夏回族自治州"], ["461", "甘南藏族自治州"]]; addr_arr[29] = [["462", "西宁"], ["463", "海东地区"], ["464", "海北藏族自治州"], ["465", "黄南藏族自治州"], ["466", "海南藏族自治州"], ["467", "果洛藏族自治州"], ["468", "玉树藏族自治州"], ["469", "海西蒙古族藏族自治州"]]; addr_arr[30] = [["470", "银川"], ["471", "石嘴山"], ["472", "吴忠"], ["473", "固原"], ["474", "中卫"]]; addr_arr[31] = [["475", "乌鲁木齐"], ["476", "克拉玛依"], ["477", "吐鲁番地区"], ["478", "哈密地区"], ["479", "昌吉回族自治州"], ["480", "博尔塔拉蒙古自治州"], ["481", "巴音郭楞蒙古自治州"], ["482", "阿克苏地区"], ["483", "克孜勒苏柯尔克孜自治州"], ["484", "喀什地区"], ["485", "和田地区"], ["486", "伊犁哈萨克自治州"], ["487", "塔城地区"], ["488", "阿勒泰地区"], ["489", "石河子"], ["490", "阿拉尔"], ["491", "图木舒克"], ["492", "五家渠"]]; addr_arr[32] = [["493", "台北"], ["494", "高雄"], ["495", "基隆"], ["496", "台中"], ["497", "台南"], ["498", "新竹"], ["499", "嘉义"], ["500", "台北县"], ["501", "宜兰县"], ["502", "桃园县"], ["503", "新竹县"], ["504", "苗栗县"], ["505", "台中县"], ["506", "彰化县"], ["507", "南投县"], ["508", "云林县"], ["509", "嘉义县"], ["510", "台南县"], ["511", "高雄县"], ["512", "屏东县"], ["513", "澎湖县"], ["514", "台东县"], ["515", "花莲县"]]; addr_arr[33] = [["516", "中西区"], ["517", "东区"], ["518", "九龙城区"], ["519", "观塘区"], ["520", "南区"], ["521", "深水埗区"], ["522", "黄大仙区"], ["523", "湾仔区"], ["524", "油尖旺区"], ["525", "离岛区"], ["526", "葵青区"], ["527", "北区"], ["528", "西贡区"], ["529", "沙田区"], ["530", "屯门区"], ["531", "大埔区"], ["532", "荃湾区"], ["533", "元朗区"]]; addr_arr[34] = [["534", "澳门特别行政区"]]; addr_arr[35] = [["45055", "海外"]]; addr_arr[36] = [["37", "东城区"], ["38", "西城区"], ["41", "朝阳区"], ["42", "丰台区"], ["43", "石景山区"], ["44", "海淀区"], ["45", "门头沟区"], ["46", "房山区"], ["47", "通州区"], ["48", "顺义区"], ["49", "昌平区"], ["50", "大兴区"], ["51", "怀柔区"], ["52", "平谷区"], ["53", "密云县"], ["54", "延庆县"], ["566", "其他"]]; addr_arr[39] = [["143", "黄浦区"], ["144", "卢湾区"], ["145", "徐汇区"], ["146", "长宁区"], ["147", "静安区"], ["148", "普陀区"], ["149", "闸北区"], ["150", "虹口区"], ["151", "杨浦区"], ["152", "闵行区"], ["153", "宝山区"], ["154", "嘉定区"], ["155", "浦东新区"], ["156", "金山区"], ["157", "松江区"], ["158", "青浦区"], ["159", "南汇区"], ["160", "奉贤区"], ["161", "崇明县"]]; addr_arr[40] = [["55", "和平区"], ["56", "河东区"], ["57", "河西区"], ["58", "南开区"], ["59", "河北区"], ["60", "红桥区"], ["61", "塘沽区"], ["64", "东丽区"], ["65", "西青区"], ["66", "津南区"], ["67", "北辰区"], ["68", "武清区"], ["69", "宝坻区"], ["70", "宁河县"], ["71", "静海县"], ["72", "蓟县"]]; addr_arr[62] = [["345", "万州区"], ["346", "涪陵区"], ["347", "渝中区"], ["348", "大渡口区"], ["349", "江北区"], ["350", "沙坪坝区"], ["351", "九龙坡区"], ["352", "南岸区"], ["353", "北碚区"], ["354", "双桥区"], ["355", "万盛区"], ["356", "渝北区"], ["357", "巴南区"], ["358", "黔江区"], ["359", "长寿区"], ["360", "綦江县"], ["361", "潼南县"], ["362", "铜梁县"], ["363", "大足县"], ["364", "荣昌县"], ["365", "璧山县"], ["366", "梁平县"], ["367", "城口县"], ["368", "丰都县"], ["369", "垫江县"], ["370", "武隆县"], ["371", "忠县"], ["372", "开县"], ["373", "云阳县"], ["374", "奉节县"], ["375", "巫山县"], ["376", "巫溪县"], ["377", "石柱土家族自治县"], ["378", "秀山土家族苗族自治县"], ["379", "酉阳土家族苗族自治县"], ["380", "彭水苗族土家族自治县"], ["381", "江津"], ["382", "合川"], ["383", "永川"], ["384", "南川"]]; addr_arr[73] = [["1126", "井陉县"], ["1127", "井陉矿区"], ["1128", "元氏县"], ["1129", "平山县"], ["1130", "新乐"], ["1131", "新华区"], ["1132", "无极县"], ["1133", "晋州"], ["1134", "栾城县"], ["1135", "桥东区"], ["1136", "桥西区"], ["1137", "正定县"], ["1138", "深泽县"], ["1139", "灵寿县"], ["1140", "藁城"], ["1141", "行唐县"], ["1142", "裕华区"], ["1143", "赞皇县"], ["1144", "赵县"], ["1145", "辛集"], ["1146", "长安区"], ["1147", "高邑县"], ["1148", "鹿泉"]]; addr_arr[74] = [["1149", "丰南区"], ["1150", "丰润区"], ["1151", "乐亭县"], ["1152", "古冶区"], ["1153", "唐海县"], ["1154", "开平区"], ["1155", "滦南县"], ["1156", "滦县"], ["1157", "玉田县"], ["1158", "路北区"], ["1159", "路南区"], ["1160", "迁安"], ["1161", "迁西县"], ["1162", "遵化"]]; addr_arr[75] = [["1163", "北戴河区"], ["1164", "卢龙县"], ["1165", "山海关区"], ["1166", "抚宁县"], ["1167", "昌黎县"], ["1168", "海港区"], ["1169", "青龙满族自治县"]]; addr_arr[76] = [["1170", "丛台区"], ["1171", "临漳县"], ["1172", "复兴区"], ["1173", "大名县"], ["1174", "峰峰矿区"], ["1175", "广平县"], ["1176", "成安县"], ["1177", "曲周县"], ["1178", "武安"], ["1179", "永年县"], ["1180", "涉县"], ["1181", "磁县"], ["1182", "肥乡县"], ["1183", "邯山区"], ["1184", "邯郸县"], ["1185", "邱县"], ["1186", "馆陶县"], ["1187", "魏县"], ["1188", "鸡泽县"]]; addr_arr[77] = [["1189", "临城县"], ["1190", "临西县"], ["1191", "任县"], ["1192", "内丘县"], ["1193", "南和县"], ["1194", "南宫"], ["1195", "威县"], ["1196", "宁晋县"], ["1197", "巨鹿县"], ["1198", "平乡县"], ["1199", "广宗县"], ["1200", "新河县"], ["1201", "柏乡县"], ["1202", "桥东区"], ["1203", "桥西区"], ["1204", "沙河"], ["1205", "清河县"], ["1206", "邢台县"], ["1207", "隆尧县"]]; addr_arr[78] = [["1208", "北区"], ["1209", "南区"], ["1210", "博野县"], ["1211", "唐县"], ["1212", "安国"], ["1213", "安新县"], ["1214", "定兴县"], ["1215", "定州"], ["1216", "容城县"], ["1217", "徐水县"], ["1218", "新区"], ["1219", "易县"], ["1220", "曲阳县"], ["1221", "望都县"], ["1222", "涞水县"], ["1223", "涞源县"], ["1224", "涿州"], ["1225", "清苑县"], ["1226", "满城县"], ["1227", "蠡县"], ["1228", "阜平县"], ["1229", "雄县"], ["1230", "顺平县"], ["1231", "高碑店"], ["1232", "高阳县"]]; addr_arr[79] = [["1233", "万全县"], ["1234", "下花园区"], ["1235", "宣化区"], ["1236", "宣化县"], ["1237", "尚义县"], ["1238", "崇礼县"], ["1239", "康保县"], ["1240", "张北县"], ["1241", "怀安县"], ["1242", "怀来县"], ["1243", "桥东区"], ["1244", "桥西区"], ["1245", "沽源县"], ["1246", "涿鹿县"], ["1247", "蔚县"], ["1248", "赤城县"], ["1249", "阳原县"]]; addr_arr[80] = [["1250", "丰宁满族自治县"], ["1251", "兴隆县"], ["1252", "双桥区"], ["1253", "双滦区"], ["1254", "围场满族蒙古族自治县"], ["1255", "宽城满族自治县"], ["1256", "平泉县"], ["1257", "承德县"], ["1258", "滦平县"], ["1259", "隆化县"], ["1260", "鹰手营子矿区"]];
addr_arr[81] = [["1261", "冀州"], ["1262", "安平县"], ["1263", "故城县"], ["1264", "景县"], ["1265", "枣强县"], ["1266", "桃城区"], ["1267", "武强县"], ["1268", "武邑县"], ["1269", "深州"], ["1270", "阜城县"], ["1271", "饶阳县"]]; addr_arr[82] = [["1272", "三河"], ["1273", "固安县"], ["1274", "大厂回族自治县"], ["1275", "大城县"], ["1276", "安次区"], ["1277", "广阳区"], ["1278", "文安县"], ["1279", "永清县"], ["1280", "霸州"], ["1281", "香河县"]]; addr_arr[83] = [["1282", "东光县"], ["1283", "任丘"], ["1284", "南皮县"], ["1285", "吴桥县"], ["1286", "孟村回族自治县"], ["1287", "新华区"], ["1288", "沧县"], ["1289", "河间"], ["1290", "泊头"], ["1291", "海兴县"], ["1292", "献县"], ["1293", "盐山县"], ["1294", "肃宁县"], ["1295", "运河区"], ["1296", "青县"], ["1297", "黄骅"]]; addr_arr[84] = [["1298", "万柏林区"], ["1299", "古交"], ["1300", "娄烦县"], ["1301", "小店区"], ["1302", "尖草坪区"], ["1303", "晋源区"], ["1304", "杏花岭区"], ["1305", "清徐县"], ["1306", "迎泽区"], ["1307", "阳曲县"]]; addr_arr[85] = [["1308", "南郊区"], ["1309", "城区"], ["1310", "大同县"], ["1311", "天镇县"], ["1312", "左云县"], ["1313", "广灵县"], ["1314", "新荣区"], ["1315", "浑源县"], ["1316", "灵丘县"], ["1317", "矿区"], ["1318", "阳高县"]]; addr_arr[86] = [["1319", "城区"], ["1320", "平定县"], ["1321", "盂县"], ["1322", "矿区"], ["1323", "郊区"]]; addr_arr[87] = [["1324", "城区"], ["1325", "壶关县"], ["1326", "屯留县"], ["1327", "平顺县"], ["1328", "武乡县"], ["1329", "沁县"], ["1330", "沁源县"], ["1331", "潞城"], ["1332", "襄垣县"], ["1333", "郊区"], ["1334", "长子县"], ["1335", "长治县"], ["1336", "黎城县"]]; addr_arr[88] = [["1337", "城区"], ["1338", "沁水县"], ["1339", "泽州县"], ["1340", "阳城县"], ["1341", "陵川县"], ["1342", "高平"]]; addr_arr[89] = [["1343", "右玉县"], ["1344", "山阴县"], ["1345", "平鲁区"], ["1346", "应县"], ["1347", "怀仁县"], ["1348", "朔城区"]]; addr_arr[90] = [["1349", "介休"], ["1350", "和顺县"], ["1351", "太谷县"], ["1352", "寿阳县"], ["1353", "左权县"], ["1354", "平遥县"], ["1355", "昔阳县"], ["1356", "榆次区"], ["1357", "榆社县"], ["1358", "灵石县"], ["1359", "祁县"]]; addr_arr[91] = [["1360", "万荣县"], ["1361", "临猗县"], ["1362", "垣曲县"], ["1363", "夏县"], ["1364", "平陆县"], ["1365", "新绛县"], ["1366", "永济"], ["1367", "河津"], ["1368", "盐湖区"], ["1369", "稷山县"], ["1370", "绛县"], ["1371", "芮城县"], ["1372", "闻喜县"]]; addr_arr[92] = [["1373", "五台县"], ["1374", "五寨县"], ["1375", "代县"], ["1376", "保德县"], ["1377", "偏关县"], ["1378", "原平"], ["1379", "宁武县"], ["1380", "定襄县"], ["1381", "岢岚县"], ["1382", "忻府区"], ["1383", "河曲县"], ["1384", "神池县"], ["1385", "繁峙县"], ["1386", "静乐县"]]; addr_arr[93] = [["1387", "乡宁县"], ["1388", "侯马"], ["1389", "古县"], ["1390", "吉县"], ["1391", "大宁县"], ["1392", "安泽县"], ["1393", "尧都区"], ["1394", "曲沃县"], ["1395", "永和县"], ["1396", "汾西县"], ["1397", "洪洞县"], ["1398", "浮山县"], ["1399", "翼城县"], ["1400", "蒲县"], ["1401", "襄汾县"], ["1402", "隰县"], ["1403", "霍州"]]; addr_arr[94] = [["1404", "中阳县"], ["1405", "临县"], ["1406", "交口县"], ["1407", "交城县"], ["1408", "兴县"], ["1409", "孝义"], ["1410", "岚县"], ["1411", "文水县"], ["1412", "方山县"], ["1413", "柳林县"], ["1414", "汾阳"], ["1415", "石楼县"], ["1416", "离石区"]]; addr_arr[95] = [["1417", "和林格尔县"], ["1418", "回民区"], ["1419", "土默特左旗"], ["1420", "托克托县"], ["1421", "新城区"], ["1422", "武川县"], ["1423", "清水河县"], ["1424", "玉泉区"], ["1425", "赛罕区"]]; addr_arr[96] = [["1426", "东河区"], ["1427", "九原区"], ["1428", "固阳县"], ["1429", "土默特右旗"], ["1430", "昆都仑区"], ["1431", "白云矿区"], ["1432", "石拐区"], ["1433", "达尔罕茂明安联合旗"], ["1434", "青山区"]]; addr_arr[97] = [["1435", "乌达区"], ["1436", "海勃湾区"], ["1437", "海南区"]]; addr_arr[98] = [["1438", "元宝山区"], ["1439", "克什克腾旗"], ["1440", "喀喇沁旗"], ["1441", "宁城县"], ["1442", "巴林右旗"], ["1443", "巴林左旗"], ["1444", "敖汉旗"], ["1445", "松山区"], ["1446", "林西县"], ["1447", "红山区"], ["1448", "翁牛特旗"], ["1449", "阿鲁科尔沁旗"]]; addr_arr[99] = [["1450", "奈曼旗"], ["1451", "库伦旗"], ["1452", "开鲁县"], ["1453", "扎鲁特旗"], ["1454", "科尔沁区"], ["1455", "科尔沁左翼中旗"], ["1456", "科尔沁左翼后旗"], ["1457", "霍林郭勒"]]; addr_arr[100] = [["1458", "东胜区"], ["1459", "乌审旗"], ["1460", "伊金霍洛旗"], ["1461", "准格尔旗"], ["1462", "杭锦旗"], ["1463", "达拉特旗"], ["1464", "鄂东胜区"], ["1465", "鄂托克前旗"], ["1466", "鄂托克旗"]]; addr_arr[101] = [["1467", "扎兰屯"], ["1468", "新巴尔虎右旗"], ["1469", "新巴尔虎左旗"], ["1470", "根河"], ["1471", "海拉尔区"], ["1472", "满洲里"], ["1473", "牙克石"], ["1474", "莫力达瓦达斡尔族自治旗"], ["1475", "鄂伦春自治旗"], ["1476", "鄂温克族自治旗"], ["1477", "阿荣旗"], ["1478", "陈巴尔虎旗"], ["1479", "额尔古纳"]]; addr_arr[102] = [["1480", "临河区"], ["1481", "乌拉特中旗"], ["1482", "乌拉特前旗"], ["1483", "乌拉特后旗"], ["1484", "五原县"], ["1485", "杭锦后旗"], ["1486", "磴口县"]]; addr_arr[103] = [["1487", "丰镇"], ["1488", "兴和县"], ["1489", "凉城县"], ["1490", "化德县"], ["1491", "卓资县"], ["1492", "商都县"], ["1493", "四子王旗"], ["1494", "察哈尔右翼中旗"], ["1495", "察哈尔右翼前旗"], ["1496", "察哈尔右翼后旗"], ["1497", "集宁区"]]; addr_arr[104] = [["1498", "乌兰浩特"], ["1499", "扎赉特旗"], ["1500", "科尔沁右翼中旗"], ["1501", "科尔沁右翼前旗"], ["1502", "突泉县"], ["1503", "阿尔山"]]; addr_arr[105] = [["1504", "东乌珠穆沁旗"], ["1505", "二连浩特"], ["1506", "多伦县"], ["1507", "太仆寺旗"], ["1508", "正蓝旗"], ["1509", "正镶白旗"], ["1510", "苏尼特右旗"], ["1511", "苏尼特左旗"], ["1512", "西乌珠穆沁旗"], ["1513", "锡林浩特"], ["1514", "镶黄旗"], ["1515", "阿巴嘎旗"]]; addr_arr[106] = [["1516", "阿拉善右旗"], ["1517", "阿拉善左旗"], ["1518", "额济纳旗"]]; addr_arr[107] = [["1519", "东陵区"], ["1520", "于洪区"], ["1521", "和平区"], ["1522", "大东区"], ["1523", "康平县"], ["1524", "新民"], ["1525", "沈北新区"], ["1526", "沈河区"], ["1527", "法库县"], ["1528", "皇姑区"], ["1529", "苏家屯区"], ["1530", "辽中县"], ["1531", "铁西区"]]; addr_arr[108] = [["1532", "中山区"], ["1533", "庄河"], ["1534", "旅顺口区"], ["1535", "普兰店"], ["1536", "沙河口区"], ["1537", "瓦房店"], ["1538", "甘井子区"], ["1539", "西岗区"], ["1540", "金州区"], ["1541", "长海县"]]; addr_arr[109] = [["1542", "千山区"], ["1543", "台安县"], ["1544", "岫岩满族自治县"], ["1545", "海城"], ["1546", "立山区"], ["1547", "铁东区"], ["1548", "铁西区"]]; addr_arr[110] = [["1549", "东洲区"], ["1550", "抚顺县"], ["1551", "新宾满族自治县"], ["1552", "新抚区"], ["1553", "望花区"], ["1554", "清原满族自治县"], ["1555", "顺城区"]]; addr_arr[111] = [["1556", "南芬区"], ["1557", "平山区"], ["1558", "明山区"], ["1559", "本溪满族自治县"], ["1560", "桓仁满族自治县"], ["1561", "溪湖区"]];
addr_arr[112] = [["1562", "东港"], ["1563", "元宝区"], ["1564", "凤城"], ["1565", "宽甸满族自治县"], ["1566", "振兴区"], ["1567", "振安区"]]; addr_arr[113] = [["1568", "义县"], ["1569", "凌河区"], ["1570", "凌海"], ["1571", "北镇"], ["1572", "古塔区"], ["1573", "太和区"], ["1574", "黑山县"]]; addr_arr[114] = [["1575", "大石桥"], ["1576", "盖州"], ["1577", "站前区"], ["1578", "老边区"], ["1579", "西区"], ["1580", "鲅鱼圈区"]]; addr_arr[115] = [["1581", "太平区"], ["1582", "彰武县"], ["1583", "新邱区"], ["1584", "海州区"], ["1585", "清河门区"], ["1586", "细河区"], ["1587", "蒙古族自治县"]]; addr_arr[116] = [["1588", "太子河区"], ["1589", "宏伟区"], ["1590", "弓长岭区"], ["1591", "文圣区"], ["1592", "灯塔"], ["1593", "白塔区"], ["1594", "辽阳县"]]; addr_arr[117] = [["1595", "兴隆台区"], ["1596", "双台子区"], ["1597", "大洼县"], ["1598", "盘山县"]]; addr_arr[118] = [["1599", "开原"], ["1600", "昌图县"], ["1601", "清河区"], ["1602", "西丰县"], ["1603", "调兵山"], ["1604", "铁岭县"], ["1605", "银州区"]]; addr_arr[119] = [["1606", "凌源"], ["1607", "北票"], ["1608", "双塔区"], ["1609", "喀喇沁左翼蒙古族自治县"], ["1610", "建平县"], ["1611", "朝阳县"], ["1612", "龙城区"]]; addr_arr[120] = [["1613", "兴城"], ["1614", "南票区"], ["1615", "建昌县"], ["1616", "绥中县"], ["1617", "连山区"], ["1618", "龙港区"]]; addr_arr[121] = [["1619", "九台"], ["1620", "二道区"], ["1621", "农安县"], ["1622", "南关区"], ["1623", "双阳区"], ["1624", "宽城区"], ["1625", "德惠"], ["1626", "朝阳区"], ["1627", "榆树"], ["1628", "绿园区"]]; addr_arr[122] = [["1629", "丰满区"], ["1630", "昌邑区"], ["1631", "桦甸"], ["1632", "永吉县"], ["1633", "磐石"], ["1634", "舒兰"], ["1635", "船营区"], ["1636", "蛟河"], ["1637", "龙潭区"]]; addr_arr[123] = [["1638", "伊通满族自治县"], ["1639", "公主岭"], ["1640", "双辽"], ["1641", "梨树县"], ["1642", "铁东区"], ["1643", "铁西区"]]; addr_arr[124] = [["1644", "东丰县"], ["1645", "东辽县"], ["1646", "西安区"], ["1647", "龙山区"]]; addr_arr[125] = [["1648", "东昌区"], ["1649", "二道江区"], ["1650", "柳河县"], ["1651", "梅河口"], ["1652", "辉南县"], ["1653", "通化县"], ["1654", "集安"]]; addr_arr[126] = [["1655", "临江"], ["1656", "八道江区"], ["1657", "抚松县"], ["1658", "江源区"], ["1659", "长白朝鲜族自治县"], ["1660", "靖宇县"]]; addr_arr[127] = [["1661", "干安县"], ["1662", "前郭尔罗斯蒙古族自治县"], ["1663", "宁江区"], ["1664", "扶余县"], ["1665", "长岭县"]]; addr_arr[128] = [["1666", "大安"], ["1667", "洮北区"], ["1668", "洮南"], ["1669", "通榆县"], ["1670", "镇赉县"]]; addr_arr[129] = [["1671", "和龙"], ["1672", "图们"], ["1673", "安图县"], ["1674", "延吉"], ["1675", "敦化"], ["1676", "汪清县"], ["1677", "珲春"], ["1678", "龙井"]]; addr_arr[130] = [["1679", "五常"], ["1680", "依兰县"], ["1681", "南岗区"], ["1682", "双城"], ["1683", "呼兰区"], ["1684", "哈尔滨道里区"], ["1685", "宾县"], ["1686", "尚志"], ["1687", "巴彦县"], ["1688", "平房区"], ["1689", "延寿县"], ["1690", "方正县"], ["1691", "木兰县"], ["1692", "松北区"], ["1693", "通河县"], ["1694", "道外区"], ["1695", "阿城区"], ["1696", "香坊区"]]; addr_arr[131] = [["1697", "依安县"], ["1698", "克东县"], ["1699", "克山县"], ["1700", "富拉尔基区"], ["1701", "富裕县"], ["1702", "建华区"], ["1703", "拜泉县"], ["1704", "昂昂溪区"], ["1705", "梅里斯达斡尔族区"], ["1706", "泰来县"], ["1707", "甘南县"], ["1708", "碾子山区"], ["1709", "讷河"], ["1710", "铁锋区"], ["1711", "龙江县"], ["1712", "龙沙区"]]; addr_arr[132] = [["1713", "城子河区"], ["1714", "密山"], ["1715", "恒山区"], ["1716", "梨树区"], ["1717", "滴道区"], ["1718", "虎林"], ["1719", "鸡东县"], ["1720", "鸡冠区"], ["1721", "麻山区"]]; addr_arr[133] = [["1722", "东山区"], ["1723", "兴安区"], ["1724", "兴山区"], ["1725", "南山区"], ["1726", "向阳区"], ["1727", "工农区"], ["1728", "绥滨县"], ["1729", "萝北县"]]; addr_arr[134] = [["1730", "友谊县"], ["1731", "四方台区"], ["1732", "宝山区"], ["1733", "宝清县"], ["1734", "尖山区"], ["1735", "岭东区"], ["1736", "集贤县"], ["1737", "饶河县"]]; addr_arr[135] = [["1738", "大同区"], ["1739", "杜尔伯特蒙古族自治县"], ["1740", "林甸县"], ["1741", "红岗区"], ["1742", "肇州县"], ["1743", "肇源县"], ["1744", "胡路区"], ["1745", "萨尔图区"], ["1746", "龙凤区"]]; addr_arr[136] = [["1747", "上甘岭区"], ["1748", "乌伊岭区"], ["1749", "乌马河区"], ["1750", "五营区"], ["1751", "伊春区"], ["1752", "南岔区"], ["1753", "友好区"], ["1754", "嘉荫县"], ["1755", "带岭区"], ["1756", "新青区"], ["1757", "汤旺河区"], ["1758", "红星区"], ["1759", "美溪区"], ["1760", "翠峦区"], ["1761", "西林区"], ["1762", "金山屯区"], ["1763", "铁力"]]; addr_arr[137] = [["1764", "东风区"], ["1765", "前进区"], ["1766", "同江"], ["1767", "向阳区"], ["1768", "富锦"], ["1769", "抚远县"], ["1770", "桦南县"], ["1771", "桦川县"], ["1772", "汤原县"], ["1773", "郊区"]]; addr_arr[138] = [["1774", "勃利县"], ["1775", "新兴区"], ["1776", "桃山区"], ["1777", "茄子河区"]]; addr_arr[139] = [["1778", "东宁县"], ["1779", "东安区"], ["1780", "宁安"], ["1781", "林口县"], ["1782", "海林"], ["1783", "爱民区"], ["1784", "穆棱"], ["1785", "绥芬河"], ["1786", "西安区"], ["1787", "阳明区"]]; addr_arr[140] = [["1788", "五大连池"], ["1789", "北安"], ["1790", "嫩江县"], ["1791", "孙吴县"], ["1792", "爱辉区"], ["1793", "车逊克县"], ["1794", "逊克县"]]; addr_arr[141] = [["1795", "兰西县"], ["1796", "安达"], ["1797", "庆安县"], ["1798", "明水县"], ["1799", "望奎县"], ["1800", "海伦"], ["1801", "绥化北林区"], ["1802", "绥棱县"], ["1803", "肇东"], ["1804", "青冈县"]]; addr_arr[142] = [["1805", "呼玛县"], ["1806", "塔河县"], ["1807", "大兴安岭地区加格达奇区"], ["1808", "大兴安岭地区呼中区"], ["1809", "大兴安岭地区新林区"], ["1810", "大兴安岭地区松岭区"], ["1811", "漠河县"]]; addr_arr[162] = [["2027", "下关区"], ["2028", "六合区"], ["2029", "建邺区"], ["2030", "栖霞区"], ["2031", "江宁区"], ["2032", "浦口区"], ["2033", "溧水县"], ["2034", "玄武区"], ["2035", "白下区"], ["2036", "秦淮区"], ["2037", "雨花台区"], ["2038", "高淳县"], ["2039", "鼓楼区"]]; addr_arr[163] = [["2040", "北塘区"], ["2041", "南长区"], ["2042", "宜兴"], ["2043", "崇安区"], ["2044", "惠山区"], ["2045", "江阴"], ["2046", "滨湖区"], ["2047", "锡山区"]]; addr_arr[164] = [["2048", "丰县"], ["2049", "九里区"], ["2050", "云龙区"], ["2051", "新沂"], ["2052", "沛县"], ["2053", "泉山区"], ["2054", "睢宁县"], ["2055", "贾汪区"], ["2056", "邳州"], ["2057", "铜山县"], ["2058", "鼓楼区"]]; addr_arr[165] = [["2059", "天宁区"], ["2060", "戚墅堰区"], ["2061", "新北区"], ["2062", "武进区"], ["2063", "溧阳"], ["2064", "金坛"], ["2065", "钟楼区"]]; addr_arr[166] = [["2066", "吴中区"], ["2067", "吴江"], ["2068", "太仓"], ["2069", "常熟"], ["2070", "平江区"], ["2071", "张家港"], ["2072", "昆山"], ["2073", "沧浪区"], ["2074", "相城区"], ["2075", "苏州工业园区"], ["2076", "虎丘区"], ["2077", "金阊区"]];
addr_arr[167] = [["2078", "启东"], ["2079", "如东县"], ["2080", "如皋"], ["2081", "崇川区"], ["2082", "海安县"], ["2083", "海门"], ["2084", "港闸区"], ["2085", "通州"]]; addr_arr[168] = [["2086", "东海县"], ["2087", "新浦区"], ["2088", "海州区"], ["2089", "灌云县"], ["2090", "灌南县"], ["2091", "赣榆县"], ["2092", "连云区"]]; addr_arr[169] = [["2093", "楚州区"], ["2094", "洪泽县"], ["2095", "涟水县"], ["2096", "淮阴区"], ["2097", "清河区"], ["2098", "清浦区"], ["2099", "盱眙县"], ["2100", "金湖县"]]; addr_arr[170] = [["2101", "东台"], ["2102", "亭湖区"], ["2103", "响水县"], ["2104", "大丰"], ["2105", "射阳县"], ["2106", "建湖县"], ["2107", "滨海县"], ["2108", "盐都区"], ["2109", "阜宁县"]]; addr_arr[171] = [["2110", "仪征"], ["2111", "宝应县"], ["2112", "广陵区"], ["2113", "江都"], ["2114", "维扬区"], ["2115", "邗江区"], ["2116", "高邮"]]; addr_arr[172] = [["2117", "丹徒区"], ["2118", "丹阳"], ["2119", "京口区"], ["2120", "句容"], ["2121", "扬中"], ["2122", "润州区"]]; addr_arr[173] = [["2123", "兴化"], ["2124", "姜堰"], ["2125", "泰兴"], ["2126", "海陵区"], ["2127", "靖江"], ["2128", "高港区"]]; addr_arr[174] = [["2129", "宿城区"], ["2130", "宿豫区"], ["2131", "沭阳县"], ["2132", "泗洪县"], ["2133", "泗阳县"]]; addr_arr[175] = [["2134", "上城区"], ["2135", "下城区"], ["2136", "临安"], ["2137", "余杭区"], ["2138", "富阳"], ["2139", "建德"], ["2140", "拱墅区"], ["2141", "桐庐县"], ["2142", "江干区"], ["2143", "淳安县"], ["2144", "滨江区"], ["2145", "萧山区"], ["2146", "西湖区"]]; addr_arr[176] = [["2147", "余姚"], ["2148", "北仑区"], ["2149", "奉化"], ["2150", "宁海县"], ["2151", "慈溪"], ["2152", "江东区"], ["2153", "江北区"], ["2154", "海曙区"], ["2155", "象山县"], ["2156", "鄞州区"], ["2157", "镇海区"]]; addr_arr[177] = [["2158", "乐清"], ["2159", "平阳县"], ["2160", "文成县"], ["2161", "永嘉县"], ["2162", "泰顺县"], ["2163", "洞头县"], ["2164", "瑞安"], ["2165", "瓯海区"], ["2166", "苍南县"], ["2167", "鹿城区"], ["2168", "龙湾区"]]; addr_arr[178] = [["2169", "南湖区"], ["2170", "嘉善县"], ["2171", "平湖"], ["2172", "桐乡"], ["2173", "海宁"], ["2174", "海盐县"], ["2175", "秀洲区"]]; addr_arr[179] = [["2176", "南浔区"], ["2177", "吴兴区"], ["2178", "安吉县"], ["2179", "德清县"], ["2180", "长兴县"]]; addr_arr[180] = [["2181", "上虞"], ["2182", "嵊州"], ["2183", "新昌县"], ["2184", "绍兴县"], ["2185", "诸暨"], ["2186", "越城区"]]; addr_arr[181] = [["2187", "定海区"], ["2188", "岱山县"], ["2189", "嵊泗县"], ["2190", "普陀区"]]; addr_arr[182] = [["2191", "常山县"], ["2192", "开化县"], ["2193", "柯城区"], ["2194", "江山"], ["2195", "衢江区"], ["2196", "龙游县"]]; addr_arr[183] = [["2197", "东阳"], ["2198", "义乌"], ["2199", "兰溪"], ["2200", "婺城区"], ["2201", "武义县"], ["2202", "永康"], ["2203", "浦江县"], ["2204", "磐安县"], ["2205", "金东区"]]; addr_arr[184] = [["2206", "三门县"], ["2207", "临海"], ["2208", "仙居县"], ["2209", "天台县"], ["2210", "椒江区"], ["2211", "温岭"], ["2212", "玉环县"], ["2213", "路桥区"], ["2214", "黄岩区"]]; addr_arr[185] = [["2215", "云和县"], ["2216", "庆元县"], ["2217", "景宁畲族自治县"], ["2218", "松阳县"], ["2219", "缙云县"], ["2220", "莲都区"], ["2221", "遂昌县"], ["2222", "青田县"], ["2223", "龙泉"]]; addr_arr[186] = [["2224", "包河区"], ["2225", "庐阳区"], ["2226", "瑶海区"], ["2227", "肥东县"], ["2228", "肥西县"], ["2229", "蜀山区"], ["2230", "长丰县"]]; addr_arr[187] = [["2231", "三山区"], ["2232", "南陵县"], ["2233", "弋江区"], ["2234", "繁昌县"], ["2235", "芜湖县"], ["2236", "镜湖区"], ["2237", "鸠江区"]]; addr_arr[188] = [["2238", "五河县"], ["2239", "固镇县"], ["2240", "怀远县"], ["2241", "淮上区"], ["2242", "禹会区"], ["2243", "蚌山区"], ["2244", "龙子湖区"]]; addr_arr[189] = [["2245", "八公山区"], ["2246", "凤台县"], ["2247", "大通区"], ["2248", "潘集区"], ["2249", "田家庵区"], ["2250", "谢家集区"]]; addr_arr[190] = [["2251", "当涂县"], ["2252", "花山区"], ["2253", "金家庄区"], ["2254", "雨山区"]]; addr_arr[191] = [["2255", "杜集区"], ["2256", "濉溪县"], ["2257", "烈山区"], ["2258", "相山区"]]; addr_arr[192] = [["2259", "狮子山区"], ["2260", "郊区"], ["2261", "铜官山区"], ["2262", "铜陵县"]]; addr_arr[193] = [["2263", "大观区"], ["2264", "太湖县"], ["2265", "宜秀区"], ["2266", "宿松县"], ["2267", "岳西县"], ["2268", "怀宁县"], ["2269", "望江县"], ["2270", "枞阳县"], ["2271", "桐城"], ["2272", "潜山县"], ["2273", "迎江区"]]; addr_arr[194] = [["2274", "休宁县"], ["2275", "屯溪区"], ["2276", "徽州区"], ["2277", "歙县"], ["2278", "祁门县"], ["2279", "黄山区"], ["2280", "黟县"]]; addr_arr[195] = [["2281", "全椒县"], ["2282", "凤阳县"], ["2283", "南谯区"], ["2284", "天长"], ["2285", "定远县"], ["2286", "明光"], ["2287", "来安县"], ["2288", "琅玡区"]]; addr_arr[196] = [["2289", "临泉县"], ["2290", "太和县"], ["2291", "界首"], ["2292", "阜南县"], ["2293", "颍东区"], ["2294", "颍州区"], ["2295", "颍泉区"], ["2296", "颖上县"]]; addr_arr[197] = [["2297", "埇桥区"], ["2298", "泗县辖"], ["2299", "灵璧县"], ["2300", "砀山县"], ["2301", "萧县"]]; addr_arr[198] = [["2302", "含山县"], ["2303", "和县"], ["2304", "居巢区"], ["2305", "庐江县"], ["2306", "无为县"]]; addr_arr[199] = [["2307", "寿县"], ["2308", "舒城县"], ["2309", "裕安区"], ["2310", "金安区"], ["2311", "金寨县"], ["2312", "霍山县"], ["2313", "霍邱县"]]; addr_arr[200] = [["2314", "利辛县"], ["2315", "涡阳县"], ["2316", "蒙城县"], ["2317", "谯城区"]]; addr_arr[201] = [["2318", "东至县"], ["2319", "石台县"], ["2320", "贵池区"], ["2321", "青阳县"]]; addr_arr[202] = [["2322", "宁国"], ["2323", "宣州区"], ["2324", "广德县"], ["2325", "旌德县"], ["2326", "泾县"], ["2327", "绩溪县"], ["2328", "郎溪县"]]; addr_arr[203] = [["2329", "仓山区"], ["2330", "台江区"], ["2331", "平潭县"], ["2332", "晋安区"], ["2333", "永泰县"], ["2334", "福清"], ["2335", "罗源县"], ["2336", "连江县"], ["2337", "长乐"], ["2338", "闽侯县"], ["2339", "闽清县"], ["2340", "马尾区"], ["2341", "鼓楼区"]]; addr_arr[204] = [["2342", "同安区"], ["2343", "思明区"], ["2344", "海沧区"], ["2345", "湖里区"], ["2346", "翔安区"], ["2347", "集美区"]]; addr_arr[205] = [["2348", "仙游县"], ["2349", "城厢区"], ["2350", "涵江区"], ["2351", "秀屿区"], ["2352", "荔城区"]]; addr_arr[206] = [["2353", "三元区"], ["2354", "大田县"], ["2355", "宁化县"], ["2356", "将乐县"], ["2357", "尤溪县"], ["2358", "建宁县"], ["2359", "明溪县"], ["2360", "梅列区"], ["2361", "永安"], ["2362", "沙县"], ["2363", "泰宁县"], ["2364", "清流县"]]; addr_arr[207] = [["2365", "丰泽区"], ["2366", "南安"], ["2367", "安溪县"], ["2368", "德化县"], ["2369", "惠安县"], ["2370", "晋江"], ["2371", "永春县"], ["2372", "泉港区"], ["2373", "洛江区"], ["2374", "石狮"], ["2375", "金门县"], ["2376", "鲤城区"]]; addr_arr[208] = [["2377", "东山县"], ["2378", "云霄县"], ["2379", "华安县"], ["2380", "南靖县"], ["2381", "平和县"], ["2382", "漳浦县"], ["2383", "芗城区"], ["2384", "诏安县"], ["2385", "长泰县"], ["2386", "龙文区"], ["2387", "龙海"]];
addr_arr[209] = [["2388", "光泽县"], ["2389", "延平区"], ["2390", "建瓯"], ["2391", "建阳"], ["2392", "政和县"], ["2393", "松溪县"], ["2394", "武夷山"], ["2395", "浦城县"], ["2396", "邵武"], ["2397", "顺昌县"]]; addr_arr[210] = [["2398", "上杭县"], ["2399", "新罗区"], ["2400", "武平县"], ["2401", "永定县"], ["2402", "漳平"], ["2403", "连城县"], ["2404", "长汀县"]]; addr_arr[211] = [["2405", "古田县"], ["2406", "周宁县"], ["2407", "寿宁县"], ["2408", "屏南县"], ["2409", "柘荣县"], ["2410", "福安"], ["2411", "福鼎"], ["2412", "蕉城区"], ["2413", "霞浦县"]]; addr_arr[212] = [["2414", "东湖区"], ["2415", "南昌县"], ["2416", "安义县"], ["2417", "新建县"], ["2418", "湾里区"], ["2419", "西湖区"], ["2420", "进贤县"], ["2421", "青云谱区"], ["2422", "青山湖区"]]; addr_arr[213] = [["2423", "乐平"], ["2424", "昌江区"], ["2425", "浮梁县"], ["2426", "珠山区"]]; addr_arr[214] = [["2427", "上栗县"], ["2428", "安源区"], ["2429", "湘东区"], ["2430", "芦溪县"], ["2431", "莲花县"]]; addr_arr[215] = [["2432", "九江县"], ["2433", "修水县"], ["2434", "庐山区"], ["2435", "彭泽县"], ["2436", "德安县"], ["2437", "星子县"], ["2438", "武宁县"], ["2439", "永修县"], ["2440", "浔阳区"], ["2441", "湖口县"], ["2442", "瑞昌"], ["2443", "都昌县"]]; addr_arr[216] = [["2444", "分宜县"], ["2445", "渝水区"]]; addr_arr[217] = [["2446", "余江县"], ["2447", "月湖区"], ["2448", "贵溪"]]; addr_arr[218] = [["2449", "上犹县"], ["2450", "于都县"], ["2451", "会昌县"], ["2452", "信丰县"], ["2453", "全南县"], ["2454", "兴国县"], ["2455", "南康"], ["2456", "大余县"], ["2457", "宁都县"], ["2458", "安远县"], ["2459", "定南县"], ["2460", "寻乌县"], ["2461", "崇义县"], ["2462", "瑞金"], ["2463", "石城县"], ["2464", "章贡区"], ["2465", "赣县"], ["2466", "龙南县"]]; addr_arr[219] = [["2467", "万安县"], ["2468", "井冈山"], ["2469", "吉安县"], ["2470", "吉州区"], ["2471", "吉水县"], ["2472", "安福县"], ["2473", "峡江县"], ["2474", "新干县"], ["2475", "永丰县"], ["2476", "永新县"], ["2477", "泰和县"], ["2478", "遂川县"], ["2479", "青原区"]]; addr_arr[220] = [["2480", "万载县"], ["2481", "上高县"], ["2482", "丰城"], ["2483", "奉新县"], ["2484", "宜丰县"], ["2485", "樟树"], ["2486", "袁州区"], ["2487", "铜鼓县"], ["2488", "靖安县"], ["2489", "高安"]]; addr_arr[221] = [["2490", "东乡县"], ["2491", "临川区"], ["2492", "乐安县"], ["2493", "南丰县"], ["2494", "南城县"], ["2495", "宜黄县"], ["2496", "崇仁县"], ["2497", "广昌县"], ["2498", "资溪县"], ["2499", "金溪县"], ["2500", "黎川县"]]; addr_arr[222] = [["2501", "万年县"], ["2502", "上饶县"], ["2503", "余干县"], ["2504", "信州区"], ["2505", "婺源县"], ["2506", "广丰县"], ["2507", "弋阳县"], ["2508", "德兴"], ["2509", "横峰县"], ["2510", "玉山县"], ["2511", "鄱阳县"], ["2512", "铅山县"]]; addr_arr[223] = [["2513", "历下区"], ["2514", "历城区"], ["2515", "商河县"], ["2516", "天桥区"], ["2517", "中区"], ["2518", "平阴县"], ["2519", "槐荫区"], ["2520", "济阳县"], ["2521", "章丘"], ["2522", "长清区"]]; addr_arr[224] = [["2523", "即墨"], ["2524", "四方区"], ["2525", "城阳区"], ["2526", "崂山区"], ["2527", "北区"], ["2528", "南区"], ["2529", "平度"], ["2530", "李沧区"], ["2531", "胶南"], ["2532", "胶州"], ["2533", "莱西"], ["2534", "黄岛区"]]; addr_arr[225] = [["2535", "临淄区"], ["2536", "博山区"], ["2537", "周村区"], ["2538", "张店区"], ["2539", "桓台县"], ["2540", "沂源县"], ["2541", "淄川区"], ["2542", "高青县"]]; addr_arr[226] = [["2543", "台儿庄区"], ["2544", "山亭区"], ["2545", "峄城区"], ["2546", "中区"], ["2547", "滕州"], ["2548", "薛城区"]]; addr_arr[227] = [["2549", "东营区"], ["2550", "利津县"], ["2551", "垦利县"], ["2552", "广饶县"], ["2553", "河口区"]]; addr_arr[228] = [["2554", "招远"], ["2555", "栖霞"], ["2556", "海阳"], ["2557", "牟平区"], ["2558", "福山区"], ["2559", "芝罘区"], ["2560", "莱山区"], ["2561", "莱州"], ["2562", "莱阳"], ["2563", "蓬莱"], ["2564", "长岛县"], ["2565", "龙口"]]; addr_arr[229] = [["2566", "临朐县"], ["2567", "坊子区"], ["2568", "奎文区"], ["2569", "安丘"], ["2570", "寒亭区"], ["2571", "寿光"], ["2572", "昌乐县"], ["2573", "昌邑"], ["2574", "潍城区"], ["2575", "诸城"], ["2576", "青州"], ["2577", "高密"]]; addr_arr[230] = [["2578", "任城区"], ["2579", "兖州"], ["2580", "嘉祥县"], ["2581", "中区"], ["2582", "微山县"], ["2583", "曲阜"], ["2584", "梁山县"], ["2585", "汶上县"], ["2586", "泗水县"], ["2587", "邹城"], ["2588", "金乡县"], ["2589", "鱼台县"]]; addr_arr[231] = [["2590", "东平县"], ["2591", "宁阳县"], ["2592", "岱岳区"], ["2593", "新泰"], ["2594", "泰山区"], ["2595", "肥城"]]; addr_arr[232] = [["2596", "乳山"], ["2597", "文登"], ["2598", "环翠区"], ["2599", "荣成"]]; addr_arr[233] = [["2600", "东港区"], ["2601", "五莲县"], ["2602", "岚山区"], ["2603", "莒县"]]; addr_arr[234] = [["2604", "莱城区"], ["2605", "钢城区"]]; addr_arr[235] = [["2606", "临沭县"], ["2607", "兰山区"], ["2608", "平邑县"], ["2609", "沂南县"], ["2610", "沂水县"], ["2611", "河东区"], ["2612", "罗庄区"], ["2613", "苍山县"], ["2614", "莒南县"], ["2615", "蒙阴县"], ["2616", "费县"], ["2617", "郯城县"]]; addr_arr[236] = [["2618", "临邑县"], ["2619", "乐陵"], ["2620", "夏津县"], ["2621", "宁津县"], ["2622", "平原县"], ["2623", "庆云县"], ["2624", "德城区"], ["2625", "武城县"], ["2626", "禹城"], ["2627", "陵县"], ["2628", "齐河县"]]; addr_arr[237] = [["2629", "东昌府区"], ["2630", "东阿县"], ["2631", "临清"], ["2632", "冠县"], ["2633", "茌平县"], ["2634", "莘县"], ["2635", "阳谷县"], ["2636", "高唐县"]]; addr_arr[238] = [["2637", "博兴县"], ["2638", "惠民县"], ["2639", "无棣县"], ["2640", "沾化县"], ["2641", "滨城区"], ["2642", "邹平县"], ["2643", "阳信县"]]; addr_arr[239] = [["2644", "东明县"], ["2645", "单县"], ["2646", "定陶县"], ["2647", "巨野县"], ["2648", "成武县"], ["2649", "曹县"], ["2650", "牡丹区"], ["2651", "郓城县"], ["2652", "鄄城县"]]; addr_arr[240] = [["2653", "上街区"], ["2654", "中原区"], ["2655", "中牟县"], ["2656", "二七区"], ["2657", "巩义"], ["2658", "惠济区"], ["2659", "新密"], ["2660", "新郑"], ["2661", "登封"], ["2662", "管城回族区"], ["2663", "荥阳"], ["2664", "金水区"]]; addr_arr[241] = [["2665", "兰考县"], ["2666", "尉氏县"], ["2667", "开封县"], ["2668", "杞县"], ["2669", "禹王台区"], ["2670", "通许县"], ["2671", "金明区"], ["2672", "顺河回族区"], ["2673", "鼓楼区"], ["2674", "龙亭区"]]; addr_arr[242] = [["2675", "伊川县"], ["2676", "偃师"], ["2677", "吉利区"], ["2678", "孟津县"], ["2679", "宜阳县"], ["2680", "嵩县"], ["2681", "新安县"], ["2682", "栾川县"], ["2683", "汝阳县"], ["2684", "洛宁县"], ["2685", "洛龙区"], ["2686", "涧西区"], ["2687", "瀍河回族区"], ["2688", "老城区"], ["2689", "西工区"]]; addr_arr[243] = [["2690", "卫东区"], ["2691", "叶县"], ["2692", "宝丰县"], ["2693", "新华区"], ["2694", "汝州"], ["2695", "湛河区"], ["2696", "石龙区"], ["2697", "舞钢"], ["2698", "郏县"], ["2699", "鲁山县"]];
addr_arr[244] = [["2700", "内黄县"], ["2701", "北关区"], ["2702", "安阳县"], ["2703", "文峰区"], ["2704", "林州"], ["2705", "殷都区"], ["2706", "汤阴县"], ["2707", "滑县"], ["2708", "龙安区"]]; addr_arr[245] = [["2709", "山城区"], ["2710", "浚县"], ["2711", "淇县"], ["2712", "淇滨区"], ["2713", "鹤山区"]]; addr_arr[246] = [["2714", "凤泉区"], ["2715", "卫滨区"], ["2716", "卫辉"], ["2717", "原阳县"], ["2718", "封丘县"], ["2719", "延津县"], ["2720", "新乡县"], ["2721", "牧野区"], ["2722", "红旗区"], ["2723", "获嘉县"], ["2724", "辉县"], ["2725", "长垣县"]]; addr_arr[247] = [["2726", "中站区"], ["2727", "修武县"], ["2728", "博爱县"], ["2729", "孟州"], ["2730", "山阳区"], ["2731", "武陟县"], ["2732", "沁阳"], ["2733", "温县"], ["2734", "解放区"], ["2735", "马村区"]]; addr_arr[248] = [["2736", "华龙区"], ["2737", "南乐县"], ["2738", "台前县"], ["2739", "清丰县"], ["2740", "濮阳县"], ["2741", "范县"]]; addr_arr[249] = [["2742", "禹州"], ["2743", "襄城县"], ["2744", "许昌县"], ["2745", "鄢陵县"], ["2746", "长葛"], ["2747", "魏都区"]]; addr_arr[250] = [["2748", "临颍县"], ["2749", "召陵区"], ["2750", "源汇区"], ["2751", "舞阳县"], ["2752", "郾城区"]]; addr_arr[251] = [["2753", "义马"], ["2754", "卢氏县"], ["2755", "渑池县"], ["2756", "湖滨区"], ["2757", "灵宝"], ["2758", "陕县"]]; addr_arr[252] = [["2759", "内乡县"], ["2760", "南召县"], ["2761", "卧龙区"], ["2762", "唐河县"], ["2763", "宛城区"], ["2764", "新野县"], ["2765", "方城县"], ["2766", "桐柏县"], ["2767", "淅川县"], ["2768", "社旗县"], ["2769", "西峡县"], ["2770", "邓州"], ["2771", "镇平县"]]; addr_arr[253] = [["2772", "夏邑县"], ["2773", "宁陵县"], ["2774", "柘城县"], ["2775", "民权县"], ["2776", "永城"], ["2777", "睢县"], ["2778", "睢阳区"], ["2779", "粱园区"], ["2780", "虞城县"]]; addr_arr[254] = [["2781", "光山县"], ["2782", "商城县"], ["2783", "固始县"], ["2784", "平桥区"], ["2785", "息县"], ["2786", "新县"], ["2787", "浉河区"], ["2788", "淮滨县"], ["2789", "潢川县"], ["2790", "罗山县"]]; addr_arr[255] = [["2791", "商水县"], ["2792", "太康县"], ["2793", "川汇区"], ["2794", "扶沟县"], ["2795", "沈丘县"], ["2796", "淮阳县"], ["2797", "西华县"], ["2798", "郸城县"], ["2799", "项城"], ["2800", "鹿邑县"]]; addr_arr[256] = [["2801", "上蔡县"], ["2802", "平舆县"], ["2803", "新蔡县"], ["2804", "正阳县"], ["2805", "汝南县"], ["2806", "泌阳县"], ["2807", "确山县"], ["2808", "西平县"], ["2809", "遂平县"], ["2810", "驿城区"]]; addr_arr[257] = [["2811", "济源"]]; addr_arr[258] = [["2812", "东西湖区"], ["2813", "新洲区"], ["2814", "武昌区"], ["2815", "汉南区"], ["2816", "汉阳区"], ["2817", "江夏区"], ["2818", "江岸区"], ["2819", "江汉区"], ["2820", "洪山区"], ["2821", "硚口区"], ["2822", "蔡甸区"], ["2823", "青山区"], ["2824", "黄陂区"]]; addr_arr[259] = [["2825", "下陆区"], ["2826", "大冶"], ["2827", "西塞山区"], ["2828", "铁山区"], ["2829", "阳新县"], ["2830", "黄石港区"]]; addr_arr[260] = [["2831", "丹江口"], ["2832", "张湾区"], ["2833", "房县"], ["2834", "竹山县"], ["2835", "竹溪县"], ["2836", "茅箭区"], ["2837", "郧县"], ["2838", "郧西县"]]; addr_arr[261] = [["2839", "五峰土家族自治县"], ["2840", "伍家岗区"], ["2841", "兴山县"], ["2842", "夷陵区"], ["2843", "宜都"], ["2844", "当阳"], ["2845", "枝江"], ["2846", "点军区"], ["2847", "秭归县"], ["2848", "虢亭区"], ["2849", "西陵区"], ["2850", "远安县"], ["2851", "长阳土家族自治县"]]; addr_arr[262] = [["2852", "保康县"], ["2853", "南漳县"], ["2854", "宜城"], ["2855", "枣阳"], ["2856", "樊城区"], ["2857", "老河口"], ["2858", "襄城区"], ["2859", "襄阳区"], ["2860", "谷城县"]]; addr_arr[263] = [["2861", "华容区"], ["2862", "粱子湖"], ["2863", "鄂城区"]]; addr_arr[264] = [["2864", "东宝区"], ["2865", "京山县"], ["2866", "掇刀区"], ["2867", "沙洋县"], ["2868", "钟祥"]]; addr_arr[265] = [["2869", "云梦县"], ["2870", "大悟县"], ["2871", "孝南区"], ["2872", "孝昌县"], ["2873", "安陆"], ["2874", "应城"], ["2875", "汉川"]]; addr_arr[266] = [["2876", "公安县"], ["2877", "松滋"], ["2878", "江陵县"], ["2879", "沙区"], ["2880", "洪湖"], ["2881", "监利县"], ["2882", "石首"], ["2883", "荆州区"]]; addr_arr[267] = [["2884", "团风县"], ["2885", "武穴"], ["2886", "浠水县"], ["2887", "红安县"], ["2888", "罗田县"], ["2889", "英山县"], ["2890", "蕲春县"], ["2891", "麻城"], ["2892", "黄州区"], ["2893", "黄梅县"]]; addr_arr[268] = [["2894", "咸安区"], ["2895", "嘉鱼县"], ["2896", "崇阳县"], ["2897", "赤壁"], ["2898", "通城县"], ["2899", "通山县"]]; addr_arr[269] = [["2900", "广水"], ["2901", "曾都区"]]; addr_arr[270] = [["2902", "利川"], ["2903", "咸丰县"], ["2904", "宣恩县"], ["2905", "巴东县"], ["2906", "建始县"], ["2907", "恩施"], ["2908", "来凤县"], ["2909", "鹤峰县"]]; addr_arr[271] = [["2910", "仙桃"]]; addr_arr[272] = [["2911", "潜江"]]; addr_arr[273] = [["2912", "天门"]]; addr_arr[274] = [["2913", "神农架林区"]]; addr_arr[275] = [["2914", "天心区"], ["2915", "宁乡县"], ["2916", "岳麓区"], ["2917", "开福区"], ["2918", "望城县"], ["2919", "浏阳"], ["2920", "芙蓉区"], ["2921", "长沙县"], ["2922", "雨花区"]]; addr_arr[276] = [["2923", "天元区"], ["2924", "攸县"], ["2925", "株洲县"], ["2926", "炎陵县"], ["2927", "石峰区"], ["2928", "芦淞区"], ["2929", "茶陵县"], ["2930", "荷塘区"], ["2931", "醴陵"]]; addr_arr[277] = [["2932", "岳塘区"], ["2933", "湘乡"], ["2934", "湘潭县"], ["2935", "雨湖区"], ["2936", "韶山"]]; addr_arr[278] = [["2937", "南岳区"], ["2938", "常宁"], ["2939", "珠晖区"], ["2940", "石鼓区"], ["2941", "祁东县"], ["2942", "耒阳"], ["2943", "蒸湘区"], ["2944", "衡东县"], ["2945", "衡南县"], ["2946", "衡山县"], ["2947", "衡阳县"], ["2948", "雁峰区"]]; addr_arr[279] = [["2949", "北塔区"], ["2950", "双清区"], ["2951", "城步苗族自治县"], ["2952", "大祥区"], ["2953", "新宁县"], ["2954", "新邵县"], ["2955", "武冈"], ["2956", "洞口县"], ["2957", "绥宁县"], ["2958", "邵东县"], ["2959", "邵阳县"], ["2960", "隆回县"]]; addr_arr[280] = [["2961", "临湘"], ["2962", "云溪区"], ["2963", "华容县"], ["2964", "君山区"], ["2965", "岳阳县"], ["2966", "岳阳楼区"], ["2967", "平江县"], ["2968", "汨罗"], ["2969", "湘阴县"]]; addr_arr[281] = [["2970", "临澧县"], ["2971", "安乡县"], ["2972", "桃源县"], ["2973", "武陵区"], ["2974", "汉寿县"], ["2975", "津"], ["2976", "澧县"], ["2977", "石门县"], ["2978", "鼎城区"]]; addr_arr[282] = [["2979", "慈利县"], ["2980", "桑植县"], ["2981", "武陵源区"], ["2982", "永定区"]]; addr_arr[283] = [["2983", "南县"], ["2984", "安化县"], ["2985", "桃江县"], ["2986", "沅江"], ["2987", "资阳区"], ["2988", "赫山区"]]; addr_arr[284] = [["2989", "临武县"], ["2990", "北湖区"], ["2991", "嘉禾县"], ["2992", "安仁县"], ["2993", "宜章县"], ["2994", "桂东县"], ["2995", "桂阳县"], ["2996", "永兴县"], ["2997", "汝城县"], ["2998", "苏仙区"], ["2999", "资兴"]];
addr_arr[285] = [["3000", "东安县"], ["3001", "冷水滩区"], ["3002", "双牌县"], ["3003", "宁远县"], ["3004", "新田县"], ["3005", "江华瑶族自治县"], ["3006", "江永县"], ["3007", "祁阳县"], ["3008", "蓝山县"], ["3009", "道县"], ["3010", "零陵区"]]; addr_arr[286] = [["3011", "中方县"], ["3012", "会同县"], ["3013", "新晃侗族自治县"], ["3014", "沅陵县"], ["3015", "洪江/洪江区"], ["3016", "溆浦县"], ["3017", "芷江侗族自治县"], ["3018", "辰溪县"], ["3019", "通道侗族自治县"], ["3020", "靖州苗族侗族自治县"], ["3021", "鹤城区"], ["3022", "麻阳苗族自治县"]]; addr_arr[287] = [["3023", "冷水江"], ["3024", "双峰县"], ["3025", "娄星区"], ["3026", "新化县"], ["3027", "涟源"]]; addr_arr[288] = [["3028", "保靖县"], ["3029", "凤凰县"], ["3030", "古丈县"], ["3031", "吉首"], ["3032", "永顺县"], ["3033", "泸溪县"], ["3034", "花垣县"], ["3035", "龙山县"]]; addr_arr[289] = [["3036", "萝岗区"], ["3037", "南沙区"], ["3038", "从化"], ["3039", "增城"], ["3040", "天河区"], ["3041", "海珠区"], ["3042", "番禺区"], ["3043", "白云区"], ["3044", "花都区"], ["3045", "荔湾区"], ["3046", "越秀区"], ["3047", "黄埔区"]]; addr_arr[290] = [["3048", "乐昌"], ["3049", "乳源瑶族自治县"], ["3050", "仁化县"], ["3051", "南雄"], ["3052", "始兴县"], ["3053", "新丰县"], ["3054", "曲江区"], ["3055", "武江区"], ["3056", "浈江区"], ["3057", "翁源县"]]; addr_arr[291] = [["3058", "南山区"], ["3059", "宝安区"], ["3060", "盐田区"], ["3061", "福田区"], ["3062", "罗湖区"], ["3063", "龙岗区"]]; addr_arr[292] = [["3064", "斗门区"], ["3065", "金湾区"], ["3066", "香洲区"]]; addr_arr[293] = [["3067", "南澳县"], ["3068", "潮南区"], ["3069", "潮阳区"], ["3070", "澄海区"], ["3071", "濠江区"], ["3072", "金平区"], ["3073", "龙湖区"]]; addr_arr[294] = [["3074", "三水区"], ["3075", "南海区"], ["3076", "禅城区"], ["3077", "顺德区"], ["3078", "高明区"]]; addr_arr[295] = [["3079", "台山"], ["3080", "开平"], ["3081", "恩平"], ["3082", "新会区"], ["3083", "江海区"], ["3084", "蓬江区"], ["3085", "鹤山"]]; addr_arr[296] = [["3086", "吴川"], ["3087", "坡头区"], ["3088", "廉江"], ["3089", "徐闻县"], ["3090", "赤坎区"], ["3091", "遂溪县"], ["3092", "雷州"], ["3093", "霞山区"], ["3094", "麻章区"]]; addr_arr[297] = [["3095", "信宜"], ["3096", "化州"], ["3097", "电白县"], ["3098", "茂南区"], ["3099", "茂港区"], ["3100", "高州"]]; addr_arr[298] = [["3101", "四会"], ["3102", "封开县"], ["3103", "广宁县"], ["3104", "德庆县"], ["3105", "怀集县"], ["3106", "端州区"], ["3107", "高要"], ["3108", "鼎湖区"]]; addr_arr[299] = [["3109", "博罗县"], ["3110", "惠东县"], ["3111", "惠城区"], ["3112", "惠阳区"], ["3113", "龙门县"]]; addr_arr[300] = [["3114", "丰顺县"], ["3115", "五华县"], ["3116", "兴宁"], ["3117", "大埔县"], ["3118", "平远县"], ["3119", "梅县"], ["3120", "梅江区"], ["3121", "蕉岭县"]]; addr_arr[301] = [["3122", "城区"], ["3123", "海丰县"], ["3124", "陆丰"], ["3125", "陆河县"]]; addr_arr[302] = [["3126", "东源县"], ["3127", "和平县"], ["3128", "源城区"], ["3129", "紫金县"], ["3130", "连平县"], ["3131", "龙川县"]]; addr_arr[303] = [["3132", "江城区"], ["3133", "阳东县"], ["3134", "阳春"], ["3135", "阳西县"]]; addr_arr[304] = [["3136", "佛冈县"], ["3137", "清城区"], ["3138", "清新县"], ["3139", "英德"], ["3140", "连南瑶族自治县"], ["3141", "连山壮族瑶族自治县"], ["3142", "连州"], ["3143", "阳山县"]]; addr_arr[305] = [["3144", "东莞"]]; addr_arr[306] = [["3145", "中山"]]; addr_arr[307] = [["3146", "湘桥区"], ["3147", "潮安县"], ["3148", "饶平县"]]; addr_arr[308] = [["3149", "惠来县"], ["3150", "揭东县"], ["3151", "揭西县"], ["3152", "普宁"], ["3153", "榕城区"]]; addr_arr[309] = [["3154", "云城区"], ["3155", "云安县"], ["3156", "新兴县"], ["3157", "罗定"], ["3158", "郁南县"]]; addr_arr[310] = [["3159", "上林县"], ["3160", "兴宁区"], ["3161", "宾阳县"], ["3162", "横县"], ["3163", "武鸣县"], ["3164", "江南区"], ["3165", "良庆区"], ["3166", "西乡塘区"], ["3167", "邕宁区"], ["3168", "隆安县"], ["3169", "青秀区"], ["3170", "马山县"]]; addr_arr[311] = [["3171", "三江侗族自治县"], ["3172", "城中区"], ["3173", "柳北区"], ["3174", "柳南区"], ["3175", "柳城县"], ["3176", "柳江县"], ["3177", "融安县"], ["3178", "融水苗族自治县"], ["3179", "鱼峰区"], ["3180", "鹿寨县"]]; addr_arr[312] = [["3181", "七星区"], ["3182", "临桂县"], ["3183", "全州县"], ["3184", "兴安县"], ["3185", "叠彩区"], ["3186", "平乐县"], ["3187", "恭城瑶族自治县"], ["3188", "永福县"], ["3189", "灌阳县"], ["3190", "灵川县"], ["3191", "秀峰区"], ["3192", "荔浦县"], ["3193", "象山区"], ["3194", "资源县"], ["3195", "阳朔县"], ["3196", "雁山区"], ["3197", "龙胜各族自治县"]]; addr_arr[313] = [["3198", "万秀区"], ["3199", "岑溪"], ["3200", "苍梧县"], ["3201", "蒙山县"], ["3202", "藤县"], ["3203", "蝶山区"], ["3204", "长洲区"]]; addr_arr[314] = [["3205", "合浦县"], ["3206", "海城区"], ["3207", "铁山港区"], ["3208", "银海区"]]; addr_arr[315] = [["3209", "上思县"], ["3210", "东兴"], ["3211", "港口区"], ["3212", "防城区"]]; addr_arr[316] = [["3213", "浦北县"], ["3214", "灵山县"], ["3215", "钦北区"], ["3216", "钦南区"]]; addr_arr[317] = [["3217", "平南县"], ["3218", "桂平"], ["3219", "港北区"], ["3220", "港南区"], ["3221", "覃塘区"]]; addr_arr[318] = [["3222", "兴业县"], ["3223", "北流"], ["3224", "博白县"], ["3225", "容县"], ["3226", "玉州区"], ["3227", "陆川县"]]; addr_arr[319] = [["3228", "乐业县"], ["3229", "凌云县"], ["3230", "右江区"], ["3231", "平果县"], ["3232", "德保县"], ["3233", "田东县"], ["3234", "田林县"], ["3235", "田阳县"], ["3236", "西林县"], ["3237", "那坡县"], ["3238", "隆林各族自治县"], ["3239", "靖西县"]]; addr_arr[320] = [["3240", "八步区"], ["3241", "富川瑶族自治县"], ["3242", "昭平县"], ["3243", "钟山县"]]; addr_arr[321] = [["3244", "东兰县"], ["3245", "凤山县"], ["3246", "南丹县"], ["3247", "大化瑶族自治县"], ["3248", "天峨县"], ["3249", "宜州"], ["3250", "巴马瑶族自治县"], ["3251", "环江毛南族自治县"], ["3252", "罗城仫佬族自治县"], ["3253", "都安瑶族自治县"], ["3254", "金城江区"]]; addr_arr[322] = [["3255", "兴宾区"], ["3256", "合山"], ["3257", "忻城县"], ["3258", "武宣县"], ["3259", "象州县"], ["3260", "金秀瑶族自治县"]]; addr_arr[323] = [["3261", "凭祥"], ["3262", "大新县"], ["3263", "天等县"], ["3264", "宁明县"], ["3265", "扶绥县"], ["3266", "江州区"], ["3267", "龙州县"]]; addr_arr[324] = [["3268", "琼山区"], ["3269", "秀英区"], ["3270", "美兰区"], ["3271", "龙华区"]]; addr_arr[325] = [["3272", "三亚"]]; addr_arr[326] = [["3273", "五指山"]]; addr_arr[327] = [["3274", "琼海"]]; addr_arr[328] = [["3275", "儋州"]]; addr_arr[329] = [["3276", "文昌"]]; addr_arr[330] = [["3277", "万宁"]]; addr_arr[331] = [["3278", "东方"]]; addr_arr[332] = [["3279", "定安县"]]; addr_arr[333] = [["3280", "屯昌县"]]; addr_arr[334] = [["3281", "澄迈县"]]; addr_arr[335] = [["3282", "临高县"]]; addr_arr[336] = [["3283", "白沙黎族自治县"]]; addr_arr[337] = [["3284", "昌江黎族自治县"]];
addr_arr[338] = [["3285", "乐东黎族自治县"]]; addr_arr[339] = [["3286", "陵水黎族自治县"]]; addr_arr[340] = [["3287", "保亭黎族苗族自治县"]]; addr_arr[341] = [["3288", "琼中黎族苗族自治县"]]; addr_arr[385] = [["4209", "双流县"], ["4210", "大邑县"], ["4211", "崇州"], ["4212", "彭州"], ["4213", "成华区"], ["4214", "新津县"], ["4215", "新都区"], ["4216", "武侯区"], ["4217", "温江区"], ["4218", "蒲江县"], ["4219", "邛崃"], ["4220", "郫县"], ["4221", "都江堰"], ["4222", "金堂县"], ["4223", "金牛区"], ["4224", "锦江区"], ["4225", "青白江区"], ["4226", "青羊区"], ["4227", "龙泉驿区"]]; addr_arr[386] = [["4228", "大安区"], ["4229", "富顺县"], ["4230", "沿滩区"], ["4231", "自流井区"], ["4232", "荣县"], ["4233", "贡井区"]]; addr_arr[387] = [["4234", "东区"], ["4235", "仁和区"], ["4236", "盐边县"], ["4237", "米易县"], ["4238", "西区"]]; addr_arr[388] = [["4239", "叙永县"], ["4240", "古蔺县"], ["4241", "合江县"], ["4242", "江阳区"], ["4243", "泸县"], ["4244", "纳溪区"], ["4245", "龙马潭区"]]; addr_arr[389] = [["4246", "中江县"], ["4247", "什邡"], ["4248", "广汉"], ["4249", "旌阳区"], ["4250", "绵竹"], ["4251", "罗江县"]]; addr_arr[390] = [["4252", "三台县"], ["4253", "北川羌族自治县"], ["4254", "安县"], ["4255", "平武县"], ["4256", "梓潼县"], ["4257", "江油"], ["4258", "涪城区"], ["4259", "游仙区"], ["4260", "盐亭县"]]; addr_arr[391] = [["4261", "元坝区"], ["4262", "利州区"], ["4263", "剑阁县"], ["4264", "旺苍县"], ["4265", "朝天区"], ["4266", "苍溪县"], ["4267", "青川县"]]; addr_arr[392] = [["4268", "大英县"], ["4269", "安居区"], ["4270", "射洪县"], ["4271", "船山区"], ["4272", "蓬溪县"]]; addr_arr[393] = [["4273", "东兴区"], ["4274", "威远县"], ["4275", "中区"], ["4276", "资中县"], ["4277", "隆昌县"]]; addr_arr[394] = [["4278", "五通桥区"], ["4279", "井研县"], ["4280", "夹江县"], ["4281", "峨眉山"], ["4282", "峨边彝族自治县"], ["4283", "中区"], ["4284", "沐川县"], ["4285", "沙湾区"], ["4286", "犍为县"], ["4287", "金口河区"], ["4288", "马边彝族自治县"]]; addr_arr[395] = [["4289", "仪陇县"], ["4290", "南充嘉陵区"], ["4291", "南部县"], ["4292", "嘉陵区"], ["4293", "营山县"], ["4294", "蓬安县"], ["4295", "西充县"], ["4296", "阆中"], ["4297", "顺庆区"], ["4298", "高坪区"]]; addr_arr[396] = [["4299", "东坡区"], ["4300", "丹棱县"], ["4301", "仁寿县"], ["4302", "彭山县"], ["4303", "洪雅县"], ["4304", "青神县"]]; addr_arr[397] = [["4305", "兴文县"], ["4306", "南溪县"], ["4307", "宜宾县"], ["4308", "屏山县"], ["4309", "江安县"], ["4310", "珙县"], ["4311", "筠连县"], ["4312", "翠屏区"], ["4313", "长宁县"], ["4314", "高县"]]; addr_arr[398] = [["4315", "华蓥"], ["4316", "岳池县"], ["4317", "广安区"], ["4318", "武胜县"], ["4319", "邻水县"]]; addr_arr[399] = [["4320", "万源"], ["4321", "大竹县"], ["4322", "宣汉县"], ["4323", "开江县"], ["4324", "渠县"], ["4325", "达县"], ["4326", "通川区"]]; addr_arr[400] = [["4327", "名山县"], ["4328", "天全县"], ["4329", "宝兴县"], ["4330", "汉源县"], ["4331", "石棉县"], ["4332", "芦山县"], ["4333", "荥经县"], ["4334", "雨城区"]]; addr_arr[401] = [["4335", "南江县"], ["4336", "巴州区"], ["4337", "平昌县"], ["4338", "通江县"]]; addr_arr[402] = [["4339", "乐至县"], ["4340", "安岳县"], ["4341", "简阳"], ["4342", "雁江区"]]; addr_arr[403] = [["4343", "九寨沟县"], ["4344", "壤塘县"], ["4345", "小金县"], ["4346", "松潘县"], ["4347", "汶川县"], ["4348", "理县"], ["4349", "红原县"], ["4350", "若尔盖县"], ["4351", "茂县"], ["4352", "金川县"], ["4353", "阿坝县"], ["4354", "马尔康县"], ["4355", "黑水县"]]; addr_arr[404] = [["4356", "丹巴县"], ["4357", "乡城县"], ["4358", "巴塘县"], ["4359", "康定县"], ["4360", "得荣县"], ["4361", "德格县"], ["4362", "新龙县"], ["4363", "泸定县"], ["4364", "炉霍县"], ["4365", "理塘县"], ["4366", "甘孜县"], ["4367", "白玉县"], ["4368", "石渠县"], ["4369", "稻城县"], ["4370", "色达县"], ["4371", "道孚县"], ["4372", "雅江县"]]; addr_arr[405] = [["4373", "会东县"], ["4374", "会理县"], ["4375", "冕宁县"], ["4376", "喜德县"], ["4377", "宁南县"], ["4378", "布拖县"], ["4379", "德昌县"], ["4380", "昭觉县"], ["4381", "普格县"], ["4382", "木里藏族自治县"], ["4383", "甘洛县"], ["4384", "盐源县"], ["4385", "美姑县"], ["4386", "西昌"], ["4387", "越西县"], ["4388", "金阳县"], ["4389", "雷波县"]]; addr_arr[406] = [["4390", "乌当区"], ["4391", "云岩区"], ["4392", "修文县"], ["4393", "南明区"], ["4394", "小河区"], ["4395", "开阳县"], ["4396", "息烽县"], ["4397", "清镇"], ["4398", "白云区"], ["4399", "花溪区"]]; addr_arr[407] = [["4400", "六枝特区"], ["4401", "水城县"], ["4402", "盘县"], ["4403", "钟山区"]]; addr_arr[408] = [["4404", "习水县"], ["4405", "仁怀"], ["4406", "余庆县"], ["4407", "凤冈县"], ["4408", "务川仡佬族苗族自治县"], ["4409", "桐梓县"], ["4410", "正安县"], ["4411", "汇川区"], ["4412", "湄潭县"], ["4413", "红花岗区"], ["4414", "绥阳县"], ["4415", "赤水"], ["4416", "道真仡佬族苗族自治县"], ["4417", "遵义县"]]; addr_arr[409] = [["4418", "关岭布依族苗族自治县"], ["4419", "平坝县"], ["4420", "普定县"], ["4421", "紫云苗族布依族自治县"], ["4422", "西秀区"], ["4423", "镇宁布依族苗族自治县"]]; addr_arr[410] = [["4424", "万山特区"], ["4425", "印江土家族苗族自治县"], ["4426", "德江县"], ["4427", "思南县"], ["4428", "松桃苗族自治县"], ["4429", "江口县"], ["4430", "沿河土家族自治县"], ["4431", "玉屏侗族自治县"], ["4432", "石阡县"], ["4433", "铜仁"]]; addr_arr[411] = [["4434", "兴义"], ["4435", "兴仁县"], ["4436", "册亨县"], ["4437", "安龙县"], ["4438", "普安县"], ["4439", "晴隆县"], ["4440", "望谟县"], ["4441", "贞丰县"]]; addr_arr[412] = [["4442", "大方县"], ["4443", "威宁彝族回族苗族自治县"], ["4444", "毕节"], ["4445", "纳雍县"], ["4446", "织金县"], ["4447", "赫章县"], ["4448", "金沙县"], ["4449", "黔西县"]]; addr_arr[413] = [["4450", "三穗县"], ["4451", "丹寨县"], ["4452", "从江县"], ["4453", "凯里"], ["4454", "剑河县"], ["4455", "台江县"], ["4456", "天柱县"], ["4457", "岑巩县"], ["4458", "施秉县"], ["4459", "榕江县"], ["4460", "锦屏县"], ["4461", "镇远县"], ["4462", "雷山县"], ["4463", "麻江县"], ["4464", "黄平县"], ["4465", "黎平县"]]; addr_arr[414] = [["4466", "三都水族自治县"], ["4467", "平塘县"], ["4468", "惠水县"], ["4469", "独山县"], ["4470", "瓮安县"], ["4471", "福泉"], ["4472", "罗甸县"], ["4473", "荔波县"], ["4474", "贵定县"], ["4475", "都匀"], ["4476", "长顺县"], ["4477", "龙里县"]]; addr_arr[415] = [["4478", "东川区"], ["4479", "五华区"], ["4480", "呈贡县"], ["4481", "安宁"], ["4482", "官渡区"], ["4483", "宜良县"], ["4484", "富民县"], ["4485", "寻甸回族彝族自治县"], ["4486", "嵩明县"], ["4487", "晋宁县"], ["4488", "盘龙区"], ["4489", "石林彝族自治县"], ["4490", "禄劝彝族苗族自治县"], ["4491", "西山区"]]; addr_arr[416] = [["4492", "会泽县"], ["4493", "宣威"], ["4494", "富源县"], ["4495", "师宗县"], ["4496", "沾益县"], ["4497", "罗平县"], ["4498", "陆良县"], ["4499", "马龙县"], ["4500", "麒麟区"]]; addr_arr[417] = [["4501", "元江哈尼族彝族傣族自治县"], ["4502", "华宁县"], ["4503", "峨山彝族自治县"], ["4504", "新平彝族傣族自治县"], ["4505", "易门县"], ["4506", "江川县"], ["4507", "澄江县"], ["4508", "红塔区"], ["4509", "通海县"]];
addr_arr[418] = [["4510", "施甸县"], ["4511", "昌宁县"], ["4512", "腾冲县"], ["4513", "隆阳区"], ["4514", "龙陵县"]]; addr_arr[419] = [["4515", "大关县"], ["4516", "威信县"], ["4517", "巧家县"], ["4518", "彝良县"], ["4519", "昭阳区"], ["4520", "水富县"], ["4521", "永善县"], ["4522", "盐津县"], ["4523", "绥江县"], ["4524", "镇雄县"], ["4525", "鲁甸县"]]; addr_arr[420] = [["4526", "华坪县"], ["4527", "古城区"], ["4528", "宁蒗彝族自治县"], ["4529", "永胜县"], ["4530", "玉龙纳西族自治县"]]; addr_arr[422] = [["4531", "临翔区"], ["4532", "云县"], ["4533", "凤庆县"], ["4534", "双江拉祜族佤族布朗族傣族自治县"], ["4535", "永德县"], ["4536", "沧源佤族自治县"], ["4537", "耿马傣族佤族自治县"], ["4538", "镇康县"]]; addr_arr[423] = [["4539", "元谋县"], ["4540", "南华县"], ["4541", "双柏县"], ["4542", "大姚县"], ["4543", "姚安县"], ["4544", "楚雄"], ["4545", "武定县"], ["4546", "永仁县"], ["4547", "牟定县"], ["4548", "禄丰县"]]; addr_arr[424] = [["4549", "个旧"], ["4550", "元阳县"], ["4551", "屏边苗族自治县"], ["4552", "建水县"], ["4553", "开远"], ["4554", "弥勒县"], ["4555", "河口瑶族自治县"], ["4556", "泸西县"], ["4557", "石屏县"], ["4558", "红河县"], ["4559", "绿春县"], ["4560", "蒙自县"], ["4561", "金平苗族瑶族傣族自治县"]]; addr_arr[425] = [["4562", "丘北县"], ["4563", "富宁县"], ["4564", "广南县"], ["4565", "文山县"], ["4566", "砚山县"], ["4567", "西畴县"], ["4568", "马关县"], ["4569", "麻栗坡县"]]; addr_arr[426] = [["4570", "勐海县"], ["4571", "勐腊县"], ["4572", "景洪"]]; addr_arr[427] = [["4573", "云龙县"], ["4574", "剑川县"], ["4575", "南涧彝族自治县"], ["4576", "大理"], ["4577", "宾川县"], ["4578", "巍山彝族回族自治县"], ["4579", "弥渡县"], ["4580", "永平县"], ["4581", "洱源县"], ["4582", "漾濞彝族自治县"], ["4583", "祥云县"], ["4584", "鹤庆县"]]; addr_arr[428] = [["4585", "梁河县"], ["4586", "潞西"], ["4587", "瑞丽"], ["4588", "盈江县"], ["4589", "陇川县"]]; addr_arr[430] = [["4590", "德钦县"], ["4591", "维西傈僳族自治县"], ["4592", "香格里拉县"]]; addr_arr[431] = [["4593", "城关区"], ["4594", "堆龙德庆县"], ["4595", "墨竹工卡县"], ["4596", "尼木县"], ["4597", "当雄县"], ["4598", "曲水县"], ["4599", "林周县"], ["4600", "达孜县"]]; addr_arr[432] = [["4601", "丁青县"], ["4602", "八宿县"], ["4603", "察雅县"], ["4604", "左贡县"], ["4605", "昌都县"], ["4606", "江达县"], ["4607", "洛隆县"], ["4608", "类乌齐县"], ["4609", "芒康县"], ["4610", "贡觉县"], ["4611", "边坝县"]]; addr_arr[433] = [["4612", "乃东县"], ["4613", "加查县"], ["4614", "扎囊县"], ["4615", "措美县"], ["4616", "曲松县"], ["4617", "桑日县"], ["4618", "洛扎县"], ["4619", "浪卡子县"], ["4620", "琼结县"], ["4621", "贡嘎县"], ["4622", "错那县"], ["4623", "隆子县"]]; addr_arr[434] = [["4624", "亚东县"], ["4625", "仁布县"], ["4626", "仲巴县"], ["4627", "南木林县"], ["4628", "吉隆县"], ["4629", "定日县"], ["4630", "定结县"], ["4631", "岗巴县"], ["4632", "康马县"], ["4633", "拉孜县"], ["4634", "日喀则"], ["4635", "昂仁县"], ["4636", "江孜县"], ["4637", "白朗县"], ["4638", "聂拉木县"], ["4639", "萨嘎县"], ["4640", "萨迦县"], ["4641", "谢通门县"]]; addr_arr[435] = [["4642", "嘉黎县"], ["4643", "安多县"], ["4644", "尼玛县"], ["4645", "巴青县"], ["4646", "比如县"], ["4647", "班戈县"], ["4648", "申扎县"], ["4649", "索县"], ["4650", "聂荣县"], ["4651", "那曲县"]]; addr_arr[436] = [["4652", "噶尔县"], ["4653", "措勤县"], ["4654", "改则县"], ["4655", "日土县"], ["4656", "普兰县"], ["4657", "札达县"], ["4658", "革吉县"]]; addr_arr[437] = [["4659", "墨脱县"], ["4660", "察隅县"], ["4661", "工布江达县"], ["4662", "朗县"], ["4663", "林芝县"], ["4664", "波密县"], ["4665", "米林县"]]; addr_arr[438] = [["4666", "临潼区"], ["4667", "周至县"], ["4668", "户县"], ["4669", "新城区"], ["4670", "未央区"], ["4671", "灞桥区"], ["4672", "碑林区"], ["4673", "莲湖区"], ["4674", "蓝田县"], ["4675", "长安区"], ["4676", "阎良区"], ["4677", "雁塔区"], ["4678", "高陵县"]]; addr_arr[439] = [["4679", "印台区"], ["4680", "宜君县"], ["4681", "王益区"], ["4682", "耀州区"]]; addr_arr[440] = [["4683", "凤县"], ["4684", "凤翔县"], ["4685", "千阳县"], ["4686", "太白县"], ["4687", "岐山县"], ["4688", "扶风县"], ["4689", "渭滨区"], ["4690", "眉县"], ["4691", "金台区"], ["4692", "陇县"], ["4693", "陈仓区"], ["4694", "麟游县"]]; addr_arr[441] = [["4695", "三原县"], ["4696", "干县"], ["4697", "兴平"], ["4698", "彬县"], ["4699", "旬邑县"], ["4700", "杨陵区"], ["4701", "武功县"], ["4702", "永寿县"], ["4703", "泾阳县"], ["4704", "淳化县"], ["4705", "渭城区"], ["4706", "礼泉县"], ["4707", "秦都区"], ["4708", "长武县"]]; addr_arr[442] = [["4709", "临渭区"], ["4710", "华县"], ["4711", "华阴"], ["4712", "合阳县"], ["4713", "大荔县"], ["4714", "富平县"], ["4715", "潼关县"], ["4716", "澄城县"], ["4717", "白水县"], ["4718", "蒲城县"], ["4719", "韩城"]]; addr_arr[443] = [["4720", "吴起县"], ["4721", "子长县"], ["4722", "安塞县"], ["4723", "宜川县"], ["4724", "宝塔区"], ["4725", "富县"], ["4726", "延川县"], ["4727", "延长县"], ["4728", "志丹县"], ["4729", "洛川县"], ["4730", "甘泉县"], ["4731", "黄陵县"], ["4732", "黄龙县"]]; addr_arr[444] = [["4733", "佛坪县"], ["4734", "勉县"], ["4735", "南郑县"], ["4736", "城固县"], ["4737", "宁强县"], ["4738", "汉台区"], ["4739", "洋县"], ["4740", "留坝县"], ["4741", "略阳县"], ["4742", "西乡县"], ["4743", "镇巴县"]]; addr_arr[445] = [["4744", "佳县"], ["4745", "吴堡县"], ["4746", "子洲县"], ["4747", "定边县"], ["4748", "府谷县"], ["4749", "榆林榆阳区"], ["4750", "横山县"], ["4751", "清涧县"], ["4752", "神木县"], ["4753", "米脂县"], ["4754", "绥德县"], ["4755", "靖边县"]]; addr_arr[446] = [["4756", "宁陕县"], ["4757", "岚皋县"], ["4758", "平利县"], ["4759", "旬阳县"], ["4760", "汉滨区"], ["4761", "汉阴县"], ["4762", "白河县"], ["4763", "石泉县"], ["4764", "紫阳县"], ["4765", "镇坪县"]]; addr_arr[447] = [["4766", "丹凤县"], ["4767", "商南县"], ["4768", "商州区"], ["4769", "山阳县"], ["4770", "柞水县"], ["4771", "洛南县"], ["4772", "镇安县"]]; addr_arr[448] = [["4773", "七里河区"], ["4774", "城关区"], ["4775", "安宁区"], ["4776", "榆中县"], ["4777", "永登县"], ["4778", "皋兰县"], ["4779", "红古区"], ["4780", "西固区"]]; addr_arr[449] = [["4781", "嘉峪关"]]; addr_arr[450] = [["4782", "永昌县"], ["4783", "金川区"]]; addr_arr[451] = [["4784", "会宁县"], ["4785", "平川区"], ["4786", "景泰县"], ["4787", "白银区"], ["4788", "靖远县"]]; addr_arr[452] = [["4789", "张家川回族自治县"], ["4790", "武山县"], ["4791", "清水县"], ["4792", "甘谷县"], ["4793", "秦安县"], ["4794", "秦州区"], ["4795", "麦积区"]]; addr_arr[453] = [["4796", "凉州区"], ["4797", "古浪县"], ["4798", "天祝藏族自治县"], ["4799", "民勤县"]]; addr_arr[454] = [["4800", "临泽县"], ["4801", "山丹县"], ["4802", "民乐县"], ["4803", "甘州区"], ["4804", "肃南裕固族自治县"], ["4805", "高台县"]]; addr_arr[455] = [["4806", "华亭县"], ["4807", "崆峒区"], ["4808", "崇信县"], ["4809", "庄浪县"], ["4810", "泾川县"], ["4811", "灵台县"], ["4812", "静宁县"]];
addr_arr[456] = [["4813", "敦煌"], ["4814", "玉门"], ["4815", "瓜州县（原安西县）"], ["4816", "肃北蒙古族自治县"], ["4817", "肃州区"], ["4818", "金塔县"], ["4819", "阿克塞哈萨克族自治县"]]; addr_arr[457] = [["4820", "华池县"], ["4821", "合水县"], ["4822", "宁县"], ["4823", "庆城县"], ["4824", "正宁县"], ["4825", "环县"], ["4826", "西峰区"], ["4827", "镇原县"]]; addr_arr[458] = [["4828", "临洮县"], ["4829", "安定区"], ["4830", "岷县"], ["4831", "渭源县"], ["4832", "漳县"], ["4833", "通渭县"], ["4834", "陇西县"]]; addr_arr[459] = [["4835", "两当县"], ["4836", "宕昌县"], ["4837", "康县"], ["4838", "徽县"], ["4839", "成县"], ["4840", "文县"], ["4841", "武都区"], ["4842", "礼县"], ["4843", "西和县"]]; addr_arr[460] = [["4844", "东乡族自治县"], ["4845", "临夏县"], ["4846", "临夏"], ["4847", "和政县"], ["4848", "广河县"], ["4849", "康乐县"], ["4850", "永靖县"], ["4851", "积石山保安族东乡族撒拉族自治县"]]; addr_arr[461] = [["4852", "临潭县"], ["4853", "卓尼县"], ["4854", "合作"], ["4855", "夏河县"], ["4856", "玛曲县"], ["4857", "碌曲县"], ["4858", "舟曲县"], ["4859", "迭部县"]]; addr_arr[462] = [["4860", "城东区"], ["4861", "城中区"], ["4862", "城北区"], ["4863", "城西区"], ["4864", "大通回族土族自治县"], ["4865", "湟中县"], ["4866", "湟源县"]]; addr_arr[463] = [["4867", "乐都县"], ["4868", "互助土族自治县"], ["4869", "化隆回族自治县"], ["4870", "平安县"], ["4871", "循化撒拉族自治县"], ["4872", "民和回族土族自治县"]]; addr_arr[464] = [["4873", "刚察县"], ["4874", "海晏县"], ["4875", "祁连县"], ["4876", "门源回族自治县"]]; addr_arr[465] = [["4877", "同仁县"], ["4878", "尖扎县"], ["4879", "河南蒙古族自治县"], ["4880", "泽库县"]]; addr_arr[466] = [["4881", "共和县"], ["4882", "兴海县"], ["4883", "同德县"], ["4884", "贵南县"], ["4885", "贵德县"]]; addr_arr[467] = [["4886", "久治县"], ["4887", "玛多县"], ["4888", "玛沁县"], ["4889", "班玛县"], ["4890", "甘德县"], ["4891", "达日县"]]; addr_arr[468] = [["4892", "囊谦县"], ["4893", "曲麻莱县"], ["4894", "杂多县"], ["4895", "治多县"], ["4896", "玉树县"], ["4897", "称多县"]]; addr_arr[469] = [["4898", "乌兰县"], ["4899", "冷湖行委"], ["4900", "大柴旦行委"], ["4901", "天峻县"], ["4902", "德令哈"], ["4903", "格尔木"], ["4904", "茫崖行委"], ["4905", "都兰县"]]; addr_arr[470] = [["4906", "兴庆区"], ["4907", "永宁县"], ["4908", "灵武"], ["4909", "西夏区"], ["4910", "贺兰县"], ["4911", "金凤区"]]; addr_arr[471] = [["4912", "大武口区"], ["4913", "平罗县"], ["4914", "惠农区"]]; addr_arr[472] = [["4915", "利通区"], ["4916", "同心县"], ["4917", "盐池县"], ["4918", "青铜峡"]]; addr_arr[473] = [["4919", "原州区"], ["4920", "彭阳县"], ["4921", "泾源县"], ["4922", "西吉县"], ["4923", "隆德县"]]; addr_arr[474] = [["4924", "中宁县"], ["4925", "沙坡头区"], ["4926", "海原县"]]; addr_arr[475] = [["4927", "东山区"], ["4928", "乌鲁木齐县"], ["4929", "天山区"], ["4930", "头屯河区"], ["4931", "新区"], ["4932", "水磨沟区"], ["4933", "沙依巴克区"], ["4934", "达坂城区"]]; addr_arr[476] = [["4935", "乌尔禾区"], ["4936", "克拉玛依区"], ["4937", "独山子区"], ["4938", "白碱滩区"]]; addr_arr[477] = [["4939", "吐鲁番"], ["4940", "托克逊县"], ["4941", "鄯善县"]]; addr_arr[478] = [["4942", "伊吾县"], ["4943", "哈密"], ["4944", "巴里坤哈萨克自治县"]]; addr_arr[479] = [["4945", "吉木萨尔县"], ["4946", "呼图壁县"], ["4947", "奇台县"], ["4948", "昌吉"], ["4949", "木垒哈萨克自治县"], ["4950", "玛纳斯县"], ["4951", "米泉"], ["4952", "阜康"]]; addr_arr[480] = [["4953", "博乐"], ["4954", "温泉县"], ["4955", "精河县"]]; addr_arr[481] = [["4956", "博湖县"], ["4957", "和硕县"], ["4958", "和静县"], ["4959", "尉犁县"], ["4960", "库尔勒"], ["4961", "焉耆回族自治县"], ["4962", "若羌县"], ["4963", "轮台县"]]; addr_arr[482] = [["4964", "乌什县"], ["4965", "库车县"], ["4966", "拜城县"], ["4967", "新和县"], ["4968", "柯坪县"], ["4969", "沙雅县"], ["4970", "温宿县"], ["4971", "阿克苏"], ["4972", "阿瓦提县"]]; addr_arr[483] = [["4973", "乌恰县"], ["4974", "阿克陶县"], ["4975", "阿合奇县"], ["4976", "阿图什"]]; addr_arr[484] = [["4977", "伽师县"], ["4978", "叶城县"], ["4979", "喀什"], ["4980", "塔什库尔干塔吉克自治县"], ["4981", "岳普湖县"], ["4982", "巴楚县"], ["4983", "泽普县"], ["4984", "疏勒县"], ["4985", "疏附县"], ["4986", "英吉沙县"], ["4987", "莎车县"], ["4988", "麦盖提县"]]; addr_arr[485] = [["4989", "于田县"], ["4990", "和田县"], ["4991", "和田"], ["4992", "墨玉县"], ["4993", "民丰县"], ["4994", "洛浦县"], ["4995", "皮山县"], ["4996", "策勒县"]]; addr_arr[486] = [["4997", "伊宁县"], ["4998", "伊宁"], ["4999", "奎屯"], ["5000", "察布查尔锡伯自治县"], ["5001", "尼勒克县"], ["5002", "巩留县"], ["5003", "新源县"], ["5004", "昭苏县"], ["5005", "特克斯县"], ["5006", "霍城县"]]; addr_arr[487] = [["5007", "乌苏"], ["5008", "和布克赛尔蒙古自治县"], ["5009", "塔城"], ["5010", "托里县"], ["5011", "沙湾县"], ["5012", "裕民县"], ["5013", "额敏县"]]; addr_arr[488] = [["5014", "吉木乃县"], ["5015", "哈巴河县"], ["5016", "富蕴县"], ["5017", "布尔津县"], ["5018", "福海县"], ["5019", "阿勒泰"], ["5020", "青河县"]]; addr_arr[489] = [["5021", "石河子"]]; addr_arr[490] = [["5022", "阿拉尔"]]; addr_arr[491] = [["5023", "图木舒克"]]; addr_arr[492] = [["5024", "五家渠"]]; addr_arr[45055] = [["535", "美国"], ["536", "加拿大"], ["537", "澳大利亚"], ["538", "新西兰"], ["539", "英国"], ["540", "法国"], ["541", "德国"], ["542", "捷克"], ["543", "荷兰"], ["544", "瑞士"], ["545", "希腊"], ["546", "挪威"], ["547", "瑞典"], ["548", "丹麦"], ["549", "芬兰"], ["550", "爱尔兰"], ["551", "奥地利"], ["552", "意大利"], ["553", "乌克兰"], ["554", "俄罗斯"], ["555", "西班牙"], ["556", "韩国"], ["557", "新加坡"], ["558", "马来西亚"], ["559", "印度"], ["560", "泰国"], ["561", "日本"], ["562", "巴西"], ["563", "阿根廷"], ["564", "南非"], ["565", "埃及"]];addr_arr[999]=[["32", "台湾"], ["33", "香港特别行政区"], ["34", "澳门特别行政区"]];

$(function () {
var shengfen_='';
var city='';

for (var i=0;i<addr_arr[0].length-1;i++) {
	shengfen_+='<p class="sub_type_1" pid="'+addr_arr[0][i][0]+'">'+addr_arr[0][i][1]+'</p>'
}for (var i=0;i<addr_arr[1].length;i++) {
	city+='<p class="option_cell">'+addr_arr[1][i][1]+'</p>'
}
$('.sub_1').html(shengfen_);
$('.sub_1 p:nth-child(1)').addClass('option_curr');
$('.sub_2_2').html(city);
$('.sub_2_2 p:nth-child(1)').addClass('option_curr');
$('.sub_type_1').click(function () {
	var pid=$(this).attr('pid');
	$(this).siblings().removeClass('option_curr');
	$(this).addClass('option_curr');
	var city='';
	for(var i=0;i<addr_arr[pid].length;i++){
		city+='<p class="option_cell">'+addr_arr[pid][i][1]+'</p>';
	}
	$('.sub_2_2').html(city);
	$('.sub_2_2 p:nth-child(1)').addClass('option_curr');
})
//  $.fn.areaSelect = function (options,Ycallback,Ncallback) {
//  	console.log(33333);
//      //插件默认选项
//      var that = $(this);
//      var docType = $(this).is('input');
//      var datetime = false;
//      var indexY=0,indexM=0,indexD=0;
//      var yearScroll=null,monthScroll=null,dayScroll=null;
//      var pid = addr_arr[0][0][0],cid = addr_arr[pid][0][0],aid = addr_arr[cid][0][0];
//      console.log(111);
//      $.fn.date.defaultOptions = {
//          theme:"date",                    //控件样式（1：日期，2：日期+时间）
//          mode:null,                       //操作模式（滑动模式）
//          event:"tap",                    //打开日期插件默认方式为点击后后弹出日期 
//          show:true,
//      }
//      //用户选项覆盖插件默认选项   
//     // var opts = $.extend( true, {}, $.fn.date.defaultOptions, options );
//
//      var opts = $.extend($.fn.date.defaultOptions , options);
//      if(!opts.show){
//          that.unbind('tap');
//      }else{
//          //绑定事件（默认事件为获取焦点）
//          that.bind(opts.event,function () {
//              /////////////////////失去焦点/////////////////
//          $('input').each(
//              function () {
//                  this.blur();
//              }
//          );
//          $('select').each(function () {
//              this.blur();
//          });
//              createUL();      //动态生成控件显示的日期
//              init_iScrll();   //初始化iscrll
//              extendOptions(); //显示控件
//              that.blur();
//              refreshDate();
//              bindButton();
//          })  
//      };
//      function refreshDate(){
//      	console.log(3333)
//          yearScroll.refresh();
//          monthScroll.refresh();
//          dayScroll.refresh();
//          //resetInitDete();
//          yearScroll.scrollTo(0, indexY*40, 100, true);
//          monthScroll.scrollTo(0, indexM*40, 100, true);
//          dayScroll.scrollTo(0, indexD*40, 100, true); 
//      }
//
//      function bindButton(){
//          $("#dateconfirm").unbind('click').click(function () {   
//              var datestr = $("#yearwrapper ul li").eq(indexY+2).html()+"-"+
//                        $("#monthwrapper ul li").eq(indexM+2).html()+"-"+
//           $("#daywrapper ul li").eq(Math.round(indexD+2)).html();
//
//              if(Ycallback===undefined){
//                   if(docType){that.val(datestr);}else{that.html(datestr);}
//              }else{
//                  Ycallback(datestr);
//              }
//              $("#datePage").hide(); 
//              $("#dateshadow").hide();
//          });
//          $("#datecancle").click(function () {
//              $("#datePage").hide(); 
//              $("#dateshadow").hide();
//              if(Ncallback!==undefined) Ncallback(false);
//          });
//      }       
//      function extendOptions(){
//          $("#datePage").show(); 
//          $("#dateshadow").show();
//      }
//      //日期滑动
//      function init_iScrll() { 
//          yearScroll = new iScroll("yearwrapper",{snap:"li",vScrollbar:false,
//              onScrollEnd:function () {
//                  indexY = (this.y/40)*(-1);
//                 // indexM = indexD = 0;
//                  $("#daywrapper ul").html("");
//                  refreshCity();
//                  console.log(indexM);
//              }
//          });
//          monthScroll = new iScroll("monthwrapper",{snap:"li",vScrollbar:false,
//              onScrollEnd:function (){
//                  indexM = (this.y/40)*(-1);
//                 // indexD = 0;
//                  $("#daywrapper ul").html("");
//                  refreshArea();
//                  console.log(indexM);
//              }
//          });
//          dayScroll = new iScroll("daywrapper",{snap:"li",vScrollbar:false,
//              onScrollEnd:function () {
//                    indexD = (this.y/40)*(-1);
//              }
//          });
//      }
//
//      function refreshCity(){
//          pid = addr_arr[0][indexY][0];
//          $("#monthwrapper ul").html(createCitys_UL());
//          monthScroll.refresh();
//          refreshArea();
//      }
//
//      function refreshArea(){
//          cid = addr_arr[pid][indexM][0];
//          $("#daywrapper ul").html(createArea_UL());
//          dayScroll.refresh();
//
//      }
//
//      function  createUL(){
//          CreateDateUI();
//          $("#yearwrapper ul").html(createProvince_UL());
//          $("#monthwrapper ul").html(createCitys_UL());
//          $("#daywrapper ul").html(createArea_UL());
//      }
//      function CreateDateUI(){
//          var str = ''+
//           '<div id="dateshadow"></div>'+
//           '<div id="datePage" class="page">'+
//               '<section>'+
//                   '<div id="datetitle"><h1>请选择地区</h1></div>'+
//                   '<div id="datemark"><a id="markyear"></a><a id="markmonth"></a><a id="markday"></a></div>'+
//                   // '<div id="timemark"><a id="markhour"></a><a id="markminut"></a><a id="marksecond"></a></div>'+
//                   '<div id="datescroll">'+
//                       '<div id="yearwrapper">'+
//                           '<ul></ul>'+
//                       '</div>'+
//                       '<div id="monthwrapper">'+
//                           '<ul></ul>'+
//                       '</div>'+
//                       '<div id="daywrapper">'+
//                           '<ul></ul>'+
//                       '</div>'+
//                   '</div>'+
//               '</section>'+
//               '<footer id="dateFooter">'+
//                   '<div id="setcancle">'+
//                       '<ul>'+
//                           '<li id="datecancle">取消</li>'+
//                           '<li id="dateconfirm">确定</li>'+
//                       '</ul>'+
//                   '</div>'+
//               '</footer>'+
//           '</div>'
//          $("#datePlugin").html(str);
//      }
//     }
})
</script>
</body>
</html><?php }} ?>