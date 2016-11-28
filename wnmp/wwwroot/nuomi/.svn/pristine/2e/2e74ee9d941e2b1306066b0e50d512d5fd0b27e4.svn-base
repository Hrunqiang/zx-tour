<?php
class UserFeedbackModel extends Model{
	protected  $trueTableName	= "zx_tb_feedback";
	protected $connection = 'DB_CONFIG1';
		
	/**
	 * 添加 反馈
	 * @param unknown_type $id
	 * @return boolean|Ambigous <mixed, boolean, NULL, multitype:, unknown, string>
	 */
	public function addFeedback($data){
		if(empty($data)) return false;
		return $this->add($data);
	}
	

}