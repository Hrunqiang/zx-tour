<?php /* Smarty version Smarty-3.1.6, created on 2016-11-25 16:18:04
         compiled from "../DataSource/Tpl\Matchinfo\htactivity.html" */ ?>
<?php /*%%SmartyHeaderCode:2516358353ae6d9d862-14402341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f1c516c16be9b6f1455d0808b513641dae01674' => 
    array (
      0 => '../DataSource/Tpl\\Matchinfo\\htactivity.html',
      1 => 1480061882,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2516358353ae6d9d862-14402341',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58353ae6e931d',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58353ae6e931d')) {function content_58353ae6e931d($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="Author" content="" />
	<meta name="Keywords" content="" />
	<meta name="Description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<meta charset="UTF-8">
	<title>"恒行"计划</title>
	<link rel="stylesheet" href="/static/weui/css/weui.min.css">
	<script type="text/javascript" src="/static/js/zepto.js"></script>
	<script type="text/javascript">
		var _hmt = _hmt || [];
		(function() {
		  var hm = document.createElement("script");
		  hm.src = "//hm.baidu.com/hm.js?36264503ad9626a18f7f08c10d269782";
		  var s = document.getElementsByTagName("script")[0]; 
		  s.parentNode.insertBefore(hm, s);
		})();

		(function sy(){
			var Html=document.getElementsByTagName('html');
			var w=document.documentElement.clientWidth;
			var scale=w/375;
			if (scale>=2) {
				scale=2;
			} 
			Html[0].style.fontSize=14*scale+'px';
		})();
	</script>
	<style>
	a{color: black;background-color: white;-webkit-tap-highlight-color:rgba(0,0,0,0)}
	.wrap{background-color: white;padding: 0.01px;max-width: 768px;
    margin: 0 auto;overflow: hidden;}
    .headTop{width:100%;height:17.85714285714286rem;background: url(/static/images/ht_images/Ht_activityHead.jpg)no-repeat left center;background-size:26.78571428571428rem 17.85714285714286rem;position: relative;}
	.activity_intr{width:7.14285714285714rem;height:1.83571428571429rem;position: absolute;background: rgba(0,0,0,0.45);bottom:0.53571428571429rem;right:-5.35714285714286rem;text-indent: 1.3rem;line-height:1.83571428571429rem;color: white;animation: show_activity 2s ease 0.3s forwards;-webkit-animation: show_activity 2s ease 0.3s forwards;border-radius:0.91785714285714rem;transform: scale(0.7);-webkit-transform: scale(0.7)}
	.ht_intr{width:8.92857142857143rem;height:1.83571428571429rem;position: absolute;background: rgba(0,0,0,0.45);position: absolute;background: rgba(0,0,0,0.45);bottom:2.50000000000000rem;right:-6.07142857142857rem;text-indent: 1rem;line-height:1.83571428571429rem;color: white;animation: show_ht 1s ease 0.5s forwards;-webkit-animation: show_ht 2s ease 0.3s forwards;border-radius:0.91785714285714rem;transform: scale(0.9);-webkit-transform: scale(0.9)}
	@keyframes show_activity{
		from{right: -5.35714285714286rem;}
		to{right: -1.60714285714286rem;}
	} 
    @-webkit-keyframes show_activity{
		from{right: -5.35714285714286rem;}
		to{right: -1.60714285714286rem;}
	}
	@keyframes show_ht{
		from{right: -6.07142857142857rem;}
		to{right: -1.42857142857143rem;}
	}
	@-webkit-keyframes show_ht{
		from{right: -6.07142857142857rem;}
		to{right: -1.42857142857143rem;}
	}
	.headTop_msgwrap{width:100%;height:9.64285714285714rem;background: url(/static/images/ht_images/Ht_timeBg.jpg)no-repeat left center;background-size:cover;position: relative;}
	.headTop_msg{border: 0.8px solid #8f8e8e;width:25.53571428571428rem;height:8.39285714285714rem;text-align: center;font-size: 0.85714285714286rem;position: absolute;left: 0;top:0;right: 0;bottom: 0;margin:auto;}
	.headTop_msg p{line-height: 1.60714285714286rem}

	.list_wrap{position: relative;box-shadow: 0px 2px 8px rgba(120,120,120,0.1)}
	.list_content{width: 100%;height: 10.71428571428571rem;background-repeat: no-repeat;background-position:left center;background-size:cover;margin-top: 1rem;}
	.list_name{width:7.14285714285714rem;text-align: center;height:1.35714285714286rem;line-height: 1.35714285714286rem;background-color: #ffd800;font-size: 0.85714285714286rem;}
	.list_msg{height: 5.35714285714286rem;padding:0 0.71428571428571rem;width: 100%;box-sizing: border-box;background: white}
	.list_desc{width: 90%;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;padding-top:0.71428571428571rem;font-size: 1.07142857142857rem;font-weight: bold;}
	.list_desc_msg{width: 90%;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;font-size:0.85714285714286rem;margin-bottom: 0.17857142857143rem;color: rgb(171,171,171);}
	.list_time_money{width: 100%;font-size: 0.85714285714286rem;margin-top: -0.21428571428571rem}
	.list_time{display: inline-block;padding-top: 0.21428571428571rem;color: rgb(171,171,171);position: relative;text-indent: 1.25000000000000rem}
	.list_timeicon{width:1.25000000000000rem;height:1.07142857142857rem;display: inline-block;background: url(/static/images/ht_images/Ht_activityIcon.png)no-repeat  -2.92857142857143rem -0.17857142857143rem;background-size:10.17857142857143rem 4.28571428571429rem;position: absolute;left: 0;top:0.42857142857143rem}

	.list_money{float: right;color:#ff7400;line-height: 1.3}
	.list_money>i{font-style: normal;font-size: 1.2rem}
	.get_mask{width: 100%;height:16.00000000000000rem;background: rgba(0,0,0,0.6);position: absolute;top: 0;left: 0;z-index: 999}
	.get_mask div{float: left;margin-left:0.78571428571429rem;text-align: center;margin-top: 4.64285714285714rem;}
	.get_mask div img{width:4.10714285714286rem;height:4.10714285714286rem;border-radius: 50%;border: 2px solid white}
	.luck_title{color: white;position: absolute;top:2.50000000000000rem;left: 1rem;font-size: 1rem}
	.list_userName{width:4.28571428571429rem;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;color: white;margin-top: 0.35714285714286rem;font-size: 0.85714285714286rem}
	.respect_mask{width: 100%;height:17.00000000000000rem;background: rgba(0,0,0,0.6);position: absolute;top: 0;left: 0;text-align: center;z-index: 999}
	.respect_icon{width:2.85714285714286rem;height:2.75000000000000rem;background: url(/static/images/ht_images/Ht_activityIcon.png)no-repeat;background-size:10.17857142857143rem 4.28571428571429rem;background-position:0 0;margin: 5.00000000000000rem auto 1.25000000000000rem;transform: scale(1.2);-webkit-transform: scale(1.2);}
	.respect_msg{color: white;font-size: 1rem}

	.activity_intrwrap,.ht_intrwrap{width: 100%;height: 14.46428571428571rem;position: relative;margin-top: 0.71428571428571rem}
	.ht_intrwrap{margin-top: 0}
	.activity_intrMsg{width:25.57142857142857rem;height:13.39285714285714rem;position: absolute;left: 0;top: 0;bottom: 0;right: 0;margin: auto;background: url(/static/images/ht_images/Ht_activityShuo.jpg)no-repeat left center;background-size: cover}
	.ht_intrMsg{width:25.57142857142857rem;height:13.39285714285714rem;position: absolute;left: 0;top: 0;bottom: 0;right: 0;margin: auto;background: url(/static/images/ht_images/Ht_activityIntr.jpg)no-repeat left center;background-size: 100% 100%}
	.content_title{width:10.17857142857143rem;height:1.53571428571429rem;background: url(/static/images/ht_images/Ht_activityIcon.png)no-repeat;background-size:10.17857142857143rem 4.28571428571429rem;background-position:0 -2.78571428571429rem;margin:1.07142857142857rem auto 0.35714285714286rem;font-size: 0.85714285714286rem;color: black;line-height:1.71428571428571rem;text-align:center;font-weight: bold;}
	.content_msg{font-size: 0.85714285714286rem;width:23.92857142857143rem;margin: 0 auto}
	.content_msg p{line-height:1.28571428571429rem}

	.blur {    
    -webkit-filter: blur(15px); 
       -moz-filter: blur(10px);
        -ms-filter: blur(10px);    
            filter: blur(15px);
	}
	</style>
</head>
<body>
	<div class="wrap">
		<div class="headTop">
			<p class="ht_intr">恒天财富介绍</p>
			<p class="activity_intr">活动说明</p>
		</div>
		<div class="headTop_msgwrap">
			<div class="headTop_msg">
				<p style="margin-top:1.07142857142857rem">即日起值<span style="color: #a31a8e">2017年11月24日，</span></p>
				<p>知行合逸携手理财专家恒天财富推出“0元跑马”知行跑友</p>
				<p>专属福利活动！参与活动即有机会享受0元跑马，免费获得指</p>
				<p>定赛事行程套餐！恒天财富，助您圆梦！</p>
			</div>
		</div>

		<!--    这块代码是中奖者代码 勿删 -->

		<!-- <div class="get_mask">
					<p class="luck_title">幸运中奖用户：</p>
					<div>
						<img src="/static/images/zx-rz.jpg" alt="">
						<p class="list_userName">昵称</p>
					</div>
					<div>
						<img src="/static/images/headbg.jpg" alt="">
						<p class="list_userName">Bulabula</p>
					</div>
					<div>
						<img src="/static/images/zx-rz.jpg" alt="">
						<p class="list_userName">Bulabula</p>
					</div>
					<div>
						<img src="/static/images/headbg.jpg" alt="">
						<p class="list_userName">Bulabula</p>
					</div>
					<div>
						<img src="/static/images/zx-rz.jpg" alt="">
						<p class="list_userName">昵称</p>
					</div>
				</div> -->
		<div class="list">

			<div class="list_wrap">
				<a href="/Matchinfo?m_id=143&platform=zx-tour-ht">
					<div class="list_content" style="background-image: url(/static/images/ht_images/mgw.png);background-position-y:-6.07142857142857rem;">
						<p class="list_name" style="width: 5.71428571428571rem">日本-名古屋</p>
					</div>
					<div class="list_msg">
						<p class="list_desc">日本名古屋女子马拉松</p>
						<p class="list_desc_msg">完赛就有Tiffany！</p>
						<p class="list_time_money">
							<span class="list_time"><i class="list_timeicon"></i>2017-03-12</span>
							<span class="list_money">￥<i>4899</i>起/人</span>
						</p>
					</div>
				</a>
			</div>

			<div class="list_wrap">

				<a href="/Matchinfo?m_id=225&platform=zx-tour-ht">
					<div class="list_content" style="background-image: url(/static/images/ht_images/ylsl.jpg);background-position-y:top">
						<p class="list_name">以色列-耶路撒冷</p>
					</div>
					<div class="list_msg">
						<p class="list_desc">耶路撒冷马拉松</p>
						<p class="list_desc_msg">穿越三千年耶路撒冷古城！</p>
						<p class="list_time_money">
							<span class="list_time"><i class="list_timeicon"></i>2017-03-17</span>
							<span class="list_money">￥<i>5000</i>起/人</span>
						</p>
					</div>
				</a>
			</div>

			<div class="list_wrap" style="overflow: hidden;margin-top: 1rem">
				<div class="respect_mask">
					<div class="respect_icon"></div>
					<p class="respect_msg">赛事即将开始报名</p>
				</div>
				
					<div class="list_content blur" style="background-image: url(/static/images/ht_images/cx.jpg);">
						<p class="list_name" style="width: 5.00000000000000rem">朝鲜-平壤</p>
					</div>
					<div class="list_msg blur">
						<p class="list_desc">朝鲜平壤马拉松</p>
						<p class="list_desc_msg">在神秘国度！七万人欢呼！</p>
						<p class="list_time_money">
							<span class="list_time"><i class="list_timeicon"></i>2016-10-11</span>
							<span class="list_money">￥<i>5999</i>起/人</span>
						</p>
					</div>
				
			</div>

			<div class="list_wrap" style="overflow: hidden;margin-top: 1rem">
				<div class="respect_mask">
					<div class="respect_icon"></div>
					<p class="respect_msg">赛事即将开始报名</p>
				</div>
				
					<div class="list_content blur" style="background-image: url(/static/images/ht_images/bl.png);">
						<p class="list_name" style="width: 5.00000000000000rem">德国-柏林</p>
					</div>
					<div class="list_msg blur">
						<p class="list_desc">2017柏林马拉松</p>
						<p class="list_desc_msg">世界最快赛道的大满贯赛事！</p>
						<p class="list_time_money">
							<span class="list_time"><i class="list_timeicon"></i>2017-09-24</span>
							<span class="list_money">￥<i>3599</i>起/人</span>
						</p>
					</div>
				
			</div>


			<div class="list_wrap" style="overflow: hidden;margin-top: 1rem">
				<div class="respect_mask">
					<div class="respect_icon"></div>
					<p class="respect_msg">赛事即将开始报名</p>
				</div>
				
					<div class="list_content blur" style="background-image: url(/static/images/ht_images/zjg.jpg);background-position-y:top;">
						<p class="list_name" style="width: 5.71428571428571rem">美国-芝加哥</p>
					</div>
					<div class="list_msg blur">
						<p class="list_desc">2017芝加哥马拉松</p>
						<p class="list_desc_msg">奔跑在“风城”的大满贯赛事</p>
						<p class="list_time_money">
							<span class="list_time"><i class="list_timeicon"></i>2017-10-07</span>
							<span class="list_money"><!-- ￥<i>399</i>起/人 -->即将开始</span>
						</p>
					</div>
			
			</div>

			

			<div class="activity_intrwrap">
				<div class="activity_intrMsg">
					<p class="content_title" style="margin-top: 0.78571428571429rem">活动说明</p>
					<div class="content_msg">
						<p>1、活动期间，购买指定赛事的用户，均可参与“恒行计划”获得0元跑马机会！</p>
						<p>2、每期活动结束后，我们会告知中奖用户，名单会在“往期活动”、以及知行合逸公众号推送中进行公布</p>
						<p>3、中奖用户除了享受免费活动已购买的套餐外，还可获得一份“恒天Runner”跑步装备一套！（装备物品明细以实际为准）</p>
						<p>4、中奖后，免费套餐的类型不可再进行更改</p>
						<p>5、本活动最终结束权归知行合逸所有</p>
					</div>
				</div>
			</div>
			
			<div class="ht_intrwrap" style="margin-bottom: 3.57142857142857rem;">
				<a href="http://WWW.CHTWM.COM">	
					<div class="ht_intrMsg">
						<div class="content_msg" style="margin-top: 3.57142857142857rem">
							<h4>恒天财富介绍:</h4>
							<p style="text-align: justify;-webkit-text-align-last:justify;line-height:1.28571428571429rem;">恒天财富2011年3月成立，公司总部设立于北京CBD，注册资本金1亿元。5年间，恒天财富从中融信托的私人银行部脱胎成长为国内领先的大型金融服务集团，在财富管理、资产管理、理财教育等多个领域提供专业服务。截止到2016年9月底，恒天财富已为六万个高净值家庭进行了资产配置，累计配置资产规模突破4250亿元人民币。</p>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">
	if ((navigator.userAgent.match(/(phone|pad|pod|iPhone|iPod|ios|iPad|Android|Mobile|BlackBerry|IEMobile|MQQBrowser|JUC|Fennec|wOSBrowser|BrowserNG|WebOS|Symbian|Windows Phone)/i))) {
			$.fn.lck=function (fn) {
				$(this).bind('touchend',fn);
			}
		}else{
			$.fn.lck=function (fn) {
				$(this).bind('click',fn)
			}
		}

	$('.activity_intr').lck(function(){
		var _top = $(document)[0].body.scrollTop;
		var _scrollTime = setInterval(function(){
			_top += 40
			$(document)[0].body.scrollTop = _top;
			if(_top >= ($('.list')[0].clientHeight)-100){
				console.log();
				clearInterval(_scrollTime);
			}
		},10)
	})
	$('.ht_intr').lck(function(){
		var _top = $(document)[0].body.scrollTop;
		var _scrollTime = setInterval(function(){
			_top += 40
			$(document)[0].body.scrollTop = _top;
			if(_top >= $('body')[0].scrollHeight){
				clearInterval(_scrollTime);
			}
		},10)
	})
</script>
</html><?php }} ?>