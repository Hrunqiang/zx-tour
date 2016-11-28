<?php

class IndexAction extends Action {
	Public function _initialize(){
		B('AuthCheck');
	}
    public function index(){
    	$this->display('admin');
	}
	public function header(){
		$this->assign ( "menu", C('Menu'));
		$this->display ("Login:top");
	}
	
	public function menu(){
		$id=(empty($_GET['id']))?'':$_GET['id'];
		$showWelcome=(empty($_GET['showWelcome']))?'0':$_GET['showWelcome'];
		// 		$data=mod_login::menu($id);
		$menu	= C('Menu');
		$i=0;
		$right	= session("right_action");
		$right	= unserialize($right);
		foreach ($menu as $key => $val)
		{
			if ($id == $i)
			{
				foreach ($val as $k1 => $v1)
				{
					$output.="<div class='item'><h2>{$k1}<span class='close'>收起</span></h2><ul>";
					foreach ($v1 as $k2 => $v2)
					{
						if(in_array($v2['right'], $right) || If_manager){
							$output.="<li><a href='{$v2["url"]}' target='main' >{$k2}</a></li>";
						}
					}
					$output.='</ul></div>';
				}
			}
			$i++;
		}
		$this->assign ( "data", $output);
		$this->assign ( "showWelcome", $showWelcome);
		$this->display ("Login:menu");
	}
	public function welcome(){
		$data = array();
		$mod_login	= new LoginModel();
		$data	= $mod_login->system_info();
		// 		$data = mod_login::system_info();
	
		$users	= new UserAuthModel();
		$data["managerTotal"] = $users->get_total_num();
	
		$this->assign ("currIP", get_client_ip());
		// 		mytrace($data);
		$Sys	= new SysModel();
// 		$datasO	= $Sys->field('ctime as "0",mem as "1"')->select();
// 		$date	= date("Y-m-d",strtotime("-3 day"));
		$date	= strtotime("-3 day");
		$datasO	= $Sys->field('ctime as x,mem,cpu,load')->where("ctime>=$date")->select();
		foreach($datasO as $v){
			$rs['mem'][]	=array((float)($v['x'])*1000,(float)($v['mem']));
			$rs['load'][]	=array((float)($v['x'])*1000,(float)($v['load']));
			$rs['cpu'][]	=array((float)($v['x'])*1000,(float)($v['cpu']));
		}
		$datas	= json_encode($rs);
// 		$pvdata	= get_mem_tj();
// 		$pvdata	= json_encode($pvdata);
// 		echo $datas;
		$this->assign ( "datas", $datas);
		$this->assign ( "data", $data);
// 		$this->assign ( "pvdata", $pvdata);
		$this->display ("Login:welcome");
	}
}