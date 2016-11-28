<?php /* Smarty version Smarty-3.1.6, created on 2016-02-29 18:30:44
         compiled from "../uducy_admin/Tpl\Login\login.html" */ ?>
<?php /*%%SmartyHeaderCode:2001656d41dd4dade86-27718751%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d4f5e13bd3eda234fa91e36665717b486cd4564' => 
    array (
      0 => '../uducy_admin/Tpl\\Login\\login.html',
      1 => 1456740760,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2001656d41dd4dade86-27718751',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'Safetyip' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56d41dd4e3869',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56d41dd4e3869')) {function content_56d41dd4e3869($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录</title>
<style type="text/css">
	body,h1,form,ul,li,p { margin:0; padding:0;-webkit-tap-highlight-color: rgba(0, 0, 0, 0);}
    li { list-style:none; line-height:30px; height:30px; margin-top:10px;}
    ul { padding:0 0 15px 30px;}
    body { font:12px/1.5 Tahoma, Geneva, sans-serif; background:#F3F6EA;}
	#admin { width:342px; border:1px solid #6EABDC; background:#DAEFFF; position:relative; margin: 150px auto 0;}
    h1 { height:66px; overflow:hidden; background:#559CD1; }
    .int { border-style:solid; padding:3px 2px; border-width:1px 1px 1px 1px; background-color:#F7FFDE; border-color:#666 #E8F1C2 #E8F1C2 #666; width:160px; font-family:Tahoma, Geneva, sans-serif;}
    .int:focus { background:#fff;}
    .btn { width:98px; height:33px; margin:0 auto; display:block; position:relative; left:-15px; border:none; padding:0; overflow:hidden; text-indent:-9999px; background:url(./static/images/lgoin_btn.gif); cursor:pointer;}
    .sms_btn { width:120px; height:33px; border:none; overflow:hidden; cursor:pointer;}
    .sms_btn_bg{background:#BDEBEC;
     background: -webkit-linear-gradient( top,#BDEBEC,#22CFDD);
 background: -moz-linear-gradient( top,#BDEBEC,#22CFDD);
background: -ms-linear-gradient( top,#BDEBEC,#22CFDD);
background: -o-linear-gradient( top,#BDEBEC,#22CFDD);
background: linear-gradient( top,#BDEBEC,#22CFDD);}
    label { float:left; height:30px; line-height:30px; width:60px; text-align:right; cursor:pointer; padding-right:5px;}
    #message { background:url(./static/images/infor-ico.gif) no-repeat 10px center #FFF8CC; width:342px; border:1px solid #FFEB69; color:#7D5018; position:absolute; bottom:-50px; left:-1px; height:40px; line-height:40px;}
    p.error { padding: 0 10px; text-align:center;}
</style>
<script type="text/javascript" src="static/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript">
	if(self!=top){top.location=self.location;}
    var coding_time = 60;
    var iscoding = false;
    var timeout;
    function timing(e){
        if(coding_time<=0){
            clearTimeout(timeout);
            e.addClass('sms_btn_bg').val("发送验证码到手机");
            coding_time = 60 ;
            iscoding = false;
        }else{
            coding_time = coding_time-1;
            e.val("("+coding_time+")后重新获取");
            timeout = setTimeout(function(){
                timing(e);
            },1000);
        }
    }
$(window).load(function(){
    $('#sms_code').click(function(){
        var _this = $(this);
        if(iscoding) return ; 
        iscoding = true;
        var val =  $('#phone').val();
        if(!val || !/^1[0-9][0-9]\d{4,8}$/.test(val)) {
            alert("请输入正确的手机号！");
            iscoding = false;
            return false;
        }
        $.getJSON("./?s=login&a=phoneverify&phone="+val,function(data){
            if(data.error==0){
                _this.removeClass('sms_btn_bg').val("("+coding_time+")后重新获取");
                timeout = setTimeout(function(){timing(_this);},1000);
            }else{
                alert(data.msg);
                iscoding = false;
                return false;
            }
        })
        
    });
});    
</script>
</head>

<body>

<div id="admin">
<h1>管理系统</h1>
<?php if ($_smarty_tpl->tpl_vars['Safetyip']->value==1){?>
    <form action="./?s=login&a=login" method="post" >
        <ul>
            <li>
                <label for="user_name">用户名：</label>
                <input name="user_name" type="text" class="int" id="user_name" value="" />
            </li>
            <li>
                <label for="password">密　码：</label>
                <input name="password" type="password" class="int" id="password" />
            </li>
            <li><input type="submit" value="提　交" class="btn" /></li>
        </ul>
    </form>
<?php }else{ ?>
    <form action="./?s=login&a=phone_login" method="post" >
        <ul>
            <li>
                <label for="phone_num">手机号：</label>
                <input name="phone_num" type="text" class="int" id="phone" value="" />
            </li>
            <li>
                <label for="capa">验证码：</label>            
                <input name="capa" type="text" class="int" id="capa" style="width:65px; margin-right:5px;"  />
                <!-- <img id="securimage" title="securimage" align="absmiddle" style="cursor: pointer; " src='./?s=login&a=verify&date="+Date.parse(new Date())";' onclick="this.src='/?s=login&a=verify&date='+Date.parse(new Date());"/> -->
                <input type="button" value="手机获取验证码" class="sms_btn sms_btn_bg" id="sms_code" />
            </li>
            <li><input type="submit" value="提　交" class="btn" /></li>
        </ul>
    </form>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['error']->value){?>   
    <div id="message">
    <p class="error">
        <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

    </p>
    </div>
<?php }?>
</div>

</body>
</html>
<?php }} ?>