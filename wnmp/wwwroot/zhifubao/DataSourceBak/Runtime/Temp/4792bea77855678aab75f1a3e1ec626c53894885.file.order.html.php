<?php /* Smarty version Smarty-3.1.6, created on 2016-10-10 06:14:17
         compiled from "../DataSource/Tpl\User\order.html" */ ?>
<?php /*%%SmartyHeaderCode:73357469b69861e99-24197488%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4792bea77855678aab75f1a3e1ec626c53894885' => 
    array (
      0 => '../DataSource/Tpl\\User\\order.html',
      1 => 1472006782,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '73357469b69861e99-24197488',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_57469b698f093',
  'variables' => 
  array (
    'orderHTML' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57469b698f093')) {function content_57469b698f093($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Comon/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<title>我的赛事</title>
<style>   
.matchBox{margin-bottom: 20px;}
.borderLeft{margin: 5px 15px;}
.matchicon,.matchicon img{width: 40px!important;height: 40px;margin-right: 10px;}
.orderBox{margin-bottom: 10px;background: #FFF;overflow: hidden;}
.orderBox .weui_media_box .weui_media_hd,.orderBox .weui_media_box .weui_media_hd img{width: 120px;height: 90px;}
.gopaybtn{color: #00AAEE!important;border: 1px solid #00AAEE!important;padding: 0 5px;margin-right: 10px;border-radius: 2px;}
.cancelbtn{color: #888888!important;border: 1px solid #888888!important;padding: 0 5px;border-radius: 2px;}
/*/////////////////////////////////////////新加样式/////////////////////////////////////*/
.weui_msg .weui_msg_desc a{color: #00AAEE;}
.weui_msg .weui_msg_desc{font-size: 0.85714rem;}
.orderBox .weui_cell_bd p{font-size: 1.28571rem;}
.orderBox .weui_cell_ft{font-size: 1rem;}
.orderBox .weui_media_box .weui_media_hd img{position: absolute;top: 15px;left: 15px;}
.weui_media_box.weui_media_appmsg .weui_media_hd{margin-right: 1.07142rem;}
.weui_media_bd p:first-child{font-size: 1rem;}
.weui_media_bd p:nth-child(2){padding-top: 0.78571rem;}
.weui_media_bd p:last-child span{font-size: 1.21428rem;}
.weui_cell:before{top: -1px;}
.weui_cell{padding: 10px 1.074285rem 10px;}
/*.weui_media_appmsg{padding-bottom: 0px;}*/
.weui_msg{position: absolute;bottom: 0px;left: 0;right: 0;}
/*.weui_msg .weui_text_area{margin-bottom: 0.7142857rem ;}*/
.weui_cells{margin-top: 0px;}
#j_z_f {display: inline-block;height: 0.68rem;width: 1px;background: rgba(166,166,166,0.5);position: absolute;top: 23.5%;}
.weui_toast{width: 6.428571428571429rem;height: 6.428571428571429rem;}
.matchicon img{width: 100%;height: 100%;border: 1px solid rgba(156,156,156,0.2);border-radius: 0.535rem;}
/*///////////////////////////////////////////////////////支付宝样式修改//////////////////////////////////////////*/
.weui_toast{top: 37%;}
.weui_icon_toast{margin: 1.142857142857143rem 0 0.6428571428571429rem 0;}
.weui_toast_content{margin: 6px auto 0;font-size: 0.9285714285714286rem;}
.weui_icon_toast:before{content: '';width: 2.571428571428571rem;height: 2.571428571428571rem;background: url(/static/images/delete_icon.png);background-size: 2.571428571428571rem;}
.orderBox .orange{color: #FB6165!important;}
.weui_msg .weui_text_area{margin-bottom: 1.428571428571429rem ;}
</style>
<div class="wrap centerBox">
	<div style="width: 100%;padding-bottom: 6rem;">
    <?php if ($_smarty_tpl->tpl_vars['orderHTML']->value){?>
        <?php echo $_smarty_tpl->tpl_vars['orderHTML']->value;?>

    </div>
        <div class="footer  weui_msg">
        <div class="weui_text_area">
            <p class="weui_msg_desc"><a href="tel:4000-842-195">服务资询</a><span id="j_z_f"></span><a href="/User/feedback">意见反馈</a></p>
            <p class="weui_msg_desc">本服务由知行合逸提供</p>
        </div>
    </div>
    <?php }else{ ?>
    <?php echo $_smarty_tpl->getSubTemplate ("User/empty.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }?>
</div><!--end of wrap -->
<script src="/static/js/zepto.js"></script>
<script src="/static/weui/js/weui.js"></script>
<script>
    $('.cancelbtn').click(function(){ 
        var _this = $(this);
        var orderid = _this.attr("data-id");
        if(orderid=="") return false;
        weui.Loading.show();  
        $.ajax({
            cache: false,
            url:"/User/delorder?orderid="+orderid,
            type: "POST",
            dataType: "json",
            timeout:3000,
            success: function(data){
                weui.Loading.hide();
                if(data.error == 0 ){   
                	console.log(111);
                    weui.Loading.success(2000,"删除成功");
                    setTimeout(function(){
                        window.location.href = "/User/order";
                    },2000);
                }
//              else{
//              	console.log(data.msg);
//                  weui.Loading.error('系统错误',2000);
//              }
            },
            error:function(){
                weui.Loading.hide();
//              weui.Loading.error("系统错误！",222000);
            }
        });
    });
</script>
</body>
</html><?php }} ?>