 $(function(){
	hangye();
	$("#ziliao_table").submit(function(){
		var riqi_reg = /^(19|20)\d{2}(-|\/)(1[0-2]|0?[1-9])(-|\/)(0?[1-9]|[1-2][0-9]|3[0-1])$/;
		var shouji_reg = /^1[\d]{10}$/;
		var email_reg = /^(\w)+(\.\w+)*@(\w)+((\.\w{2,3}){1,3})$/;
		
		var xingbie = $("input[name=xingbie]:checked").val();
		//////////////////////////////////////////////////
		var xingming = $("input[name=xingming]").val();
		if(xingming == "" || xingming== "请输入真实姓名"){
			alert("姓名不能为空");
			$("input[name=xingming]").focus();
			return false;
		}
		
		var guojia = $("select[name=guojia]").val();
		if(guojia == ""){
			alert("国家不能为空");
			$("select[name=guojia]").focus();
			return false;
		}
		
		var zjtype = $("select[name=zjtype]").val();
		if(zjtype == ""){
			alert("证件类型不能为空");
			$("select[name=zjtype]").focus();
			return false;
		}
		
		var zjcode = $("input[name=zjcode]").val();
		var checkrs = checkIdcard(zjcode);
		if(checkrs != "验证通过!" && zjtype=="身份证"){
			alert("请输入正确的身份证号码");
			$("input[name=zjcode]").focus();
			return false;
		}
		if(zjcode == "" || zjcode== "请输入证件号码"){
			alert("证件号码不能为空");
			$("input[name=zjcode]").focus();
			return false;
		}
		
		var shengri = $("input[name=shengri]").val();
		var machrs = riqi_reg.test(shengri);
		if(!machrs){
			alert("请填写正确的生日格式");
			$("input[name=shengri]").focus();
			return false;
		}
		if(shengri == "" || shengri== "请输入生日"){
			alert("生日不能为空");
			$("input[name=shengri]").focus();
			return false;
		}
		
		var shouji = $("input[name=shouji]").val();
		var machrs = shouji_reg.test(shouji);
		if(!machrs){
			alert("请填写正确的手机号");
			$("input[name=shouji]").focus();
			return false;
		}
		if(shouji == "" || shouji=="请输手机号"){
			alert("手机号不能为空");
			$("input[name=shouji]").focus();
			return false;
		}
		
		var youxiang = $("input[name=youxiang]").val();
		var machrs = email_reg.test(youxiang);
		if(!machrs){
			alert("请填写正确的电子邮箱");
			$("input[name=youxiang]").focus();
			return false;
		}
		if(youxiang == "" || youxiang=="请输电子邮箱"){
			alert("电子邮箱不能为空");
			$("input[name=youxiang]").focus();
			return false;
		}
		
//		var diqu = $("select[name=diqu]").val();
//		if(diqu == ""){
//			alert("地区不能为空");
//			$("select[name=diqu]").focus();
//			return false;
//		}
//		
//		var shengfen = $("select[name=shengfen]").val();
//		if(shengfen == ""){
//			alert("省份不能为空");
//			$("select[name=shengfen]").focus();
//			return false;
//		}
		
		var dizhi = $("input[name=dizhi]").val();
		if(dizhi == "" || dizhi== "请输入详细地址"){
			alert("详细地址不能为空");
			$("input[name=dizhi]").focus();
			return false;
		}
		

		var qmfirstdate = $("input[name=qmfirstdate]").val();
		var machrs = riqi_reg.test(qmfirstdate);
		if(qmfirstdate != "请输入日期" && !machrs){
			alert("请填写正确的日期");
			return false;
		}
		
		var bmfirstdate = $("input[name=bmfirstdate]").val();
		var machrs = riqi_reg.test(bmfirstdate);
		if(bmfirstdate != "请输入日期" && !machrs){
			alert("请填写正确的日期");
			return false;
		}

		var zbchima = $("input[name=zbchima]:checked").val();
		if(!zbchima){
			alert("请选择你的装备尺码！");
			return false;
		}
		
		ajax_post("/Enroll/ziliao",$("#ziliao_table").serialize(),function(data){
			if(data.error=="ok"){
				window.location.href="/Enroll/step2";
			}else{
				alert(data.error);
			}
		});
		return false;
	});
	
		$(":text").each(function(index,ele) {
				var tip=$(ele).val();
				$(this).focus(function(){
					if($(this).val()==tip){
						$(this).val('');
					}
					$(this).addClass('focus_text');
					$(this).parent().addClass('y-row1-focus');
				}).blur(function(){
					if(!$(this).val()){
						$(this).val(tip).removeClass('focus_text')
					}
					$(this).parent().removeClass('y-row1-focus');
				})
			});
			//单间房子价格计算器
			function calcJdPrice(obj){
				var stime = $(obj).parents(".jd_fangjian").find('input[name=stime]').val();
				var etime = $(obj).parents(".jd_fangjian").find('input[name=etime]').val();
				var count = $(obj).parents(".jd_fangjian").find('input[name=count]').val();
				count = parseInt(count);
				var perprice = $(obj).parents(".jd_fangjian").find('.perprice').html();
				var AllPriceObj = $(obj).parents(".jd_fangjian").find('.allprice');
				perprice = parseFloat(perprice);
				if( stime && etime ){
					var dates = minDate(stime,etime);
					if(dates <=0 ){
						alert("起始时间不能小于结束时间。");
						 $(obj).parents(".jd_fangjian").find('input[name=etime]').focus();
						return false;
					}else{
						var AllPrice = count * dates * perprice;
						AllPriceObj.html(AllPrice);
						return AllPrice;
					}
				}else{
					return false;
				}
			}
			//支付按钮
			if($("#pay_price").length>0){
                $("#pay_price").click(function(){
                    var that = this;
                    var isclick = $(this).attr("isclick");
                    if(isclick == 1) return false;
                    $(this).val("支付中...").attr("isclick",1).css("cursor","default");
					var bmtype = $("input[name=bmtype]:checked").val();
					if(!bmtype){
						$("input[name=bmtype]").eq(0).focus();
						alert("请选择马拉松项目。");
                        $(that).val("立即支付").attr("isclick",0).css("cursor","pointer");
						return false;
					}
					var orderid = $(".step2").attr("orderid");
					if($(".pepo").length>0){
						var baomingdanid = new Array();
						$(".pepo").each(function(){
							var id = $(this).attr("id");
							if(id){
								baomingdanid.push(id);
							}
						});
//						var baomingdanid = $(".pepo").attr("id");
					}else{
						if(confirm("您还没有添加报名单,请回去添加报名单")){
							window.location.href="/enroll/index";
						}else{
							window.location.href="/enroll/index";
						}
                        $(that).val("立即支付").attr("isclick",0).css("cursor","pointer");
						return false;
					}
					var data = {"bmtypeid":bmtype,"orderid":orderid,"baomingdanid":baomingdanid};
					data.jdinfo=[];
					//获取预订的酒店id
					$(".jd_fangjian[isyd=1]").each(function(){
						var d = {};
						d.id = $(this).attr('id');
						d.stime = $(this).find("input[name=stime]").val();
						d.etime = $(this).find("input[name=etime]").val();
						d.count = $(this).find("input[name=count]").val();
						data.jdinfo.push(d);
					});
                    var rs = false;
                    //购物车中添加项目及补充报名单价格
					ajax_post("/Enroll/payOrder",data , function(data){
						//@todo 提交支付订单
						if(data.error===0){
                            rs = true;
                            //alert(data.data.price);
                            $("#pay_all_price").val(data.data.price);
							//$("#pay_form").submit();
                            //document.forms['pay_form'].submit();
//							window.location.href="/index";
						}else{
							alert(data.msg);
                            $(that).val("立即支付").attr("isclick",0).css("cursor","pointer");
                            rs = false;
						}
					},false);
                    showMsg("提示","支付是否完成","已完成","支付遇到问题",function(){window.location.href="/EnrollInfo/index"},function(){$(that).val("立即支付").attr("isclick",0).css("cursor","pointer");});
                    return rs;
                });

            }
    //酒店入住日期选择时计算价格(不计入总价格)
			if($('.selectDate').length>0){
				$('.selectDate').datepicker({
					minDate:new Date(),
					onSelect: function(selectedDate) {//选择日期后执行的操作 
						if($(this).attr("readonly") ==true){
							return false;
						}
						calcJdPrice($(this));
		            },
		            beforeShow:function(){}
				}); 
			}
			//房间数量变化时,计算价格(不计入总价格)
			if($(".jd_fangjian").length>0){
				$(".jd_fangjian input[name=count]").change(function(){
					calcJdPrice($(this));
				});
			}
			//选择马拉松项目长度算价格(计入总价格)
			if($("input[name=bmtype]").length>0){
				$("input[name=bmtype]").click(function(){
					var bmpre_price = $("#bmprice").html();
					bmpre_price = parseFloat(bmpre_price);
					var price = $(this).attr("price");
					price = parseFloat(price);
					var num = $(".pepo").length;
					num = parseInt(num);
					price = price * num;
					var allprice = $("#allprice").html();
					allprice = parseFloat(allprice);
					$("#bmprice").html(price);
					allprice = allprice+price-bmpre_price;
					allprice = allprice.toFixed(2);
					 $("#allprice").html(allprice);
					 $("#pay_all_price").val(allprice);
				});
			}
			//酒店选取算价格及交互(计入总价格)
			if($(".jd_fangjian").length>0){
				$(".jd_fangjian .ydbtn").click(function(){
					var thisprice = calcJdPrice($(this));
					if(thisprice == false){
						alert("请输入正确日期");
						return false;
					}
					
					var jdallprice = $("#jdallprice").html();
					var allprice = $("#allprice").html();
					jdallprice = parseFloat(jdallprice);
					allprice = parseFloat(allprice);
					$(this).parents('.jd_fangjian').attr("isyd",1);
					$(this).parents('.jd_fangjian').find("input").attr("disabled",true);
					$(this).hide();
					$(this).parents('.jd_fangjian').find(".cancelbtn").show();
					jdallprice = thisprice+jdallprice;
					jdallprice = jdallprice.toFixed(2);
					$("#jdallprice").html(jdallprice);
					allprice = thisprice+allprice;
					allprice = allprice.toFixed(2);
					$("#allprice").html(allprice);
					$("#pay_all_price").val(allprice);
				});
				$(".jd_fangjian .cancelbtn").click(function(){
					$(this).parents('.jd_fangjian').attr("isyd",0);
					$(this).parents('.jd_fangjian').find("input").attr("disabled",false);
					$(this).hide();
					var thisprice = $(this).parents('.jd_fangjian').find(".allprice").html();
					var jdallprice = $("#jdallprice").html();
					var allprice = $("#allprice").html();
					jdallprice = parseFloat(jdallprice);
					allprice = parseFloat(allprice);
					thisprice = parseFloat(thisprice);
					$(this).parents('.jd_fangjian').find(".ydbtn").show();
					$(this).parents('.jd_fangjian').find(".allprice").html(0);
					var jdallprice_2 = (jdallprice-thisprice);
					jdallprice_2 = jdallprice_2.toFixed(2);
					$("#jdallprice").html(jdallprice_2);
					var allprice_2 = allprice-thisprice;
					allprice_2 = allprice_2.toFixed(2);
					$("#allprice").html(allprice_2);
					$("#pay_all_price").val(allprice_2);
				});
			}
			//酒店预订 选项框事件
			var jdyd = $("#jdyd");
			if(jdyd.length > 0){
				jdyd.change(function(){
					var ischeck = $(this).is(':checked');
					if(ischeck){
						$(".jdyd_list").slideDown("slow");
					}else{
						$(".jdyd_list").slideUp("slow");
					}
				});
			}
			//每个大酒店下的房间展示按钮
			var jdyd_list = $(".jdyd_list");
			if(jdyd_list.length>0){
				$(".jdyd_list .btn2").click(function(){
					$(this).parents(".item").next('.item_content').slideToggle("slow");
				});;
			}
			
			/*获取产品*/
//			$step2 = $(".step2");
			/*if($step2.length>0){
				ajax_post("/Enroll/getGoods",{"pid":1},function(data){
					console.log(data);
				});
			}*/
})