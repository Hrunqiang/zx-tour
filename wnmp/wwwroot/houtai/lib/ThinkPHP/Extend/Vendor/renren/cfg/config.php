<?php
header ( 'Content-Type: text/html; charset=UTF-8' );

// 调试模式开关
define ( 'DEBUG_MODE', false );

if (! function_exists ( 'curl_init' )) {
	echo '您的服务器不支持 PHP 的 Curl 模块，请安装或与服务器管理员联系。';
	exit ();
}

// App Key
define ( "APP_KEY", '0d62dc44672a46c69136cf65b4cdbc11' );
// App Secret
define ( "APP_SECRET", 'cb987e162fa745d3a6d41933df9b34c8' );
// 应用回调页地址
define ( "CALLBACK_URL", "http://ad.uducy.com/ThirdLogin/renrenCallback/" );

if (DEBUG_MODE) {
	error_reporting ( E_ALL );
	ini_set ( 'display_errors', true );
}
