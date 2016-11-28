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
			echo "welcome!";
	}
}