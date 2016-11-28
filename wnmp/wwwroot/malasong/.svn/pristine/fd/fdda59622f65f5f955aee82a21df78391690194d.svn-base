<?php

/**
 * 快速更新
 * @author kitter
 *
 */
class UpdateAction extends Action {
	Public function _initialize(){
		B('AuthCheck');
	}
	public function index(){
		$table	= htmlspecialchars(addslashes($_POST['tb']));
		$fid	= htmlspecialchars(addslashes($_POST['fid']));
		$id	= htmlspecialchars(addslashes($_POST['id']));
		$fi	= htmlspecialchars(addslashes($_POST['fi']));
		$value	= htmlspecialchars(addslashes($_POST['value']));
		if(		empty($table)	||
				empty($id) 		||
				empty($fi)			||
				empty($value) 
				){
			die('信息不足,请与开发人员联系。');
		}
		if(empty($fid)){
			$fid	= 'id';
		}
		$sql = "update $table set $fi = '$value' where $fid=".$id;
		$M	= new Model();
		$rs	= $M->execute($sql);
		echo $rs;
	}
	
}