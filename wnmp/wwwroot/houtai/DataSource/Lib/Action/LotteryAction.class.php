<?php
/**
 * 活动转盘抽奖
 * @author hhy
 *
 */
class LotteryAction extends Action {
	
	protected $probability = array(
    			//一等奖 
    			array("code"=>array(0),"odds"=>1),
    			//二等奖
    			array("code"=>array(6),"odds"=>6),
    			//三等奖
    			array("code"=>array(2),"odds"=>3),
    			//四等奖
    			array("code"=>array(1,4),"odds"=>990),
    			//不中
    			array("code"=>array(3,5,7),"odds"=>0),
    			);
    public function luck(){
    	
    	$msg = "unknow";
    	
    	$hour = (int)Date('H');

    	if($hour>=9&&$hour<=19){
    		//抽奖时间段
    		
    		//抽奖
    		$codenum = $this->getcodenum();
    		
    		//检查奖金数量
    		$checkres = $this->check_price($codenum);
    		$msg = "ok";
    		if(!$checkres){
    			//奖品发光了，给四等 奖
    			$checkres = $this->getcode();
    			$msg = "priceempty,lucknum:".$codenum;
    			$codenum = 3;
    		}
    		
	    	$res['error'] = 0;
    		$res['data'] = $this->probability[$codenum]['code'][mt_rand(0, count($this->probability[$codenum]['code'])-1)];
    		$res['num'] = $codenum;
    		$res['code'] = $checkres;
    	}else{
    		//过了抽奖时间段
    		$msg = "notworktime";
    		$codenum = 4;
    		$res['error'] = 0;
    		$res['data'] = $this->probability[$codenum]['code'][mt_rand(0, count($this->probability[$codenum]['code'])-1)];
    		$res['num'] =$codenum;
    		$res['code'] = mt_rand(1000, 9999);
    	}

        @mwtlog("Lottery_luck_data","msg:".$msg." data:".json_encode($res),true);
		echo json_encode($res);
	}
	
	/**
	 * 随机抽奖号码
	 * @return number
	 */
	public function getcodenum(){
		//随机号码
		$lucknum = mt_rand(1, 1000);
		$count = 0;
		$codenum = 4;
		for($i=0,$len=count($this->probability);$i<$len;$i++){
			$count += $this->probability[$i]['odds'];
			if($lucknum<=$count){
				$codenum = $i;
				break;
			}
		}
		return $codenum;
	}
	
	/**
	 * 检查奖品
	 * @param unknown_type $codenum
	 * @return string
	 */
	public function check_price($codenum){
		$redis = new Redis();
		$redis->pconnect("127.0.0.1",6379);
		if($redis->hincrby("Lottery_price_num",$codenum,-1)<0){
			return false;
		}else{
			return $redis->rpop("Lottery_code_list");
		}
		return true;
	}
	
	/**
	 * 抽奖号码
	 */
	public function getcode(){
		$redis = new Redis();
		$redis->pconnect("127.0.0.1",6379);
		return $redis->rpop("Lottery_code_list");
	}
	
	public function wuxi(){
		// $redis = new Redis();
		// $redis->pconnect("127.0.0.1",6379);
		$list = array(170,166,166,166,166,166,166);
		$lucknum = mt_rand(1, 1000);
		$count = 0;
		$codenum = 4;
		for($i=0,$len=count($list);$i<$len;$i++){
			$count += $list[$i];
			if($lucknum<=$count){
				$codenum = $i;
				break;
			}
		}
		//$codenum = 0;
		$rs['error'] = 0;
		$rs['msg'] = $codenum<=1?"https://jinshuju.net/f/oCByk0":$lucknum;
		$rs['code'] = $codenum;
		 @mwtlog("Lottery_wuxi_data","msg:".$codenum." data:".json_encode($rs),true);
		echo json_encode($rs);
	}
	
}