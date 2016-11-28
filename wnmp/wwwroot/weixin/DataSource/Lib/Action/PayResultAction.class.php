<?php
/*
 * 报名
 * */
class PayResultAction extends Action {
	public function _initialize(){
	}
	public function gotoPay(){
		$orderid =addslashes(trim($_POST['WIDout_trade_no']));
		if(empty($orderid)){
			die("无效订单");
		}
		$UO = new UserOrdersModel();
		//$where = " o.pay_deadline > NOW() ";
		$orderinfo = $UO->getorderinfo($orderid);
		$date = Date("Y-m-d H:i:s");
		if($orderinfo[0]['paystats']!=5 || $orderinfo[0]['pay_deadline']<$date){
			die("订单不可支付！");
		}
		//商户订单号
		$_POST['WIDout_trade_no'] = $orderid;
		//商户网站订单系统中唯一订单号，必填
		
		//订单名称
		$_POST['WIDsubject'] ="知行合逸赛事报名-".$orderinfo[0]['m_name'];;
		//必填
		//付款金额
		$_POST['WIDtotal_fee'] = round($orderinfo[0]['payprice']-$orderinfo[0]['discount'],2);
		//必填
		
		//订单描述	
		$_POST['WIDbody'] = "知行合逸赛事报名-".$orderinfo[0]['m_name'];
		
		//商品展示地址
		$_POST['WIDshow_url'] = "http://weixin.zx-tour.com/Matchinfo?m_id=".$orderinfo[0]['matchid']."&platform=zx-tour";
		vendor('alipay.alipayapi');
	}
	
	public function index(){
		redirect("/");
	}
	
	public function check(){
		$rs = array("error"=>65535,"msg"=>"未知错误！");
		$orderid = addslashes(trim($_POST['orderid']));
		$UO = new UserOrdersModel();
		$where = " o.paystats = 5 ";
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
		if($orderinfo[0]['paystats']==5 && isweixin() && $saveRes!==false){
			vendor('wxpay.example.jsapi');
			$wxpay = new wxpay();
			$jsApiParameters = $wxpay->getjsApiParameters($orderinfo[0]);	
			$this->assign("jsApiParameters",$jsApiParameters);
		}
		$this->assign("isWeixin",isWeixin());	
		$this->assign("price",$orderinfo[0]);
		$this->assign("list",$list);
		$this->display();
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
	
	public function pay_notify(){
		vendor('wxpay.example.notify');
	}
	
	public static  function retry($info){
		if(empty($info)) return true;
		$out_trade_no = $info['out_trade_no'];
		$trade_no = $info['transaction_id'];
		$total_fee = $info['total_fee'];
		$result_code = $info['result_code'];
		$return_code = $info['return_code'];
		if($return_code == "SUCCESS" && $result_code=="SUCCESS"){
			$trade_status = 1;
		}else{
			$trade_status = 5;
		}
		$OM = new UserOrdersModel();
		return $OM->UpdatePayResult($out_trade_no, $trade_no, $total_fee, $trade_status, $info);
	}
	
	public function test(){
		$OM = new UserOrdersModel();
		$res =  $OM->UpdatePayResult("143160729142507044478", "9930700", "1", 1, "infounfi");
		var_dump($res);
	}
	
	
	public function AliPay(){
		vendor('alipay.alipayapi');
	}
	
	
	/**
	 * 支付宝异步回调
	 */
	public function AlipayBack(){
		vendor('alipay.alipay#config');
		vendor('alipay.lib.alipay_notify#class');
		global $alipay_config;
		//计算得出通知验证结果
		$alipayNotify = new AlipayNotify($alipay_config);
		$verify_result = $alipayNotify->verifyNotify();
		
		if($verify_result) {//验证成功
			/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			//请在这里加上商户的业务逻辑程序代
		
		
			//——请根据您的业务逻辑来编写程序（以下代码仅作参考）——
		
			//获取支付宝的通知返回参数，可参考技术文档中服务器异步通知参数列表
		
			//商户订单号
		
			$out_trade_no = $_POST['out_trade_no'];
		
			//支付宝交易号
		
			$trade_no = $_POST['trade_no'];
		
			//交易状态
			$trade_status = $_POST['trade_status'];
		
		
			if($_POST['trade_status'] == 'TRADE_FINISHED') {
				//判断该笔订单是否在商户网站中已经做过处理
				//如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
				//如果有做过处理，不执行商户的业务程序
				//注意：
				//退款日期超过可退款期限后（如三个月可退款），支付宝系统发送该交易状态通知
		
				//调试用，写文本函数记录程序运行情况是否正常
				//logResult("这里写入想要调试的代码变量值，或其他运行的结果记录");
				//        logResult(date("Y-m-d H:i:s")."\tpost:".json_encode($_POST)."\r\n");
			}
			else if ($_POST['trade_status'] == 'TRADE_SUCCESS') {
				//判断该笔订单是否在商户网站中已经做过处理
				//如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
				//如果有做过处理，不执行商户的业务程序
		
				//注意：
				//付款完成后，支付宝系统发送该交易状态通知
		
				//调试用，写文本函数记录程序运行情况是否正常
				//        logResult("这里写入想要调试的代码变量值，或其他运行的结果记录");
			}
			$total_fee = $_POST['total_fee']*100;
			$trade_status = $_POST['trade_status'];
			if($trade_status == "TRADE_FINISHED"){
				$trade_status = 3;
			}elseif($trade_status == "TRADE_SUCCESS"){
				$trade_status = 1;
			}else{
				$trade_status = 5;
			}
			$OM = new UserOrdersModel();
			$OM->UpdatePayResult($out_trade_no, $trade_no, $total_fee, $trade_status, $_POST);
			@mwtlog("PayResult",date("Y-m-d H:i:s")."\tpost:".json_encode($_POST),true);
// 			logResult(date("Y-m-d H:i:s")."\tpost:".json_encode($_POST)."\r\n");
			//——请根据您的业务逻辑来编写程序（以上代码仅作参考）——
		
			echo "success";		//请不要修改或删除
		
			/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		}
		else {
			//验证失败
			echo "fail";
			@mwtlog("PayResult",date("Y-m-d H:i:s")."\trs".json_encode($verify_result)." :\tpost:".json_encode($_POST),true);
// 			logResult(date("Y-m-d H:i:s")."\tpost:".json_encode($_POST)."\r\n");
			//调试用，写文本函数记录程序运行情况是否正常
			//logResult("这里写入想要调试的代码变量值，或其他运行的结果记录");
		}
	}
	
	/**
	 * 支付宝同步回调
	 */
	public function AlipayFront(){
		global $alipay_config;
		vendor('alipay.alipay#config');
		vendor('alipay.lib.alipay_notify#class');
		//计算得出通知验证结果
		$msg ="未知错误";
		$alipayNotify = new AlipayNotify($alipay_config);
		$verify_result = $alipayNotify->verifyReturn();
		if($verify_result) {//验证成功
			/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
			//请在这里加上商户的业务逻辑程序代码
		
			//——请根据您的业务逻辑来编写程序（以下代码仅作参考）——
			//获取支付宝的通知返回参数，可参考技术文档中页面跳转同步通知参数列表
		
			//商户订单号
		
			$out_trade_no = $_GET['out_trade_no'];
		
			//支付宝交易号
		
			$trade_no = $_GET['trade_no'];
		
			//交易状态
			$trade_status = $_GET['trade_status'];
		
		
			/* if($_GET['trade_status'] == 'TRADE_FINISHED' || $_GET['trade_status'] == 'TRADE_SUCCESS') {
				
			}
			else {
				echo "trade_status=".$_GET['trade_status'];
			} */
			//判断该笔订单是否在商户网站中已经做过处理
			//如果没有做过处理，根据订单号（out_trade_no）在商户网站的订单系统中查到该笔订单的详细，并执行商户的业务程序
			//如果有做过处理，不执行商户的业务程序
			$trade_status = $_GET['trade_status'];
			if($trade_status == "TRADE_FINISHED"){
				$trade_status = 3;
				$msg = "支付完成!";
			}elseif($trade_status == "TRADE_SUCCESS"){
				$trade_status = 1;
				$msg = "支付完成";
			}else{
				$msg = "未知错误:$trade_status";
				$trade_status = 5;
			}
			$OM = new UserOrdersModel();
			$total_fee = $_GET['total_fee']*100;
			$rs = $OM->UpdatePayResult($out_trade_no, $trade_no, $total_fee, $trade_status, $_GET);
			if($rs === 2){
				$msg = "支付金额有误";
			}else{
				redirect("/PayResult/payorder?orderid=".$out_trade_no);
			}
// 			echo "验证成功<br />";
		
			//——请根据您的业务逻辑来编写程序（以上代码仅作参考）——
		
			/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		}
		else {
			//验证失败
			//如要调试，请看alipay_notify.php页面的verifyReturn函数
			$msg = "验证失败";
// 			echo "验证失败";
		}
		@mwtlog("PayResult_Front",date("Y-m-d H:i:s")."\tmsg:$msg \t get:".json_encode($_GET),true);
		echo $msg;
		//$this->assign ( "msg", $msg );
		//$this->display("AlipayFront");
	}
}