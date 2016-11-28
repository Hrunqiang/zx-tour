<?php
/**
 * 后台改价Model类
 * @author hhy
 * createTime 2016-03-30
 */
class PlatformModel extends Model{
	protected  $trueTableName	= "zx_tb_platform_user";
	protected $connection = 'DB_CONFIG1_zx';

	public function member_password($id,$password,$type=1)
	{
		if($type==1)$sql_add=" AND is_admin='0' ";
		$how	= $this->where("id='$id' ")->find();
		if(!$how)
		{
			throw new Exception("没有这个用户.");
		}
	
	
		if ($password!='')
		{
			if(strlen($password)<6)
			{
				throw new Exception("密码长度不够,最少6位.");
			}
			$S_key=array("\\",'&',' ',"'",'"','/','*',',','<','>',"\r","\t","\n",'#');
			foreach($S_key as $value)
			{
				if (strpos($password,$value)!==false)
				{
					throw new Exception("密码不能包含特殊字符.");
				}
			}
			$password=md5 ( C ( 'USER_SALT' ) . addslashes ( $password ) );
			$data['password']	= $password;
			return $this->data($data)->where("id='$id'")->save();
		}
		else
		{
			throw new Exception("请输入新密码.");
		}
	}
	
	public function member_add($username,$pwd,$platform){
		if(empty($username) || empty($pwd)) return false;
		$data['user_name']	= $username;
		$data['password']	= md5 ( C ( 'USER_SALT' ) . addslashes ( $pwd ) );
		$data['platform']	= $platform;
		$data['creater']	= session('user');
		$data['ctime']		= Date("Y-m-d H:i:s");
		$data['is_admin']	= 1;
		$rs	= $this->data($data)->add();
		return $rs;
	}
	
}