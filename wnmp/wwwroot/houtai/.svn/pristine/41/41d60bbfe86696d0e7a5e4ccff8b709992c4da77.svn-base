<?php
class ClassModel extends CoreModel {
	protected  $trueTableName	= "zx_tb_class";
	private static $html	= '';
	private static $class_arr	= '';
	private static $pid	= '';
	private static $select_option	= '';
	protected $connection = 'DB_CONFIG1_zx';
/**
 * 分类显示
 * @param  $m
 * @param  $id
 */
public function dafenglei_arr($m,$id,$sname='')
{
	if(empty(self::$class_arr)){
		self::$class_arr	= $this->get_all_class();
	}
	if($id=="") $id=0;
	$n = str_pad('',$m,'-',STR_PAD_RIGHT);
	$n = str_replace("-","&nbsp;&nbsp&nbsp;&nbsp;",$n);
	for($i=0;$i<count(self::$class_arr);$i++){
		$sname = self::$class_arr[$i]['short_name'];
		if(self::$class_arr[$i]['pid']==$id){
			$style="";
			if($id!='0'){
				$style="style=';'";
			}
			//[<a href="">修改</a>] &nbsp; [<a href="">添加下级分类</a>] &nbsp; [<a href="">删除</a>]
		self::$html .= "<tr id='class_".self::$class_arr[$i]['id']."' pid='class_".self::$class_arr[$i]['pid']."' ".$style.">\n";
		self::$html .= "	  <td>".$n."|-- <a href=\"?s=Classes&a=content&ac=list&sname=".$sname."&cid=".self::$class_arr[$i]['id']."\">".self::$class_arr[$i]['classname']."</a></td>\n";
		self::$html .= "	  <td>".$n."|-- <a href=\"?s=Classes&a=content&ac=list&sname=".$sname."&cid=".self::$class_arr[$i]['id']."\">".self::$class_arr[$i]['short_name']."</a> [<a href='./?s=Classes&a=content&sname=".$sname."&ac=add&cid=".self::$class_arr[$i]['id']."'>添加内容</a>]</td>\n";
		self::$html .= "	  <td><div align=\"center\" class=\"update_order\" info=\"".self::$class_arr[$i]['id']."|ios_news_class|orderid|id\">".self::$class_arr[$i]['orderid']."</div></td>\n";
		self::$html .= "	  <td><div align=\"center\">[<a href=\"?s=Classes&a=edit&sname=".$sname."&id=".self::$class_arr[$i]['id']."\">修改</a>]&nbsp; ";
		self::$html .= " [<a href=\"?s=Classes&a=add&sname=".$sname."&pid=".self::$class_arr[$i]['id']."\">添加</a>]&nbsp; ";
		if(1==If_manager){
		self::$html .= " [<a href=\"?s=Classes&a=del&id=".self::$class_arr[$i]['id']."\" onclick=\"return confirm('删除后不能恢复,确定删除?');\">删除</a>]";
		}
		self::$html .= "</div></td>\n";
		self::$html .= "	</tr>\n";		
			$this->dafenglei_arr($m+1,self::$class_arr[$i]['id'],$sname);
		}
	}
	return self::$html;
	
}
public function get_cid_by_sname($sname){
	if(empty($sname))return false;
	return $this->field('id')->where("short_name='$sname'")->find();
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
				$attr[$tem[0]]	= trim(htmlspecialchars(addslashes($tem[1])));
			}
		}
		return serialize($attr);
	}
}

public function unattr($string){
	if(!empty($string) && $string!='N;'){
		$array	= unserialize($string);
		$out	= '';
		if(is_array($array)){
			foreach($array as $k=>$v){
				$out	.= $k.':'.htmlspecialchars_decode(stripslashes($v))."\n";
			}
			return $out;
		}else{
			MessageAction::mesg('/?s=Classes&a=index', "解析属性失败,请联系管理员。");
		}
	}
	
}

/**
 * 选择分类
 * @param  $m
 * @param  $id
 * @param  $index
 */
public function dafenglei_select($m,$id,$index)
{
	if(empty(self::$class_arr)){
		self::$class_arr	= $this->get_all_class();
	}
	$n = str_pad('',$m,'-',STR_PAD_RIGHT);
	$n = str_replace("-","&nbsp;&nbsp;&nbsp;&nbsp;",$n);
	for($i=0;$i<count(self::$class_arr);$i++){

		if(self::$class_arr[$i]['pid']==$id){
			if(self::$class_arr[$i]['id']==$index){
				self::$select_option .= "        <option value=\"".self::$class_arr[$i]['id']."\" selected=\"selected\">".$n."|--".self::$class_arr[$i]['classname']."</option>\n";
			}else{
				self::$select_option .= "        <option value=\"".self::$class_arr[$i]['id']."\">".$n."|--".self::$class_arr[$i]['classname']."</option>\n";
			}
			$this->dafenglei_select($m+1,self::$class_arr[$i]['id'],$index);
				
		}

	}
	return self::$select_option;
}

private function get_all_class(){
	$rs	= $this->where('isdel=0')->order("orderid desc,utime desc")->select();
// 	$sql = "select * from v_common_class order by orderid asc,add_time desc";
// 	app_db::query($sql);
// 	self::$class_arr	= app_db::fetch_all();
	return $rs;
}

public function get_class_by_id($id){
	if(empty($id))return false;
	return $this->where("id = $id")->find();
}

/**
 * 获取分类的定义字段
 * @param class id $id
 * @return boolean|mixed
 */
public function getClassField($id){
	if(empty($id) || !is_numeric($id)) return false;
	$rs	= $this->field('fields')->where("id = $id")->find();
	if($rs && $rs['fields']){
		return $rs['fields'];
	}else{
		return false;
	}
}

	
}