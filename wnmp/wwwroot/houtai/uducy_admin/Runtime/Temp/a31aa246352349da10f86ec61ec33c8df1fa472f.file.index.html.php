<?php /* Smarty version Smarty-3.1.6, created on 2016-11-14 10:40:42
         compiled from "../uducy_admin/Tpl\EnrollV3\index.html" */ ?>
<?php /*%%SmartyHeaderCode:1895658291e3a4e8c12-12484200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a31aa246352349da10f86ec61ec33c8df1fa472f' => 
    array (
      0 => '../uducy_admin/Tpl\\EnrollV3\\index.html',
      1 => 1479091188,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1895658291e3a4e8c12-12484200',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58291e3a8d957',
  'variables' => 
  array (
    'ctime_start' => 0,
    'ctime_end' => 0,
    'm_ptype_state' => 0,
    'paltform' => 0,
    'pl' => 0,
    'platform_state' => 0,
    'order_state' => 0,
    'm_name' => 0,
    'name' => 0,
    'orderid' => 0,
    'count' => 0,
    'Reques_uri' => 0,
    'list' => 0,
    'li' => 0,
    'lk' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58291e3a8d957')) {function content_58291e3a8d957($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Login/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<style>
td a{color:#4e9ad4;}
.searchtxt{width:40px;}
.searchbtn{width:30px;}
.fl{float: left;}
.rl{float: right;}
#conHeader{overflow: hidden;height: 30px;padding:10px 0;border-bottom: 1px solid #000;}
#conHeader .fl{width: 500px;}
#conHeader .btn a,#conHeader .btn a:hover,#conHeader .btn a:active{background: #4e9ad4;color: #fff;padding:10px;text-decoration:none;margin-right: 20px;}
#searchBar{overflow: hidden;padding:10px;height:90px;}
#searchBar li{float: left;}
#screen_box{border-right: 1px solid #000;overflow: hidden;width:60%;}
#screen_btn{background: #4e9ad4;color: #fff;padding:20px;border: none;cursor: pointer;margin:15px 20px;}
#wd_box{width: 39%;text-align: center;}
#wd_box p{line-height:30px;height:30px;}
#screen_box p{line-height:45px;height:45px;}

#attentions_edit{background:#FFF;position:fixed;width:400px; height:200px;margin:-100px 0 0 -200px;top:50%;left:50%;border: 1px solid #D4DCE7;}
#attentions_header{background:#D4DCE7;height:30px;line-height: 30px;text-align: center;}
#attentions_header span{float: right;margin-right: 10px;}
#attentions_textarea{padding:10px;}
#attentions_textarea textarea{width: 380px;max-width: 380px;height: 120px;max-height: 120px;}
#attentions_bottom{text-align: center;}
#attentions_bottom input{width: 50px;}
</style>
<div class="wrap">
    <div class="container">
        <div id="conHeader">
            <h1 class="fl">订单列表</h1>
            <div class="rl btn"><a href="" exportall="all" class="export">导出Excel</a></div>
        </div>
        <div id="searchBar">
          <ul>
            <li id="screen_box">
              <ul>
                <li >
                  <p>订单时间：<input name="ctime_start" type="text" class="textinput datepicker" onkeyup="" value="<?php echo $_smarty_tpl->tpl_vars['ctime_start']->value;?>
" placeholder="起始时间"/>-<input name="ctime_end" type="text"  class="textinput datepicker" onkeyup="" value="<?php echo $_smarty_tpl->tpl_vars['ctime_end']->value;?>
" placeholder="截止时间" /></p>
                  <p>赛事分类：
                    <select name="m_ptype_state" id="">
                        <option value="">请选择</option>
                        <option value="国内" <?php if ($_smarty_tpl->tpl_vars['m_ptype_state']->value=="国内"){?>selected<?php }?>>国内</option>
                        <option value="海外" <?php if ($_smarty_tpl->tpl_vars['m_ptype_state']->value=="海外"){?>selected<?php }?>>海外</option>
                        <option value="运动诊疗" <?php if ($_smarty_tpl->tpl_vars['m_ptype_state']->value=="运动诊疗"){?>selected<?php }?>>运动诊疗</option> 
                    </select>&nbsp;&nbsp;&nbsp;&nbsp;
                    订单来源：
                    <select name="platform_state" id="">
                        <option value="">请选择</option>
                        <?php  $_smarty_tpl->tpl_vars['pl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['paltform']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pl']->key => $_smarty_tpl->tpl_vars['pl']->value){
$_smarty_tpl->tpl_vars['pl']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['pl']->value['platform'];?>
" <?php if ($_smarty_tpl->tpl_vars['platform_state']->value==($_smarty_tpl->tpl_vars['pl']->value['platform'])){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['pl']->value['platform'];?>
</option>
                        <?php } ?>
                    </select>&nbsp;&nbsp;&nbsp;&nbsp;
                    订单状态：
                    <select name="order_state" id="">
                        <option value="">请选择</option>
                        <option value="10" <?php if ($_smarty_tpl->tpl_vars['order_state']->value=="10"){?>selected<?php }?>>报名成功</option>
                        <option value="1" <?php if ($_smarty_tpl->tpl_vars['order_state']->value=="1"){?>selected<?php }?>>支付完成/缺信息</option>
                        <option value="2" <?php if ($_smarty_tpl->tpl_vars['order_state']->value=="2"){?>selected<?php }?>>支付金额不对</option>
                        <option value="5" <?php if ($_smarty_tpl->tpl_vars['order_state']->value=="5"){?>selected<?php }?>>未支付</option>
                        <option value="3" <?php if ($_smarty_tpl->tpl_vars['order_state']->value=="3"){?>selected<?php }?>>支付过期</option>
                        <option value="-1" <?php if ($_smarty_tpl->tpl_vars['order_state']->value=="-1"){?>selected<?php }?>>已删除</option> 
                        <option value="9" <?php if ($_smarty_tpl->tpl_vars['order_state']->value=="9"){?>selected<?php }?>>库存不足</option> 
                        <option value="7" <?php if ($_smarty_tpl->tpl_vars['order_state']->value=="7"){?>selected<?php }?>>退款成功</option>
                    </select>
                  </p>
                </li>
                <li>
                   <input type="submit" name="" id="screen_btn" value="筛选">
                </li>
              </ul>
            </li>
            <li id="wd_box">
                <p><input id="key_word" type="text" value="<?php echo $_smarty_tpl->tpl_vars['m_name']->value;?>
" name="m_name" placeholder="请输入赛事关键字"><input type="button" value="搜索" class="search_btn">&nbsp;</p>
                <p><input id="key_word2" type="text" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" name="name" placeholder="请输入客户姓名"><input type="button" value="搜索" class="search_btn">&nbsp;</p>
                <p><input id="key_word3" type="text" value="<?php echo $_smarty_tpl->tpl_vars['orderid']->value;?>
" name="orderid" placeholder="请输入订单号"><input type="button" value="搜索" class="search_btn">&nbsp;</p>
            </li>
          </ul>
          
        </div>
        <div id="main">
            
            <div class="con">
                  <div class="table">
                     <div class="th">
                        <span>订单数：<strong><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</strong></span>
                    </div>            
            	   <form action="<?php echo $_smarty_tpl->tpl_vars['Reques_uri']->value;?>
&ac=export" method="post" id="orderlist_form">
                    <table class="admin-tb" id="js_data_source">
                    <tr>
                        <th><input type="checkbox" id="select_all"/>ID</th>
                    	<th style="text-align:center;">订单号</th>                       
                        <th style="text-align:center;">报名时间</th>
                        <th style="text-align:center;">最后修改时间</th>
                        <th style="text-align:center;">来源</th>
                        <th style="text-align:center;">姓名</th>
                        <th style="text-align:center;">赛事名称</th>
                        <th style="text-align:center;">赛事分类</th>  
                        <th style="text-align:center;">产品</th>
                        <th style="text-align:center;">价格</th>
                        <th style="text-align:center;">优惠券</th>
                        <th style="text-align:center;">订单状态</th>
                        <th style="text-align:center;">操作</th>                  
                    </tr>
                    <?php  $_smarty_tpl->tpl_vars['li'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['li']->_loop = false;
 $_smarty_tpl->tpl_vars['lk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['li']->key => $_smarty_tpl->tpl_vars['li']->value){
$_smarty_tpl->tpl_vars['li']->_loop = true;
 $_smarty_tpl->tpl_vars['lk']->value = $_smarty_tpl->tpl_vars['li']->key;
?>
                    <tr>
                        <td><input type="checkbox" name="id[]" value="<?php echo $_smarty_tpl->tpl_vars['li']->value['orderid'];?>
"/><?php echo $_smarty_tpl->tpl_vars['lk']->value+1;?>
</td>
                        <td style="text-align:center;max-width:150px;"><?php echo $_smarty_tpl->tpl_vars['li']->value['orderid'];?>
</td>
                         <td style="text-align:center;max-width:70px;"><?php echo $_smarty_tpl->tpl_vars['li']->value['ctime'];?>
</td>
                         <td style="text-align:center;max-width:30px;"><?php echo $_smarty_tpl->tpl_vars['li']->value['utime'];?>
</td>
                         <td style="text-align:center;max-width:150px;"><?php echo $_smarty_tpl->tpl_vars['li']->value['platform'];?>
</td>
                          <td style="text-align:center;max-width:60px;"><?php echo $_smarty_tpl->tpl_vars['li']->value['name'];?>
</td>
                        <td style="text-align:center;max-width:150px;">
                            <a href="?s=MatchV3&ac=list&state=0&m_name=<?php echo $_smarty_tpl->tpl_vars['li']->value['m_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['li']->value['m_name'];?>
</a>   
                        </td>
                        <td style="text-align:center;max-width:30px;"><?php echo $_smarty_tpl->tpl_vars['li']->value['m_ptype'];?>
</td>            
                        <td style="text-align:left;max-width:200px;"><?php echo $_smarty_tpl->tpl_vars['li']->value['info'];?>
</td>
                        <td style="text-align:center;max-width:150px;">
                            <?php echo round($_smarty_tpl->tpl_vars['li']->value['payprice']-$_smarty_tpl->tpl_vars['li']->value['discount'],2);?>
 <br>
                            <del><?php echo $_smarty_tpl->tpl_vars['li']->value['payprice'];?>
</del>
                        </td>
                        <td style="text-align:center;max-width:150px;"><?php echo $_smarty_tpl->tpl_vars['li']->value['discount'];?>
</td>
                        <td style="text-align:center;max-width:190px;">
                            <?php if ($_smarty_tpl->tpl_vars['li']->value['paystats']=="10"){?>
                                <span style="color:green">报名成功</span>
                            <?php }elseif($_smarty_tpl->tpl_vars['li']->value['paystats']=="1"){?>
                                <span style="color:red">支付完成/缺信息</span>
                            <?php }elseif($_smarty_tpl->tpl_vars['li']->value['paystats']=="2"){?>
                                支付金额不对
                            <?php }elseif($_smarty_tpl->tpl_vars['li']->value['paystats']=="5"){?>
                                未支付
                            <?php }elseif($_smarty_tpl->tpl_vars['li']->value['paystats']=="3"){?>
                                支付过期
                            <?php }elseif($_smarty_tpl->tpl_vars['li']->value['paystats']=="-1"){?>
                                已删除
                            <?php }elseif($_smarty_tpl->tpl_vars['li']->value['paystats']=="9"){?>
                                库存不足
                            <?php }elseif($_smarty_tpl->tpl_vars['li']->value['paystats']=="7"){?>
                                <span style="color:blue">退款成功</span>
                            <?php }else{ ?>
                                未知<?php echo $_smarty_tpl->tpl_vars['li']->value['paystats'];?>

                            <?php }?>
                        </td>      
                        <td style="text-align:center;min-width:70px;">
                            [<a href="./?s=EnrollV3&a=orderinfo&orderid=<?php echo $_smarty_tpl->tpl_vars['li']->value['orderid'];?>
">详情</a>]<br>
                            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['li']->value['m_attentions'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>
                            [<a data = "<?php echo $_smarty_tpl->tpl_vars['li']->value['m_attentions'];?>
" class = "showBox" style="color:red;">赛事注释</a>]<br>
                            <?php }?>
                            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['li']->value['user_remarks'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2){?>
                            [<a data = "<?php echo $_smarty_tpl->tpl_vars['li']->value['user_remarks'];?>
" class = "showBox" style="color:red;" >Ta的注释</a>]<br>
                            <?php }?>
                            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['li']->value['official_notes'];?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp3){?>
                            [<a data = "<?php echo $_smarty_tpl->tpl_vars['li']->value['official_notes'];?>
" data-orderid="<?php echo $_smarty_tpl->tpl_vars['li']->value['orderid'];?>
" class = "editBox" style="color:red;">订单注释</a>]
                            <?php }else{ ?>
                            [<a data = "<?php echo $_smarty_tpl->tpl_vars['li']->value['official_notes'];?>
" data-orderid="<?php echo $_smarty_tpl->tpl_vars['li']->value['orderid'];?>
" class = "editBox">订单注释</a>]
                            <?php }?>
                            
                        </td>
                    </tr>
                   <?php } ?>
                    </table>

                    <div class="th">
                        <input type="button" exportall="id" class="export" value=" 导出 "/><span style="color:red"> &nbsp;&nbsp;*导出当前页面勾选的订单</span>
                    </div>
                </div>
				</form>
                </div>
            </div><!--/ con-->
        </div>    
    </div><!--/ container-->
    </div><!--/ wrap-->
<script>
var removeattentions = function(){
    $("#attentions_edit").remove();
}
$(".showBox").click(function(){
    removeattentions();
    var content = $(this).attr("data");
    var name = $(this).html();
    $("<div id='attentions_edit'><p id='attentions_header'>"+name+"<span>[<a href='javascript:removeattentions();'>关闭</a>]</span></p><div id='attentions_textarea'><textarea id='textarea_val'>"+content+"</textarea></div><p id='attentions_bottom'></p></div>").appendTo($('body'));

});
$(".editBox").click(function(){
    removeattentions();
    var me = this;
    var content = $(this).attr('data');
    var name = $(this).html();
    var id = $(this).attr("data-orderid");
    $("<div id='attentions_edit'><p id='attentions_header'>"+name+"<span>[<a href='javascript:removeattentions();'>关闭</a>]</span></p><div id='attentions_textarea'><textarea id='textarea_val'>"+content+"</textarea></div><p id='attentions_bottom'><input type='button' value='修改' /></p></div>").appendTo($('body')).find("input[type=button]").click(function(){
      var textarea_val = $("#textarea_val").val();
      if(textarea_val && id){
        $.ajax({
            url:"?s=EnrollV3&a=update_zhushi",
            data:{orderid:id,zhushi:textarea_val},
            type: "POST",
            dataType: "json",
            success:function(res){
              if(res.error == 0){
                $(me).attr('data',textarea_val);
                $("#m_attentions"+id).html(textarea_val);
                alert("保存成功");
                removeattentions();
              }else{
                alert(res.msg);
              }
            },
            error:function(){
              alert("保存失败！");
            }
        });
      }else{
        alert("请输入赛事注意事项！");
      }
  });
});
$("#screen_btn").click(function(){
    var getParam = "";
      
    var m_ptype_state = $("select[name=m_ptype_state]").val();
    if(m_ptype_state){
        getParam += "&m_ptype_state=" + m_ptype_state;
    }

    var platform_state = $("select[name=platform_state]").val();
    if(platform_state){
        getParam += "&platform_state=" + platform_state;
    }

    var order_state = $("select[name=order_state]").val();
    if(order_state){
        getParam += "&order_state=" + order_state;
    }

    var ctime_start = $("input[name=ctime_start]").val();
    var ctime_end = $("input[name=ctime_end]").val();
    if(ctime_end || ctime_start){
        getParam += "&ctime_end=" + ctime_end + "&ctime_start=" + ctime_start;
    }

    //if(getParam){
        requestUrl    = '?s=EnrollV3'+getParam;
        window.location=requestUrl;
    //}else{
      //  alert("请选择你要筛选的条件！");
    //}
  
});
$(".search_btn").click(function(){
    var that = $(this).prev("input");
    change_url(that);
});
function change_url(obj){
  var v = $(obj).val();
  var n = $(obj).attr('name');
  var requestUrl    = '?s=EnrollV3&'+n+"="+v;
  window.location=requestUrl;
}
$('#select_all').click(function(){
  var able	= $(this).attr('checked');
  if(able){
	  $(this).parents('form').find('input[type=checkbox]').attr('checked',true);
  }else{
	  $(this).parents('form').find('input[type=checkbox]').attr('checked',false);
  }
});
var checkTb1 = function(selectType){
    CheckInit("check_field_Box",selectType);
}
var  list = undefined;
var CheckInit = function(tabelId,selectType){
    if(list == undefined){
        list = $("#" + tabelId).find("input[type='checkbox']");
    }
    CheckControl(list,selectType)
}

var CheckControl = function(childs,selectType,checkHandler){
    for(var i = 0,len = childs.length; i < len; i++){
        switch(selectType){
            case 1: //全选
                childs[i].checked = true;
                break;
            case 2: //不选
                childs[i].checked = false;
                break;
            case 3: //反选
                childs[i].checked = !childs[i].checked;
                break;
        }
    }
}
$(".export").click(function(){
    var exporttype = $(this).attr("exportall"); 
    var ids = "";
    if(exporttype=="id"){
        var idarr   = [];
        $("input[name^=id]").each(function(){
            if($(this).attr('checked')){
                idarr.push("'"+$(this).val()+"'");
            }
        });
        ids = idarr.join(",");
        if(!ids) return false;
    }
    if($("#check_field_Box").length<1){
        html = '\
        <div style="position:fixed;top:0;left:0;background:#F2F4F6;margin:100px;max-width:500px;" id="check_field_Box">\
            <p style="background:#D4DCE7;padding:10px;">请选择你要导出的字段</p>\
            <div style="padding:10px;">\
            <form action="/?s=EnrollV3&a=export" id="field_form" method="POST">\
            <input type="hidden" value="'+exporttype+'" name="exporttype"/>\
            <input type="hidden" value="'+ids+'" name="ids"/>\
            <p>订单相关</p>\
            <label for="field1"><input type="checkbox" name="field[]" id="field1" value="orderid" checked/>订单号</label>\
            <label for="field2"><input type="checkbox" name="field[]" id="field2" value="paystats" checked/>订单状态</label>\
            <label for="field3"><input type="checkbox" name="field[]" id="field3" value="payorderid" checked/>支付订单号</label>\
            <label for="field23"><input type="checkbox" name="field[]" id="field23" value="payinfo" />支付信息</label>\
            <label for="field4"><input type="checkbox" name="field[]" id="field4" value="orderprice" checked/>订单价钱</label>\
            <label for="field_discount"><input type="checkbox" name="field[]" id="field_discount" value="discount" checked/>优惠价钱</label>\
            <label for="field24"><input type="checkbox" name="field[]" id="field24" value="official_notes" checked/>客服注释</label>\
            <label for="field26"><input type="checkbox" name="field[]" id="field26" value="user_remarks" checked/>用户注释</label>\
            <label for="field5"><input type="checkbox" name="field[]" id="field5" value="m_name" checked/>报名赛事</label>\
            <label for="field25"><input type="checkbox" name="field[]" id="field25" value="platform" checked/>下单平台</label>\
            <label for="field27"><input type="checkbox" name="field[]" id="field27" value="orderinfo"/>订单详情</label>\
            <label for="field50"><input type="checkbox" name="field[]" id="field50" value="ctime" checked />下单时间</label>\
            <br>\
             <br>\
            <p>客户相关</p>\
            <label for="field6"><input type="checkbox" name="field[]" id="field6" value="name" checked/>用户姓名</label>\
            <label for="field7"><input type="checkbox" name="field[]" id="field7" value="sfz_code" checked/>身份证号</label>\
            <label for="field8"><input type="checkbox" name="field[]" id="field8" value="phone" checked/>手机号</label>\
            <label for="field9"><input type="checkbox" name="field[]" id="field9" value="birth" checked/>生日</label>\
            <label for="field10"><input type="checkbox" name="field[]" id="field10" value="sexy" checked/>性别</label>\
            <label for="field11"><input type="checkbox" name="field[]" id="field11" value="country" checked/>国籍</label>\
            <label for="field12"><input type="checkbox" name="field[]" id="field12" value="area" checked/>地区</label>\
            <label for="field13"><input type="checkbox" name="field[]" id="field13" value="addr" checked/>详细地址</label>\
            <label for="field14"><input type="checkbox" name="field[]" id="field14" value="e_mail" checked/>邮箱</label>\
            <label for="field15"><input type="checkbox" name="field[]" id="field15" value="cloth_size" checked/>服装尺码</label>\
            <label for="field16"><input type="checkbox" name="field[]" id="field16" value="pass_code" checked/>护照号码</label>\
            <label for="field17"><input type="checkbox" name="field[]" id="field17" value="surname" checked/>中文姓拼音</label>\
            <label for="field18"><input type="checkbox" name="field[]" id="field18" value="en_name" checked/>中文名拼音</label>\
            <label for="field19"><input type="checkbox" name="field[]" id="field19" value="issue_date" checked/>签发日期</label>\
            <label for="field20"><input type="checkbox" name="field[]" id="field20" value="expiry_date" checked/>有效日期</label>\
            <label for="field40"><input type="checkbox" name="field[]" id="field40" value="postcode" checked/>邮编</label>\
            <label for="field41"><input type="checkbox" name="field[]" id="field41" value="isattended" checked/>是否参加过全马</label>\
            <label for="field42"><input type="checkbox" name="field[]" id="field42" value="personbest" checked/>最好成绩</label>\
            <label for="field43"><input type="checkbox" name="field[]" id="field43" value="personbestmatch" checked/>最好成绩赛事</label>\
            <label for="field44"><input type="checkbox" name="field[]" id="field44" value="wishfinish" checked/>预期成绩</label>\
            <label for="field21"><input type="checkbox" name="field[]" id="field21" value="contact_name" checked/>联系人姓名</label>\
            <label for="field22"><input type="checkbox" name="field[]" id="field22" value="contact_phone" checked/>联系人手机</label>\
            <p align="center" style="padding:10px 0;"><input type="button" value="全选" onClick="javascript:checkTb1(1);"/>　　<input type="button" value="反选" onClick="javascript:checkTb1(3);" />　　<input type="button" value="全不选" onClick="javascript:checkTb1(2);" />　　<input type="submit" value="导出"/>　　<input type="button" value="取消" id="cancel"/></p>\
            </form>\
            </div>\
        </div>';
        $(html).appendTo($('body'));

        $("#cancel").click(function () {
            $("#check_field_Box").remove();
        });
    }
    return false;
}); 
</script>
<link type="text/css" href="/static/datapicker/timepicker/css/jquery-ui-1.8.17.custom.css" rel="stylesheet" />
<link type="text/css" href="/static/datapicker/timepicker/css/jquery-ui-timepicker-addon.css" rel="stylesheet" />
<script type="text/javascript" src="/static/datapicker/timepicker/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="/static/datapicker/timepicker/js/jquery-ui-1.8.17.custom.min.js"></script>
<script type="text/javascript" src="/static/datapicker/timepicker/js/jquery-ui-timepicker-addon.js"></script>
<script type="text/javascript" src="/static/datapicker/timepicker/js/jquery-ui-timepicker-zh-CN.js"></script>
<script>
$('.datepicker').datetimepicker({
  //showOn: "button",
  //buttonImage: "./css/images/icon_calendar.gif",
  //buttonImageOnly: true,
  showSecond: true,
  timeFormat: 'hh:mm:ss',
  stepHour: 1,
  stepMinute: 1,
  stepSecond: 1
});
</script>
<?php echo $_smarty_tpl->getSubTemplate ('Login/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>