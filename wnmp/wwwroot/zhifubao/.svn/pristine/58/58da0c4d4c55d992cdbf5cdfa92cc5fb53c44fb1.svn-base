<?php
/*
 * 报名
 * */
class EnrollAction extends Action {

	private $result = array("error"=>66535,"msg"=>"unknow","data"=>array());
	
	
	Public function _initialize(){
		$PATH_INFO = $_SERVER['PATH_INFO'];
		$nologinlist = array("/Enroll","/Enroll/","/Enroll/index","/Enroll/index/","/Enroll/step2","/Enroll/step2/");
		if(!in_array($PATH_INFO, $nologinlist)){
			B('AuthCheck');
			if(isweixin()){
				if(!session("SESSION_ZX_PHONE")){
					session("SESSION_ZX_HISTORYURL",$_SERVER['REQUEST_URI']);
					redirect ( '/Account/login' );
				}
			}
		}
	}
	
	/**
	 * 赛程选择
	 */
	public function index() {
		$matchid = htmlspecialchars(addslashes(trim($_REQUEST['m_id'])));
		if(empty($matchid)){
			redirect("/");
		}
		
		//东马订制链接
		$date = Date("Y-m-d H:i:s");
		if($matchid==287){
			redirect("/");
		}
		
		if($matchid == 350 && $date<="2016-11-07 16:00:00"){
    		redirect("/");
    	}
		
		//test code 
		$matchM = new MatchInfoModel();
		$res = $matchM->checkMatchById($matchid);
		if($res){
			session("SESSION_ZX_MATCHID",$matchid);
			$goodM = new GoodsModel();
			//赛程
			$this->assign("course",$goodM->getDataByTypeId($matchid,1));
			//套餐
			$meal = $goodM->getgoodsByMatchId($matchid,0,2);
			$this->assign("meal",json_encode($meal));
			//附加服务
			$this->assign("attach",$goodM->getDataByTypeId($matchid,3));
			//备注
			$this->assign("remarks",$goodM->getDataByTypeId($matchid,4));
			//$matchid
			$this->assign("matchid",$matchid);
			$this->display ("index");
		}else{
// 			echo $matchM->getLastSql();
// 			var_dump($res);
			header("Content-type:text/html;charset=utf-8;");
			die("<p style='font-size:2rem;'>很遗憾！该行程报名名额已满，欢迎选择知行合逸其他赛事行程。<a href='http://mp.weixin.qq.com/s?__biz=MzA5NTU1ODkxNw==&mid=208829162&idx=1&sn=a8b02f1993ead8a20898c4bf269a9a1d#rd'>点击查看其他行程</a></p>");
		}
	}
	
	public function createorder(){
		$_POST = session("SESSION_ZX_SHOPPINGCART");
		$date = Date("Y-m-d H:i:s");
		$matchid = session("SESSION_ZX_MATCHID");
		$orderData['uid'] = $uid =  session("SESSION_ZX_AUTHID");
		$orderData['matchid'] = $matchid;
		$orderData['orderid'] = createOrderId($orderData['uid'],$orderData['matchid']);
		$orderData['platform'] = "alipay";
		$orderData['user_remarks'] = htmlspecialchars(addslashes(trim($_POST['remarks'])));
		$orderData['ctime'] = $orderData['utime'] = $date;
		$orderData['paystats'] = -1;
		$matchM = new MatchInfoModel();
		$res = $matchM->checkMatchById($matchid);
		if($res[0]['m_ptype']=="海外"){
			$orderData['pay_deadline'] = Date("Y-m-d H:i:s",strtotime("+5400 seconds"));
		}else{
			$orderData['pay_deadline'] = Date("Y-m-d H:i:s",strtotime("+1800 seconds"));
		}
		$UO = new UserOrdersModel();
		$UO->startTrans();
		$orderid = $UO->creatOrders($orderData);
		if($orderid){
			$orderprice = $payprice = 0;
			$orderinfoM = new OrdersInfoModel();
			$orderinfoM->startTrans();
			//$delres = $orderinfoM->delJdOrders($orderid);
			$delres = $orderinfoM->releaseOrders($orderid);
			if($delres!==false){
				//加小单
				$GM = new GoodsModel();
		
				$orderConfig = array(
						"course"=>array("type"=>"赛程"),
						"meal"=>array("type"=>"套餐"),
						"attach"=>array("type"=>"附加优质服务")
				);
		
				//是否包含单肩差
				$issingle = htmlspecialchars(addslashes(trim($_POST['issingle'])));
		
				foreach ($orderConfig as $key=>$value){
					$goodsid =$_POST[$key];
					$goodsIdList = array();
						
					if(gettype($goodsid)=="string"){
						array_push($goodsIdList, htmlspecialchars(addslashes(trim($goodsid))));
					}else if(gettype($goodsid)=="array"){
						foreach ($goodsid as $k=>$v){
							array_push($goodsIdList,htmlspecialchars(addslashes(trim($v))));
						}
					}
						
					if($goodsIdList){
						for($i=0,$len=count($goodsIdList);$i<$len;$i++){
							$goodsinfo = $GM->getGoodsInfoById($goodsIdList[$i]);
							if($goodsinfo){
								$count = 1;
								$data = array();
								$data['uid'] = $uid;
								$data['orderid'] = $orderid;
								$data['goodsid']= $goodsIdList[$i];
								$data['goodsprice'] = $goodsinfo['g_price']*$count;
								$data['goods_pay_sprice'] = $goodsinfo['g_currprice']*$count;
								$data['count'] = $count;
								$data['ctime'] = $data['utime'] = $date;
								$data['type'] = $value['type'];
								if($orderinfoM->addOrders($data)){
									if(false===$GM->updateGoodsCountById_v3($data['goodsid'], $data['count'],true)){
										$UO->rollback();
										$orderinfoM->rollback();
										$rs = array("error"=>1005,"msg"=>"下单失败，请重试！！");
									}else{
										$orderprice += $data['goodsprice'];
										$payprice += $data['goods_pay_sprice'];
									}
								}else{
									$UO->rollback();
									$orderinfoM->rollback();
									$rs = array("error"=>1002,"msg"=>"下单失败，请重试！！");
									header("Content-type:text/html;charset=utf-8;");
									$msg = '<h2><a href="/Matchinfo?m_id='.$matchid.'" >返回赛事首页</a></h2><script>alert("'.$rs['msg'].'")</script>';
									die($msg);
								}
		
								if($issingle && $key=="meal"){
									$count = 1;
									$data = array();
									$data['uid'] = $uid;
									$data['orderid'] = $orderid;
									$data['goodsid']= $goodsIdList[$i];
									$data['goodsprice'] = $goodsinfo['g_singleprice']*$count;
									$data['goods_pay_sprice'] = $goodsinfo['g_singleprice']*$count;
									$data['count'] = $count;
									$data['ctime'] = $data['utime'] = $date;
									$data['type'] = "单房差";
									if($orderinfoM->addOrders($data)){
										$orderprice += $data['goodsprice'];
										$payprice += $data['goods_pay_sprice'];
									}else{
										$UO->rollback();
										$orderinfoM->rollback();
										$rs = array("error"=>1006,"msg"=>"下单失败，请重试！！！");
										header("Content-type:text/html;charset=utf-8;");
										$msg = '<h2><a href="/Matchinfo?m_id='.$matchid.'" >返回赛事首页</a></h2><script>alert("'.$rs['msg'].'")</script>';
										die($msg);
									}
								}
							}else{
								$UO->rollback();
								$orderinfoM->rollback();
								$rs = array("error"=>15,"msg"=>"该".$value['type']."名额已满！您可以尝试其它赛程！");
								header("Content-type:text/html;charset=utf-8;");
								$msg = '<h2><a href="/Matchinfo?m_id='.$matchid.'" >返回赛事首页</a></h2><script>alert("'.$rs['msg'].'")</script>';
								die($msg);
							}
						}
					}else{
						if($key=="course"){
							$UO->rollback();
							$orderinfoM->rollback();
							$rs = array("error"=>14,"msg"=>"请选择您要报名的赛程！");
							header("Content-type:text/html;charset=utf-8;");
							$msg = '<h2><a href="/Matchinfo?m_id='.$matchid.'" >返回赛事首页</a></h2><script>alert("'.$rs['msg'].'")</script>';
							die($msg);
						}
					}
				}
				$payprice = $payprice>=0?$payprice:0;
				$orderprice = $orderprice>=0?$orderprice:0;
				$updateprice = $UO->updateAllpriceByOrderid($uid, $orderid,$payprice,$orderprice);
				if(!($updateprice===false)){
					$UO->commit();
					$orderinfoM->commit();
					session("SESSION_ZX_ORDERID",$orderid);
					$rs = array("error"=>0,"msg"=>$orderid);
					$redis = new RedisModel();
					$arr = array(
							"a"=>"OrderNotice",
							"m"=>"notice",
							"d"=>array("orderid"=>$orderid,"status"=>5));
					$redis->lpush("order_notice_list_v2",json_encode($arr));
				}else{
					$orderinfoM->rollback();
					$UO->rollback();
					$rs = array("error"=>11,"msg"=>"下单失败，请重试！");
				}
			}else{
				$UO->rollback();
				$orderinfoM->rollback();
				$rs = array("error"=>12,"msg"=>"下单失败，请重试！！");
			}
		}else{
			$UO->rollback();
			$msg = "订单创建失败！";
			$rs = array("error"=>13,"msg"=>$msg);
		}

		if($rs['error']==0){
			redirect("/Enroll/userdata?orderid=".$rs['msg']);
		}else{
			header("Content-type:text/html;charset=utf-8;");
			$msg = '<h2><a href="/Matchinfo?m_id='.$matchid.'" >返回赛事首页</a></h2><script>alert("'.$rs['msg'].'")</script>';
			echo $msg;
			die();
		}
	}
	
/**
	 * 验证是否可下半
	 */
	public function step2(){
		$rs = array("error"=>65535,"msg"=>"未知错误","data"=>"");
		
		$matchid = htmlspecialchars(addslashes(trim($_GET['m_id'])));
		$marchM = new MatchInfoModel();

		//赛事报锃截至或未上线
		if(!$marchM->checkMatchById($matchid)){
			$rs['error'] = 1;
			$rs['msg'] = "该赛事目前不提供报名！";
			echo json_encode($rs);
			exit();
		}
		
		$uid = session("SESSION_ZX_AUTHID");
		if($uid){
			$orderM = new UserOrdersModel();
			$count = $orderM->where("uid=$uid and matchid = $matchid and (paystats = 1 or paystats =10)")->count();
			if($count!==false){
				if($count>0){
					$rs['error'] = 1;
					$rs['msg'] = "你已经报名，请不要重复报名！";
				}else{
					session("SESSION_ZX_SHOPPINGCART",$_POST);
					$rs['error'] = 0;
					$rs['login'] = 1;
					$rs['msg'] = "ok";
				}
			}else{
				$rs['error'] = 1;
				$rs['msg'] = "系统错误！";
			}
			echo json_encode($rs);
			exit();
		}else{
			session("SESSION_ZX_HISTORYURL","/Enroll/createorder");
			$rs['error'] = 0;
			$rs['login'] = 0;
			$rs['msg'] = "未登录";
			echo json_encode($rs);
			exit();
		}		
	}
	
	public function userdata(){
		$userState = session("SESSION_ZX_USERSTATE");
		$orderid = htmlspecialchars(addslashes(trim($_GET['orderid'])))?htmlspecialchars(addslashes(trim($_GET['orderid']))):session("SESSION_ZX_ORDERID");
		switch ($userState){
			case 2:
			case 3:
			case 4:
				session("SESSION_ZX_MATCHID");
				redirect ("/PayResult/payorder?orderid=".$orderid);
				break;
			default:
				//重新登录
				session("SESSION_ZX_HISTORYURL",$_SERVER['REQUEST_URI']);
				redirect ( '/Account/login' );
		};
	}

}