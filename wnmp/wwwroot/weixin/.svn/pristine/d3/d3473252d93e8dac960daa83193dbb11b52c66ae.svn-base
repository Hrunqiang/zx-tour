<?php
class BaomingdanModel extends Model{
	protected  $trueTableName	= "mls_baomingdan";
	protected $connection = 'DB_CONFIG1';
		
	public function addData($data) {
		if(empty($data)) return false;
		$ck = $this->field("id")->where("sfz_code = '{$data['sfz_code']}' and match='{$data['match']}'")->find();
		if($ck && $ck['id']){
			unset($data['ctime']);
			@$this->data($data)->where("id = {$ck['id']}")->save();
			return $ck['id'];
		}else{
			$rs =  $this->add($data);
			return $rs;
		}
	}
	
	public function addData_c($data) {
		if(empty($data)) return false;
		$ck = $this->field("id")->where("shouji = '{$data['shouji']}' and match='{$data['match']}'")->find();
		if($ck && $ck['id']){
			unset($data['ctime']);
			@$this->data($data)->where("id = {$ck['id']}")->save();
			return $ck['id'];
		}else{
			$rs =  $this->add($data);
			return $rs;
		}
	}
	
	public function check($name,$date,$match){
		if(empty($name)||empty($date)||empty($match)){
			return false;
		}else{
			$sql = "select * from ".$this->trueTableName." where xingming = '$name' and `match` = '$match' and shengri = '$date'";
			return $this->query($sql);
		}
	}
	
	public function wuxicheck($name,$phone,$match){
		if(empty($name)||empty($phone)||empty($match)){
			return false;
		}else{
			$sql = "select * from ".$this->trueTableName." where xingming = '$name' and `match` = '$match' and shouji = '$phone'";
			return $this->query($sql);
		}
	}
	
	public function getNameByid($id){
		if(empty($id)) return false;
		$id = intval($id);
		$data = $this->field("xingming")->where("id=$id")->find();
		return $data;
	}
	

}