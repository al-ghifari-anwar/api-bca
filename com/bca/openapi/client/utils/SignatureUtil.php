<?php

namespace com\bca\openapi\client\utils;

class SignatureUtil
{
    public function generateOauthSignature($private_key_str, $client_id, $iso_time)
    {
        $private_key = <<<EOF
        -----BEGIN PRIVATE KEY-----
        $private_key_str
        -----END PRIVATE KEY-----
        EOF;
        $algo = "SHA256";
        $dataToSign = $client_id . "|" . $iso_time;
        openssl_sign($dataToSign, $binary_signature, $private_key, $algo);
        $signature = base64_encode($binary_signature);
        //$signature = bin2hex($binary_signature);
        return $signature;
    }

    public function validateOauthSignature($public_key_str, $client_id, $iso_time, $signature)
    {
        $is_valid = false;
        $public_key = <<<EOF
        -----BEGIN PUBLIC KEY-----
        $public_key_str
        -----END PUBLIC KEY-----
        EOF;
        $algo = "SHA256";
        $dataToSign = $client_id . "|" . $iso_time;
		$is_valid = openssl_verify($dataToSign, base64_decode($signature), $public_key, $algo);
        //$is_valid = openssl_verify($dataToSign, hex2bin($signature), $public_key, $algo);
        if($is_valid == 1){
            $is_valid =  true;
        }
        return $is_valid;
    }

    private function hashbody($body)
    {
        if (empty($body)) {
            $body = '';
        } else {
            //$toStrip = [" ", "\r", "\n", "\t"];
            //$body = str_replace($toStrip, '', $body);
        }
        return strtolower(hash('sha256', $body));
    }

    private function getRelativeUrl($url)
    {
        $path = parse_url($url, PHP_URL_PATH);
        if (empty($path)) {
            $path = '/';
        }

        $query = parse_url($url, PHP_URL_QUERY);
        if ($query) {
            parse_str($query, $parsed);
            ksort($parsed);
            $query = '?' . http_build_query($parsed);
        }
        $formatedUrl = $path . $query;
        return $formatedUrl;
    }

    public function generateServiceSignature($client_secret, $method,$url, $auth_token, $isoTime, $bodyToHash = [])
    {
        $hash = hash("sha256", "");
        if (is_array($bodyToHash)) {
            $encoderData = json_encode($bodyToHash, JSON_UNESCAPED_SLASHES);
            $hash = $this->hashbody($encoderData);
        }
        
        $stringToSign = $method.":".$this->getRelativeUrl($url) . ":" . $auth_token . ":" . $hash . ":" . $isoTime;
        $signature = base64_encode(hash_hmac('sha512', $stringToSign, $client_secret, true));
		//$signature = hash_hmac('sha512', $stringToSign, $client_secret, false);
        return $signature;
    }

    public function validateServiceSignature($client_secret, $method,$url, $auth_token, $isoTime, $bodyToHash, $signature){
        $is_valid = false;
        $signatureStr = $this->generateServiceSignature($client_secret, $method,$url, $auth_token, $isoTime, $bodyToHash);
        if(strcmp($signatureStr, $signature) == 0){
            $is_valid = true;
        }
        return $is_valid;
    }
}
