<?php
/**
 * 比赛成绩
 * @author hhy
 * ctime 2015-10-27
 */
class ScoreAction extends Action {
	
	Public function _initialize(){
		//B('AuthCheck');
	}
	
    public function index(){
    	$npa = array(
    			"tab"=>"成绩查询",
    			"mtab"=>"完赛证书",
    	);
    	$this->assign ( "npa", $npa );
        $this->display();
    }
}