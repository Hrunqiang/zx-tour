<?php
/**
 * 活动照片点赞
 * @author hhy
 * @createTime 2016-7-15 下午4:00:18
 */
class HdChongMaAction extends Action {
	
	protected $SmsTemplate = "【知行合逸】您的验证码是%s，请勿泄露并在30分钟内填写，感谢您的参与。如非本人操作，请忽略此短信。知行合逸，全球跑步赛事，一站直达。";
	public function index(){
		redirect("/");
	}
	
	public function piclist(){
		$m = new HdPicModel();
		$page = htmlspecialchars(addslashes(trim($_GET['p'])))?htmlspecialchars(addslashes(trim($_GET['p']))):1;
		$length = 5;
		$start = ($page-1)*$length;
		$data  = $m->where("state=1")->order("zan desc")->limit($start,$length)->select();
		if($data){
			echo json_encode(array("error"=>0,"msg"=>"ok","data"=>$data));
		}else{
			echo json_encode(array("error"=>1,"msg"=>"empty","data"=>""));
		}
	}
	
	public function zan(){
		$id = htmlspecialchars(addslashes(trim($_GET['id'])));
		$date = Date("Y-m-d H:i:s");
		if($date>="2016-09-02 18:00"){
			$rs['error'] = 1;
			$rs['msg'] = "活动已结束！";
			echo json_encode($rs);
			die;
		}
		if($id){
			$m = new HdPicModel();
			$res = $m->zan($id);
			if($res){
				$rs['error'] = 0;
				$rs['msg'] = "ok";
			}else{
				$rs['error'] = 2;
				$rs['msg'] = "点赞失败！请重试！";
			}
		}else{
			$rs['error'] = 1;
			$rs['msg'] = "点赞失败！请重试！";
		}
		echo json_encode($rs);
	}
	
	/**
	 * 上传图片
	 */
	public function upload(){
		header("Content-type:text/html;charset=utf-8");
		$date = Date("Y-m-d H:i:s");
		if($date>="2016-09-02 18:00"){
			echo '<script type="text/javascript">alert("活动已结束！");window.location.href = "/h5/chongma/list.html";</script>';
			die;
		}
		if($this->isPost()){
			$data['msg'] = htmlspecialchars(addslashes(trim($_POST['msg'])));
			$data['imgdata'] = htmlspecialchars(addslashes(trim($_POST['imgdata'])));
			if(empty($data['imgdata'])||empty($data['msg'])){
				echo '<script type="text/javascript">alert("请上传图片和感言！");window.location.href = "/h5/chongma/upload.html";</script>';
			}else{
				$uid = session("SESSION_ZX_HD_AUTHID");
				if($uid){			
					$accountM = new HdPicModel();
					$res = $accountM->upload($data,$uid);			
					if($res){
						echo '<script type="text/javascript">alert("上传成功！");window.location.href = "/h5/chongma/list.html";</script>';
					}else{
						echo '<script type="text/javascript">alert("可能您已经上传过照片了！");window.location.href = "/h5/chongma/upload.html";</script>';
					}
				}else{
					echo '<script type="text/javascript">alert("请先验证你的手机号！");window.location.href = "/h5/chongma/";</script>';
				}
			}
		}
	}
	
	/**
	 * 手机验证 
	 */
	public function auth(){
		header("Content-type:text/html;charset=utf-8");
		if($this->isPost()){
			$phone = htmlspecialchars(addslashes(trim($_POST['phone'])));
			$verifyCode = htmlspecialchars(addslashes(trim($_POST['code'])));
			if(!phoneCheck($phone)){
				echo '<script type="text/javascript">alert("手机号格式不对！");window.location.href = "/h5/chongma";</script>';
			}else{
				$memcache = new Memcache;
				$memcache->pconnect(C('MEMCACHE_HOST'), C('MEMCACHE_PORT'));
				if(!empty($verifyCode)&&$verifyCode == $memcache ->get("ZX_TMP_PHONE_CODE_".$phone)){
					//手机验证成功
					//删除验证码
					$memcache ->delete("ZX_TMP_PHONE_CODE_".$phone);
					
					$accountM = new HdPicModel();
					$u_id = $accountM->auth($phone);
					
					if($u_id){
						session("SESSION_ZX_HD_AUTHID",$u_id);
						redirect ( "/h5/chongma/upload.html" );
					}else{
						echo '<script type="text/javascript">alert("系统错误！");window.location.href = "/h5/chongma";</script>';
					}
				}else{
					echo '<script type="text/javascript">alert("验证码错误！");window.location.href = "/h5/chongma";</script>';
				};
			}
		}
		
	}
	
	/**
	 * 手机验证码发送
	 */
	public function verify(){
		$rs = array('error'=>65535,"msg"=>"未知错误！");
		
		$date = Date("Y-m-d H:i:s");
		if($date>="2016-09-02 18:00"){
			$rs['error'] = 1000;
			$rs['msg'] = "活动已结束！";
			echo json_encode($rs);
			die;
		}
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
		if($memcache->get("ZX_PHONE_VERIFY_SENDTIME".$phone."_".$date)>=10){
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
		//$smsres = "";
		//$smsres['error'] = 0;
		if($smsres['error']===0){
			$rs['error'] = 0;
			$rs['msg'] = "短信发送成功！";
			$memcache->increment("ZX_PHONE_VERIFY_SENDTIME".$phone."_".$date,1);
		}else{
			$rs['error'] = 1002;
			//$rs['msg'] = "短信服务商出现问题，无法发送难证码，验证码为".$verifyCode;
			$rs['msg'] = "短信发送失败，请稍后再试！";
			//$memcache->increment("ZX_PHONE_VERIFY_SENDTIME".$phone."_".$date,1);
		}
		
		echo json_encode($rs);		
	}
}