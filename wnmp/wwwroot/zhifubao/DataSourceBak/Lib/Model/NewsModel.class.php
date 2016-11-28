<?php
class NewsModel extends Model{
	protected  $trueTableName	= "mls_news";
	protected $connection = 'DB_CONFIG1';
		
	public function getnewsInfoById($id){
		if(empty($id) || !is_numeric($id)) return false;
		return $this->where("id=$id")->find();
	}
	
	public function getnewslist(){
		return $this->field("id,news_title,des,img,url,url_type")->order("orderid asc,id desc")->limit(0,6)->select();
	}
	
}