<?php
/**
 * sphinx字典构造类
 * @author kitter 
 * @since  2014-3-06 12:15:21
 */
class DictModel extends Model{
	protected  $trueTableName	= "cartoon_info";
	public function makeDict(){
		echo date("Y-m-d H:i:s")."dict start \r\n";
		function_exists('set_time_limit') && set_time_limit(60);
		ini_set('memory_limit', '256M');
		
		$path	= APP_PATH."/static/data/";
		
		$sourceName = $path."unigram.txt";
		if( !file_exists($sourceName) ){
			exit("原始字典文件unigram.txt不存在\r\n");
		}
		$destName = $path."/unigram_dest.txt";
		if( !copy($sourceName,$destName)){
			exit("copy原始字典文件失败\r\n");
		}
		
		$words = self::getWords();
		$data = "";
		foreach($words as $val){
			$data .= $val."\t1\r\nx:1\r\n";
		}
		$rs = file_get_contents($sourceName);
		if(!$rs){
			exit("读取unigram.txt内容失败\r\n");
		}
		$rs .=$data; 
		
		if( !file_put_contents($destName, $rs)){
			exit("写入新字典文件unigram_dest.txt失败\r\n");
		}
		
		echo date("Y-m-d H:i:s")."ok\r\n";
	}
	
	/**
	 * 从kn_info、kn_actor中获取导演，影片名，演员们等关键字
	 * 
	 * @return array
	 */
	public static function getWords(){
		$words = array();
		$Cartoon	= new CartoonInfoModel();
		$names = $Cartoon->field("title")->where("isdel=0")->select();
		foreach($names as $val){
			if($val['title']){
				$find = array(":","/","：","・","·",",","，","(","（","-","《","［","[","@","<","“","‘","【","—",".","！");
				$replace = array(" "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," "," ");
				$title = str_replace($find, $replace, $val['title']);
				
				$find = array(")",">","]","）","”","’","》","】");
				$replace = array("","","","","","","","");
				$title = str_replace($find, $replace, $title);
				if( !preg_match("/^[a-zA-Z]+$/", str_replace(" ", "",$title)) ){		//全英语不加入字典
					$title = explode(" ",$title);
					foreach($title as $v){
						if($v && !is_numeric($v)){
							$tit = preg_replace("/^([a-z0-9]+)/i", '', $v);
							$tit = preg_replace("/([a-z0-9]+)$/i", '', $tit);
// 							$tit = preg_replace("/^([^\d]+)(\d+)$/", '${1}', $v);
							if( $tit && preg_match("/^[\x{4e00}-\x{9fa5}]+$/u",$tit) && mb_strlen($tit,"utf-8")>1 && mb_strlen($tit,"utf-8")<=5){
								$words[] = trim($tit);
							}
						}
					}
				}
			}
		}
		unset($films);
		return array_unique($words);
	}
}
?>