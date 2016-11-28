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
	
	public function getMatchListNoneCache($where,$page=1,$lenght=10){
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
			return $this->where("id=$id")->setDec('m_placesleft',abs($num));
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
		$sql = " select * from {$this->trueTableName} where $where order by $order m_order desc,id desc";
		return $this->cache(true,$this->cacheTime)->query($sql);
	}
	

}