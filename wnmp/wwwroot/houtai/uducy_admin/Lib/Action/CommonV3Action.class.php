<?php
class CommonV3Action extends Action{
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
		}
		if(empty($table_cfg['tpl'])){
			$table_cfg['tpl']	= "common:index";
		}
		$tables = array_keys($table_cfg['tables']);
		$where	= $tablestr = '';
		$allfields = array();
		foreach($_GET as $k=>$v){
			if($k=='s' || $k=='a' ||$k=='ac'){
				continue;
			}else{
				foreach($tables as $mk=>$mv){
					$fields = array_keys($table_cfg['tables'][$mv]['field']);
					$allfields[$mv] = $fields;
					if(in_array($k, $fields)){
						$v	= addslashes(trim($v));
						if($v==""){
// 							$where	.=" $mv.$k='' AND ";
// 							if($table_cfg['tables'][$mv]['field'][$k]['type']=='text'){
// 								$where	.=" $mv.$k like '%$v%' AND ";
// 							}else{
// 								$where	.=" $mv.$k='$v' AND ";
// 							}
						}else{
							if($table_cfg['tables'][$mv]['field'][$k]['type']=='text'||$table_cfg['tables'][$mv]['field'][$k]['type']=='textarea'){
								$where	.=" $mv.$k like '%$v%' AND ";
							}else{
								$where	.=" $mv.$k='$v' AND ";
							}
						}
					}
				}
			}
		}

		//$table	= $table_cfg['table'];
		$s		= $table_cfg['s'];
		$a		= $table_cfg['a'];
		$pagenum=$table_cfg['perpage'];//每页数量
		if(empty($where)){
			$where='';
		}
		$Common	= new CommonV3Model();
		$list_field	= '';
		foreach($tables as $mk=>$mv){
			foreach($table_cfg['tables'][$mv]['field'] as $k=>$v){
				if($v['islist']===true){
					$list_field	.= $mv.".".$k.',';
				}
			} 
			if($table_cfg['tables'][$mv]['iszb']){
				$tablestr = $mv." ".$tablestr;
			}else{
				$tablestr.= "  left join $mv on ".$table_cfg['tables'][$mv]['join'];
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
		$table =  $tables[0]." left join ".$tables[1]." on ".$tables[0].".".$table_cfg['tables'][$tables[0]]['join']." = ".$tables[1].".".$table_cfg['tables'][$tables[1]]['join'];
		$where .=" 1 = 1 "; 
		if($ac=='list'){
			B('AuthCheck');
			import("ORG.Mine.pagination");
			if($_GET['page']){
				$currpage = intval($_GET['page']);
			}else
			{
				$currpage = 1;
			}
			$count	= $Common->getCount($tablestr," $where");
			$pageSize=$count;//总数
			$num = ceil($pageSize/$pagenum);
			$start	= $pagenum * ($currpage-1);
			
			$order=$table_cfg['order']?$table_cfg['order']:$tables[0].".ctime desc";
			$list	= $Common->getList($table_cfg['tables'],$tablestr,$list_field,$start,$pagenum,"$where",$order);
			$page  = new pagination($num,$currpage,$Reques_uri."&ac=list&page=\$p");
			if($table_cfg['img']){
				foreach ($list as $key=>$val){
					$list[$key]['img'] =  unserialize($list[$key]['img']);
				}
			}
			
			$this->assign('list', $list );
			$this->assign('count', $count );
			$this->assign('currpage', $currpage );
			$this->assign('page', $page->PageLinks2() );
		}elseif($ac=="edit"){
			$id	= intval($_GET['id']);
			$page	= intval($_GET['page	']);
			if($_POST && $id){
				$rs	= $Common->modifyById($table_cfg['tables'], $id, $_POST);
				if($rs){
					$Reques_uri	= preg_replace("/&id=[\d]+/i", "", $Reques_uri);
					message("修改成功",$Reques_uri."&ac=list&page=$page");
				}else{
					message("修改失败!!!!!!!!",$Reques_uri."&ac=list&page=$page");
				}
			}
			$info	= $Common->getInfoById($table_cfg['tables'], $id);
// 			$info['attr'] = $Common->unattr($info['attr']);
			$this->assign("id",$id);
			$this->assign("info",$info);
		}
		$this->assign("s",$s);
		$this->assign("a",$a);
		$this->assign("get",$_GET);
		$this->assign("Reques_uri",$Reques_uri);
		$this->assign("table", $table_cfg['tables']);
    	$this->display($table_cfg['tpl']);
	}
}