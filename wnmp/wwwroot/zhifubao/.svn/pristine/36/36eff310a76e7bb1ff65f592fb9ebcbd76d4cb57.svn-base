<?php
/**
 * 订单Model类
 * @author Administrator
 * createTime 2016-04-01
 */
class UserOrdersModel extends Model{
	protected  $trueTableName	= "zx_tb_orders";
	protected $connection = 'DB_CONFIG1';
	
	/**
	 * 创建订单
	 * @param unknown_type $orderData
	 * @return boolean|Ambigous <>|unknown
	 */
	public function creatOrders($orderData){
		if(empty($orderData) || !is_numeric($orderData['uid'])) return false;
		$order = $this->checkOrder($orderData['uid'],$orderData['matchid']);	
		if($order){
			unset($orderData['uid'],$orderData['matchid'],$orderData['orderid'],$orderData['ctime']);
			if($this->data($orderData)->where("orderid='{$order['orderid']}'")->save()){		
				return $order['orderid'];
			}else{
				return false;
			}
		}else{
			$rs = $this->add($orderData);
			if($rs){
				$match = new MatchInfoModel;
				$match->updateMatchLeft($orderData['matchid'], -1);
				return $orderData['orderid'];
			}else {
				@mwtlog("creatOrder_error","rs:".json_encode($rs)."\tsql:".$this->getLastSql()."\tdata:".json_encode($orderData),true);
				return false;
			}
		}
	}
	
	/**
	 * 修改订单价格
	 * @param unknown_type $uid
	 * @param unknown_type $orderid
	 * @param unknown_type $payprice
	 * @param unknown_type $orderprice
	 * @return boolean|Ambigous <boolean, unknown>
	 */
	public function updateAllpriceByOrderid($uid,$orderid,$payprice,$orderprice){
		//paystats:支付结果状态0:未支付；1：支付成功；2：支付金额不正确；3不可退款了;4;已退款;5：等待支付;6:在线报名完成;7未知错误
		if(empty($uid) || empty($orderid)) return false;
		$rs = $this->data(array("payprice"=>$payprice,"orderprice"=>$orderprice,"paystats"=>5,"utime"=>date("Y-m-d H:i:s")))->where("uid=$uid and orderid='$orderid'")->save();
		if(!$rs){
			@mwtlog("updateAllpriceByOrderid_error","rs:".json_encode($rs)."\tsql:".$this->getLastSql(),true);
		}
		return $rs;
	}
	
	/**
	 * 拿到订单信息
	 * @param string $orderid
	 * @return Ambigous <mixed, boolean, NULL, multitype:, unknown, string>
	 */
	public function getorderinfo($orderid){
		if(empty($orderid)) return false;
		$sql = "SELECT o.orderid,o.payprice,o.payorderid,o.pay_deadline,o.paystats,m.m_name,o.matchid FROM zx_tb_orders o LEFT JOIN zx_tb_matchs  m ON o.matchid = m.id WHERE o.orderid= '$orderid'";
		return $this->query($sql);
	}
	
	/**
	 * 检查订单是否存在（用户id,赛事id）
	 * @param unknown_type $uid
	 * @param unknown_type $matchid
	 * @return boolean|Ambigous <mixed, boolean, NULL, multitype:, unknown, string>
	 */
	public function checkOrder($uid,$matchid) {
		if(empty($uid) || empty($matchid)) return false;
	
		return  $this->where("uid = '$uid' and matchid='$matchid' and ( paystats=5 )")->find();
	}
	
	/**
	 * 拿到订单信信（用户id,赛事id）
	 * @param unknown_type $uid
	 * @param unknown_type $matchid
	 * @return boolean|Ambigous <mixed, boolean, NULL, multitype:, unknown, string>
	 */
	public function getUnCompletOrder($uid,$matchid) {
		if(empty($uid) || empty($matchid)) return false;

		return  $this->where("uid = $uid and matchid=$matchid")->find();
	}
	
	public function getorderinfo_notice($orderid){
		if(empty($orderid)) return false;
		$sql = "SELECT o.uid,o.payprice,o.orderid,o.orderprice,u.phone,o.paystats,o.payorderid,o.payinfo,o.official_notes,b.name,b.phone,b.e_mail,b.pass_code,m.m_name,o.ctime,o.utime FROM zx_tb_orders o LEFT JOIN zx_tb_userinfo b ON o.uid = b.uid LEFT JOIN zx_tb_user u ON o.uid = u.id LEFT JOIN zx_tb_matchs  m ON o.matchid = m.id WHERE o.orderid = '$orderid'";
		return $this->query($sql);
	}
	
	public function getOrderStats($orderid){
		if(empty($orderid)) return false;
		$rs = $this->field("paystats")->where("orderid='$orderid'")->find();
		return $rs["paystats"];
	}
	
	public function getorderListByUid($uid){
		if(empty($uid)) return false;
		$sql ="SELECT o.orderid,o.pay_deadline,m.m_untilTime,m.m_offineTime,m.m_state,m.m_placesleft,m.m_icon,m.m_name,m.m_img,o.payprice,o.paystats,m.m_GameTime FROM `zx_tb_orders` o LEFT JOIN `zx_tb_matchs` m ON o.matchid= m.id WHERE o.uid = $uid and o.paystats>=0 order by o.ctime desc";	
		return $this->query($sql);
	}
	
	/**
	 * @param 商户orderid $out_trade_no
	 * @param 支付宝交易号 $trade_no
	 * @param 总价格 $total_fee
	 * @param 支付状态 int(0:未支付；1：支付成功；2：支付金额不正确；3不可退款了;4;已退款;5：等待支付;6:在线报名完成;7未知错误) $trade_status
	 * @param 所有支付信息array $payinfo
	 */
	public function UpdatePayResult($out_trade_no,$trade_no,$total_fee,$trade_status,$payinfo){
		if(
				empty($out_trade_no) ||
				empty($trade_no) ||
				empty($total_fee) ||
				empty($trade_status) ||
				empty($payinfo) 
				){
			return false;
		}
		$order = $this->where("orderid='$out_trade_no' ")->find();
		$SM = new SendSmsModel();
		if($order){
			$myPrice = $order['payprice'];
			$myStats = $order['paystats'];
			if($myStats ==1 || $myStats == 3 || $myStats == 9){
			//if(false){
				return true;
			}else{
                $uid = $order['uid'];
				if($total_fee == $myPrice){
					//获取报名人的号牌@todo多人时需修改
// 					$OIFO = new OrdersInfoModel();
// 					$GM = new GoodsModel();
// 					$orderinfo = $OIFO->getOrderinfoByOrderid($out_trade_no);
// 					$GM->startTrans();
// 					$updateres = true;
// 					foreach($orderinfo as $k=>$v){
						
// 						$goodsid = $v['goodsid'];
// 						if(!empty($goodsid)){
// 							$Grs = $GM->updateGoodsCountById_v2($goodsid);
							
// 							//修改库存失败
// 							if(!$Grs){
// 								$updateres = false;
// 								$GM->rollback();
// 								break;
// 							}
// 						}
// 					}
// 					if(!$updateres){
// 						$trade_status = 9;
// 					}else{
// 						$GM->commit();
// 					}
					$redis = new RedisModel();
					$arr = array(
							"a"=>"OrderNotice",
							"m"=>"notice",
							"d"=>array("orderid"=>$out_trade_no,"status"=>1));
					$redis->lpush("order_notice_list_v2",json_encode($arr));
				}else{
					$number = "";
					$trade_status = 2;
					@mwtlog("wxpay_request","data:".json_encode($payinfo),true);
					@$SM->send("服务器预警:支付金额不对 ".json_encode($payinfo)."IP:*");
				}
				
				$out_trade_no = addslashes($out_trade_no);
				$trade_no = addslashes($trade_no);
				$trade_status = intval($trade_status);
				$payinfo 	= json_encode($payinfo);
				$data = array(
						"payorderid"=>$trade_no,
						"paystats"=>$trade_status,
						"payinfo"=>$payinfo,
// 						"number"=>$number,
						"utime"=>date("Y-m-d H:i:s")
				);
				$rs = $this->data($data)->where("orderid='$out_trade_no' ")->save();
				if(!$rs){
					$QM = new QueueModel();
					$QM->addQueue("PayResultAction", "retry", $payinfo);
				}else{
					if($trade_status == 2){
						return 2;
					}
					return true;
				}
			}
		}else{
			@mwtlog("UpdatePayResult_error","error orderid:".json_encode($payinfo),true);
			return false;
		}
	}

	/**
	 * 删除订单
	 * @param unknown_type $orderid
	 * @return boolean|Ambigous <boolean, unknown>
	 */
	public function CancelOrderid($orderid){
		if(empty($orderid)) return false;
		if($this->where("orderid='$orderid' and paystats=1")->find()){
			return false;
		}
		return $this->data(array("paystats"=>-1))->where("orderid='$orderid'")->save();
	}
	
	public function countpayorderByuid($uid){
		if(empty($uid)) return  false;
		$where = array(
				"uid"=>$uid,
				"paystats"=>5,
				"pay_deadline"=>array('gt',Date("Y-m-d H:i:s")),
				);
		return $this->where($where)->count();
	}
	
	
	public function  settrade_no($orderid,$payorderid){
		return  $this->where("orderid='{$orderid}'")->data(array("payorderid"=>$payorderid))->save();
	}
}