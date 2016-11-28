<?php
/**
 * 优惠券
 * @author hhy
 * @createTime 2016-7-15 下午4:00:18
 */
class CouponAction extends Action {
	
	public function _initialize(){
		B('AuthCheck');
	}
	
	public function index(){
	//	$uid = session("SESSION_ZX_AUTHID");
		$orderid = htmlspecialchars(addslashes(trim($_GET['orderid'])));
// 		$couponM = new CouponListModel();
// 		$list = $couponM->getcouponByUid($uid,$where);
// 		$couponStr = "";
// 		foreach($list as $key  =>$val){
// 			$couponStr.=$this->couponHTML($val,$orderid);
// 		}
// 		$this->assign("couponStr",$couponStr);
		$this->assign("orderid",$orderid);
		$this->display();
	}
	
	public function bind(){
		$rs = array("error"=>65535,"msg"=>"未知错误","data"=>"");
		$code = htmlspecialchars(addslashes(trim($_POST['codestr'])));
		$orderid = htmlspecialchars(addslashes(trim($_POST['orderid'])));
		$couponM = new CouponListModel();
		$info = $couponM->getcodeinfo($code);
		if($info[0]){
			$data = $info[0];
			$date = Date("Y-m-d H:i:s");
			if($date>$data['expiry_date']){
				$rs['error']=1;
				$rs['msg']="优惠码已过期！";
			}else{
				if($data['stats']>0){
					$rs['error']=1;
					$rs['msg']="优惠码已使用！";
				}else{
					$uid = session ('SESSION_ZX_AUTHID');
					$res = $couponM->bindCoupon($uid, $code);
					$url = $orderid?"/PayResult/payorder?orderid=".$orderid."&couponid=".$data['id']:"/";
					if($res!==false){
						$rs['error'] = 0;
						$rs['msg'] = "ok";
						$data['url'] = $url;
						$rs['data'] = $data;
					}else{
						$rs['error'] = 1;
						$rs['msg'] = "系统错误！";
					}
				}
			}
		}else{
			$rs['error']=1;
			$rs['msg']="未找到此优惠码";
		}
		echo json_encode($rs);
		
	}
	
	public function couponHTML($info,$orderid){
		$template = '<div class="coupon"><div class="coupon_left %s"><div class="convert_top">
				<span>%s</span><div><p>%s</p><p>元优惠券</p></div></div><div class="convert_bottom">
				<span>%s</span><span>有效期%s至%s</span></div></div><a href="%s"><div class="coupon_right %s">
				<div>立即使用</div></div></a></div>';
		switch($info['coupon_type']){
			case "1":  //绿色通用
				$background = "_green";
				$font_color = "_green_font";
				break;
			case "2":  //针对跑团
				$background = "_blue";
				$font_color = "_blue_font";
				break;
			case "3":  //针对跑团
				$background = "_red";
				$font_color = "_red_font";
				break;
			
		}
		$limit_array = array();
		if($info['min_able_price']>0){
			array_push($limit_array, "满".$info['min_able_price']."元");
		}
		if($info['able_ptype']){
			array_push($limit_array, "只限".$info['able_ptype']."比赛");
		}
		
		if($info['able_match']){
			array_push($limit_array, "指定赛事可用");
		}
		
		if($info['able_meal']=="source"){
			array_push($limit_array, "只限报名");
		}
		if($info['able_meal']=="meal"){
			array_push($limit_array, "只限套餐");
		}
		$limit =join(",",$limit_array);
		$limit = $limit?$limit:"无使用门槛，全场通用";
		$expiry_date = substr($info['expiry_date'],0,10);
		$effective_date = substr($info['effective_date'],0,10);
		$url = $orderid?"/PayResult/payorder?orderid=".$orderid."&couponid=".$info['id']:"/";
		return sprintf($template,$background,$info['discount'],$info['coupon_name'],$limit,$effective_date,$expiry_date,$url,$font_color);
		
	}
	
}