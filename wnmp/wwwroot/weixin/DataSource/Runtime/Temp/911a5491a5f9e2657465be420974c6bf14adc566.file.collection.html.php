<?php /* Smarty version Smarty-3.1.6, created on 2016-11-07 16:47:17
         compiled from "../DataSource/Tpl\User\collection.html" */ ?>
<?php /*%%SmartyHeaderCode:3373581ae486b674f7-83867437%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '911a5491a5f9e2657465be420974c6bf14adc566' => 
    array (
      0 => '../DataSource/Tpl\\User\\collection.html',
      1 => 1478172221,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3373581ae486b674f7-83867437',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_581ae486c62db',
  'variables' => 
  array (
    'abroad' => 0,
    'domestic' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_581ae486c62db')) {function content_581ae486c62db($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Comon/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<title>想跑的赛事</title>
<style>
/*.matchBox{margin-bottom: 20px;}
.borderLeft{margin: 5px 15px;}
.borderLeft span{float: left;width: 0.2142rem;height: 1.2142rem;background: #04b102;margin: 0.322rem 0.5rem 0 0;}
.weui_media_desc{padding: 0.3rem 0;}
.weui_media_box.weui_media_appmsg .weui_media_hd{margin-right: 1.14285rem;}
.weui_media_box{padding: 1.071428571428571rem;}
.weui_media_desc span{display: inline-block;height: 0.9285rem;width: 1px;background: rgba(166,166,166,0.5);float: inherit;margin: 0 0.285rem;vertical-align: -0.1428rem;}*/

.collection_list{margin-top: 0.71428571428571rem;padding: 0.1px;border: 1px solid rgb(217,217,217)}
.collection_list_content{height:5.60714285714286rem;border-bottom: 1px solid rgb(217,217,217);margin-top: 1.07142857142857rem}
.collection_img{width: 5.71428571428571rem;height:4.28571428571429rem;float: left;margin-right: 0.71428571428571rem}
.collection_name{font-size: 1.14285714285714rem;color:black;font-weight: bold;line-height:-1.57142857142857rem }
.colloection_xcy{font-size:0.89285714285714rem;color: rgb(171,171,171);line-height: 1.57142857142857rem;}
.colloection_desc{font-size: 0.78571428571429rem;color:rgb(171,171,171);line-height:1.39285714285714rem;}
.colloection_post{margin-left: 0.89285714285714rem;margin-right: 0.89285714285714rem}
.collection_status>img{width:3.35714285714286rem;height:1.03571428571429rem;float: right;margin-top: 0.17857142857143rem}
.collection_money{font-size:0.89285714285714rem;color: rgb(171,171,171);line-height: 1.71428571428571rem;}
.collention_price{color: red;font-size: 0.78571428571429rem;width: 5.71428571428571rem;display: inline-block;font-weight: bold;}
.collention_allprice{font-size:0.78571428571429rem;text-decoration:line-through;margin-left:0.71428571428571rem;margin-right: 1.21428571428571rem }
.colloetion_type{margin-left:1.07142857142857rem }
.collection_btn{height: 2.32142857142857rem;line-height: 1.82142857142857rem;}
.weui_btn{width: 5.00000000000000rem;height: 1.82142857142857rem;font-size: 0.89285714285714rem!important;float: right;margin-top: 0!important;color: white!important;line-height: 1.82142857142857rem}
.collection_default{margin-right: 0.71428571428571rem;color: black!important;padding-right: 0.35714285714286rem;padding-left: 0.35714285714286rem;}
.signImg{display: none;}
</style>
<div class="wrap centerBox">
 
<!-- <?php if ($_smarty_tpl->tpl_vars['abroad']->value||$_smarty_tpl->tpl_vars['domestic']->value){?>
    <?php if ($_smarty_tpl->tpl_vars['abroad']->value){?>
    <div class="matchBox">
        <h5 class="borderLeft"><span></span>海外赛事</h5>
        <?php echo $_smarty_tpl->tpl_vars['abroad']->value;?>

    </div>
    <?php }?>
     <?php if ($_smarty_tpl->tpl_vars['domestic']->value){?>
    <div class="matchBox">
        <h5 class="borderLeft"><span></span>国内赛事</h5>
        <?php echo $_smarty_tpl->tpl_vars['domestic']->value;?>

    </div>
    <?php }?>
<?php }else{ ?>
<?php echo $_smarty_tpl->getSubTemplate ("User/empty.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?> -->
</div><!--end of wrap -->
<!-- <script src="/static/js/zepto.js"></script>
<script src="/static/weui/js/weui.js"></script> -->

</body>
<script src="/static/weui/js/weui.js"></script>
<script type="text/javascript">
    $.ajax({
        cache: false,
        url:"/Ajax/collection",
        type:'GET',
        async:true,
        success:function(data){
            var data = JSON.parse(data);
            var allId = [];
            function getDate(strDate){
                var st = strDate;
                var a = st.split(" ");
                var b = a[0].split("-");
                var c = a[1].split(":");
                var date = new Date(b[0], b[1]-1, b[2], c[0], c[1], c[2])
                return date;
            }

            function endTime(Btime,Etime,Gtime,Ntime){
                var begintime = getDate(Btime);
                var endtime = getDate(Etime);
                var gametime =  getDate(Gtime);
                var nowtime = getDate(Ntime)
                var numstart = begintime - nowtime; //如果正 表示 未到报名时间
                var end = nowtime - endtime // 如果正 表示 报名未截至
                var endgame = gametime - nowtime // 如果 正 表示 比赛未结束
                var lastDay = Math.floor(end/1000/(3600*24));
                return {
                    'numstart':numstart,
                    'end':end,
                    'endgame':endgame,
                    'lastDay':lastDay
                }
            }
            if(data.error == 1){
                var _empty = '<style>.empty{width: 70%;}.empty .emptyImg{width: 50%;margin: 0 auto 12px;}.empty .emptyImg>img{width: 100%;}.empty>p{text-align: center;}.empty p{font-size: 1.142857rem;color: #888888;}.empty p a{color: #ff2244;}</style><div class="center_cell empty"><div class="emptyImg"><img src="/static/images/order_empty.png" alt=""></div><p>暂时没有收藏赛事</p></div>'
                $('.centerBox').html(_empty);
            }
            if(data.error == 0){
            // 有数据
                var allData = data.data;
                for(var i = 0 ; i < allData.length ; i++){
                    var signNum = 0;
                    var infoData = allData[i].info;
                    var _cheap = 0;
                    var lowIndex = 0;
                    var _type1 = [];
                    var _type2 = [];
                    var _typelow = [];
                    for(var j=0;j<infoData.length;j++){
                        if(infoData[j].g_type == '1'){
                            _type1 = infoData[j];
                        }
                        if(infoData[j].g_type =='2'){
                            _type2.push(infoData[j]); 
                        }
                    }
                    _cheap = _type2[0].g_currprice;
                    for(var k in _type2){
                        if(_type2<_cheap){
                            lowIndex = k;
                        }
                    }

                    _typelow.push(infoData[lowIndex]);

                    var _true = endTime(allData[i].m_signuptime,allData[i].m_untilTime,allData[i].m_GameTime,data.datetime);
                    console.log(_true);

                    var _state = '';
                    var _html = '';
                    var _other = '<div class="weui_cells collection_list"><div style="padding-left: 0.71428571428571rem;padding-right: 0.71428571428571rem"><div class="collection_list_content"><img src="'+ allData[i].m_img +'" class="collection_img"><article class="collection_msg"><p class="collection_name">'+ allData[i].m_name +'<span class="collection_status"><img class="signImg" src="" alt=""></span></p><p class="colloection_xcy"><span class="colloection_intrduce">'+allData[i].m_des+'</span><span class="collection_status"><img class="signImg" src="" alt=""></span></p><p class="colloection_desc"><span class="colloection_time">'+ allData[i].m_GameTime.split(' ')[0] +'</span><span class="colloection_post">'+ allData[i].m_area +'</span><span class="colloection_course">'+ allData[i].m_mtypes_class + '|' + allData[i].m_Mtypes +'</span><span class="collection_status"><img class="signImg" src="" alt=""></span></p></article></div><p class="collection_money"><span class="collention_price">￥'+ _type1.g_currprice +'起/人</span><span class="collention_allprice">'+ _type1.g_price +'</span><span>'+ allData[i].m_mtypes_class +'</span><span class="colloetion_type">'+ allData[i].m_Mtypes +'</span></p>';
                if(_type2.length){
                    _html = '<p class="collection_money"><span class="collention_price">￥'+ _type2[0].g_currprice +'起/人</span><span class="collention_allprice">'+ _type2[0].g_price +'</span><span>套餐</span><span class="colloetion_type">'+_type2[0].g_name +'</span></p><div class="collection_btn"><a href="javascript:;" class="weui_btn weui_btn_plain_default collection_default">取消提醒</a></div></div></div>';
                }
                _other += _html;

                newNode = $(_other);
                $('.centerBox').append(newNode);
                if(_true.endgame <= 0){
                    newNode.find('.signImg').eq(signNum).attr('src','/static/images/bsjs.jpg').css('display','block');
                }
                else{
                    if(_true.end <= 0){
                        newNode.find('.signImg').eq(signNum).attr('src','/static/images/bmjz.png').css('display','block');
                    }else{
                        if(parseInt(allData[i].m_placesleft) <= 0){
                           newNode.find('.signImg').eq(signNum).attr('src','/static/images/mingeym.png').css('display','block');
                        }else{
                            if(_true.lastDay <= 7){
                                newNode.find('.signImg').eq(signNum).attr('src','/static/images/tag_jiezhi.jpg').css('display','block');
                                signNum++;
                                if(parseInt(allData[i].m_placesleft) <= 20){
                                   newNode.find('.signImg').eq(signNum).attr('src','/static/images/tag_mingejz.jpg.jpg').css('display','block'); 
                                }
                            }
                        }
                    }
                }
                $('.weui_btn').on('click',function(){
                    var _id = allData[$(this).index()].id;
                    console.log(_id)
                    weui.Loading.show();
                    $(this).parents().eq(2).remove();
                    $.ajax({
                        cache: false,
                        url:"/Matchinfo/collection?m_id="+_id,
                        type: "POST",
                        dataType: "json",
                        timeout:3000,
                        success:function(){
                            weui.Loading.hide();
                            weui.Loading.success(2000);
                        }
                    })
                })
                }               
            }
        }
    })
</script>
</html><?php }} ?>