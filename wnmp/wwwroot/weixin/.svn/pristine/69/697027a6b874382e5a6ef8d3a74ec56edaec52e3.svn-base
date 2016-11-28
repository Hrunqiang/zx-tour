<?php
class GoodsV2Model extends Model{
	protected  $trueTableName	= "`zx_tb_goods`";
	protected $connection = 'DB_CONFIG1_zx';
	protected $cacheTime	= 1800;//缓存时间

	private static $html	= '';
	private static $class_arr	= '';
	private static $pid	= '';
	private static $select_option	= '';
	
	public function dafenglei_arr($m,$id,$match)
	{
		if(empty(self::$class_arr)){
			self::$class_arr	= $this->get_all_class($match);
		}

		if($id=="") $id=0;
		$n = str_pad('',$m,'-',STR_PAD_RIGHT);
		$n = str_replace("-","&nbsp;&nbsp;&nbsp;&nbsp;",$n);
		for($i=0;$i<count(self::$class_arr);$i++){
			if(self::$class_arr[$i]['g_pid']==$id){
				if(self::$class_arr[$i]['g_type']!=4){
					$style="";
					if($id!='0'){
						$style="style=';'";
					}
					//[<a href="">修改</a>] &nbsp; [<a href="">添加下级分类</a>] &nbsp; [<a href="">删除</a>]
					self::$html .= "<tr id='class_".self::$class_arr[$i]['id']."' pid='class_".self::$class_arr[$i]['g_pid']."' ".$style.">\n";
					self::$html .= "	  <td>".$n."|-- <a href=\"\">".self::$class_arr[$i]['g_name']."</a></td>\n";
					self::$html .= "	  <td>".self::$class_arr[$i]['g_order']."</td>\n";
					if(self::$class_arr[$i]['g_isgoods']==1){
						if(self::$class_arr[$i]['g_type']==2){
							self::$html .= "	  <td>"."￥".self::$class_arr[$i]['g_currprice']." / "."￥".self::$class_arr[$i]['g_price']."　(单房差"."￥".self::$class_arr[$i]['g_singleprice'].")　　<a href='?s=MatchV2&a=trip&ac=list&matchid=".self::$class_arr[$i]['g_mid']."&mealid=".self::$class_arr[$i]['id']."'>查看行程</a>  </td>\n";
						}else{
							self::$html .= "	  <td>"."￥".self::$class_arr[$i]['g_currprice']." / "."￥".self::$class_arr[$i]['g_price']."</td>\n";
						}
					}else{
						self::$html .="<td></td>";
					}
					self::$html .= "	  <td>".self::$class_arr[$i]['g_stockleft']." / ".self::$class_arr[$i]['g_stock']."</td>\n";
					self::$html .= "	  <td>".self::$class_arr[$i]['g_releaseTime']."</td>\n";
					self::$html .= "	  <td>".self::$class_arr[$i]['g_offineTime']."</td>\n";
					self::$html .= "	  <td><div align=\"center\">[<a href=\"?s=MatchV2&a=goodscontent&ac=edit&type=".self::$class_arr[$i]['g_type']."&isgoods=".self::$class_arr[$i]['g_isgoods']."&pid=".self::$class_arr[$i]['g_pid']."&match=$match&id=".self::$class_arr[$i]['id']."\">修改</a>]&nbsp; ";
					//self::$html .= " [<a href=\"?s=Classes&a=add&sname=".$sname."&pid=".self::$class_arr[$i]['id']."\">添加</a>]&nbsp; ";
					if(self::$class_arr[$i]['g_pid']!=0){
					self::$html .= " [<a href=\"?s=MatchV2&a=del&match=$match&id=".self::$class_arr[$i]['id']."\" onclick=\"return confirm('删除后不能恢复,确定删除?');\">删除</a>]";
					self::$html .= " [<a href=\"?s=MatchV2&a=copy&match=$match&id=".self::$class_arr[$i]['id']."\" >复制</a>]";
					}
					if($m==0||(self::$class_arr[$i]['g_type']==2 &&self::$class_arr[$i]['g_isgoods']!=1)){
						self::$html .= " [<a href=\"?s=MatchV2&a=goodscontent&ac=add&match=$match&pid=".self::$class_arr[$i]['g_pid']."&id=".self::$class_arr[$i]['id']."&type=".self::$class_arr[$i]['g_type']."\" >添加选项</a>]";
					}
					self::$html .= "</div></td>\n";
					self::$html .= "	</tr>\n";
				}else{
					if($m!=0){
						self::$html .= '<td>|-- <a href="">备注</a></td><td colspan="5"><textarea id="beizhu" style="width:100%;"  placeholder="编辑备注……"/>'.self::$class_arr[$i]['g_des'].'</textarea></td><td><div align="center">[<a onclick="javascript:edit_beizhu('.self::$class_arr[$i]['id'].')">保存修改</a>]</div></td></tr>';
					}				
				}
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
	public function dafenglei_select($m,$id,$index,$match,$type)
	{
		if(empty(self::$class_arr)){
			self::$class_arr	= $this->get_parent_class($match,$type);
		}
		$n = str_pad('',$m,'-',STR_PAD_RIGHT);
		$n = str_replace("-","&nbsp;&nbsp;&nbsp;&nbsp;",$n);
		for($i=0;$i<count(self::$class_arr);$i++){
	
			if(self::$class_arr[$i]['g_pid']==$id){
				if(self::$class_arr[$i]['id']==$index){
					self::$select_option .= "        <option value=\"".self::$class_arr[$i]['id']."\" selected=\"selected\">".$n."|--".self::$class_arr[$i]['g_name']."</option>\n";
				}else{
					self::$select_option .= "        <option value=\"".self::$class_arr[$i]['id']."\">".$n."|--".self::$class_arr[$i]['g_name']."</option>\n";
				}
				$this->dafenglei_select($m+1,self::$class_arr[$i]['id'],$index,$match,$type);
			}
		}
		return self::$select_option;
	}
	
	public function getmeal_info($id){
		
		return $this->where("id={$id}")->find();
	}
	
	private function get_all_class($match){
		if($match){
			$where = "g_state=0 and g_mid= $match ";
		}else{
			$where = "g_state=0 ";
		}
		$rs	= $this->where($where)->order("`g_order` desc,g_utime desc")->select();
		// 	$sql = "select * from v_common_class order by orderid asc,add_time desc";
		// 	app_db::query($sql);
		// 	self::$class_arr	= app_db::fetch_all();
		return $rs;
	}
	
	private function get_parent_class($match,$type){
		echo $type;
		if($type){
			$typewhere = "g_type = $type";
		}else{
			$typewhere = "g_type!= 4";
		}
		if($match){
			$where = "g_state=0 and $typewhere and g_isgoods=0 and g_mid= $match ";
		}else{
			$where = "g_state=0 and $typewhere and g_isgoods=0 ";
		}
		$rs	= $this->where($where)->order("`g_order` desc,g_utime desc")->select();
		// 	$sql = "select * from v_common_class order by orderid asc,add_time desc";
		// 	app_db::query($sql);
		// 	self::$class_arr	= app_db::fetch_all();
		echo $this->getLastSql();
		return $rs;
	}
	
	public function createMatchGoods($id){
		if(empty($id)) return false;
		$arr = array(
				array("g_name"=>"赛程","g_pid"=>0,"g_mid"=>$id,"g_stock"=>10000,"g_stockleft"=>10000,"g_type"=>1,"g_isgoods"=>0),
				array("g_name"=>"套餐","g_pid"=>0,"g_mid"=>$id,"g_stock"=>10000,"g_stockleft"=>10000,"g_type"=>2,"g_isgoods"=>0),
				array("g_name"=>"附加优质服务","g_pid"=>0,"g_mid"=>$id,"g_stock"=>10000,"g_stockleft"=>10000,"g_type"=>3,"g_isgoods"=>0),
				array("g_name"=>"备注","g_pid"=>0,"g_mid"=>$id,"g_stock"=>10000,"g_stockleft"=>10000,"g_type"=>4,"g_isgoods"=>0),
		);
		foreach($arr as $key=>$val){
			$res = $this->add($val);
			if($key==3){
				$data = array(
						"g_name"=>"备注提示",
						"g_pid"=>$res,
						"g_mid"=>$id,
						"g_stock"=>10000,
						"g_stockleft"=>10000,
						"g_type"=>4,
						"g_isgoods"=>0,
						"g_des"=>"有特殊需求请留言");
				$this->add($data);
			}
		}
	}
	
	/**
	 * 更新商品及你商品数量V2版块
	 * @param unknown_type $id
	 * @return boolean|mixed
	 */
	public function updateGoodsCountById_v2($id){
		$id = intval($id);
		if(empty($id)) return false;
		$info  = $this->where('id='.$id.' and g_stockleft>=1')->find();
		if($info){
			$time = date("Y-m-d H:i:s");
			$sql = "update ".$this->trueTableName." set g_stockleft = g_stockleft-1,g_utime='$time' where id=$id and g_stockleft>=1";
			$rs = $this->query($sql);
			if($rs===false){
				@mwtlog("updateGoodsCountById_error","empty goods[$id] error rs:".json_encode($rs)."\tsql:".$this->getLastSql(),true);
				//return false;
			}
			if($info['g_pid']!=0 && $info['g_type']!=3){
				if(false===$this->updateGoodsCountById_v2($info['g_pid'])){
					return false;
				}
			}
			return true;
		}else{
			return false;
		}
	}
	
}