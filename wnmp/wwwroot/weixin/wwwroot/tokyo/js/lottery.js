var isZl = issubmitsucc =  false;
var shouji_reg = /^1[\d]{10}$/;
$("#pbtn").tap(function(){
	$('#mask').html('<div><p id="mask_btn">请点击右上角分享喔！</p></div>').show().tap(function(){
		$(this).hide();
	});
});
function zl(){
	if(isZl) return false;
	isZl = true;
	var html = '<div id="title"><img src="./images/zt.png" alt=""></div><div id="form"><form action="" id="zl_form"><ul><li class="lf">姓名</li><li class="rf"><input type="text" name="name"/></li></ul><ul><li class="lf">手机</li><li class="rf"><input type="text" name="phone"/></li></ul><ul><li class="lf">地址</li><li class="rf"><input type="text" name="addr"/></li></ul><div id="submit_box"><input id="submit" type="submit" value="提交"/></div></form></div><div id="qrcode"><img src="./images/qrcode.png" alt="" /></div>';
	$("#wrap").html(html);

	$("#zl_form").submit(function(){
		if(issubmitsucc) {
			alert("已经提交过了,不要重复提交！")
			return false;
		}
		issubmitsucc = true;
		var name =  $("input[name=name]").val();
		var phone =  $("input[name=phone]").val();
		var addr =  $("input[name=addr]").val();
		var machrs = shouji_reg.test(phone);
		if(!machrs){
			alert("手机号格式不正确！");
			return false;
		}
		if(name!=""&&phone!=""&addr!=""){
			$.ajax({
				cache: false,
				url:"/Lottery/tokyo",
				type: "POST",
				dataType: "json",
				timeout:'30000',
				data: $("#zl_form").serialize(),
				success: function(data){
					if(data.error == 0 ){
						alert("信息提交成功！");			
					}else{
						alert("信息提交失败！");
						issubmitsucc = false;
					}
				},
				error:function(){
					alert("资料提交失败！");
					issubmitsucc = false;
				}
			});
		}else{
			alert("请填写必要信息！");
		}
		return false;
	});
}