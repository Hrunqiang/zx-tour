<?php
/*
 * 二次元浏览器计划任务
 * @author huanghaiyan
 * 
 * */
class CrontabIbroAction extends Action{
	
	public function push(){
		ini_set ( "max_execution_time", "0");
		ini_set ( 'memory_limit', '256M');
		$redis = new Redis();
		if(!$redis->connect(C('REDIS_HOST'), C('REDIS_POST'))){
			return ;
		}
		$push = new IosPushModel;
		while(true){
			$rs = $redis->LPOP('IOS_PUSH_LIST');
			if(!$rs){
				echo "no push";
				sleep(30);
				break;
			}
			$res = json_decode($rs,true);
			$push_rs = $push->pushmsg($res['t'],$res['m']);
			if(!$push_rs){
				
				echo "error\t\n";
				$redis->LPUSH('IOS_PUSH_LIST',$rs);
				break;
			}
		}
		echo "push";
	}
}

?>