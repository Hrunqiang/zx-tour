<?php
class GoodsModel extends Model{
	protected  $trueTableName	= "mls_goods";
	protected $connection = 'DB_CONFIG1_zx';
	protected $cacheTime	= 1800;//缓存时间

	private static $html	= '';
	private static $class_arr	= '';
	private static $pid	= '';
	private static $select_option	= '';

	public function getmatchs(){
		return $this->cache(true,$this->cacheTime)->where("goodspid=0")->select();
	}
	
	public function getmatchsname(){
		return $this->cache(true,$this->cacheTime)->field("goodscls")->where("goodspid=0")->select();
	}
	
	public function getmatchlist(){
		$sql = "select * from {$this->trueTableName} where goodspid = 0";
		return $this->query($sql);
	}
	
	public function dafenglei_arr($m,$id,$match)
	{
		if(empty(self::$class_arr)){
			self::$class_arr	= $this->get_all_class();
		}

		if($id=="") $id=0;
		$n = str_pad('',$m,'-',STR_PAD_RIGHT);
		$n = str_replace("-","&nbsp;&nbsp;&nbsp;&nbsp;",$n);
		for($i=0;$i<count(self::$class_arr);$i++){
			if(self::$class_arr[$i]['goodspid']==$id){
				$style="";
				if($id!='0'){
					$style="style=';'";
				}
				//[<a href="">修改</a>] &nbsp; [<a href="">添加下级分类</a>] &nbsp; [<a href="">删除</a>]
				self::$html .= "<tr id='class_".self::$class_arr[$i]['id']."' pid='class_".self::$class_arr[$i]['goodspid']."' ".$style.">\n";
				self::$html .= "	  <td>".$n."|-- <a href=\"\">".self::$class_arr[$i]['goodscls']."</a></td>\n";
				self::$html .= "	  <td>".self::$class_arr[$i]['order']."</td>\n";
				if($m!=0){
					self::$html .= "	  <td>"."￥".self::$class_arr[$i]['goodsprice']."</td>\n";
					
				}else{
					self::$html .="<td></td>";
				}
				self::$html .= "	  <td>".self::$class_arr[$i]['goodsleft']." / ".self::$class_arr[$i]['goodsnum']."</td>\n";
				self::$html .= "	  <td>".self::$class_arr[$i]['ctime']."</td>\n";
				self::$html .= "	  <td>".self::$class_arr[$i]['utime']."</td>\n";
				self::$html .= "	  <td><div align=\"center\">[<a href=\"?s=Match&a=edit&match=$match&id=".self::$class_arr[$i]['id']."\">修改</a>]&nbsp; ";
				//self::$html .= " [<a href=\"?s=Classes&a=add&sname=".$sname."&pid=".self::$class_arr[$i]['id']."\">添加</a>]&nbsp; ";
				//if(1==If_manager){
				self::$html .= " [<a href=\"?s=Match&a=del&match=$match&id=".self::$class_arr[$i]['id']."\" onclick=\"return confirm('删除后不能恢复,确定删除?');\">删除</a>]";
				//}
				if($m==0){
					self::$html .= " [<a href=\"?s=Match&a=add&match=$match&pid=".self::$class_arr[$i]['id']."\" >添加选项</a>]";
				}
				self::$html .= "</div></td>\n";
				self::$html .= "	</tr>\n";
				$this->dafenglei_arr($m+1,self::$class_arr[$i]['id'],$match);
			}
		}
		return self::$html;
	
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
	
			if(self::$class_arr[$i]['goodspid']==$id){
				if(self::$class_arr[$i]['id']==$index){
					self::$select_option .= "        <option value=\"".self::$class_arr[$i]['id']."\" selected=\"selected\">".$n."|--".self::$class_arr[$i]['goodscls']."</option>\n";
				}else{
					self::$select_option .= "        <option value=\"".self::$class_arr[$i]['id']."\">".$n."|--".self::$class_arr[$i]['goodscls']."</option>\n";
				}
				$this->dafenglei_select($m+1,self::$class_arr[$i]['id'],$index);
	
			}
	
		}
		return self::$select_option;
	}
	
	public function getmatch_info($id){
		$sql = "SELECT g.id,g.goodscls,i.beizhu FROM mls_goods g LEFT JOIN  mls_matchinfo i ON g.id = i.`match_id` WHERE g.id = ".$id;
		return $this->query($sql);
	}
	
	private function get_all_class(){
		$rs	= $this->where('isdel=0')->order("`order` desc,utime desc")->select();
		// 	$sql = "select * from v_common_class order by orderid asc,add_time desc";
		// 	app_db::query($sql);
		// 	self::$class_arr	= app_db::fetch_all();
		return $rs;
	}
	
}