<?php
/**
 * 比赛图片
 * @author hhy
 * ctime 2015-10-27
 */
class MatchPictureAction extends Action {
	
	Public function _initialize(){
		//B('AuthCheck');
	}
	
    public function index(){
    	$npa = array(
    			"tab"=>"比赛图片",
    			"mtab"=>"抚远美景",
    	);
    	$this->assign ( "npa", $npa );
        $this->display();
    }
    
    public function  playerpic(){
    	$npa = array(
    			"tab"=>"比赛图片",
    			"mtab"=>"选手照片领取",
    	);
    	$this->assign ( "npa", $npa );
    	$this->display();
    }
}