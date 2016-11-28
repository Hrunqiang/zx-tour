<?php /* Smarty version Smarty-3.1.6, created on 2016-11-06 16:00:02
         compiled from "../DataSource/Tpl\Matchinfo\line.html" */ ?>
<?php /*%%SmartyHeaderCode:2063356333d8b0ecaf3-95106663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb943307d9c91414de9ac8ba8f6d8bc0cf6bba58' => 
    array (
      0 => '../DataSource/Tpl\\Matchinfo\\line.html',
      1 => 1478419194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2063356333d8b0ecaf3-95106663',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56333d8b13877',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56333d8b13877')) {function content_56333d8b13877($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Comon/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="register_box" class="general_page section">
	<div class="section_center">
		<div class="general_page_left">
			<div class="left_body equipmentbox">
				<p class="general_page_left_title">比赛线路</p>
				<div class="general_page_left_center">
					<!--<div class="map_min_info">
						<p><img src="/static/images/map.jpg"></p>
					</div>-->
					<div class="map_min_info">
						<p class="general_page_left_title_min">比赛线路</p>
						<p>（一）马拉松（42.195公里）</p>
						<p>泰山路北江边（起点）—莽吉塔古城遗址—小河子村—东辉畜牧场—黑瞎子岛大桥—太阳广场—乌苏镇（终点）；</p>
                        <!-- <p><img src="/static/images/map.jpg"></p> -->
						<p>（二）半程马拉松（21.0975公里）</p>
						<p>泰山路北江边（起点）—莽吉塔古城遗址—小河子村—东辉畜牧场（终点）；</p>
                        <!-- <p><img src="/static/images/bcmls.jpg"></p> -->
						<!-- <p>（三）迷你马拉松</p>
						<p>人民广场—迎宾路—沿江路—泰山街—长江路—正阳路—人民广场（终点）；</p>
                        <p><img src="/static/images/mnmls.jpg"></p> -->
                        <img src="/static/images/2017/lineBg.jpg" alt="路线图" style="margin-top: 50px">
					</div>
				</div>  
			</div>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ('Comon/right.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('Comon/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>