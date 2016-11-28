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
		url:"/Lottery/dmcx?code="+code,
		type: "POST",
		dataType: "json",
		timeout:'30000',
		data: "",
		success: function(data){
			if(data.error == 0 ){
				//document.write(data.data['name']+"<br>");
				score = data.data["zcj"];
				var html = "<h2>"+data.data["name"]+"</h2><div id='t'><img src='./images/t2.png' alt=''></div><div id='table'><table><tr><td>公里数</td><td>发枪时间(净时间)</td></tr>";
				for(var i in score){
					score[i][1]=score[i][1].replace(/u3000/ig," "); 
					if(i==score.length-1){
						var souceRes = score[i][1];
						html+="<tr><td class='f_t'>总成绩</td><td class='f_c'>"+score[i][1]+"</td></tr>";
					}else{
						html+="<tr><td>"+score[i][0]+"</td><td>"+score[i][1]+"</td></tr>";
					}
					
				}
				html += "</table></div><p><input type='submit' value='查看我的成绩' id='btn' class='btn'></p>";
				$("#wrap").html(html);
				$("#btn").click(function(){
					window.location.href = "http://weixin.zx-tour.com/dmcx/share.html";
				});
				shareurl = "http://weixin.zx-tour.com/dmcx/?code="+code;
				sharetitle = "我的东京马拉松成绩是"+souceRes;
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