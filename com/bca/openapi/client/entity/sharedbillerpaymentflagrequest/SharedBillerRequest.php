<?php

namespace com\bca\openapi\client\entity\sharedbillerpaymentflagrequest;

class PaidAmount
{
    public $value;
    public $currency;

    public function __construct()
    {
    }
}

class SharedBillerRequest
{
    public $partnerServiceId;
    public $customerNo;
    public $virtualAccountNo;
    public $inquiryRequestId;
    public $partnerReferenceNo;
    public $paidAmount;
    public $trxDateTime;

    public function __construct()
    {
        $this->paidAmount = new PaidAmount();
    }
}
