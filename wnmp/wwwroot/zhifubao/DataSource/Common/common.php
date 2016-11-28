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

function curlRequest($url,$data='',$cookieFile="",$referer='',$login=false,$header=array(),$gzip=false){
	$ch = curl_init();
	$option = array(
			CURLOPT_URL => $url,
			CURLOPT_HEADER =>0,
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_USERAGENT => "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/21.0.1180.92 Safari/537.1 LBBROWSER",
			// 			CURLOPT_USERAGENT => "Mozilla/5.0 (Windows NT 6.1; rv:16.0) Gecko/20100101 Firefox/16.0",
			CURLOPT_REFERER		=>$referer
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
	if(curl_errno($ch) > 0){
		die("CURL ERROR:$url ".curl_error($ch));
	}
	curl_close($ch);
	return $response;
}

/**
 * 产生随机字串，可用来自动生成密码 默认长度6位 字母和数字混合
 * @param string $len 长度
 * @param string $type 字串类型
 * 0 字母 1 数字 其它 混合
 * @param string $addChars 额外字符
 * @return string
 */
function rand_string($len=6,$type='',$addChars='') {
	$str ='';
	switch($type) {
		case 0:
			$chars='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz'.$addChars;
			break;
		case 1:
			$chars= str_repeat('0123456789',3);
			break;
		case 2:
			$chars='ABCDEFGHIJKLMNOPQRSTUVWXYZ'.$addChars;
			break;
		case 3:
			$chars='abcdefghijklmnopqrstuvwxyz'.$addChars;
			break;
		case 4:
			$chars = "们以我到他会作时要动国产的一是工就年阶义发成部民可出能方进在了不和有大这主中人上为来分生对于学下级地个用同行面说种过命度革而多子后自社加小机也经力线本电高量长党得实家定深法表着水理化争现所二起政三好十战无农使性前等反体合斗路图把结第里正新开论之物从当两些还天资事队批点育重其思与间内去因件日利相由压员气业代全组数果期导平各基或月毛然如应形想制心样干都向变关问比展那它最及外没看治提五解系林者米群头意只明四道马认次文通但条较克又公孔领军流入接席位情运器并飞原油放立题质指建区验活众很教决特此常石强极土少已根共直团统式转别造切九你取西持总料连任志观调七么山程百报更见必真保热委手改管处己将修支识病象几先老光专什六型具示复安带每东增则完风回南广劳轮科北打积车计给节做务被整联步类集号列温装即毫知轴研单色坚据速防史拉世设达尔场织历花受求传口断况采精金界品判参层止边清至万确究书术状厂须离再目海交权且儿青才证低越际八试规斯近注办布门铁需走议县兵固除般引齿千胜细影济白格效置推空配刀叶率述今选养德话查差半敌始片施响收华觉备名红续均药标记难存测士身紧液派准斤角降维板许破述技消底床田势端感往神便贺村构照容非搞亚磨族火段算适讲按值美态黄易彪服早班麦削信排台声该击素张密害侯草何树肥继右属市严径螺检左页抗苏显苦英快称坏移约巴材省黑武培著河帝仅针怎植京助升王眼她抓含苗副杂普谈围食射源例致酸旧却充足短划剂宣环落首尺波承粉践府鱼随考刻靠够满夫失包住促枝局菌杆周护岩师举曲春元超负砂封换太模贫减阳扬江析亩木言球朝医校古呢稻宋听唯输滑站另卫字鼓刚写刘微略范供阿块某功套友限项余倒卷创律雨让骨远帮初皮播优占死毒圈伟季训控激找叫云互跟裂粮粒母练塞钢顶策双留误础吸阻故寸盾晚丝女散焊功株亲院冷彻弹错散商视艺灭版烈零室轻血倍缺厘泵察绝富城冲喷壤简否柱李望盘磁雄似困巩益洲脱投送奴侧润盖挥距触星松送获兴独官混纪依未突架宽冬章湿偏纹吃执阀矿寨责熟稳夺硬价努翻奇甲预职评读背协损棉侵灰虽矛厚罗泥辟告卵箱掌氧恩爱停曾溶营终纲孟钱待尽俄缩沙退陈讨奋械载胞幼哪剥迫旋征槽倒握担仍呀鲜吧卡粗介钻逐弱脚怕盐末阴丰雾冠丙街莱贝辐肠付吉渗瑞惊顿挤秒悬姆烂森糖圣凹陶词迟蚕亿矩康遵牧遭幅园腔订香肉弟屋敏恢忘编印蜂急拿扩伤飞露核缘游振操央伍域甚迅辉异序免纸夜乡久隶缸夹念兰映沟乙吗儒杀汽磷艰晶插埃燃欢铁补咱芽永瓦倾阵碳演威附牙芽永瓦斜灌欧献顺猪洋腐请透司危括脉宜笑若尾束壮暴企菜穗楚汉愈绿拖牛份染既秋遍锻玉夏疗尖殖井费州访吹荣铜沿替滚客召旱悟刺脑措贯藏敢令隙炉壳硫煤迎铸粘探临薄旬善福纵择礼愿伏残雷延烟句纯渐耕跑泽慢栽鲁赤繁境潮横掉锥希池败船假亮谓托伙哲怀割摆贡呈劲财仪沉炼麻罪祖息车穿货销齐鼠抽画饲龙库守筑房歌寒喜哥洗蚀废纳腹乎录镜妇恶脂庄擦险赞钟摇典柄辩竹谷卖乱虚桥奥伯赶垂途额壁网截野遗静谋弄挂课镇妄盛耐援扎虑键归符庆聚绕摩忙舞遇索顾胶羊湖钉仁音迹碎伸灯避泛亡答勇频皇柳哈揭甘诺概宪浓岛袭谁洪谢炮浇斑讯懂灵蛋闭孩释乳巨徒私银伊景坦累匀霉杜乐勒隔弯绩招绍胡呼痛峰零柴簧午跳居尚丁秦稍追梁折耗碱殊岗挖氏刃剧堆赫荷胸衡勤膜篇登驻案刊秧缓凸役剪川雪链渔啦脸户洛孢勃盟买杨宗焦赛旗滤硅炭股坐蒸凝竟陷枪黎救冒暗洞犯筒您宋弧爆谬涂味津臂障褐陆啊健尊豆拔莫抵桑坡缝警挑污冰柬嘴啥饭塑寄赵喊垫丹渡耳刨虎笔稀昆浪萨茶滴浅拥穴覆伦娘吨浸袖珠雌妈紫戏塔锤震岁貌洁剖牢锋疑霸闪埔猛诉刷狠忽灾闹乔唐漏闻沈熔氯荒茎男凡抢像浆旁玻亦忠唱蒙予纷捕锁尤乘乌智淡允叛畜俘摸锈扫毕璃宝芯爷鉴秘净蒋钙肩腾枯抛轨堂拌爸循诱祝励肯酒绳穷塘燥泡袋朗喂铝软渠颗惯贸粪综墙趋彼届墨碍启逆卸航衣孙龄岭骗休借".$addChars;
			break;
		default :
			// 默认去掉了容易混淆的字符oOLl和数字01，要添加请使用addChars参数
			$chars='ABCDEFGHIJKMNPQRSTUVWXYZabcdefghijkmnpqrstuvwxyz23456789'.$addChars;
			break;
	}
	if($len>10 ) {//位数过长重复字符串一定次数
		$chars= $type==1? str_repeat($chars,$len) : str_repeat($chars,5);
	}
	if($type!=4) {
		$chars   =   str_shuffle($chars);
		$str     =   substr($chars,0,$len);
	}else{
		// 中文随机字
		for($i=0;$i<$len;$i++){
			$str.= msubstr($chars, floor(mt_rand(0,mb_strlen($chars,'utf-8')-1)),1);
		}
	}
	return $str;
}

function phoneCheck($phone){
	return preg_match('/^1[\d]{10}$/', $phone);
}

function EmailCheck($mail){
	return preg_match('/^([a-zA-Z0-9_-|.])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/', $mail);
}

function isWeixin(){
	if ( strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'micromessenger') !== false ) {
		return true;
	}
	return false;
}

function isNuomi(){
	if ( strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'bdnuomiapp') !== false ) {
		return true;
	}
	return false;
}

function banner(){
	$infoM = new ClassInfoModel;
	$list = $infoM->getContent("zx_banner");
	return $list?$list:"";
}

function hotlist($page=1,$length=5){
	$matchM = new MatchInfoModel();
	$list  = $matchM->getMatchList(" m_sign = 1 ",$page,$length);
	return $list?$list:"";
}

function hotlistByType($type,$page=1,$length=5){
	$matchM = new MatchInfoModel();
	$where = "";
	if($type){
		$where = " and m_ptype='$type'";
	}
	$list  = $matchM->getMatchList(" m_sign = 1 $where",$page,$length);
	return $list?$list:"";
}

function createOrderId($uid,$matchid){
	$date = date("ymdHis");
	return strRepeats($matchid,3,0).$date.strRepeats($uid,3,0).rand(100,999);
}

function strRepeats($str,$len,$repeat){
	$time = $len-strlen($str);
	return str_repeat($repeat,$time).$str;
}
function getIDCardInfo($IDCard){
	$result['error']=0;//0：未知错误，1：身份证格式错误，2：无错误
	$result['flag']='';//0标示成年，1标示未成年
	$result['tdate']='';//生日，格式如：2012-11-15
	$result['sexy']='';//生日，格式如：2012-11-15
	if(!eregi("^[1-9]([0-9a-zA-Z]{17}|[0-9a-zA-Z]{14})$",$IDCard)){
		$result['error']=1;
		return $result;
	}else{
		if(strlen($IDCard)==18){
			$tyear=intval(substr($IDCard,6,4));
			$tmonth=intval(substr($IDCard,10,2));
			$tday=intval(substr($IDCard,12,2));
			if($tyear>date("Y")||$tyear<(date("Y")-100)){
				$flag=0;
			}elseif($tmonth<0||$tmonth>12){
				$flag=0;
			}elseif($tday<0||$tday>31){
				$flag=0;
			}else{
				$tdate=$tyear."-".$tmonth."-".$tday;
				if((time()-mktime(0,0,0,$tmonth,$tday,$tyear))>18*365*24*60*60){
					$flag=0;
				}else{
					$flag=1;
				}
			}
			$sexy = $IDCard[16]%2?1:2;
		}elseif(strlen($IDCard)==15){
			$tyear=intval("19".substr($IDCard,6,2));
			$tmonth=intval(substr($IDCard,8,2));
			$tday=intval(substr($IDCard,10,2));
			if($tyear>date("Y")||$tyear<(date("Y")-100)){
				$flag=0;
			}elseif($tmonth<0||$tmonth>12){
				$flag=0;
			}elseif($tday<0||$tday>31){
				$flag=0;
			}else{
				$tdate=$tyear."-".$tmonth."-".$tday;
				if((time()-mktime(0,0,0,$tmonth,$tday,$tyear))>18*365*24*60*60){
					$flag=0;
				}else{
					$flag=1;
				}
			}
			$sexy = $IDCard[14]%2?1:2;
		}
	}
	$result['error']=2;//0：未知错误，1：身份证格式错误，2：无错误
	$result['isAdult']=$flag;//0标示成年，1标示未成年
	$result['birthday']=$tdate;//生日日期
	$result['sexy']=$sexy;
	return $result;
}

?>
