<?php
/**
 * 优惠券Model类
 * @author hhy
 * createTime 2016-03-30
 */
class CouponListModel extends Model{
	protected  $trueTableName	= "zx_tb_couponlist";
	protected $connection = 'DB_CONFIG1';

	
	public function bindCoupon($uid,$code){
		if(empty($uid) || empty($code)) return false;
		$data['stats'] = 1;
		$data['owner'] = $uid;
		return  $this->where("codestr = '$code'")->data($data)->save();
	}
	
	public function useCoupon($id,$orderid){
		if(empty($id)) return false;
		$data['stats'] = 2;
		$data['orderid'] = $orderid;
		$data['utime'] = Date("Y-m-d H:i:s");
		return  $this->where("id = '$id'")->data($data)->save();
	}
	
	public function getcodeinfo($code){
		if(empty($code)) return false;
		$sql = "SELECT i.id,i.codestr,i.stats,c.coupon_type,c.coupon_name,c.discount,c.min_able_price,c.able_ptype,c.able_meal,c.able_match,c.effective_date,c.expiry_date FROM `zx_tb_couponlist` i LEFT JOIN `zx_tb_coupon` c ON c.id= i.cid WHERE i.codestr= '$code'";
		return $this->query($sql);
	}
	
	public function getcodeinfoById($code){
		if(empty($code)) return false;
		$sql = "SELECT i.id,i.owner,i.codestr,i.stats,c.coupon_type,c.coupon_name,c.discount,c.min_able_price,c.able_ptype,c.able_meal,c.able_match,c.effective_date,c.expiry_date FROM `zx_tb_couponlist` i LEFT JOIN `zx_tb_coupon` c ON c.id= i.cid WHERE i.id= '$code' and c.effective_date<NOW() and c.expiry_date>NOW()";
		return $this->query($sql);
	}
	
	public function getcouponByUid($uid,$where=""){
		if(empty($uid)) return false;
		$sql = "SELECT i.id,i.codestr,i.stats,c.coupon_type,c.coupon_name,c.discount,c.min_able_price,c.able_ptype,c.able_meal,c.able_match,c.effective_date,c.expiry_date FROM `zx_tb_couponlist` i LEFT JOIN `zx_tb_coupon` c ON c.id= i.cid WHERE i.stats=1 AND c.expiry_date >NOW()  AND i.owner = $uid $where";
		return $this->query($sql);
	}
	public function getableCouponByuid($uid){
		if(empty($uid)) return false;
		$sql = "SELECT  COUNT(l.id) as num FROM   zx_tb_couponlist l
		LEFT  JOIN  zx_tb_coupon c ON  l.cid  = c.id
		WHERE c.effective_date < NOW() AND  c.expiry_date >NOW() AND l.owner = $uid  ";
		return $this->cache(true,3200)->query($sql);
	}
	
}