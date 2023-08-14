<?php

namespace com\bca\openapi\client\entity\transferinterbanksknrequest;

class Amount
{
    public $value;
    public $currency;

    public function __construct()
    {
    }
}

class TransferInterBankSKNRequest
{
    public $partnerReferenceNo;
    public $amount;
    public $beneficiaryAccountName;
    public $beneficiaryAccountNo;
    public $beneficiaryAddress;
    public $beneficiaryBankCode;
    public $beneficiaryBankName;
    public $beneficiaryCustomerResidence;
    public $beneficiaryCustomerType;
    public $beneficiaryEmail;
    public $currency;
    public $customerReference;
    public $feeType;
    public $kodepos;
    public $receiverPhone;
    public $remark;
    public $senderCustomerResidence;
    public $senderCustomerType;
    public $senderPhone;
    public $sourceAccountNo;
    public $transactionDate;

    public function __construct()
    {
        $this->amount = new Amount();
    }
}
