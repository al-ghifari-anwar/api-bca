<?php

namespace com\bca\openapi\client\services;

require_once dirname(__FILE__) . '/../service/BaseService.php';
require_once dirname(__FILE__) . '/../utils/JsonMapper.php';
require_once dirname(__FILE__) . '/../entity/oneklikpaymentresponse/OneklikPaymentResponse.php';

use com\bca\openapi\client\service\BaseService;
use com\bca\openapi\client\entity\oneklikpaymentresponse\OneklikPaymentResponse;
use com\bca\openapi\client\utils\JsonMapper;
use Unirest\Request;
use Unirest\Request\Body;
class OneklikPaymentService extends BaseService
{

    public function __construct($host,$origin,$corp_id, $client_id, $client_secret, $private_key,$timeout_second)
    {
        parent::__construct($host,$origin,$corp_id, $client_id, $client_secret, $private_key,$timeout_second);
    }
    
    public function payment(
        $external_id,
		$xipaddress,
		$xdeviceid,
        $request
    )
    {
        $request_path = "/openapi/oneklik/v1.0/debit/payment-host-to-host";

        $oauth_token = $this->getToken();
        $isoTime = $this->getIsoTime();

        $headers = array();
        $headers['Accept'] = 'application/json';
        $headers['Content-Type'] = 'application/json';
        $headers['CHANNEL-ID'] = '95051';
        $headers['Authorization'] = "Bearer $oauth_token";
        $headers['Origin'] = $this->origin;
        $headers['X-CLIENT-KEY'] = $this->clientId;
        $headers['X-TIMESTAMP'] = $isoTime;
        $headers['X-PARTNER-ID'] = $this->corpId;
		$headers['X-DEVICE-ID'] = $xdeviceid;
		$headers['X-IP-ADDRESS'] = $xipaddress;
        $headers['X-EXTERNAL-ID'] =$external_id;
		

        $domain = $this->getBaseAPIURI();
        $full_url = $domain . $request_path;

        $jsonStr = json_encode($request);
        $bodyData = json_decode($jsonStr,true);
    
        $authSignature = $this->generateSign("POST",$request_path, $oauth_token, $isoTime, $bodyData);

        $headers['X-SIGNATURE'] = $authSignature;

        $encoderData = json_encode($bodyData, JSON_UNESCAPED_SLASHES);

        $body = Body::form($encoderData);
        //echo $body;
        $response = Request::post($full_url, $headers, $body);
        $objResponse = new OneklikPaymentResponse();
        $mapper = new JsonMapper();
        $mapper->parse($response->body, $objResponse);
        return $objResponse;
    }
}
