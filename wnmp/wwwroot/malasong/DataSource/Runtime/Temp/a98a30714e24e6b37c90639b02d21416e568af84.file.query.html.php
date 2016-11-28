<?php /* Smarty version Smarty-3.1.6, created on 2016-01-01 13:32:18
         compiled from "../DataSource/Tpl\OnlineEnroll\query.html" */ ?>
<?php /*%%SmartyHeaderCode:3680562b5287731f87-16972734%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a98a30714e24e6b37c90639b02d21416e568af84' => 
    array (
      0 => '../DataSource/Tpl\\OnlineEnroll\\query.html',
      1 => 1450784209,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3680562b5287731f87-16972734',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_562b5287763c2',
  'variables' => 
  array (
    'isbegin' => 0,
    'uploadurl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562b5287763c2')) {function content_562b5287763c2($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Comon/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<style>
/* img.selecked{border:3px double #01BFF1;} */
#app_name li{position: relative;cursor: pointer;}
#app_name li.selecked em{
	position: absolute;
	width:20px;
	height:20px;
	background-image: url(/static/images/app-right.png);
	bottom:15px;
	right:0px;
}
</style>
<script src="/static/js/function.js"></script>
<script src="/static/js/OnlineEnroll.js"></script>
<div id="register_box" class="general_page section">
	<div class="section_center">
		<div class="general_page_left">
			<div class="left_body">
				<?php if ($_smarty_tpl->tpl_vars['isbegin']->value){?>
				<p class="general_page_left_title">提交比赛成绩</p>
				<div class="general_page_left_center">
					<p class="general_page_left_title_min">使用参赛app</p>
					<div class="enroll_applist enroll_list">
						<ul id="app_name">
							<li><img class="right_app_icon" src="/static/images/Nike＋Running.png" alt=""><em></em><p title="Nike＋Running">Nike＋Running</p></li>
							<li><img class="right_app_icon" src="/static/images/agpb.png" alt=""><em></em><p title="阿甘跑步">阿甘跑步</p></li>
							<li><img class="right_app_icon" src="/static/images/dongdong.png" alt=""><em></em><p title="动动">动动</p></li>
							<li><img class="right_app_icon" src="/static/images/gulu.png" alt=""><em></em><p title="咕咚">咕咚</p></li>
							<li><img class="right_app_icon" src="/static/images/hupu.png" alt=""><em></em><p title="虎扑跑步">虎扑跑步</p></li>
							<li><img class="right_app_icon" src="/static/images/ldl.png" alt=""><em></em><p title="乐动力">乐动力</p></li>
							<li><img class="right_app_icon" src="/static/images/yjx.png" alt=""><em></em><p title="郁金香">郁金香</p></li>
							<li><img class="right_app_icon" src="/static/images/ypq.png" alt=""><em></em><p title="悦跑圈">悦跑圈</p></li>
							<li><img class="right_app_icon" src="/static/images/Garminconnect.png" alt=""><em></em><p title="Garmin connect">Garmin connect</p></li>
							<li><img class="right_app_icon" src="/static/images/Suunto.png" alt=""><em></em><p title="Suunto movescount">Suunto movescount</p></li>
							<li><img class="right_app_icon" src="/static/images/endomondo.png" alt=""><em></em><p title="endomondo">endomondo</p></li>
							<li><img class="right_app_icon" src="/static/images/Runtastic.png" alt=""><em></em><p title="Runtastic">Runtastic</p></li>
						</ul>
					</div>
					<p class="general_page_left_title_min">比赛成绩</p>
					<div class="enroll_results enroll_list">
						<ul>
							<li><input type="text" name="h" onkeyup="value=value.replace(/[^\d]/g,'')"></li>
							<li>小时</li>
							<li><input type="text" name="m" onkeyup="value=value.replace(/[^\d]/g,'')"></li>
							<li>分钟</li>
							<li><input type="text" name="i" onkeyup="value=value.replace(/[^\d]/g,'')"></li>
							<li>秒</li>
						</ul>
					</div>
					<p class="general_page_left_title_min">奖牌邮寄地址</p>
					<div class="enroll_results enroll_list">
						<input type="text" name="addr" class="enroll_addr">
					</div>
					<p class="general_page_left_title_min">上传成绩截图</p>
					<div class="enroll_upload enroll_list">
						<div class="qr_code">
							<!-- <img src="http://chart.apis.google.com/chart?chs=242x242&cht=qr&chld=H|1&chl=http://baidu.com" alt=""> -->
							<img src="http://qr.liantu.com/api.php?w=240&h=240&text=<?php echo $_smarty_tpl->tpl_vars['uploadurl']->value;?>
" alt="">
						</div>
						<p class="qr_code_word">扫描二维码上传跑步成绩</p>
					</div>
					<div class="enroll_submit enroll_list">
						<input class="btn" type="submit" id="online_submit" value="提交比赛成绩">
					</div>
				</div>
				<?php }else{ ?>
				<p class="general_page_left_title">报名成功</p>
				<div class="general_page_left_center">
					<span><font style="color:red">恭喜您！</font>您已成功报名并参加2016年黑瞎子岛线上半程马拉松比赛！<br>
 
请耐心等待比赛开始，并在比赛开始结束后的24小时内来提交你的成绩吧！！</span>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				</div>
				<?php }?>
			</div>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ('Comon/right.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('Comon/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>