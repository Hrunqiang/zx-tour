//依赖于jquery
var WxReady = false;
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
				alert("none js tk");
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
	//分享给朋友
	wx.onMenuShareAppMessage({
	    title: '参与“最系列”马拉松，点击赢取免费参赛行程！', // 分享标题
	    desc: '2016年知行合逸开启跑马“最计划”!免费赛程套餐,正式开放。', // 分享描述
	    link: 'http://weixin.zx-tour.com/xuyuan2016/', // 分享链接
	    imgUrl: 'http://weixin.zx-tour.com/xuyuan2016/images/share.jpg', // 分享图标
	    type: 'link', // 分享类型,music、video或link，不填默认为link
	    dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
	    success: function () { 
	    	//alert("用户分享成功");
	        // 用户确认分享后执行的回调函数
	        $('.mask').remove();
	    },
	    cancel: function () { 
	    	//alert("用户分享取消!!!");
	        // 用户取消分享后执行的回调函数
	    },
	    fail:function(res){
	    	//alert("share fail"+JSON.stringify(res));
	    }
	});
	
	//分享到朋友圈
	wx.onMenuShareTimeline({
	    title: '参与“最系列”马拉松，点击赢取免费参赛行程！', // 分享标题
	    link: 'http://weixin.zx-tour.com/xuyuan2016/', // 分享链接
	    imgUrl: 'http://weixin.zx-tour.com/xuyuan2016/images/share.jpg', // 分享图标
	    success: function () { 
	        //alert("用户分享成功");
	        $('.mask').remove();
	    },
	    cancel: function () { 
	        //alert("用户分享取消");
	    }
	});
	//分享到QQ
	wx.onMenuShareQQ({
	    title: '参与“最系列”马拉松，点击赢取免费参赛行程！', // 分享标题
	    desc: '2016年知行合逸开启跑马“最计划”!免费赛程套餐,正式开放。', // 分享描述
	    link: 'http://weixin.zx-tour.com/xuyuan2016/', // 分享链接
	    imgUrl: 'http://weixin.zx-tour.com/xuyuan2016/images/share.jpg', // 分享图标
	    success: function () { 
	       // 用户确认分享后执行的回调函数
	    },
	    cancel: function () { 
	       // 用户取消分享后执行的回调函数
	    }
	});

	//分享到微博
	wx.onMenuShareWeibo({
	    title: '参与“最系列”马拉松，点击赢取免费参赛行程！', // 分享标题
	    desc: '2016年知行合逸开启跑马“最计划”!免费赛程套餐,正式开放。', // 分享描述
	    link: 'http://weixin.zx-tour.com/xuyuan2016/', // 分享链接
	    imgUrl: 'http://weixin.zx-tour.com/xuyuan2016/images/share.jpg', // 分享图标
	    success: function () { 
	       // 用户确认分享后执行的回调函数
	    },
	    cancel: function () { 
	        // 用户取消分享后执行的回调函数
	    }
	});

	// //获取网络状态
	// wx.getNetworkType({
	//     success: function (res) {
	//         var networkType = res.networkType; // 返回网络类型2g，3g，4g，wifi
	//         alert(networkType);
	//     }
	// });
});