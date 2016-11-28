<?php
/**
 * Created by PhpStorm.
 * User: winter
 * Date: 15/10/23
 * Time: 下午6:21
 */

class SendSmsModel {
	public static $PHONE = "15201276483";
    public function send($content,$mobile){
        $result = array("error"=>66535,'msg'=>'unknow','data'=>array());
      //  $mobile = empty($mobile)?self::$PHONE:$mobile;
        if(empty($content) || empty($mobile)) return $result;

/*         if(strlen($content) > 1000 ){
            $result['error'] = 1;
            $result['msg'] = 'content too long';
            return $result;
        } */
        $flag = 0;
        $params='';//要post的数据
//        $verify = rand(123456, 999999);//获取随机验证码

        //以下信息自己填以下
        $argv = array(
            'name'=>'15201276483',     //必填参数。用户账号
            'pwd'=>'A787085859EBFF074E1C77713584',     //必填参数。（web平台：基本资料中的接口密码）
            'content'=>$content,//'短信验证码为：'.$verify.'，请勿将验证码提供给他人。',   //必填参数。发送内容（1-500 个汉字）UTF-8编码
            'mobile'=>$mobile,   //必填参数。手机号码。多个以英文逗号隔开
            'stime'=>'',   //可选参数。发送时间，填写时已填写的时间发送，不填时为当前时间发送
            //'sign'=>'知行合逸',    //必填参数。用户签名。 
        	'sign'=>'',
            'type'=>'pt',  //必填参数。固定值 pt
            'extno'=>''    //可选参数，扩展码，用户定义扩展码，只能为数字
        );
        //print_r($argv);exit;
        //构造要post的字符串
        //echo $argv['content'];
        /*foreach ($argv as $key=>$value) {
            if ($flag!=0) {
                $params .= "&";
                $flag = 1;
            }
            $params.= $key."="; $params.= urlencode($value);// urlencode($value);
            $flag = 1;
        }*/
        $params = http_build_query($argv);
        $url = "http://sms.1xinxi.cn/asmx/smsservice.aspx?".$params; //提交的url地址
        $con= substr( file_get_contents($url), 0, 1 );  //获取信息发送后的状态
        if($con == '0'){
            $result['error'] = 0;
            $result['msg'] = 'ok';
//            echo "<script>alert('发送成功!');</script>";
        }else{
            $result['error'] = 2;
            $result['msg'] = 'error:'.json_encode($con);
//            echo "<script>alert('发送失败!');</script>";
        }
        return $result;
    }


}