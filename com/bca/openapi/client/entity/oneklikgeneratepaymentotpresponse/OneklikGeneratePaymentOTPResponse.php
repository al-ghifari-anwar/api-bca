<?php

namespace com\bca\openapi\client\entity\oneklikgeneratepaymentotpresponse;

class AdditionalInfo
{
    public $xcoId;
    public $phoneId;
    public $merchantId;

    public function __construct()
    {
    }
}

class ErrorMessage
{
    public $English;
    public $Indonesian;

    public function __construct()
    {
    }
}

class OneklikGeneratePaymentOTPResponse
{
    public $ErrorCode;
    public $ErrorMessage;
    public $responseCode;
    public $responseMessage;
    public $chargeToken;
    public $additionalInfo;

    public function __construct()
    {
        $this->ErrorMessage = new ErrorMessage();
        $this->additionalInfo = new AdditionalInfo();
    }
}
