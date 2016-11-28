<?php
/**
 * token验证
 * @author hhy
 * ctime 2015-10-25
 */
class AuthTokenModel{
	protected $db = "";
	protected $key = "%3&9*@74";
	protected $expire = 86400;

	function __construct() {
		
		if(!$this->db){	
			$this->db = new Memcache();
			if(!$this->db->pconnect(C('MEMCACHE_HOST'), C('MEMCACHE_PORT'))){
				return false;
			}
		}	
	}

	public function get_token($account,$ac){
		if(!$account||!$ac) return false;
		$key = md5($this->key.$account.$ac);
		$token = $this->rand_token();
		$this->db->set($key,$token,0,$this->expire);
		return $token;
	}
	
	public function del_token($account, $ac){
		$key = md5($this->key.$account.$ac);
		$this->db->set($key,"",0,$this->expire);
	}
	
	public function auth_token($token,$account,$ac){
		if(!$token||!$ac||!$account) return false;
		$key = md5($this->key.$account.$ac);
		$memToken = $this->db->get($key);
		if($memToken&&$memToken==$token){
			return true;
		}
		return false;
	}
	
	/**
	 * 随机16位token
	 * @param unknown_type $length
	 * @return string
	 */
	public function rand_token($length=16){
		$pol = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$max = strlen($pol)-1;
		for($i=0;$i<$length;$i++){
			$str.=$pol[rand(0,$max)];
		}
		return $str;
	}
}