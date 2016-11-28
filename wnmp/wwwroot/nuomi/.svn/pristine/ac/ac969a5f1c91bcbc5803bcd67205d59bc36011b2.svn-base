<?php
/**
 * 计划任务
 * @author kittert
 *
 */
class CrontabClassAction extends Action{
	Public function _initialize(){
		if(MODE_NAME!='cli'){
// 			die('error path');
		}
	}
	function randomFloat($min = 1, $max = 10) {
		return $min + mt_rand() / mt_getrandmax() * ($max - $min);
	}
	public function randInsert(){
		set_time_limit(600);
		$UserIo	= new UsersIoModel();
		for($i=1;$i<=5000;$i++){
			$uid	= array('1','2');
			$data['uid']	= $uid[array_rand($uid)];
			$aid	= array( '1','2','3','4','5','6','7');
			$data['aid']	= $aid[array_rand($aid)];
			$method	= array('浏览网页','安装应用','注册账号','解锁屏幕','邀请赠送');
			$data['method']	= $method[array_rand($method)];
			$amethod= array('CPI','CPT');
			$data['amethod']	= $amethod[array_rand($amethod)];
			$io_status	= array('1','2');//1收入 2支出
			$data['io_status']= $io_status[array_rand($io_status)];
			$data['price']	= round($this->randomFloat(),2);
			$data['ad_price']= 10;
			if($data['price']==0){
				$data['price']=0.12;
			}
			$ctime		= array();
			for($ii=1;$ii<=30;$ii++) {
				if($i<10){
					$ii	= "0".$ii;
				}
				$ctime[]="2013-11-$ii 00:00:00";
			}
			$data['ctime']	= $ctime[array_rand($ctime)];
			$status	= array('1','2');//1无效,2有效
			$data['status']	= $status[array_rand($status)];
	
			$rs	= $UserIo->add($data);
			echo($rs);
			echo "\r\n";
		}
		// 		var_dump($data);
	}
	/**
	 *计算各个广告昨天收入支出情况并且记录 
	 */
	public function calc_advert_io(){
		set_time_limit(6000);
		$s	= addslashes(trim($_GET['stime']));
		$e	= addslashes(trim($_GET['etime']));
		$now	= date("Y-m-d H:i:s");
		if(empty($s) || empty($e)){
			$s	= date("Y-m-d 00:00:00",strtotime("-1 day"));
			$e	= date("Y-m-d 00:00:00");
		}
		$sql	= "SELECT 
l.aid,l.io_status,l.`status`,SUM(l.price) as divide,SUM(l.ad_price) as sum_price,FROM_UNIXTIME(UNIX_TIMESTAMP(l.ctime),'%Y-%m-%d') as d, a.price as ad_price,a.divide as ad_divide,a.used_budget,a.totle_budget,count(l.id) as c
FROM `tbl_users_io_log` l LEFT JOIN `tbl_main_advert` a ON l.aid=a.id
where  l.ctime>='$s' AND l.ctime<='$e' AND  l.io_status=1
GROUP BY l.aid,d,l.`status`
ORDER BY d ASC";
/* 		$sql	= "
SELECT 
l.aid,l.io_status,SUM(l.price) as divide,SUM(l.ad_price) as sum_price,FROM_UNIXTIME(UNIX_TIMESTAMP(l.ctime),'%Y-%m-%d') as d, a.price as ad_price,a.divide as ad_divide,a.used_budget,a.totle_budget
FROM `tbl_users_io_log` l LEFT JOIN `tbl_main_advert` a ON l.aid=a.id
where  l.ctime>='$s' AND l.ctime<='$e' AND l.`status`=2 AND l.io_status=1
GROUP BY l.aid,d
ORDER BY d ASC
"; */
// 		var_dump($sql);die;
		
		
		$Advert_io	= new AdvertIoModel();
		$Advert_main	= new AdvertMainModel();
		$rs	= $Advert_io->query($sql);
		$rs1	= array();
		foreach ($rs as $k=>$v){
			$rs1[$v['d']][$v['aid']][$v['status']]=$v;
		}
// 		$sqli	= "insert into tbl_advert_io_perdate (aid,io_status,used_budget,ad_price,ad_expend,ad_divide,ad_divide_all_price,savedate,ctime) values ";
// 		$values	= "";
$temused	= array();
		foreach($rs1 as $k=>$v){
			foreach ($v as $kk=>$vv){
				$data	= array();
				if(!isset($temused[$vv[2]['aid']])){
					$temused[$vv[2]['aid']]=($vv[2]['used_budget']+$vv[2]['sum_price']);
				}
				
				$data['ctime']		=date("Y-m-d H:i:s");//创建时间
				$data['aid']		=$kk;
				$data['io_status']	=2;//消费
				$data['used_budget']=$vv[2]['sum_price'];//今天消耗预算
				$data['left_budget']=(floatval($vv[2]['totle_budget'])-floatval($temused[$vv[2]['aid']]));//本天消耗后剩余预算
				$data['ad_price']	=$vv[2]['ad_price'];
				$data['ad_expend']	=$vv[2]['sum_price'];
				$data['ad_divide']	=$vv[2]['ad_divide'];
				$data['ad_divide_all_price']	=$vv[2]['divide'];
				$data['savedate']	=$k;
				$data['valid_display']	=intval($vv[2]['c']);//有效展示数
				$data['void_display']	=intval($vv[1]['c']);//无效展示数
				$result	= $Advert_io->add($data);
				
				if($result){
					//@todo临时造假测试使用
					$temused[$vv[2]['aid']]	= $vv[2]['sum_price'];
					$used_bud	= $temused[$vv[2]['aid']];
// 					$Advert_main->data(array('used_budget'=>$used_bud,'utime'=>$now))->where("id={$kk}")->save();
					echo "ok.\taid:{$vv[2]['aid']}-date:{$vv[2]['d']}\r\n";
				}else{
				echo "no.\taid:{$vv[2]['aid']}-date:{$vv[2]['d']}.......\r\n";
				}
			}
			
// 			$values	= "(";
// 			$values	.="'{$v['aid']}',";
// 			$values	.="'2',";//io_status 2消费,1收入
// 			$used	= $v['used_budget']+$v['sum_price'];//@todo 临时造假使用
// 			$values	.="'$used',";//当时已使用的预算
// 			$values	.="'{$v['ad_price']}',";//广告单价
// 			$values	.="'{$v['sum_price']}',";//本天共计消耗
// 			$values	.="'{$v['ad_divide']}',";//分成
// 			$values	.="'{$v['divide']}',";//本天分成总消耗
// 			$values	.="'{$v['d']}',";//日期
// 			$tem	= date("Y-m-d H:i:s");
// 			$values	.="'{$tem}'";//创建时间
// 			$values	.=")";
// 			$sqli	.= $values;
// 			die($sqli.$values);
// 			$result	= @$Advert_io->execute($sqli.$values);
			
		}
// 		$result	= $Advert_io->addAll($data);
// 		var_dump($result);
		
// 		$values	= trim($values,",");
	}
	
	public function ckUsersTask(){
		
	}
}