<?php

namespace com\bca\openapi\client\entity\transferinterbankonlresponse;

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

class TransferInterBankONLResponse
{
    public $ErrorCode;
    public $ErrorMessage;
    public $responseCode;
    public $responseMessage;
    public $referenceNo;
    public $partnerReferenceNo;
    public $amount;
    public $beneficiaryAccountNo;
    public $beneficiaryBankCode;
    public $sourceAccountNo;
    public $traceNo;

    public function __construct()
    {
        $this->ErrorMessage = new ErrorMessage();
        $this->amount = new Amount();
    }
}
