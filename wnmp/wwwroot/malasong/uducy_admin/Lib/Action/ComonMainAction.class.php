<?php
class ComonMainAction extends Action{
	Public function _initialize(){
		B('AuthCheck');
	}
	/**
	 * 注:表字段中必须包括:id(主id)isdel(是否删除)ctime(创建时间)
	 *$table_cfg=array(
	 *	field=array(
 	 *	ismain:主id 
	 *	title:标题 
	 *	isabm:是否可以修改,
	 *	islist:是否在列表中显示,
	 *	type:格式(textarea,select),
	 *	selectdata:选择项,选择完后自动跳转url中带参数array(参数=>说明)
	 *	text:搜索过滤参数
	 *	img:图片
	 *	flag:数字标记(eg:1男 2女)
	 *	flagdata:array('1'=>'男','2'=>'女')数字意义
	 *	time:时间戳
	 *	),
	 *table=表名
	 *s=action name
	 *a=method name
	 *perpage=number(每页显示数目)
	 *'submitBtns'=>array("发送push"=>"./?s=Push&a=Pushusers")//添加button点击post到url上
	 * @param array $table_cfg
	 * @param (not include 'where' word)string $where
	 */
	public function list_fb($table_cfg=""){
		/*
		 * 注:表字段中必须包括:id(主id)isdel(是否删除)ctime(创建时间)
		 * 
		 * */
		if(empty($table_cfg)){
			$cls	= addslashes(trim($_REQUEST['cls']));
			$where	= array();
			$where['cls']	= $cls;
// 			$where	= "cls='$cls'";
			$table_cfg	= array(
					'field'=>array(
							/*ismain:主id 
							 *title:标题 
							 *isabm:是否可以修改,
							 *islist:是否在列表中显示,
							 *type:格式(textarea,select),
							 *slectdata:选择项,选择完后自动跳转url中带参数
							 *text:搜索过滤参数
							 **/
							'id'	=>array('ismain'=>true,'title'=>'序列','isabm'=>false,'islist'=>true),
							'cls'	=>array('title'=>'分类','isabm'=>false,'islist'=>true,'type'=>'select','selectdata'=>array('Nt','2')),
							'title'	=>array('title'=>'标题','isabm'=>true,'islist'=>true),
							'content'=>array('title'=>'内容','isabm'=>false,'islist'=>true,'type'=>'textarea'),
							'uip'	=>array('title'=>'IP','isabm'=>false,'islist'=>false),
							'uname'	=>array('title'=>'昵称','isabm'=>false,'islist'=>true),
							'utel'	=>array('title'=>'联系方式','isabm'=>false,'islist'=>false),
					),
					'table'	=>'tbl_admin_feedback',
					's'		=>'Feedback',
					'a'		=>'list_fb',
					'perpage'=>'30'
			);
		}
		if(empty($table_cfg['tpl'])){
			$table_cfg['tpl']	= "common:index";
		}
		$fields	= array_keys($table_cfg['field']);
		$where	= array();
		$order	= '';
		if(empty($table_cfg['where'])){
			foreach($_GET as $k=>$v){
				if($k=='s' || $k=='a' ||$k=='ac'){
					continue;
				}elseif(in_array($k, $fields)){
					$v	= addslashes(trim($v));
					if($v==""){
						continue;
					}
					if($table_cfg['field'][$k]['type']=='text' || $table_cfg['field'][$k]['type']=='textarea'){
						$where['_exp']	= "_k=$k&_v=/$v/";
// 						$where[$k]	= "/$v/";
// 						$where	.=" $k like '%$v%' AND ";
					}else{
						$where[$k]	= $v;
// 						$where	.=" $k='$v' AND ";
					}
				}
			}
// 			$where	= trim($where);
// 			$where	= trim($where,'AND');
		}else{
			$where	= $table_cfg['where'];
		}
		
		if($table_cfg['order']){
			$order	= $table_cfg['order']." ,";
		}
		
		$table	= $table_cfg['table'];
		$s		= $table_cfg['s'];
		$a		= $table_cfg['a'];
		$pagenum=$table_cfg['perpage'];//每页数量
		if(empty($where)){
			$where=array();
		}
		$Common	= new LogsModel();
		$Common->setTrueTableName($table);
		$list_field	= array();
		foreach($table_cfg['field'] as $k=>$v){
			$list_field[$k]	=1;
// 			if($v['islist']===true){
// 				$list_field	.= "`$k`".',';
// 			}
		}
// 		$list_field	= trim($list_field,',');
		
		$ac	= trim($_GET['ac']);
		if(!empty($ac)){
			$this->assign("ac", $ac);
		}else{
			$ac	= 'list';
			$this->assign("ac", 'list');
		}
		$Reques_uri	= $_SERVER['REQUEST_URI'];
		$Reques_uri	= preg_replace("/&?page=?[\d]{0,}/", "", $Reques_uri);
		$Reques_uri	= preg_replace("/&?ac=[^&]{0,}/", "", $Reques_uri);
// 		echo $Reques_uri;die;
		if($ac=='list'){
			B('AuthCheck');
			import("ORG.Mine.pagination");
			if($_GET['page']){
				$currpage = intval($_GET['page']);
			}else
			{
				$currpage = 1;
			}
			$count	= $Common->getCount($where);
			$pageSize=$count;//总数
			$num = ceil($pageSize/$pagenum);
			$start	= $pagenum * ($currpage-1);
			$list	= $Common->getList($list_field,$start,$pagenum,$where,$order."ctime desc");
			$page  = new pagination($num,$currpage,$Reques_uri."&ac=list&page=\$p");
			$this->assign('list', $list );
			$this->assign('page', $page->PageLinks2() );
		}elseif($ac=="edit"){
			$id	= addslashes($_GET['id']);
			if($_POST && $id){
				$_POST['utime']=date("Y-m-d H:i:s");
				$rs	= $Common->modifyById($id, $_POST);
				if($rs){
					$Reques_uri	= preg_replace("/&id=[\w]+/i", "", $Reques_uri);
					message("修改成功",$Reques_uri."&ac=list");
				}else{
					message("修改失败!!!!!!!!",$Reques_uri."&ac=list");
				}
			}
			$info	= $Common->getInfoById($id);
			$this->assign("id",$id);
			$this->assign("info",$info);
		}elseif($ac=='add'){
			if($_POST){
				$_POST['isdel']='0';
				$_POST['ctime']=date("Y-m-d H:i:s");
				$rs	= $Common->add($_POST);
				if($rs){
					message("添加成功",$Reques_uri."&ac=list");
				}else{
					message("添加失败!!!!!!!!",$Reques_uri."&ac=list");
				}
			}
		}elseif ($ac=='del'){
			$id=$_REQUEST['id'];
			if(is_array($id)){
				foreach($id as $k=>$v){
					$id[$k]=addslashes($v);
				}
			}else{
				$id	= addslashes($id);
			}
			$Reques_uri	= $Reques_uri."&ac=list";
			$Reques_uri	= preg_replace("/&?id=?[\w]{0,}/", "", $Reques_uri);
			$rs	= $Common->del($id);
			if($rs){
				message("删除成功",$Reques_uri);
			}else{
				message("删除失败!!!!!!!!",$Reques_uri);
			}
		}
		
		
		$this->assign("s",$s);
		$this->assign("a",$a);
		$this->assign("get",$_GET);
		$this->assign("Reques_uri",$Reques_uri);
		$this->assign("table_cfg", $table_cfg);
    	$this->display($table_cfg['tpl']);
	}
	}