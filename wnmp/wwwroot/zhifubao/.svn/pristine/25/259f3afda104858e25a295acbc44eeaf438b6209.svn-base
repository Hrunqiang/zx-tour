<?php
/*
 * 报名
 * */
class PayResultAction extends Action {
	public function _initialize(){
	}
	
	public function payali(){
		//http://daily.zx-tour.com/PayResult/gotopay?test=1&app_id=2015082800238591&source=alipay_wallet&scope=auth_userinfo&auth_code=c539b938d23547f5bf322b0bab4eUX15
		$rs = array("error"=>65535,"msg"=>"未知错误 ！","data"=>"");
		vendor('alipayv2.gotopay');
		$alipayaM = new  AliPay();
		$auth_code = addslashes(trim($_GET['auth_code']));
		$userid = $alipayaM->getuserid($auth_code);
		$orderid = addslashes(trim($_GET['orderid']));
		$UO = new UserOrdersModel();
		$orderinfo = $UO->getorderinfo($orderid);
		
		if(!$orderinfo[0]){
			$rs['error'] = 1;
			$rs['msg'] = "未找到相关订单信息";
			$rs['data'] = "";
		}else{
			$UOINFO = new OrdersInfoModel();
			$list = $UOINFO->getOrderInfolist($orderid);
			$res = $alipayaM->createorder($orderinfo[0],$list,$userid);		
			if($res['trade_no']){
				$rs['data'] =$res['trade_no'];
				$UO->settrade_no($orderid,$res['trade_no']);
				$rs['msg'] = "ok";
				$rs['error'] = 0;
			}else{
				if($res['code'] == "40004" && $res['ACQ.CONTEXT_INCONSISTENT']=="" && $orderinfo[0]['payorderid']){
					$cancelRes = $alipayaM->cancelorder($orderinfo[0]['payorderid']);
					if($cancelRes['code']==10000){
						$orderinfo[0]['orderid'] = $orderinfo[0]['orderid']."-".time();
						$res2 = $alipayaM->createorder($orderinfo[0],$list,$userid);
						if($res2['trade_no']){
							$rs['data'] =$res2['trade_no'];
							$UO->settrade_no($orderid,$res2['trade_no']);
							$rs['error'] = 0;
						}else{
							$rs['data'] ="";
							$rs['error'] = 13;
							$rs['msg'] =$res['sub_msg']?$res['sub_msg']:$res['msg'];
						}
					}else{
						$rs['msg'] =$cancelRes['sub_msg']?$cancelRes['sub_msg']:$cancelRes['msg'];
						$rs['data'] ="";
						$rs['error'] = 12;
					}
				}else{				
					$rs['data'] ="";
					$rs['error'] = 11;
					$rs['msg'] =$res['sub_msg']?$res['sub_msg']:$res['msg'];
				}
				
			}
		}
		echo json_encode($rs);
	}
	
	public function back(){
		
		@mwtlog("PayResult_test",date("Y-m-d H:i:s")."\t :\tpost:".json_encode($_POST),true);

		$OM = new UserOrdersModel();
		$out_trade_no = addslashes(trim($_POST['out_trade_no']));
		$tmp = explode("-", $out_trade_no);
		$out_trade_no = $tmp[0];
		$trade_no = addslashes(trim($_POST['trade_no']));
		$total_fee = addslashes(trim($_POST['buyer_pay_amount']));
		$trade_status = 1;
		$info = $_POST;
		$res = $OM->UpdatePayResult($out_trade_no, $trade_no, $total_fee, $trade_status, $info);
		if($res){
			echo "success";
		}else{
			echo "false";
		}
	}
	
	public function payorder(){
		$orderid = addslashes(trim($_GET['orderid']));
		if(!$orderid){
			$orderid = session("SESSION_ZX_ORDERID");
		}else{
			session("SESSION_ZX_ORDERID",$orderid);
		}
		
		if(!$orderid){
			die("无效订单号！!");
		}
		
		$auth_code = addslashes(trim($_GET['auth_code']));
		if(!$auth_code){
			$redirect_uri = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
			$url = "https://openauth.alipay.com/oauth2/publicAppAuthorize.htm?app_id=2015082800238591&scope=auth_base&redirect_uri=".urlencode($redirect_uri);
			header("location:$url");
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
		if($orderinfo[0]['paystats']==5 && isweixin()){
			vendor('wxpay.example.jsapi');
			$wxpay = new wxpay();
			$jsApiParameters = $wxpay->getjsApiParameters($orderinfo[0]);	
			$this->assign("jsApiParameters",$jsApiParameters);
		}		
		$this->assign("price",$orderinfo[0]);
		$this->assign("list",$list);
		$this->assign("auth_code",$auth_code);
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
	
	public function pay_notify(){
		vendor('wxpay.example.notify');
	}
	
	public function agreement(){
		$this->display();
	}
	
	public static  function retry($info){
// 		if(empty($info)) return true;
// 		$OM = new UserOrdersModel();
// 		$out_trade_no = addslashes(trim($_POST['out_trade_no']));
// 		$tmp = explode("-", $out_trade_no);
// 		$out_trade_no = $tmp[0];
// 		$trade_no = addslashes(trim($_POST['trade_no']));
// 		$total_fee = addslashes(trim($_POST['buyer_pay_amount']));
// 		$trade_status = 1;
// 		$info = $_POST;
// 		if($return_code == "SUCCESS" && $result_code=="SUCCESS"){
// 			$trade_status = 1;
// 		}else{
// 			$trade_status = 5;
// 		}
// 		$OM = new UserOrdersModel();
// 		return $OM->UpdatePayResult($out_trade_no, $trade_no, $total_fee, $trade_status, $info);
	}
	
	public function test(){
		$OM = new UserOrdersModel();
		$res =  $OM->UpdatePayResult("012160516103448008809", "849900", "849900", 1, "infounfi");
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
			$total_fee = $_POST['total_fee'];
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
				$msg = "支付完成";
			}elseif($trade_status == "TRADE_SUCCESS"){
				$trade_status = 1;
				$msg = "支付完成";
			}else{
				$msg = "未知错误:$trade_status";
				$trade_status = 5;
			}
			$OM = new UserOrdersModel();
			$rs = $OM->UpdatePayResult($out_trade_no, $trade_no, $_GET['total_fee'], $trade_status, $_GET);
			if($rs === 2){
				$msg = "支付金额有误";
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