<?php

namespace com\bca\openapi\client\entity\inquiryqrisresponse;

class MerchantInfo
{
    public $terminalId;
    public $merchantId;
    public $subMerchantId;
    public $merchantType;
    public $merchantPan;
    public $name;
    public $city;
    public $postalCode;
    public $country;
    public $paymentChannelName;

    public function __construct()
    {
    }
}

class AdditionalInfo
{
    public $referenceNumber;
    public $approvalCode;
    public $payerPhoneNumber;
    public $batchNumber;
    public $convenienceFee;
    public $issuerReferenceNumber;
    public $payerName;
    public $customerPan;
    public $issuerName;
    public $acquirerName;
    public $merchantInfo;

    public function __construct()
    {
        $this->merchantInfo = new MerchantInfo();
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

class InquiryQRISResponse
{
    public $ErrorCode;
    public $ErrorMessage;
    public $responseCode;
    public $responseMessage;
    public $originalPartnerReferenceNo;
    public $originalReferenceNo;
    public $originalExternalId;
    public $serviceCode;
    public $latestTransactionStatus;
    public $transactionStatusDesc;
    public $paidTime;
    public $amount;
    public $feeAmount;
    public $additionalInfo;

    public function __construct()
    {
        $this->ErrorMessage = new ErrorMessage();
        $this->amount = new Amount();
        $this->feeAmount = new FeeAmount();
        $this->additionalInfo = new AdditionalInfo();
    }
}
