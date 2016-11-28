<?php
class AnalysisAction extends Action{
	Public function _initialize(){
		B('AuthCheck');
	}
	public function verinfo(){
		$ver_log_path	= APP_PATH.'data/ver_error/';
		$min	= 7;
		$result	= array();
		while(true){
			if($min<=0){
				break;
			}
			$date	= date("Ymd",strtotime("-$min day"));
			$min--;
			$error_path	= $ver_log_path.$date.'_ver_uniq_error.log';
			$all_path	= $ver_log_path.$date.'_ver_uniq.log';
			if(!file_exists($error_path) || !file_exists($all_path)){
				continue;
			}
			$error_c	= file_get_contents($error_path);
			$all_c		= file_get_contents($all_path);
			
			$error_a	= preg_split("/\r|\n/", $error_c);
			$all_a		= preg_split("/\r|\n/", $all_c);
			foreach ($error_a as $v){
				if(!empty($v)){
					$line_a = preg_split("/\t|\s+/", trim($v));
					if(!$line_a){
						continue;
					}
					$line_a[1]	= preg_replace("/&ab/", '', $line_a[1]);
					$rs = preg_match("/^[\d]\.[\d]\.[\d]\.[\d]{4}$/", $line_a[1]);
					if(!$rs){
						continue;
					}
					$result[$date]['error'][$line_a[1]] = $line_a[0];
				}
			}
			foreach($all_a as $v){
				if(!empty($v)){
					$line_a = preg_split("/\t|\s+/", trim($v));
					if(!$line_a){
						continue;
					}
					$line_a[1]	= preg_replace("/&ab/", '', $line_a[1]);
					$rs = preg_match("/^[\d]\.[\d]\.[\d]\.[\d]{4}$/", $line_a[1]);
					if(!$rs){
						continue;
					}
					$result[$date]['all'][$line_a[1]] = $line_a[0];
				}
			}
		}
		$per	= array();
		$title	= array();
		foreach($result as $k=>$v){
			//$k为日期
			if(is_array($v)){
				foreach ($v['error'] as $kk=>$vv){
					if(!in_array($kk, $title)){
						$title[]	= $kk;
					}
					//$kk为版本
// 					echo $k.$kk."=".$vv."/".$v['all'][$kk]."<br/>";
					$per[$k][$kk] = round($vv/$v['all'][$kk]*100*1.72,2)."%【".ceil($v['all'][$kk]/2.27)."】";
					
				}
			}
		}
		sort($title);
		unset($error_c,$all_c,$error_a,$all_a);
		$this->assign("title",$title);
		$this->assign("per",$per);
		$this->display("ver_per");
// 		$content	= file_get_contents() ;
// 		echo $content;
	}
	//广告转化率总表
	public function mongotest(){
		echo "<pre/>";
		$M	= new LogsModel();
		$M->setTrueTableName('tests');
		$as	= array('$in'=>array(1,2,3));
		$rs	= $M->data(array('a'=>11))->where(array('a'=>$as))->save();
			var_dump($rs);die;
// 		for($i=0;$i<=10;$i++){
// 			$rs	= $M->data(array('a'=>$i,'b'=>'t'))->add();
// 			var_dump($rs);
// 		}
// 		$rs	= $M->data(array('v'=>'4.0.0002'))->where(array("i"=>array('$exists'=>true),'_id'=>'53daf2f07f8b9a1c0e8b4592'))->save();
// 		var_dump($rs);die;
		
		
		
		
		
		die;
		$Now	= date("Y-m-d H:i:s");
		$M	= new LogsModel();
		$M->setTrueTableName('ImeisTime');
		$imei_time	= $M->where(array("id"=>1))->find();
		if($imei_time){
			if(empty($imei_time['sTime'])){
				echo date("Y-m-d H:i:s")."\tget emtpy sTime\r\n";
				die;
			}
			$imei_s_t	= $imei_time['sTime'];
			$imei_e_t	= date("Y-m-d H:i:s",strtotime('+1 hours',strtotime($imei_s_t)));
		}else{
			$imei_s_t	= '2014-07-01 00:00:00';
			$imei_e_t	= date("Y-m-d H:i:s",strtotime('+1 hours',strtotime($imei_s_t)));
			$d	= $M->data(array("sTime"=>$imei_e_t,"id"=>1))->add();
			if(!$d){
				echo $Now."\tadd ImeisTime table error\r\n";
				die();
			}
		}
		$logs_table	= date("Ym",strtotime($imei_s_t));
		$logs_table	= 'logs'.$logs_table;
		echo date("Y-m-d H:i:s")."\tstart_time:".$imei_s_t."\r\n";
// 		$rs	= $M->data(array('v'=>'4.0.0002'))->where(array("i"=>array('$exists'=>true),'_id'=>'53daf2f07f8b9a1c0e8b4592'))->save();
// 		var_dump($rs);die;
// 		$all	= $M->field(array('i'=>1,'v'=>1))->limit(10)->where(array("i"=>array('$exists'=>true),'_id'=>'53daf2f07f8b9a1c0e8b4592'))->select();
// 		var_dump($all);die;
		
		/* */
		$map	= 'function () {
						if(this.i=="") return false;
						this.addDateTime=this.addDateTime.split(" ")[0];
						var key={i:this.i,v:this.v,c:this.c,addDateTime:this.addDateTime};
						var value={p:this.p};
						emit(key,value);
					}';
		$reduce	= 'function (key, values) { 
						return values[0];
					}';
		$command	= array(
				"mapreduce" => $logs_table, //table
				"map"	=>	$map,//"function () { emit(this.i, 1); }" ,
				"reduce"=> $reduce,//"function (key, values) { return Array.sum(values); }",
				'query'=>array(
						'addDateTime'=>array(
								'$gte'=>$imei_s_t,
								'$lt'=>$imei_e_t
								)//where
				),
				"out" => array("merge"=>"imeis")
		);
		
		$data	= $M->command($command);
		if($data['ok']==1){
			echo date("Y-m-d H:i:s")."\ttimeMillis:".$data['timeMillis']."\r\n";
			$u_imei_time	= $M->data(array("sTime"=>$imei_e_t))->where(array("id"=>1))->save();
			if(!$u_imei_time){
				echo $Now."\tadd update time error\r\n";
				die();
			}
		}
// 		$data	= $M->field("i,v,c,p,imsi,mpath")->select();
		var_dump($data);
		
		
		
		
		die;
		///////////////////distinct//////////////
		$command	= array(
				"distinct" => "logs201408", //table
				"key" => "i",				//字段
// 				'query'=>array(
// 							'imsi'=>'123456'//where 
// 						),
				"out" => "countries"
				);
		
		$data	= $M->command($command);
// 		$data	= $M->order("addDateTime desc")->limit("10,2")->select();
		var_dump($data);
		
		
		
		
		die;
		//////////////////////////group///////////////////////////////////////////
		$keys = array("c"=>true,"v"=>true); 
		$initial = array("total"=>0); 
		$reduce = "function (obj, prev) {
// 					prev.items.push(obj.c);
					prev.total += 1;
					}"; 
		$where	= array("i"=>array('$exists'=>true));
//$condition = array("category" => array( '$in' => array("fruit"))); 
// 		$data	= $M->group($keys, $initial, $reduce); 
		$data	= $M->group($keys, $initial, $reduce,$where); 
// 		$all	= $M->limit(10)->where(array("i"=>array('$exists'=>true)))->select();
// 		$data	= $M->order("addDateTime desc")->limit("10,2")->select();
		echo $M->getLastSql();
		var_dump($data);
// 		var_dump($all);
		
	}
	
}