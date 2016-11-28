<?php /* Smarty version Smarty-3.1.6, created on 2016-11-18 15:09:44
         compiled from "../DataSource/Tpl\User\feedback.html" */ ?>
<?php /*%%SmartyHeaderCode:8439582ad12b2101b1-15352383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0e6b437e1437f09aab5f7104871ab869ad90d36' => 
    array (
      0 => '../DataSource/Tpl\\User\\feedback.html',
      1 => 1479452983,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8439582ad12b2101b1-15352383',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_582ad12b31121',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_582ad12b31121')) {function content_582ad12b31121($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Comon/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<title>意见反馈</title>
<style>
.wrap{overflow: hidden;}
.feedtitle{padding:1.07142857rem;}
.feedtype_cells{padding:0.7142857rem 1.0714285rem 1.0714285rem;border-bottom: 1px solid #ECECEC;}
.feedtype_cell span{border:1px solid #ECECEC;color:#888888;margin-right: 0.7142857rem;padding: 0.2142857rem 0.7142857rem;border-radius: 1.428571428rem;font-size: 1rem;}
.feedtype_radio{position: absolute;left:-99999px;}
.feedtype_radio:checked + span{color:#05BE03;border-color:rgba(5,190,3,0.3);}
.feed_content{padding:0 1.0714285rem  0.7142857rem;}
.weui_label{width:5em;}
.weui_textarea{font-size: 1rem;color: #888888;}
textarea::-webkit-input-placeholder {font-size: 1rem;color: #888888;}
input::-webkit-input-placeholder{font-size: 1rem;}
.weui_uploader_hd .weui_uploader_hd_color{font-size: 1rem;color: #888888;}
.weui_cells_form_margin{margin-top: 0;}
.weui_uploader_hd_padding{padding-top: 1.114285rem;padding-bottom: 0.24285rem;padding-left: 1.07142857rem;}
.weui_btn_primary{font-size: 1.2857143rem;}
.weui_cell_primary input::-webkit-input-placeholder{font-size: 1.0714rem;font-weight: normal;}
h4 {font-weight: normal;}
/*///////////////////////////////////////////////////////////////////////////////////////////*/
._suced{height: 7.75rem;padding: 0.8571428571428571rem 1.071428571428571rem 0 1.071428571428571rem;}
.weui_cells{margin-top: 0px;}
._suced_phone{margin-top: 0.7142857142857143rem;}
._suced_btn{padding: 1.071428571428571rem 0.7142857142857143rem;}
.tjzf{position: absolute;right: 0px;bottom: 0.7142857142857143rem;color: #888888;font-size: 0.8571428571428571rem;}
.weui_btn_warn{background: #fca4c2;}
.contact_way{height: 5.35714285714286rem;border: 1px solid rgb(217,217,217);font-size:1.07142857142857rem;margin-top: 0.71428571428571rem}
.contact_phone{color: blue;font-weight: bold;}
.contact_way>p{line-height: 2.50000000000000rem;padding-left:1.0714285rem }
.suggest_select{height: 3.14285714285714rem;font-size:1.07142857142857rem }
.suggest_select>p{line-height: 3.14285714285714rem;padding-left:1.0714285rem;float: left;}
.suggest_select select{height:  1.78571428571429rem;margin-left: 1.07142857142857rem;float: left;margin-top:0.71428571428571rem }
.weui_btn_disabled{background-color: #fca4c2!important}
</style>

<!-- <div class="wrap">
    <form action="/User/feedback" method="post" id="feedback_form">
    <div class="weui_cells weui_cells_form">
        <h4 class="feedtitle">问题类型</h4>
        <div class="feedtype_cells">
            <label for="feedtype1" class="feedtype_cell">
                <input type="radio" name="feedtype" class="feedtype_radio" id="feedtype1" checked="" value="赛事资源"/>
                <span>赛事资源</span>
            </label>
            <label for="feedtype2" class="feedtype_cell">  
                <input type="radio" name="feedtype" class="feedtype_radio" id="feedtype2" value="功能设计"/>
                <span>功能设计</span>
            </label>
            <label for="feedtype3" class="feedtype_cell">
                <input type="radio" name="feedtype" class="feedtype_radio" id="feedtype3" value="其它"/>
                <span>其它</span>
            </label>
        </div>
        <h4 class="feedtitle">问题描述</h4>
        <div class="feed_content">
            <div class="weui_cell_bd weui_cell_primary">
                <textarea class="weui_textarea" name="content" placeholder="请简要描述你的问题与意见" rows="3"></textarea>
            </div>
        </div>
    </div>
    <div class="weui_uploader_hd weui_cell weui_uploader_hd_padding">
    	<h4 class="weui_cell_bd weui_cell_primary weui_uploader_hd_color">图片(选填，提供问题的截图)</h4>
    </div>
    <div class="weui_cells weui_cells_form weui_cells weui_cells_form_margin">
        <div class="weui_cell">
            <div class="weui_cell_bd weui_cell_primary">
                <div class="weui_uploader"> -->
                    <!--<div class="weui_uploader_hd weui_cell">
                        <h4 class="weui_cell_bd weui_cell_primary weui_uploader_hd_color">图片(选填，提供问题的截图)</h4>
                    </div>-->
                    <!-- <div class="weui_uploader_bd"style="margin-top: 0.1428571428571429rem;">
                        <ul class="weui_uploader_files"></ul>
                        <div class="weui_uploader_input_wrp"style="margin-bottom: 0.4285714285714286rem;">
                            <input class="weui_uploader_input" type="file" accept="image/jpg,image/jpeg,image/png,image/gif" multiple="" id="photo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="weui_cells weui_cells_form">
        <div class="weui_cell">
            <div class="weui_cell_hd"><label class="weui_label">联系电话</label></div>
            <div class="weui_cell_bd weui_cell_primary" style="margin-top: 0.1428571428571429rem;">
                <input class="weui_input" type="number" name="phone" pattern="[0-9]*" placeholder="选填，便于我们联系您">
            </div>
        </div>
    </div>
    <div class="weui_cell">
        <input type="submit"  class="weui_btn weui_btn_primary" value="提交反馈">
    </div>
    </form>
</div> --><!--end of wrap -->

<div class="wrap">
    <div class="weui_cells contact_way">
        <p>赛事报名及支持请拨打客服热线: <span class="contact_phone">4000-842-195</span></p>
        <p>如果您对我们的WAP产品有意见，请填写下表: </p>
    </div>
    <form action="/User/feedback" method="post" id="feedback_form">
    <div class="weui_cells suggest_select">
        <p>反馈类型</p>
        <select name="suggest_type">
                <option value="0">功能意见</option>
                <option value="1">界面意见</option>
                <option value="2">您的新需求</option>
                <option value="3">操作意见</option>
                <option value="4">其他</option>
        </select>
    </div>
    <div class="weui_cells weui_cells_form _suced">
        <div style="position: relative;" class="weui_cell_bd weui_cell_primary">
            <textarea id="textarea" maxlength="500" class="weui_textarea" name="content" placeholder="请输入您的建议（500字以内）" rows="6"></textarea>
            <div class="tjzf"><span>0</span>/500</div>
        </div>
    </div>
    <div class="weui_cells weui_cells_form _suced_phone">
        <div class="weui_cell">
            <div class="weui_cell_bd weui_cell_primary" style="margin-top: 0.1428571428571429rem;">
                <input id="phone" class="weui_input" placeholder="请输入您的联系电话">
            </div>
        </div>
    </div>
    <div class="weui_cell _suced_btn">
        <input type="submit" disabled="" class="weui_btn weui_btn_warn weui_btn_disabled" value="提交反馈">
    </div>
    </form>
</div>

<!-- <script src="/static/js/jquery.js"></script>
<script src="/static/weui/js/weui.js"></script>
<script>
<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

$(function(){
    $("#feedback_form").submit(function(){
        var content = $("textarea[name=content]").val();
        if(content==""){
            alert("请输入找反馈内容！");
            return false;
        } 
    });
    var photo = $('#photo');
    function isCanvasSupported(){
        var elem = document.createElement('canvas');
        return !!(elem.getContext && elem.getContext('2d'));
    }
    photo.change(function(event){
        if(!isCanvasSupported){
            alert("你的设备不支持图片上传！");
            return false;
        }
        weui.Loading.show("上传中");
        compress(event, function(base64Img){
            $('<li class="weui_uploader_file" style="background-image:url('+base64Img+');background-color:#fff;"></li><input type="hidden" name="img[]" value="'+base64Img+'" />').appendTo($(".weui_uploader_files"));
            weui.Loading.hide();
         }); 
    });     
    function compress(event,callback){
        var file = event.currentTarget.files[0];

        if(!file){
           weui.Loading.hide(); 
        }
        var type = file.type;
        var reader = new FileReader();
     
        reader.onload = function (e) {
            var image = $('<img/>');
            image.load(function(){
                var square = 160;
                var canvas = document.createElement('canvas');
                var imageWidth;
                var imageHeight;
                if (this.width > this.height) {
                     imageWidth = Math.round(square * this.width / this.height);
                     imageHeight = square;
                    offsetX =0;
                } else {
                    imageHeight = Math.round(square * this.height / this.width);
                    imageWidth =square;
                    offsetY = 0; 
                }  
                canvas.width = imageWidth;
                canvas.height = imageHeight;
     
                 var context = canvas.getContext('2d');
                 context.clearRect(0, 0, square, square);
               
                 var offsetX = 0;
                 var offsetY = 0;
     
     
                context.drawImage(this, offsetX, offsetY, imageWidth, imageHeight);
                var data = canvas.toDataURL(type);
                
                callback(data);
            });
            image.attr('src', e.target.result);
            
        };
      
        reader.readAsDataURL(file);
    }
     
});
</script>
</body>
</html> -->

<script src="/static/js/jquery.js"></script>
<script src="/static/weui/js/weui.js"></script>
<script>
//<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

$(function(){
    var shouji_reg = /^1[\d]{10}$/;
var email_reg =/^([a-zA-Z0-9_-|.])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/;
$('#textarea').bind('input',function () {
    str=$('#textarea').val();
    $('.tjzf span').html(str.length);
    check();
    
})
$('#phone').bind('input',check);
 function check() {
    var str=$('#textarea').val();
    var phone=$('#phone').val();
    if(str!=''&&shouji_reg.test(phone)){
        $('.weui_btn').removeClass('weui_btn_disabled');
        $('.weui_btn').css('background-color','#fb6165');
        $('.weui_btn').removeAttr('disabled');
    }else{
        $('.weui_btn').addClass('weui_btn_disabled');
        $('.weui_btn').css('background-color','#fb6165');
        $('.weui_btn').attr('disabled','disabled');
    }
 }
});
/////////////////////////////////////////////////////////////////

</script>
</body>
</html><?php }} ?>