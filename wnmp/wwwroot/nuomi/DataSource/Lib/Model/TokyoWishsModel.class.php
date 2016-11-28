<?php
class TokyoWishsModel extends Model{
	protected  $trueTableName	= "hd_tokyo";
	protected $connection = 'DB_CONFIG1';
		
	public function addzl($data){
		if(empty($data)) return false;
		$rs =  $this->where("phone=".$data['phone'])->find();
		if(!$rs){
			if($this->add($data)){
				return true;
			}else{
				return false;
			}
		}else{
			return $this->where("phone=".$data['phone'])->save($data);
		}
		return true;
	}
	
}