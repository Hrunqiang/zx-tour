<?php
/**
 * 赛事提醒Model类
 * @author hhy
 * createTime 2016-03-30
 */
class MatchRemindModel extends Model{
	protected  $trueTableName	= "zx_tb_remind";
	protected $connection = 'DB_CONFIG1';
	protected $cacheTime = 3600;

	
	/**
	 * 检测是否有关注赛事
	 * @param unknown_type $uid 用户id
	 * @param unknown_type $matchid  赛事id
	 * @return boolean|Ambigous <mixed, boolean, NULL, multitype:, unknown, string>
	 */
	public function getRemindState($uid,$matchid){
		if(empty($uid)||empty($matchid)) return false;
		return $this->cache(true,$this->cacheTime)->where("`uid`=$uid and `m_id` = $matchid ")->find();
	}
	
	public function setRemind($uid,$matchid,$data){
		if(empty($uid) || empty($matchid)) return false;
		for($i=0;$i<3;$i++){
			$add= array();
			if($data[$i]){
				$add['m_id'] = $matchid;
				$add['uid'] = $uid;
				$add['stats'] = 0;
				$add['ctime'] = $add['utime'] = Date("Y-m-d H:i:s");
				$add['type'] = $i+1;
				$this->add($add);
			}
		}
		return true;
	}
	
}