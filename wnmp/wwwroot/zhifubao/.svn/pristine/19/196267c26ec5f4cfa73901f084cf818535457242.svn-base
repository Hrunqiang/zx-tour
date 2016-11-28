<?php

class AuthCheckBehavior extends Behavior {
	// 行为参数定义
	

	// 行为扩展的执行入口必须是run
	public function run(&$return) {
		// 进行权限认证逻辑 如果认证通过 $return = true;
		// 否则用halt输出错误信息	
		if(isWeixin()){
			//微信用户
			if (! session ('SESSION_ZX_OPENID')) {
				session("SESSION_ZX_HISTORYURL",$_SERVER['REQUEST_URI']);
				redirect ( '/weixin/touserauth?login=1&xm=zxyjbm' );
			}
		}else{
			if (! session ('SESSION_ZX_AUTHID')) {
				session("SESSION_ZX_HISTORYURL",$_SERVER['REQUEST_URI']);
				redirect ( '/Account/login' );
			}
		}
		
	}
}
