<?php

class MemberAction extends Action {
	Public function _initialize(){
		B('AuthCheck');
	}
    public function index(){
    	redirect("/");
	}
	public function member_password()//change password
	{
		try
		{
			$this->assign( 'npa', array('管理首页', '修改密码') );
			$step=(empty($_POST['step']))?'':$_POST['step'];
			if(2==$step)
			{
				$name=(empty($_POST['name']))?'':$_POST['name'];
				$password=(empty($_POST['password']))?'':$_POST['password'];
				$repassword=(empty($_POST['repassword']))?'':$_POST['repassword'];
				if($repassword!=$password){
					throw new Exception("两次密码输入不一致");
				}
				if(1==If_manager)
				{
					$User	= new UserAuthModel();
					$User->member_password($name, $password,2);//超级管理员修改密码
				}
				else if(USERNAME==$name)
				{
					$User	= new UserAuthModel();
					$User->member_password($name, $password);
				}else{
					throw new Exception("非管理员用户不能修改他人密码");
				}
				$login	= new LoginAction();
				$login->message('添加用户成功,进入设置改用户权限!',"./?s=Member&a=member_password");
				exit;
			}
		}
		catch (Exception $e)
		{
			$this->assign('name',$_POST['name']);
			$this->assign('error', $e->getMessage());
		}
		$sys=array('goback'=>'./?s=Member&a=index',   'subform'=>'./?s=Member&a=member_password');
		$this->assign('sys', $sys);
		$this->display('member_password');
	}
}