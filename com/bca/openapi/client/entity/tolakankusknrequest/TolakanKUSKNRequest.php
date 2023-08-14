<?php

namespace com\bca\openapi\client\entity\tolakankusknrequest;

class AdditionalInfo
{
    public $RejectStatusID;
    public $RejectStatusEN;
    public $traceNo;

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

class TolakanKUSKNRequest
{
    public $originalPartnerReferenceNo;
    public $originalReferenceNo;
    public $originalExternalId;
    public $latestTransactionStatus;
    public $amount;
    public $beneficiaryAccountName;
    public $beneficiaryAccountNo;
    public $beneficiaryBankCode;
    public $sourceAccountNo;
    public $transactionDate;
    public $additionalInfo;

    public function __construct()
    {
        $this->amount = new Amount();
        $this->additionalInfo = new AdditionalInfo();
    }
}
