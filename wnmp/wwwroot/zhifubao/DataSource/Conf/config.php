<?php
return array(
	'URL_MODEL'     =>0,
	'IS_PRO'   => false, 	// 是否正式环境
	/*数据库相关配置*/
	'DB_TYPE'   => 'mysql', 	// 数据库类型
	'DB_HOST'   => 'localhost', // 服务器地址
	'DB_NAME'   => 'dh_at321', 		// 数据库名
	'DB_USER'   => 'root', 		// 用户名
	'DB_PWD'    => '', 	// 密码
	'DB_PORT'   => 3306, 		// 端口
	'DB_PREFIX' => 'm', 			// 数据库表前缀
	'DB_CHARSET'=> 'utf8',
	//数据库配置1
	'DB_CONFIG1' => array(
			'db_type'  => 'mysql',
			'db_user'  => 'root',
			'db_pwd'   => '',
			'db_host'  => 'localhost',
			'db_port'  => '3306',
			'db_name'  => 'zxtour'
	),
	//数据库配置mongo
	'DB_CONFIG2' =>array(
			'db_type'  => 'mongo',
			'db_user'  => 'ws4_0',
			'db_pwd'   => '5367519',
			'db_host'  => 'localhost',
			'db_port'  => '28018',
			'db_name'  => 'ws4_0'
	),
	//数据库配置sqlserver
	'DB_CONFIG3' =>array(
			'db_type'  => 'mssql',
			'db_user'  => 'sa',
			'db_pwd'   => 'at321',
			'db_host'  => '192.168.10.236',
			'db_port'  => '1433',
			'db_name'  => 'at321v21'
	),
    /*redis*/
    'REDIS_HOST'=>"127.0.0.1",
    'REDIS_PORT'=>"6379",
	
	/*sphinx 服务配置*/
    'SPHINX_HOST' =>'127.0.0.1',
    'SPHINX_PORT' =>'9312',
    'SPHINX_INDEX'=>'mysql',
	/*缓存相关*/
	'DB_CACHE'         => false,//cache开关
	'DATA_CACHE_TYPE'  => "Memcache",
	'MEMCACHE_HOST'    => '127.0.0.1',
	'MEMCACHE_PORT'    => '11211',
	'MEMCACHE_API_HOST'=>"192.168.5.81",
	'MEMCACHE_API_PORT'=>"11888",
	/*其它相关配置*/
	'URL_CASE_INSENSITIVE'	=>true,//忽略大小写
	'TMPL_ENGINE_TYPE' =>'Smarty',
	'TMPL_ENGINE_CONFIG' => array(
				'debugging'=>false,
				//    'error_reporting'=>'',
				//    'exception_handler'=>array('ExceptionClass','ExceptionMethod'),
				'template_dir' 	=> APP_PATH.'Tpl/',  //模板目录
				'compile_dir' 	=>SmartyCompile,//编译目录
				'cache_dir' 	=>SmartyCatch,  //缓存目录
				'caching' 		=> false,  //是否启用缓存
				'compile_locking'	=> SmartyLock,//防止调用touch,saemc会自动更新时间，不需要touch
				'cache_lifetime' =>1,//缓存时间s
				'left_delimiter'=>'<{',
				'right_delimiter' =>'}>',
		),
	'USER_SALT' =>'4%&&*',
// 	'TMPL_TEMPLATE_SUFFIX'=>'.tpl',
);
?>