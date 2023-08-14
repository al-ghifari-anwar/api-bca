<?php

namespace com\bca\openapi\client\entity\oneklikpaymentrequest;

class BillDetails
{
    public $subCompanyCode;
    public $subBillAmount;

    public function __construct()
    {
    }
}

class AdditionalInfo
{
    public $userId;
    public $customerName;
    public $description;
    public $paymentType;
    public $transactionTime;
    public $xcoId;
    public $billDetails;

    public function __construct()
    {
        $this->billDetails = [new BillDetails()];
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

class PayOptionDetails
{
    public $payMethod;
    public $payOption;
    public $transAmount;
    public $feeAmount;

    public function __construct()
    {
        $this->transAmount = new TransAmount();
        $this->feeAmount = new FeeAmount();
    }
}

class OneklikPaymentRequest
{
    public $partnerReferenceNo;
    public $merchantId;
    public $payOptionDetails;
    public $additionalInfo;

    public function __construct()
    {
        $this->payOptionDetails = [new PayOptionDetails()];
        $this->additionalInfo = new AdditionalInfo();
    }
}
