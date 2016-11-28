
var save = function(k,v){;localStorage.setItem(k,v)},
    select = function(k){return localStorage.getItem(k)},
    LOCALSTORAGEKEY = "GODNESSSHOWZAN",
    probablyZan = true;
    imgreq_url = "/Lottery/goddessshow/",
    imgreqZan_url = "/Lottery/goddess_zan",
    waterHeight = [0,0],
    ImgWidth = $("#body").width()*.38;
    Godness = function (){this.init();}
Godness.prototype.init = function(){this.getimg();}
Godness.prototype.waterfall = function(data){
    if(!data) return ;
    var me = this;
    for(var i in data){
        var style = {};
        currH = (ImgWidth*data[i].h)/data[i].w + 140;
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
        this.createHtml(style,data[i].id,data[i].img,data[i].zan,data[i].con,data[i].w,data[i].h);
    }
    showBoxHeight = waterHeight[0]>waterHeight[1]?waterHeight[0]:waterHeight[1];
    $("#showBox").css({"height":(showBoxHeight)+"px"});
    var zanedkey = select(LOCALSTORAGEKEY);
    if(zanedkey){
        probablyZan = false;
        me.zanStyle(zanedkey);
    }
    $('.zan').on("tap",function(){
        if(probablyZan){
            var id = $(this).attr("data");
            me.addzan(id);
        }else{
            alert("你已经点过赞了！");
        }
        
    });
    $(".pic").on("tap",function () {
        var src = $(this).attr("src");
        me.diagram(src);
    })
}
Godness.prototype.createHtml = function(style,id,img,zan,con,w,h){
    if(!con) con = "暂无宣言！";
    var html = '<div class="imgshow"><p><span>'+id+'</span>号</p><div class="img" ><img src="'+img+'" class="pic" alt="" data-w="'+w+'" data-h="'+h+'"></div><p title="'+con+'">'+con+'</p><p><span id="zan'+id+'" class="zan"  data="'+id+'"></span></p><p class="operation">共计<span id="num'+id+'">'+zan+'</span>个赞</p></div>';
    $(html).css(style).appendTo($("#showBox"));
}
Godness.prototype.diagram = function(src){
    $('<div class="mask"><div><img src="'+src+'" alt="" /></div></div>').appendTo($('body')).tap(function(){
        $(this).remove();
    });
}
Godness.prototype.addzan = function(i){
    var me = this;
    if(!probablyZan) return ;
    probablyZan = false;
    $.ajax({
        url:imgreqZan_url+"?id="+i,
        type:"GET",
        dataType: 'json',
        success:function(data){
            if(data.error==0){
                me.zanStyle(i);
                var num = $("#num"+i).html();
                $("#num"+i).html(parseInt($("#num"+i).html())+1);
                save(LOCALSTORAGEKEY,i);
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
    $.ajax({
        url:imgreq_url,
        type:"POST",
        dataType: 'json',
        success:function(data){
            if(data.error==0){
                me.waterfall(data.data);
            }
        }
    });
}
new Godness();
