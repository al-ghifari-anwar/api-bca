<?php

namespace com\bca\openapi\client\entity\transferstatusrequest;

class Amount
{
    public $value;
    public $currency;

    public function __construct()
    {
    }
}

class TransferStatusRequest
{
    public $originalPartnerReferenceNo;
    public $originalReferenceNo;
    public $originalExternalId;
    public $serviceCode;
    public $transactionDate;
    public $amount;

    public function __construct()
    {
        $this->amount = new Amount();
    }
}
