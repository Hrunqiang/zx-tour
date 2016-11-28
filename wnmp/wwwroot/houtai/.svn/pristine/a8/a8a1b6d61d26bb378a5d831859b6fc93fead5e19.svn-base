<?php
/**
 * Created by PhpStorm.
 * User: winter
 * Date: 15/11/5
 * Time: 下午5:02
 */
class ServerSmsAction extends Action{

    private static $ACIP = array(
        "127.0.0.1"
    );

    public function _initialize(){
        $ip = get_client_ip();
        if(!in_array($ip,self::$ACIP)){
            die("error_66535");
        }
    }
    public function send(){
        $result = array("error"=>66535,'msg'=>'unknow','data'=>array());
        $M = new SendSmsModel();
        $content = trim(addslashes($_POST['content']));
        $mobile = trim(addslashes($_POST['mobile']));
        if(empty($mobile) || empty($content) || strlen($content) >=500){
            $result['error']    = 1;
            $result['msg']      = "error content";
        }else{
            $result = $M->send($content,$mobile);
        }
        echo json_encode($result);
    }
}