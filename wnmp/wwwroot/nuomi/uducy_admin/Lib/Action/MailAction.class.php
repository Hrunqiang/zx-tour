<?php
/**
 * 邮件发送
 * */
class MailAction extends Action {
		
	public function mailsend($data){
		if(empty($data['mail']) || empty($data['mail_title']) || empty($data['mail_content'])) return false;
		$mail = new MailModel();
		return $mail->send($data['mail'],$data['mail_title'],$data['mail_content']);
	}


}