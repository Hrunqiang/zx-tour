<?php
return array(
	'URL_MODEL'     =>1,
	'IS_PRO'   => false, 	// 是否正式环境
	/*数据库相关配置*/
	'DB_TYPE'   => 'mysql', 	// 数据库类型
	'DB_HOST'   => 'localhost', // 服务器地址
	'DB_NAME'   => 'zxtour', 		// 数据库名
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
	//数据库配置1
	'DB_CONFIG1_zx' => array(
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
	'MEMCACHE_API_HOST'=>"127.0.0.1",
	'MEMCACHE_API_PORT'=>"11211",
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
		                                				'memcache缓存清空' => array(
		                                						'url'=>'./?s=Memcququ&a=memcindex',
		                                						'right'=>'Memcququ_memcindex'
		                                				),
		                                		
		                                		),
                                                '邮件发送' => array
                                                (
                                                                '文件上传'=>array(
                                                                                'url'=>'./?s=Upload',
                                                                                'right'=>'Upload_index',
                                                                ),
                                                                'pdf邮件' => array(
                                                                                'url'=>'./?s=EnrollNotice&a=mailsend',
                                                                                'right'=>'EnrollNotice_mailsend',
                                                                ),

                                                ),
                                                '运营管理' => array
                                                (
                                                                '订单列表'=>array(
                                                                    'url'=>'./?s=EnrollV3',
                                                                    'right'=>'enrollV3_index',
                                                                ),
                                                                '赛事信息'=>array(
		                                							'url'=>'./?s=MatchV3',
		                                							'right'=>'MatchV3_index',
		                                						),
		                                						'推荐列表'=>array(
		                                							'url'=>'./?s=Recommend',
		                                							'right'=>'Recommend_index',
		                                						),
                                                ),
		                                		'一键报名 V2.0' => array
		                                		(
		                                				'订单查询'=>array(
		                                						'url'=>'./?s=EnrollV2',
		                                						'right'=>'enrollV2_index',
		                                				),
		                                				'赛事信息'=>array(
		                                						'url'=>'./?s=MatchV2',
		                                						'right'=>'MatchV2_index',
		                                				),
		                                				'用户反馈'=>array(
		                                						'url'=>'./?s=UserFeedback',
		                                						'right'=>'UserFeedback_index',
		                                				),
		                                				'其它'=>array(
		                                						'url'=>'./?s=Classes',
		                                						'right'=>'Classes_index',
		                                				)
		                                		),
		                                		'渠道管理' =>array(			
		                                				'渠道分配'=>array(
		                                						'url'=>'./?s=Platform',
		                                						'right'=>'Platform_index',
		                                				),
		                                		),
		                                		'优惠券' =>array(
		                                				"生成优惠券"=>array(
		                                						'url'=>'./?s=Coupon&a=add',
		                                						'right'=>'Couponadd_index',
		                                				),
		                                				"优惠券列表"=>array(
		                                						'url'=>'./?s=Coupon',
		                                						'right'=>'Coupon_index',
		                                				)
		                                			),
		                                		'客服报名'=>array(
		                                				'老客户信息'=>array(
		                                						'url'=>'./?s=Customer',
		                                						'right'=>'Customer_index',
		                                				),
		                                				'海外短信验证码'=>array(
		                                						'url'=>'./?s=Customer&a=smscode',
		                                						'right'=>'Customer_smscode',
		                                				),
		                                		),
		                                		'一键报名' => array
                                                (
                                                                '订单查询'=>array(
                                                                                'url'=>'./?s=Enroll',
                                                                                'right'=>'enroll_index',
                                                                ),
                                                                '赛事信息'=>array(
                                                                                'url'=>'./?s=Match',
                                                                                'right'=>'Match_index',
                                                                ),
                                                ),
                                                '线上马拉松' => array
                                                (
                                                                '成绩查询'=>array(
                                                                                'url'=>'./?s=OnlineEnroll',
                                                                                'right'=>'OnlineEnroll_index',
                                                                ),
                                                ),

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