<?php
/**
 * 推荐列表
 * @author hhy
 * ctime 2016-09-30
 */
class RecommendAction extends Action {

	Public function _initialize(){
		B('AuthCheck');
	}

    public function index(){
    	$ac = htmlspecialchars(addslashes(trim($_GET['ac'])))?htmlspecialchars(addslashes(trim($_GET['ac']))):"banner";
    	switch ($ac){
    		case 'banner':
    			$sname = htmlspecialchars(addslashes(trim($_GET['sname'])));
    			$sname	= $sname?$sname:"zx_banner";
    			$ClassInfObj	= new ClassInfoModel();
    			$where	= ' a.isdel=0 and a.isdisplay=1  ';
    			$cid	= (empty($_GET['cid']))?0:$_GET['cid'];
    			$isdisplay	= 1;
    			if(!empty($cid)){
    				$where	.= ' and a.cid='.$cid.' ';
    			}
    			$where	.= ' and b.short_name="'.$sname.'" ';
    			if(isset($_GET['isdisplay'])){
    				$where	.= ' and a.isdisplay='.$isdisplay.' ';
    			}			
    			$list	= $ClassInfObj->get_class_join($where);
    			$this->assign( 'cid', $cid );
    			$this->assign( 'list', $list);
    			$this->assign("get",$_GET);
    			$this->assign( 'sname', $sname);
    			break;
    		case "recommend":  
    			$snameall = htmlspecialchars(addslashes(trim($_GET['sname'])));
    			$snameall	= $snameall?$snameall:"m_sign-1";
    			$snamelist = explode("-", $snameall);
    			$sname = $snamelist[0];
				$matchM = new MatchV3Model();
				if($snamelist[1]==1){
					$m_ptype = '国内';
				}else{
					$m_ptype = '海外';
				}
				$where =  " m_ptype = '$m_ptype'  and  $sname = 1 and  m_state = 0  and m_releaseTime < NOW() and m_offineTime > NOW()  ";
				$field = "id,m_name,m_GameTime,m_ptype,m_untilTime,m_placesleft,m_order,m_signupTime";
				$list = $matchM->order("m_order desc")->field($field)->where($where)->select();
				$this->assign( 'now', Date("Y-m-d H:i:s"));
				$this->assign("list",$list);
				$this->assign( 'sname1', $sname);
				$this->assign( 'sname', $snameall);
    			break;
    		case "hotwd":
    			$sname = htmlspecialchars(addslashes(trim($_GET['sname'])));
    			$sname	= $sname?$sname:"zx_hotwords";
    			$ClassInfObj	= new ClassInfoModel();
    			$where	= ' a.isdel=0 and a.isdisplay=1 ';
    			$cid	= (empty($_GET['cid']))?0:$_GET['cid'];
    			$isdisplay	= 1;
    			if(!empty($cid)){
    				$where	.= ' and a.cid='.$cid.' ';
    			}
    			$where	.= ' and b.short_name="'.$sname.'" ';
    			if(isset($_GET['isdisplay'])){
    				$where	.= ' and a.isdisplay='.$isdisplay.' ';
    			}
    			$list	= $ClassInfObj->get_class_join($where);
    			$this->assign( 'cid', $cid );
    			$this->assign( 'list', $list);
    			$this->assign("get",$_GET);
    			$this->assign( 'sname', $sname);
    			break;
    			break;
    	}
    	$this->assign("ac",$ac);
        $this->display();
    }
    
    public function recommend(){
    	$ac = htmlspecialchars(addslashes(trim($_GET['ac'])));
    	$snameall = htmlspecialchars(addslashes(trim($_GET['sname'])));
    	$snameall	= $snameall?$snameall:"m_sign-1";
    	$snamelist = explode("-", $snameall);
    	$sname = $snamelist[0];
    	$res = array("error"=>65535,"msg"=>"未知错误！！");
    	try{
    		switch ($ac){
    			case "add":
    				$id = htmlspecialchars(addslashes(trim($_POST['id'])));
    				if(empty($id)){
    					throw new Exception ("添加失败！！无效id!!!");
    				}
    				$matchM = new MatchV3Model();
    				$info =$matchM->where("id=$id")->find();
    				if(!$info){
    					throw new Exception ("添加失败！！未找到该赛事!!!");
    				}
    				$date = Date("Y-m-d H:i:s");
    				if(
    						$info['m_state']==1||
    						$info['m_placesleft']<=0||
    						$info['m_releaseTime'] >$date ||
    						$info['m_offineTime']<$date ||
    						$info['m_GameTime']<$date 
    				){
    					throw new Exception ("添加失败！！赛事不符合要求!!!");
    				}
    				$data[$sname] = 1;
    				$data['m_utime'] = Date("Y-m-d H:i:s");
    				$data['lastupdater'] = session('user');
    				$rs	= $matchM->data($data)->where(' id='.$id)->save();
    				if($rs){
    					$res['error'] = 0;
    					$res['msg'] ="ok";
    				}else{
    					$res['error'] = 1;
    					$res['msg'] ="修改失败！";
    				}
    				break;
    			case "order":
    				$id = htmlspecialchars(addslashes(trim($_POST['id'])));
    				if(!$id){
    					throw new Exception("无效id!!!");
    				}
    				$matchM = new MatchV3Model();
    				$data['m_order'] = intval(htmlspecialchars(addslashes(trim($_POST['m_order']))));
    				$data['m_utime'] = Date("Y-m-d H:i:s");
    				$data['lastupdater'] = session("user");
    				$rs = $matchM->data($data)->where("id = $id")->save();
    				if($rs){
    					$res['error'] = 0;
    					$res['msg'] ="ok";
    				}else{
    					$res['error'] = 1;
    					$res['msg'] ="修改失败！";
    				}
    				break;
    			case "del":
    				$id = htmlspecialchars(addslashes(trim($_POST['id'])));
    				if(empty($id)){
    					throw new Exception ("删除失败！！无效id!!!");
    				}
    				$matchM = new MatchV3Model();
    				$data[$sname] = 0;
    				$data['m_utime'] = Date("Y-m-d H:i:s");
    				$data['lastupdater'] = session('user');
    				$rs	= $matchM->data($data)->where(' id='.$id)->save();
    				if($rs){
    					$res['error'] = 0;
    					$res['msg'] ="ok";
    				}else{
    					$res['error'] = 1;
    					$res['msg'] ="修改失败！";
    				}
    				break;
    		}
    	}catch(Exception $e){
    		$res['error'] = 1;
    		$res['msg'] = $e->getMessage();
    	}
    	echo json_encode($res);
    }
    
    /**
     * 推荐banner
     * @throws Exception
     */
    public function banner(){
    	$ac = htmlspecialchars(addslashes(trim($_GET['ac'])));
    	$sname = htmlspecialchars(addslashes(trim($_GET['sname'])));
    	try{
	    	switch ($ac){
	    		case "add":
	    			$ClassInfObj	= new ClassInfoModel();
	    			$ClassObj	= new ClassModel();
	    			$cid = $ClassObj->get_cid_by_sname($sname);
	    			if(!$cid['id']){
	    				throw new Exception("无效cid");
	    			}
	    			$data['cid'] = $cid['id'];
	    			$data['n_title'] = htmlspecialchars(addslashes(trim($_POST['n_title'])));
	    			$data['n_img'] = htmlspecialchars(addslashes(trim($_POST['n_img'])));
	    			$orderid = htmlspecialchars(addslashes(trim($_POST['orderid'])));
	    			$data['orderid'] =  $orderid?$orderid:1000;
	    			$match_id =  htmlspecialchars(addslashes(trim($_POST['match_id'])));
	    			if($match_id){
	    				$data['n_url'] = "/Matchinfo?m_id=".$match_id;
	    			}else{
	    				$data['n_url'] = htmlspecialchars(addslashes(trim($_POST['n_url'])));
	    			}	
	    			$data['sign'] = 1;
	    			$data['ctime'] = $data['utime'] = $data['itime'] = Date("Y-m-d H:i:s");
	    			$data['lastupdater'] = session("user");
	    			$rs = $ClassInfObj->add($data);
	    			if($rs){
    					message('添加成功！！！','./?s=Recommend&ac=banner&sname='.$sname);
    				}else{
    					message('添加失败！！！','./?s=Recommend&ac=banner&sname='.$sname);
    				}	
	    			break;
	    		case "edit":
	    			$id = htmlspecialchars(addslashes(trim($_GET['id'])));
	    			if(!$id){
	    				throw new Exception("无效id!!!");
	    			}
	    			$ClassInfObj	= new ClassInfoModel();
	    			$data['n_title'] = htmlspecialchars(addslashes(trim($_POST['n_title'])));
	    			$data['n_img'] = htmlspecialchars(addslashes(trim($_POST['n_img'])));
	    			$orderid = htmlspecialchars(addslashes(trim($_POST['orderid'])));
	    			$data['orderid'] =  $orderid?$orderid:1000;
	    			$match_id =  htmlspecialchars(addslashes(trim($_POST['match_id'])));
	    			if($match_id){
	    				$data['n_url'] = "/Matchinfo?m_id=".$match_id;
	    			}else{
	    				$data['n_url'] = htmlspecialchars(addslashes(trim($_POST['n_url'])));
	    			}	
	    			$data['utime'] = Date("Y-m-d H:i:s");
	    			$data['lastupdater'] = session("user");
	    			$rs = $ClassInfObj->data($data)->where("id = $id")->save();
	    			if($rs){
    					message('保存成功！！！','./?s=Recommend&ac=banner&sname='.$sname);
    				}else{
    					message('保存失败！！！','./?s=Recommend&ac=banner&sname='.$sname);
    				}	
	    			break;
	    		case "del":
	    			$id = htmlspecialchars(addslashes(trim($_GET['id'])));
    				if(empty($id)){
    					throw new Exception ("删除失败！！无效id!!!");
    				}
    				$ClassInfObj	= new ClassInfoModel();
    				$data['isdel'] = 1;
    				$data['utime'] = Date("Y-m-d H:i:s");
    				$data['lastupdater'] = session('user');
    				$rs	= $ClassInfObj->data($data)->where(' id='.$id)->save();
    				if($rs){
    					message('删除成功！！！','./?s=Recommend&ac=banner&sname='.$sname);
    				}else{
    					message('删除失败！！！','./?s=Recommend&ac=banner&sname='.$sname);
    				}		
	    			break;
	    	}
    	}catch(Exception $e){
    		message($e->getMessage(),'./?s=Recommend&ac=banner&sname='.$sname);
    	}
    }
    
    /**
     * 推荐热词
     * @throws Exception
     */
	public function hotwd(){
    	$ac = htmlspecialchars(addslashes(trim($_GET['ac'])));
    	$sname = htmlspecialchars(addslashes(trim($_GET['sname'])));
    	$res = array("error"=>65535,"msg"=>"未知错误！！");
    	try{
	    	switch ($ac){
	    		case "add":
	    			$ClassInfObj	= new ClassInfoModel();
	    			$ClassObj	= new ClassModel();
	    			$cid = $ClassObj->get_cid_by_sname($sname);
	    			if(!$cid['id']){
	    				throw new Exception("无效cid");
	    			}
	    			$data['cid'] = $cid['id'];
	    			$data['n_title'] = htmlspecialchars(addslashes(trim($_POST['n_title'])));
	    			$data['sign'] = 0;
	    			$data['ctime'] = $data['utime'] = $data['itime'] = Date("Y-m-d H:i:s");
	    			$data['lastupdater'] = session("user");
	    			$rs = $ClassInfObj->add($data);
	    			if($rs){
    					$res['error'] = 0;
    					$res['msg'] ="ok";
    				}else{
    					$res['error'] = 1;
    					$res['msg'] ="添加失败！";
    				}
	    			break;
	    		case "del":
	    			$id = htmlspecialchars(addslashes(trim($_POST['id'])));
    				if(empty($id)){
    					throw new Exception ("删除失败！！无效id!!!");
    				}
    				$ClassInfObj	= new ClassInfoModel();
    				$data['isdel'] = 1;
    				$data['utime'] = Date("Y-m-d H:i:s");
    				$data['lastupdater'] = session('user');
    				$rs	= $ClassInfObj->data($data)->where(' id='.$id)->save();
    				if($rs){
    					$res['error'] = 0;
    					$res['msg'] ="ok";
    				}else{
    					$res['error'] = 1;
    					$res['msg'] ="删除失败！";
    				}		
	    			break;
	    	}
    	}catch(Exception $e){
    		$res['error'] = 1;
    		$res['msg'] = $e->getMessage();
    	}
    	echo json_encode($res);
    }
    

    
}