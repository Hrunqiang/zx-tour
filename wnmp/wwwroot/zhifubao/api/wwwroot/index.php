<?php
/***
 * 广告 接口 入口文件
 * 
 */
//线上环境请注意关闭APP_DEBUG为true
// die(md5('53675191'));
define("APP_DEBUG", true);
define('APP_NAME','app');
define('APP_PATH','../app/');
define('MODE_NAME', 'rest');
define("PUBLIC_LIB", realpath('../../lib/'));
define('WWWROOT',dirname(dirname(__FILE__))."/wwwroot/");
if(function_exists('saeAutoLoader')){
	define("SmartyCompile", 'saemc://smartytpl/');
	define("SmartyCatch", 'saemc://smartytpl/');
	define("SmartyLock", false);
}else{
	define("SmartyCompile", APP_PATH.'Runtime/Temp/');
	define("SmartyCatch", APP_PATH.'Runtime/Cache/');
	define("SmartyLock", true);
}
require PUBLIC_LIB.'/ThinkPHP/ThinkPHP.php';
// require PUBLIC_LIB.'/ThinkPHP/Extend/Engine/Sae.php';
?>
