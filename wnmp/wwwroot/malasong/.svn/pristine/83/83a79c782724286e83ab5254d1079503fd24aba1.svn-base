<?php
/**
 * 比赛成绩
 * @author hhy
 * ctime 2015-10-27
 */
class ScoreAction extends Action {
	public $cjDes = array(
        "paiming"=>"名次",
        "name"=>"姓名",
        "number"=>"芯片编号",
        "mobile"=>"手机号",
        "zubie"=>"组别",
        "zcj"=>"总成绩",
        "jcj"=>"净成绩",
        "qd"=>"起点",
        "zd"=>"终点",
        "km10"=>"10公里",
        "km13"=>"13公里",
        "km15"=>"15公里",
        "km20"=>"20公里",
        "km29"=>"29公里",
        "km40"=>"40公里"

    );

	Public function _initialize(){
		//B('AuthCheck');
	}

    public function index(){
    	$npa = array(
    			"tab"=>"成绩查询",
    			"mtab"=>"完赛证书",
    	);
    	$this->assign ( "npa", $npa );
        $this->display();
    }

    public function searchcj(){
        $result = array("error"=>31,"msg"=>"unknown","data"=>array());
        $user_name  = addslashes(trim($_POST['user_name']));
        $match_num  = addslashes(trim($_POST['match_num']));
        $match_num = strtoupper($match_num);
        $code       = addslashes(trim($_POST['code']));
        if(empty($user_name) || empty($match_num) || empty($code)){
            $result['error']=1;
            $result['msg']="必填参数不全";
        }else{
            if($code && md5($code)==session('verify')){
                $M = new MlsCjModel();
                $data = $M->getcj($user_name,$match_num);
                if(!empty($data)){
                    $result['error'] = 0;
                    $result['msg'] = "ok";
                    $result['field'] = $this->cjDes;
                    $result['data'] = $data;
                }else{
                    $result['error']=21;
                    $result['msg']='请检测填写信息是否正确，暂无此人信息';
                }

            }else{
                $result['error']=2;
                $result['msg']='验证码错误，请点击刷新验证码';
            }
        }
        $rand = md5(rand(1000,9999));
        session('verify',$rand);
        echo json_encode($result);
    }

    public function printzx(){
        $user_name  = addslashes(trim($_GET['user_name']));
        $match_num  = addslashes(trim($_GET['match_num']));
        if(empty($user_name) || empty($match_num)){
            die("ERROR0084739");
        }else{
            $M = new MlsCjModel();
            $data = $M->getcj($user_name,$match_num);
            if(empty($data)){
                echo "<script>alert('请返回检测数据是否正确');window.close();</script>";
            }
            $this->assign ( "data", $data );
            $this->display();
        }

    }
}