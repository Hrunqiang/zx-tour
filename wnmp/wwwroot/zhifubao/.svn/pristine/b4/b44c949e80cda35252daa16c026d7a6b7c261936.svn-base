<?php
class CrontabWXAction extends Action{
	const Pro	= 'ZXHY';
	const AppID		= 'wxd32026a97b1282b3';
	const AppSecret	= '08932139dca264580cc8f8dd1cc511c9';
	const Token		= '5367519';
	const EncodingAESKey	= 'lpfZQ4pKcdnBcPUknddKLpyh7hpWcKwJmzKofOwh9Og';
	private $ApiUrl	= 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=%s&secret=%s';
	private $JsapiTicketUrl	= 'https://api.weixin.qq.com/cgi-bin/ticket/getticket?access_token=%s&type=jsapi';
	
	public function __construct(){
		if(MODE_NAME !== 'cli'){
			die('no right');
		}
		ini_set ( "max_execution_time", "0" );
		ini_set ( 'memory_limit', '512M' );
		$this->ApiUrl	= sprintf($this->ApiUrl,self::AppID,self::AppSecret);
	}
	
	/**
	 * 获取微信的accessToken
	 * 2小时超时
	 */
	public function getweixinToken(){
		$rs = curlRequest($this->ApiUrl);
		$json	= json_decode($rs,true);
		if($json && is_array($json)){
			$M	= new WeixinAcessTokenModel();
			$token	= $json['access_token'];
			$rs	= $M->accesstoken(self::Pro, $token);
			if($token){
				$this->JsapiTicketUrl	= sprintf($this->JsapiTicketUrl,$token);
				$jsTk = curlRequest($this->JsapiTicketUrl);
				$jsTkjson	= json_decode($jsTk,true);
// 				var_dump($jsTk);
				if($jsTkjson && !empty($jsTkjson['ticket'])){
					$M->Jstoken(self::Pro, $jsTkjson['ticket']);
				}else{
					echo "getJsTkJson_error:".json_encode($jsTkjson)."\r\n";
				}
			}
		}else{
			@mwtlog("weixinaccesstoken_error",json_encode($rs)."\r\n",true);
		}
		unset($rs,$json,$M);
	}
}