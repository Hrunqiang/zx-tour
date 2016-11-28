<?php
class BaomingdanModel extends Model{
	protected  $trueTableName	= "mls_baomingdan";
	protected $connection = 'DB_CONFIG1';
		
	public function addData($data,$uid) {
		if(empty($data)) return false;
		$ck = $this->field("id")->where("zjtype = '{$data['zjtype']}' and zjcode='{$data['zjcode']}' and uid=$uid")->find();
		if($ck && $ck['id']){
			unset($data['ctime']);
			@$this->data($data)->where("id = {$ck['id']}")->save();
			return $ck['id'];
		}else{
			$rs =  $this->add($data);
			return $rs;
		}
	}
	
	public function getNameByid($id){
		if(empty($id)) return false;
		$id = intval($id);
		$data = $this->field("xingming")->where("id=$id")->find();
		return $data;
	}
	
	public function getbaomingdanByid($id){
		if(empty($id)) return false;
		$id = intval($id);
		$data = $this->where("id=$id")->find();
		return $data;
	}

}