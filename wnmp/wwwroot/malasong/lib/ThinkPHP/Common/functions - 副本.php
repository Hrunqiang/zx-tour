<?php 
/**
 * 加载动态扩展文件
 * @return void
 */
function load_ext_file() {
    // 加载自定义外部文件
    if(C('LOAD_EXT_FILE')) {
        $files      =  explode(',',C('LOAD_EXT_FILE'));
        foreach ($files as $file){
            $file   = COMMON_PATH.$file.'.php';
            if(is_file($file)) include $file;
        }
    }
    // 加载自定义的动态配置文件
    if(C('LOAD_EXT_CONFIG')) {
        $configs    =  C('LOAD_EXT_CONFIG');
        if(is_string($configs)) $configs =  explode(',',$configs);
        foreach ($configs as $key=>$config){
            $file   = CONF_PATH.$config.'.php';
            if(is_file($file)) {
                is_numeric($key)?C(include $file):C($key,include $file);
            }
        }
    }
}
/**
 * session管理函数
 * @param string|array $name session名称 如果为数组则表示进行session设置
 * @param mixed $value session值
 * @return mixed
 */
function session($name,$value='') {
	$prefix   =  C('SESSION_PREFIX');
	if(is_array($name)) { // session初始化 在session_start 之前调用
		if(isset($name['prefix'])) C('SESSION_PREFIX',$name['prefix']);
		if(C('VAR_SESSION_ID') && isset($_REQUEST[C('VAR_SESSION_ID')])){
			session_id($_REQUEST[C('VAR_SESSION_ID')]);
		}elseif(isset($name['id'])) {
			session_id($name['id']);
		}
		ini_set('session.auto_start', 0);
		if(isset($name['name']))            session_name($name['name']);
		if(isset($name['path']))            session_save_path($name['path']);
		if(isset($name['domain']))          ini_set('session.cookie_domain', $name['domain']);
		if(isset($name['expire']))          ini_set('session.gc_maxlifetime', $name['expire']);
		if(isset($name['use_trans_sid']))   ini_set('session.use_trans_sid', $name['use_trans_sid']?1:0);
		if(isset($name['use_cookies']))     ini_set('session.use_cookies', $name['use_cookies']?1:0);
		if(isset($name['cache_limiter']))   session_cache_limiter($name['cache_limiter']);
		if(isset($name['cache_expire']))    session_cache_expire($name['cache_expire']);
		if(isset($name['type']))            C('SESSION_TYPE',$name['type']);
		if(C('SESSION_TYPE')) { // 读取session驱动
			$class      = 'Session'. ucwords(strtolower(C('SESSION_TYPE')));
			// 检查驱动类
			if(require_cache(EXTEND_PATH.'Driver/Session/'.$class.'.class.php')) {
				$hander = new $class();
				$hander->execute();
			}else {
				// 类没有定义
				throw_exception(L('_CLASS_NOT_EXIST_').': ' . $class);
			}
		}
		// 启动session
		if(C('SESSION_AUTO_START'))  session_start();
	}elseif('' === $value){
		if(0===strpos($name,'[')) { // session 操作
			if('[pause]'==$name){ // 暂停session
				session_write_close();
			}elseif('[start]'==$name){ // 启动session
				session_start();
			}elseif('[destroy]'==$name){ // 销毁session
				$_SESSION =  array();
				session_unset();
				session_destroy();
			}elseif('[regenerate]'==$name){ // 重新生成id
				session_regenerate_id();
			}
		}elseif(0===strpos($name,'?')){ // 检查session
			$name   =  substr($name,1);
			if(strpos($name,'.')){ // 支持数组
				list($name1,$name2) =   explode('.',$name);
				return $prefix?isset($_SESSION[$prefix][$name1][$name2]):isset($_SESSION[$name1][$name2]);
			}else{
				return $prefix?isset($_SESSION[$prefix][$name]):isset($_SESSION[$name]);
			}
		}elseif(is_null($name)){ // 清空session
			if($prefix) {
				unset($_SESSION[$prefix]);
			}else{
				$_SESSION = array();
			}
		}elseif($prefix){ // 获取session
			if(strpos($name,'.')){
				list($name1,$name2) =   explode('.',$name);
				return isset($_SESSION[$prefix][$name1][$name2])?$_SESSION[$prefix][$name1][$name2]:null;
			}else{
				return isset($_SESSION[$prefix][$name])?$_SESSION[$prefix][$name]:null;
			}
		}else{
			if(strpos($name,'.')){
				list($name1,$name2) =   explode('.',$name);
				return isset($_SESSION[$name1][$name2])?$_SESSION[$name1][$name2]:null;
			}else{
				return isset($_SESSION[$name])?$_SESSION[$name]:null;
			}
		}
	}elseif(is_null($value)){ // 删除session
		if($prefix){
			unset($_SESSION[$prefix][$name]);
		}else{
			unset($_SESSION[$name]);
		}
	}else{ // 设置session
		if($prefix){
			if (!is_array($_SESSION[$prefix])) {
				$_SESSION[$prefix] = array();
			}
			$_SESSION[$prefix][$name]   =  $value;
		}else{
			$_SESSION[$name]  =  $value;
		}
	}
}

/**
 * Cookie 设置、获取、删除
 * @param string $name cookie名称
 * @param mixed $value cookie值
 * @param mixed $options cookie参数
 * @return mixed
 */
function cookie($name, $value='', $option=null) {
	// 默认设置
	$config = array(
			'prefix'    =>  C('COOKIE_PREFIX'), // cookie 名称前缀
			'expire'    =>  C('COOKIE_EXPIRE'), // cookie 保存时间
			'path'      =>  C('COOKIE_PATH'), // cookie 保存路径
			'domain'    =>  C('COOKIE_DOMAIN'), // cookie 有效域名
	);
	// 参数设置(会覆盖黙认设置)
	if (!is_null($option)) {
		if (is_numeric($option))
			$option = array('expire' => $option);
		elseif (is_string($option))
		parse_str($option, $option);
		$config     = array_merge($config, array_change_key_case($option));
	}
	// 清除指定前缀的所有cookie
	if (is_null($name)) {
		if (empty($_COOKIE))
			return;
		// 要删除的cookie前缀，不指定则删除config设置的指定前缀
		$prefix = empty($value) ? $config['prefix'] : $value;
		if (!empty($prefix)) {// 如果前缀为空字符串将不作处理直接返回
			foreach ($_COOKIE as $key => $val) {
				if (0 === stripos($key, $prefix)) {
					setcookie($key, '', time() - 3600, $config['path'], $config['domain']);
					unset($_COOKIE[$key]);
				}
			}
		}
		return;
	}
	$name = $config['prefix'] . $name;
	if ('' === $value) {
		if(isset($_COOKIE[$name])){
			$value =    $_COOKIE[$name];
			if(0===strpos($value,'think:')){
				$value  =   substr($value,6);
				return array_map('urldecode',json_decode(MAGIC_QUOTES_GPC?stripslashes($value):$value,true));
			}else{
				return $value;
			}
		}else{
			return null;
		}
	} else {
		if (is_null($value)) {
			setcookie($name, '', time() - 3600, $config['path'], $config['domain']);
			unset($_COOKIE[$name]); // 删除指定cookie
		} else {
			// 设置cookie
			if(is_array($value)){
				$value  = 'think:'.json_encode(array_map('urlencode',$value));
			}
			$expire = !empty($config['expire']) ? time() + intval($config['expire']) : 0;
			setcookie($name, $value, $expire, $config['path'], $config['domain']);
			$_COOKIE[$name] = $value;
		}
	}
}
/**
 * 取得对象实例 支持调用类的静态方法
 * @param string $name 类名
 * @param string $method 方法名，如果为空则返回实例化对象
 * @param array $args 调用参数
 * @return object
 */
function get_instance_of($name, $method='', $args=array()) {
	static $_instance = array();
	$identify = empty($args) ? $name . $method : $name . $method . to_guid_string($args);
	if (!isset($_instance[$identify])) {
		if (class_exists($name)) {
			$o = new $name();
			if (method_exists($o, $method)) {
				if (!empty($args)) {
					$_instance[$identify] = call_user_func_array(array(&$o, $method), $args);
				} else {
					$_instance[$identify] = $o->$method();
				}
			}
			else
				$_instance[$identify] = $o;
		}
		else
			halt(L('_CLASS_NOT_EXIST_') . ':' . $name);
	}
	return $_instance[$identify];
}


/**
 * 根据PHP各种类型变量生成唯一标识号
 * @param mixed $mix 变量
 * @return string
 */
function to_guid_string($mix) {
	if (is_object($mix) && function_exists('spl_object_hash')) {
		return spl_object_hash($mix);
	} elseif (is_resource($mix)) {
		$mix = get_resource_type($mix) . strval($mix);
	} else {
		$mix = serialize($mix);
	}
	return md5($mix);
}

/**
 * 获取客户端IP地址
 * @param integer $type 返回类型 0 返回IP地址 1 返回IPV4地址数字
 * @return mixed
 */
function get_client_ip($type = 0) {
	$type       =  $type ? 1 : 0;
	static $ip  =   NULL;
	if ($ip !== NULL) return $ip[$type];
	if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$arr    =   explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
		$pos    =   array_search('unknown',$arr);
		if(false !== $pos) unset($arr[$pos]);
		$ip     =   trim($arr[0]);
	}elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
		$ip     =   $_SERVER['HTTP_CLIENT_IP'];
	}elseif (isset($_SERVER['REMOTE_ADDR'])) {
		$ip     =   $_SERVER['REMOTE_ADDR'];
	}
	// IP地址合法验证
	$long = sprintf("%u",ip2long($ip));
	$ip   = $long ? array($ip, $long) : array('0.0.0.0', 0);
	return $ip[$type];
}
/**
 * 自定义异常处理
 * @param string $msg 异常消息
 * @param string $type 异常类型 默认为ThinkException
 * @param integer $code 异常代码 默认为0
 * @return void
 */
function throw_exception($msg, $type='ThinkException', $code=0) {
	if (class_exists($type, false))
		throw new $type($msg, $code);
	else
		halt($msg);        // 异常类型不存在则输出错误信息字串
}

/**
 * 错误输出
 * @param mixed $error 错误
 * @return void
 */
function halt($error) {
	$e = array();
	if (APP_DEBUG) {
		//调试模式下输出错误信息
		if (!is_array($error)) {
			$trace          = debug_backtrace();
			$e['message']   = $error;
			$e['file']      = $trace[0]['file'];
			$e['line']      = $trace[0]['line'];
			ob_start();
			debug_print_backtrace();
			$e['trace']     = ob_get_clean();
		} else {
			$e              = $error;
		}
	} else {
		//否则定向到错误页面
		$error_page         = C('ERROR_PAGE');
		if (!empty($error_page)) {
			redirect($error_page);
		} else {
			if (C('SHOW_ERROR_MSG'))
				$e['message'] = is_array($error) ? $error['message'] : $error;
			else
				$e['message'] = C('ERROR_MESSAGE');
		}
	}
	// 包含异常页面模板
	include C('TMPL_EXCEPTION_FILE');
	exit;
}
/**
 * 404处理
 * 调试模式会抛异常
 * 部署模式下面传入url参数可以指定跳转页面，否则发送404信息
 * @param string $msg 提示信息
 * @param string $url 跳转URL地址
 * @return void
 */
function _404($msg='',$url='') {
	APP_DEBUG && throw_exception($msg);
	if($msg && C('LOG_EXCEPTION_RECORD')) Log::write($msg);
	if(empty($url) && C('URL_404_REDIRECT')) {
		$url    =   C('URL_404_REDIRECT');
	}
	if($url) {
		redirect($url);
	}else{
		send_http_status(404);
		exit;
	}
}
/**
 * 发送HTTP状态
 * @param integer $code 状态码
 * @return void
 */
function send_http_status($code) {
	static $_status = array(
			// Informational 1xx
			100 => 'Continue',
			101 => 'Switching Protocols',
			// Success 2xx
			200 => 'OK',
			201 => 'Created',
			202 => 'Accepted',
			203 => 'Non-Authoritative Information',
			204 => 'No Content',
			205 => 'Reset Content',
			206 => 'Partial Content',
			// Redirection 3xx
			300 => 'Multiple Choices',
			301 => 'Moved Permanently',
			302 => 'Moved Temporarily ', // 1.1
			303 => 'See Other',
			304 => 'Not Modified',
			305 => 'Use Proxy',
			// 306 is deprecated but reserved
			307 => 'Temporary Redirect',
			// Client Error 4xx
			400 => 'Bad Request',
			401 => 'Unauthorized',
			402 => 'Payment Required',
			403 => 'Forbidden',
			404 => 'Not Found',
			405 => 'Method Not Allowed',
			406 => 'Not Acceptable',
			407 => 'Proxy Authentication Required',
			408 => 'Request Timeout',
			409 => 'Conflict',
			410 => 'Gone',
			411 => 'Length Required',
			412 => 'Precondition Failed',
			413 => 'Request Entity Too Large',
			414 => 'Request-URI Too Long',
			415 => 'Unsupported Media Type',
			416 => 'Requested Range Not Satisfiable',
			417 => 'Expectation Failed',
			// Server Error 5xx
			500 => 'Internal Server Error',
			501 => 'Not Implemented',
			502 => 'Bad Gateway',
			503 => 'Service Unavailable',
			504 => 'Gateway Timeout',
			505 => 'HTTP Version Not Supported',
			509 => 'Bandwidth Limit Exceeded'
	);
	if(isset($_status[$code])) {
		header('HTTP/1.1 '.$code.' '.$_status[$code]);
		// 确保FastCGI模式下正常
		header('Status:'.$code.' '.$_status[$code]);
	}
}
/**
 * URL重定向
 * @param string $url 重定向的URL地址
 * @param integer $time 重定向的等待时间（秒）
 * @param string $msg 重定向前的提示信息
 * @return void
 */
function redirect($url, $time=0, $msg='') {
	//多行URL地址支持
	$url        = str_replace(array("\n", "\r"), '', $url);
	if (empty($msg))
		$msg    = "系统将在{$time}秒之后自动跳转到{$url}！";
	if (!headers_sent()) {
		// redirect
		if (0 === $time) {
			header('Location: ' . $url);
		} else {
			header("refresh:{$time};url={$url}");
			echo($msg);
		}
		exit();
	} else {
		$str    = "<meta http-equiv='Refresh' content='{$time};URL={$url}'>";
		if ($time != 0)
			$str .= $msg;
		exit($str);
	}
}
?>