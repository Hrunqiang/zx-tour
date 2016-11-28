<?php
// 本类由系统自动生成，仅供测试用途
class MailModel{
	protected $mail_config = array(
		"CharSet"=>'UTF-8', //设置邮件的字符编码，这很重要，不然中文乱码
		"SMTPAuth"=> true,             //开启认证
		"Port"=> 25,
		"Host"=> "smtp.qq.com",
		"Username"   =>"service@zx-tour.com",
		"Password"   =>"Zx_tour_2015",
		"AddReplyTomail"=> "service@zx-tour.com",//回复地址
		"AddReplyToname" =>"知行合逸客服",
		"From"=> "service@zx-tour.com",
		"FromName"   =>"知行合逸客服"
		);
	

	/**
	 * 注册验证
	 * @param unknown_type $mail
	 * @return boolean
	 */
	public function send($email,$title,$content){
		if(!$email||!$title||!content) return false;
		import("ORG.Mail.phpmailer");
		header("content-type:text/html;charset=utf-8");
		ini_set("magic_quotes_runtime",0);
		try {
			$mail = new PHPMailer(true);
			$mail->IsSMTP();
			$mail->CharSet=$this->mail_config['CharSet']; //设置邮件的字符编码，这很重要，不然中文乱码
			$mail->SMTPAuth   = $this->mail_config['SMTPAuth'];                  //开启认证
			$mail->Port       = $this->mail_config['Port'];
			$mail->Host       = $this->mail_config['Host']; 
			$mail->Username   = $this->mail_config['Username']; 
			$mail->Password   = $this->mail_config['Password'];
			$mail->AddReplyTo($this->mail_config['AddReplyTomail'],$this->mail_config['AddReplyToname']);//回复地址
			$mail->From       = $this->mail_config['From'];
			$mail->FromName   = $this->mail_config['FromName'];
			$to = $email;
			$mail->AddAddress($to);

			$mail->Subject  = $title; 
			$body = $this->create_mail_body($content);
			$mail->Body = $body['body'];
			$mail->AltBody    = $body['altbody']; //当邮件不支持html时备用显示，可以省略
			$mail->WordWrap   = 80; // 设置每行字符串的长度
			//$mail->AddAttachment("f:/test.png");  //可以添加附件
			$mail->IsHTML(true);
			//$res = $accountobj->savefield(array('u_email'=>$email), array("u_pwd"=>md5($body['newpwd'])));
			$mail->Send();
		} catch (phpmailerException $e) {
 			echo "邮件发送失败：".$e->errorMessage();
			@mwtlog("mail_send_data","mail:".$email."\t title".$title."\t content:".$content,true);
			return false;
		}	
		return true;
	}
	
	/**
	 * 生成重置密码邮件
	 * @param unknown_type $url
	 * @return string
	 */
	public function create_mail_body($content){
		$data['body'] = $content;
		$data['altbody'] = "";
		return $data;
	}
	
}