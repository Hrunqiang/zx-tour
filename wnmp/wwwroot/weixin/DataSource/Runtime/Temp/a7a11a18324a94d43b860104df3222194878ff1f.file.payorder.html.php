<?php /* Smarty version Smarty-3.1.6, created on 2016-11-14 10:08:40
         compiled from "../DataSource/Tpl\PayResult\payorder.html" */ ?>
<?php /*%%SmartyHeaderCode:2766158291ca86d7ba6-70472559%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7a11a18324a94d43b860104df3222194878ff1f' => 
    array (
      0 => '../DataSource/Tpl\\PayResult\\payorder.html',
      1 => 1478757470,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2766158291ca86d7ba6-70472559',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'price' => 0,
    'meal' => 0,
    'course' => 0,
    'attach' => 0,
    'coupon_count' => 0,
    'coupon' => 0,
    'isWeixin' => 0,
    'jsApiParameters' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58291ca892629',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58291ca892629')) {function content_58291ca892629($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Comon/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<style type="text/css">
.pay{color:#888888;}
.pay .weui_cells_checkbox .weui_check{border:1px solid #888888;}
.pay .weui_cells_checkbox .weui_check:checked + .weui_icon_checked:before{content: '\EA08';}
.pay .weui_icon_waiting_circle:before{color:#888888;font-size: 1.64285714rem;margin-top: -3px;}
.payWay{background: #FFF;margin-top:  0.6428571428571429rem;}
.order_info_list{width: 4.928571428571429rem;}
.pay .weui_msg{padding:0.7142rem 0;}
.moreWay{padding:0.3571rem 1.071rem;}
.pay .weui_media_box.weui_media_appmsg .weui_media_hd{width: 3.321rem;height: 3.321rem;}
.weui_media_box{padding:0.7142857142857143rem 1.071rem;}
#agreementBox{position: absolute;width: 100%;height: 100%;z-index: 1000;top:0;left:0;background: #efeef3;display: none;}
#agreementBox .weui_msg_title{text-align: center;/*margin-top: 21px;*/font-size: 1.428571rem;color: #000000;}
#agreementBox .weui_msg_desc{/*text-indent:2em;*/padding:0.9285rem 1.5714rem;line-height: 20px;font-size: 1rem;}
#agreementBox .arg_btn{position: fixed;background: #FFF;bottom:0;width: 100%;padding:0.7142857142857143rem 1.071428571428571rem;box-sizing:border-box;}
/*////////////////////////////新加样式//////////////////////////////////////////////*/
.weui_cell table tr th,.weui_cell table tr td{font-size: 1rem;padding-bottom: 1.21428rem;}
.pay .weui_msg{padding-top: 0;}
.weui_msg .weui_msg_title{font-size: 2.07142rem;color: #000000;}
.weui_media_box .weui_media_desc span{font-size: 1.071428rem;}
.weui_media_bd  {font-size: 1.07142rem;}
.weui_icon_waiting_circle{padding-right: 0.428571rem;}
.weui_media_box .weui_media_title{font-size: 1.071428rem!important;}
.weui_media_bd .weui_media_desc_size, .weui_panel_bd .weui_media_desc_size{font-size: 0.857142rem!important;}
.weui_cell_primary p{font-size: 0.85714rem;}
.weui_cell_primary .weui_cell_primary_zffontsize{font-size: 1.1428571rem;font-weight: normal;}
.weui_cell_primary a{color: #556F94;}
.weui_cell_bgcolor{background:#efeef4;}
.weui_cells:after{display: none;}
.moreWay{font-size: 1rem;margin-bottom: 4rem;}
.moreWay a{color: #556F94;}
._xmfu{float: right;margin-right: 0.60rem;}
.weui_media_text:before{left:0;}
.weui_media_box:after{content: '';width: 100%;height: 1px;color: red;position: absolute;}
.weui_msg{padding-top: 1.285714285714286rem;}
.weui_msg .weui_icon_area{margin-bottom: 1.5714285rem;width: 21.39285714285714rem;height: 5.5rem;background: url(/static/images/process_pay.png) no-repeat;background-size: 100%;margin: 0 auto;}
.weui_msg .weui_msg_title{margin-bottom: 2.64285rem;}
.weui_msg .weui_msg_desc{font-size: 1.14285rem;}
.weui_msg .weui_msg_desc{font-size: 1rem;padding: 0 0.7142857142857143rem;}
.weui_msg .weui_msg_desc p{text-align: center;}
.weui_msg .weui_msg_desc p:nth-child(1){margin-bottom: 1.357142857142857rem;}
.weui_msg .weui_text_area{margin-bottom: 1.785714285714286rem;padding: 0 0;margin-top: 3.5rem;text-align: center;}
/*.weui_msg .weui_text_area{margin-bottom: 3.78571rem;}*/
.msg_pad{padding: 0;}
.weui_cell table{text-align: left;font-weight: normal;}
.weui_cell table th{font-weight: normal;}
.weui_cell table td{color: #000000;}
.weui_media_text:after{content: '';position: absolute;border-bottom: 1px solid #E5E5E5;bottom: 0px;left: 0;}
.zffs_kuang:after{content: '';position: absolute;border-bottom: 1px solid #E5E5E5;bottom: 0px;left: 1.071rem;width: 100%;}
/*.weui_media_appmsg:before{content: '';position: absolute;border-bottom: 1px solid #E5E5E5;bottom: 0px;left: 0;}*/
/*.color-b{font-weight: normal;}*/
.pay_kuang:after{border-bottom: 0px solid;}
.wx_kuang:after{content: '';position: absolute;border-bottom: 1px solid #E5E5E5;/*bottom: 12.71428571rem;*/left: 0;width: 100%;}
/*.weui_media_box:before{content: '';height: 1px;width: 100%;background: #E5E5E5;display: block;}*/
.weui_cells_checkbox .weui_icon_checked:before{font-size: 1.1428571428571rem;}
.pay .weui_cells_checkbox .weui_check:checked + .weui_icon_checked:before{font-size: 1.1428571428571rem;}
.color_b{font-weight: normal;}
.weui_cells_checkbox .chek_k{border: 1px solid #E5E5E5;padding: 0 0 0 0;width: 1rem;height: 1rem;border-radius: 0.2142857rem;margin-right: 0.5rem;}
.weui_cells_checkbox .weui_icon_checked:before{content: '';}
#countdown{color:#f75d00;}
.convert{display: block;margin-top: 0.6428571428571429rem;}
.coupon{overflow: hidden;background: #FFFFFF;}
.coupon_1{font-size: 1.1428571rem;float: left;color: #000000;}
.coupon_2{font-size: 1rem;float: right;}
.weui_mask_transparent{background: rgba(0,0,0,0.5);}
.order_info_view{margin-top: 0px;}
.order_info_view:before{display: none;}
/*///////////////////////////////////////////////*/
.weui_cell_line:before{content: "";width: 100%;height: 1px;background: #E7E7E7;display: block;}
.weui_cell_line:after{content: "";width: 100%;height: 1px;background: #E7E7E7;position: absolute;bottom: 0;left: 15px;}
.coupon_play{border: 1px solid #ff7400;color: #ff7400;border-radius: 1.071428571428571rem;font-size: 0.7142857142857143rem;margin-top: 0.1428571428571429rem;margin-left: 0.2857142857142857rem;float: left;padding: 0 0.2857142857142857rem;}
.noplay_icon{background: url(/static/images/arror_right.png) no-repeat;float: right;width: 0.7142857142857143rem;height: 1.428571428571429rem;background-size: 100%;margin-top: 0.2857142857142857rem;margin-left: 1.142857142857143rem;}
.cancel_before:before{display: none;}
.convert .coupon:before{content: "";position: absolute;width: 100%;height: 1px;background: #E5E5E5;display: block;}
.pay .weui_msg:after{content: "";width: 100%;height: 1px;background: #D9D9D9;position: absolute;bottom: 0;left: 0px;transform: scaleY(0.5);-webkit-transform: scaleY(0.5);-ms-transform: scaleY(0.5);-moz-transform: scaleY(0.5);}
.zf_warn:before{content: "";width: 100%;height: 1px;background: #E5E5E5;position: absolute;top: 0px;}
</style>
<script type="text/javascript" src="/static/js/zepto.js"></script>
<script src="/static/weui/js/weui.js"></script>
<title>支付订单</title>
</head>
<body>
<?php if ($_smarty_tpl->tpl_vars['price']->value['paystats']==5){?>
<div class="pay wrap">
	<div class="weui_media_box weui_media_text suoding">
        <p class="weui_media_desc"><i class="weui_icon_waiting_circle"></i>已锁定名额，<i id="countdown"><?php echo substr($_smarty_tpl->tpl_vars['price']->value['pay_deadline'],11,8);?>
</i> 内未支付名额将自动释放</p>
    </div>
    <div class="order_info weui_cells order_info_view">
        <div class="weui_cell">
            <div class="weui_cell_bd weui_cell_primary" style="overflow: hidden;">
                <p class="color_b weui_cell_primary_zffontsize" style="float: left;">订单信息</p>
                <div style="float: right;"><a href="/Enroll?m_id=<?php echo $_smarty_tpl->tpl_vars['price']->value['matchid'];?>
">返回重新选择套餐</a></div>
            </div>
        </div>
        <div class="weui_cell weui_cell_line">
        	<table>
        		<tr>
        			<th>订单编号:</th>
        			<td><?php echo $_smarty_tpl->tpl_vars['price']->value['orderid'];?>
</td>
        		</tr>
        		<tr>
        			<th class="order_info_list">报名赛事:</th>
        			<td><?php echo $_smarty_tpl->tpl_vars['price']->value['m_name'];?>
</td>
        		</tr>
        		<tr>
        			<th class="_xmfu">套餐选择:</th>
        			<td><?php echo $_smarty_tpl->tpl_vars['meal']->value;?>
</td>
        		</tr>
        		<tr>
        			<th class="_xmfu">赛事组别:</th>
        			<td><?php echo $_smarty_tpl->tpl_vars['course']->value;?>
</td>
        		</tr>
        		<tr>
        			<th class="_xmfu">配套服务:</th>
        			<td><?php if ($_smarty_tpl->tpl_vars['attach']->value){?><?php echo $_smarty_tpl->tpl_vars['attach']->value;?>
<?php }else{ ?>无<?php }?></td>
        		</tr>
        		<!--<tr>
        			<th class="order_info_list">报名赛事:</th>
        			<td><?php echo $_smarty_tpl->tpl_vars['price']->value['m_name'];?>
</td>
        		</tr>
        		<tr>
        			<th class="_xmfu">服务项目:</th>
        			<td><?php echo $_smarty_tpl->tpl_vars['meal']->value;?>
</td>
        		</tr>
        		<tr>
        			<th>订单编号:</th>
        			<td><?php echo $_smarty_tpl->tpl_vars['price']->value['orderid'];?>
</td>
        		</tr>-->
        	</table>
        </div>
        <div class="weui_msg"style="padding:0.4285714285714286rem 15px;overflow: hidden;">
            <p class="weui_msg_desc color_b" style="float: left;margin-top: 0.3571428571428571rem;padding: 0 0.5rem 0 0;">支付金额:</p>
            <h2 class="weui_msg_title"style="margin-bottom:0 ;float: left;font-size: 1.428571428571429rem;"><span style="font-size: 0.9285714285714286rem;">￥</span><?php echo round($_smarty_tpl->tpl_vars['price']->value['payprice']-$_smarty_tpl->tpl_vars['price']->value['discount'],2);?>
<?php if ($_smarty_tpl->tpl_vars['price']->value['discount']){?><del style="font-size: 14px;color: #999999;">原价<?php echo $_smarty_tpl->tpl_vars['price']->value['payprice'];?>
</del><?php }?> </h2> 
        </div>
    </div>
    <a href="/Coupon?orderid=<?php echo $_smarty_tpl->tpl_vars['price']->value['orderid'];?>
" class="convert">
        <div class="weui_media_box weui_media_text coupon">
	        <span class="coupon_1">优惠券</span>
	        <span class="coupon_play"><span><?php echo $_smarty_tpl->tpl_vars['coupon_count']->value;?>
</span>张</span>
	        <span class="coupon_2"><?php if ($_smarty_tpl->tpl_vars['coupon']->value){?><?php echo $_smarty_tpl->tpl_vars['coupon']->value;?>
<?php }else{ ?>未使用<?php }?><i class="noplay_icon"></i></span>
	        <!--<span class="coupon_2"><?php if ($_smarty_tpl->tpl_vars['coupon']->value){?><?php echo $_smarty_tpl->tpl_vars['coupon']->value;?>
<?php }else{ ?>使用兑换券|暂无可用兑换码><?php }?></span>-->
        </div>
    </a>
    <!--<a href="/Coupon?orderid=<?php echo $_smarty_tpl->tpl_vars['price']->value['orderid'];?>
" class="convert">
        <div class="weui_media_box weui_media_text coupon">
	        <span class="coupon_1">兑换码</span>
	        <span class="coupon_2"><?php if ($_smarty_tpl->tpl_vars['coupon']->value){?><?php echo $_smarty_tpl->tpl_vars['coupon']->value;?>
<?php }else{ ?>使用兑换券|暂无可用兑换码><?php }?></span>
        </div>
    </a>-->
    <form action="/PayResult/gotoPay" id="payForm" method="post">
    <input size="30" name="WIDout_trade_no" value="<?php echo $_smarty_tpl->tpl_vars['price']->value['orderid'];?>
"  type="hidden"/>
    <div class="weui_cells weui_cells_radio payWay">
        <div class="weui_cell zffs_kuang">
            <div class="weui_cell_bd weui_cell_primary">
                <p class="color_b weui_cell_primary_zffontsize">支付方式</p>
            </div>
        </div>
        <div class="weui_panel_bd wx_kuang">
            <?php if ($_smarty_tpl->tpl_vars['isWeixin']->value){?>
            <label href="javascript:void(0);" class="weui_media_box weui_media_appmsg" for="course2">
                <div class="weui_media_hd appicon weixin"></div>
                <div class="weui_media_bd">
                    <h4 class="weui_media_title color_b">微信支付</h4>
                    <p class="weui_media_desc weui_media_desc_size">推荐已安装微信的用户使用</p>
                </div>
                <div class="weui_cell_ft">
                    <input type="radio" class="weui_check" value="wxpay"  name="payway" id="course2" checked="checked">
                    <span class="weui_icon_checked"></span>
                </div>
            </label>
            <?php }else{ ?>
            <label href="javascript:void(0);" class="weui_media_box weui_media_appmsg" for="course1">
                <div class="weui_media_hd appicon zhifubao"></div>
                <div class="weui_media_bd">
                    <h4 class="weui_media_title color_b">支付宝</h4>
                    <p class="weui_media_desc weui_media_desc_size">推荐支付宝用户使用</p>
                </div>
                <div class="weui_cell_ft">
                    <input type="radio" class="weui_check" value="alipay"  name="payway" id="course1" checked="checked">
                    <span class="weui_icon_checked"></span>
                </div>
            </label>
            <?php }?>
        </div>
        <div style="height: 0.6428571428571429rem;background: #efeef3;"></div>
        <div class="weui_panel_bd zf_warn">
            <div class="weui_media_box weui_media_text pay_kuang" style="padding-bottom: 0px;">
                <p class="weui_media_desc">支付小贴士</p>
                <p class="weui_media_desc weui_media_desc_size">因跑步赛事的特殊性，报名需以支付款为准，取消不退款，名额无法转让，敬请您谅解。</p>
            </div>
        </div>
        <div class="weui_cells_checkbox">
            <label class="weui_cell weui_check_label" for="s11">
                <div class="weui_cell_hd chek_k">
                    <input type="checkbox" class="weui_check" name="agreement" id="s11" checked="checked">
                    <i class="weui_icon_checked"></i>
                </div>
                <div class="weui_cell_bd weui_cell_primary">
                    <p>同意<a href="javascript:agreement1();">《报名须知及服务协议》</a></p>
                </div>
            </label>
        </div>
        <div class="weui_cell weui_cell_bgcolor"><input type="submit" value="立即付款" class="weui_btn weui_btn_primary"></div> 
    </div>
    </form>
    <div class="flexBox moreWay">
        
        <div><a href="/PayResult/other">更多支付方式</a></div>
    </div>
    <div id="agreementBox">
        <h2 class="weui_msg_title">报名须知及服务协议</h2>
        <p class="weui_msg_desc" style="margin-bottom: 4rem;">1、关于代理报名<br />

本报名系统为代理报名系统，代理报名选手向本赛事组委会提交报名信息，不承担赛事责任。报名选手应为具有完全行为能力的个体，清楚所参加的赛事活动具有一定的危险性和风险性，确认自身身体条件适合参加本赛事及相关活动，并且具备参与本赛事及相关活动技能，自愿报名参加本赛事。


<br />2、关于赛事责任及规程<br />

赛事责任及规程以本赛事组委会发布之赛事责任声明、规程或类似文件/公告为准，报名选手应已仔细阅读并充分知悉，同意该声明、规程或类似文件/公告相关内容，并同意按照赛事组委会相关规定履行报名流程。报名选手如因与赛事规程要求不符未能报名成功的，本报名系统不承担责任。


<br />3、关于报名信息<br />
报名
选手应提供真实、准确、有效的报名信息，如有不实信息或信息不全的，后果自负。本报名系统将保证相关信息的私密性。


<br />4、关于收费<br />
报名
选手接受赛事组委会关于收费之各项规定，并同意本系统代为收取赛事报名费和相关旅游费用。报名费用于报名成功后代缴至赛事组委会。报名选手未按照本系统提示时间支付足额费用的，即视为未完成报名。


<br />5、关于中途退赛<br />

报名成功后，如因个人原因不能参加赛事的，请自行负责。赛事进行期间退出的，自行承担安全责任。本报名系统不对退赛及相关后果负责。


<br />6、关于退款<br />

对于未能报名成功的报名选手，本报名系统将于报名截止日后7个工作日内通过微信退还选手已付报名费。 对于已经报名成功的报名选手，本报名系统不负责退款事宜。


<br />7、关于名额转让<br />

已经报名成功的报名选手擅自转让赛事名额的，将不被允许，如报名选手擅自转让名额，其后果自负。


<br />8、关于赛事拍摄<br />

报名选手同意并许可赛事组委会及本报名系统对本人参赛情景进行拍摄并于媒体及宣传中使用该影像。


<br />9、关于发票<br />

赛事报名费为不含税价格，如需要发票的报名选手，可在报名成功后与本报名系统客服联系，并自行承担税金及快递费用。


<br />10、关于保险<br />

有关赛事保险由赛事组委会提供。纯名额的报名，本报名系统不提供额外的保险，推荐报名选手自行购买运动类意外保险及旅游意外保险。名额加酒店服务的套餐，本报名系统针对不同产品，会提供不同保险，保险信息以招募信息为准。


<br />11、关于争议解决<br />

双方发生争议的，可协商解决，协商不成的可向本报名系统所在地的人民法院提起诉讼。


<br />12、关于海外赛事<br />

报名选手报名海外赛事，除上述须知外，还应自行办理签证手续，如因签证等原因未能成行，本报名系统不予退费，亦不承担任何责任。
报名选手参加海外赛事，还应充分了解所在国的法律规定根据相关国家的法律规定，并予以遵守，如有违反，相关责任自行承担。


<br />13、关于房间安排<br />
如果在预定的时候，报名选手是单人，并且选择与他人共享房间，将会根据报名的先后顺序安排一位同性的选手同住。但是如果无法协调，需要选手额外支付单间差。如果希望拥有自己独立的房间，请选择支付单房差。

<br />14、温馨提醒<br />
由于马拉松报名的特殊性，报名以支付为准，比赛报名需要支付全款，取消不退款。
报名以选手填写的个人信息为准，请务必核对您的姓名、出生年月日、邮箱、护照号码等重要信息，如发生个人填写错误信息导致无法领取赛手包的事情，责任需自行承担。
</p>
        <div class="arg_btn"><a href="javascript:agreement_hide();" class="weui_btn weui_btn_default">返回</a></div>
    </div>
</div>
<script type="text/javascript">
function agreement1(){
    $("#agreementBox").show();
}
function agreement_hide(){
    $("#agreementBox").hide();
}
//调用微信JS api 支付
function jsApiCall()
{
    WeixinJSBridge.invoke(
        'getBrandWCPayRequest',
        <?php if ($_smarty_tpl->tpl_vars['jsApiParameters']->value){?><?php echo $_smarty_tpl->tpl_vars['jsApiParameters']->value;?>
,<?php }?>
        function(res,a){
            WeixinJSBridge.log(res.err_msg);
			weui.Loading.show();
            if("get_brand_wcpay_request:ok"==res.err_msg){
                setTimeout(function(){
                    window.location.reload();
                },2000);
            }else{
            weui.Loading.hide();
            }
        }   
    );
}

function callpay()
{
    if (typeof WeixinJSBridge == "undefined"){
        if( document.addEventListener ){
            document.addEventListener('WeixinJSBridgeReady', jsApiCall, false);
        }else if (document.attachEvent){
            document.attachEvent('WeixinJSBridgeReady', jsApiCall); 
            document.attachEvent('onWeixinJSBridgeReady', jsApiCall);
        }
        weui.alert("请在微信客户端进行支付！");
    }else{
        $.ajax({
            url:"/PayResult/check",
            type: "POST",
            dataType: "json",
            timeout:'3000',
            data: {orderid:'<?php echo $_smarty_tpl->tpl_vars['price']->value['orderid'];?>
'},
            success: function(data){
                if(data.error == 0){
                    jsApiCall();
                }else{
                    weui.alert(data.msg,"提示","去查看订单",function(){
                        window.location.href = "/User/order";
                    });
                }
            },
        });
        
    }
}

function callalipay(){
    alert("暂不支持支付宝支付！");
}
$("#payForm").submit(function(){
    var agreement = $("input[name=agreement]").not(function(){ return !this.checked }).val();
    if(!agreement){
        weui.alert("您还未同意我们的用户证书！");
        return false;
    }
    var orderid = $("input[name=WIDout_trade_no]").val();
    if(!orderid){
        weui.alert("未找到您的订单！");
        return false;
    }
    var payway = $("input[name=payway]").not(function(){ return !this.checked }).val();
    if(payway=="wxpay"){
        try{
            callpay();
        }catch(e){
            weui.alert("π_π，创建支付遇到问题了！");
        }         
        return false;
    }else{
        return   true;
        //callalipay();
        //return false; 
    }
    return false;
});
var m_untilTime = "<?php echo $_smarty_tpl->tpl_vars['price']->value['pay_deadline'];?>
";
function getDate(strDate){
    var st = strDate;
    var a = st.split(" ");
    var b = a[0].split("-");
    var c = a[1].split(":");
    var date = new Date(b[0], b[1]-1, b[2], c[0], c[1], c[2])
    return date;
}
function CountDown(){
    var Now =  new Date().getTime();
    var Until =  getDate(m_untilTime).getTime();
    var countS = Math.floor((Until-Now)/1000);
    var html = "00:00:00";
    if(countS>0){
        var hour = Math.floor(countS/3600);
        if(hour>72){
            html = m_untilTime.substr(0,10);
            clearTimeout(CountDownTiming);
        }else{
            var min = Math.floor((countS%3600)/60);
            var sec = (countS%3600)%60;
             html = (hour<10?"0"+hour:hour)+":"+(min<10?"0"+min:min)+":"+(sec<10?"0"+sec:sec);
        }
    }
    if($("#countdown").length>=1){
        $("#countdown").html(html);
    }else{
        clearTimeout(CountDownTiming);
    }
}
var CountDownTiming = setInterval(function(){
    CountDown();
},1000);

</script>
<?php }elseif($_smarty_tpl->tpl_vars['price']->value['paystats']==1){?>
<div class="msg msg_pad">
<div class="weui_msg">
    <div class="weui_icon_area"></div>
    <div class="weui_text_area">
		<!--///////////////原来文案//////////////////////////////////////////////////////-->
        <!--<p class="weui_msg_desc" style="text-align: left;"><?php if ($_smarty_tpl->tpl_vars['price']->value['m_ptype']=="国内"){?>感谢您的报名！我们已经向您的注册邮箱发送了确认邮件，亲查收。赛事后续信息也将通过该邮箱发送给您，请务必确保能收到邮件。<?php }else{ ?>感谢您的报名！我们已经向您的注册邮箱发送了确认邮件，请查收。后续马拉松确认函和赛事手册都将通过该邮箱发送给您，请务必确保能收到邮件。也请加客服微信：zxhylv，告知“姓名＋比赛名称”，方便我们拉您进赛事群交流。如果有任何问题，请致电：400-842-195。<?php }?></p>-->
        <div class="weui_msg_desc" style="text-align: left;"><p>感谢您的报名！但报名还未完成，需要您继续完善资料！</p><p>我们的报名以付款成功和完善资料为准，我们的数据库中 暂无您的相关信息，请您完善，否则将无法成功报名。</p></div>
    </div>
    <div class="weui_opr_area">
        <p class="weui_btn_area">
        	<!--// 跳转perfect填写资料//-->
            <a href="/User/perfect?orderid=<?php echo $_smarty_tpl->tpl_vars['price']->value['orderid'];?>
" class="weui_btn weui_btn_primary" style="color: #FFFFFF;background: #04BE02;">下一步</a>
        </p>
    </div>
</div>
</div>
<script type="text/javascript" src="/static/js/zepto.js"></script>
<!-- <script type="text/javascript" src="/static/js/enroll.js"></script> -->
<?php }else{ ?>
<script>
$(function(){
   weui.alert("无效订单","提示信息","返回首页",function(){
        window.location.href = "/";
   }); 
})
</script>
<?php }?>
</body>
</html>
<?php }} ?>