<?php
/**
 * 优惠券Model类
 * @author hhy
 * createTime 2016-03-30
 */
class CustomerModel extends Model{
	protected  $trueTableName	= "zx_tb_customer";
	protected $connection = 'DB_CONFIG1_zx';
	protected $cacheTime	= 1800;//缓存时间

	public function getmatchs(){
		$sql = "SELECT DISTINCT `match` FROM `zx_tb_customer` ";
		return $this->cache(true,$this->cacheTime)->query($sql);
	}
	
	public function getCustomerInfo($id){
		if(empty($id)) return false;
		return  $this->cache(true,$this->cacheTime)->where("id=$id")->find();
	}
	
}