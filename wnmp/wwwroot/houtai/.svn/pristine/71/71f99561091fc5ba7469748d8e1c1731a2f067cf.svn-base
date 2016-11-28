<?php
class ClassesAction extends Action{
	Public function _initialize(){
		B('AuthCheck');
	}
	public function index(){
		$class	= new ClassModel();
		$short_name	= $_GET['sname'];
		$cid=0;
		if(!empty($short_name)){
			$rs	= $class->get_cid_by_sname($short_name);
		}
		
		$html	= $class->dafenglei_arr(0, $rs['id'],$short_name);
		$this->assign( 'html', $html );
		$this->assign( 'ac', 'list' );
		$this->display( 'common_class' );
	}
	
	/*
	 * 用户反馈
	 * 
	 * */
	public function feedback(){
		$db = new IosClassFeedbackModel;
		$cls=!empty($_GET['cls'])?$_GET['cls']:'test';
		$optionl = $db->getoption();
		$option = "";
		foreach ($optionl as $key => $value) {
			if($value['cls']==$cls){
				$option .= "<option value='".$value['cls']."' selected='selected'>".$value['cls']."</option>";
			}else{
				$option .= "<option value='".$value['cls']."'>".$value['cls']."</option>";
			}
		}
		$list = $db->getlist($cls);
		$this->assign('option',$option);
		$this->assign('list',$list);
		$this->display('feedback');
	}
	/* 
	 * 用户push
	 *  
	 *  */
	public function push(){
		$rs = curl_request("http://192.168.10.201:8098/lua?a=Iospush&m=getalltags");
		$rs =  json_decode($rs,true);
		if($rs['error']==0){
			$data = $rs['data'];
			$option = "<div id='push_tag_div'>";
			foreach ($data as $key => $value) {
				$option.="<p><input id='tags_".$key."' type='checkbox' value='".$value."' /><label for='tags_".$key."'>".$value."</label></p>";
			}
			$option .= "</div>";
		}
		$this->assign('option',$option);
		$this->display('push');
	}
	
	public function mypush(){
		$msg = trim($_POST['msg']);
		$test = trim($_POST['test']);
		$url = trim($_POST['url']);
		$tag = trim($_POST['tag']);
		if(!$msg){
			message('push内容不能为空。','?s=Classes&a=push');
		}
		$rs = curl_request("http://192.168.10.201:8098/lua?a=Iospush&m=push&tag=$tag&msg=$msg&url=$url&test=$test");
		$rs =  json_decode($rs,true);
		if($rs['num']>0){
			message('push成功！一共推送了'.$rs['num'].'条  成功'.$rs['success'].'条','?s=Classes&a=push',5);
		}
	}
	
	
	/**
	 * 添加分类
	 * @throws Exception
	 */
	public function add(){
		try{
			$pid	= (empty($_GET['pid']))?0:$_GET['pid'];
			$mod_class	= new ClassModel();
			if($_POST){
				if(empty($_POST['classname']) || empty($_POST['short_name'])){
					throw new Exception('类名称,和名称简写不能空!');
					// 					mod_login::message("类名称,和名称简写不能空!",'?c=c_class');
				}else{
					$data['classname']		= htmlspecialchars(addslashes(trim($_POST['classname'])));
					$data['short_name']		= htmlspecialchars(addslashes(trim($_POST['short_name'])));
					$data['orderid']		= htmlspecialchars(addslashes(trim($_POST['orderid'])));
					$data['describe']		= htmlspecialchars(addslashes(trim($_POST['describe'])));
					$data['fields']			= json_encode($_POST['fields']);
					$data['ctime']		= date("Y-m-d H:i:s");
					$data['utime']		= date("Y-m-d H:i:s");
					$data['attr']			= trim($_POST['attr']);
					$data['attr']			= $mod_class->enattr($data['attr']);
					$data['pid']			= htmlspecialchars(addslashes(trim($_POST['pid'])));
				}
				$rs	= $mod_class->add($data);
				if($rs){
					message('操作成功。','./?s=Classes');
				}else{
					message('类简称不能重复。','./?s=Classes');
				}
			}
			$M	= new ClassInfoModel();
			$fields	= $M->getFs();
			$select_option	= $mod_class->dafenglei_select(0,0,$pid);
			$this->assign( 'select', $select_option );
			$this->assign( 'now', time() );
			$this->assign( 'pid', $pid );
			$this->assign( 'ac', 'add' );
			$this->assign( 'fields', $fields );
			$this->display( 'common_class' );
		}catch(Exception $e){
			message($e->getMessage(),'./?s=Classes');
		}
	}
	public function edit(){
		try{
			$mod_class	= new ClassModel();
			$sname	= $_REQUEST['sname'];
			if($_POST){
				if(empty($_POST['classname']) || empty($_POST['short_name'])){
					throw new Exception('类名称,和名称简写不能空!');
					// 					mod_login::message("类名称,和名称简写不能空!",'?c=c_class');
				}else{
					$data['classname']		= htmlspecialchars(addslashes(trim($_POST['classname'])));
					$data['short_name']		= htmlspecialchars(addslashes(trim($_POST['short_name'])));
					$data['orderid']		= htmlspecialchars(addslashes(trim($_POST['orderid'])));
					$data['describe']		= htmlspecialchars(addslashes(trim($_POST['describe'])));
					$data['fields']			= json_encode($_POST['fields']);
					$data['utime']			= date("Y-m-d H:i:s");
					$data['pid']			= htmlspecialchars(addslashes(trim($_POST['pid'])));
					$data['attr']			= trim($_POST['attr']);
					$data['attr']			= $mod_class->enattr($data['attr']);
					$id						= htmlspecialchars(addslashes(trim($_POST['id'])));
				}
				$rs	= $mod_class->data($data)->where(' id='.$id)->save();
				if($rs){
					message('操作成功。','./?s=Classes');
				}else{
					message('操作失败。','./?s=Classes&&sname='.$sname);
				}
			}
	
	
			$id	= addslashes(trim($_GET['id']));
			if(!empty($id)){
				$data	= $mod_class->get_class_by_id($id);
				$data['attr']		= $mod_class->unattr($data['attr']);
				$data['fields']		= json_decode($data['fields'],true);
				/*选择框*/
				$select_option	= $mod_class->dafenglei_select(0,0,$data['pid']);
				$M	= new ClassInfoModel();
				$fields	= $M->getFs();
				$this->assign( 'fields', $fields);
				$this->assign( 'data', $data);
				$this->assign( 'select', $select_option);
				$this->assign( 'sname', $sname);
				$this->assign( 'id', $id);
				$this->assign( 'now', time());
				$this->assign( 'pid', $data['pid']);
				$this->assign( 'ac', 'edit' );
				$this->display( 'common_class' );
			}else{
				throw new Exception("id有问题,请返回重新修改。");
			}
		}catch(Exception $e){
			message($e->getMessage(),'./?s=Classes&sname='.$sname);
		}
	}
	
	/**
	 * @param unknown_type $id
	 * @throws Exception
	 */
	public function del($id=array()){
		try{
			$mod_class	= new ClassModel();
			$mod_class_info	= new ClassInfoModel();
			$id	= (empty($id))?$_GET['id']:$id;
			if(is_array($id)){
				foreach($id as $k=>$v){
					$id[$k]=htmlspecialchars(addslashes(trim($v)));
				}
				$id	= implode(',', $id);
			}else{
				$id	= htmlspecialchars(addslashes(trim($id)));
			}
	
			if(empty($id)){throw new Exception('要删除的id不能为空。');}
			$has	= $mod_class->field("count(*) as c")->where("pid in ($id)")->find();
			$rs = $mod_class->where("id in ($id)")->delete();
			//删除内容
			$rs = $mod_class_info->where("cid in ($id)")->delete();
			if($has['c']>0){
				$ids	= $mod_class->field('id')->where("pid in ($id)")->select();
				foreach($ids as $k=>$v){
					$delid[]=$v['id'];
				}
				/*删除子分类*/
				self::del($delid);
			}
			message('操作成功。','?s=Classes');
		}catch(Exception $e){
			message('操作失败!!!!!!!!!!!!','?s=Classes');
		}
	}
	public function content(){
		$ac	= trim($_REQUEST['ac']);
		$sname	= trim($_REQUEST['sname']);
		$ClassObj	= new ClassModel();
		$ClassInfObj	= new ClassInfoModel();
		switch ($ac){
			case "del":
				$id	= $_REQUEST['id'];
				if(is_array($id)){
					foreach($id as $k=>$v){
						$id[$k]=htmlspecialchars(addslashes(trim($v)));
					}
					$id	= implode(',', $id);
				}else{
					$id	= htmlspecialchars(addslashes(trim($id)));
				}
				if(!empty($id)){
					$rs	= $ClassInfObj->data(array('isdel'=>1,'lastupdater'=>session('user'),'utime'=>Date('Y-m-d H:i:s')))->where("id in ($id)")->save();
					if($rs){
						message('操作成功。','?s=Classes&a=content&ac=list&sname='.$sname);
					}else{
						message('操作失败!!!!!!。','?s=Classes&a=content&ac=list&sname='.$sname);
					}
				}
			break;
			case 'list':
				$where	= ' a.isdel=0 ';
				$cid	= (empty($_GET['cid']))?0:$_GET['cid'];
				$sign	= addslashes(intval($_GET['sign']));
				$isdisplay	= addslashes(intval($_GET['isdisplay']));
				$sname	= htmlspecialchars(addslashes(trim($_GET['sname'])));
				if(!empty($cid)){
					$where	.= ' and a.cid='.$cid.' ';
				}
				if(!empty($sname)){
					$where	.= ' and b.short_name="'.$sname.'" ';
				}
				if(isset($_GET['sign'])){
					$where	.= ' and a.sign='.$sign.' ';
				}
				if(isset($_GET['isdisplay'])){
					$where	.= ' and a.isdisplay='.$isdisplay.' ';
				}
				$p = empty($_GET['p'])?1:$_GET['p'];
				$select	= $ClassObj->dafenglei_select(0, 0, $cid);
				
				$count=$ClassInfObj->getcount($where);
				import('ORG.Util.Page');
				$Page = new Page($count,20);
				$Page->setConfig('header','条信息');
				$show = $Page->show();
				$start = 20*($p-1);
				$list	= $ClassInfObj->get_class_join($where,"","$start,20");
				$this->assign( 'show',$show);
				$this->assign( 'cid', $cid );
				$this->assign( 'list', $list);
				$this->assign( 'select', $select);
				$this->assign("get",$_GET);
				$this->assign( 'sname', $sname);
				$this->assign( 'ac', 'list' );
				$this->display( 'class_content' );
				break;
			case 'add':
				if($_POST){
					if(empty($_POST['cid'])){
					throw new Exception('类名称不能空!');
					}else{
						$data['cid']			= htmlspecialchars(addslashes(trim($_POST['cid'])));
						$data['n_title']		= htmlspecialchars(addslashes(trim($_POST['n_title'])));
						$data['orderid']		= htmlspecialchars(addslashes(trim($_POST['orderid'])));
						$data['n_img']			= htmlspecialchars(addslashes(trim($_POST['n_img'])));
						$data['n_url']			= addslashes(trim($_POST['n_url']));
						$data['n_content']		= htmlspecialchars(addslashes(trim($_POST['n_content'])));
						$data['isdisplay']		= htmlspecialchars(addslashes(trim($_POST['isdisplay'])));
						$data['sign']			= htmlspecialchars(addslashes(trim($_POST['sign'])));
						$data['ctime']			= date("Y-m-d H:i:s");
						$data['utime']			= !empty($_POST['utime'])?htmlspecialchars(addslashes(trim($_POST['utime']))):date("Y-m-d H:i:s");
						$data['itime']			= !empty($_POST['itime'])?htmlspecialchars(addslashes(trim($_POST['itime']))):date("Y-m-d H:i:s");
						$data['offtime']			= !empty($_POST['offtime'])?htmlspecialchars(addslashes(trim($_POST['offtime']))):"2115-01-01 00:00:00";
						$data['lastupdater']	= session('user');
					}
					$rs	= $ClassInfObj->data($data)->add();
					if($rs===false){
						throw new Exception('运行失败。!');
					}
					message('操作成功。','./?s=Classes&a=content&ac=list&cid='.$_POST['cid'].'&sname='.$sname);
				}
				$cid	= (empty($_GET['cid']))?0:$_GET['cid'];
				$select	= $ClassObj->dafenglei_select(0, 0, $cid);
				$Fields	= $ClassObj->getClassField($cid);
				$this->assign('cid', $cid);
				$this->assign( 'select', $select );
				$this->assign( 'ac', 'add' );
				$this->assign( 'Fields', $Fields );
				$this->assign( 'now', time() );
				$this->display( 'class_content' );
				break;
			case 'edit':
				if($_POST){
					if(empty($_POST['cid'])){
						throw new Exception('类名称不能空!');
						// 					mod_login::message("类名称,和名称简写不能空!",'?c=c_class');
					}else{
						$data['cid']			= htmlspecialchars(addslashes(trim($_POST['cid'])));
						$data['n_title']		= htmlspecialchars(addslashes(trim($_POST['n_title'])));
						$data['orderid']		= htmlspecialchars(addslashes(trim($_POST['orderid'])));
						$data['n_img']			= htmlspecialchars(addslashes(trim($_POST['n_img'])));
						$data['n_url']			= addslashes(trim($_POST['n_url']));
						$data['isdisplay']		= htmlspecialchars(addslashes(trim($_POST['isdisplay'])));
						$data['sign']			= htmlspecialchars(addslashes(trim($_POST['sign'])));
						$data['utime']			= date("Y-m-d H:i:s");
						$data['itime']			= !empty($_POST['itime'])?htmlspecialchars(addslashes(trim($_POST['itime']))):date("Y-m-d H:i:s");
						$data['offtime']			= !empty($_POST['offtime'])?htmlspecialchars(addslashes(trim($_POST['offtime']))):"2115-01-01 00:00:00";
						$data['lastupdater']	= session('user');
						$id		= htmlspecialchars(addslashes(trim($_POST['id'])));		
						if(empty($id)){
							throw new Exception('empty id');
						}
						$rs	= $ClassInfObj->data($data)->where("id=$id")->save();
						
					}
					if($rs===false){
						throw new Exception('运行失败。!');
					}
					message('操作成功。','?s=Classes&a=content&cid='.$_POST['cid'].'&ac=list&sname='.$sname);
				}
				$id	= htmlspecialchars(addslashes(trim($_GET['id'])));
				if(empty($id)){
					message('修改出问题,请传修改的id。','?s=Classes&a=content&ac=list&sname='.$sname);
				}
				$data	= $ClassInfObj->where("id=$id")->find();
				$data['n_url']   = stripslashes($data['n_url']);
				$select	= $ClassObj->dafenglei_select(0, 0, $data['cid']);
				$Fields	= $ClassObj->getClassField($data['cid']);
				$this->assign( 'cid', $cid );
				$this->assign( 'id', $id );
				$this->assign( 'select', $select );
				$this->assign( 'data', $data );
				$this->assign( 'Fields', $Fields );
				$this->assign( 'ac', 'edit' );
				$this->assign( 'now', time() );
				$this->display( 'class_content' );
				break;
			}
		}
		
		public function getClassField(){
			$cid	= addslashes(trim($_POST['cid']));
			$result	= array('error'=>65535,'msg'=>'unknown','data'=>array());
			if(empty($cid)){
				$result['error']=-1;
				$result['msg']	='empty cid';
			}else{
				$ClassObj	= new ClassModel();
				$data	= $ClassObj->getClassField($cid);
				$result['error']=0;
				$result['msg']	='ok';
				$result['data']	=json_decode($data,true);
			}
			echo json_encode($result);
		}
		
		public function changeDisplay(){
			$id	= intval($_POST['id']);
			$mode	= new ClassInfoModel();
			$rs	= $mode->changeDisplay($id);
			if($rs){
				echo "1";
			}else{
				echo "0";
			}
		}
		public function changeSign(){
			$id	= intval($_POST['id']);
			$mode	= new ClassInfoModel();
			$rs	= $mode->changeSign($id);
			if($rs){
				echo "1";
			}else{
				echo "0";
			}
		}
		
		public function checkname(){
			$cid = trim($_GET['cid']);
			$info = trim($_GET['info']);
			$mode	= new ClassInfoModel();
			$where = " a.isdel=0 and a.cid = ".$cid." and (a.id= '$info' or a.n_title like '%".$info."%' or a.n_url like '%".$info."%')";
			$rs	= $mode->get_class_join($where);
			
			if($rs){
				$data = Array(
						"error"=>0,
						"data"=>$rs
						);
			}else{
				$data = Array(
						"error"=>1,
						"data"=>$rs
				);
			}
			echo json_encode($data);
		}
		
		public function version(){
			$app = !empty($_GET['app'])?trim($_GET['app']):"二次元";
			$ac = !empty($_GET['ac'])?trim($_GET['ac']):"list";
			$this->assign("app",$app);
			$mode = new IosClassVersionModel;
			switch($ac){
				case "list":
					$list = $mode->getlist($app);
					$option = $mode->getoption();
					$this->assign("ac",$ac);
					$this->assign("list",$list);
					foreach ($option as $key => $value) {
						if($value['app']==$app){
							$options .= "<option value='".$value['app']."' selected='selected'>".$value['app']."</option>";
						}else{
							$options .= "<option value='".$value['app']."'>".$value['app']."</option>";
						}
					}
					$this->assign("option",$options);
					$this->display('version');
					break;
				case "change":
					$id = trim($_GET['id']);
					if($id){
						if($mode->updata_status($id)){
							message('修改成功！！！','./?s=Classes&a=version&app='.$app,1);
						}else{
							message('修改失败！！！','./?s=Classes&a=version&ac=list&app='.$app);
						}
					}else{
						message('参数错误！无法找到对应版本！！','./?s=Classes&a=version&ac=list&app='.$app);
					}
					break;
				case "del":
					$id = trim($_GET['id']);
					if($id){
						if($mode->del($id)){
							message('删除成功！！！','./?s=Classes&a=version&app='.$app);
						}else{
							message('删除失败！！！','./?s=Classes&a=version&ac=list&app='.$app);
						}
					}else{
						message('参数错误！！！','./?s=Classes&a=version&ac=list&app='.$app);
					}
					break;
				case "add":
					if($_POST){
						$data['app']=htmlspecialchars(addslashes(trim($_POST['app'])));
						$data['app'] = $data['app'] == "custom"?htmlspecialchars(addslashes(trim($_POST['custom_app']))):$data['app'];
						$data['v']=htmlspecialchars(addslashes(trim($_POST['v'])));
						if(empty($data['v'])){
							message('版本不能为空！','./?s=Classes&a=version&app='.$app);
						}
						$data['status']=htmlspecialchars(addslashes(trim($_POST['status'])))>0?1:0;
						$data['ctime']=Date("Y-m-d H:i:s");
						if($mode->addversion($data)){
							message('添加成功！！！','./?s=Classes&a=version&app='.$data['app']);
						}else{
							message('添加失败！！！','./?s=Classes&a=version&ac=add&app='.$app);
						}
					}
					$list = $mode->getlist($app);
					$option = $mode->getoption();
					$this->assign("ac",$ac);
					$this->assign("list",$list);
					foreach ($option as $key => $value) {
						if($value['app']==$app){
							$options .= "<option value='".$value['app']."' selected='selected'>".$value['app']."</option>";
						}else{
							$options .= "<option value='".$value['app']."'>".$value['app']."</option>";
						}
					}
					$options .= "<option value='custom'>自定义</option>";
					$this->assign("option",$options);
					$this->display('version');
					break;		
			}
		}
		public function getclass(){
			$ClassInfObj	= new ClassInfoModel();
			$res = $ClassInfObj->getclass();
			$val = trim($_GET['val']);
			$val = explode(",",$val);
			$html="";
			for($j=0,$leng=count($res);$j<$leng;$j++){
				if(in_array($res[$j]['n_title'],$val)){
					$html.="<span><input id='sign$j' type='checkbox' name='sign' checked value='".$res[$j]['n_title']."' ><label class='w120' for='sign$j'>".$res[$j]['n_title']."</label></span>";
				}else{
					$html.="<span><input id='sign$j' type='checkbox' name='sign' value='".$res[$j]['n_title']."' ><label for='sign$j'>".$res[$j]['n_title']."</label></span>";
				}
			}
			if($res){
				$rs['error'] = 0;
				$rs['data'] = $html;
			}else{
				$rs['error'] = 1;
				$rs['data'] = "";
			}	
			echo json_encode($rs);
		}
		public function changeclass(){
			$id = trim($_GET['id']);
			$val = trim($_GET['val']);
			$ClassInfObj	= new ClassInfoModel();
			$res = $ClassInfObj->changeclass($id,$val);
			if($res!==false){
				$rs['error'] = 0;
			}else{
				$rs['error'] = 1;
			}
			echo json_encode($rs);
		}
		
		public function parent_app(){
			$val = $_GET['val'];
			$ClassInfObj	= new ClassInfoModel();
			$res = $ClassInfObj->parent_app($val);
			if($res){
				$rs['error']= 0;
				$rs['data'] = $res; 
			}else{
				$rs['error'] = 1;
				$rs['data'] = "";
			}
			echo json_encode($rs);
		}
}