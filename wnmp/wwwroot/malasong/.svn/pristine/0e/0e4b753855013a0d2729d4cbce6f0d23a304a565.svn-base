<?php
/**
 * 报名
 **/
class UploadPicAction extends Action {
	/**
	 * 手机上传图片页面
	 */
	public function PhoneWeb(){
		$tk = $_GET['tk'];
		$this->assign("tk",$tk);
		$this->display("OnlineEnroll:phoneweb");
	}
	public function upload(){
		$step = intval($_POST['step']);
		$tk = trim($_POST['tk']);
		$result = $this->result;
		if($step == 1){
			//@todo upload pic
			$picData = $_POST['base64Img'];
			$orderid  = cache($tk);
			if(!$orderid){
				$result['error'] = 1;
				$result['msg'] = "token error";
			}else{
				$OlineM = new OnlineInfoModel();
				$OM = new UserOrdersModel();
				$stats = $OM->getOrderStats($orderid);
				if($stats != 1){
					$result['error'] = 1;
					$result['msg'] = "您已经报名过了,不能再报名";
				}else{
					$rs = $OlineM->uploadpic($picData,$orderid);
					if($rs){
						$result['error'] = 0;
						$result['msg'] = "ok";
					}else{
						$result['error'] = 1;
						$result['msg'] = "upload error:";
					}
				}
			}
			echo json_encode($result);
		}
	}
}