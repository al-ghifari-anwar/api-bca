<?php

namespace com\bca\openapi\client\entity\transferintrabankrequest;

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

class TransferIntraBankRequest
{
    public $partnerReferenceNo;
    public $amount;
    public $beneficiaryAccountNo;
    public $currency;
    public $customerReference;
    public $feeType;
    public $remark;
    public $sourceAccountNo;
    public $transactionDate;
    public $additionalInfo;

    public function __construct()
    {
        $this->amount = new Amount();
        $this->additionalInfo = new AdditionalInfo();
    }
}
