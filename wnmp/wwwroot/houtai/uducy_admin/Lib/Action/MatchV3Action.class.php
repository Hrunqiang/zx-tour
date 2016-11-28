<?php
/**
 * 赛事添加
 * */
class MatchV3Action extends Action {
	
	public function _initialize(){
		B('AuthCheck');
	}
	
	/**
	 * 赛事列表
	 */
	public function index(){
		$order = " m_sign desc,m_order desc,id desc ";
		$where = "";
		$gtime_start = htmlspecialchars(addslashes(trim($_GET['gtime_start'])));
		$gtime_end = htmlspecialchars(addslashes(trim($_GET['gtime_end'])));
		$this->assign("m_ptype",htmlspecialchars(addslashes(trim($_GET['m_ptype']))));
		$state = htmlspecialchars(addslashes(trim($_GET['state'])));
		$state = $state?$state:0;
		if($state == 1){
			$order = " id desc ";
		}
		
		if(!$state){
			$where = " m_state = 0  and m_releaseTime < NOW() and m_offineTime > NOW() ";
			$this->assign("state",0);
		}else{
			$where = " m_state = 1  or (m_releaseTime >= NOW() and m_offineTime <= NOW()) ";
			$this->assign("state",1);
		}
		
		if($gtime_start&&$gtime_end){
			if($where){
				$where = $where . " and  m_GameTime>='$gtime_start' and m_GameTime<='$gtime_end' ";
			}else{
				$where = " m_GameTime>='$gtime_start' and m_GameTime<='$gtime_end' ";
			}
			$this->assign("gtime_start",$gtime_start);
			$this->assign("gtime_end",$gtime_end);
		}
		
		$utime_start = htmlspecialchars(addslashes(trim($_GET['utime_start'])));
		$utime_end = htmlspecialchars(addslashes(trim($_GET['utime_end'])));
		if($utime_start && $utime_end){
			if($where){
				$where = $where." and m_untilTime>='$utime_start' and m_untilTime<='$utime_end' ";
			}else{
				$where = " m_untilTime>='$utime_start' and m_untilTime<='$utime_end' ";
			}
			$this->assign("utime_start",$utime_start);
			$this->assign("utime_end",$utime_end);
		}
		$this->assign("wd",htmlspecialchars(addslashes(trim($_GET['m_name']))));
		
		$match_state = htmlspecialchars(addslashes(trim($_GET['match_state'])));
		$this->assign("match_state",$match_state);
		switch ($match_state){
			//正在报名
			case "signup":
				$where.=" and m_placesleft > 0 and m_GameTime >= NOW() and m_untilTime >= NOW()";
				break;
			//名额已满
			case "full":
				$where.=" and m_placesleft <= 0 ";
				break;
			//比赛结束
			case "gameend":
				$where.=" and m_GameTime < NOW() ";
				break;
			//报名结束
			case "overtime":
				$where.=" and m_untilTime < NOW() ";
				break;
		}
		
		$ordertype = htmlspecialchars(addslashes(trim($_GET['order'])));
		if($ordertype=="m_GameTime"){
			$order = " m_GameTime asc,m_sign desc,m_order desc,id desc ";
			//$where = " m_GameTime>NOW() ";
		}elseif($ordertype=="m_untilTime"){
			$order = " m_untilTime asc,m_sign desc,m_order desc,id desc ";
			//$where = " m_GameTime>NOW() ";
		}
		$this->assign("now",Date("Y-m-d H:i:s"));
		$table_cfg	= array(
				'field'=>array(
						'id'	=>array('title'=>'id','isabm'=>true,'islist'=>true,'ismain'=>true,'isshow'=>true),
						'm_GameTime'=>array('title'=>'比赛时间','isabm'=>true,'islist'=>true,'isshow'=>true),
						'm_untilTime'=>array('title'=>'截止时间','isabm'=>true,'islist'=>true,'isshow'=>true),
						'm_name'	=>array('title'=>'赛事名','isabm'=>false,'islist'=>true,'type'=>"text",'isshow'=>true),											
 						'm_ptype'=>array('title'=>'赛事类型','isabm'=>false,'islist'=>true,'isshow'=>true),
						'm_placesleft'=>array('title'=>'名额库存','isabm'=>false,'islist'=>true,'isshow'=>true),
						'm_order'=>array('title'=>'排序','isabm'=>false,'islist'=>true,'isshow'=>true),
// 						'm_sign'=>array('title'=>'推荐','isabm'=>false,'islist'=>true,'type'=>'select','selectdata'=>array("0"=>"未推荐","1"=>"推荐")),
//						'm_untilTime'=>array('title'=>'报名截至时间','isabm'=>true,'islist'=>true,'type'=>'text',),
 						'm_GameTime'=>array('title'=>'比赛时间','isabm'=>true,'islist'=>true,'isshow'=>true),
						'm_state'=>array('title'=>'状态','isabm'=>false,'islist'=>true,'type'=>'select','selectdata'=>array("0"=>"上线中","1"=>"已下线"),'isshow'=>true),
 						'm_attentions'=>array('title'=>'赛事注意事项','isabm'=>true,'islist'=>true,'isshow'=>true,"type"=>"text"),
						'm_signuptime'=>array('title'=>'赛事注意事项','isabm'=>true,'islist'=>true,'isshow'=>false),
				),
				'where'=>$where,
				'table'	=>'zx_tb_matchs',
				'order' =>$order,
				'utimeField'	=>'m_utime',
				's'		=>'IosFeedbac',
				'a'		=>'index',
				'perpage'=>'30',
				'designMode'=>'false',
				'tpl'=>'MatchV3:index',
				// 				'submitBtns'=>array("发送push"=>"./?s=Push&a=Pushusers")
		);
		$CommonAction	= new CommonAction();
		$CommonAction->list_fb($table_cfg);
	}

	/**
	 * 赛事内容
	 * @throws Exception
	 */
	public function info_abroad(){
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
						$data['m_signuptime']		= addslashes(trim($_POST['m_signuptime']))?addslashes(trim($_POST['m_signuptime'])):Date("Y-m-d H:i:s");
						$data['m_des']			= addslashes(trim($_POST['m_des']));
						$data['m_special']			= trim($_POST['m_special']);
						$data['m_info']			= trim($_POST['m_info']);
						$data['m_rules']			= trim($_POST['m_rules']);
						$data['m_route']		= trim($_POST['m_route']);
						$data['m_city']			= addslashes(trim($_POST['m_city']));
						$data['m_area']			= addslashes(trim($_POST['m_area']));
						$data['m_routeImg']			= addslashes(trim($_POST['m_routeImg']));
						$data['m_ptype']		= addslashes(trim($_POST['m_ptype']));
						$data['m_enterMode']			= addslashes(trim($_POST['m_enterMode']));
						$data['m_placesleft']			= htmlspecialchars(addslashes(trim($_POST['m_placesleft'])));
						$data['m_placesleft'] = $data['m_placesleft']!==""?$data['m_placesleft']:0;
						$data['m_enterurl']			= addslashes(trim($_POST['m_enterurl']));
						$data['m_img'] = addslashes(trim($_POST['m_img']));
						$data['m_img']			= $data['m_img']?$data['m_img']:addslashes(trim($_POST['m_banner'][0]));
						$data['m_banner'] = $this->myserialize($_POST['m_banner']);
						$data['m_icon']			= addslashes(trim($_POST['m_icon']));
						$data['m_country']			= addslashes(trim($_POST['m_country']));
						$data['m_utime']			= date("Y-m-d H:i:s");
						$data['lastupdater']	= session('user');
						$data['m_Mtypes']   =$_POST['m_Mtypes']?implode("|", $_POST['m_Mtypes']):"";
						$data['m_auth']    =$_POST['m_auth']?implode("|", $_POST['m_auth']):"";
						$data['m_Pfeature']  =$_POST['m_Pfeature']?implode("|", $_POST['m_Pfeature']):"";
						$data['m_mtypes_class']			= addslashes(trim($_POST['m_mtypes_class']));
						$data['m_isshow']			= addslashes(trim($_POST['m_isshow']));
						$data['m_continent']	= addslashes(trim($_POST['m_continent']));
						$id		= addslashes(trim($_POST['id']));		
						if(empty($id)){
							throw new Exception('empty id');
						}
						$rs	= $MatchM->data($data)->where("id=$id")->save();
						
					}
					if($rs===false){
						throw new Exception('运行失败。!');
					}
					message('操作成功。','?s=MatchV3');
				}
				$id	= addslashes(trim($_GET['id']));
				if(empty($id)){
					message('修改出问题,请传修改的id。','?s=MatchV3');
				}
				$data = $MatchM->getmatchsinfo($id);
				if($data['m_banner']){
					$data['m_banner'] = unserialize($data['m_banner']);
				}
				if($data['m_Pfeature']){
					$data['m_Pfeature'] = explode("|",$data['m_Pfeature']);
				}
				if($data['m_Mtypes']){
					$data['m_Mtypes'] = explode("|",$data['m_Mtypes']);
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
					$data['m_signuptime']		= addslashes(trim($_POST['m_signuptime']))?addslashes(trim($_POST['m_signuptime'])):Date("Y-m-d H:i:s");
					$data['m_untilTime']			= addslashes(trim($_POST['m_untilTime']));
					$data['m_des']			= addslashes(trim($_POST['m_des']));
					$data['m_special']			= trim($_POST['m_special']);
					$data['m_info']			= trim($_POST['m_info']);
					$data['m_rules']		= trim($_POST['m_rules']);
					$data['m_route']		= trim($_POST['m_route']);
					$data['m_city']			= addslashes(trim($_POST['m_city']));
					$data['m_area']			= addslashes(trim($_POST['m_area']));
					$data['m_routeImg']			= addslashes(trim($_POST['m_routeImg']));
					$data['m_ptype']		= addslashes(trim($_POST['m_ptype']));
					$data['m_enterMode']			= addslashes(trim($_POST['m_enterMode']));
					$data['m_sign']			= 0;
					$data['m_placesleft']		= addslashes(trim($_POST['m_placesleft']));
					$data['m_placesleft'] = $data['m_placesleft']!==""?$data['m_placesleft']:99999;
					$data['m_places']			= $data['m_placesleft'];
					$data['m_enterurl']			= addslashes(trim($_POST['m_enterurl']));
					$data['m_state']			= addslashes(trim($_POST['m_state']));
					$data['m_isshow']			= addslashes(trim($_POST['m_isshow']));
					$data['m_img'] = addslashes(trim($_POST['m_img']));
					$data['m_img']			= $data['m_img']?$data['m_img']:addslashes(trim($_POST['m_banner'][0]));
					$data['m_banner'] = $this->myserialize($_POST['m_banner']);
					$data['m_icon']			= addslashes(trim($_POST['m_icon']));
					$data['m_order']= addslashes(trim($_POST['m_order']))?addslashes(trim($_POST['m_order'])):1000;
					$data['m_country']			= addslashes(trim($_POST['m_country']));
					$data['m_utime']			= $data['m_ctime'] = date("Y-m-d H:i:s");
					$data['m_releaseTime']			= !empty($_POST['m_releaseTime'])?addslashes(trim($_POST['m_releaseTime'])):date("Y-m-d H:i:s");
					$data['m_offineTime']			= !empty($_POST['m_offineTime'])?addslashes(trim($_POST['m_offineTime'])):"2116-01-01 00:00:00";
					$data['lastupdater']	= session('user');
					$data['m_Mtypes']   =$_POST['m_Mtypes']?implode("|", $_POST['m_Mtypes']):"";
					$data['m_mtypes_class']			= addslashes(trim($_POST['m_mtypes_class']));					
					$data['m_auth']    =$_POST['m_auth']?implode("|", $_POST['m_auth']):"";
					$data['m_Pfeature']  =$_POST['m_Pfeature']?implode("|", $_POST['m_Pfeature']):"";
					$data['m_attentions']			= addslashes(trim($_POST['m_attentions']));	
					$data['m_continent']	= addslashes(trim($_POST['m_continent']));
					$rs	= $MatchM->add($data);
					if($rs===false){
						throw new Exception('添加赛事失败。!');
					}else{
						$goodsM = new  GoodsV2Model();
						$goodsM->createMatchGoods($rs);
					}
					message('操作成功。','?s=MatchV3');
				}
				$ClassInfObj	= new ClassInfoModel();
				//$matchtype = $ClassInfObj->getlistBysname("zx_matchtype");
				//$this->assign("matchtype",$matchtype);
				$this->assign( 'ac', $ac );
				$this->display("info_abroad");
				break;
		}
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
						$data['m_signuptime']		= addslashes(trim($_POST['m_signuptime']))?addslashes(trim($_POST['m_signuptime'])):Date("Y-m-d H:i:s");
						$data['m_des']			= addslashes(trim($_POST['m_des']));
						$data['m_special']			= trim($_POST['m_special']);
						$data['m_info']			= trim($_POST['m_info']);
						$data['m_rules']			= trim($_POST['m_rules']);
						$data['m_route']		= trim($_POST['m_route']);
						$data['m_city']			= addslashes(trim($_POST['provinces']))."-".addslashes(trim($_POST['citys']));
						$data['m_area']			= addslashes(trim($_POST['m_area']));
						$data['m_routeImg']			= addslashes(trim($_POST['m_routeImg']));
						$data['m_ptype']		= addslashes(trim($_POST['m_ptype']));
						$data['m_enterMode']			= addslashes(trim($_POST['m_enterMode']));
						$data['m_placesleft']			= htmlspecialchars(addslashes(trim($_POST['m_placesleft'])));
						$data['m_placesleft'] = $data['m_placesleft']!==""?$data['m_placesleft']:0;
						$data['m_enterurl']			= addslashes(trim($_POST['m_enterurl']));
						$data['m_img'] = addslashes(trim($_POST['m_img']));
						$data['m_img']			= $data['m_img']?$data['m_img']:addslashes(trim($_POST['m_banner'][0]));
						$data['m_banner'] = $this->myserialize($_POST['m_banner']);
						$data['m_icon']			= addslashes(trim($_POST['m_icon']));
						$data['m_country']			= addslashes(trim($_POST['m_country']));
						$data['m_utime']			= date("Y-m-d H:i:s");
						$data['lastupdater']	= session('user');
						$data['m_Mtypes']   =$_POST['m_Mtypes']?implode("|", $_POST['m_Mtypes']):"";
						$data['m_auth']    =$_POST['m_auth']?implode("|", $_POST['m_auth']):"";
						$data['m_Pfeature']  =$_POST['m_Pfeature']?implode("|", $_POST['m_Pfeature']):"";
						$data['m_mtypes_class']			= addslashes(trim($_POST['m_mtypes_class']));
						$data['m_isshow']			= addslashes(trim($_POST['m_isshow']));
						$data['m_continent']	= addslashes(trim($_POST['m_continent']));
						$id		= addslashes(trim($_POST['id']));
						if(empty($id)){
							throw new Exception('empty id');
						}
						$rs	= $MatchM->data($data)->where("id=$id")->save();
	
					}
					if($rs===false){
						throw new Exception('运行失败。!');
					}
					message('操作成功。','?s=MatchV3');
				}
				$id	= addslashes(trim($_GET['id']));
				if(empty($id)){
					message('修改出问题,请传修改的id。','?s=MatchV3');
				}
				$data = $MatchM->getmatchsinfo($id);
				if($data['m_banner']){
					$data['m_banner'] = unserialize($data['m_banner']);
				}
				if($data['m_Pfeature']){
					$data['m_Pfeature'] = explode("|",$data['m_Pfeature']);
				}
				if($data['m_Mtypes']){
					$data['m_Mtypes'] = explode("|",$data['m_Mtypes']);
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
					$data['m_signuptime']		= addslashes(trim($_POST['m_signuptime']))?addslashes(trim($_POST['m_signuptime'])):Date("Y-m-d H:i:s");
					$data['m_untilTime']			= addslashes(trim($_POST['m_untilTime']));
					$data['m_des']			= addslashes(trim($_POST['m_des']));
					$data['m_special']			= trim($_POST['m_special']);
					$data['m_info']			= trim($_POST['m_info']);
					$data['m_rules']		= trim($_POST['m_rules']);
					$data['m_route']		= trim($_POST['m_route']);
					$data['m_city']			= addslashes(trim($_POST['provinces']))."-".addslashes(trim($_POST['citys']));
					$data['m_area']			= addslashes(trim($_POST['m_area']));
					$data['m_routeImg']			= addslashes(trim($_POST['m_routeImg']));
					$data['m_ptype']		= addslashes(trim($_POST['m_ptype']));
					$data['m_enterMode']			= addslashes(trim($_POST['m_enterMode']));
					$data['m_sign']			= 0;
					$data['m_placesleft']		= addslashes(trim($_POST['m_placesleft']));
					$data['m_placesleft'] = $data['m_placesleft']!==""?$data['m_placesleft']:99999;
					$data['m_places']			= $data['m_placesleft'];
					$data['m_enterurl']			= addslashes(trim($_POST['m_enterurl']));
					$data['m_state']			= addslashes(trim($_POST['m_state']));
					$data['m_isshow']			= addslashes(trim($_POST['m_isshow']));
					$data['m_img'] = addslashes(trim($_POST['m_img']));
					$data['m_img']			= $data['m_img']?$data['m_img']:addslashes(trim($_POST['m_banner'][0]));
					$data['m_banner'] = $this->myserialize($_POST['m_banner']);
					$data['m_icon']			= addslashes(trim($_POST['m_icon']));
					$data['m_order']= addslashes(trim($_POST['m_order']))?addslashes(trim($_POST['m_order'])):1000;
					$data['m_country']			= addslashes(trim($_POST['m_country']));
					$data['m_utime']			= $data['m_ctime'] = date("Y-m-d H:i:s");
					$data['m_releaseTime']			= !empty($_POST['m_releaseTime'])?addslashes(trim($_POST['m_releaseTime'])):date("Y-m-d H:i:s");
					$data['m_offineTime']			= !empty($_POST['m_offineTime'])?addslashes(trim($_POST['m_offineTime'])):"2116-01-01 00:00:00";
					$data['lastupdater']	= session('user');
					$data['m_Mtypes']   =$_POST['m_Mtypes']?implode("|", $_POST['m_Mtypes']):"";
					$data['m_mtypes_class']			= addslashes(trim($_POST['m_mtypes_class']));
					$data['m_auth']    =$_POST['m_auth']?implode("|", $_POST['m_auth']):"";
					$data['m_Pfeature']  =$_POST['m_Pfeature']?implode("|", $_POST['m_Pfeature']):"";
					$data['m_attentions']			= addslashes(trim($_POST['m_attentions']));
					$data['m_continent']	= addslashes(trim($_POST['m_continent']));
					$rs	= $MatchM->add($data);
					if($rs===false){
						throw new Exception('添加赛事失败。!');
					}else{
						$goodsM = new  GoodsV2Model();
						$goodsM->createMatchGoods($rs);
					}
					message('操作成功。','?s=MatchV3');
				}
				$ClassInfObj	= new ClassInfoModel();
				//$matchtype = $ClassInfObj->getlistBysname("zx_matchtype");
				//$this->assign("matchtype",$matchtype);
				$this->assign( 'ac', $ac );
				$this->display("info");
				break;
		}
	}
	
	public function goodsinfo(){
		$id = htmlspecialchars(addslashes(trim($_GET['id'])));
		$class	= new GoodsV3Model();
		
		$matchM = new MatchV3Model();
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
		
	public function attentions_edit(){
		$id= htmlspecialchars(addslashes(trim($_POST['id'])));
		$attentions= htmlspecialchars(addslashes(trim($_POST['attentions'])));
		$M	= new MatchV2Model();
		if($M->where("id = ".$id)->find()){
			$saveres = $M->query("update zx_tb_matchs set m_attentions = '".$attentions."' where id = ".$id);
			if($saveres!==false){
				$rs['error'] = 0;
				$rs['msg'] = "ok";
			}else{
				$rs['error'] = 1;
				$rs['msg'] = "修改失败！!";
			}
		}else{
			$rs['error'] = 1;
			$rs['msg'] = "无效赛事！";
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
			message("克隆成功！！",'?s=MatchV3&ac=list&state=1');
		}catch(Exception $e){
			message($e->getMessage(),'?s=MatchV3&ac=list&state='.$state);
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
	 * 报名情况
	 */
	public function enroll(){
		$mid = htmlspecialchars(addslashes(trim($_GET['mid'])));
		$matchM = new  MatchV3Model();
		$matchinfo =  $matchM->getmatchsinfo($mid);
		$this->assign("matchname",$matchinfo['m_name']);
		$this->assign("mid",$mid);
		$where = " and o.matchid = $mid ";
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
		
		$wd = htmlspecialchars(addslashes(trim($_GET['wd'])));
		if($wd){
			$where .= " and (lower(u.name) like '%$wd%' or lower(u.phone) like '%$wd%') ";
			$this->assign("wd",$wd);
		}
		
		$ordersM = new  UserOrdersV2Model();
		$data = $ordersM->getorderlistBymatch($where,"0,1000");
		$count = count($data);
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
		
		$this->assign("list",$data);
		$this->assign("order_state",$order_state);
		$this->assign("ctime_start",$ctime_start);
		$this->assign("ctime_end",$ctime_end);
		$this->assign("count",$count);
		$this->display();
	}
}