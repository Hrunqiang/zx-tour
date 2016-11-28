//依赖于jquery
window.totalDist = 0;
var WxReady = false,sharetitle = "我跑了xxx米，快来帮我完成42.195公里！",sharedes = "你也可以创建跑道，约上跑友助力！按排名领奖品哦！",shareurl= "http://weixin.zx-tour.com/h5/run/",shareimg="";
//初始化
wx.init = function(){
	var url = window.location.href;
	$.ajax({
		cache: false,
		url:'/weixin/getJsTk?url='+encodeURIComponent(url),
		type: "POST",
		dataType: "json",
//		dataType: "text",
		timeout:'30000',
//		async: false,
		data: {
		},
		success: function(result){
			if(result.error !== 0){
				console.log("none js tk");
				return false;
			}
			var $timestamp = result.data.timestamp;
			var $nonceStr =result.data.noncestr;
			sha = result.data.signature;
			if(sha == "" || !sha){
				alert("sha error:"+sha);
				return;
			}
			wx.config({
			    debug: false, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
			    appId: 'wxd32026a97b1282b3', // 必填，公众号的唯一标识
			    timestamp: $timestamp, // 必填，生成签名的时间戳
			    nonceStr: $nonceStr, // 必填，生成签名的随机串
			    signature: sha,// 必填，签名，见附录1
			    jsApiList: [
			                "onMenuShareTimeline",
			                "onMenuShareAppMessage",
			                "onMenuShareQQ",
			                "onMenuShareWeibo",
			                //"getNetworkType",
			                "openLocation",
			                "getLocation",
			                "scanQRCode",
			                "chooseWXPay"
			                ] // 必填，需要使用的JS接口列表，所有JS接口列表见附录2
			});
			
		}
	});
};
wx.init();
//微信验证通过后回调
wx.ready(function(){
	WxReady = true;
	wxbind();
});

function wxbind(){
	wx.onMenuShareAppMessage({
	    title: sharetitle.replace("xxx", window.totalDist), // 分享标题
	    desc: sharedes, // 分享描述
	    link: shareurl, // 分享链接
	    imgUrl: window.headimgurl, // 分享图标
	    type: 'link', // 分享类型,music、video或link，不填默认为link
	    dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
	    success: function () { 
	       // $('#mask').hide();
	       	//zl(); 
	    },
	});
	wx.onMenuShareTimeline({
	    title: sharetitle.replace("xxx",window.totalDist), // 分享标题
	    link: shareurl, // 分享链接
	    imgUrl: window.headimgurl, // 分享图标
	    success: function () { 
	    	//$('#mask').hide();
	       //	zl(); 
	    },
	});
}