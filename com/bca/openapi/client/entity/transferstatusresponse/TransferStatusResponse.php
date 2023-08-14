<?php

namespace com\bca\openapi\client\entity\transferstatusresponse;

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

class TransferStatusResponse
{
    public $ErrorCode;
    public $ErrorMessage;
    public $responseCode;
    public $responseMessage;
    public $originalReferenceNo;
    public $originalPartnerReferenceNo;
    public $originalExternalId;
    public $serviceCode;
    public $transactionDate;
    public $amount;
    public $beneficiaryAccountNo;
    public $beneficiaryBankCode;
    public $currency;
    public $previousResponseCode;
    public $referenceNumber;
    public $sourceAccountNo;
    public $transactionId;
    public $latestTransactionStatus;
    public $transactionStatusDesc;

    public function __construct()
    {
        $this->ErrorMessage = new ErrorMessage();
        $this->amount = new Amount();
    }
}
