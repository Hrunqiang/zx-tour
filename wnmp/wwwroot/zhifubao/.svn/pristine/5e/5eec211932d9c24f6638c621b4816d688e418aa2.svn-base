var wishs = [["最刺激","贝加尔冰湖","2016.3","<h3>贝加尔冰湖马拉松</h3><ul><li>西伯利亚的暴风雪</li><li>贝加尔湖冰面的笔直赛道</li><li>这里是仅限<span>PB430</span>之内的高手才有资格体会的十大最艰难赛事之一 </li></ul>"],["最浪漫","巴黎","2016.4","<h3>巴黎马拉松</h3><ul><li>官方区授权</li><li>凯旋门、卢浮宫、塞纳河……</li><li>巴黎春天的微风中，在艾菲尔铁塔下，闻到一丝浪漫的味道</li></ul>"],["最神秘","平壤","2016.4","<h3>平壤马拉松</h3><ul><li>独家官方授权赛事</li><li>带您一探神秘国度风情</li><li>是被惊艳？还是被折服？掀开浓雾薄纱体验最真实的朝鲜</li></ul>"],["最高峰","丹增希拉里珠峰","2016.5","<h3>丹增一希拉里珠峰马拉松</h3><ul><li>全球海拔最高的马拉松赛事</li><li>沿着丹增—希拉里走过的道路</li><li>从昆布冰瀑到南池巴扎不仅仅是重走和纪念,更是后人对前人的瞻仰、跑者对自然的敬畏</li></ul>"],["最野性","非洲五大猛兽","2016.6","<h3>非洲五大猛兽马拉松</h3><ul><li>中国区独家官方合作伙伴</li><li>还原最本真的自我，像马赛人一样与非洲动物一起奔跑</li><li>是最狂野的马拉松赛事</li><li>是马拉松跑者最至高无上的追求</li></ul>"],["最快速","柏林","2016.9","<h3>柏林马拉松</h3><ul><li>跑过前东柏林严肃整齐的大厦</li><li>领略西柏林现代、高科技、充满商业色彩的楼宇</li><li>在世界上最快的马拉松赛道上，感受20世纪历史回顾之旅</li></ul>"],["最极地","北极圈","2016.10","<h3>北极圈马拉松</h3><ul><li>奔跑在格林兰群岛的万年冰川之上</li><li>穿梭在北极绚烂辉煌的极光之中</li><li>这是全球最冷酷的赛事</li><li>这是跑者们与极地最深切的灵魂对话</li></ul>"],["最威武","海军陆战队","2016.10","<h3>海军陆战队马拉松</h3><ul><li>由美国大兵全程提供服务与保障</li><li>在大炮开火的起跑令里启程</li><li>终于，你可以有机会真切地奔跑在美国军事大片里，收获海军陆战队的徽章</li></ul>"]],WISH=function(){this.init();},info_notice=["我们致力于提供最专业的马拉松跑步服务","知行合逸邀您一同，挑战不一样的马拉松"],wishinfo="<h3>知行合逸——2016年“<span>最</span>”计划</h3><ul><li>2016年1月4日-2016年1月10日，我们会从所有许下愿望的用户中，随机抽取N名，体验最别致的马拉松。</li><li>幸运用户将免费获得由知行合逸提供的“<span>参赛行程套餐</span>”一份！</li><li>您只需要许下心愿，留下联系方式，分享到朋友圈，即可获得“<span>专属心愿码</span>”。</li><li>2016年1月11日，我们会在当天推送中，公布中奖用户信息。</li><li>参与互动的用户，请关注我们的<span>官方微信</span>，及时获得中奖信息，了解更多马拉松资讯。</li><li>注意，每位用户只能许愿一场赛事，不可重复多选。</li></ul>",url="/MlsWish/getwishcode",save = function(k,v){localStorage.setItem(k,v)},select = function(k){return localStorage.getItem(k)},STORAGE_WISH="STORAGE_WISH_CODE_ONLINE";
WISH.prototype = {
	init:function(){
		this.wrap = $('#wrap');
		this.wishlist();
	},
	wishlist:function(){
		var htmlstr = "",me = this; 
		for(var i in wishs){
			htmlstr+='<div class="list" data-index="'+i+'" id="list'+i+'"><div class="listcenter"><p class="list_them">'+wishs[i][0]+'</p><p class="list_name">'+wishs[i][1]+'马拉松</p><p class="list_date">'+wishs[i][2]+'</p></div></div>';
		}
		this.wrap.attr("class","wishlist").html(htmlstr);
		$('.list').tap(function(){
			var index = $(this).attr('data-index');
			me.wishinfo(index);
		});
	},
	wishinfo:function(index){
		var me = this,
		htmlstr = '<div class="info_head"><img src="./images/info_'+index+'.jpg" alt="" /></div><div class="info_hunt"><img src="./images/hunt_'+index+'.png" alt="" /></div><div class="info_center">'+wishs[index][3]+'</div><p class="info_btn"><button id="goback">返回重选</button><button id="gowish" data-index="'+index+'" >参与许愿</button></p></div>';
		this.wrap.attr("class","wishinfo").html(htmlstr);
		$('#gowish').tap(function(){
			var code = select(STORAGE_WISH);
			if(code){
				me.showcode(code,true);
			}else{
				var index = $(this).attr('data-index');
				me.gotowish(index);
			}	
		});
		$('#goback').tap(function(){
			me.wishlist();
		});
	},
	gotowish:function(index){
		$('<div class="mask"><img class="share1" src="./images/share1.png" alt="" /><img src="./images/share2.png" class="share2" alt="" /></div>').appendTo($("body")).tap(function(e){
			e.stopPropagation();
			return false;
		});
		var me = this,
		htmlstr = '<div class="go_head"><img src="./images/go_head.png" alt="" /></div><div class="go_center">'+wishinfo+'</div><div class="user_info"><form action="" id="wish_form"><input type="hidden" value="'+index+'" name="wish"/><div class="input_div"><ul><li class="icon"><span class="icon1"></span></li><li><p><input type="text" placeholder="请输入您的姓名" name="name" /></p></li></ul></div><div class="input_div"><ul><li class="icon"><span class="icon2"></span></li><li><p><input type="text" placeholder="请输入您的手机号码" name="phone"/></p></li></ul></div><div class="btn_div"><input type="submit" value="提交信息"/></div></form></div><p class="notice">'+info_notice[0]+'</p><p class="notice">'+info_notice[1]+'</p></div>';
		this.wrap.attr("class","gotowish").html(htmlstr);
		$("#wish_form").submit(function(){
			try{
			$.ajax({
				cache: false,
				url:url,
				type: "POST",
				dataType: "json",
				timeout:'30000',
				data: $("#wish_form").serialize(),
				success: function(res){
					if(res.error ==0){
						save(STORAGE_WISH,res.msg);
						me.showcode(res.msg);
					}else{
						alert(res.msg);
					}
				}
			});
			}catch(e){
				alert(e);
			}
			return false;
		});
	},
	showcode:function(res,wished){
		var htmlstr = '<p>心愿码：<span>'+res+'</span></p><div class="qrcode"><img src="./images/qrcode.png" alt="" /></div>',
		wishedstr =wished?"<p class='wishedstr'>心愿码已生成，请您关注1月11日的结果公布</p>":"";
		this.wrap.attr("class","showcode").html(htmlstr+wishedstr);
	}
};
function wishstart(){
	new WISH();
}

