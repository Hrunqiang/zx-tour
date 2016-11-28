<?php
/**
 * 赛事Model
 * @author Administrator
 * createTime 2016-03-29
 */
class MatchInfoModel extends Model{
	protected  $trueTableName	= "zx_tb_matchs";
	protected $connection = 'DB_CONFIG1';
	private $cacheTime	= '3600';
	
	/**
	 * 取赛事的相关信息
	 * @param unknown_type $id 赛事id
	 * @return boolean
	 */
	public function getMatchById($id){
		if(empty($id)) return false;
		$sql  = "select * from {$this->trueTableName} where id = $id";
		return $this->cache(true,$this->cacheTime)->query($sql);
	}
	
	/**
	 * 按条件返回赛事列表
	 * @param unknown_type $where
	 * @param unknown_type $page
	 * @param unknown_type $lenght
	 * @return Ambigous <multitype:, mixed, boolean>
	 */
	public function getMatchList($where,$page=1,$lenght=10){
		if($where){
			$where = $where." and m_state = 0 and m_isshow=1 and m_releaseTime < NOW() and m_offineTime > NOW() ";
		}else{
			$where = " m_state = 0 and m_isshow=1 and m_releaseTime < NOW() and m_offineTime > NOW() ";
		}
		$limit	= '';
		$start	= ($page-1)*$lenght;
		$limit	= "limit $start,$lenght ";
		$sql = " select * from {$this->trueTableName} where $where order by m_order desc,id desc $limit";
		return $this->cache(true,$this->cacheTime)->query($sql);
	}
	
	/**
	 * 有赛事的国家v2（只筛选可以报名的比赛）
	 * @return Ambigous <mixed, multitype:, boolean>
	 */
	public function  getMatchCountryV2(){
		$sql = "SELECT  m_ptype, m_country ,m_city FROM `zx_tb_matchs`  WHERE m_ptype='国内' and m_state=0 and m_isshow=1 and m_releaseTime < NOW() and m_offineTime > NOW() UNION SELECT  m_ptype, m_country ,m_city FROM `zx_tb_matchs`  WHERE m_ptype='海外' and  m_state=0 and m_isshow=1 and m_releaseTime < NOW() and m_offineTime > NOW() order by m_city desc";
		return $this->cache(true,$this->cacheTime)->query($sql);
	}
	
	public function getMatchListNoneCache($where,$page=1,$lenght=9999){
		if($where){
			$where = $where." and m_state = 0 and m_releaseTime < NOW() and m_offineTime > NOW() ";
		}else{
			$where = " m_state = 0 and m_releaseTime < NOW() and m_offineTime > NOW() ";
		}
		$limit	= '';
		$start	= ($page-1)*$lenght;
		$limit	= "limit $start,$lenght ";
		$sql = " select * from {$this->trueTableName} where $where order by m_order desc,id desc $limit";
		return $this->query($sql);
	}
	
	/**
	 * 根据id查找赛事
	 * @param unknown_type $id
	 * @return boolean|Ambigous <multitype:, boolean>
	 */
	public function checkMatchById($id){
		if(empty($id)) return false;
		$sql  = "select * from {$this->trueTableName} where id = $id and m_untilTime > NOW() and m_releaseTime <= NOW() and m_offineTime >NOW() and m_state=0 and m_placesleft >0 ";
		return $this->query($sql);
	}
	
	/**
	 * 有赛事的国家
	 * @return Ambigous <mixed, multitype:, boolean>
	 */
	public function  getMatchCountry(){
		$sql = "SELECT  m_ptype, m_country ,m_city FROM `zx_tb_matchs`  WHERE m_ptype='国内' UNION SELECT  m_ptype, m_country ,m_city FROM `zx_tb_matchs`  WHERE m_ptype='海外'";
		return $this->cache(true,$this->cacheTime)->query($sql);
	}
	
	public function updateMatchLeft($id,$num){
		if(empty($id)) return false;
		if($num>0){
			return $this->where("id=$id")->setInc('m_placesleft',$num);
		}else{
			$currnum = $this->field("m_placesleft")->where("id=$id")->find();
			if($currnum['m_placesleft']>0){
				return $this->where("id=$id")->setDec('m_placesleft',abs($num));
			}else{
				return false;
			}
			
		}
		
		
	}
	
	/**
	 * 按条件筛选赛事列表（不分页）
	 * @param unknown_type $where
	 * @param unknown_type $page
	 * @param unknown_type $lenght
	 * @return Ambigous <multitype:, mixed, boolean>
	 */
	public function search($where,$order){
		if($where){
			$where = $where." m_state = 0 and m_isshow=1 and m_releaseTime < NOW() and m_offineTime > NOW() ";
		}else{
			$where = " m_state = 0 and m_isshow=1 and m_releaseTime < NOW() and m_offineTime > NOW() ";
		}
		$sql = " select * from {$this->trueTableName} where $where order by $order m_order desc,m_offineTime desc,id desc";
		return $this->cache(true,$this->cacheTime)->query($sql);
	}
	
	/**
	 * 按条件筛选赛事列表（不分页）V2
	 * @param unknown_type $where
	 * @param unknown_type $order
	 * @param unknown_type $type
	 * @return Ambigous <mixed, multitype:, boolean>
	 */
	public function searchV2($where,$order,$type){
		$initwhere = " m_state = 0 and m_isshow=1 and m_releaseTime < NOW() and m_offineTime > NOW() ";
		$initorder = " m_GameTime asc,m_order desc,id desc ";
		switch($type){
			case 1:
				$initwhere .= " and m_sign=1 ";
				$initorder = " m_order desc,m_GameTime asc,id desc ";
				break;
			case 2:
				$initwhere .= " and m_sign=0 and m_placesleft>0 and m_untilTime>NOW() and m_GameTime>NOW() ";		
				break;
			case 3:
				$initwhere .= " and m_sign=0 and (m_placesleft<=0 or m_untilTime<=NOW() or m_GameTime<NOW()) ";
				$initorder = " m_GameTime desc,m_order desc,id desc ";
				break;
			default:
				break;
		}
		if($where){
			$where = $where.$initwhere;
		}else{
			$where = $initwhere;
		}
		$sql = " select id,m_name,m_GameTime,m_untilTime,m_releaseTime,m_offineTime,m_city,m_Mtypes,m_ptype,m_sign,m_enterMode,m_placesleft,m_places,m_enterurl,m_state,m_img,m_order,m_country,m_area,m_signuptime,m_mtypes_class,m_des from {$this->trueTableName} where $where order by $order $initorder ";
		return $this->cache(true,$this->cacheTime)->query($sql);
	}
	

}