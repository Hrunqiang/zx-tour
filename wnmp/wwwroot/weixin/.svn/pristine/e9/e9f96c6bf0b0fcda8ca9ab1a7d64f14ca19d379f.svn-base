<?php
class UserOrdersV2Model extends Model{
	protected  $trueTableName	= "zx_tb_orders";
	protected $connection = 'DB_CONFIG1_zx';
	protected $cacheTime	= 1800;//缓存时间
	
	public function apply_num(){
		
		$sql = "select count(*),isonline from $this->trueTableName group by isonline";
		return $this->query($sql);
	}
	
	
	public function apply_orders(){
		$sql = "select * from $this->trueTableName";
		return $this->query($sql);
	}
	
	public function getorderlist($m){
		$where = "";
		if($m) $where = "where b.match = '$m'";
		$sql = "SELECT o.orderid,o.orderprice,o.paystats,o.payorderid,b.xingming,b.match,o.ctime,o.utime FROM mls_userorders o LEFT JOIN mls_baomingdan b 
ON o.uid = b.id $where order by utime desc ";
		return $this->query($sql);
	}

	public function getorderinfo($orderid){
		if(empty($orderid)) return false;
		$sql = "SELECT c.coupon_name,m.m_name,o.user_remarks,u.phone AS authphone,o.payprice,o.orderid,o.orderprice,o.paystats,o.payorderid,o.payinfo,o.discount,o.official_notes,b.name,b.phone,b.e_mail,o.ctime,o.utime FROM zx_tb_orders o 
LEFT JOIN zx_tb_userinfo b ON o.uid = b.uid 
LEFT JOIN zx_tb_matchs m ON o.matchid = m.id 
LEFT JOIN zx_tb_user u ON u.id = o.uid 
LEFT JOIN zx_tb_couponlist l ON l.id = o.couponid 
LEFT JOIN zx_tb_coupon c ON l.cid = c.id  
WHERE o.orderid = '$orderid'";
		return $this->query($sql);
	}
	
	public function UpdatePayResult($out_trade_no,$trade_no,$trade_status,$payinfo){
		$returnData = array("error"=>65535,"msg"=>"未知错误！"); 
		if(
				empty($out_trade_no) ||
				empty($trade_no) ||
				empty($trade_status) ||
				empty($payinfo)
		){
			$returnData = array("error"=>1,"msg"=>"信息不足，不能修改！");
			return $returnData;
		}
		$order = $this->where("orderid='$out_trade_no' ")->find();
		if($order){
			$myStats = $order['paystats'];
			if($myStats ==1 || $myStats == 3 || $myStats == 9){
				$returnData = array("error"=>1,"msg"=>"状态不是等待支付状态！");
				return $returnData;
			}else{
				//获取报名人的号牌@todo多人时需修改
				$OIFO = new UserOrdersInfoV2Model();
				$GM = new GoodsV2Model();
				$orderinfo = $OIFO->getOrderinfoByOrderid($out_trade_no);
				$GM->startTrans();
				$updateres = true;
				foreach($orderinfo as $k=>$v){
					$goodsid = $v['goodsid'];
					if(!empty($goodsid)){
						$Grs = $GM->updateGoodsCountById_v2($goodsid);
							
						//修改库存失败
						if(!$Grs){
							$updateres = false;
							$GM->rollback();
							$returnData = array("error"=>1,"msg"=>"商品数量不足！");
							return $returnData;
						}
					}
				}
// 					$redis = new RedisModel();
// 					$arr = array(
// 							"a"=>"OrderNotice",
// 							"m"=>"notice",
// 							"d"=>array("orderid"=>$out_trade_no,"status"=>1));
// 					$redis->lpush("order_notice_list",json_encode($arr));
	
				$out_trade_no = addslashes($out_trade_no);
				$trade_no = addslashes($trade_no);
				$trade_status = intval($trade_status);
				//$payinfo 	= json_encode($payinfo);
				$data = array(
						"payorderid"=>$trade_no,
						"paystats"=>$trade_status,
						"payinfo"=>$payinfo,
						// 						"number"=>$number,
						"utime"=>date("Y-m-d H:i:s")
				);
				$rs = $this->data($data)->where("orderid='$out_trade_no' ")->save();
				if(!$rs){
					$GM->rollback();
					$returnData = array("error"=>1,"msg"=>"状态修改失败！");
					return $returnData;
				}else{
					$GM->commit();
					$returnData = array("error"=>0,"msg"=>"修改成功");
					
					$redis = new RedisModel();
					$arr = array(
							"a"=>"OrderNotice",
							"m"=>"notice",
							"d"=>array("orderid"=>$out_trade_no,"status"=>$trade_status));
					$redis->lpush("order_notice_list_v2",json_encode($arr));
					
					return $returnData;
				}
			}
		}else{
			$returnData = array("error"=>0,"msg"=>"未找到订单");
			return $returnData;
		}
	}
	
	public function getexportlist($field,$where){
		
		if($where) {
			$where = " and $where ";
		}else{
			$where = "";
		}
		$sql = "SELECT $field FROM zx_tb_orders o LEFT JOIN zx_tb_userinfo u ON u.uid=o.uid LEFT JOIN `zx_tb_user` us ON o.uid=us.id  LEFT JOIN `zx_tb_matchs` m  ON m.id=o.matchid WHERE 1=1 $where";
		return $this->query($sql);
	}
	
	public function getmatchedNum($id){
		if(empty($id)) return false;
		$sql = "SELECT paystats,COUNT(*) as num  FROM `zx_tb_orders`  WHERE matchid= $id GROUP BY paystats";
		return  $this->query($sql);
	}
	
}