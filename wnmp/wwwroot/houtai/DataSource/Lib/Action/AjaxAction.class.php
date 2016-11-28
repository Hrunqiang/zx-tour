<?php
/**
 * ajax数据请求
 * @author hhy
 * ctime 2015-10-27
 */
class AjaxAction extends Action {
	
	Public function _initialize(){
		//B('AuthCheck');
	}
	
	public function apply_num(){
		$res = $this->increment();
		echo json_encode(array("error"=>0,"data"=>$res));	
    }
    
    public function increment(){
    	$start = 1478300821;
    	$now = time();
    	$num = ceil(($now - $start)/1200);
    	return $num;
    }
}