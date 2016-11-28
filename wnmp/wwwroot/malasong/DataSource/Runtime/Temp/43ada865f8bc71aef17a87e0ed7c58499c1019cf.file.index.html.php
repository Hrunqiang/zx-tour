<?php /* Smarty version Smarty-3.1.6, created on 2016-11-06 16:06:05
         compiled from "../DataSource/Tpl\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:32548561f9216603827-14453602%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43ada865f8bc71aef17a87e0ed7c58499c1019cf' => 
    array (
      0 => '../DataSource/Tpl\\Index\\index.html',
      1 => 1478419561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32548561f9216603827-14453602',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_561f92167137f',
  'variables' => 
  array (
    'tilte' => 0,
    'index' => 0,
    'npa' => 0,
    'news' => 0,
    'k' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561f92167137f')) {function content_561f92167137f($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title><?php echo $_smarty_tpl->tpl_vars['tilte']->value;?>
</title>
	<script src="/static/js/jquery.js"></script>
	<script>	
	<?php if ($_smarty_tpl->tpl_vars['index']->value=="login"){?>
    	var loginauth = true;
    <?php }else{ ?>
    	var loginauth = false;
    <?php }?>
	</script>
	<script src="/static/js/main.js"></script>
	<link rel="stylesheet" type="text/css" href="/static/css/base.css">
</head>
<body>
<?php if ($_smarty_tpl->tpl_vars['index']->value=="index"){?>
<div id="header_focus_box" class="section sectionpage">
<?php }else{ ?>
<div id="header_box" class="section">
<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['index']->value){?>
	<div id="header_focus_word" class="section_center">
		<div id="qrcode_index"><img src="/static/images/2017/qrcode_for_gh_9806b9785e2e_344.jpg"></div>
	</div>
	
	<div class="focus-item" id="focus_item"><ul id="focus_item_ul"></ul></div>
	<?php }else{ ?>
	<div id="header_center" class="section_center">
		<p id="header_center_npa">
			<span><?php echo $_smarty_tpl->tpl_vars['npa']->value['tab'];?>
</span>　>　<?php echo $_smarty_tpl->tpl_vars['npa']->value['mtab'];?>

		</p>
	</div>
	<?php }?>	
</div>
<div id="index_nav_box" style="position:absolute;">
	<div class="nav section_center">
		<ul class="nav-item fl">
			<li>
				<a href="../index">赛事信息</a>
			</li>
			<li>
				<a href="/Matchinfo/plan">赛事规则</a>
			</li>
			<li>
				<a href="/Matchinfo/line">比赛路线</a>
			</li>
			<li>
				<a href="/Matchinfo/equipment">装备建议</a>
			</li>
			<li>
				<a href="/enroll/index">赛事报名</a>
			</li>
		</ul>
	</div>
</div>
<div id="section2" class=" section">
	<div class="section_center">
		<div id="section2_word_box">
            <div style="width: 680px;margin:0 auto;text-align: left;">
                <h1>2017(中国东极黑瞎子岛)科勒·黑龙江冰上马拉松</h1>
                <h2>你，到过中国最东端吗？</h2>
                <h2>你用勇气与脚步丈量过中国的最东端吗？</h2>
                <br />
                <h2>它在黑龙江和乌苏里江交汇处的·黑瞎子岛！</h2>
                <h2>它，是中国最早见到日出☀的地方。</h2>
                <h2>亚洲最极限的冰雪马拉松风云再起！ </h2>
                <h2>2017 “科勒杯 黑龙江冰上马拉松“报名招募全面启动！ </h2>
                <h2>地点，依旧是中国东极抚远市黑瞎子岛！</h2>
                <h2>时间，依旧是2017年1月1日！</h2>
                <br />
                <br />
                <h2>这是一场真正勇敢者的奔跑游戏！</h2>
            </div>
                <!--<h2>中国每天第一缕阳光从中国的东极————黑龙江抚远县的黑瞎子岛升起。</h2>
                <h2>抚远县人民政府将在2016年新年元旦举办一场独特的马拉松赛事————2016中国东极·抚远</h2>
                <h2>黑瞎子岛日出马拉松 (Black Bear Island New Year Sunrise Marathon)</h2>-->
		</div>
		<div id="s2_map_box">
			<div class="s2_map_list">
				<p class="s2_map_list_p">
					抚远位置<!--<a href="">more</a>-->
				</p>
				<div class="s2_map_img">
					<img src="/static/images/2017/fuyuan.jpg" alt="">
				</div>
			</div>
			<div class="s2_map_list map_listie8">
				<p class="s2_map_list_p">
					起点坐标<!--<a href="">more</a>-->
				</p>
				<div class="s2_map_img">
					<img src="/static/images/2017/qidian.jpg" alt="">
				</div>
			</div>
			<!-- <div class="s2_map_list">
				<p class="s2_map_list_p">
					迷你马拉松
				</p>
				<div class="s2_map_img">
					<img src="/static/images/mnmls.jpg" alt="">
				</div>
			</div> -->
		</div>
	</div>
</div>
<div id="section3" class="sectionpage section">
	<!-- <div class="vertical_center section_center">
		<div id="s3_center_box">
			<h1>2016中国东极·抚远黑瞎子岛 新年日出马拉松赛特色</h1>
			<h2>☆ 一次中国版图最东端的马拉松；</h2>
			<h2>☆ 每天中国的第一缕阳光从这里升起。2016年元旦05:58分，新年日出之时，鸣枪起跑；</h2>
			<h2>☆ 迎着新年的第一缕阳光，和太阳一同起跑！follow me！follow sun！</h2>
			<h2>☆ 穿梭在冰天雪地，奔跑在林海雪原，这是中国最cool的马拉松，也是中国纬度最高的马拉松;</h2>
			<h2>☆ 沿途欣赏中国最独特的地理坐标：中俄界河——黑龙江，中国最东端——通江乡，中国最年经的国土————黑瞎子岛，中国最东国界线——乌苏里江国界界碑，中国最东端的哨所——东方第一哨;</h2>
			<h2>☆ 最后的4公里，运动员们将奔跑在千里冰封的乌苏里江面上;</h2>
			<h2>☆ 最强补给站。补给站将有独特美食提供给运动员，大马哈鱼籽酱配面包;</h2>
			<h2>☆ 比赛的终点，最后的终极。这里是三条国界线的汇合点；这里是中国两条北方大河，黑龙江和乌苏里江的汇合处;这里是中国每天的起点，也是中国道路最东端的终点。</h2>
			<h2>☆ 现已开启全面报名，报名从2015年11月1日起至12月30日止。</h2>
		</div>
	</div> -->
</div>
<!-- <div id="section4" class="section">
	<div id="s4_center" class="section_center">
		<div id="s4_center_title">
			<ul>
				<li><img src="/static/images/waveline.png" alt=""></li>
				<li>热点新闻</li>
				<li><img src="/static/images/waveline.png" alt=""></li>
			</ul>
		</div>
		<div id="s4_news_box">
			<?php  $_smarty_tpl->tpl_vars["i"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["i"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["i"]->key => $_smarty_tpl->tpl_vars["i"]->value){
$_smarty_tpl->tpl_vars["i"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["i"]->key;
?>
					<?php if ($_smarty_tpl->tpl_vars['k']->value==0){?>
					<div id="s4_news_left" class="s4_news_list">
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['k']->value==3){?>
					</div>
					<div id="s4_news_right" class="s4_news_list">
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['i']->value['url_type']=="location"){?>
						<a href="/Index/news?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
">
					<?php }else{ ?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
" target="_bank">
					<?php }?>
							<div class="index_news_box">
								<div class="index_news_img img_box">
									<img src="<?php echo $_smarty_tpl->tpl_vars['i']->value['img'];?>
" alt="">
								</div>
								<div class="index_news_info">
									<p class="index_news_title"><?php echo $_smarty_tpl->tpl_vars['i']->value['news_title'];?>
</p>
									<p class="index_news_des"><?php echo $_smarty_tpl->tpl_vars['i']->value['des'];?>
</p>
								</div>
							</div>
						</a>
			<?php } ?>
					</div>
		</div>
	</div>
</div> -->

<div id="section5" class="sectionpage section" style="">
	<div id="s5_center" class="vertical_center section_center">
		<div id="s5_athlete_box" class="s5_center_list">
			<p style="font-size: 35px">实景图分享</p>
			<div id="s5_athlete_list_box" class="s5_list_box">
				<ul>
					<li class="img_box">
						<img class="vertical_center" src="/static/images/2017/IMG_5221.jpg" alt="">
						<!-- <p>董　军</p>
 -->				</li>
					<li class="img_box">
						<img class="vertical_center" src="/static/images/2017/IMG_5224.jpg" alt="">
						<!-- <p>王　静</p> -->
					</li>
					<li class="img_box">
						<img class="vertical_center" src="/static/images/2017/IMG_5225.jpg" alt="">
						<!-- <p>毛大庆</p> -->
					</li>
					<li class="img_box">
						<img class="vertical_center" src="/static/images/2017/IMG_5228.jpg" alt="">
						<!-- <p>王家超</p> -->
					</li>
					<li class="img_box">
						<img class="vertical_center" src="/static/images/2017/IMG_5357.jpg" alt="">
						<!-- <p>苏子灵</p> -->
					</li>
					<li class="img_box">
						<img class="vertical_center" src="/static/images/2017/IMG_4964.jpg" alt="">
						<!-- <p>董　军</p>
 -->				</li>
 					<li class="img_box">
						<img class="vertical_center" src="/static/images/2017/IMG_5044.jpg" alt="">
						<!-- <p>董　军</p>
 -->				</li>
 					<li class="img_box">
						<img class="vertical_center" src="/static/images/2017/IMG_5046.jpg" alt="">
						<!-- <p>董　军</p>
 -->				</li>
					<li class="img_box">
						<img class="vertical_center" src="/static/images/2017/IMG_5096.jpg" alt="">
						<!-- <p>董　军</p>
 -->				</li>
 					<li class="img_box">
						<img class="vertical_center" src="/static/images/2017/IMG_5141.jpg" alt="">
						<!-- <p>董　军</p>
 -->				</li>
 					<li class="img_box">
						<img class="vertical_center" src="/static/images/2017/IMG_3794.jpg" alt="">
						<!-- <p>董　军</p>
 -->				</li>
 					<li class="img_box">
						<img class="vertical_center" src="/static/images/2017/IMG_3935.jpg" alt="">
						<!-- <p>董　军</p>
 -->				</li>
 					<li class="img_box">
						<img class="vertical_center" src="/static/images/2017/IMG_3997.jpg" alt="">
						<!-- <p>董　军</p>
 -->				</li>
 					<li class="img_box">
						<img class="vertical_center" src="/static/images/2017/IMG_4578.jpg" alt="">
						<!-- <p>董　军</p>
 -->				</li>
 					<li class="img_box">
						<img class="vertical_center" src="/static/images/2017/IMG_4726.jpg" alt="">
						<!-- <p>董　军</p>
 -->				</li>
					<!-- <li>
						<img class="vertical_center" src="/static/images/athlete06.png" alt="">
						<p>CHARLIE WAITE</p>
					</li> -->
				</ul>
			</div>
		</div>
		<!-- <div id="s5_sponsor_box" class="s5_center_list">
			<p>特别赞助商</p>
			<div id="s5_sponsor_list_box" class="s5_list_box">
				<ul>
					<li>
						<img class="vertical_center" src="/static/images/nike.png" alt="">
					</li>
					<li>
						<img class="vertical_center" src="/static/images/addidas.png" alt="">
					</li>
					<li>
						<img class="vertical_center" src="/static/images/puma.png" alt="">
					</li>
					<li>
						<img class="vertical_center" src="/static/images/racbok.png" alt="">
					</li>
					<li>
						<img class="vertical_center" src="/static/images/speedo.png" alt="">
					</li>
					<li>
						<img class="vertical_center" src="/static/images/jaked.png" alt="">
					</li>
				</ul>
			</div>
		</div> -->
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('Comon/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>