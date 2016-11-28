<?php


define("APP_DEBUG", true);
define('APP_NAME','wwwroot');
define('APP_PATH','./uducy_admin/');
define("PUBLIC_LIB", realpath('./lib/'));
$alowed=array('test','ajax','feedback','Feedback');
$get_s	= trim($_GET['s']);
if(!empty($get_s) && !in_array($get_s, $alowed)){
	header("Location: /");
	die;
}
if(function_exists('saeAutoLoader')){
	define("SmartyCompile", 'saemc://smartytpl/');
	define("SmartyCatch", 'saemc://smartytpl/');
	define("SmartyLock", false);
}else{
	define("SmartyCompile", APP_PATH.'Runtime/Temp/');
	define("SmartyCatch", APP_PATH.'Runtime/Cache/');
	define("SmartyLock", true);
}
// require PUBLIC_LIB.'/ThinkPHP/ThinkPHP.php';
require PUBLIC_LIB.'/ThinkPHP/Extend/Engine/Sae.php';