<?php
/*
 * 报名
 * */
class CustomerAction extends Action {
	
	public function _initialize(){
		B('AuthCheck');
	}
	
	public function index(){
		$CustomerM = new CustomerModel;
		$matchs = $CustomerM->getmatchs();
		$matchlist = array();
		foreach ($matchs as $key=>$val){
			$matchlist[$val['match']] = $val['match'];
			//array_push($matchlist, $val['match']);
		}
		$table_cfg	= array(
				'field'=>array(
						'id'	=>array('ismain'=>true,'title'=>'序列','isabm'=>false,'islist'=>true),
						'name'	=>array('title'=>'姓名','isabm'=>true,'islist'=>true,'type'=>'text'),
 						'sfz_code'	=>array('title'=>'身份证号','isabm'=>true,'islist'=>true),
 						'birth'	=>array('title'=>'生日','isabm'=>true,'islist'=>true),
 						'sexy'	=>array('title'=>'性别','isabm'=>true,'islist'=>true,"type"=>"select",'selectdata'=>array('1'=>'男','2'=>'女')),
 						'country'	=>array('title'=>'国家','isabm'=>true,'islist'=>true,"type"=>"select",'selectdata'=>array('中国'=>'中国','其它'=>'其它')),
						'area'	=>array('title'=>'地区','isabm'=>true,'islist'=>false),
						'addr'	=>array('title'=>'详细地址','isabm'=>true,'islist'=>false),
						'e_mail'	=>array('title'=>'邮箱','isabm'=>true,'islist'=>true),
						'cloth_size'	=>array('title'=>'装备尺码','isabm'=>true,'islist'=>false,"type"=>"select",'selectdata'=>array('S'=>'S','M'=>'M','L'=>'L','XL'=>'XL','XXL'=>'XXL')),
						'pass_code'	=>array('title'=>'护照号','isabm'=>true,'islist'=>false),
						'surname'	=>array('title'=>'英文姓','isabm'=>true,'islist'=>false),
						'en_name'	=>array('title'=>'英文文','isabm'=>true,'islist'=>false),
						'issue_date'	=>array('title'=>'护照签发日期','isabm'=>true,'islist'=>false),
						'expiry_date'	=>array('title'=>'护照有效时间','isabm'=>true,'islist'=>false),
						'contact_name'	=>array('title'=>'联系人姓名','isabm'=>true,'islist'=>false),
						'contact_phone'	=>array('title'=>'联系人手机','isabm'=>true,'islist'=>false),
						'phone'	=>array('title'=>'联系方式','isabm'=>true,'islist'=>true),
						'postcode'	=>array('title'=>'邮编','isabm'=>true,'islist'=>false),
						'isattended'	=>array('title'=>'是否参加过全马','isabm'=>true,'islist'=>false,"type"=>"select",'selectdata'=>array('1'=>'是','0'=>'否')),
						'personbest'	=>array('title'=>'最好成绩','isabm'=>true,'islist'=>false),
						'personbestmatch'	=>array('title'=>'最好成绩比赛','isabm'=>true,'islist'=>false),
						'wishfinish'	=>array('title'=>'预期成绩','isabm'=>true,'islist'=>false),
						'`match`'	=>array('title'=>'报名赛事','isabm'=>true,'islist'=>true,"type"=>"select",'selectdata'=>$matchlist),
					),
		'where'=>' isdel = 0',
		'utimeField'=>"utime",
		'table'	=>'zx_tb_customer',
		'tpl'=>"index",
		's'		=>'Feedback',
		'a'		=>'list_fb',
		'perpage'=>'30',
		);
		$CommonAction	= new CommonAction();
		$CommonAction->list_fb($table_cfg);
	}
	
	/**
	 * 老用户报名
	 */
	public function enroll(){
		try{
			$id =  htmlspecialchars(addslashes(trim($_GET['id'])));
			if(!$id) throw new Exception('请选择你要报名的老用户!!!!');
			$CustomerM = new CustomerModel;

			$info = $CustomerM->getCustomerInfo($id);
			if(!info) throw new Exception('未查询到该老用户信息!!!!');
			$matchM = new MatchV2Model();
			$matchlist  = $matchM->getAbleMatchList();
			$this->assign("info",$info);
			$this->assign("matchlist",$matchlist);
		}catch( Exception $e){
			message($e->getMessage(),'?s=Customer');
		}
		$this->display();
	}
	
	public function userdata(){
		$uid = htmlspecialchars(addslashes(trim($_GET['uid'])));
		$userM = new ZxUserModel();
		if($this->isPost()){
			if($userM->where("uid = $uid")->find()){
				$res = $userM->where("uid = $uid")->data($_POST)->save();
			}else{
				$_POST['uid'] = $uid;
				$res = $userM->add($_POST);
			}
			
			if($res === false){
				message("保存失败！！",'?s=Customer&a=userdata&uid='.$uid);
			}else{
				message("保存成功！！",'?s=Customer&a=userdata&uid='.$uid);
			}
		}
		$info = $userM -> getCustomerInfo($uid);
		$this->assign("uid",$uid);
		$this->assign("info",$info);
		$this->display();
	}
	
	
	public function strRepeats($str,$len,$repeat){
		$time = $len-strlen($str);
		return str_repeat($repeat,$time).$str;
	}
	
	/**
	 * 
	 */
	public function  smscode(){
		$i = Date("H");
		$d= Date("d");
		$w = Date('w');
		$echo = ($w+$i%3).$this->strRepeats(abs($i*$i-$d*$d),3,$i%5).($w+$i+24);
		echo "海外手机验证码为：".$echo."<br><br>";
		echo "失效时间：".Date("Y-m-d")." ".($i+1).":00:00<br>";
		die();
	}
	
	
}