<?php /* Smarty version Smarty-3.1.6, created on 2015-12-18 17:56:01
         compiled from "../DataSource/Tpl\PayResult\AlipayFront.html" */ ?>
<?php /*%%SmartyHeaderCode:22587562f355de2dfd3-34364719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46605b40040f2b939cf9e7465ad0d278b5f6934d' => 
    array (
      0 => '../DataSource/Tpl\\PayResult\\AlipayFront.html',
      1 => 1450432247,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22587562f355de2dfd3-34364719',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_562f355de61de',
  'variables' => 
  array (
    'msg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_562f355de61de')) {function content_562f355de61de($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Comon/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="register_box" class="general_page section">
	<div class="section_center">
		<div class="general_page_left">
			<div class="left_body">
                <!--<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
-->
				<?php if ($_smarty_tpl->tpl_vars['msg']->value=="支付完成"){?>
				<p class="general_page_left_title">报名成功</p>
				<div class="general_page_left_center">
					<div class="enroll_list pay_result">
						<p><span class="tagging">恭喜您！</span>您已经成功报名2016年黑瞎子岛马拉松比赛！</p>
						<p>稍后我们将报名信息发送到您的邮箱<span>superc***@gmail.com</span>，请您注意查收</p>
						<p>您也可以在“赛事报名—报名查询”页面查看报名结果</p>
						<p><span>注:如您也已经报名了线上马拉松,则线上马拉松自动取消,请知晓。</span></p>
					</div>
				</div>
				<?php }else{ ?>
				<p class="general_page_left_title">支付失败:<?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</p>
				<div class="general_page_left_center">
					<div class="enroll_list pay_result">
						<p><span class="tagging">非常抱歉！</span>您的报名在支付过程中遇到问题了！</p>
						<p>请您与我们的客服取得联系，我们会尽快帮您解决！</p>

					</div>
				</div>
				<?php }?>
				<p class="general_page_left_title">参赛必读</p>
				<div class="general_page_left_center">
					<div class="enroll_applist enroll_list">
						<p class="general_page_left_title_min">气温条件</p>
						<p>抚远元旦期间平均气温：-24℃--13℃，白天平均-12℃，夜间-24℃；日出时刻体感温度在-11℃，中午无风体感温度在-10℃；靠近黑龙江乌苏里江江边风力2-4级。</p>
					</div>
					<div class="enroll_applist enroll_list">
						<p class="general_page_left_title_min">建议装备</p>
						<p>保暖羊毛帽、保暖无缝围巾、保暖衣裤、羊毛保暖内衣裤、软壳防风跑步裤、薄羽绒服或棉服、棉手套、压缩袜加保暖袜、冬季跑鞋、防滑鞋套、太阳镜或者滑雪镜；</p>
					</div>
					<div class="enroll_applist enroll_list">
						<p class="general_page_left_title_min">赛事路线</p>
						<p>全程马拉松：人民广场——迎宾路——沿江路——泰山路——长江路——正阳路——迎宾路——通江乡——建黑高速路口——黑瞎子岛乌苏大桥桥头——鸟苏镇——东方第一哨——太阳广场</p>
						<p>半程马拉松：人民广场——迎宾路——沿江路——泰山路——长江路——正阳路——县道109——环岛（折返点）——县道109——人民广场</p>
						<p>迷你马拉松：人民广场——迎宾路——沿江路——泰山路——长江路——长江路——正阳路——人民广场</p>
					</div>
					<div class="enroll_applist enroll_list">
						<p class="general_page_left_title_min">亮点</p>
						<p>☆ 中国版图最东端的马拉松;</p>
						<p>☆ 中国每年最早的马拉松，黑瞎子岛地处中国最东端，是中国最早升起太阳的地方，05:58是元旦太阳升起的时刻，每一缕阳光照耀在中国的时刻鸣枪;</p>
						<p>☆ 每一年最灿烂开端，奔向太阳，运动员将一直向东，迎着中国最早的阳光奔跑，在一年的第一天，迎着中国第一缕阳光奔跑，对每个人来说都是充满阳光的新开始;</p>
						<p>☆ 中国最COOL的马拉松，也是在冬季，中国纬度最高的马拉松;</p>
						<p>☆ 沿途地标均为中国最独特的地理坐标，从中国东方第一县，濒临中俄界河————黑龙江出发，沿途经过中国最东端的通江乡，中国最年经的国土————黑瞎子岛，脍炙人口的乌苏里江;乌苏里江国界界碑，中国最东端的哨所————东方第一哨;</h2>
						<p>☆ 最后4公里赛段，运动员将奔跑在冰封的国界乌苏里江上;</p>
						<p>☆ 美食马拉松，补给站将有独特美食提供给运动员，大马哈鱼籽酱配面包;</p>
						<p>☆ 终点一三条国界线汇合点终点，黑瞎子岛与两条北方大河黑龙江和乌苏里江汇合处;这里是中国每天的起点，也是中国道路最东端的终点。</p>
					</div>
				</div>
			</div>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ('Comon/right.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('Comon/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>