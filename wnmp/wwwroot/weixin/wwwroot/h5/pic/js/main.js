var save = function(k,v){;localStorage.setItem(k,v)},
    select = function(k){return localStorage.getItem(k)},
    LOCALSTORAGEKEY = "GODNESSSHOWZAN",
    probablyZan = true;
    imgreq_url = "/HdPic/piclist/",
    imgreqZan_url = "/HdPic/zan",
    waterHeight = [0,0],
    showindex = 0,
    datalength = 0,
    imgdatalist = [],
    ImgWidth = $("#body").width()*.38;
    Godness = function (){this.init();}
Godness.prototype.init = function(){this.getimg();}
Godness.prototype.loadimg = function(i){
    var me = this;
    if(i>=datalength) {
        me.showend();
        return ;
    }  
    var style = {};
    var data = imgdatalist[i];
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
        me.loadimg(showindex); 
    }
}
Godness.prototype.waterfall = function(data){
    if(!data) return ;
    var me = this;
    imgdatalist = data;
    datalength = data.length;
    
    if(data){
        me.loadimg(showindex);
    }else{
        $("#mask").hide();
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
    $('.zan').on("click",function(){
        console.log("ss");
        var id = $(this).attr("data");
        if(me.isable(id)){    
            me.addzan(id);
        }else{
            alert("你已经点过赞了！");
        }   
    });
    $(".pic").on("click",function () {
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
    $('<div class="mask"><div><img src="'+src+'" alt="" /><p>'+alt+'</p></div></div>').appendTo($('body')).on('click',function(){
        $(this).remove();
    });
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
        url:imgreq_url,
        type:"POST",
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
