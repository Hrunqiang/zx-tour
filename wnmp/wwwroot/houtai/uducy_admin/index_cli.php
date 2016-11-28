<?php
/***
 * crontab 入口文件
 * 
 */
//线上环境请注意关闭APP_DEBUG为true
define("APP_DEBUG", true);
define('APP_NAME','uducy_admin');
define('APP_PATH',dirname(dirname(__FILE__))."/uducy_admin/");
define('WWWROOT',dirname(dirname(__FILE__))."/wwwroot/");
define('API_PATH',dirname(dirname(__FILE__))."/api/");
define('MODE_NAME', 'cli');
define("PUBLIC_LIB", dirname(dirname(__FILE__)).('/lib/'));
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
