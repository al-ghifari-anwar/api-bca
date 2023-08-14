<?php

namespace com\bca\openapi\client\entity\sharedbillerpaymentflagresponse;

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

class Reason
{
    public $english;
    public $indonesia;

    public function __construct()
    {
    }
}

class AdditionalInfo
{
    public $value;

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
    public $status;
    public $reason;

    public function __construct()
    {
        $this->billDescription = new BillDescription();
        $this->billAmount = new BillAmount();
        $this->additionalInfo = new AdditionalInfo();
        $this->reason = new Reason();
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

class PaymentFlagReason
{
    public $english;
    public $indonesia;

    public function __construct()
    {
    }
}

class VirtualAccountData
{
    public $paymentFlagReason;
    public $partnerServiceId;
    public $customerNo;
    public $virtualAccountNo;
    public $virtualAccountName;
    public $virtualAccountEmail;
    public $virtualAccountPhone;
    public $sourceAccountNo;
    public $sourceAccountType;
    public $inquiryRequestId;
    public $paymentRequestId;
    public $partnerReferenceNo;
    public $referenceNo;
    public $paidAmount;
    public $paidBills;
    public $totalAmount;
    public $trxDateTime;
    public $journalNum;
    public $paymentType;
    public $flagAdvise;
    public $billDetails;
    public $freeTexts;
    public $virtualAccountTrxType;
    public $feeAmount;
    public $productName;
    public $additionalInfo;

    public function __construct()
    {
        $this->paymentFlagReason = new PaymentFlagReason();
        $this->paidAmount = new PaidAmount();
        $this->totalAmount = new TotalAmount();
        $this->billDetails = [new BillDetails()];
        $this->freeTexts = [new FreeTexts()];
        $this->feeAmount = new FeeAmount();
        $this->additionalInfo = new AdditionalInfo();
    }
}

class SharedBillerResponse
{
    public $responseCode;
    public $responseMessage;
    public $virtualAccountData;

    public function __construct()
    {
        $this->virtualAccountData = new VirtualAccountData();
    }
}
