var boxWidth, barWidth;
function $(a) {
	return document.getElementById(a)
}
function rotate(e, a, d, g) {
	var b = Math.sin(e * Math.PI / 180),
	f = Math.cos(e * Math.PI / 180);
	if (this.filters) {
		if (g) {
			this.style.filter = "progid:DXImageTransform.Microsoft.Matrix(M11=" + f.toFixed(4) + ",M21=" + b.toFixed(4) + ",M12=" + ( - b).toFixed(4) + ",M22=" + f.toFixed(4) + ",SizingMethod='auto expand')";
			if (e < 90) {
				this.style.left = d - (a * f) + a + "px";
				this.style.top = d - (d * f + a * b) + "px"
			} else {
				if (e < 180) {
					this.style.left = d + a * f + a + "px";
					this.style.top = d - a * b + "px"
				} else {
					if (e < 270) {
						this.style.left = d + (d * b + a * f) + a + "px";
						this.style.top = d + (a * b) + "px"
					} else {
						this.style.left = d * b - a * f + d + a + "px";
						this.style.top = a * b - d * f + d + "px"
					}
				}
			}
		} else {
			this.style.filter = "progid:DXImageTransform.Microsoft.Matrix(Dx=" + (a * (1 + b - f)).toFixed(2) + ",Dy=" + (d * (1 - b - f)).toFixed(2) + ",M11=" + f.toFixed(4) + ",M21=" + b.toFixed(4) + ",M12=" + ( - b).toFixed(4) + ",M22=" + f.toFixed(4) + ")"
		}
	} else {
		this.style.transform = this.style.webkitTransform = this.style.mozTransform = this.style.oTransform = "matrix(" + f.toFixed(4) + "," + b.toFixed(4) + "," + ( - b).toFixed(4) + "," + f.toFixed(4) + ",0,0)"
	}
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
function Lottery(a) {
	this.r = 0;
	this.v = 0.2;
	this.rCount = 2;
	this.context = a;
	this.t = 0;
	this.isLoaded = 0;
	this.isRun = 0 
}
Lottery.prototype = {
	get: function(a) {
		var b = this;
		ajax({
			url: "/Lottery/luck",
			dataType: "json",
			success: function(d) {
				if (typeof d == "object" && d.error === 0) {
					var c = Prize.info.length,
					f = d.data;
					b.t = (c - f) * 360 / c - 180 / c + 360 * Math.abs((b.rCount - b.r / 360));
					b.result = f;
					b.price = d.num;
					b.code = d.code;
					b.isLoaded = 1;
					this.isRun = 1;
					Prize.result(b.result,b.price,b.code);
				} else {
					alert("出错，请重新抽奖。");
					this.isRun = 0;
				}
			}
		})
	},
};
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
		var authnum = 0;
		if(select('e5951fc653754f42d76802d1ebf403b8')){
			$('ZXHYLY').style.display = "block";
			authnum+=1;
		}
		if(select('642817a2d49ccf8dc1ec3ded20b19f36')){
			$('PZZB').style.display = "block";
			authnum+=1;
		}
		if(authnum>=2){
			if(select("gz-bbi-zx-tour-done")){
				Prize.result(select('gz-bbi-zx-tour-d'),select('gz-bbi-zx-tour-p'),select('gz-bbi-zx-tour-c'));
			}else{
				this.bind();
			}
		}else{
			$('lottery').getElementsByTagName('div')[0].style.backgroundPosition="100% 0";	
		}	
	},
	bind:function(){
		var d = $("lottery"),
		q = new Lottery(d),
		boxWidth = d.clientWidth,
		barWidth = boxWidth * 0.124;
		d.getElementsByTagName('div')[0].style.backgroundPosition="0 0";
		d.onclick = function(s) {
			if (q.isRun) return ;
			q.get();
		};
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
var save = function(k,v){localStorage.setItem(k,v)},
	select = function(k){return localStorage.getItem(k)},
	Prize = {
	info: [["一等奖:普吉岛马拉松纪念T恤","txu.png"],["四等奖:定制版起跑防寒雨衣","yuyi.png"],["二等奖 莱卡运动小腿套","tuitao.png"],["谢谢参与","xx.png"],["四等奖:定制版起跑防寒雨衣","yuyi.png"],["谢谢参与","xx.png"],["三等奖 国家马拉松记念品","biaotao.png"],["谢谢参与","xx.png"]],
	result: function(d,p,c) {
		var l = $('lottery'),
		r = $('result'),
		w = $('res_word'),
		n = $('res_num');
		l.style.display = "none";
		r.style.display = "block";
		if(p==4){	
			r.className = "result_lost";
		}else{
			r.className = "result_get";
			w.innerHTML = Prize.info[d][0];
			var img = new Image();
			img.src = "./images/"+Prize.info[d][1];
			r.appendChild(img);
			n.innerHTML = "领奖码："+c;
		}
		save("gz-bbi-zx-tour-done",1);
		save("gz-bbi-zx-tour-d",d);
		save("gz-bbi-zx-tour-p",p);
		save("gz-bbi-zx-tour-c",c);
	},
};
new Auth();
