<?php
class ClassInfoModel extends CoreModel {
	protected  $trueTableName	= "ios_news";
	protected $connection = 'DB_CONFIG1';
	public function get_info_by_cid($cid,$limit='',$offset=''){
		if(empty($cid))return false;
		$select	= $this->where("cid=$cid and isdisplay=1")->order('orderid desc');
		if(!empty($limit) && !empty($offset)){
			$select	= $select->limit($limit,$offset);
		}
		return	$select->select();
// 		return $this->where("cid=$cid")->order('orderid desc')->select();
	}
	public function get_class_join($where,$order,$limit){
		$field	= "a.id as aid, a.n_title,a.n_color,a.n_from,a.sign,a.orderid,b.classname,b.id,b.pid,a.ctime,a.isdisplay,a.class,a.isadv,a.parent_app,a.issetupadv ";
		$rs	= $this->table($this->trueTableName." as a")->field($field)->join("ios_news_class b on b.id=a.cid");
		if($where){
			$rs->where($where);
		}
		if(!empty($order)){
			$rs->order($order);
		}else{
			$rs->order("a.sign desc,a.isadv desc,a.issetupadv desc,a.orderid asc,a.utime desc,a.id desc");
		}
		if($limit){
			$rs->limit($limit);
		}
		$result	= $rs->select();
		return $result;
	}
	public function getcount($where,$order){
		$field	= "a.id as aid, a.n_title,a.n_color,a.n_from,a.sign,a.orderid,b.classname,b.id,b.pid,a.ctime,a.isdisplay,a.class ";
		$rs	= $this->table($this->trueTableName." as a")->field($field)->join("ios_news_class b on b.id=a.cid");
		if($where){
			$rs->where($where);
		}
		if(!empty($order)){
			$rs->order($order);
		}else{
			$rs->order("a.orderid asc,a.utime desc,a.id desc");
		}
		$result	= $rs->count();
		return $result;
	}
	/**
	 * 获取字段信息
	 * @return Ambigous <multitype:, boolean>
	 */
	public function getFs(){
		return $this->cache(true,86400)->getDbFields();
	}
	
	public function changeDisplay($id){
		if(empty($id))return false;
		$ck	= $this->field("isdisplay")->where("id=$id")->find();
		if($ck['isdisplay']==1){
			$data['isdisplay']=0;
			$data['utime']=Date("Y-m-d H:i:s");
		}else{
			$data['isdisplay']=1;
			$data['utime']=Date("Y-m-d H:i:s");
		}
		$rs = $this->data($data)->where("id=$id")->save();
		return $rs;
	}
	
	public function changeSign($id){
		if(empty($id))return false;
		$ck	= $this->field("sign")->where("id=$id")->find();
		if($ck['sign']==1){
			$data['sign']=0;
			$data['utime']=Date("Y-m-d H:i:s");
		}else{
			$data['sign']=1;
			$data['utime']=Date("Y-m-d H:i:s");
		}
		$rs =  $this->data($data)->where("id=$id")->save();
		return $rs;
	}
	
	public function checkname($cid,$info){
		if(empty($info)) return false;
		$where['n_title'] = array('like',"%".$info."%");
		$where['cid'] = $cid;
		return $this->where($where)->select();
	}
	
	public function getclass(){
		$sql = "SELECT news.n_title FROM `ios_news_class` cls LEFT JOIN ios_news news ON  cls.id = news.cid WHERE cls.short_name='quick_class' AND cls.isdel=0 AND news.isdel=0 AND news.isdisplay=1";
		return $this->query($sql);
	}
	
	public function changeclass($id,$title){
		$sql = "update ios_news set class = '$title' where id = $id ";
		$rs = $this->query($sql);
		return $rs;
	}
	
	/**
	 * 父app
	 * @param unknown_type $title
	 */
	public function parent_app($title){
		if(empty($title)) return false;
		$sql = "select id,n_title from ".$this->trueTableName." where cid = (select id from ios_news_class where short_name = 'quick' ) and (n_title = '".$title."' or id = '".$title."')";
		return $this->query($sql);
	}
}