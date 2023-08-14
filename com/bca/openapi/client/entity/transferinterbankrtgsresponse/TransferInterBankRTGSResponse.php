<?php

namespace com\bca\openapi\client\entity\transferinterbankrtgsresponse;

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

class TransferInterBankRTGSResponse
{
    public $ErrorCode;
    public $ErrorMessage;
    public $responseCode;
    public $responseMessage;
    public $referenceNo;
    public $partnerReferenceNo;
    public $amount;
    public $beneficiaryAccountName;
    public $beneficiaryAccountNo;
    public $beneficiaryAccountType;
    public $beneficiaryBankCode;
    public $currency;
    public $sourceAccountNo;
    public $traceNo;
    public $transactionDate;
    public $transactionStatus;
    public $transactionStatusDesc;

    public function __construct()
    {
        $this->ErrorMessage = new ErrorMessage();
        $this->amount = new Amount();
    }
}
