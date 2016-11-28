<?php
/*
 * 报名
 * */
class OnlineEnrollAction extends Action {
	
	public function _initialize(){
		B('AuthCheck');
	}
	public function index(){
		
		$enrollM = new OnlineMLSModel();
		$list = $enrollM->getonlineorderlist();
		$this->assign("list",$list);
		$this->display();
	}
	
	public function info(){
		$orderid = htmlspecialchars(addslashes(trim($_GET['orderid'])));
		$enrollM = new OnlineMLSModel();
		$info = $enrollM->getinfo($orderid);
 		$this->assign("info",$info[0]);

		$this->display();
	}


}