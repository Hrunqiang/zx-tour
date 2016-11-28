<?php
// !defined('PATH_ADMIN') && exit('Forbidden');
/**
 * @author   kitter <monte at ohrt dot com>
 * @param string
 * @param 返回的数组里的key:return
 * @return string
 */
function smarty_modifier_json_decode($string, $return,$slash=false)
{
	if($slash){
		$string	= stripslashes($string);
	}
	$rs	= json_decode($string,true);
	if($rs && is_array($rs) && $rs[$return]){
		return $rs[$return];
	}else{
		return false;
	}

}

/* vim: set expandtab: */

?>
