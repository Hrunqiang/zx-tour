<?php
class CountriesModel extends Model{
	protected  $trueTableName	= "mls_countries";
	protected $connection = 'DB_CONFIG1';
		
	public function getData(){
		$data = $this->cache(true,36000)->field("title")->select();
		return $data;
	}
	
	
	
}