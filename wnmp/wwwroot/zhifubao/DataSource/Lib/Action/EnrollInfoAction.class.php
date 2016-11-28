<?php
class EnrollInfoAction extends Action{
	private static $UID;
	private $result = array("error"=>66535,"msg"=>"unknow","data"=>array());
	public function _initialize(){
		B('AuthCheck');
		self::$UID = session("authId");
// 		self::$UID = empty(self::$UID)?1:self::$UID;
	}
	
	public function index(){
		$OM = new OrdersInfoModel();
		$ordersInfo = array();
		$orders = $OM->getOrderInfoByUid(self::$UID);
		$BM = new BaomingdanModel();
		$GM = new GoodsModel();
		if($orders){
			foreach ($orders as $k=>$v){
				if($v['baomingdanid']){
					$ordersInfo[$v['orderid']];
					$name = $BM->getNameByid($v['baomingdanid']);
					$name = $name['xingming'];
					$v['xingming'] = $name;
					if(!empty($v['goodspid'])){
						$ginfo = $GM->getGoodsInfoById($v['goodspid']);
						$v['pidName'] = $ginfo['goodscls'];
					}
					$ordersInfo[$v['orderid']]['NameInfo'][] = $v;
					$ordersInfo[$v['orderid']]['price'] = $v['orderprice'];
					$ordersInfo[$v['orderid']]['isonline'] = $v['isonline'];
					$ordersInfo[$v['orderid']]['paystats'] = $v['paystats'];
					$ordersInfo[$v['orderid']]['sign'] = $v['sign'];
				}else{
					if(!empty($v['goodspid'])){
						$ginfo = $GM->getGoodsInfoById($v['goodspid']);
						$v['pidName'] = $ginfo['goodscls'];
					}
					$ordersInfo[$v['orderid']]['JdInfo'][] = $v;
					$ordersInfo[$v['orderid']]['price'] = $v['orderprice'];
					$ordersInfo[$v['orderid']]['isonline'] = $v['isonline'];
					$ordersInfo[$v['orderid']]['paystats'] = $v['paystats'];
					$ordersInfo[$v['orderid']]['sign'] = $v['sign'];
				}
			}
		}else{
			$msg = "无报名信息";
		}
		$npa = array(
				"tab"=>"赛事报名",
				"mtab"=>"报名查询",
		);
		$this->assign("ordersInfo",$ordersInfo);
		$this->assign("npa",$npa);
		$this->display("index");
	}
	
}