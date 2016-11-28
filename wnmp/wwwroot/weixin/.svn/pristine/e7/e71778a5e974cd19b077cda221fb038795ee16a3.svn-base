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
		url:"/Lottery/london?code="+code,
		type: "POST",
		dataType: "json",
		timeout:'30000',
		data: "",
		success: function(data){
			if(data.error == 0 ){
				score = data.data["splits"];
				var sex = data.data["sex"]=="M"?"男子":"女子";
				var html = "<h2>"+data.data["firstname"]+" "+data.data["lastname"]+"</h2><p style='font-size:.8rem;'>号码牌："+data.data['startNo']+" "+sex+"排名："+data.rank+"</p><div id='table'><table><tr><td>公里数</td><td>时间</td></tr>";
				for(var i in score){
					if(i=="Finish"){						
						html+="<tr><td class='f_t'>总成绩</td><td class='f_c'>"+score[i]+"</td></tr>";
					}else{
						out = score[i]['timeStr'];

						if(score[i]['name']=="FINISH"){						
							var souceRes = out?out:"未完赛";
						}
						html+="<tr><td>"+score[i]['name']+"</td><td>"+out+"</td></tr>";
					}
					
				}
				
				html += "</table></div><p><input type='submit' value='查看我的成绩' id='btn' class='btn'></p>";
				$("#wrap").html(html);
				$("#btn").click(function(){
					window.location.href = "/h5/score/2016london/share.html";
				});
				// $("#img_btn").click(function(){
				// 	window.location.href = $(this).attr("img_url");
				// });
				shareurl = "http://weixin.zx-tour.com/h5/score/2016london/?code="+code;
				sharetitle = "我的2016伦敦马拉松成绩是"+souceRes;
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