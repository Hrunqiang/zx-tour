<?php
/**
 * 优惠券Model类
 * @author hhy
 * createTime 2016-03-30
 */
class CouponListModel extends Model{
	protected  $trueTableName	= "zx_tb_couponlist";
	protected $connection = 'DB_CONFIG1_zx';

	
	public function createCouponlist($id,$codes){
		if(empty($id)||count($codes)<=0) return false;
		$data = array();
		$info['cid'] = $id;
		for($i=0,$len=count($codes);$i<$len;$i++){
			$info['codestr'] = $codes[$i];
			array_push($data, $info);
			$this->add($info);
		}
		return true;
	}
	
}