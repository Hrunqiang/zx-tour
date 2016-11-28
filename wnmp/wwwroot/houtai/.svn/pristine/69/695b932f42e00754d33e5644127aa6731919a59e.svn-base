<?php
/*
 * 报名
 * */
class MatchAction extends Action {
	
	public function _initialize(){
		B('AuthCheck');
	}
	
	public function index(){
		$table_cfg	= array(
				'field'=>array(
						'goodscls'	=>array('title'=>'内容','isabm'=>true,'islist'=>true,'type'=>'text','ismain'=>true,),
						'id'	=>array('title'=>'地址','isabm'=>true,'islist'=>true),					
						'ctime'=>array('title'=>'创建时间','isabm'=>false,'islist'=>true),
						'utime'=>array('title'=>'最后更新时间','isabm'=>false,'islist'=>true),
						'isdel'=>array('title'=>'状态','isabm'=>false,'islist'=>true),
				),
				'where'=>'goodspid = 0',
				'table'	=>'mls_goods',
				'utimeField'	=>'utime',
				's'		=>'IosFeedbac',
				'a'		=>'index',
				'perpage'=>'30',
				'designMode'=>'false',
				'tpl'=>'Match:index',
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
		$class	= new GoodsModel();	
		$match = $class->getmatch_info($id);
		
		$html	= $class->dafenglei_arr(0,$id,$id);
		
		$this->assign( 'html', $html );
		$this->assign( 'match', $match[0]);
		$this->assign( 'ac', 'list' );
		$this->display('update');
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
	
	/**
	 * 添加分类
	 * @throws Exception
	 */
	public function add(){
		$pid	= addslashes(trim($_GET['pid']));
		$match	= addslashes(trim($_GET['match']));
		try{
			$mod_class	= new GoodsModel();
			if($_POST){
				if(empty($_POST['goodscls'])||empty($_POST['goodspid'])){
					throw new Exception('名称不能为空!');
				}else{
					$data['goodscls']		= htmlspecialchars(addslashes(trim($_POST['goodscls'])));
					$data['goodspid']		= htmlspecialchars(addslashes(trim($_POST['goodspid'])));
					$data['order']		= htmlspecialchars(addslashes(trim($_POST['order'])));
					$data['goodsprice']		= htmlspecialchars(addslashes(trim($_POST['goodsprice'])));
					$data['goodsnum']		= htmlspecialchars(addslashes(trim($_POST['goodsnum'])));
					$data['goodsleft']		= htmlspecialchars(addslashes(trim($_POST['goodsleft'])));
					$data['utime']			= date("Y-m-d H:i:s");
					$data['ctime']			= date("Y-m-d H:i:s");
				}
 				$rs	= $mod_class->data($data)->add();
				if($rs){
					message('操作成功。','./?s=Match&a=info&id='.$match);
				}else{
					message('操作失败。','./?s=Match&a=info&id='.$match);
				}
			}
	
			if(!empty($pid)){
				/*选择框*/
				$select_option	= $mod_class->dafenglei_select(0,0,$pid);
 				//$fields	= $M->getFs();;
				$this->assign( 'select', $select_option);
				$this->assign( 'pid', $pid);
				$this->assign( 'now', time());
				$this->assign( 'match', $match);
				$this->assign( 'ac', 'add' );
				$this->display( 'update' );
			}else{
				throw new Exception("id有问题,请返回重新修改。");
			}
		}catch(Exception $e){
			message($e->getMessage(),'./?s=Match&a=info&id='.$pid);
		}
	}
	
	public function edit(){
		$id	= addslashes(trim($_GET['id']));
		$match	= addslashes(trim($_GET['match']));
		try{
			$mod_class	= new GoodsModel();
			if($_POST){
				if(empty($_POST['goodscls'])||empty($_POST['goodspid'])){
					throw new Exception('名称不能为空!');
				}else{
					$data['goodscls']		= htmlspecialchars(addslashes(trim($_POST['goodscls'])));
					$data['goodspid']		= htmlspecialchars(addslashes(trim($_POST['goodspid'])));
					$data['order']		= htmlspecialchars(addslashes(trim($_POST['order'])));
					$data['goodsprice']		= htmlspecialchars(addslashes(trim($_POST['goodsprice'])));
					$data['goodsnum']		= htmlspecialchars(addslashes(trim($_POST['goodsnum'])));
					$data['goodsleft']		= htmlspecialchars(addslashes(trim($_POST['goodsleft'])));
					$data['utime']			= date("Y-m-d H:i:s");
				}
 				$rs	= $mod_class->data($data)->where('id='.$id)->save();
				if($rs){
					message('操作成功。','./?s=Match&a=info&id='.$match);
				}else{
					message('操作失败。','./?s=Match&a=edit&match='.$match.'&id='.$id);
				}
			}
	
			if(!empty($id)){
				$data	= $mod_class->where("id=$id")->find();
				/*选择框*/
				$select_option	= $mod_class->dafenglei_select(0,0,$data['goodspid']);
 				//$fields	= $M->getFs();;
				$this->assign( 'data', $data);
				$this->assign( 'select', $select_option);
				$this->assign( 'id', $id);
				$this->assign( 'now', time());
				$this->assign( 'match', $match);
				$this->assign( 'ac', 'edit' );
				$this->display( 'update' );
			}else{
				throw new Exception("id有问题,请返回重新修改。");
			}
		}catch(Exception $e){
			message($e->getMessage(),'./?s=Match');
		}
	}
	
	
	public function edit_beizhu(){
		$data['match_id']= htmlspecialchars(addslashes(trim($_GET['match_id'])));
		$data['beizhu']= htmlspecialchars(addslashes(trim($_GET['info'])));
		$M	= new GoodsModel();
		if($M->table('mls_matchinfo')->where("match_id = ".$data['match_id'])->find()){
			$saveres = $M->query("update mls_matchinfo set beizhu = '".$data['beizhu']."' where match_id = ".$data['match_id']);
			if($saveres!==false){
				$rs['error'] = 0;
				$rs['msg'] = "ok";
			}else{
				$rs['error'] = 1;
				$rs['msg'] = "修改失败！!".$M->getLastSql();
			}
		}else{
			if($M->query("INSERT INTO `mls_matchinfo` (match_id,beizhu) VALUES ('".$data['match_id']."','".$data['beizhu']."')")!==false){
				$rs['error'] = 0;
				$rs['msg'] = "ok";
			}else{
				$rs['error'] = 1;
				$rs['msg'] = "修改失败！";
			}
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
			$mod_class	= new GoodsModel();
			$id	= (empty($id))?$_GET['id']:$id;
			$match	= htmlspecialchars(addslashes(trim($_GET['match'])));
	
			if(empty($id)){throw new Exception('要删除的id不能为空。');}
			$data['isdel'] = 1;
			$data['utime'] = Date("Y-m-d H:i:s");
			$rs = $mod_class->where("id=$id")->save($data);
			if($rs===false){
				throw new Exception('删除失败。');
			}
			message('操作成功。','?s=Match&a=info&id='.$match);
		}catch(Exception $e){
			message('操作失败!!!!!!!!!!!!','?s=Match&a=info&id='.$match);
		}
	}
	
}