<?php
class GoddessshowModel extends Model{
	protected  $trueTableName	= "hd_goddessshow";
	protected $connection = 'DB_CONFIG1';
	
	public function zan($id){
		return $this->where("id=$id")->setInc('zan');
	}
}