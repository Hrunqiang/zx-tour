var minSize=Math.min(window.innerWidth||document.body.clientWidth||320,window.innerHeight||document.body.clientHeight||320),
    fortuneallow = true, oli = document.getElementsByTagName('li'),isclick=false,currIndex = 1;
function imgSlide(ctx){
    var isMove=0,
        isclick=0,
        direction=0,
        isFirst=0,
        isLast=0,
        cur=null,
        move=null,
        oy=0,
        oh=0,
        jiantou=document.body.firstElementChild,
        animEnd=function(e){
                var t=e.target;
                if(!this.isMoved&&t.nodeName=="SECTION"&&t.className){           
                    if(t.className=="move"){
                        jiantou.style.display=t.nextElementSibling?"block":"none";
                    }
                    if(t.className=="move"){
                        if(t.id=="section13"){
                            //bgm_box.style.display = "none";
                        }else{
                            //bgm_box.style.display = "block";
                        }
                        olirst(t.id);
                    }  
                    rst.call(t,t.className=="move"?"current":"");
                }
        },
        olirst=function(id){
            for(var i in oli){
                oli[i].className = "";
            }
            switch(id){
                case "section1":
                    oli[0].className = "curr";
                    currIndex = 1;
                    break;
                case "section2":
                    oli[1].className = "curr";
                    currIndex = 2;
                    break;
                case "section3":
                    oli[2].className = "curr";
                    currIndex = 3;
                    break;
                case "section4":
                    oli[3].className = "curr";
                    currIndex = 4;
                    break;
                case "section5":
                    oli[4].className = "curr";
                    currIndex = 5;
                    break;
            }
        },
        rst=function(cN){
            this.className=cN;
            this.style.cssText="";
        },
        touch=function(e){
            var t=e.target;
            if(t.className != "qrcode_img"){
                e.preventDefault();
                e.stopPropagation();
            }
            //alert(e.type);
            switch(e.type){
                case "mousedown":
                case "touchstart":
                    if(t.id=="fortune_btn"){
                        fortune.call(t);
                    }else if(t.id =="btn2"){                         
                        window.location.href = "weixin://dl/officialaccounts";
                    }else if(t.id =="btn1"){
                        isclick = true;
                    }else{
                        isclick = false;
                    }
                    while(t!=this&&t.nodeName!="SECTION"){
                        t=t.parentNode;
                        if(!t) break;
                    }
                    if(t.nodeName=="SECTION"){
                        cur&&rst.call(cur,"");
                        move&&rst.call(move,"");
                        this.isMoved=1;
                        cur=t;
                        isFirst=cur.previousElementSibling==null;
                        isLast=cur.nextElementSibling==null;
                        isFirst||rst.call(cur.previousElementSibling,"");
                        isLast||rst.call(cur.nextElementSibling,"");
                        oh=cur.offsetHeight;
                        oy=e.touches[0].clientY;
                        isMove=1;
                        direction=0;
                        cur.className="current";
                    }else{
                        isMove=0;
                    }
                    break;
                case "mousemove":
                case "touchmove":
                    if(isMove){
                        e.preventDefault();
                        e.stopPropagation();
                        var y=e.touches[0].clientY;                                         
                        if(direction!=(y-oy)>>31|1){
                            move&&rst.call(move,"");
                            move=null;
                            direction=(y-oy)>>31|1;
                            if(y-oy<0){                                    
                                if(isLast) return;
                                move=cur.nextElementSibling;
                            }else{                                     
                                if(isFirst) return;                                                        
                                move=cur.previousElementSibling;
                            }        
                            move.className="move";                                          
                        }        
                        move&&(move.style[imgSlide.prefix+"ransform"]="translateY("+(-oh*direction+y-oy).toFixed(4)+"px) translateZ(0)");                                          
                        cur.style[imgSlide.prefix+"ransform"]="translateY("+((y-oy)*50/oh).toFixed(4)+"%) translateZ(0) scale("+(1-(y-oy)*direction/oh*0.2).toFixed(4)+")";
                    }
                    break;
                case "mouseup":
                case "mouseleave":
                case "touchcancel":
                case "touchend":
                    if(isMove){
                        e.preventDefault();
                        e.stopPropagation();
                        var y=e.changedTouches[0].clientY-oy;                                          
                        if(Math.abs(y)>10){                
                            if(move){
                                this.isMoved=0;
                                cur.style[imgSlide.prefix+"ransition"]=move.style[imgSlide.prefix+"ransition"]="all .3s";
                                cur.style[imgSlide.prefix+"ransform"]="translateY("+(50*direction)+"%) translateZ(0) scale(0.8)";
                                move.style[imgSlide.prefix+"ransform"]="translateY(0) translateZ(0)";
                            }
                        }else{
                            if(isclick){
                                rst.call(document.getElementById("section1"),"");
                                rst.call(document.getElementById("section5"),"current");
                                jiantou.style.display="none";
                                olirst("section5");
                                currIndex = 5;
                            }
                            // rst.call(cur,"current");
                            // move&&rst.call(move,"");
                        }                                          
                    }
                    cur=null;
                    move=null;
                    isMove=0;
                    break;
                case "mousewheel":
                case "DOMMouseScroll":
                    e=e||window.event;
                   // num=$(activeCss).index();
                    detail=e.wheelDelta? e.wheelDelta : (-e.detail);
                    // alert(detail);

                    if(detail>0)
                    {
                        --currIndex>=1?null:currIndex++;
                        document.getElementsByClassName('current')[0].className = "";
                        rst.call(document.getElementById("section"+currIndex),"current");
                        olirst("section"+currIndex);
                    }else if(detail<0){
                        ++currIndex<=5?null:currIndex--;
                        document.getElementsByClassName('current')[0].className = "";
                        rst.call(document.getElementById("section"+currIndex),"current");
                        olirst("section"+currIndex);
                        if(currIndex>=5){
                            jiantou.style.display="none";
                        }
                    }
                    console.log(currIndex);
                    break;
            }
        };
    ctx.addEventListener(imgSlide.prefix=="t"?"transitionend":imgSlide.prefix+"ransitionEnd",animEnd,false);
    ctx.addEventListener("touchstart",touch,false);
    ctx.addEventListener("touchmove",touch,false);
    ctx.addEventListener("touchend",touch,false);
    ctx.addEventListener("touchcancel",touch,false);  
    if(document.addEventListener){
        document.addEventListener('DOMMouseScroll',touch,false);
    }
    document.onmousewheel=touch;      
    if(!("ontouchstart" in ctx)){
        ctx.addEventListener("mousedown",function(e){
            e.touches=[{clientX:e.clientX,clientY:e.clientY}];
            touch.call(this,e);
        },false);
        ctx.addEventListener("mousemove",function(e){            
            e.touches=[{clientX:e.clientX,clientY:e.clientY}];
            touch.call(this,e);
        },false);
        ctx.addEventListener("mouseup",function(e){
            e.changedTouches=[{clientX:e.clientX,clientY:e.clientY}];
            touch.call(this,e);
        },false);
        ctx.addEventListener("mouseleave",function(e){
            e.changedTouches=[{clientX:e.clientX,clientY:e.clientY}];
            touch.call(this,e);
        },false);
    }
}
imgSlide.prefix = function(){
    var style=document.body.style,vendor=["t","webkitT","mozT","oT","msT"],i=vendor.length;
    while(i--){
        if(typeof style[vendor[i]+"ransition"]!="undefined")
            return vendor[i];
    }
    return vendor[0];
}();

var img = {
    img_url:Array(
        "http://dl.khd.at321.cn/data/md/images/bg.jpg"
        ),
    load_img_num:0,
    isstart:false,
    sload:function(){ 
       
        var me = this;  
        me.isstart = true;
        me.loadcallback();
       /* var img_obj = new Image();
        img_obj.src = me.img_url[me.load_img_num];
        img_obj.onload = function(){
            me.load_img_num++;
            console.log("ok");
            if(me.load_img_num < me.img_url.length){
                me.sload();
                if(me.load_img_num>=0 && !me.isstart){
                    me.isstart = true;
                    me.loadcallback();
                }                
            }else{
                me.isstart = true;
                me.loadcallback();
            }

        }*/

    },
    loadcallback:function(){
        var load = document.getElementById("loading");
        load.parentNode.removeChild(load);
        //document.getElementById('surplus_days').innerHTML = DateDiff();
        var box=document.getElementById("body"),sec=box.querySelector("section"),len=sec.length;
        imgSlide(box),
        oli[0].className = "curr";
        sec.className = "current";
        document.body.firstElementChild.style.display="block";
        var isplay = true;
       /* bgm_box.onclick = function(){
            if(isplay){
                isplay = false;
                bgm_box.style.backgroundImage = "url(http://dl.khd.at321.cn/data/md/images/bgm_off.png)";
                bgm.pause();
            }else{
                isplay = true;
                bgm_box.style.backgroundImage = "url(http://dl.khd.at321.cn/data/md/images/bgm_on.png)";
                bgm.play();
            }
        }*/
    }
}
 function isWeiXin(){ 
    var ua = window.navigator.userAgent.toLowerCase(); 
    if(ua.match(/MicroMessenger/i) == 'micromessenger' || !ua.match(/(iPhone|iPod|Android|ios|SymbianOS)/i)){ 
        return true; 
    }else{ 
        return false; 
    } 
}  

window.onload = function(){
    img.sload(); 
    if(isWeiXin()){
        document.getElementById("sharepage").innerHTML = '<div class="logo"><img src="./images/logo.png" alt=""></div><div class="qrcode"><img class="qrcode_img" src="./images/qrcode.jpg" alt=""><p>长按二维码识别关注</p></div>';
    }else{
         document.getElementById("sharepage").innerHTML = '<div class="logo"><img src="./images/logo.png" alt=""></div><div class="p5_t"><img src="./images/p5_t.png" alt=""></div><div class="step"><img src="./images/step1.png" alt=""></div><p id="btn2" class="share_btn">立即打开</p><div class="step"><img src="./images/step2.png" alt=""></div>';
    }
}