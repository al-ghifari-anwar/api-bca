<?php

namespace com\bca\openapi\client\entity\inquiryqrisrequest;

class AdditionalInfo
{
    public $terminalId;
    public $partnerMerchantType;

    public function __construct()
    {
    }
}

class InquiryQRISRequest
{
    public $originalPartnerReferenceNo;
    public $originalReferenceNo;
    public $serviceCode;
    public $merchantId;
    public $subMerchantId;
    public $additionalInfo;

    public function __construct()
    {
        $this->additionalInfo = new AdditionalInfo();
    }
}
