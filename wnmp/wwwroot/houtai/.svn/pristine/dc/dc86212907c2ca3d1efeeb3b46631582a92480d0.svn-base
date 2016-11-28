<?php 
/**
 * phpexcel 导出
 * @author hhy
 * @createTime 2016-10-24 下午3:42:09
 */
class Excel_export{
	protected $objPHPExcel;
	protected $objWriter;
	
	public function __construct(){
		include 'PHPExcel.php';
		if(!$this->objPHPExcel){	
			$this->objPHPExcel = new PHPExcel();
		}
	}
	
	public function setCellValue($x,$y,$val,$isnum=false){
		$key = $this->nubertoLetter($y).intval($x);
		$cal = $this->convertUTF8($val);	
		//$this->objPHPExcel->getActiveSheet()->setCellValue($key, $val);
		if($isnum){
			$this->objPHPExcel->getActiveSheet()->setCellValueExplicit($key,$val,PHPExcel_Cell_DataType::TYPE_NUMERIC);
		}else{
			$this->objPHPExcel->getActiveSheet()->setCellValueExplicit($key,$val,PHPExcel_Cell_DataType::TYPE_STRING);
		}
	}
	
	public function setNumStyle($key){
		$this->objPHPExcel->getActiveSheet()->getStyle($key)->getNumberFormat()->setFormatCode("@");
	}
	
	public function save($filename){
		$filename = $filename?$filename:"zx-export";
		header("Pragma: public");
		header("Expires: 0");
		header("Cache-Control:must-revalidate, post-check=0, pre-check=0");
		header("Content-Type:application/force-download");
		header("Content-Type:application/vnd.ms-execl");
		header("Content-Type:application/octet-stream");
		header("Content-Type:application/download");;
		header('Content-Disposition:attachment;filename="'.$filename.'.xls"');
		header("Content-Transfer-Encoding:binary");
		$this->objPHPExcel->createSheet();
		include 'PHPExcel/Writer/Excel2007.php';
		$this->objWriter = PHPExcel_IOFactory::createWriter($this->objPHPExcel, 'Excel5');
		$this->objWriter->save('php://output');
	}
	
	public function nubertoLetter($num){
		$num = intval($num);
		$tmp = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$before = floor($num/26)>0?$tmp[floor($num/26)-1]:"";
		$after = $tmp[$num%26];
		return $before.$after;
	}
	
	public function convertUTF8($str){
		if(empty($str)) return '';
		return iconv("UTF-8", "GB2312//ignore",$str);
	}
}
?>