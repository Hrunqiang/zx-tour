<?php
/**
 * 通知
 * */
class EnrollNoticeAction extends Action {
	
	public function _initialize(){
		B('AuthCheck');
	}
	public function index(){	
		$enrollM = new UserOrdersModel();
		$applyNum = $enrollM->apply_num();
		$applys = $enrollM->apply_orders();
// 		var_dump($applyNum);
		$this->assign("applyNum",$applyNum);
		$this->assign("list",$applys);
		$this->display();
	}
	
	public function mailsend(){
		if($this->isPost()){
			$mail_title = htmlspecialchars(addslashes(trim($_POST['mail_title'])));
			$addressee = htmlspecialchars(addslashes(trim($_POST['addressee'])));
			$mail_content = trim($_POST['mail_content']);
			if(!$mail_title||!$addressee||!$mail_content){
				message('邮件发送失败！必要参数不能为空','./?s=EnrollNotice&a=mailsend');
			}
			$add_arr = explode(";", $addressee);
			//$mail = new MailModel();
			$redis = new Redis();
			$redis->pconnect("127.0.0.1",6379);
			$count = 0;
			foreach ($add_arr as $k=>$v){
				if($v&&preg_match("/^[_\.0-9a-z-]+@([0-9a-z][0-9a-z-]+\.)+[a-z]{2,3}$/",$v)){
					$data['a'] = "Mail";
					$data['m'] = "mailsend";
					$data['d'] = array(
							"mail"			=>	trim($v),
							"mail_title" 	=> 	$mail_title,
							"mail_content" 	=> 	$mail_content
							);
					$list = json_encode($data);
					$redis->rpush("MLS_MAIL_SEND_LIST",$list);
					//$res = $mail->send($v,$mail_title,$mail_content);
					$count++;
				}
			}
			message('邮件发送成功！！一共发送了 '.$count.' 封邮件','./?s=EnrollNotice&a=mailsend');
		}
		$this->display();
	}


}