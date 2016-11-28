<?php
class UserOrdersModel extends Model{
	protected  $trueTableName	= "mls_userorders";
	protected $connection = 'DB_CONFIG1';
	
	/**
	 * 从队列里去出
	 *  @param F全马H半马M迷你马 $type
	 */
	public static function getBaomingNum($type){
		if(empty($type)) return false;
        $QueuName = $type."_HXZ_NUMBER";
        $M = new RedisModel();
        $data = $M->RPOP($QueuName);
        if($data){
            return $data;
        }else{
            return false;
        }
//		return rand(3000, 9000);
	}
	
	public function getOrderStats($orderid){
		if(empty($orderid)) return false;
		$rs = $this->field("paystats")->where("orderid='$orderid'")->find();
		return $rs["paystats"];
	}
	
	public function getOrderStatsbyuid($uid){
		if(empty($uid)) return false;
		$rs = $this->field("paystats")->where("uid='$uid'")->find();
		return $rs["paystats"];
	}
	
	public function updateOnlineStats($orderid){
		if(empty($orderid)) return false;
		$rs = $this->data(array("paystats"=>6,"utime"=>date("Y-m-d H:i:s")))->where("orderid='$orderid'")->save();
		return $rs;
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
			$myPrice = $order['orderprice'];
			$myStats = $order['paystats'];
			if($myStats ==1 || $myStats == 3){
				return true;
			}else{
                $uid = $order['uid'];
				if($total_fee == $myPrice || in_array($uid,EnrollAction::$AUID)){
					//获取报名人的号牌@todo多人时需修改
					$this->startTrans();
					$OIFO = new OrdersInfoModel();
					$GM = new GoodsModel();
					$orderinfo = $OIFO->getOrderinfoByOrderid($out_trade_no);
					foreach($orderinfo as $k=>$v){
						if(empty($v['baomingdanid'])){
							//对物品进行增减
							$goodsid = $v['goodsid'];
							if(!empty($goodsid)){
								$Grs = $GM->updateGoodsCountById($goodsid);
								if(!$Grs){
									 //物品卖完了...怎么办?那就多预留出几个吧,不错rollback
								}
							}
						}else{
							//报名单分配报名号码,根据id类型
							$goodsinfo = $GM->getGoodsInfoById($v['goodsid']);
							$number = UserOrdersModel::getBaomingNum($goodsinfo['prefix']);
							$OIFO->CancelOrderByBaomingdanid($v['baomingdanid'], $v['id']);
							if($number){
// 								$data['number'] = $number;
								$rs = $OIFO->updateNumberById($v['id'], $number);
								if(!$rs){
									$this->rollback();
									@$SM->send("服务器预警updateNumberError:$number ".json_encode($v)."IP:*");
									@mwtlog("update_number_error","rs:".json_encode($rs)."\t number:".json_encode($number)."\tid:".$v['id'],true);
									return false;
								}
							}else{
								//报名已满@todo 预警短信
								/*$this->rollback();
								@$SM->send("服务器预警getBaomingNum prefix:{$goodsinfo['prefix']} ".json_encode($v)."IP:*");
								@mwtlog("update_number_error","data:".json_encode($v),true);
								return -33;*/
							}
						}
					}
					$this->commit();
				}else{
					$number = "";
					$trade_status = 2;
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
	public function updateAllpriceByOrderid($uid,$orderid,$orderprice){
		//paystats:支付结果状态0:未支付；1：支付成功；2：支付金额不正确；3不可退款了;4;已退款;5：等待支付;6:在线报名完成;7未知错误
		if(empty($uid) || empty($orderid)) return false;
		$rs = $this->data(array("orderprice"=>$orderprice,"paystats"=>5,"utime"=>date("Y-m-d H:i:s")))->where("uid=$uid and orderid='$orderid'")->save();
		if(!$rs){
			@mwtlog("updateAllpriceByOrderid_error","rs:".json_encode($rs)."\tsql:".$this->getLastSql(),true);
		}
		return $rs;
	}
	public function getUnCompletOrder($uid,$isonline=0) {
		if(empty($uid) || !is_numeric($uid)) return false;
		$isonline = intval($isonline);
		$sqlin = " (paystats = 0 or paystats = 5)";
		$data = $this->where("uid = $uid and $sqlin and isonline=$isonline")->find();
// 		$data = $this->where("uid = $uid and paystats = 0")->find();
		return $data;
	}
	
	public function getUnCompletOrder1($uid,$isonline=0,$query) {
		if(empty($uid) || !is_numeric($uid)) return false;
		$isonline = intval($isonline);
		if(!$query){
			$sqlin = "  paystats = 1 ";
		}else{
			$sqlin = "  (paystats = 1 or paystats = 6 ) ";
		}
		
		$data = $this->where("uid = $uid and $sqlin and isonline=1")->find();
		// 		$data = $this->where("uid = $uid and paystats = 0")->find();
		return $data;
	}
	
	public function creatOrders($uid,$isonline=0){
		if(empty($uid) || !is_numeric($uid)) return false;
		$orders = $this->getUnCompletOrder($uid,$isonline);
		$isonline = intval($isonline);
		if($orders && !empty($orders['orderid'])){
			return $orders['orderid'];
		}else{
			$order = date("ymdHis");
			$order = $uid.$order.rand(1, 9);
			$time = date("Y-m-d H:i:s");
			$rs = $this->add(array("uid"=>$uid,"orderid"=>$order,"isonline"=>$isonline,"ctime"=>$time,"utime"=>$time));
			if($rs){
				return $order;
			}else {
				@mwtlog("creatOrder_error","rs:".json_encode($rs)."\tsql:".$this->getLastSql(),true);
				return false;
			}
		}
	}
	
	public function apply_num(){
		return $this->where("isonline = 0")->count();
	}
	
	public function CancelOrderid($orderid){
		if(empty($orderid)) return false;
		return $this->data(array("sign"=>-1))->where("orderid='$orderid'")->save();
	}
}