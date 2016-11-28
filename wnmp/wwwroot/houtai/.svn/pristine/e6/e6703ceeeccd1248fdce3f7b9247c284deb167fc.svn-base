<?php
/**
 * 发布
 * @author 文涛
 */
class PublishAction extends Action{
	Public function _initialize(){
		B('AuthCheck');
	}
	
	public function weishiapi(){
		$rs	= system("ssh root@web_server \"/opt/bin/update.sh |grep -v .svn\"");
		print_r($rs);
	}
	
	public function add_item(){}
	
}