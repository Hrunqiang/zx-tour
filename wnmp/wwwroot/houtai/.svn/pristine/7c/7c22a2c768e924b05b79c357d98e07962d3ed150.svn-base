<?php
/**
 * 上传资源文件到cdn域名下
 * dl.khd.at321.cn
 * @author 文涛
 *
 */
class UploadDlKhdCdn{
	const HOST	= 'http://upload.khd.at321.cn';
	
	/**
	 * 检查文件是否存在
	 * @param  本地服务器文件路径 $filePath
	 * @return boolean|array 
	 */
	public function checkExist($filePath){
		$result	= array("error"=>"65535",'msg'=>"unknow",'data'=>null);
		if(empty($filePath) || !file_exists($filePath)) return false;
		$interface	= self::HOST.'/upload/reuse.ashx?md5=%s';
		$data	= file_get_contents($filePath);
		if(!empty($data)){
			$md5	= md5($data);
			$interface	= sprintf($interface,$md5);
// 			echo $interface;die;
			$getd	= $this->curlRequest($interface);
			unset($data);
			if($getd['error']==0){
				if($getd['data']===""){
					//不存在可以上传
					$result['error']=-1;
					$result['msg']	='none';
					return $result;
				}else{
					//已经存在
					$result['error']=0;
					$result['msg']	='exist';
					$result['data']	=$getd['data'];
					return $result;
				}
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	/**
	 * 检查文件在服务器上是否存在
	 * @param  $filepath
	 * @return boolean|array 
	 */
	public function checkFilePath($filepath){
		if(empty($filepath)) return false;
		$result	= array("error"=>"65535",'msg'=>"unknow",'data'=>null);
		$filepath	= urlencode($filepath);
		$interface	= self::HOST.'/upload/exists.ashx?file=%s';
		$interface	= sprintf($interface,$filepath);
		$getd	= $this->curlRequest($interface);
		if($getd['error']==0){
			if($getd['data']===""){
				//不存在可以上传
				$result['error']=-1;
				$result['msg']	='none';
				return $result;
			}else{
				//已经存在
				$result['error']=0;
				$result['msg']	='exist';
				$result['data']	=$getd['data'];
				return $result;
			}
		}else{
			return false;
		}
	}
	
	/**
	 * 上传文件到cdn服务器上
	 * @param 需要上传的本地完整路径	$upFilePath
	 * @param 文件路径(不包括文件名称eg:/dh/20150109) $filePath
	 * @param 文件名称(保证不重复性,重复后覆盖eg:123.jpg) $fileName
	 * @return boolean | array
	 */
	public function uploadToCdn($upFilePath,$filePath,$fileName){
		if(empty($filePath) || empty($fileName) || empty($upFilePath)) return false;
		$result	= array("error"=>"65535",'msg'=>"unknow",'data'=>null);
		$interface	= self::HOST.'/upload/send.ashx?dir=%s&file=%s&w=1';
		$filePath	= urlencode($filePath);
		$fileName	= urlencode($fileName);
		$interface	= sprintf($interface,$filePath,$fileName);
		$data	= file_get_contents($upFilePath);
		if(!empty($data)){
			$getd	= $this->curlRequest($interface,$data);
			unset($data);
			if($getd['error']==0){
				if($getd['data']===""){
					//不存在可以上传
					$result['error']=-1;
					$result['msg']	='error';
					return $result;
				}else{
					//已经存在
					$result['error']=0;
					$result['msg']	='upload ok';
					$result['data']	=$getd['data'];
					return $result;
				}
			}else{
				return false;
			}
		}else{
			return false;
		}
	}
	/**
	 * 多线程下载
	 * 返回值会在传入的数组中加入code,savepath,size
	 * code:0成功,-2后缀不允许....
	 * savepath:下载完成后的保存地址
	 * @param  array(array("url"=>"","newname"=>"","id"=>""),array("url"=>"","newname"=>"","id"=>"")) $objs
	 * @param  下载后的文件存放地址 $save_dir
	 * @return array|string
	 */
	public function DownLoadMulti($objs,$save_dir)
	{
		if(empty($save_dir)) return false;
		if(!file_exists($save_dir))@mkdir($save_dir, 0777, TRUE);
		ini_set("max_execution_time", "0");
		ini_set('memory_limit', '256M');
		$allowd	= array('.png','.jpg','.ico','.gif','.bmp','.jpeg');
		if (!is_array($objs))
		{
			return false;
		}
		$mh = curl_multi_init();
		foreach ($objs as $i => $obj)
		{
			$url = $obj["url"];
			// 检查文件后缀是否为apk
			$ext = strrchr($url, '.');
			if(!in_array($ext, $allowd)){
				$obj[$i]['code'] = -2;
				continue;
			}
	
			// 获取文件名
			if($obj['newname']){
				$filename = $obj['newname'];
			}else{
				$filename = basename($url);
			}
			$save_dir	= preg_replace("/\/$/", '', $save_dir);
			$file[$i] = $save_dir .'/'. $filename;
			if (!is_file($file[$i]))
			{
				$conn[$i] = curl_init($url);
				$fp[$i] = fopen($file[$i], "wb");
				curl_setopt($conn[$i], CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0)");
				curl_setopt($conn[$i], CURLOPT_FILE, $fp[$i]);
				curl_setopt($conn[$i], CURLOPT_HEADER, 0);
				curl_setopt($conn[$i], CURLOPT_CONNECTTIMEOUT, 60);
				curl_multi_add_handle($mh, $conn[$i]);
			}else{
				$obj[$i]['code'] = -3;
				continue;
			}
		}
		
		do
		{
			$n = curl_multi_exec($mh, $active);
		}while ($active);
		foreach ($objs as $i => $obj)
		{
			curl_multi_remove_handle($mh, $conn[$i]);
			curl_close($conn[$i]);
			fclose($fp[$i]);
				
			//赋值
			$objs[$i]['size'] = filesize($file[$i]);
			$objs[$i]['code'] = 0;
			$objs[$i]['savepath'] = $file[$i];
		}
		curl_multi_close($mh);
		return $objs;
	}
	public function curlRequest($url,$data='',$cookieFile="",$referer='',$login=false,$header=array(),$gzip=false){
		$result	= array("error"=>"65535",'msg'=>"unknow",'data'=>null);
		$ch = curl_init();
		$option = array(
				CURLOPT_URL => $url,
				CURLOPT_HEADER =>0,
				CURLOPT_RETURNTRANSFER => 1,
				CURLOPT_USERAGENT => "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.92 Safari/537.1 LBBROWSER",
				// 			CURLOPT_USERAGENT => "Mozilla/5.0 (Windows NT 6.1; rv:16.0) Gecko/20100101 Firefox/16.0",
				CURLOPT_REFERER		=>$referer,
				CURLOPT_TIMEOUT		=> 10
		);
		if($cookieFile){
			if($login){
				$option[CURLOPT_COOKIEJAR] = $cookieFile;
				$option[CURLOPT_COOKIESESSION] = true;
			}else{
				$option[CURLOPT_COOKIEJAR] = $cookieFile;
				$option[CURLOPT_COOKIEFILE] = $cookieFile;
			}
	
			// 			$option[CURLOPT_COOKIE] = $cookieFile;
			// 		$option[CURLOPT_COOKIESESSION] = true;
			//$option[CURLOPT_COOKIE] = 'prov=42;city=1';
		}
		if($data){
			$option[CURLOPT_POST] = 1;
			$option[CURLOPT_POSTFIELDS] = $data;
		}
		if(!empty($header)){
			curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		}
		if($gzip==true){
			curl_setopt($ch, CURLOPT_ENCODING, "gzip");
		}
		// 	curl_setopt($ch, CURLOPT_REFERER, "http://weibo.com/");
		curl_setopt_array($ch,$option);
		$response = curl_exec($ch);
		$headerinfo = curl_getinfo($ch,CURLINFO_HTTP_CODE);
		if($headerinfo != '200'){
			$result['error']=1;
			$result['msg']  ='stats:'.$headerinfo;
			return $result;
		}
// 		var_dump($headerinfo);die;
		if(curl_errno($ch) > 0){
			$result['error']=2;
			$result['msg']  ="CURL ERROR:$url ".curl_error($ch);
			return $result;
// 			die("CURL ERROR:$url ".curl_error($ch));
		}
		curl_close($ch);
		$result['error']=0;
		$result['msg']  ="ok";
		$result['data']	= $response;
		return $result;
	}
}

// $C	= new UploadDlKhdCdn();
// $obj	= array(
// 			array('url'=>'http://dl.khd.at321.cn/manual/hd/share2.png','newname'=>'test.png',"maxpic"=>"1",'id'=>'1'),
// 			array('url'=>'http://dl.khd.at321.cn/manual/flush/hd_720_v7.jpg','id'=>'2'),
// 		);
// $re	= $C->DownLoadMulti($obj);
// $re	= $C->uploadToCdn('./upload_pic/resized_pic.jpg','/dh/test','test.jpg');
// var_dump($re);