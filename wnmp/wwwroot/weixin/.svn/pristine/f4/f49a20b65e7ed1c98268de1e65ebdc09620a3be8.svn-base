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
//     	$res = array("error"=>65535,"msg"=>"未知错误","data"=>"");
//     	$page = htmlspecialchars(addslashes(trim($_GET['page'])))?htmlspecialchars(addslashes(trim($_GET['page']))):1;
//     	$length = htmlspecialchars(addslashes(trim($_GET['length'])))?htmlspecialchars(addslashes(trim($_GET['length']))):5;    	
//     	$search = new  MatchInfoModel();
//     	$res = $search->searchV2("","",1);
//     	if($res){
//     		$goodsM = new GoodsModel();
//     		foreach($res as $key  => $val){
//     			$res[$key]['info'] = $goodsM->getgoodsByMatchIdV2($val['id']);
//     		}
//     		$rs['error'] = 0;
//     		$rs['msg'] = "ok";
//     		$rs['data'] = $res;
//     	}else{
//     		$rs['error'] = 1;
//     		$rs['msg'] = "empty";
//     		$rs['data'] = "";
//     	}    	 
//     	echo json_encode($rs);
    }
    
    /**
     * 获取订单列表
     */
    public function userorderlist(){
    	$uid = session("SESSION_ZX_AUTHID");
    	$rs = array("error"=>0,"msg"=>"未知错误！","data"=>"");
    	if(!$uid){
    		$rs['error'] = 304;
    		$rs['msg'] = "用户未登录";
    		$rs['data'] = "/Account/login";
    		echo json_encode($rs);
    		exit();
    	}
    	$orderM = new UserOrdersModel();
    	$list = $orderM->getorderListByUid($uid);
    	if($list){
    		$UOINFO = new OrdersInfoModel();
    		foreach($list as $k =>$v){
    			$info = $UOINFO->getOrderInfolist($v['orderid']);
    			$meals = array();
    			foreach($info as $key=>$value){
    				$mealname = $value['type']=="单房差"?"单房差":$value['g_name'];
    				array_push($meals,$mealname);
    			}
    			$list[$k]['info'] = implode(" + ",$meals);
    		}
    		$orderInfo = implode(" + ",$meals);
    		$rs['error'] = 0;
    		$rs['msg'] = "ok";
    		$rs['datetime'] = Date("Y-m-d H:i:s");
    		$rs['data'] = $list;
    	}else{
    		$rs['error'] = 1;
    		$rs['msg'] = "empty";
    	}
    	echo json_encode($rs);
    	exit();
    
    }
    
    /**
     * 获取订单列表
     */
    public function collection(){
    	$uid = session("SESSION_ZX_AUTHID");
    	$rs = array("error"=>0,"msg"=>"未知错误！","data"=>"");
    	if(!$uid){
    		$rs['error'] = 304;
    		$rs['msg'] = "用户未登录";
    		$rs['data'] = "/Account/login";
    		echo json_encode($rs);
    		exit();
    	}
    	$collectM = new MatchCollectModel();
    	$list = $collectM->getMycollectMatchV2($uid);
    	if($list){
    		$goodsM = new GoodsModel();
    		foreach($list as $key  => $val){
    			$list[$key]['info'] = $goodsM->getgoodsByMatchIdV2($val['id']);
    		}
    		$rs['error'] = 0;
    		$rs['msg'] = "ok";
    		$rs['data'] = $list;
    		$rs['datetime'] = Date("Y-m-d H:i:s");
    	}else{
    		$rs['error'] = 1;
    		$rs['msg'] = "empty";
    	}
    	echo json_encode($rs);
    	exit();
    
    }
    
    public function coupon(){
    	$uid = session("SESSION_ZX_AUTHID");
    	$rs = array("error"=>0,"msg"=>"未知错误！","data"=>"");
    	if(!$uid){
    		$rs['error'] = 304;
    		$rs['msg'] = "用户未登录";
    		$rs['data'] = "/Account/login";
    		echo json_encode($rs);
    		exit();
    	}
    	$orderid = htmlspecialchars(addslashes(trim($_GET['orderid'])));
		$where = '';
		if($orderid){
			$UO = new UserOrdersModel();
			$orderinfo = $UO->getorderinfo($orderid);
			$matchM = new MatchInfoModel();
			$matchinfo =$matchM->getMatchById($orderinfo[0]['matchid']);
			
			//价格
			$where = " and c.min_able_price <= ".$orderinfo[0]['payprice'];
			//赛事
			$where .=" and (c.able_match ='' or c.able_match like '%".$orderinfo[0]['matchid']."%') ";
			//赛事类型
			$where .=" and (c.able_ptype ='' or c.able_ptype = '".$orderinfo[0]['m_ptype']."')";
			//coding.......
		}
		$couponM = new CouponListModel();
		$list = $couponM->getcouponByUid($uid,$where);
		if($list){
			$rs['error'] = 0;
			$rs["msg"] = "ok";
			foreach( $list  as $key=>$val){
				$list[$key]['url'] = $orderid?"/PayResult/payorder?orderid=".$orderid."&couponid=".$val['id']:"/";;
			}
			$rs['data'] = $list;
		}else{
			$rs['error'] = 0;
			$rs["msg"] = "empty";
		}
		echo json_encode($rs);
    }
}