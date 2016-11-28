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
		url:"/Lottery/chicago?code="+code,
		type: "POST",
		dataType: "json",
		timeout:'30000',
		data: "",
		success: function(data){
			if(data.error == 0 ){
				console.log(data);
				var html = "<h2>"+data.data["name"]+"</h2>\
				<p>组别："+data.data['agegroup']+"&nbsp;&nbsp号码："+data.data['number']+"</p>\
				<p>出发时间："+data.data['starttime']+"&nbsp;&nbsp成绩："+data.data['time_finish']+"</p>\
				<p>中国选手排名："+data.rank+"&nbsp;&nbsp总排名："+data.data['place_nosex']+"</p>\
				<div id='table'>"+data.data["splits"]+"</div><p><input type='submit' value='查看我的成绩' id='btn' class='btn'></p>";
				$("#wrap").html(html);
				$("#btn").click(function(){
					window.location.href = "/h5/score/2016chicago/share.html";
				});
				// $("#img_btn").click(function(){
				// 	window.location.href = $(this).attr("img_url");
				// });
				souceRes = data.data['time_finish'];
				shareurl = "http://weixin.zx-tour.com/h5/score/2016chicago/?code="+code;
				sharetitle = "我的2016芝加哥马拉松成绩是"+souceRes;
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