<?php /* Smarty version Smarty-3.1.6, created on 2016-11-24 18:51:48
         compiled from "../DataSource/Tpl\Matchinfo\index.html" */ ?>
<?php /*%%SmartyHeaderCode:8840581318426d6789-07762039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '531e96a4ffd6b502f4ebab295e5b7fb88970efae' => 
    array (
      0 => '../DataSource/Tpl\\Matchinfo\\index.html',
      1 => 1479982969,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8840581318426d6789-07762039',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58131842bb301',
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
<?php if ($_valid && !is_callable('content_58131842bb301')) {function content_58131842bb301($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Comon/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<title>知行合逸</title>
<style>
.wrap{padding-bottom: 60px;    word-wrap: break-word;overflow: hidden;}
.banner{background: #FFF;margin-bottom: 5px;position: relative;}
.match_base{background: #FFF;padding:0 1.21428rem;margin:0  auto 0;/*padding-bottom: 1.071428571428571rem;*/}
.match_base .flexBox{border-bottom:1px solid #efeef3;padding-bottom:1.071428571428571rem;padding-top: 1.071428571428571rem;}
.match_base .flexBox .countdown{height: auto!important;width: 5.3557rem;}
.match_base .flexBox .match_icon{width: 4.285714285714286rem;height: 4.285714285714286rem;margin-right: 1.071428571428571rem;}
.match_base .flexBox .match_icon img{width: 100%;height: 100%;border: 1px solid rgba(156,156,156,0.2);border-radius: 0.535rem;}
.match_base .flexBox .weui_media_title,.match_base .flexBox .weui_media_desc{font-size: 12px;line-height: 1.2;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 2;}
.match_base .match_types{border-bottom:1px solid #efeef3;font-size: 0.8571428571428571rem;}
.match_base .match_types>ul{overflow: hidden;}
.match_base .match_types>ul>li{color: #888888;padding: 0.7857142857142857rem 0;}
.match_base .match_types>ul>li .icon{height: 1.2285rem;width: 1.214285rem;background: url(/static/images/icon_2.png) no-repeat;background-size:100% /*14.428571rem*/;display: block;margin-right: 0.5rem;}
.match_base .match_types>ul>li .icon_calendar{background-position:-11.1428571rem -5.59142rem;}
.match_base .match_types>ul>li .icon_position{width: 0.93857rem;}
.match_base .match_types>ul>li .icon_types{background: url(/static/images/icon_3.png) no-repeat;background-size: 100%;margin-right: 0.2857142857142857rem;}
/*.match_base .match_des{padding-top:10px;}*/
.match_base .match_des>h5{margin: 1.07142rem auto;}
.match_base .match_des p{font-size: 1rem;}

.match_feature{background: #FFF;margin:0  auto 0.7142857142857143rem;padding:0.7142857142857143rem 1.071428571428571rem;font-size: 0.857142rem;}
.match_feature .flex_1>div{height: 2.93rem;border-right:1px solid #efeef3;}
.match_feature .flex_1:last-child>div{border:none; }
.match_feature .flex_1>p{text-align: center;padding:0.3571428571428571rem 0 0;}

.footer{padding:0.5714285714285714rem 1.071428571428571rem;/*background: rgba(255,255,255,.9);*/background: #f8fafa; font-size: 0.8571428571428571rem;color:#888888;position: fixed;bottom:0;width: 100%;box-sizing:border-box;max-width: 768px;z-index: 100;border-top: 1px solid #EFEEF3;border-bottom: 1px solid #EFEEF3;}
/*.footer .halficon{margin-right: 1.071428571428571rem;}*/
.footer .contact{width: 1.428571428571429rem;height: 1.428571428571429rem;background-position:-9.428571428571429rem -1.128571428571429rem;background-image: url(/static/images/icons.png);background-size:11.57142857142857rem;opacity: 0.8;}
.footer .collection{width:1.428571428571429rem;height: 1.428571428571429rem;background-position:-6.55rem -2.64285rem;background-image: none;}
.footer .collection #icon_star{width: 100%;height: 100%;}
.collected .collection{width:1.5rem;height: 1.5rem;/*background-position:-8.3014285rem -1.225714rem;*/}

.match_info,.match_meal,.match_scenic{background: #FFF;padding:1.214285rem;margin-bottom: 0.7142857142857143rem;padding-top: 0.7142857142857143rem;}
.match_info .match_des{margin-top: 2rem;}
.match_info .match_des_content{/*margin-top: 5px;*/font-size: 1rem;}
.match_info table{width:100% ;}
.match_info table th{color:#000;font-weight: normal;text-align: left;font-size: 1rem;padding-top: 1.071428571428571rem;width: 23%;}
.match_info table td{color:#888888;padding-top: 1.21428rem;font-size: 1rem;}
.match_info .rounteImg{width: 100%;/*padding-bottom:50%;*/position: relative;}
.match_info .rounteImg img{width: 100%;/*position: absolute;*/height: 100%;}
.rounte{color: #888888;font-size: 1rem;}

.match_scenic .match_scenic_t,.match_price_t{color: #000;font-weight: bold;margin-top: 0.8rem;word-wrap:break-word;font-size: 1.0714rem;}
.match_scenic .match_scenic_des,.match_price_des{color: #999999;word-wrap:break-word;font-size: 1rem;}

#cityselect{color:#888888;font-size: 1.2rem;}
#cityselect span{/*margin-left: 0.714rem;*/color:#000;display: inline-block;padding:0 1.071428571428571rem;}
#cityselect span.curr{color:#FF3175;font-weight: normal;}
/*#cityselect span.curr:before{content:"";background: url(/static/images/icon_2.png) no-repeat; background-size: 100% 14.43rem;width: 0.8571rem;height: 1.071428571428571rem;margin-top: 0.30714rem;margin-right: 0.214285rem; float: left;}*/
/*#scroller{padding:1.071428571428571rem 0;font-size: 1rem;transform: translate(0,0,0);}*/
#scroller_slide.scroll{position: fixed;top: 0;left: 0;background: #FFF;width: 100%;z-index: 10000;padding-left: 1.071428571428571rem;padding-right: 1.071428571428571rem;}


/*#scroller span{color:#000;border: 1px solid #888888;padding:2px 10px;border-radius: 5px;margin-right: 10px;}*/
/*#scroller span.curr{color:#FF2244;border-color: #FF2244;}*/

.match_meal_info{font-size: 1rem;}
.match_meal_info del{margin-left: 1.428571428571429rem;}
.price_info{border-top:1px solid #efeef4;margin-top: 1rem;position: relative;}
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
.match_base .match_types{font-size: 1rem;line-height: normal;display: flex;display: -webkit-flex;display: -ms-flexbox;display: -webkit-box;}
.match_types .icon_calendar{float: left; margin-top: 0.1428571rem;}
.match_types .icon_position{float: left;}
.match_types .icon_types{margin-top: 0.1428571rem;}
.match_types div{font-size: 1rem;/*padding-top: 0.14285rem;*/}
/*.match_base .match_types li:nth-child(1){margin-bottom: 1rem;}*/
/*.match_base .match_types li:nth-child(2){margin-bottom: 1rem;}*/
.match_base .match_des div{font-size: 1rem;color: #888888;}
.match_info_border_botom{height: 1px;position: relative;background: #efeef4;top: 3.85714rem;}
.match_info .match_des_content p{padding-top: 1.071428rem;}
.match_info .match_des_content .rounte{color: #888888;padding-bottom: 1.071428rem;}
.match_meal_info .orange .color-g9{color: #B0B0B0;font-size: 0.857142rem;}
.orange{color: #ff2345!important;}
/*.flexBox{padding-top: 1rem;}*/
.meal_trip div:last-child{border-left: none;padding-bottom: 0;}
/*.match_meal_info .orange{margin-top: 0.514rem;}*/
.match_meal_info .orange .price_tag{border: 1px solid #FF2244;padding: 1px 0.36rem;border-radius: 0.285rem;margin-right: 12px;}

.weui_btn{line-height: 2.428571428571429rem;font-size: 1.142857142857143rem;border-radius: 0.1428571428571429rem;}
.borderLeft{overflow: visible;}
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
.primary_border:active{background: #04BE02!important;}
.hotel_size div:nth-child(2){margin: 0 0 0 0.4rem;}
.hotel_size div:nth-child(3){margin: 0 0 0 0.4rem;}
.hotel_size .flex_1 div:nth-child(2){margin: 0 0;}
.dhzx{position: absolute;right: 0;bottom: 0;color: #0BB20C;line-height: 3.295rem;font-size: 1.214285714285714rem;width: 11.38392857142857rem;text-align: center;border-left: 1px solid #D5D5D6;}
.weui_dialog_ft .advice1{opacity: 0;}
.weui_dialog_ft .advice2{font-size: 1.214285714285714rem;}
.weui_dialog_confirm .weui_dialog .advice3{font-size: 1.071428571428571rem;border-top: 1px solid rgba(213,213,214,0.5);padding: 20px 0 0 0;text-align: center;}
.advice4{font-size: 1.214285714285714rem;}
.advice3 div{width: 12.57142857142857rem;margin: 0 auto;}
.advice3 div{text-align: left;}
#wrapper { position:relative; z-index:1; width:100%;height: 100%; overflow:hidden;display: block;} 
/*#scroller { width:107.1428571428571rem; float:left;height: 100%; }*/ 
.footer .sy_size{height: 1.357142857142857rem;width: 1.5rem;background: url(/static/images/icon_11.png) no-repeat;background-size: 100%;}
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
/*.weui_btn_primary{background: #ff2244;}*/
.weui_btn:after{border-radius: 4px;}
.weui_btn_dialog.primary{color: #FF2244;}
.weui_btn_warn{background: #04BE02;}
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
.banner_title{position: absolute;height: 3.392857142857143rem;width: 100%;text-align: center;line-height: 2.892857142857143rem;bottom: 0px;font-size: 1.214285714285714rem;color: #FFFFFF;background: rgba(0,0,0,0.7);}
.banner_title ul{position: absolute;bottom:0.7142857142857143rem;right: 1.071428571428571rem;z-index: 1000;}
.banner_title ul li{float: left;width: 0.3571rem;height:0.3571rem;background: #efeef4;margin-left: 0.3571rem;border-radius: 50%;opacity: 0.45;}
.banner_title ul li.curr{background: #efeef4;opacity: 1;}
.match_types ul li:nth-child(2) span{border-right: dashed 1px #888888;margin:0 3px;display: inline-block;height: 0.7142857142857143rem;height: 1rem;transform: translateY(0.1428571428571429rem);-webkit-transform: translateY(0.1428571428571429rem);-ms-transform: translateY(0.1428571428571429rem);-moz-transform: translateY(0.1428571428571429rem);}
.match_types ul li:nth-child(2) span:nth-child(1){border-right: solid 1px #888888;}
.match_time{box-sizing: border-box;padding: 1.142857142857143rem 0;background: #FFFFFF;}
/*.match_show_1{width: 57.5px;height: 60px;border-radius: 0% 0% 0% 0%;background: #006600;}*/
/*.match_show{width: 100px;}*/
.match_show_top{width:4.107142857142857rem;height: 1.928571428571429rem; background: #ff2345;line-height: 1.928571428571429rem;text-align: center;color: #FFFFFF;font-size: 0.8571428571428571rem;border-radius: 0.5rem 0.5rem 0% 0%;border: solid 1px #ff2345;}
.match_show_bottom{width: 4.107142857142857rem;height: 2.321428571428571rem;border-radius: 0 0 0.5rem 0.5rem;background: #FFFFFF;border: solid 1px #d8d8d8;border-top: none;font-size: 1.642857142857143rem;color: #000000;text-align: center;line-height: 2.321428571428571rem;}
.match_show_1{display: inline-block;margin-right: 1.071428571428571rem;}
.time_title{padding-left: 0.0714285714285714rem;display: flex;display: -webkit-flex;display: -moz-box;display: -ms-flexbox;display: -webkit-box;}
.match_time .time_title .time_title_inner{font-size: 0.8571428571428571rem;color: #888888;margin-bottom: 0.6428571428571429rem;display: block;width: 4.178571428571429rem;text-align: center;flex: 1;-webkit-flex: 1;-moz-box-flex: 1;-ms-flex: 1;-webkit-box-flex: 1;}
.show_special{border-color: #FF2345;}
.time_tag span{display: inline;height: 1.214285714285714rem;width: 2.5rem;}
.time_tag span:nth-child(1){display:inline-block; padding: 0 0.2857142857142857rem;margin: 0.2142857142857143rem 0 0.7142857142857143rem 1.142857142857143rem;}
.time_tag span:nth-child(2){margin-right: 0px;margin-top: 0.2142857142857143rem;display:inline-block;padding: 0 0.2857142857142857rem;float: right;}
.time_tag span:nth-child(3){margin-right: 0px;margin-left: 1.142857142857143rem;display:inline-block;padding: 0 0.2857142857142857rem;}
.time_tag span:nth-child(4){margin-right: 0px;margin-bottom: 0px;display:inline-block;padding: 0 0.2857142857142857rem;float: right;}
.space{width: 100%;height: 1.214285714285714rem;background: #EFEEF4;}
.space:before{content: "";width: 100%;height: 1px;background: #cbcbd0;}
.table_title{width: 100%;display: flex;display: -webkit-flex;display: -moz-box;display: -webkit-box; box-sizing: border-box;background: #FFFFFF;font-size: 1.214285714285714rem;}
.table_title div{ line-height: 3.357142857142857rem;text-align: center;position: relative;}
.table_title .table_tour:after{content: "";width: 100%;height: 1px;background: #D9D9D9;position: absolute;bottom: 1px;left: 0px;}
.table_tour_curr:after{display: none;}
.table_bg2:before{content: "";width: 1px;height: 100%;background: #D9D9D9;position: absolute;left: 0;}
.table_suggest{-webkit-flex: 1;-moz-box-flex: 1;flex: 1;-webkit-box-flex: 1; border-radius: 0.7142857142857143rem 0.7142857142857143rem 0px 0px;background: #FFFFFF!important;color: #FF2345!important;}
.table_tour{-webkit-flex: 1;-webkit-box-flex: 1;-moz-box-flex: 1;flex: 1;border-radius: 0px 0px 0px 0px;background: #FFFFFF;display: flex;display: -webkit-flex;display: -webkit-box; display: -moz-box;height: 3.214285714285714rem;color: #434343;}
.table_bg1{margin: 0;-webkit-flex: 1;-moz-box-flex: 1;flex: 1;height: 3.142857142857143rem;-webkit-box-flex: 1;}
.table_bg2{margin: 0;flex: 1;-webkit-flex: 1;-moz-box-flex: 1;height: 3.142857142857143rem;-webkit-box-flex: 1;}
.table_bg3{width: 100%;height: 2px;background: #FFFFFF;position: relative;}
.table_bg3 div{width: 50%; background: #FF2244;height: 100%;border-left: 1px solid #FF2244;position: absolute;left: 0;}
.table_bg4{display: inline-block;width: 1.214285714285714rem;background: -webkit-linear-gradient(top,#db1d3a 0%,#ff4864 40%,#ff4864 100%);border-radius: 0 0 0px 0px;}
.match_ts{width: 8.214285714285714rem;margin:0 auto;padding: 0.9285714285714286rem 0;}
.text_ts{font-size: 1rem;color: #888888;}
.text_ts img,.rules img,.inner_text_1 img{width: 100%;}
.match_ts img{width: 100%;}
.match_line{height: 1px;width: 100%;background: #d9d9d9;margin-top: 1.428571428571429rem;margin-bottom: 2.142857142857143rem;}
.match_line_1{height: 1px;width: 100%;background: #d9d9d9;margin-top: 1.428571428571429rem;margin-bottom: 2.142857142857143rem;}
.match_line_2{height: 1px;width: 100%;background: #d9d9d9;margin-top: 1.428571428571429rem;margin-bottom: 2.142857142857143rem;}
.taocan_list{position: relative;box-sizing: border-box;display: flex;display: -webkit-flex;display: -webkit-box; display: -moz-box;padding: 0.3571428571428571rem 0;}
.taocan_list:after{content: '';display: block;height: 1px;background: #EFEEF3;width: 112%;position: absolute;bottom: 0px;left: -1.214285714285714rem;}
/*.taocan_list:before{content: '';display: block;height: 1px;background: #EFEEF3;width: 112%;position: absolute;top: 0px;left: -1.214285714285714rem;}*/
/*#scroller div:nth-child(1):before{display: none;}*/
.taocan_list_title{font-size: 1.214285714285714rem;font-weight: bold;min-width: 9.285714285714286rem;max-width: 12.57142857142857rem;overflow: hidden;line-height: 3.428571428571429rem;}
.taocan_attend{font-size: 0.7857142857142857rem;color: #FFFFFF;background: #FF2345;/*padding: 0.2142857142857143rem 0.3571428571428571rem;*/margin-right: 0.5rem;height: 1.214285714285714rem;line-height: 1.214285714285714rem;display: block;text-align: center;width: 100%;}
.taocan_icon{display:inline-block; width: 0.8928571428571429rem;height: 0.5rem; background: url(/static/images/icon_9.png) no-repeat;background-size: 100%;margin-bottom: 0.7142857142857143rem;margin-left: 0.6428571428571429rem;}
.taocan_sp1{display: flex;display: -webkit-flex;display: -moz-box;display: -webkit-box; -webkit-flex: 1;-moz-box-flex: 1;flex: 1;-webkit-box-flex: 1;}
/*.taocan_icon img{width: 100%;}*/
/*#scroller div:nth-child(1) .taocan_icon{background: url(/static/images/icon_10.png) no-repeat;background-size: 100%;}*/ 
.match_meal{padding-bottom: 0;margin-bottom: 60px;}
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
.mask_buttun{height: 2.928571428571429rem;text-align: center;line-height: 2.928571428571429rem;font-size: 1.071428571428571rem;color: #04BE02;display: flex;display: -webkit-flex;display: -moz-box;display: -webkit-box;}
.mask_buttun span{-webkit-flex: 1;-moz-box-flex: 1;flex: 1;-webkit-box-flex: 1; display: block;text-align: center;-webkit-box-flex: 1;}
.weui_btn_disabled{background: #BBBBBB;color: #FFFFFF!important;}
.mask_outbox_2_pc{top: 1%;}
.btn_style{border: 0.1071428571428571rem solid #ff2244!important;color: #ff2244!important;border-radius: 0.2857142857142857rem;}
.match_base .match_types>ul li:nth-child(1){border-bottom: 1px solid #efeef3;}
.time_line{background: url(/static/images/time_line_2.jpg) no-repeat;background-size: 100%;height: 0.5rem;width: 23.42857142857143rem;margin: 0 auto;}
.time_line_1{background: url(/static/images/time_line_1.jpg) no-repeat;background-size: 100%;}
.time_line_2{background: url(/static/images/time_line_2.jpg) no-repeat;background-size: 100%;}
.time_line_3{background: url(/static/images/time_line_3.jpg) no-repeat;background-size: 100%;}
.time_line_bottom{display: flex;display: -webkit-flex;display: -moz-box;display: -ms-flexbox;display: -webkit-box;}
.time_line_bottom div{display: block;flex: 1;text-align: center;font-size: 1rem;color: #888888;margin-top: 0.4285714285714286rem;-webkit-flex: 1;-ms-flex: 1;-moz-box-flex: 1;-webkit-box-flex: 1;}
.time_title_tag{margin-bottom: 0!important;border: 1px solid #ff2244;border-radius: 0.3571428571428571rem;color: #FF2244!important;padding: 0.2142857142857143rem;}
.i_tra{background: url('static/images/rz-i-tra-zh.png') no-repeat;background-size:auto 100%;}
.utmb{background: url('static/images/rz-utmb-zh.png') no-repeat;background-size:auto 100%;}
.isf{background: url('static/images/rz-isf-zh.png') no-repeat;background-size:auto 100%;}
.csa{background: url('static/images/rz-csa-zh.png') no-repeat;background-size:auto 100%;}
.wmm{background: url('static/images/rz-wmm-zh.png') no-repeat;background-size:auto 100%;}
.aims{background: url('static/images/rz-aims-zh.png') no-repeat;background-size:auto 100%;}
.caa{background: url('static/images/rz-caa-zh.png') no-repeat;background-size:auto 100%;}
.iaaf{background: url('static/images/rz-iaaf-zh.png') no-repeat;background-size:auto 100%;}
.zx-rz{background: url(/static/images/zx-rz.jpg) no-repeat;background-size: auto 100%;margin: 0 auto;height: 100%;width: 4.285714285714286rem;}
.match_info{margin-bottom: 4.285714285714286rem;}
.match_price_des{padding-bottom: 1.071428571428571rem;}
/*////////////////////////即将开始报名样式///////////////////////////////////*/
.enroll_coming{font-size: 16px;color: #888888;text-align: center;}
.enroll_time{overflow: hidden;height: 4.071428571428571rem;padding: 2rem 0 2.142857142857143rem 0;}
.enroll_time div{float: left;}
.enroll_time_title{font-size: 1rem;color: #888888;line-height: 4.071428571428571rem;}
.enroll_time_text{overflow: hidden;height: 4.071428571428571rem;}
.enroll_time_text span{float: left;line-height: 4.071428571428571rem;font-size: 2.5rem;color: #888888;}
.hour,.minute,.secound{width: 4.071428571428571rem;text-align: center;background: #E7E7E7;border-radius: 5px;}
.hour{margin-left: 1.285714285714286rem;}
.colons{margin: 0 0.5714285714285714rem;}
.enroll_warn{padding: 2rem 0 2.142857142857143rem 0;}
.enroll_warn_border{width: 10.78571428571429rem;margin: 0 auto;font-size: 1rem;color: #ff3175;border: 1px solid #FF3175;border-radius: 5px;}
.enroll_warn_border div{width: 6rem;margin: 0 auto;height: 1.5rem;padding: 0.5rem 0px;}
.enroll_warn_border i{background: url(static/images/icon_12.png) no-repeat; width: 1.285714285714286rem;height: 1.5rem;background-size: 100%;float: left;margin-right: 0.4285714285714286rem;}
.other{padding: 2rem 0 2.142857142857143rem 0;}
.other div{width: 10.78571428571429rem;margin: 0 auto;font-size: 1rem;color: #ff3175;border: 1px solid #FF3175;border-radius: 5px;text-align: center;padding: 0.5rem 0px;}
.game_share{font-size: 1.428571428571429rem;color: #888888;text-align: center;padding: 2rem 0 2.142857142857143rem 0;}
.fill_warn{padding: 0.7142857142857143rem 0 2.142857142857143rem 0;}
.fill_warn_border{width: 10.78571428571429rem;margin: 0 auto;font-size: 1rem;color: #ff3175;border: 1px solid #FF3175;border-radius: 5px;}
.fill_warn_border div{width:9.142857142857143rem;margin: 0 auto;height: 1.5rem;padding: 0.5rem 0px;}
.fill_warn_border i{background: url(static/images/icon_12.png) no-repeat; width: 1.285714285714286rem;height: 1.5rem;background-size: 100%;float: left;margin-right: 0.4285714285714286rem;}
#cityselect{font-size: 0.8571428571428571rem;position: relative;padding-bottom: 0.4285714285714286rem;}
#cityselect .gocity_title{float: left;margin-right: 0.4285714285714286rem;line-height: 1.428571428571429rem;}
.select_gocity{position: fixed;background: #FFFFFF;z-index: 100;bottom: 0px;bottom: 0px;width: 100%;left: 0;height: 100%;background: rgba(0,0,0,0.5);z-index: 100000;display: none;}
.select_gocity .gocity_title{position: absolute;bottom: 0px;width: 100%;line-height: 2.785714285714286rem;background: #FFFFFF;font-size: 1.428571428571429rem;}
.select_gocity span{display: block!important;border-bottom: 1px solid #BBBBBB;color: #000000!important;}
.select_gocity span div{float: right;}
.select_gocity p{text-align: center;border-bottom: 1px solid #BBBBBB;}
.select_text{display: inline-block;height: 1.428571428571429rem;}
.select_text div:nth-child(1){border-radius: 5px 0 0 5px;float: left;border: 1px solid #ff2244;box-sizing: border-box;height: 1.428571428571429rem;line-height: 1.357142857142857rem;width: 2.571428571428571rem;text-align: center;border-right: none;color: #FF2244;}
.select_text div:nth-child(2){width: 1rem;background: #FF2244;height: 1.428571428571429rem;float: left;border-radius: 0 5px 5px 0;}
.select_text i{background: url(/static/images/go_city.png) no-repeat;display: block;width: 0.7142857142857143rem;height: 0.3571428571428571rem;background-size: 100%;margin: 0 auto;margin-top: 0.5714285714285714rem;}
.gocity_mask{position: fixed;width: 100%;height: 100%;top: 0px;left: 0px;z-index: 100;}
/*///////////////////////////////*/
.weui_select{width: auto;float: left;border: 1px solid #FF2244;box-sizing: border-box;padding: 0 0.4285714285714286rem;height: 1.428571428571429rem;line-height: 1.285714285714286rem;border-radius: 5px 0 0 5px;border-right: none;color: #FF2244;text-align: center;}
/*#scroller .taocan_list:nth-child(1):before{content: "";width: 120%;height: 1px;background: #EFEEF3;position: absolute;top: 0px;left: -1.214285714285714rem;}*/
#cityselect:after{content: "";width: 120%;height: 1px;background: #EFEEF3;position: absolute;bottom: 0px;left: -1.214285714285714rem;}
.city_after:after{display: none;}
.city_after{padding-bottom: 0px!important;}
.inner_text_1 img{width: 100%;}
.taocan_dec{text-align: center; display: inline-block;flex: 1;-webkit-flex: 1;-moz-box-flex: 1;-webkit-box-flex: 1; border: 1px solid #FF2345;border-radius: 5px;display: inline-block!important;width: 5.428571428571429rem;}
.dash:after{content: '';display: block;width: 112%;position: absolute;bottom: 0px;left: -1.214285714285714rem;border-top: 1px dashed #EFEEF3;background: none;}
.price_info:after{content: '';display: block;height: 1px;background: #EFEEF3;width: 112%;position: absolute;bottom: 0px;left: -1.214285714285714rem;}
.feedback{background: #FFFFFF;box-sizing: border-box;padding: 1.714285714285714rem 1.142857142857143rem;font-size: 1rem;width: 22.85714285714286rem;margin: 0 auto;display: none;border-radius: 5px;color: #888888;}
.weui_icon_msg:before{font-size: 3.571428571428571rem;}
.feedback_icon{width: 3.714285714285714rem;margin: 0 auto;margin-bottom: 0.7142857142857143rem;}
#place{font-size: 1rem!important;overflow: hidden;white-space: nowrap;width: 14.28571428571429rem;position: relative;}
/*///////赛事logo////////////////////////////////////*/
.has_logo_title{position: absolute;left: 3.357142857142857rem;max-width: 20.14285714285714rem;overflow: hidden;white-space: nowrap;text-overflow: ellipsis;line-height: 2.5rem;}
.game_logo{width: 2.5rem;height: 2.5rem; position: absolute;left: 0.4285714285714286rem;bottom: 0.4285714285714286rem; z-index: 100;overflow: hidden;background: #FFFFFF;}
.title_enName{font-size: 0.8571428571428571rem; position: absolute;z-index: 100;color: #FFFFFF;bottom: 0px;left: 3.571428571428571rem; max-width: 20.14285714285714rem;font-family: '微软雅黑';line-height: 2rem;}
.banner_ulposition{left: 50%;right: auto!important;transform: translateX(-50%);-webkit-transform: translateX(-50%);-ms-transform: translateX(-50%);-moz-transform: translateX(-50%);}
</style>
<div class="wrap">
    <div class="banner">
        <?php echo $_smarty_tpl->getSubTemplate ('Comon/banner.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

 		<div class="banner_title">
        	<div class="has_logo_title"><?php echo $_smarty_tpl->tpl_vars['info']->value['m_name'];?>
</div>
        </div>
        <div class="game_logo"><img style="width: 100%;height: 100%; float: left;" src="<?php echo $_smarty_tpl->tpl_vars['info']->value['m_icon'];?>
"/></div>
        <p class="title_enName"><?php echo $_smarty_tpl->tpl_vars['info']->value['m_enName'];?>
</p>
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
            <ul style="display: inline-block;flex: 1;-webkit-flex: 1;-webkit-box-flex: 1;">
                <li>
	                <i class="icon icon_position"></i>
	                <div id="place">
	                	<div id="place_scroll">
	                		<span class="guojia"><?php echo $_smarty_tpl->tpl_vars['info']->value['m_country'];?>
--</span> 
	                		<span class="info_city"><?php echo $_smarty_tpl->tpl_vars['info']->value['m_city'];?>
</span>
	                	</div>
	                	<div style="position: absolute;height: 100%;width: 0.8571428571428571rem;background: #FFFFFF;opacity: 0.8;top: 0px;right: 0px;"></div>
	                </div>
	            </li> 
                <!--<li><i class="icon icon_calendar"></i><?php echo substr($_smarty_tpl->tpl_vars['info']->value['m_GameTime'],0,10);?>
</li>-->
                <li style="display: flex;display: -webkit-flex;display: -moz-box;display: -webkit-box;"><i class="icon icon_types"></i><?php echo $_smarty_tpl->tpl_vars['info']->value['m_mtypes_class'];?>
<div style="display: block;font-size: 1rem;padding-top: 0px;width: 12rem;"><span></span><?php echo str_replace("|","<span></span>",$_smarty_tpl->tpl_vars['info']->value['m_Mtypes']);?>
</div></li>
                <!--<li <?php if ($_smarty_tpl->tpl_vars['auths']->value==''){?>style="width:100%"<?php }?>><i class="icon icon_types"></i></li>-->
                <!--<li><div><?php echo $_smarty_tpl->tpl_vars['auths']->value;?>
</div></li>-->
            </ul>
            <div class="time_tag" style="width: 7.704285714285714rem;height: 4.428571428571429rem;border-left: dashed 1px #EFEEF3;box-sizing: border-box;margin: 0.7857142857142857rem 0;">
            	<span class='i_tra'></span>
            	<span class='utmb'></span>
            	<span class='isf'></span>
            	<span class='csa'></span>
                    <!--<?php echo $_smarty_tpl->tpl_vars['auths']->value;?>
-->
                    <!--<span style="padding: 0px 0px;color: #FF2345;background: url(/static/images/tag_zx.png) no-repeat;float:right;width: 3.357142857142857rem;height: 1.5rem;background-size: 100% 100%;"></span>-->
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
    	<div class="match_time">
            <div class="time_title">
                <span class="time_title_inner"><span>开始报名</span></span>
                <span class="time_title_inner"><span>报名截止</span></span>
                <span class="time_title_inner"><span class="time_title_tag">比赛日期</span></span>
            </div>
            <div class="time_line">
            </div>
            <div class="time_line_bottom">
            	<div><?php echo substr($_smarty_tpl->tpl_vars['info']->value['m_signuptime'],0,10);?>
</div>
            	<div><?php echo substr($_smarty_tpl->tpl_vars['info']->value['m_untilTime'],0,10);?>
</div>
            	<div><?php echo substr($_smarty_tpl->tpl_vars['info']->value['m_GameTime'],0,10);?>
</div>
            </div>
            <!--<div class="match_show">
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
            </div>-->
        </div>
        <div class="space"></div>
        <div class="table_bg3">
        	<div></div>
        </div>
        <div class="table_title">
            <div class="table_tour table_tour_curr">
                <div class="table_bg1 table_tour_curr">行程套餐</div>
            </div>
            <div class="table_tour">
                <div class="table_bg2">赛事介绍</div>
            </div>
            <!--<div class="table_bg4"></div>-->
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
            <?php if ($_smarty_tpl->tpl_vars['info']->value['m_Pfeature']){?>
	            <div class="match_ts"><img src="/static/images/m_Pfeature.jpg" alt="" /></div>
	            <div class="line3 text_ts" style="-webkit-line-clamp: initial;"><?php echo $_smarty_tpl->tpl_vars['info']->value['m_Pfeature'];?>
</div>
	            <div class="match_line"></div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['info']->value['m_special']){?>
            <div class="match_ts"><img src="/static/images/icon_4.jpg" alt="" /></div>
            <div class="line3 text_ts" style="-webkit-line-clamp: initial;"><?php echo $_smarty_tpl->tpl_vars['info']->value['m_special'];?>
</div>
            <div class="match_line"></div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['info']->value['m_info']){?>
            <div class="match_ts"><img src="/static/images/icon_5.jpg" alt="" /></div>
            <div id="box_text_1">
                <div class="inner_text_1">
                        <!--<p>报名须知：</p>-->
                    <div style="color: #888888;padding-top: 0;font-size: 1rem;"><?php echo $_smarty_tpl->tpl_vars['info']->value['m_info'];?>
</div>
                </div>
            </div>
            <div id="text_view_1">展开更多<i style="display: inline-block;width: 1.071428571428571rem;"><img style="width: 100%;" src="/static/images/icon_9.png" alt="" /></i></div>
            <div class="match_line_1"></div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['info']->value['m_rules']){?>
            <div id="box_text_2">
                    <div class="inner_text_2">
                        
                        <div class="match_ts"><img src="/static/images/icon_6.jpg"/></div>
                        <!--<p>赛事规程：</p>-->
                        <div class="rules">
                            <?php echo $_smarty_tpl->tpl_vars['info']->value['m_rules'];?>

                        </div>
                        
                    </div>
            </div>
            <div id="text_view_2">展开更多<i style="display: inline-block;width: 1.071428571428571rem;"><img style="width: 100%;" src="/static/images/icon_9.png" alt="" /></i></div>
            <div class="match_line_2"></div>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['info']->value['m_route']){?>
            <div class="match_ts"><img src="/static/images/icon_7.jpg"/></div>
            <div class="rounte"><?php echo $_smarty_tpl->tpl_vars['info']->value['m_route'];?>
</div>
            <?php }?>
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
                    <h5 class="borderLeft"><p class="" id="cityselect"></p></h5>
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
               <div class="footer flexBox">
        <div class="" style="margin-right: 1rem;">
            <a href="<?php if (session('SESSION_ZX_INDEX')){?><?php echo session('SESSION_ZX_INDEX');?>
<?php }else{ ?>/<?php }?>" style="display: block;text-align: center;margin-top: 0.1428571428571429rem;">
                <i class="halficon collection sy_size">
                    <!--<img class="sy_icon" src="/static/images/icon_11.png"/>-->
                </i>
                <p>赛事列表</p>
            </a> 
        </div>
       <?php if ($_smarty_tpl->tpl_vars['varable']->value&&$_smarty_tpl->tpl_vars['info']->value['m_placesleft']>0){?>
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
            <?php }elseif($_smarty_tpl->tpl_vars['order']->value['paystats']==1||$_smarty_tpl->tpl_vars['order']->value['paystats']==10){?>
                <button href="javascript:void(0);" class="weui_btn weui_btn_disabled weui_btn_default">已报名</button>
            <?php }else{ ?>
                <?php if ($_smarty_tpl->tpl_vars['varable']->value){?> 
                    <?php if ($_smarty_tpl->tpl_vars['info']->value['m_placesleft']<=20){?>
                        <?php if ($_smarty_tpl->tpl_vars['info']->value['m_placesleft']<=0){?>
                            <button href="javascript:void(0);" class="weui_btn weui_btn_disabled weui_btn_default">名额已满</button>    
                        <?php }else{ ?>
                            <?php if ($_smarty_tpl->tpl_vars['info']->value['m_enterMode']=="remote"){?>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['info']->value['m_enterurl'];?>
" class="weui_btn weui_btn_primary color-w"><span>前往官网报名</span></a>
                            <?php }else{ ?>
                            <a href="/Enroll?m_id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
" class="weui_btn weui_btn_primary  color-w"><span>立即报名</span></a>
                            <?php }?>
                        <?php }?>
                    <?php }else{ ?>
                        <?php if ($_smarty_tpl->tpl_vars['info']->value['m_enterMode']=="remote"){?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['info']->value['m_enterurl'];?>
" class="weui_btn weui_btn_warn color-w"><span>前往官网报名</span></a>
                        <?php }else{ ?>
                        <a href="/Enroll?m_id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
" class="weui_btn weui_btn_primary color-w"><span>立即报名</span></a>
                        <?php }?>
                    <?php }?>
                <?php }else{ ?>
                    <?php echo $_smarty_tpl->tpl_vars['btn']->value;?>

                <?php }?>
            <?php }?>
        <?php }else{ ?>
            <button href="javascript:void(0);" class="weui_btn weui_btn_disabled weui_btn_default">比赛结束</button>
        <?php }?>
        </div>
    </div>
    </div>

<!--end of wrap -->
<div class="back_top" onclick="goTop(0.2,16);return false;"></div>
<div class="mask_baomingtx">
    <!--//////////////////////////登陆////-->
    <div class="mask_outbox mask_outbox_1">
        <!--<div class="mask_inner photo_yz">

        </div>-->
		<div class="feedback">
			<div class="feedback_icon">
				<i class="weui_icon_msg weui_icon_success"></i>
			</div>
			<div style="text-align: center;">
				<p>设置成功!</p>
				<div>如需取消，请到“我的赛事”中取消。</div>
				<div style="font-size: 1rem;"><span class="feedback_num">3</span>秒后自动返回</div>
			</div>
		</div>
        
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
        <div class="feedback">
			<div class="feedback_icon">
				<i class="weui_icon_msg weui_icon_success"></i>
			</div>
			<div style="text-align: center;">
				<p>设置成功!</p>
				<div>如需取消，请到“我的赛事”中取消。</div>
				<div style="font-size: 1rem;"><span class="feedback_num">3</span>秒后自动返回</div>
			</div>
		</div>
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
        <div class="mask_buttun"><span class="no_user" style="border-right: 1px solid #D5D5D6;">确定</span><span class="cancle">取消</span></div>
    </div>
    
</div>
<script src="/static/js/zepto.js"></script>
<script src="/static/weui/js/weui.js"></script>
<script type="text/javascript" src="/static/js/iscroll.js?v=1.2"></script>
<script type="text/javascript">
$('.table_bg1').bind('click',function () {
	$('.table_bg3 div').animate({left:"0"},200);
	$('.table_bg2').parent().removeClass('table_tour_curr');
	$(this).parent().addClass('table_tour_curr');
    $('.table_bg2 div').css({'background':'none','color':'#ffffff'});
//  $('.table_bg4').css('border-radius','0 0 0 0');
//  $('.table_bg3').css('border-radius','0 0 10px 0');
    $('.table_bg1 div').css({'background':'#ffffff','color':'#434343'});
    $('.match_info').hide();
    $('.match_meal').show();
})
$('.table_bg2').bind('click',function () {
	$('.table_bg3 div').animate({left:"50%"},200);
	$('.table_bg1').parent().removeClass('table_tour_curr');
	$(this).parent().addClass('table_tour_curr');
    $('.table_bg1 div').css({'background':'none','color':'#ffffff'});
//  $('.table_bg4').css('border-radius','0 0 0 10px');
    $('.table_bg1').css('border-radius','0 0 10px 0');
//  $('.table_bg3').css('border-radius','0 0 0 0');
    $('.table_bg2 div').css({'background':'#ffffff','color':'#434343'});
    $('.match_info').show();
    $('.match_meal').hide();
    show_all();
    
})
///////////////////////////////////////////////////////////////////////////
$(".banner_pic").silder();


var userid = '<?php echo $_smarty_tpl->tpl_vars['uid']->value;?>
';
 var game_fill='<?php echo $_smarty_tpl->tpl_vars['info']->value['m_placesleft'];?>
';
 var id = "<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
";

////////展示更多//////////
    function show_all() {
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
    }
////////////////////////////////////////////////////////////提醒报名弹窗//////////////////////////////////////////////////
$(function () {
			////////////////////赛事logo///////////////////////////
	var logo_imgsrc = '<?php echo $_smarty_tpl->tpl_vars['info']->value['m_ptype'];?>
';
	if(logo_imgsrc=='国内'){
		$('.game_logo').hide();
		$('.has_logo_title').removeClass('has_logo_title');
		$('.banner_title ul').addClass('banner_ulposition');
		$('.title_enName').hide();
	}
	
	///////前往官网报名//////
	var go_guanw = '<?php echo $_smarty_tpl->tpl_vars['info']->value['m_enterMode'];?>
';
	if(go_guanw=='remote'){
		$('.table_tour').removeClass('table_tour_curr');
		$('.table_bg2').parent().addClass('table_tour_curr');
		$('.table_bg3 div').css("left","50%");
		$('.match_meal').hide();
		$('.match_info').show();
		show_all();
	}
	
	
//  var star_boon=false;
//  $('.collect_zt').click(function () {
//      if(star_boon==false){
//          
//      }else{
//          $('#icon_star').attr('src','/static/images/icon_15.png')
//          star_boon=false;
//      }
//  })
    
    var id = "<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
";
    $(".collect").bind('click',function () {
        if(userid==''){
        	if(game_fill<=0){
        		$('.mask_text1').html('');
        		$('.mask_text2 span span').html('有名额时提醒我');
        	}
            $('.mask_outbox_1').css('display','none');
            $('.mask_outbox_2').css('display','block');
        }
        if(userid!=''){
        	if(game_fill<=0){
        		$('.mask_text1').html('');
        		$('.mask_text2 span span').html('有名额时提醒我');
        	}
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
////                if(data.msg==1){
////                    $('#icon_star').src='/static/images/icon_star_1.png';
////                    _this.addClass("collected")
////                }
////                else{
////                    $('#icon_star').src='/static/images/icon_star_2.png';
////                    _this.removeClass("collected")
////                }
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


$(function (){
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
        g_data='',
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
            var json_length=0;
            for (var key in taocan_length) {
                json_length++;
            }
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
            	
            	
            	var html = "<div class='gocity_title'>出发城市:</div><div class='select_text'><select class='weui_select' value='上海'>";
                for(var i in c){
                    html+="<option  data-id='"+i+"' value= '"+i+"'  data-cid='"+c[i][1]+"'>"+c[i][0]+"</option>";
                    if(c[i][0]=="不限"){
                        html = "";
                        $('#cityselect').addClass('city_after');
                        break;
                    }
                }
//              var html = "<div class='gocity_title'>出发城市:</div><div class='select_text'><div>"+c[0][0]+"</div> <div><i></i></div></div><div class='select_gocity'><div class='gocity_title'><p>出发城市</p>";            
//              for(var i in c){
//                  html+="<span  data-id='"+i+"'   data-cid='"+c[i][1]+"'>"+c[i][0]+"<div class=' weui_cell_ft'></div></span>";
//                  if(c[i][0]=="不限"){
//                      html = "";
//                      break;
//                  }
//              }
                html=html+'</select><div><i></i></div></div>';
//              
                addcurr.call(this.html(html).find('.taocan_list').click(function(){
                    currcityid = $(this).attr("data-id");
                    addcurr.call(cityselect.find('.taocan_list'),currcityid);
                    loaddata.call(scroller,currcityid);
                }),currcityid);
                $('#cityselect span:nth-child(1)').addClass('curr');
                $('#cityselect .gocity_title span[data-id="0"] div').addClass('weui_icon_success_no_circle');
                loaddata.call(scroller,currcityid);
                $('.weui_select').change(function () {
                	currcityid = $(this).val();
//                  addcurr.call(cityselect.find("span"),currcityid);
                    loaddata.call(scroller,currcityid);
                    $('.select_text i').css({background:'url(/static/images/go_city.png) no-repeat',backgroundSize: '100%'})
                })
//                 this.find('option').tap(function(){
//                 	$('.select_gocity span div').removeClass('weui_icon_success_no_circle');
//                 	$(this).find('div').addClass('weui_icon_success_no_circle');
//                 	$('.select_gocity').hide();
//                 	setTimeout(function () {
//                 		$('.gocity_mask').remove();
//                 	},400);
//                 	$('.select_text div:nth-child(1)').html($(this).html());
//                     currcityid = $(this).attr("data-id");
//                     addcurr.call(cityselect.find("option"),currcityid);
//                     loaddata.call(scroller,currcityid);
//                 });
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
                if(parseFloat(meallisttmp[key]['g_currprice'])>=1){
                	var zhengs_price= Math.round(meallisttmp[key]['g_currprice']);
                }else{
                	var zhengs_price= parseFloat(meallisttmp[key]['g_currprice']);
                }
//              html = "<span data-id='"+meallisttmp[key]['id']+"' data-index='"+index+"'>"+meallisttmp[key]['g_name']+"</span>"+html;
//              var btnhtml = "";
//              if (varable && meallisttmp[key]['g_stockleft']>0) {
//					btnhtml = "<span class='taocan_attend'><a style='color:#ff2345;' href='/Enroll?m_id=<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
'>立即报名</a></span>";
//              }
//              if(meallisttmp[key]['g_stockleft']<=0){
//					btnhtml = "<span class='taocan_attend' style='border-color:#bbbbbb;'><a style='color:#bbbbbb;' href='javascript:void(0)'>名额已满</a></span>";
//              }
                if(meallisttmp[key]['g_name']=='赛事单独报名'){
                	if(g_data==''){
	                    var per='';
	                    $.ajax({
	                        cache: false,
	                        async:false,
	                        url:"/Matchinfo/getcourse?m_id="+g_mid,
	                        type: "POST",
	                        dataType: "json",
	                        timeout:3000,
	                        success: function(data){
	                        	g_data=data;
	                            var html =htmlNotip= "";
	                            if(data.error == 0 ){
	                                data = data.data;
	                                var min=100000000000000000;
	                                for (var i=0;i<data.length;i++) {
	                            		if(parseFloat(data[i].g_currprice)<min && parseFloat(data[i].g_currprice)!=0){
	                            			min=data[i].g_currprice;
	                            		}
	                            	}
//	                                if(){
//	                                	
//	                                }
									if(min>=1){
										zhengs_price =Math.round(min);
									}else{
										zhengs_price =min;
									}
	                                   
	                            }
	                        },
	                        error:function(){
	                            weui.Loading.hide();
	                            weui.Loading.error("系统错误！",2000);
	                        }
	                    });                		
                	}else{
                		data=g_data;
                        var html =htmlNotip= "";
                        if(data.error == 0 ){
                            data = data.data;
                            var min=100000000000000000;
                            for (var i=0;i<data.length;i++) {
                        		if(parseFloat(data[i].g_currprice)<min){
                        			min=data[i].g_currprice;
                        		}
                        	}
                            if(min>=1){
								zhengs_price =Math.round(min);
							}else{
								zhengs_price =min;
								}    
                        }
                	}
                }
                html="<div class='taocan_list'  data-id="+meallisttmp[key]['id']+" data-index="+index+"><span class='taocan_sp1'><span class='taocan_list_title'>"+meallisttmp[key]['g_name']+"</span></span><div style='display:inline-block;padding-top:0.2857142857142857rem;'><p class='orange taocan_dec'><span style='font-size:0.8571428571428571rem!important;'><span>￥</span><span class='_price' style='font-weight: bold;font-size:0.8571428571428571rem;'>"+zhengs_price+"</span><span>起</span></span><span class='taocan_attend'>查看详情</span></p><i class='taocan_icon'></i></div></div><p style='display:none;padding-top:1.571428571428571rem;' tancan='1' class='match_meal_content_"+meallisttmp[key]['id']+"'></p>"+html;
//              html="<div class='taocan_list'  data-id="+meallisttmp[key]['id']+" data-index="+index+"><span class='taocan_sp1'><span class='taocan_list_title'>"+meallisttmp[key]['g_name']+"</span><p class='orange' style='text-align: center; display: inline-block;flex: 1;-webkit-flex: 1;-moz-box-flex: 1;'><span>￥<span class='_price' style='font-size: 1.214285714285714rem;font-weight: bold;'>"+zhengs_price+"</span><span>起/人</span></span></p></span><p style='display:inline-block;padding-top:0.2857142857142857rem;'>"+btnhtml+"<i class='taocan_icon'></i></p></div><p style='display:none;padding-top:1.571428571428571rem;' tancan='1' class='match_meal_content_"+meallisttmp[key]['id']+"'></p>"+html;
            }
            addcurr.call(this.html(html).find('.taocan_list').click(function(){
            	console.log($(this))
                var data_id=$(this).attr('data-id');
                var match_H=$(".match_meal_content_"+data_id).height();
                if(match_H>0){
                	$(this).removeClass('dash');
                    $(".match_meal_content_"+data_id).css('display','none');
                    $(this).find('.taocan_icon').css('background','url(/static/images/icon_9.png) no-repeat');
                    $(this).find('.taocan_icon').css('background-size','100%');
                }
                if(match_H<=0){
                	$(this).addClass('dash');
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
            if($('#scroller .taocan_list').length<=1){
        		$('#scroller div:nth-child(1) .taocan_icon').css({'background': 'url(/static/images/icon_10.png) no-repeat','background-size': '100%'});
        		$('#scroller p').css('display','block');
    		}
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
                        $(".meal_trip"+data[0].meal_id).html(html);
                    }
                    
                },
                error:function(){
                    weui.Loading.hide();
                    weui.Loading.error("系统错误！",222000);
                }
            });
        },
        getcourse = function(i){
	        var min=100000000000;
            if(!i) return false;
            if(g_data!=''){
            	var html =htmlNotip= "";
	        	data = g_data.data;
                for(var key in data){
                	if(data[key].g_currprice>=1){
                		var math_currprice=Math.round(data[key].g_currprice);
                	}else{
                		var math_currprice=data[key].g_currprice;
                	}
                	if(data[key].g_price>=1){
                		var math_price = Math.round(data[key].g_price);
                	}else{
                		var math_price = data[key].g_price;
                	}
                    
                    
//					if(math_currprice<=min){
//						min=math_currprice;
//					}
                    if(math_currprice>=0){
                    	if(math_price==math_currprice){
                        	var math_price='';
                        }else{
                        	var math_price ='<del class="color-g9">原价￥'+math_price+'起/人</del>';
                        }
                        var g_tips = data[key].g_tips?'<span class="price_tag">'+data[key].g_tips+'</span>':"";
//                      var math_price = math_currprice?'<del class="color-g9">原价￥'+math_price+'起/人</del>':"";
                        ///////////////////////////判断原价与现价是否相同////////////////////
                        if(g_tips){
                            html+='<p class="orange">'+g_tips+data[key].g_name+' ￥<span class="_price">'+math_currprice+'</span><span>'+math_price+'</span></p>';
                        }else{
                            htmlNotip+='<p class="orange">'+g_tips+data[key].g_name+' ￥<span class="_price">'+math_currprice+'</span><span>'+math_price+'</span></p>';
                        }
                    
                    }  
                } 
                $("#match_course").html(html+htmlNotip); 
            }else{
	            $.ajax({
	                cache: false,
	                url:"/Matchinfo/getcourse?m_id="+i,
	                type: "POST",
	                dataType: "json",
	                timeout:3000,
	                success: function(data){
						g_data=data;
	                    if(data.error == 0 ){
	                        data = data.data;
	                        for(var key in data){
	                            var math_currprice=Math.round(data[key].g_currprice);
	                            var math_price = Math.round(data[key].g_price);
								if(math_currprice<=min){
									min=math_currprice;
								}
	                            if(math_currprice>=0){
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
            }

        },
        loadmeal = function(i){
            localStorage.setItem("ZX_YJBM_MEALID",i);
            var data = meal[city[currcityid][1]][1][i];
    ////////////////////////////////转换整数/////////////////////////
            if(parseFloat(data.g_price)>=1){
            	var price=Math.round(data.g_price);
            }else{
            	 var price=parseFloat(data.g_price);
            }
            if(parseFloat(data.g_currprice)>=1){
            	var currprice=Math.round(data.g_currprice);
            }else{
            	 var currprice=parseFloat(data.g_currprice);
            }
            if(parseFloat(data.g_singleprice)>=1){
            	var singleprice=Math.round(data.g_singleprice);
            }else{
            	 var singleprice=parseFloat(data.g_singleprice);
            }
            if(data.g_name != "赛事单独报名"){
                var tips = data.g_tips ? data.g_tips :"早鸟价";
                var singlepricehtml = "";
                var price_emputy='原价￥'+price+'起/人';
                if(price==currprice){
                	price_emputy='';
                }
                if(singleprice>0){
//                  singlepricehtml = '<p class="orange"><span class="price_tag">'+tips+'</span><span>单房差￥<span class="_price">'+singleprice+'</span><span>/人/起</span> <del class="color-g9">原价￥'+singleprice+'起/人</del><span></p>';
///////////////////////////////原件与现价是否相同
                    singlepricehtml = '<p class="orange"><span class="price_tag">'+tips+'</span><span>单房差￥<span class="_price">'+singleprice+'</span><span>/人/起</span> <del class="color-g9"></del><span></p>';
                }
                var html = '<div class="match_meal_info"><p class="color-g9">'+data.g_des+'</p><p class="orange"><span class="price_tag">'+tips+'</span><span>双人间￥<span class="_price">'+currprice+'</span><span>/人/起</span> <del class="color-g9">'+price_emputy+'</del></span></p>'+singlepricehtml+'</div><div class="meal_trip'+i+' meal_trip"></div>';
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

        
//  !!meal&&init();
//  !meal&&reset();
    ///////////////////////////////////////报名即将开始/////////////////////////////
//  '<?php echo substr($_smarty_tpl->tpl_vars['info']->value['m_signuptime'],0,10);?>
'
//  '<?php echo substr($_smarty_tpl->tpl_vars['info']->value['m_untilTime'],0,10);?>
'
//  '<?php echo substr($_smarty_tpl->tpl_vars['info']->value['m_GameTime'],0,10);?>
'
    var s2=m_nowTime;
    var s1='<?php echo $_smarty_tpl->tpl_vars['info']->value['m_signuptime'];?>
';
    var s3='<?php echo $_smarty_tpl->tpl_vars['info']->value['m_GameTime'];?>
';
    var s4='<?php echo $_smarty_tpl->tpl_vars['info']->value['m_untilTime'];?>
';
    s1 = new Date(s1.replace(/-/g, "/"));
    s2 = new Date(s2.replace(/-/g, "/"));
    s3 = new Date(s3.replace(/-/g, "/"));
    s4 = new Date(s4.replace(/-/g, "/"));
//	s2 = new Date();				
	var days_start = s1.getTime() - s2.getTime();
	var days_game_end = s3.getTime() - s2.getTime();
	var days_end = s4.getTime() - s2.getTime()
	var h=0,m=0,s=0,view_s='',view_m='',view_h='';
	if(days_start>(1000 * 60 * 60 * 24)){
		var enroll_warn='<div class="enroll_coming">该赛事还没有开始报名。</div><div class="enroll_warn collect"><div class="enroll_warn_border"><div><i></i><span>报名提醒<span></div></div></div>';
		$('.match_des').html(enroll_warn);
		///////////////////////
		$('.enroll_warn_border').bind('click',function () {
    	if(userid==''){
        	if(game_fill<=0){
        		$('.mask_text1').html('');
        		$('.mask_text2 span span').html('有名额时提醒我');
        	}
            $('.mask_outbox_1').css('display','none');
            $('.mask_outbox_2').css('display','block');
        }
        if(userid!=''){
        	if(game_fill<=0){
        		$('.mask_text1').html('');
        		$('.mask_text2 span span').html('有名额时提醒我');
        	}
            $('.mask_outbox_1').css('display','block');
            $('.mask_outbox_2').css('display','none');
        }
    $('.mask_baomingtx').css('display','block');
    })
	}else if(days_start<=(1000 * 60 * 60 * 24)&&days_start>0){
		var enroll_coming='<div class="enroll_coming">该赛事即将开始报名。</div><div class="enroll_time"><div class="enroll_time_title">倒计时</div><div class="enroll_time_text"><span class="hour"></span><span class="colons">:</span><span class="minute"></span><span class="colons">:</span><span class="secound"></span></div></div>'
		 $('.match_des').html(enroll_coming);
		    var time = parseFloat(days_start) /1000;  
		        if (time >60&& time <60*60) {  
//		            time = parseInt(time /60.0) +"分钟"+ parseInt((parseFloat(time /60.0) - parseInt(time /60.0)) *60) +"秒";
		            h=00;
		            m=parseInt(time /60.0);
		            s=parseInt((parseFloat(time /60.0) - parseInt(time /60.0)) *60);
		        }else if (time >=60*60&& time <60*60*24) {  
//		            time = parseInt(time /3600.0) +"小时"+ parseInt((parseFloat(time /3600.0) -  parseInt(time /3600.0)) *60) +"分钟"+  parseInt((parseFloat((parseFloat(time /3600.0) - parseInt(time /3600.0)) *60) -  parseInt((parseFloat(time /3600.0) - parseInt(time /3600.0)) *60)) *60) +"秒";
		            h=parseInt(time /3600.0)
		            m=parseInt((parseFloat(time /3600.0) -  parseInt(time /3600.0)) *60);
		            s=parseInt((parseFloat((parseFloat(time /3600.0) - parseInt(time /3600.0)) *60) -  parseInt((parseFloat(time /3600.0) - parseInt(time /3600.0)) *60)) *60);
		        }else {  
//		            time = parseInt(time) +"秒";
		            h=00;
		            m=00;
		            s=parseInt(time);
		        }
		    if(s<10){
		 		view_s='0'+s;
		 	}else{
		 		view_s=s;
		 	}
		 	if(m<10){
		 		view_m='0'+m;
		 	}else{
		 		view_m=m;
		 	}
		 	if(h<10){
		 		view_h='0'+h;
		 	}else{
		 		view_h=h;
		 	}
		   	$('.secound').html(view_s);
            $('.minute').html(view_m);
            $('.hour').html(view_h);
		  	var timing=setInterval(run,1000) 
	}else if(days_start<0&&days_end>0){
		//////////////////////////////////////开始报名//////////////////////////////////
		var fill='<?php echo $_smarty_tpl->tpl_vars['info']->value['m_placesleft'];?>
';
		if(fill<=0){
			var game_fill='<div class="enroll_coming">该赛事名额已满，我们将不定时增补名额。 </div><div class="enroll_coming"></div><div class="fill_warn collect"><div class="fill_warn_border"><div><i id="icon_star"></i><span>有名额时提醒我<span></div></div></div>';
			$('.match_des').html(game_fill);
			////////
			 $(".collect").bind('click',function () {
		        if(userid==''){
		        		$('.mask_text1').html('');
		        		$('.mask_text2 span span').html('有名额时提醒我');
		            $('.mask_outbox_1').css('display','none');
		            $('.mask_outbox_2').css('display','block');
		        }
		        if(userid!=''){
		        		$('.mask_text1').html('');
		        		$('.mask_text2 span span').html('有名额时提醒我');
		            $('.mask_outbox_1').css('display','block');
		            $('.mask_outbox_2').css('display','none');
		        }
		    $('.mask_baomingtx').css('display','block');
		})
		}
		if(fill>0){
			!!meal&&init();
	    	!meal&&reset();	
		}
		///////////////////////////////////////
		$('.enroll_warn_border').live('click',function () {
    	if(userid==''){
        	if(game_fill<=0){
        		$('.mask_text1').html('');
        		$('.mask_text2 span span').html('有名额时提醒我');
        	}
            $('.mask_outbox_1').css('display','none');
            $('.mask_outbox_2').css('display','block');
        }
        if(userid!=''){
        	if(game_fill<=0){
        		$('.mask_text1').html('');
        		$('.mask_text2 span span').html('有名额时提醒我');
        	}
            $('.mask_outbox_1').css('display','block');
            $('.mask_outbox_2').css('display','none');
        }
    $('.mask_baomingtx').css('display','block');
    })
		 
	}else if(days_game_end>0&&days_end<=0){
		!!meal&&init();
	    !meal&&reset();
//		var game_end = '<div class="enroll_coming">您错过了该赛事的报名时间</div><div class="other"><div>看看别的赛事>></div></div>';
//		$('.match_des').html(game_end);
//		$('.other div').bind('tap',function () {
//			var nationality =$('.guojia').html().substring(0,2);
//			if(nationality=='中国'){
//				window.location.href="/Run";
//			}else{
//				window.location.href="/Run?p_type=2";
//			}
//		})
	}else if(days_game_end<=0){
		$('.table_bg1').html('赛后分享');
		$('.match_des').html('<div class="game_share">赛后分享正在开发，敬请期待</div>');
	}
	////////////////////////////比赛结束///////////////////////////////////////////
//////////////////////////////////倒计时的计时器////////////////////////////////////////
		 function run(){
		 	if(s<10){
		 		view_s='0'+s;
		 	}else{
		 		view_s=s;
		 	}
		 	if(m<10){
		 		view_m='0'+m;
		 	}else{
		 		view_m=m;
		 	}
		 	if(h<10){
		 		view_h='0'+h;
		 	}else{
		 		view_h=h;
		 	}
		 	if(h<=0&&m<=0&&s<=0){
		 		clearInterval(timing);
		 		$('.enroll_coming').remove();
		 		$('.enroll_time').remove();
		 		!!meal&&init();
    			!meal&&reset();
		 	}
            --s;  
            if(s<0){  
                --m;  
                s=59;
            }  
            if(m<0){  
                --h;  
                m=59  
            }  
            if(h<0){  
                s=0;  
                m=0;  
            }
            $('.secound').html(view_s);
            $('.minute').html(view_m);
            $('.hour').html(view_h);
        } 

});
$(document).ready(function () {
    $('._advice').on('touchstart',function () {
        weui.confirm('<div><span>微信咨询：zxhylv</span><br /><span>电话咨询：4000-842-195</span><span class="dhzx">电话咨询</span><br/><span>(工作日9:00-19:00)</span></div>','咨询客服',function (but) {
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
sharetitle = "<?php echo $_smarty_tpl->tpl_vars['info']->value['m_name'];?>
";
sharedes = "<?php echo $_smarty_tpl->tpl_vars['info']->value['m_des'];?>
";
timelinetitle = "<?php echo $_smarty_tpl->tpl_vars['info']->value['m_name'];?>
";
wxbind();
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
            var shouqi= '收起<i style="display: inline-block;width: 1.071428571428571rem;"><img style="width: 100%;" src="/static/images/icon_10.png" alt="" /></i>';
            $('#text_view_'+a).html(shouqi);
            bloon=false;
        }else{
        	var zhankai= '展开更多<i style="display: inline-block;width: 1.071428571428571rem;"><img style="width: 100%;" src="/static/images/icon_9.png" alt="" /></i>';
            $('#box_text_'+a).animate({height:'21.42857142857143rem'},200);
            $('#text_view_'+a).html(zhankai);
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
            if(data.error=='1000'){
                $('.warn').html('图片验证码错误');
                $('.warn').css('display','block');
            }
            if(data.error==0){
                $('.mask_sp1').html("60S后重新获取")
                var time=60;
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
    /////////////////////////////////////////

})
var game_fill='<?php echo $_smarty_tpl->tpl_vars['info']->value['m_placesleft'];?>
';    
$('.mask_buttun .no_user').click(function () {
	var feedback_num = 3;
	$('.mask_outbox_2 .feedback_num').html(feedback_num);
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
    ////////////////////////////////////////判断名额已满//////////////////////
//  var game_fill='<?php echo $_smarty_tpl->tpl_vars['info']->value['m_placesleft'];?>
';
    if(game_fill<=0){
    	///////发送有名额提醒我请求//////////////////////////
    	$.ajax({
        type:"post",
        url:"/Account/loginwindow",
        async:true,
        data:{code:mask_input1,phone:phone},
        dataType:"json",
        success:function (data) {
            if(data.error==0){
//              $('.mask_baomingtx').css('display','none');
                userid=1;
                $('#icon_star').attr('src','/static/images/icon_12.png');
                $.ajax({
			        type:"post",
			        url:"/Matchinfo/remind",
			        async:true,
			        data:{m_id:id,warn_4:1},
			        dataType:"json",
			        success:function (data) {
			            if(data.error==0){
//			                $('.mask_baomingtx').css('display','none');
							$('.mask_outbox_2 .mask_inner').hide();
							$('.mask_outbox_2 .mask_buttun').hide();
							$('.mask_outbox_2 .feedback').show();
				            	var feed_time = setInterval(function () {
				            		feedback_num--;
				            		if(feedback_num==0){
				            			clearInterval(feed_time);
				            			$('.mask_baomingtx').css('display','none');
				            			$('.mask_outbox_2 .mask_inner').show();
										$('.mask_outbox_2 .mask_buttun').show();
										$('.mask_outbox_2 .feedback').hide();
				            		};
				            		$('.mask_outbox_2 .feedback_num').html(feedback_num);
				            	},1000);
			                $('#icon_star').css({background:'url(static/images/icon_12.png) no-repeat',backgroundSize: '100%'});
			            }
			            if(data.error==1){
			                $('.warn').html('手机验证码错误');
			                $('.warn').css('display','block');
			            }
			        }
			    });
            }
            if(data.error==1){
                $('.warn').html('手机验证码错误');
                $('.warn').css('display','block');
            }
        }
    });
    }else{
    	$.ajax({
        type:"post",
        url:"/Account/loginwindow",
        async:true,
        data:{code:mask_input1,phone:phone},
        dataType:"json",
        success:function (data) {
            if(data.error==0){
//              $('.mask_baomingtx').css('display','none');
                userid=1;
                $('#icon_star').attr('src','/static/images/icon_12.png');
                $.ajax({
			        type:"post",
			        url:"/Matchinfo/remind",
			        async:true,
			        data:{m_id:id,warn_1:warn_1,warn_2:warn_2,warn_3:warn_3},
			        dataType:"json",
			        success:function (data) {
			            if(data.error==0){
//			                $('.mask_baomingtx').css('display','none');
							$('.mask_outbox_2 .mask_inner').hide();
							$('.mask_outbox_2 .mask_buttun').hide();
							$('.mask_outbox_2 .feedback').show();
				            	var feed_time = setInterval(function () {
				            		feedback_num--;
				            		if(feedback_num==0){
				            			clearInterval(feed_time);
				            			$('.mask_baomingtx').css('display','none');
				            			$('.mask_outbox_2 .mask_inner').show();
										$('.mask_outbox_2 .mask_buttun').show();
										$('.mask_outbox_2 .feedback').hide();
				            		};
				            		$('.mask_outbox_2 .feedback_num').html(feedback_num);
				            	},1000);
			                $('#icon_star').attr('src','/static/images/icon_12.png');
			            }
			            if(data.error==1){
			                $('.warn').html('手机验证码错误');
			                $('.warn').css('display','block');
			            }
			        }
			    });
            }
            if(data.error==1){
                $('.warn').html('手机验证码错误');
                $('.warn').css('display','block');
            }
        }
    });
    }
})
    
$('.btn_warn').click(function () {
	var feedback_num = 3;
	$('.mask_outbox_1 .feedback_num').html(feedback_num);
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
    if(game_fill<=0){
    	//////////////////发送有名额提醒我请求//////////////////////
    	$.ajax({
	        type:"post",
	        url:"/Matchinfo/remind",
	        async:true,
	        data:{m_id:id,warn_4:1},
	        dataType:"json",
	        success:function (data) {
	            if(data.error==0){
//	                $('.mask_baomingtx').css('display','none');
					$('.mask_outbox_1 .mask_inner').hide();
					$('.mask_outbox_1 .mask_buttun').hide();
					$('.mask_outbox_1 .feedback').show();
		            	var feed_time = setInterval(function () {
		            		feedback_num--;
		            		if(feedback_num==0){
		            			clearInterval(feed_time);
		            			$('.mask_baomingtx').css('display','none');
		            			$('.mask_outbox_1 .mask_inner').show();
								$('.mask_outbox_1 .mask_buttun').show();
								$('.mask_outbox_1 .feedback').hide();
		            		};
		            		$('.mask_outbox_1 .feedback_num').html(feedback_num);
		            	},1000);
	                $('#icon_star').css({background:'url(static/images/icon_12.png) no-repeat',backgroundSize: '100%'});
	            }
	            if(data.error==1){
	                $('.warn').html('手机验证码错误');
	                $('.warn').css('display','block');
	            }
	        }
	    });
    }else{
	    $.ajax({
	        type:"post",
	        url:"/Matchinfo/remind",
	        async:true,
	        data:{m_id:id,warn_1:warn_1,warn_2:warn_2,warn_3:warn_3},
	        dataType:"json",
	        success:function (data) {
	            if(data.error==0){
//	                $('.mask_baomingtx').css('display','none');
					$('.mask_outbox_1 .mask_inner').hide();
					$('.mask_outbox_1 .mask_buttun').hide();
					$('.mask_outbox_1 .feedback').show();
		            	var feed_time = setInterval(function () {
		            		feedback_num--;
		            		if(feedback_num==0){
		            			clearInterval(feed_time);
		            			$('.mask_baomingtx').css('display','none');
		            			$('.mask_outbox_1 .mask_inner').show();
								$('.mask_outbox_1 .mask_buttun').show();
								$('.mask_outbox_1 .feedback').hide();
		            		};
		            		$('.mask_outbox_1 .feedback_num').html(feedback_num);
		            	},1000);
	                $('#icon_star').attr('src','/static/images/icon_12.png');
	            }
	            if(data.error==1){
	                $('.warn').html('手机验证码错误');
	                $('.warn').css('display','block');
	            }
	        }
	    });
    }
    
})
    
    ///////////////////////////////////////////////
    $('.taocan_attend a').bind('click',function (event) {
    event.stopPropagation();
    })
})
$(function () {
    if($('#scroller .taocan_list').length<=1){
    	$('#scroller div:nth-child(1)').addClass('dash');
        $('#scroller div:nth-child(1) .taocan_icon').css({'background': 'url(/static/images/icon_10.png) no-repeat','background-size': '100%'});
        $('#scroller p').css('display','block');
    }
    
    //////////////////////////////////////////判断赛事认证标签//////////////////////////
})
$(function () {
	var mydata = get_Date('<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
');
	var now_year=mydata.getFullYear();
	var now_month=mydata.getMonth();
	var now_day=mydata.getDate();
//	var star_time=$('.time_line_bottom div:nth-child(1)').html().split('-');
	var end_time= $('.time_line_bottom div:nth-child(2)').html().split('-');
//	var end_time= new Date (end_time.replace(/-/g, "/"));
//	var game_time=$('.time_line_bottom div:nth-child(3)').html().split('-');
	if(time_check_1(end_time)){
		////////////////////////等于报名截止时间//////////////////
		$('.time_line').addClass('time_line_2');
	}else if(time_check(end_time)){
		///////过了截止时间/////////////
		$('.time_line').addClass('time_line_3');
	}else{
		///////////////////////不到现在时间//////////////
		$('.time_line').addClass('time_line_1');
	}
function get_Date(strDate){
            var st = strDate;
            var a = st.split(" ");
            var b = a[0].split("-");
            var c = a[1].split(":");
            var date = new Date(b[0], b[1]-1, b[2], c[0], c[1], c[2])
            return date;
        }
function time_check(time){
	var year=parseInt(time[0]);
	var month=parseInt(time[1]);
	var day=parseInt(time[2]);
	if(now_year>year){
		return true;	
	}else if(now_year<year){
		return false;
		
	}
	if((now_month+1)>month){
		return true;
		}else if((now_month+1)<month){
			return false;
		}
	if(now_day>day){
		return true;
	}
	return false;
	
}
function time_check_1(time){
	var year=parseInt(time[0]);
	var month=parseInt(time[1]);
	var day=parseInt(time[2]);
	if(now_year!=year){
		return false;	
	}
	if((now_month+1)!=month){
		return false;
		}
	if(now_day!=day){
		return false;
		}
	
	return true;
	
}
//////////////////////////////////////////////认证标签/////////////////////////////////////////////////////
var m_mtype="<?php echo $_smarty_tpl->tpl_vars['info']->value['m_mtypes_class'];?>
";
var m_auth='<?php echo $_smarty_tpl->tpl_vars['info']->value['m_auth'];?>
'.split('|');

var m_auths='<?php echo $_smarty_tpl->tpl_vars['info']->value['m_auth'];?>
';
if(m_auths==''){
	$('.time_tag').html('<div class="zx-rz"></div>');
}else if(m_mtype=='越野跑'&&m_auths!=''){
	var c=0;
	var b='';
	var htr='';
	for (var i=0;i<m_auth.length;i++) {
		switch (m_auth[i]){
			case 'i-TRA':
			c++;
			$('.i_tra').css({"background": "url('static/images/rz-i-tra.png') no-repeat","background-size":"auto 100%"})
				break;
			case 'UTMB':
			$('.utmb').css({"background": "url('static/images/rz-utmb.png') no-repeat","background-size":"auto 100%"})
			c++;
				break;
			case 'ISF':
			c++;
			$('.isf').css({"background": "url('static/images/rz-isf.png') no-repeat","background-size":"auto 100%"})
				break;
			case 'CSA':
			c++;
			$('.csa').css({"background": "url('static/images/rz-csa.png') no-repeat","background-size":"auto 100%"})
				break;
			default:
				break;
		}
	}
}else{
	var time_tag_text="<span class='wmm'></span><span class='aims'></span><span class='iaaf'></span><span class='caa'></span>";
	$('.time_tag').html(time_tag_text);
	for (var i=0;i<m_auth.length;i++) {
		switch (m_auth[i]){
			case 'WMM':
			c++;
			$('.wmm').css({"background": "url('static/images/rz-wmm.png') no-repeat","background-size":"auto 100%"})
				break;
			case 'AIMS':
			$('.aims').css({"background": "url('static/images/rz-aims.png') no-repeat","background-size":"auto 100%"})
			c++;
				break;
			case 'IAAF':
			c++;
			$('.iaaf').css({"background": "url('static/images/rz-iaaf.png') no-repeat","background-size":"auto 100%"})
				break;
			case 'CAA':
			c++;
			$('.caa').css({"background": "url('static/images/rz-caa.png') no-repeat","background-size":"auto 100%"})
				break;
			default:
				break;
		}
	}
}
//////////////////////////////位置显示城市/////////////////////////////////////
var w=$('#place_scroll span:nth-child(2)').width()+$('#place_scroll span:nth-child(1)').width()+5;
$('#place_scroll').width(w);
var my = new iScroll('place',{
	vScroll:false,
	hScroll:true,
	hScrollbar:false
});
var fom_city='<?php echo $_smarty_tpl->tpl_vars['info']->value['m_city'];?>
'.split('-');
if('<?php echo $_smarty_tpl->tpl_vars['info']->value['m_ptype'];?>
'== '海外'){
	if(fom_city.length>1){
		$('.info_city').html(fom_city[1]);
	}else{
		$('.info_city').html(fom_city[0]);
	}
}else{
	if(fom_city[0]=='北京'||fom_city[0]=='天津'||fom_city[0]=='重庆'||fom_city[0]=='上海'){
		$('.info_city').html(fom_city[0]);
	}
}
})

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
pageId = window.location.href;
BNJSReady(function(){
    // 返回上一页
    BNJS.page.back("host");
    // 返回堆栈指定页面，比如A->B->C->D，在D页面想返回A页面
    // A页面调用BNJS.page.setPageId()接口设置A页面pageID

}); 
///////////////////////////////////////出发城市筛选///////////////////////////////////
$(function () {
	var select_boon=true;
	$('.weui_select').bind('click',function () {
		if(select_boon){
			select_boon=false;
			$('.select_text i').css({background:'url(/static/images/go_city_fan.png) no-repeat',backgroundSize: '100%'});
		}else{
			$('.select_text i').css({background:'url(/static/images/go_city.png) no-repeat',backgroundSize: '100%'});
			select_boon=true;
		}
//			$('body').append('<div class="gocity_mask"></div>')
	})
	//////////////////////pc端弹窗//////////////////////////////////////////	
	if (!(navigator.userAgent.match(/(phone|pad|pod|iPhone|iPod|ios|iPad|Android|Mobile|BlackBerry|IEMobile|MQQBrowser|JUC|Fennec|wOSBrowser|BrowserNG|WebOS|Symbian|Windows Phone)/i))) {
		$('.mask_outbox_2').addClass('mask_outbox_2_pc');
	}
})
</script>
</body>
</html>


<?php }} ?>