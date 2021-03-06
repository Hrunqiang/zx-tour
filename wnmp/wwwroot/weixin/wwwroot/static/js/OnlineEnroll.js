
$(function(){
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
		
		/*var diqu = $("select[name=diqu]").val();
		if(diqu == ""){
			alert("地区不能为空");
			$("select[name=diqu]").focus();
			return false;
		}
		
		var shengfen = $("select[name=shengfen]").val();
		if(shengfen == ""){
			alert("省份不能为空");
			$("select[name=shengfen]").focus();
			return false;
		}*/
		
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
		
		ajax_post("/OnlineEnroll/ziliao",$("#ziliao_table").serialize(),function(data){
			if(data.error=="ok"){
				window.location.href="/OnlineEnroll/query";
			}else{
				alert(data.error);
			}
		},true);
		return false;
	});
	if($("#online_submit").length > 0){
		$("#app_name li").click(function(){
			$(this).attr("selecked",1).siblings().attr("selecked",0);
			$(this).siblings().removeClass("selecked");
			$(this).addClass("selecked");
		});
		$("#online_submit").click(function(){
			var appname = $("#app_name li[selecked=1]").find("p").html();
			if(!appname){
				alert("请选择使用参赛App");
				return false;
			}
			var h = $("input[name=h]").val();
			var m = $("input[name=m]").val();
			var i = $("input[name=i]").val();
			if(h=="" || m=="" || i==""){
				alert("请输入完整成绩!");
				$("input[name=h]").focus();
				return false;
			}
			var chengji = h+":"+m+":"+i;
			//@todo 检查是否已经上传了成绩图片
			$data = {};
			$data.appname=appname;
			$data.chengji=chengji;
			$data.step=2;
			ajax_post("/OnlineEnroll/upload",$data,function(data){
				if(data.error==0){
					window.location.href="/OnlineEnroll/sucess";
				}else{
					alert(data.msg);
				}
			},true);
		});
	}
	
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
})