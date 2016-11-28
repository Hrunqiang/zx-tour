<?php

class MlsWishAction extends Action {

	public function getwishcode(){
		$shouji_reg = '/^1[\d]{10}$/';
		$array=array("贝尔加冰湖","巴黎","平壤","丹增一希拉里珠峰","非洲五大猛兽","柏林","北极圈","海军陆战队");
		$rs = array("error"=>65535,"msg"=>"未知错误！");
		$data['wish'] = $array[addslashes(trim($_POST['wish']))];
		$data['name'] = addslashes(trim($_POST['name']));
		$data['phone'] = addslashes(trim($_POST['phone']));
		if($data['wish']){
			if(!empty($data['name'])&&!empty($data['phone'])&&preg_match($shouji_reg, $data['phone'])){
				$data['code'] = $this->getcode($data['phone']);
				if($data['code']){
					$data['ctime'] = date("Y-m-d H:i:s");
					$wishM = new MlsWishsModel();
					$code =$wishM->addwish($data);
					if($code){
						$rs['error'] = 0;
						$rs['msg'] = $code;
					}else{
						$rs['error'] = 502;
						$rs['msg'] = "呀！服务器挂了，请重试！";
					}
				}else{
					$rs['error'] = 1;
					$rs['msg'] = "呀！服务器挂了，请重试！";
				}
			}else{
				$rs['error'] = 1;
				$rs['msg'] = "请输入正确的个人信息！";	
			}
		}else{
			$rs['error'] = 1;
			$rs['msg'] = "请选择你要许愿的马拉松比赛";
		}
		
		echo json_encode($rs);
	}
	
	public function getcode($phone){
		$phone = substr($phone,9,2);
		$rand =  rand(10,99);
		$time = substr(time(),4);
		return  $rand.$phone.$time;
	}

}