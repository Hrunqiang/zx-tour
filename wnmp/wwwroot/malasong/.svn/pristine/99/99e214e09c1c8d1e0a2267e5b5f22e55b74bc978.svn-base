<?php
class OnlineMLSModel extends Model{
	protected  $trueTableName	= "mls_userorders";
	protected $connection = 'DB_CONFIG1';
	protected $cacheTime	= 1800;//缓存时间
	
	
	public function getonlineorderlist(){
		$sql = "SELECT u.orderid,b.xingming,i.chengji,u.uid,u.`orderprice`,u.`payorderid`,u.`paystats`,u.ctime,u.utime FROM mls_userorders u LEFT JOIN mls_baomingdan b ON (u.uid =b.uid ) LEFT JOIN mls_online_info i ON (u.orderid = i.orderid) WHERE (u.paystats = 1 OR u.paystats = 6) AND u.isonline = 1 ORDER BY u.paystats DESC,u.utime DESC";
		return $this->cache(true,$this->cacheTime)->query($sql);
	}

	public function getinfo($orderid){
		if(empty($orderid)) return false;
		$sql = "SELECT u.orderid,b.xingming,i.chengji,i.`appName`,i.picData,i.addr,u.uid,u.`orderprice`,u.`payorderid`,u.`paystats`,u.ctime,u.utime FROM mls_userorders u LEFT JOIN mls_baomingdan b ON (u.uid =b.uid ) LEFT JOIN mls_online_info i ON (u.orderid = i.orderid) WHERE (u.orderid = '$orderid') ";
		return $this->query($sql);
	}
	
}