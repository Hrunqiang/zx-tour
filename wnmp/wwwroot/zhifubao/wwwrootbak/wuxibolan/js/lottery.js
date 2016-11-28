;(function(){
	function Discount (d) {
		this.wrap = $("#wrap");
		this.init();
	}
	Discount.prototype.init = function (){
		this.viem();
	}
	function WXviem(){
		var shake = 1,
			SHAKE_THRESHOLD = 1500, 
			WUXIBOLAN_SHAKEKEY = "wqwq2222wq",
			RES_SHAKE = [["txu.png","txu_w.png"],["kou.png","kou8.png"],["kou.png","kou4.png"]], 
			DISCOUNTMATCH = ["平壤马拉松","新加坡日落马拉松-广州团","新加坡日落马拉松-北京团","普吉岛马拉松","波尔多红酒马拉松","柏林马拉松","海军陆战队马拉松"],
			shouji_reg = /^1[\d]{10}$/,
			email_reg =/^([a-zA-Z0-9_-|.])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/,
			last_update = x = y = z = last_x = last_y = last_z = 0,
			viem = function(CssData,HtmlStr){
				this.css(CssData).html(HtmlStr);
			},
			lotteryinit = function(){
				var InitStyleData = {
					"background":"none",
				},
				formStr="";
				htmlStr = '<div class="shake_t"><img src="./images/shake.png" alt="" /></div><div class="shake_img"><img src="./images/or-bg.png" alt="" /><div id="shake_ico"><img src="./images/init.png" alt="" /></div></div><div class="frame_box shake_frame" ><div class="frame_con"><p class="frame_t">优惠套餐说明</p><div class="line"><img src="./images/line.png" alt=""></div><p align="center">1、一名用户只有一次摇奖机会哦</p><p align="center">2、奖品现场发放</p><p align="center">3、奖品只可中奖用户本人领取</p><p align="center">4、点击按钮查看优惠信息</p></div></div>';
				$("body").css({"background-image":"url(./images/indexshake_bg.jpg)"});
				viem.call($("#wrap"),InitStyleData,htmlStr);
				var code = select(WUXIBOLAN_SHAKEKEY);
				if(code==null){
					bindMotionHandler();
				}else{
					$("#shake_ico").html('<img src="./images/'+RES_SHAKE[code][1]+'" alt="" /><img src="./images/'+RES_SHAKE[code][0]+'" alt="" />');
				}
			},
			discountinit = function(){
				var InitStyleData = {
					"background":"none",
				},
				InitFormData = [
					{"type":"text","name":"match","id":"selectIpt","class":"ipt","value":"平壤马拉松","readonly":"readonly"},
					{"type":"text","name":"uname","id":"","class":"ipt","placeholder":"请输入您的姓名","value":"黄海燕测试"},
					{"type":"number","name":"shouji","id":"","class":"ipt","placeholder":"请输入您的手机号","value":"13522354197"},
					{"type":"text","name":"mail","id":"","class":"ipt","placeholder":"请输入您的邮箱号","value":"11111@qq.com"},
					{"type":"button","id":"form_submit","class":"sbt ipt","value":"即刻报名立减188"}
				],
				formStr = "";
				for(var i in InitFormData){
					inputStr = '<p><input' 
					for(var j in InitFormData[i]){
						inputStr +=' '+j+'="'+InitFormData[i][j]+'"';
					}
					formStr+=inputStr+' /></p>';
				}
				htmlStr = '<div class="frame_box" ><div class="frame_con"><p class="frame_t">优惠套餐说明</p><div class="line"><img src="./images/line.png" alt=""></div><p>1、优惠价格操作在3月16日-3月18日三天内有效</p><p>2、三天内未完成支付的订单也会调回原价哦</p><p>3、单独选择赛事报名无法享受优惠</p><p>4、姓名、手机号、邮箱信息务心保证填写正确</p></div></div><div id="form_box"><form action="" id="discount_form">'+formStr+'</form></div><div class="logo"><img src="./images/logo.png" alt="" /></div>';
				viem.call($("#wrap"),InitStyleData,htmlStr);
				$("#selectIpt").tap(function(){
					selectMatch();
				})
				$("#form_submit").tap(function(){
					var match  = $("input[name=match]").val();
					var name  = $("input[name=uname]").val();
					if(match==""||name ==""){
						alert("基本信息不能为空！");
						return false;
					}
					var shouji  = $("input[name=shouji]").val();
					if(!shouji_reg.test(shouji)){
						alert("手机格式不对！");
						return false;
					}

					var mail = $("input[name=mail]").val();
					if(!email_reg.test(mail)){
						alert("邮箱格式不对！");
						return false;
					}
					$.ajax({
						url: "/Enroll/wuxibolan",
						type:"POST",
						data:$("#discount_form").serialize(),
						dataType: "json",
						success: function(d) {
							if(d.error==0){
								window.location.href = d.msg;
							}else{
								alert(d.msg);
							}	
						},
						error:function () {
							alert("亲，系统繁忙，请稍后再试哦！");
						}
					});
				});
			},
			selectMatch = function(){
				var phtml = "";
				for(var i in DISCOUNTMATCH){
					phtml+="<p class='select_p'>"+DISCOUNTMATCH[i]+"</p>";
				}
				$("#mask").html('<div class="select_box">'+phtml+'</div>').show();
				return false;
			},
			bindMotionHandler = function(){
				window.DeviceMotionEvent?window.addEventListener('devicemotion',deviceMotionHandler, false):alert('你的手机不支持！');  
			},
			mask = function(code){
				$("#mask").html('<div class="res_box"><img src="./images/res'+code+'.png" alt="" /></div>').show();
				$("#shake_ico").html('<img src="./images/'+RES_SHAKE[code][1]+'" alt="" /><img src="./images/'+RES_SHAKE[code][0]+'" alt="" />');
			},
			save = function(k,v){;localStorage.setItem(k,v)},
    		select = function(k){return localStorage.getItem(k)},
			deviceMotionHandler = function(eventData){
				var acceleration = eventData.accelerationIncludingGravity;  
				var curTime = new Date().getTime();
				if((curTime - last_update) > 100){ 
					if(shake==0) return;
		    		var diffTime = curTime - last_update;  
		    		last_update = curTime;  
		    		x = acceleration.x;     
		    		y = acceleration.y; 
		    		z = acceleration.z; 
		    		var speed = Math.abs(x + y + z - last_x - last_y - last_z) / diffTime * 10000; 
					if(speed > SHAKE_THRESHOLD){ 
						shake = 0;
						$.ajax({
							url: "/Lottery/wuxi2",
							dataType: "json",
							success: function(d) {
								if(d.error==0){
									mask(d.code);
									save(WUXIBOLAN_SHAKEKEY,d.code);
								}else{
									alert("亲，你摇慢点，系统跟不上你的节奏了！");
									shake = 1;
								}
							},
							error:function (argument) {
								alert("亲，你摇慢点，系统跟不上你的节奏了！");
								shake = 1;
							}
						});
					}
				    last_x = x; last_y = y; last_z = z; 
				}
			}; 
		$("#lottery_btn").tap(function(){lotteryinit();});
		$("#discount_btn").tap(function(){discountinit();});
		$("#mask").tap(function(){$(this).hide();});
		$(".select_p").live("tap",function(){
			$("#selectIpt").val($(this).html());
		});
		//discountinit();
	}
	WXviem();
})(Zepto)