<?php
/**
 * 分类Model
 * @author Administrator
 * createTime 2016-03-20
 */
class ClassInfoModel extends Model {
	protected  $trueTableName	= "zx_tb_classinfo";
	protected  $ChirdTableName	= "zx_tb_class";
	protected $connection = 'DB_CONFIG1';
	private $cacheTime	= '3600';
	
	/**
	 * 根据sname获取内容
	 * @param  $sname
	 * @param  $lenght
	 * @param  $page
	 * @param  $field
	 * @param  $where
	 * @return boolean|Ambigous <multitype:, boolean>
	 */
	public function getContent($sname,$lenght=10,$page=1,$field='',$where='',$order){
		if(empty($sname)) return false;
		if(empty($field)){
			$field	= 'info.id,info.cid,cls.classname,info.n_title,info.n_img,info.n_url,info.sign,info.orderid ';
		}
		if(!empty($where)){
			$where	= 'AND '.$where.' ';
		}
		$limit	= '';
		$start	= ($page-1)*$lenght;
		$limit	= "limit $start,$lenght ";
		$sql	= "SELECT $field FROM `{$this->ChirdTableName}` cls LEFT JOIN {$this->trueTableName} info ON  cls.id = info.cid WHERE cls.short_name='$sname' AND cls.isdel=0 AND info.isdel=0 and info.isdisplay=1 AND info.itime<=NOW() AND info.offtime>NOW() $where order by $order info.sign desc,info.orderid desc,info.utime desc,id DESC  $limit";
		$rs=$this->cache(true,$this->cacheTime)->query($sql);
		unset($start,$limit,$sql,$field,$where);
		return $rs;
	}
	
	public function getContentTotalNum($sname,$sign=0){
		$sql= "select count(id) as num from ios_news where cid = (select id from ios_news_class where short_name = '".$sname."') and isdel = 0 and isdisplay = 1 and itime<=now() and offtime>NOW() and sign >=".$sign;
		$rs	= $this->cache(true,$this->cacheTime)->query($sql);
		return $rs;
	}
	
	public function getchildsname($sname){
		$sql = "select short_name,classname,`describe` from ios_news_class where pid = (select id from ios_news_class where short_name = '$sname') order by orderid asc";
		$rs	= $this->cache(true,$this->cacheTime)->query($sql);
		return $rs;
	}

	public function setStatistics($id,$idfa,$cid){
		$sql = "insert into ios_setStatistics (cid,idfa,n_id,ctime) values($cid,'".$idfa."',".$id.",'".Date("Y-m-d H:i:s")."')";
		$rs = $this->query($sql);
		$redis = new Redis();
		if($redis->connect(C('REDIS_HOST'), C('REDIS_POST'))){
			$redis -> sadd("KS_IFA_TAIL",$idfa);
		}
	}
	
	
	public function getContent_crontab($sname,$lenght=10,$page=1,$field='',$where='',$order){
		if(empty($sname)) return false;
		if(empty($field)){
			if('er_index_game'==$sname||'er_index_game_2'==$sname){
				$field	= 'news.id,news.cid,cls.classname,news.n_title as title,news.n_img as img_url,news.n_url as game_url,news.orderid,news.n_des as description,news.utime,news.sign';
			}else if('quick'==$sname){
				$field = "news.id,news.cid,news.n_title,news.n_img,news.n_url,news.n_from,news.sign,news.n_des ";
				$order = "news.sign desc," ;
			}else if('quick_tail'==$sname){
				$field	= 'news.id,news.cid,cls.classname,news.n_title,news.n_img,news.n_url,news.orderid,news.n_des,news.utime,news.n_imgsize,news.sign,news.n_url_type';
			}else{
				$field	= 'news.id,news.cid,cls.classname,news.n_title,news.n_img,news.n_url,news.orderid,news.n_des,news.utime,news.n_imgsize,news.sign';
			}
		}
		if(!empty($where)){
			$where	= 'AND '.$where.' ';
		}
		$limit	= '';
		$start	= ($page-1)*$lenght;
		$limit	= "limit $start,$lenght ";
		$sql	= "SELECT $field FROM `ios_news_class` cls LEFT JOIN ios_news news ON  cls.id = news.cid WHERE cls.short_name='$sname' AND cls.isdel=0 AND news.isdel=0 AND news.isdisplay=1 AND news.itime<=NOW() AND news.offtime>NOW() $where order by $order news.orderid asc,news.utime desc,id DESC  $limit";
		$rs	= $this->query($sql);
		unset($start,$limit,$sql,$field,$where);
		return $rs;
	}
	
	/**
	 * SDK 根据sname获取内容
	 * @param unknown_type $sname
	 * @param unknown_type $lenght
	 * @param unknown_type $page
	 * @param unknown_type $field
	 * @param unknown_type $where
	 * @param unknown_type $order
	 * @return boolean|Ambigous <multitype:, mixed, boolean>
	 */
	public function getContent_sdk($channel,$sname,$lenght=10,$page=1,$field='',$where=''){
		if(empty($sname)) return false;
		if(empty($field)){
				$order = "news.sign desc," ;
				$field	= 'news.id,news.cid,cls.classname,news.n_title,news.n_img,news.n_url,news.orderid,news.n_des,news.utime,news.n_imgsize,news.sign,news.n_url_type';
		}
		if(!empty($where)){
			$where	= 'AND '.$where.' and ( news.id not in (select app_id from ios_sdk_blacklist where channel = "'.$channel.'") ) AND (news.channel='.$channel.')';
		}
		$limit	= '';
		$start	= ($page-1)*$lenght;
		$limit	= "limit $start,$lenght ";
		$sql	= "SELECT $field FROM `ios_news_class` cls LEFT JOIN ios_news news ON  cls.id = news.cid WHERE cls.short_name='$sname' AND cls.isdel=0 AND news.isdel=0 AND news.isdisplay=1 AND news.itime<=NOW() AND news.offtime>NOW() $where order by $order news.orderid asc,news.utime desc,id DESC  $limit";
		$rs	= $this->cache(true,$this->cacheTime)->query($sql);
		unset($start,$limit,$sql,$field,$where);
		return $rs;
	}
	
	public function get_built_in($channel,$page=1,$lenght=10){
		if(empty($channel)) return false;
		$sname = "quick";
		$field	= 'news.id,news.cid,cls.classname,news.n_title,news.n_img,news.n_url,news.orderid,news.n_des,news.utime,news.n_imgsize,news.sign,news.n_url_type';
		$where	= ' AND news.channel='.$channel.' AND news.id not in (select app_id from ios_sdk_blacklist where channel = "'.$channel.'")';
		$limit	= '';
		$start	= ($page-1)*$lenght;
		$limit	= "limit $start,$lenght ";
		$sql	= "SELECT $field FROM `ios_news_class` cls LEFT JOIN ios_news news ON  cls.id = news.cid WHERE cls.short_name='$sname' AND cls.isdel=0 AND news.isdel=0 AND news.isdisplay=1 AND news.itime<=NOW() AND news.offtime>NOW() $where order by news.orderid asc,news.utime desc,id DESC  $limit";
		$rs	= $this->cache(true,$this->cacheTime)->query($sql);
		unset($start,$limit,$sql,$field,$where);
		return $rs;
	}
	
	/**
	 * 通知栏广告
	 * @param unknown_type $channel
	 * @param unknown_type $page
	 * @param unknown_type $lenght
	 * @return boolean|Ambigous <mixed, multitype:, boolean>
	 */
	public function get_adv($channel,$page=1,$lenght=10){
		if(empty($channel)) return false;
		$sname = "quick";
		$field	= 'news.id,news.cid,cls.classname,news.n_title,news.n_img,news.n_from as n_url,news.n_url as n_from,news.orderid,news.n_des,news.utime,news.n_imgsize,news.sign,news.n_url_type';
		if($channel == "quick"){
			$where = " AND news.isadv=1 ";
		}else{
			$where	= 'AND news.isadv=1 AND news.id not in (select app_id from ios_sdk_blacklist where channel = "'.$channel.'")';
		}
		$limit	= '';
		$start	= ($page-1)*$lenght;
		$limit	= "limit $start,$lenght ";
		$sql	= "SELECT $field FROM `ios_news_class` cls LEFT JOIN ios_news news ON  cls.id = news.cid WHERE cls.short_name='$sname' AND cls.isdel=0 AND news.isdel=0 AND news.isdisplay=1 AND news.itime<=NOW() AND news.offtime>NOW() $where order by news.orderid asc,news.utime desc,id DESC  $limit";
		$rs	= $this->cache(true,$this->cacheTime)->query($sql);
		unset($start,$limit,$sql,$field,$where);
		return $rs;
	}
	
	/**
	 * 设置栏广告
	 * @param unknown_type $channel
	 * @param unknown_type $page
	 * @param unknown_type $lenght
	 * @return boolean|Ambigous <mixed, multitype:, boolean>
	 */
	public function get_setup_adv($channel,$page=1,$lenght=10){
		if(empty($channel)) return false;
		$sname = "quick";
		$field	= 'news.id,news.cid,news.n_price,cls.classname,news.n_title,news.n_img,news.n_url,news.orderid,news.n_des,news.utime,news.n_imgsize,news.sign,news.n_url_type,news.n_from';
		if($channel == "quick"){
			$where = " AND news.issetupadv=1 ";
		}else{
			$where	= 'AND news.isadv=1 AND news.id not in (select app_id from ios_sdk_blacklist where channel = "'.$channel.'")';
		}
		$limit	= '';
		$start	= ($page-1)*$lenght;
		$limit	= "limit $start,$lenght ";
		$sql	= "SELECT $field FROM `ios_news_class` cls LEFT JOIN ios_news news ON  cls.id = news.cid WHERE cls.short_name='$sname' AND cls.isdel=0 AND news.isdel=0 AND news.isdisplay=1 AND news.itime<=NOW() AND news.offtime>NOW() $where order by news.orderid asc,news.utime desc,id DESC  $limit";
		$rs	= $this->cache(true,$this->cacheTime)->query($sql);
		unset($start,$limit,$sql,$field,$where);
		return $rs;
	}
	
	/**
	 * 更新数据
	 * @param unknown_type $sname
	 * @param unknown_type $time
	 * @return boolean|unknown
	 */
	public function getContentupdate($sname,$time,$field){
		if(empty($sname)) return false;
		$where = "";
		if(!$field){
			$field = "news.id,news.cid,news.n_title,news.n_price,news.n_img,news.n_url,news.n_from,news.sign,news.n_des,news.isdel,news.parent_app,news.isdisplay,news.n_attr,news.n_url_type,news.isadv,news.issetupadv,news.orderid,news.offtime,news.bundleid,news.appstore_url ";
		}
		if($time){
			$where = " AND (news.ctime > '$time' or news.utime >'$time' ) AND news.itime<=NOW() "	;
		}else{
			$where = " AND cls.isdel=0 AND news.isdel=0 AND news.isdisplay=1 AND news.itime<=NOW() "	;
		}
		$sql	= "SELECT $field FROM `ios_news_class` cls LEFT JOIN ios_news news ON  cls.id = news.cid WHERE cls.short_name='$sname' $where order by news.orderid asc,news.id DESC";
		$rs	= $this->cache(true,$this->cacheTime)->query($sql);
		unset($start,$limit,$sql,$field,$where);
		return $rs;
	}
}