var save = function(k,v){;localStorage.setItem(k,v)},
    select = function(k){return localStorage.getItem(k)},
    LOCALSTORAGEKEY = "GODNESSSHOWZAN",
    probablyZan = true;
    imgreq_url = "/HdChongMa/piclist/",
    imgreqZan_url = "/HdChongMa/zan",
    waterHeight = [0,0],
    showindex = 0,
    datalength = 0,
    imgdatalist = [],
    page_=1,
    _index=0,
    stop=true,
    ImgWidth = $("#body").width()*.38;
    Godness = function (){this.init();}
Godness.prototype.init = function(){this.getimg();}
Godness.prototype.loadimg = function(i,b){
    var me = this;
    if(i>=datalength) {
        me.showend();
        return ;
    }  
    var style = {};
    var data = b[i];
    var img = new Image;
    img.src = data.imgdata;
    img.onload =function(){
        var imgW = this.width;
        var imgH = this.height;
        currH = (ImgWidth*imgH)/imgW + 160;
        style.width = ImgWidth+"px";
        style.height = (currH-10)+"px";
        style['font-size'] = "14px";
        if(waterHeight[0] <= waterHeight[1]){
            style.top = waterHeight[0]+"px";
            style.left = "0px";
            waterHeight[0] += currH;
        }else{
            style.top = waterHeight[1]+"px";
            style.right = "0px";
            waterHeight[1] += currH;
        }
        me.createHtml(style,data.id,data.imgdata,data.zan,data.msg,imgW,imgH);
        showindex++;
        if(showindex>=datalength){
				stop=true;
			}
        me.loadimg(showindex,imgdatalist); 
    }
}
Godness.prototype.waterfall = function(data){
    if(!data) return ;
    var me = this;
    imgdatalist = data;
    datalength = data.length;
    
    if(data){
        me.loadimg(showindex,imgdatalist);
    }else{
//      $("#mask").hide();
        alert("图片加载失败！！");
    }
   
}
Godness.prototype.showend = function(){
    var me = this;
    var zanedkey = select(LOCALSTORAGEKEY);
    if(zanedkey){
        var zankey = select(LOCALSTORAGEKEY)?select(LOCALSTORAGEKEY):"";
        var zanlist =  zankey.split(",");
        for(var key in  zanlist){
            me.zanStyle(zanlist[key]);
        }
        
    }
    var showBoxHeight = waterHeight[0]>waterHeight[1]?waterHeight[0]:waterHeight[1];
    $("#showBox").css({"height":(showBoxHeight)+"px"});
    $('.zan').unbind('click');
    $('.zan').bind("click",function(){
        var id = $(this).attr("data");
        if(me.isable(id)){    
            me.addzan(id);
        }else{
            alert("你已经点过赞了！");
        }   
    });
    $(".pic").unbind('click');
    $(".pic").bind("click",function () {
        var src = $(this).attr("src");
        var alt = $(this).attr("alt");
        me.diagram(src,alt);
    });
    $("#mask").hide();
}
Godness.prototype.createHtml = function(style,id,img,zan,con,w,h){
    if(!con) con = "暂无宣言！";
    var html = '<div class="imgshow"><div class="img" ><img src="'+img+'" class="pic" alt="'+con+'" data-w="'+w+'" data-h="'+h+'"></div><p title="'+con+'">'+con+'</p><p><span id="zan'+id+'" class="zan"  data="'+id+'"></span></p><p class="operation">共计<span id="num'+id+'">'+zan+'</span>个赞</p></div>';
    $(html).css(style).appendTo($("#showBox"));
}
Godness.prototype.diagram = function(src,alt){
    $('<div class="mask"><div><img src="'+src+'" alt="" /></div><p>'+alt+'</p></div>').appendTo($('body')).on('click',function(){
        $(this).remove();
    });
    if($(window).height()<$('.mask img').height()){
    	$('.mask img').css('height','100%');
    	$('.mask img').css('width','auto');
    }
}
Godness.prototype.isable = function(id){
    var zankey = select(LOCALSTORAGEKEY)?select(LOCALSTORAGEKEY):"";
    var zanlist =  zankey.split(",");
    var i = zanlist.length;
    while (i--) {  
        if (zanlist[i] === id) {  
            return false;  
        }  
    }  
    return true;  
}
Godness.prototype.addzan = function(i){
    var me = this;
    $.ajax({
        url:imgreqZan_url+"?id="+i,
        type:"GET",
        dataType: 'json',
        success:function(data){
            if(data.error==0){
                me.zanStyle(i);
                var num = $("#num"+i).html();
                $("#num"+i).html(parseInt($("#num"+i).html())+1);
                var zankey = select(LOCALSTORAGEKEY);
                var addstr = zankey?zankey+","+i:i;
                save(LOCALSTORAGEKEY,addstr);
            }else{
                alert(data.msg);
                probablyZan = true;
            }
        }
    });
}
Godness.prototype.zanStyle = function(i){
    $("#zan"+i).addClass("curr");
}
Godness.prototype.getimg = function(){
    var me = this;
    $("#mask").show();
    $.ajax({
        url:imgreq_url+'?p=1',
        type:"GET",
        dataType: 'json',
        success:function(data){
            if(data.error==0){
                me.waterfall(data.data);
            }
        },
        error:function(){
            $("#mask").hide();
        }
    });
}
new Godness();
///////////////////////////////////////////////////////////////////////////
$('#_loading').scroll(function () {
	var _loading=document.getElementById('_loading');
	var _H=_loading.scrollTop+$('#_loading').height();
	var s_h=$('#showBox').height();
	if(waterHeight[0]<waterHeight[1]&&(waterHeight[0]-_H)/s_h<0.02){
		if(stop==true){
			stop=false;	
			ajax_();
	}
		
}else if(waterHeight[0]>waterHeight[1]&&(waterHeight[1]-_H)/s_h<0.02){
		if(stop==true){
			stop=false;
			
			ajax_();
			if(showindex==8){
				stop=true;
			}
//			stop=true;
	}
}
function ajax_() {
			page_++;
			$.ajax({
        		url:imgreq_url+'?p='+page_,
        		type:"GET",
        		dataType: 'json',
        		success:function(data){
            	if(data.error==0){
                	imgdatalist = data.data;
    				datalength = data.data.length;
    				showindex=0;
                	Godness.prototype.loadimg(showindex,imgdatalist);
           		}
        	},
        	error:function(){
            	$("#mask").hide();
        	}
    });
    
}
})
