<?php
class MemcququAction extends Action {
	Public function _initialize(){
		B('AuthCheck');
	}
	//显示队列信息
	Public function index() {
		$qm = new QueueModel ();
		$data=@$qm->stats ();
		$this->assign ( 'data', $data );
		$this->display ();
	}
	// 清空队列
	public function ququindex() {
		$data ['clear'] = " ";
		$data ['return'] = " ";
		$this->assign ( 'data', $data );
		$this->display ();
	}
	/*
	 * 清空，这里的清空，也不是真的清空数据，只能入队列中把数据读取到一个文件中，以免数据丢失
	 */
	public function clearququ() {
		return false;
		header ( "Content-type: text/html; charset=utf-8" );
		ini_set ( "max_execution_time", "0" );
		ini_set ( 'memory_limit', '256M' );
		$save_to = "ququclear/";
		if (! file_exists ( WWWROOT . $save_to ))
			@mkdir ( WWWROOT . $save_to, 0777, TRUE );
		
		$file = WWWROOT . $save_to . 'memcququ.log';
		$ln = 0;
		$error = 0;
		while ( true ) {
			$m = new QueueModel (); // 获取数据库信息
			$rs = $m->get ();
			if (! $rs) {
				// echo '已经是空了！';
				break;
			}
			if (! is_array ( $rs ) || ! is_array ( $rs ["d"] )) {
				$error = 1;
				// echo "get data error\t" . json_encode ( $rs ) . "\r\n";
				// $ret ['file'] = "no";
			} else {
				$str = json_encode ( $rs );
				$open = fopen ( $file, "a" );
				fwrite ( $open, $str . "\r\n" );
				fclose ( $open );
				// echo $str . "<br>";
				$ln ++;
			}
		}
		if ($error === 1) {
			$msg = "操作失败。";
		} else {
			$msg = "操作成功，清理{$ln}条数据，将数据转入文件成功。";
		}
		$data ['clear'] = $msg;
		$data ['return'] = "";
		$this->assign ( 'data', $data );
		$this->display ( 'ququindex' );
	}
	/*
	 * 还原队列，是将清空队列时转换到文件里的数据，重新反回到队列中
	 */
	public function returnququ() {
		return false;
		header ( "Content-type: text/html; charset=utf-8" );
		ini_set ( "max_execution_time", "0" );
		ini_set ( 'memory_limit', '256M' );
		$file = WWWROOT . 'ququclear/' . 'memcququ' . '.log';
		$error = 0;
		$ln = 0;
		if (file_exists ( $file )) {
			$f = fopen ( $file, "r" );
			while ( ! feof ( $f ) ) {
				$str = fgets ( $f );
				$arr = json_decode ( $str, true );
				if (! empty ( $arr ['a'] ) && ! empty ( $arr ['m'] )) {
					$qm = new QueueModel ();
					$qm->set ( $arr ['a'], $arr ['m'], $arr ['d'] );
					$ln ++;
				}
			}
			if (unlink ( $file )) {
				$ret ['file'] = 'ok';
			} else {
				$error = 1;
				rename ( $file, $file . "_bak" );
			}
			$ret ['num'] = $ln;
			$ret ['success'] = 'ok';
		} else {
			$error = 1;
		}
		if ($error === 1) {
			$msg = "操作失败。";
		} else {
			$msg = "操作成功，清理{$ln}条数据，将数据转入队列成功。";
		}
		$data ['clear'] = "";
		$data ['return'] = $msg;
		$this->assign ( 'data', $data );
		$this->display ( 'ququindex' );
	}
	//缓存
	public function memcindex(){
		header ( "Content-type: text/html; charset=utf-8" );
		$qm = new CacheModel();
		$data=@$qm->stats ();
		//dump($data);
		$this->assign ( 'data', $data );
		$this->display ();
	}
	//清空缓存
	public function memcclear(){
		header ( "Content-type: text/html; charset=utf-8" );
		$qm = new CacheModel();
		$data=@$qm->flush ();
		$qm = new CacheModel(C('MEMCACHE_API_HOST'),C('MEMCACHE_API_PORT'));
		$data=@$qm->flush ();
		if($data){
			$msg="清空成功！";
		}else {
			$msg="清空失败！";
		}
		$data=@$qm->stats ();
		$data['msg']=$msg;
		$this->assign ( 'data', $data );
		$this->display ('memcindex');
	}
}