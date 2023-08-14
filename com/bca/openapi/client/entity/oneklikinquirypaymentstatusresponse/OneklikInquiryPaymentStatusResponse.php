<?php

namespace com\bca\openapi\client\entity\oneklikinquirypaymentstatusresponse;

class AdditionalInfo
{
    public $paidAmount;

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

class TransAmount
{
    public $value;
    public $currency;

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

class OneklikInquiryPaymentStatusResponse
{
    public $ErrorCode;
    public $ErrorMessage;
    public $responseCode;
    public $responseMessage;
    public $originalReferenceNo;
    public $originalPartnerReferenceNo;
    public $serviceCode;
    public $latestTransactionStatus;
    public $transAmount;
    public $feeAmount;
    public $paidTime;
    public $additionalInfo;

    public function __construct()
    {
        $this->ErrorMessage = new ErrorMessage();
        $this->transAmount = new TransAmount();
        $this->feeAmount = new FeeAmount();
        $this->additionalInfo = new AdditionalInfo();
    }
}
