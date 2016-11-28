<?php
/***
 * gamecenter 接口 入口文件
 * 
 */

//线上环境请注意关闭APP_DEBUG为true
define("APP_DEBUG", false);
define('APP_NAME','app');
define('APP_PATH',dirname(dirname(__FILE__))."/app/");
define('MODE_NAME', 'cli');
// define('CRONTAB', 'cli');
define("PUBLIC_LIB", dirname(dirname(dirname(__FILE__))).('/lib/'));
require PUBLIC_LIB.'/ThinkPHP/ThinkPHP.php';
//  var_dump(APP_PATH);die;
// require PUBLIC_LIB.'/ThinkPHP/Extend/Engine/Sae.php';
?>
