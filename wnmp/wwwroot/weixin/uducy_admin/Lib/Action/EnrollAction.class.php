<?php
/*
 * 报名
 * */
class EnrollAction extends Action {
	
	public function _initialize(){
		B('AuthCheck');
	}
	
	public function index(){
		$platform =  session("platform");
		$table_cfg	= array(
				"tables"=>array(
						'zx_tb_orders' =>array(
								"iszb" =>true,
								"field"=>array(
										'orderid'	=>array('ismain'=>true,'title'=>'订单号','isabm'=>false,'islist'=>true,'type'=>'text'),
										'paystats'	=>array('title'=>'订单状态','isabm'=>true,'islist'=>true,'type'=>'select','selectdata'=>array("1"=>"支付完成","5"=>"等待支付","2"=>"支付金额不对","9"=>"库存不足","-1"=>"订单已删除","3"=>"订单已超时")),
										//'payorderid'	=>array('title'=>'支付订单号','isabm'=>true,'islist'=>true,'type'=>'text'),
										'payprice'	=>array('title'=>'价钱','islist'=>true,),
										'discount'=>array('title'=>'优惠券价格','isabm'=>true,'islist'=>true),
										'ctime'	=>array('title'=>'下单时间','isabm'=>false,'islist'=>true,'type'=>'text'),
										//'utime'	=>array('title'=>'最后更改时间','isabm'=>false,'islist'=>true,'type'=>'text'),
										//'matchid'	=>array('title'=>'赛事','isabm'=>true,'islist'=>true,'type'=>'select','selectdata'=>$matchlist),
										'platform'=>array('title'=>'平台','isabm'=>false,'islist'=>true,'type'=>'text'),
// 										'official_notes'=>array('title'=>'注释','isabm'=>false,'islist'=>true,'type'=>'textarea'),
										//'user_remarks'=>array('title'=>'用户备注','isabm'=>false,'islist'=>true,'type'=>'text'),
		
								)
						),
						'zx_tb_matchs'=>array(
								"join"=>"zx_tb_matchs.id = zx_tb_orders.matchid",
								"field"=>array(
										'm_name'	=>array('title'=>'赛事名称','isabm'=>true,'islist'=>true,'type'=>'text'),
										'm_ptype'=>array('title'=>'赛事类型','isabm'=>false,'islist'=>true,'type'=>'select','selectdata'=>array("海外"=>"海外","国内"=>"国内")),
								)
						)
				),
				'where' =>"zx_tb_orders.platform='$platform'",
				's'		=>'SdkNumData',
				'a'		=>'index',
				'perpage'=>'500',
				'designMode'=>'false',
				'order' =>"zx_tb_orders.ctime desc",
				'tpl'=>'Enroll:index',
				// 				'submitBtns'=>array("发送push"=>"./?s=Push&a=Pushusers"),
		);
		$CommonAction	= new CommonV3Action();
		$CommonAction->list_fb($table_cfg);
	}
	
	public function export(){
		$configs = array(
				array("orderid","订单号","o.orderid"),
				array("paystats","订单状态","IF(o.`paystats`=1,'支付完成','未支付') AS paystats"),
				array("orderprice","订单价钱","o.payprice"),
				array("discount","优惠价钱","o.discount"),
				array("m_name","报名赛事","m.m_name"),
				array("platform","下单平台","o.platform"),
				array("ctime","下单时间","o.ctime"),
				array("orderinfo","订单详情",""),
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
		$platform =  session("platform");
		if(htmlspecialchars(addslashes(trim($_POST['exporttype'])))=="all"){			
			$where = "o.platform='$platform'";
		}else{
			$ids = trim($_POST['ids']);
			$where = " o.orderid in ($ids) and o.platform='$platform' ";
		}
	
		$ordersM = new UserOrdersV2Model();
		$export_list = $ordersM->getexportlist($fieldStr,$where);
		EnrollAction::exportexcel($export_list,$title,$needinfo,Date("Y-m-d H:i:s"));
	}
	
	
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