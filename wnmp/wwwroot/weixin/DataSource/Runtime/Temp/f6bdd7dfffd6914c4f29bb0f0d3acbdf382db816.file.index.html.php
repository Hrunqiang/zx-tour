<?php /* Smarty version Smarty-3.1.6, created on 2016-11-17 18:59:04
         compiled from "../DataSource/Tpl\Coupon\index.html" */ ?>
<?php /*%%SmartyHeaderCode:461581ab3752fae58-84793248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6bdd7dfffd6914c4f29bb0f0d3acbdf382db816' => 
    array (
      0 => '../DataSource/Tpl\\Coupon\\index.html',
      1 => 1479380342,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '461581ab3752fae58-84793248',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_581ab3753c267',
  'variables' => 
  array (
    'orderid' => 0,
    'couponStr' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581ab3753c267')) {function content_581ab3753c267($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Comon/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<title>优惠券</title>
<style>
	.weui_search_bar{padding: 1.25rem 0.7142857142857143rem;}
	.weui_search_inner .weui_search_input{height: 2rem;font-size: 1rem;line-height: 1.785714285714286rem;}
	.weui_search_text{line-height: 2.285714285714286rem;}
	.weui_search_inner .weui_icon_search{left: 0.7142857142857143rem;top: 0.35714285714286rem}
	.weui_icon_search:before{font-size: 1rem;}
	.weui_search_inner .weui_search_input::-webkit-input-placeholder{font-size: 1rem;}
	.weui_search_text span{font-size: 1rem;}
	.weui_search_bar:after{display: none;}
	.weui_search_inner{padding-left:2.142857142857143rem;padding-right: 2.142857142857143rem;}
	._dh{padding-left: 0.7142857142857143rem;color: #09bb07;line-height: 2.5rem;font-size: 1.142857142857143rem;border: 1px solid #09bb07;text-align: center;padding-right: 0.7142857142857143rem;border-radius: 0.35714285714286rem;margin-left:0.53571428571429rem}

	.coupon_list{margin-top: 0.71428571428571rem;}
	.coupon_list_content{height: 5.60714285714286rem;border-bottom: 1px solid rgb(171,171,171);}
	.coupon_quota{width:10.17857142857143rem;height:4.28571428571429rem;float: left;margin-right: 0.89285714285714rem;margin-top: 0.71428571428571rem;color: white;font-weight: bold;}
	.coupon_msg{float: left;width: 11.96428571428571rem;}
	.coupon_all{background: url('/static/images/cov_bg01.png');background-size:10.17857142857143rem 4.28571428571429rem;}
	.coupon_money{float: left;font-size: 2.42857142857143rem;margin-left: 0.89285714285714rem;margin-top:0.35714285714286rem;font-style: italic;margin-right:0.35714285714286rem}
	.coupon_name{font-size: 0.85714285714286rem;margin-top: 0.89285714285714rem;}
	.coupon_special{background: url('/static/images/cov_bg03.png');background-size:10.17857142857143rem 4.28571428571429rem;}
	.coupon_blue{background: url('/static/images/cov_bg02.png');background-size:10.17857142857143rem 4.28571428571429rem;}
	.coupon_desc{margin-top:0.89285714285714rem;font-size: 0.85714285714286rem;color: black;font-weight: bold;white-space: nowrap;text-overflow: ellipsis;overflow: hidden;width: 90%;}
	.coupon_id{font-size:0.85714285714286rem;color: rgb(171,171,171);overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:2;margin-top: 0.8rem;font-weight: 80%}
	.coupon_time{font-size: 0.89285714285714rem;color: rgb(171,171,171);float: left;margin-top: 1.07142857142857rem}
	.coupon_copy{width:3.57142857142857rem;padding: 0;margin: 0 }
	.collection_btn{text-align: right;height: 2.90478571428571rem}
	.coupon_allbtn{display: inline-block;width:6.42857142857143rem;height:1.82142857142857rem;margin:0.71428571428571rem 0 0 0.71428571428571rem!important;background: white;border:1px solid rgb(255,116,0)!important;color:rgb(255,116,0)!important;font-size:0.85714285714286rem!important;line-height: 1.82142857142857rem!important}
	.weui_btn{color:#1AAD19!important;border-color: #1AAD19!important}
	.coupon_splbtn{;width:5.53571428571429rem;height:1.82142857142857rem;margin:0.71428571428571rem 0 0 0.71428571428571rem!important;line-height: 1.82142857142857rem!important;font-size:0.85714285714286rem!important;color: white!important;background-color:#1AAD19!important;}
	

</style>
<!-- 输入框 -->
<div class="weui_search_bar" id="search_bar">
    <form class="weui_search_outer">
        <div class="weui_search_inner">
            <i class="weui_icon_search"></i>
            <input type="search" class="weui_search_input" id="search_input" placeholder="搜索" required="">
            <a href="javascript:" class="weui_icon_clear" id="search_clear" style="top:-0.5px"></a>
        </div>
        <label for="search_input" class="weui_search_text" id="search_text">
            <i class="weui_icon_search"></i>
            <span>请输入兑换代码</span>
        </label>
    </form>
    <a href="javascript:" class="weui_search_cancel" id="search_cancel"></a>
 	<span class="_dh">兑换</span>
</div>


<!-- 列表内容 -->
<div class="wrap">
	<!-- <div class="weui_cells coupon_list">
		<div style="padding-left: 0.71428571428571rem;padding-right: 0.71428571428571rem">
			<div class='coupon_list_content'>
                <div class="coupon_quota coupon_all">
                	<p class="coupon_money">10</p>
                	<div class="coupon_intr">
                		<p class="coupon_name">新星跑者券</p>
                		<p>元优惠券</p>
                	</div>
                </div>
                <article class="coupon_msg">
                    <p class="coupon_desc">可用于知行平台上所有赛事</p>
                     <p class="coupon_id">优惠码<span>OYKKQEYU43DHJXDL</span></p>
                </article>
            </div>
            <div class="collection_btn">
            	<p class="coupon_time">到期时间: <span>2017-1-11</span></p> -->
            	<!-- <a href="javascript:;" class="weui_btn weui_btn_mini weui_btn_warn coupon_allbtn">去看看装备</a> -->
            	<!-- <a href="./" class="weui_btn weui_btn_mini weui_btn_warn coupon_allbtn">去看看赛事</a>
            </div>
		</div>
	</div> -->

	<!-- <div class="weui_cells coupon_list">
		<div style="padding-left: 0.71428571428571rem;padding-right: 0.71428571428571rem">
			<div class='coupon_list_content'>
                <div class="coupon_quota coupon_special">
                	<p class="coupon_money">999</p>
                	<div class="coupon_intr">
                		<p class="coupon_name">赛事专用券</p>
                		<p>元优惠券</p>
                	</div>
                </div>
                <article class="coupon_msg">
                    <p class="coupon_desc">烽火长城越野积分挑战赛</p>
                    <p class="coupon_id">优惠码 <span>KGUSCQW52NHZBVFD</span></p>
                </article>
            </div>
            <div class="collection_btn" _blue>
            	<p class="coupon_time">到期时间: <span>2017-1-11</span></p>
                <a href="javascript:;" class="weui_btn weui_btn_mini weui_btn_warn coupon_splbtn">去 报 名</a>
            </div>
		</div>
	</div> -->
</div>

<!-- footer -->
<div class="footer  weui_msg">
    <div class="weui_text_area">
        <p class="weui_msg_desc"><a href="tel:4000-842-195">服务资询</a><span id="j_z_f"></span><a href="/User/feedback">意见反馈</a></p>
        <p class="weui_msg_desc">本服务由知行合逸提供</p>
    </div>
</div>

<script src="/static/js/zepto.js"></script>
<script src="/static/weui/js/weui.js"></script>
<script type="text/javascript">
// 历史数据
	weui.Loading.show();
	$.ajax({
		type:"get",
		url:"/Ajax/coupon?orderid=<?php echo $_smarty_tpl->tpl_vars['orderid']->value;?>
",
		async:true,
		dataTpye:'json',
		success:function(obj){
			weui.Loading.hide();
			obj =JSON.parse(obj);
			Obj = obj.data;

			for(var i = 0 ; i < Obj.length ; i++){

				var _html = '';
				if(Obj[i].able_match){
						_html += '只限'+Obj[i].match+'&nbsp;&nbsp;';
					}
				if(Obj[i].min_able_price>0){
					// var min_able= "满"+Obj.min_able_price+"元";
					_html += "满"+Obj[i].min_able_price+"元&nbsp;&nbsp;";
				}
				if(Obj[i].able_ptype){
					// var _ptype="只限"+Obj.able_ptype+"比赛";
					_html += "只限"+Obj[i].able_ptype+"比赛&nbsp;&nbsp;"
				}
				if(Obj[i].able_meal=="source"){
					// var _meal="只限报名";
					_html += "只限报名";
				}
				if(Obj[i].able_meal=='meal'){
					// var _meal='只限套餐';
					_html += "只限套餐";
				}
				// var limit=min_able+_ptype+_meal;
				if(!Obj[i].able_match&&Obj[i].min_able_price<=0&&Obj[i].able_ptype==''&&Obj[i].able_meal==''){
					_html += '无使用门槛，全场通用';
				}
				var newNode = $('<div class="weui_cells coupon_list"><div style="padding-left: 0.71428571428571rem;padding-right: 0.71428571428571rem"><div class="coupon_list_content"><div class="coupon_quota"><p class="coupon_money">'+ Obj[i].discount +'</p><div class="coupon_intr"><p class="coupon_name"></p><p>元优惠券 </p></div></div><article class="coupon_msg"><p class="coupon_desc">'+ Obj[i].coupon_name +'</p><p class="coupon_id">'+ _html +'</p></article></div><div class="collection_btn"><p class="coupon_time">到期时间: <span>'+ Obj[i].expiry_date +'</span></p><a href="'+ Obj[i].url +'" class="weui_btn weui_btn_mini weui_btn_warn coupon_allbtn">去 使 用</a></div></div></div>');
				if(Obj[i].discount.length > 3){
					newNode.find('.coupon_money').css({
						'font-size':'1.78571428571429rem',
						'margin-top':'0.85714285714286rem'
					});
				}
				switch(Obj[i].coupon_type){
					case "1":  //通用券
					   	newNode.find('.coupon_quota').addClass('coupon_all');
					   	newNode.find('.coupon_name').html('赛事通用券');
					   	// newNode.find('.weui_btn').addClass('coupon_allbtn').html('去看看赛事');
					   	// newNode.find('.coupon_desc').html('可用于知行平台上所有赛事');
						break;
					case "2":  //针对跑团
                        newNode.find('.coupon_quota').addClass('coupon_blue');
                        newNode.find('.coupon_name').html('跑团专用券');
                         break;
					case "3":  //套餐券
						newNode.find('.coupon_quota').addClass('coupon_special');
					   	newNode.find('.coupon_name').html('赛事专用券');
					   	// newNode.find('.weui_btn').addClass('coupon_splbtn').html('去 报 名');
					   	// newNode.find('.coupon_desc').html(Obj.coupon_name);
						break;
					}
				$('.wrap').prepend(newNode);
			}
		}
	})

// 新兑换数据
	weui.search_bar.init();
	$(document).ready(function () {
		var Order=get('orderid');
		var _val=null;
		$('._dh').on('click',function () {
			_val=$('#search_input').val();
			weui.Loading.show();
			$.ajax({
				type:"post",
				url:"Coupon/bind",
				async:true,
				dataType:'json',
				data:{codestr:_val,orderid:Order},
				success:function (obj) {
					weui.Loading.hide();
					if(obj.error==0){
						var _html = '';
						// var min_able='';
						// var _ptype='';
						// var _meal='';
						weui.Loading.success(2000,'兑换成功');
						var Obj=obj.data;
						// var _efc_data=Obj.effective_date.substring(0,10);
						// var _data=Obj.expiry_date.substring(0,10);
						if(Obj.able_match){
							_html += '指定比赛使用&nbsp;&nbsp;';
						}
						if(Obj.min_able_price>0){
							// var min_able= "满"+Obj.min_able_price+"元";
							_html += "满"+Obj.min_able_price+"元&nbsp;&nbsp;";
						}
						if(Obj.able_ptype){
							// var _ptype="只限"+Obj.able_ptype+"比赛";
							_html += "只限"+Obj.able_ptype+"比赛&nbsp;&nbsp;";
						}
						if(Obj.able_meal=="source"){
							// var _meal="只限报名";
							_html += "只限报名";
						}
						if(Obj.able_meal=='meal'){
							// var _meal='只限套餐';
							_html += "只限套餐";
						}
						// var limit=min_able+_ptype+_meal;
						if(Obj.match == ''&&Obj.min_able_price<=0&&Obj.able_ptype==''&&Obj.able_meal!="source"&&Obj.able_meal!='meal'){
							_html += '无使用门槛，全场通用';
						}
						var newNode = $('<div class="weui_cells coupon_list"><div style="padding-left: 0.71428571428571rem;padding-right: 0.71428571428571rem"><div class="coupon_list_content"><div class="coupon_quota"><p class="coupon_money">'+ Obj.discount +'</p><div class="coupon_intr"><p class="coupon_name"></p><p>元优惠券</p></div></div><article class="coupon_msg"><p class="coupon_desc">'+ Obj[i].coupon_name +'</p><p class="coupon_id">'+ _html +'</p></article></div><div class="collection_btn"><p class="coupon_time">到期时间: <span>'+ Obj.expiry_date +'</span></p><a href="'+ Obj.url +'" class="weui_btn weui_btn_mini weui_btn_warn coupon_allbtn">去 使 用</a></div></div></div>');
						if(Obj.discount.length > 3){
                            newNode.find('.coupon_money').css({
                                'font-size':'1.78571428571429rem',
                                'margin-top':'0.85714285714286rem'
                            });
                         }
						switch(Obj.coupon_type){
							case "1":  //通用券
							   	newNode.find('.coupon_quota').addClass('coupon_all');
							   	newNode.find('.coupon_name').html('赛事通用券');
							   	// newNode.find('.weui_btn').addClass('coupon_allbtn').html('去 使 用');
							   	// newNode.find('.coupon_desc').html('可用于知行平台上所有赛事');
								break;
							case "2":  //针对跑团
		                        newNode.find('.coupon_quota').addClass('coupon_blue');
		                        newNode.find('.coupon_name').html('跑团专用券');
		                        break;
							case "3":  //套餐券
								newNode.find('.coupon_quota').addClass('coupon_special');
							   	newNode.find('.coupon_name').html('赛事专用券');
							   	// newNode.find('.weui_btn').addClass('coupon_splbtn').html('去 报 名');
							   	// newNode.find('.coupon_desc').html(Obj.coupon_name);
								break;
			
						}
						$('.wrap').prepend(newNode);
						// var str='<div class="coupon"><div class="coupon_left '+background+'"><div class="convert_top"><span>'+Obj.discount+'</span><div><p>'+Obj.coupon_name+'</p><p>元优惠券</p></div></div><div class="convert_bottom"><span>'+limit+'</span><span>有效期'+_efc_data+'至'+_data+'</span></div></div><a href="'+Obj.url+'"><div class="coupon_right '+background1+'"><span class="_bq"></span><div>立即使用</div></div></a></div>';
						// $('.coupon_content').prepend(str);
					}else{
						weui.Loading.error('无效兑换码',2000);
					}
				}
			});
		})
	})
</script>


<!-- <?php echo $_smarty_tpl->getSubTemplate ('Comon/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<title></title>
<style type="text/css">
body{padding-bottom: 1rem;}
.weui_search_bar{padding: 1.25rem 0.7142857142857143rem;}
.weui_search_inner .weui_search_input{height: 2rem;font-size: 1rem;line-height: 1.785714285714286rem;}
.weui_search_text{line-height: 2.285714285714286rem;}
.weui_search_inner .weui_icon_search{left: 0.7142857142857143rem;top: 0.2857142857142857rem;}
.weui_icon_search:before{font-size: 1rem;line-height: 2rem;}
.weui_search_inner .weui_search_input::-webkit-input-placeholder{font-size: 1rem;}
.weui_search_text span{font-size: 1rem;}
.weui_search_bar:after{display: none;}
.weui_search_inner{padding-left: 2.142857142857143rem;padding-right: 2.142857142857143rem;}
.coupon_content{padding: 0 1.071428571428571rem;font-family: "黑体";}
.coupon{box-sizing: border-box;color: #FFFFFF;display: -webkit-box;padding-bottom: 1.428571428571429rem;}
.coupon_left{box-sizing: border-box;width: 19.10714285714286rem;min-height: 6.928571428571429rem;overflow: hidden;padding: 1.25rem 0 0 1.25rem;position: relative;}
.convert_top{overflow: hidden;}
.convert_top span{float:left; font-size: 4.5rem;color: #FFFFFF;font-style: italic;line-height: 3.571428571428571rem;}
.convert_top div{float: left;font-size: 1.142857142857143rem;margin-left: 1.285714285714286rem;}
.convert_top div p:nth-child(2){font-size: 2.032142857142857rem;line-height: 1.714285714285714rem;}
.convert_bottom{font-size:0.8571428571428571rem;margin-top: 0.7142857142857143rem;position: relative;}
.convert_bottom span:nth-child(1){transform: scale(0.66666666666666666666);-webkit-transform-origin-x: 0;display: inline-block;max-width: 16.45238095238095rem;overflow: hidden;text-overflow: ellipsis;display: -webkit-box;-webkit-box-orient: vertical;-webkit-line-clamp: 2;}
.convert_bottom span:nth-child(2){color: #ffd200;transform: scale(0.66666666666666666666);position: absolute;right: 0;bottom: 0.0714285714285714rem;}
.coupon a{display: block;background: #FFFFFF;-webkit-box-flex: 1;position: relative;}
.coupon_right{text-align: center;font-size: 1.285714285714286rem;width: 100%;height: 100%;position: absolute;}
.coupon_right div{height:3.785714285714286rem; width: 3.285714285714286rem;margin: auto;position: absolute;margin: auto;left: 0;right: 0;top: 0;bottom: 0;line-height: 1.642857142857143rem;}
.coupon_right div:after{content: '';width: 1.214285714285714rem;height: 0.6428571428571429rem;display: block;margin: 0.5rem auto 0;}
._dh{padding-left: 0.7142857142857143rem;color: #09bb07;line-height: 2.5rem;font-size: 1.142857142857143rem;}
._green{background: url(/static/images/cov_bg01.png) no-repeat;background-size: 100% 100%;}
._blue{background: url(/static/images/cov_bg02.png) no-repeat;background-size: 100% 100%;}
._red{background: url(/static/images/cov_bg03.png) no-repeat;background-size: 100% 100%;;}
.ss{color: #ffd200;transform: scale(0.66666666666666666666);position: absolute;right: 0;bottom:0.0714285714285714rem;font-size: 0.8571428571428571rem;}
._green_font{color: #4acdbe;}
._green_font div:after{background: url(/static/images/cov_icon01.png) no-repeat;background-size: 100% 100%;}
._blue_font{color: #2c6ce7;}
._blue_font div:after{background: url(/static/images/cov_icon03.png) no-repeat;background-size: 100% 100%;}
._red_font{color: #dd4991}
._red_font div:after{background: url(/static/images/cov_icon02.png) no-repeat;background-size: 100% 100%;}
.weui_toast{width: 6.714285714285714rem;height: 6.714285714285714rem;}
.weui_toast_content{margin-top: 0.8571428571428571rem;}
.weui_error_toast .weui_icon_warn{margin-top: 0.7142857142857143rem;}
.weui_error_toast .weui_icon_warn:before{content: '!';color: #FFFFFF;font-size: 3rem;line-height: 3rem;}
.weui_icon_toast:before{font-size: 3rem;}
.weui_icon_toast{margin-top: 0.7142857142857143rem;}
.weui_toast p{font-size: 1rem;}
._bq{position: absolute;right:-0.4285714285714286rem;top: -0.4285714285714286rem; width: 2.142857142857143rem;height: 2.142857142857143rem;background: url(/static/images/coupon_x.png);background-size: 100% 100%;}
.weui_toast{top: 40%;}
</style>
<div class="weui_search_bar" id="search_bar">
    <form class="weui_search_outer">
        <div class="weui_search_inner">
            <i class="weui_icon_search"></i>
            <input type="search" class="weui_search_input" id="search_input" placeholder="搜索" required="">
            <a href="javascript:" class="weui_icon_clear" id="search_clear"></a>
        </div>
        <label for="search_input" class="weui_search_text" id="search_text">
            <i class="weui_icon_search"></i>
            <span>请输入兑换代码</span>
        </label>
    </form> -->
    <!--<a href="javascript:" class="weui_search_cancel" id="search_cancel">兑换</a>-->
    <!-- <span class="_dh">兑换</span>
</div>
<div class="coupon_content">
	<?php echo $_smarty_tpl->tpl_vars['couponStr']->value;?>

</div>
<script src="/static/js/zepto.js"></script>
<script src="/static/weui/js/weui.js"></script>
<script type="text/javascript">
	weui.search_bar.init();
	$(document).ready(function () {
		var Order=get('orderid');
		var _val=null;
		$('._dh').on('click',function () {
			_val=$('#search_input').val();
			weui.Loading.show();
			$.ajax({
				type:"post",
				url:"Coupon/bind",
				async:true,
				dataType:'json',
				data:{codestr:_val,orderid:Order},
				success:function (obj) {
					weui.Loading.hide();
					if(obj.error==0){
						var min_able='';
						var _ptype='';
						var _meal='';
						weui.Loading.success(2000,'兑换成功');
						var Obj=obj.data;
						var _efc_data=Obj.effective_date.substring(0,10);
						var _data=Obj.expiry_date.substring(0,10);
						if(Obj.min_able_price>0){
							var min_able= "满"+Obj.min_able_price+"元";
						}
						if(Obj.able_ptype){
							var _ptype="只限"+Obj.able_ptype+"比赛";
						}
						if(Obj.able_meal=="source"){
							var _meal="只限报名";
						}
						if(Obj.able_meal=='meal'){
							var _meal='只限套餐';
						}
						var limit=min_able+_ptype+_meal;
						if(Obj.min_able_price<=0&&Obj.able_ptype==''&&Obj.able_meal!="source"&&Obj.able_meal!='meal'){
							limit='无使用门槛，全场通用';
						}
						switch(Obj.coupon_type){
							case "1":  //绿色通用
								var background = "_green";
								var background1 = "_green_font";
								break;
							case "2":  //针对跑团
								var background = "_blue";
								var background1 = "_blue_font";
								break;
							case "3":  //针对跑团
								var background = "_red";
								var background1 = "_red_font";
								break;
			
						}
						var str='<div class="coupon"><div class="coupon_left '+background+'"><div class="convert_top"><span>'+Obj.discount+'</span><div><p>'+Obj.coupon_name+'</p><p>元优惠券</p></div></div><div class="convert_bottom"><span>'+limit+'</span><span>有效期'+_efc_data+'至'+_data+'</span></div></div><a href="'+Obj.url+'"><div class="coupon_right '+background1+'"><span class="_bq"></span><div>立即使用</div></div></a></div>';
						$('.coupon_content').prepend(str);
					}else{
						weui.Loading.error('无效兑换码',2000);
					}
				}
			});
		})
	})
</script> --><?php }} ?>