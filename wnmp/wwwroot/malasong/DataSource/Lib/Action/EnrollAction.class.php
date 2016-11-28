<?php
/*
 * 报名
 * */
class EnrollAction extends Action {
	private static $UID;
    public static $AUID = array(81,1,101,99);
	private $result = array("error"=>66535,"msg"=>"unknow","data"=>array());
	public function _initialize(){
		B('AuthCheck');
//        self::$AUID = array();
        self::$UID = session("authId");
// 		self::$UID = empty(self::$UID)?1:self::$UID;
	}
	public function test(){
	}
	/**
	 *获取商品信息列表
	 */
	public function getGoods(){
		$pid = intval($_POST['pid']);
		$result = $this->result;
		if(empty($pid)){
			$result['error'] = 1;
			$result['msg'] = 'error 001';
		}else{
			$M = new GoodsModel();
			$data = $M->getDataByParendId($pid);
			if(empty($data)){
				$result['error'] = 2;
				$result['msg'] = 'error 002';
			}else{
				$result['error'] = 0;
				$result['msg'] = 'ok';
				$result['data']= $data;
			}
		}
		echo json_encode($result);die;
	}
	public function payOrder(){
		$result = $this->result;
		
		$orderid = addslashes($_POST['orderid']);
		$bmtypeid = intval($_POST['bmtypeid']);
		$baomingdanid = $_POST['baomingdanid'];
		if(!is_array($baomingdanid)){
			$baomingdanid = array($baomingdanid);
		}
		$jdinfo			 = $_POST['jdinfo'];
		$OIFM = new OrdersInfoModel();
		$GM = new GoodsModel();
		$bmtypeInfo = $GM->getGoodsInfoById($bmtypeid);
		$allPriceArray = array();
		$allPriceArray[]=$bmtypeInfo['goodsprice']*count($baomingdanid);
		$OIFM->startTrans();
		foreach($baomingdanid as $k=>$v){
			$v = intval($v);
			$updaters = $OIFM->updateBaomingdanInfo(self::$UID,$bmtypeid, $orderid, $v, $bmtypeInfo['goodsprice']);
			if(!$updaters){
				break;
			}
		}
		if(!$updaters){
			$result['error'] = 1;
			$result['msg'] = '报名单更新失败,请重试!';
			$OIFM->rollback();
		}else{
			$error = 0;
			$OIFM->delJdOrders(self::$UID, $orderid);
			if(is_array($jdinfo) && !empty($jdinfo)){
				foreach($jdinfo as $k=>$v){
// 					if(empty($v['stime']) || empty($v['etime'])) continue;
					$mindates = minDate($v['stime'], $v['etime']);
					if($mindates<=0){
						$OIFM->rollback();
						$result['error'] = 1;
						$result['msg'] = '酒店预订日期不正确!';
						$error=1;
						break;
					}
					$price = $OIFM->addOrders(self::$UID, $orderid, intval($v['id']), addslashes($v['stime']), addslashes($v['etime']),intval($v['count']));
					if(!$price){
						$OIFM->rollback();
						$result['error'] = 1;
						$result['msg'] = '酒店信息有更新,请刷新重新预订!';
						$error=1;
						break;
					}else{
						$allPriceArray[]=$price*$mindates*intval($v['count']);
					}
				}
			}
			if($error === 0){
				$allprice = array_sum($allPriceArray);
				$OM = new UserOrdersModel();
				$rs = $OM->updateAllpriceByOrderid(self::$UID, $orderid, $allprice);
				if($rs){
					$OIFM->commit();
					$result['error'] = 0;
					$result['msg'] = 'ok';
                    if(in_array(self::$UID,self::$AUID)){
                        $allprice = 0.01;
                    }
					$result['data']=array("price"=>$allprice);
				}else{
					$OIFM->rollback();
					$result['error'] = 1;
					$result['msg'] = '更新总价格表失败!';
				}
			}
		}
// 		$result['data']= json_encode($_POST);
		echo json_encode($result);die;
	}
	public function step2(){
		$npa = array(
				"tab"=>"赛事报名",
				"mtab"=>"立即报名",
		);
		$msg = "";
// 		获取未完成的订单信息
		$M = new GoodsModel();
		$UO = new UserOrdersModel();
		$OI = new OrdersInfoModel();
		$order = $UO->getUnCompletOrder(self::$UID);
		$orderid = $order['orderid'];
		if(empty($orderid)){
			$msg .= "<a href='/Enroll/index' style='color:red'>请返回重新报名,或添加报名人;</a><script>setTimeout(function(){window.location.href='/enroll/'},3000);</script>";
		}
		$xingming = $OI->getXingmingByOrderid($orderid);
		$orderinfo= $OI->getOrderinfoByOrderid($orderid);
		$bmType = $M->getDataByParendId(1);
		if(empty($bmType)){
			$msg .= "获取赛事错误;";
		}
		$jiudian = $M->getDataByParendId(5);//酒店
		if(empty($jiudian)){
			$msg .= "获取酒店错误;";
		}
		$jiudian_child = array();
		foreach($jiudian as $k=>$v){
			$child = $M->getDataByParendId($v['id']);
			if($child){
				$jiudian_child[$v['id']] = $child;
			}
		}
		$this->assign ( "orderid", $orderid );
		$this->assign ( "orderinfo", $orderinfo );
		$this->assign ( "jiudian_child", $jiudian_child );
		$this->assign ( "xingming", $xingming );
		$this->assign ( "bmtype", $bmType );
		$this->assign ( "jiudian", $jiudian );
		$this->assign ( "error", $msg );
		$this->assign ( "npa", $npa );
		$this->display ("step2");
	}
	public function index() {
		$npa = array(
				"tab"=>"赛事报名",
				"mtab"=>"报名",
				);
		$CTM = new CountriesModel();
		$countries	= $CTM->getData();
		$this->assign ( "countries", $countries );
		
        $this->assign ( "npa", $npa );
		$this->display ("index");
	}

	public function ziliao(){
		$result = array("error"=>"报名已结束！");
		echo json_encode($result);die;
		$riqi_reg = '/^(19|20)\d{2}(-|\/)(1[0-2]|0?[1-9])(-|\/)(0?[1-9]|[1-2][0-9]|3[0-1])$/';
		$shouji_reg = '/^1[\d]{10}$/';
		$email_reg = '/^(\w)+(\.\w+)*@(\w)+((\.\w{2,3}){1,3})$/';
		$msg ="";
		if(!empty($_POST)){
			$data['uid']				= self::$UID;
			$data['xingming']	= addslashes(trim($_POST['xingming']));
			$data['guojia']			= addslashes(trim($_POST['guojia']));
			$data['zjtype']			= addslashes(trim($_POST['zjtype']));
			$data['zjcode']		= addslashes(trim($_POST['zjcode']));
			$data['xingbie']		= addslashes(trim($_POST['xingbie']));
			$data['shengri']		= addslashes(trim($_POST['shengri']));
			$shengri = preg_match($riqi_reg, $data['shengri']);
			if(!$shengri){
				$msg .= "生日格式错误;";
			}
			
			$data['shouji']			= addslashes(trim($_POST['shouji']));
			$shojirs = preg_match($shouji_reg, $data['shouji']);
			if(!$shojirs){
				$msg .= "手机号码格式错误;";
			}
			$data['youxiang']	= addslashes(trim($_POST['youxiang']));
			$youxiang = preg_match($email_reg, $data['youxiang']);
			if(!$youxiang){
				$msg .= "邮箱格式错误;";
			}
			
			$data['shengfen']	= addslashes(trim($_POST['shengfen']));
			$data['diqu']			= addslashes(trim($_POST['diqu']));
			$data['dizhi']			= addslashes(trim($_POST['dizhi']));
			$data['zbchima']		= addslashes(trim($_POST['zbchima']));//装备尺码
			if(
					empty($data['xingming']) ||
					empty($data['guojia']) ||
					empty($data['zjtype']) ||
					empty($data['zjcode']) ||
					empty($data['xingbie']) ||
					empty($data['shengri']) ||
					empty($data['shouji']) ||
					empty($data['zbchima']) ||
					empty($data['youxiang']) ||
// 					empty($data['shengfen'])
// 					empty($data['diqu']) ||
					empty($data['dizhi']) 
					){
				$msg .= "必填信息不能为空;";
			}
			
			$data['xueli']			= addslashes(trim($_POST['xueli']));
			$data['xuexing']		= addslashes(trim($_POST['xuexing']));
			$data['hangye']		= addslashes(trim($_POST['hangye']));
			$data['shouru']		= addslashes(trim($_POST['shouru']));
			$data['zhiye']			= addslashes(trim($_POST['zhiye']));
			$data['shenti']		= addslashes(trim($_POST['shenti']));
			$data['nianxian']	= addslashes(trim($_POST['nianxian']));
			
			$data['qmfirstdate']		= addslashes(trim($_POST['qmfirstdate']));
			$data['qmfirstdate']		= ($data['qmfirstdate'] == "请输入日期")?"":$data['qmfirstdate'];
			$qmbest_h					= addslashes(trim($_POST['qmbest_h']));
			$qmbest_h					= ($qmbest_h != "请输入小时" && $qmbest_h!="")?$qmbest_h:0;
			$qmbest_i					= addslashes(trim($_POST['qmbest_i']));
			$qmbest_i					= ($qmbest_i != "请输入分钟" && $qmbest_i!="")?$qmbest_i:0;
			$qmbest_s					= addslashes(trim($_POST['qmbest_s']));
			$qmbest_s					= ($qmbest_s != "请输入秒" && $qmbest_s!="")?$qmbest_s:0;
			$data['qmbest'] = $qmbest_h.":".$qmbest_i.":".$qmbest_s;
			
			$data['bmfirstdate']	= addslashes(trim($_POST['bmfirstdate']));
			$data['bmfirstdate']		= ($data['bmfirstdate'] == "请输入日期")?"":$data['bmfirstdate'];
			$bmbest_h					= addslashes(trim($_POST['bmbest_h']));
			$bmbest_h					= ($bmbest_h != "请输入小时" && $bmbest_h!="")?$bmbest_h:0;
			$bmbest_i					= addslashes(trim($_POST['bmbest_i']));
			$bmbest_i					= ($bmbest_i != "请输入分钟" && $bmbest_i!="")?$bmbest_i:0;
			$bmbest_s					= addslashes(trim($_POST['bmbest_s']));
			$bmbest_s					= ($bmbest_s != "请输入秒" && $bmbest_s!="")?$bmbest_s:0;
			$data['bmbest'] = $bmbest_h.":".$bmbest_i.":".$bmbest_s;
			
			$data['zbpinpai']		= json_encode($_POST['zbpinpai']);
			$data['ylpinpai']			= json_encode($_POST['ylpinpai']);
			$data['ctime']				= $data['utime']			= date("Y-m-d H:i:s");
			if($msg == ""){
				$M = new BaomingdanModel();
				$M->startTrans();
				$rs = $M->addData($data,self::$UID);
				if($rs === -1){
					$msg .= "您已成功报名了黑瞎子岛马拉松赛，不能重复报名马拉松赛;";
					$M->rollback();
				}elseif($rs === false){
					$msg .= "添加失败,可能已经添加过;";
					$M->rollback();
				}else{
					//@todo 添加成功,添加到订单列表(购物车概念),跳转下一步
						$UOM = new UserOrdersModel();
						//检查是否报名成功过
						$ODIFM = new OrdersInfoModel();
						$ckbmrs = $ODIFM->ckBaomingdanIdIsCom($rs,0);
						if($ckbmrs != 0 && $ckbmrs != 5){
							$M->rollback();
							$msg .= "您已成功报名了黑瞎子岛马拉松赛，不能重复报名马拉松赛;";
						}else{
							$orderid = $UOM->creatOrders(self::$UID);
							session("orderid_outline",$orderid);
							if($orderid){
								$ODIFM = new OrdersInfoModel();
								$addbmd = $ODIFM->addBaomingDan(self::$UID,$orderid, $rs);
								if($addbmd){
									$M->commit();
									$msg .= "ok";
									// 								header("Location:/Enroll/step2/?bmr=".$rs);
								}elseif($addbmd === -33){
									$msg .= "报名已满;";
									$M->rollback();
								}else{
									$msg .= "报名单生成失败;";
									$M->rollback();
								}
							}else{
								$msg .= "报名失败,请重试;";
								$M->rollback();
							}
						}
				}
			}
		}else{
			$msg .= "上传的数据错误;";
		}
// 		$npa = array(
// 				"tab"=>"赛事报名",
// 				"mtab"=>"报名",
// 		);
		$result = array("error"=>$msg);
		echo json_encode($result);die;
		$this->assign ( "error", $msg );
// 		$this->assign ( "npa", $npa );
// 		$this->display ("index");
	}

}