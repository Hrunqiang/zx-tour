<?php
class CommonV3Model extends CoreModel{
	protected $connection = 'DB_CONFIG1_zx';
	public function getList($table_obj,$tablestr,$field="*",$offset,$length,$where,$order=''){
		if(empty($table_obj))return false;
		$offset	= empty($offset)?0:$offset;
		$length	= empty($length)?30:$length;
		if(!empty($where)){
			$where	= " where $where  ";
		}else{
			//$where	= " where sdk_num_config.logomini = ''";
			$where = "";
		}
		if(!empty($order)){
			$order	= " order by $order ";
		}else{
			$order	= "";
		}
		//$tables = array_keys($table_obj);
		//$table_str =  $tables[0]." left join ".$tables[1]." on ".$tables[0].".".$table_obj[$tables[0]]['join']." = ".$tables[1].".".$table_obj[$tables[1]]['join'];
		$sql	= "select $field from $tablestr $where $order limit $offset,$length";
// 		$rs	= $this->field($field)->limit($offset,$length)->where("cls = '$cls'")->order("ctime desc")->select();
		$rs	= $this->query($sql);
		//echo $this->getLastSql();
		if($rs){
			for($i=0,$len=count($rs);$i<$len;$i++){
				foreach ($tables as $tab_key =>$tab_val){
					$fields = array_keys($table_obj[$tab_val]['field']);
					foreach ($rs[$i] as $key=>$val){
						if(in_array($key,$fields)&&$table_obj[$tab_val]['field'][$key]['isattr']){
							$rs[$i][$key] = $this->unattr($rs[$i][$key]);
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
			$where	= " where $where ";
		}else{
			$where	= "";
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
	
	public function getInfoById($table_obj,$id,$fieldid="id"){
		if(empty($table_obj)||empty($id))return false;
		$tables = array_keys($table_obj);
		$table_str =  $tables[0]." left join ".$tables[1]." on ".$tables[0].".".$table_obj[$tables[0]]['join']." = ".$tables[1].".".$table_obj[$tables[1]]['join'];
		$id	= intval($id);
		$sql= "select * from $table_str where $tables[0].$fieldid=$id";
		$rs	=  $this->query($sql);
		if($rs && $rs[0]){
			$rs = $rs[0];
			foreach ($tables as $tab_key =>$tab_val){
				$fields = array_keys($table_obj[$tab_val]['field']);
				foreach ($rs as $key=>$val){
					if(in_array($key,$fields)&&$table_obj[$tab_val]['field'][$key]['isattr']){
						$rs[$key] = $this->unattr($rs[$key]);
					}
				}
			}
			return $rs;
		}else{
			return false;
		}
	}
	
	public function modifyById($tables,$id,$data,$fieldid="id"){
		if(empty($tables)||empty($id) || empty($data))return false;
		foreach($tables as $tab_name=>$tab_info){
			$field_arr = array_keys($tab_info['field']);
			if(!$tab_info['iszb']){
				$check_sql = "select * from $tab_name where ".$tab_info['join'] ."= '". $data[$tab_info['join']]."'";
				$check_res = $this->query($check_sql);
				if($check_res){
					foreach($data as $key => $value ){
						if(in_array($key, $field_arr)){
							if($tab_info['field'][$key]['isattr']){
								$value = $this->enattr($value);
							}
							$updatestr .= $key." = '".$value."',";
						}
					}
					$sql = "update $tab_name set ".trim($updatestr,",")." where ".$tab_info['join'] ."= '". $data[$tab_info['join']]."'";
				}else{
					$kstr =  $tab_info['join'].",";
					$vstr = "'".$data[$tab_info['join']]."',";
					foreach($data as $key => $value ){
						if(in_array($key, $field_arr) && $value){
							$kstr .= $key.",";
							$vstr .= "'".$value."',";
						}
					}
					$sql = "insert into $tab_name (".trim($kstr,",").") values (".trim($vstr,",").")" ;
				}
				$res1 = $this->query($sql);
			}else{
				$kstr = "utime = '".Date("Y-m-d H:i:s")."',";
				foreach($data as $key => $value ){
					if(in_array($key, $field_arr)){
						if($tab_info['field'][$key]['isattr']){
							$value = $this->enattr($value);
						}
						$kstr .= $key." = '".$value."',";
					}
				}
				$sql = "update $tab_name set ".trim($kstr,",")." where $fieldid = $id";
				$res = $this->query($sql);
				if($res===false){
					die;
					return false;
				}
			}
			
		}
		return true;
	}
	
	public function del($table,$id,$fieldid="id"){
		if(empty($table)||empty($id))return false;
		$rs	= $this->table($table)->where("$fieldid in( $id )")->data(array('isdel'=>'1','utime'=>time()))->save();
		return $rs;
	}
	
	public function add($tables,$data){	
		if(empty($tables) || empty($data))return false;	
		foreach($tables as $tab_name=>$tab_info){
			$field_arr = array_keys($tab_info['field']);
			if(!$tab_info['iszb']){
				$check_sql = "select * from $tab_name where ".$tab_info['join'] ."= '". $data[$tab_info['join']]."'";
				$check_res = $this->query($check_sql);
				if($check_res){
					foreach($data as $key => $value ){
						if(in_array($key, $field_arr) && $value){
							if($tab_info['field'][$key]['isattr']){
								$value = $this->enattr($value);
							}
							$updatestr .= $key." = '".$value."',";
						}
					}
					$sql = "update $tab_name set ".trim($updatestr,",")." where ".$tab_info['join'] ."= '". $data[$tab_info['join']]."'";
				}else{
					$kstr =  $tab_info['join'].",";
					$vstr = "'".$data[$tab_info['join']]."',";
					foreach($data as $key => $value ){
						if(in_array($key, $field_arr) && $value){
							if($tab_info['field'][$key]['isattr']){
								$value = $this->enattr($value);
							}
							$kstr .= $key.",";
							$vstr .= "'".$value."',";
						}
					}
					$sql = "insert into $tab_name (".trim($kstr,",").") values (".trim($vstr,",").")" ;
				}
				$res1 = $this->query($sql);
			}else{
				$kstr = "ctime,";
				$vstr = "'".Date("Y-m-d H:i:s")."',";
				foreach($data as $key => $value ){
					if(in_array($key, $field_arr) && $value){
						$kstr .= $key.",";
						$vstr .= "'".$value."',";
					}
				}
				$sql = "insert into $tab_name (".trim($kstr,",").") values (".trim($vstr,",").")" ;
				$res = $this->query($sql);
				if($res===false){
					return false;
				}
			}
		}
		return true;
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
			$attr = addslashes(json_encode($attr));
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