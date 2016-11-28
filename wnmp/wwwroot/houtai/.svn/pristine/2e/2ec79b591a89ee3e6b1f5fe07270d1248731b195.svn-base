<?php
/*
 * 报名
 * */
class MatchV2Action extends Action {
	
	public function _initialize(){
		B('AuthCheck');
	}
	
	public function index(){
		$order = " m_sign desc,m_order desc,id desc ";
		$where = "";
		$ordertype = htmlspecialchars(addslashes(trim($_GET['order'])));
		if($ordertype=="gtime"){
			$order = " m_GameTime asc,m_sign desc,m_order desc,id desc ";
			//$where = " m_GameTime>NOW() ";
		}elseif($ordertype=="untiltime"){
			$order = " m_untilTime asc,m_sign desc,m_order desc,id desc ";
			//$where = " m_GameTime>NOW() ";
		}
		$table_cfg	= array(
				'field'=>array(
						'id'	=>array('title'=>'id','isabm'=>true,'islist'=>true,'ismain'=>true,),
						'm_GameTime'=>array('title'=>'比赛时间','isabm'=>true,'islist'=>true,'type'=>'text'),
						'm_name'	=>array('title'=>'赛事名','isabm'=>false,'islist'=>true,'type'=>'text',),											
 						'm_ptype'=>array('title'=>'赛事类型','isabm'=>false,'islist'=>true,'type'=>'select','selectdata'=>array("海外"=>"海外","国内"=>"国内")),
						'm_untilTime'=>array('title'=>'截至时间','isabm'=>false,'islist'=>true,'type'=>'text'),
						'm_placesleft'=>array('title'=>'名额库存','isabm'=>false,'islist'=>true),
						'm_order'=>array('title'=>'排序','isabm'=>false,'islist'=>true),
						'm_sign'=>array('title'=>'推荐','isabm'=>false,'islist'=>true,'type'=>'select','selectdata'=>array("0"=>"未推荐","1"=>"推荐")),
						'm_repeat_reg_able'=>array('title'=>'可重复报名','isabm'=>false,'islist'=>true,'type'=>'select','selectdata'=>array("0"=>"不允许","1"=>"允许")),
						//'m_untilTime'=>array('title'=>'报名截至时间','isabm'=>true,'islist'=>true,'type'=>'text'),
 						'm_GameTime'=>array('title'=>'比赛时间','isabm'=>true,'islist'=>true,'type'=>'text'),
						'm_state'=>array('title'=>'状态','isabm'=>false,'islist'=>true,'type'=>'select','selectdata'=>array("0"=>"上线中","1"=>"已下线")),
						'm_attentions'=>array('title'=>'赛事注意事项','isabm'=>true,'islist'=>true,'type'=>'textarea'),
				),
				'where'=>$where,
				'table'	=>'zx_tb_matchs',
				'order' =>$order,
				'utimeField'	=>'m_utime',
				's'		=>'IosFeedbac',
				'a'		=>'index',
				'perpage'=>'30',
				'designMode'=>'false',
				'tpl'=>'MatchV2:index',
				// 				'submitBtns'=>array("发送push"=>"./?s=Push&a=Pushusers")
		);
		$CommonAction	= new CommonAction();
		$CommonAction->list_fb($table_cfg);
	}
	
	public function matchinfo(){
		$orderid = htmlspecialchars(addslashes(trim($_GET['orderid'])));
		$enrollM = new UserOrdersModel();
		$info = $enrollM->getorderinfo($orderid);
		$orderinfoM = new UserOrdersInfoModel;
		$list = $orderinfoM->getorderinfo($orderid);
// 		var_dump($list);
 		$this->assign("info",$info[0]);
		$this->assign("list",$list);
		$this->display();
	}
	
	public function info(){
		$id = htmlspecialchars(addslashes(trim($_GET['id'])));
		$ac = htmlspecialchars(addslashes(trim($_GET['ac'])));
		$MatchM	= new MatchV2Model();
		switch($ac){
			case "edit":
				if($_POST){
					if(empty($_POST['id'])){
						throw new Exception('类名称不能空!');
					}else{
						$data['m_name']			= addslashes(trim($_POST['m_name']));
						$data['m_enName']		= addslashes(trim($_POST['m_enName']));
						$data['m_GameTime']		= addslashes(trim($_POST['m_GameTime']));
						$data['m_untilTime']	= addslashes(trim($_POST['m_untilTime']));
						$data['m_des']			= addslashes(trim($_POST['m_des']));
						$data['m_special']			= addslashes(trim($_POST['m_special']));
						$data['m_info']			= addslashes(trim($_POST['m_info']));
						$data['m_rules']			= trim($_POST['m_rules']);
						$data['m_route']		= trim($_POST['m_route']);
						$data['m_plat_num']		= addslashes(trim($_POST['m_plat_num']));
						$data['m_city']			= addslashes(trim($_POST['m_city']));
						$data['m_area']			= addslashes(trim($_POST['m_area']));
						$data['m_routeImg']			= addslashes(trim($_POST['m_routeImg']));
						$data['m_ptype']		= addslashes(trim($_POST['m_ptype']));
						$data['m_enterMode']			= addslashes(trim($_POST['m_enterMode']));
						$data['m_sign']			= addslashes(trim($_POST['m_sign']));
						$data['m_places']		= htmlspecialchars(addslashes(trim($_POST['m_places'])));
						$data['m_places'] = $data['m_places']!==""?$data['m_places']:0;
						$data['m_placesleft']			= htmlspecialchars(addslashes(trim($_POST['m_placesleft'])));
						$data['m_placesleft'] = $data['m_placesleft']!==""?$data['m_placesleft']:0;
						$data['m_enterurl']			= addslashes(trim($_POST['m_enterurl']));
						$data['m_state']			= addslashes(trim($_POST['m_state']));
						$data['m_isshow']			= addslashes(trim($_POST['m_isshow']));
						$data['m_repeat_reg_able']			= addslashes(trim($_POST['m_repeat_reg_able']));
						$data['m_img']			= addslashes(trim($_POST['m_img']));
						$data['m_banner'] = $this->myserialize($_POST['m_banner']);
						$data['m_icon']			= addslashes(trim($_POST['m_icon']));
						$data['m_order']= addslashes(trim($_POST['m_order']))?addslashes(trim($_POST['m_order'])):1000;
						$data['m_country']			= addslashes(trim($_POST['m_country']));
						$data['m_utime']			= date("Y-m-d H:i:s");
						$data['m_releaseTime']			= !empty($_POST['m_releaseTime'])?addslashes(trim($_POST['m_releaseTime'])):date("Y-m-d H:i:s");
						$data['m_offineTime']			= !empty($_POST['m_offineTime'])?addslashes(trim($_POST['m_offineTime'])):"2116-01-01 00:00:00";
						$data['lastupdater']	= session('user');
						$data['m_Mtypes']   =$_POST['m_Mtypes']?implode("|", $_POST['m_Mtypes']):"";
						$data['m_auth']    =$_POST['m_auth']?implode("|", $_POST['m_auth']):"";
						$data['m_Pfeature']  =$_POST['m_Pfeature']?implode("|", $_POST['m_Pfeature']):"";
						
						$data['m_attentions']			= addslashes(trim($_POST['m_attentions']));
						
						$id		= addslashes(trim($_POST['id']));		
						if(empty($id)){
							throw new Exception('empty id');
						}
						$rs	= $MatchM->data($data)->where("id=$id")->save();
						
					}
					if($rs===false){
						throw new Exception('运行失败。!');
					}
					message('操作成功。','?s=MatchV2');
				}
				$id	= addslashes(trim($_GET['id']));
				if(empty($id)){
					message('修改出问题,请传修改的id。','?s=MatchV2');
				}
				$data = $MatchM->getmatchsinfo($id);
				if($data['m_banner']){
					$data['m_banner'] = unserialize($data['m_banner']);
				}
				$this->assign("m_plat_num",$data['m_plat_num']);
				if($data['m_Pfeature']){
					$data['m_Pfeature'] = explode("|",$data['m_Pfeature']);
				}
				$ClassInfObj	= new ClassInfoModel();
				$matchtype = $ClassInfObj->getlistBysname("zx_matchtype");
				$this->assign("matchtype",$matchtype);
				$this->assign( 'data', $data );
				$this->assign( 'ac', $ac );
				$this->display();
				break;
			case "add":
				if($_POST){
					$data['m_name']			= addslashes(trim($_POST['m_name']));
					$data['m_enName']		= addslashes(trim($_POST['m_enName']));
					$data['m_GameTime']		= addslashes(trim($_POST['m_GameTime']));
					$data['m_untilTime']			= addslashes(trim($_POST['m_untilTime']));
					$data['m_des']			= addslashes(trim($_POST['m_des']));
					$data['m_special']			= trim($_POST['m_special']);
					$data['m_info']			= trim($_POST['m_info']);
					$data['m_rules']		= trim($_POST['m_rules']);
					$data['m_route']		= trim($_POST['m_route']);
					$data['m_plat_num']		= addslashes(trim($_POST['m_plat_num']));
					$data['m_city']			= addslashes(trim($_POST['m_city']));
					$data['m_area']			= addslashes(trim($_POST['m_area']));
					$data['m_routeImg']			= addslashes(trim($_POST['m_routeImg']));
					$data['m_ptype']		= addslashes(trim($_POST['m_ptype']));
					$data['m_enterMode']			= addslashes(trim($_POST['m_enterMode']));
					$data['m_sign']			= addslashes(trim($_POST['m_sign']));
					$data['m_places']		= addslashes(trim($_POST['m_places']));
					$data['m_places'] = $data['m_places']!==""?$data['m_places']:99999;
					$data['m_placesleft']			= addslashes(trim($_POST['m_placesleft']));
					$data['m_placesleft'] = $data['m_placesleft']!==""?$data['m_placesleft']:99999;
					$data['m_enterurl']			= addslashes(trim($_POST['m_enterurl']));
					$data['m_state']			= addslashes(trim($_POST['m_state']));
					$data['m_isshow']			= addslashes(trim($_POST['m_isshow']));
					$data['m_repeat_reg_able']			= addslashes(trim($_POST['m_repeat_reg_able']));
					$data['m_img']			= addslashes(trim($_POST['m_img']));
					$data['m_banner'] = $this->myserialize($_POST['m_banner']);
					$data['m_icon']			= addslashes(trim($_POST['m_icon']));
					$data['m_order']= addslashes(trim($_POST['m_order']))?addslashes(trim($_POST['m_order'])):1000;
					$data['m_country']			= addslashes(trim($_POST['m_country']));
					$data['m_utime']			= $data['m_ctime'] = $data['m_signuptime'] = date("Y-m-d H:i:s");
					$data['m_releaseTime']			= !empty($_POST['m_releaseTime'])?addslashes(trim($_POST['m_releaseTime'])):date("Y-m-d H:i:s");
					$data['m_offineTime']			= !empty($_POST['m_offineTime'])?addslashes(trim($_POST['m_offineTime'])):"2116-01-01 00:00:00";
					$data['lastupdater']	= session('user');
					$data['m_Mtypes']   =$_POST['m_Mtypes']?implode("|", $_POST['m_Mtypes']):"";
					$data['m_auth']    =$_POST['m_auth']?implode("|", $_POST['m_auth']):"";
					$data['m_Pfeature']  =$_POST['m_Pfeature']?implode("|", $_POST['m_Pfeature']):"";

					$data['m_attentions']			= addslashes(trim($_POST['m_attentions']));
					
					$rs	= $MatchM->add($data);
					;
					if($rs===false){
						throw new Exception('添加赛事失败。!');
					}else{
						$goodsM = new  GoodsV2Model();
						$goodsM->createMatchGoods($rs);
					}
					message('操作成功。','?s=MatchV2');
				}
				$ClassInfObj	= new ClassInfoModel();
				$matchtype = $ClassInfObj->getlistBysname("zx_matchtype");
				$this->assign("matchtype",$matchtype);
				$this->assign( 'ac', $ac );
				$this->display();
				break;
		}
	}
	
	public function goodsinfo(){
		$id = htmlspecialchars(addslashes(trim($_GET['id'])));
		$class	= new GoodsV2Model();
		
		$matchM = new MatchV2Model();
		$match = $matchM->getmatchsinfo($id);
		
		$html	= $class->dafenglei_arr(0,0,$id);
		
		$this->assign( 'html', $html );
		$this->assign( 'match', $match);
		$this->assign( 'ac', 'list' );
		$this->display('update');
	}
	
	public function goodscontent(){
		
		$ac = htmlspecialchars(addslashes(trim($_GET['ac'])));
		$match = htmlspecialchars(addslashes(trim($_GET['match'])));
		$goodsM = new GoodsV2Model();
		switch ($ac){
			case "edit":
				if($_POST){
						$id		= htmlspecialchars(addslashes(trim($_POST['id'])));
						if(empty($id)){
							throw new Exception('empty id');
						}
						$info['g_name'] = addslashes(trim($_POST['g_name']));
						$info['g_currprice'] = addslashes(trim($_POST['g_currprice']));
						$info['g_currprice'] = $info['g_currprice']!==""?$info['g_currprice']:0;
						$info['g_price'] = addslashes(trim($_POST['g_price']));
						$info['g_price'] = $info['g_price']!==""?$info['g_price']:$info['g_currprice'];
						$info['g_stock'] = addslashes(trim($_POST['g_stock']));
						$info['g_stock'] = $info['g_stock']!==""?$info['g_stock']:0;
						$info['g_plat_num']		= addslashes(trim($_POST['g_plat_num']));
						$info['g_stockleft'] = addslashes(trim($_POST['g_stockleft']));
						$info['g_stockleft'] = $info['g_stockleft']!==""?$info['g_stockleft']:0;
						$info['g_singleprice'] = addslashes(trim($_POST['g_singleprice']));
						$info['g_des'] = addslashes(trim($_POST['g_des']));
						//$info['g_priceinfo'] = htmlspecialchars(addslashes(trim($_POST['g_priceinfo'])));
						$info['g_priceinfo'] = trim($_POST['g_priceinfo']);
						$info['g_priceinfowithout'] = trim($_POST['g_priceinfowithout']);
						$info['g_order'] = addslashes(trim($_POST['g_order']))?addslashes(trim($_POST['g_order'])):1000;
						$info['g_releaseTime']			= !empty($_POST['g_releaseTime'])?addslashes(trim($_POST['g_releaseTime'])):date("Y-m-d H:i:s");
						$info['g_offineTime']			= !empty($_POST['g_offineTime'])?addslashes(trim($_POST['g_offineTime'])):"2116-01-01 00:00:00";
						$info['g_tips']	= addslashes(trim($_POST['g_tips']));
						$info['g_tips']	= $info['g_tips']==""&&addslashes(trim($_POST['g_type']))==2?"早鸟价":$info['g_tips'];	
						$rs	= $goodsM->data($info)->where("id=$id")->save();

					if($rs===false){
						throw new Exception('运行失败。!');
					}

					message('操作成功。','?s=MatchV2&a=goodsinfo&id='.$match);
				}
				$id = htmlspecialchars(addslashes(trim($_GET['id'])));
				if(empty($id)){
					throw new Exception('找不到对应的套餐！');
				}
				$data = $goodsM->getmeal_info($id);
				$this->assign("g_plat_num",$data['g_plat_num']);
				$this->assign( 'data', $data );
				break;
			case "add":
				if($_POST){
					$info['g_pid'] = addslashes(trim($_POST['g_pid']));
					$info['g_mid'] = addslashes(trim($_POST['g_mid']));
					$info['g_isgoods'] = addslashes(trim($_POST['g_isgoods']));
					$info['g_type'] = addslashes(trim($_POST['g_type']));
					$info['g_name'] = addslashes(trim($_POST['g_name']));
					$info['g_currprice'] = addslashes(trim($_POST['g_currprice']));
					$info['g_currprice'] = $info['g_currprice']!==""?$info['g_currprice']:0;
					$info['g_price'] = addslashes(trim($_POST['g_price']));
					$info['g_price'] = $info['g_price']!==""?$info['g_price']:$info['g_currprice'];
					$info['g_stock'] = addslashes(trim($_POST['g_stock']));
					$info['g_plat_num']		= addslashes(trim($_POST['g_plat_num']));
					$info['g_stock'] = $info['g_stock']!==""?$info['g_stock']:999999;
					$info['g_stockleft'] = addslashes(trim($_POST['g_stockleft']));
					$info['g_stockleft'] = $info['g_stockleft']!==""?$info['g_stockleft']:999999;
					$info['g_singleprice'] = addslashes(trim($_POST['g_singleprice']));
					$info['g_des'] = addslashes(trim($_POST['g_des']));
					$info['g_priceinfo'] = trim($_POST['g_priceinfo']);
					$info['g_priceinfowithout'] = trim($_POST['g_priceinfowithout']);
					$info['g_order'] = addslashes(trim($_POST['g_order']))?addslashes(trim($_POST['g_order'])):1000;
					$info['g_releaseTime']			= !empty($_POST['g_releaseTime'])?addslashes(trim($_POST['g_releaseTime'])):date("Y-m-d H:i:s");
					$info['g_offineTime']			= !empty($_POST['g_offineTime'])?addslashes(trim($_POST['g_offineTime'])):"2116-01-01 00:00:00";
					
					$info['g_tips']	= addslashes(trim($_POST['g_tips']));
					$info['g_tips']	= $info['g_tips']==""&&addslashes(trim($_POST['g_type']))==2?"早鸟价":$info['g_tips'];					
					$rs	= $goodsM->add($info);
					if($rs===false){
						throw new Exception('运行错误!添加失败！');
					}
					$copy = intval(trim($_POST['copy']));
					for($i = 0;$i<$copy;$i++){
						$rs	= $goodsM->add($info);
					}
					message('操作成功。','?s=MatchV2&a=goodsinfo&id='.$match);
				}
				$data['g_pid'] = htmlspecialchars(addslashes(trim($_GET['pid'])));
				$data['id'] = htmlspecialchars(addslashes(trim($_GET['id'])));
				$data['g_type']= htmlspecialchars(addslashes(trim($_GET['type'])));
				$data['g_isgoods'] = ($data['g_type']==2 && $data['g_pid']==0)?0:1;
				$data['g_mid'] = htmlspecialchars(addslashes(trim($_GET['match'])));
				$this->assign( 'data', $data);
				break;
		}
		
		$this->assign( 'ac', $ac );
		$this->display('update');
	}
	
	public function trip(){		
		$ac = htmlspecialchars(addslashes(trim($_GET['ac'])));
		$tripM = new  MealTripModel;
		$mealid = htmlspecialchars(addslashes(trim($_GET['mealid'])));
		$matchid = htmlspecialchars(addslashes(trim($_GET['matchid'])));
		$this->assign("matchid",$matchid);
		switch($ac){
			case "list":					
				if(empty($mealid)){
					die("未找到对应的套餐 ！");
				}
				$list = $tripM->getTripList($mealid);
				$this->assign("mealid",$mealid);
				$this->assign("list",$list);
				break;
			case "add":
				if($_POST){
					$data['meal_id'] = htmlspecialchars(addslashes(trim($_POST['meal_id'])));
					$data['trip_title'] = htmlspecialchars(addslashes(trim($_POST['trip_title'])));
					if(!$data['meal_id'] ||!$data['trip_title']){
						throw new Exception('empty id or name is null ');
					}
					$data['trip_des'] = addslashes(trim($_POST['trip_des']));
					$data['trip_date'] = addslashes(trim($_POST['trip_date']));
					$data['trip_icon'] = addslashes(trim($_POST['trip_icon']));
					$data['trip_img'] = $this->myserialize($_POST['trip_img']);
					$data['ctime'] = Date("Y-m-d H:i:s");
					$rs = $tripM->add($data);
					if($rs===false){
						throw new Exception('添加失败！');
					}
					message('操作成功。','?s=MatchV2&a=trip&ac=list&matchid='.$matchid.'&mealid='.$data['meal_id']);
				}
				$mealid = htmlspecialchars(addslashes(trim($_GET['mealid'])));
				$this->assign("mealid",$mealid);
				break;
			case "edit":
				if($_POST){
					$id = htmlspecialchars(addslashes(trim($_POST['id'])));
					if(!$id){
						throw new Exception('无效id！');
					}
					$data['trip_title'] = addslashes(trim($_POST['trip_title']));
					$data['trip_des'] = addslashes(trim($_POST['trip_des']));
					$data['trip_date'] = addslashes(trim($_POST['trip_date']));
					$data['trip_icon'] = addslashes(trim($_POST['trip_icon']));
					$data['trip_img'] = $this->myserialize($_POST['trip_img']);

					$rs = $tripM->data($data)->where("id=$id")->save();
					if($rs===false){
						throw new Exception('修改失败！');
					}
					message('操作成功。','?s=MatchV2&a=trip&ac=list&matchid='.$matchid.'&mealid='.$mealid);
				}
				$id = htmlspecialchars(addslashes(trim($_GET['id'])));
				$data = $tripM->gettripinfo($id);
				if($data['trip_img']){
					$data['trip_img'] = unserialize($data['trip_img']);
				}
				$this->assign("mealid",$mealid);
				$this->assign("data",$data);
				break;
			case "del":
				$id = $_REQUEST['id'];
				if(is_array($id)){
					$id = implode(",", $id);
				}
				$id = htmlspecialchars(addslashes(trim($id)));
				if(!$id){
					throw new Exception('添加失败！');
				}
				$rs = $tripM->where(" id in ($id)")->delete();
				message('删除成功。','?s=MatchV2&a=trip&ac=list&matchid='.$matchid.'&mealid='.$mealid);
				break;
		}
			
		$this->assign("ac",$ac);
		$this->display();
	}
	
	public function scenicarea(){
		$ac = htmlspecialchars(addslashes(trim($_GET['ac'])));
		$tripM = new  MatchScenicareaModel;
		switch($ac){
			case "list":
				$mid = htmlspecialchars(addslashes(trim($_GET['mid'])));				
				if(empty($mid)){
					die("未找到对应的套餐 ！");
				}
				$list = $tripM->getList($mid);
				$this->assign("mid",$mid);
				$this->assign("list",$list);
				break;
			case "add":
				if($_POST){
					$data['mid'] = htmlspecialchars(addslashes(trim($_POST['mid'])));
					$data['s_name'] = htmlspecialchars(addslashes(trim($_POST['s_name'])));
					if(!$data['mid'] ||!$data['s_name']){
						throw new Exception('empty id or name is null ');
					}
					$data['s_des'] = addslashes(trim($_POST['s_des']));
					$data['s_img'] = $this->myserialize($_POST['s_img']);
					$rs = $tripM->add($data);
					if($rs===false){
						throw new Exception('添加失败！');
					}
					message('操作成功。','?s=MatchV2&a=scenicarea&ac=list&mid='.$data['mid']);
				}
				$mealid = htmlspecialchars(addslashes(trim($_GET['mid'])));
				$this->assign("mid",$mealid);
				break;
			case "edit":
				if($_POST){
					$id = htmlspecialchars(addslashes(trim($_POST['id'])));
					if(!$id){
						throw new Exception('无效id！');
					}
					$data['s_title'] = addslashes(trim($_POST['s_title']));
					$data['s_des'] = addslashes(trim($_POST['s_des']));
					$data['s_img'] = $this->myserialize($_POST['s_img']);
	
					$rs = $tripM->data($data)->where("id=$id")->save();
					if($rs===false){
						throw new Exception('修改失败！');
					}
					message('操作成功。','?s=MatchV2&a=scenicarea&ac=edit&id='.$id);
				}
				$id = htmlspecialchars(addslashes(trim($_GET['id'])));
				$data = $tripM->gettripinfo($id);
				if($data['s_img']){
					$data['s_img'] = unserialize($data['s_img']);
				}
				$this->assign("data",$data);
				break;
			case "del":
				$id = $_REQUEST['id'];
				$mid = htmlspecialchars(addslashes(trim($_GET['mid'])));
				if(is_array($id)){
					$id = implode(",", $id);
				}
				$id = htmlspecialchars(addslashes(trim($id)));
				if(!$id){
					throw new Exception('添加失败！');
				}
				$rs = $tripM->where(" id in ($id)")->delete();
				message('删除成功。','?s=MatchV2&a=scenicarea&ac=list&mid='.$mid);
				break;
		}
			
		$this->assign("ac",$ac);
		$this->display();
	}
	
	public function myserialize($arr){
		if(!is_array($arr)) return "";
		foreach ($arr as $key=>$val){
			$arr[$key] = htmlspecialchars(addslashes(trim($arr[$key])));
			if(empty($arr[$key])){
				unset($arr[$key]);
			}
		}
		return $arr?serialize($arr):"";
	}
	
	public function addmatch(){
		$match = htmlspecialchars(addslashes(trim($_GET['match'])));
		$rs = array("error"=>65535,"msg"=>"未知错误！");
		if($match){
			$M = new GoodsModel();
			$where['goodspid'] = 0;
			$where['goodscls'] = $match;
			if($M->where($where)->find()){
				$rs = array("error"=>1,"msg"=>"已存在此赛事！！！".$M->getLastSql());
			}else{
				$where['ctime'] = $where['utime'] = Date("Y-m-d H:i:s");
				if($M->add($where)===false){
					$rs = array("error"=>1,"msg"=>"系统错误，请重试！");
				}else{
					$rs = array("error"=>0,"msg"=>"ok");
				}
			}
		}else{
			$rs = array("error"=>1,"msg"=>"赛事名字不能为空！！！！");
		}
		echo json_encode($rs);
	}
		
	public function edit_beizhu(){
		$data['id']= htmlspecialchars(addslashes(trim($_GET['id'])));
		$data['beizhu']= htmlspecialchars(addslashes(trim($_GET['info'])));
		$M	= new GoodsModel();
		if($M->table('zx_tb_goods')->where("id = ".$data['id'])->find()){
			$saveres = $M->query("update zx_tb_goods set g_des = '".$data['beizhu']."' where id = ".$data['id']);
			if($saveres!==false){
				$rs['error'] = 0;
				$rs['msg'] = "ok";
				$rs['sql'] =$M->getLastSql();
			}else{
				$rs['error'] = 1;
				$rs['msg'] = "修改失败！!";
			}
		}else{
			$rs['error'] = 1;
			$rs['msg'] = "备注不存在！";
		}
		echo json_encode($rs);
	}
	
	public function edit_matchname(){
		$data['match_id']= htmlspecialchars(addslashes(trim($_GET['match_id'])));
		$data['name']= htmlspecialchars(addslashes(trim($_GET['name'])));
		$M	= new GoodsModel();
		if($M->table('mls_goods')->where("id = ".$data['match_id'])->find()){
			$saveres = $M->query("update `mls_goods` set goodscls = '".$data['name']."' where id = ".$data['match_id']);
			if($saveres!==false){
				$rs['error'] = 0;
				$rs['msg'] = "ok";
			}else{
				$rs['error'] = 1;
				$rs['msg'] = "修改失败！!";
			}
		}else{
			$rs['error'] = 1;
			$rs['msg'] = "没有相应赛事";
		}
		echo json_encode($rs);
	}
	
	/**
	 * @param unknown_type $id
	 * @throws Exception
	 */
	public function del(){
		try{
			$mod_class	= new GoodsV2Model();
			$id	= (empty($id))?$_GET['id']:$id;
			$match	= htmlspecialchars(addslashes(trim($_GET['match'])));
	
			if(empty($id)){throw new Exception('要删除的id不能为空。');}
			$data['g_state'] = 1;
			$data['utime'] = Date("Y-m-d H:i:s");
			$rs = $mod_class->where("id=$id")->save($data);
			if($rs===false){
				throw new Exception('删除失败。');
			}
			message('操作成功。','?s=MatchV2&a=goodsinfo&id='.$match);
		}catch(Exception $e){
			message('操作失败!!!!!!!!!!!!','?s=MatchV2&a=goodsinfo&id='.$match);
		}
	}
	
	public function copy(){
		
		$id	= (empty($id))?$_GET['id']:$id;
		$match	= htmlspecialchars(addslashes(trim($_GET['match'])));

		if(empty($id)){throw new Exception('要复制的id不能为空。');}
		if($this->copyall($id)!==false){
			message('操作成功。','?s=MatchV2&a=goodsinfo&id='.$match);
		}else{
			throw new Exception('复制失败。');
		}
	}
	
	public function copyall($id,$pid){
		if(empty($id)) return false;
		$mod_class	= new GoodsV2Model();
		$data = $mod_class->where("id=$id")->find();
		if($data){	
			unset($data['id']);
			if($pid) $data['g_pid'] = $pid;
			$rs = $mod_class->add($data);
			if($rs!==false){
				//套餐复制行程
				if($data['g_isgoods']==1&&$data['g_type']==2){
					$this->copytrip($rs,$id);
				}
				//复制子类
 				$child = $mod_class->where("g_pid=$id")->select();
				if($child){
					foreach ($child as $key=>$val){
						$this->copyall($val['id'],$rs);
					}
				}
				return true;
			}else{
				return false;
			}	
		}else{
			return false;
		}
	}
	
	public  function  copytrip($id,$copyfrom){
		if(empty($id)||empty($copyfrom)) return  false;
		$tripM = new  MealTripModel();
		$list = $tripM->getTripList($copyfrom);
		if($list){
			foreach ($list as $key=>$val){
				unset($val['id']);
				$val['meal_id'] = $id;
				$val['ctime'] = Date("Y-m-d H:i:s");
				$tripM->add($val);
			}
		}
	}
	
	public function getmatchedNum(){
		$rs = array("error"=>0,"msg"=>"未知错误","data"=>"");
		$id = htmlspecialchars(addslashes(trim($_GET['id'])));
		if(empty($id)){
			$rs['error']=1;
			$rs['msg']="未知赛事";
		}else{
			$ordersM = new UserOrdersV2Model();
			$res = $ordersM->getmatchedNum($id);
			if($res!==false){
				$rs['error']=0;
				$rs['msg']="ok";
				$rs['data']=$res;
			}else{
				$rs['error']=1;
				$rs['msg']="查询失败";
			}
		}
		echo json_encode($rs);
	}
	
	public function getlist(){
		$MatchM	= new MatchV2Model();
		$list = $MatchM->getmatchsname();
		$id = htmlspecialchars(addslashes(trim($_GET['id'])));
		$idlist = explode(",", $id);
		$gn_html = $hw_html = "";
		foreach ($list as $key=>$val){
			if(in_array($val['id'], $idlist)){
				$str = '<label for="match'.$key.'" style="width:200px;display: inline-block;"><input type="checkbox" name="match[]" value = "'.$val['id'].'" checked id="match'.$key.'">'.$val['m_name'].'</label>';
			}else{
				$str = '<label for="match'.$key.'" style="width:200px;display: inline-block;"><input type="checkbox" name="match[]" value = "'.$val['id'].'" id="match'.$key.'">'.$val['m_name'].'</label>';
			}
			
			
			if($val['m_ptype']=="海外"){
				$hw_html .= $str;
			}else{
				$gn_html .= $str;
			}
		}
		$html = '<p>海外赛事</p>'.$hw_html.'<p>国内赛事</p>'.$gn_html;
		$rs['error'] = 0;
		$rs['data'] = $html;
		echo json_encode($rs);
	}
	
	/**
	 * 克隆比赛
	 */
	public function  clone_match(){
		try{
			$id = htmlspecialchars(addslashes(trim($_GET['id'])));
			$state = htmlspecialchars(addslashes(trim($_GET['state'])));
			if(empty($id)){
				throw new Exception("无效id!!!!!!");
			}
			$MatchM	= new MatchV2Model();
			$info = $MatchM->where("id=$id")->find();
			if(!$info){
				throw new Exception("未找到相关赛事!!!!!!");
			}
			//重置属性
			unset($info['id']);
			$info['m_state'] = 1;
			$info['m_sign'] = 0;
			$info['m_sign_nuomi'] = 0;
			$info['m_name'] = $info['m_name']."(克隆)";
			$MatchM->startTrans();
			$newid = $MatchM->add($info);
			if(!$newid){
				$MatchM->rollback();
				throw new Exception("克隆失败，失败原因：赛事创建!!!!!!");
			}
				
			//克隆套餐
			if(!$this->clone_goods($id,0,$newid,0)){
				$MatchM->rollback();
				throw new Exception("克隆失败，失败原因：套餐创建!!!!!!");
			}
			$MatchM->commit();
			message("克隆成功！！",'?s=MatchV2');
		}catch(Exception $e){
			message($e->getMessage(),'?s=MatchV2');
		}
	}
	
	public function clone_goods($fromid,$pid,$mid,$new_pid){
		if(empty($fromid)||empty($mid)) return false;
		$mod_class	= new GoodsV2Model();
		$list = $mod_class->where("g_pid=$pid and g_mid = $fromid")->select();
		if($list!==false){
			foreach($list as $key=>$val){
				$id = $val["id"];
				unset($val["id"]);
				$val["g_mid"] = $mid;
				$val["g_pid"] = $new_pid;
				$rs = $mod_class->add($val);
				if($rs==false){
					return false;
				}
				//套餐复制行程
				if($val['g_isgoods']==1&&$val['g_type']==2){
					$this->copytrip($rs,$id);
				}
	
				if($this->clone_goods($fromid,$id,$mid,$rs)===false){
					return false;
				}
			}
		}else{
			return  false;
		}
		return true;
	}
}