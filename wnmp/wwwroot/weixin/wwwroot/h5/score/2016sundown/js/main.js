(function(){
	function get(key){
		var Arg,arg,i;
		Arg = document.location.search.split("?");
		if(Arg[1]) {
			Arg=Arg[1].split("&");
		}
		for(i=0; i < Arg.length; i++) {
			var arg = Arg[i].split("=");
			if(key == arg[0]) {
				return  decodeURI(arg[1]);
			}
		}
		return "";
	};
	var code = get("code");
	if(code){
		getscore(code);
	}else{
		var top = $("#header").height();
		$("#input_text").focus(function(){
			$("body").delay(100).animate({scrollTop: top}, 100);	
		});
		$("#cx_form").submit(function(){
			var code = $("#input_text").val();
			getscore(code)
			return false;
		});
	}
})($)
function getscore(code){
	if(code=="") return false;
	$.ajax({
		cache: false,
		url:"/Lottery/sundown?code="+code,
		type: "POST",
		dataType: "json",
		timeout:'30000',
		data: "",
		success: function(data){
			if(data.error == 0 ){
				score = data.data;
			//	var sex = data.data["sex"]=="Male"?"男子":"女子";
				var html = "<h2>"+data.data["fullName"]+"</h2><p style='font-size:.8rem;'>号码牌："+data.data['bibs']+"</p><div id='table'><table>";
				for(var i in score){				
					var souceRes = score['netTime']?score['netTime']:"未完赛";
					html+="<tr><td>"+i+"</td><td>"+score[i]+"</td></tr>";
				}
				
				html += "</table></div><p><input type='submit' value='查看我的成绩' id='btn' class='btn'></p>";
				$("#wrap").html(html);
				$("#btn").click(function(){
					window.location.href = "/h5/score/2016sundown/share.html";
				});
				// $("#img_btn").click(function(){
				// 	window.location.href = $(this).attr("img_url");
				// });
				shareurl = "http://weixin.zx-tour.com/h5/score/2016sundown/?code="+code;
				sharetitle = "我的2016新加坡日落马拉松成绩是"+souceRes;
				wxbind();
			}else{
				alert("没有找到相关成绩！");
			}
		},
		error:function(){
			alert("成绩查询失败！");
			issubmitsucc = false;
		}
	});
}