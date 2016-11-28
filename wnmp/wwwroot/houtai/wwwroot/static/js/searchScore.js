/**
 * Created by winter on 16/1/3.
 */
function cjsearch(){
   var match_num = $("#match_num").val();
   var user_name = $("#user_name").val();
   var code = $("#code").val();
    if(!match_num || !user_name || !code){
        alert("必要内容不能为空");
    }

    var url = "/Score/searchcj";
    var data={
        match_num:match_num,
        user_name:user_name,
        code:code
    };
    var fun="";
    var async=false;

    ajax_post(url,data,function(resul){
        if(resul.error===0 && resul.data == "null"){
            alert("赞无此人成绩，如有误请联系客服。");
        }else if(resul.error===2){
            alert("验证码错误,请点击刷新验证码");
        }
        else if(resul.error===0){
            $html = "";
            for(var i in resul.data){
                /*
                * <ul>
                 <li class="fl">1</li>
                 <li class="fl">2</li>
                 <li class="clearfix"></li>
                 </ul>
                * */
                if(resul.data[i]){
                    $html += "<ul>";
                    $html += "<li class='fl title'>"+resul.field[i]+"：</li><li class='fl content'>"+resul.data[i]+"</li><li class='clearfix'></li>";
                    $html += "</ul>";
                }

            }
            $("#score_res_tab").html($html);
            $(".score_res").show();
            $('html,body').animate({scrollTop:'700px'}, 500);
        }else{
            alert(resul.msg);
        }
    },async);
    $("#login_code_img").attr("src","/Account/verify?"+Math.random());
    return false;
}
