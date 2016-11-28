<?php
class QueueModel {
	const			PAY_RETRY_KEY='PAYRETRY';
	
	public function addQueue($s,$a,$d,$retry=1,$rtime=0){
		if(empty($s) || empty($a) ) return false;
		$data = array('s'=>$s,'a'=>$a,'d'=>$d,'retry'=>$retry,'rtime'=>$rtime);
		$QM = new RedisModel();
		$addqueue = $QM->LPUSH(self::PAY_RETRY_KEY,json_encode($data));
		if(!$addqueue){
			@mwtlog("addqueue_error","rs:".json_encode($addqueue)."\t".json_encode($data),true);
		}
	}
	
	public function getQueue(){
		$QM = new RedisModel();
		$data = $QM->RPOP(self::PAY_RETRY_KEY);
		$rs = json_decode($data,true);
		return $rs;
	}
}