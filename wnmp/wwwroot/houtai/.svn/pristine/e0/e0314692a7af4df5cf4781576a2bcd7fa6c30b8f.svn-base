<?php
class UserOrdersInfoModel extends Model{
	protected  $trueTableName	= "mls_orderinfo";
	protected $connection = 'DB_CONFIG1_zx';
	protected $cacheTime	= 1800;//缓存时间
	
	
	public function getorderinfo($orderid){
		if(empty($orderid)) return false;
		$sql = "SELECT i.id,i.goodsid,g.goodscls,g.goodsprice ,i.goodsprice AS price,i.count,i.ctime,i.utime FROM mls_orderinfo i LEFT JOIN mls_goods g ON i.goodsid = g.id where i.orderid = $orderid";
		return $this->query($sql);
	}
	
}