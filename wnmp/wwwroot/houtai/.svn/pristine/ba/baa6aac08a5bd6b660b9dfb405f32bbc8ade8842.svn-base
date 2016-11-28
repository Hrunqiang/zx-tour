<?php
return array(
	/*数据库相关配置*/
	//数据库配置1
	'DB_CONFIG1' => array(
			'db_type'  => 'mysql',
			'db_user'  => 'root',
			'db_pwd'   => '123456',
			'db_host'  => '192.168.10.202',
			'db_port'  => '3306',
			'db_name'  => 'at_321'
	),
	//数据库配置mongo
	'DB_CONFIG2' =>array(
			'db_type'  => 'mongo',
			'db_user'  => 'ws4_0',
			'db_pwd'   => '5367519',
			'db_host'  => '192.168.10.200',
// 			'db_host'  => '127.0.0.1',
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
	'REDIS_HOST'	=> '192.168.10.202',
	'REDIS_POST'	=> '6379',
	'SPHINX_INDEX'=>'sdk_num_data',
	'SPHINX_HOST'=>'192.168.10.200',
	'SPHINX_PORT'=>'9312',
	'QUEUE_HOST'=>"127.0.0.1",
	'QUEUE_PORT'=>"22202",
	'MEMCACHE2_HOST'=>"127.0.0.1",
	'MEMCACHE2_PORT'=>"11888",
// 	'DB_TYPE'   => 'mongo', 	// 数据库类型
// 	'DB_HOST'   => '127.0.0.1', // 服务器地址
// 	'DB_NAME'   => 'ws4_0', 		// 数据库名
// 	'DB_USER'   => '', 		// 用户名
// 	'DB_PWD'    => '', 	// 密码
// 	'DB_PORT'   => 28018, 		// 端口
// 	'DB_PREFIX' => '', 			// 数据库表前缀
// 	'DB_CHARSET'=> 'utf-8',
	'URL_MODEL'	=>1,
	/*缓存相关*/
	'DB_CACHE'         => true,//cache开关
	'DATA_CACHE_TYPE'  => "Memcache",
	'MEMCACHE_HOST'    => '127.0.0.1',
	'MEMCACHE_PORT'    => '11211',
	'DATA_CACHE_PREFIX'=> 'api',
	'DATA_CACHE_TIME'  => 10,
	'DB_SQL_BUILD_CACHE'  => true,//SQL解析缓存
	'DB_SQL_BUILD_LENGTH'  => 20,//SQL缓存的队列长度
	'Catche_Method'			=>array(
				'_lc2_nthistory'
			),
	'NoTimesMethod'=>array(
				'_gamev1_getconbyid'
			),
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
	/*路由相关配置*/
	'URL_ROUTER_ON'   => true,//开启路由
    'URL_ROUTE_RULES' => array( //定义路由规则
//         array('apps/v1/lc2/getmainid','Lc2/getmainid','','get','json,'),
//         array('apps/v1/lc2/adduser','Lc2/adduser','','get','json,'),
        array('/^ws\/([^\/]+)\/([^\/]+)/i','Ws:1/:2','','get'),
        array('/^ws\/([^\/]+)\/([^\/]+)/i','Ws:1/:2','','post'),
    	array('/^tx\/([^\/]+)\/([^\/]+)/i','Tx:1/:2','','get'),
    	array('/^tx\/([^\/]+)\/([^\/]+)/i','Tx:1/:2','','post'),
    	array('/^eg\/([^\/]+)\/([^\/]+)/i','Elog:1/:2','','get'),
    	array('/^eg\/([^\/]+)\/([^\/]+)/i','Elog:1/:2','','post'),
    	array('/^ios\/([^\/]+)\/([^\/]+)/i','Ios:1/:2','','get'),
    	array('/^ios\/([^\/]+)\/([^\/]+)/i','Ios:1/:2','','post'),
    	array('/^igame\/([^\/]+)\/([^\/]+)/i','Igame:1/:2','','get'),
    	array('/^igame\/([^\/]+)\/([^\/]+)/i','Igame:1/:2','','post'),
    	array('/^ibro\/([^\/]+)\/([^\/]+)/i','Ibro:1/:2','','get'),
    	array('/^ibro\/([^\/]+)\/([^\/]+)/i','Ibro:1/:2','','post'),
    	array('/^adks\/([^\/]+)\/([^\/]+)/i','AdKs:1/:2','','get'),
    	array('/^adks\/([^\/]+)\/([^\/]+)/i','AdKs:1/:2','','post'),
    	array('/^IosSdk\/([^\/]+)\/([^\/]+)/i','IosSdk:1/:2','','get'),
    	array('/^IosSdk\/([^\/]+)\/([^\/]+)/i','IosSdk:1/:2','','post'),
    	array('/^ibropro\/([^\/]+)\/([^\/]+)/i','IbroPro:1/:2','','get'),
    	array('/^ibropro\/([^\/]+)\/([^\/]+)/i','IbroPro:1/:2','','post'),
    ), 
	'PASSWORDS'	=> array(
				'/ws/v1'=>array(
						'des'=>'0Myt1a$@',
						'md5'=>'29@&Mlfb',
						'mtable'=>'logs'
						),
				'/tx/v1'=>array(
						'des'=>'0Myt1a$@',
						'md5'=>'29@&Mlfb',
						'mtable'=>'logs'
						),
				'/eg/v1'=>array(
						'des'=>'0Myt1a$@',
						'md5'=>'29@&Mlfb',
						'mtable'=>'logs'
				),
				'/ios/v1'=>array(
						'des'=>'0Myt1a$@',
						'md5'=>'29@&Mlfb',
						'mtable'=>'ioslogs'
				),
				'/igame/v1'=>array(
						'des'=>'0Myt1a$@',
						'md5'=>'29@&Mlfb',
						'mtable'=>'igamelogs',
						'isverify'=>false
				),
				'/ibro/v1'=>array(
					'des'=>'0Myt1a$@',
					'md5'=>'29@&Mlfb',
					'mtable'=>'ibrologs',
					'isverify'=>false
				),
				'/ibropro/v1'=>array(
						'des'=>'Prot1a$@',
						'md5'=>'39@&Mlfb',
						'mtable'=>'ibroprologs',
						'isverify'=>false
				),
			),
	/*其它相关配置*/
	'URL_CASE_INSENSITIVE'	=>true,//忽略大小写
	'ALLOWDFIX'	=>array("jpg","png","ico","apk","gif"),
	'ClientPassword_v1'		=>'0Myt1a$@',
	'Md5Sign'				=>'29@&Mlfb',
	'SALT'					=>"IE&mwt%#(/",//加盐
	'SavePicPath'			=>"/data/zhennan/thinkphptest/api/wwwroot",//图片路径
	'IsLocalHost'=>true,  //标识为内网使用
	'MwtLog'	=>true,  //标识是否开口mwtlog测试
	'ALOWED_IMEI'=>array(
			'354096052178944'
			),
	'Filter_IP'=>array(
				'192.168.10.2'
		),
		'Notalowed'	=> array('4.0.5.0147','4.0.5.6380'),
		'Allowed_ac'	=> array(
				'/ws/v1/netinstall',
				'/ws/v1/corperationactive',
				'/ws/v1/updateclient',
				'/ws/v1/feedback',
				'/ws/v1/getpushmsg'
				)
);
?>