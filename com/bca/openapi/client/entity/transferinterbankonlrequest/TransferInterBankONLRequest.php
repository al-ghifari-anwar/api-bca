<?php

namespace com\bca\openapi\client\entity\transferinterbankonlrequest;

class Amount
{
    public $value;
    public $currency;

    public function __construct()
    {
    }
}

class TransferInterBankONLRequest
{
    public $partnerReferenceNo;
    public $amount;
    public $beneficiaryAccountName;
    public $beneficiaryAccountNo;
    public $beneficiaryAddress;
    public $beneficiaryBankCode;
    public $beneficiaryBankName;
    public $beneficiaryEmail;
    public $currency;
    public $customerReference;
    public $sourceAccountNo;
    public $transactionDate;
    public $feeType;

    public function __construct()
    {
        $this->amount = new Amount();
    }
}
