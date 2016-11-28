<?php
/**
 * 套餐行程Model类
 * @author hhy
 * createTime 2016-03-30
 */
class MealTripModel extends Model{
	protected  $trueTableName	= "zx_tb_trip";
	protected $connection = 'DB_CONFIG1_zx';

	/**
	 * 添加(取消)关注赛事
	 * @param string $uid  用户id
	 * @param string $matchid  赛事id
	 * @return boolean
	 */
	public function getTripList($mealid){
		if(empty($mealid)) return false;	
		return $this->where("`meal_id` = $mealid ")->order("trip_date asc")->select();
	}
	
	public  function  gettripinfo($id){
		if(empty($id)) return  false;
		return $this->where("id= {$id}")->find();
	}
	
}