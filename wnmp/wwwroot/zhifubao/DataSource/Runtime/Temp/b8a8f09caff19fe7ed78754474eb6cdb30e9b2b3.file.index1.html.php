<?php /* Smarty version Smarty-3.1.6, created on 2016-09-27 16:29:11
         compiled from "../DataSource/Tpl\Matchinfo\index1.html" */ ?>
<?php /*%%SmartyHeaderCode:2167357e250b0135dd6-44882989%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8a8f09caff19fe7ed78754474eb6cdb30e9b2b3' => 
    array (
      0 => '../DataSource/Tpl\\Matchinfo\\index1.html',
      1 => 1474964897,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2167357e250b0135dd6-44882989',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57e250b076b23',
  'variables' => 
  array (
    'info' => 0,
    'auths' => 0,
    'featureHTML' => 0,
    'scenicList' => 0,
    'varable' => 0,
    'remind' => 0,
    'now' => 0,
    'order' => 0,
    'btn' => 0,
    'uid' => 0,
    'meal' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e250b076b23')) {function content_57e250b076b23($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Comon/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<title>知行合逸</title>
<style>
.wrap{padding-bottom: 60px;    word-wrap: break-word;overflow: hidden;}
.banner{background: #FFF;margin-bottom: 5px;position: relative;}
.match_base{background: #FFF;padding:0 1.21428rem;margin:0  auto 0.7142857142857143rem;/*padding-bottom: 1.071428571428571rem;*/}
.match_base .flexBox{border-bottom:1px solid #efeef3;padding-bottom:1.071428571428571rem;padding-top: 1.071428571428571rem;}
.match_base .flexBox .countdown{height: auto!important;width: 5.3557rem;}
.match_base .flexBox .match_icon{width: 60px;height: 60px;margin-right: 15px;}
.match_base .flexBox .match_icon img{width: 100%;height: 100%;border: 1px solid rgba(156,156,156,0.2);border-radius: 0.535rem;}
.match_base .flexBox .weui_media_title,.match_base .flexBox .weui_media_desc{font-size: 12px;line-height: 1.2;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 2;}
.match_base .match_types{padding:1.071428571428571rem 0;border-bottom:1px solid #efeef3;font-size: 12px;}
.match_base .match_types>ul{overflow: hidden;}
.match_base .match_types>ul>li{width: 50%;float: left;/*margin-bottom: 10px;*/color: #888888;}
.match_base .match_types>ul>li .icon{height: 1.2285rem;width: 1.214285rem;background: url(/static/images/icon_2.png) no-repeat;background-size:100% /*14.428571rem*/;display: inline-block;margin-right: 0.5rem;}
.match_base .match_types>ul>li .icon_calendar{background-position:-11.1428571rem -5.59142rem;}
.match_base .match_types>ul>li .icon_position{width: 0.93857rem;}
.match_base .match_types>ul>li .icon_types{background: url(/static/images/icon_3.png) no-repeat;background-size: 100%;}
/*.match_base .match_des{padding-top:10px;}*/
.match_base .match_des>h5{margin: 1.07142rem auto;}
.match_base .match_des p{font-size: 1rem;}

.match_feature{background: #FFF;margin:0  auto 0.7142857142857143rem;padding:10px 15px;font-size: 0.857142rem;}
.match_feature .flex_1>div{height: 2.93rem;border-right:1px solid #efeef3;}
.match_feature .flex_1:last-child>div{border:none; }
.match_feature .flex_1>p{text-align: center;padding:5px 0 0;}

.footer{padding:0.5714285714285714rem 1.071428571428571rem;/*background: rgba(255,255,255,.9);*/background: #f8fafa; font-size: 12px;color:#888888;position: fixed;bottom:0;width: 100%;box-sizing:border-box;max-width: 680px;z-index: 100;border-top: 1px solid #e1e1e1;}
/*.footer .halficon{margin-right: 1.071428571428571rem;}*/
.footer .contact{width: 1.428571428571429rem;height: 1.428571428571429rem;background-position:-9.428571428571429rem -1.128571428571429rem;background-image: url(/static/images/icons.png);background-size:11.57142857142857rem;}
.footer .collection{width:1.428571428571429rem;height: 1.428571428571429rem;background-position:-6.55rem -2.64285rem;background-image: none;}
.footer .collection #icon_star{width: 100%;height: 100%;}
.collected .collection{width:1.5rem;height: 1.5rem;/*background-position:-8.3014285rem -1.225714rem;*/}

.match_info,.match_meal,.match_scenic{background: #FFF;padding:1.214285rem;margin-bottom: 0.7142857142857143rem;padding-top: 1.071428571428571rem;}
.match_info .match_des{margin-top: 2rem;}
.match_info .match_des_content{/*margin-top: 5px;*/font-size: 1rem;}
.match_info table{width:100% ;}
.match_info table th{color:#000;font-weight: normal;text-align: left;font-size: 1rem;padding-top: 1.071428571428571rem;width: 23%;}
.match_info table td{color:#888888;padding-top: 1.21428rem;font-size: 1rem;}
.match_info .rounteImg{width: 100%;/*padding-bottom:50%;*/position: relative;}
.match_info .rounteImg img{width: 100%;/*position: absolute;*/height: 100%;}

.match_scenic .match_scenic_t,.match_price_t{color: #000;font-weight: bold;margin-top: 0.8rem;word-wrap:break-word;font-size: 1.0714rem;}
.match_scenic .match_scenic_des,.match_price_des{color: #999999;word-wrap:break-word;font-size: 1rem;}

#cityselect{color:#888888;font-size: 1.2rem;}
#cityselect span{/*margin-left: 0.714rem;*/color:#000;display: inline-block;padding:0 0.36rem;}
#cityselect span.curr{color:#FF3175;font-weight: normal;}
#cityselect span.curr:before{content:"";background: url(/static/images/icon_2.png) no-repeat; background-size: 100% /*14.43rem*/;width: 0.8571rem;height: 1.071428571428571rem;margin-top: 0.30714rem;margin-right: 0.214285rem; float: left;
}
/*#scroller{padding:1.071428571428571rem 0;font-size: 1rem;transform: translate(0,0,0);}*/
#scroller_slide.scroll{position: fixed;top: 0;left: 0;background: #FFF;width: 100%;z-index: 10000;padding-left: 1.071428571428571rem;padding-right: 1.071428571428571rem;}


/*#scroller span{color:#000;border: 1px solid #888888;padding:2px 10px;border-radius: 5px;margin-right: 10px;}*/
/*#scroller span.curr{color:#FF2244;border-color: #FF2244;}*/

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
/*.match_base .match_types li:nth-child(1){margin-bottom: 1rem;}*/
/*.match_base .match_types li:nth-child(2){margin-bottom: 1rem;}*/
.match_base .match_des div{font-size: 1rem;color: #888888;}
.match_info_border_botom{height: 1px;position: relative;background: #efeef4;top: 3.85714rem;}
.match_info .match_des_content p{padding-top: 1.071428rem;}
.match_info .match_des_content .rounte{color: #888888;padding-bottom: 1.071428rem;}
.match_meal_info .orange .color-g9{color: #B0B0B0;font-size: 0.857142rem;}
/*.flexBox{padding-top: 1rem;}*/
.meal_trip div:last-child{border-left: none;padding-bottom: 0;}
/*.match_meal_info .orange{margin-top: 0.514rem;}*/
.match_meal_info .orange .price_tag{border: 1px solid #FF2244;padding: 1px 0.36rem;border-radius: 0.285rem;margin-right: 12px;}
.weui_btn{line-height: 2.428571428571429rem;font-size: 1.142857142857143rem;border-radius: 0.1428571428571429rem;}
.borderLeft{overflow: hidden;}
.borderLeft p{font-weight: normal;}
._price{font-size:16px;font-weight: 500;}
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
/*#match_course p{width: 50%;float: left;}*/
/*.weui_btn_primary:not(.weui_btn_disabled):visited{color: rgba(255,255,255,0.1)!important;}*/
.weui_btn_primary:active{background: #FF2244;color: #68c167!important;}
.primary_border::after{content: " ";width: 200%;height: 200%;position: absolute;top: 0;left: 0;border: 1px solid #04BE02;-webkit-transform: scale(0.5);transform: scale(0.5);-webkit-transform-origin: 0 0;transform-origin: 0 0;box-sizing: border-box;border-radius: 10px;}
.primary_border:active{background: #f#FF2244!important;}
.hotel_size div:nth-child(2){margin: 0 0 0 0.4rem;}
.hotel_size div:nth-child(3){margin: 0 0 0 0.4rem;}
.hotel_size .flex_1 div:nth-child(2){margin: 0 0;}
.dhzx{position: absolute;right: 0;bottom: 0;color: #0BB20C;line-height: 3.295rem;font-size: 1.214285714285714rem;width: 11.38392857142857rem;text-align: center;border-left: 1px solid #D5D5D6;color: #FF2244;}
.weui_dialog_ft .advice1{opacity: 0;}
.weui_dialog_ft .advice2{font-size: 1.214285714285714rem;}
.weui_dialog_confirm .weui_dialog .advice3{font-size: 1.071428571428571rem;border-top: 1px solid rgba(213,213,214,0.5);padding: 20px 0 0 0;text-align: center;}
.advice4{font-size: 1.214285714285714rem;}
.advice3 div{width: 12.57142857142857rem;margin: 0 auto;}
.advice3 div{text-align: left;}
#wrapper { position:relative; z-index:1; width:100%;height: 100%; overflow:hidden;display: block;} 
/*#scroller { width:107.1428571428571rem; float:left;height: 100%; }*/ 
.footer .sy_size{height: 1.285714285714286rem;width: 1.5rem;}
/*.sy_icon{width: 1.5rem;height: 1.5rem;}*/
.sy_icon{height: 100%;width: 100%;}
.arrow_left{position: absolute;left: -1rem;top: 1.285714285714286rem;font-size: 1.285714285714286rem;color: #888888;width: 0.7142857142857143rem;height: 1.142857142857143rem;background: #FFFFFF;z-index: 10;background: url(/static/images/arror_left.png) no-repeat;background-size:0.7142857142857143rem ;display: none;}
.arrow_right{position: absolute;right: -1rem;top: 1.285714285714286rem;font-size: 1.285714285714286rem;color: #888888;width: 0.7142857142857143rem;height: 1.142857142857143rem;background: #FFFFFF;z-index: 10;background: url(/static/images/arror_right.png) no-repeat;background-size:0.7142857142857143rem;}
#scroller_slide{position: relative;}
.rules{color: #888888;font-size: 1rem;}
.rules img,.rounte img,.rules table,.rounte table{width: 100%!important;}
.match_info .match_des_content .rules p{padding: 0;}
/*#scroller ul { list-style:none; display:block; float:left; width:100%; height:100%; padding:0; margin:0; border:1px solid #aaa; }*/ 
/*#scroller li { display:block; float:left; width:78px; height:78px; line-height:78px; text-align:center; border:1px solid #aaa; background:#ccc; }*/ 
.weui_btn_primary{background: #ff2244;}
.weui_btn:after{border: none;border-radius: 4px;}
.weui_btn_dialog.primary{color: #FF2244;}
.weui_btn_warn{background: #FF2244;}
.banner{margin-bottom: 0px;}
#box_text_1{height: 21.42857142857143rem;overflow: hidden;}
#box_text_2{height: 21.42857142857143rem;overflow: hidden;}
#text_view_1,#text_view_2{line-height: 2.857142857142857rem;font-size: 1rem;text-align: center;background: #FFFFFF;width: 100%;left: 0px;color: #888888;/*padding: 0.7142857142857143rem 0;*/}
/*#text_view_2:before{content: '';width: 100%;height: 1px;background: #D9D9D9;position: absolute;left: 0px;}*/
/*#text_view_2:after{content: '';width: 114%;height: 1px;background: #D9D9D9;position: relative;left: -6%;display: block;}*/
/*#text_view_1:before{content: '';width: 100%;height: 1px;background: #D9D9D9;position: absolute;left: 0px;}*/
/*#text_view_1:after{content: '';width: 114%;height: 1px;background: #D9D9D9;position: relative;left: -6%;display: block;}*/
.back_top{position: fixed;bottom: 5rem;right: 1.21428rem;width: 2.857142857142857rem;height: 2.857142857142857rem;background: url(/static/images/back_top.png);background-size: 100% 100%;display: none;z-index: 10000;}
/*//////////////////////////////////////////////*/
.banner_title{position: absolute;height: 3.392857142857143rem;width: 100%;text-align: center;line-height: 2.892857142857143rem;bottom: 0px;font-size: 1.214285714285714rem;color: #FFFFFF;background: rgba(0,0,0,0.5);}
.banner_title ul{position: absolute;bottom:0.7142857142857143rem;left: 50%;-webkit-transform: translateX(-50%);-ms-transform: translateX(-50%);-moz-transform: translateX(-50%);}
.banner_title ul li{float: left;width: 0.3571rem;height:0.3571rem;background: #efeef4;margin-left: 0.3571rem;border-radius: 50%;opacity: 0.45;}
.banner_title ul li.curr{background: #efeef4;opacity: 1;}
.match_types ul li:nth-child(2) span{border-right: dashed 1px #888888;margin:0 3px;display: inline-block;height: 0.7142857142857143rem;height: 1rem;transform: translateY(0.1428571428571429rem);-webkit-transform: translateY(0.1428571428571429rem);-ms-transform: translateY(0.1428571428571429rem);-moz-transform: translateY(0.1428571428571429rem);}
.match_types ul li:nth-child(2) span:nth-child(1){border-right: solid 1px #888888;}
.match_time{box-sizing: border-box;padding: 1.142857142857143rem 0;}
/*.match_show_1{width: 57.5px;height: 60px;border-radius: 0% 0% 0% 0%;background: #006600;}*/
/*.match_show{width: 100px;}*/
.match_show_top{width:4.107142857142857rem;height: 1.928571428571429rem; background: #ff2345;line-height: 1.928571428571429rem;text-align: center;color: #FFFFFF;font-size: 0.8571428571428571rem;border-radius: 0.5rem 0.5rem 0% 0%;border: solid 1px #ff2345;}
.match_show_bottom{width: 4.107142857142857rem;height: 2.321428571428571rem;border-radius: 0 0 0.5rem 0.5rem;background: #FFFFFF;border: solid 1px #d8d8d8;border-top: none;font-size: 1.642857142857143rem;color: #000000;text-align: center;line-height: 2.321428571428571rem;}
.match_show_1{display: inline-block;margin-right: 1.071428571428571rem;}
.time_title{padding-left: 0.0714285714285714rem;}
.match_time .time_title span{font-size: 0.8571428571428571rem;color: #888888;margin-bottom: 0.6428571428571429rem;display: inline-block;width: 4.178571428571429rem;text-align: center;margin-right: 1.214285714285714rem;}
.show_special{border-color: #FF2345;}
.time_tag span{display: inline;margin-right: 0px;font-size: 0.8571428571428571rem;}
.time_tag span:nth-child(1){margin-bottom: 0.8571428571428571rem;display:inline-block; padding: 0 0.2857142857142857rem;}
.time_tag span:nth-child(2){margin-right: 0px;margin-bottom: 0px;display:inline-block;padding: 0 0.2857142857142857rem;float: right;background-size: 100% 100%;}
.time_tag span:nth-child(3){margin-right: 0px;margin-bottom: 0px;display:inline-block;padding: 0 0.2857142857142857rem;}
.time_tag span:nth-child(4){margin-right: 0px;margin-bottom: 0px;display:inline-block;padding: 0 0.2857142857142857rem;float: right;}
.table_title{height: 3.142857142857143rem;width: 100%;display: flex;display: -webkit-flex;display: -moz-box; box-sizing: border-box;background: #FFFFFF;font-size: 1.214285714285714rem;}
.table_title div{ line-height: 2.714285714285714rem;text-align: center;color: #FFF;}
.table_suggest{-webkit-flex: 1;-moz-box-flex: 1;flex: 1;border-radius: 0.7142857142857143rem 0.7142857142857143rem 0px 0px;background: #FFFFFF!important;color: #FF2345!important;}
.table_tour{-webkit-flex: 1;-moz-box-flex: 1;flex: 1;border-radius: 0px 0px 0px 0px;background: #FFFFFF;display: flex;display: -webkit-flex;display: -moz-box;height: 3.214285714285714rem;}
.table_bg1{background: -webkit-linear-gradient(top,#db1d3a 0%,#ff2345 40%,#ff2345 100%);margin: 0;-webkit-flex: 1;-moz-box-flex: 1;flex: 1;border-radius: 0px 0px 0.7142857142857143rem 0px;height: 3.142857142857143rem;}
.table_bg2{background: -webkit-linear-gradient(top,#db1d3a 0%,#ff2345 40%,#ff2345 100%);margin: 0;flex: 1;-webkit-flex: 1;-moz-box-flex: 1;height: 3.142857142857143rem;border-radius: 0 0 0 0.7142857142857143rem;}
.table_bg3{width: 1.014285714285714rem;display: inline-block;background: -webkit-linear-gradient(top,#db1d3a 0%,#ff2345 40%,#ff2345 100%);border-radius: 0 0 0.7142857142857143rem 0px;}
.table_bg4{display: inline-block;width: 1.214285714285714rem;background: -webkit-linear-gradient(top,#db1d3a 0%,#ff2345 40%,#ff2345 100%);border-radius: 0 0 0px 0px;}
.match_ts{width: 8.214285714285714rem;margin:0 auto;padding: 0.9285714285714286rem 0;}
.text_ts{font-size: 1rem;color: #888888;}
.match_ts img{width: 100%;}
.match_line{height: 1px;width: 100%;background: #d9d9d9;margin-top: 1.428571428571429rem;margin-bottom: 2.142857142857143rem;}
.match_line_1{height: 1px;width: 100%;background: #d9d9d9;margin-top: 1.428571428571429rem;margin-bottom: 2.142857142857143rem;}
.match_line_2{height: 1px;width: 100%;background: #d9d9d9;margin-top: 1.428571428571429rem;margin-bottom: 2.142857142857143rem;}
.taocan_list{position: relative;box-sizing: border-box;padding: 1.071428571428571rem 0 0.7142857142857143rem;display: flex;display: -webkit-flex;display: -moz-box;}
.taocan_list:after{content: '';display: block;height: 1px;background: #d9d9d9;width: 112%;position: absolute;bottom: 0px;left: -1.214285714285714rem;}
.taocan_list_title{font-size: 1.214285714285714rem;flex: 1;-webkit-flex: 1;-moz-box-flex: 1;font-weight: bold;}
.taocan_attend{font-size: 0.7857142857142857rem;color: #FF2345;border: 1px solid #FF2345;border-radius: 0.3571428571428571rem 0.3571428571428571rem 0.3571428571428571rem 0.3571428571428571rem;padding: 0.2142857142857143rem 0.3571428571428571rem;margin-right: 0.5rem;}
.taocan_icon{display:inline-block; width: 0.8928571428571429rem;height: 0.5rem; background: url(/static/images/icon_9.png) no-repeat;background-size: 100%;}
.taocan_sp1{display: flex;display: -webkit-flex;display: -moz-box;-webkit-flex: 1;-moz-box-flex: 1;flex: 1;}
/*.taocan_icon img{width: 100%;}*/
/*#scroller div:nth-child(1) .taocan_icon{background: url(/static/images/icon_10.png) no-repeat;background-size: 100%;}*/ 
.match_meal{padding-bottom: 0;}
.mask_baomingtx{height: 100%;width: 100%;background: rgba(0,0,0,0.5);position: fixed;left: 0;top: 0;z-index: 100000;display: none;}
.mask_outbox{box-sizing: border-box;width: 22.85714285714286rem;position: absolute;top: 30%;left:50%;background: #FFFFFF;border-radius: 0.4285714285714286rem 0.4285714285714286rem 0.4285714285714286rem 0.4285714285714286rem;transform: translateX(-50%);-webkit-transform: translateX(-50%);-moz-transform: translateX(-50%);-ms-transform: translateX(-50%);}
.mask_inner{box-sizing: border-box;padding:1.714285714285714rem 1.142857142857143rem 0 1.571428571428571rem;}
.mask_text{font-size: 1.214285714285714rem;margin-bottom: 0.8571428571428571rem;}
.mask_input{height: 2rem;width: 19.28571428571429rem;border-radius: 0.3571428571428571rem 0.3571428571428571rem 0.3571428571428571rem 0.3571428571428571rem;border: 1px solid #bebebf;font-size: 1rem;}
.mask_input1{height: 2rem;width: 10.71428571428571rem;border-radius: 0.3571428571428571rem 0.3571428571428571rem 0.3571428571428571rem 0.3571428571428571rem;border: 1px solid #bebebf;font-size: 1rem;}
.mask_sp1{border: 1px solid #FF2345;padding: 0.2142857142857143rem 0.4285714285714286rem;border-radius: 0.3571428571428571rem 0.3571428571428571rem 0.3571428571428571rem 0.3571428571428571rem; color: #FF2345;margin-left: 0.4285714285714286rem;font-size: 1rem;display: inline-block;width: 7rem;text-align: center;}
.mask_i1{width: 0.8571428571428571rem;display: inline-block;margin-right: 0.5rem;}
.mask_i1 img{width: 100%;vertical-align: middle;}
.mask_text1{font-size: 0.8571428571428571rem;color: #888888;}
.mask_text2{padding: 0.2142857142857143rem 0 1.285714285714286rem;}
.mask_text2 i{width: 0.8571428571428571rem;display: inline-block;margin-right: 0.5rem;}
.mask_text2 i img{width: 100%;vertical-align: middle;}
.mask_text2 span{font-size: 0.8571428571428571rem;color: #888888;}
.mask_line{height: 1px;position: absolute;left: 0px;background: #d5d5d6;width: 22.85714285714286rem;}
.mask_buttun{height: 2.928571428571429rem;text-align: center;line-height: 2.928571428571429rem;font-size: 1.071428571428571rem;color: #FF2345;display: flex;display: -webkit-flex;display: -moz-box;}
.mask_buttun span{-webkit-flex: 1;-moz-box-flex: 1;flex: 1; display: inline-block;text-align: center;}
.weui_btn_disabled{background: #BBBBBB;color: #FFFFFF!important;}
.btn_style{border: 0.1071428571428571rem solid #ff2244!important;color: #ff2244!important;border-radius: 0.2857142857142857rem;}
</style>
<div class="wrap">
    <div class="banner">
    	<?php echo $_smarty_tpl->getSubTemplate ('Comon/banner.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    	<div class="banner_title"><?php echo $_smarty_tpl->tpl_vars['info']->value['m_name'];?>
</div>
    </div>
    <div class="match_base">
        <!--<div class="flexBox ">
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
                <p class="weui_media_desc" id="countdown_w">后截止报名</p>
            </div>
        </div>-->
        <div class="match_types">
            <ul>
            	<li><i class="icon icon_position"></i><span class="guojia"><?php echo $_smarty_tpl->tpl_vars['info']->value['m_country'];?>
--</span> <?php echo $_smarty_tpl->tpl_vars['info']->value['m_city'];?>
</li>
                <!--<li><i class="icon icon_calendar"></i><?php echo substr($_smarty_tpl->tpl_vars['info']->value['m_GameTime'],0,10);?>
</li>-->
                <li style="display: flex;display: -webkit-flex;display: -moz-box;"><i class="icon icon_types"></i><?php echo $_smarty_tpl->tpl_vars['info']->value['m_mtypes_class'];?>
<div style="display: inline-block;font-size: 1rem;padding-top: 0px;width: 7.014285714285714rem;"><span></span><?php echo str_replace("|","<span></span>",$_smarty_tpl->tpl_vars['info']->value['m_Mtypes']);?>
</div></li>
                <!--<li <?php if ($_smarty_tpl->tpl_vars['auths']->value==''){?>style="width:100%"<?php }?>><i class="icon icon_types"></i></li>-->
                <!--<li><div><?php echo $_smarty_tpl->tpl_vars['auths']->value;?>
</div></li>-->
            </ul>
        </div>
        <div class="match_time">
        	<div class="time_title">
        		<span>开始报名</span>
        		<span>报名截止</span>
        		<span>比赛日期</span>
        	</div>
        	<div class="match_show">
        		<div class="match_show_1">
        			<div class="match_show_top"><?php echo substr($_smarty_tpl->tpl_vars['info']->value['m_signuptime'],0,7);?>
</div>
        			<div class="match_show_bottom"><?php echo substr($_smarty_tpl->tpl_vars['info']->value['m_signuptime'],8,2);?>
</div>
        		</div>
        		<div class="match_show_1">
        			<div class="match_show_top"><?php echo substr($_smarty_tpl->tpl_vars['info']->value['m_untilTime'],0,7);?>
</div>
        			<div class="match_show_bottom"><?php echo substr($_smarty_tpl->tpl_vars['info']->value['m_untilTime'],8,2);?>
</div>
        		</div>
        		<div class="match_show_1">
        			<div class="match_show_top"><?php echo substr($_smarty_tpl->tpl_vars['info']->value['m_GameTime'],0,7);?>
</div>
        			<div class="match_show_bottom show_special"><?php echo substr($_smarty_tpl->tpl_vars['info']->value['m_GameTime'],8,2);?>
</div>
        		</div>
        		<div class="time_tag" style="width: 7.704285714285714rem;height: 4.428571428571429rem;float: right;border-left: dashed 1px #CCCCCC;padding: 0.3571428571428571rem 0px 0px 0.8571428571428571rem;box-sizing: border-box;">
        			<?php echo $_smarty_tpl->tpl_vars['auths']->value;?>

        			<span class="type_G">IAAF</span>
        			<span style="padding: 0px 0px;color: #FF2345;background: url(/static/images/tag_zx.png) no-repeat;float:right;width: 3.357142857142857rem;height: 1.5rem;background-size: 100% 100%;"></span>
        		</div>
        	</div>
        </div>
        <!--<div class="match_des">
            <h5 class="borderLeft"><span class="borderLeft—green"></span>赛事特色</h1>
            <div class="line3"><?php echo $_smarty_tpl->tpl_vars['info']->value['m_special'];?>
</div>
        </div>-->
    </div><!--end of match_base -->
    <!--<?php echo $_smarty_tpl->tpl_vars['featureHTML']->value;?>
--> 
    	<div class="table_title">
    		<div class="table_bg3"></div>
    		<div class="table_tour">
    			<div class="table_bg1">
    				<div style="margin-top: 0.5714285714285714rem;background: #FFFFFF;color: #434343;border-radius: 0.7142857142857143rem 0.7142857142857143rem 0px 0px;">行程套餐</div>
    			</div>
    		</div>
    		<div class="table_tour">
    			<div class="table_bg2">
    				<div style="margin-top: 0.5714285714285714rem;border-radius: 0.7142857142857143rem 0.7142857142857143rem 0px 0px;">赛事介绍</div>
    			</div>
    		</div>
    		<div class="table_bg4"></div>
    	</div>
    	<!--//////////////////////////////////////////////////////加边框///////////////////////////////////////////////////////////-->
    	<!--<div class="match_info_border_botom"></div>-->
    <div class="match_info" style="display: none;">
        	<!--<span class="nonstop" data="match_info">赛事介绍</span>-->
            <!--<span class="nonstop" data="match_meal">行程套餐</span>-->
            <!--<span class="nonstop" data="match_info">赛事介绍</span>-->
            <!--<?php if ($_smarty_tpl->tpl_vars['scenicList']->value){?>-->
            <!--<span class="nonstop" data="match_scenic">周边景点</span>-->
            <!--<?php }?>-->
            <div class="match_ts"><img src="/static/images/icon_4.jpg" alt="" /></div>
            <div class="line3 text_ts"><?php echo $_smarty_tpl->tpl_vars['info']->value['m_special'];?>
</div>
            <div class="match_line"></div>
            <div class="match_ts"><img src="/static/images/icon_5.jpg" alt="" /></div>
            <div id="box_text_1">
               	<div class="inner_text_1">
                		<!--<p>报名须知：</p>-->
                	<p style="color: #888888;padding-top: 0;font-size: 1rem;"><?php echo $_smarty_tpl->tpl_vars['info']->value['m_info'];?>
</p>
                </div>
            </div>
            <div id="text_view_1">展开更多</div>
            <div class="match_line_1"></div>
            <div id="box_text_2">
                	<div class="inner_text_2">
                		<?php if ($_smarty_tpl->tpl_vars['info']->value['m_rules']){?>
            			<div class="match_ts"><img src="/static/images/icon_6.jpg"/></div>
                		<!--<p>赛事规程：</p>-->
                		<div class="rules">
                			<?php echo $_smarty_tpl->tpl_vars['info']->value['m_rules'];?>

                		</div>
                		<?php }?>
                	</div>
                </div>
                <div id="text_view_2">展开更多<i style="display: inline-block;width: 1.071428571428571rem;"><img style="width: 100%;" src="/static/images/icon_8.jpg" alt="" /></i></div>
                <div class="match_line_2"></div>
                <div class="match_ts"><img src="/static/images/icon_7.jpg"/></div>
                <div class="rounte"><?php echo $_smarty_tpl->tpl_vars['info']->value['m_route'];?>
</div>
                <?php if ($_smarty_tpl->tpl_vars['info']->value['m_routeImg']){?>
                <div class="rounteImg">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['info']->value['m_routeImg'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['info']->value['m_routeImg'];?>
" alt=""></a>
                </div>
                <?php }?>
            </div>
             <div class="match_meal" style="display: block;">
			    <div class="match_des">
			    	<!--<div class="taocan_list" style="box-sizing: border-box;padding: 15px 0 10px;">
			    		<span style="font-size: 15px;">三星酒店套餐</span>
			    		<p class="orange" style="display: inline-block;margin: 0 40px;"><span>￥<span class="_price" style="font-size: 16px;font-weight: bold;">1699</span><span>/人/起</span></span></p>
			    		<span style="font-size: 11px;color: #FF2345;border: 1px solid #FF2345;border-radius: 5px 5px 5px 5px;padding: 3px 5px;margin-right: 7px;">立即报名</span>
			    		<i style="display:inline-block; width: 12.5px;"><img style="width: 100%;" src="static/images/icon_9.png"/></i>
			    	</div>
			    	<div class="taocan_list" style="box-sizing: border-box;padding: 15px 0 10px;">
			    		<span style="font-size: 15px;">三星酒店套餐</span>
			    		<p class="orange" style="display: inline-block;margin: 0 40px;"><span>￥<span class="_price" style="font-size: 16px;font-weight: bold;">1699</span><span>/人/起</span></span></p>
			    		<span style="font-size: 11px;color: #FF2345;border: 1px solid #FF2345;border-radius: 5px 5px 5px 5px;padding: 3px 5px;margin-right: 7px;">立即报名</span>
			    		<i style="display:inline-block; width: 12.5px;"><img style="width: 100%;" src="static/images/icon_9.png"/></i>
			    	</div>-->
			        <h5 class="borderLeft"><p class="fr" id="cityselect"></p></h1>
			        <!--<div id="scroller_slide">-->
			        	<!--<div class="arrow_left"></div>-->
			        	<!--<div class="arrow_right"></div>-->
			        	<!--<div id="wrapper">-->
			        		<div class="" id="scroller"></div>
			        	<!--</div>-->
			        <!--</div>-->
			        <div class="match_meal_content">           
			        </div>
			    </div>
    		</div>
        </div>
    </div>
    <div class="footer flexBox">
    	<div class="" style="margin-right: 1rem;">
    		<a href="/" style="display: block;text-align: center;">
    			<i class="halficon collection sy_size">
            		<img class="sy_icon" src="/static/images/icon_11.png"/>
            	</i>
            	<p>返回列表</p>
    		</a> 
    	</div>
       <?php if ($_smarty_tpl->tpl_vars['varable']->value){?>
        <div style="margin-right: 1rem;text-align: center;" data="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
" class="collect collect_zt" >
             <i class="halficon collection">
              <?php if ($_smarty_tpl->tpl_vars['remind']->value){?>
                <img id="icon_star" src="/static/images/icon_12.png"/>
                <?php }else{ ?>
                 <img id="icon_star" src="/static/images/icon_15.png"/>
                <?php }?>
            </i>
            <p>报名提醒</p>
        </div>
        <?php }?>
       
        <div style="margin-right: 1.214285714285714rem;" class="_advice"><a style="display: block;text-align: center;" onclick="return false" href="tel:4000-842-195"><i class="halficon contact"></i><p style="color:#888888">电话咨询</p></a></div>
        <div class="flex_1">
        <?php if ($_smarty_tpl->tpl_vars['info']->value['m_GameTime']>=$_smarty_tpl->tpl_vars['now']->value){?>
            <?php if ($_smarty_tpl->tpl_vars['order']->value['paystats']==5){?>
                <?php if ($_smarty_tpl->tpl_vars['varable']->value){?> 
                    <a href="/Enroll/userdata?orderid=<?php echo $_smarty_tpl->tpl_vars['order']->value['orderid'];?>
" class="weui_btn weui_btn_primary color-w primary_border"style="background: #FFFFFF;color: #04BE02!important;">继续报名</a>
                <?php }else{ ?>
                    <button href="javascript:void(0);" class="weui_btn weui_btn_disabled weui_btn_default">名额已满</button>
                <?php }?>
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
" class="weui_btn weui_btn_warn  color-w"><span>立即报名</span></a>
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
                    <?php echo $_smarty_tpl->tpl_vars['btn']->value;?>

                <?php }?>
            <?php }?>
        <?php }else{ ?>
            <button href="javascript:void(0);" class="btn_style weui_btn weui_btn_disabled weui_btn_default">比赛结束</button>
        <?php }?>
        </div>
    </div>
</div><!--end of wrap -->
<div class="back_top" onclick="goTop(0.2,16);return false;"></div>
<div class="mask_baomingtx">
	<!--//////////////////////////登陆////-->
	<div class="mask_outbox mask_outbox_1">
		<!--<div class="mask_inner photo_yz">

		</div>-->
		<div class="mask_inner yanzheng_2">
			<div class="mask_text">报名提醒</div>
				<div class="mask_text1">
					<span class="choice warn_1" data="img"><i class="mask_i1"><img src="/static/images/icon_13.png"/></i><span>开始报名时短信提醒我</span></span>
					<span class="choice warn_2" data="img" style="display: block;padding-top: 0.2142857142857143rem;"><i class="mask_i1"><img src="/static/images/icon_13.png"/></i><span>名额紧张时短信提醒我</span></span>
				</div>
				<div class="mask_text2">
					<span class="choice warn_3" data="img"><i><img src="/static/images/icon_13.png"/></i><span>报名截止前一周短信提醒我</span></span>
				</div>
				<div class="mask_line"></div>
		</div>
		<div class="mask_buttun"><span class="btn_warn" style="border-right: 1px solid #D5D5D6;">确定</span><span class="cancle">取消</span></div>
	</div>
	
	
	
	<!--///未登录///-->
	<div class="mask_outbox mask_outbox_2" >
		<!--<div class="mask_inner photo_yz">

		</div>-->
		<div class="mask_inner yanzheng_2">
			<div class="mask_text">报名提醒</div>
				<input class="mask_input phone" type="text" placeholder="  请输入手机号" />
				<img class="photo_img" style="margin: 0 auto;padding: 0.5rem 0 0 0;width: 10.71428571428571rem;" src="/Account/imgverify?width=150&height=45" onclick="this.src=this.src+'?'+Math.random()" alt="" />
				<input class="photo_img_yz" style="width: 7rem;float: right; margin-top: 1.214285714285714rem;margin-right: 0.7142857142857143rem; line-height: 2rem;border-radius: 0.3571428571428571rem 0.3571428571428571rem 0.3571428571428571rem 0.3571428571428571rem;   border: 1px solid #bebebf;" type="text" placeholder="  图片验证码"/>
				<div style="margin: 0.7142857142857143rem 0;position: relative;">
					<input class="mask_input1 photo" type="text" placeholder="  手机验证码" />
					<span class="mask_sp1" data='1'>发送到手机</span>
				</div>
				<div class="warn" style="height: 2.142857142857143rem;display: none;">验证码错误</div>
				<div class="mask_text1">
					<span class="choice warn_1" data="img"><i class="mask_i1"><img src="/static/images/icon_13.png"/></i><span>开始报名时短信提醒我</span></span>
					<span class="choice warn_2" data="img" style="display: block;padding-top: 0.2142857142857143rem;"><i class="mask_i1"><img src="/static/images/icon_13.png"/></i><span>名额紧张时短信提醒我</span></span>
				</div>
				<div class="mask_text2">
					<span class="choice warn_3" data="img"><i><img src="/static/images/icon_13.png"/></i><span>报名截止前一周短信提醒我</span></span>
				</div>
				<div class="mask_line"></div>
		</div>
		<div class="mask_buttun"><span style="border-right: 1px solid #D5D5D6;">确定</span><span class="cancle">取消</span></div>
	</div>
	
</div>
<script src="/static/js/zepto.js"></script>
<script src="/static/weui/js/weui.js"></script>
<script type="text/javascript" src="/static/js/iscroll.js?v=1.2"></script>
<script type="text/javascript">
$('.table_bg1').bind('click',function () {
	$('.table_bg2 div').css({'background':'none','color':'#ffffff'});
	$('.table_bg4').css('border-radius','0 0 0 0');
	$('.table_bg1').css('border-radius','0 0 0 0');
	$('.table_bg3').css('border-radius','0 0 10px 0');
	$('.table_bg1 div').css({'background':'#ffffff','color':'#434343'});
	$('.table_bg2').css('border-radius','0 0 0px 10px');
	$('.match_info').css('display','none');
	$('.match_meal').css('display','block');
})
$('.table_bg2').bind('click',function () {
	$('.table_bg1 div').css({'background':'none','color':'#ffffff'});
	$('.table_bg4').css('border-radius','0 0 0 10px');
	$('.table_bg1').css('border-radius','0 0 10px 0');
	$('.table_bg3').css('border-radius','0 0 0 0');
	$('.table_bg2 div').css({'background':'#ffffff','color':'#434343'});
	$('.match_info').css('display','block');
	$('.match_meal').css('display','none');
	var imgs=new Array();
	var images=new Array();
	var images_1=new Array();
	var imgs_1=new Array();
	var index=0;
	var index_1=0;
	if($('#box_text_1 img').length>0){
		$('#box_text_1 img').each(function () {
			imgs_1.push($(this).attr('src'));
		})
		for (i = 0; i <imgs_1.length; i++) {
            images_1[i] = new Image();
            images_1[i].src = imgs_1[i];
            images_1[i].onload=function () {
            	index_1++;
            	if(index_1>=images_1.length){
				_show(1);
		}
            }
        }
	}else{
		_show(1);
	}
	if($('.rules img').length>0){
		$('.rules img').each(function () {
		imgs.push($(this).attr('src'));
	})
		for (i = 0; i <imgs.length; i++) {
            images[i] = new Image();
            images[i].src = imgs[i];
            images[i].onload=function () {
            	index++;
            	if(index>=images.length){
				_show(2);
		}
            }
        }

	}else{
		_show(2);
	}
	if($('.inner_text_2 div').length==0){
		$('.match_line_2').css('display','none');
	}
})
///////////////////////////////////////////////////////////////////////////
$(".banner_pic").silder();


var userid = '<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
';

////////////////////////////////////////////////////////////提醒报名弹窗//////////////////////////////////////////////////
$(function () {
//	var star_boon=false;
//	$('.collect_zt').click(function () {
//		if(star_boon==false){
//			
//		}else{
//			$('#icon_star').attr('src','/static/images/icon_15.png')
//			star_boon=false;
//		}
//	})
	
	var id = "<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
";
	$(".collect").click(function () {
		console.log(userid);
        if(userid==''){
        	$('.mask_outbox_1').css('display','none');
        	$('.mask_outbox_2').css('display','block');
        }
        if(userid!=''){
        	$('.mask_outbox_1').css('display','block');
        	$('.mask_outbox_2').css('display','none');
        }
	$('.mask_baomingtx').css('display','block');
})
$('.cancle').click(function () {
	$('.mask_baomingtx').css('display','none');
})
})










//$("#collect").click(function(){
//  var _this = $(this);
//  var id = _this.attr("data");
//  var icon_star=document.getElementById('icon_star');
//  weui.Loading.show();    
//  $.ajax({
//      cache: false,
//      url:"/Matchinfo/collection?m_id="+id,
//      type: "POST",
//      dataType: "json",
//      timeout:3000,
//      success: function(data){
//          weui.Loading.hide();
//          if(data.error == 0 ){            
//              weui.Loading.success(2000);
////              data.msg == 1 ? icon_star.src='/static/images/icon_star_1.png':icon_star.src='/static/images/icon_star_2.png';
//              data.msg == 1 ?_this.removeClass("collected"):_this.addClass("collected");
////				if(data.msg==1){
////					$('#icon_star').src='/static/images/icon_star_1.png';
////					_this.addClass("collected")
////				}
////				else{
////					$('#icon_star').src='/static/images/icon_star_2.png';
////					_this.removeClass("collected")
////				}
//             
////              _this.removeClass("collected") :  _this.addClass("collected");
//          }else if(data.error == 304){
//              window.location.href = data.msg;
//          }else{
//              weui.Loading.error(data.msg,2000);
//          }
//      },
//      error:function(){
//          weui.Loading.hide();
//          weui.Loading.error("系统错误！",222000);
//      }
//  });
//});
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

$("div[class*=featureIcon]").click(function(){
    feature.alert($(this).attr("data-i"));
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
        varable = "<?php echo $_smarty_tpl->tpl_vars['varable']->value;?>
",
        m_placesleft = "<?php echo $_smarty_tpl->tpl_vars['info']->value['m_placesleft'];?>
",
        scroller_wid=$("#scroller_slide").width(),
        init = function(){
        	var taocan_length='';
            for(var key in meal){
            	taocan_length=meal[key][1];
                if(meal[key][0])  city.push([meal[key][0],key,meal[key][2]]);
            }
            for(var i=0,len=city.length;i<len;i++){
                for(var j=0,len=city.length;j<len;j++){
                    if(city[i][2]>city[j][2]){
                        var tmp = city[i];
                        city[i] = city[j];
                        city[j] = tmp;
                    }
                }
            }
            console.log(taocan_length);
            var json_length=0;
            for (var key in taocan_length) {
            	json_length++;
            }
            console.log(json_length)
//          if(json_length<=1){
//          	console.log(33333);
//          	console.log($('#scroller .taocan_list'));
////          	
//          }
//          console.log(city);
            $('#scroller_slide').css('width',scroller_wid+'px');
            locationCity.call(cityselect,city)
//          match_meal_content = $(".match_meal_content_0");
            $(".wrap").bind("touchmove touchend touchcancel",function(){
                var scrollTopx = document.body.scrollTop||document.documentElement.scrollTop;
//              offsettop = match_meal_content.offset().top-scroller.offset().height;
                if(scrollTopx>=offsettop){
                    $("#scroller_slide").addClass("scroll");
                }else{
                    $("#scroller_slide").removeClass("scroll");
                }
            });
            $(document).on('scroll',function () {
            	var scrollTopx = document.body.scrollTop||document.documentElement.scrollTop;
//              offsettop = match_meal_content.offset().top-scroller.offset().height;
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
                for(var i in c){
                    html+="<span data-id='"+i+"'   data-cid='"+c[i][1]+"'>"+c[i][0]+"</span>";
                    if(c[i][0]=="不限"){
                        html = "";
                        break;
                    }
                }
                addcurr.call(this.html(html).find('.taocan_list').click(function(){
                    currcityid = $(this).attr("data-id");
                    addcurr.call(cityselect.find('.taocan_list'),currcityid);
                    loaddata.call(scroller,currcityid);
                }),currcityid);
                $('#cityselect span:nth-child(1)').addClass('curr');
                loaddata.call(scroller,currcityid);
                   this.find('span').tap(function(){
                       currcityid = $(this).attr("data-id");
                       addcurr.call(cityselect.find("span"),currcityid);
                       loaddata.call(scroller,currcityid);
                   });
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
            var meallisttmp = [];
            var maxorder = 0;
            var g_mid='';
            for(var key in meallist){
            	g_mid=meallist[key]['g_mid'];
                meallisttmp[meallist[key]['g_order']] =  meallist[key];
                if(parseInt(meallist[key]['g_order'])>maxorder){
                    maxorder = parseInt(meallist[key]['g_order']);
                    currkey = key;
                }
                index++;
            }
            ///////////////////////////////////////拿赛事单独报名价格////////////////////////////////////////////////////////
            for(var key in meallisttmp){
                index--;
                currkey = currkey?currkey:meallisttmp[key]['id'];
                var zhengs_price= Math.round(meallisttmp[key]['g_currprice']);
//              html = "<span data-id='"+meallisttmp[key]['id']+"' data-index='"+index+"'>"+meallisttmp[key]['g_name']+"</span>"+html;
console.log(varable+" "+m_placesleft);
                var btnhtml = "";
                if (varable &&　m_placesleft>0) {
btnhtml = "<span class='taocan_attend'><a style='color:#ff2345;' href='/Enroll?m_id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
'>立即报名</a></span>"

                };
                if(meallisttmp[key]['g_name']=='赛事单独报名'){
                	var per='';
                	$.ajax({
			            cache: false,
			            async:false,
			            url:"/Matchinfo/getcourse?m_id="+g_mid,
			            type: "POST",
			            dataType: "json",
			            timeout:3000,
			            success: function(data){
			                var html =htmlNotip= "";
			                if(data.error == 0 ){            
			                    data = data.data;
			                    zhengs_price =Math.round(data[0].g_currprice);    
			                }
			            },
			            error:function(){
			                weui.Loading.hide();
			                weui.Loading.error("系统错误！",2000);
			            }
			        });
                }
                html="<div class='taocan_list'  data-id="+meallisttmp[key]['id']+" data-index="+index+"><span class='taocan_sp1'><span class='taocan_list_title'>"+meallisttmp[key]['g_name']+"</span><p class='orange' style='display: inline-block;flex: 1;-webkit-flex: 1;-moz-box-flex: 1;'><span>￥<span class='_price' style='font-size: 1.142857142857143rem;font-weight: bold;'>"+zhengs_price+"</span><span>/人/起</span></span></p></span><p style='display:inline-block;padding-top:0.2857142857142857rem;'>"+btnhtml+"<i class='taocan_icon'></i></p></div><p style='display:none;padding-top:1.571428571428571rem;' tancan='1' class='match_meal_content_"+meallisttmp[key]['id']+"'></p>"+html;
            }
            addcurr.call(this.html(html).find('.taocan_list').click(function(){
				var data_id=$(this).attr('data-id');
				var match_H=$(".match_meal_content_"+data_id).height();
				if(match_H>0){
					$(".match_meal_content_"+data_id).css('display','none');
					$(this).find('.taocan_icon').css('background','url(/static/images/icon_9.png) no-repeat');
					$(this).find('.taocan_icon').css('background-size','100%');
				}
				if(match_H<=0){
					$(".match_meal_content_"+data_id).css('display','block');
					$(this).find('.taocan_icon').css('background','url(/static/images/icon_10.png) no-repeat');
					$(this).find('.taocan_icon').css('background-size','100%');
				}
            	if($(this).attr('class')=='taocan_list curr'){
            		return false;
            	}
                currmealid = $(this).attr("data-id");
                currmealindex = $(this).attr("data-index");
                addcurr.call(scroller.find('.taocan_list'),currmealindex);
                loadmeal.call(mealDiv,currmealid);
            }),0);
//          swipe();
            loadmeal.call(mealDiv,currkey);
        },
        gettrip =function(i,index){	
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
                    weui.Loading.error("系统错误！",222000);
                }
            });
        },
        getcourse = function(i){
        	console.log(i);
            if(!i) return false;
            $.ajax({
                cache: false,
                url:"/Matchinfo/getcourse?m_id="+i,
                type: "POST",
                dataType: "json",
                timeout:3000,
                success: function(data){
                    var html =htmlNotip= "";
                    if(data.error == 0 ){            
                        data = data.data;
                        for(var key in data){
                            var math_currprice=Math.round(data[key].g_currprice);
                            var math_price = Math.round(data[key].g_price);
                            if(math_currprice>0){
                                var g_tips = data[key].g_tips?'<span class="price_tag">'+data[key].g_tips+'</span>':"";
                                var math_price = math_price?'<del class="color-g9">原价￥'+math_price+'起/人</del>':"";
                                if(g_tips){
                                    html+='<p class="orange">'+g_tips+data[key].g_name+' ￥<span class="_price">'+math_currprice+'</span><span>'+math_price+'</span></p>';
                                }else{
                                    htmlNotip+='<p class="orange">'+g_tips+data[key].g_name+' ￥<span class="_price">'+math_currprice+'</span><span>'+math_price+'</span></p>';
                                }
                            
                            }  
                        } 
                    }
                    $("#match_course").html(html+htmlNotip);
                },
                error:function(){
                    weui.Loading.hide();
                    weui.Loading.error("系统错误！",2000);
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
            console.log(data);
            if(data.g_name != "赛事单独报名"){
                var tips = data.g_tips ? data.g_tips :"早鸟价";
                var singlepricehtml = "";
                if(singleprice>0){
                    singlepricehtml = '<p class="orange"><span class="price_tag">'+tips+'</span><span>单房差￥<span class="_price">'+singleprice+'</span><span>/人/起</span> <del class="color-g9">原价￥'+singleprice+'起/人</del><span></p>';
                }
                var html = '<div class="match_meal_info"><p class="color-g9">'+data.g_des+'</p><p class="orange"><span class="price_tag">'+tips+'</span><span>双人间￥<span class="_price">'+currprice+'</span><span>/人/起</span> <del class="color-g9">原价￥'+price+'起/人</del></span></p>'+singlepricehtml+'</div><div class="meal_trip"></div>';
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
                $(".match_meal_content_"+i).html(html);
                gettrip(i);
            }else{
            	console.log(data);
                var html = '<div class="match_meal_info"><p class="color-g9">'+data.g_des+'</p><p id="match_course"></p></div>'; 
                if(data.g_priceinfo){
                    html+='<div class="price_info"><p class="match_price_h">费用须知</p>';
                    if(data.g_priceinfo){
                        html+='<div class="match_price_des">'+data.g_priceinfo+'</div>';
                    }
                    html+='</div>';
                }
                $(".match_meal_content_"+i).html(html); 
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
</script>
<script>
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
                title : '糯米-<?php echo $_smarty_tpl->tpl_vars['info']->value['m_name'];?>
',
                content:"<?php echo $_smarty_tpl->tpl_vars['info']->value['m_des'];?>
",
                imgUrl : '<?php echo $_smarty_tpl->tpl_vars['info']->value['m_icon'];?>
',
                url : 'http://nuomi.zx-tour.com/Matchinfo?m_id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
',
                onSuccess : function(){
                    //alert('分享测试成功~')
                },
                onFail : function(){
                    //alert('分享测试失败~')
                }
            });
        }
    });
});
function _show(a) {
	var H_text=$('#box_text_'+a+' .inner_text_'+a).height();
	var H_out=$('#box_text_'+a).height();
	var bloon=true;
	if(H_text<=H_out){
		$('#text_view_'+a).css('display','none');
		$('#box_text_'+a).css('height','auto');
	}else{
		$('#text_view_'+a).css('display','block');
		$('.match_line_'+a).css('margin-top','0px')
	}
	$('#text_view_'+a).bind('click',function () {
		if(H_text>H_out&&bloon==true){
			$('#box_text_'+a).animate({height:H_text},200);
			$('#text_view_'+a).html('收起')
			bloon=false;
		}else{
			$('#box_text_'+a).animate({height:'21.42857142857143rem'},200);
			$('#text_view_'+a).html('展开更多');
			bloon=true;
		}
	})
	
}
///////////////////////////////////////////////////////////////////////////////////////////
$(function () {
	$('.choice').bind('click',function () {
	var data=$(this).attr('data');
	if(data=='img'){
		$(this).find('img').attr('src','/static/images/icon_14.png');
		$(this).removeAttr('data');
	}else{
		$(this).find('img').attr('src','/static/images/icon_13.png');
		$(this).attr('data','img');
	}
	})
})
$(function () {
	///////////////////////////////////////////////////////
	$('.mask_sp1').click(function () {
		
	var phone=$('.mask_input').val();
	if(phone==''){
		$('.warn').html('请输入手机号码');
		$('.warn').css('display','block');
		return false;
	}
	if(!(/^1[34578]\d{9}$/.test(phone))){
		$('.warn').html('手机号码错误');
		$('.warn').css('display','block');
		return false;
	}
	var photo_img_yz=$('.photo_img_yz').val();
	if(photo_img_yz==''){
		$('.warn').html('请输入验证码');
		$('.warn').css('display','block');
		return false;
	}
	var data_1=$('.mask_sp1').attr('data');
	$('.mask_sp1').removeAttr('data')
	if(data_1==1){
		$.ajax({
		type:"post",
		url:"/Account/verify",
		data:{verify:photo_img_yz,phone:phone},
		dataType: "json",
		async:true,
		success:function (data) {
			console.log(data);
			console.log(data.error)
			if(data.error=='1000'){
				$('.warn').html('图片验证码错误');
				$('.warn').css('display','block');
			}
			if(data.error==0){
				$('.mask_sp1').html("60S后重新获取")
				var time=60;
				console.log(333)
				var codeTiming = setInterval(function(){
					time--;
					if(time <=0 ) {
						clearTimeout(codeTiming);
						$('.mask_sp1').attr("data",1).html("获取验证码");
						time = 60;
					}else{
						$('.mask_sp1').html(time+"S后重新获取");
					}	
				},1000);
			}
		}
	});
	}
	console.log($('.mask_sp1').attr('data'));
	/////////////////////////////////////////

})
$('.mask_buttun span:nth-child(1)').click(function () {
	var phone=$('.mask_input').val();
	if(phone==''){
		$('.warn').html('请输入手机号码');
		$('.warn').css('display','block');
		return false;
	}
	if(!(/^1[34578]\d{9}$/.test(phone))){
		$('.warn').html('手机号码错误');
		$('.warn').css('display','block');
		return false;
	}
	var photo_img_yz=$('.photo_img_yz').val();
	if(photo_img_yz==''){
		$('.warn').html('请输入验证码');
		$('.warn').css('display','block');
		return false;
	}
	var mask_input1=$('.mask_input1').val();
	if(photo_img_yz==''){
		$('.warn').html('请输入验证码');
		$('.warn').css('display','block');
		return false;
	}
	var warn_1= $('.warn_1').attr('data');
	if(warn_1=='img'){
		warn_1=1;
	}else{
		warn_1=0;
	}
	var warn_2= $('.warn_2').attr('data');
	if(warn_2=='img'){
		warn_2=1;
	}else{
		warn_2=0;
	}
	var warn_3= $('.warn_1').attr('data');
	if(warn_3=='img'){
		warn_3=1;
	}else{
		warn_3=0;
	}
	$.ajax({
		type:"post",
		url:"/Account/loginwindow",
		async:true,
		data:{code:mask_input1,phone:phone},
		dataType:"json",
		success:function (data) {
			if(data.error==0){
				$('.mask_baomingtx').css('display','none');
				userid=1;
				$('#icon_star').attr('src','/static/images/icon_12.png');
			}
			if(data.error==1){
				$('.warn').html('手机验证码错误');
				$('.warn').css('display','block');
			}
		}
	});
})
	
$('.btn_warn').click(function () {
	var id = "<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
";
	var warn_1= $('.warn_1').attr('data');
	if(warn_1=='img'){
		warn_1=1;
	}else{
		warn_1=0;
	}
	var warn_2= $('.warn_2').attr('data');
	if(warn_2=='img'){
		warn_2=1;
	}else{
		warn_2=0;
	}
	var warn_3= $('.warn_1').attr('data');
	if(warn_3=='img'){
		warn_3=1;
	}else{
		warn_3=0;
	}
	$.ajax({
		type:"post",
		url:"/Matchinfo/remind",
		async:true,
		data:{m_id:id,warn_1:warn_1,warn_2:warn_2,warn_3:warn_3},
		dataType:"json",
		success:function (data) {
			if(data.error==0){
				$('.mask_baomingtx').css('display','none');
				$('#icon_star').attr('src','/static/images/icon_12.png');
			}
			if(data.error==1){
				$('.warn').html('手机验证码错误');
				$('.warn').css('display','block');
			}
		}
	});
})
	
	///////////////////////////////////////////////
	$('.taocan_attend a').bind('click',function (event) {
	event.stopPropagation();
	})
})
$(function () {
	console.log($('#scroller .taocan_list').length)
	if($('#scroller .taocan_list').length<=1){
		$('#scroller div:nth-child(1) .taocan_icon').css({'background': 'url(/static/images/icon_10.png) no-repeat','background-size': '100%'});
        $('#scroller p').css('display','block');
	}
})
</script>
</body>
</html>


<?php }} ?>