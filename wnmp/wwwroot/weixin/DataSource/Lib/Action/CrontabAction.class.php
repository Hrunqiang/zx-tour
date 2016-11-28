<?php
/**
 * 计划任务
 * @author kittert
 *
 */
class CrontabAction extends Action{
	Public function _initialize(){
		if(MODE_NAME!='cli'){
			die('error path');
		}
		ini_set ( "max_execution_time", "0" );
		ini_set ( 'memory_limit', '512M' );
	}
    
    /**
     * 处理超时未支付订单
     */
    public function del_invalid_order(){
    	$UO  = new  UserOrdersModel();
    	$sql = "SELECT  * FROM `zx_tb_orders`  WHERE pay_deadline <NOW() AND  paystats = 5";
    	while(true){
	    	$list = $UO->query($sql);
	    	if($list!==false){
	    		foreach($list as $key => $val){
	    			$orderid = $val['orderid'];
	    			$matchid = $val['matchid'];
	    			$res = $UO->delOrder($orderid,$matchid);
	    			if($res){
	    				echo date("Y-m-d H:i:s")."\t ok ".$orderid."\trs:".json_encode($res)."\r\n";
	    			}else{
	    				echo date("Y-m-d H:i:s")."\t error ".$orderid."\trs:".json_encode($res)."\r\n";
	    			}
	    		}
	    	}else{
	    		echo date("Y-m-d H:i:s")."\t empty ".$orderid."\trs:".json_encode($list)."\r\n";
	    		sleep(10);
	    	}
    	}
    }
    
    /**
     * 定时任务 （未完善资料短信提醒）
     */
    public function perfect(){
    	$sdate = Date("Y-m-d H:i:s",strtotime(" -4 days "));
    	$edate = Date("Y-m-d H:i:s",strtotime(" -3 days "));
    	$orderM =  new  UserOrdersModel();
    	//$where = " o.paystats = 1 ";
    	$where = " o.paystats = 1 and  o.ctime >= '$sdate' and o.ctime <= '$edate'  ";
    	$list = $orderM->getorderlist($where);
    	$redis = new RedisModel();
    	foreach($list as $key => $val){		
    		//付款三天后未完善资料
    		$orderid = $val['orderid'];
    		if($val['state']<4){
    			$arr = array(
    					"a"=>"OrderNotice",
    					"m"=>"perfect",
    					"d"=>array("orderid"=>$orderid,"status"=>3,matchname=>$val['m_name'],phone=>$val['phone']));
    			$redis->lpush("order_notice_list_v2",json_encode($arr));
    			echo date("Y-m-d H:i:s")."\t".json_encode($arr)."\r\n";
    		}
    			
    		//付款三天后海外赛事未写护照
    		if(
    				$val['m_ptype']=="海外" &&
    				($val['pass_code']==""||$val['surname']==""||$val['en_name']=="")
    		){
    			$arr = array(
    					"a"=>"OrderNotice",
    					"m"=>"perfect",
    					"d"=>array("orderid"=>$orderid,"status"=>4,matchname=>$val['m_name'],phone=>$val['phone']));
    			$redis->lpush("order_notice_list_v2",json_encode($arr));
    			echo date("Y-m-d H:i:s")."\t".json_encode($arr)."\r\n";;
    		}
    	}
    }
    
    /**
     * 定时任务 （开赛提醒）
     */
    public function  startNotice(){   	
    	//海外
    	$sdate1 = Date("Y-m-d H:i:s",strtotime(" +7 days "));
    	$edate1 = Date("Y-m-d H:i:s",strtotime(" +8 days "));
    	
    	//国内
    	$sdate2 = Date("Y-m-d H:i:s",strtotime(" +14 days "));
    	$edate2 = Date("Y-m-d H:i:s",strtotime(" +15 days ")); 
    	$orderM =  new  UserOrdersModel();
    	$where = " (o.paystats = 1 or o.paystats = 10) and ( (m.m_ptype='海外' and m.m_GameTime >= '$sdate1' and m.m_GameTime <= '$edate1' ) or (m.m_ptype='国内' and m.m_GameTime >= '$sdate2' and m.m_GameTime <= '$edate2' )) ";
    	$list = $orderM->getorderlist($where);
    	$redis = new RedisModel();
    	if($list){
	    	foreach($list as $key => $val){   		 
	    		$orderid = $val['orderid'];
	    		if($val['m_ptype']=="海外"){
	    			$status = 2;
	    		}else{
	    			$status = 1;
	    		}
	    		$arr = array(
	    				"a"=>"OrderNotice",
	    				"m"=>"startNotice",
	    				"d"=>array("orderid"=>$orderid,"status"=>$status,matchname=>$val['m_name'],phone=>$val['phone']));
	    		$redis->lpush("order_notice_list_v2",json_encode($arr));
	    		echo date("Y-m-d H:i:s")."\t".json_encode($arr)."\r\n";;
	    	}
    	}else{
    		echo date("Y-m-d H:i:s")."\tnodata\r\n";;
    	}
    }
    
    /**
     * 将不可报名的推荐赛事取消推荐
     */
    public function  cancel_sign_match(){
    	$matchM = new  MatchInfoModel();
    	$sql = "UPDATE  zx_tb_matchs  SET   m_sign = 0 , m_sign_nuomi = 0 WHERE (m_sign = 1 OR   m_sign_nuomi = 1) AND (m_signuptime >NOW() OR m_GameTime <NOW() OR m_placesleft <= 0 OR m_untilTime <NOW())";
    	$res = $matchM->query($sql);
    	if($res!==false){
    		echo date("Y-m-d H:i:s")."\tcancel_sign_match:ok\r\n";
    	}else{
    		echo date("Y-m-d H:i:s")."\tcancel_sign_match:false\r\n";
    	}
    }
	
	public function notice_v2_exec(){
		$redis = new RedisModel();
		while ( true ) {
			$data = $redis->RPOP("order_notice_list_v2");
			$data = json_decode($data,true);
			if(!$data){
				echo date("Y-m-d H:i:s")."\tnone data\trs:".json_encode($data)."\r\n";
				sleep(1);
				die();
				//continue;
			}else{			
				if($data['retry'] <= 30){
					if($data['rtime']&&$data['rtime'] <= time()){
						$redis->LPUSH("order_notice_list_v2",json_encode($data));
						continue;
					}else{
						$str	= '$result='.$data['a'].'Action::'.$data['m'].'($data["d"]);';
						eval($str);
						if(!$result){
							$data['retry'] ++;
							$data['rtime'] = time() + (600 * $data['retry']);
							$redis->LPUSH("order_notice_list_v2",json_encode($data));
							echo date("Y-m-d H:i:s")."\tretry(".$data['retry'].")\trs:".json_encode($data)."\r\n";
						}else{
							echo date("Y-m-d H:i:s")."\texec(ok)\t rs:".json_encode($result)." data:".json_encode($data)."\r\n";
							continue;
						}
					}
				}else{
					@mwtlog("notice_exec_error",json_encode($data),true);
					echo date("Y-m-d H:i:s")."\tsendfail\trs:".json_encode($data)."\r\n";
					sleep(1);
					continue;
				}
			}
		}
	}
}