<?php /* Smarty version Smarty-3.1.6, created on 2016-11-07 16:43:52
         compiled from "../uducy_admin/Tpl\Memcququ\memcindex.html" */ ?>
<?php /*%%SmartyHeaderCode:2177558203ec88f64d5-82983817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd1896f0ec34805d2eb1ed443a4a4a2790b8fb5d' => 
    array (
      0 => '../uducy_admin/Tpl\\Memcququ\\memcindex.html',
      1 => 1478503485,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2177558203ec88f64d5-82983817',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58203ec8a1614',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58203ec8a1614')) {function content_58203ec8a1614($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('Login/header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


   <div class="wrap">
    <div class="container">
        <div id="main">
            <div class="con">                           
                <div class="table">
                    <h2 class="th">memcache缓存基本信息 <span class="head"></span></h2> 
   <FORM action="/?s=Memcququ&a=memcclear" method="Post">  
      <TABLE>
         <tr>
             <td width="50%"><?php echo $_smarty_tpl->tpl_vars['data']->value['msg'];?>
</td>
         </tr>
          <tr>
	          <td>
	          
	               <INPUT type="submit" name="memcclear" value="清空缓存">
	          
	          </td>
         </tr>
      </TABLE>   
  </FORM>          
         <TABLE>
         <tr>
             <td>pid</td>
             <td><?php echo $_smarty_tpl->tpl_vars['data']->value['pid'];?>
</td>
             <td>memcache服务器的进程ID</td>
            
         </tr>
          <tr>
	          <td>uptime</td>
	          <td><?php echo $_smarty_tpl->tpl_vars['data']->value['uptime'];?>
</td>
              <td>服务器已经运行的秒数</td>
             
         </tr>
          <tr>
             <td>time</td>
             <td><?php echo $_smarty_tpl->tpl_vars['data']->value['time'];?>
</td>
             <td>服务器当前的unix时间戳</td>
            
         </tr>
          <tr>
             <td>version</td>
              <td><?php echo $_smarty_tpl->tpl_vars['data']->value['version'];?>
</td>
             <td>memcache版本</td>
         </tr>
          <tr>
	          <td>rusage_user</td>
	          <td><?php echo $_smarty_tpl->tpl_vars['data']->value['rusage_user'];?>
</td>
              <td>进程的累计用户时间</td>
             
         </tr>
          <tr>
             <td>rusage_system</td>
             <td><?php echo $_smarty_tpl->tpl_vars['data']->value['rusage_system'];?>
</td>
             <td>进程的累计系统时间</td>
         </tr>
         <tr>
             <td>bytes_read</td>
             <td><?php echo $_smarty_tpl->tpl_vars['data']->value['bytes_read'];?>
</td>
             <td>总读取字节数（请求字节数）</td>
         </tr>
          <tr>
             <td>bytes_written</td>
             <td><?php echo $_smarty_tpl->tpl_vars['data']->value['bytes_written'];?>
</td>
             <td>总发送字节数（结果字节数）</td>
         </tr>
           <tr>
            <td>curr_connections</td>
            <td><?php echo $_smarty_tpl->tpl_vars['data']->value['curr_connections'];?>
</td>
             <td>当前打开着的连接数</td>
         </tr>
           <tr>
             <td>total_connections</td>
             <td><?php echo $_smarty_tpl->tpl_vars['data']->value['total_connections'];?>
</td>
             <td>从服务器启动以后曾经打开过的连接数</td>
         </tr>
           <tr>
             <td>connection_structures</td>
             <td><?php echo $_smarty_tpl->tpl_vars['data']->value['connection_structures'];?>
</td>
             <td>服务器分配的连接构造数</td>
         </tr>
         <tr>
             <td>cmd_get</td>
             <td><?php echo $_smarty_tpl->tpl_vars['data']->value['cmd_get'];?>
</td>
             <td>get命令（获取）总请求次数</td>
            
         </tr>
          <tr>
             <td>cmd_set</td>
             <td><?php echo $_smarty_tpl->tpl_vars['data']->value['cmd_set'];?>
</td>
             <td>set命令（保存）总请求次数</td>
         </tr>
          <tr>
	          <td>get_hits</td>
	          <td><?php echo $_smarty_tpl->tpl_vars['data']->value['get_hits'];?>
</td>
              <td>总命中次数</td>
         </tr>
         <tr>
	          <td> get_misses</td>
	          <td><?php echo $_smarty_tpl->tpl_vars['data']->value['get_misses'];?>
</td>
              <td>总未命中次数</td>
         </tr>
          <tr>
	          <td> delete_hits</td>
	          <td><?php echo $_smarty_tpl->tpl_vars['data']->value['delete_hits'];?>
</td>
              <td> delete命中次数</td>
         </tr>
          <tr>
	          <td> delete_misses</td>
	          <td><?php echo $_smarty_tpl->tpl_vars['data']->value['delete_misses'];?>
</td>
              <td>delete未命中次数</td>
         </tr>
         
         
          <tr>
	          <td>curr_items</td>
	          <td><?php echo $_smarty_tpl->tpl_vars['data']->value['curr_items'];?>
</td>
             <td>服务器当前存储的items数量</td>
         </tr>
          <tr>
	          <td>total_items</td>
	          <td><?php echo $_smarty_tpl->tpl_vars['data']->value['total_items'];?>
</td>
             <td>从服务器启动以后存储的items总数量</td>
         </tr>
          <tr>
             <td>limit_maxbytes</td>
             <td><?php echo $_smarty_tpl->tpl_vars['data']->value['limit_maxbytes'];?>
</td>
             <td>分配给memcache的内存大小（字节）</td>
         </tr>
          <tr>
	          <td>bytes</td>
	          <td><?php echo $_smarty_tpl->tpl_vars['data']->value['bytes'];?>
</td>
             <td>当前服务器存储items占用的字节数</td>
         </tr>
         
         
         
          <tr>
             <td> evictions</td>
             <td><?php echo $_smarty_tpl->tpl_vars['data']->value['evictions'];?>
</td>
             <td>为获取空闲内存而删除的items数（分配给memcache的空间用满后需要删除旧的items来得到空间分配给新的items）</td>
         </tr>
          <tr>
             <td> threads</td>
             <td><?php echo $_smarty_tpl->tpl_vars['data']->value['threads'];?>
</td>
             <td>当前线程数</td>
         </tr>
      </TABLE>
                </div>            
                <div class="table">
                    <h2 class="th"></h2>                
                </div>
            </div><!--/ con-->
        </div>    
    </div><!--/ container-->
</div><!--/ wrap-->

<?php echo $_smarty_tpl->getSubTemplate ('Login/footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>