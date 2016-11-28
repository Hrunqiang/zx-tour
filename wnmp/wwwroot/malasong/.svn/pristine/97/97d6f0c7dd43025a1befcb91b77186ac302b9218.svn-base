// var boxWidth, barWidth;
function $(a) {
	return document.getElementById(a)
}
function ajax(b) {
	var a = new XMLHttpRequest();
	b.beforeSend && b.beforeSend();
	a.onreadystatechange = function() {
		this.readyState == 4 && this.status == 200 && b.success && b.success(b.dataType == "xml" ? this.responseXML: b.dataType == "json" ? (typeof JSON == "undefined" ? (new Function("return " + this.responseText))() : JSON.parse(this.responseText)) : this.responseText)
	};
	a.open(b.type || "GET", b.url, b.async || true);
	b.type == "POST" && a.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	a.send(b.data || null)
}
function Auth(){
	this.init();
}
Auth.prototype = {
	init:function(){
		var m = this,
		g = m.get('openid'),
		t = g?g:"";
		if(t!=="") save(t,t);	
		m.renderer();
	},
	renderer:function(){
		if(select('e5951fc653754f42d76802d1ebf403b8')){
			$('code_stats').style.display = "block";
			if(select("wuxi-zx-tour-done")){
				alert("你已经摇过奖了！");
				this.bind();
				//Prize.result(select('wuxi-zx-tour-c'));
			}else{
				this.bind();
			}
		}
	},
	bind:function(){
		if(window.DeviceMotionEvent){ 
    		window.addEventListener('devicemotion',deviceMotionHandler, false); 
		}else{  
			alert('你的手机不支持！');  
		}
	},
	get:function(key){
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
	},
}
var save = function(k,v){;localStorage.setItem(k,v)},
	select = function(k){return localStorage.getItem(k)},
	Prize = {
	info: [["一等奖:普吉岛马拉松纪念T恤","txu.png"],["四等奖:定制版起跑防寒雨衣","yuyi.png"],["三等奖 莱卡运动小腿套","tuitao.png"],["谢谢参与","xx.png"],["四等奖:定制版起跑防寒雨衣","yuyi.png"],["谢谢参与","xx.png"],["二等奖 耶路撒冷马拉松纪念版手机绑臂包","biaotao.png"],["谢谢参与","xx.png"]],
	result: function(c,m) {
		var l = $('mask');
		l.style.display = "block";
		if(c<=1){
			t="填写信息";
		}else{
			t="分享提示";
		}
		$('mask').innerHTML='<div><img src="./images/mask_bg.png" alt="" /><img class="mask_t" src="./images/t'+c+'.png" alt="" /><p id="mask_btn">'+t+'</p><span id="mask_cloesd"></span></div>';
		$('mask_cloesd').onclick =function(){
			$('mask').style.display = "none";
		}
		$('mask_btn').onclick = function(){
			if(c<=1 && m)
			window.location.href = m;
		}
		save("wuxi-zx-tour-done",1);
		save("wuxi-zx-tour-c",c);
	},
};
new Auth();
var SHAKE_THRESHOLD = 1500;  
var max_speed=0;
var last_update = 0;  
var timeout;
var shake = 1;
var shake_times = 0;
var x = y = z = last_x = last_y = last_z = 0;
function deviceMotionHandler(eventData){
	var acceleration = eventData.accelerationIncludingGravity;  
	var curTime = new Date().getTime();
	if((curTime - last_update) > 100){ 
		if(shake==0){
			return;
		}
	    var diffTime = curTime - last_update;  
	    last_update = curTime;  
	    x = acceleration.x;     
	    y = acceleration.y; 
	    z = acceleration.z; 
	    var speed = Math.abs(x + y + z - last_x - last_y - last_z) / diffTime * 10000; 
		if(speed > SHAKE_THRESHOLD){ 
			shake = 0;
			ajax({
				url: "/Lottery/wuxi",
				dataType: "json",
				success: function(d) {
					if (typeof d == "object" && d.error === 0) {
						Prize.result(d.code,d.msg);
					} else {
						alert("出错，请重新抽奖。");
					}
				}
			});
		}
	    last_x = x; last_y = y; last_z = z; 
	}  
}
// ajax({
// 				url: "/Lottery/wuxi",
// 				dataType: "json",
// 				success: function(d) {
// 					if (typeof d == "object" && d.error === 0) {
// 						Prize.result(d.code,d.msg);
// 					} else {
// 						alert("出错，请重新抽奖。");
// 					}
// 				}
// 			});
