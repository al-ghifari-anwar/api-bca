<?php

namespace com\bca\openapi\client\entity\vapaymentrequest;

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

class AdditionalInfo
{

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
    public $indonesia;

    public function __construct()
    {
    }
}

class BillDetails
{
    public $billCode;
    public $billNo;
    public $billName;
    public $billShortName;
    public $billDescription;
    public $billSubCompany;
    public $billAmount;
    public $additionalInfo;
    public $billReferenceNo;

    public function __construct()
    {
        $this->billDescription = new BillDescription();
        $this->billAmount = new BillAmount();
        $this->additionalInfo = new AdditionalInfo();
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

class CumulativePaymentAmount
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

class VAPaymentRequest
{
	public $partnerServiceId;
    public $customerNo;
    public $referenceNo;
    public $virtualAccountNo;
    public $virtualAccountName;
    public $virtualAccountEmail;
    public $virtualAccountPhone;
    public $sourceAccountNo;
    public $sourceAccountType;
    public $inquiryRequestId;
    public $partnerReferenceNo;
    public $paidAmount;
    public $cumulativePaymentAmount;
    public $paidBills;
    public $totalAmount;
    public $trxDateTime;
    public $journalNum;
    public $paymentType;
    public $flagAdvise;
    public $billDetails;
    public $freeTexts;
    public $feeAmount;

    public function __construct()
    {
        $this->paidAmount = new PaidAmount();
        $this->cumulativePaymentAmount = new CumulativePaymentAmount();
        $this->totalAmount = new TotalAmount();
        $this->billDetails = [new BillDetails()];
        $this->freeTexts = [new FreeTexts()];
        $this->feeAmount = new FeeAmount();
    }
}
