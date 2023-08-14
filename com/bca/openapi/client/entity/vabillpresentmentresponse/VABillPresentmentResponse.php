<?php

namespace com\bca\openapi\client\entity\vabillpresentmentresponse;

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
    public $indonesia;

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

class VirtualAccountData
{
    public $virtualAccountNo;
    public $virtualAccountName;
    public $totalAmount;
    public $billDetails;
    public $freeTexts;
    public $virtualAccountTrxType;
    public $feeAmount;
    public $productName;

    public function __construct()
    {
        $this->totalAmount = new TotalAmount();
        $this->billDetails = [new BillDetails()];
        $this->freeTexts = [new FreeTexts()];
        $this->feeAmount = new FeeAmount();
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

class VABillPresentmentResponse
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
