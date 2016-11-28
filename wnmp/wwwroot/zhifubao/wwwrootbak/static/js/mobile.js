var windowheight = $(window).height(),topheight = $('#top').height(),footerheight = $('#footer').height(),formstats = 0,YJBM = function(){this.init()},shouji_reg = /^1[\d]{10}$/,email_reg =/^(\w)+(\.\w+)*@(\w)+((\.\w{2,3}){1,3})$/,email_reg =/^([a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/,email_reg =/^([a-zA-Z0-9_-|.])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/;
YJBM.prototype ={
	init:function(){
		var me = this
		me.mask();
		$('.info').css({
        	"max-height":(windowheight-topheight-footerheight)+"px",
    	}).swipeLeft(function(e){
    		//if(formstats==0) {formstats++;me.swipe(e);}
		}).swipeRight(function(e){
			//if(formstats==1) {formstats--;me.swipe(e);}
		});
		$('.datepick').each(function(){
			
			var begin = $(this).attr("date-s")?$(this).attr("date-s"):me.getyearstr();
			var end = $(this).attr("date-e")?$(this).attr("date-e"):me.getyearstr();

			begin = begin.split("-");
			end = end.split("-");

			$(this).date({
				beginyear:begin[0],
				endyear:end[0], 
				// beginmonth:begin[1],
    //         	endmonth:end[1],
    //         	beginday:begin[2],
    //         	endday:end[2]
            });
		});
		$("input[name=isjoin]").change(function(){
			me.checkmask();
		});
		$("input[name=uname]").blur(function(){
			me.checkmask();
		});
		$("input[name=date]").blur(function(){
			me.checkmask();
		});
		$("input[name=match]").blur(function(){
			me.checkmask();
		});
		$(".nav li").tap(function(e){
			formstats = $(this).attr("data-stats")?$(this).attr("data-stats"):0;
			me.swipe(e);
		});
		$('#bm_form').submit(function(e){
	   		if(formstats==0){
	   			formstats++;me.swipe(e);
	   		}else{
	   			if(!me.check()){
	   				formstats--;
					me.swipe();
	   			}else{
	   				ajax_post("/Enroll/ziliao",$("#bm_form").serialize(),function(data){
	   					if(data.error=="ok"){
							window.location.href="/Enroll";
						}else{
							alert(data.error);
						}
	   				});
	   			}
	   		}
	   		return false;
   		});
   		$('#mask_form').submit(function(e){
   			var isjoin = $("input[name=isjoin]:checked").val();
   			if(isjoin==0){
   				me.mask.hide();
   			}else if(isjoin==1){
   				if(me.checkmask()){
   					ajax_post("/Enroll/check",$("#mask_form").serialize(),function(data){
	   					if(data.error==0){
							window.location.href=data.msg;
						}else{
							alert(data.msg);
						}
	   				});
   				}
   			}
   			return false;
   		});
   		$('#province').on("change",function(){
   			var code = $(this).find('option').not(function(){ return !this.selected }).attr('data-c');
			if(code!=""){
				ajax_post("/Index/citys",{"code":code},function(data){
					if(data.error==0){
						var html = "<option value=''>省/市</option>",data=data.data;
						for(v in data){
							html+="<option value='"+data[v]['city']+"' data-c='"+data[v]['cityid']+"'>"+data[v]['city']+"</option>";
						}
						$("#city").html(html);
					}
				});
			}
		});
		$('#city').on("change",function(){
   			var code = $(this).find('option').not(function(){ return !this.selected }).attr('data-c');
			if(code!=""){
				ajax_post("/Index/areas",{"code":code},function(data){
					if(data.error==0){
						var html = "<option value=''>地区</option>",data=data.data;
						for(v in data){
							html+="<option value='"+data[v]['area']+"' data-c='"+data[v]['areaid']+"'>"+data[v]['area']+"</option>";
						}
						$("#area").html(html);
					}
				});
			}
		});
	},
	getyearstr:function(){
		var nowDate = new Date(),
			year = parseInt(nowDate.getFullYear()),
			month = parseInt(nowDate.getMonth()+1),
			day = parseInt(nowDate.getDate());
		return year+"-"+month+"-"+day;
	},
	checkmask:function(){
		if(0==$("input[name=isjoin]:checked").val()){
			$('#mask_submit').addClass("btn_active");
			return true;
		}else{
			var shouji = $("input[name=c_shouji]").val(),
				match = $("input[name=match]").val(),
				uname = $("input[name=uname]").val(),
				date = $("input[name=date]").val();

			if(match&&uname&&date&&shouji&&shouji_reg.test(shouji)){
				$('#mask_submit').addClass("btn_active");
				return true;
			}else{
				$('#mask_submit').removeClass("btn_active");
				return false;
			}
		}
	},
	mask:function(){
		this.mask = $("<div class='mask'></div>");
		this.mask.appendTo($('body'));
		this.mask.html("<div class='mask_tab'><p class='mask_t'>请问您之前是否参加过“知行合逸”马拉松项目？</p><p class='mask_t_min'>(烦请正确输入，以后无需再次输入)</p><div class='mask_body'><form action='' id='mask_form'><table><tr><th rowspan='3'><input type='radio' name='isjoin' value='1'/>是</th><td><p><input type='text' name='uname' placeholder='请输入您的姓名'/></p></td></tr><tr><td><p><input type='text' name='c_shouji' placeholder='手机 13888888888'/></p></td></tr><tr><td><p><input type='text' name='date' placeholder='生日 1991-09-18' id='selectDate' readonly /></p></td></tr><tr><th colspan='3'><input type='radio' name='isjoin' value='0'/>否</th></tr></table><p class='mask_btn'><input type='hidden' name='match' value='"+match+"'/><input type='submit' value='确定' id='mask_submit'/></p></form></div></div>");
		$('#selectDate').date({beginyear:1900,endyear:2016});
	},
	swipe:function(e){
		var btnval = ["下一步","提　交"];
		$(".nav li").each(function(key){
			key==formstats?$(this).addClass("active"):$(this).removeClass("active");
		});
		$('.form_center').animate({"-webkit-transform":"translate3d(-"+(50*formstats)+"%,0,0);"},600,"ease-in");
		$("#bm_form_submit").val(btnval[formstats]);
		//e.stopPropagation();
	},
	check:function(){

		var xingming_x = $("input[name=xingming_x]").val();
		if(xingming_x == ""){
			alert("请输入您的中文姓");
			$("input[name=xingming_x]").focus();	
			return false;
		}

		var xingming_m = $("input[name=xingming_m]").val();
		if(xingming_m == ""){
			alert("请输入您的中文名");
			$("input[name=xingming_m]").focus();	
			return false;
		}

		var shouji = $("input[name=shouji]").val();
		if(shouji == ""){
			alert("手机号不能为空");
			$("input[name=shouji]").focus();
			return false;
		}
		var machrs = shouji_reg.test(shouji);
		if(!machrs){
			alert("手机号格式不正确！");
			$("input[name=shouji]").focus();
			return false;
		}

		var youxiang = $("input[name=youxiang]").val();
		if(youxiang == ""){
			alert("电子邮箱不能为空");
			$("input[name=youxiang]").focus();
			return false;
		}

		var machrs = email_reg.test(youxiang);
		if(!machrs){
			alert("您的邮箱格式不正确！");
			$("input[name=youxiang]").focus();
			return false;
		}
		

		var guojia = $("select[name=guojia]").val();
		if(guojia == ""){
			alert("国家不能为空");
			$("select[name=guojia]").focus();
			return false;
		}

		var sfz_code = $("input[name=sfz_code]").val();
		var hz_code = $("input[name=hz_code]").val();
		if(sfz_code == "" && hz_code==""){
			alert("证件号码和护照必填一项！");
			$("input[name=zjcode]").focus();
			return false;
		}

		var checkrs = checkIdcard(sfz_code);
		if(checkrs != "验证通过!" && sfz_code!=""){
			alert("身份证号码格式错误"+checkrs);
			$("input[name=zjcode]").focus();
			return false;
		}

		var province = $("select[name=province]").val();
		if(province == ""){
			alert("省份不能为空");
			return false;
		}
		var city = $("select[name=city]").val();
		if(city == ""){
			alert("城市不能为空");
			return false;
		}
		var area = $("select[name=area]").val();
		if(area == ""){
			alert("地区不能为空");
			return false;
		}
		var dizhi = $("select[name=dizhi]").val();
		if(dizhi == ""){
			alert("地址不能为空");
			$("select[name=dizhi]").focus();
			return false;
		}

		var contacts = $("input[name=contacts]").val();
		if(contacts == ""){
			alert("紧急联系人不能为空");
			$("input[name=contacts]").focus();
			return false;
		}

		var contacts_phone = $("input[name=contacts_phone]").val();
		if(contacts_phone == ""){
			alert("紧急联系人电话不能为空");
			$("input[name=contacts_phone]").focus();
			return false;
		}

		var machrs = shouji_reg.test(contacts_phone);
		if(!machrs){
			alert("紧急联系人电话格式不正确！");
			$("input[name=contacts_phone]").focus();
			return false;
		}

		var contacts_mail = $("input[name=contacts_mail]").val();
		if(contacts_mail == ""){
			alert("紧急联系人邮箱不能为空");
			$("input[name=contacts_mail]").focus();
			return false;
		}

		var machrs = email_reg.test(contacts_mail);
		if(!machrs){
			alert("紧急联系人邮箱格式不正确！");
			$("input[name=contacts_mail]").focus();
			return false;
		}

		return true;
	}
};
Zepto(function($){new YJBM()});