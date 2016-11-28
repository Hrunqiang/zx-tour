<?php
/*
 * 报名
 * */
class PayResultAction extends Action {
	public function _initialize(){
	}
	public function gotoPay(){
		vendor('alipay.alipayapi');
	}
	public static  function retry($info){
		if(empty($info)) return true;
		$out_trade_no = $info['out_trade_no'];
		$trade_no = $info['trade_no'];
		$total_fee = $info['total_fee'];
		$trade_status = $info['trade_status'];
		if($trade_status == "TRADE_FINISHED"){
			$trade_status = 3;
		}elseif($trade_status == "TRADE_SUCCESS"){
			$trade_status = 1;
		}else{
			$trade_status = 5;
		}
		$OM = new UserOrdersModel();
		return $OM->UpdatePayResult($out_trade_no, $trade_no, $total_fee, $trade_status, $info);
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
		$npa = array(
				"tab"=>"赛事报名",
				"mtab"=>"报名支付结果",
		);
		$this->assign ( "npa", $npa );
		$this->assign ( "msg", $msg );
		$this->display("AlipayFront");
	}
}