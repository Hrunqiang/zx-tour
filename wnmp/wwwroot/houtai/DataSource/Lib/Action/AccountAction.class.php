<?php
// 本类由系统自动生成，仅供测试用途
class AccountAction extends Action {
	
	public function index() {
		header('Cache-Control:no-cache,must-revalidate');
		header('Pragma:no-cache');
		$this->assign("logon","index");
		$this->display ("Index:index");
	}
	
    /**
	 * 用户登录
	 *  
	 */
	public function login(){
		
		$this->assign("index","login");
		$this->display ("Index:index");
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
	 * 用户注册 
	 */
	public function register(){
		$account = htmlspecialchars(addslashes(trim($_GET['account'])));
		$sign = htmlspecialchars(addslashes(trim($_GET['sign'])));
		$ac = htmlspecialchars(addslashes(trim($_GET['ac'])));
		$this->assign("npa",array("tab"=>"用户管理","mtab"=>"用户注册"));
		if($account && $sign && $sign==md5(C('MAIL_AUTH').$account.$ac)){
			$this->assign('account',$account);
			$this->assign('ac',$ac);
		}
		$this->display ( "register" );
	}
	
	/**
	 * 忘记密码
	 */
	public function forget(){
		//验证参数
		$ac = htmlspecialchars(addslashes(trim($_GET['ac'])));
		$account = htmlspecialchars(addslashes(trim($_GET['account'])));
		$token = htmlspecialchars(addslashes(trim($_GET['token'])));
		$sign = htmlspecialchars(addslashes(trim($_GET['sign'])));

		//验证token
		$tokenM = new AuthTokenModel();
		if($ac&&$account&&$token&&$tokenM->auth_token($token, $account, $ac."reset")){
			$this->assign("reset","ok");
			$this->assign("npa",array("tab"=>"用户管理","mtab"=>"忘记密码"));
			$this->display();
			exit();
		}
		
		if($account && $sign && $sign==md5(C('MAIL_AUTH').$account)){
			$this->assign('email',$account);
			$this->assign('reset',"emailsend");	
		}
		$this->assign("npa",array("tab"=>"用户管理","mtab"=>"忘记密码"));
		$this->display();
	}
	
	/**
	 * 重置密码
	 */
	public function reset(){
		//验证参数
		$ac = htmlspecialchars(addslashes(trim($_GET['ac'])));
		$account = htmlspecialchars(addslashes(trim($_GET['account'])));
		$token = htmlspecialchars(addslashes(trim($_GET['token'])));
		//验证token
		$tokenM = new AuthTokenModel();
		if($ac&&$account&&$token&&$tokenM->auth_token($token, $account, $ac)){
			if($this->isPost()){
				$pwd = htmlspecialchars(addslashes(trim($_POST['pwd'])));
				$repwd = htmlspecialchars(addslashes(trim($_POST['repwd'])));
				if($pwd == $repwd){
					$auth = new AccountModel();
					$where = "$ac = '$account'";
					if($auth->resetpwd($where,$pwd)!==false){
						$tokenM->del_token($account, $ac);
						$token = $tokenM->get_token($account,$ac."reset");
						redirect("/Account/forget?token=$token&ac=$ac&account=$account");
					}else{
						$this->assign("error","系统错误！");
					}
				}else{
					$this->assign("error","两次密码不一致！");
				}	
			}
			$this->assign("ac",$ac);
			$this->assign("account",$account);
			$this->assign("token",$token);
			$this->assign("npa",array("tab"=>"用户管理","mtab"=>"重置密码"));
		}else{
			//验证失败，无效页面
			$this->assign("error",1);
		}
		$this->display();
	}
	/**
	 * 处理登录ajax请求
	 */
	public function dologin(){
		$rs = array("error"=>65533,"msg"=>"未知错误！");
		$account = htmlspecialchars(addslashes(trim($_GET['account'])));
		$pwd = htmlspecialchars(addslashes(trim($_GET['pwd'])));
		$code = htmlspecialchars(addslashes(trim($_GET['code'])));
		if($code && md5($code)==session('verify')){
			$auth = new AccountModel();
			if($account && $pwd && $auth->auth($account,$pwd)){
				//redirect ( '/Index/index' );
				$rs['error'] = 0;
				$rs['msg'] = "ok!";
				$rs['data'] = cookie("redirect")?cookie("redirect"):"/Index";
			}else{
				$rs['error'] = 1;
				$rs['msg'] = "用户名或密码错误！";
			}
		}else{
			$rs['error'] = 1;
			$rs['msg'] = "验证码错误！";
		}
		echo json_encode($rs);
	}
	
	/**
	 * 处理注册ajax请求
	 */
	public function doregister(){
		$rs = array("error"=>65533,"msg"=>"未知错误！");
		$pattern = htmlspecialchars(addslashes(trim($_GET['pattern'])));
		$account = htmlspecialchars(addslashes(trim($_GET['account'])));
		$pwd = htmlspecialchars(addslashes(trim($_GET['pwd'])));
		$code = htmlspecialchars(addslashes(trim($_GET['code'])));
		$phonecode = htmlspecialchars(addslashes(trim($_GET['phone_code'])));
		if(!$pattern || !$pwd || !$account){
			$rs['error'] = 10002;
			$rs['msg'] = "请正确填写注册信息！";
		}else{
			//手机注册
			if($pattern=="phone"){
				//验证手机格式
				if(!$this->checkphone($account)){
					$rs['error'] = 10000;
					$rs['msg'] = "手机格式不正确！";
				}else{
					$memcache = new Memcache;
					$memcache->pconnect(C('MEMCACHE_HOST'), C('MEMCACHE_PORT'));
					//验证手机验证码
					if($memcache->get("send_phone_code_register_".$account)==$phonecode){
						//手机验证码使用后重置
						$memcache->set("send_phone_code_register_".$account,null);
						$data['phone'] = $account;
						$data['pwd'] = md5(C('USER_SALT').$pwd);
						$data['sign'] = 1;
						$data['ctime'] = Date("Y-m-d H:i:s");
						$data['utime'] = Date("Y-m-d H:i:s");
						$accountM = new AccountModel();
						$where = "phone = '$account'";
						//验证手机是否存在
						if(!$accountM->getuser($where)){
							//添加用户
							$authid = $accountM->add($data);
							if($authid){
								$rs['error'] = 0;
								$rs['msg'] = "注册成功！";
								$sign = md5(C('MAIL_AUTH').$account.$pattern);
								$rs['data'] = "/Account/register?account=$account&sign=$sign&ac=$pattern";
							}else{
								$rs['error'] = 1003;
								$rs['msg'] = "系统错误，请稍后重试";
							}
						}else{
							//已经存在用户
							$rs['error'] = 10023;
							$rs['msg'] = "手机已存在！";
						}
					}else{
						$rs['error'] = 10001;
						$rs['msg'] = "验证码错误！！";
					}
				}
			}else if($pattern=="email"){
				//邮箱注册用户
				if(session('verify')==md5($code)){
					//验证邮箱格式 
					if(!$this->checkmail($account)){
						$rs['error'] = 10001;
						$rs['msg'] = "邮箱格式不正确！";
					}else{
						$data['email'] = $account;
						$data['pwd'] = md5(C('USER_SALT').$pwd);
						$data['sign'] = 0;
						$data['ctime'] = Date("Y-m-d H:i:s");
						$data['utime'] = Date("Y-m-d H:i:s");
						//验证邮箱是否存在
						$accountM = new AccountModel();
						$where = "email = '$account'";
						if(!$accountM->getuser($where)){
							//添加 用户
							$authid = $accountM->add($data);
							if($authid){
								//邮箱注册，等待验证
								$mailM = new MailModel();
								$sendmailres = $mailM->send($data['email'],$authid);
								if($sendmailres){
									$rs['error'] = 0;
									$rs['msg'] = "注册成功！请查收邮箱激活帐号！";
									$sign = md5(C('MAIL_AUTH').$account.$pattern);
									$rs['data'] = "/Account/register?account=$account&sign=$sign&ac=$pattern";
								}else{
									$rs['error'] = 10002;
									$rs['msg'] = "系统错误，请稍后重试!";
								}
							}else{
								$rs['error'] = 1001;
								$rs['msg'] = "系统错误，请稍后重试!";
							}
						}else{
							//已经存在用户
							$rs['error'] = 10023;
							$rs['msg'] = "邮箱已存在！";
						}
					}
				}else{
					$rs['error'] = 10006;
					$rs['msg'] = "验证码错误!";
				}
			}else{
				$rs['error'] = 1;
				$rs['msg'] = "无效注册方式！";
			}
		}
		echo json_encode($rs);
	}
	
	/**
	 * 处理忘记密码ajax请求
	 */
	public function doforget(){
		$rs = array("error"=>65533,"msg"=>"未知错误！");
		$pattern = htmlspecialchars(addslashes(trim($_GET['pattern'])));
		$account = htmlspecialchars(addslashes(trim($_GET['account'])));
		$code = htmlspecialchars(addslashes(trim($_GET['code'])));
		if(!$code || !$pattern || !$account){
			$rs['error'] = 10002;
			$rs['msg'] = "请正确填写信息！";
		}else{
			if($pattern=="phone"){
				if(!$this->checkphone($account)){
					$rs['error'] = 10000;
					$rs['msg'] = "手机格式不正确！";
				}else{
					$memcache = new Memcache;
					$memcache->pconnect(C('MEMCACHE_HOST'), C('MEMCACHE_PORT'));
					if($memcache->get("send_phone_code_forget_".$account)==$code){
						//手机验证码使用后重置
						$memcache->set("send_phone_code_forget_".$account,null);
						//手机验证成功
						$rs['error'] = 0;
						$rs['msg'] = "ok";
						$tokenM = new AuthTokenModel();
						$token = $tokenM->get_token($account,$pattern);
						$rs['data'] = "/Account/reset?token=$token&ac=$pattern&account=$account";
					}else{
						$rs['error'] = 10001;
						$rs['msg'] = "验证码不正确！";
					}
				}
			}else if($pattern=="email"){
				if(session('verify')==md5($code)){
					if(!$this->checkmail($account)){
						$rs['error'] = 10001;
						$rs['msg'] = "邮箱格式不正确！";
					}else{
						$accountM = new AccountModel();
						$where = "email = '$account'";
						$authres = $accountM->getuser($where);
						if($authres){
							$tokenM = new AuthTokenModel();
							$token = $tokenM->get_token($account,$pattern);
							$url = "/Account/reset?token=$token&ac=$pattern&account=$account";
							//邮箱注册，等待验证
							$mailM = new MailModel();
							$sendmailres = $mailM->sendreset($url,$account);
							if($sendmailres){
								$rs['error'] = 0;
								$rs['msg'] = "邮件已发送成功！请查收邮件重置密码！";
								$sign = md5(C('MAIL_AUTH').$account);
								$rs['data'] = "/Account/forget?account=$account&sign=$sign";
							}else{
								$rs['error'] = 10002;
								$rs['msg'] = "系统错误，请稍后重试!";
							}
						}else{
							//已经存在用户
							$rs['error'] = 10023;
							$rs['msg'] = "邮箱不存在！";
						}
					}
				}else{
					$rs['error'] = 10006;
					$rs['msg'] = "验证码错误!";
				}
			}else{
				$rs['error'] = 1;
				$rs['msg'] = "无效方式！";
			}
		}
		echo json_encode($rs);
	}
	
	/**
	 * 验证码
	 */
	public function verify() {
		import ( 'ORG.Util.Image_sae' );
		Image::buildImageVerify(4, 1, $type='png', 70, 26);
	}
	
	public function mailverify(){
		$authid = htmlspecialchars(addslashes(trim($_GET['authid'])));
		$getsign = htmlspecialchars(addslashes(trim($_GET['sign'])));
		$sign = md5(C('MAIL_AUTH').$authid);
		if($sign==$getsign){
			$accountM = new AccountModel();
			$change_res = $accountM->changesign($authid);
			if($change_res！==false){
				$this->assign("error",0);
				$this->assign("msg","帐号激活成功！");
			}else{
				$this->assign("error",1);
				$this->assign("msg","帐号激活失败！请重试！");
			}
		}else{
			$this->assign("error",1);
			$this->assign("msg","无效地址!");
		}
		$this->assign("npa",array("tab"=>"用户管理","mtab"=>"邮箱激活"));
		$this->display();
	}
	
	public function phoneverify(){
		$rs = array('error'=>65533,"msg"=>"未知错误！");
		$phone = $_GET['phone'];
		$ac = $_GET['ac'];
		if(!$phone) die("phone error");
		$a = range(0,9);
		for($i=0;$i<6;$i++){
			$b[] = array_rand($a);
		}
		$phonecode = join("",$b);
		$memcache = new Memcache;
		$memcache->pconnect(C('MEMCACHE_HOST'), C('MEMCACHE_PORT'));
		
		$ip = get_client_ip();
		$date = Date('Ymd');

		if($memcache->get("PHONE_".$ip."_SENDTIME".$date)>30){
			//ip发送短信超过次数
			$rs['error'] = 1;
			$rs['msg'] = "系统繁忙！";
		}else{
			if(!$memcache->get("PHONE_".$ip."_SENDTIME".$date)){
				$memcache->set("PHONE_".$ip."_SENDTIME".$date,1);
			}else{
				$memcache->increment("PHONE_".$ip."_SENDTIME".$date, 1);
			}
			if($memcache ->set($ac."_".$phone,$phonecode)){
				$accountM = new AccountModel();
				$where = "phone = '$phone'";
				if(!$accountM->getuser($where)){		
					if($ac=="send_phone_code_forget"){
						//已经存在用户
						$rs['error'] = 3;
						$rs['msg'] = "手机不存在！";
					}else{
						//发送成功
						$M = new SendSmsModel();
						$smsres = $M->send("您的激活验证码为".$phonecode."，请及时激活",$phone);
						if($smsres['error']===0){
							$rs['error'] = 0;
							$rs['msg'] = "短信发送成功！";
						}else{
							$rs['error'] = 1;
							$rs['msg'] = "短信发送失败！";
						}
					}
				}else{
					if($ac=="send_phone_code_forget"){
						$M = new SendSmsModel();
						$smsres = $M->send("您的激活验证码为".$phonecode."，请及时激活",$phone);
						if($smsres['error']===0){
							$rs['error'] = 0;
							$rs['msg'] = "短信发送成功！";
						}else{
							$rs['error'] = 1;
							$rs['msg'] = "短信发送失败！";
						}
					}else{
						//已经存在用户
						$rs['error'] = 3;
						$rs['msg'] = "手机已存在！";
					}
				}
			}else{
				//插入memecache错误
				$rs['error'] = 3;
				$rs['msg'] = "系统繁忙！";
			}
		}
		echo json_encode($rs);		
	}
	
	/**
	 * 密码检查
	 *   
	 *  */
	public function checkpwd($pwd){
		return $pwd ==''?false:true;
	}

	/**
	 * 检查邮箱
	 * @param unknown_type $mail
	 * @return boolean
	 */
	public function checkmail($account){
		return preg_match("/^[_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,3}$/",$account);
	}
	
	/**
	 * 检查手机号码
	 * @param unknown_type $account
	 * @return boolean
	 */
	public function checkphone($account){
		return preg_match("/^1[0-9][0-9]\d{4,8}$/",$account);
	}

}