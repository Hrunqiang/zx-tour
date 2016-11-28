<?php /* Smarty version Smarty-3.1.6, created on 2016-11-23 18:45:01
         compiled from "../DataSource/Tpl\Run\index.html" */ ?>
<?php /*%%SmartyHeaderCode:426557ea4d3de9d450-50845653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5413ae1b1157f24c387c13c1079eefeb2145fc4a' => 
    array (
      0 => '../DataSource/Tpl\\Run\\index.html',
      1 => 1479895823,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '426557ea4d3de9d450-50845653',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57ea4d3e3f161',
  'variables' => 
  array (
    'domestic' => 0,
    'abroad' => 0,
    'hotwords' => 0,
    'key' => 0,
    'i' => 0,
    'hotcitys' => 0,
    'list' => 0,
    'now' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ea4d3e3f161')) {function content_57ea4d3e3f161($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Comon/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<title>跑步赛事搜索</title>
<style>
.filter_section{padding:9px 0;color:#3f3f3f;background: #FFF;/*position: relative;*/font-size: 1rem;}
.filter_section>.flex_1{/*border-right:1px solid #efeef3;*/overflow: hidden;}
.filter_section>.flex_1:last-child{border:none;}
.filter_section>.flex_1>div{position: relative;}
.filter_section>.flex_1>div>p{text-overflow: ellipsis;white-space: nowrap;word-wrap:normal;word-wrap: break-word;word-break: break-all;overflow: hidden;text-align: right;}
.filter_section>.flex_1>div>span>i{position: relative;display: inline-block;width: 1.0714rem;height: 0.6428571428571429rem;/*margin-right: 1.72857rem;*/margin-top: 0.6428571428571429rem;margin-left: 0.2142857142857143rem;}
/*.filter_section>.flex_1>div>span>i:after{content: " ";display: inline-block;-webkit-transform: rotate(135deg);-moz-transform: rotate(135deg);-ms-transform: rotate(135deg);-o-transform: rotate(135deg);transform: rotate(135deg);height: 6px;width: 6px;border-width: 2px 2px 0 0;border-color: #C8C8CD;border-style: solid;position: absolute;top: 50%;left: 6px;margin-top: -6px;}*/
.filter_section> .curr_filter{color:#fb6165;}
.filter_section> .curr_filter>div>span>i:after{-webkit-transform: rotate(-45deg);-moz-transform: rotate(-45deg);-ms-transform: rotate(-45deg);-o-transform: rotate(-45deg);transform: rotate(-45deg);border-color: #ff2244;margin-top: 0px;}

.filter_section>.flex_1 .drop-down{display:none;width: 100%;position: absolute;top:38px;background: red;z-index: 2;left:0;background: rgba(0,0,0,.5);color:#181823;}
.filter_section> .curr_filter .drop-down{display: block;}
.filter_section .filter_cell .drop-down .drop_content{background: white;height: 100%;}
.filter_section .filter_cell .drop-down .option_cell{height: 2.714rem;line-height: 2.71428rem;box-sizing: border-box;padding-left: 0.6428571428571429rem;}
/*.filter_section .filter_cell .drop-down .option_cell:last-child{border:none;}*/
.filter_section .filter_cell .drop-down .option_curr{color:#fb6165;border-color:rgba(4,190,2,0.3);background: #FFFFFF;}
.option_cell_area{height: 2.714rem;line-height: 2.71428rem;box-sizing: border-box;padding-left: 0.6428571428571429rem;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;}
.filter_section .filter_cell .drop-down .drop_content_2{background: #FFF;height: 30.00000000000000rem;-webkit-box-align: flex-start;-webkit-align-items: flex-start;-ms-flex-align: flex-start;align-items: flex-start;color: black;font-weight: bold;}
.filter_section .filter_cell .drop-down .drop_content_2 .sub_1{width: 12.14285714285714rem;height: 100%;display: none;}
.filter_section .filter_cell .drop-down .drop_content_2 .sub_1 p{height: 2.71428rem;line-height: 2.71428rem;padding-left:0.6428571428571429rem;}
.filter_section .filter_cell .drop-down .drop_content_2 .hot_city p{height: 2.71428rem;line-height: 2.71428rem;padding-left:0.6428571428571429rem;}
.filter_section .filter_cell .drop-down .drop_content_2 .sub_sf{width: 12.14285714285714rem;height: 100%;}
.filter_section .filter_cell .drop-down .drop_content_2 .sub_sf p{height: 2.71428rem;line-height: 2.71428rem;padding-left:0.6428571428571429rem;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;}
.filter_section .filter_cell .drop-down .drop_content_2 .sub_sf p.curr{color:#fb6165;background: #FFF;}
.filter_section .filter_cell .drop-down .drop_content_2 .hot_city{width: 12.14285714285714rem;height: 100%;display: none;}
.filter_section .filter_cell .drop-down .drop_content_2 .hot_city p.curr{color:#fb6165;background: #FFF;};
.search_result{background: #FFF;margin-bottom: 0.5714285714285714rem;}
.filter_section .filter_cell .drop-down .drop_content_2 .sub_1 p.curr{color:#fb6165;background: #FFF;}
.filter_section .filter_cell .drop-down .drop_content_2 .sub_2{padding-left:1.071428571428571rem;height: 100%; overflow: scroll;}
.filter_section .filter_cell .drop-down .drop_content_2 .sub_2>.sub_list{display: none;}
.filter_section .filter_cell .drop-down .drop_content_2 .sub_2>.sub_list.curr{display: block;}
.search_result .none_result{height: 8.571428571428571rem;}
.search_result .none_result ul{width: 70%;}
.search_result .none_result ul li{float: left;width: 10%;}
.search_result .none_result ul .none_result_hunt{width: 90%;}
.none_result .center_cell .icon{width: 1.285714285714286rem;height: 1.285714285714286rem;background-image: url(/static/images/icons.png);background-size:12.39285714285714rem 14.42857142857143rem;display: inline-block;background-position:-5.714285714285714rem 0;margin-top: 0.3571428571428571rem;}

.empty{width: 60%;margin: 0 auto;background: #FFFFFF;padding: 2.5rem 0 0 0;}
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
#search_cancel{color: black;font-size: 1.142857142857143rem;}
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
.search_result a:last-child{padding-bottom: 2.714285714285714rem;}
.jz_more{text-align: center;background: #F5F5F9;color: #888888;font-size: 1rem;height: 3.71rem;line-height: 3.71rem;}
.back_top{position: fixed;bottom: 5rem;right: 1.21428rem;width: 2.857142857142857rem;height: 2.857142857142857rem;background: url(/static/images/back_top.png);background-size: 100% 100%;display: none;z-index: 10000;}
.bmzt_icon{display: inline-block;width: 1.142857142857143rem;height: 1.142857142857143rem;border: 1px solid #c5c5c5;border-radius: 0.3571428571428571rem 0.3571428571428571rem 0.3571428571428571rem 0.3571428571428571rem;float: left;background: #FFFFFF;box-sizing: border-box;}
/*.bmzt_icon_curr{border-color: #fb6165;}*/
.bmzt_icon_curr div{width:100%;height: 100%; background: url(/static/images/new_index_5.png) no-repeat;background-size: 100%;}
.bmzt_icon_curr .bmzt_icon{border-color: #fb6165;}
.area_all{display: inline-block;width: 5.60714285714286rem;line-height: 2.50000000000000rem;text-align: center;font-size: 1rem;border: 1px solid #bcc3cc;border-radius: 5px;margin-right:0.50000000000000rem;margin-bottom: 0.57142857142857rem;color: black}
.area_all_curr{background: #fb6165;color: #fff;border-radius: 5px 5px 5px 5px;border: 1px solid #fb6165;}
.nuomi_7{margin-right: 0px;width: 3.357142857142857rem;height: 1.071428571428571rem;background: none;}
.mejz{background: url(/static/images/tag_mingejz.jpg) no-repeat;background-size: 100%;}
.jz{background: url(/static/images/tag_jiezhi.jpg) no-repeat;background-size: 100%;}
.yh{background: url(/static/images/tag_youhui.jpg) no-repeat;background-size: 100%;}
.nm_view{height: 4.285714285714286rem;margin-top: 0;}
.nm_view div{text-align: center;margin-bottom: 0.5rem;display: block;}
.weui_media_box .flex{height: auto!important;line-height: normal;margin-bottom: 0.4285714285714286rem;}
.weui_media_box .weui_media_desc{font-size: 0.9285714285714286rem!important;line-height: normal!important;overflow: hidden;-webkit-line-clamp: 1;}
.weui_media_appmsg{align-items: stretch!important;-webkit-align-items: stretch!important}
.weui_media_box .weui_media_appmsg .weui_media_hd{width: 5.714285714285714rem!important;}
.weui_media_box .weui_media_title{font-size: 1.214285714285714rem!important;font-weight: bold;white-space: normal;}
.weui_media_box h4{padding-top: 0;line-height: 1.21428571428571rem!important}
.weui_media_box .weui_media_appmsg .weui_media_appmsg_thumb{vertical-align: inherit;}
.weui_media_appmsg_thumb{width: 6.00000000000000rem!important}
.flex span:nth-child(1){padding-top: 0px!important;}
.weui_media_box{padding:0.6428571428571429rem 0 0 0;margin: 0 0.6428571428571429rem 0.6428571428571429rem 0.6428571428571429rem;}
.bm_attend{padding: 0.2142857142857143rem 0.6428571428571429rem 0.5rem;}
.orange{color: #ff2244;font-size: 0.8571428571428571rem;}
.orange_price{color: #ff2244;font-size: 1.142857142857143rem;}
.orange_yj{color: #888888;margin-left: 0.7142857142857143rem;font-size: 0.9285714285714286rem;}
.orange_text{margin-left: 1.071428571428571rem;font-size: 1rem;color: #888888;}
.orange_type{margin-left: 0.8571428571428571rem;font-size: 0.8571428571428571rem;color: #888888;}
.attend_num{float: right;font-size: 0.8571428571428571rem;color: #888888;}
.list_a{display: block;margin-top: 0.7142857142857143rem;background: #FFFFFF;}
.Area span,.kind span,.Distance span,.type span,.time_year span,.time_month span{box-sizing: border-box;}
.Type_1 span,.game_state span{box-sizing: border-box;}
.Area,.game_state,.time_year,.time_month,.time_future{box-sizing: border-box;padding: 1.071428571428571rem 0.6428571428571429rem 0.5714285714285714rem;color: #7a7a7a;border-bottom: 1px solid #D9D9D9;border-top: 1px solid rgb(171,171,171)}
.kind{box-sizing: border-box;padding: 1.071428571428571rem 0.6428571428571429rem 0.5714285714285714rem;color: #7a7a7a;border-bottom: 1px solid #D9D9D9;}
.Type{box-sizing: border-box;padding: 1.071428571428571rem 0.6428571428571429rem 0.5714285714285714rem;color: #7a7a7a;border-bottom: 1px solid #D9D9D9;}
.Type_1{box-sizing: border-box;padding: 1.071428571428571rem 0.6428571428571429rem 0.5714285714285714rem;color: #7a7a7a;border-bottom: 1px solid #D9D9D9;}
.Distance{box-sizing: border-box;padding: 1.071428571428571rem 0.6428571428571429rem 0.5714285714285714rem;color: #7a7a7a;border-bottom: 1px solid #D9D9D9;}
.filter_cell i{background: url(/static/images/new_down.png) no-repeat;background-size: 100%;}
.curr_filter i{background: url(/static/images/new_up.png) no-repeat;background-size: 100%;}
.hot_matchs{background: #f3f6f5!important;}
.curr_filter .bmzt_icon{background: none;}
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
#page1{position: fixed;z-index: 1000;width: 100%;max-width: 768px;}
.sf_scroll{background: #f8fafa;height: 100%;overflow-y: scroll;}
.meym{background: url(/static/images/mingeym.png) no-repeat;background-size: 100%;}
.qidai{background: url(/static/images/list_qd.jpg) no-repeat;background-size: 100%;float: left;width: 2.928571428571429rem;height: 1.142857142857143rem;margin: 0.9285714285714286rem 0 0.5rem;}
.star_time{color: #FF2244;font-size: 0.8571428571428571rem;margin-left: 0.5rem;float: left;margin-top: 0.7857142857142857rem;}
.bsjs{background: url(/static/images/bsjs.jpg) no-repeat;background-size: 100%;}
.qidaiz{overflow: hidden;overflow: hidden;}
.qidaiz:before{content: '';display: block;width: 100%;height: 1px;background: #E7E7E7;transform: scale(1,0.5);-webkit-transform: scale(1,0.5);-moz-transform: scale(1,0.5);-ms-transform: scale(1,0.5);}
.S_overhiden{white-space: nowrap;text-overflow: ellipsis;overflow: hidden;}
.time_btn{padding:0;color: #7a7a7a;font-weight: bold;position: fixed;left: 0px;bottom: 0px;width: 100%;border-top:1px solid #c5c5c5}
.weui_btn_time{color: #fb6165;background: #FFFFFF;border: 1px solid #E0E0E0!important;}
.more_btn{padding:0;color: #7a7a7a;font-weight: bold;position: fixed;left: 0px;bottom: 0px;width: 100%;border-top:1px solid #c5c5c5}
.area_kind{background: #f8f8f8;display: -webkit-flex;display: flex;display: -ms-flexbox;display: -moz-box;padding: 0.7142857142857143rem 1.142857142857143rem;border-top: 1px solid #D9D9D9;display: -webkit-box;}
.area_kind span{box-sizing: border-box;flex: 1;-webkit-flex: 1;-ms-flex: 1;-webkit-box-flex:1;text-align: center;font-size: 1rem;margin: 0 0.5rem;color: #7a7a7a;padding: 0.1428571428571429rem 0;border: 1px solid rgba(0,0,0,0);display: block;}
.area_kind_curr{border: 1px solid #fb6165!important;border-radius: 0.3571428571428571rem;color: #fb6165!important;background: #FFFFFF;}
.area_btn{color: #fb6165;background: #FFFFFF;border: 1px solid #e0e0e0!important;}
.option_cell_area_curr{color: #fb6165;border-bottom: 1px solid #fb6165}
.weui_btn{font-size: 1.285714285714286rem;}
.touch_mask{position: fixed;top: 0;left: 0;width: 100%;height: 1000px;}
.weui_icon_clear:before{color: #BBBBBB;}
.search_goback{width: 0.8571428571428571rem;height: 0.8571428571428571rem; margin: auto; background: url(/static/images/close_singel.jpg) no-repeat;background-size:100%;position: absolute;top: 0.57142857142857rem;}
.emputy_keyword{padding: 0 3.142857142857143rem;font-size: 1.142857142857143rem;color: #888888;}
.emputy_keyword span{color: #FF2244;}
.sub_sf p:nth-child(1){display: none;}
.reset_select{height: 2.50000rem;padding-top: 0.7142857142857143rem;}
.reset_select span{height: 2.50000rem;width: 7.142857142857143rem;text-align: center;background: #FF2244;font-size: 1rem;line-height: 2.500000rem;}
/*//////////////////////////////////////////////////////热词样式/////////////////////////////////////////*/
.search_section{background: #FFF;}
.search_default_title_bar{line-height: 2.5rem;font-size: 0.8571428571428571rem;color: #888888;}
.search_default .search_default_title_bar .title{color: #888888;font-size: 1rem;height: 2.5rem;background: #F3F6F5;}
.search_default .search_default_title_bar .title .icon{width: 10px;height: 14px;background-image: url(/static/images/icons.png);background-size:173.5px 202px;display: inline-block;background-position:-69px -4px;margin: 0 0.571428rem 0 0px;}
.search_default .search_default_title_bar .title p{height: 1rem;line-height: 1rem;font-size: 0.7857142857142857rem;padding-left: 0.9285714285714286rem;}
 .search_default_title_bar .title .title_word{flex:1;-webkit-box-flex: 1;-webkit-flex: 1;-ms-flex: 1;-webkit-box-flex:1;}
 /*.search_default_title_bar .title .change_hot{margin-right: 1.07142rem;color: #556F94;}*/
.search_default .search_default_hot{font-size: 1rem;overflow: hidden;padding: 0 0.7142857142857143rem;border-top: 1px solid #d9d9d9;border-bottom: 1px solid #d9d9d9;}
.search_default .search_default_hot p{float: left;border:1px solid #efeef3;padding:0 0.7142857rem;margin:0 1.07142rem 1.42857rem 0;border-radius: 12px;height: 1.71428rem;line-height: 1.71428rem;color: #555555;}
               /*///////////////////////////////////////////////添加样式///////////////////////////////////*/
.search_default_hot .search_default_hot_p_color p{color: #04BE02;}
.hot_tj{border-top: 1px solid #d9d9d9;line-height: 2.785714285714286rem;}
.hot_tj a{display: inline-block;width: 8.142857142857143rem;text-align: center;border-left: 1px dashed #d9d9d9;line-height: 1.428571428571429rem;}
.hot_tj a:nth-child(1){border: none;}
#hotword_view div:nth-child(1){border-top: none;}
.hot_tj .hot_color{color: #ff2244;}
.hot_color .hot_color_1{position: relative;}
.hot_color .hot_color_1 span{height: 0.5714285714285714rem;width: 0.5714285714285714rem;background: url(/static/images/search_hot01.png) no-repeat;background-size: 100%;position: absolute;right: -0.5714285714285714rem;top: -0.1428571428571429rem;}
.hot_seach{background: #efeef4;line-height: 2.5rem;}
#search_page_run{display: none;}
.loading_end{color: #888888;color: #888888;font-size: 1rem;line-height: 2.71rem;height: 3.71rem;width: 100%;text-align: center;}

.rest_btn{width: 50%;display: inline-block;border: none;background:#fff ;color:#fb6165;font-size: 1.285714285714286rem;line-height: 3.00000000000000rem;-webkit-appearance: none;}
.time_choice{background: #f8f8f8;height:3.42857142857143rem;box-sizing: border-box;position: relative;}
.time_choice span{display: inline-block;width:5.71428571428571rem;font-size: 1rem;height: 3.42857142857143rem;line-height: 3.42857142857143rem;color: #757575;text-align: center;font-weight: bold;box-sizing: border-box;}
.choiced{color:#fb6165!important;}
</style>
<style type="text/css">
	.new_price{line-height:4.285714285714286rem;}
	.new_decs{border-bottom: 1px solid #f5f5f9;}
	.new_content_desc{font-size: 0.9285714285714286rem!important;line-height: normal!important;width: 90%;-webkit-line-clamp:2;display: -webkit-box;-webkit-box-orient: vertical;overflow: hidden;}
	.new_sign{box-sizing: border-box;height: 2.00000000000000rem;padding: 0;padding-left: 7.14285714285714rem;}
	.new_sign span{display: inline-block;height: 1.35714285714286rem;line-height: 1.35714285714286rem;vertical-align:middle;margin-right: 0.35714285714286rem}
	.new_mingejz{width:3.42857142857143rem;background: url(/static/images/newRun_icon.png)no-repeat 0 -0.28571428571429rem;background-size:3.39285714285714rem 4.35714285714286rem;}
	.new_jz{width:3.42857142857143rem;background: url(/static/images/newRun_icon.png)no-repeat 0 -1.78571428571429rem;background-size:3.39285714285714rem 4.35714285714286rem;}
	.new_qidai{width:3.03571428571429rem;background: url(/static/images/newRun_icon.png)no-repeat 0 -3.21428571428571rem;background-size:3.39285714285714rem 4.35714285714286rem;}
	.qidai_desc{font-size: 0.85714285714286rem}
	.orange,.orange_price{color: #fb6165!important}
	.midle_width{width: 14.28571428571429rem!important}
</style>

<!--<div class="bm_attend">
	<div><span class="orange">￥</span><span class="orange_price">399</span><span class="orange">起/人</span><del class="orange_yj">499</del> <span class="orange_text">单纯赛事报名</span><span class="orange_type">半马</span></div>
	<div style="overflow: hidden;"><span class="attend_num">已报150</span></div>
</div>-->
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
        <a style="display: inline-block;" href="javascript:" class="weui_search_cancel" id="search_cancel">搜索</a>
    </div>
    <div id="page1" style="display: flex;display: -webkit-flex;display: -webkit-box;display: -ms-flexbox;background: #FFFFFF;border-bottom: 1px solid #EFEEF3;">
    <div style="flex: 1;-webkit-flex: 1;-moz-box-flex: 1;-webkit-box-flex:1" class="filter_section flexBox" id="filter_section">
	    	<div class="flex_1 filter_cell">
	           <div class="flexBox selected_bar" style="width: width: 5.55rem;text-align: center;text-align: center">
	            	<span><p class="flex_1 search_class_bar" style="max-width: 3.21428571428571rem">类型</p><i style="line-height: 0.7142857142857143rem;width: 0.6428571428571429rem;"></i></span>
	            </div>
	            <div class="drop-down">
	                <div class="drop_content">
	                    <div class="Type_1">
	                		<div style="font-size: 1rem;">类型</div>
	                		<div style="margin-top: 0.5714285714285714rem;line-height: 2.714285714285714rem;">
	                			<span class="area_all area_all_curr">全部</span>
	                			<span class="area_all">马拉松</span>
	                			<span class="area_all">越野跑</span>
	                			<span class="area_all">接力赛</span>
	                			<span class="area_all">欢乐跑</span>
	                			<span class="area_all">铁人三项</span>
	                		</div>
	                	</div>
	                </div> 
	            </div>
	       </div>
	        <div class="flex_1 filter_cell btn_hid">
	            <div class="flexBox selected_bar"  style="width:5.55rem;text-align: center;text-align: center">
	           		<span style="display: inline-block;width: 1px;height: 1.142857142857143rem;background: #e6e5e6;margin: 0"></span>
	            	<span><p class="flex_1 search_area_bar" style="max-width:3.5rem;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;">国内</p><i style="line-height: 0.7142857142857143rem;width: 0.6428571428571429rem;"></i></span>
	            </div>
	            <div class="drop-down"> 
	            	<div class="area_kind">
	                		<span class="">热门</span>
	                		<span class="">国际</span>
	                		<span class="area_kind_curr">国内</span>
	                </div>
	                <div class="drop_content_2 flexBox">
	                	<div class="sf_scroll">
	                		<div class="sub_1">
	                    		<p class=" sub_type curr" lableFor="sub_2_1">全部国家</p>    
	                        	<!--<p class="sub_type " lableFor="sub_2_2">国内</p>-->                 
	                    	</div>
	                    	<div class="sub_sf">
	                    		<p class=" sub_type curr" lableFor="sub_2_1">全部城市</p>    
	                        	<!--<p class="sub_type " lableFor="sub_2_2">国内</p>-->                 
	                    	</div>
							<div class="hot_city">
	                    		<p class=" sub_type curr" lableFor="sub_2_1">热门</p> 
	                    	</div>
	                	</div>
	                    
	                    <div class="sub_2 flex_1">
	                        <div class="sub_2_2 sub_list curr">
	                           <!--<?php echo $_smarty_tpl->tpl_vars['domestic']->value;?>
-->
	                        </div>
	                        <div class="sub_2_1 sub_list">
	                            <?php echo $_smarty_tpl->tpl_vars['abroad']->value;?>

	                        </div>
	                        <div class="sub_2_3 sub_list">
								<p class="option_cell_area option_cell_area_curr">不限</p>
	                        	<p class="option_cell_area option_cell_area_curr">上海</p>
	                            <p class="option_cell_area option_cell_area_curr">北京</p>
	                            <p class="option_cell_area option_cell_area_curr">广州</p>
	                            <p class="option_cell_area option_cell_area_curr">杭州</p>
	                            <p class="option_cell_area option_cell_area_curr">沈阳</p>
	                            <p class="option_cell_area option_cell_area_curr">厦门</p>
	                            <p class="option_cell_area option_cell_area_curr">重庆</p>
	                            <p class="option_cell_area option_cell_area_curr">日本</p>
	                            <p class="option_cell_area option_cell_area_curr">美国</p>
	                        </div>
	                    </div>
	                </div>
	                <div style="height: 100%;background: #F8F8F8;position: relative;">
	                	<div style="position: fixed;width: 100%;bottom: 0;padding: 0px;box-sizing: border-box;">
	                		<input type="button" name="" class="rest_btn area_rest" id="" value="重置"><input class="weui_btn" style="color: white;background: #fb6165;width:50%;display: inline-block;border: none;border-radius: 0;margin: 0" type="button" name="" id="" value="确定" />
	                	</div>
	                	
	                </div>
	            </div>
	        </div>
	        <div class="flex_1 filter_cell btn_hid">
	            <div class="flexBox selected_bar" style="width: width: 5.55rem;text-align: center;text-align: center">
	           		<span style="display: inline-block;width: 1px;height: 1.142857142857143rem;background: #e6e5e6;margin: 0"></span>
	            	<span><p class="flex_1 search_time_bar" style="max-width:3.5rem;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;">时间</p><i style="line-height: 0.7142857142857143rem;width: 0.6428571428571429rem;"></i></span>
	            </div>
	            <div class="drop-down">
	                <div class="drop_content" style="height: 100%;">
		                <div class="time_choice">
			        		<span class="user_choice choiced" style="margin-left:6.25000000000000rem">近 期</span>
			        		<span class="user_choice" style="margin-left: 3.21428571428571rem">年 月</span>
			        		<div style="width: 5.71428571428571rem;height: 0.1428571428571429rem;background: #fb6165;position: absolute;bottom: 0;left: 6.25000000000000rem;"></div>
				        </div> 
	                	<div class="time_future" style="display: block">
	                		<div style="font-size: 1.071428571428571rem;">近期</div>
	                		<div style="margin-top: 0.5714285714285714rem;line-height: 2.714285714285714rem;">
	                			<span class="area_all area_all_curr">不限</span>
	                			<span class="area_all">未来三周</span>
	                			<span class="area_all">未来三个月</span>
	                		</div>
	                	</div>
	                	<div class="YandM" style="display: none">
		                	<div class="time_year">
		                		<div style="font-size: 1.071428571428571rem;">年度</div>
		                		<div style="margin-top: 0.5714285714285714rem;line-height: 2.714285714285714rem;">
		                			<span class="area_all area_all_curr">全部</span>
		                			<span class="area_all">2016</span>
		                			<span class="area_all">2017</span>
		                			<span class="area_all">2018</span>
		                		</div>
		                	</div>
		                	<div class="time_month">
		                		<div style="font-size: 1.071428571428571rem;">月份</div>
		                		<div style="margin-top: 0.5714285714285714rem;line-height: 2.714285714285714rem;">
		                			<span class="area_all area_all_curr">全部</span>
		                			<span class="area_all">1月</span>
		                			<span class="area_all">2月</span>
		                			<span class="area_all">3月</span>
		                			<span class="area_all">4月</span>
		                			<span class="area_all">5月</span>
		                			<span class="area_all">6月</span>
		                			<span class="area_all">7月</span>
		                			<span class="area_all">8月</span>
		                			<span class="area_all">9月</span>
		                			<span class="area_all">10月</span>
		                			<span class="area_all">11月</span>
		                			<span class="area_all">12月</span>
		                		</div>
		                	</div>
	                	</div>
	                	<div class="time_btn">
	                		<input type="button" name="" class="rest_btn time_rest" id="" value="重置"><input class="weui_btn" style="color: white;background: #fb6165;width:50%;display: inline-block;border: none;border-radius: 0;margin: 0" type="button" name="" id="" value="确定" />
	                	</div>
	                </div> 
	            </div>
	        </div>
	        <div class="flex_1 filter_cell btn_hid">
	            <div class="flexBox selected_bar" style="width: width: 5.55rem;text-align: center;text-align: center">
	            	<span style="display: inline-block;width: 1px;height: 1.142857142857143rem;background: #e6e5e6;margin: 0"></span>
	            	<span><p class="flex_1 search_state_bar">更多</p><i style="line-height: 0.7142857142857143rem;width: 0.6428571428571429rem;"></i></span>
	            </div>
	            <div class="drop-down">
	                <div class="drop_content" style="font-size: 0.8571428571428571rem;background: #F8F8F8;height: 100%;">
	                	<!--<div class="bmzt" style="overflow: hidden;box-sizing: border-box;padding: 0.7142857142857143rem 0.6428571428571429rem;border-bottom: 1px solid #d9d9d9;">
	                		<span><i class="bmzt_icon"><div></div></i><span style="float: left;margin-left: 0.7142857142857143rem;margin-right: 1.785714285714286rem;">正在报名</span></span>
	                		<span class=""><i class="bmzt_icon"><div></div></i><span style="float: left;margin-left: 0.7142857142857143rem;">即将截止</span></span>
	                		
	                	</div>-->
	                	<div class="game_state">
	                		<div style="font-size: 1.071428571428571rem;">赛事状态</div>
	                		<div style="margin-top: 0.5714285714285714rem;line-height: 2.714285714285714rem;">
	                			<span class="area_all area_all_curr">全部</span>
	                			<span class="area_all">准备报名</span>
	                			<span class="area_all">正在报名</span>
	                			<span class="area_all">名额紧张</span>
	                			<span class="area_all">即将截止</span>
	                		</div>
	                	</div>
	                	<!-- <div class="Distance">
	                		<div style="font-size: 1.071428571428571rem;">跑步距离</div>
	                		<div style="margin-top: 0.5714285714285714rem;line-height: 2.714285714285714rem;">
	                			<span class="area_all area_all_curr">全部</span>
	                			<span class="area_all">全马</span>
	                			<span class="area_all">半马</span> -->
	                			<!--<span class="area_all">10公里以内</span>
	                			<span class="area_all">10-20公里</span>
	                			<span class="area_all">20-40公里</span>
	                			<span class="area_all">全马以上</span>-->
	                	<!-- 	</div>
	                	</div> -->
	                	<!--<div class="Area">
	                		<div style="font-size: 1rem;">地区</div>
	                		<div style="margin-top: 0.5714285714285714rem;line-height: 2.714285714285714rem;">
	                			<span class="area_all">全部</span>
	                			<span class="area_all">国际</span>
	                			<span class="area_all area_all_curr">国内</span>
	                		</div>
	                	</div>-->
	                	<!--<div class="kind">
	                		<div style="font-size: 1.071428571428571rem;">类型</div>
	                		<div style="margin-top: 0.5714285714285714rem;line-height: 2.714285714285714rem;">
	                			<span class="area_all area_all_curr">全部</span>
	                			<span class="area_all">家庭</span>
	                			<span class="area_all">专业级</span>
	                			<span class="area_all">入门者</span>
	                			<span class="area_all">情侣</span>
	                			<span class="area_all">好友</span>
	                		</div>
	                	</div>-->
	                	<div class="more_btn">
	                		<input type="button" name="" class="rest_btn more_rest" id="" value="重置"><input class="weui_btn" style="color: white;background: #fb6165;width:50%;display: inline-block;border: none;border-radius: 0;margin: 0" type="button" name="" id="" value="确定" />
	                	</div>
	                	
	                    <!--<!--<p class="option_cell option_curr" search-type="time">正在报名</p>
	                    <!-- <p class="option_cell" search-type="time">即将开始</p> -->
	                    <!--<p class="option_cell" search-type="time">报名结束</p>-->
	                </div>
	            </div>
	        </div>
    	</div>
    	<div style="padding-top: 0.7142857142857143rem;background: #FFFFFF;width: 4.285714285714286rem;margin-right: 1rem;">
    		<span class="search_bar" style="display: inline-block;width: 1.178571428571429rem;height: 1.178571428571429rem;padding-right: 0.5714285714285714rem;"><img style="width: 100%;height: 100%;" src="/static/images/new_index_1.png"/></span>
    		<span style="display: inline-block;width: 1px;height: 1.142857142857143rem;background: #e6e5e6;"></span>
    		<a href="/User"><span style="display: inline-block;width: 1.178571428571429rem;height: 1.178571428571429rem;padding: 0 0 0 0.5714285714285714rem;"><img style="width: 100%;height: 100%;" src="/static/images/new_index_2.png"/></span></a>
    	</div>
     </div>
     <div class="search_section" id="search_page_run">
        <div class="search_default">
        	<div class="search_default_title_bar">
                <div class="title flexBox hot_seach"><p class="title_word">热门搜索推荐</p></div>
            </div>
            <div class="search_default_hot" id="hotword">
            	<div id="hotword_view" style="overflow: hidden;">
	                <?php if (count($_smarty_tpl->tpl_vars['hotwords']->value)>=1){?>
	                	<div class="hot_tj">
		                <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hotwords']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
		                	<?php if ($_smarty_tpl->tpl_vars['key']->value%3==0&&$_smarty_tpl->tpl_vars['key']->value!=0){?>
		                		</div>
		                		<div class="hot_tj">
		                	<?php }?>
				                <?php if ($_smarty_tpl->tpl_vars['i']->value['sign']==1){?>
				                <a class="hot_color" href="/Search?ws=<?php echo $_smarty_tpl->tpl_vars['i']->value['n_title'];?>
&type=1"><span class="hot_color_1"><?php echo $_smarty_tpl->tpl_vars['i']->value['n_title'];?>
<span></span></span></a>
				                <?php }else{ ?>
	                 			<a href="/Search?ws=<?php echo $_smarty_tpl->tpl_vars['i']->value['n_title'];?>
&type=1"><?php echo $_smarty_tpl->tpl_vars['i']->value['n_title'];?>
</a>
				                <?php }?>
		                <?php } ?>
		                </div>
                 	<?php }?>
                 		
                 </div>
            </div>
        </div>
    </div>
     <!--<div id="page2" style="height: 4.285714285714286rem;width: 100%;background: #FFFFFF;"></div>-->
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
                <h4 class="weui_media_title flex"><p class="S_overhiden"><?php echo $_smarty_tpl->tpl_vars['i']->value['m_name'];?>
</p>
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
        <?php }else{ ?>-->
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
    </div>
    <!--<div class="jz_more" style="text-align: center;background: #FFFFFF;border-top: 1px solid #F5F5F9;">加载更多</div>-->
    <!--<?php echo $_smarty_tpl->getSubTemplate ('Comon/nuomihotlist.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('type'=>'vertical'), 0);?>
-->
</div>
<div class="back_top" onclick="goTop(0.2,16);return false;"></div>
<script src="/static/js/zepto.js"></script>
<script src="/static/weui/js/weui.js"></script>
<script type="text/javascript">
weui.search_bar.init();
var _type='全部类型',_time='',game_state='全部',Distance='全部',Area='全部城市',time_future = "";
var _type_t='全部类型',_time_t='',game_state_t='全部',Distance_t='全部',Area_t='全部城市',time_future_t = "";
var time_year='全部',time_month='全部';
var _timepage = 1;	
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
        })
        $('.Type_1 span').unbind('click');
        $('.Type_1 span').bind('click',function () {
        	$('.touch_mask').remove();
        	var $this = $(this);
        	$this.siblings().removeClass("area_all_curr");
        	$this.parents(".filter_cell").removeClass("curr_filter").find(".selected_bar p").html($(this).html());
        	$this.addClass("area_all_curr");
        	$('body').css('overflow','visible');
        	$('.wrap').css('height','100%');
    		$('.wrap').css('overflow','visible');
    		bolean=true;
    		if(time_year=='全部'){
				_time='';
				$('.search_time_bar').html('时间');
			}else if(time_month=='全部'){
				$('.search_time_bar').html(time_year);
				_time=time_year;
			}else{
				$('.search_time_bar').html(time_month);
				if(time_month.length>2){
					time_month_1=time_month.substring(0,time_month.length-1);
					_time=time_year+'-'+time_month_1;
				}else{
					time_month_1=time_month.substring(0,1);
					_time=time_year+'-0'+time_month_1;
				}
			}
			if(Area == '不限' || Area==''){
				$('.search_area_bar').html('热门');
				Area = '';
			}else{
				if(Area == '全部国家'){
					$('.search_area_bar').html('国际');
				}else if(Area == '全部城市'){
					$('.search_area_bar').html('国内');
				}else{
					$('.search_area_bar').html(Area);
				}
			}

    		if($(this).html()=='全部'){
    			_type='全部类型';
    		}else{
    			_type=$(this).html();
    		}
    		Distance_t = Distance;
    		Area_t = Area;
    		game_state_t = game_state;
    		time_future_t = time_future;
    		_time_t = _time;
    		if(_timepage == 2){
    			$('.time_future span').eq(0).addClass('area_all_curr').siblings().removeClass('area_all_curr');
				time_future='';
				time_future_t = time_future;
				search_2(_type,_time_t,Distance_t,Area_t,game_state_t,time_future_t);
			}else{
				$('.time_year span').eq(0).addClass('area_all_curr').siblings().removeClass('area_all_curr');
				$('.time_month span').eq(0).addClass('area_all_curr').siblings().removeClass('area_all_curr');
				if(time_future_t==""){
					$('.search_time_bar').html('时间');
				}else{
					$('.search_time_bar').html(time_future_t);
				}
				_time = '';
				_time_t = _time;
				search_2(_type,_time_t,Distance_t,Area_t,game_state_t,time_future_t);
			}
        })
    })
    var bolean=true;
    var this_htm='';
    $(".selected_bar").bind('touchend',function(){
    	var htr='<div class="touch_mask"></div>';
    	$('body').append(htr);
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
            $('.touch_mask').remove();
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
//function _area(e) {
//	var _area=e.innerHTML;
//	$(".search_area_bar").html(_area);
//	search_1();
//}
////////////////////////////////////////////////////////////////////分页
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
		if(aa<0.7&&scroll_lenth>=10*(_scroll_page+1)){
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
var now = "<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
";
$(function () {
	$('.search_bar').click(function () {
		$('.weui_search_bar').css({'display':'flex','display':'-webkit-flex','display':'-webkit-box'})
		$('#page1').css('display','none');
		$('.hot_matchs ').css('display','none');
		$('#page2').css('display','none');
		$('.search_result').css('display','none');
		$('#search_page_run').show();
		$('.wrap').css('z-index','1000');
		if($('.jz_more').attr('data-show')=='show'){
			$('.jz_more').css('display','none');
		}
	})
	$('#search_goback').click(function () {
		$('.wrap').css('z-index','inherit');
		$('#search_page_run').hide();
		$('.weui_search_bar').css('display','none')
		$('#page1').css('display','flex');
		$('#page1').css({'display':'-webkit-flex','display':'-webkit-box'});
		$('.hot_matchs ').css('display','block');
		$('#page2').css('display','block');
		$('.search_result').css('display','block');
		if($('.jz_more').attr('data-show')=='show'){
			$('.jz_more').css('display','block');
		}else{
			$('.jz_more').css('display','none');
		}

	})
})
$(function () {
	///////////////////地区筛选/////////////////////////
	$('.area_kind span').unbind('touchend');
	$('.area_kind span').bind('touchend',function () {
		$(this).siblings().removeClass('area_kind_curr');
		$(this).addClass('area_kind_curr');
		$('.option_cell_area').siblings().removeClass('option_cell_area_curr');
		$('.sub_sf p').siblings().removeClass('curr');
		$('.sub_2_2').html('');
		if($(this).html()=='国际'){
			$('.sub_1').show();
			$('.sub_sf').hide();
			$('.sub_2_2').hide();
			$('.sub_2_1').show();
			$('.sub_2_3').hide();
			$('.hot_city').hide();
		}
		if($(this).html()=='国内'){
			$('.sub_1').hide();
			$('.sub_sf').show();
			$('.sub_2_1').hide();
			$('.sub_2_2').show();
			$('.sub_2_3').hide();
			$('.hot_city').hide();
		}
		if($(this).html()=='热门'){
			$('.sub_1').hide();
			$('.sub_sf').hide();
			$('.sub_2_1').hide();
			$('.sub_2_2').hide();
			$('.sub_2_3').show();
			$('.hot_city').show();
		}
		Area=$(this).html();
		if(Area=='热门'){
			Area='';
		}
	})
//	$('.option_cell_area').unbind('tap');
	if ((navigator.userAgent.match(/(phone|pad|pod|iPhone|iPod|ios|iPad|Android|Mobile|BlackBerry|IEMobile|MQQBrowser|JUC|Fennec|wOSBrowser|BrowserNG|WebOS|Symbian|Windows Phone)/i))) {
			$('.option_cell_area').live('tap',function () {
				$(this).siblings().removeClass('option_cell_area_curr');
				$(this).addClass('option_cell_area_curr');
				Area=$(this).html();
			})
		}else{
			$('.option_cell_area').live('click',function () {
				$(this).siblings().removeClass('option_cell_area_curr');
				$(this).addClass('option_cell_area_curr');
				Area=$(this).html();
			})
		}
	
	
	
//////////////////	时间筛选
	$('.user_choice').bind('touchend',function(){
		$(this).addClass('choiced');
		$(this).siblings().removeClass('choiced');
		var _index = $(this).index();
		if(_index){
			_timepage = 2;
			$('.time_choice div').animate({'left':'15.50000000000000rem'},200);
			$('.YandM').css('display','block');
			$('.time_future').css('display','none');
		}
		else{
			$('.time_choice div').animate({'left':'6.25000000000000rem;'},200);
			_timepage = 1;
			$('.YandM').css('display','none');
			$('.time_future').css('display','block');
			
		}

	})
//  年月日筛选
	
	
	$('.time_year span').unbind('touchend');
	$('.time_year span').bind('touchend',function () {
		$(this).siblings().removeClass("area_all_curr");
		$(this).addClass("area_all_curr");
		time_year=$(this).html();
	})
	$('.time_month span').unbind('touchend');
	$('.time_month span').bind('touchend',function () {
		$(this).siblings().removeClass("area_all_curr");
		$(this).addClass("area_all_curr");
		time_month=$(this).html();
	})

//  筛选近期
	$('.time_future span').unbind('touchend');
	$('.time_future span').bind('touchend',function () {
		$(this).siblings().removeClass("area_all_curr");
		$(this).addClass("area_all_curr");
		if($(this).html() == '不限'){
			time_future='';
		}else{
			time_future = $(this).html();
		}
	})


    	/////////////////////////////////////更多筛选////////////////////////////////////
    	$('.game_state span').unbind('touchend');
		$('.game_state span').bind('touchend',function () {
			$(this).siblings().removeClass("area_all_curr");
			$(this).addClass("area_all_curr");
			game_state=$(this).html();
		})
    	
//  	var kind='全部类型';
//  	/////////////////////////////////////更多筛选////////////////////////////////////
//  	$('.kind span').unbind('click');
//		$('.kind span').bind('click',function () {
//			$(this).siblings().removeClass("area_all_curr");
//			$(this).addClass("area_all_curr");
//			if($(this).html()=='全部'){
//				kind='全部类型';
//				return false;
//			}
//			kind=$(this).html();
//		})
    	
    
    	/////////////////////////////////////更多筛选////////////////////////////////////
    	$('.Distance span').unbind('touchend');
		$('.Distance span').bind('touchend',function () {
			$(this).siblings().removeClass("area_all_curr");
			$(this).addClass("area_all_curr");
			Distance=$(this).html();
		})

		// 地区筛选重置
		$('.area_rest').unbind('touchend');
		$('.area_rest').bind('touchend',function(){
			var _restarea='国内';
			if(get("p_type")==2){
				_restarea = '国际'
			}
	
			$('.option_cell_area').siblings().removeClass('option_cell_area_curr');
			$('.sub_sf p').siblings().removeClass('curr');
			$('.sub_2_2').html('');
			if(_restarea=='国际'){
				$('.area_kind span').eq(1).addClass('area_kind_curr').siblings().removeClass('area_kind_curr');
				$('.sub_2')[0].scrollTop=0;
				$('.sub_1').show();
				$('.sub_sf').hide();
				$('.sub_2_2').hide();
				$('.sub_2_1').show();
				Area = '国际';
			}
			if(_restarea=='国内'){
				$('.area_kind span').eq(2).addClass('area_kind_curr').siblings().removeClass('area_kind_curr');
				$('.sf_scroll')[0].scrollTop=0;
				$('.sub_1').hide();
				$('.sub_sf').show();
				$('.sub_2_1').hide();
				$('.sub_2_2').show();
				Area = '国内';
			}
		})

		// 时间筛选重置
		$('.time_rest').unbind('touchend');
		$('.time_rest').bind('touchend',function(){
			if(_timepage == 1){
				$('.time_future span').eq(0).addClass('area_all_curr').siblings().removeClass('area_all_curr');
				time_future='';
			}else{
				$('.time_year span').eq(0).addClass('area_all_curr').siblings().removeClass('area_all_curr');
				$('.time_month span').eq(0).addClass('area_all_curr').siblings().removeClass('area_all_curr');
				time_year='全部';
				time_month='全部';
			}
			
		})

		// 更多筛选重置
		$('.more_rest').unbind('touchend');
		$('.more_rest').bind('touchend',function(){
			$('.game_state span').eq(0).addClass('area_all_curr').siblings().removeClass('area_all_curr');
			game_state=$('.game_state span').eq(0).html();
			$('.Distance span').eq(0).addClass('area_all_curr').siblings().removeClass('area_all_curr');
			Distance=$('.game_state span').eq(0).html();
		})


		$('.weui_btn').unbind('touchend');
		$('.weui_btn').bind('touchend',function () {
			if(time_year=='全部'){
				_time='';
				$('.search_time_bar').html('时间');
			}else if(time_month=='全部'){
				$('.search_time_bar').html(time_year);
				_time=time_year;
			}else{
				$('.search_time_bar').html(time_month);
				if(time_month.length>2){
					time_month_1=time_month.substring(0,time_month.length-1);
					_time=time_year+'-'+time_month_1;
				}else{
					time_month_1=time_month.substring(0,1);
					_time=time_year+'-0'+time_month_1;
				}
			}
			if(Area=='不限' || Area == ''){
				$('.search_area_bar').html('热门');
				Area='';
			}
			else if(Area=='国际' || Area=='全部国家'){
				$('.search_area_bar').html('国际');
				Area='全部国家';
			}
			else if(Area=='国内' || Area=='全部城市'){
				$('.search_area_bar').html('国内');
				Area='全部城市';
			}
			else{
				$('.search_area_bar').html(Area);
			}
//			$('.search_area_bar').html('地区');
//			$('.search_class_bar').html(Type);
//			var shengfen_='';
//			var city='';
			$('.btn_hid').removeClass('curr_filter');
			$('body').css('overflow','visible');
        	$('.wrap').css('height','100%');
    		$('.wrap').css('overflow','visible');
    		
    		Distance_t = Distance;
    		Area_t = Area;
    		game_state_t = game_state;
    		time_future_t = time_future;
    		_time_t = _time;

    		if(_timepage == 2){
    			$('.time_future span').eq(0).addClass('area_all_curr').siblings().removeClass('area_all_curr');
				time_future='';
				time_future_t = time_future;
				search_2(_type,_time_t,Distance_t,Area_t,game_state_t,time_future_t);
			}else{
				$('.time_year span').eq(0).addClass('area_all_curr').siblings().removeClass('area_all_curr');
				$('.time_month span').eq(0).addClass('area_all_curr').siblings().removeClass('area_all_curr');
				if(time_future_t==""){
					$('.search_time_bar').html('时间');
				}else{
					$('.search_time_bar').html(time_future_t);
				}
				_time = '';
				_time_t = _time;
				search_2(_type,_time_t,Distance_t,Area_t,game_state_t,time_future_t);

			}
			setTimeout(function () {
				$('.touch_mask').remove();
			},400)
//			if(Area=='全部国家'){
//				shengfen_+='<p class="sub_type_1">海外</p>'
//				for (var i=0;i<addr_arr[45055].length;i++) {
//					city+='<p class="option_cell">'+addr_arr[45055][i][1]+'</p>'
//				}
//				$('.sub_1').html(shengfen_);
//				$('.sub_1 p:nth-child(1)').addClass('option_curr');
//				$('.sub_2_2').html(city);
//				$('.sub_2_2 p:nth-child(1)').addClass('option_curr');
//			}
//			else{
//				for (var i=0;i<addr_arr[0].length-1;i++) {
//					shengfen_+='<p class="sub_type_1" pid="'+addr_arr[0][i][0]+'">'+addr_arr[0][i][1]+'</p>'
//				}for (var i=0;i<addr_arr[1].length;i++) {
//					city+='<p class="option_cell">'+addr_arr[1][i][1]+'</p>'
//				}
//				$('.sub_1').html(shengfen_);
//				$('.sub_1 p:nth-child(1)').addClass('option_curr');
//				$('.sub_2_2').html(city);
//				$('.sub_2_2 p:nth-child(1)').addClass('option_curr');
//			}
		})
})
var search_2 = function (_type,_time,_class,_area,_game_state,coming_times){
	var data = {};
//	data.search_order_bar = $(".search_order_bar").html();
	data.search_time_bar = _time;
	data.search_class_bar = _class;
	data.search_area_bar = _area;
	data.search_game_state_bar = _game_state;
	data.search_type_bar=_type;
	data.search_coming_times = coming_times
//	data.search_kind_bar =_kind;
//	data.search_state_bar = $(".search_state_bar").html();
	weui.Loading.show("加载中");
	$.ajax({
        cache: false,
        url:"/Search/screenv2?ws=",
        type: "POST",
        dataType: "json",
        data:data,
        timeout:3000,
        success: function(data){
        	var htmlStr = '<div style="background:#ffffff;"><div class="center_cell empty"><div class="emptyImg"><img src-img="/static/images/empty.png" alt=""></div><p><a></a></p></div><p class="emputy_keyword">没有跑步赛事与您的筛选条件<span style="color:#fb6165"></span>匹配</p><div class="reset_select"><span class="weui_btn" style="background:#fb6165">重置筛选</span></div></div>';
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
					var _signHTML = "";
					if(time<=7&&list[key].m_untilTime>now&&list[key].m_placesleft>0){
						_signHTML='<span class="new_jz"></span>'
						jz='<div class="nuomi_7 jz"></div>'
					}
					if(time>7){
						_signHTML=''
						jz=''
					}
					if(list[key].m_untilTime<=now){
						_signHTML=''
						jz=''
					}
					if(list[key].m_placesleft<=0){
						_signHTML=''
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
                	if(list[key].m_releaseTime >now || list[key].m_signuptime>now){
						var start_time=list[key].m_signuptime;
						var start_time=start_time.substring(0,10);
						var innerhtr='<div class="qidaiz"><span class="qidai"></span><span class="star_time">开始报名时间: '+start_time+'</span></div>';
	                	if(list[key].m_entermode == "remote"){
	                		htmlStr+='<a href="'+list[key].m_enterurl+'&platform=zx-tour">';
	                	}else{
	                		htmlStr+='<a href="/Matchinfo?m_id='+list[key].id+'&platform=zx-tour" class="list_a">';
	                	}
	                	var infolist =  list[key]['info'];
	                	var sourceHTML = "";
						for(var m_i=0,len=infolist.length;m_i<len;m_i++){
							var stock=parseInt(infolist[m_i]['g_stock']-infolist[m_i]['g_stockleft']);
							var g_id_last=infolist[m_i]['id'].substring(infolist[m_i]['id'].length-1);
							if(infolist[m_i].g_currprice>=1){
								infolist[m_i]['g_currprice']=Math.round(infolist[m_i]['g_currprice']);
							}
							sourceHTML = '<div><span class="orange">￥</span><span class="orange_price">'+infolist[m_i]['g_currprice']+'</span><span class="orange">起</span></div>';
						}
						var signuptime = list[key].m_signuptime.split(' ')[0];
						var _expectHTML = '<span class="new_qidai"></span><span class="qidai_desc">开始报名时间:'+ signuptime +'</span>';

						htmlStr+='<div class="weui_media_box weui_media_appmsg"><div class="weui_media_hd"><img class="weui_media_appmsg_thumb" src-img="'+list[key].m_img+'" alt=""></div><div class="weui_media_bd new_decs midle_width"><h4 class="weui_media_title flex"><p class="S_overhiden cuur">'+list[key].m_name+'</p></h4><p class="new_content_desc">'+list[key].m_des+'</p><p class="weui_media_desc weui_media_desc_padding" style="margin-bottom: 0.35714285714286rem">'+m_gametime+' '+city+' '+list[key].m_mtypes_class+' '+m_mtypes+'</p></div><div class="nm_view new_price">'+sourceHTML+'</div></div><div class="bm_attend new_sign">'+_expectHTML+'</div></a>';
                	}
                	////////////////////比赛结束////////////////////////////
                	else if(end_time<now_time){
                		var minge='<div class="nuomi_7 bsjs"></div>';
	                	if(list[key].m_entermode == "remote"){
	                		htmlStr+='<a href="'+list[key].m_enterurl+'&platform=zx-tour"><div class="weui_media_box weui_media_appmsg">';
	                	}else{
	                		htmlStr+='<a href="/Matchinfo?m_id='+list[key].id+'&platform=zx-tour" class="list_a"><div class="weui_media_box weui_media_appmsg">';
	                	}
                		htmlStr+='<div class="weui_media_hd"><img class="weui_media_appmsg_thumb" src-img="'+list[key].m_img+'" alt=""></div><div class="weui_media_bd midle_width"><h4 class="weui_media_title flex"><p class="S_overhiden cuur">'+list[key].m_name+'</p></h4><p class="new_content_desc">'+list[key].m_des+'</p><p class="weui_media_desc weui_media_desc_padding">'+m_gametime+' '+city+' '+list[key].m_mtypes_class+' '+m_mtypes+'</p></div><div class="nm_view">'+minge+jz+'</div></div></a>';	
                	}
                	///////////////////////////////// 名额已满/////////////////////////////////
                	else if(list[key].m_placesleft<=0 || list[key].m_untilTime<now){
                		var minge='<div class="nuomi_7 meym"></div>';
	                	if(list[key].m_entermode == "remote"){
	                		htmlStr+='<a href="'+list[key].m_enterurl+'&platform=zx-tour"><div class="weui_media_box weui_media_appmsg">';
	                	}else{
	                		htmlStr+='<a href="/Matchinfo?m_id='+list[key].id+'&platform=zx-tour" class="list_a"><div class="weui_media_box weui_media_appmsg">';
	                	}
						htmlStr+='<div class="weui_media_hd"><img class="weui_media_appmsg_thumb" src-img="'+list[key].m_img+'" alt=""></div><div class="weui_media_bd midle_width"><h4 class="weui_media_title flex"><p class="S_overhiden cuur">'+list[key].m_name+'</p></h4><p class="new_content_desc">'+list[key].m_des+'</p><p class="weui_media_desc weui_media_desc_padding">'+m_gametime+' '+city+' '+list[key].m_mtypes_class+' '+m_mtypes+'</p></div><div class="nm_view">'+minge+jz+'</div></div></a>';
                	}else{
                		////////////////////////三个状态标签//////////////////////////////////////////////////
	                	if(list[key].m_placesleft<=20){
								 _signHTML+='<span class="new_mingejz"></span>';
						}
	                	if(list[key].m_entermode == "remote"){
	                		htmlStr+='<a href="'+list[key].m_enterurl+'&platform=zx-tour">';
	                	}else{
	                		htmlStr+='<a href="/Matchinfo?m_id='+list[key].id+'&platform=zx-tour" class="list_a">';
	                	}
	                	var infolist =  list[key]['info'];
	                	// var mealHTML = "";
	                	var sourceHTML = "";
						for(var m_i=0,len=infolist.length;m_i<len;m_i++){
							var stock=parseInt(infolist[m_i]['g_stock']-infolist[m_i]['g_stockleft']);
							var g_id_last=infolist[m_i]['id'].substring(infolist[m_i]['id'].length-1);
							// if(g_id_last==0){
							// 	stock=parseInt(infolist[m_i]['g_stock']-infolist[m_i]['g_stockleft'])+6;
							// }else{
							// 	stock=parseInt(infolist[m_i]['g_stock']-infolist[m_i]['g_stockleft'])+parseInt(g_id_last);
							// }
							if(infolist[m_i].g_currprice>=1){
								infolist[m_i]['g_currprice']=Math.round(infolist[m_i]['g_currprice']);
							}
							// if(sourceHTML=="" && infolist[m_i]['g_type']==1 && parseInt(infolist[m_i]['g_currprice'])!=0){
//								sourceHTML = '<div><span class="orange">￥</span><span class="orange_price">'+infolist[m_i]['g_currprice']+'</span><span class="orange">起/人</span><del class="orange_yj">'+infolist[m_i]['g_currprice']+'</del> <span class="orange_text">'+infolist[m_i]['g_name']+'</span></div><div style="overflow: hidden;"><span class="attend_num">已报'+stock+'</span></div>';
							sourceHTML = '<div><span class="orange">￥</span><span class="orange_price">'+infolist[m_i]['g_currprice']+'</span><span class="orange">起</span></div>';			
							// }
	
							// if(mealHTML=="" && infolist[m_i]['g_type']==2 && infolist[m_i]['g_name']!="赛事单独报名"){
							// 	mealHTML = '<div><span class="orange">￥</span><span class="orange_price">'+infolist[m_i]['g_currprice']+'</span><span class="orange">起</span><del class="orange_yj">'+infolist[m_i]['g_currprice']+'</del> <span class="orange_text">'+infolist[m_i]['g_name']+'</span></div><div style="overflow: hidden;"><span class="attend_num">已报'+stock+'</span></div>';
							// }
						}
						
						// if(sourceHTML==""){
						// htmlStr+='<div class="weui_media_hd"><img class="weui_media_appmsg_thumb" src-img="'+list[key].m_img+'" alt=""></div><div class="weui_media_bd"><h4 class="weui_media_title flex"><p class="S_overhiden cuur">'+list[key].m_name+'</p></h4><p class="weui_media_desc">'+list[key].m_des+'</p><p class="weui_media_desc weui_media_desc_padding">'+m_gametime+' '+city+' '+list[key].m_mtypes_class+' '+m_mtypes+'</p></div><div class="nm_view">'+minge+jz+'</div></div></a>';

						// }else{
						if(_signHTML){
							htmlStr+='<div class="weui_media_box weui_media_appmsg"><div class="weui_media_hd"><img class="weui_media_appmsg_thumb" src-img="'+list[key].m_img+'" alt=""></div><div class="weui_media_bd new_decs midle_width"><h4 class="weui_media_title flex"><p class="S_overhiden cuur">'+list[key].m_name+'</p></h4><p class="new_content_desc">'+list[key].m_des+'</p><p class="weui_media_desc weui_media_desc_padding" style="margin-bottom: 0.35714285714286rem">'+m_gametime+' '+city+' '+list[key].m_mtypes_class+' '+m_mtypes+'</p></div><div class="nm_view new_price">'+sourceHTML+'</div></div><div class="bm_attend new_sign">'+_signHTML+'</div></a>';
						}else{
							htmlStr+='<div class="weui_media_box weui_media_appmsg"><div class="weui_media_hd"><img class="weui_media_appmsg_thumb" src-img="'+list[key].m_img+'" alt=""></div><div class="weui_media_bd new_decs midle_width"><h4 class="weui_media_title flex"><p class="S_overhiden cuur">'+list[key].m_name+'</p></h4><p class="new_content_desc">'+list[key].m_des+'</p><p class="weui_media_desc weui_media_desc_padding" style="margin-bottom: 0.35714285714286rem">'+m_gametime+' '+city+' '+list[key].m_mtypes_class+' '+m_mtypes+'</p></div><div class="nm_view new_price">'+sourceHTML+'</div></div></a>';
						}
						// }	
                	}
               }
                $(".search_result").html(htmlStr);
            }else{
            	//weui.Loading.error(data.msg,2000);
            	var _type1='',_area1='',_game_state1='',_class1='',_time1='';
            	if(_type=='全部类型'){
            		_type1='';
            	}else{
            		_type1=' + '+_type;
            	}
            	if(_area=='地区'){
            		_area1='';
            	}else{
            		if(_area=='全部城市'){
            			_area1=' + 国内';
            		}else if(_area=='全部国家'){
            			_area1=' + 国际';
            		}else{
            			_area1=' + '+_area;
            		}	
            	}
            	if(_game_state=='全部'){
            		_game_state1='';
            	}else{
            		_game_state1=' + '+_game_state;
            	}
            	if(_class=='全部'){
            		_class1='';
            	}else{
            		_class1=' + '+_class;
            	}
            	if(_time!=''){
            		_time1=' + '+_time;
            	}
            	var seach_keyword=_type1+_area1+_time1+_game_state1+_class1;
            	seach_keyword=seach_keyword.substring(2)+' ';
            	$(".search_result").html(htmlStr);
            	$('.emputy_keyword span').html(seach_keyword)
            	$('.wrap').css('background','#ffffff');
            }
            jz_more();
            ////////////////////重置滚动加载页数//////////////////////////
            _scroll_page=0;
            weui.Loading.hide(); 
        },
        error:function(){
           // weui.Loading.hide();
            weui.Loading.error("搜索错误！",2000);
        }
    });
}
$(function () {
	if (get("p_type")==2) {
		$('title').html('海外赛事');
		search_2('全部类型','全部','','全部国家','')
		$('.search_area_bar').html('国际');
		$('.area_kind span').siblings().removeClass('area_kind_curr');
		$('.area_kind span:nth-child(2)').addClass('area_kind_curr');
		$('.sub_type').html('全部国家');
		$('.sub_2_2').hide();
		$('.sub_2_1').show();
		$('.sub_sf').hide();
		$('.sub_1').show();
	}else{
		$('title').html('国内赛事');
		search_2('全部类型','全部','','全部城市','');
	}
	
	//////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////筛选二级列表/////////////////////////////////////////////
})
var citys = '<?php echo $_smarty_tpl->tpl_vars['domestic']->value;?>
';
var _sf=JSON.parse(citys);
$(function () {
	var sf_htr='';
	for (var i=0;i<_sf[0].length;i++) {
		sf_htr+='<p class=" sub_type" lablefor="sub_2_1" data-index="'+i+'">'+_sf[0][i]+'</p>';
	}
//	var reset_city='';
//	for (var i=0;i<_sf[1].length;i++) {
//		reset_city+='<p class="option_cell_area">'+_sf[1][i]+'</p>';
//	}
//$('.sub_2_2').html(reset_city);
	$('.sub_sf').html(sf_htr);
	$('.sub_sf p').bind('tap',function () {
		var city_htr='';
		var city_index=$(this).attr('data-index');
		for (var i=0;i<_sf[city_index].length;i++) {
			city_htr+='<p class="option_cell_area">'+_sf[city_index][i]+'</p>';
		}
		$(this).siblings().removeClass('curr');
		$(this).addClass('curr');
		Area=$(this).html();
		$('.sub_2_2').html(city_htr);
	})
	
	/////////////////////////////////重置筛选////////////////////////////////
	$('.reset_select span').live('tap',function () {
		window.history.go(0);
	})
})

/////////////////////////////////
//$('.drop-down').bind('click',function () {
//	$('.drop-down').parent().removeClass('curr_filter');
//	$('body').css('overflow','visible');
//  $('.wrap').css('height','100%');
//  $('.wrap').css('overflow','visible');
//  bolean=true;
//})
//$('.drop_content_2').click(function (e) {
//	e.stopPropagation();
//})
//$('.drop_content').click(function (e) {
//	e.stopPropagation();
//})
//$('.area_kind').click(function (e) {
//	e.stopPropagation();
//})

var BNJSReady = function (readyCallback) {
    if(readyCallback && typeof readyCallback == 'function'){  
        if(window.BNJS && typeof window.BNJS == 'object' && BNJS._isAllReady){
                 readyCallback();               
        }else{
             document.addEventListener('BNJSReady', function() {
                   readyCallback();
             }, false)
        }
    }
};
BNJSReady(function(){    
    // 添加分享按钮
    BNJS.ui.title.addActionButton({            
        tag: '123',
        text: '分享',
        icon: 'share',
        callback: function(){
            // 点击回调分享功能
            BNJS.ui.share({
                title : '糯米马拉松',
                content:"有名额，免抽签！",
                imgUrl : 'http://nuomi.zx-tour.com/static/images/195319221523194007.jpg',
                url : 'http://nuomi.zx-tour.com/',
                onSuccess : function(){
                    //alert('分享测试成功~')
                },
                onFail : function(){
                    //alert('分享测试失败~')
                }
            });
        }
    });
    // alert("#3");
    // // 设置A页面pageID为'a'
    // var url = 'bainuo://component?url=' + encodeURIComponent("http://192.168.1.140:8099");
    // BNJS .page.start(url);

    // // 返回堆栈指定页面，比如A->B->C->D，在D页面想返回A页面
    // BNJS.page.back('a');
    // 返回堆栈指定页面，比如A->B->C->D，在D页面想返回A页面
    // A页面调用BNJS.page.setPageId()接口设置A页面pageID
});
_hmt.push(['_trackEvent', "RUN事件", "展示", "RUN首页"]);
</script>
</body>
</html><?php }} ?>