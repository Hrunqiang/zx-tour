<?php
/***
 * backs 入口文件
*
*/
//线上环境请注意关闭APP_DEBUG为true
// var_dump($_SERVER);die;
define("APP_DEBUG", true);
define('APP_NAME','wwwroot');
define('APP_PATH','../DataSource/');
define("PUBLIC_LIB", realpath('../lib/'));

define("SmartyCompile", APP_PATH.'Runtime/Temp/');
define("SmartyCatch", APP_PATH.'Runtime/Cache/');
define("SmartyLock", true);
require PUBLIC_LIB.'/ThinkPHP/ThinkPHP.php';

?>