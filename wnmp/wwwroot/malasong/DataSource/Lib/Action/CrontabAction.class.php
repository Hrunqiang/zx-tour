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

    public function insertNumberToQueue($prefix,$min,$max){
        if(empty($prefix) || empty($max)) return false;
        $min = intval($min);
        $max = intval($max);

        $RM = new RedisModel();
        $QueueName = $prefix."_HXZ_NUMBER";
        $ckKey = $RM->EXISTS($QueueName);
        if($ckKey){
            echo "queueName exists:".$QueueName." please retry after del this keyName\r\n";
            return false;
//            $ders = $RM->DEL($QueueName);
//            if(!$ders){
//                echo "del key error:".$QueueName."\r\n";
//                return ;
//            }
        }
        echo "START $QueueName\r\n";
        for($i=$min;$i<=$max;$i++){
            $value = sprintf($prefix.'%04s', $i);
            echo $value."\r\n";
            $rs = $RM->LPUSH($QueueName,$value);
            if(!$rs){
                echo "add name: $QueueName value:$i queue error rs:".json_encode($rs)."\r\n";
            }
        }
    }
    public function creatNumbers(){
//        全程马拉松赛参赛号码派发区间 ： F0501-F2501
//
//        半程马拉松赛参赛号码派发区间 ： H2502-H3502
//
//        迷你马拉松赛参赛号码派发区间 ： M3503-
//        QueueName  type=F||H||M
//        $QueuName = $type."_HXZ_NUMBER";
//        生成全马号码
        $this->insertNumberToQueue("F",501,2501);
        $this->insertNumberToQueue("H",2502,3502);
        $this->insertNumberToQueue("M",3503,10000);

    }

	public function sendSms(){
		$mobile = trim($_REQUEST['num']);
		$msg	= trim($_REQUEST['msg']);
		$M = new SendSmsModel();
		$rs = $M->send($msg, $mobile);
		echo json_encode($rs);
	}

    /*
     * 下发通知
     * */
    public function reportMsg($name,$number,$mobile){
        if(empty($name) || empty($number) || empty($mobile)) return false;
        $msg = "%s您好，您的参赛号是%s，欢迎您正式成为新年极地勇者跑团的一员，接下来的时间，请注意调整体能，保持训练频率，2016新年日出的第一缕阳光在等你。请关注微信“bbi-marathon”，及时掌握组委会筹备动态。";
        $msg = sprintf($msg,$name,$number);
        $M = new SendSmsModel();
        $rs = $M->send($msg,$mobile);
        if($rs['error'] !== 0){
            $rsmsg = "error rs:".json_encode($rs)."\t"."name:$name,number:$number,mobile:$mobile";
            @mwtlog("reportMsg_error",$rsmsg,true);
//            echo $rsmsg;
        }
        return $rs;
    }
    /*
     * 通知已经分配好的用户
     * */
    public function Inform(){
        $idstr = "('90',
'59',
'71',
'73',
'79',
'88',
'94',
'98',
'101',
'55',
'57',
'91',
'99')";//11-11
        $idstr = "('104',
'102',
'103')";//11-12
        die();
//        $rs = $this->reportMsg("马文涛","6666","15201276483");
//        var_dump($rs);die;
        $M = new OrdersInfoModel();
        $sql = "SELECT i.baomingdanid,b.xingming,b.shouji,i.number from mls_orderinfo i left join mls_baomingdan b on b.id=i.baomingdanid where i.id in $idstr ";
        $data = $M->query($sql);
        if(!$data){
            echo $sql."\r\n";
        }
        foreach($data as $k=>$v){
            echo $v['xingming']."\t".$v['shouji']."\t".$v['number']."\r\n";
//            $sendrs = $this->reportMsg($v['xingming'],$v['number'],$v['shouji']);
            echo json_encode($sendrs)."\r\n";
        }
        @$this->reportMsg("马文涛",count($data),"15201276483");
    }
    public function sendData(){
        error_reporting(0);
        $type = trim($_GET['type']);
        $M = new UserOrdersModel();
        $sql = <<<sql
select b.goodscls as jdname,g1.goodscls,count(*) as c from
(
SELECT a.orderid,a.orderprice,a.goodsid,a.`count`,a.stime,a.etime,g.goodscls,g.goodspid FROM
(SELECT i.orderid,o.orderprice,i.goodsid,i.stime,i.etime,i.`count` from `mls_orderinfo` i left join `mls_userorders` o on o.`orderid`=i.`orderid` where o.paystats=1 or i.goodsid=4)
as a left join mls_goods g on g.id = a.goodsid WHERE %s #g.goodspid = 1 #WHERE g.goodspid <> 1
) as b
left join mls_goods g1 on b.goodspid=g1.id GROUP BY jdname,g1.goodscls
sql;
        $sqlm = sprintf($sql,"g.goodspid = 1");
        $data = $M->query($sqlm);
        $str = "服务器预警";
        foreach($data as $k=>$v){
            $str .= $v["goodscls"].":".$v['jdname']."(".$v['c']."个)\r\n";
        }

        $sqlm = sprintf($sql,"g.goodspid <> 1");
        $data = $M->query($sqlm);
        foreach($data as $k=>$v){
            $str .= $v["goodscls"].":".$v['jdname']."(".$v['c']."个)\r\n";
        }
        $str .= "IP:*";
        $M = new SendSmsModel();
        $rs = $M->send($str, "15201276483");
        echo "*************************************\r\n";
        echo date("Y-m-d H:i:s")."\t".$str."\r\n";
        echo json_encode($rs)."\r\n";
    }

	public function exe_pay(){
		$QM = new QueueModel();
		while ( true ) {
			$data = $QM->getQueue();
			if(!$data){
				echo date("Y-m-d H:i:s")."\tnone data\trs:".json_encode($data)."\r\n";
				sleep(1);
				continue;
			}else{
				if($data['retry'] <= 30 && $data['rtime'] <= time()){
					$str	= '$result='.$data['s'].'::'.$data['a'].'($data["d"]);';
					if(!$result){
						$data['retry'] ++;
						$data['rtime'] = time() + (600 * $data['retry']);
						$QM->addQueue($data['s'], $data['a'], $data["d"],$data['retry'],$data['rtime']);
					}else{
						continue;
					}
				}else{
					@mwtlog("retry_more_times",json_encode($data),true);
					echo date("Y-m-d H:i:s")."\tretry\trs:".json_encode($data)."\r\n";
					sleep(1);
					continue;
				}
				
			}
		}
	}
	
	public function sendenrollres(){
		
	}
}