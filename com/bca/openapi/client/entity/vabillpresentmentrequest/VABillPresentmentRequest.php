<?php

namespace com\bca\openapi\client\entity\vabillpresentmentrequest;

class Amount
{
    public $value;
    public $currency;

    public function __construct()
    {
    }
}

class VABillPresentmentRequest
{
    public $partnerServiceId;
    public $customerNo;
    public $virtualAccountNo;
    public $trxDateTime;
    public $channelCode;
    public $language;
    public $amount;
    public $sourceAccountNo;
    public $sourceAccountType;

    public function __construct()
    {
        $this->amount = new Amount();
    }
}
