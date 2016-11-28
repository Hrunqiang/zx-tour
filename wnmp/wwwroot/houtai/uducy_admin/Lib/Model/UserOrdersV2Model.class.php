<?php
class UserOrdersV2Model extends Model{
	protected  $trueTableName	= "zx_tb_orders";
	protected $connection = 'DB_CONFIG1_zx';
	protected $cacheTime	= 600;//缓存时间
	
	public function apply_num($where){
		$where = $where ? $where : "";
		return $this->cache(true,$this->cacheTime)->table(" zx_tb_orders as o ")->where($where)->count();
	}
	
	
	public function apply_orders(){
		$sql = "select * from $this->trueTableName";
		return $this->query($sql);
	}
	
	public function  getordersPlatform(){
		$sql = "SELECT DISTINCT platform FROM  $this->trueTableName";
		return  $this->cache(true,3600)->query($sql);
	}
	
	/**
	 * 获取报名列表信息
	 * @return Ambigous <multitype:, mixed, boolean>
	 */
	public function getorderlistBymatch($where,$limit){
		$limit = $limit?$limit:"0,200";
		$sql =  "SELECT o.uid,o.orderid,o.user_remarks,o.official_notes,o.paystats,o.payprice,o.discount,o.ctime,o.utime,o.platform,u.name,if(u.sexy=1,'男','女') as sexy,u.phone,us.phone as phone_login,u.e_mail,u.country,m.m_name,m.m_ptype 
FROM zx_tb_orders o  
LEFT JOIN zx_tb_userinfo u ON o.uid = u.uid 
LEFT JOIN zx_tb_user us ON o.uid = us.id 
LEFT JOIN zx_tb_matchs m ON m.id = o.matchid
WHERE 1 = 1 $where
ORDER BY o.utime DESC limit $limit";	
		return $this->cache(true,$this->cacheTime)->query($sql);   
	}
	
	/**
	 * 获取订单列表
	 */
	public function getorderlist($where){
		$sql = "SELECT o.orderid,o.user_remarks,o.official_notes,m.m_attentions,o.paystats,o.payprice,o.discount,o.ctime,o.utime,o.platform,u.name,m.m_name,m.m_ptype 
FROM zx_tb_orders o  
LEFT JOIN zx_tb_userinfo u ON o.uid = u.uid 
LEFT JOIN zx_tb_matchs m ON m.id = o.matchid
WHERE 1 = 1 $where
ORDER BY o.utime DESC limit 0,200";
		return $this->cache(true,$this->cacheTime)->query($sql);
	}
	
	/**
	 * 获取订单列表数量
	 */
	public function getordercount($where){
		$sql = "SELECT count(o.id) as num
		FROM zx_tb_orders o
		LEFT JOIN zx_tb_userinfo u ON o.uid = u.uid
		LEFT JOIN zx_tb_matchs m ON m.id = o.matchid
		WHERE 1 = 1 $where ";
		return $this->cache(true,$this->cacheTime)->query($sql);
	}

	public function getorderinfo($orderid){
		if(empty($orderid)) return false;
		$sql = "SELECT o.uid,c.coupon_name,m.m_name,o.user_remarks,u.phone AS authphone,o.payprice,o.orderid,o.orderprice,o.paystats,o.payorderid,o.payinfo,o.discount,o.official_notes,b.name,b.phone,b.e_mail,o.ctime,o.utime FROM zx_tb_orders o 
LEFT JOIN zx_tb_userinfo b ON o.uid = b.uid 
LEFT JOIN zx_tb_matchs m ON o.matchid = m.id 
LEFT JOIN zx_tb_user u ON u.id = o.uid 
LEFT JOIN zx_tb_couponlist l ON l.id = o.couponid 
LEFT JOIN zx_tb_coupon c ON l.cid = c.id  
WHERE o.orderid = '$orderid'";
		return $this->query($sql);
	}
	
	public function  veff($orderid){
		if(empty($orderid)) return  false;
		$data = array(
			'paystats' => 7,
		);	
		return $this->where("orderid='$orderid'")->data($data)->save();
	}
	
	public function UpdatePayResult($out_trade_no,$trade_no,$trade_status,$payinfo,$payplatform){
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
			if($myStats !=5){
				$returnData = array("error"=>1,"msg"=>"状态不是等待支付状态！");
				return $returnData;
			}else{
				//获取报名人的号牌@todo多人时需修改	
				$out_trade_no = addslashes($out_trade_no);
				$trade_no = addslashes($trade_no);
				$trade_status = intval($trade_status);
				//$payinfo 	= json_encode($payinfo);
				$data = array(
						"payorderid"=>$trade_no,
						"paystats"=>$trade_status,
						"payinfo"=>$payinfo,
						"pay_platform"=>$payplatform,
						// 						"number"=>$number,
						"utime"=>date("Y-m-d H:i:s")
				);
				$rs = $this->data($data)->where("orderid='$out_trade_no' ")->save();
				if(!$rs){
					$returnData = array("error"=>1,"msg"=>"状态修改失败！");
					return $returnData;
				}else{
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