<?php
/**
 * 预警机制
 * @author hhy
 * @createTime 2016-6-13 下午12:09:19
 */
class EarlyWarningAction extends Action {
	
	Public function _initialize(){
		if(MODE_NAME!='cli'){
			die('error path');
		}
		ini_set ( "max_execution_time", "0" );
		ini_set ( 'memory_limit', '512M' );
	}
	
	
	protected $MATCH_WARM_LEFT = 2;
	protected $GOODS_WARM_LEFT = 2;
	protected $MATCH_WARM_DAY = 2;
	protected $NOTICE_PHONE = array(
			"13522354197",
			"18511227651",
			"13810686563",
			"18600598264"
			);
	protected $NOTICE_MAIL = array(
			"huanghaiyan@zx-tour.com",
			"375968317@qq.com",
 			"heyaqing@zx-tour.com",
			"cuiying@zx-tour.com",
			"yulina@zx-tour.com"
			);
	protected $ADMIN_PHONE = 13522354197;
	protected $LEFT_WARM_TEMPLATE = "【知行合逸】库存预警：\r\n%s";
	protected $ERROR_TEMPLATE = "服务器预警%sIP:%s";
	
	/**
	 * 报警方法
	 * 报警机制
	 * 1、赛事库存 小于2
	 * 2、报名截止时间小于2天
	 */
	public function warm(){
		$matchM =  new MatchInfoModel();
		$goodsM =  new GoodsModel();
		$mailM = new MailModel;
		
		$warmStr = "";
		//赛事库存小于2
		$where = "m_placesleft<=".$this->MATCH_WARM_LEFT;
		$warm_match =  $matchM->getMatchListNoneCache($where);
		if($warm_match===false){
			$errorContent = "赛事库存sql:".addslashes(trim($matchM->getLastSql()));
			$this->service_warm_notice($errorContent);
		}else{
			$warmMatchStr = "";
			foreach ($warm_match  as $key=>$val){
				$warmMatchStr.=$val['m_name']."(库存:".$val['m_placesleft'].")\r\n ";
			}
			if($warmMatchStr!=""){
				$warmStr.="[赛事库存]\r\n".$warmMatchStr."\r\n";
			}
		}
		
		//商品库存
		$warm_goods =  $goodsM->getwarmgoods($this->GOODS_WARM_LEFT);
		if($warm_goods===false){
			$errorContent = "套餐库存sql:".addslashes(trim($goodsM->getLastSql()));
			$this->service_warm_notice($errorContent);
		}else{
			$warmGoodsStr = "";
			foreach ($warm_goods  as $key=>$val){
				$warmGoodsStr.=$val['m_name']."-".$val['g_name']."(".$val['parent'].")"."(库存:".$val['g_stockleft'].")\r\n";
			}
			if($warmGoodsStr!=""){
				$warmStr.="[套餐库存]\r\n".$warmGoodsStr."\r\n";
			}
		}
		
		//赛事报名截止
		$where = "m_untilTime>NOW() and m_untilTime<='".Date("Y-m-d H:i:s",strtotime("+".$this->MATCH_WARM_DAY." days"))."'";
		$warm_match =  $matchM->getMatchListNoneCache($where);
		if($warm_match===false){
			$errorContent = "赛事报名截止sql:".addslashes(trim($matchM->getLastSql()));
			$this->service_warm_notice($errorContent);
		}else{
			$warmMatchStr = "";
			foreach ($warm_match  as $key=>$val){
				$warmMatchStr.=$val['m_name']."(截止时间:".$val['m_untilTime'].")\r\n ";
			}
			if($warmMatchStr!=""){
				$warmStr.="[赛事报名截止]\r\n".$warmMatchStr."\r\n";
			}
		}
		$this->early_warn_notice($warmStr);
	}
	
	/**
	 * 服务器错误报警机制
	 * @param unknown_type $errorContent
	 */
	public function service_warm_notice($errorContent){
		$smsM = new SendSmsModel();
		$ip = get_client_ip();
		$content = sprintf($this->ERROR_TEMPLATE,$errorContent,$ip);
		$resSms = $smsM->send($content,$this->ADMIN_PHONE);
		if($resSms['error']==0){
			echo Date("Y-m-d H:i:s")."\tservice_warm_notice:success\twarm:".$errorContent."\r\n";
		}else{
			echo Date("Y-m-d H:i:s")."\tservice_warm_notice:false\tinfo:".json_encode($resSms)."\twarm:".$errorContent."\r\n";
		}
	}
	
	public function early_warn_notice($content){
		$smsM = new SendSmsModel();
		$mailM = new MailModel;
		if($content==""){
			echo Date("Y-m-d H:i:s")."warn_notice_empty\r\n";
			die;
		}
		$content = sprintf($this->LEFT_WARM_TEMPLATE,$content);
		
		echo Date("Y-m-d H:i:s")."warn_notice_content:".str_replace("\r\n","\t",$content)."\r\n";
		foreach ($this->NOTICE_PHONE as $key =>$val){
			$resSms = $smsM->send($content,$val);
			if($resSms['error']==0){
				echo Date("Y-m-d H:i:s")."\tsms_warn_notice:success\tphone:".$val."\r\n";
			}else{
				echo Date("Y-m-d H:i:s")."\tsms_warn_notice:false\tphone:".$val."\tinfo:".json_encode($resSms)."\r\n";
			}
		}
		
		foreach ($this->NOTICE_MAIL as $key =>$val){
			$content = str_replace("\r\n","<br>",$content);
			$resMail = $mailM->send($val,"一键报名库存预警邮件",$content);
			if($resMail){
				echo Date("Y-m-d H:i:s")."\tmail_warn_notice:success\tmail:".$val."\r\n";
			}else{
				echo Date("Y-m-d H:i:s")."\tmail_warn_notice:false\tmail:".$val."\tinfo:".json_encode($resMail)."\r\n";
			}
		}
	}
	
}