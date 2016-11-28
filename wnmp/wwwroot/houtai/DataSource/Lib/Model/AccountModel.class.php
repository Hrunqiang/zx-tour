<?php
class AccountModel extends Model{
	protected  $trueTableName	= "mls_users";
	protected $connection = 'DB_CONFIG1';
	private $cacheTime	= '10';
		
	public function auth($account, $pwd) {
		$pwd = md5(C('USER_SALT').$pwd);
		$where = "pwd = '$pwd' and sign =1 and (phone = '$account' or email = '$account')";
		$rs = $this->field ( "id,phone,email,pwd,nicname" )->where ($where)->find ();
		if ($rs && $rs ['pwd'] == $pwd) {
			//session ( "nicname", $rs ['nicname'] );
			session ("authId", $rs['id']);
			session ("account", $account);
			return true;
		} else {
			return false;
		}
	}
	
	public function resetpwd($where,$pwd){
		$sql = "update $this->trueTableName set pwd = '".md5(C('USER_SALT').$pwd)."' where $where";
		return $this->query($sql);
	}
	
	public function changesign($id){
		if(!id) return false;
		$sql = "update $this->trueTableName set sign = 1 where id = $id";
		return $this->query($sql);
	}
	
	public function getuser($where){
		return $this->where($where)->select();
	}
	
}