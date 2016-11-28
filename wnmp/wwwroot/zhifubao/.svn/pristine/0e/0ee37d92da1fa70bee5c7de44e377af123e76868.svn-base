<?php
class AliPay{
	protected $aop;
	public function __construct(){
		require_once dirname(__FILE__).'/lotusphp_runtime/ObjectUtil/ObjectUtil.php';
		require_once dirname(__FILE__).'/AopSdk.php';
		require_once dirname(__FILE__).'/function.inc.php';
		require_once dirname(__FILE__).'/config.php';
		require_once dirname(__FILE__).'/aop/AopClient.php';
		
		
		$this->aop = new AopClient ();
		
		$this->aop->gatewayUrl = 'https://openapi.alipay.com/gateway.do';
		$this->aop->appId = '2015082800238591';
		$this->aop->rsaPrivateKeyFilePath = dirname(__FILE__)."/key/rsa_private_key.pem";
		// //$aop->rsaPrivateKeyFilePath = "MIICXgIBAAKBgQDQLqVpn1q6YmywCwVf80jUT9Lc2DAyCETu7v2kkiqM2lk/WPz2LYCfQ4TCZu3J/4gRv9MPskgFzrcrEe3W7JfBxQqQRNzGA7OmRKKrSRqwkAlduYo2ndr8dB/n6+gGbeYPTm86t3AXjolZHi3E+VV+xJb52jG05WqcWu7XKyxUwwIDAQABAoGBAMZGRwCr5ytxJnccaAgUm56qT/hKZsygF5dBQ44EMEZqh2nQBU0p1UDae4zznzIuD5hoDEr8z5/IW6fHsbBrMbSATNc62Kf5EDwqy1SDpF7DPq4G0cksOvvBJZcUm6s7qwqIwE1Sj53gz2G4iP26MCxbxQvq7R+qJbkT2gNPjBgRAkEA+NNRGfzWTaRu10jPWn07O8HTqZ7HYnvOXh7CLkRmidwIEQQmh8JlprzWoHfqMZN8WBsRnBEMOhATg6fmvrZonwJBANYvUyaTtGogKIsJ810HYQEdKrUGj6H82oQDsHko0D+wAIwctZi+ayem9qiuhTAW1P0ol9CRNN+7FY+hNK4/zV0CQQCTMO4Y4WgkJdErqPaAIPSZNN9wx2xK5dH9+1QC6pN9mZtr9XiVdnmLWMndwxHWodg8hka0e6Ev97KTfw8QYfchAkANWon+n7rh2vtsH8SyiiE8JothGfWejds529kG1MqXDewa0DdqPIUFxd0fCzJ2mxXQatV8RXFceZeQiuZz7rppAkEAuxDLNiZO79KxDyrDrOhRG/Tk+8Z/hWUQk5ztptrGXI+p7mMNJ3L3WeQS9SCvCEhe3ono4esuckKeioPZgRe/0w==";
		//$aop->alipayPublicKey='MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDDI6d306Q8fIfCOaTXyiUeJHkrIvYISRcc73s3vF1ZT7XN8RNPwJxo8pWaJMmvyTn9N4HQ632qJBVHf8sxHi/fEsraprwCtzvzQETrNRwVxLO5jVmRGi60j8Ue1efIlzPXV9je9mkjzOmdssymZkh2QhUrCmZYI/FCEa3/cNMW0QIDAQAB';
		$this->aop->alipayPublicKey=dirname(__FILE__)."/key/alipay_rsa_public_key.pem";
		$this->aop->apiVersion = '1.0';
		$this->aop->postCharset='UTF-8';
		$this->aop->format='json';
	
	}
	
	public function createorder($orderinfo,$list,$userid){
		
		$orderid = $orderinfo['orderid'];
		$BizContent  = "{\"out_trade_no\":\"".$orderid."\",";
		$BizContent  .= "\"total_amount\":".$orderinfo['payprice'].",";
		$BizContent  .= "\"discountable_amount\":0,";
		$BizContent  .= "\"undiscountable_amount\":".$orderinfo['payprice'].",";
		//$BizContent  .= "\"buyer_logon_id\":\"".$userid."\",";
		$BizContent  .= "\"subject\":\"".$orderinfo['m_name']."\",";
		$BizContent  .= "\"body\":\"".$orderinfo['m_name']."\",";
		$BizContent  .= "\"buyer_id\":\"".$userid."\",";
		$BizContent  .= "\"goods_detail\":[";
		$len = count($list);
		foreach($list as $key=>$val){
			$BizContent  .="{";
			$BizContent  .= "\"goods_id\":\"".$val['id']."\",";
			$BizContent  .= "\"alipay_goods_id\":\"ali_zx_".$val['id']."\",";
			$BizContent  .= "\"goods_name\":\"".$val['g_name']."(".$val['type'].")"."\",";
			$BizContent  .= "\"quantity\":1,";
			$BizContent  .= "\"price\":".$val['goods_pay_sprice'].",";
			$BizContent  .= "\"goods_category\":\"".$val['type']."\",";
			$BizContent  .= "\"body\":\"".$val['g_name']."(".$val['type'].")"."\"";
			if($key==$len-1){
				$BizContent  .="}";
			}else{
				$BizContent  .="},";
			}
			
		}
		$BizContent  .= "],";
		$BizContent  .= "\"timeout_express\":\"90m\",";
		$BizContent  .= "\"alipay_store_id\":\"2016041400077000000003314986\"";
		$BizContent  .= "},";	
		require_once dirname(__FILE__).'/aop/request/AlipayTradeCreateRequest.php';
		$request = new AlipayTradeCreateRequest();
		// //$request = new AlipayTradePayRequest ();
		$request->setNotifyUrl("http://alipay.zx-tour.com/PayResult/back");
		$request->setBizContent($BizContent);
		$result = $this->aop->execute ( $request);
		$trade  = $result['alipay_trade_create_response']?$result['alipay_trade_create_response']:false;
		return $trade;
	}
	
	public function cancelorder($trade_no){
		require_once dirname(__FILE__).'/aop/request/AlipayTradeCloseRequest.php';
		$request = new AlipayTradeCloseRequest();
		$BizContent= "{";
	    //$BizContent.="\"out_trade_no\":\"023160628155838021542\"";
	   	$BizContent.="\"trade_no\":\"".$trade_no."\"";
  		$BizContent.="}";
		$request->setBizContent($BizContent);
		$result = $this->aop->execute ( $request);
		return $result['alipay_trade_close_response']?$result['alipay_trade_close_response']:false;
	}
	
	public function getuserid($code){
		require_once dirname(__FILE__).'/aop/request/AlipaySystemOauthTokenRequest.php';
		$request = new AlipaySystemOauthTokenRequest ();
		$request->setCode($code);
		$request->setGrantType("authorization_code");
		$result = $this->aop->execute ( $request);
		$user_id = $result['alipay_system_oauth_token_response']['user_id'];
		if($user_id){
			return $user_id;
		}else{
			return false;
		}
	}

}
