<?php
/**
 * 周边景点Model类
 * @author hhy
 * createTime 2016-03-30
 */
class MatchScenicareaModel extends Model{
	protected  $trueTableName	= "`zx_tb_scenicarea`";
	protected $connection = 'DB_CONFIG1_zx';

	/**
	 * 添加(取消)关注赛事
	 * @param string $uid  用户id
	 * @param string $matchid  赛事id
	 * @return boolean
	 */
	public function getList($id){
		if(empty($id)) return false;	
		return $this->where("mid=$id")->select();
	}
	
	public  function  gettripinfo($id){
		if(empty($id)) return  false;
		return $this->where("id= {$id}")->find();
	}
	
}