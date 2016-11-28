<?php

	
class Biz_model {
	
	var $marketApiV2;

    function __construct() {
		require_once 'MarketApiV2.php';
		
        $this->marketApiV2 =new MarketApiV2();
    }
/*
        "all", "", 0 = 精品推荐
        "all", "", 1 = 最新上架
        "all", "", 2 = 今日热门
    */
    function getProducts($type, $cat_id, $order = 0, $page = 1, $size = 20){

        $offset = ($page - 1) * $size;

        $request = array(
            'size' => $size,
            'start_position' => $offset,
            'id' => $cat_id,
            'orderby' => $order,
            'type' => $type
        );
        
        $response = $this->marketApiV2->callApi($request, 'GetProductList');
		
        if($response){
            return array(
                'products' => $response['products']['product'],
                'total_size' => $response['products']['total_size'],
                'end_position' => $response['products']['end_position'],
            	'category_type' => $response['products']['product'][0]['category_type'],
                'category_sub_type'=>$response['products']['product'][0]['category_sub_type'],
            	'total_page' => intval($response['products']['total_size']/$size)+1,
            );
        }

        return array();
    }
	
	}
?>