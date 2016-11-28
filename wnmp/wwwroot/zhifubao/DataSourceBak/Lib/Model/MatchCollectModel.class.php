<?php
/**
 * 赛事关注Model类
 * @author hhy
 * createTime 2016-03-30
 */
class MatchCollectModel extends Model{
	protected  $trueTableName	= "zx_tb_collect";
	protected $connection = 'DB_CONFIG1';
	protected $cacheTime = 3600;

	/**
	 * 添加(取消)关注赛事
	 * @param string $uid  用户id
	 * @param string $matchid  赛事id
	 * @return boolean
	 */
	public function changeCollectState($uid,$matchid){
		if(empty($uid)||empty($matchid)) return false;
		if($this->where("`uid`=$uid and `match_id` = $matchid ")->find()){
			if(false === $this->where("`uid`=$uid and `match_id` = $matchid ")->delete()){
				return false;
			}else{
				return 1;
			}		
		}else{
			if(false === $this->data(array("uid"=>$uid,"match_id"=>$matchid))->add()){
				return false;
			}else{
				return 2;
			}
		}
	}
	
	/**
	 * 检测是否有关注赛事
	 * @param unknown_type $uid 用户id
	 * @param unknown_type $matchid  赛事id
	 * @return boolean|Ambigous <mixed, boolean, NULL, multitype:, unknown, string>
	 */
	public function getCollectState($uid,$matchid){
		if(empty($uid)||empty($matchid)) return false;
		return $this->cache(true,$this->cacheTime)->where("`uid`=$uid and `match_id` = $matchid ")->find();
	}
	
	public function getMycollectMatch($uid){
		if(empty($uid)) return false;
		$sql = "SELECT m.id,m.m_name,m.m_state,m.m_releaseTime,m.m_untilTime,m.m_offineTime,m.m_placesleft,m.m_img,m.m_GameTime,m.m_Mtypes,m.m_des,m.m_ptype FROM `zx_tb_collect` c LEFT JOIN `zx_tb_matchs` m ON m.id= c.match_id WHERE c.uid= $uid";
		return $this->cache(true,$this->cacheTime)->query($sql);
	}
	
}