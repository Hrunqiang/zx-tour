<?php 
/*
 * Created by qin on 2014-6-12
 *
 */

require_once 'MarketApi.php';

class MarketApiV1 extends BaseMarketApi  implements MarketApiInterface{
    var $config;

    function __construct(){

        parent::__construct();

        $this->ci->config->load('api');
        $api = $this->ci->config->item('market_api');
        $this->config = $api['v1'];
    }

    public function callApi($args, $method){

        $request['platform'] = 8;
        $request['screen_size'] = '240#320';
        $request['match_type'] = '1';

        $request = array_merge($request, $args);

        $url = $this->config['url']. $method;

        $xml = $this->convertor->Array2XMLString($request, 'request');

        $response = $this->httpPost($url, $xml);

        $result = $this->convertor->XMLString2Array($response);

        return $result;
    }

    
}


?>