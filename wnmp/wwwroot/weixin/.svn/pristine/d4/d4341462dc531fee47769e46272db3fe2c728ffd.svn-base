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
		$applydb = new UserOrdersModel();
		$apply = $applydb->apply_num();
		$res = $apply+$this->increment();
		echo json_encode(array("error"=>0,"data"=>$res));	
    }
    
    public function increment(){
    	$start = 1446262814;
    	$now = time();
    	$num = ceil(($now - $start)/1200);
    	return $num;
    }

    public function test(){
        $a = $_GET['id'];
        $UM = new UserOrdersModel();
        $d = $UM->where("id=$a")->find();
        var_dump($d);
    }
    
    public function hotlist(){
    	$res = array("error"=>65535,"msg"=>"未知错误","data"=>"");
    	$page = htmlspecialchars(addslashes(trim($_GET['page'])))?htmlspecialchars(addslashes(trim($_GET['page']))):1;
    	$length = htmlspecialchars(addslashes(trim($_GET['length'])))?htmlspecialchars(addslashes(trim($_GET['length']))):5;
    	$list = hotlist($page,$length);
    	if($list){
    		$res['error'] = 0;
    		$res['msg'] = "ok";
    		$res['data'] = $list;
    	}else{
    		$res['error'] = 1;
    		$res['msg'] = "empty";
    		$res['data'] = "";
    	}
    	echo json_encode($res);
    }
}