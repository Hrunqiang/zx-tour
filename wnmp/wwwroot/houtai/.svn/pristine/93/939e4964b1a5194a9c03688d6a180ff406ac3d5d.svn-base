<?php
/*
 * 报名
 * */
class EnrollV3Action extends Action {
	
	public function _initialize(){
		B('AuthCheck');
	}
	public function index(){
		$where = "";
		$m_ptype_state = htmlspecialchars(addslashes(trim($_GET['m_ptype_state'])));
		if($m_ptype_state){
			$where .= " and m.m_ptype = '$m_ptype_state' ";
		}
		$platform_state = htmlspecialchars(addslashes(trim($_GET['platform_state'])));
		if($platform_state){
			$where .= " and o.platform = '$platform_state' ";
		}
		$order_state = htmlspecialchars(addslashes(trim($_GET['order_state'])));
		if($order_state){
			$where .= " and o.paystats = '$order_state' ";
		}
		$ctime_start = htmlspecialchars(addslashes(trim($_GET['ctime_start'])));
		if($ctime_start){
			$where .= " and o.ctime >= '$ctime_start' ";
		}
		$ctime_end = htmlspecialchars(addslashes(trim($_GET['ctime_end'])));
		if($ctime_end){
			$where .= " and o.ctime <= '$ctime_end' ";
		}
		
		$name = htmlspecialchars(addslashes(trim($_GET['name'])));
		if($name){
			$where .= " and lower(u.name) like '%$name%' ";
			$this->assign("name",$name);
		}
		
		$m_name = htmlspecialchars(addslashes(trim($_GET['m_name'])));
		if($m_name){
			$where .= " and lower(m.m_name) like '%$m_name%' ";
			$this->assign("m_name",$m_name);
		}
		
		$orderid = htmlspecialchars(addslashes(trim($_GET['orderid'])));
		if($orderid){
			$where .= " and o.orderid like '%$orderid%' ";
			$this->assign("orderid",$orderid);
		}
		
		$ordersM = new  UserOrdersV2Model();
		$data = $ordersM->getorderlist($where);
		$orderinfoM = new UserOrdersInfoV2Model;
		foreach($data as $key=>$val){
			$list = $orderinfoM->getOrderInfolist($val['orderid']);
			$info = "";
			foreach ($list as $k =>$v){
				if($v['type']=="套餐"){
					$goodsM = new GoodsV2Model();
					$cityinfo = $goodsM->getmeal_info($v['g_pid']);
					$v['g_name'] = $v['g_name']."(城市：".$cityinfo['g_name'].")";
				}
				$info.= $v['g_name']."<br>";
			}
			$info = rtrim($info,"+");	
			$data[$key]['info'] = $info;
		}
		$count = $ordersM->getordercount($where);
		$count = $count?$count:count($data);
		$this->assign("list",$data);
		$paltform = $ordersM->getordersPlatform();
		$this->assign("paltform",$paltform);
		$this->assign("m_ptype_state",$m_ptype_state);
		$this->assign("platform_state",$platform_state);
		$this->assign("order_state",$order_state);
		$this->assign("ctime_start",$ctime_start);
		$this->assign("ctime_end",$ctime_end);
		$this->assign("count",$count[0]['num']);
		$this->display();
	}
	
	public function orderinfo(){
		$orderid = htmlspecialchars(addslashes(trim($_GET['orderid'])));
		$enrollM = new UserOrdersV2Model();
		$info = $enrollM->getorderinfo($orderid);
		$orderinfoM = new UserOrdersInfoV2Model;
		$list = $orderinfoM->getorderinfo($orderid);
		foreach($list as $key =>$val){
			if($val['g_type']==2&&$val['g_name']!="单房差"){
				$goodsM = new GoodsV2Model();
				$cityinfo = $goodsM->getmeal_info($val['g_pid']);
				$list[$key]['g_name'] = $list[$key]['g_name']."(出发城市：".$cityinfo['g_name'].")";
				break;
			}
		}
		$changepriceM = new OrderChangePriceModel();
		$changelist = $changepriceM->where("orderid='{$orderid}'")->order("ctime desc")->select();
 		$this->assign("info",$info[0]);
		$this->assign("list",$list);
		$this->assign("changelist",$changelist);
		$this->display();
	}
	
	public function exportall(){
		$where = "";
		$ordersM = new UserOrdersModel();
		$export_list = $ordersM->getexportlist($where);
		EnrollAction::exportexcel($export_list,"",Date("Y-m-d h:i:s"));
	}
	
	/**
	 * 修改客服备注
	 */
	public function update_zhushi(){
		$rs = array("error"=>65535,"msg"=>"注释修改失败！未知错误！");
		$data['official_notes'] =  htmlspecialchars(addslashes(trim($_POST['zhushi'])));
		$orderid =  htmlspecialchars(addslashes(trim($_POST['orderid'])));
		if($orderid){
			$ordersM = new UserOrdersV2Model();
			$res = $ordersM->where("orderid = '".$orderid."'")->save($data);
			if($res!==false){
				$rs['error'] = 0 ;
				$rs['msg'] = "注释修改成功！";
			}else{
				$rs['error'] = 1 ;
				$rs['msg'] = "注释修改失败！系统错误";
			}
		}else{
			$rs['msg'] = "注释修改失败！未找到订单号！";
		}
		
		echo json_encode($rs);
	}
	
	/**
	 * 退款
	 */
	public function veff(){
		try{
			$mid = htmlspecialchars(addslashes(trim($_GET['mid'])));
			if(!$mid){
				throw new  Exception(" 未知赛事！ ");
			}
			$orderid = htmlspecialchars(addslashes(trim($_GET['orderid'])));
			if(!$orderid){
				throw new  Exception("无效订单号 ");
			}
			$ordersM = new UserOrdersV2Model();
			$info = $ordersM->getorderinfo($orderid);
			if($info[0]['paystats'] == 1 || $info[0]['paystats'] == 200){
				if(false!==$ordersM->veff($orderid)){
					message('状态修改成功！','?s=MatchV3&a=enroll&mid='.$mid);
				}else{
					throw new  Exception("退款状态更改失败！！！ ");
				}
			}else{
				throw new  Exception("该订单无法退款！！！ ");
			}	
		}catch( Exception $e){
			message($e->getMessage(),'?s=MatchV3&a=enroll&mid='.$mid);
		}
	}
	
	public function changepayprice(){
		$rs = array("error"=>65535,"msg"=>"未知错误！");
		
		$data['update_price'] = htmlspecialchars(addslashes(trim($_POST['payprice'])));
		$data['orderid'] =  htmlspecialchars(addslashes(trim($_POST['orderid'])));
		$data['ctime'] =  Date("Y-m-d H:i:s");
		$data['info'] =  htmlspecialchars(addslashes(trim($_POST['info'])));
		$data['username'] =  session("user");
		
		if($data['update_price']=="" || empty($data['orderid'])){
			$rs['error'] = 1004;
			$rs['msg'] = "订单号和修改后的价格未填写！";
			echo json_encode($rs);
			exit();
		}
		
		if(session('is_admin')<1&&session('user')!="yulina"){
			$rs['error'] = 1004;
			$rs['msg'] = "你的权限不够！无法修改！";
			echo json_encode($rs);
			exit();
		}
			
		$ordersM = new UserOrdersV2Model();
		$res = $ordersM->getorderinfo($data['orderid']);
		if($res[0]['paystats']==5){
			$data['original_price'] =$res[0]['payprice'];
			$ordersM->startTrans();
			$updaters = $ordersM->where("orderid = '{$data['orderid']}'")->save(array("payprice"=>$data['update_price']));
			if($updaters!==false){
				$changepriceM = new OrderChangePriceModel();
				if(false!==$changepriceM->add($data)){
					$ordersM->commit();
					$rs['error'] = 0;
					$rs['msg'] = "修改完成！";
				}else{
					$ordersM->rollback();
					$rs['error'] = 1 ;
					$rs['msg'] = "修改失败！请重试！";
				}
			}else{
				$ordersM->rollback();
				$rs['error'] = 1 ;
				$rs['msg'] = "修改失败！请重试！！";
			}
		}else{
			$rs['error'] = 1 ;
			$rs['msg'] = "当前订单状态不是未支付状态！！！";
		}
		echo json_encode($rs);
	}
	
	public function changepaystats(){
		$rs = array("error"=>65535,"msg"=>"未知错误！");
		$payinfo = htmlspecialchars(addslashes(trim($_POST['payinfo'])));
		$orderid =  htmlspecialchars(addslashes(trim($_POST['orderid'])));
		if($orderid && $payinfo){
			$ordersM = new UserOrdersV2Model();
			$res = $ordersM->getorderinfo($orderid);
			if($res[0]['paystats']==5){
				$rs = $ordersM->UpdatePayResult($orderid,"后台操作",1,$payinfo,"后台操作");
			}else{
				$rs['error'] = 1 ;
				$rs['msg'] = "当前订单状态不是未支付状态！！！".$res[0]['paystats'];
			}
		}else{
			$rs['error'] = 100;
			$rs['msg'] = "修改失败！未找到订单号或支付信息为空！";
		}
	
		echo json_encode($rs);
	}
	
	public function export(){
		$configs = array(
			array("orderid","订单号","o.orderid"),
			array("paystats","订单状态","paystats"),
			array("payorderid","支付订单号","o.payorderid"),
			array("payinfo","支付信息","o.payinfo"),
			array("orderprice","订单价钱","o.payprice"),
			array("discount","优惠价钱","o.discount"),
			array("official_notes","客服注释","o.official_notes"),
			array("user_remarks","用户备注","o.user_remarks"),
			array("m_name","报名赛事","m.m_name"),
			array("platform","下单平台","o.platform"),
			array("orderinfo","订单详情",""),
			array("ctime","下单时间","o.ctime"),
			array("name","用户姓名","u.name"),
			array("sfz_code","身份证号","u.sfz_code"),
			array("phone","手机号","us.phone"),
			array("birth","生日","u.birth"),
			array("sexy","性别","IF(u.sexy=1,'男','女') AS sexy"),
			array("country","国籍","u.country"),
			array("area","地区","u.area"),
			array("addr","详细地址","u.addr"),
			array("e_mail","邮箱","u.e_mail"),
			array("cloth_size","服装尺码","u.cloth_size"),
			array("pass_code","护照号码","u.pass_code"),
			array("surname","中文姓拼音","u.surname"),
			array("en_name","中文名拼音","u.en_name"),
			array("issue_date","签发日期","u.issue_date"),
			array("expiry_date","有效日期","u.expiry_date"),
			array("contact_name","联系人姓名","u.contact_name"),
			array("postcode","邮编","u.postcode"),
			array("isattended","是否参加过全马","IF(u.isattended=1,'是','否') AS isattended"),
			array("personbest","最好成绩","u.personbest"),
			array("personbestmatch","最好成绩赛事","u.personbestmatch"),
			array("wishfinish","预期成绩","u.wishfinish"),
			array("contact_phone","联系人手机","u.contact_phone")
		);
		$field = $_POST['field'];
		$fieldStr = "";
		$title = array();
		$needinfo = false;
		foreach ($field as $key=>$value){
			for($i=0,$l=count($configs);$i<$l;$i++){
				if($value == $configs[$i][0]){
					if($value=="orderinfo"){
						$needinfo = true;
					}else{
						$title[] = $configs[$i][1];
						$fieldStr.=$configs[$i][2].",";
					}
					
				}
			}
		}
		$fieldStr = rtrim($fieldStr,",");
		if(htmlspecialchars(addslashes(trim($_POST['exporttype'])))=="all"){
			$where = "";
			$needinfo = false;
		}else{
			$ids = trim($_POST['ids']);
			$where = " o.orderid in ($ids) ";
		}
		
		$ordersM = new UserOrdersV2Model();
		$export_list = $ordersM->getexportlist($fieldStr,$where);
		exportexcelV2($export_list,$title,$needinfo,Date("Y-m-d H:i:s"));
	}
}