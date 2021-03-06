<?php
class UserOrdersModel extends Model{
	protected  $trueTableName	= "mls_userorders";
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
		$sql = "SELECT o.orderid,o.orderprice,o.paystats,o.payorderid,o.payinfo,o.beizhu,b.xingming,b.shouji,b.youxiang,b.match,o.ctime,o.utime FROM mls_userorders o LEFT JOIN mls_baomingdan b ON o.uid = b.id WHERE o.orderid = $orderid";
		return $this->query($sql);
	}
	
	public function getexportlist($where){
		
		if($where) {
			$where = " and $where ";
		}else{
			$where = "";
		}
		$sql = "SELECT b.`match`,o.`orderid`,b.`xingming`,
		CASE b.sexy WHEN 1 THEN '男' WHEN 2 THEN '女' END AS sexy,b.`shouji`,o.platform,
		IF(o.`paystats`=1,'已支付','等待支付') AS paystats,o.`orderprice`,o.`payorderid`,o.`payinfo`,b.`youxiang`,b.`xm_pingyin_x`,b.`xm_pingyin_m`,b.`guojia`,b.`sfz_code`,b.`hz_code`,b.`hz_qianfa`,b.`hz_youxiao`, b.`shengri`,b.`province`,b.`city`,b.`area`,b.`dizhi` ,b.`youbian`,
		IF(b.`isfullmls`=1,'参加过','未参加') AS isfullmls,b.`best_score`,b.`best_score_match`,b.`expect_res`, b.`zbchima`,b.`contacts`,b.`contacts_gx`,b.`contacts_mail`,b.`contacts_phone`,b.`ctime`,o.`utime`,o.`zhushi` 
		FROM mls_baomingdan b LEFT JOIN mls_userorders o ON o.uid=b.id 
		WHERE (o.`paystats` = 5 OR o.`paystats` = 1) $where";
		return $this->query($sql);
	}
	
}