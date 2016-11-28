<?php /* Smarty version Smarty-3.1.6, created on 2016-01-08 18:20:55
         compiled from "../uducy_admin/Tpl\Login\welcome.html" */ ?>
<?php /*%%SmartyHeaderCode:8407564154e9aee5a5-51361652%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98d1046f2f04fb739a188779fb590e6f931a4eb2' => 
    array (
      0 => '../uducy_admin/Tpl\\Login\\welcome.html',
      1 => 1452248451,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8407564154e9aee5a5-51361652',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_564154e9c0748',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564154e9c0748')) {function content_564154e9c0748($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Login/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<body id="main_page">

<div id="nav" style="display:none">
<dl>
    <dt>当前位置：</dt>
    <dd class="link"><a href="#">首页管理</a></dd>
    <dd>控制台</dd>
</dl>
</div>
<script type="text/javascript">
	var nav = document.getElementById("nav");
	var pnav = window.parent.document.getElementById("nav")
	pnav.innerHTML = nav.innerHTML;
</script>
<div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con">
            	<?php if ($_smarty_tpl->tpl_vars['data']->value['noticemsg']){?>
                <div class="tips" style="margin-top:10px; border-top:1px solid #F93">
                   <?php echo $_smarty_tpl->tpl_vars['data']->value['noticemsg'];?>
,请及时清理日志文件
                </div>
                <?php }?>            	
                <?php if ($_smarty_tpl->tpl_vars['data']->value['site_new']){?>
                <div class="tips" style="margin-top:10px; border-top:1px solid #F93">
                                            目前有 <strong class="red"><?php echo $_smarty_tpl->tpl_vars['data']->value['site_new'];?>
</strong> 个待处理的网址收录申请 <a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['site_url'];?>
">立即处理 &raquo;</a>
                </div>
                <?php }?>
                
                <?php if ($_smarty_tpl->tpl_vars['data']->value['advise']){?>
	                <div class="tips" style="margin-top:10px; border-top:1px solid #F93">
	                                            目前有 <strong class="red"><?php echo $_smarty_tpl->tpl_vars['data']->value['advise'];?>
</strong> 个待处理的意见反馈 <a href="<?php echo $_smarty_tpl->tpl_vars['data']->value['advise_url'];?>
">立即处理 &raquo;</a>
	                </div>
                <?php }?>
                
                <div class="table">
                    <h2 class="th">服务器基本信息 <span class="head"><?php echo $_SERVER['SERVER_NAME'];?>
<?php echo $_smarty_tpl->tpl_vars['data']->value['serverip'];?>
 &nbsp;<?php echo $_smarty_tpl->tpl_vars['data']->value['systime'];?>
</span></h2>                
                    <table>
                        <tr>
                        <td colspan="2"> System:<?php echo $_smarty_tpl->tpl_vars['data']->value['sysinfo'];?>
</td>
                        <td colspan="2">Web server:<span class="b"><?php echo $_SERVER['SERVER_SOFTWARE'];?>
</span></td>
                        <td colspan="2">PHP Version:<?php echo $_smarty_tpl->tpl_vars['data']->value['phpversion'];?>
</td>
                        </tr>
                        <tr>
                        <td colspan="2">Mysql  Version:<?php echo $_smarty_tpl->tpl_vars['data']->value['dbversion'];?>
</td>
                        <td colspan="2"> display_errors:<?php echo $_smarty_tpl->tpl_vars['data']->value['dispalyerror'];?>
</td>
                        <td colspan="2">Server API:<?php echo $_smarty_tpl->tpl_vars['data']->value['serverapi'];?>
</td>
                        </tr>
                        <tr>
                        <td colspan="2">PHP Safe: <?php echo $_smarty_tpl->tpl_vars['data']->value['phpsafe'];?>
 </td>
                        <td colspan="2">Session Support:<?php echo $_smarty_tpl->tpl_vars['data']->value['sessionsp'];?>
</td>
                        <td colspan="2">Cookie Support:<?php echo $_smarty_tpl->tpl_vars['data']->value['cookiesp'];?>
</td>
                        </tr>
                        <tr>
                        <td colspan="2">Zend Optimizer Support:<?php echo $_smarty_tpl->tpl_vars['data']->value['zendoptsp'];?>
</td>
                        <td colspan="2">eAccelerator Support:<?php echo $_smarty_tpl->tpl_vars['data']->value['eaccsp'];?>
</td>
                        <td colspan="2">Xcache Support:<?php echo $_smarty_tpl->tpl_vars['data']->value['xcachesp'];?>
</td>
                        </tr>
                        <tr>
                        <td colspan="2">register_globals:<?php echo $_smarty_tpl->tpl_vars['data']->value['registerglobal'];?>
</td>
                        <td colspan="2">magic_quotes_gpc:<?php echo $_smarty_tpl->tpl_vars['data']->value['mqqsp'];?>
</td>
                        <td colspan="2">magic_quotes_runtime:<?php echo $_smarty_tpl->tpl_vars['data']->value['mprsp'];?>
</td>
                        </tr>
                        <tr>
                        <td colspan="2">upload_max_filesize:<?php echo $_smarty_tpl->tpl_vars['data']->value['maxupsize'];?>
</td>
                        <td colspan="2">post_max_size:<?php echo $_smarty_tpl->tpl_vars['data']->value['maxpostsize'];?>
</td>
                        <td colspan="2">max_execution_time:<?php echo $_smarty_tpl->tpl_vars['data']->value['maxexectime'];?>
</td>
                        </tr>
                        <tr>
                        <td width="12%">allow_url_fopen:<?php echo $_smarty_tpl->tpl_vars['data']->value['allowurlopen'];?>
</td>
                        <td width="13%">Curl Support:<?php echo $_smarty_tpl->tpl_vars['data']->value['curlsp'];?>
</td>
                        <td width="12%">Iconv Support:<?php echo $_smarty_tpl->tpl_vars['data']->value['iconvsp'];?>
</td>
                        <td width="13%">Zlib Support:<?php echo $_smarty_tpl->tpl_vars['data']->value['zlibsp'];?>
</td>
                        <td width="12%">GD Support:<?php echo $_smarty_tpl->tpl_vars['data']->value['gdsp'];?>
</td>
                        <td width="13%">DBA Support:<?php echo $_smarty_tpl->tpl_vars['data']->value['dbasp'];?>
</td>
                        </tr>
                    </table>
                </div>    
                <div class="table">
                    <h2 class="th">统计信息</h2>                
                    <table>
                    <tr>
                    <td> 当前站点数:1</td>
                    <td>管理人员:<?php echo $_smarty_tpl->tpl_vars['data']->value['managerTotal'];?>
人&nbsp;&nbsp;&nbsp;&nbsp;<!-- <a href="/?s=member">[查看]</a> --></td>
                    <td>数据库大小:<?php echo $_smarty_tpl->tpl_vars['data']->value['datasize'];?>
</td>
                    </tr>
                    </table>
                </div>
            </div><!--/ con-->
        </div>    
    </div><!--/ container-->
</div><!--/ wrap-->
<?php echo $_smarty_tpl->getSubTemplate ('Login/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>