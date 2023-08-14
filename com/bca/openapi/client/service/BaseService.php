<?php

namespace com\bca\openapi\client\service;

require_once dirname(__FILE__) . '/../../../../../Unirest/Unirest.php';
require_once dirname(__FILE__) . '/../utils/SingletonToken.php';
require_once dirname(__FILE__) . '/../utils/SignatureUtil.php';

use Unirest\Request;
use Unirest\Request\Body;
use DateTime;
use com\bca\openapi\client\utils\SingletonToken;
use com\bca\openapi\client\utils\SignatureUtil;


class BaseService
{
    protected $timezone = 'Asia/Jakarta';
    protected $timeOut = 30;
    protected $scheme = "https";
    protected $host;
    protected $port = 443;
    protected $origin;
    protected $corpId;
    protected $clientId;
    protected $clientSecret;
    protected $privateKey;
    protected $isCacheToken = true;

    public function __construct($host, $origin, $corp_id, $client_id, $client_secret, $private_key, $timeout_second)
    {
        $this->scheme = parse_url($host, PHP_URL_SCHEME);
        $this->host = parse_url($host, PHP_URL_HOST);
        $this->port =  parse_url($host, PHP_URL_PORT);
        $this->origin = $origin;
        $this->corpId = $corp_id;
        $this->clientId = $client_id;
        $this->clientSecret = $client_secret;
        $this->privateKey = $private_key;
        $options = array(
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSLVERSION => 6,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_TIMEOUT => $timeout_second
        );
        Request::curlOpts($options);
    }

    public function setCacheTokenDisable()
    {
        $this->isCacheToken = false;
    }

    protected function getBaseAPIURI()
    {
        $domain = $this->scheme . '://' . $this->host . ':' . $this->port;
        return $domain;
    }

    public function getToken()
    {
        if($this->isCacheToken){
            $singletonToken = SingletonToken::getInstance();
            if ($singletonToken->isExpire()) {
                //echo "Is Expire\n";
                return $this->getInitToken();
            } else {
                //echo "Not Expire\n";
                return $singletonToken->getToken();
            }
        }else{
            return $this->getInitToken();
        }
    }

    public function getInitToken()
    {
        $response =  $this->httpAuth();
        $responseMessage = $response->body->responseMessage;
        if (is_null($responseMessage) or str_contains($responseMessage,"Success")){
           $token = $response->body->accessToken;
           $expireIn = $response->body->expiresIn;
           if($this->isCacheToken){
               $singletonToken = SingletonToken::getInstance();
               $singletonToken->setToken($token, $expireIn);
           }
            return $token;
       }else{
           echo "Error Occur on generate token : ".$responseMessage."\n";
           return null;
       }
    }

    private function httpAuth()
    {
        $client_id = $this->clientId;
        $private_key_str = $this->privateKey;
        $isoTime = $this->getIsoTime();

        $signatureUtil = new SignatureUtil();
        $signature = $signatureUtil->generateOauthSignature($private_key_str,$this->clientId,$isoTime);
        //echo "Signature ".$signature;

        $headers = array('Accept' => 'application/json','Content-Type' => 'application/json', 'X-TIMESTAMP' => $isoTime,'X-CLIENT-KEY' => $client_id, 'X-SIGNATURE' =>$signature);

        $request_path = "/openapi/v1.0/access-token/b2b";
        $domain = $this->getBaseAPIURI();
        $full_url = $domain . $request_path;

        $data = array('grantType' => 'client_credentials');
        $encoderData = json_encode($data, JSON_UNESCAPED_SLASHES);
        $body = Body::form($encoderData);
        $response = Request::post($full_url, $headers, $body);
        //print_r($response);
        return $response;
    }


    public function generateSign( $method,$url, $auth_token, $isoTime, $bodyToHash = [])
    {
        $signatureUtil = new SignatureUtil();
        $signature = $signatureUtil->generateServiceSignature($this->clientSecret, $method, $url, $auth_token, $isoTime, $bodyToHash);
        return $signature;
    }

    public function setTimeZone($timeZone)
    {
        $this->timezone = $timeZone;
        return $this->timezone;
    }

    public function getTimeZone()
    {
        return $this->timezone;
    }


    public function getTimeOut()
    {
        return $this->timeOut;
    }

    public function getIsoTime()
    {
        date_default_timezone_set($this->getTimeZone());
        $date = new DateTime('NOW');
          $dateStr = $date->format('Y-m-d\TH:i:s');
	//	$dateStr = substr($dateStr, 0, -3);
        $ISO8601 = $dateStr . $date->format('P');
        return $ISO8601;
    }


    public function getDateTransaction()
    {
        date_default_timezone_set($this->getTimeZone());
        $date = new DateTime('NOW');
        $fmt = $date->format('Y-m-d');
        return $fmt;
    }

    public function getArrayImplode($glue, $separator, $array = [])
    {
        foreach ($array as $key => $val) {
            if (is_array($val)) {
                $val = implode(',', $val);
            }
            $string[] = "{$key}{$glue}{$val}";
        }
        return implode($separator, $string);
    }
}
