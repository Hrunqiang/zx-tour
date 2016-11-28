<?php
/**
 * nouomi收银台
 * @author hhy
 * @createTime 2016-8-9 下午2:58:44
 */
class nuomipay{
	protected $rsaPrivateKeyStr;
	protected $rsaPublicKeyStr;
	protected $rsaNuomiPublicKeyStr;
	public function __construct(){
		require("Autoloader.php");
		/**
		 * 从公私钥文件路径中读取出公私钥文件内容
		 */	
		$rsaPrivateKeyFilePath = dirname(__FILE__).'/rsa/rsa_private_key.pem';
		$rsaPublicKeyFilePath = dirname(__FILE__).'/rsa/rsa_public_key.pem';
		
		if( !file_exists($rsaPrivateKeyFilePath) || !is_readable($rsaPrivateKeyFilePath) ||
				!file_exists($rsaPublicKeyFilePath) || !is_readable($rsaPublicKeyFilePath) ){
			return false;
		}
		
		$this->rsaPrivateKeyStr = file_get_contents($rsaPrivateKeyFilePath);
		$this->rsaPublicKeyStr = file_get_contents($rsaPublicKeyFilePath);
	}
	
	/**
	 * 生成签名 
	 */
	public function getrequestParams($tpOrderId){
		if(empty($tpOrderId)) return "";
		$requestParamsArr = array(
				"appKey"=>"MMM4o8",
				"dealId"=>"2114315575",
				"tpOrderId"=>$tpOrderId,
		);
		$rsaSign = NuomiRsaSign::genSignWithRsa($requestParamsArr, $this->rsaPrivateKeyStr);
		$requestParamsArr['sign'] = $rsaSign;
		if($this->checkrequestParams($requestParamsArr)){
			return $requestParamsArr['sign'];
		}else{
			return "";
		}
		
	}
	
	public function checknotifysign($data){
		$PublicKeyPath = dirname(__FILE__).'/rsa/rsa_nuomi_public_key.pem';
		if( !file_exists($PublicKeyPath) || !is_readable($PublicKeyPath) ){
			@mwtlog("nuomi_pay_notify_check","pemfalse  rsaSign:".json_encode($data),true);
			return false;
		}
		$PublicKeyStr = file_get_contents($PublicKeyPath);	
  		$data['sign'] = $data['rsaSign'] ;		
  		unset( $data['rsaSign']);	
 		$checkSignRes = NuomiRsaSign::checkSignWithRsa($data, $PublicKeyStr);
		if($checkSignRes){
			return true;
		}else{
			@mwtlog("nuomi_pay_notify_check","checkfalse  rsaSign:".json_encode($data),true);
			return false;
		}
	}
	
	
	/**
	 * 验证
	 * @param unknown_type $requestParamsArr
	 * @return boolean
	 */
	public function checkrequestParams($requestParamsArr){
		$checkSignRes = NuomiRsaSign::checkSignWithRsa($requestParamsArr, $this->rsaPublicKeyStr);
		return $checkSignRes; # true :签名校验成功，false：签名校验失败
	}
}