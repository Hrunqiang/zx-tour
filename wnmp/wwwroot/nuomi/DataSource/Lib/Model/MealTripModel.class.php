<?php
/**
 * 套餐行程Model类
 * @author hhy
 * createTime 2016-03-30
 */
class MealTripModel extends Model{
	protected  $trueTableName	= "zx_tb_trip";
	protected $connection = 'DB_CONFIG1';
	protected $cacheTime = 3600;

	/**
	 * 添加(取消)关注赛事
	 * @param string $uid  用户id
	 * @param string $matchid  赛事id
	 * @return boolean
	 */
	public function getTripList($mealid){
		if(empty($mealid)) return false;	
		return $this->cache(true,$this->cacheTime)->where("`meal_id` = $mealid ")->order("trip_date asc")->select();
	}
	
}