<?php

namespace com\bca\openapi\client\entity\oneklikgeneratepaymentotprequest;

class TransAmount
{
    public $value;
    public $currency;

    public function __construct()
    {
    }
}

class AdditionalInfo
{
    public $userId;
    public $transAmount;
    public $phoneId;

    public function __construct()
    {
        $this->transAmount = new TransAmount();
    }
}

class OneklikGeneratePaymentOTPRequest
{
    public $journeyId;
    public $bankCardToken;
    public $merchantId;
    public $partnerReferenceNo;
    public $trxDateTime;
    public $additionalInfo;

    public function __construct()
    {
        $this->additionalInfo = new AdditionalInfo();
    }
}
