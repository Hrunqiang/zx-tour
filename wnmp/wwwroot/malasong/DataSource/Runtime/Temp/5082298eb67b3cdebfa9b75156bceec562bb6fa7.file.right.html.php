<?php /* Smarty version Smarty-3.1.6, created on 2016-11-04 17:38:42
         compiled from "../DataSource/Tpl\Comon\right.html" */ ?>
<?php /*%%SmartyHeaderCode:173755628f313453681-86914582%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5082298eb67b3cdebfa9b75156bceec562bb6fa7' => 
    array (
      0 => '../DataSource/Tpl\\Comon\\right.html',
      1 => 1478249998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173755628f313453681-86914582',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5628f31345531',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5628f31345531')) {function content_5628f31345531($_smarty_tpl) {?><div class="general_page_right">
	<div class="general_page_right_box" id="right_countdown_box">
		<div class="countdow_title"><p>报名截至倒计时</p></div>
		<div id="countdown_box_left" class="fl">
			<p class="countdow_num" id="countdow_day">0</p>
			<p class="countdow_company">天</p>
		</div>
		<div id="countdown_box_right" class="fl">
			<p class="countdow_num" id="countdow_hour">0</p>
			<p class="countdow_company">小时</p>
		</div>
	</div>

	<div class="general_page_right_box" id="right_match_time" >
		<p class="right_mini_title">已报名人数</p>
		<div class="enroll_num">
			<ul>
				<li class="enroll_num_li">0</li>
				<li class="enroll_num_li">0</li>
				<li class="enroll_num_li">0</li>
				<li class="enroll_num_li">0</li>
				<li class="enroll_num_li">0</li>
				<li class="enroll_num_conpany">人</li>
			</ul>
		</div>
	</div>

	<div class="general_page_right_box" id="right_match_time" >
		<p>比赛时间地点</p>
		<p>时间：2017年1月1日（星期日）</p>
		<p>法令时间：清晨7:30</p>
		<p>地点：黑龙江省抚远市</p>
	</div>
	
	<div class="general_page_right_box" id="right_athlete" >
		<p id="right_athlete_title">线上马拉松支持参赛app</p>
		<div id="right_athlete_list">
			<ul>
				<li><img class="right_app_icon" src="/static/images/Nike＋Running.png" alt=""><p title="Nike＋Running">Nike＋Running</p></li>
				<li><img class="right_app_icon" src="/static/images/agpb.png" alt=""><p title="阿甘跑步">阿甘跑步</p></li>
				<li><img class="right_app_icon" src="/static/images/dongdong.png" alt=""><p title="动动">动动</p></li>
				<li><img class="right_app_icon" src="/static/images/gulu.png" alt=""><p title="咕咚">咕咚</p></li>
				<li><img class="right_app_icon" src="/static/images/hupu.png" alt=""><p title="虎扑跑步">虎扑跑步</p></li>
				<li><img class="right_app_icon" src="/static/images/ldl.png" alt=""><p title="乐动力">乐动力</p></li>
				<li><img class="right_app_icon" src="/static/images/yjx.png" alt=""><p title="郁金香">郁金香</p></li>
				<li><img class="right_app_icon" src="/static/images/ypq.png" alt=""><p title="悦跑圈">悦跑圈</p></li>
				<li><img class="right_app_icon" src="/static/images/Garminconnect.png" alt=""><p title="Garmin connect">Garmin connect</p></li>
				<li><img class="right_app_icon" src="/static/images/Suunto.png" alt=""><p title="Suunto movescount">Suunto movescount</p></li>
				<li><img class="right_app_icon" src="/static/images/endomondo.png" alt=""><p title="endomondo">endomondo</p></li>
				<li><img class="right_app_icon" src="/static/images/Runtastic.png" alt=""><p title="Runtastic">Runtastic</p></li>
			</ul>
		</div>
	</div>

	<div class="general_page_right_box" id="right_athlete" >
		<p id="right_athlete_title">明星跑者</p>
		<div id="right_athlete_list">
			<ul>
				<li><img class="right_athlete_photo" src="/static/images/dongjun.jpg" alt=""><p>董军</p></li>
				<li><img class="right_athlete_photo" src="/static/images/maodaqing.jpg" alt=""><p>毛大庆</p></li>
				<li><img class="right_athlete_photo" src="/static/images/shu.jpg" alt=""><p>苏子灵</p></li>
				<li><img class="right_athlete_photo" src="/static/images/wangjiachao.jpg" alt=""><p>王家超</p></li>
				<li><img class="right_athlete_photo" src="/static/images/wangjing.jpg" alt=""><p>王静</p></li>
			</ul>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(function(){
		var get_applynum_url = "/Ajax/apply_num";
		$.getJSON(get_applynum_url,function(data){
			if(data.error===0){
				var data = data.data,
					num_arr =[Math.floor(data/10000),Math.floor(data%10000/1000),Math.floor(data%1000/100),Math.floor(data%100/10),Math.floor(data%10)] ;
				$(".enroll_num_li").each(function(i,e){
					$(this).html(num_arr[i]);
				})
			}
		});
	});
</script><?php }} ?>