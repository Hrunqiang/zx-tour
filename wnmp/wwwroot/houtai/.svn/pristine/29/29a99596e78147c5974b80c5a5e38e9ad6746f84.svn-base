<?php
class UsersManageAction extends Action{
	Public function _initialize(){
		B('AuthCheck');
	}
	
	public function get_list(){
		$table_cfg	= array(
				'field'=>array(
					'id'	=>array('ismain'=>true,'title'=>'序列','isabm'=>false,'islist'=>true),
					'snstype'	=>array('title'=>'平台','isabm'=>false,'islist'=>true,'type'=>'select','selectdata'=>array('1'=>'新浪','2'=>'腾讯')),
					'nickname'	=>array('title'=>'昵称','isabm'=>false,'islist'=>true,'type'=>'text'),
					'username'	=>array('title'=>'用户名','isabm'=>true,'islist'=>true,'type'=>'text'),
					'dicttok'	=>array('title'=>'拼接字段','isabm'=>false,'islist'=>true),
					'headimg'=>array('title'=>'头像','isabm'=>false,'islist'=>true,'type'=>'img'),
					'sex'	=>array('title'=>'性别','isabm'=>false,'islist'=>true,'type'=>'select','selectdata'=>array('1'=>'男','2'=>'女')),
					'sign'	=>array('title'=>'标记','isabm'=>true,'islist'=>true,'type'=>'select','selectdata'=>array('0'=>'普','1'=>'hot')),
					'isrobot'	=>array('title'=>'机器人','isabm'=>true,'islist'=>true,'type'=>'select','selectdata'=>array('0'=>'否','1'=>'是')),
					'ctime'	=>array('title'=>'创建时间','isabm'=>false,'islist'=>true,'type'=>'text')
					),
				'table'	=>'tbl_app_lc2_user',
				's'		=>'UsersManage',
				'a'		=>'get_list',
				'perpage'=>'30',
				'tpl'=>'common:users',
				'submitBtns'=>array("发送push"=>"./?s=Push&a=Pushusers")
				);
		$CommonAction	= new CommonAction();
		$CommonAction->list_fb($table_cfg);
	}
	public function add(){
		$result	= array('error'=>'1','msg'=>'error 001');
		$data	= array();
		$verify	= session('feedback');
		$capa	= trim($_GET['capa']);
		if ($verify != md5 (strtoupper($capa))) {
			session('feedback',rand(10000, 99999));
			$result['error']=2;
			$result['msg']	='error verify code';
		} else {
			$data['cls'] 	= addslashes(trim($_POST['cls']));
			$data['title'] 	= addslashes(trim($_POST['title']));
			$data['content']= addslashes(trim($_POST['content']));
			$data['uname'] 	= addslashes(trim($_POST['uname']));
			$data['utel'] 	= addslashes(trim($_POST['tel']));
			$info['qq']	 	= addslashes(trim($_POST['qq']));
			$info['addr'] 	= addslashes(trim($_POST['addr']));
			$data['uinfo']	= serialize($info);
			$FdObj	= new FeedbackModel();
			$rs		= $FdObj->add($data);
			if($rs){
				$result['error']=0;
				$result['msg']	='ok';
			}
		}
		
		echo json_encode($result);
	}
}