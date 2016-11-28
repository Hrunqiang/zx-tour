<?php /* Smarty version Smarty-3.1.6, created on 2016-09-25 17:20:48
         compiled from "../DataSource/Tpl\Comon\nuomihotList.html" */ ?>
<?php /*%%SmartyHeaderCode:850157e657247d0d26-68426573%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ac3370b8ed657ee5862c1413e6e89d48b384fb8' => 
    array (
      0 => '../DataSource/Tpl\\Comon\\nuomihotList.html',
      1 => 1474795185,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '850157e657247d0d26-68426573',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57e657248c6ab',
  'variables' => 
  array (
    'hotlist' => 0,
    'type' => 0,
    'i' => 0,
    'now' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57e657248c6ab')) {function content_57e657248c6ab($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['hotlist']->value){?>
<style>
	.hot_matchs{background: #FFF;overflow: hidden;}
	.horizontal{background: #FFF;overflow: hidden;margin-bottom: 1.42857rem;padding:0.7142857142857143rem 1.071428571428571rem;padding-top: 1.071428571428571rem;}
	/*.horizontal h5{margin-bottom: 0.71428rem;}*/
	.horizontal .flex_1{width: 100%;display: block;}
	.hot_img{width:7.75rem;height: 5.57rem;}
	.hot_img img{width: 100%;height: 100%;}
	/*////////////////////////////////新加样式///////////////////////////////*/
	/*.weui_media_appmsg {position: relative;}*/
	.weui_media_bd .weui_media_desc_1{/*padding-bottom: 0.3rem;padding-top: 0.3rem;*/max-width: 16.71428571428571rem;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;display: block;}
	.weui_media_desc_padding{ overflow: hidden;}
	.weui_media_desc_padding span{display: inline-block;height: 0.9285rem;width: 1px;background: rgba(166,166,166,0.5);float:inherit; margin: 0 0.285rem;vertical-align: -0.1428rem;}
	/*.weui_media_bd .weui_media_desc_padding{position: absolute;bottom: 1rem;}
	.weui_media_bd{margin-top: -5.428rem;}
	.weui_media_title_position{position: absolute;top: 2.857rem;padding-right: 1.0714rem;}*/
	.weui_media_box:before{content: '';left: 0;}
	.weui_tabbar_label{font-size: 1rem;margin-top: 0.3571rem;color: #333333;}
	.hot_img_center a:nth-child(2) {margin: 0 0 0 0.25rem;}
	.hot_img_center a:nth-child(3){overflow: hidden;}
	.hot_img_center a:nth-child(3) div{float: right;}
	.hot_img_center a:nth-child(3) p{float: right;}
	.S_overhiden{overflow: hidden;/*width: 9.857142857142857rem;*/text-overflow: ellipsis;white-space: nowrap;display: inline-block;color: #333333;}
	.weui_media_box .flex{width: 17.85714285714286rem;white-space: nowrap;overflow: hidden;display: -webkit-box;height: 2.142857142857143rem;}
	/*.flex span:nth-child(1){-webkit-box-flex:1;display: block;}
	.flex span:nth-child(2){display: block;line-height: 1.5rem;float: none;margin-left: 20px;}*/
	.flex span:nth-child(1){-webkit-box-flex:1;/*max-width: 8.642857142857143rem;*/padding-top: 0.2142857142857143rem;display: block;}
	.flex span:nth-child(2){line-height: 1.5rem;margin-left: 1.428571428571429rem;}
	.loading{background: #f5f5f9;text-align: center;color: #888888;font-size: 1rem;line-height: 2.71rem;height: 3.71rem; position: relative;width: 100%;}
	.loading .weui_loading{top: 14%;margin-top: 1.428571428571429rem;left: 44%;}
	/*.flex .over_hidden{max-width: 12.07142857142857rem!important;}*/
	.weui_media_box .weui_media_desc{max-width: 17.57142857142857rem;white-space: nowrap;display: block;}
</style>
<?php if ($_smarty_tpl->tpl_vars['type']->value=="vertical"){?>
<p class="list_title">热门赛事推荐</p>
<div class="hot_matchs matchBox">
    <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hotlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
    <a href="/Matchinfo?m_id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
&platform=zx-tour" class="weui_media_box weui_media_appmsg">
        <div class="weui_media_hd">
            <img class="weui_media_appmsg_thumb" src="<?php echo $_smarty_tpl->tpl_vars['i']->value['m_img'];?>
" alt="">
        </div>
        <div class="weui_media_bd">
            <h4 class="weui_media_title flex"><span class="S_overhiden"><?php echo $_smarty_tpl->tpl_vars['i']->value['m_name'];?>
</span>
            <?php if ($_smarty_tpl->tpl_vars['i']->value['m_state']!=0||$_smarty_tpl->tpl_vars['i']->value['m_GameTime']<=$_smarty_tpl->tpl_vars['now']->value||$_smarty_tpl->tpl_vars['i']->value['m_releaseTime']>$_smarty_tpl->tpl_vars['now']->value||$_smarty_tpl->tpl_vars['i']->value['m_untilTime']<$_smarty_tpl->tpl_vars['now']->value||$_smarty_tpl->tpl_vars['i']->value['m_offineTime']<$_smarty_tpl->tpl_vars['now']->value){?>
            <span class="match_tips">名额已满</span>
            	
            <?php }elseif($_smarty_tpl->tpl_vars['i']->value['m_placesleft']<=20){?>
            	<span class="match_tips match_tips_warm">名额紧张</span>
            <?php }?>
            </h4>
            <p class="weui_media_desc weui_media_desc_1 line2 weui_media_title_position"><?php echo $_smarty_tpl->tpl_vars['i']->value['m_des'];?>
</p>
            <p class="weui_media_desc weui_media_desc_padding"><?php echo substr($_smarty_tpl->tpl_vars['i']->value['m_GameTime'],2,9);?>
<?php echo str_replace("|","<span></span>",$_smarty_tpl->tpl_vars['i']->value['m_Mtypes']);?>
</p>
        </div>
    </a>
    <?php } ?>
</div>
<?php }else{ ?>
<div class="horizontal">
	<h5 class="borderLeft" style="padding-bottom: 0.9285714285714286rem;"><span class="borderLeft—green"></span>热门赛事</h5>
	<div class="flexBox hot_img_center">
		<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hotlist']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
	    <a href="/Matchinfo?m_id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
&platform=zx-tour" class="flex_1">
	        <div class="hot_img">
	            <img style="width: 7.75rem;height: 5.57rem;" src="<?php echo $_smarty_tpl->tpl_vars['i']->value['m_img'];?>
" alt="">
	        </div>
	        <p class="weui_tabbar_label"style="  text-overflow:ellipsis; white-space:nowrap; overflow:hidden;width: 7.76rem;"><?php echo $_smarty_tpl->tpl_vars['i']->value['m_name'];?>
</p>
	    </a>
	    <?php } ?>
	</div>
</div>
<?php }?>
<?php }?>
	<script type="text/javascript">
	$(document).ready(function  () {
		$('.weui_media_box .flex').each(function () {
			if($(this).find('.match_tips').length==0){
//				$(this).find('.S_overhiden').css('max-width','15.14285714285714rem')
			}
		})	
//		console.log($('.hot_matchs a:nth-child(1) p:nth-child(3)').html())
//		console.log($('.hot_matchs a:nth-child(2) p:nth-child(3)').html())
//		console.log($('.hot_matchs a:nth-child(3) p:nth-child(3)').html())
//		var b=hot_matchs;

	})
	</script><?php }} ?>