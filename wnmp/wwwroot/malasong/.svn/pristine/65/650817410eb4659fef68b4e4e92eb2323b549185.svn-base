<?php

/**
 * 公共上传
 * @author kitter
 *
 */
class UploadAction extends Action {
	Public function _initialize(){
		B('AuthCheck');
	}
	public function index(){
		$this->display('rest');
	}

	public function uploadfile(){
		//$name = $_FILES['file'];
		import("ORG.Net.UploadFile");
		$upload = new UploadFile();
		$upload->maxSize = 20971520; //上传大小20M
		$upload->allowExts = array("jpg","gif","png","jpeg","pdf","txt","rar");
		$upload->savePath = "../wwwroot/st/public/";
		//$upload->saveRule = md5($name);
		if(!$upload->upload()){
			$error = $upload->getErrorMsg();
			if(strstr($error, '文件已经存在！')){
				$filename = explode("/",$error);
				echo "http://download.zx-tour.com/public/".$filename[count($filename)-1];
			}else {
				echo $upload->getErrorMsg();
			}
			
		}else{
			$info = $upload->getUploadFileInfo();
			echo "http://download.zx-tour.com/public/".$info[0]['savename'];
		}
	}
	
	public function getfile(){
		if($_FILES['attachment']['tmp_name']){
			$str=file_get_contents($_FILES['attachment']['tmp_name']);
			$order=array("\r\n","\n","\r");
			$str = str_replace($order, ";", $str);
			echo $str;
		}else{
			echo "no";
		}
	}
	
	public function plug_upload()
	{
		$toobj	= $_GET['toobj'];
		if($_FILES['file']['name']!=''){
			$path = UploadModel::upload($_FILES);
			$this->assign('path',$path);
		}
		$this->assign('toobj',$toobj);
		$this->assign('dir',$_GET['dir']);
		$this->assign('new_name',$_GET['new_name']);
		//  	 	app_tpl::assign('obj',$obj);
		$this->display('plug_upload');
	}
	
}