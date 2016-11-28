<?php /* Smarty version Smarty-3.1.6, created on 2016-06-29 18:40:51
         compiled from "../DataSource/Tpl\User\collection.html" */ ?>
<?php /*%%SmartyHeaderCode:137815773a5b35b7310-23162012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '911a5491a5f9e2657465be420974c6bf14adc566' => 
    array (
      0 => '../DataSource/Tpl\\User\\collection.html',
      1 => 1464073664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137815773a5b35b7310-23162012',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'abroad' => 0,
    'domestic' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5773a5b362999',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5773a5b362999')) {function content_5773a5b362999($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Comon/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<title>想跑的赛事</title>
<style>
.matchBox{margin-bottom: 20px;}
.borderLeft{margin: 5px 15px;}
.borderLeft span{float: left;width: 0.2142rem;height: 1.2142rem;background: #04b102;margin: 0.322rem 0.5rem 0 0;}
.weui_media_desc{padding: 0.3rem 0;}
.weui_media_box.weui_media_appmsg .weui_media_hd{margin-right: 1.14285rem;}
.weui_media_box{padding: 1.071428571428571rem;}
.weui_media_desc span{display: inline-block;height: 0.9285rem;width: 1px;background: rgba(166,166,166,0.5);float: inherit;margin: 0 0.285rem;vertical-align: -0.1428rem;}
</style>
<div class="wrap centerBox">
<?php if ($_smarty_tpl->tpl_vars['abroad']->value||$_smarty_tpl->tpl_vars['domestic']->value){?>
    <?php if ($_smarty_tpl->tpl_vars['abroad']->value){?>
    <div class="matchBox">
        <h5 class="borderLeft"><span></span>海外赛事</h5>
        <?php echo $_smarty_tpl->tpl_vars['abroad']->value;?>

    </div>
    <?php }?>
     <?php if ($_smarty_tpl->tpl_vars['domestic']->value){?>
    <div class="matchBox">
        <h5 class="borderLeft"><span></span>国内赛事</h5>
        <?php echo $_smarty_tpl->tpl_vars['domestic']->value;?>

    </div>
    <?php }?>
<?php }else{ ?>
<?php echo $_smarty_tpl->getSubTemplate ("User/empty.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>
</div><!--end of wrap -->
<!-- <script src="/static/js/zepto.js"></script>
<script src="/static/weui/js/weui.js"></script> -->

</body>
</html><?php }} ?>