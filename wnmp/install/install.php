<?php
// 系统版本
$wnmp_version = "1.0";

// 系统路径
$wnmp_dir = rtrim(dirname(dirname(__FILE__)), "\\")."\\";
// 路径必须带\结尾区别文件
$wnmp_conf_dir = $wnmp_dir."conf\\";
$wnmp_install_dir = $wnmp_dir."install\\";

// 判断是否已经安装过
$wnmp_install_lock = $wnmp_install_dir."install.lock";
if(is_file($wnmp_install_lock)){
	echo "系统已经安装过，如需重新安装请删除\"{$wnmp_install_lock}\"！";
	exit;
}

// MYSQL
$wnmp_my_ini = $wnmp_conf_dir.'my.ini';
$wnmp_my_example_ini = $wnmp_conf_dir.'my_example.ini';

// PHP
$wnmp_php_ini = $wnmp_conf_dir.'php.ini';
$wnmp_php_example_ini = $wnmp_conf_dir.'php_example.ini';

// NGINX
$wnmp_nginx_conf = $wnmp_conf_dir.'nginx.conf';
$wnmp_nginx_example_conf = $wnmp_conf_dir.'nginx_example.conf';

// 配置MYSQL
$wnmp_my_ini_content = file_get_contents($wnmp_my_example_ini);
$wnmp_my_ini_content = str_replace("/wnmp/", $wnmp_dir, $wnmp_my_ini_content);
$wnmp_my_ini_content = str_replace("\\", "/", $wnmp_my_ini_content);
if(false === file_put_contents($wnmp_my_ini, $wnmp_my_ini_content)){
    echo "安装mysql失败\n";
}else{
    echo "安装mysql成功\n";
}

// 配置PHP
$wnmp_php_ini_content = file_get_contents($wnmp_php_example_ini);
$wnmp_php_ini_content = str_replace("\\wnmp\\", $wnmp_dir, $wnmp_php_ini_content);
if(false === file_put_contents($wnmp_php_ini, $wnmp_php_ini_content)){
    echo "安装php-cgi失败\n";
}else{
    echo "安装php-cgi成功\n";
}

// 配置NGINX
$wnmp_nginx_conf_content = file_get_contents($wnmp_nginx_example_conf);
$wnmp_nginx_conf_content = str_replace("/wnmp/", str_replace("\\", "/", $wnmp_dir), $wnmp_nginx_conf_content);
if(false === file_put_contents($wnmp_nginx_conf, $wnmp_nginx_conf_content)){
    echo "安装nginx失败\n";
}else{
    echo "安装nginx成功\n";
}

// 加锁
touch($wnmp_install_lock);
exit;