<?php
// 本类由系统自动生成，仅供测试用途
class AccountAction extends Action {
	
	
	protected $SmsTemplate = "【知行合逸】您的验证码是%s，请勿泄露并在30分钟内填写，感谢您的参与。如非本人操作，请忽略此短信。知行合逸，全球跑步赛事，一站直达。";
	public function index() {
		header('Cache-Control:no-cache,must-revalidate');
		header('Pragma:no-cache');
		$this->assign("logon","index");
		$this->display ("Index:index");
	}
	
	public function weixinlogin(){
		$result	= array('error'=>-1,'msg'=>'unlogin','data'=>array());
		if(isweixin()){
			$openid	= session("SESSION_ZX_OPENID");
			$login	= false;
			$UserM	= new WeixinUsersModel();
			$usr = $UserM->getUidByOpenid($openid);	
			if(!empty($openid)){
				session("SESSION_ZX_OPENID",$usr['openid']);
				session('SESSION_ZX_AUTHID',$usr['id']);
				session("SESSION_ZX_USERSTATE",$usr['state']);
				session("SESSION_ZX_SEXY",$usr['sexy']);
				$result['error']=0;
				$result['msg']="ok";
			}
		}else{
			$result['error']=0;
			$result['msg']="ok";
		}
		
		echo json_encode($result);
	}
	
    /**
	 * 用户登录
	 *  
	 */
	public function login(){
		if($this->isPost()){
			$phone = htmlspecialchars(addslashes(trim($_POST['phone'])));
			$verifyCode = htmlspecialchars(addslashes(trim($_POST['code'])));
			if(!phoneCheck($phone)){
				$this->assign("phone_error",1);
			}else{
				$memcache = new Memcache;
				$memcache->pconnect(C('MEMCACHE_HOST'), C('MEMCACHE_PORT'));
				if(!empty($verifyCode)&&$verifyCode == $memcache ->get("ZX_TMP_PHONE_CODE_".$phone)){
					//手机验证成功
					//删除验证码
					$memcache ->delete("ZX_TMP_PHONE_CODE_".$phone);
					
					$accountM = new AccountModel();
					if(!isweixin()){
						$u_id = $accountM->auth($phone);
					}else{
						$u_id = $accountM->weixinauth($phone);
					}
					
					if($u_id){
						session("SESSION_ZX_AUTHID",$u_id);
						session("SESSION_ZX_PHONE",$phone);
						$histroy = session("SESSION_ZX_HISTORYURL")?session("SESSION_ZX_HISTORYURL"):"/";
						redirect ( $histroy );
					}else{
						$this->assign("error","系统错误!请稍后再试！");
					}
				}else{
					$this->assign("phone",$phone);
					$this->assign("code_error",1);
				};
			}
		}
		$this->assign("type",$_GET['type']);
		$this->display ();
	}
	
	/**
	 * 退出
	 */
	public function logout(){
		header('Cache-Control:no-cache,must-revalidate');
		header('Pragma:no-cache');
		session ("authId", null);
		session ("account", null);
		redirect ( '/Index' );
	}
	
	
	
	/**
	 * 手机验证码发送
	 */
	public function verify(){
		$rs = array('error'=>65535,"msg"=>"未知错误！");
		
		//1.获取手机号码
		$phone = htmlspecialchars(addslashes(trim($_GET['phone'])));
		
		//验证手机号		
		if(!phoneCheck($phone)){
			echo json_encode(array("error"=>1000,"msg"=>"手机号码不能为空！"));
			exit();
		}
		
		$memcache = new Memcache;
		$memcache->pconnect(C('MEMCACHE_HOST'), C('MEMCACHE_PORT'));
		
		$ip = get_client_ip();
		$date = Date('Ymd');
		
		//手机验证码发送次数超过100次
		if($memcache->get("ZX_PHONE_VERIFY_SENDTIME".$phone."_".$date)>=100){
			die(json_encode(array("error"=>1001,"msg"=>"今日发送短信验证码次数已达上限！")));
		}
		
		//生成随机验证码
		$a = range(0,9);
		for($i=0;$i<6;$i++){
			$b[] = array_rand($a);
		}
		$verifyCode = join("",$b);
		//缓存验证码，有效时间 半小时=1800秒
		$memcache ->set("ZX_TMP_PHONE_CODE_".$phone,$verifyCode,null,1800);
		$M = new SendSmsModel();
		$smsres = $M->send(sprintf($this->SmsTemplate,$verifyCode),$phone);	
		if($smsres['error']===0){
			$rs['error'] = 1;
			$rs['msg'] = "短信发送成功！".$verifyCode;
			$memcache->increment("ZX_PHONE_VERIFY_SENDTIME".$phone."_".$date,1);
		}else{
			$rs['error'] = 1002;
			$rs['msg'] = "短信发送失败！".$verifyCode;
		}
		
		echo json_encode($rs);		
	}
}