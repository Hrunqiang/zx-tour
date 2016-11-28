<?php
class CacheModel extends Model{
	private  $dblink	= null;
	public function __construct($host,$port){
		$this->dblink = new Memcache;
		$host	= empty($host)?C("MEMCACHE_HOST"):$host;
		$port	= empty($port)?C("MEMCACHE_PORT"):$port;
		$this->dblink->connect($host, $port);
		if(!$this->dblink){
			@mwtlog("memcache_error","connect error\r\n",true);
		}
	}
	/**
	 * @param  $key
	 * @param  $value
	 * @param (秒)默认不过期 $expire
	 * @return boolean|unknown
	 */
	public function set($key,$value,$expire=0) {
		if(empty($key) || empty($value)) return false;
		if(C('IsLocalHost')){ //判断如果是内网使用，缓存时间设置为2秒
			$expire=20;
		}
		$rs	= $this->dblink->set($key,$value,null,$expire);
		return $rs;
	}
	public function get($key) {
		$rs	=$this->dblink->get($key);
		return $rs;
	}
	public  function stats(){
		$rs	=$this->dblink->getstats();
		return $rs;
	}
	public  function flush(){
		$rs	=$this->dblink->flush();
		return $rs;
	}
}