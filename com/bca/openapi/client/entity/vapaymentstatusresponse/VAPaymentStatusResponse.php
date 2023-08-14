<?php

namespace com\bca\openapi\client\entity\vapaymentstatusresponse;

class FreeTexts
{
    public $indonesia;
    public $english;

    public function __construct()
    {
    }
}

class Reason
{
    public $indonesia;
    public $english;

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
    public $indonesia;
    public $english;

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
    public $indonesia;
    public $english;

    public function __construct()
    {
    }
}

class VirtualAccountData
{
    public $paymentFlagStatus;
    public $paymentFlagReason;
    public $partnerServiceId;
    public $customerNo;
    public $virtualAccountNo;
    public $inquiryRequestId;
    public $paymentRequestId;
    public $paidAmount;
    public $paidBills;
    public $totalAmount;
    public $trxDateTime;
    public $transactionDate;
    public $referenceNo;
    public $paymentType;
    public $flagAdvise;
    public $billDetails;
    public $freeTexts;

    public function __construct()
    {
        $this->paymentFlagReason = new PaymentFlagReason();
        $this->paidAmount = new PaidAmount();
        $this->totalAmount = new TotalAmount();
        $this->billDetails = [new BillDetails()];
        $this->freeTexts = [new FreeTexts()];
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

class VAPaymentStatusResponse
{
    public $ErrorCode;
    public $ErrorMessage;
    public $responseCode;
    public $responseMessage;
    public $virtualAccountData;
    public $additionalInfo;

    public function __construct()
    {
        $this->ErrorMessage = new ErrorMessage();
        $this->virtualAccountData = new VirtualAccountData();
        $this->additionalInfo = new AdditionalInfo();
    }
}
