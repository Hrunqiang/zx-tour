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
    	$matchM = new MatchInfoModel();
    	$country = $matchM->getMatchCountry();
    	$domestic = '<p class="option_cell option_curr" search-type="ch-city">全部城市</p>';
    	$abroad = '<p class="option_cell option_curr" search-type="ab-country">全部国家</p>';	
    	if($country){
    		$cityarr = $countryarr = array();
    		foreach($country as $key =>$value){
    			if($value['m_ptype']=="国内"){
    				if(!in_array($value['m_city'], $cityarr)){
    					$domestic.='<p class="option_cell" search-type="ch-city">'.$value['m_city'].'</p>';
    					array_push($cityarr,$value['m_city']);
    				}
    			}else{
    				if(!in_array($value['m_country'], $countryarr)){
    					$abroad.='<p class="option_cell" search-type="ab-country">'.$value['m_country'].'</p>';
    					array_push($countryarr,$value['m_country']);
    				}
    			}
    		}
    		$this->assign("domestic",$domestic);
    		$this->assign("abroad",$abroad);
    	}
    	$ws = addslashes($_GET['ws']);
//     	$search = new SphinxModel();

//     	$page = intval($_GET['page']);
//     	$list = $search->search($ws,$page,999);
		$where = "";
		if($ws){
			$where = "(m_name like '%{$ws}%' or m_des like '%{$ws}%' or m_ptype like '%{$ws}%')  and ";
			$list = $matchM->search($where);
		}
    	$this->assign("list",$list);
    	$this->assign("now",Date("Y-m-d H:i:s"));
    	$this->assign("hotlist",hotlist(1,999));
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
    
    /**
     * 关键词搜索
     */
    public function screen(){
    	$rs = array("error"=>65535,"msg"=>"未知错误","data"=>"");
    	$search_order_bar = addslashes(trim($_POST["search_order_bar"]));
    	$search_class_bar = addslashes(trim($_POST["search_class_bar"]));
    	$search_area_bar = addslashes(trim($_POST["search_area_bar"]));
    	$search_state_bar = addslashes(trim($_POST["search_state_bar"]));
    	$ws = addslashes(trim($_GET['ws']));
    	$where = "";
    	if($ws){
    		$where = "(m_name like '%{$ws}%' or m_des like '%{$ws}%' or m_ptype like '%{$ws}%') and ";
    	}	
    	$order = "";
    	if($search_area_bar!="全部地区"){
    		$whereTmp = $search_area_bar=="国内"?"m_ptype ='国内'":($search_area_bar=="海外"?"m_ptype ='海外'":"(m_city='{$search_area_bar}' or m_country='{$search_area_bar}')");
			$where .= $whereTmp." and "; 
    	}
    	 
    	if($search_class_bar!="全部分类"){
	    	switch($search_class_bar){
	    		case "超马/越野":
	    			$where .= " (m_Mtypes like '%16公里%' or m_Mtypes like '%40公里%' or m_Mtypes like '%35公里%' or m_Mtypes like '%100公里%' or m_Mtypes like '%78公里%' or m_Mtypes like '%70公里%' or m_Mtypes like '%50公里%') and ";
	    			break;
	    		case "趣味跑":
	    			$where .= " (m_Mtypes like '%全马接力%' or m_Mtypes like '%10公里%' or m_Mtypes like '%5公里%' or m_Mtypes like '%挑战赛%' or m_Mtypes like '%乐趣跑%' or m_Mtypes like '%徒步%' or m_Mtypes like '%少年跑%' or m_Mtypes like '%儿童跑%' or m_Mtypes like '%早餐跑%') and ";
	    			break;
	    		case "全程":
	    			$where .= " m_Mtypes like '%全马%' and ";
	    			break;
	    		case "半程":
	    			$where .= " m_Mtypes like '%半马%' and ";
	    			break;
	    	}
    	}
    	
    	
    	switch($search_state_bar){
    		case "正在报名":
    			$where .= " m_placesleft>0 and m_untilTime>NOW() and ";
    			break;
    		case "报名结束":
    			$where .= " (m_placesleft<=0 or m_untilTime<=NOW()) and ";
    			break;
    	}
    	
    	switch($search_order_bar){
    		case "推荐":
    			$order = " m_sign desc,m_order desc, ";
    			break;
    		case "时间由近到远":
    			$order = " m_GameTime asc, ";
    			break;
    	}

    	$search = new  MatchInfoModel();
    	$res = $search->search($where,$order,999);
    	if($res){
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
    
    /**
     * 关键词搜索
     */
    public function wd(){
    	$rs = array("error"=>65535,"msg"=>"未知错误","data"=>"");
    	$search_order_bar = addslashes(trim($_POST["search_order_bar"]));
    	$search_class_bar = addslashes(trim($_POST["search_class_bar"]));
    	$search_area_bar = addslashes(trim($_POST["search_area_bar"]));
    	$search_state_bar = addslashes(trim($_POST["search_state_bar"]));
    	$ws = addslashes(trim($_GET['ws']));
    	if($search_area_bar!="全部地区"){
    		$area = $search_area_bar=="国内"?"国内":($search_area_bar=="海外"?"海外":$search_area_bar);
    		$ws .= ",".$area;
    	}
    	
    	if($search_class_bar!="分类"){
    		$class = $search_class_bar;
    		$class = $class=="趣味跑"?"10K":$class;
    		$class = $class=="越野"?"越野":$class;
    		$ws .= ",".$class;
    	}		
    	$search = new SphinxModel();
    	$page = intval($_GET['page']);
    	if(empty($ws)){
    		$rs['error'] = 1;
    		$rs['msg'] = "ws empty";
    	}else{
    		$res = $search->search($ws,$page,999);
    		if($res){
    			$rs['error'] = 0;
    			$rs['msg'] = "ok";
    			$rs['data'] = $res;
    		}else{
    			$rs['error'] = 1;
    			$rs['msg'] = "empty";
    			$rs['data'] = "";
    		}
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