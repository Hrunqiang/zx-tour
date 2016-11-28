<?php
class CountriesModel extends Model{
	protected  $trueTableName	= "mls_countries";
	protected $connection = 'DB_CONFIG1';
		
	public function getData(){
		$data = $this->cache(true,36000)->field("title")->select();
		return $data;
	}
	
	public function provinces(){
		$data = $this->cache(true,36000)->table("provinces")->select();
		return $data;
	}
	
	public function citys($code){
		if(!$code) return false;
		$data = $this->cache(true,36000)->table("cities")->where("provinceid=$code")->select();
		return $data;
	}
	
	public function areas($code){
		if(!$code) return false;
		$data = $this->cache(true,36000)->table("areas")->where("cityid=$code")->select();
		return $data;
	}
	
}