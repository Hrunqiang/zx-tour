<?php 
/*
 * Created by qin on 2014-6-12
 *
 */

require_once 'Convertor.php';

interface MarketApiInterface{
    function callApi($args, $method);
}

class BaseMarketApi{

    var $convertor;
    var $ci;

    function __construct(){
	
        
        $this->convertor =new Convertor();
		
    }

    protected function httpPost($url, $data){
//         $alternate_opts = array(
//                 'http'=>array(
//                     'method'=>"POST",
//                     'header'=>"Content-type: application/x-www-form-urlencoded\r\n" .
//                         "Content-length: " . strlen($data) . "\r\n" .
//                         'User-Agent: Nexus+One/2.2.1/3G/1.3/9/356409045692335/89860021011000187561/7C:61:93:34:29:F9/23123',
//                     'content'=>$data
//                     )
//                 );

//         $alternate = stream_context_create($alternate_opts);
        $header = array(
        		'Content-type: application/x-www-form-urlencoded\r\n',
        		'User-Agent: Nexus+One/2.2.1/3G/1.3/9/356409045692335/89860021011000187561/7C:61:93:34:29:F9/23123',
        		'G-Header: Nexus One/2.2/OpenClient/1.0/9'
        		);
		$return	= getData($url,true,'',false,$data,$header);
//         $return = file_get_contents($url, false, $alternate);

        return $return['data'];
    }
}

?>