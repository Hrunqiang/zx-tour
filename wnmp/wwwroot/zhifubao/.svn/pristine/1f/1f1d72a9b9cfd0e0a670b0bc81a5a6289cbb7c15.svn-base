var SHAKE_THRESHOLD = 1500;  
var max_speed=0;
var last_update = 0;  
var timeout;
var shake = 1;
var shake_times = 0;
var x = y = z = last_x = last_y = last_z = 0;
function $_(a) {
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
		var m = this;	
		m.renderer();
	},
	renderer:function(){
		if(select("wuxi-zx-tour-done-5")){
			$('#mask').show().html('<div><img class="over" src="./images/over.png" alt="" /></div>');
			$(".over").tap(function(){
				$('#mask').hide();
			});
			shake = 0;
		}
		this.bind();
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
	info: ["无锡半马名额","无锡全马名额","PB签，2016场场必然PB","完赛签，不要收容！场场完赛！","TS签，独家桃花瘦瘦签！根本停不下来！","和平签，好心态才无敌！","突破签，走完变跑完！跑完得PB！"],
	result: function(c,m) {
		$('#mask').show();
		if(c<=1){
			t="填写信息";
			//sharetitle = "我抽中"+Prize.info[c]+"，快来试一试！";
			wxbind();
		}else{
			t="分享吧";
			//sharetitle = "我在新年马拉松抽中"+Prize.info[c];
			wxbind();
		}
		sharetitle = "我在知行合逸锡马摇签中摇中了"+Prize.info[c];+"，快来试试你能不能摇中比赛！";
		$('#mask').html('<div><img src="./images/mask_bg.png" alt="" /><img class="mask_t" src="./images/t'+c+'.png" alt="" /><p id="mask_btn">'+t+'</p><span id="mask_cloesd"></span></div>');
		$('#mask_cloesd').tap(function(){
			$("#mask").hide();
		});
		$('#mask_btn').tap(function(){
			if(c<=1 && m){
				$('body').css({"background":""}).html('<iframe src="'+m+'" frameborder="0"></iframe>');
				$("iframe").css({"height":$(window).height()+"px"});
			}else{
				$('#mask').html("<div><p class='shere_hunt'>请点击右上角分享哦！</p></div>");
				$(".shere_hunt").tap(function(){
					$('#mask').hide();
				});
			}
		});
		save("wuxi-zx-tour-done-5",1);
		save("wuxi-zx-tour-c-5",c);
	},
};
new Auth();
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