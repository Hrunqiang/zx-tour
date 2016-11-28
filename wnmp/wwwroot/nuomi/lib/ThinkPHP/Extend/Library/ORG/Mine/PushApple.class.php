<?php
/*
 * IOS push 方法
 * 
 */
class PushApple {
	/**
	 * @param 设备标识 $did
	 * @param 发送的信息string $msg
	 * @return void|boolean
	 */
	public function pushmsg($did='',$msg=''){
		if(empty($did) || empty($msg))return false;
		//登录vpn密码
		$password	= '1234';
		//证书地址
		$pem_path	= dirname(dirname(THINK_PATH))."/api/app/".'Key/apns-pro.pem';//真实环境
// 		$pem_path	= dirname(dirname(THINK_PATH))."/api/app/".'Key/apns-dev.pem';//开发者
		$deviceToken = $did; //取得Token设备did
		$body = array("aps" => array("alert" => $msg, "badge" => 2, "sound"=>'default'));  //推送方式，包含内容和声音
		$ctx = stream_context_create();
		//如果在Windows的服务器上，寻找pem路径会有问题，路径修改成这样的方法：
		//$pem = dirname(__FILE__) . '/' . 'apns-dev.pem';
		//linux 的服务器直接写pem的路径即可
		stream_context_set_option($ctx, "ssl", "local_cert",$pem_path);
		$pass = $password;
		stream_context_set_option($ctx, 'ssl', 'passphrase',$pass);
		//此处有两个服务器需要选择，如果是开发测试用，选择第二名sandbox的服务器并使用Dev的pem证书，如果是正是发布，使用Product的pem并选用正式的服务器
// 		$fp = stream_socket_client("ssl://gateway.push.apple.com:2195", $err, $errstr, 60, STREAM_CLIENT_CONNECT, $ctx);
		$fp = stream_socket_client("ssl://gateway.sandbox.push.apple.com:2195", $err, $errstr, 60, STREAM_CLIENT_CONNECT, $ctx);
		if (!$fp) {
// 			return false;
			print "Failed to connect $err $errstr \r\n";
			return false;
		}
// 		print "Connection OK\r\n";
		$payload = json_encode($body);
		$msg = chr(0) . pack("n",32) . pack("H*", str_replace(' ', '', $deviceToken)) . pack("n",strlen($payload)) . $payload;
// 		print "sending message $did:" . $msg . "\r\n";
		fwrite($fp, $msg);
		fclose($fp);
		return true;
	}
}
?>
