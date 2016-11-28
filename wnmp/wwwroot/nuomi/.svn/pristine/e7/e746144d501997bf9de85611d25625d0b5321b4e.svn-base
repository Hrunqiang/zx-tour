<?php
/*
* 微信accessToken
*/
define("TOKEN", "5367519");
class WeixinAcessTokenModel{
// 	protected $trueTableName = "weixin_access_token";
// 	protected $connection = 'DB_CONFIG1';
	const Pro	= 'ZXHY';
	const AppID		= 'wxd32026a97b1282b3';
	const AppSecret	= '08932139dca264580cc8f8dd1cc511c9';
	const EncodingAESKey	= 'lpfZQ4pKcdnBcPUknddKLpyh7hpWcKwJmzKofOwh9Og';
	const ApiUrl	= 'https://api.weixin.qq.com';
	const CacheKey	= 'GzhToken';
	const WEIXINTK_KEY	= 'WEIXINTK_';
	const WEIXINJSTK_KEY	= 'WEIXINTK_JS_';
	
	/**
	 * jsapi_ticket
	 * @param unknown_type $pro
	 * @param unknown_type $token
	 * @return boolean|unknown
	 */
	public function Jstoken($pro,$token){
		if(empty($pro)) return false;
		$Redis	= new RedisModel();
		if(!empty($token)){
			if($Redis){
				$setRs = $Redis->set(self::WEIXINJSTK_KEY.$pro,$token);
			}else{
				echo "setRedisJsTk_error:".json_encode($setRs)."\r\n";
			}
			return $setRs;
		}else{
			$getRs = $Redis->get(self::WEIXINJSTK_KEY.$pro);
			return $getRs;
		}
	}
	
	/**
	 * code换取用户Token
	 * @param  $code
	 */
	public function codeChangeToken($code){
		if(empty($code)) return false;
		$url	= self::ApiUrl.'/sns/oauth2/access_token?appid=%s&secret=%s&code=%s&grant_type=authorization_code';
		$url	= sprintf($url,self::AppID,self::AppSecret,$code);
		$result	= curlRequest($url);
		$json	= json_decode($result,true);
		$data	= array();
		if($result && is_array($json) && empty($json['errcode']) && $json['openid']){
			//获取用户信息
			$data	= $this->getUserInfo($json['access_token'], $json['openid']);
			mwtlog("Weixin_auth","userdata:".json_encode($data)."\r\n",true);
			$data['headerimg']	= $data['headimgurl'];//headimgurl//headerimg
			$data['scope']	= $json['scope'];
			if(!empty($json['nickname'])){
				$data['usertype']= 1;
			}else{
				$data['usertype']= 0;
			}
			$UserM	= new WeixinUsersModel();
			$tk	= WeixinUsersModel::guid();
			$ckRs =  $UserM->checkUserExist($data['openid'], $data);
			return $ckRs;
		}else{
			@mwtlog('codeChangeToken_error','$result:'.$result."\r\n",true);
			return false;
		}
	}
	
	/**
	 * 获取授权用户的用户信息
	 * @param  用户$token
	 * @param  $openid
	 * @return mixed|boolean
	 */
	public function getUserInfo($token,$openid){
		$url	= self::ApiUrl.'/sns/userinfo?access_token=%s&openid=%s&lang=zh_CN';
		$url	= sprintf($url,$token,$openid);
		$result	= curlRequest($url);
		$json	= json_decode($result,true);
		if($result && is_array($json) && empty($json['errcode'])){
			return $json;
		}else{
			@mwtlog('getUserInfo_error','$result:'.$result."\r\n",true);
			return false;
		}
	}
	
	/**
	 * 添加或更新
	 * @param  $pro
	 * @param  $token
	 */
	public function accesstoken($pro,$token){
		if(empty($pro)) return false;
		$Redis	= new RedisModel();
		if(!empty($token)){
			if($Redis){
				$setRs = $Redis->set(self::WEIXINTK_KEY.$pro,$token);
			}
			return $setRs;
		}else{
			$getRs = $Redis->get(self::WEIXINTK_KEY.$pro);
			return $getRs;
		}
	}
	
	public function userAuth($scope,$xm,$furl=""){
		$Appid	= self::AppID;
// 		$scope	= 'snsapi_userinfo';//应用授权作用域，snsapi_base （不弹出授权页面，直接跳转，只能获取用户openid），snsapi_userinfo （弹出授权页面，可通过openid拿到昵称、性别、所在地。并且，即使在未关注的情况下，只要用户授权，也能获取其信息）
		if(empty($scope)){
			$scope	= 'snsapi_userinfo';
		}else{
			$scope	= 'snsapi_base';
		}
		if(!empty($furl)){
			$furl	= urlencode($furl);
			$furl	= '?furl='.$furl;
		}
		$redirct	= urlencode('http://weixin.zx-tour.com/weixin/userAuth'.$furl);
		$url	= "https://open.weixin.qq.com/connect/oauth2/authorize?appid=$Appid&redirect_uri=$redirct&response_type=code&scope=$scope&state=$xm#wechat_redirect";
		header("location:$url");
// 		return $url;
	}
	
	/**
	 * 检查accessToken是否有效
	 * @param  $openid
	 * @param  $token
	 * @return boolean
	 */
	public function isValueToken($openid,$token){
		$url	= self::ApiUrl.'/sns/auth?access_token=%s&openid=%s';
		$url	= sprintf($url,$token,$openid);
		$result	= curlRequest($url);
		$json	= json_decode($result,true);
		if($json && $json['errcode']==0){
			return true;
		}else{
			return false;
		}
	}
	public function checkSignature()
	{
		// you must define TOKEN by yourself
		if (!defined("TOKEN")) {
			throw new Exception('TOKEN is not defined!');
		}
	
		$signature = $_GET["signature"];
		$timestamp = $_GET["timestamp"];
		$nonce = $_GET["nonce"];
	
		$token = TOKEN;
		$tmpArr = array($token, $timestamp, $nonce);
		// use SORT_STRING rule
		sort($tmpArr, SORT_STRING);
		$tmpStr = implode( $tmpArr );
		$tmpStr = sha1( $tmpStr );
	
		if( $tmpStr == $signature ){
			return true;
		}else{
			return false;
		}
	}
	public function responseMsg()
	{
		//get post data, May be due to the different environments
		$postStr = $GLOBALS["HTTP_RAW_POST_DATA"];
		//extract post data
		if (!empty($postStr)){
			/* libxml_disable_entity_loader is to prevent XML eXternal Entity Injection,
			 the best way is to check the validity of xml by yourself */
			libxml_disable_entity_loader(true);
			$postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
			$fromUsername = $postObj->FromUserName;
			if(!empty($fromUsername)){
				$this->getGzUserInfo($fromUsername);
			}
			$toUsername = $postObj->ToUserName;
			$keyword = trim($postObj->Content);
			$Event = trim($postObj->Event);//事件类型，subscribe(订阅)、unsubscribe(取消订阅)
// 			$time = time();
// 			$textTpl = "<xml>
// 							<ToUserName><![CDATA[%s]]></ToUserName>
// 							<FromUserName><![CDATA[%s]]></FromUserName>
// 							<CreateTime>%s</CreateTime>
// 							<MsgType><![CDATA[%s]]></MsgType>
// 							<Content><![CDATA[%s]]></Content>
// 							<FuncFlag>0</FuncFlag>
// 							</xml>";
// 			if(!empty( $keyword ))
// 			{
// 				$msgType = "text";
			//订阅消息推送
			$resultStr	= "";
			if(!empty($Event) && $Event=='subscribe'){
				$contentStr = "您好，感谢您订阅衣伴网络，我们程序员正在玩命开发中，敬请期待...... 如果觉得我们有用，请推荐您的朋友关注。（微信搜索yibanwangluo）";
				$resultStr	= $this->responseTxt($fromUsername, $toUsername, $contentStr);
			}else{
				if(!empty($keyword) && $keyword=='ybwl' ){
					$title	= '衣伴商务速洗';
					$des	= '全国最大商务速洗O2O平台';
					$picurl	= 'http://www.91yb.cn/static/images/weixin.jpg';
					$url	= 'http://www.91yb.cn/?f=weixin';
					$resultStr = $this->responsePicTxt($fromUsername, $toUsername, $title, $des, $picurl, $url);
				}else{
					$resultStr =$this->responseTxt($fromUsername, $toUsername, '您好，感谢您订阅衣伴网络，我们程序员正在玩命开发中，敬请期待......');
				}
			}
				
				
				//@mwtlog("responseMsg_test",$postStr."\r\n",true);
				echo $resultStr;
// 			}else{
// 				echo "Input something...";
// 			}
	
		}else {
			echo "";
			exit;
		}
	}
	
	/**
	 * 文本消息
	 * @param  $fromUsername
	 * @param  $toUsername
	 * @param  $contentStr
	 * @return boolean|string
	 */
	public function responseTxt($fromUsername,$toUsername,$contentStr){
		if(empty($fromUsername) || empty($toUsername)) return false;
		$time = time();
		$textTpl = "<xml>
							<ToUserName><![CDATA[%s]]></ToUserName>
							<FromUserName><![CDATA[%s]]></FromUserName>
							<CreateTime>%s</CreateTime>
							<MsgType><![CDATA[%s]]></MsgType>
							<Content><![CDATA[%s]]></Content>
							<FuncFlag>0</FuncFlag>
							</xml>";
		$msgType = "text";
		$resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
		return $resultStr;
	}
	/**
	 * 图文消息
	 * @param  $fromUsername
	 * @param  $toUsername
	 * @param  $title
	 * @param  $des
	 * @param  $picurl
	 * @param  $url
	 * @return boolean|string
	 */
	public function responsePicTxt($fromUsername,$toUsername,$title,$des,$picurl,$url){
		if(empty($fromUsername) || empty($toUsername)) return false;
		$textTpl	= "<xml>
						<ToUserName><![CDATA[%s]]></ToUserName>
						<FromUserName><![CDATA[%s]]></FromUserName>
						<CreateTime>%s</CreateTime>
						<MsgType><![CDATA[%s]]></MsgType>
						<ArticleCount>1</ArticleCount>
						<Articles>
						<item>
						<Title><![CDATA[%s]]></Title> 
						<Description><![CDATA[%s]]></Description>
						<PicUrl><![CDATA[%s]]></PicUrl>
						<Url><![CDATA[%s]]></Url>
						</item>
						</Articles>
						</xml> ";
		$time	= time();
		$resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, 'news', $title,$des,$picurl,$url);
		return $resultStr;
	}
	/**
	 * @param  $Path
	 * @param  $param
	 * @return boolean
	 */
	public function exc($Path,$param){
		if(empty($Path)) return false;
	
	}
}