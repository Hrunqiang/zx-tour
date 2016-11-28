<?php
// ϵͳ�汾
$wnmp_version = "1.0";

// ϵͳ·��
$wnmp_dir = rtrim(dirname(dirname(__FILE__)), "\\")."\\";
// ·�������\��β�����ļ�
$wnmp_conf_dir = $wnmp_dir."conf\\";
$wnmp_install_dir = $wnmp_dir."install\\";

// �ж��Ƿ��Ѿ���װ��
$wnmp_install_lock = $wnmp_install_dir."install.lock";
if(is_file($wnmp_install_lock)){
	echo "ϵͳ�Ѿ���װ�����������°�װ��ɾ��\"{$wnmp_install_lock}\"��";
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

// ����MYSQL
$wnmp_my_ini_content = file_get_contents($wnmp_my_example_ini);
$wnmp_my_ini_content = str_replace("/wnmp/", $wnmp_dir, $wnmp_my_ini_content);
$wnmp_my_ini_content = str_replace("\\", "/", $wnmp_my_ini_content);
if(false === file_put_contents($wnmp_my_ini, $wnmp_my_ini_content)){
    echo "��װmysqlʧ��\n";
}else{
    echo "��װmysql�ɹ�\n";
}

// ����PHP
$wnmp_php_ini_content = file_get_contents($wnmp_php_example_ini);
$wnmp_php_ini_content = str_replace("\\wnmp\\", $wnmp_dir, $wnmp_php_ini_content);
if(false === file_put_contents($wnmp_php_ini, $wnmp_php_ini_content)){
    echo "��װphp-cgiʧ��\n";
}else{
    echo "��װphp-cgi�ɹ�\n";
}

// ����NGINX
$wnmp_nginx_conf_content = file_get_contents($wnmp_nginx_example_conf);
$wnmp_nginx_conf_content = str_replace("/wnmp/", str_replace("\\", "/", $wnmp_dir), $wnmp_nginx_conf_content);
if(false === file_put_contents($wnmp_nginx_conf, $wnmp_nginx_conf_content)){
    echo "��װnginxʧ��\n";
}else{
    echo "��װnginx�ɹ�\n";
}

// ����
touch($wnmp_install_lock);
exit;