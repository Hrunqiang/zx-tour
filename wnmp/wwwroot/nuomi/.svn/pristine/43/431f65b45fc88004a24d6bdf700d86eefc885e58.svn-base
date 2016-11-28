<?php
class LogsModel extends MongoModel {
	protected $trueTableName = 'logs';
	function setTrueTableName($tableName) {
		$this->trueTableName = $tableName;
	}
	public function _initialize(){
// 		echo $this->trueTableName;
// 		echo $this->trueTableName='asdf';
	}
	function getTrueTableName() {
		return $this->trueTableName;
	}
	protected $connection = 'DB_CONFIG2';
	
	public function set($data) {
		$rs = $this->save ( $data );
		echo $this->getLastSql ();
	}
	
	public function getCount($where){
		$data	= $this->where($where)->select();
		if($data===null){
			$c	= 0; 
		}else{
			$c	= count($data);
		}
		return $c;
	}
	
	public function getList($field=array(),$offset,$length,$where=array(),$order=''){
		$offset	= empty($offset)?0:$offset;
		$length	= empty($length)?30:$length;
		$where['isdel']	= '0';
		if(!empty($order)){
			$order	= " order by $order ";
		}else{
			$order	= "";
		}
		$rs	= $this->field($field)->where($where)->order($order)->limit($offset.",".$length)-> select();
// 		echo $this->getLastSql();
		return $rs;
	}
	
	public function modifyById($id,$data,$fieldid="_id"){
		if(empty($id) || empty($data))return false;
		unset($data[$fieldid]);
		$data['utime']=date("Y-m-d H:i:s");
		foreach($data as $k=>$v){
			$data[$k]=addslashes($v);
		}
		$where[$fieldid]	= $id;
		$rs	= $this->where($where)->data($data)->save();
		return $rs;
	}
	
	public function getInfoById($id,$fieldid="_id"){
		if(empty($id))return false;
		$where[$fieldid]=$id;
		$rs	=  $this->where($where)->find();
		if($rs){
			return $rs;
		}else{
			return false;
		}
	}
	public function del($id,$fieldid="_id"){
		if(empty($id))return false;
		$where	= array();
		if(is_array($id)){
			//@todo mongo 如何多条更新方法?
			foreach($id as $k=>$v){
				$where[$fieldid]	= $v;
				$rs	= $this->where($where)->data(array('isdel'=>'1','utime'=>date("Y-m-d H:i:s")))->save();
			}
		}else{
			$where[$fieldid]	= $id;
			$rs	= $this->where($where)->data(array('isdel'=>'1','utime'=>date("Y-m-d H:i:s")))->save();
		}
		return $rs;
	}
}