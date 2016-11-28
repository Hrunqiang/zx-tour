<?php
/**
 * 用户Action
 * @author hhy
 * ctime 2015-10-27
 */
class UserAction extends Action {
	
	Public function _initialize(){
		B('AuthCheck');
	}
	
	/**
	 * 用户主页
	 */
	public function index(){
		$uid = session("SESSION_ZX_AUTHID");
		$userM = new AccountModel();
		$userinfo = $userM->getuser($uid);
		$orderM = new UserOrdersModel();
		$needpay = $orderM->countpayorderByuid($uid);	
		if(session("SESSION_ZX_USERSTATE")<2){
			session("SESSION_ZX_HISTORYURL",$_SERVER['REQUEST_URI']);
			redirect ( '/Account/login' );
		}
		$this->assign("userstate",session("SESSION_ZX_USERSTATE"));
		$this->assign("needpay",$needpay);
		$this->assign("user",$userinfo);
        $this->display();
    }
    
    /**
     * 用户信息页
     */
    public function userinfo(){
    	if(session("SESSION_ZX_USERSTATE")<2){
    		session("SESSION_ZX_HISTORYURL",$_SERVER['REQUEST_URI']);
    		redirect ( '/Account/login' );
    	}
    	$uid = session("SESSION_ZX_AUTHID");
    	$userinfoM = new UserInfoModel();
    	$updateres = "";
    	if($this->isPost()){			
    		$updateres = $userinfoM->updateUserinfo($uid,$_POST); 
    		$this->updateOrderStats($uid,$_POST);
    		$updateres = $updateres?"weui.Loading.success(2000,'保存成功');":"";	
    	}
    	$this->assign("updateres",$updateres);
    	$info = $userinfoM->getuserinfo($uid);
    	$this->assign("info",$info);
    	$this->assign("phone",session("SESSION_ZX_PHONE"));
    	$this->assign("userstate",session("SESSION_ZX_USERSTATE"));
    	$this->display();
    }
    
    /**
     * 保存用户资料
     */
    public function saveuserinfo(){
    	$riqi_reg = '/^(19|20)\d{2}(-|\/)(1[0-2]|0?[1-9])(-|\/)(0?[1-9]|[1-2][0-9]|3[0-1])$/';
    	$shouji_reg = '/^1[\d]{10}$/';
    	//$email_reg = '/^(\w)+(\.\w+)*@(\w)+(-|_)+((\.\w{2,3}){1,3})$/';
    	
    	$email_reg = "/^([a-zA-Z0-9_-|.])+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-])+/";
    	$msg ="";
    	$userstate = session("SESSION_ZX_USERSTATE");
    	if($userstate<3){
    		$data['name'] = addslashes(trim($_POST['name']));
    		$data['sfz_code'] =addslashes(trim($_POST['sfz_code']));
    		$data['birth']		= addslashes(trim($_POST['birth']));
    		$data['sexy']	= addslashes(trim($_POST['sexy']));
    		$data['country']			= addslashes(trim($_POST['country']));
    		$data['area']			= addslashes(trim($_POST['area']));
    		$data['addr']		= addslashes(trim($_POST['addr']));
    		$data['postcode']		= addslashes(trim($_POST['postcode']));
    		$data['e_mail']		= addslashes(trim($_POST['e_mail']));
    		$data['cloth_size']		= addslashes(trim($_POST['cloth_size']));
    		$data['blood_type']		= addslashes(trim($_POST['blood_type']));
    		$data['broad_country']		= addslashes(trim($_POST['broad_country']));
    		if(
    				empty($data['name']) ||
    				empty($data['sfz_code']) ||
    				empty($data['birth']) ||
    				empty($data['country']) ||
    				//empty($data['postcode']) ||
    				empty($data['blood_type']) ||
    				empty($data['e_mail']) ||
    				empty($data['cloth_size'])
    		){
    			$msg .= "必填信息不能为空;";
    		}
    	
    		$youxiang = preg_match($email_reg, $data['e_mail']);
    		if(!$youxiang){
    			$msg .= "邮箱格式错误;";
    		}
    		if($data['country']=="中国"){
	    		$codeinfo = getIDCardInfo($data['sfz_code']);
	    		if($codeinfo['error']===2){
	    			$data['shengri'] = $codeinfo['birthday'];
	    			$data['sexy'] = $codeinfo['sexy'];
	    		}else{
	    			$msg .= "身份证格式错误;";
	    		}
    		}
    	
    		$data['ctime'] = $data['utime']	= date("Y-m-d H:i:s");
    		$data['uid'] = session("SESSION_ZX_AUTHID");
    		$data['phone'] = session("SESSION_ZX_PHONE");
    		//其它资料
    		$data['pass_code'] = addslashes(trim($_POST['pass_code']));
    		$data['surname'] =addslashes(trim($_POST['surname']));
    		$data['en_name']		= addslashes(trim($_POST['en_name']));
    		$data['issue_date']	= addslashes(trim($_POST['issue_date']));
    		$data['expiry_date']			= addslashes(trim($_POST['expiry_date']));
    		$data['contact_name']			= addslashes(trim($_POST['contact_name']));
    		$data['contact_phone']		= addslashes(trim($_POST['contact_phone']));
    		if(empty($data['contact_name']) || empty($data['contact_phone'])){
    			$msg .= "联系人信息不能为空;";
    		}
    		 
    		if(!phoneCheck($data['contact_phone'])){
    			$msg .= "联系人手机格式不正确;";
    		}
    		
    		$data['isattended']	= addslashes(trim($_POST['isattended']));
    		$data['personbest']			= addslashes(trim($_POST['personbest']));
    		$data['personbestmatch']			= addslashes(trim($_POST['personbestmatch']));
    		$data['wishfinish']		= addslashes(trim($_POST['wishfinish']));
    		
    		if($msg == ""){
    			$M = new UserInfoModel();
    			$M->startTrans();
    			$rs = $M->createUserinfo($data);
    			if($rs === false){
    				$msg = "添加失败,可能已经添加过！";
    				$M->rollback();
    			}else{
    				$msg = "ok";
    				$accountM = new AccountModel();
    				if($accountM ->changeState($data['uid'], 4)){
    					$this->updateOrderStats($data['uid'],$data);
    					session("SESSION_ZX_USERSTATE",4);
    					$M->commit();
    				}else{
    					$msg = "添加失败,系统错误！";
    					$M->rollback();
    				}
    			}
    		}
    	}else{
    		//其它资料
			 $msg = "系统错误";   	
    	}
    	$result = array("msg"=>$msg,"rd"=>$rs);
    	echo json_encode($result);
    }
    
    /**
     * 想跑的赛事
     */
    public function collection(){
    	$uid = session("SESSION_ZX_AUTHID");
    	$collectM = new MatchCollectModel();
    	$list = $collectM->getMycollectMatch($uid);
    	if($list){
    		$domesticHTML = $abroad = "";
    		$now = Date("Y-m-d H:i:s");
    		foreach ($list as $key=>$value){
    			$m_enterurl =$value['m_enterMode']=="remote"?$value['m_enterurl']:"/Matchinfo?m_id=".$value['id'];
    			$m_img = $value['m_img'];
    			$m_GameTime= substr($value['m_GameTime'],0,10);
    			$m_Mtypes = str_replace("|","<span></span>",$value['m_Mtypes']);
    			$m_des =$value['m_des'];
    			$m_name = $value['m_name'];
    			$tips = "";
    			if($value['m_state']!=0 || $value['m_GameTime'] <=$now || $value['m_releaseTime'] >$now || $value['m_untilTime']<$now || $value['m_offineTime'] <$now){
    				$tips = '<span class="match_tips">名额已满</span>';
    			}else if($value['m_placesleft']<=200){
    				$tips = '<span class="match_tips match_tips_warm">名额紧张</span>';
    			}
    			
    			$tmp = '<a href="%s" class="weui_media_box weui_media_appmsg"><div class="weui_media_hd">
			<img class="weui_media_appmsg_thumb" src="%s" alt=""></div>
    		<div class="weui_media_bd">
     		<h4 class="weui_media_title">%s%s</h4>
     		<p class="weui_media_desc">%s</p>
     		<p class="weui_media_desc">%s %s</p>
     		</div>
     		</a>';
    			$str = sprintf($tmp,$m_enterurl,$m_img,$m_name,$tips,$m_des,$m_GameTime,$m_Mtypes);
    			if($value['m_ptype']=="国内"){
    				$domesticHTML.=$str;
    			}else{
    				$abroad.=$str;
    			}
    		}
    		
    		$this->assign("domestic",$domesticHTML);
    		
    		$this->assign("abroad",$abroad);
    	}
    	$this->assign("empty",array("还没有想跑赛事","去首页添加>"));
    	$this->display();
    }
    
    /**
     * 用户订单
     */
    public function order(){
    	$uid = session("SESSION_ZX_AUTHID");
    	$orderM = new UserOrdersModel();
    	$list = $orderM->getorderListByUid($uid);

    	if($list){
    		$orderHTML = "";
    		$UOINFO = new OrdersInfoModel();
    		$date = Date("Y-m-d H:i:s");
    		foreach ($list as $key=>$value){
    			$paystats = $value['paystats']."订单已完成";
    			$orderhunt = "";
    			$handle ="";
    			switch ($value['paystats']){
    				case -1:
    					$paystats = "已删除";
    					break;
					case 3:
						$paystats = "支付过期";
						$handle = '';
						break;
    				case 1:
    					$paystats = "支付成功/未完善资料";
    					if($value['m_GameTime']>$date){
    						$orderhunt = "感谢您的报名，请您添加客服微信号zxhylv，我们将于赛前一个月与您联系，如有问题请致电4000-842-195，祝您跑出好成绩！";
    					}
    					break;
    				case 10:
    					$paystats = "报名成功";
    					if($value['m_GameTime']>$date){
    						$orderhunt = "感谢您的报名，请您添加客服微信号zxhylv，我们将于赛前一个月与您联系，如有问题请致电4000-842-195，祝您跑出好成绩！";
    					}
    					break;
    				default:
    					if(
    						$value['m_state']!=0          ||
    						$value['m_untilTime']<$date  ||
    						$value['m_offineTime']<$date  ||
    						$value['pay_deadline']<$date  
    					){
    						$paystats = "支付已取消";
    						$handle = '';
    					}else{
    						$paystats = "未付款";
    						$handle = '<a href="/Enroll/userdata?orderid='.$value['orderid'].'" class="weui_cell_ft gopaybtn">继续报名</a>';
    					}
    					break;
    			}
    			
    			$list = $UOINFO->getOrderInfolist($value['orderid']);
    			$meals = array();
    			foreach($list as $k =>$v){
    				$mealname = $v['type']=="单房差"?"单房差":$v['g_name'];
    				array_push($meals,$mealname);
    			}
    			$orderInfo = implode(" + ",$meals);
    			$orderHTML .= $this->getOrderTemplate($value['m_icon'],$value['m_name'],$paystats,$value['m_img'],$orderInfo,$value['orderid'],substr($value['m_GameTime'],0,10),$value['payprice'],$orderhunt,$handle);
    		}

    		$this->assign("orderHTML",$orderHTML);
    	}
    	$this->assign("empty",array("还没有赛事订单","去首页添加>"));
    	$this->display();
    }
    
    public function delorder(){
    	$rs = array("error"=>65535,"msg"=>"未知错误","data"=>"");
    	$orderid = htmlspecialchars(addslashes(trim($_GET['orderid'])));
    	if(empty($orderid)){
    		$rs['error'] = 1;
    		$rs['msg'] ="未找到此订单";
    	}else{
    		$orderM = new UserOrdersModel();
    		//if($orderM->CancelOrderid($orderid)){
    		if(false){
    			$rs['error'] = 0;
    			$rs['msg'] ="ok";
    		}else{
    			$rs['error'] = 1;
    			$rs['msg'] ="删除失败！";
    		}
    	}
    	echo json_encode($rs);
    }
    
    /**
     * 生成订单页HTML
     * @param unknown_type $matchIcon
     * @param unknown_type $matchName
     * @param unknown_type $orderState
     * @param unknown_type $matchImg
     * @param unknown_type $orderInfo
     * @param unknown_type $orderId
     * @param unknown_type $gameTime
     * @param unknown_type $orderPrice
     * @param unknown_type $orderhunt
     * @param unknown_type $handle
     * @return string
     */
    public function getOrderTemplate($matchIcon,$matchName,$orderState,$matchImg,$orderInfo,$orderId,$gameTime,$orderPrice,$orderhunt,$handle){
    	//$handle = '<div class="weui_cell_ft">22</div>';
    	$template = '
    	<div class="orderBox">
	        <div class="weui_cell">
	            <div class="weui_cell_hd matchicon"><img src="%s" alt="" style="width:20px;margin-right:5px;display:block"></div>
	            <div class="weui_cell_bd weui_cell_primary">
	                <p>%s</p>
	            </div>
	            <div class="weui_cell_ft orange">%s</div>
	        </div>
	        <div class="weui_media_box weui_media_appmsg">
	            <div class="weui_media_hd">
	                <img class="weui_media_appmsg_thumb" src="%s" alt="">
	            </div>
	            <div class="weui_media_bd">
	                <p class="">%s</p>
	                <p class="weui_media_desc">订单编号：%s</p>
    				<p class="weui_media_desc">开赛时间：%s</p>
	                <p class="weui_media_desc">总价：￥<span>%s</span></p>
	            </div>
	        </div>
	        <div class="weui_cell">
	            <div class="weui_cell_bd weui_cell_primary">%s</div>
	            %s
	        </div>
    	</div>';
    	$str = sprintf($template,$matchIcon,$matchName,$orderState,$matchImg,$orderInfo,$orderId,$gameTime,$orderPrice,$orderhunt,$handle);
    	return $str;
    }
    
    /**
     * 用户反馈
     */
    public function feedback(){
    	if($this->isPost()){
    		$data['uid'] = session("SESSION_ZX_AUTHID");
    		$data['content'] = htmlspecialchars(addslashes(trim($_POST['content'])));
    		$data['type'] = htmlspecialchars(addslashes(trim($_POST['feedtype'])));
    		$data['phone'] = htmlspecialchars(addslashes(trim($_POST['phone'])));
    		$data['ctime'] = Date("Y-m-d H:i:s");
    		$data['img'] = $_POST['img']?serialize($_POST['img']):"";
    		if(empty($data['content'])){
    			$error = 'alert("请输入反馈内容！");';
    		}else{
    			$feedbackM = new UserFeedbackModel();
    			if(!$feedbackM->addFeedback($data)){
    				$error = "alert('反馈失败！');";
    			}else{
    				$this->display("fd_succ");
    				exit;
    			}
    		}
    		$this->assign("error",$error);
    	}
    	$this->display();
    }
    
    public function perfect(){
    	$uid = session("SESSION_ZX_AUTHID");
    	$orderid = addslashes(trim($_GET['orderid']));
    	 
    	$UO = new UserOrdersModel();
    	$orderinfo = $UO->getorderinfo($orderid);
    	$m_ptype = $orderinfo[0]['m_ptype'] ? $orderinfo[0]['m_ptype'] : "海外";
    	$userM = new UserInfoModel();
    	$userinfo = $userM->getuserinfo($uid);
    	$this->assign("user",$userinfo);
    	$this->assign("phone",session("SESSION_ZX_PHONE"));
    	$this->assign("m_ptype",$m_ptype);
    	$this->assign("uid",$uid);
    	$this->assign("orderid",$orderid);
    	$this->display();
    }
    
    /**
     * 保存用户资料
     */
    public function saveperfect(){
    	$riqi_reg = '/^(19|20)\d{2}(-|\/)(1[0-2]|0?[1-9])(-|\/)(0?[1-9]|[1-2][0-9]|3[0-1])$/';
    	$shouji_reg = '/^1[\d]{10}$/';
    	//$email_reg = '/^(\w)+(\.\w+)*@(\w)+(-|_)+((\.\w{2,3}){1,3})$/';
    
    	$email_reg = '/^([a-zA-Z0-9_-|.])+@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-])+/';
    	$msg ="";
    	$userstate = session("SESSION_ZX_USERSTATE");
    	$data['name'] = addslashes(trim($_POST['name']));
    	$data['sfz_code'] =addslashes(trim($_POST['sfz_code']));
    	$data['birth']		= addslashes(trim($_POST['birth']));
    	$data['sexy']	= addslashes(trim($_POST['sexy']));
    	$data['country']			= addslashes(trim($_POST['country']));
    	$data['area']			= addslashes(trim($_POST['area']));
    	$data['addr']		= addslashes(trim($_POST['addr']));
    	$data['postcode']		= addslashes(trim($_POST['postcode']));
    	$data['e_mail']		= addslashes(trim($_POST['e_mail']));
    	$data['cloth_size']		= addslashes(trim($_POST['cloth_size']));
    	$data['blood_type']		= addslashes(trim($_POST['blood_type']));
    	$data['broad_country']		= addslashes(trim($_POST['broad_country']));
    	if(
    			empty($data['name']) ||
    			empty($data['sfz_code']) ||
    			empty($data['birth']) ||
    			empty($data['sexy']) ||
    			empty($data['country']) ||
    			//empty($data['postcode']) ||
    			//empty($data['area']) ||
    			//empty($data['addr']) ||
    			empty($data['e_mail']) ||
    			empty($data['cloth_size'])
    	){
    		$msg .= "必填信息不能为空;";
    	}
    	 
    	$youxiang = preg_match($email_reg, $data['e_mail']);
    	if(!$youxiang){
    		$msg .= "邮箱格式错误;";
    	}
    	
    	if($data['country']=="中国"){ 
	    	$codeinfo = getIDCardInfo($data['sfz_code']);
	    	if($codeinfo['error']===2){
	    		$data['shengri'] = $codeinfo['birthday'];
	    		$data['sexy'] = $codeinfo['sexy'];
	    	}else{
	    		$msg .= "身份证格式错误;";
	    	}
    	}
    	$data['ctime'] = $data['utime']	= date("Y-m-d H:i:s");
    	$uid = session("SESSION_ZX_AUTHID");
    	$data['phone'] = session("SESSION_ZX_PHONE");
    	//其它资料
    	$data['pass_code'] = addslashes(trim($_POST['pass_code']));
    	$data['surname'] =strtoupper(addslashes(trim($_POST['surname'])));
    	$data['en_name']		= strtoupper(addslashes(trim($_POST['en_name'])));
    	$data['issue_date']	= addslashes(trim($_POST['issue_date']));
    	$data['expiry_date']			= addslashes(trim($_POST['expiry_date']));
    	$data['contact_name']			= addslashes(trim($_POST['contact_name']));
    	$data['contact_phone']		= addslashes(trim($_POST['contact_phone']));
    	if(empty($data['contact_name']) || empty($data['contact_phone'])){
    		$msg .= "联系人信息不能为空;";
    	}
    	 
    	if(!phoneCheck($data['contact_phone'])){
    		$msg .= "联系人手机格式不正确;";
    	}
    
    	$data['isattended']	= addslashes(trim($_POST['isattended']));
    	$data['personbest']			= addslashes(trim($_POST['personbest']));
    	$data['personbestmatch']			= addslashes(trim($_POST['personbestmatch']));
    	$data['wishfinish']		= addslashes(trim($_POST['wishfinish']));
    
    	if($msg == ""){
    		$M = new UserInfoModel();
    		$M->startTrans();
    		$rs = $M->toggUserinfo($uid,$data);
    		if($rs === false){
    			$msg = "添加失败,系统错误!!";
    			$M->rollback();
    		}else{
    			$accountM = new AccountModel();
    			if($accountM ->changeState($uid, 4)!==false){
    				$this->updateOrderStats($uid,$data);
    				$msg = "ok";
    				session("SESSION_ZX_USERSTATE",4);
    				$M->commit();
    			}else{
    				$msg = "添加失败,系统错误！";
    				$M->rollback();
    			}
    		}
    	}
    	$result = array("msg"=>$msg,"rd"=>$rs);
    	echo json_encode($result);
    }
    
    private  function updateOrderStats($uid,$data){
    	$orderM =  new  UserOrdersModel();
    	if(!empty($data['pass_code']) && !empty($data['surname']) && !empty($data['en_name'])){
    		$sql = "SELECT o.orderid FROM  zx_tb_orders o LEFT JOIN  zx_tb_matchs m ON o.matchid =  m.id WHERE o.uid = $uid AND o.paystats = 1 ";
    	}else{
    		$sql = "SELECT o.orderid FROM  zx_tb_orders o LEFT JOIN  zx_tb_matchs m ON o.matchid =  m.id WHERE o.uid = $uid AND o.paystats = 1 AND m.m_ptype = '国内'";
    	}
    	$orderlist = $orderM->query($sql);
    	if(!$orderlist){
    		return false;
    	}else{
    		$res = true;
    		foreach($orderlist as $key => $val){
    			if($orderM->finishOrders($val['orderid'])===false){
    				$res = false;
    			}
    		}
    		return $res;
    	}
    }
    
    public function  success(){
    	$orderid = htmlspecialchars(addslashes(trim($_GET['orderid'])));
    	$orderid = $orderid ? $orderid : session("SESSION_ZX_ORDERID");
    	$uid = session("SESSION_ZX_AUTHID");
    	$orderM =  new  UserOrdersModel();
    	$stats = $orderM->getOrderStats($orderid);
    	switch($stats){
    		case 10:
    			$this->display();
    			break;
    		case 1:
    			redirect("/User/perfect?orderid=".$orderid);
    			break;
    		case 5:
    			redirect("/PayResult/payorder?orderid=".$orderid);
    			break;
    		default:
    			header("Content-type:text/html;charset=utf-8;");
    			$msg = "<script>alert('订单未知错误！'); window.location.href='/'</script>";
    			echo $msg;
    			break;
    	}
    }
    
}