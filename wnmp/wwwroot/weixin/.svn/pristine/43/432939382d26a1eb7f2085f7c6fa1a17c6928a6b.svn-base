<?php
class UserOrdersInfoV2Model extends Model{
	protected  $trueTableName	= "zx_tb_orderinfo";
	protected $connection = 'DB_CONFIG1_zx';
	protected $cacheTime	= 1800;//缓存时间
	
	
	public function getorderinfo($orderid){
		if(empty($orderid)) return false;
		$sql = "SELECT i.id,g.g_pid,g.g_type,i.goodsid,if(i.type='单房差','单房差',g.g_name)as g_name,g.g_currprice,g_price ,i.goods_pay_sprice AS price,i.count,i.ctime,i.utime FROM zx_tb_orderinfo i LEFT JOIN zx_tb_goods g
ON i.goodsid = g.id where i.orderid = '$orderid'";
		return $this->query($sql);
	}
	
	/**
	 *
	 * @param unknown_type $orderid
	 * @return boolean|Ambigous <multitype:, boolean>
	 */
	public function getOrderInfolist($orderid){
		if(empty($orderid)) return false;
		$sql = "SELECT a.id,a.orderid,a.type,g.g_name,g.g_pid FROM {$this->trueTableName} a  LEFT JOIN zx_tb_goods g ON a.goodsid = g.id WHERE a.orderid = '$orderid'";
		return $this->query($sql);
	}
	
	public function getOrderinfoByOrderid($orderid){
		if(empty($orderid)) return false;
		return $this->where("orderid=$orderid")->select();
	}
	
}