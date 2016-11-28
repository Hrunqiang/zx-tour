<?php
/**
 * 赛事周边景区
 * @author hhy
 * @createTime 2016-4-22 下午12:20:45
 */
class ScenicAreaModel extends Model{
	protected  $trueTableName	= "`zx_tb_scenicarea`";
	protected $connection = 'DB_CONFIG1';
		
	public function getScenicaByid($id){
		if(empty($id)) return false;
		return  $this->where("mid=$id")->select();
	}
	
}