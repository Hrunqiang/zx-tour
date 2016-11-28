<?php /* Smarty version Smarty-3.1.6, created on 2016-11-01 16:41:07
         compiled from "../DataSource/Tpl\Score\index.html" */ ?>
<?php /*%%SmartyHeaderCode:3158156309c7e3c8114-82191271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54dbdfe67cf3c1874015ab8ca3c19e22c4a925e6' => 
    array (
      0 => '../DataSource/Tpl\\Score\\index.html',
      1 => 1452138554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3158156309c7e3c8114-82191271',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56309c7e41b0c',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56309c7e41b0c')) {function content_56309c7e41b0c($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Comon/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script src="/static/js/function.js"></script>
<script src="/static/js/searchScore.js"></script>
<style>
    .clearfix{clear:both}
    .score_res_tab ul{border-bottom: 1px solid #cccccc;}
    .score_res_tab .title{width:80px;height: 30px;padding-top:14px;}
    .score_res_tab .content{padding-left:10px;height: 30px;padding-top:14px;}
</style>
<div id="register_box" class="general_page section">
	<div class="section_center">
		<div class="general_page_left">
			<div class="left_body">
				<p class="general_page_left_title">完赛证书</p>
				<div class="general_page_left_center">
					<div class="score_select">
						<form action="" method="post" id="login_form">
							<p class='input_p'>
								<label>姓　名</label>
								<input type="text" name="user_name" id="user_name" autocomplete="off"/>
							</p>
							<p class='input_p'><label>参赛号</label>
								<input type="text" id="match_num" name="match_num" />
							</p>
							<p class='input_p'>
								<label>验证码</label>
								<input type="text" id="code" name="code" />
								<img class="code_img" src="/Account/verify" id="login_code_img" onclick="this.src=this.src+'?'+Math.random()" alt="">
								<label class="changeCode" id="login_changeCode">换一张</label>
							</p>
							<p class="input_s">
								<input id="login_submit" class="btn" type="button" value="查询" onclick="return cjsearch();" />
							</p>
						</form>
					</div>
					<div class="score_res">
						<div class="score_res_tab" id="score_res_tab">
							<!--<ul>
                                <li class="fl">1</li>
                                <li class="fl">2</li>
                                <li class="clearfix"></li>
                            </ul>-->
						</div>
						<div class="score_res_prol">
						</div>
						<div class="score_res_print">
							<input class="btn" type="button" value="查看证书" onclick="window.open('/Score/printzx?user_name='+$('#user_name').val()+'&match_num='+$('#match_num').val())">
                            <!--<input class="btn" type="button" value="查看证书" onclick="alert('努力制作中......')">-->
                        </div><!---->
					</div>
				</div>
			</div>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ('Comon/right.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('Comon/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>