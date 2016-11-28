<?php
return array(
	'URL_MODEL'     =>0,
	'IS_PRO'   => false, 	// 是否正式环境
	/*数据库相关配置*/
	'DB_TYPE'   => 'mysql', 	// 数据库类型
	'DB_HOST'   => 'localhost', // 服务器地址
	'DB_NAME'   => 'dh_at321', 		// 数据库名
	'DB_USER'   => 'root', 		// 用户名
	'DB_PWD'    => '123456', 	// 密码
	'DB_PORT'   => 3306, 		// 端口
	'DB_PREFIX' => 'm', 			// 数据库表前缀
	'DB_CHARSET'=> 'utf-8',
	//数据库配置1
	'DB_CONFIG1' => array(
			'db_type'  => 'mysql',
			'db_user'  => 'root',
			'db_pwd'   => '123456',
			'db_host'  => 'localhost',
			'db_port'  => '3306',
			'db_name'  => 'dh_at321'
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
	/*memc队列*/
	'QUEUE_HOST'=>"127.0.0.1",
	'QUEUE_PORT'=>"22202",
	
	/*sphinx 服务配置*/
	'SPHINX_HOST' =>'10.33.20.22',
	'SPHINX_PORT' =>'9322',
	'SPHINX_INDEX'=>'wdog_index',
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
	'TMPL_ENGINE_CONFIG_SAE' => array(
				'debugging'=>true,
				//    'error_reporting'=>'',
				//    'exception_handler'=>array('ExceptionClass','ExceptionMethod'),
				'template_dir' 	=> APP_PATH.'Tpl/',  //模板目录
// 				'compile_dir' 	=>APP_PATH.'Runtime/Temp/',//编译目录
// 				'cache_dir' 	=>APP_PATH.'Runtime/Cache/',  //缓存目录
				'compile_dir' 	=>'saemc://smartytpl/',//编译目录
				'cache_dir' 	=>'saemc://smartytpl/',  //缓存目录
				'compile_locking' 	=>false,  //防止调用touch,saemc会自动更新时间，不需要touch
				'caching' 		=> false,  //是否启用缓存
				'cache_lifetime' =>1,//缓存时间s
				'left_delimiter'=>'<{',
				'right_delimiter' =>'}>',
		),
	'USER_SALT' =>'4%&&*',
	'Menu' => array
		(
				'项目管理' => array
				(
						'常用选项' => array
						(
								//'memcache队列信息' => './?s=Memcququ',
								//'memcache队列清空' => './?s=Memcququ&a=ququindex',
								'memcache缓存清空' => array(
										'url'=>'./?s=Memcququ&a=memcindex',
										'right'=>'Memcququ_memcindex'
										),
								'imei查询' =>  array(
										'url'=>'./?s=ImeiCount&a=selimei',
										'right'=>'ImeiCount_selimei'
										),
								'访问统计' => array(
										'url'=>'./?s=LogChart&a=index',
										'right'=>'LogChart_index'
										),
								'版本崩溃数据' => array(
										'url'=>'./?s=Analysis&a=verinfo',
										'right'=>'Analysis_verinfo'
										),
								'PushTest' => array(
										'url'=>'./?s=PushTest&a=info',
										'right'=>'PushTest_info'
										),
								
						),
						'IOS游戏管理' => array
						(
								'游戏列表' => array(
										'url'=>'./?s=IosGame',
										'right'=>'IosGame_index',
								),
								'新增游戏' => array(
										'url'=>'./?s=IosGame&a=add_game',
										'right'=>'IosGame_add_game',
								),
						
						),
						'IOS浏览器'	=> array(
								'分类管理' => array(
										'url'=>'./?s=Classes&a=index',
										'right'=>'Classes_index'
								),
								/* '推荐管理'	=> array(
										'url'=>'./?s=AppStore&a=index',
										'right'=>'AppStore_index'
										),*/
								) ,
						'SdkNumData'	=> array(
								'数据管理' => array(
										'url'=>'./?s=SdkNumData&a=index',
										'right'=>'SdkNumData_index'
								),
								/* '推荐管理'	=> array(
								 'url'=>'./?s=AppStore&a=index',
										'right'=>'AppStore_index'
								),*/
						)
						
				),
				'系统管理' => array
				(
						'安全设置' => array
						(
								'管理员管理' => array(
										'url'=>'./?s=Member&a=index',
										'right'=>'Member_index'
										),
						)
				)
		),
// 	'TMPL_TEMPLATE_SUFFIX'=>'.tpl',
		'SavePicPath'			=>"E:/zhandian/shouyoushe/api/wwwroot/st/pics/",//图片路径
);

?>