<?php
/**
 * 新用户Model
 * @author hhy
 * @createTime 2016-10-26 下午6:51:04
 */
class ZxUserModel extends Model{
	protected  $trueTableName	= "zx_tb_userinfo";
	protected $connection = 'DB_CONFIG1_zx';
	protected $cacheTime	= 1800;//缓存时间
	
	public function getCustomerInfo($uid){
		if(empty($uid)) return false;
		return  $this->where("uid=$uid")->find();
	}
	
}