<?php
class CommonAction extends Action{
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
			$where	= "cls='$cls'";
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
		$where	= '';
		foreach($_GET as $k=>$v){
			if($k=='s' || $k=='a' ||$k=='ac'){
				continue;
			}elseif(in_array($k, $fields)){
				$v	= addslashes(trim($v));
				if($table_cfg['field'][$k]['type']=='text'){
					$v = strtolower($v);
					$where	.=" LOWER($k) like '%$v%' AND ";
				}else{
					$where	.=" $k='$v' AND ";
				}
			}
		}
		$where	= trim($where);
		$where	= trim($where,'AND');
		
		$table	= $table_cfg['table'];
		$s		= $table_cfg['s'];
		$a		= $table_cfg['a'];
		$pagenum=$table_cfg['perpage'];//每页数量
		if($table_cfg['where']){
			if(empty($where)){
				$where=$table_cfg['where'];
			}else{
				$where.=" and ".$table_cfg['where'];
			}
		}
		$Common	= new CommonModel();
		$list_field	= '';
		foreach($table_cfg['field'] as $k=>$v){
			if($v['islist']===true){
				$list_field	.= $k.',';
			}
		}
		$list_field	= trim($list_field,',');
		
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
		$field = $_GET['field']?$_GET['field']:"id";
		if($ac=='list'){
			B('AuthCheck');
			import("ORG.Mine.pagination");
			if($_GET['page']){
				$currpage = intval($_GET['page']);
			}else
			{
				$currpage = 1;
			}
			$count	= $Common->getCount($table," $where");
			$pageSize=$count;//总数
			$this->assign("count",$count);
			$num = ceil($pageSize/$pagenum);
			$start	= $pagenum * ($currpage-1);
			$orderStr = $table_cfg['order']? $table_cfg['order']:"id desc ";
			$list	= $Common->getList($table_cfg,$list_field,$start,$pagenum,"$where",$orderStr);
			$page  = new pagination($num,$currpage,$Reques_uri."&ac=list&page=\$p");
			$this->assign('list', $list );
			$this->assign('currpage', $currpage );
			$this->assign('page', $page->PageLinks2() );
		}elseif($ac=="edit"){
			$id	= intval($_GET['id']);
			$currpage	= intval($_GET['currpage']);
			if($_POST && $id){
				$rs	= $Common->modifyById($table_cfg, $id, $_POST,$field);
				if($rs){
					$Reques_uri	= preg_replace("/&id=[\d]+/i", "", $Reques_uri);
					message("修改成功",$Reques_uri."&ac=list&page=".$currpage);
				}else{
					message("修改失败!!!!!!!!",$Reques_uri."&ac=list&page=".$currpage);
				}
			}
			$info	= $Common->getInfoById($table_cfg,$id,$field);
			$this->assign("currpage",$currpage);
			$this->assign("id",$id);
			$this->assign("info",$info);
		}elseif($ac=='add'){
			if($_POST){
				$rs	= $Common->add($table, $_POST);
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
					$id[$k]=intval($v);
				}
				$id	= implode(",", $id);
			}else{
				$id	= intval($id);
			}
			$Reques_uri	= $Reques_uri."&ac=list";
			$Reques_uri	= preg_replace("/&?id=?[\d]{0,}/", "", $Reques_uri);
			$delfield = $_GET['delfield']?$_GET['delfield']:"isdel";
			$rs	= $Common->del($table, $id,$field,$delfield,$table_cfg['utimeField']);
			if($rs){
				message("删除成功",$Reques_uri);
			}else{
				message("删除失败!!!!!!!!",$Reques_uri);
			}
		}elseif($ac=='status'){
			$id=$_REQUEST['id'];
			$status = $_GET['status']==1?0:1;
			$Reques_uri	= $Reques_uri."&ac=list";
			$Reques_uri	= preg_replace("/&?id=?[\d]{0,}/", "", $Reques_uri);
			$delfield = $_GET['delfield']?$_GET['delfield']:"isdel";
			$rs	= $Common->updatestatus($table, $id,$field,$status,$delfield,$table_cfg['utimeField']);
			if($rs){
				message("状态修改成功!",$Reques_uri);
			}else{
				message("状态修改失败!!!!!!!!",$Reques_uri);
			}
		}elseif($ac=='explode'){
			B('AuthCheck');
			$list	= $Common->getList($table_cfg,$list_field,'0','3000',"$where","ctime desc,id desc ");
			foreach($table_cfg['field'] as $k=>$v){
				$fieldsname[]=$v['title'];
				
			}
			$this->exportexcel($list, $fieldsname,date('Y-m-d H:i:s'));
			exit;
		}
		
		
		$this->assign("s",$s);
		$this->assign("a",$a);
		$this->assign("get",$_GET);
		$this->assign("Reques_uri",$Reques_uri);
		$this->assign("table_cfg", $table_cfg);
    	$this->display($table_cfg['tpl']);
	}
	
	function exportexcel($data=array(),$title=array(),$filename='report'){
	    header("Content-type:application/octet-stream");
	    header("Accept-Ranges:bytes");
	    header("Content-type:application/vnd.ms-excel");  
	    header("Content-Disposition:attachment;filename=".$filename.".xls");
	    header("Pragma: no-cache");
	    header("Expires: 0");
	    //导出xls 开始
	    if (!empty($title)){
	        foreach ($title as $k => $v) {
	            $title[$k]=iconv("UTF-8", "GB2312",$v);
	        }
	        $title= implode("\t", $title);
	        echo "$title\n";
	    }
	    if (!empty($data)){
	        foreach($data as $key=>$val){
	            foreach ($val as $ck => $cv) {
	                $data[$key][$ck]=iconv("UTF-8", "GB2312", $cv);
	            }
	            $data[$key]=implode("\t", $data[$key]);
	            
	        }
	        echo implode("\n",$data);
	    }
	 }
	
	
}