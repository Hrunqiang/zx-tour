<?php
/**
 * 糯米用户信息
*/
class NuomiUsersModel extends Model{
	protected $trueTableName = "zx_tb_user";
	protected $connection = 'DB_CONFIG1';

	public function checkUserExist($phone){
		if(empty($phone)) return false;
		$rs	= $this->where("phone='$phone'")->find();
		if($rs){
			$data['id']	= $rs['id'];
			$data['state']	= $rs['state'];
			$data['sexy']	= $rs['sexy'];
			$data['phone']	= $rs['phone'];
		}else{
			$save['phone'] = $phone;
			$save['state'] =  2;
			$ac	= $this->data($save)->add();
			$data['id']	= $ac;
			$data['phone'] = $phone;
			$data['state']	= 2;
		}
		if($ac===false){
			$error	= $this->getError();
			@mwtlog('checkUserExist_error','sql:'.$this->getLastSql()."\t".json_encode($ac)."\terror:$error \r\n",true);
			return false;
		}else{
			return $data;
		}
	}

	public function getUidByOpenid($openid){
		if(empty($openid)) return false;
		$rs = $this->where("openid='$openid'")->find();
		if($rs){
			return $rs;
		}else {
			return false;
		}
	}
	/**
	 * 获取guid
	 * @return string
	 */
	public static  function guid(){
		if (function_exists('com_create_guid')){
			$uuid = com_create_guid();
		}else{
			mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
			$charid = strtoupper(md5(uniqid(rand(), true)));
			$hyphen = chr(45);// "-"
			$uuid = chr(123)// "{"
			.substr($charid, 0, 8).$hyphen
			.substr($charid, 8, 4).$hyphen
			.substr($charid,12, 4).$hyphen
			.substr($charid,16, 4).$hyphen
			.substr($charid,20,12)
			.chr(125);// "}"
			// 			return $uuid;
		}
		$uuid = str_replace("{", "", $uuid);
		$uuid = str_replace("}", "", $uuid);
		return  $uuid;
	}
}