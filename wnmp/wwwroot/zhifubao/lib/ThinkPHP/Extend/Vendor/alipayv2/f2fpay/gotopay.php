<?php
require_once dirname(dirname(__FILE__)).'/lotusphp_runtime/ObjectUtil/ObjectUtil.php';
require_once dirname(dirname(__FILE__)).'/AopSdk.php';
require_once dirname(dirname(__FILE__)).'/function.inc.php';
require dirname(dirname(__FILE__)).'/config.php';
$BizContent  = '{
    "out_trade_no":"20150320010101001",
    "total_amount":88.88,
    "discountable_amount":8.88,
    "undiscountable_amount":80.00,
    "buyer_logon_id":"15901825620",
    "subject":"Iphone6 16G",
    "body":"Iphone6 16G",
    "buyer_id":"2088102146225135",
      "goods_detail":[{
                "goods_id":"apple-01",
        "alipay_goods_id":"20010001",
        "goods_name":"ipad",
        "quantity":1,
        "price":2000,
        "goods_category":"34543238",
        "body":"特价手机"
}],
"operator_id":"Yx_001",
"store_id":"NJ_001",
"terminal_id":"NJ_T_001",
"extend_params":{
"sys_service_provider_id":"2088511833207846",
"hb_fq_num":"3",
"hb_fq_seller_percent":"100"
},
"timeout_express":"90m",
"royalty_info":{
"royalty_type":"ROYALTY",
"royalty_detail_infos":[{
"serial_no":1,
"trans_in_type":"userId",
"batch_no":"123",
"out_relation_id":"20131124001",
"trans_out_type":"userIdwww",
"trans_out":"2088101126765726",
"trans_in":"2088101126708402",
"amount":0.1,
"desc":"分账测试1"
}]
},
"alipay_store_id":"2016041400077000000003314986"
}';

$BizContent  = "{\"out_trade_no\":\"33203332001020122\",";
$BizContent  .= "\"total_amount\":0.01,";
$BizContent  .= "\"discountable_amount\":0,";
$BizContent  .= "\"undiscountable_amount\":0.01,";
$BizContent  .= "\"buyer_logon_id\":\"13522354197\",";
$BizContent  .= "\"subject\":\"Iphone6 16G\",";
$BizContent  .= "\"body\":\"Iphone6 16G\",";
//$BizContent  .= "\"buyer_id\":\"2088102146225135\",";
$BizContent  .= "\"goods_detail\":[{";
$BizContent  .= "\"goods_id\":\"apple-01\",";
$BizContent  .= "\"alipay_goods_id\":\"20010001\",";
$BizContent  .= "\"goods_name\":\"ipad\",";
$BizContent  .= "\"quantity\":1,";
$BizContent  .= "\"price\":2000,";
$BizContent  .= "\"goods_category\":\"34543238\",";
$BizContent  .= "\"body\":\"特价手机\"";
$BizContent  .= "}],";
$BizContent  .= "\"operator_id\":\"Yx_001\",";
$BizContent  .= "\"store_id\":\"NJ_001\",";
$BizContent  .= "\"terminal_id\":\"NJ_T_001\",";
// $BizContent  .= "\"extend_params\":{";
// $BizContent  .= "\"sys_service_provider_id\":\"2088511833207846\",";
// $BizContent  .= "\"hb_fq_num\":\"3\",";
// $BizContent  .= "\"hb_fq_seller_percent\":\"100\"";
// $BizContent  .= "},";
$BizContent  .= "\"timeout_express\":\"90m\",";
// $BizContent  .= "\"royalty_info\":{";
// $BizContent  .= "\"royalty_type\":\"ROYALTY\",";
// $BizContent  .= "\"royalty_detail_infos\":[{";
// $BizContent  .= "\"serial_no\":1,";
// $BizContent  .= "\"trans_in_type\":\"userId\",";
// $BizContent  .= "\"batch_no\":\"123\",";
// $BizContent  .= "\"out_relation_id\":\"20131124001\",";
// $BizContent  .= "\"trans_out_type\":\"userIdwww\",";
// $BizContent  .= "\"trans_out\":\"2088101126765726\",";
// $BizContent  .= "\"trans_in\":\"2088101126708402\",";
// $BizContent  .= "\"amount\":0.1,";
// $BizContent  .= "\"desc\":\"分账测试1\"";
// $BizContent  .= "}]";
// $BizContent  .= "},";
$BizContent  .= "\"alipay_store_id\":\"2016041400077000000003314986\"";
$BizContent  .= "}";

$aop = new AopClient ();
$aop->gatewayUrl = 'https://openapi.alipay.com/gateway.do';
$aop->appId = '2015082800238591';
$aop->rsaPrivateKeyFilePath = dirname(dirname(__FILE__))."/key/rsa_private_key.pem";
// //$aop->rsaPrivateKeyFilePath = "MIICXgIBAAKBgQDQLqVpn1q6YmywCwVf80jUT9Lc2DAyCETu7v2kkiqM2lk/WPz2LYCfQ4TCZu3J/4gRv9MPskgFzrcrEe3W7JfBxQqQRNzGA7OmRKKrSRqwkAlduYo2ndr8dB/n6+gGbeYPTm86t3AXjolZHi3E+VV+xJb52jG05WqcWu7XKyxUwwIDAQABAoGBAMZGRwCr5ytxJnccaAgUm56qT/hKZsygF5dBQ44EMEZqh2nQBU0p1UDae4zznzIuD5hoDEr8z5/IW6fHsbBrMbSATNc62Kf5EDwqy1SDpF7DPq4G0cksOvvBJZcUm6s7qwqIwE1Sj53gz2G4iP26MCxbxQvq7R+qJbkT2gNPjBgRAkEA+NNRGfzWTaRu10jPWn07O8HTqZ7HYnvOXh7CLkRmidwIEQQmh8JlprzWoHfqMZN8WBsRnBEMOhATg6fmvrZonwJBANYvUyaTtGogKIsJ810HYQEdKrUGj6H82oQDsHko0D+wAIwctZi+ayem9qiuhTAW1P0ol9CRNN+7FY+hNK4/zV0CQQCTMO4Y4WgkJdErqPaAIPSZNN9wx2xK5dH9+1QC6pN9mZtr9XiVdnmLWMndwxHWodg8hka0e6Ev97KTfw8QYfchAkANWon+n7rh2vtsH8SyiiE8JothGfWejds529kG1MqXDewa0DdqPIUFxd0fCzJ2mxXQatV8RXFceZeQiuZz7rppAkEAuxDLNiZO79KxDyrDrOhRG/Tk+8Z/hWUQk5ztptrGXI+p7mMNJ3L3WeQS9SCvCEhe3ono4esuckKeioPZgRe/0w==";
//$aop->alipayPublicKey='MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDDI6d306Q8fIfCOaTXyiUeJHkrIvYISRcc73s3vF1ZT7XN8RNPwJxo8pWaJMmvyTn9N4HQ632qJBVHf8sxHi/fEsraprwCtzvzQETrNRwVxLO5jVmRGi60j8Ue1efIlzPXV9je9mkjzOmdssymZkh2QhUrCmZYI/FCEa3/cNMW0QIDAQAB';
$aop->alipayPublicKey=dirname(dirname(__FILE__))."/key/alipay_rsa_public_key.pem";
$aop->apiVersion = '1.0';
$aop->postCharset='UTF-8';
$aop->format='json';
 $request = new AlipayTradeCreateRequest();
// //$request = new AlipayTradePayRequest ();
$request->setBizContent($BizContent);
$result = $aop->execute ( $request);
die("ok");
//$url = "https://openauth.alipay.com/oauth2/appToAppAuth.htm?app_id=2015082800238591&redirect_uri=".urlencode("http://daily.zx-tour.com");
$url = "https://openauth.alipay.com/oauth2/publicAppAuthorize.htm?app_id=2015082800238591&scope=auth_userinfo&redirect_uri=".urlencode("http://daily.zx-tour.com/PayResult/gotopay?test=1");
echo $url."<br>";
// $request = new AlipaySystemOauthTokenRequest ();
// $accessToken = "1e7fb796144c4c2cbd9e7a4daefeSE98";
// $request->setCode($accessToken);
// $request->setGrantType("authorization_code");
// $result = $aop->execute ( $request);
// var_dump($result);