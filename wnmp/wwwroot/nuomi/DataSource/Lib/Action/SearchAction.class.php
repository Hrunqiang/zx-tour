<?php
/**
 * 搜索Action
 * @author hhy
 * @createTime 2016-4-20 下午12:39:53
 */
class SearchAction extends Action {
	
	Public function _initialize(){
		//B('AuthCheck');
	}
	
	/**
	 * 搜索页面
	 */
    public function index(){
    	$this->assign("now",Date("Y-m-d H:i:s"));
    	$this->assign("hotlist",hotlist());
    	$this->display();    	
    }
    
    
    public function test(){
    	header("Content-type:text/html;charset=utf-8;");
    	$search = new SphinxModel();
    	$ws = addslashes($_GET['ws']);
    	$page = intval($_GET['page']);
    	$list = $search->search_test($ws,$page,5);
    	echo "<pre>";
    	var_dump($list);
    }
    

    public function screenv2(){
    	$rs = array("error"=>65535,"msg"=>"未知错误","data"=>"");
    	$search_class_bar = addslashes(trim($_POST["search_class_bar"]));
    	$search_area_bar = addslashes(trim($_POST["search_area_bar"]));
    	$search_state_bar = addslashes(trim($_POST["search_game_state_bar"]));
    	$search_time_bar = addslashes(trim($_POST["search_time_bar"]));
    	$search_type_bar = addslashes(trim($_POST["search_type_bar"]));
    	$search_coming_times = addslashes(trim($_POST["search_coming_times"]));
    	
    	$ws = addslashes(trim($_GET['ws']));
    	$where = "";
    	if($ws){
    		$ws = strtolower($ws);
    		//$where = "(m_name like '%{$ws}%' or m_des like '%{$ws}%' or m_ptype like '%{$ws}%') and ";
    		$where = "  LOWER(m_name) like '%{$ws}%' and ";
    	}
    	$order = "";
    	if($search_area_bar&&$search_area_bar!="地区"){
    		$whereTmp = $search_area_bar=="全部城市"?"m_ptype ='国内'":($search_area_bar=="全部国家"?"m_ptype ='海外'":"(m_city like '%{$search_area_bar}%' or m_country='{$search_area_bar}')");
    		$where .= $whereTmp." and ";
    	}
    	
    	//类型
    	if($search_type_bar&&$search_type_bar!="全部类型"){
    		$whereTmp = "m_mtypes_class ='".$search_type_bar."'";
    		$where .= $whereTmp." and ";
    	}
    	
    	if($search_class_bar&&$search_class_bar!="全部"){
    		switch($search_class_bar){
    			case "超马/越野":
    				$where .= " (m_Mtypes like '%16公里%' or m_Mtypes like '%40公里%' or m_Mtypes like '%35公里%' or m_Mtypes like '%100公里%' or m_Mtypes like '%78公里%' or m_Mtypes like '%70公里%' or m_Mtypes like '%50公里%') and ";
    				break;
    			case "趣味跑":
    				$where .= " (m_Mtypes like '%全马接力%' or m_Mtypes like '%10公里%' or m_Mtypes like '%5公里%' or m_Mtypes like '%挑战赛%' or m_Mtypes like '%乐趣跑%' or m_Mtypes like '%徒步%' or m_Mtypes like '%少年跑%' or m_Mtypes like '%儿童跑%' or m_Mtypes like '%早餐跑%') and ";
    				break;
    			default:
    				$where .= " m_Mtypes like '%{$search_class_bar}%' and ";
    				break;
    		}
    	}
    	
    	if($search_time_bar&&$search_time_bar!="全部"){
    		$where .= " m_GameTime like '{$search_time_bar}%' and ";
    	}
    	
    	if($search_coming_times){
    		switch ($search_coming_times){
    			case "未来三周":
    				$date = Date("Y-m-d H:i:s",strtotime(" +21 days "));
    				$where .= " m_GameTime >NOW() and m_GameTime <='".$date."' and ";
    				break;
    			case "未来三个月":
    				$date = Date("Y-m-d H:i:s",strtotime(" +90 days "));
    				$where .= " m_GameTime >NOW() and m_GameTime <='".$date."' and ";
    				break;
    		}
    	}
    	 
    	switch($search_state_bar){
    		case "准备报名":
    			$where .= " m_placesleft>0 and m_untilTime>NOW() and m_signuptime>NOW() and ";
    			break;
    		case "正在报名":
    			$where .= " m_placesleft>0 and m_untilTime>NOW() and m_signuptime<NOW() and ";
    			break;
    		case "名额紧张":
    			$where .= " m_placesleft <= 20 and m_placesleft>0 and m_untilTime>NOW() and m_signuptime<NOW() and ";
    			break;
    		case "即将截止":
    			$date = Date("Y-m-d　H:i:s",strtotime("+7 days"));
    			$where .= " m_untilTime<'$date' and m_placesleft>0 and m_untilTime>NOW() and m_signuptime<NOW() and ";
    			break;
    		default:
    		//	$where .= " m_releaseTime>0 and m_untilTime>NOW() and ";
    			break;
    	}
    
    	$search = new  MatchInfoModel();
    	$res = array();
    	$hots = $search->searchV2($where,$order,1);
    	$hots = $hots?$hots:array();
    	$list2 = $search->searchV2($where,$order,2);
    	$list2 = $list2 ? $list2 : array();
    	$list3 = $search->searchV2($where,$order,3);
    	$list3 = $list3 ? $list3 : array();
    	$res = array_merge($hots,$list2,$list3);
    	if($res){
    		$goodsM = new GoodsModel();
    		foreach($res as $key  => $val){
    			$res[$key]['info'] = $goodsM->getgoodsByMatchIdV2($val['id']);
    		}
    		$rs['error'] = 0;
    		$rs['msg'] = "ok";
    		$rs['data'] = $res;
    	}else{
    		$rs['error'] = 1;
    		$rs['msg'] = "empty";
    		$rs['data'] = "";
    	}
    	
    	echo json_encode($rs);
    }
    
    public function citys(){
    	$code = trim($_POST['code']);
    	$data = "";
    	if($code){
    		$CTM = new CountriesModel();
    		$data = $CTM->citys($code);
    	}
    	if($data){
    		$rs['error'] = 0;
    		$rs['msg'] = "ok";
    		$rs['data'] = $data;
    	}else{
    		$rs['error'] = 1;
    		$rs['msg'] = "empty";
    		$rs['data'] = $data;
    	}
    	echo json_encode($rs);
    }
    
    public function areas(){
    	$code = trim($_POST['code']);
    	$data = "";
    	if($code){
    		$CTM = new CountriesModel();
    		$data = $CTM->areas($code);
    	}
    	if($data){
    		$rs['error'] = 0;
    		$rs['msg'] = "ok";
    		$rs['data'] = $data;
    	}else{
    		$rs['error'] = 1;
    		$rs['msg'] = "empty";
    		$rs['data'] = "";
    	}
    	echo json_encode($rs);
    }
    
}