<?php
/*
 * 报名
 * */
class EnrollAction extends Action {
	
	public function _initialize(){
		B('AuthCheck');
	}
	public function index(){
		
		$enrollM = new UserOrdersModel();
		$applyNum = $enrollM->apply_num();
		$applys = $enrollM->apply_orders();
// 		var_dump($applyNum);
		$this->assign("applyNum",$applyNum);
		$this->assign("list",$applys);
		$this->display();
	}


}