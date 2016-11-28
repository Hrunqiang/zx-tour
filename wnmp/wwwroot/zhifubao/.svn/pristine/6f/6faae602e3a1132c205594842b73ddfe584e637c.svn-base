/**
 * weui.js
 */
 String.prototype.format = function() {
	if (arguments.length == 0)
		return this;
	if(arguments[0] instanceof Array){
		arguments = arguments[0];
	}
	for (var s = this, i = 0; i < arguments.length; i++)
		s = s.replace(new RegExp("\\{" + i + "\\}", "g"), arguments[i]);
	return s;
}
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
}

function phoneCheck(phone){
	return /^1[\d]{10}$/.test(phone);
}
var weui = {
	alert : function(msg, title, btn,callback) {
		title = title ? title : "";
		btn = btn?btn:"确定";
		var alertHtml = '<div class="weui_dialog_alert" style="display: none;">';
		alertHtml += '<div class="weui_mask"></div>';
		alertHtml += '<div class="weui_dialog">';
		alertHtml += '    <div class="weui_dialog_hd"><strong class="weui_dialog_title">'
				+ title + '</strong></div>';
		alertHtml += '    <div class="weui_dialog_bd"style="font-size:0.9285714285714286rem!important;color:#000;"></div>';
		alertHtml += '    <div class="weui_dialog_ft">';
		alertHtml += '      <a href="javascript:;" class="weui_btn_dialog primary">'+btn+'</a>';
		alertHtml += '  </div>';
		alertHtml += ' </div>';
		alertHtml += '</div>';
		if ($(".weui_dialog_alert").length > 0) {
			$(".weui_dialog_alert .weui_dialog_bd").empty();
		} else {
			$("body").append($(alertHtml));
		}
		var weui_alert = $(".weui_dialog_alert");
		weui_alert.show();
		weui_alert.find(".weui_dialog_bd").html(msg);
		weui_alert.find('.weui_btn_dialog').off("click").on('click',
				function() {
					weui_alert.hide();
					if (callback) {
						callback();
					}
				});
	},
	confirm : function(msg, title, callback) {
		var confirmHtml = '<div class="weui_dialog_confirm">'
				+ '<div class="weui_mask"></div>'
				+ '<div class="weui_dialog">'
				+ '<div class="weui_dialog_hd"><strong class="weui_dialog_title advice4"></strong></div>'
				+ '<div class="weui_dialog_bd advice3"></div>'
				+ '<div class="weui_dialog_ft">'
				+ '<a href="javascript:;" class="weui_btn_dialog default advice2">取消</a>'
				+ '<a href="javascript:;" class="weui_btn_dialog primary advice1">确定</a>'
				+ '</div>' + '</div>' + '</div>';
		if ($(".weui_dialog_confirm").length > 0) {
			$(".weui_dialog_confirm .weui_dialog_bd").empty();
		} else {
			$("body").append($(confirmHtml));
		}
		var weui_confirm = $(".weui_dialog_confirm");
		weui_confirm.show();
		weui_confirm.find(".weui_dialog_title").text(
				title = (title ? title : "确认提示"));
		weui_confirm.find(".weui_dialog_bd").html(msg);
		weui_confirm.find('.primary').off("click").on('click', function() {
			weui_confirm.hide();
			if (callback) {
				callback(true);
			}
		});
		weui_confirm.find('.default').off("click").on('click', function() {
			weui_confirm.hide();
			if (callback) {
				callback(false);
			}
		});
	},
	destroyFlag : false,
	Loading : {
		show : function(msg) {
			var loadingHtml = '<div  class="weui_loading_toast" style="display: none;">'
					+ '<div class="weui_mask_transparent"></div>'
					+ '<div class="weui_toast">'
					+ '<div class="weui_loading">'
					+ ' <div class="weui_loading_leaf weui_loading_leaf_0"></div>'
					+ ' <div class="weui_loading_leaf weui_loading_leaf_1"></div>'
					+ ' <div class="weui_loading_leaf weui_loading_leaf_2"></div>'
					+ ' <div class="weui_loading_leaf weui_loading_leaf_3"></div>'
					+ ' <div class="weui_loading_leaf weui_loading_leaf_4"></div>'
					+ ' <div class="weui_loading_leaf weui_loading_leaf_5"></div>'
					+ ' <div class="weui_loading_leaf weui_loading_leaf_6"></div>'
					+ ' <div class="weui_loading_leaf weui_loading_leaf_7"></div>'
					+ ' <div class="weui_loading_leaf weui_loading_leaf_8"></div>'
					+ ' <div class="weui_loading_leaf weui_loading_leaf_9"></div>'
					+ ' <div class="weui_loading_leaf weui_loading_leaf_10"></div>'
					+ ' <div class="weui_loading_leaf weui_loading_leaf_11"></div>'
					+ '</div>'
					+ '<p class="weui_toast_content"></p>'
					+ '</div>' + '</div>';
			var text = (msg ? msg : "处理中..");
			if ($(".weui_loading_toast").length > 0) {
				$(".weui_loading_toast .weui_toast_content").empty();
			} else {
				$("body").append($(loadingHtml));
			}
			var weui_loading = $(".weui_loading_toast");
			weui_loading.show().find(".weui_toast_content").text(text);
			//var width = weui_loading.find(".weui_toast").width();
			//var w = $(document).width();
			//weui_loading.find(".weui_toast").css("left", (w - width) / 2);
		},
		hide : function() {
			if (!weui.destroyFlag)
				$(".weui_loading_toast").hide();
		},
		msg : function(msg, time, cls, icon) {
			var successHtml = '<div class="' + cls
					+ '" style="display: none;">'
					+ '<div class="weui_mask_transparent"></div>'
					+ '<div class="weui_toast">' + '<i class="' + icon
					+ '"></i>' + '<p class="weui_toast_content"></p>'
					+ '</div>' + '</div>';
			if ($("." + cls).length < 1) {
				$("body").append($(successHtml));
				$(".weui_mask_transparent").off("tap").on("tap",
						function() {
							$("." + cls).hide();
						})
			}
			var t = 3000;
			if (time) {
				t = time;
			}
			var weui_success = $("." + cls);
			weui_success.find(".weui_toast_content").text(msg);
			weui_success.show();
			var width = weui_success.find(".weui_toast").width();
			var w = $(document).width();
			//weui_success.find(".weui_toast").css("left", (w - width) / 2 - 5);
			setTimeout(function() {
				weui_success.hide();
			}, t);
		},
		success : function(time,msg) {
			msg = msg ? msg : "操作成功";
			this.msg(msg, time, "weui_success_toast", "weui_icon_toast");
		},
		info : function(msg, time) {
			this.msg(msg, time, "weui_info_toast", "weui_icon_info");
		},
		error : function(msg, time) {
			this.msg(msg, time, "weui_error_toast", "weui_icon_warn");
		}
	},
	actionSheet:{
		/**
		 * 生成弹出选项
		 * @param cells 选项列表集合 如:[{name:"选项1",value:"1"}];
		 * @param change 选中事件回调函数,通过返回true可以改变默认选中隐藏操作
		 * @param sington 启用单列模式
		 * @returns actionSheet本身
		 */
		create:function(cells,change,sington){
			var item = '<div class="weui_actionsheet_cell" data-value="{1}">{0}</div>';
			var sheet_div = '<div id="actionSheet_wrap_{0}">'+
								'<div class="weui_mask_transition" id="mask"></div>'+
								'<div class="weui_actionsheet" id="weui_actionsheet">'+
									'<div class="weui_actionsheet_menu">'+
									'</div>'+
									'<div class="weui_actionsheet_action">'+
										'<div class="weui_actionsheet_cell" id="actionsheet_cancel">取消</div>'+
									'</div>'+
								'</div>'+
							'</div>';
			var index = $("div[id^='actionSheet_wrap_']").length;
			var iscreate = true;
			if(sington){
				iscreate=(index==0);
				index = 0;
			}
			var _self=this;
			var sheet=null;
			if(iscreate){
				$("body").append(sheet_div.format(index));
				sheet = $("#actionSheet_wrap_"+index);
				sheet.find("#actionsheet_cancel").on("click",function(){
					_self.hide();
				});
			}
			sheet = $("#actionSheet_wrap_"+index);
			sheet.find(".weui_actionsheet_menu").empty();
			var array=[];
			$.each(cells,function(){
				if(!this.name || !this.value){
					throw new Error("cells array style [{name:'name',value:'value'}]! ");
				}
				array.push(item.format(this.name,this.value));
			});
			sheet.find(".weui_actionsheet_menu")
			.append(array.join("")).find(".weui_actionsheet_cell").on("click",function(){
				var cell = $(this);
				var is_hide = change(cell.data("value"),cell.text(),cell);
				if(!is_hide){
					_self.hide();
				}
			});
			this._index = index;
			return _self;
		},
		_index:0,
		show:function(){
			var _self=this;
			$("#actionSheet_wrap_"+this._index).find("#mask")
			.addClass("weui_fade_toggle").show().one("click",function(){
				_self.hide();
			});
			$("#actionSheet_wrap_"+this._index).find("#weui_actionsheet").addClass("weui_actionsheet_toggle");
			return this;
		},
		hide:function(){
			$("#actionSheet_wrap_"+this._index).find("#mask")
			.removeClass("weui_fade_toggle").hide();
			$("#actionSheet_wrap_"+this._index).find("#weui_actionsheet")
			.removeClass("weui_actionsheet_toggle");
			return this;
		},
		destroy:function(){
			$("#actionSheet_wrap_"+this._index).remove();
		}
	},
	destroy : function() {
		$(".weui_dialog_alert,.weui_dialog_confirm,.weui_loading_toast,.weui_success_toast,.weui_info_toast,.weui_error_toast,.weui_actionsheet_cell").remove();
		weui.destroyFlag = true;
	},
	search_bar:{
		init:function(){
			$("#search_input").on("focus",function(){
				var $weuiSearchBar = $('#search_bar');
                $weuiSearchBar.addClass('weui_search_focusing');
                $("#search_page").show();
                $("#index_page").hide();
                 $("#search_cancel").show();
			}).on("blur",function() {
				var $weuiSearchBar = $('#search_bar');
               	$weuiSearchBar.removeClass('weui_search_focusing');
                if($(this).val()){
                    $('#search_text').hide();
                    $("#search_cancel").show();
                }else{
                	// $("#search_page").hide();
                	// $("#index_page").show();
                    $('#search_text').show();
                     $("#search_cancel").hide();
                }
			});

			$(".weui_search_outer").submit(function(){
				var $searchShow = $("#search_show");
				var ws = $('#search_input').val();
                if(ws){
                    $searchShow.show();
					if(ws!=""){
						window.location.href = "/search?ws="+ws;
					}
                }else{
                    $searchShow.hide();
                }
                return false;
			});
			$("#search_cancel").on("tap",function(){
				var ws = $('#search_input').val();
					window.location.href = "/Index/index";
                $("#search_show").hide();
//              $('#search_input').val('');
                $("#search_page").hide();
                $("#index_page").show();

            });
            $("#search_clear").on("tap",function(){
                $("#search_show").hide();
                $('#search_input').val('');
            });

            var wd = get("ws");
            var searchtype = get("type");
			if(wd!=""&&searchtype!=1){
				$("#search_input").trigger("focus").val(wd);
			} 
		}
	}
};
var search = function (){
	var data = {};
	data.search_order_bar = $(".search_order_bar").html();
	data.search_class_bar = $(".search_class_bar").html();
	data.search_area_bar = $(".search_area_bar").html();
	data.search_state_bar = $(".search_state_bar").html();
//	weui.Loading.show("搜索中"); 
	$.ajax({
        cache: false,
        url:"/Search/screen?ws="+$("#search_input").val(),
        type: "POST",
        dataType: "json",
        data:data,
        timeout:3000,
        success: function(data){
        	var htmlStr = '<div class="center_cell empty"><div class="emptyImg"><img src="/static/images/empty.png" alt=""></div><p>抱歉，没有找到该赛事！</p></div>';
            if(data.error == 0 ){           
                var list = data.data;
                htmlStr = "";
                for(var key in list){
                	m_gametime = list[key].m_GameTime.substr(0,10);
                	if(list[key].m_entermode == "remote"){
                		htmlStr+='<a href="'+list[key].m_enterurl+'" class="weui_media_box weui_media_appmsg">';
                	}else{
                		htmlStr+='<a href="/Matchinfo?m_id='+list[key].id+'" class="weui_media_box weui_media_appmsg">';
                	}
                	var  m_mtypes =  list[key].m_Mtypes.replace(/\|/g, "<span></span>");
                	htmlStr+='<div class="weui_media_hd"><img class="weui_media_appmsg_thumb" src-img="'+list[key].m_img+'" alt=""></div><div class="weui_media_bd"><h4 class="weui_media_title flex"><span class="S_overhiden">'+list[key].m_name+'</span></h4><p class="weui_media_desc">'+list[key].m_des+'</p><p class="weui_media_desc weui_media_desc_padding">'+m_gametime+' '+m_mtypes+'</p></div></a>'           	
                }
                $(".search_result").html(htmlStr);
            }else{
            	//weui.Loading.error(data.msg,2000);
            	$(".search_result").html(htmlStr);
            }
            jz_more();
             weui.Loading.hide(); 
        },
        error:function(){
           // weui.Loading.hide();
//          weui.Loading.error("搜索错误！",2000);
        }
    });
}
// function openMenu(){
// 	var array=[{name:"选项1",value:"1"},{name:"选项2",value:"2"}];
// 	menus = weui.actionSheet.create(array,function(val,text){
// 		alert("选择值:"+val+",选择内容:"+text);
// 			});
// 	menus.show();
// }
var feature = {
	config:[
		["独家授权",'<p>拥有北极圈、珠峰、贝加尔湖马拉松等80+顶级赛事中国区独家代理</p>'],
		["优质赛事","<p>精选全球优质赛事，提供一键报名的便利服务</p>"],
		["官方合作","<p>拥有伦敦马拉松、耶路撒冷马拉松、名古屋女子马拉松等200+官方合作赛事</p>"],
		["特色比赛","<p>根据兴趣点，选择最适合您的比赛</p>"],
		["专业领队","<p>提供最专业、最贴心的跑步领队服务</p>"],
		["跑者保险","<p>提供国内唯一一款跑步旅行险，保障跑者权益</p>"],
		["跑步礼包","<div class='alert_pb1'><div>号码簿扣子：</div><div><span>用来代替别针，防止别针扎坏衣服</span></div></div><div class='alert_pb2'><div>防寒雨衣：</div><div>天气寒冷或者下雨可以在起跑前套在衣服外面防寒</div></div><div class='alert_pb4'><div>国旗纹身贴：</div><div>沾水后贴在皮肤上展示中国跑者风采</div></div><div class='alert_pb3'><div>国旗贴：</div><div>贴在号码簿或者衣服上显示您来自中国</div></div>"],
	],
	create:function(i){
		return '<div class="weui_mask"></div><div class="weui_dialog"><div class="weui_dialog_hd"><div class="feature_head_'+i+'"></div><strong class="weui_dialog_title">'+ feature.config[i-1][0] + '</strong></div><div class="weui_dialog_bd">'+feature.config[i-1][1]+'</div><div class="weui_dialog_ft"><a href="javascript:;" class="weui_btn_dialog primary">知道了</a></div></div>';
	},
	alert : function(i) {
		var createHTML = feature.create(i);
		var alertHtml = '<div class="weui_dialog_alert featureAlert" style="display: none;">'+createHTML+'</div>';
		if ($(".weui_dialog_alert").length > 0) {
			$(".featureAlert").empty().html(createHTML);
		} else {
			$("body").append($(alertHtml));
		}
		var weui_alert = $(".weui_dialog_alert");
		weui_alert.show();
		weui_alert.find('.weui_btn_dialog').off("click").on('touchend',
			function(event) {
			weui_alert.hide();
			 event.preventDefault();
			 $(document).unbind('touchmove');
		});
	},
}
windW = $(".wrap").width();
$.fn.silder = function(){
    var banner = $(this),
    	silder = banner.find('.slider'),
    	Max = silder.find('.cell').length,
    	currIndex = 0,
    	StartX = 0,
    	MoveX = 0,
    	EndX = 0,
    	moveing = false,
    	items = "",
    	timing= '',
    	bs = 1.794,
    	init = function(){
    		if($(this).length<1) return false;
    		banner.css({"height":windW/bs+"px"}).show();
    		silder.eq(0).css({
    			"width":Max*windW+"px",		
    		}).on("touchend touchstart touchcancel touchmove mousedown mousemove mouseup mouseleave",function(e){
    			touch.call($(this),e);
    		}).find(".cell").css({
    			"width":windW+"px",
    			"height":windW/bs+"px"
    		});
    		var ulHtml = "<ul>"; 
    		for(var i = 0 ;i<Max ;i++){
    			ulHtml +="<li></li>";
    		}
    		ulHtml += "</ul>"; 
    		items = $(ulHtml).appendTo(banner).find("li")
    		changeitem.call(items,currIndex);
    		timing && clearTimeout(timing);
    		timing = setInterval(function(){
    			if(moveing) return false;
    			++currIndex>Max-1?currIndex=0:null;
    			animat.call(silder[0],-currIndex*windW,".5");
    			changeitem.call(items,currIndex);
    		},5000);
    	},
    	changeitem = function(i){
    		this.each(function(key){
    			$(this).removeClass("curr");
    			key == i?$(this).addClass("curr"):$(this).removeClass("curr");
    		});
    	},
    	prefix = function(){
		    var style=document.body.style,vendor=["t","webkitT","mozT","oT","msT"],i=vendor.length;
		    while(i--){
		        if(typeof style[vendor[i]+"ransition"]!="undefined")
		            return vendor[i];
		    }
		    return vendor[0];
		}(),
    	touch = function(e){
    		var t=e.target;
    		//////////////////阻止滚动的默认事件
    		$('body').on('touchstart', function (event) {
   			 //event.preventDefault();
			})
    		//////////////////启动iphone滚动的默认事件
    		$('body').on('touchend', function(e){
				$('body').off('touchstart')
			});
            // e.preventDefault();
            // e.stopPropagation();
    		switch(e.type){
                case "mousedown":
                case "touchstart":
                	moveing =true;
                	StartX = e.touches[0].clientX;
                    break;
                case "mousemove":
                case "touchmove":
                    MoveX=e.touches[0].clientX;
                    if(Math.abs(MoveX-StartX)>20){
                    	e.preventDefault();
                    	e.stopPropagation();
                    }
                   	animat.call(silder[0],((MoveX-StartX)+(-currIndex*windW)).toFixed(4),"0");
                    break;
                case "mouseup":
                case "mouseleave":
                case "touchcancel":
                case "touchend":
                    EndX = e.changedTouches[0].clientX-StartX;                                        
                    if(Math.abs(EndX)>50){
                    	EndX<0?(++currIndex>Max-1?currIndex=Max-1:null):(--currIndex<0?currIndex=0:null); 
                    }
              		animat.call(silder[0],-currIndex*windW,".5");
              		changeitem.call(items,currIndex);
              		moveing = false;
                    break;               
            }
    	},
    	animat = function(px,transition){
    		this.style[prefix+"ransform"]="translate3d("+px+"px,0,0)";
            this.style[prefix+"ransition"]="all "+transition+"s";
    	};
    init.call(banner);
};
//////////////////////////////////媒体查询///////////////
function sy(){
	var Html=document.getElementsByTagName('html');
	var w=document.documentElement.clientWidth;
	var scale=w/375;
	if (scale>=2) {
		scale=2;
	} 
	Html[0].style.fontSize=14*scale+'px';
}
$(document).ready(sy)
$(window).resize(sy)


