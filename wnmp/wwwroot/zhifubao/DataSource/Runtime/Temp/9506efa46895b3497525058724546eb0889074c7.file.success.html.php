<?php /* Smarty version Smarty-3.1.6, created on 2016-11-22 12:40:50
         compiled from "../DataSource/Tpl\User\success.html" */ ?>
<?php /*%%SmartyHeaderCode:214765812f60b5db655-69835876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9506efa46895b3497525058724546eb0889074c7' => 
    array (
      0 => '../DataSource/Tpl\\User\\success.html',
      1 => 1479789636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214765812f60b5db655-69835876',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5812f60b64373',
  'variables' => 
  array (
    'price' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5812f60b64373')) {function content_5812f60b64373($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Comon/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="/static/css/time.css">
<title>报名成功</title>
<style type="text/css">
.weui_cells{margin-top: 0;}
.userinfo_head{padding-bottom: 0;margin-bottom: 0;background: none;padding: 0;}
    input::-webkit-input-placeholder{font-size: 1.1rem;color: #C9C9C9;} 
.msg_desc{font-size: 1rem;margin: 1.285714285714286rem 0;}
.msg_desc>i{width: 21rem;height: 8.57142857142857rem;background: blue}
.weui_msg{padding: 0!important}

.msg{padding: 0;}
.weui_icon_success:before{color: #FF2244;}
.weui_msg .weui_icon_area{margin-bottom: 0.7142857142857143rem;}
.success_title{font-size: 1.428571428571429rem;color: #ff2244;}
.weui_msg_desc{font-size: 1rem;color: #888888;}
</style>
<div class="msg msg_pad">
<div class="weui_msg">
    <!-- <div class="weui_icon_area"><i class="weui_icon_success weui_icon_msg"></i></div>
    <div class="success_title">报名成功</div> -->
    <div class="weui_cells msg userinfo_head" style="text-align: center;">
        <p class="msg_desc icon_s"><i style="background: url(/static/images/success_page.png) no-repeat left center;background-size: 100%;"></i></p>
    </div>
    <p style="text-align: left;padding-left: 1.071428571428571rem;color: #888888;font-size: 1.142857142857143rem;margin:0;">感谢您的报名! 您可以 :</p>
    <div class="weui_opr_area">
        <p class="weui_btn_area">
            <a href="/User" class="weui_btn weui_btn_warn" style="color: #FFFFFF;">去我的赛事查看</a>
        </p>
    </div>
    <div class="weui_text_area">
		<!--///////////////原来文案//////////////////////////////////////////////////////-->
        <!--<p class="weui_msg_desc" style="text-align: left;"><?php if ($_smarty_tpl->tpl_vars['price']->value['m_ptype']=="国内"){?>感谢您的报名！我们已经向您的注册邮箱发送了确认邮件，亲查收。赛事后续信息也将通过该邮箱发送给您，请务必确保能收到邮件。<?php }else{ ?>感谢您的报名！我们已经向您的注册邮箱发送了确认邮件，请查收。后续马拉松确认函和赛事手册都将通过该邮箱发送给您，请务必确保能收到邮件。也请加客服微信：zxhylv，告知“姓名＋比赛名称”，方便我们拉您进赛事群交流。如果有任何问题，请致电：400-842-195。<?php }?></p>-->
        <div class="weui_msg_desc" style="text-align: left;">
        	<p>如果您已经关注了我们的微信公众号，赛事相关的后续信 息将通过微信公众号发给您，如果还未关注，强烈建议您 关注。</p>
        	<p>1、您可以在微信中搜索公众微信号“知行和逸旅行”</p>
        	<p>2、您可以通过微信号:zxhy-tour 找到我们</p>
        </div>
    </div>
</div>
</div>
<script src="/static/weui/js/weui.js"></script>
<script type="text/javascript" src="/static/js/iscroll.js?v=1.2"></script>
<script type="text/javascript" src="/static/js/date.js?v=1.2"></script>
<script type="text/javascript" src="/static/js/function.js?v=1.2"></script>
</body>
</html><?php }} ?>