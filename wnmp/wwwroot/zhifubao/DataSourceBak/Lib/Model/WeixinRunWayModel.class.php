<?php
/**
 * 
 * @author hhy
 * @createTime 2016-4-17 下午6:42:29
 */
class WeixinRunWayModel extends Model{
	protected $trueTableName = "zx_run_runway";
	protected $connection = 'DB_CONFIG1';

	public function iscreate($openid){
		if(empty($openid)) return false;
		return $this->where("ownerUserId ='$openid'")->find();
	}
	
	public function updateSorce($openid,$sorce){	
		$this->where("ownerUserId='$openid'")->setInc('totalDist',$sorce); // 用户的积分加3
	}
	
	public function updateAddr($openid,$data){
		return $this->where("ownerUserId='$openid'")->save($data); // 用户的积分加3
	}
	
	public function getScoreMC($openid){
		$score = $this->where("ownerUserId='$openid'")->find();
		$score = $score['totalDist'];
		return $this->where("totalDist>'$score'")->count();
	}
	
	public function ischeckcreate($openid){
		if(empty($openid)) return false;
		$sql = "SELECT r.ownerUserId AS userId,r.totalDist,u.nickname AS nick,u.headerimg AS avatar FROM zx_run_runway r  LEFT JOIN zx_run_user u ON ownerUserId = openid WHERE r.ownerUserId = '$openid'";
		return $this->query($sql);
	}
	
	public function getMax(){
		$sql = "SELECT MAX(totalDist) as max FROM `zx_run_runway`";
		return $this->query($sql);
	}
	
	public function getRunwayInfo($ownerid){
		if(empty($ownerid)) return false;
		$rs = $this->iscreate($ownerid);
		if(!$rs){
			$data['ownerUserId'] = $ownerid;
			$data['ctime'] = Date("Y-m-d H:i:s");
			$this->add($data);
		}
		$data = $this->ischeckcreate($ownerid);
		$data[0]['dist'] = 0;
		return $data[0];
	}
	
	public function getRunwayList($openid){
		if(empty($openid)) return false;
		$sql = "SELECT r.runnerUserId,r.ownerUserId,r.createTime,r.dist,u.nickname AS nick,u.headerimg AS avatar FROM zx_run_runer  r LEFT JOIN zx_run_user u ON u.openid = r.runnerUserId WHERE r.ownerUserId = '$openid'";
		return  $this->query($sql);
	}
	
	public function adddick($data){
		if(empty($data['runnerUserId'])||empty($data['ownerUserId'])||empty($data['dist'])||empty($data['createTime'])) return false;
		$this->table('zx_run_runer')->where("runnerUserId='{$data['runnerUserId']}' and ownerUserId='{$data['ownerUserId']}' ")->delete();
		$sql = "INSERT INTO `zx_run_runer` (`ownerUserId`,runnerUserId,createTime,dist) VALUES ('{$data['ownerUserId']}','{$data['runnerUserId']}','{$data['createTime']}','{$data['dist']}')";
		return $this->query($sql);
	}
	
	public function getList($page){
		$page = $page?$page:1;
		$start = ($page-1)*10;
		$limit = "$start,10";
		$sql = "select u.nickname as username,r.totalDist as bestScore from zx_run_runway r left join zx_run_user u on u.openid = r.ownerUserId order by r.totalDist desc limit $limit";
		return $this->query($sql);
	}
}