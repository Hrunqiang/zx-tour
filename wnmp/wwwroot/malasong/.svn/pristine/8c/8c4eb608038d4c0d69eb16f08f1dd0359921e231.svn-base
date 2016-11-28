<?php
class UserOrdersModel extends Model{
	protected  $trueTableName	= "mls_userorders";
	protected $connection = 'DB_CONFIG1';
	
	public function apply_num(){
		
		$sql = "select count(*),isonline from $this->trueTableName group by isonline";
		return $this->query($sql);
	}
	
	
	public function apply_orders(){
		$sql = "select * from $this->trueTableName";
		return $this->query($sql);
	}
	
}