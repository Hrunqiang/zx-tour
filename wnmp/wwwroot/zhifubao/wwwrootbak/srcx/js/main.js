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
		url:"/Lottery/srcx?code="+code,
		type: "POST",
		dataType: "json",
		timeout:'30000',
		data: "",
		success: function(data){
			if(data.error == 0 ){
				//document.write(data.data['name']+"<br>");
				score = data.data["zcj"];
				var html = "<h2>"+data.data["name"]+"</h2><div id='t'><h2>"+data.data['cls']+"</h2></div><div id='table'><table><tr><td>公里数</td><td>时间</td></tr>";
				for(var i in score){
					if(i=="Finish"){						
						html+="<tr><td class='f_t'>总成绩</td><td class='f_c'>"+score[i]+"</td></tr>";
					}else{
						out = score[i];
						if(i=="finish"){						
							var souceRes = score[i]?score[i]:"未完赛";
							i="成绩";
						}else if(i=="start"){
							i="起点";
						}else if(i=="end"){
							i="终点";
						}
						html+="<tr><td>"+i+"</td><td>"+out+"</td></tr>";
					}
					
				}
				
				html += "</table></div><p><input type='submit' value='查看我的成绩' id='btn' class='btn'></p>";
				//html += "</table></div><p><input type='submit' img_url='"+data.data['img']+"' value='查看照片' id='img_btn' class='btn'></p><p><input type='submit' value='查看我的成绩' id='btn' class='btn'></p>";
				$("#wrap").html(html);
				$("#btn").click(function(){
					window.location.href = "http://weixin.zx-tour.com/srcx/share.html";
				});
				// $("#img_btn").click(function(){
				// 	window.location.href = $(this).attr("img_url");
				// });
				shareurl = "http://weixin.zx-tour.com/srcx/?code="+code;
				sharetitle = "我的2016首尔马拉松成绩是"+souceRes;
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