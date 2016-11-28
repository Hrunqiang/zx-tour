<?php
class AjaxAction extends Action{
	public function mobile(){
		$id=intval($_GET['id']);
		$WxObj	= new WeixinModel();
		$data=$WxObj->where('id='.$id)->find();
		$this->assign('data', $data);
		$this->display('common:mobile');
	}
	
	public function get_arm_to_wav(){
		$id=intval($_GET['id']);
		$tb=addslashes(trim($_GET['tb']));
		$mode	= new Model();
		if(!empty($id) && !empty($tb)){
			$sql	= "select data from `$tb` where id = $id";
			$data	= $mode->query($sql);
			if($data && $data[0]['data']){
				
			}
			
		}
	}
	//////////////////////////////活动//////////////////////////////////////
	/**
	 * 获取用户抽奖次数
	 */
	public function getc(){
		$result	= array('error'=>65535,'msg'=>'未知错误','data'=>array());
		$i	= addslashes(trim($_REQUEST['i']));
		if(empty($i)){
			$result['error']	=1;
			$result['msg']		='empty i';
			echo json_encode($result);die; 
		}else{
			$LM	= new HdLotteryModel();
			$c	= $checkc	= $LM->checkcount($i);
			if($checkc===false){
				$c	= 0;
			}
			$result['error']	=0;
			$result['msg']		='ok';
			$result['data']		= array('c'=>$c);
			echo json_encode($result);die;
		}
	}
	/**
	 * 抽奖
	 */
	public function cgetl(){
		$allowedi	= array(/* '860184020856481','860806021174684','A00000494A0EF4' */);
		$debug	= false;
		$result	= array('error'=>65535,'msg'=>'未知错误','data'=>array());
		$i	= addslashes(trim($_REQUEST['i']));
		$v	= addslashes($_POST['v']);
		$c	= addslashes($_POST['c']);
		$p	= addslashes($_POST['p']);
		$empty	= array('id'=>0,'name'=>'nmore');
		if(empty($i)){
			$result['error']	=0;
			$result['msg']		='empty i';
			$result['data']		=$empty;
			echo json_encode($result);die;
		}
		$LM	= new HdLotteryModel();
		$checkc	= $LM->checkcount($i);
		if(in_array($i, $allowedi)){
			$debug	= true;
			$checkc	= 1;
		}
		if($checkc===false){
			$result['error']	=0;
			$result['msg']		='error count';
			$result['data']		=$empty;
			echo json_encode($result);
			die;
		}
		/*如果第一次抽奖或大于等于2次,则不中奖*/
		if($checkc<=0 || $checkc>=2){
			$result['error']	=0;
			$result['msg']		='f1';
			if($checkc<=0 ){
				$empty['name']='first';
			}else{
				$empty['name']='nmore';
			}
			$result['data']		=$empty;
			$data	= array(
					'lid'=>0,
					'i'=>$i,
					'v'=>$v,
					'c'=>$c,
					'p'=>$p,
			);
			if($checkc<=2){
				@$LM->adddata($data);
			}
			echo json_encode($result);die;
		}
		/*第二次抽奖后*/
		$GM	= new HdgoodsModel();
		/*获取奖品内容*/
		$config	= $GM->get(1,$i,$debug);
// 		var_dump($config);die;
// 		$config	= array(
// 				array('id'=>'1','name'=>'金融','per'=>0.5,'count'=>5000),
// 				array('id'=>'2','name'=>'3元彩票','per'=>0.4,'count'=>3000),
// 				array('id'=>'3','name'=>'快的打车券','per'=>0.05,'count'=>100000),
// 				array('id'=>'4','name'=>'游戏礼包','per'=>0.05,'count'=>4500)
// 				);
		$rs	= $this->Lottery($config);
// 		@mwtlog("test_lottery",json_encode($rs)."\t\n",true);
		if($rs===false || $rs ===null){
			$this->insertLd($rs, "", $i, $v, $c, $p,$checkc);
		}else{
			// gtype 1是只url  2是兑换码
			$goods['code']='';
			if($rs['gtype']==2 || $rs['id']==2/*适配彩票*/){
				$GCM	= new HdGameTicketModel();
				$gcmrs	= $GCM->get($rs['id']);
				if(!$gcmrs){
					//获取码失败
					@mwtlog('Lottery_getcode_error','id:'.$rs['id']." sql:".$GCM->getLastSql()."\t".'gcmrs:'.json_encode($gcmrs),true);
					$result['error']	=0;
					$result['msg']		='ngoods';
					$result['data']		=$empty;
					echo json_encode($result);die;
				}
			}
			$this->insertLd($rs, $gcmrs, $i, $v, $c, $p);
			//添加中奖信息
// 			$data	= array(
// 					'lid'=>$rs['id'],
// 					'code'=>$goods['code'],
// 					'i'=>$i,
// 					'v'=>$v,
// 					'c'=>$c,
// 					'p'=>$p,
// 					);
// 			$rsa	= $LM->adddata($data);
// 			if(!$rsa){
// 				@mwtlog('Lottery_insert_error','adddata data:'.json_encode($data)."\trs".json_encode($rsa),true);
// 				$result['error']	=0;
// 				$result['msg']		='insert e';
// 				$result['data']		=$empty;
// 				echo json_encode($result);die;
// 			}else{
// 				$goods['id']	= $rsa;
// 				$goods['gid']	= $rs['id'];
// 				$goods['name']	= $rs['lname'];
// 				$goods['url']	= $rs['url'];
// 				$goods['des']	= $rs['des'];
// 				$goods['gtype']	= $rs['gtype'];
// 				$result['error']	=0;
// 				$result['msg']		='ok';
// 				$result['data']		=$goods;
// 				$gmrs	= $GM->upcount($rs['id']);
// 				if(!$gmrs){
// 					@mwtlog('Lottery_upcount_error','adddata data:'.json_encode($result)."\trs".json_encode($gmrs),true);
// 				}
// 				echo json_encode($result);die;
// 			}
		}
	}
	protected function insertLd($rs,$code,$i,$v,$c,$p,$checkc){
		$empty	= array('id'=>0,'name'=>'nmore');
		$LM	= new HdLotteryModel();
		//适配彩票
		if($rs['id']==2){
			$rs['url']	= $code;
			$code="";
		}
		$data	= array(
				'lid'=>$rs['id']?$rs['id']:0,
				'code'=>$code,
				'i'=>$i,
				'v'=>$v,
				'c'=>$c,
				'p'=>$p,
		);
		$rsa	= $LM->adddata($data);
		$GM	= new HdgoodsModel();
		if(!$rsa){
			@mwtlog('Lottery_insert_error','adddata data:'.json_encode($data)."\trs".json_encode($rsa),true);
			$result['error']	=0;
			$result['msg']		='insert e';
			$result['data']		=$empty;
			echo json_encode($result);die;
		}else{
			if($rs['id']==0){
				$result['error']	=0;
				if($checkc==1){
					$empty['name']		='none1';
				}else{
					$empty['name']		='nmore';
				}
				$result['data']		=$empty;
				$rs['id']=0;
				echo json_encode($result);die;
			}else{
				$goods = array();
				$goods['code']	= $code;
				$goods['id']	= $rsa;
				$goods['gid']	= $rs['id'];
				$goods['name']	= $rs['lname'];
				$goods['url']	= $rs['url'];
				$goods['des']	= $rs['des'];
				$goods['gtype']	= $rs['gtype'];
				$result['error']	=0;
				$result['msg']		='ok';
				$result['data']		=$goods;
				$gmrs	= $GM->upcount($rs['id']);
				if(!$gmrs){
					@mwtlog('Lottery_upcount_error','adddata data:'.json_encode($result)."\trs".json_encode($gmrs),true);
				}
				echo json_encode($result);die;
			}
		}
	}
	/**
	 * 更新获取
	 */
	public function uisget(){
		$id	= intval($_POST['id']);
		$result	= array('error'=>0,'msg'=>'ok');
		if(!empty($id)){
			$M	= new HdLotteryModel();
			$rs	= $M->upisget($id);
			if(!$rs){
				@mwtlog('Lottery_uisget_error','rs:'.json_encode($rs).' id:'.json_encode($id).' error:'.$M->getDbError(),true);
			}
		}
		echo json_encode($result);
	}
	/**
	 * @param array(array("name"=>"奖品名","per"=>"概率","count"=>"数量")) $config
	 */
	protected  function Lottery($config){
		if(empty($config)) return false;
		$allnum	= 10000;
		$start	= 0;
		$rand	= rand(1, $allnum);
		if(!empty($_GET['mwt'])){
// 			return $config[intval($_GET['mwt'])];
		}
		foreach($config as $k=>$v){
			$result	= false;
			$s	= $start;
			$config[$k]['s']	= $start;
			$c	= intval($v['per']*$allnum);
			$start	= $start+$c;
			$e	= $start;
			$config[$k]['e']	= $start;
			if($rand>$s && $rand<=$e && $v['count']>0){
				$result	= $config[$k];
				break;
			}
// 			$config[$k]['e']	= $start;
		}
// 		@mwtlog("test_lottery","rand:".$rand." result:".json_encode($result)."\tconfit".json_encode($config)."\r\n",true);
		return $result;
	}
}