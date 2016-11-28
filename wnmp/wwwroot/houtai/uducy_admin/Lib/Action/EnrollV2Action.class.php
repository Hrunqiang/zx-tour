<?php
/*
 * 报名
 * */
class EnrollV2Action extends Action {
	
	public function _initialize(){
		B('AuthCheck');
	}
	public function index(){
// 		$matchM = new MatchV2Model();
// 		$matchs = $matchM->getmatchsname();
// 		foreach ($matchs as $k=>$v){
// 			if($v['m_name']){
// 				$matchlist[$v['id']] = $v['m_name'];
// 			}
// 		}
		$table_cfg	= array(
				"tables"=>array(					
						'zx_tb_orders' =>array(
								"iszb" =>true,
								"field"=>array(
										'orderid'	=>array('ismain'=>true,'title'=>'订单号','isabm'=>false,'islist'=>true,'type'=>'text'),
 										'paystats'	=>array('title'=>'订单状态','isabm'=>true,'islist'=>true,'type'=>'select','selectdata'=>array("1"=>"支付完成","5"=>"等待支付","2"=>"支付金额不对","9"=>"库存不足","-1"=>"订单已删除","3"=>"订单已超时","4"=>"已退款")),
										//'payorderid'	=>array('title'=>'支付订单号','isabm'=>true,'islist'=>true,'type'=>'text'),
										'payprice'	=>array('title'=>'价钱','islist'=>true,'type'=>'text'),
										'discount'=>array('title'=>'优惠券价格','isabm'=>false,'islist'=>true),
										'ctime'	=>array('title'=>'下单时间','isabm'=>false,'islist'=>true,'type'=>'text'),
										'utime'	=>array('title'=>'最后更改时间','isabm'=>false,'islist'=>true,'type'=>'text'),
										//'matchid'	=>array('title'=>'赛事','isabm'=>true,'islist'=>true,'type'=>'select','selectdata'=>$matchlist),
										'platform'=>array('title'=>'平台','isabm'=>false,'islist'=>true,'type'=>'text'),
										'official_notes'=>array('title'=>'注释','isabm'=>false,'islist'=>true,'type'=>'textarea'),
										'user_remarks'=>array('title'=>'用户备注','isabm'=>false,'islist'=>true,'type'=>'text'),
										
								)
						),
						'zx_tb_userinfo'=>array(							
								"join"=>"zx_tb_orders.uid = zx_tb_userinfo.uid",
								"field"=>array(
										'name'	=>array('title'=>'姓名','isabm'=>true,'islist'=>true,'type'=>'text'),
								)
						),
						'zx_tb_matchs'=>array(
								"join"=>"zx_tb_matchs.id = zx_tb_orders.matchid",
								"field"=>array(
										'm_name'	=>array('title'=>'赛事名称','isabm'=>true,'islist'=>true,'type'=>'text'),
										'm_ptype'=>array('title'=>'赛事类型','isabm'=>false,'islist'=>true,'type'=>'select','selectdata'=>array("海外"=>"海外","国内"=>"国内")),
										'm_attentions'	=>array('title'=>'注意事项','isabm'=>false,'islist'=>true,'type'=>'textarea1'),
								)
						)
				),
				's'		=>'SdkNumData',
				'a'		=>'index',
				'perpage'=>'500',
				'designMode'=>'false',
				'order' =>"zx_tb_orders.utime desc",
				'tpl'=>'EnrollV2:index',
				// 				'submitBtns'=>array("发送push"=>"./?s=Push&a=Pushusers"),
		);
		$CommonAction	= new CommonV3Action();
		$CommonAction->list_fb($table_cfg);
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
	
	public function update_zhushi(){
		$rs = array("error"=>65535,"msg"=>"注释修改失败！未知错误！");
		$data['official_notes'] =  htmlspecialchars(addslashes(trim($_GET['zhushi'])));
		$orderid =  htmlspecialchars(addslashes(trim($_GET['orderid'])));
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
				$rs = $ordersM->UpdatePayResult($orderid,"后台操作",1,$payinfo);
			}else{
				$rs['error'] = 1 ;
				$rs['msg'] = "当前订单状态不是未支付状态！！！";
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
			array("paystats","订单状态","IF(o.`paystats`=1,'支付完成','未支付') AS paystats"),
			array("payorderid","支付订单号","o.payorderid"),
			array("payinfo","支付信息","o.payinfo"),
			array("orderprice","订单价钱","o.payprice"),
			array("discount","优惠价钱","o.discount"),
			array("official_notes","客服注释","o.official_notes"),
			array("user_remarks","用户备注","o.user_remarks"),
			array("m_name","报名赛事","m.m_name"),
			array("platform","下单平台","o.platform"),
			array("orderinfo","订单详情",""),
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
		}else{
			$ids = trim($_POST['ids']);
			$where = " o.orderid in ($ids) ";
		}
		
		$ordersM = new UserOrdersV2Model();
		$export_list = $ordersM->getexportlist($fieldStr,$where);
		EnrollV2Action::exportexcelV2($export_list,$title,$needinfo,Date("Y-m-d H:i:s"));
	}
	
	/**
	 * phpexcel导出
	 * @param unknown_type $data
	 * @param unknown_type $title
	 * @param unknown_type $needinfo
	 * @param unknown_type $filename
	 */
	function exportexcelV2($data,$title,$needinfo,$filename='report'){
		if($needinfo){
			array_push($title, "订单详情");
		}
		
		vendor("PHPExcel.export");
		$export = new  Excel_export();
		$indexX = 1;
		if (!empty($title)){
			if (!empty($title)){
				foreach ($title as $k => $v) {
					$export->setCellValue($indexX,$k,$title[$k]);
				}
			}
		}
		if (!empty($data)){
			$orderinfoM = new UserOrdersInfoV2Model;
			foreach($data as $k=>$match){
				$indexX++;
				$j=0;
				foreach($match as $key => $val){
					$isnum = false;
					if($key=="payprice"||$key=="discount"){
						$isnum = true;
					}
					$export->setCellValue($indexX,$j,$val,$isnum);
					$j++;
				}
				if($needinfo){
					$list = $orderinfoM->getOrderInfolist($match['orderid']);
					$matchinfo = "";
					foreach ($list as $k =>$v){
						if($v['type']=="套餐"){
							$goodsM = new GoodsV2Model();
							$cityinfo = $goodsM->getmeal_info($v['g_pid']);
							$v['g_name'] = $v['g_name']."(出发城市：".$cityinfo['g_name'].")";
						}
						$matchinfo.= $v['type']."(".$v['g_name'].")+";
					}
					$matchinfo = rtrim($matchinfo,"+");
					$export->setCellValue($indexX,$j,$matchinfo);
				}
			
			}
		}
		$export->save();
	}
	
	/**
	 * 原生导出
	 * @param unknown_type $data
	 * @param unknown_type $title
	 * @param unknown_type $needinfo
	 * @param unknown_type $filename
	 */
	function exportexcel($data,$title,$needinfo,$filename='report'){
		header("Content-type:application/octet-stream;charset=utf-8;");
		header("Accept-Ranges:bytes");
		header("Content-type:application/vnd.ms-excel;charset=utf-8;");
		header("Content-Disposition:attachment;filename=".$filename.".xls");
		header("Pragma: no-cache");
		header("Expires: 0");
		
		$excelStr = "<table border='1' cellpadding='0' cellspacing='0'>";
		if($needinfo){
			array_push($title, "订单详情");
		}
		//导出xls 开始
		if (!empty($title)){
			$excelStr.="<tr>";
			foreach ($title as $k => $v) {
				$title[$k]=iconv("UTF-8", "GB2312//ignore",$v);
				$excelStr.="<td>".$title[$k]."</td>";
			}
			//$title= implode("\t", $title);
			//echo "$title\n";
			$excelStr.="</tr>";
		}
		if (!empty($data)){
			$orderinfoM = new UserOrdersInfoV2Model;
			
			foreach($data as $key=>$val){
				$excelStr.="<tr>";
				foreach ($val as $ck => $cv) {
					$data[$key][$ck]=iconv("UTF-8", "GB2312//ignore", $cv);
					if(is_numeric($data[$key][$ck])&&strlen($data[$key][$ck])>=15){
 						//$data[$key][$ck] = "`".$data[$key][$ck];
 						$excelStr.="<td style='vnd.ms-excel.numberformat:@'>".trim($data[$key][$ck])."</td>";
 					}else{
 						$excelStr.="<td>".$data[$key][$ck]."</td>";
 					}
				}
				if($needinfo){
	 				$list = $orderinfoM->getOrderInfolist($val['orderid']);
					$matchinfo = "";
					foreach ($list as $k =>$v){
						if($v['type']=="套餐"){
							$goodsM = new GoodsV2Model();
							$cityinfo = $goodsM->getmeal_info($v['g_pid']);
							$v['g_name'] = $v['g_name']."(出发城市：".$cityinfo['g_name'].")";
						}
						$matchinfo.=iconv("UTF-8", "GB2312", $v['type']."(".$v['g_name'].")")."+";
					}
					$matchinfo = rtrim($matchinfo,"+");
					$matchinfo .= "";
					$data[$key]['orderinfo'] = $matchinfo;
					$excelStr.="<td>".$matchinfo."</td>";
				}
				//$data[$key]=implode(" \t", $data[$key]); 
				$excelStr.="</tr>";
			}
		//	echo "".implode("\n",$data);
		}
		$excelStr.="</table>";
		echo $excelStr;
	 }


}