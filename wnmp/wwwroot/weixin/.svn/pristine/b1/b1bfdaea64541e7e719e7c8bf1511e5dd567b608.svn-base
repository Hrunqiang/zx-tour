<?php
class OrdersInfoModel extends Model{
	protected  $trueTableName	= "zx_tb_orderinfo";
	protected $connection = 'DB_CONFIG1';
		
	/**
	 * 根据订单ID删除订单
	 * @param unknown_type $uid
	 * @param unknown_type $orderid
	 * @return boolean|Ambigous <mixed, boolean, unknown>
	 */
	public function delJdOrders($orderid){
		if(empty($orderid)) return false;
		$rs = $this->where("orderid='$orderid'")->delete();
		//code.....
		//名额释放
		if(!$rs){
			@mwtlog("delJdOrders_error","rs:".json_encode($rs)."\tsql:".$this->getLastSql(),true);
		}
		return $rs;
	}
	
	/**
	 * 
	 * @param unknown_type $orderid
	 * @return boolean
	 */
	public function releaseOrders($orderid){
		if(empty($orderid)) return false;
		$list = $this->getOrderinfoByOrderid($orderid);
		if($list===false){
			return false;
		}else{
			$this->startTrans();
			$goodsM = new GoodsModel();
			$goodsM->startTrans();
			foreach($list as $key=>$val){
				if($val['type']!="单房差"){
					if(false===$goodsM->updateGoodsCountById_v3($val['goodsid'],$val['count'],false)){
						$goodsM->rollback();
						return false;
					};
				}	
			}
			if(false===$this->delJdOrders($orderid)){
				$goodsM->rollback();
				return false;
			}
			$goodsM->commit();
			return true;
		}
		return false;
	}
	
	/**
	 * 添加订单
	 * @param unknown_type $data
	 * @return boolean|Ambigous <mixed, boolean, unknown, string>
	 */
	public function addOrders($data){
		if(empty($data)) return false;
		return $this->add($data);
	}
	
	
	/**
	 * 拿订单的所有商品名字
	 * @param unknown_type $orderid  订单号
	 * @return boolean|Ambigous <multitype:, boolean>
	 */
	public function getOrderInfolist($orderid){
		if(empty($orderid)) return false;
		$sql = "SELECT a.id,a.orderid,a.type,g.g_name,a.goodsid FROM {$this->trueTableName} a  LEFT JOIN zx_tb_goods g ON a.goodsid = g.id WHERE a.orderid = '$orderid'";
		return $this->query($sql);
	}
	
	/**
	 * 拿订单的所有小订单
	 * @param unknown_type $orderid
	 * @return boolean|Ambigous <mixed, string, boolean, NULL, unknown>
	 */
	public function getOrderinfoByOrderid($orderid){
		if(empty($orderid)) return false;
		return $this->where("orderid='$orderid'")->select();
	}
	
}