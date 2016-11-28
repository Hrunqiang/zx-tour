<?php
/***
 * AppID:wx68259378fd828bf3
 * AppSecret:0c79e1fa963cd80cc0be99b20a18faeb
 */
class WeixinAction extends Action {
	public function index(){
		echo "weixin interface";
	}
	/*
	 * 事件相应信息
	 */
	public function response(){
		$echoStr = $_GET["echostr"];
// 		@mwtlog("winxin_test",json_encode($_GET)."\r\n",true);
		$M	= new WeixinAcessTokenModel();
		$M->checkSignature();
        //valid signature , option
        if($M->checkSignature()){
//         	echo $echoStr;
//         	exit;
	        $M->responseMsg();
        }
        
	}
	/**
	 * 授权页面
	 */
	public function touserauth(){
		$sign	= $_GET['login'];
		$xm		= $_GET['xm'];
		$xm		= empty($xm)?'gxwssd':$xm;
		$secondurl		= trim($_GET['secondurl']);
		$referer	= !empty($secondurl)?$secondurl:$_SERVER['HTTP_REFERER'];
		if(empty($referer)){
			die("此种情况请联系管理员");
		}
		if($sign){
			$scope	= 1;//已授权过
		}else{
			$scope	= 0;//未授权过
		}
		$M	= new WeixinAcessTokenModel();
		if(strpos($referer, 'at321.cn') > 0 || strpos($referer, 'at321.com') > 0 ||strpos($referer, '192.168.10') > 0){
			$furl	= $referer;
		}
		$M->userAuth($scope,$xm,$furl);
	}
	/**
	 * 用户授权回调函数
	 */
	public function userAuth(){
		$code	= trim($_GET['code']);
		$state	= trim($_GET['state']);
		$furl	= trim($_GET['furl']);
		if(empty($code)){
			//用户没有授权
			echo "<div style='width:100%;font-size:18px;color:red;'>授权失败</div>";
		}else{
			$M	= new WeixinAcessTokenModel();
			$rs	= $M->codeChangeToken($code);
			if(!empty($rs['nickname'])){
				session("sdweixin",$rs['openid']);
				if(!empty($furl)){
					$furl	= preg_replace("/openid=[^&]*&?/", "", $furl);
					if(strpos($furl, "?") > 0){
						$str	= "&";
					}else{
						$str	= "?";
					}
					$furl	= $furl."{$str}openid={$rs['openid']}";
					header("location:$furl");
				}else{
					if($state=='gxwssd'){
						header("location:http://gxsjws.at321.com/sd_weixin.html?openid=".$rs['openid']);
					}else{
						header("location:http://www.at321.com?f=weixin");
					}
				}
			}else{
				//让用户去授权
				header("location:http://gxsjws.at321.com/weixin?s=weixin&a=touserauth&xm=$state&secondurl=".urlencode($furl));
			}
			
			
// 			var_dump($rs);
		}
		
	}
	
	/**
	 * 获取js token
	 */
	public function getJsTk(){
		$rs	= array("error"=>66535,"msg"=>"unknow","data"=>array());
		$data['url']	= trim($_GET['url']);
		if(empty($data['url'])) return false;
		$M	= new WeixinAcessTokenModel();
		$pro	= WeixinAcessTokenModel::Pro;
		$Tk	= $M->Jstoken($pro);
		if(!empty($Tk)){
			$rs['error']	=0;
			$rs['msg']		="ok";
			$rs["data"]['noncestr']	= $data['noncestr']	= rand_string(6,5);
			$rs["data"]['timestamp']	= $data['timestamp']	= time();
			$data['jsapi_ticket']	= $Tk;
			ksort($data);
			$rs["data"]['signature'] = sha1(urldecode(http_build_query($data)));
		}else{
			$rs['error']	=31;
			$rs['msg']		="error tk";
		}
		echo json_encode($rs);
	}
	
	/////////////////////////////////////////////////////////
	public function kuaidi(){
		if(isset($_GET['from'])){
			header("location:http://weixin.at321.cn/sd_weixin.html?f=sheark");
		}
		$this->display();
	}
	public function jinrong(){
		if(isset($_GET['from'])){
			header("location:http://weixin.at321.cn/sd_client.html?f=shearj");
		}
		$this->display();
	}
}