<?php
class PhoneAuthModel extends Model {
	private  $dblink	= null;
	protected $q_name	= "ws40";
	public function __construct(){
		$this->dblink = new Memcache;
		$this->dblink->connect(C("MEMCACHE_HOST"), C("QUEUE_PORT"));
		if(!$this->dblink){
			
		}
	}
	public function set($a,$m,$d) {
		if(empty($a) || empty($m) || empty($d)) return false;
		$data	= json_encode(array("a"=>$a,"m"=>$m,"d"=>$d));
		$rs	= memcache_set($this->dblink, $this->q_name, $data, 0, 0);
		return $rs;
	}
	public function get() {
		$rs	=memcache_get($this->dblink,$this->q_name);
		$result	= json_decode($rs,true);
		if($result){
			return $result;
		}else{
			return $rs;
		}
	}
	public  function stats () {
		$rs	=$this->dblink->getstats();
		return $rs;
	}
}