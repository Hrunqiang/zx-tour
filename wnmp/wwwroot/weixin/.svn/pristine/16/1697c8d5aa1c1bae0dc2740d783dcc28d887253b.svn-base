<?php
class MlsWishsModel extends Model{
	protected  $trueTableName	= "mls_2016_wishs";
	protected $connection = 'DB_CONFIG1';
		
	public function addwish($data){
		if(empty($data)) return false;
		$rs =  $this->where("phone=".$data['phone'])->find();
		if(!$rs){
			if($this->add($data)){
				return $data['code'];
			}else{
				return false;
			}
		}else{
			return $rs['code'];
		}	
	}
	
}