<?php
/*
 * 版本更新查询
 * 
 */
class LoginModel extends Model {
	protected  $trueTableName	= "tbl_admin_user";
	
	/**
     *  系统信息
     *
     */
    public function system_info()
    {
        define("YES", "<span class='resYes'>YES</span>");
        define("NO", "<span class='resNo'>NO</span>");
        // 系统基本信息
        $serverapi = strtoupper(php_sapi_name());
        $phpversion = PHP_VERSION;
        $systemversion = explode(" ", php_uname());
        $sysReShow = 'none';
        switch (PHP_OS)
        {
            case "Linux":
                $sysReShow = (false !== ($sysInfo = self::sys_linux())) ? "show" :
                        "none";
                $sysinfo = $systemversion[0] . '   ' . $systemversion[2];
                break;
            case "FreeBSD":
                $sysReShow = (false !== ($sysInfo = self::sys_freebsd())) ? "show" :
                        "none";
                $sysinfo = $systemversion[0] . '   ' . $systemversion[2];
                break;
            default:
                $sysinfo = $systemversion[0] . '  ' . $systemversion[1] . ' ' . $systemversion[3] . $systemversion[4] . $systemversion[5];
                break;
        }
        if ($sysReShow == 'show')
        {
            $pmemory = '共' . $sysInfo['memTotal'] . 'M, 已使用' . $sysInfo['memUsed'] . 'M, 空闲' . $sysInfo['memFree'] . 'M, 使用率' . $sysInfo['memPercent'] . '%';
            $pmemorybar = $sysInfo['memPercent'];
            $swapmomory = '共' . $sysInfo['swapTotal'] . 'M, 已使用' . $sysInfo['swapUsed'] . 'M, 空闲' . $sysInfo['swapFree'] . 'M, 使用率' . $sysInfo['swapPercent'] . '%';
            $swapmemorybar = $sysInfo['swapPercent'];
            $syslaodavg = $sysInfo['loadAvg'];
        }
        $t	= $this->query("SELECT VERSION() AS dbversion");
//         $mysql = app_db::fetch_one();
        $mysql	= $t[0];
        $mysql = $mysql['dbversion'];
        $phpsafe = self::getcon("safe_mode");
        $dispalyerror = self::getcon("display_errors");
        $allowurlopen = self::getcon("allow_url_fopen");
        $registerglobal = self::getcon("register_globals");
        $maxpostsize = self::getcon("post_max_size");
        $maxupsize = self::getcon("upload_max_filesize");
        $maxexectime = self::getcon("max_execution_time") . 's';
        $mqqsp = get_magic_quotes_gpc() === 1 ? YES : NO;
        $mprsp = get_magic_quotes_runtime() === 1 ? YES : NO;
        $zendoptsp = (get_cfg_var("zend_optimizer.optimization_level") || get_cfg_var("zend_extension_manager.optimizer_ts") || get_cfg_var("zend_extension_ts")) ? YES : NO;
        $iconvsp = self::isfun('iconv');
        $curlsp = self::isfun('curl_init');
        $gdsp = self::isfun('gd_info');
        $zlibsp = self::isfun('gzclose');
        $eaccsp = self::isfun('eaccelerator_info');
        $xcachesp = extension_loaded('XCache') ? YES : NO;
        $sessionsp = self::isfun("session_start");
        $cookiesp = isset($_COOKIE) ? YES : NO;
//         $serverip = @gethostbyname($_SERVER['SERVER_NAME']);
//         $serverip = $serverip == '' ? '' : "  ($serverip)";
        $systime = gmdate("Y年n月j日 H:i:s", time() + 8 * 3600);
        $phpversionsp = $phpversion > '5.0' ? YES : NO;
        $mysqlversionsp = $mysql['dbversion'] > '4.1' ? YES : NO;
        $dbasp = extension_loaded('dba') ? YES : NO;
        // 数据库大小
        $databasesize = 0;
        $t	= $this->query("SHOW TABLE STATUS");
        foreach ($t as $rs)
        {
            $databasesize +=$rs['Data_length'] + $rs['Index_length'];
        }
        $databasesize = bytes_to_string($databasesize);


        //系统日志大小超过限制提示
        $data['noticemsg'] = '';
        if ( ($size=@filesize(APP_PATH . 'Runtime/logs/admin_log.php')) > 1024*1024*100)
        {
            $data['noticemsg'] = '后台记录日志超过预警大小（当前大小:'.bytes_to_string($size).'）';
        }
        if ( ($size=@filesize(APP_PATH . 'Runtime/logs/php_error.log')) > 1024*1024*100)
        {
            $data['noticemsg'] .= ' PHP错误日志超过预警大小（当前大小:'.bytes_to_string($size).'）';
        }
        if ( ($size=@filesize(APP_PATH . 'Runtime/logs/mysql_error.php')) > 1024*1024*100)
        {
            $data['noticemsg'] .= ' mysql日志超过预警大小（当前大小:'.bytes_to_string($size).'）';
        }

        $data['serverip'] = $serverip;
        $data['systime'] = $systime;
        $data['sysinfo'] = $sysinfo;
        $data['phpversion'] = $phpversion;
        $data['dbversion'] = $mysql;
        $data['dispalyerror'] = $dispalyerror;
        $data['serverapi'] = $serverapi;
        $data['phpsafe'] = $phpsafe;
        $data['sessionsp'] = $sessionsp;
        $data['cookiesp'] = $cookiesp;
        $data['phpsafe'] = $phpsafe;
        $data['zendoptsp'] = $zendoptsp;
        $data['eaccsp'] = $eaccsp;
        $data['xcachesp'] = $xcachesp;
        $data['registerglobal'] = $registerglobal;
        $data['mqqsp'] = $mqqsp;
        $data['mprsp'] = $mprsp;
        $data['maxupsize'] = $maxupsize;
        $data['maxpostsize'] = $maxpostsize;
        $data['maxexectime'] = $maxexectime;
        $data['allowurlopen'] = $allowurlopen;
        $data['curlsp'] = $curlsp;
        $data['iconvsp'] = $iconvsp;
        $data['zlibsp'] = $zlibsp;
        $data['gdsp'] = $gdsp;
        $data['dbasp'] = $dbasp;
        $data['datasize'] = $databasesize;
//         $data['sitesum'] = $sitesum;

        return $data;
    }
    public static function getcon($varName)
    {
    	switch ($res = get_cfg_var($varName))
    	{
    		case 0:
    			return NO;
    			break;
    		case 1:
    			return YES;
    			break;
    		default:
    			return $res;
    			break;
    	}
    }
    /**
     * 检测函数是否存在
     * @param <type> $funName
     * @return <type>
     */
    public static function isfun($funName)
    {
    	return (false !== function_exists($funName)) ? YES : NO;
    }
    /**
     *  linux 系统信息
     * @return <type>
     */
    public static function sys_linux()
    {
    	// CPU
    	if (false === ($str = @file("/proc/cpuinfo")))
    		return false;
    	$str = implode("", $str);
    	@preg_match_all("/model\s+name\s{0,}\:+\s{0,}([\w\s\)\(.@\.]+)[\r\n]+/", $str, $model);
    	//@preg_match_all("/cpu\s+MHz\s{0,}\:+\s{0,}([\d\.]+)[\r\n]+/", $str, $mhz);
    	@preg_match_all("/cache\s+size\s{0,}\:+\s{0,}([\d\.]+\s{0,}[A-Z]+[\r\n]+)/", $str, $cache);
    	if (false !== is_array($model[1]))
    	{
    		$res['cpu']['num'] = sizeof($model[1]);
    		for ($i = 0; $i < $res['cpu']['num']; $i++)
    		{
    		$res['cpu']['detail'][] = "类型：" . $model[1][$i] . " 缓存：" . $cache[1][$i];
    		}
    				if (false !== is_array($res['cpu']['detail']))
    			$res['cpu']['detail'] = implode("<br />", $res['cpu']['detail']);
    	}
    
    
    	// UPTIME
    	if (false === ($str = @file("/proc/uptime")))
    		return false;
    		$str = explode(" ", implode("", $str));
        $str = trim($str[0]);
            $min = $str / 60;
            $hours = $min / 60;
            $days = floor($hours / 24);
            $hours = floor($hours - ($days * 24));
            $min = floor($min - ($days * 60 * 24) - ($hours * 60));
            if ($days !== 0)
            	$res['uptime'] = $days . "天";
            	if ($hours !== 0)
            	$res['uptime'] .= $hours . "小时";
            			$res['uptime'] .= $min . "分钟";
    
            			// MEMORY
            					if (false === ($str = @file("/proc/meminfo")))
            					return false;
            					$str = implode("", $str);
            					preg_match_all("/MemTotal\s{0,}\:+\s{0,}([\d\.]+).+?MemFree\s{0,}\:+\s{0,}([\d\.]+).+?SwapTotal\s{0,}\:+\s{0,}([\d\.]+).+?SwapFree\s{0,}\:+\s{0,}([\d\.]+)/s", $str, $buf);
    
        $res['memTotal'] = round($buf[1][0] / 1024, 2);
            							$res['memFree'] = round($buf[2][0] / 1024, 2);
            							$res['memUsed'] = ($res['memTotal'] - $res['memFree']);
            							$res['memPercent'] = (floatval($res['memTotal']) != 0) ? round($res['memUsed'] / $res['memTotal'] * 100, 2) : 0;
    
            							$res['swapTotal'] = round($buf[3][0] / 1024, 2);
            							$res['swapFree'] = round($buf[4][0] / 1024, 2);
            									$res['swapUsed'] = ($res['swapTotal'] - $res['swapFree']);
        $res['swapPercent'] = (floatval($res['swapTotal']) != 0) ? round($res['swapUsed'] / $res['swapTotal'] * 100, 2) : 0;
    
            		// LOAD AVG
            		if (false === ($str = @file("/proc/loadavg")))
            		return false;
            		$str = explode(" ", implode("", $str));
            		$str = array_chunk($str, 3);
            		$res['loadAvg'] = implode(" ", $str[0]);
    
            		return $res;
    }
    
    // freebsd 系统信息
    public static function sys_freebsd()
    {
    //CPU
    if (false === ($res['cpu']['num'] = get_key("hw.ncpu")))
    return false;
    $res['cpu']['detail'] = get_key("hw.model");
    
    //LOAD AVG
    if (false === ($res['loadAvg'] = get_key("vm.loadavg")))
    return false;
    $res['loadAvg'] = str_replace("{", "", $res['loadAvg']);
    $res['loadAvg'] = str_replace("}", "", $res['loadAvg']);
    
    		//UPTIME
    		if (false === ($buf = get_key("kern.boottime")))
    		return false;
    		$buf = explode(' ', $buf);
    				$sys_ticks = time() - intval($buf[3]);
    				$min = $sys_ticks / 60;
    						$hours = $min / 60;
    						$days = floor($hours / 24);
    								$hours = floor($hours - ($days * 24));
    								$min = floor($min - ($days * 60 * 24) - ($hours * 60));
    								if ($days !== 0)
    									$res['uptime'] = $days . "天";
    									if ($hours !== 0)
    									$res['uptime'] .= $hours . "小时";
    									$res['uptime'] .= $min . "分钟";
    
    									//MEMORY
    									if (false === ($buf = get_key("hw.physmem")))
    									return false;
    											$res['memTotal'] = round($buf / 1024 / 1024, 2);
    											$buf = explode("\n", do_command("vmstat", ""));
    											$buf = explode(" ", trim($buf[2]));
    
    											$res['memFree'] = round($buf[5] / 1024, 2);
    											$res['memUsed'] = ($res['memTotal'] - $res['memFree']);
    											$res['memPercent'] = (floatval($res['memTotal']) != 0) ? round($res['memUsed'] / $res['memTotal'] * 100, 2) : 0;
    
    											$buf = explode("\n", do_command("swapinfo", "-k"));
    											$buf = $buf[1];
    											preg_match_all("/([0-9]+)\s+([0-9]+)\s+([0-9]+)/", $buf, $bufArr);
    											$res['swapTotal'] = round($bufArr[1][0] / 1024, 2);
    											$res['swapUsed'] = round($bufArr[2][0] / 1024, 2);
    											$res['swapFree'] = round($bufArr[3][0] / 1024, 2);
    											$res['swapPercent'] = (floatval($res['swapTotal']) != 0) ? round($res['swapUsed'] / $res['swapTotal'] * 100, 2) : 0;
    
    
    											return $res;
      }
      /**
       * 跳转方法(独立与login模块)
       * @param <type> $message
       * @param <type> $url
       * @param <type> $timeout     默认:2秒跳转
       * @param <type> $stop_loop   1:停止跳走,   默认0:自动跳转
       */
      public function message($message, $url = null, $timeout = 2, $stop_loop=0)
      {
      	if ($url == null)
      	{
      		$url = $_SERVER['HTTP_REFERER'];
      	}
      	$ac	= new LoginAction();
      	$ac->assign('stop_loop', $stop_loop);
      	$ac->assign('url_page', $url);
      	$ac->assign('message', $message);
      	$ac->assign('timeout', $timeout);
      	$ac->display('Login/message');
      	exit();
      }
}
?>
