<?php
class CrontabRedisAction extends Action {
	
	Public function _initialize(){
		if(MODE_NAME!='cli'){
			die('error path');
		}
	}
	/**
	 * 执行程序
	 * 邮件发送
	 */
	public function mail_send_exec(){
		ini_set ( "max_execution_time", "0" );
		ini_set ( 'memory_limit', '256M' );

		$redis = new Redis;
		$redis->pconnect("127.0.0.1",6379);
		while ( true ) {
			$rs	=$redis->LPOP("MLS_MAIL_SEND_LIST");
			$rs	= json_decode($rs,true);
			if(!$rs){
				echo("none data\r\n");
				sleep(2);
				continue;
			}
			if(!is_array($rs) || !is_array($rs["d"])){
				echo "get data error\t".json_encode($rs)."\r\n";
			}
			if($rs['d']['rtime']){
				$miner	= time()-strtotime($rs['d']['rtime']);
				$during	= 5;//重试间隔分钟
				if($miner<60*$during){
					//重新加入队列
					$redis->RPUSH("MLS_MAIL_SEND_LIST", json_encode($rs));
					sleep(1);
					echo "continue['$miner']\r\n";
					continue;
				}
			}
			$str = '$result='.$rs['a'].'Action::'.$rs['m'].'($rs["d"]);';
			eval($str);
			$time	= date("Y-m-d H:i:s");
			if($result===false){
				if(isset($rs["d"]['retryT'])){
					$rs["d"]['retryT']++;
				}else{
					$rs["d"]['retryT']=1;
				}
				$rs["d"]['rtime'] = date("Y-m-d H:i:s");
				if($rs["d"]['retryT']>=30){
					@mwtlog ( "crontabredis_error:", $rs['m'] . "\t$str\tdata:" . json_encode ( $rs["d"] ) . "\r\t time:".$time, true );
				}else{
					//重新加入队列
					echo "retry_".$rs["m"].":".json_encode($rs)."\r\n";
					$redis->RPUSH("MLS_MAIL_SEND_LIST", json_encode($rs));
				}
				echo "$time\t exec error(".json_encode($result)."): $str\t data:".json_encode($rs["d"])."\r\n";
			}else{
				echo "$time\t exec ok[".$rs["d"]["mwtr"].'-'.$rs["d"]["t"]."]\t$str\trs:".json_encode($rs)." \t time:".$time."\r\n ";
			}
		}
	}
	
}
?>