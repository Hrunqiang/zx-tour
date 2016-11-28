<?php
/**
 * 报名
 **/
class OnlineEnrollAction extends Action {
	private static $UID;
	private $result = array("error"=>66535,"msg"=>"unknow","data"=>array());
	public function _initialize(){
				B('AuthCheck');
		self::$UID = session("authId");
// 		self::$UID = empty(self::$UID)?1:self::$UID;
	}
	public function index() {
		$msg = "";
		$M = new GoodsModel();
		$bmType = $M->getDataByParendId(15);
        if(empty($bmType)){
            $msg .= "获取赛事错误;";
        }
        $npa = array(
				"tab"=>"赛事报名",
				"mtab"=>"线上马拉松报名",
		);
        $this->assign ( "npa", $npa );
        $CTM = new CountriesModel();
        $countries	= $CTM->getData();
        $this->assign ( "bmtype", $bmType );
        $this->assign ( "error", $msg );
		$this->assign ( "countries", $countries );
		$this->display ("index");
	}
	
	public function ziliao(){
		$riqi_reg = '/^(19|20)\d{2}(-|\/)(1[0-2]|0?[1-9])(-|\/)(0?[1-9]|[1-2][0-9]|3[0-1])$/';
		$shouji_reg = '/^1[\d]{10}$/';
		$email_reg = '/^(\w)+(\.\w+)*@(\w)+((\.\w{2,3}){1,3})$/';
		$msg ="";
		if(!empty($_POST)){
			$data['uid']				= self::$UID;
			$data['xingming']	= addslashes(trim($_POST['xingming']));
			$data['guojia']			= addslashes(trim($_POST['guojia']));
			$data['zjtype']			= addslashes(trim($_POST['zjtype']));
			$data['zjcode']		= addslashes(trim($_POST['zjcode']));
			$data['xingbie']		= addslashes(trim($_POST['xingbie']));
			$data['shengri']		= addslashes(trim($_POST['shengri']));
			$shengri = preg_match($riqi_reg, $data['shengri']);
			if(!$shengri){
				$msg .= "生日格式错误;";
			}
				
			$data['shouji']			= addslashes(trim($_POST['shouji']));
			$shojirs = preg_match($shouji_reg, $data['shouji']);
			if(!$shojirs){
				$msg .= "手机号码格式错误;";
			}
			$data['youxiang']	= addslashes(trim($_POST['youxiang']));
			$youxiang = preg_match($email_reg, $data['youxiang']);
			if(!$youxiang){
				$msg .= "邮箱格式错误;";
			}
				
			$data['shengfen']	= addslashes(trim($_POST['shengfen']));
			$data['diqu']			= addslashes(trim($_POST['diqu']));
			$data['dizhi']			= addslashes(trim($_POST['dizhi']));
			$data['bmtype']	= addslashes(trim($_POST['bmtype']));
				
			if(
					empty($data['xingming']) ||
					empty($data['guojia']) ||
					empty($data['zjtype']) ||
					empty($data['zjcode']) ||
					empty($data['xingbie']) ||
					empty($data['shengri']) ||
					empty($data['shouji']) ||
					empty($data['youxiang']) ||
					empty($data['bmtype']) ||
// 					empty($data['shengfen'])
					// 					empty($data['diqu']) ||
								empty($data['dizhi'])
			){
				$msg .= "必填信息不能为空;";
			}
				
			$data['xueli']			= addslashes(trim($_POST['xueli']));
			$data['xuexing']		= addslashes(trim($_POST['xuexing']));
			$data['hangye']		= addslashes(trim($_POST['hangye']));
			$data['shouru']		= addslashes(trim($_POST['shouru']));
			$data['zhiye']			= addslashes(trim($_POST['zhiye']));
			$data['shenti']		= addslashes(trim($_POST['shenti']));
			$data['nianxian']	= addslashes(trim($_POST['nianxian']));
				
			$data['qmfirstdate']		= addslashes(trim($_POST['qmfirstdate']));
			$data['qmfirstdate']		= ($data['qmfirstdate'] == "请输入日期")?"":$data['qmfirstdate'];
			$qmbest_h					= addslashes(trim($_POST['qmbest_h']));
			$qmbest_h					= ($qmbest_h != "请输入小时" && $qmbest_h!="")?$qmbest_h:0;
			$qmbest_i					= addslashes(trim($_POST['qmbest_i']));
			$qmbest_i					= ($qmbest_i != "请输入分钟" && $qmbest_i!="")?$qmbest_i:0;
			$qmbest_s					= addslashes(trim($_POST['qmbest_s']));
			$qmbest_s					= ($qmbest_s != "请输入秒" && $qmbest_s!="")?$qmbest_s:0;
			$data['qmbest'] = $qmbest_h.":".$qmbest_i.":".$qmbest_s;
				
			$data['bmfirstdate']	= addslashes(trim($_POST['bmfirstdate']));
			$data['bmfirstdate']		= ($data['bmfirstdate'] == "请输入日期")?"":$data['bmfirstdate'];
			$bmbest_h					= addslashes(trim($_POST['bmbest_h']));
			$bmbest_h					= ($bmbest_h != "请输入小时" && $bmbest_h!="")?$bmbest_h:0;
			$bmbest_i					= addslashes(trim($_POST['bmbest_i']));
			$bmbest_i					= ($bmbest_i != "请输入分钟" && $bmbest_i!="")?$bmbest_i:0;
			$bmbest_s					= addslashes(trim($_POST['bmbest_s']));
			$bmbest_s					= ($bmbest_s != "请输入秒" && $bmbest_s!="")?$bmbest_s:0;
			$data['bmbest'] = $bmbest_h.":".$bmbest_i.":".$bmbest_s;
				
			$data['zbpinpai']		= json_encode($_POST['zbpinpai']);
			$data['ylpinpai']			= json_encode($_POST['ylpinpai']);
			$data['ctime']				= $data['utime']			= date("Y-m-d H:i:s");
				
			if($msg == ""){
				$M = new BaomingdanModel();
				$M->startTrans();
				$rs = $M->addData($data,self::$UID);
				if($rs === -1){
					$msg .= "您已成功报名了黑瞎子岛马拉松赛，不能重复报名线上马拉松赛;";
					$M->rollback();
				}elseif($rs === false){
					$msg .= "添加失败,可能已经添加过<a href='/OnlineEnroll/query/' style='color:blue'>点击下一步试试</a>或联系客服;";
					$M->rollback();
				}else{
					//@todo 添加成功,添加到订单列表(购物车概念),跳转下一步
					$UOM = new UserOrdersModel();
					$orderid = $UOM->creatOrders(self::$UID,1);
					if($orderid){
						session("orderid_online",$orderid);
						$ODIFM = new OrdersInfoModel();
						//检查是否报名成功过,应该往上移,应先检查是否报名过
						$ckbmrs = $ODIFM->ckBaomingdanIdIsCom($rs,1);
						if($ckbmrs != 0 && $ckbmrs != 5){
							$msg .= "您已成功报名了黑瞎子岛马拉松赛，不能重复报名线上马拉松赛;";
							$M->rollback();
						}else{
							$addbmd = $ODIFM->addBaomingDan(self::$UID,$orderid, $rs,$data['bmtype']);
							if($addbmd){
								$M->commit();
								$msg .= "ok";
								// 							header("Location:/OnlineEnroll/query/?bmr=".$rs);
							}elseif($addbmd === -33){
								$msg .= "报名已满;";
								$M->rollback();
							}else{
								$msg .= "报名单生成失败;";
								$M->rollback();
							}
						}
					}else{
						$msg .= "报名失败,请重试;";
						$M->rollback();
					}
				}
			}
		}else{
			$msg .= "上传的数据错误;";
		}
// 		$npa = array(
// 				"tab"=>"赛事报名",
// 				"mtab"=>"报名",
// 		);
		echo json_encode(array("error"=>$msg));
// 		$this->assign ( "error", $msg );
// 		$this->assign ( "npa", $npa );
// 		$this->display ("index");
	}
	
	/**
	 * 成绩查询
	 */
	public function query(){
		$orderid = session("orderid_online");
		if(!$orderid){
			$UOM = new UserOrdersModel();
			$order = $UOM->getUnCompletOrder(self::$UID,1);
			$orderid = $order['orderid'];
		}
		if(empty($orderid)){
			header("Location:/OnlineEnroll/index");die;
		}
		$guid = guid();
		if($guid){
			$tok = cache($guid,$orderid,36000);
		}else{
			echo "<div style='text-align:center'><h1>error_0093894</h1></div>";die;
		}
		
		$this->assign("uploadurl",urlencode("http://pay.zx-tour.com/UploadPic/PhoneWeb?tk=".$guid));
		$this->assign("npa",array("tab"=>"线上马拉松","mtab"=>"上传成绩"));
		$this->display ();
	}
	
	/**
	 * 上传成绩
	 */
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
				if($stats != 0){
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
		}else{
			//@todo upload score
			$result = $this->result;
			$orderid = session("orderid_online");
			if(!$orderid){
				$UOM = new UserOrdersModel();
				$order = $UOM->getUnCompletOrder(self::$UID,1);
				$orderid = $order['orderid'];
			}
			if(empty($orderid)){
				$result['error']=1;
				$result['msg']="请返回先填写报名材料";
			}else{
				$OM = new UserOrdersModel();
				$stats = $OM->getOrderStats($orderid);
				if($stats != 0){
					$result['error'] = 1;
					$result['msg'] = "您已经报名过了,不能再报名";
				}else{
					$OlineM = new OnlineInfoModel();
					$ckrs = $OlineM->ckIsUploadPic($orderid);
					// 				1:已上传,2未上传,-1没上传
					if($ckrs === 1){
						$appName 	= addslashes(trim($_POST['appname']));
						$chengji		 = addslashes(trim($_POST['chengji']));
						$updateCj		= $OlineM->updateChengji($appName, $chengji, $orderid);
						if($updateCj){
							$result['error']=0;
							$result['msg']="ok";
						}else{
							$result['error']=2;
							$result['msg']="上传成绩失败,请重试";
						}
					}elseif($ckrs === 2 || $ckrs === -1){
						$result['error']=2;
						$result['msg']="请先上传图片成绩";
					}
				}
			}
			echo json_encode($result);
		}
	}

	public function sucess(){
		$orderid = session("orderid_online");
		if(!$orderid){
			$UOM = new UserOrdersModel();
			$order = $UOM->getUnCompletOrder(self::$UID,1);
			$orderid = $order['orderid'];
		}
		if(empty($orderid)){
			die("error orderid");
		}
		$OIM = new OrdersInfoModel();
		$rs = $OIM->getXingmingByOrderid($orderid);
		$email = $rs[0]['youxiang'];
		$this->assign("email",$email);
		$this->display("sucess");
	}
	
}