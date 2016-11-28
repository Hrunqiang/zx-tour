<?php
/**
 * 微信跑步Acton
 * @author hhy
 * @createTime 2016-4-17 下午3:13:57
 */
class WxRunerAction extends Action {
	private $OPENID	= null;
	
	/**
	 * 检测登录
	 */
	public function Login(){
		$openid	= session("Runnerweixin");
//  	$openid = "oR4Xts8G2L0vh-DxYA1IXEtzw2nSg";
//  		$openid = "oR4Xts0tXKpYwnK9z2berRbYRGBw";
//  		session("Runnerweixin",$openid);
		$login	= false;	
		$UserM	= new WeixinUsersModel();
		$usr = $UserM->getUidByOpenid($openid);	
		$result	= array('error'=>-1,'msg'=>'unlogin','data'=>array());
		if(!empty($openid)){
			$login	= true;
			$result	= array('error'=>0,'msg'=>"ok",'data'=>$usr);
			$ownerid = htmlspecialchars(addslashes(trim($_POST['ownerId'])));
			$runwayM = new  WeixinRunWayModel();
			if($runwayM->iscreate($openid)){
				$result['created'] = "true";
			}else{
				$result['created'] = "false";
			}
			$ownerinfo = $runwayM->getRunwayInfo($ownerid);
			$runlist = $runwayM->getRunwayList($ownerid);
			if($runlist){
				$result['records'] = json_encode($runlist);
				$ownerinfo["isShared"] = 1;
			}else{
				$result['records'] = "";
				$ownerinfo["isShared"] = 0;
			}
			$result['ownerNick'] = $ownerinfo['nick'];
			$result['totalDist'] = $ownerinfo['totalDist'];
			$result['ownerinfo'] = json_encode($ownerinfo);

			$data['url']	= urlencode($_SERVER['HTTP_REFERER']);
			$M	= new WeixinAcessTokenModel();
			$pro	= WeixinAcessTokenModel::Pro;
			$Tk	= $M->Jstoken($pro);
			//$Tk = "sM4AOVdWfPE4DxkXGEs8VJw9bIrTX3_1tdbiPQcXB4cS7ZYai4aP2jCOWnAsFBLtmN3_-mL2rtY2NpKy3Fd0iA";

			$js['noncestr']	= $data['noncestr']	= rand_string(6,5);
			$js['timestamp']	= $data['timestamp']	= time();
			$js['jsapi_ticket'] = $data['jsapi_ticket']	= $Tk;
			ksort($data);
			$js['signature'] = sha1(urldecode(http_build_query($data)));
			$result['js'] = $js;
		}
		echo json_encode($result);
	}
	
	/**
	 * 
	 */
	public function run(){
		$rs = array("success"=>"false","friendhelp"=>"false","data"=>array());
		$date = Date("Y-m-d H:i:s");
		if($date>="2016-04-28 09:05:00"){
			$rs['success'] = -1;
			$rs['code'] = "活动已结束！";
			$rs['friendhelp'] = "false";
			echo json_encode($rs);
			die;
		} 
		$data['ownerUserId'] = htmlspecialchars(addslashes(trim($_POST['ownerId'])));
		$data['runnerUserId'] = htmlspecialchars(addslashes(trim($_POST['userId'])));
		$data['dist'] = htmlspecialchars(addslashes(trim($_POST['dist'])));
		$data['createTime'] = Date("Y-m-d H:i:s");
		$runwayM = new  WeixinRunWayModel();
		$res = $runwayM->adddick($data);
		if($res!==false){
			$runwayM->updateSorce($data['ownerUserId'],$data['dist']);
			$runlist = $runwayM->getRunwayList($data['ownerUserId']);
			$rs['success'] = "true";
			$rs['data'] = $runlist;
			$rs['friendhelp'] = "false";
		}else{
			$rs['success'] = -1;
			$rs['code'] = "数据保存失败";
			$rs['friendhelp'] = "false";
		}
		echo json_encode($rs);
	}
	
	
	public function rank(){
		$openid	= session("Runnerweixin");
		//$openid = "oR4Xts8tgR1thWrvUC5gLaNmqxSM";
		//$openid = "oR4Xts0tXKpYwnK9z2berRbYRGBw";
		session("Runnerweixin",$openid);
		if(empty($openid)){
			$url = urlencode("http://weixin.zx-tour.com/WxRuner/rank/");
			redirect("/weixin/touserauth?login=1&secondurl=$url");
		}
		$runwayM = new  WeixinRunWayModel();
		$list =$runwayM->getList(1);
		$max = $runwayM->getMax();
		
		$arr = array(
			array("优惠券","67CGJPRT"),
			array("折扣券","2AMNPUWX"),
			array("满减券","24KMNTWX")
		);
		
		if($openid){
			$info = $runwayM->iscreate($openid);
			if($info){
				$this->assign("info",$info);
				$mc = $runwayM->getScoreMC($openid);
				$this->assign("mc",$mc+1);
				$date = Date("Y-m-d H:i:s");
				if($date>="2016-04-28 09:05:00"){
					if($info['totalDist']>="42195"){
						$price_info['ems'] = "true";
						$price_info['gift_name'] = "马拉松赛事纪念tee一件（随机）";
						$price_info['rank_hunt'] = '恭喜您完成“全马”！并获得';
					}else{
						$priceId = $info['totalDist']%3;
						$priceId = $priceId>0&&$priceId<3?$priceId:0;
						$price_info['ems'] = "false";
						$price_info['gift_name'] = $arr[$priceId][1];
						$price_info['rank_hunt'] = "恭喜您获得跑者装备".$arr[$priceId][0]."一张！";
					}
					$price_info['exchangeState'] = $info['state'];
					$price_info['is_expire'] = "true";
				}else{
					$price_info['is_expire'] = "false";
					$price_info['exchangeState'] = 1;
				}
			}else{
				$price_info['is_expire'] = "false";
			}
			$UserM	= new WeixinUsersModel();
			$usr = $UserM->getUidByOpenid($openid);
		}
		$this->assign("usr",$usr);
		$this->assign("list",$list);
		$this->assign("max",$max[0]['max']?$max[0]['max']:0);
		$this->assign("count",count($list));
		
		$this->assign("price_info",$price_info);
		$this->display();
	}
	
	public function ranklist(){
		
		$startpage = htmlspecialchars(addslashes(trim($_POST['currentPage'])));
		$runwayM = new  WeixinRunWayModel();
		$list =$runwayM->getList($startpage);
		if($list){
			$rs = array("startpage"=>$startpage+1,"list"=>$list);
		}else{
			$rs = array("startpage"=>$startpage,"list"=>array());
		}
		echo json_encode($rs);
	}
	
	public function addems(){
		$res = array("error"=>65535,"msg"=>"未知错误！");
		//{"user_phone":"12322221111","user_name":"11","user_address":"addraddr"}
		$data['name']  = htmlspecialchars(addslashes(trim($_POST['user_name'])));
		$data['phone'] = htmlspecialchars(addslashes(trim($_POST['user_phone'])));
		$data['addr']  = htmlspecialchars(addslashes(trim($_POST['user_address'])));
		$data['addr']  = htmlspecialchars(addslashes(trim($_POST['user_address'])));
		$data['state'] = 1;
		if(empty($data['phone'])){
			$res['error'] = 1;
			$res['msg'] = "电话不能为空！";
			echo json_encode($res);
			die;
		}
		$ownerid = session("Runnerweixin");
		$data['state'] = 1;
		
		if(empty($ownerid)){
			$res['error'] = 1;
			$res['msg'] = "无效openid";
			echo json_encode($res);
			die;
		}
		$runwayM = new  WeixinRunWayModel();
		if(!false===$runwayM->updateAddr($ownerid,$data)){
			$res['error'] = 0;
			$res['msg'] = "ok";
		}else{
			$res['error'] = 1;
			$res['msg'] = "保存失败！";
		}
		echo json_encode($res);
	}
	
	public function crontab(){
		$date = Date("Y-m-d H:i:s");
		if($date>="2016-04-28 09:05:00"){
			die("out of time\r\n");
		}
		$runwayM = new  WeixinRunWayModel();
		$openid = "oR4Xts8tgR1thWrvUC5gLaNmqxSM";
		$mc = $runwayM->getScoreMC($openid);
		if($mc>=1){
			$score = mt_rand(567,999);
		}else{
			$list =$runwayM->getList(1);
			if($list[0]['bestScore']>$list[1]['bestScore']+10000){
				die($date.":大于1万");
			}
			$score = mt_rand(100,200);
		}
		echo $date.":".$score."\r\n";
		
		$sql = "UPDATE `zx_run_runway` SET totalDist = totalDist+$score WHERE ownerUserId= '$openid'";
		$res = $runwayM->query($sql);

	}
	
}