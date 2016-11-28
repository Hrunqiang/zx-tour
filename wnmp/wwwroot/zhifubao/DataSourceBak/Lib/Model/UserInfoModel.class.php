<?php
/**
 * 用户信息Model类
 * @author hhy
 * createTime 2016-03-20
 */
class UserInfoModel extends Model{
	protected  $trueTableName	= "zx_tb_userinfo";
	protected $connection = 'DB_CONFIG1';
	private $cacheTime	= '10';
		
	/**
	 * 伊娃用户资料
	 * @param unknown_type $data
	 * @return boolean
	 */
	public function createUserinfo($data){
		if(empty($data)||empty($data['uid'])) return false;
		$rs = $this->where("uid={$data['uid']}")->find();
		if(!$rs){
			return $this->add($data);
		}else{
			if($rs['state']) 
			session("SESSION_ZX_USERSTATE",$rs['state']);
			return false;
		}
	}
	
	/**
	 * 修改用户资料
	 * @param unknown_type $uid
	 * @param unknown_type $data
	 * @return boolean
	 */
	public function updateUserinfo($uid,$data){
		if(empty($uid)) return false;
		return $this->where("uid=$uid")->data($data)->save();
	}
	
	/**
	 * 得到用户资料信息
	 * @param unknown_type $uid
	 * @return boolean|Ambigous <mixed, boolean, NULL, multitype:, unknown, string>
	 */
	public function getuserinfo($uid){
		if(empty($uid)) return false;
		return $this->where("uid = $uid")->find();
	}
	
}