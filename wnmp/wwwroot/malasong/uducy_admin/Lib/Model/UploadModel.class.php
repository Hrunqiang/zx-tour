<?php
/*
 * 版本更新查询
 * 
 */
class UploadModel extends Model {
	
	public static function upload($data,$oldname='')
	{
		
		$time = date('Ymd',time());
		if(trim($_GET['dir'])){
			$time	= trim($_GET['dir']);
		}
		$customImageLink = 'null';//定制路径默认为null
		//echo $data['file']['name'];
		if(empty($data['imgFile']['name'])){
			return $data['imgFile']['name'].json_encode($data);
			die("请上传图片");
		}
		if(!empty($data['imgFile']['name'])){
			$type = array('image/pjpeg','image/jpeg','image/png','image/gif','jpg');
			$real_type	= array('jpg','gif','png','txt');
			$data_type=explode('.', $data['imgFile']['name']);
			if(!in_array($data_type[count($data_type)-1],$real_type)){
				die("文件上传格式错误");
			}
// 			echo "<pre>";
// 			var_dump($data);
			$upload_err = $data['imgFile']['error'];
			if($upload_err==0){
				if(empty($oldname))
				{
					//将已上传的文件从临时目录移动到制定目录
					//生成新的文件名
					$md = md5(uniqid());
// 					if(trim($_GET['new_name']) && trim($_GET['dir'])){
// 						$md	= preg_replace("/\.[a-zA-Z]{2,}/", "", trim($_GET['new_name']));
// 					}
					$upload_dir = UPLOAD.'\\'.$time.'\\';
					echo $upload_dir."1<br>";
// 					$upload_dir = WWWROOT.'/st/cdn/games/'.$time."/";
// 					if(!is_dir(UPLOAD.'st')){
// 						if(!mkdir(UPLOAD.'st',0777,true)){
// 							die("目录不能创建:".UPLOAD.'/st');
// 						}
// 					}
					if(!is_dir(UPLOAD.'/'.$time)){
						if(!mkdir(UPLOAD.'/'.$time,0777,true)){
							die("目录不能创建:".APP_PATH.'st/cdn/games');
						}
					}
					if(!is_dir($upload_dir)){
						if(!mkdir($upload_dir,0777,true))
							die("文件上传目录不存在并且无法创建文件上传目录");
						if(!chmod($upload_dir,0777))
							die("文件上传目录的权限无法设定为可读可写");
					}
					echo UPLOAD."<br>";
					$targetfilename=$upload_dir.$md.strrchr($data['imgFile']['name'],".");
					
					echo "<pre>";
					var_dump($data);
					$targetfilename = $upload_dir."aaa.txt";
					
					$targetfilename = "D:\\wnmp\\www\\malasong\\uducy_admin\\st\\upload\\aaa.txt";
					echo $targetfilename."<br>";
					$a="C:\\Users\\Administrator\\Desktop\\gradle-2.2.1-all\\mail.txt";
					//if(!move_uploaded_file($data["imgFile"]["tmp_name"],$targetfilename)){
					if(!move_uploaded_file($a,$targetfilename)){
						die("文件上传错误1");
					}

				}
				
// 				$uptoydjf	= self::excut_post($targetfilename, 'upload');
		
			}else{
				die("文件上传错误");
			}
			$customImageLink ='http://images.at321.cn/'.$time.'/'.$md.strrchr($data['file']['name'],".")."?v=".time();
			// 			$customImageLink ='/st/public/'.$time.'/'.$md.strrchr($data['file']['name'],".")."?v=".time();
// 			if($uptoydjf){
// 				$uptoydjf_array=json_decode($uptoydjf,true);
// 				if($uptoydjf_array){
// 					$customImageLink='http://dl.khd.at321.cn'.$uptoydjf_array['data']['url'];
// 				}
// 			}
			return $customImageLink;
		}
		else
		{
			return "fff";
		}
	}
	
	
	public static function post_file($url,$data){
		$ch = curl_init();
		$post_data = $data;
		// 	$post_data = array(
		// 			'loginfield' => 'username',
		// 			'username' => 'ybb',
		// 			'password' => '123456',
		// // 			'file' => $file
		// 	);
		curl_setopt($ch, CURLOPT_HEADER, false);
		//启用时会发送一个常规的POST请求，类型为：application/x-www-form-urlencoded，就像表单提交的一样。
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		curl_setopt($ch, CURLOPT_POST, false);
		curl_setopt($ch,CURLOPT_BINARYTRANSFER,true);
		curl_setopt($ch, CURLOPT_POSTFIELDS,$post_data);
		curl_setopt($ch, CURLOPT_URL, $url);
		$info= curl_exec($ch);
		if(curl_errno($ch) > 0){
			return false;
		}
		curl_close($ch);
		return $info;
	}
	
	public static function excut_post($file,$ac){
		$file	= realpath($file);
		if(!file_exists($file)){
			return false;
		}
		$content	= file_get_contents($file);
		$filemd5	= md5($content);
		$filesize	= filesize($file);
		$data	= array('filemd5'=>$filemd5,'filesize'=>$filesize);
		$data_str	= json_encode($data);
		$time	= time();
		$sign	= md5($data_str.$time.'YaCMWT&%');
		if($ac=='check'){
			$interface	= '/up/v1/check';
		}elseif($ac=='upload'){
			$interface	= '/up/v1/upload';
		}else{
			return false;
		}
		// $interface	= '/up/v1/check';
		$url	= 'http://dl.at321.cn'.$interface.'?time='.$time.'&from=admin&sign='.$sign;
		// $url	= 'http://dl.at321.cn'.$interface.'?time='.$time.'&from=admin&sign='.$sign;
		// $rs	= curlPost($url,array("n"=>$data_str));
		$rs	= self::post_file($url,array("n"=>$data_str,'file_0'=>'@'.$file));
		return $rs;
	}
	
}
?>
