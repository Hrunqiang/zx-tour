<?php /* Smarty version Smarty-3.1.6, created on 2016-11-14 13:33:11
         compiled from "../DataSource/Tpl\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:6297581330a6beeac2-34112225%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43ada865f8bc71aef17a87e0ed7c58499c1019cf' => 
    array (
      0 => '../DataSource/Tpl\\Index\\index.html',
      1 => 1479101330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6297581330a6beeac2-34112225',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_581330a6d628d',
  'variables' => 
  array (
    'sexy' => 0,
    'hotwords' => 0,
    'key' => 0,
    'i' => 0,
    'now' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581330a6d628d')) {function content_581330a6d628d($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Comon/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<title>知行合逸</title>
<style>
.wrap{background:#F3F6F5;}
.search_section{display: none;}
.index_section{background: #F3F6F5;}
.banner{background: #FFF;margin-bottom: 0.357142rem;}
.banner .banner_links{overflow: hidden;padding: 0.8571428rem 0;}
/*.banner .banner_links ul{width: 100%;height: 60px;}*/
.banner .banner_links a{background: red;/*display: block;*/}
.banner .banner_links .link{float: left;width: 33.33333333%;border-right: 1px solid #eeeeee;box-sizing:border-box;font-size: 0.857142rem;}
.banner .banner_links a:last-child .link{border:none;}
.banner .banner_links .link .banner_link_img{height: 3.15714rem;width: 2.86571rem;margin: 0.5rem auto;background-image: url(/static/images/icons.png);background-size:12.392857rem /*14.428571rem*/;
    transform:scale(1.4);-webkit-transform:scale(1.4);
}
.banner .banner_links .link .img_abroad{background-position:0 3.57rem;}
.banner .banner_links .link .img_domestic{background-position:-3rem 3.57rem;}
.banner .banner_links .link .img_mine{background-position:-6rem 3.57rem;}
/*////////////////////////////////////////////女头像样式////////////////////////////////////*/
.banner .banner_links .link .img_mine1{background-position:-9rem 3.57rem;}
.banner .banner_links .link h5{text-align: center;font-size: 1.214rem;font-weight: normal;}
.banner .banner_links .link p{text-align: center;height: 1.428571rem;line-height: 1.428571rem;/*padding-top: 0.142857rem;*//*padding-bottom: 0.184285rem;*/font-size: 1rem;}

.footer{font-size: 0.857142rem!important;}
.weui_msg{padding:0.7142857rem 0;}
.weui_text_area{margin-bottom:0!important;}

.search_section{background: #FFF;}
 .search_default_title_bar{border-bottom: 1px solid #efeef3;line-height: 2.5rem;font-size: 0.8571428571428571rem;color: #888888;}
.search_default .search_default_title_bar .title{color: #888888;font-size: 1rem;height: 2.5rem;}
.search_default .search_default_title_bar .title .icon{width: 10px;height: 14px;background-image: url(/static/images/icons.png);background-size:173.5px 202px;display: inline-block;background-position:-69px -4px;margin: 0 0.571428rem 0 0px;}
.search_default .search_default_title_bar .title p{height: 1rem;line-height: 1rem;font-size: 0.7857142857142857rem;padding-left: 0.9285714285714286rem;}
 .search_default_title_bar .title .title_word{flex:1;-webkit-box-flex: 1;-webkit-flex: 1;-ms-flex: 1;}
 /*.search_default_title_bar .title .change_hot{margin-right: 1.07142rem;color: #556F94;}*/
.search_default .search_default_hot{font-size: 1rem;overflow: hidden;padding: 0 0.7142857142857143rem;border-top: 1px solid #d9d9d9;border-bottom: 1px solid #d9d9d9;}
.search_default .search_default_hot p{float: left;border:1px solid #efeef3;padding:0 0.7142857rem;margin:0 1.07142rem 1.42857rem 0;border-radius: 12px;height: 1.71428rem;line-height: 1.71428rem;color: #555555;}
               /*///////////////////////////////////////////////添加样式///////////////////////////////////*/
.search_default_hot .search_default_hot_p_color p{color: #04BE02;}
.weui_media_appmsg{padding: 0.8571428571428571rem;}
.weui_media_box.weui_media_appmsg .weui_media_hd{margin-right: 1.14285rem;}
/*.weui_msg .weui_msg_desc a{color: #556F94;padding: 0 0.285rem;}*/
.weui_msg_desc a:first-child{padding: 0 0.2857rem;}
.weui_msg_desc a:last-child{padding: 0 0.3357rem;}
.weui_msg .weui_msg_desc{font-size: 0.85714rem;}
#search_text .weui_icon_search{margin-right: 4px;}
#search_text span{display: inline-block;}
.weui_msg_desc p{font-size: 0.857rem;}
.weui_msg_desc a{padding: 0 0.2857rem;}
#j_z_f{display: inline-block;height: 0.68rem;width: 1px;background: rgba(166,166,166,0.5);position: absolute;top: 23.5%;}
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
/*.weui_msg{padding-bottom: 1.285rem;}*/
/*/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/
.weui_search_text{border-radius: 2.857142857142857rem;}
.weui_search_bar{background: #FFFFFF;}
.weui_search_outer{background: none;}
.weui_search_outer:after{border-radius: 2.857142857142857rem;border: 1px solid #cacaca;}
#search_cancel{color: #ff2244;font-size: 1.142857142857143rem;line-height: 2rem;}
.hot_tj{border-top: 1px solid #d9d9d9;line-height: 2.785714285714286rem;}
.hot_tj a{display: inline-block;width: 8.142857142857143rem;text-align: center;border-left: 1px dashed #d9d9d9;line-height: 1.428571428571429rem;}
.hot_tj a:nth-child(1){border: none;}
#hotword_view div:nth-child(1){border-top: none;}
.hot_tj .hot_color{color: #ff2244;}
.hot_color .hot_color_1{position: relative;}
.hot_color .hot_color_1 span{height: 0.5714285714285714rem;width: 0.5714285714285714rem;background: url(/static/images/search_hot01.png) no-repeat;background-size: 100%;position: absolute;right: -0.5714285714285714rem;top: -0.1428571428571429rem;}
.hot_seach{background: #efeef4;line-height: 2.5rem;border-top: 1px solid #D9D9D9;}
/*/////////////////////////////////////////////搜索框//////////////////////////////////////////*/
.weui_search_bar{padding: 0.4285714285714286rem 0.9285714285714286rem;}
.weui_search_inner .weui_search_input{height: 2rem;font-size: 1rem;padding: 0;}
.weui_search_text{line-height: 1.928571428571429rem;}
.weui_search_inner .weui_icon_search{left: 0.7142857142857143rem;top: 0.2857142857142857rem;line-height: 0.0714285714285714rem;}
.weui_icon_search:before{font-size: 1rem;line-height: 1.5rem;}
.weui_search_inner .weui_search_input::-webkit-input-placeholder{font-size: 1rem;}
.weui_search_text span{font-size: 1rem;}
.weui_search_bar:after{display: none;}
.weui_search_inner{padding-left: 2.142857142857143rem;padding-right: 2.142857142857143rem;}
.back_top{position: fixed;bottom: 5rem;right: 1.21428rem;width: 3rem;height: 3rem;background: url(/static/images/back_top.png) no-repeat;background-size: 100% 100%;display: none;z-index: 10000;}
.search_goback{width: 0.8571428571428571rem;height: 0.8571428571428571rem; margin: auto; background: url(/static/images/close_singel.jpg) no-repeat;background-size:100%;position: absolute;top: 50%;transform: translateY(-50%);-webkit-transform: translateY(-50%);}
#search_goback{display: none;width: 1.571428571428571rem;position: relative;}
</style>
<div class="wrap" >
    <div class="weui_search_bar" id="search_bar">
    	<div id="search_goback" style=""><div class="search_goback" style=""></div></div>
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
    <div class="index_section" id="index_page">
        <div class="banner">
            <?php echo $_smarty_tpl->getSubTemplate ('Comon/banner.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            <div class="banner_links">
                <ul>
                    <a href="/Run?p_type=2" class="color-g">
                        <li class="link">
                            <h5 class="color-b">海外赛事</h5>
                            <p class="color-g9">六大满贯名额</p>
                            <div class="banner_link_img img_abroad"></div> 
                        </li>
                    </a>
                    <a href="/Run" class="color-g">
                        <li class="link">
                            <h5 class="color-b">国内赛事</h5>
                            <p class="color-g9">最抢手赛事名额</p>
                            <div id="bgsize" class="banner_link_img img_domestic"></div>
                        </li>
                    </a>
                    <a href="/User" class="color-g">
                        <li class="link">
                            <h5 class="color-b">我的赛事</h5>
                            <p class="color-g9">完善个人资料</p>
                            <?php if ($_smarty_tpl->tpl_vars['sexy']->value==2){?>
                            <!--女-->
                            <div class="banner_link_img img_mine1"></div>
                            <?php }else{ ?>
                            <!--男-->
                            <div class="banner_link_img img_mine"></div>
                            <?php }?>
                        </li>
                    </a>
                </ul>
            </div>
        </div>
		 <?php echo $_smarty_tpl->getSubTemplate ('Comon/hotList.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('type'=>'vertical'), 0);?>

        <div class="footer  weui_msg">
            <div class="weui_text_area">
                <p class="weui_msg_desc"><a href="tel:4000-842-195">服务资询</a><span id="j_z_f"></span><a href="/user/feedback">意见反馈</a></p>
                <p class="weui_msg_desc">本服务由知行合逸提供</p>
            </div>
        </div>
   </div>
    <div class="search_section" id="search_page">
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
</div>
<div class="back_top" onclick="goTop(0.2,16);return false;"></div>
<script src="/static/js/zepto.js"></script>
<script src="/static/weui/js/weui.js"></script>
<script type="text/javascript">
weui.search_bar.init();
$(".banner_pic").silder();
$(window).resize(function(){
    // windW = $(".wrap").width();
    // $(".banner").silder();
});
// $(".change_hot").tap(function(){
//     alert('e');
//     return false;
// });
///////////////////////////热词切换//////////////////
$(document).ready(function(){
	$('#search_input').focus(function () {
		var Scro=$('.search_default').height();
		var Scro_top=$('#hotword_view').height();
		var num=0;
		$('.change_hot').click(function  () {
			var hot=document.getElementById('hotword');
			num++;
			if(Scro*num>Scro_top){
				num=0;
			}
			hot.scrollTop=Scro*num;
		})
	})	
})
var now = "<?php echo $_smarty_tpl->tpl_vars['now']->value;?>
";
var Page=1;
	$(document).ready(function  () {
		///////获取窗口高度
		var winH=$(window).height();
		///////防止多次触发ajax请求
		var stop=true;
		/////////////滚动获取页面高度
		$(window).scroll(function(){
			var pageH=$('.wrap').height();
			var scrollT=window.scrollY;
			var aa=(pageH-winH-scrollT)/winH;
			if(aa<0.2){
				if(stop==true){
					stop=false;
					Page++;
					var htm_str='<div class="loading"><div class="jz">加载中</div><div class="weui_loading"><div class="weui_loading_leaf weui_loading_leaf_0"></div><div class="weui_loading_leaf weui_loading_leaf_1"></div><div class="weui_loading_leaf weui_loading_leaf_2"></div><div class="weui_loading_leaf weui_loading_leaf_3"></div><div class="weui_loading_leaf weui_loading_leaf_4"></div><div class="weui_loading_leaf weui_loading_leaf_5"></div><div class="weui_loading_leaf weui_loading_leaf_6"></div><div class="weui_loading_leaf weui_loading_leaf_7"></div><div class="weui_loading_leaf weui_loading_leaf_8"></div></div></div>';
					$('.hot_matchs').append(htm_str);
						$.ajax({
						type:"get",
						url:"/ajax/hotlist",
						data:{page:Page},
						async:true,
						dataType:"json",
						success:function(obj){
							if(obj.error==0){
								var Obj=obj.data;
								var str='';
								setTimeout(function () {
									$.each(Obj, function(key,val) {
									var creathtm='';
									var minge='';
//									pipei(Obj,key);
									var type=Obj[key].m_Mtypes.split('|');
//									console.log(type);
//									console.log(Obj[key].m_Mtypes)
									for (var i=0;i<type.length;i++) {
										var htm='';
										switch (type[i]){
										case '全马':
										var htm='<div class="nuomi_1"></div>'
											break;
										case '半马':
										var htm='<div class="nuomi_2"></div>'
											break;
										case '10公里':
										var htm='<div class="nuomi_3"></div>'
											break;
										case '5公里':
										var htm='<div class="nuomi_4"></div>'
											break;
										case '名额紧张':
										var htm='<div class="nuomi_5"></div>'
											break;
										case '优惠':
										var htm='<div class="nuomi_6"></div>'
											break;
										case '热门赛事':
										var htm='<div class="nuomi_7"></div>'
											break;
										case '女子马拉松':
										var htm='<div class="nuomi_8"></div>'
											break;
										case '乐趣跑':
										var htm='<div class="nuomi_9"></div>'
											break;
										case '报名截止':
										var htm='<div class="nuomi_10"></div>'
											break;
										case '优惠券':
										var htm='<div class="nuomi_11"></div>'
											break;
										case '免费':
										var htm='<div class="nuomi_12"></div>'
											break;
										default:
											break;
									}
//										console.log(1111);
										creathtm+=htm;
									}
//									minge='<div class="nuomi_5"></div><div class="nuomi_6"></div><div class="nuomi_7"></div><div class="nuomi_8"></div><div class="nuomi_10"></div><div class="nuomi_11"></div><div class="nuomi_12"></div>';
//									console.log(creathtm);
									if(Obj[key].m_state!=0 || Obj[key].m_GameTime <=now || Obj[key].m_releaseTime >now || Obj[key].m_untilTime<now || Obj[key].m_offineTime <now){
//										var minge='<span class="S_overhiden">'+Obj[key].m_name+'</span><span class="match_tips match_tips_pay1">名额已满</span>';
										var minge='<span class="S_overhiden">'+Obj[key].m_name+'</span><div class="nuomi_10"></div>';
									}else if(Obj[key].m_placesleft<=20){
//										var minge='<span class="S_overhiden">'+Obj[key].m_name+'</span><span class="match_tips match_tips_warm match_tips_pay2">名额紧张</span>';
		
										var minge='<span class="S_overhiden">'+Obj[key].m_name+'</span><div class="nm_view"><div class="nuomi_7"></div>'+creathtm+'<div class="nuomi_5"></div></div>';
									}else{
										var minge='<span class="S_overhiden over_hidden">'+Obj[key].m_name+'</span><div class="nm_view"><div class="nuomi_7"></div>'+creathtm+'</div>';
									}
								var Time=Obj[key].m_GameTime.substring(2,10);
								var types=Obj[key].m_Mtypes.replace(/\|/g,'<span></span>');
								var str='<a href="/Matchinfo?m_id='+Obj[key].id+'&platform=zx-tour" class="weui_media_box weui_media_appmsg"><div class="weui_media_hd"><img class="weui_media_appmsg_thumb" src='+Obj[key].m_img+' alt=""></div><div class="weui_media_bd"><h4 class="weui_media_title flex">'+minge+'</h4><p class="weui_media_desc weui_media_desc_1 line2 weui_media_title_position">'+Obj[key].m_des+'</p><p class="weui_media_desc weui_media_desc_padding">'+Time+'  '+types+'</p></div></a>';
								$('.hot_matchs').append(str);	
								$('.loading').remove();
								stop=true;
								});
							},1000);
							}else if(obj.error==1){
								$('.loading').remove();
								var jz_succeed='<div class="loading">已加载完毕<div>';
								$('.hot_matchs').append(jz_succeed);
							}
						}
					});
				}
			}
		})
		
	})
//	function pipei(a,b) {
//	var creathtm='';
////	var minge='';
//	var type=a[b].m_Mtypes.split('|');
//	console.log(type);
//	console.log(a[b].m_Mtypes)
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
//		creathtm+=htm;
//		if(i>=type.length){
//			return creathtm;
//		}
//	}
//	return creathtm;
//	}

function countInstances(mainStr, subStr)
    {
        var count = 0;
        var offset = 0;
        do
        {
            offset = mainStr.indexOf(subStr, offset);
            if(offset != -1)
            {
                count++;
                offset += subStr.length;
            }
        }while(offset != -1)
//      console.log(count);
        return count;
    }
</script>
<script>
var shareObject = {
    title:"title",
    content:"content",
    imgUrl:"http://download.zx-tour.com/public/image/20160524/20160524102112_89439.jpg",
    type:1,
    imageList:"",
    url:"http://nuomi.zx-tour.com/",
    platforms:[
        "qq_zone",
        "weixin_session" ,
        "weixin_timeline" ,
        "sinaweibo" ,
        "copylink" ,
        "email" ,
        "sms" ,
    ]
};
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
     // 设置A页面pageID为'a'
    // BNJS.page.setPageId({
    //     pageId: 'a'
    // });

    // // 返回堆栈指定页面，比如A->B->C->D，在D页面想返回A页面
    // BNJS.page.back('a');
    // 返回堆栈指定页面，比如A->B->C->D，在D页面想返回A页面
    // A页面调用BNJS.page.setPageId()接口设置A页面pageID
});
$(function () {
	for (var i=1;i<6;i++) {
			_change(i,'hot_matchs',9,'<div class="nuomi_7"></div>');
		}
})
$(function () {
	$('#search_input').bind('focus',function () {
		$('#search_goback').css('display','block');
	}) 
	$('#search_goback').bind('click',function () {
		$('#index_page').show();
		$(this).hide();
		$('#search_page').hide();
	})
})
_hmt.push(['_trackEvent', "事件", "展示", "首页"]);
</script>
</body>
</html><?php }} ?>