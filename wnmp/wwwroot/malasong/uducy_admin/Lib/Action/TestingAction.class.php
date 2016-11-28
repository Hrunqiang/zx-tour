<?php
class TestingAction extends Action{
	Public function _initialize(){
		B('AuthCheck');
	}
	function decodeUnicode($str)
	{
		return preg_replace_callback('/\\\\u([0-9a-f]{4})/i',
				create_function(
						'$matches',
						'return mb_convert_encoding(pack("H*", $matches[1]), "UTF-8", "UCS-2BE");'
				),
				$str);
	}
	public function index(){
		if($_POST){
				$obj = trim($_POST["obj"]);
				$date = trim($_POST["date"]);
				$device = trim($_POST["device"]);
				$stime = trim($_POST["stime"]);
				$etime = trim($_POST["etime"]);
				$data = "";
				if(empty($obj) || empty($date) || empty($device)){
					$data = "error data";
				}else{
					$M= new LogsModel();
					$M->setTrueTableName($obj.$date);
					$key = "IFA";
					if ($obj == "ADKS"){
						$key = "i";
					}
					$data = $M->where(array("$key"=>$device,"addDateTime"=>array('$gte'=>$stime,'$lte'=>$etime)))-> select();
					$string = "";
					if(trim($_POST['download'])){
						$endstr = "\r\n";
					}else{
						$endstr = "<br/><hr/>";
					}
					foreach ($data as $k=>$v){
						unset($v["_id"]);
						$string .=$this->decodeUnicode(json_encode($v)).$endstr;
					}
				}
				if(empty($string)){
					$string = "没有数据";
				}
				if(trim($_POST['download'])){
					header("Content-type:text/html;charset=utf-8");
					$file_name=date("YmdHis").".txt";
					//下载文件需要用到的头
					Header("Content-type: application/octet-stream");
					Header("Accept-Ranges: bytes");
					// 		Header("Accept-Length:".$file_size);
					Header("Content-Disposition: attachment; filename=".$file_name);
					echo $string;die;
				}
		}
		
		$this->assign("data",$string);
		$this->assign("post",$_POST);
		$this->display();
	}
	
	public function doload(){
		header("Content-type:text/html;charset=utf-8");
		$file_name=date("Y-m-d H:i:s").".txt";
		//下载文件需要用到的头
		Header("Content-type: application/octet-stream");
		Header("Accept-Ranges: bytes");
// 		Header("Accept-Length:".$file_size);
		Header("Content-Disposition: attachment; filename=".$file_name);
	}
}