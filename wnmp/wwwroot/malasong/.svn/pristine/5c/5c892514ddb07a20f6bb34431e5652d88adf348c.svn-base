<?php
class OnlineInfoModel extends Model{
	protected  $trueTableName	= "mls_online_info";
	protected $connection = 'DB_CONFIG1';
		
	/**
	 * @param unknown_type $orderid
	 * @return 1:已上传,2未上传,-1没上传|number
	 */
	public function ckIsUploadPic($orderid){
		if(empty($orderid)) return false;
		$data = $this->where("orderid='$orderid'")->find();
		if($data){
			if(!empty($data['picData'])){
				return 1;
			}else{
				return 2;
			}
		}else{
			return -1;
		}
	}
	
	public function updateChengji($appName,$chengji,$addr,$orderid){
		if(empty($appName) || empty($chengji) || empty($orderid) ||empty($addr) ) return false;
		$data = array(
				'appName'=>$appName,
				'chengji'	=>$chengji,
				'addr'=>$addr,
				'utime'	=>date('Y-m-d H:i:s')
				);
		$this->startTrans();
		$rs = $this->data($data)->where("orderid='$orderid'")->save();
		$OM = new UserOrdersModel();
		$rsu = $OM->updateOnlineStats($orderid);
		if($rs && $rsu){
			$this->commit();
			return true;
		}else{
			$this->rollback();
			return false;
		}
	}
	public function uploadpic($base64,$orderid){
		if(empty($base64) || empty($orderid)) return false;
		$ck = $this->where(array("orderid"=>$orderid))->find();
		if($ck){
			$rs = $this->data(array("picData"=>$base64,"utime"=>date("Y-m-d H:i:s")))->where("orderid='$orderid'")->save();
		}else{
			$time = date("Y-m-d H:i:s");
			$rs = $this->data(array("picData"=>$base64,"orderid"=>$orderid,"utime"=>$time,"ctime"=>$time))->add();
		}
		if(!$rs){
			@mwtlog("uploadpic_error","rs:".json_encode($rs)."\tsql:".$this->getLastSql(),true);
		}
		return $rs;
	}
	
}