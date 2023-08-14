<?php

namespace com\bca\openapi\client\entity\vapaymentresponse;

class FeeAmount
{
    public $value;
    public $currency;

    public function __construct()
    {
    }
}

class FreeTexts
{
    public $english;
    public $indonesian;

    public function __construct()
    {
    }
}

class BillAmount
{
    public $value;
    public $currency;

    public function __construct()
    {
    }
}

class BillDescription
{
    public $english;
    public $indonesian;

    public function __construct()
    {
    }
}

class BillDetails
{
    public $billDescription;
    public $billAmount;

    public function __construct()
    {
        $this->billDescription = new BillDescription();
        $this->billAmount = new BillAmount();
    }
}

class TotalAmount
{
    public $value;
    public $currency;

    public function __construct()
    {
    }
}

class PaidAmount
{
    public $value;
    public $currency;

    public function __construct()
    {
    }
}

class VirtualAccountData
{
    public $virtualAccountNo;
    public $virtualAccountName;
    public $virtualAccountEmail;
    public $sourceAccountNo;
    public $partnerReferenceNo;
    public $referenceNumber;
    public $paidAmount;
    public $totalAmount;
    public $trxDateTime;
    public $billDetails;
    public $freeText;
    public $feeAmount;
    public $productName;

    public function __construct()
    {
        $this->paidAmount = new PaidAmount();
        $this->totalAmount = new TotalAmount();
        $this->billDetails = [new BillDetails()];
        $this->freeText = [new FreeTexts()];
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

class VAPaymentResponse
{
    public $ErrorCode;
    public $ErrorMessage;
    public $responseCode;
    public $responseMessage;
    public $virtualAccountData;

    public function __construct()
    {
        $this->ErrorMessage = new ErrorMessage();
        $this->virtualAccountData = new VirtualAccountData();
    }
}
