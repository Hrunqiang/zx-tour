<?php
class LogChartAction extends Action {
	Public function _initialize(){
		B('AuthCheck');
	}
	Public function index() {
		$data = array ();
		// 默认加载
		
		$daynum = 3;
		if (! empty ( $_POST ['selDay'] )) {
			$daynum = intval ( $_POST ['selDay'] );
		}
		for($i = 1; $i <= $daynum; $i ++) {
			$file = $_SERVER ["DOCUMENT_ROOT"] . '/data/analyze/' . date ( "Ymd", strtotime ( "-" . $i . " day" ) ) . '_hour_c.log';
			$before = array ();
			if (file_exists ( $file )) {
				$f = fopen ( $file, "r" );
				$ln = 0;
				
				while ( ! feof ( $f ) ) {
					$view = trim ( fgets ( $f ) );
					
					if (! empty ( $view )) {
						
						$varr = explode ( ' ', $view );
						
						$before [$ln] = intval ( $varr [0] );
						$ln ++;
					}
				}
				unset ( $before [24] );
				$name = '';
				if (date ( "Ymd", strtotime ( "-" . $i . " day" ) ) == date ( "Ymd", strtotime ( "-1 day" ) )) {
					$name = "昨天(" . date ( "Y-m-d", strtotime ( "-1 day" ) ) . ")";
				} else {
					$name = date ( "Y-m-d", strtotime ( "-" . $i . " day" ) );
				}
				// 追加数组末尾
				$data [] = array (
						'name' => $name,
						'data' => $before 
				);
			} // if file_exists
		} // for
		
		$dayarr = array ();
		$arr = array ();
		for($i = 0; $i <= 25; $i ++) {
			$arr [$i] = $i;
		}
		// 今天
		$test = "cat /data/wwwlogs/ws_4_c.log |awk -F ':' '{print $2}'|uniq -c";
		exec ( $test, $array ); // 执行命令
		                        // dump(intval($array));die;
		foreach ( $array as $item ) {
			$dayarr [] = intval ( $item );
		}
		// 把数组倒序一下
		$data = array_reverse ( $data );
		// 把今天的查询结果加入总的数组中
		$data [] = array (
				'name' => "今天(" . date ( "Y-m-d" ) . ")",
				'data' => $dayarr 
		);
		
		$data = json_encode ( $data );
		// 显示方式
		$showtype = 'line';
		if (! empty ( $_POST ['selAction'] )) {
			$showtype = $_POST ['selAction'];
		}
		$this->assign ( "showtype", $showtype );
		$categories = json_encode ( $arr );
		$this->assign ( "title", '访问量统计' );
		$this->assign ( "categories", $categories );
		$this->assign ( "data", $data );
		$this->display ();
	}
	Public function versiontage() {
		$this->display ();
	}
    Public function versionfrom(){
    	$v='';
    	if(!empty($_POST["txtversion"])){
    		$v=$_POST["txtversion"];
    	}
    	$test1 = "cat /data/wwwlogs/ws_4_error_v1.log |grep ".$v."|awk '{ print $5 }'|sort|uniq | wc -l";
    	//$test1="cat /data/zhennan/at3214abc/uducy_admin/data/ws_4_error_v1.log |grep ".$v."|awk '{ print $5 }'|sort|uniq | wc -l";
    	exec ( $test1, $array1 ); // 执行命令
    	
    	$test2 = "cat /data/wwwlogs/ws_4_error_v1.log |awk '{ print $5 }'|sort|uniq | wc -l";
    	//$test2="cat /data/zhennan/at3214abc/uducy_admin/data/ws_4_error_v1.log |awk '{ print $5 }'|sort|uniq | wc -l";
    	exec ( $test2, $array2 ); // 执行命令
    	
    	$tage= (floatval($array1[0])/floatval($array2[0]))*100;
        $tage=round($tage,2);
    	$this->assign ( "data", $tage );
    	$this->display ('versiontage');
    }
}