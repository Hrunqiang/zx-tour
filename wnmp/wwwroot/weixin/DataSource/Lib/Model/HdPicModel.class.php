<?php
/**
 * 活动照片点赞Model类
 * @author hhy
 * createTime 2016-03-30
 */
class HdPicModel extends Model{
	protected  $trueTableName	= "zx_hd_pic";
	protected $connection = 'DB_CONFIG1';

	public function zan($id){
		return $this->where("id=$id")->setInc('zan');
	}
	
	public function auth($phone){
		if(empty($phone)) return false;
		$info = $this->where("phone=$phone")->find();
		if($info===false){
			return false;
		}
		
		if($info['id']){
			return $info['id'];
		}else{
			$data['ctime'] = Date("Y-m-d H:i:s"); 
			$data['phone'] = $phone;
			$rs = $this->add($data);
			return $rs;
		}
	}
	
	public function upload($data,$uid){
		if(empty($data['imgdata']) || empty($data['msg'])) return false;
		$info = $this->where("id=$uid")->find();
		if($info['state']==0){
			$data['state'] = 1;
			$rs = $this->where("id=$uid")->data($data)->save();
			return $rs;
		}else{
			return false;
		}
	}
}