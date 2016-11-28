<?php
/*
 * 报名
 * */
class PayResultAction extends Action {
	public function _initialize(){
	}
	public function gotoPay(){
		vendor('nuomi.nopdemo');
	}
	
	public function index(){
		redirect("/");
	}
	
	public function check(){
		$rs = array("error"=>65535,"msg"=>"未知错误！");
		$orderid = addslashes(trim($_POST['orderid']));
		$UO = new UserOrdersModel();
		$where = " o.pay_deadline > NOW() ";
		$orderinfo = $UO->getorderinfo($orderid,$where);
		if(!$orderinfo){
			$rs = array("error"=>11,"msg"=>"订单超时未支付！");
		}else{
			$rs = array("error"=>0,"msg"=>"ok");
		}
		echo json_encode($rs);
	}
	
	public function payorder(){
		$orderid = addslashes(trim($_GET['orderid']));
		$couponid = addslashes(trim($_GET['couponid']));
		if(!$orderid){
			$orderid = session("SESSION_ZX_ORDERID");
		}else{
			session("SESSION_ZX_ORDERID",$orderid);
		}
		
		if(!$orderid){
			header("Content-type:text/html;charset=utf-8;");
			$msg = '<script>alert("无效订单号");window.location.href="/";</script>';
			echo $msg;
			die();
		}
		
		$UO = new UserOrdersModel();
		//$where = " o.pay_deadline > NOW() ";
		$orderinfo = $UO->getorderinfo($orderid);
		
		$date = Date("Y-m-d H:i:s");
		if(
				!$orderinfo || 
				($orderinfo[0]['pay_deadline'] < $date &&  $orderinfo[0]['paystats'] ==5)
		){
			header("Content-type:text/html;charset=utf-8;");
			$msg = '<h2><a href="/User/order" >返回订单详情页>></a><br><a href="/" >返回首页>></a></h2><script>alert("未找到可支付的订单，如果你之前已经下过单请在订单页将之前订单删除！")</script>';
			echo $msg;
			die();
		}
		
		if($orderinfo[0]['paystats']==10){
			redirect("/User/success?orderid=$orderid");
			die;
		}
		
		if($orderinfo[0]['paystats']==1){
			$orderM =  new  UserOrdersModel();
			$user = $orderM->getuserstate($orderid);
			$userstate = $user[0]['state'];
			$uid = $user[0]['id'];
			if($userstate==4){
				$userinfoM = new UserInfoModel();
				$info = $userinfoM->getuserinfo($uid);
				if(
						(
								empty($info['pass_code'])||
								empty($info['surname'])||
								empty($info['en_name'])
								) &&
						$orderinfo[0]['m_ptype'] == "海外"
				){
					$this->assign("price",$orderinfo[0]);
					$this->display();
				}else{
					$this->updateOrderStats($uid,$info);
					redirect("/User/success?orderid=$orderid");
				}			
			}else{
				$this->assign("price",$orderinfo[0]);
				$this->display();
			}
			die;
		}
		
		$UOINFO = new OrdersInfoModel();
		$list = $UOINFO->getOrderInfolist($orderid);
		
		$isArrow = true;
		
		$couponid = $couponid?$couponid:$orderinfo[0]['couponid'];
		$couponM = new CouponListModel();
		$uid = session("SESSION_ZX_AUTHID");
		$coupon_count = $couponM->getableCouponByuid($uid);
		$this->assign("coupon_count",$coupon_count[0]['num']);
		if($couponid && $orderinfo[0]['paystats']==5){
			$couponinfo = $couponM->getcodeinfoById($couponid);
			$matchM = new MatchInfoModel();
			$matchinfo =$matchM->getMatchById($orderinfo[0]['matchid']);
			
			$notallowedMatch = array(374,323,375,377,379,380,394,385,386,387,388,390,391,389,392);
			if(in_array($orderinfo[0]['matchid'], $notallowedMatch)){
				$coupon = "优惠赛事不能使用优惠券";
				$isArrow = false;
			}
			
			if($couponinfo[0]['owner']!=$uid || $couponinfo[0]['stats']!=1){
				$coupon = "没有找到优惠券";
				$isArrow = false;
			}
			//判断赛事
			if($couponinfo[0]['able_match'] && $isArrow){
				$arrowMatch = explode("|", $couponinfo[0]['able_match']);
				if(!in_array($orderinfo[0]['matchid'], $arrowMatch)){
					$coupon = "赛事不符合";
					$isArrow = false;
				}
			}
				
			//判断赛事类别
			if($couponinfo[0]['able_ptype']&&$couponinfo[0]['able_ptype']!=$matchinfo[0]['m_ptype']){
				$coupon = "赛事类别不符合";
				$isArrow = false;
			}
			
			$able_meal = $couponinfo[0]['able_meal'];
			$maxdiscount = $couponinfo[0]['discount'];
			$orderinfoM = new OrdersInfoModel();
			switch($able_meal){
				case 'source':
					$where = array(
						"orderid" =>$orderid,
						"type"    =>"赛程"
					);
					$source = $orderinfoM->where($where)->find();
					if($source){
						//判断价线
						if($source['goods_pay_sprice']<$couponinfo[0]['min_able_price']){
							$coupon = "价格不满足";
							$isArrow = false;
						}else{
							$maxdiscount = $source['goods_pay_sprice']>=$maxdiscount?$maxdiscount:$source['goods_pay_sprice'];
						}
					}else{
						$isArrow = false;
					}
					break;
				case 'meal':
					$where = array(
							"orderid" =>$orderid,
							"type"    =>"套餐"
					);
					$source = $orderinfoM->where($where)->find();
					if($source){
						//判断价线
						if($source['goods_pay_sprice']<$couponinfo[0]['min_able_price']){
							$coupon = "价格不满足";
							$isArrow = false;
						}else{
							$maxdiscount = $source['goods_pay_sprice']>=$maxdiscount?$maxdiscount:$source['goods_pay_sprice'];
						}
					}else{
						$isArrow = false;
					}
					break;
				default:
					//判断价线
					if($orderinfo[0]['payprice']<$couponinfo[0]['min_able_price']){
						$coupon = "价格不满足";
						$isArrow = false;
					}
					break;
			}
					
			if($isArrow){
				//可减价格计算
				$discount = $orderinfo[0]['payprice']-$maxdiscount>0?$maxdiscount:($orderinfo[0]['payprice']-0.01);
				$orderinfo[0]['discount'] = $discount;
				$orderinfo[0]['couponid'] =$couponid;
				$coupon = "-￥".$discount."元";
			}else{
				$orderinfo[0]['discount'] = 0;
				$orderinfo[0]['couponid'] ='';
			}
		}
		$update = $orderinfo[0];
		unset($update['id']);
		$saveRes = $UO->where("orderid='$orderid'")->data($update)->save();
		$this->assign("coupon",$coupon);
		$meals = $course = $attach = array();
		foreach($list as $k =>$v){
			switch($v['type']){
				case "赛程":
					array_push($course,$v['g_name']);
					break;
				case "套餐":
					array_push($meals,$v['g_name']);
					break;
				case "单房差":
					array_push($meals,"单房差");
					break;
				case "附加优质服务":
					array_push($attach,$v['g_name']);
					break;
			};;
		}
		$this->assign("meal",implode(" + ",$meals));
		$this->assign("course",implode(" + ",$course));
		$this->assign("attach",implode(" + ",$attach));
		if($orderinfo[0]['paystats']==5 && $saveRes!==false){
			vendor('nuomi.pay');
			$nuomiPay = new nuomipay();
			$requestParams = $nuomiPay->getrequestParams($orderinfo[0]['orderid']);
			$this->assign("ApiParameters",$requestParams);
		}		
		$this->assign("price",$orderinfo[0]);
		$this->assign("list",$list);
		$this->assign("isnuomi",isNuomi());
		$this->display();
	}
	
	private  function updateOrderStats($uid,$data){
		$orderM =  new  UserOrdersModel();
		if(!empty($data['pass_code']) && !empty($data['surname']) && !empty($data['en_name'])){
			$sql = "SELECT o.orderid FROM  zx_tb_orders o LEFT JOIN  zx_tb_matchs m ON o.matchid =  m.id WHERE o.uid = $uid AND o.paystats = 1 ";
		}else{
			$sql = "SELECT o.orderid FROM  zx_tb_orders o LEFT JOIN  zx_tb_matchs m ON o.matchid =  m.id WHERE o.uid = $uid AND o.paystats = 1 AND m.m_ptype = '国内'";
		}
		$orderlist = $orderM->query($sql);
		if(!$orderlist){
			return false;
		}else{
			$res = true;
			foreach($orderlist as $key => $val){
				if($orderM->finishOrders($val['orderid'])===false){
					$res = false;
				}
			}
			return $res;
		}
	}
	
	/**
	 * 其它付款方式 
	 */
	public function other(){
		$orderid = addslashes(trim($_GET['orderid']));
		if(!$orderid){
			$orderid = session("SESSION_ZX_ORDERID");
		}else{
			session("SESSION_ZX_ORDERID",$orderid);
		}

		if(!$orderid){
			die("无效订单号！!");
		}
		
		$UO = new UserOrdersModel();
		$orderinfo = $UO->getorderinfo($orderid);
		
		if(!$orderinfo){
			die("没有找到相关订单信息！");
		}
		
		$UOINFO = new OrdersInfoModel();
		$list = $UOINFO->getOrderInfolist($orderid);
		$meals = array();
		foreach($list as $k =>$v){
			$mealname = $v['type']=="单房差"?"单房差":$v['g_name'];
			array_push($meals,$mealname);
		}
		$this->assign("meal",implode(" + ",$meals));	
		$this->assign("price",$orderinfo[0]);
		$this->assign("list",$list);
		$this->display();
	}
	
	public function pay_notify(){
		vendor('nuomi.pay');
		$nuomiPay = new nuomipay();
		if($nuomiPay->checknotifysign($_POST)){
			$rs = array("errno"=>0,"msg"=>"success","data"=>array("isConsumed"=>1));
			$OM = new UserOrdersModel();
			$orderid = $_POST['tpOrderId'];
			$payorderid = $_POST['orderId'];
			$total_fee = $_POST['payMoney'];
			$trade_status = $_POST['status']==2?1:5;
			$info = json_encode($_POST);
			$OM->UpdatePayResult($orderid, $payorderid, $total_fee, $trade_status, $info);
// 			if(!$OM->UpdatePayResult($orderid, $payorderid, $total_fee, $trade_status, $info)){
// 				//$rs = array("errno"=>1005,"msg"=>"订单状态修改失败","data"=>"");
// 			}
		}else{
			$rs = array("errno"=>1004,"msg"=>"验证不通过","data"=>"");
		}
		@mwtlog("nuomi_pay_notify_request","data:".json_encode($_POST)."\treturn:".json_encode($rs),true);
		echo json_encode($rs);
	}
	
	public function pay_back(){
	
		//{"errno":0,"msg":"success","data":{"isConsumed":0}}
	
	
		$rs = array("errno"=>1,"msg"=>"error","data"=>array("isConsumed"=>0));
	
		@mwtlog("nuomi_pay_back_request","data:".json_encode($_REQUEST),true);
		echo json_encode($rs);
		//vendor('wxpay.example.notify');
	}
	
	public function pay_back2(){
	
		//{"errno":0,"msg":"success","data":{"isConsumed":0}}
	
	
		$rs = array("errno"=>1,"msg"=>"error","data"=>array("isConsumed"=>0));
	
		@mwtlog("nuomi_pay_back2_request","data:".json_encode($_REQUEST),true);
		echo json_encode($rs);
		//vendor('wxpay.example.notify');
	}

}