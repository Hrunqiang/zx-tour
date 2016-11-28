<?php
/**
 * 活动转盘抽奖
 * @author hhy
 *
 */
class LotteryAction extends Action {
	
	protected $probability = array(
    			//一等奖 
    			array("code"=>array(0),"odds"=>1),
    			//二等奖
    			array("code"=>array(6),"odds"=>6),
    			//三等奖
    			array("code"=>array(2),"odds"=>3),
    			//四等奖
    			array("code"=>array(1,4),"odds"=>990),
    			//不中
    			array("code"=>array(3,5,7),"odds"=>0),
    			);
    public function luck(){
    	
    	$msg = "unknow";
    	
    	$hour = (int)Date('H');

    	if($hour>=9&&$hour<=19){
    		//抽奖时间段
    		
    		//抽奖
    		$codenum = $this->getcodenum();
    		
    		//检查奖金数量
    		$checkres = $this->check_price($codenum);
    		$msg = "ok";
    		if(!$checkres){
    			//奖品发光了，给四等 奖
    			$checkres = $this->getcode();
    			$msg = "priceempty,lucknum:".$codenum;
    			$codenum = 3;
    		}
    		
	    	$res['error'] = 0;
    		$res['data'] = $this->probability[$codenum]['code'][mt_rand(0, count($this->probability[$codenum]['code'])-1)];
    		$res['num'] = $codenum;
    		$res['code'] = $checkres;
    	}else{
    		//过了抽奖时间段
    		$msg = "notworktime";
    		$codenum = 4;
    		$res['error'] = 0;
    		$res['data'] = $this->probability[$codenum]['code'][mt_rand(0, count($this->probability[$codenum]['code'])-1)];
    		$res['num'] =$codenum;
    		$res['code'] = mt_rand(1000, 9999);
    	}

        @mwtlog("Lottery_luck_data","msg:".$msg." data:".json_encode($res),true);
		echo json_encode($res);
	}
	
	/**
	 * 随机抽奖号码
	 * @return number
	 */
	public function getcodenum(){
		//随机号码
		$lucknum = mt_rand(1, 1000);
		$count = 0;
		$codenum = 4;
		for($i=0,$len=count($this->probability);$i<$len;$i++){
			$count += $this->probability[$i]['odds'];
			if($lucknum<=$count){
				$codenum = $i;
				break;
			}
		}
		return $codenum;
	}
	
	/**
	 * 检查奖品
	 * @param unknown_type $codenum
	 * @return string
	 */
	public function check_price($codenum){
		$redis = new Redis();
		$redis->pconnect("127.0.0.1",6379);
		if($redis->hincrby("Lottery_price_num",$codenum,-1)<0){
			return false;
		}else{
			return $redis->rpop("Lottery_code_list");
		}
		return true;
	}
	
	/**
	 * 抽奖号码
	 */
	public function getcode(){
		$redis = new Redis();
		$redis->pconnect("127.0.0.1",6379);
		return $redis->rpop("Lottery_code_list");
	}
	
	public function wuxi(){
		// $redis = new Redis();
		// $redis->pconnect("127.0.0.1",6379);
		$list = array(500,500,0,0,0,0,0);
		$lucknum = mt_rand(1, 1000);
		$count = 0;
		$codenum = 4;
		for($i=0,$len=count($list);$i<$len;$i++){
			$count += $list[$i];
			if($lucknum<=$count){
				$codenum = $i;
				break;
			}
		}
		$redis = new Redis();
		$redis->pconnect("127.0.0.1",6379);
		if($codenum<=1){
			if($redis->hincrby("Lottery_wuxi_num",$codenum,-1)<0){
				$codenum = 2;
			}
		}
		//$codenum = 0;
		$url =array("https://jinshuju.net/f/oCByk0","https://jinshuju.net/f/robwzx");
		$rs['error'] = 0;
		$rs['msg'] = $codenum<=1?$url[$codenum]:$lucknum;
		$rs['code'] = $codenum;
		@mwtlog("Lottery_wuxi_data_online","msg:".$codenum." data:".json_encode($rs),true);
		echo json_encode($rs);
	}
	
	public function wuxi2(){
		$date = Date("Y-m-d H:i:s");
		if($date<"2016-03-17 09:00"){
			$rs = array("error"=>"1","msg"=>"活动将在3月17日9点开始，敬请关注！");
			echo json_encode($rs);
			die;
		}

		$list = array(0,200,800);
		$lucknum = mt_rand(1, 1000);
		$count = 0;
		$codenum = 2;
		for($i=0,$len=count($list);$i<$len;$i++){
			$count += $list[$i];
			if($lucknum<=$count){
				$codenum = $i;
				break;
			}
		}
// 		$redis = new Redis();
// 		$redis->pconnect("127.0.0.1",6379);
// 		if($codenum<=1){
// 			if($redis->hincrby("Lottery_wuxi_num",$codenum,-1)<0){
// 				$codenum = 2;
// 			}
// 		}
		$rs['error'] = 0;
		$rs['msg'] = "ok";
		$rs['code'] = $codenum;
		@mwtlog("Lottery_wuxibolan_data_online","msg:".$codenum." data:".json_encode($rs),true);
		echo json_encode($rs);
	}
	
	
	public function tokyo(){
		$data['name'] = htmlspecialchars(addslashes(trim($_POST['name'])));
		$data['phone'] = htmlspecialchars(addslashes(trim($_POST['phone'])));
		$data['addr'] = htmlspecialchars(addslashes(trim($_POST['addr'])));
		$data['ctime'] = date("Y-m-d H:i:s");
		$m = new TokyoWishsModel;
		$res = $m->addzl($data);
		if($res){
			echo json_encode(array("error"=>0,"msg"=>"ok"));
		}else{
			echo json_encode(array("error"=>1,"msg"=>"添加失败！"));
		}
	}
	
	public function dmcx(){
		$code = htmlspecialchars(addslashes(trim($_REQUEST['code'])));
		if (preg_match('|(\d+)|',$code,$arr)){ 
			$code =  $arr[1];
		}
		if(!$code){
			echo json_encode(array("error"=>1,"msg"=>"error002","data"=>""));
			die;
		}
		$M = new DmCXModel;
		$res = $M->select_score($code);
		if($res){
			$res['zcj'] = json_decode($res['zcj']);
			echo json_encode(array("error"=>0,"msg"=>"$code","data"=>$res));
		}else{
			echo json_encode(array("error"=>1,"msg"=>"error001","data"=>""));
		}	
	}
	
	public function mgwcx(){
		$code = htmlspecialchars(addslashes(trim($_REQUEST['code'])));
		if (preg_match('|(\d+)|',$code,$arr)){
			$code =  $arr[1];
		}
		if(!$code){
			echo json_encode(array("error"=>1,"msg"=>"error002","data"=>""));
			die;
		}
		$M = new DmCXModel;
		$res = $M->select_score_table($code,"zx-dm_women");
		if($res){
			$res['zcj'] = json_decode($res['zcj']);
			echo json_encode(array("error"=>0,"msg"=>"$code","data"=>$res));
		}else{
			echo json_encode(array("error"=>1,"msg"=>"error001","data"=>""));
		}
	}
	
	public function ylslcx(){
		$code = htmlspecialchars(addslashes(trim($_REQUEST['code'])));
		if (preg_match('|(\d+)|',$code,$arr)){
			$code =  $arr[1];
		}
		if(!$code){
			echo json_encode(array("error"=>1,"msg"=>"error002","data"=>""));
			die;
		}
		$M = new DmCXModel;
		$res = $M->select_score_table($code,"zx-jerusalem");
		if($res){
			$res['zcj'] = json_decode($res['zcj']);
			echo json_encode(array("error"=>0,"msg"=>"$code","data"=>$res));
		}else{
			echo json_encode(array("error"=>1,"msg"=>"error001","data"=>""));
		}
	}
	
	public function srcx(){
		$code = htmlspecialchars(addslashes(trim($_REQUEST['code'])));
		$code = preg_replace('# #', '', strtoupper(trim($code)));
		if (preg_match('|(\d+)|',$code,$arr)){
			$code =  $arr[1];
		}
		if(!$code){
			echo json_encode(array("error"=>1,"msg"=>"error002","data"=>""));
			die;
		}
		$M = new DmCXModel;
		$res = $M->select_score_table($code,"zx-shouer");
		if($res){
			$res['zcj'] = json_decode($res['zcj']);
			echo json_encode(array("error"=>0,"msg"=>"$code","data"=>$res));
		}else{
			echo json_encode(array("error"=>1,"msg"=>"error001","data"=>""));
		}
	}
	
	public function boston(){
		$code = htmlspecialchars(addslashes(trim($_REQUEST['code'])));
		$code = preg_replace('# #', '', strtoupper(trim($code)));
		if (preg_match('|(\d+)|',$code,$arr)){
			$code =  $arr[1];
		}
		if(!$code){
			echo json_encode(array("error"=>1,"msg"=>"error002","data"=>""));
			die;
		}
		$M = new DmCXModel;
		$res = $M->select_score_table_bostom($code,"zx_bm_score");
		if($res){
			$res['splits'] = json_decode($res['splits']);
			//echo $res['splits']."<br>";
			echo json_encode(array("error"=>0,"msg"=>"$code","data"=>$res));
		}else{
			echo json_encode(array("error"=>1,"msg"=>"error001","data"=>""));
		}
	}
	
	public function london(){
		$code = htmlspecialchars(addslashes(trim($_REQUEST['code'])));
// 		$code = preg_replace('# #', '', strtoupper(trim($code)));
// 		if (preg_match('|(\d+)|',$code,$arr)){
// 			$code =  $arr[1];
// 		}
		if(!$code){
			echo json_encode(array("error"=>1,"msg"=>"error002","data"=>""));
			die;
		}
		$M = new DmCXModel;
		$res = $M->select_score_table_bostom($code,"zx_ld_score");
		if($res){
			$res['splits'] = json_decode($res['splits']);
			//echo $res['splits']."<br>";
			$sex = $res['sex'];
			$finishTimeNet = $res['finishTimeNet'];
			$count = $M->select_score_table_rank($sex,$finishTimeNet);
			
			echo json_encode(array("error"=>0,"msg"=>"$code","rank"=>$count+1,"data"=>$res));
		}else{
			echo json_encode(array("error"=>1,"msg"=>"error001","data"=>""));
		}
	}
	
	public function sundown(){
		$code = htmlspecialchars(addslashes(trim($_REQUEST['code'])));
		// 		$code = preg_replace('# #', '', strtoupper(trim($code)));
		// 		if (preg_match('|(\d+)|',$code,$arr)){
		// 			$code =  $arr[1];
		// 		}
		if(!$code){
			echo json_encode(array("error"=>1,"msg"=>"error002","data"=>""));
			die;
		}
		$M = new DmCXModel;
		$res = $M->select_score_table_sundown($code,"zx-sundown");
		if($res){	
			unset($res['id']);			
			echo json_encode(array("error"=>0,"msg"=>"$code","data"=>$res));
		}else{
			echo json_encode(array("error"=>1,"msg"=>"error001","data"=>$M->getLastSql()));
		}
	}
	
	public function goddessshow(){
		$m = new GoddessshowModel();
		$data  = $m->order("id asc")->select();
		if($data){
			echo json_encode(array("error"=>0,"msg"=>"ok","data"=>$data));
		}else{
			echo json_encode(array("error"=>1,"msg"=>"empty","data"=>""));
		}
	}
	
	public function goddess_zan(){
		$id = htmlspecialchars(addslashes(trim($_GET['id'])));
		if($id){
			$m = new GoddessshowModel();
			$res = $m->zan($id);
			if($res){
				$rs['error'] = 0;
				$rs['msg'] = "ok";
			}else{
				$rs['error'] = 2;
				$rs['msg'] = "点赞失败！请重试！";
			}
		}else{
			$rs['error'] = 1;
			$rs['msg'] = "点赞失败！请重试！";
		}
		echo json_encode($rs);
	}
	
	/**
	 * 黑部名水马拉松活动摇一摇抽奖
	 */
	public function hbms(){
		$key = "hbms_addr_giftlist_keys";
		$rs = array("error"=>65535,"msg"=>"未知错误！","code"=>"");	
		//0未中奖 1T恤 2毛巾 3文件夹
		$list = array(700,70,30,200);
		$lucknum = mt_rand(1, 1000);
		$count = 0;
		$codenum = 0;
		for($i=0,$len=count($list);$i<$len;$i++){
			$count += $list[$i];
			if($lucknum<=$count){
				$codenum = $i;
				break;
			}
		}
		$redis = new RedisModel();
		$redis->pconnect("127.0.0.1",6379);
		if($codenum>0){
			if($redis->hincrby($key,$codenum,-1)<0){
				$codenum = 0;
			}
		}	
		$rs['error'] = 0;
		$rs['code'] = $codenum;
		$uid = md5(guid());
		if($codenum>0){
			$tk = md5("hbms".$codenum.$uid."zxtour");
			$msg = "/Lottery/hbms_addr?code=".$codenum."&tk=".$tk."&u=".$uid;
			$rs['msg'] = $msg;
		}
		@mwtlog("Lottery_hbms_data_online","msg:".$codenum." data:".json_encode($rs),true);
		echo json_encode($rs);
	}
	
	public function hbms_addr(){
		$key = "hbms_addr_used_keys";
		$url = $_SERVER['REQUEST_URI'];
		$code = htmlspecialchars(addslashes(trim($_REQUEST['code'])));
		$tk = htmlspecialchars(addslashes(trim($_REQUEST['tk'])));
		$uid = htmlspecialchars(addslashes(trim($_REQUEST['u'])));
		if(md5("hbms".$code.$uid."zxtour")==$tk){
			$redis = new RedisModel();
			$redis->pconnect("127.0.0.1",6379);
			if($redis->sismember($key,$tk)){
				$msg = "3";
			}else{
				if($this->isPost()){
					$data['name'] =  htmlspecialchars(addslashes(trim($_POST['name'])));
					$data['phone'] =  htmlspecialchars(addslashes(trim($_POST['phone'])));
					$data['addr'] =  htmlspecialchars(addslashes(trim($_POST['addr'])));
					if(empty($data['name'])||empty($data['phone'])||empty($data['addr'])){
						$this->assign("msg","请填写正确的信息，避免奖品无法送达！");
						$msg = "2";
					}else{
						$shouji_reg = '/^1[\d]{10}$/';
						if(!preg_match($shouji_reg, $data['phone'])){
							$this->assign("msg","请填写正确的手机号，避免奖品无法送达！");
							$msg = "2";
						}else{
							$data['code'] = $code;
							$data['ctime'] = Date("Y-m-d H:i:s");
							$M = new HbmsModel();
							if($M->add($data)){
								$redis->sadd($key,$tk);
								$msg = "3";
							}else{
								$this->assign("msg","系统错误，请稍后再试！");
								$msg = "2";
							}
						}
					}
				}else{
					$msg = "2";
				}
			}
			
			$this->assign("url",$url);
		}else{
			//地址不合法
			$msg = "1";
		}
		$this->assign("tk",$tk);
		$this->assign("uid",$uid);
		$this->assign("code",$code);
		$this->assign("error",$msg);
		$this->display();
	}
	
	/**
	 * 名古屋马拉松参赛证书
	 */
	public function certificate(){
		$rs = array("error"=>65535,"msg"=>"未知错误！","data"=>"","pdf"=>"");
		$code = htmlspecialchars(addslashes(trim($_REQUEST['code'])));
		
		if (preg_match('|(\d+)|',$code,$arr)){
			$code =  $arr[1];
		}
		if(!$code){	
			echo json_encode(array("error"=>1,"msg"=>"参赛号码不正确","data"=>""));
			die;
		}
		
		//查询成绩
		$M = new DmCXModel;
		$res = $M->select_score_table($code,"zx-dm_women");
		if($res){
			$res['zcj'] = json_decode($res['zcj']);
			$rs['error'] = 0;
			$rs['msg'] = "ok";
			$rs['data'] = $res;
		}else{
			$rs['error'] = 1;
			$rs['msg'] = "未找到成绩！";
			$rs['data'] = "";
		}
		
		//查找证书
		$filename = "http://download.zx-tour.com/public/certificate/".$code.".pdf";
		if(file_get_contents($filename)){
			$rs['pdf'] = $filename;
		}else{
			$rs['pdf'] = "";
		}
		echo json_encode($rs);
	}
	
}