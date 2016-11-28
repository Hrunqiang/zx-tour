<?php
/**
 * 用户Model类
 * @author hhy
 * createTime 2016-03-20
 */
class AccountModel extends Model{
	protected  $trueTableName	= "`zx_tb_user`";
	protected $connection = 'DB_CONFIG1';
	private $cacheTime	= '10';
		
	/**
	 * 手机登录用户验证
	 * @param unknown_type $phone
	 * @return Ambigous <mixed, boolean, unknown, string>|Ambigous <>|boolean
	 */
	public function auth($phone) {
		$where = "phone = '$phone'";
		$rs = $this->where ($where)->find ();
		if($rs!==false){	
			if ($rs===null){
				//新用户
				session("SESSION_ZX_USERSTATE",2);
				return $this->data(array("phone"=>"$phone","state"=>2))->add();		
			}else{
				session("SESSION_ZX_USERSTATE",$rs['state']);
				//未绑定手机号的用户绑定手机号
				if($rs['state']==1){
					$this->where ($where)->save(array("state"=>2));
					session("SESSION_ZX_USERSTATE",2);
				}
				return $rs['id'];
			}
		}else{
			//系统繁忙，查询 出错
			return false;
		}
	}
	
	/**
	 * 手机登录用户验证
	 * @param unknown_type $phone
	 * @return Ambigous <mixed, boolean, unknown, string>|Ambigous <>|boolean
	 */
	public function weixinauth($phone) {
		$openid = session("SESSION_ZX_OPENID");
		if(empty($openid)) return false;
		$where = "openid = '$openid'";
		$rs = $this->where ($where)->find ();
		if($rs!==false){
			session("SESSION_ZX_USERSTATE",$rs['state']);
			//未绑定手机号的用户绑定手机号
			if($rs['state']==1){
				$this->where ($where)->save(array("state"=>2,"phone"=>"$phone"));
				session("SESSION_ZX_USERSTATE",2);
			}
			return $rs['id'];
		}else{
			//系统繁忙，查询 出错
			return false;
		}
	}
	
	
	/**
	 * 手机登录用户验证v2
	 * @param unknown_type $phone
	 * @return Ambigous <mixed, boolean, unknown, string>|Ambigous <>|boolean
	 */
	public function weixinauthV2($phone) {
		$openid = session("SESSION_ZX_OPENID");
		if(empty($openid)||empty($phone)) return false;
		$where = "openid = '$openid'";
		$rs = $this->where ($where)->find();
		if($rs!==false){
			if(empty($rs['phone'])){
				//微信号没有绑定手机
				$orderuser = $this->where ("phone = '$phone'")->find();
				if(!$orderuser || $orderuser['openid']!=$openid){
					//手机号未与其它微信号绑定
				}else{
					//手机号已与其它微信号绑定
				}
			}else{
				//绑定了手机号
				if($rs['phone']==$phone){
					session("SESSION_ZX_USERSTATE",$rs['state']);
					//未绑定手机号的用户绑定手机号
					if($rs['state']==1){
						$this->where ($where)->save(array("state"=>2));
						session("SESSION_ZX_USERSTATE",2);
					}
					return $rs['id'];
				}else{
					//与绑定手机号不一致
					return false;
				}
			}
		}else{
			//系统繁忙，查询 出错
			return false;
		}
	}
	
	public function changeState($uid,$state){
		if(empty($uid)||empty($state)) return false;
		return $this->where("id=$uid")->save(array("state"=>$state));
	}
	
	/**
	 * 取得用户信息
	 * @param unknown_type $uid
	 * @return boolean|Ambigous <mixed, boolean, NULL, multitype:, unknown, string>
	 */
	public function getuser($uid){
		if(empty($uid)) return false;
		return $this->where("id=$uid")->find();
	}
	
}