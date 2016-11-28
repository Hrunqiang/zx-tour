<?php
!defined('PATH_ADMIN') && exit('Forbidden');
/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */


/**
 * Smarty truncate modifier plugin
 *
 * Type:     modifier<br>
 * Name:     truncate<br>
 * Purpose:  Truncate a string to a certain length if necessary,
 *           optionally splitting in the middle of a word, and
 *           appending the $etc string or inserting $etc into the middle.
 * @link http://smarty.php.net/manual/en/language.modifier.truncate.php
 *          truncate (Smarty online manual)
 * @author   Monte Ohrt <monte at ohrt dot com>
 * @param string
 * @param integer
 * @param string
 * @param string
 * @return string
 */
function smarty_modifier_truncate_cn($string, $length = 80, $dot = '...', $code = 'UTF-8')
{
// 	if ($length == 0)
// 	return '';
// 	if ($code == 'UTF-8') {
// 		$pa = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/";
// 	}
// 	else {
// 		$pa = "/[\x01-\x7f]|[\xa1-\xff][\xa1-\xff]/";
// 	}
// 	preg_match_all($pa, $string, $t_string);
// 	if (count($t_string[0]) > $length)
// 	return join('', array_slice($t_string[0], 0, $length)) . $etc;
// 	return join('', array_slice($t_string[0], 0, $length));
// 	$length2 =mb_strlen($string,$code);
// 	preg_match_all("/[a-zA-Z0-9\.]/", $string,$match);
// 	if(count($match[0])){
// 		$length2 = $length+ceil(count($match[0])/2);
// 	}
//	$str_cut = mb_strlen($string,$code)>$length ? mb_convert_encoding(trim(mb_substr($string,0,$length,$code)), $code, 'auto').$dot:mb_convert_encoding(trim($string), $code, 'auto');
	
	
	if ($length == 0) return '';  
    mb_internal_encoding($code);  
  
    $string = str_replace("\n","",$string);  
    $strlen = mb_strwidth($string);  
    if ($strlen > $length) {  
        $etclen = mb_strwidth($dot);  
        $length = $length - $etclen;  
        $str=''; $n = 0;  
        for($i=0; $i<$length; $i++) {  
            $c = mb_substr($string, $i, 1);  
            $n += mb_strwidth($c);  
            if ($n>$length) { break; }  
            $str .= $c;  
        }  
        return $str.$dot;  
    } else {  
        return $string;  
    } 
	
	
//	return $str_cut;
}

/* vim: set expandtab: */

?>
