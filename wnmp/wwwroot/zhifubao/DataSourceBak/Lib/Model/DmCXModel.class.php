<?php
/**
 * 东马成绩查询
 * @author hhy
 *
 */
class DmCXModel extends Model{
	protected  $trueTableName	= "zx-dm";
	protected $connection = 'DB_CONFIG1';
	protected $cacheTime	= 3200;//缓存时间
		
	public function select_score($code){
		if(empty($code)) return false;
		return $this->cache(true,$this->cacheTime)->where("number = '".$code."'")->find();
		
	}
	
	public function select_score_table($code,$table){
		if(empty($code)||empty($table)) return false;
		return $this->cache(true,$this->cacheTime)->table($table)->where("number = '".$code."'")->find();
	
	}
	
	public function select_score_table_bostom($code,$table){
		if(empty($code)||empty($table)) return false;
		return $this->cache(true,$this->cacheTime)->table($table)->where("startNo = '".$code."'")->find();
	
	}
	
	public function select_score_table_sundown($code,$table){
		if(empty($code)||empty($table)) return false;
		return $this->cache(true,$this->cacheTime)->table($table)->where("bibs = '".$code."'")->find();
	
	}
	
	public function select_score_table_rank($sex,$score){
		if(empty($sex)||empty($score)) return false;
		$where = "sex='$sex' and finishTimeNet<'$score' and finishTimeNet is not null and finishTimeNet!=''";
		return $this->cache(true,$this->cacheTime)->table("zx_ld_score")->where($where)->count();
	
	}
	
}