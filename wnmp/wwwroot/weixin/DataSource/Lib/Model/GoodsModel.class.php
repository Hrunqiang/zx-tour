<?php
/**
 * 赛事相关商品Model类
 * @author hhy
 * createTime 2015-03-31
 */
class GoodsModel extends Model{
	protected  $trueTableName	= "`zx_tb_goods`";
	protected $connection = 'DB_CONFIG1';
	protected $cacheTime = 3600;
		
	/**
	 * 取赛事的所有相关商品（用于赛事详情页使用）
	 * @param unknown_type $matchid
	 * @param unknown_type $pid
	 * @return boolean|Ambigous <unknown, boolean>
	 */
	public function getgoodsForMatchlistByMatchId($matchid,$pid=0,$type){
		if(empty($matchid)) return false;
		$list = $this->field(" id,g_mid,g_name,g_type,g_des,g_currprice,g_price,g_priceinfo,g_priceinfowithout,g_singleprice,g_tips,g_order,g_stockleft ")->where("g_type = $type and g_mid = $matchid and g_pid =$pid and g_state = 0 and g_releaseTime <= NOW() and g_offineTime > NOW() ")->order("g_type asc,g_order desc")->select();
		if($list){
			if($pid == 0){
				$data = $this->getgoodsForMatchlistByMatchId($matchid,$list[0]['id'],$type);
			}else{
				foreach($list as $k=>$v){
					$res = $this->getgoodsForMatchlistByMatchId($matchid,$v['id'],$type);
					if($res){
						$data[$v["id"]] = array($v['g_name'],$res,$v['g_order']);
					}else{
						$data[$v["id"]] = $v;
					}
				}
			}
		}else{
			return false;
		}
		return $data;
	}
	
	/**
	 * 取赛事的所有相半商品
	 * @param unknown_type $matchid
	 * @param unknown_type $pid
	 * @return boolean|Ambigous <unknown, boolean>
	 */
	public function getgoodsByMatchId($matchid,$pid=0,$type){
		if(empty($matchid)) return false;
		$list = $this->getDataByParendId($matchid,$pid,$type);
		if($list){
			if($pid == 0){
				$data = $this->getgoodsByMatchId($matchid,$list[0]['id'],$type);
			}else{
				foreach($list as $k=>$v){
					$res = $this->getgoodsByMatchId($matchid,$v['id'],$type);
					if($res){
						$data[$v["id"]] = array($v['g_name'],$res,$v['g_order']);
					}else{
						$data[$v["id"]] = $v;
					}
				}
			}	
		}else{
			return false;
		}
		return $data;
	}
	
	/**
	 * 根据赛事id查询其所有套餐
	 * @param unknown_type $id
	 * @return boolean
	 */
	public function getMatchMealCityById($id){
		if(empty($id)) return false;
		$list = $this->getDataByParendId($id,0,2);
		if($list[0]['id']){
			$data = $this->getDataByParendId($id,$list[0]['id'],2);
			var_dump($data);
		}
	}
	
	/**
	 * 根据商品父id取所有子商品
	 * @param unknown_type $matchid
	 * @param unknown_type $pid
	 * @param unknown_type $type
	 * @return boolean|unknown
	 */
	public function getDataByParendId($matchid,$pid,$type) {
		if(empty($matchid) || !is_numeric($matchid)) return false;
		$list = $this->field(" id,g_mid,g_name,g_type,g_des,g_currprice,g_price,g_priceinfo,g_priceinfowithout,g_singleprice,g_tips,g_order ")->where("g_type = $type and g_mid = $matchid and g_pid =$pid and g_state = 0 and g_stockleft > 0 and g_releaseTime <= NOW() and g_offineTime > NOW() ")->order("g_type asc,g_order desc")->select();
		return $list;
	}
	
	/**
	 * 取赛事的某一类型的所有商品
	 * @param unknown_type $matchid 赛事id
	 * @param unknown_type $type  类型
	 * @return boolean|unknown
	 */
	public function getDataByTypeId($matchid,$type) {
		if(empty($matchid) || !is_numeric($matchid)) return false;
		$list = $this->field(" id,g_name,g_type,g_des,g_currprice,g_price,g_tips ")->where("g_type = $type and g_mid = $matchid and g_pid <>0 and g_state = 0 and g_stockleft > 0 and g_releaseTime <= NOW() and g_offineTime > NOW() ")->order("g_type asc ,`g_order` desc")->select();
		return $list;
	}
	
	/**
	 * 根据商品id取商品信息
	 * @param unknown_type $id
	 * @return boolean
	 */
	public function getGoodsInfoById($id){
		if(empty($id) || !is_numeric($id)) return false;
		return $this->where("id=$id and g_state = 0 and g_stockleft > 0 and g_releaseTime <= NOW() and g_offineTime > NOW()")->find();
	}
	
	public function getmatchname($id){
		$sql = "select goodscls from ".$this->trueTableName." where id = $id and goodspid = 0 and isdel = 0 ";
		return $this->query($sql); 
	}
	
	public function getmatchid($name){
		$sql = "select id from ".$this->trueTableName." where goodscls = '$name' and goodspid = 0 ";
		return $this->query($sql);
	}
	
	
	
	public function getDataByParendId_v2($id) {
		if(empty($id) || !is_numeric($id)) return false;
		$data = $this->where("goodspid = $id and isdel = 0 and goodsleft > 0 ")->order("`order` desc")->select();
		return $data;
	}
	
	public function getallDataByParendId($id){
		if(empty($id) || !is_numeric($id)) return false;
		$list = $this->where("goodspid = $id and isdel = 0 and goodsleft > 0 ")->order("`order` desc")->select();
		foreach($list as $k=>$v){
			$data[$v['goodscls']] = $this->getDataByParendId_v2($v['id']);
		}
		return $data;
	}
	
	public function updateGoodsCountById($id){
		$id = intval($id);
		if(empty($id)) return false;
		$time = date("Y-m-d H:i:s");
		$sql = "update ".$this->trueTableName." set g_stockleft = g_stockleft-1,g_utime='$time' where id=$id and g_stockleft>=1";
		$rs = $this->query($sql);
		if(!$rs){
			@mwtlog("updateGoodsCountById_error","empty goods[$id] error rs:".json_encode($rs)."\tsql:".$this->getLastSql(),true);
		}
		return $rs;
	}
	
	/**
	 * 更新商品及你商品数量V2版块(减)
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
	
	/**
	 * 更新商品及你商品数量V3版块  (增加、减少)
	 * @param unknown_type $id   商品id
	 * @param unknown_type $num  数量
	 * @param unknown_type $cut  操作方式   （加/减）
	 * @return boolean|mixed
	 */
	public function updateGoodsCountById_v3($id,$num,$cut=true){
		$id = intval($id);
		$cutnum = $num = intval($num);
		if(empty($id)) return false;
		if($cut){
			$info = $this->where('id='.$id.' and g_stockleft>='.$num)->find();
			$cutnum = -1*$cutnum;
		}else{
			$info  = $this->where('id='.$id)->find();
		}
		if($info){
			$time = date("Y-m-d H:i:s");
			$sql = "update ".$this->trueTableName." set g_stockleft = g_stockleft+".$cutnum.",g_utime='$time' where id=$id ";		
			$rs = $this->query($sql);
			if($rs===false){
				@mwtlog("updateGoodsCountById_error","empty goods[$id] error rs:".json_encode($rs)."\tsql:".$this->getLastSql(),true);
				return false;
			}
			if($info['g_pid']!=0 && $info['g_type']!=3){
				if(false===$this->updateGoodsCountById_v3($info['g_pid'],$num,$cut)){
					return false;
				}
			}
			return true;
		}else{
			return false;
		}
	}
	
	public function getwarmgoods($warmleft,$warmDate){
		if(empty($warmleft)) return false;
		$sql = "SELECT m.m_name,g.g_name,gg.g_name AS parent,g.g_stockleft,g.g_offineTime FROM `zx_tb_goods` g  
LEFT JOIN  zx_tb_matchs  m ON m.id= g.g_mid 
LEFT JOIN  zx_tb_goods  gg ON g.g_pid= gg.id 
WHERE m.m_state = 0  AND m.m_untilTime >NOW() AND m.m_releaseTime <NOW() AND m.m_offineTime >NOW()
AND g.g_state = 0 AND gg.g_state = 0 AND g.g_releaseTime <NOW() AND g.g_offineTime >NOW() AND g.g_isgoods=1 AND ( g.g_stockleft <=$warmleft OR g.g_offineTime<='$warmDate') ";
		return $this->query($sql);
	}	
	
	/**
	 *
	 * @param unknown_type $id
	 * @return boolean|mixed
	 */
	public function getgoodsByMatchIdV2($id){
		if(empty($id))  return  false;
		$sql = "
		SELECT id,g_type,g_name,g_currprice,g_price,g_singleprice,g_stock,g_stockleft FROM zx_tb_goods WHERE g_mid = $id AND g_isgoods = 1 AND g_type= 1 AND g_state = 0 AND g_releaseTime < NOW() AND g_offineTime >NOW() AND g_stockleft>0
		UNION ALL
		SELECT id,g_type,g_name,g_currprice,g_price,g_singleprice,g_stock,g_stockleft FROM zx_tb_goods WHERE g_mid = $id AND g_isgoods = 1 AND g_type= 2 AND g_state = 0 AND g_releaseTime < NOW() AND g_offineTime >NOW() AND g_stockleft>0
		ORDER BY  g_currprice ASC";
		return $this->cache(true,$this->cacheTime)->query($sql);
	}
	
}