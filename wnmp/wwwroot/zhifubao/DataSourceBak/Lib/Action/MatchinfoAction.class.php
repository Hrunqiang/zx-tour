<?php
/**
 * 赛事详情页
 * @author hhy
 * ctime 2016-3-27
 */
class MatchinfoAction extends Action {
	
	Public function _initialize(){
		//B('AuthCheck');
	}
	
	/**
	 * 赛事详情页
	 */
    public function index(){
    	$id = htmlspecialchars(addslashes(trim($_REQUEST['m_id'])));
    	
    	if(empty($id)) redirect ( '/' );
    	if(isWeixin()){
    		redirect ( 'http://weixin.zx-tour.com/Matchinfo?m_id='.$id."&platform=zx-tour");
    	}
    	
    	$matchM = new MatchInfoModel(); 
    	$res = $matchM->getMatchById($id);
    	$platform = addslashes(trim($_GET['platform']));
    	if($platform){
    		session("SESSION_ZX_PLATFORM",$platform);
    	}
    	if($res[0]){
    		//赛事信息
    		$this->assign("info",$res[0]);
    		session("SESSION_ZX_MATCHID",$id);
    		$date = Date("Y-m-d H:i:s");
    		if($res[0]['m_state']==0&&$res[0]['m_releaseTime']<=$date&&$res[0]['m_offineTime']>=$date&&$res[0]['m_untilTime']>$date){
    			$this->assign("varable",1);
    		}
    		
    		//东马订制链接
    		$date = Date("Y-m-d H:i:s");
    		if($id==287){
    			$this->assign("varable",0);
    		}
    		
    		if($id == 350 && $date<="2016-11-07 16:00:00"){
    			$this->assign("varable",0);
    		}
    		
    		//产品特点
    		$this->assign("featureHTML",$this->getFeatureHTML($res[0]["m_Pfeature"]));
    		//官方认证
			$this->assign("auths",$this->getMatchAuthsHTML($res[0]["m_auth"]));
			
			//套餐
			$goodM = new GoodsModel();
			$meal = $goodM->getgoodsByMatchId($id,0,2);
			$this->assign("meal",json_encode($meal));
			//景区
			$scenicM = new ScenicAreaModel;
			$ScenicList = $scenicM->getScenicaByid($id);
			foreach ($ScenicList as $key => $value) {
				$ScenicList[$key]['s_img'] = unserialize($ScenicList[$key]['s_img']);
			}
			$this->assign("scenicList",$ScenicList);
			//banner
			$this->assign("m_banner",unserialize($res[0]["m_banner"]));
			//热门赛事
			$this->assign("hotlist",hotlist(1,3));
			//是否关注
			$collectM = new MatchCollectModel();
			//当前时间
			$this->assign("now",Date("Y-m-d H:i:s"));
			$uid = session("SESSION_ZX_AUTHID");
			if($uid){
				$this->assign("collection",$collectM->getCollectState($uid,$res[0]["id"]));
				$UO = new UserOrdersModel();
				$order = $UO->getUnCompletOrder($uid,$res[0]["id"]);
				if($order){
					session("SESSION_ZX_ORDERID",$order['orderid']);
					$this->assign('order',$order);
				}
			}
    	}
    	
    	$this->display();
    }
    
    /**
     * 用户关注赛事 - 接口方法
     * 输出  json array("error"=>65535,"msg"=>"未知错误")
     * error:0:成功，1:失败，304：重定向
     * msg 返回信息或重定向地址
     */
    public function collection(){
    	//B('AuthCheck');
    	$rs = array("error"=>65535,"msg"=>"未知错误");
    	$matchid = htmlspecialchars(addslashes(trim($_GET['m_id'])));
    	if(empty($matchid)){
    		$rs['error'] = 1;
    		$rs['msg'] = "参数错误！";
    	}else{
    		//验证是否登录  	
    		$uid = session("SESSION_ZX_AUTHID");	
    		if($uid){
	    		$collectM = new MatchCollectModel();
	    		$res = $collectM->changeCollectState($uid, $matchid);
	    		if($res){
	    			$rs['error'] = 0;
	    			$rs['msg'] = $res;
	    		}else{
	    			$rs['error'] = 1;
	    			$rs['msg'] = "系统错误！";
	    		}
    		}else{
    			session("SESSION_ZX_HISTORYURL","/Matchinfo?m_id=".$matchid);
    			$rs['error'] = 304;
    			$rs['msg'] = "/Account/login";
    		}
    	}
    	echo json_encode($rs);
    }
    
    /**
     * 生成赛事产吕特点(返回生成HTML)
     * @param string $str
     * @return string 
     */
    public function getFeatureHTML($str){
    	if(empty($str)) return "";
    	//$str= "1|2|3|4|5|6|7";
    	$featureConfig = array("独家授权","优质赛事","官方合作","特色比赛","专业领队","跑者保险","跑步礼包");
    	$template = '<div class="flex_1 featureIcon_%s" data-i="%s"><div><i class="halficon"></i></div><p>%s</p></div>';
    	$arr = explode("|", $str);
    	$html = '';
    	foreach ($arr as $key=>$val){
    		if(empty($val)) continue;
    		if($key>3) break;
    		$html.= sprintf($template,$val,$val,$featureConfig[$val-1]);
    	}
    	if($html){
    		return '<div class="match_feature flexBox">'.$html.'</div>';
    	}else{
    		return "";
    	}
    }
    
    /**
     * 生成赛事官方认证(返回生成HTML)
     * @param unknown_type $str
     * @return string
     */
    public function getMatchAuthsHTML($str){
    	if(empty($str)) return "";
    	$arr = explode("|", $str);
    	$template = '<span class="type_%s">%s</span>';
    	$html = "";
    	foreach ($arr as $key=>$val){
    		if(empty($val)) continue;
    		if($key>2) break;
    		$parem = explode("_", $val);
    		$html.= sprintf($template,$parem[1],$parem[0]);
    	}
    	return $html;
    }
    
    
    public function getTrip(){
    	$rs = array("error"=>65535,"msg"=>"未知错误");
    	$mealid = htmlspecialchars(addslashes(trim($_GET['m_id'])));
    	if(empty($mealid)){
    		$rs['error'] = 1;
    		$rs['msg'] = "参数错误！";
    	}else{
	    	$collectM = new MealTripModel();
	    	$res = $collectM->getTripList($mealid);
	    	if($res){
	    		foreach($res as $key=>$val){
	    			if($val['trip_img']){
	    				$res[$key]['trip_img'] = unserialize($val['trip_img']);
	    			}
	    		}
	    		$rs['error'] = 0;
	    		$rs['msg'] = "ok";
	    		$rs['data'] = $res;
	    	}else{
	    		$rs['error'] = 1;
	    		$rs['msg'] = "系统错误！";
	    	}
    	}
    	echo json_encode($rs);
    	
    }
    
    public function getcourse(){
    	$rs = array("error"=>65535,"msg"=>"未知错误");
    	$id = htmlspecialchars(addslashes(trim($_GET['m_id'])));
    	if(empty($id)){
    		$rs['error'] = 1;
    		$rs['msg'] = "参数错误！";
    	}else{
    		$goodM = new GoodsModel();
			$res = $goodM->getDataByTypeId($id,1);
    		if($res){
    			$rs['error'] = 0;
    			$rs['msg'] = "ok";
    			$rs['data'] = $res;
    		}else{
    			$rs['error'] = 1;
    			$rs['msg'] = "系统错误！";
    		}
    	}
    	echo json_encode($rs);
    	 
    }
    
    
}