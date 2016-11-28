<?php

class AuthCheckBehavior extends Behavior {
	// 行为参数定义
	

	// 行为扩展的执行入口必须是run
	public function run(&$return) {
		// 进行权限认证逻辑 如果认证通过 $return = true;
		// 否则用halt输出错误信息
		if (! session ('authId')) {
			cookie("redirect",$_SERVER['PATH_INFO']);
			redirect ( '/Account/login' );
		}
	}
}
