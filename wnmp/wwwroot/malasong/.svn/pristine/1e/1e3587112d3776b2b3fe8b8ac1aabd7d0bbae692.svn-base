<?php
class OrdersInfoModel extends Model{
	protected  $trueTableName	= "mls_orderinfo";
	protected $connection = 'DB_CONFIG1';
	
	/**
	 * 获取用户订单信息
	 * @param  $uid
	 */
	public function getOrderInfoByUid($uid){
		if(empty($uid)) return false;
		$uid = intval($uid);
		$sql ="select info.orderid,info.orderprice,info.paystats,info.isonline,info.ctime,info.goodsid,info.number,info.baomingdanid,info.count,info.sign,info.stime,info.etime,g.goodscls,g.goodspid from 
(SELECT o.orderid,o.orderprice,o.paystats,o.sign,o.isonline,o.ctime,i.goodsid,i.number,i.baomingdanid,i.count,i.stime,i.etime FROM `mls_orderinfo` i left join mls_userorders o on o.orderid=i.orderid where o.uid=$uid) info left join mls_goods g on info.goodsid=g.id";
		$data = $this->query($sql);
		return $data;
	}
	public function delJdOrders($uid,$orderid){
		if(empty($uid) || empty($orderid)) return false;
		$rs = $this->where("uid=$uid and orderid='$orderid' and baomingdanid = 0")->delete();
		if(!$rs){
			@mwtlog("delJdOrders_error","rs:".json_encode($rs)."\tsql:".$this->getLastSql(),true);
		}
		return $rs;
	}
	
	public function addOrders($uid,$orderid,$goodsid,$stime,$etime,$count=1){
		if(empty($uid) || empty($orderid) || empty($goodsid)) return false;
		$GM = new GoodsModel();
		$goodsInfo = $GM->getGoodsInfoById($goodsid);
		if($goodsInfo && $goodsInfo["goodsleft"]>0){
			$data = array();
			$data['uid'] = $uid;
			$data['orderid'] = $orderid;
			$data['goodsid']= $goodsid;
			$data['goodsprice'] = $goodsInfo['goodsprice'];
			$data['count'] = $count;
			$data['stime'] = $stime;
			$data['etime'] = $etime;
			$ck = $this->field("id")->where("uid=$uid and orderid='$orderid' and goodsid=$goodsid")->find();
			if(!$ck){
				$rs = $this->add($data);
				if(!$rs){
					@mwtlog("addOrders_error","rs:".json_encode($rs)."\tsql:".$this->getLastSql(),true);
					return false;
				}else{
					return $data['goodsprice'];
				}
			}else{
				$rs = $this->data($data)->where("id=".$ck['id'])->save();
				return $data['goodsprice'] ;
			}
		}else{
			return false;
		}
	}
	
	/**
	 * 补充 逻辑问题,补充报名单购物车上的价格
	 * @param unknown_type $uid
	 * @param unknown_type $orderid
	 * @param unknown_type $banmingdanid
	 * @param unknown_type $price
	 */
	public function updateBaomingdanInfo($uid,$goodsid,$orderid,$baomingdanid,$price){
		if(empty($uid) || empty($orderid) || empty($baomingdanid)) return false;
		$time = date("Y-m-d H:i:s");
		$rs = $this->data(array('goodsprice'=>floatval($price),'goodsid'=>intval($goodsid),'utime'=>$time))->where("uid=".intval($uid)." and orderid='$orderid' and baomingdanid = ".intval($baomingdanid))->save();
		if(!$rs){
			@mwtlog("updateBaomingdanInfo_error","error rs:".json_encode($rs)."\tsql:".$this->getLastSql(),true);
		}
		return $rs;
	}
	
	/**
	 * 判断报名单是否已经报完过
	 */
	public function ckBaomingdanIdIsCom($baomingdanid,$isonline=0){
		if(empty($baomingdanid)) return false;
		$isonline = intval($isonline);
		$online = "and od.isonline=0";
		if($isonline == 1){
			$online = "";
		}
		$sql = "SELECT od.paystats FROM    mls_orderinfo i   left join mls_userorders od on od.orderid=i.orderid where  i.baomingdanid=$baomingdanid  $online";
// 		$sql = "select od.paystats from (SELECT orderid FROM    mls_orderinfo i  where  i.baomingdanid=$baomingdanid) o left join mls_userorders od on od.orderid=o.orderid";
		$rs = $this->query($sql);
		if($rs &&  $rs[0]['paystats']){
			return  intval($rs[0]['paystats']);
		}else{
			return false;
		}
	}
	
	public function addBaomingDan($uid,$orderid,$baomingdanid,$goodsid=0){
		if(empty($uid) || empty($orderid) || empty($baomingdanid)) return false;
		@$this->where("uid=$uid and orderid='$orderid' and baomingdanid<>$baomingdanid")->delete();
		$ck = $this->field("count(*) as c")->where("uid=$uid and orderid='$orderid' and baomingdanid=$baomingdanid")->find();
		if($ck['c']<=0){
			$GM = new GoodsModel();
			$goodsInfo = $GM->getGoodsInfoById($goodsid);
			$data['uid'] = $uid;
			$data['orderid'] = $orderid;
			$data['baomingdanid'] = $baomingdanid;
			$data['goodsid'] = $goodsid;
			$data['goodsprice'] = $goodsInfo['goodsprice'];
			/* $number = UserOrdersModel::getBaomingNum();
			if($number){
				$data['number'] = $number;
			}else{
				//报名已满
				return -33;
			} */
			$data['ctime'] = $data['utime'] = date("Y-m-d H:i:s") ;
			$rs = $this->add($data);
			if(!$rs){
				@mwtlog("addOrders_error","addBaomingDan error rs:".json_encode($rs)."\tsql:".$this->getLastSql(),true);
			}
			return $rs;
		}else{
			return true;
		}
	}
	
	public function getXingmingByOrderid($orderid){
		if(empty($orderid)) return false;
		$orderid = addslashes($orderid);
		$sql = "SELECT d.xingming,d.youxiang,d.id as baomingdanid FROM mls_baomingdan d left join mls_orderinfo i on i.baomingdanid=d.id where i.orderid='$orderid'";
		return $this->query($sql);
	}
	
	public function updateNumberById($id,$number){
		if(empty($id) || empty($number)) return false;
		return $this->data(array("number"=>$number))->where("id=$id")->save();
	}
	
	public function getOrderinfoByOrderid($orderid){
		if(empty($orderid)) return false;
		return $this->where("orderid=$orderid")->select();
	}
	
	public function UserNumber($uid,$orderid,$baomingdanid,$number){
		if(empty($uid) || empty($orderid) || empty($baomingdanid) || empty($number)) return false;
		$data = array(
					"number"=>$number,
					"utime"=>date("Y-m-d H:i:s")
				);
		$rs = $this->data($data)->where("uid=$uid and orderid='$orderid' and baomingdanid=$baomingdanid")->save();
		if(!$rs){
			@mwtlog("UserNumber_error","error rs:".json_encode($rs)."\tsql:".$this->getLastSql(),true);
		}
		return $rs;
	}
	
	/**
	 * @param 报名单id $baomingdanid
	 * @param 要排除的 $id
	 * @return boolean
	 */
	public function CancelOrderByBaomingdanid($baomingdanid,$id){
		if(empty($baomingdanid) || empty($id)) return false;
		$orderidD = $this->field("orderid")->where("baomingdanid = $baomingdanid and id <> $id")->select();
		$OM = new UserOrdersModel();
		if($orderidD){
			foreach ($orderidD as $k=>$v){
				$rs = $OM->CancelOrderid($v['orderid']);
				if(!$rs){
					@mwtlog("CancelOrderByBaomingdanid_error","data:".json_encode($v)."\trs:".json_encode($rs),true);
				}
			}
		}
		return ;
	}
}