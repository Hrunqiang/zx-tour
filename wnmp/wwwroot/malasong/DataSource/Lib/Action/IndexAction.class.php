<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
	
	Public function _initialize(){
		//B('AuthCheck');
	}
	
    public function index(){
    	$this->assign("index","index");
    	$newsdb = new NewsModel();
    	$res = $newsdb->getnewslist();
    	$this->assign("news",$res);
        $this->display();
    }
    
   	public function news(){
   		$id = $_GET['id'];
   		$npa = array(
   				"tab"=>"赛事新闻",
   				"mtab"=>"常见问题FAQ",
   		);
   		$newsdb = new NewsModel();
   		$res = $newsdb->getnewsInfoById($id);
   		$this->assign("news",$res);
   		$this->assign ( "npa", $npa );
   		$this->display();
   	}
}