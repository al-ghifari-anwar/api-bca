<?php

namespace com\bca\openapi\client\entity\transferintrabankresponse;

class AdditionalInfo
{
    public $beneficiaryEmail;
    public $economicActivity;
    public $transactionPurpose;

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

class ErrorMessage
{
    public $English;
    public $Indonesian;

    public function __construct()
    {
    }
}

class TransferIntraBankResponse
{
    public $ErrorCode;
    public $ErrorMessage;
    public $beneficiaryAccountNo;
    public $amount;
    public $referenceNo;
    public $additionalInfo;
    public $partnerReferenceNo;
    public $responseMessage;
    public $sourceAccountNo;
    public $transactionDate;
    public $responseCode;

    public function __construct()
    {
        $this->ErrorMessage = new ErrorMessage();
        $this->amount = new Amount();
        $this->additionalInfo = new AdditionalInfo();
    }
}
