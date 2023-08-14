<?php

namespace com\bca\openapi\client\entity\openapi-qris-generaterequest;

class AdditionalInfo
{
    public $convenienceFee;
    public $partnerMerchantType;
    public $terminalLocationName;

    public function __construct()
    {
    }
}

class FeeAmount
{
    public $value;
    public $currency;

    public function __construct()
    {
    }
}

class Amount
{
    public $value;
    public $currency;

    public function __construct()
    {
    }
}

class OpenAPI-QRIS-GenerateRequest
{
    public $partnerReferenceNo;
    public $amount;
    public $feeAmount;
    public $merchantId;
    public $subMerchantId;
    public $terminalId;
    public $additionalInfo;

    public function __construct()
    {
        $this->amount = new Amount();
        $this->feeAmount = new FeeAmount();
        $this->additionalInfo = new AdditionalInfo();
    }
}
