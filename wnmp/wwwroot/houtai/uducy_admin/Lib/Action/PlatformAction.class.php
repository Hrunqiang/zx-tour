<?php
/*
 * 报名
 * */
class PlatformAction extends Action {
	
	public function _initialize(){
		B('AuthCheck');
	}
	public function index(){
		$table_cfg	= array(
				'field'=>array(
						'id'	=>array('title'=>'id','isabm'=>true,'islist'=>true,'ismain'=>true,),
						'user_name'	=>array('title'=>'用户名','isabm'=>true,'islist'=>true,'type'=>'text',),
						'platform'	=>array('title'=>'平台名','isabm'=>true,'islist'=>true,'type'=>'text',),
						'ctime'	=>array('title'=>'创建时间 ','isabm'=>true,'islist'=>true,'type'=>'text',),
						'creater'	=>array('title'=>'创建人','isabm'=>true,'islist'=>true,'type'=>'text',),
				),
				'where'=>'',
				'table'	=>'zx_tb_platform_user',
				'utimeField'	=>'utime',
				's'		=>'IosFeedbac',
				'a'		=>'index',
				'perpage'=>'30',
				'designMode'=>'false',
				'tpl'=>'Platform:index',
				// 				'submitBtns'=>array("发送push"=>"./?s=Push&a=Pushusers")
		);
		$CommonAction	= new CommonAction();
		$CommonAction->list_fb($table_cfg);
	}
	
	public function reset_pwd(){
		try
		{
			$id=(empty($_GET['id']))?'':$_GET['id'];
			$this->assign( 'npa', array('管理首页', '修改密码') );
			$step=(empty($_POST['step']))?'':$_POST['step'];
			if(2==$step)
			{
				$password=(empty($_POST['password']))?'':$_POST['password'];
				$repassword=(empty($_POST['repassword']))?'':$_POST['repassword'];
				if($repassword!=$password){
					throw new Exception("两次密码输入不一致");
				}
				$User	= new PlatformModel();
				$User->member_password($id, $password);
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
		$sys=array('goback'=>'./?s=Platform',   'subform'=>'./?s=Platform&a=reset_pwd&id='.$id);
		$this->assign('sys', $sys);
		$this->display();
	}
	
	public function add(){
		try
		{
			$this->assign( 'npa', array('管理首页', '新增渠道') );
			$step=(empty($_POST['step']))?'':$_POST['step'];
			if(2==$step)
			{
				$name=(empty($_POST['platform_name']))?'':$_POST['platform_name'];
				$password=(empty($_POST['platform_password']))?'':$_POST['platform_password'];
				$platform=(empty($_POST['platform']))?'':$_POST['platform'];
				$user	= new PlatformModel();
				$data=$user->member_add($name, $password,$platform);
				$login	= new LoginAction();
				$login->message('添加用户成功,进入设置改用户权限!',"./?s=Platform");
				exit;
			}
		}
		catch (Exception $e)
		{
			$this->assign('error', $e->getMessage());
			$this->assign('data', $_POST);
		}
		$sys=array('goback'=>'./?s=Platform',   'subform'=>'./?s=Platform&a=add');
		$this->assign('sys', $sys);
		$this->display();
	}
}