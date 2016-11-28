<?php
/*
 * 微信用户信息
*/
class WeixinUsersModel extends Model{
	protected $trueTableName = "zx_tb_user";
	protected $connection = 'DB_CONFIG1';

	public function checkUserExist($openid,$data){
		if(empty($openid)) return false;
		$rs	= $this->where("openid='$openid'")->find();
		if($rs && !empty($data)){
			$save['sexy']	= $data['sexy'];
			$save['headerimg'] = $data['headerimg'];
			$save['nickname'] = $data['nickname'];
			$ac	= $this->data($save)->where("openid='$openid'")->save();
			$info = $this->getUidByOpenid($openid);
			$data['id']	= $info['id'];
			$data['userstate']	= $info['state'];
			$data['sexy']	= $info['sexy'];
			$data['phone']	= $info['phone'];
		}else{
			$save['sexy']	= $data['sexy'];
			$save['headerimg'] = $data['headerimg'];
			$save['nickname'] = $data['nickname'];
			$save['openid'] = $data['openid'];
			$save['phone'] = "";
			$save['state'] =  1;
			if(!empty($data)){
				$ac	= $this->data($save)->add();
				$data['id']	= $ac;
				$data['userstate']	= 1;
			}else{
				return false;
			}	
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