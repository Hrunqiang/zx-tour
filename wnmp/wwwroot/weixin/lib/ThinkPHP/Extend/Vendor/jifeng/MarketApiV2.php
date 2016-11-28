<?php 
/*
 * Created by qin on 7-31
 *
 */

require_once 'MarketApi.php';

class MarketApiV2 extends BaseMarketApi implements MarketApiInterface{
    var $config;

    function __construct(){
        parent::__construct();
		require_once 'api.php';
        $this->config = $conf['market_api']['v2'];

    }

    public function callApi($args, $method){

        $request['version'] =  1;
        $request['method'] = 'MarketCoreService.'.$method;
        $request['base'] = array('platform' => '', 'screen_size'=>'', 'match_type'=>'', 'feature_type'=>'','imei'=>'', 'uid'=>'', 'client_id'=>'', 'cid'=>'', 'client_version'=>'');
        $request['args'] = $args;

        $xml = $this->convertor->Array2XMLString($request, 'request');
        $url = $this->config['url'];

        $response = $this->httpPost($url, $xml);

        $result = $this->convertor->XMLString2Array($response);
        $response = $result['response'];

        if($response['code'] == 200){
            return $response;
        }

        return array();
    }
}

?>