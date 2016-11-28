<?php
/*
 * 项目公共函数
 * @since 2013-7-11 12:05:07
 */


/***
 * 输出变量，在浏览器上比较好看，常用于调试
 */
function mytrace( $var ){
	echo "<pre>";
	var_dump($var);
	die;
}
function sae_log($str,$sign=''){
	$date=date('Y-m-d H:i:s');
	if(!empty($_GET)){
		$str.= "\r\n";
		$str.= "get:\r\n";
		$str.= serialize($_GET);
	}
	if(!empty($_POST)){
		$str.= "\r\n";
		$str.= "post:\r\n";
		$str.= serialize($_POST);
	}
		$str.= "\r\n=====================$date=====================\r\n";
		$s	= new SaeStorage();
		$s->write('debug', date('Y-m-d').$sign.'_log.txt', $str);
}

//时间测试函数
function get_microtime()
{

	list($usec, $sec) = explode(" ", microtime());

	return $GLOBALS['time_start'] = ((float)$usec + (float)$sec);

}
/**
 * @param log $str
 */
function mwtlog($filename='common',$str='',$dataPath=false){
	global $Gimei;
	if(C("MwtLog") || $dataPath || in_array($Gimei, C('ALOWED_IMEI'))){
		$log_path	= APP_PATH.'Runtime/Logs/'.date('y_m_d').$filename.'.log';
		$error	= 0;
		if($dataPath){
			if(!is_dir(APP_PATH.'data') && !mkdir(APP_PATH.'data')){
				$error	= 1;
			}
			if(!is_dir(APP_PATH.'data/') && !mkdir(APP_PATH.'data/')){
				$error	= 1;
			}
			if($error===0){
				$log_path	= APP_PATH.'data/'.date('y_m_d').$filename.'.log';
			}
		}
		if(MODE_NAME != "cli"){
			$ip	= @get_client_ip();
		}else{
			$ip	= "cli_running";
		}
		@log::write(date("Y-m-d H:i:s")." $ip\t".$str."\r\n",$filename,'3',$log_path);
	}
}
/**
 * curl获取远程文件通用函数
 * @param string $url
 * @param bool $info(是否显示头信息,如果返回头信息,则返回结果为数组,否则为字符串)
 * @return mixed||array
 */
function getData( $url ,$info=false,$referer="",$gzip=false,$data='',$header=array(),$userAgent){
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch, CURLOPT_HEADER, FALSE);
	$userAgent	= $userAgent?$userAgent:'Mozilla/5.0 (Windows NT 5.1; rv:7.0.1) Gecko/20100101 Firefox/7.0.1';
	
	curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLOPT_TIMEOUT, 600);
	curl_setopt($ch, CURLOPT_HEADER, $info);
	//https start
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt ($ch,CURLOPT_REFERER,$referer);
	if($gzip){
		curl_setopt($ch, CURLOPT_ENCODING, 'gzip');
	}
	if($data){
		$option[CURLOPT_POST] = 1;
		$option[CURLOPT_POSTFIELDS] = $data;
		curl_setopt_array($ch,$option);
	}
	if(!empty($header)){
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	}
	//https start
	$result = curl_exec($ch);
	/*获取头信息*/
	if($info===true){
		$cookie_jar = tempnam('./tmp','cookie');
		curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_jar); //把返回来的cookie信息保存在$cookie_jar文件中
		$headerSize	= curl_getinfo($ch,CURLINFO_HEADER_SIZE);
		$header_str		= substr($result, 0, $headerSize);
		$header_str		= preg_split("/\n/", $header_str);
		$header	= array();
		$i	= 0;
		foreach ($header_str as $k=>$v){
			$v		= trim($v);
			if($i == 0){
				$tem	= preg_split("/\s/", $v);
				$header['state']	= $tem[1];
				$i++;
				continue;
			}

			if(!empty($v)){
				$tem	= preg_split("/:/", $v,2);
				$t			= $tem[0];
				$header[$t]	= $tem[1];
			}
			$i++;
		}
		unset($header_str);
		$rs['header']	= $header;
		$rs['data']		= substr($result, $headerSize );
		return $rs;
	}
	curl_close($ch);
	return $result;
}
function add_host($v,$host="http://at321.cn"){
	if(!preg_match("/http:\/\//", $v)){
		return $host.$v;
	}else{
		return $v;
	}
} 
function curlPost($url,$data='',$referer='http://at321.cn',$header=array(),$gzip=false){
	$ch = curl_init();
	$option = array(
			CURLOPT_URL => $url,
			CURLOPT_HEADER =>0,
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_USERAGENT => "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.92 Safari/537.1 LBBROWSER",
			CURLOPT_REFERER		=>$referer
	);
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
	curl_setopt_array($ch,$option);
	$response = curl_exec($ch);
	if(curl_errno($ch) > 0){
		return false;
// 		echo("CURL ERROR:$url ".curl_error($ch));
	}
	curl_close($ch);
	return $response;
}

/**
 * @author kitter
 * @param 要删除的目录 $dir
 * @return boolean
 */
function deldir($dir) {
	//先删除目录下的文件：
	$dh=opendir($dir);
	while ($file=readdir($dh)) {
		if($file!="." && $file!="..") {
			$fullpath=$dir."/".$file;
			if(!is_dir($fullpath)) {
				unlink($fullpath);
			} else {
				deldir($fullpath);
			}
		}
	}
	closedir($dh);
	//删除当前文件夹：
	if(rmdir($dir)) {
		return true;
	} else {
		return false;
	}
}


/**
 * 格式化电话号码
 * 去掉+86和非数字字符
 * @param  $num
 * @return boolean|mixed
 */
function FormatNum($num){
	if(empty($num)) return false;
	$l = strlen($num);
	if($l>10 && $l <=25){
		$num = preg_replace("/(\+86)|(^86)|[^\d]/", "", $num);
	}else{
		$num = preg_replace("/[^\d]/", "", $num);
	}
	return $num;
}

/**
 * 计算两个日期相差天数
 * @param unknown_type $stime
 * @param unknown_type $etime
 * @return number
 */
function minDate($stime,$etime){
	$stimestimp = strtotime($stime);
	$etimestimp = strtotime($etime);
	$min = $etimestimp-$stimestimp;
	$dates = intval($min/(3600*24));
	return $dates;
}

/**
 * 获取GUID
 * @return string
 */
function guid(){
	if (function_exists('com_create_guid')){
		return com_create_guid();
	}else{
		mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
		$charid = strtoupper(md5(uniqid(rand(), true)));
		$hyphen = chr(45);// "-"
		$uuid = ""// "{"
		.substr($charid, 0, 8).$hyphen
		.substr($charid, 8, 4).$hyphen
		.substr($charid,12, 4).$hyphen
		.substr($charid,16, 4).$hyphen
		.substr($charid,20,12)
		."";// "}"
		return $uuid;
	}
}
?>
