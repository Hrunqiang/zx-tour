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
		$sign		= intval($_GET['login']);
		$xm		= trim($_GET['xm']);
		$xm		= empty($xm)?WeixinAcessTokenModel::Pro:$xm;
		$secondurl		= trim($_GET['secondurl']);
		$referer	= !empty($secondurl)?$secondurl:$_SERVER['HTTP_REFERER'];
		if(empty($referer)){
			header("Content-type:text/html;charset=utf-8;");
			die("此种情况请联系管理员");
		}
		if($sign){
			$scope	= 1;//已授权过
		}else{
			$scope	= 0;//未授权过
		}
		$M	= new WeixinAcessTokenModel();
		if(strpos($referer, 'zx-tour.com') > 0 ||strpos($referer, '127.0') > 0){
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
			if(!empty($rs['id'])){
				/* header("Content-Type:text/html;charset=utf-8");
				echo "<pre>";
				var_dump($rs); */
				
				session("SESSION_ZX_OPENID",$rs['openid']);
				session ('SESSION_ZX_AUTHID',$rs['id']);
				session("SESSION_ZX_USERSTATE",$rs['userstate']);
				session("SESSION_ZX_PHONE",$rs['phone']);
				session("SESSION_ZX_SEXY",$rs['sexy']);
// 				session("nickname",$rs['nickname']);
// 				session("type",$rs['0']);
				if(!empty($furl)){
					$furl	= preg_replace("/openid=[^&]*&?/", "", $furl);
					$furl	= preg_replace("/tk=[^&]*&?/", "", $furl);
					if(strpos($furl, "?") > 0){
						$str	= "&";
					}else{
						$str	= "?";
					}
					$furl	= $furl."{$str}openid={$rs['openid']}&tk={$rs['tk']}";
/* 					echo $furl;
					die; */
					header("location:$furl");
				}else{
// 					if($state=='yb'){
// 						header("location:http://www.91yb.cn/index.html?openid=".$rs['openid']."&tk={$rs['tk']}");
// 					}else{
// 						header("location:http://www.91yb.cn?f=weixin");
// 					}
					die("未知情况");
				}
			}else{
				//让用户去授权
 				header("location:/weixin/touserauth?xm=$state&secondurl=".urlencode($furl));
			}
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
		//$Tk = "sM4AOVdWfPE4DxkXGEs8VJw9bIrTX3_1tdbiPQcXB4cS7ZYai4aP2jCOWnAsFBLtmN3_-mL2rtY2NpKy3Fd0iA";
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
}