<?php
class CrontabAction extends Action{
	const Pro	= 'gxws';
	const AppID		= 'wx5500fe7259271556';
	const AppSecret	= '9db2b144a7b12b306f80030637ecc802';
	const Token		= '5367519';
	const EncodingAESKey	= 'lpfZQ4pKcdnBcPUknddKLpyh7hpWcKwJmzKofOwh9Og';
	private $ApiUrl	= 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=%s&secret=%s';
	private $JsapiTicketUrl	= 'https://api.weixin.qq.com/cgi-bin/ticket/getticket?access_token=%s&type=jsapi';
	
	public function __construct(){
		if(MODE_NAME !== 'cli'){
			$ip	= get_client_ip();
			if($ip!='192.168.5.81' && $ip!='124.207.107.221' ){
				die('no right');
			}
		}
		$this->ApiUrl	= sprintf($this->ApiUrl,self::AppID,self::AppSecret);
	}
	
	/**
	 * 获取微信的accessToken
	 * 2小时超时
	 */
// 	public function getweixinToken(){
// 		$rs = curlRequest($this->ApiUrl);
// 		$json	= json_decode($rs,true);
// 		if($json && is_array($json)){
// 			$M	= new WeixinAcessTokenModel();
// 			$token	= $json['access_token'];
// 			$rs	= $M->accesstoken(self::Pro, $token);
// 			var_dump($rs);
// 		}else{
// 			@mwtlog("weixinaccesstoken_error",json_encode($rs)."\r\n",true);
// 		}
// 		unset($rs,$json,$M);
// 	}
	
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
					$jstk = $M->Jstoken(self::Pro, $jsTkjson['ticket']);
					echo "jstk:".json_encode($jstk)."\r\n";
				}else{
					echo "getJsTkJson_error:".json_encode($jsTkjson)."\r\n";
				}
			}else{
				echo "get token error ".$rs."\r\n";
			}
		}else{
			echo "weixinaccesstoken_error:".json_encode($rs)."\r\n";
			@mwtlog("weixinaccesstoken_error",json_encode($rs)."\r\n",true);
		}
		unset($rs,$json,$M);
	}
}