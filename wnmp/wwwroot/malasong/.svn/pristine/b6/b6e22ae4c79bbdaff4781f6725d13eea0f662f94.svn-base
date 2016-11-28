<?php
class CommonModel extends CoreModel{
	protected $connection = 'DB_CONFIG1_zx';
	public function getList($table_cfg,$field="*",$offset,$length,$where,$order=''){
		if(empty($table_cfg))return false;
		$table = $table_cfg['table'];
		$field_arr = array_keys($table_cfg['field']);
		$offset	= empty($offset)?0:$offset;
		$length	= empty($length)?30:$length;
		if(!empty($where)){
			$where	= " where $where and isdel=0 ";
		}else{
			$where	= " where isdel=0 ";
		}
		if(!empty($order)){
			$order	= " order by $order ";
		}else{
			$order	= "";
		}
		$sql	= "select $field from $table $where $order limit $offset,$length";
// 		$rs	= $this->field($field)->limit($offset,$length)->where("cls = '$cls'")->order("ctime desc")->select();
		$rs	= $this->query($sql);
		if($rs){
			foreach($rs as $key => $value){
				foreach ($value as $k => $v){
					if(in_array($k, $field_arr)&&$v){
						if($table_cfg['field'][$k]['isattr']){
							$rs[$key][$k] = $this->unattr($v);
						}
					}
				}
			}
		}
		return $rs;
	}
	
	public function getCount($table,$where){
		if(empty($table))return false;
		$where	= trim($where);
		if(!empty($where)){
			$where	= " where $where and isdel=0 ";
		}else{
			$where	= " where isdel=0 ";
		}
		$sql	= "select count(*) as c from $table $where";
		$rs	= $this->query($sql);
// 		$rs	= $this->field("count(id) as c")->where("cls = '$cls'")->find();
		if($rs && $rs[0]['c']){
			return $rs[0]['c'];
		}else{
			return false;
		}
	}
	
	public function getInfoById($table_cfg,$id,$fieldid="id"){
		if(empty($table_cfg)||empty($id))return false;
		$table = $table_cfg['table'];
		$id	= intval($id);
		$sql= "select * from $table where $fieldid=$id";
		$field_arr = array_keys($table_cfg['field']);
		$rs	=  $this->query($sql);
		if($rs && $rs[0]){
			foreach($rs[0] as $k=>$v){
				if(in_array($k, $field_arr)){
					if($table_cfg['field'][$k]['isattr']){
						$rs[0][$k] = $this->unattr($v);
					}
				}
			}
			return $rs[0];
		}else{
			return false;
		}
	}
	
	public function modifyById($table_cfg,$id,$data,$fieldid="id"){
		if(empty($table_cfg)||empty($id) || empty($data))return false;
		$id	= intval($id);
		$table = $table_cfg['table'];
		$field_arr = array_keys($table_cfg['field']);
		unset($data[$fieldid]);
		$data['utime']=date("Y-m-d H:i:s");
		foreach($data as $k=>$v){	
			if(in_array($k, $field_arr)){
				if($table_cfg['field'][$k]['isattr']){
					$v = $this->enattr($v);
				}
			}
			$data[$k]=$v;
		}
		return $this->table($table)->where("$fieldid = $id")->data($data)->save();
	}
	
	public function del($table,$id,$fieldid="id"){
		if(empty($table)||empty($id))return false;
		$rs	= $this->table($table)->where("$fieldid in( $id )")->data(array('isdel'=>'1','utime'=>Date("Y-m-d H:i:s")))->save();
		return $rs;
	}
	
	public function add($table,$data){
		if(empty($table) || empty($data))return false;
		$date	= date("Y-m-d H:i:s");
		$data['utime']=$date;
		$data['ctime']=$date;
		$fields	= $this->table($table)->getDbFields();
		$sql	= "insert into $table ";
		$kstr	= '(';
		$vstr	= '(';
		foreach($data as $k=>$v){
			$v	= trim($v);
			if(in_array($k, $fields)){
				$kstr	.= "`$k`,";
				$vstr	.= "'$v',";
			}else{
				unset($data[$k]);
			}
		}
		$kstr	= trim($kstr,',').")";
		$vstr	= trim($vstr,',').")";
		$sql	= $sql.$kstr.' values '.$vstr;
		$rs		= $this->execute($sql);
		return $rs;
	}
	
	/**
	 * 属性值处理
	 * @param  $string
	 * @return string
	 */
	public function enattr($string){
		if(!empty($string)){
			$string				= preg_split("/\n/", $string);
			foreach($string as $v){
				$tem=preg_split("/:/", $v,2);
				if(count($tem)>1){
					$attr[trim(htmlspecialchars(addslashes($tem[0])))]	= trim(htmlspecialchars(addslashes($tem[1])));
				}
			}
			$attr = json_encode($attr);
			return $attr;
		}else{
			return "";
		}
	}
	
	public function unattr($string){
		if(!empty($string) && $string!='N;'){
			$array	= json_decode($string,true);
			$out	= '';
			if(is_array($array)){
				foreach($array as $k=>$v){
					$out	.= htmlspecialchars_decode(stripslashes($k)).':'.htmlspecialchars_decode(stripslashes($v))."\n";
				}
				return $out;
			}else{
				return "属性解析失败！";
			}
		}else{
			return "";
		}
	
	}
	
}